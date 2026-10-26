<?php

namespace DocSpring;

/**
 * Checks a request against API v2's request schemas (RequestSchemas::JSON, the schemas the API validates requests
 * with) before it's sent, and says what the API would say about it. api_clients/validator_conformance checks that it
 * agrees with the API. JSON objects are stdClass objects and JSON arrays are PHP lists, as json_decode() gives them.
 */
final class RequestValidator
{
    private const TYPE_NAMES = [
        'string' => 'a string',
        'integer' => 'an integer',
        'number' => 'a number',
        'boolean' => 'true or false',
        'object' => 'an object',
        'array' => 'an array',
        'null' => 'null',
    ];
    // What a multipart body's file field holds when the API checks it
    private const FILE_PLACEHOLDER = '(file)';
    // A date and time as the API reads it (Ruby's DateTime.rfc3339, then json_schemer's checks)
    private const DATE_TIME = '/\A[ \t\n\v\f\r]*(-?\d{4})-(\d{2})-(\d{2})[Tt \t\n\v\f\r](\d{2}):(\d{2}):(\d{2})(?:\.\d+)?(?:[Zz]|([+-])(\d{2}):(\d{2}))\z/';
    // An absolute URI as the API reads it (RFC 3986, as Ruby's URI parser has it), a little looser for IP addresses
    // Lookaheads check the escapes, so only character classes repeat: Java and PHP recurse on each repetition of a group
    private const SEGMENT = '[%!$&-.0-9:;=@A-Z_a-z~\/]';

    private static ?\stdClass $schemas = null;
    /** @var array<string, string> */
    private static array $patterns = [];

    public static function schemas(): \stdClass
    {
        if (self::$schemas === null) {
            self::$schemas = json_decode(RequestSchemas::JSON, false, 512, JSON_THROW_ON_ERROR);
        }
        return self::$schemas;
    }

    /**
     * Throws a ValidationException when the API would reject a request to an operation (createSubmission).
     * $queryParams are the query string's values; $body is the JSON the SDK sends, or a multipart body's params.
     *
     * @param array<string, mixed> $queryParams
     * @param string|array<string, mixed>|null $body
     */
    public static function validateRequest(string $operationId, array $queryParams, $body): void
    {
        $operations = self::schemas()->operations;
        if (!isset($operations->{$operationId})) {
            return;
        }
        if (is_string($body)) {
            $body = $body === '' ? null : json_decode($body, false, 512, JSON_THROW_ON_ERROR);
        } elseif (is_array($body)) {
            $values = new \stdClass();
            foreach ($body as $name => $value) {
                $values->{$name} = is_scalar($value) || $value === null ? $value : self::FILE_PLACEHOLDER;
            }
            $body = $values;
        }
        $query = new \stdClass();
        foreach ($queryParams as $name => $value) {
            $query->{$name} = $value;
        }
        $details = self::errors($operationId, $query, $body);
        if (count($details) > 0) {
            throw new ValidationException($details);
        }
    }

    /**
     * The details for a request to an operation (createSubmission)
     *
     * @return array<int, array<string, string>>
     */
    public static function errors(string $operationId, ?\stdClass $query, $body): array
    {
        $entry = self::schemas()->operations->{$operationId};
        $details = [];
        if (isset($entry->query) && $query !== null && count(get_object_vars($query)) > 0) {
            $properties = new \stdClass();
            $required = [];
            foreach (get_object_vars($entry->query) as $name => $param) {
                $properties->{$name} = $param->schema;
                if ($param->required) {
                    $required[] = $name;
                }
            }
            $schema = (object) ['type' => 'object', 'properties' => $properties, 'required' => $required, 'additionalProperties' => false];
            $details = array_merge($details, self::validateParams($schema, $query, 'query'));
        }
        if (isset($entry->body) && $body !== null) {
            if ($entry->body->mediaType === 'multipart/form-data') {
                $details = array_merge($details, self::validateParams($entry->body->schema, $body, 'body'));
            } else {
                $details = array_merge($details, self::validate($entry->body->schema, $body, 'body'));
            }
        }
        return $details;
    }

    /**
     * The details for $data checked against $schema at $location (body or query)
     *
     * @return array<int, array<string, string>>
     */
    public static function validate($schema, $data, string $location): array
    {
        $details = [];
        self::check($schema, $data, '', $location, $details);
        return $details;
    }

    // Query and multipart params arrive as strings, which the API converts where the schema types them
    private static function validateParams(\stdClass $schema, $data, string $location): array
    {
        $properties = $schema->properties ?? new \stdClass();
        $converted = new \stdClass();
        foreach (get_object_vars($data) as $name => $value) {
            $converted->{$name} = self::convertParam($value, $properties->{$name} ?? null);
        }
        return self::validate($schema, $converted, $location);
    }

