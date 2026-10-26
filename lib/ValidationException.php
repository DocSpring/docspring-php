<?php

namespace DocSpring;

/**
 * Thrown before a request is sent when the API would reject it with a 422. getDetails() returns the API's error
 * details: arrays with 'code', 'message' and a 'pointer' into the body (or a 'parameter' for a query parameter).
 */
class ValidationException extends \InvalidArgumentException
{
    /** @var array<int, array<string, string>> */
    private array $details;

    /** @param array<int, array<string, string>> $details */
    public function __construct(array $details)
    {
        $this->details = $details;
        $shown = [];
        foreach (array_slice($details, 0, 3) as $detail) {
            $subject = ($detail['pointer'] ?? null) === '' ? 'the request body' : ($detail['pointer'] ?? $detail['parameter'] ?? '');
            $shown[] = "{$subject} {$detail['message']}";
        }
        $message = 'Invalid request: ' . implode('; ', $shown);
        if (count($details) > 3) {
            $message .= ' (and ' . (count($details) - 3) . ' more)';
        }
        parent::__construct($message);
    }

    /** @return array<int, array<string, string>> */
    public function getDetails(): array
    {
        return $this->details;
    }
}
