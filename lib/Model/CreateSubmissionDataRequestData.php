<?php
/**
 * CreateSubmissionDataRequestData
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocSpring
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * DocSpring API
 *
 * DocSpring provides an API that helps you fill out and sign PDF templates.
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.11.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace DocSpring\Model;

use \ArrayAccess;
use \DocSpring\ObjectSerializer;

/**
 * CreateSubmissionDataRequestData Class Doc Comment
 *
 * @category Class
 * @package  DocSpring
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateSubmissionDataRequestData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'create_submission_data_request_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'auth_second_factor_type' => 'string',
        'auth_type' => 'string',
        'fields' => 'string[]',
        'metadata' => 'object',
        'order' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'auth_second_factor_type' => null,
        'auth_type' => null,
        'fields' => null,
        'metadata' => null,
        'order' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'auth_second_factor_type' => false,
        'auth_type' => false,
        'fields' => false,
        'metadata' => false,
        'order' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'auth_second_factor_type' => 'auth_second_factor_type',
        'auth_type' => 'auth_type',
        'fields' => 'fields',
        'metadata' => 'metadata',
        'order' => 'order'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auth_second_factor_type' => 'setAuthSecondFactorType',
        'auth_type' => 'setAuthType',
        'fields' => 'setFields',
        'metadata' => 'setMetadata',
        'order' => 'setOrder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auth_second_factor_type' => 'getAuthSecondFactorType',
        'auth_type' => 'getAuthType',
        'fields' => 'getFields',
        'metadata' => 'getMetadata',
        'order' => 'getOrder'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const AUTH_SECOND_FACTOR_TYPE_NONE = 'none';
    public const AUTH_SECOND_FACTOR_TYPE_PHONE_NUMBER = 'phone_number';
    public const AUTH_SECOND_FACTOR_TYPE_TOTP = 'totp';
    public const AUTH_SECOND_FACTOR_TYPE_MOBILE_PUSH = 'mobile_push';
    public const AUTH_SECOND_FACTOR_TYPE_SECURITY_KEY = 'security_key';
    public const AUTH_SECOND_FACTOR_TYPE_FINGERPRINT = 'fingerprint';
    public const AUTH_TYPE_NONE = 'none';
    public const AUTH_TYPE_PASSWORD = 'password';
    public const AUTH_TYPE_OAUTH = 'oauth';
    public const AUTH_TYPE_EMAIL_LINK = 'email_link';
    public const AUTH_TYPE_PHONE_NUMBER = 'phone_number';
    public const AUTH_TYPE_LDAP = 'ldap';
    public const AUTH_TYPE_SAML = 'saml';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAuthSecondFactorTypeAllowableValues()
    {
        return [
            self::AUTH_SECOND_FACTOR_TYPE_NONE,
            self::AUTH_SECOND_FACTOR_TYPE_PHONE_NUMBER,
            self::AUTH_SECOND_FACTOR_TYPE_TOTP,
            self::AUTH_SECOND_FACTOR_TYPE_MOBILE_PUSH,
            self::AUTH_SECOND_FACTOR_TYPE_SECURITY_KEY,
            self::AUTH_SECOND_FACTOR_TYPE_FINGERPRINT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAuthTypeAllowableValues()
    {
        return [
            self::AUTH_TYPE_NONE,
            self::AUTH_TYPE_PASSWORD,
            self::AUTH_TYPE_OAUTH,
            self::AUTH_TYPE_EMAIL_LINK,
            self::AUTH_TYPE_PHONE_NUMBER,
            self::AUTH_TYPE_LDAP,
            self::AUTH_TYPE_SAML,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('auth_second_factor_type', $data ?? [], null);
        $this->setIfExists('auth_type', $data ?? [], null);
        $this->setIfExists('fields', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAuthSecondFactorTypeAllowableValues();
        if (!is_null($this->container['auth_second_factor_type']) && !in_array($this->container['auth_second_factor_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'auth_second_factor_type', must be one of '%s'",
                $this->container['auth_second_factor_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAuthTypeAllowableValues();
        if (!is_null($this->container['auth_type']) && !in_array($this->container['auth_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'auth_type', must be one of '%s'",
                $this->container['auth_type'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets auth_second_factor_type
     *
     * @return string|null
     */
    public function getAuthSecondFactorType()
    {
        return $this->container['auth_second_factor_type'];
    }

    /**
     * Sets auth_second_factor_type
     *
     * @param string|null $auth_second_factor_type auth_second_factor_type
     *
     * @return self
     */
    public function setAuthSecondFactorType($auth_second_factor_type)
    {
        if (is_null($auth_second_factor_type)) {
            throw new \InvalidArgumentException('non-nullable auth_second_factor_type cannot be null');
        }
        $allowedValues = $this->getAuthSecondFactorTypeAllowableValues();
        if (!in_array($auth_second_factor_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'auth_second_factor_type', must be one of '%s'",
                    $auth_second_factor_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['auth_second_factor_type'] = $auth_second_factor_type;

        return $this;
    }

    /**
     * Gets auth_type
     *
     * @return string|null
     */
    public function getAuthType()
    {
        return $this->container['auth_type'];
    }

    /**
     * Sets auth_type
     *
     * @param string|null $auth_type auth_type
     *
     * @return self
     */
    public function setAuthType($auth_type)
    {
        if (is_null($auth_type)) {
            throw new \InvalidArgumentException('non-nullable auth_type cannot be null');
        }
        $allowedValues = $this->getAuthTypeAllowableValues();
        if (!in_array($auth_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'auth_type', must be one of '%s'",
                    $auth_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['auth_type'] = $auth_type;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return string[]|null
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param string[]|null $fields fields
     *
     * @return self
     */
    public function setFields($fields)
    {
        if (is_null($fields)) {
            throw new \InvalidArgumentException('non-nullable fields cannot be null');
        }
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return object|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object|null $metadata metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets order
     *
     * @return int|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param int|null $order order
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $this->container['order'] = $order;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