    private static function convertParam($value, $schema)
    {
        if (!$schema instanceof \stdClass) {
            return $value;
        }
        $types = self::types($schema);
        if (is_array($value) && in_array('array', $types, true)) {
            return array_map(fn ($item) => self::convertParam($item, $schema->items ?? null), $value);
        }
        if (!is_string($value)) {
            return $value;
        }
        if (in_array('integer', $types, true) && preg_match('/\A-?[0-9]+\z/', $value)) {
            return intval($value, 10);
        }
        if (in_array('number', $types, true) && preg_match('/\A-?[0-9]+(?:\.[0-9]+)?\z/', $value)) {
            return str_contains($value, '.') ? floatval($value) : intval($value, 10);
        }
        if (in_array('boolean', $types, true) && ($value === 'true' || $value === 'false')) {
            return $value === 'true';
        }
        return $value;
    }

    /** @return array<int, string> */
    private static function types(\stdClass $schema): array
    {
        if (!isset($schema->type)) {
            return [];
        }
        return is_array($schema->type) ? $schema->type : [$schema->type];
    }

    private static function resolve($schema)
    {
        while ($schema instanceof \stdClass && isset($schema->{'$ref'})) {
            $name = str_replace('#/components/schemas/', '', $schema->{'$ref'});
            $schema = self::schemas()->components->schemas->{$name};
        }
        return $schema;
    }

    private static function check($schema, $data, string $pointer, string $location, array &$details): void
    {
        $schema = self::resolve($schema);
        if (!$schema instanceof \stdClass) {
            return;
        }
        if (property_exists($schema, 'discriminator')) {
            self::checkUnion($schema->discriminator, $data, $pointer, $location, $details);
            return;
        }

        if (property_exists($schema, 'type')) {
            $matches = false;
            foreach (self::types($schema) as $type) {
                $matches = $matches || self::isType($data, $type);
            }
            if (!$matches) {
                $message = $pointer === '' && $location === 'body' ? 'must be a JSON object' : self::typeMessage(self::types($schema));
                $details[] = self::detail($location, $pointer, 'type', $message);
            }
        }
        if (property_exists($schema, 'enum')) {
            $found = false;
            foreach ($schema->enum as $value) {
                $found = $found || self::jsonEqual($value, $data);
            }
            if (!$found) {
                $values = implode(', ', array_map(fn ($value) => self::toJson($value), $schema->enum));
                $details[] = self::detail($location, $pointer, 'enum', "must be one of: {$values}");
            }
        }
        if (property_exists($schema, 'const') && !self::jsonEqual($schema->const, $data)) {
            $details[] = self::detail($location, $pointer, 'const', 'must be ' . self::toJson($schema->const));
        }

        if (is_string($data)) {
            self::checkString($schema, $data, $pointer, $location, $details);
        } elseif (is_int($data) || is_float($data)) {
            self::checkNumber($schema, $data, $pointer, $location, $details);
        } elseif (is_array($data)) {
            self::checkArray($schema, $data, $pointer, $location, $details);
        } elseif ($data instanceof \stdClass) {
            self::checkObject($schema, $data, $pointer, $location, $details);
        }
    }

    // A union (oneOf with a discriminator): the discriminator property's value picks the variant, and only that one is
    // checked, as the API does. The mapping is [value, $ref] pairs, in the order the API lists them.
    private static function checkUnion(\stdClass $discriminator, $data, string $pointer, string $location, array &$details): void
    {
        if (!$data instanceof \stdClass) {
            $details[] = self::detail($location, $pointer, 'type', 'must be ' . self::TYPE_NAMES['object']);
            return;
        }

        $name = $discriminator->propertyName;
        $child = "{$pointer}/" . self::escape($name);
        if (!property_exists($data, $name)) {
            $details[] = self::detail($location, $child, 'required', 'is required');
            return;
        }

        $value = $data->{$name};
        foreach ($discriminator->mapping as [$candidate, $ref]) {
            if (is_string($value) && $candidate === $value) {
                self::check((object) ['$ref' => $ref], $data, $pointer, $location, $details);
                return;
            }
        }
        $values = implode(', ', array_map(fn ($pair) => self::toJson($pair[0]), $discriminator->mapping));
        $details[] = self::detail($location, $child, 'enum', "must be one of: {$values}");
    }

