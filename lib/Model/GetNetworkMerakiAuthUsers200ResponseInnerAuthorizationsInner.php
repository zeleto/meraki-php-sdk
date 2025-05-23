<?php
/**
 * GetNetworkMerakiAuthUsers200ResponseInnerAuthorizationsInner
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Meraki
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Meraki Dashboard API
 *
 * A RESTful API to programmatically manage and monitor Cisco Meraki networks at scale.  > Date: 02 April, 2025 > > [Recent Updates](https://meraki.io/whats-new/)  ---  [API Documentation](https://meraki.io/api)  [Community Support](https://meraki.io/community)  [Meraki Homepage](https://www.meraki.com)
 *
 * The version of the OpenAPI document: 1.57.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Meraki\Model;

use \ArrayAccess;
use \Meraki\ObjectSerializer;

/**
 * GetNetworkMerakiAuthUsers200ResponseInnerAuthorizationsInner Class Doc Comment
 *
 * @category Class
 * @package  Meraki
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetNetworkMerakiAuthUsers200ResponseInnerAuthorizationsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getNetworkMerakiAuthUsers_200_response_inner_authorizations_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ssid_number' => 'int',
        'authorized_zone' => 'string',
        'expires_at' => '\DateTime',
        'authorized_by_name' => 'string',
        'authorized_by_email' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ssid_number' => null,
        'authorized_zone' => null,
        'expires_at' => 'date-time',
        'authorized_by_name' => null,
        'authorized_by_email' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ssid_number' => false,
        'authorized_zone' => false,
        'expires_at' => false,
        'authorized_by_name' => false,
        'authorized_by_email' => false
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
        'ssid_number' => 'ssidNumber',
        'authorized_zone' => 'authorizedZone',
        'expires_at' => 'expiresAt',
        'authorized_by_name' => 'authorizedByName',
        'authorized_by_email' => 'authorizedByEmail'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ssid_number' => 'setSsidNumber',
        'authorized_zone' => 'setAuthorizedZone',
        'expires_at' => 'setExpiresAt',
        'authorized_by_name' => 'setAuthorizedByName',
        'authorized_by_email' => 'setAuthorizedByEmail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ssid_number' => 'getSsidNumber',
        'authorized_zone' => 'getAuthorizedZone',
        'expires_at' => 'getExpiresAt',
        'authorized_by_name' => 'getAuthorizedByName',
        'authorized_by_email' => 'getAuthorizedByEmail'
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
        $this->setIfExists('ssid_number', $data ?? [], null);
        $this->setIfExists('authorized_zone', $data ?? [], null);
        $this->setIfExists('expires_at', $data ?? [], null);
        $this->setIfExists('authorized_by_name', $data ?? [], null);
        $this->setIfExists('authorized_by_email', $data ?? [], null);
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
     * Gets ssid_number
     *
     * @return int|null
     */
    public function getSsidNumber()
    {
        return $this->container['ssid_number'];
    }

    /**
     * Sets ssid_number
     *
     * @param int|null $ssid_number SSID number
     *
     * @return self
     */
    public function setSsidNumber($ssid_number)
    {
        if (is_null($ssid_number)) {
            throw new \InvalidArgumentException('non-nullable ssid_number cannot be null');
        }
        $this->container['ssid_number'] = $ssid_number;

        return $this;
    }

    /**
     * Gets authorized_zone
     *
     * @return string|null
     */
    public function getAuthorizedZone()
    {
        return $this->container['authorized_zone'];
    }

    /**
     * Sets authorized_zone
     *
     * @param string|null $authorized_zone Authorized zone of the user
     *
     * @return self
     */
    public function setAuthorizedZone($authorized_zone)
    {
        if (is_null($authorized_zone)) {
            throw new \InvalidArgumentException('non-nullable authorized_zone cannot be null');
        }
        $this->container['authorized_zone'] = $authorized_zone;

        return $this;
    }

    /**
     * Gets expires_at
     *
     * @return \DateTime|null
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param \DateTime|null $expires_at Authorization expiration time
     *
     * @return self
     */
    public function setExpiresAt($expires_at)
    {
        if (is_null($expires_at)) {
            throw new \InvalidArgumentException('non-nullable expires_at cannot be null');
        }
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets authorized_by_name
     *
     * @return string|null
     */
    public function getAuthorizedByName()
    {
        return $this->container['authorized_by_name'];
    }

    /**
     * Sets authorized_by_name
     *
     * @param string|null $authorized_by_name User is authorized by the account name
     *
     * @return self
     */
    public function setAuthorizedByName($authorized_by_name)
    {
        if (is_null($authorized_by_name)) {
            throw new \InvalidArgumentException('non-nullable authorized_by_name cannot be null');
        }
        $this->container['authorized_by_name'] = $authorized_by_name;

        return $this;
    }

    /**
     * Gets authorized_by_email
     *
     * @return string|null
     */
    public function getAuthorizedByEmail()
    {
        return $this->container['authorized_by_email'];
    }

    /**
     * Sets authorized_by_email
     *
     * @param string|null $authorized_by_email User is authorized by the account email address
     *
     * @return self
     */
    public function setAuthorizedByEmail($authorized_by_email)
    {
        if (is_null($authorized_by_email)) {
            throw new \InvalidArgumentException('non-nullable authorized_by_email cannot be null');
        }
        $this->container['authorized_by_email'] = $authorized_by_email;

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


