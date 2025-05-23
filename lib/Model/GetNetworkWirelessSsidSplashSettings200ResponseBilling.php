<?php
/**
 * GetNetworkWirelessSsidSplashSettings200ResponseBilling
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
 * GetNetworkWirelessSsidSplashSettings200ResponseBilling Class Doc Comment
 *
 * @category Class
 * @description Details associated with billing splash
 * @package  Meraki
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetNetworkWirelessSsidSplashSettings200ResponseBilling implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getNetworkWirelessSsidSplashSettings_200_response_billing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'free_access' => '\Meraki\Model\GetNetworkWirelessSsidSplashSettings200ResponseBillingFreeAccess',
        'prepaid_access_fast_login_enabled' => 'bool',
        'reply_to_email_address' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'free_access' => null,
        'prepaid_access_fast_login_enabled' => null,
        'reply_to_email_address' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'free_access' => false,
        'prepaid_access_fast_login_enabled' => false,
        'reply_to_email_address' => false
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
        'free_access' => 'freeAccess',
        'prepaid_access_fast_login_enabled' => 'prepaidAccessFastLoginEnabled',
        'reply_to_email_address' => 'replyToEmailAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'free_access' => 'setFreeAccess',
        'prepaid_access_fast_login_enabled' => 'setPrepaidAccessFastLoginEnabled',
        'reply_to_email_address' => 'setReplyToEmailAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'free_access' => 'getFreeAccess',
        'prepaid_access_fast_login_enabled' => 'getPrepaidAccessFastLoginEnabled',
        'reply_to_email_address' => 'getReplyToEmailAddress'
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
        $this->setIfExists('free_access', $data ?? [], null);
        $this->setIfExists('prepaid_access_fast_login_enabled', $data ?? [], null);
        $this->setIfExists('reply_to_email_address', $data ?? [], null);
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
     * Gets free_access
     *
     * @return \Meraki\Model\GetNetworkWirelessSsidSplashSettings200ResponseBillingFreeAccess|null
     */
    public function getFreeAccess()
    {
        return $this->container['free_access'];
    }

    /**
     * Sets free_access
     *
     * @param \Meraki\Model\GetNetworkWirelessSsidSplashSettings200ResponseBillingFreeAccess|null $free_access free_access
     *
     * @return self
     */
    public function setFreeAccess($free_access)
    {
        if (is_null($free_access)) {
            throw new \InvalidArgumentException('non-nullable free_access cannot be null');
        }
        $this->container['free_access'] = $free_access;

        return $this;
    }

    /**
     * Gets prepaid_access_fast_login_enabled
     *
     * @return bool|null
     */
    public function getPrepaidAccessFastLoginEnabled()
    {
        return $this->container['prepaid_access_fast_login_enabled'];
    }

    /**
     * Sets prepaid_access_fast_login_enabled
     *
     * @param bool|null $prepaid_access_fast_login_enabled Whether or not billing uses the fast login prepaid access option.
     *
     * @return self
     */
    public function setPrepaidAccessFastLoginEnabled($prepaid_access_fast_login_enabled)
    {
        if (is_null($prepaid_access_fast_login_enabled)) {
            throw new \InvalidArgumentException('non-nullable prepaid_access_fast_login_enabled cannot be null');
        }
        $this->container['prepaid_access_fast_login_enabled'] = $prepaid_access_fast_login_enabled;

        return $this;
    }

    /**
     * Gets reply_to_email_address
     *
     * @return string|null
     */
    public function getReplyToEmailAddress()
    {
        return $this->container['reply_to_email_address'];
    }

    /**
     * Sets reply_to_email_address
     *
     * @param string|null $reply_to_email_address The email address that reeceives replies from clients
     *
     * @return self
     */
    public function setReplyToEmailAddress($reply_to_email_address)
    {
        if (is_null($reply_to_email_address)) {
            throw new \InvalidArgumentException('non-nullable reply_to_email_address cannot be null');
        }
        $this->container['reply_to_email_address'] = $reply_to_email_address;

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