    private static function checkString(\stdClass $schema, string $data, string $pointer, string $location, array &$details): void
    {
        $length = preg_match_all('/./su', $data);
        if (isset($schema->minLength) && $length < $schema->minLength) {
            $message = self::atLeast($schema->minLength, 'must be at least ' . self::count($schema->minLength, 'character'));
            $details[] = self::detail($location, $pointer, 'minLength', $message);
        }
        if (isset($schema->maxLength) && $length > $schema->maxLength) {
            $details[] = self::detail($location, $pointer, 'maxLength', 'must be at most ' . self::count($schema->maxLength, 'character'));
        }
        if (isset($schema->pattern) && !preg_match(self::pattern($schema->pattern), $data)) {
            $message = $schema->{'x-pattern-message'} ?? "must match the pattern {$schema->pattern}";
            $details[] = self::detail($location, $pointer, 'pattern', $message);
        }
        if (isset($schema->format) && !self::format($schema->format, $data)) {
            $message = self::schemas()->formatMessages->{$schema->format} ?? "must be a valid {$schema->format}";
            $details[] = self::detail($location, $pointer, 'format', $message);
        }
    }

    private static function checkNumber(\stdClass $schema, $data, string $pointer, string $location, array &$details): void
    {
        if (isset($schema->minimum) && $data < $schema->minimum) {
            $details[] = self::detail($location, $pointer, 'minimum', 'must be at least ' . self::number($schema->minimum));
        }
        if (isset($schema->maximum) && $data > $schema->maximum) {
            $details[] = self::detail($location, $pointer, 'maximum', 'must be at most ' . self::number($schema->maximum));
        }
        if (isset($schema->exclusiveMinimum) && $data <= $schema->exclusiveMinimum) {
            $details[] = self::detail($location, $pointer, 'exclusiveMinimum', 'must be greater than ' . self::number($schema->exclusiveMinimum));
        }
        if (isset($schema->exclusiveMaximum) && $data >= $schema->exclusiveMaximum) {
            $details[] = self::detail($location, $pointer, 'exclusiveMaximum', 'must be less than ' . self::number($schema->exclusiveMaximum));
        }
    }

    private static function checkArray(\stdClass $schema, array $data, string $pointer, string $location, array &$details): void
    {
        $size = count($data);
        if (isset($schema->minItems) && $size < $schema->minItems) {
            $message = self::atLeast($schema->minItems, 'must have at least ' . self::count($schema->minItems, 'item'));
            $details[] = self::detail($location, $pointer, 'minItems', $message);
        }
        if (isset($schema->maxItems) && $size > $schema->maxItems) {
            $details[] = self::detail($location, $pointer, 'maxItems', 'must have at most ' . self::count($schema->maxItems, 'item'));
        }
        if (!empty($schema->uniqueItems) && !self::unique($data)) {
            $duplicate = self::firstDuplicate($data);
            $message = $duplicate !== null ? 'has ' . self::toJson($duplicate[0]) . ' more than once' : "can't contain the same item twice";
            $details[] = self::detail($location, $pointer, 'uniqueItems', $message);
        }
        if (isset($schema->items)) {
            foreach (array_values($data) as $index => $item) {
                self::check($schema->items, $item, "{$pointer}/{$index}", $location, $details);
            }
        }
    }

    private static function checkObject(\stdClass $schema, \stdClass $data, string $pointer, string $location, array &$details): void
    {
        foreach ($schema->required ?? [] as $name) {
            if (!property_exists($data, $name)) {
                $details[] = self::detail($location, "{$pointer}/" . self::escape($name), 'required', 'is required');
            }
        }

        $properties = $schema->properties ?? new \stdClass();
        $additional = property_exists($schema, 'additionalProperties') ? $schema->additionalProperties : null;
        foreach (get_object_vars($data) as $name => $value) {
            $name = (string) $name;
            $child = "{$pointer}/" . self::escape($name);
            if (property_exists($properties, $name)) {
                self::check($properties->{$name}, $value, $child, $location, $details);
            } elseif ($additional === false) {
                $details[] = self::unknownProperty($schema, $name, $child, $location);
            } elseif ($additional instanceof \stdClass) {
                self::check($additional, $value, $child, $location, $details);
            }
        }
    }

    private static function unknownProperty(\stdClass $schema, string $name, string $pointer, string $location): array
    {
        $notAllowed = $schema->{'x-not-allowed-properties'}->{$name} ?? null;
        if ($notAllowed !== null) {
            return self::detail($location, $pointer, 'not_allowed', $notAllowed);
        }

        $noun = $location === 'query' ? 'query parameter' : 'property';
        $custom = $schema->{'x-unknown-property-message'} ?? null;
        $message = $custom ?? "isn't a documented {$noun}";
        $snake = self::underscore($name);
        if ($snake !== $name && property_exists($schema->properties ?? new \stdClass(), $snake)) {
            $plural = $custom !== null ? 'settings' : ($noun === 'property' ? 'properties' : 'query parameters');
            $message .= ". API v2 names {$plural} in snake_case: '{$snake}'";
        }
        return self::detail($location, $pointer, 'unknown_property', $message);
    }

    private static function detail(string $location, string $pointer, string $code, string $message): array
    {
        if ($location !== 'query') {
            return ['code' => $code, 'message' => $message, 'pointer' => $pointer];
        }
        $parameter = str_replace(['~1', '~0'], ['/', '~'], explode('/', substr($pointer, 1))[0]);
        return ['code' => $code, 'message' => $message, 'parameter' => $parameter];
    }

    private static function isType($data, string $type): bool
    {
        switch ($type) {
            case 'string':
                return is_string($data);
            case 'integer':
                return is_int($data) || (is_float($data) && is_finite($data) && floor($data) == $data);
            case 'number':
                return is_int($data) || is_float($data);
            case 'boolean':
                return is_bool($data);
            case 'object':
                return $data instanceof \stdClass;
            case 'array':
                return is_array($data);
            case 'null':
                return $data === null;
            default:
                return false;
        }
    }

    // Patterns are ECMA-262 regexps, as OpenAPI says: ^ and $ are the start and end of the value, not of a line. The
    // API's patterns only use ^ as the first character and $ as the last (api_clients/scripts/extract_request_schemas).
    private static function pattern(string $pattern): string
    {
        if (!isset(self::$patterns[$pattern])) {
            $anchored = str_starts_with($pattern, '^') ? '\\A' . substr($pattern, 1) : $pattern;
            // A $ after an even number of backslashes is the anchor
            if (preg_match('/(?<!\\\\)(?:\\\\\\\\)*\\$$/D', $anchored)) {
                $anchored = substr($anchored, 0, -1) . '\\z';
            }
            self::$patterns[$pattern] = "\x01" . $anchored . "\x01u";
        }
        return self::$patterns[$pattern];
    }

    private static function format(string $format, string $data): bool
    {
        if ($format === 'uri') {
            return !preg_match('/[^\x00-\x7f]|[ \t\n\v\f\r]/', $data) && preg_match(self::uriPattern(), $data) === 1;
        }
        if ($format === 'date-time') {
            return self::dateTime($data);
        }
        return true;
    }

    private static function uriPattern(): string
    {
        $segment = self::SEGMENT;
        return '/\A(?![^?#]*%(?![0-9A-Fa-f]{2}))[A-Za-z][+\-.0-9A-Za-z]*:'
            . '(?:\/\/(?:[%!$&-.0-9:;=A-Z_a-z~]*@)?'
            . '(?:\[(?:[0-9A-Fa-f:.]+|[vV][0-9A-Fa-f]+\.[!$&-.0-9:;=A-Z_a-z~]+)\]|[%!$&-.0-9;=A-Z_a-z~]*)'
            . "(?::[0-9]*)?(?:\\/{$segment}*)?"
            . "|\\/(?:(?!\\/){$segment}+)?"
            . "|(?!\\/){$segment}+"
            . '|)'
            . '(?:\?[^#]*)?'
            . '(?:#(?![^#]*%(?![0-9A-Fa-f]{2}))[%!$&-.0-9:;=@A-Z_a-z~\/?]*)?\z/';
    }

    private static function dateTime(string $data): bool
    {
        if (!preg_match(self::DATE_TIME, $data, $match)) {
            return false;
        }
        [$year, $month, $day, $hour, $minute, $second] = array_map(fn ($value) => intval($value, 10), array_slice($match, 1, 6));
        if ($month < 1 || $month > 12 || $day < 1 || $day > self::daysInMonth($year, $month)) {
            return false;
        }
        if ($hour > 23 || $minute > 59 || $second > 60) {
            return false;
        }
        $offset = 0;
        if (($match[7] ?? '') !== '') {
            $offsetHours = intval($match[8], 10);
            $offsetMinutes = intval($match[9], 10);
            if ($offsetHours > 23 || $offsetMinutes > 59) {
                return false;
            }
            $offset = ($match[7] === '-' ? -1 : 1) * ($offsetHours * 60 + $offsetMinutes);
        }
        // A leap second is only at the end of a UTC day
        return $second < 60 || ((($hour * 60 + $minute - $offset) % 1440) + 1440) % 1440 === 1439;
    }

    // Before the Gregorian calendar (1582), the API's dates are Julian: every fourth year is a leap year
    private static function daysInMonth(int $year, int $month): int
    {
        $leap = $year % 4 === 0 && ($year < 1583 || $year % 100 !== 0 || $year % 400 === 0);
        if ($month === 2 && $leap) {
            return 29;
        }
        return [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31][$month - 1];
    }

    private static function unique(array $data): bool
    {
        $items = array_values($data);
        $count = count($items);
        for ($i = 0; $i < $count; $i++) {
            for ($j = $i + 1; $j < $count; $j++) {
                if (self::jsonEqual($items[$i], $items[$j])) {
                    return false;
                }
            }
        }
        return true;
    }

    // The API names the first value that it counts twice, counting 1 and 1.0 as different values (Ruby's tally)
    private static function firstDuplicate(array $data): ?array
    {
        $counts = [];
        $firsts = [];
        foreach ($data as $item) {
            $key = self::tallyKey($item);
            if (!isset($counts[$key])) {
                $counts[$key] = 0;
                $firsts[$key] = $item;
            }
            $counts[$key]++;
        }
        foreach ($counts as $key => $times) {
            if ($times > 1) {
                return [$firsts[$key]];
            }
        }
        return null;
    }

    private static function tallyKey($value): string
    {
        if (is_array($value)) {
            return '[' . implode(',', array_map(fn ($item) => self::tallyKey($item), $value)) . ']';
        }
        if ($value instanceof \stdClass) {
            $entries = [];
            foreach (get_object_vars($value) as $name => $item) {
                $entries[(string) $name] = json_encode((string) $name) . ':' . self::tallyKey($item);
            }
            ksort($entries, SORT_STRING);
            return '{' . implode(',', $entries) . '}';
        }
        if (is_float($value)) {
            return 'f' . self::toJson($value);
        }
        return self::toJson($value);
    }

    // JSON equality: numbers by value, objects regardless of key order
    private static function jsonEqual($left, $right): bool
    {
        $leftNumber = is_int($left) || is_float($left);
        $rightNumber = is_int($right) || is_float($right);
        if ($leftNumber || $rightNumber) {
            return $leftNumber && $rightNumber && $left == $right;
        }
        if ($left instanceof \stdClass && $right instanceof \stdClass) {
            $leftVars = get_object_vars($left);
            $rightVars = get_object_vars($right);
            if (count($leftVars) !== count($rightVars)) {
                return false;
            }
            foreach ($leftVars as $name => $value) {
                if (!array_key_exists($name, $rightVars) || !self::jsonEqual($value, $rightVars[$name])) {
                    return false;
                }
            }
            return true;
        }
        if (is_array($left) && is_array($right)) {
            $left = array_values($left);
            $right = array_values($right);
            if (count($left) !== count($right)) {
                return false;
            }
            foreach ($left as $index => $value) {
                if (!self::jsonEqual($value, $right[$index])) {
                    return false;
                }
            }
            return true;
        }
        return $left === $right;
    }

    private static function typeMessage(array $types): string
    {
        $names = array_map(fn ($type) => self::TYPE_NAMES[$type] ?? $type, $types);
        $connector = ' or ';
        foreach ($names as $name) {
            if (count($names) > 1 && str_contains($name, ' or ')) {
                $connector = ', or ';
            }
        }
        if (count($names) === 1) {
            return "must be {$names[0]}";
        }
        if (count($names) === 2) {
            return 'must be ' . implode($connector, $names);
        }
        return 'must be ' . implode(', ', array_slice($names, 0, -1)) . $connector . $names[count($names) - 1];
    }

    private static function atLeast($limit, string $message): string
    {
        return $limit == 1 ? "can't be empty" : $message;
    }

    private static function count($number, string $noun): string
    {
        return self::number($number) . ' ' . ($number == 1 ? $noun : "{$noun}s");
    }

    // A number as the API writes it: 1 and 1.5 as they are, 2.0 as 2.0
    private static function number($number): string
    {
        if (is_float($number) && floor($number) == $number && is_finite($number)) {
            return sprintf('%.1f', $number);
        }
        return (string) $number;
    }

    private static function toJson($value): string
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRESERVE_ZERO_FRACTION);
    }

    private static function escape(string $token): string
    {
        return str_replace(['~', '/'], ['~0', '~1'], $token);
    }

    private static function underscore(string $name): string
    {
        $name = preg_replace('/([A-Z\d]+)([A-Z][a-z])/', '$1_$2', $name);
        $name = preg_replace('/([a-z\d])([A-Z])/', '$1_$2', $name);
        return strtolower(str_replace('-', '_', $name));
    }
}
