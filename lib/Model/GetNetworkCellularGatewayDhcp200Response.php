<?php
/**
 * GetNetworkCellularGatewayDhcp200Response
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
 * GetNetworkCellularGatewayDhcp200Response Class Doc Comment
 *
 * @category Class
 * @package  Meraki
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetNetworkCellularGatewayDhcp200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getNetworkCellularGatewayDhcp_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dhcp_lease_time' => 'string',
        'dns_nameservers' => 'string',
        'dns_custom_nameservers' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'dhcp_lease_time' => null,
        'dns_nameservers' => null,
        'dns_custom_nameservers' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'dhcp_lease_time' => false,
        'dns_nameservers' => false,
        'dns_custom_nameservers' => false
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
        'dhcp_lease_time' => 'dhcpLeaseTime',
        'dns_nameservers' => 'dnsNameservers',
        'dns_custom_nameservers' => 'dnsCustomNameservers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dhcp_lease_time' => 'setDhcpLeaseTime',
        'dns_nameservers' => 'setDnsNameservers',
        'dns_custom_nameservers' => 'setDnsCustomNameservers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dhcp_lease_time' => 'getDhcpLeaseTime',
        'dns_nameservers' => 'getDnsNameservers',
        'dns_custom_nameservers' => 'getDnsCustomNameservers'
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

    public const DHCP_LEASE_TIME__1_DAY = '1 day';
    public const DHCP_LEASE_TIME__1_HOUR = '1 hour';
    public const DHCP_LEASE_TIME__1_WEEK = '1 week';
    public const DHCP_LEASE_TIME__12_HOURS = '12 hours';
    public const DHCP_LEASE_TIME__30_MINUTES = '30 minutes';
    public const DHCP_LEASE_TIME__4_HOURS = '4 hours';
    public const DNS_NAMESERVERS_CUSTOM = 'custom';
    public const DNS_NAMESERVERS_GOOGLE_DNS = 'google_dns';
    public const DNS_NAMESERVERS_OPENDNS = 'opendns';
    public const DNS_NAMESERVERS_UPSTREAM_DNS = 'upstream_dns';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDhcpLeaseTimeAllowableValues()
    {
        return [
            self::DHCP_LEASE_TIME__1_DAY,
            self::DHCP_LEASE_TIME__1_HOUR,
            self::DHCP_LEASE_TIME__1_WEEK,
            self::DHCP_LEASE_TIME__12_HOURS,
            self::DHCP_LEASE_TIME__30_MINUTES,
            self::DHCP_LEASE_TIME__4_HOURS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDnsNameserversAllowableValues()
    {
        return [
            self::DNS_NAMESERVERS_CUSTOM,
            self::DNS_NAMESERVERS_GOOGLE_DNS,
            self::DNS_NAMESERVERS_OPENDNS,
            self::DNS_NAMESERVERS_UPSTREAM_DNS,
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
        $this->setIfExists('dhcp_lease_time', $data ?? [], null);
        $this->setIfExists('dns_nameservers', $data ?? [], null);
        $this->setIfExists('dns_custom_nameservers', $data ?? [], null);
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

        $allowedValues = $this->getDhcpLeaseTimeAllowableValues();
        if (!is_null($this->container['dhcp_lease_time']) && !in_array($this->container['dhcp_lease_time'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'dhcp_lease_time', must be one of '%s'",
                $this->container['dhcp_lease_time'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDnsNameserversAllowableValues();
        if (!is_null($this->container['dns_nameservers']) && !in_array($this->container['dns_nameservers'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'dns_nameservers', must be one of '%s'",
                $this->container['dns_nameservers'],
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
     * Gets dhcp_lease_time
     *
     * @return string|null
     */
    public function getDhcpLeaseTime()
    {
        return $this->container['dhcp_lease_time'];
    }

    /**
     * Sets dhcp_lease_time
     *
     * @param string|null $dhcp_lease_time DHCP Lease time for all MG in the network.
     *
     * @return self
     */
    public function setDhcpLeaseTime($dhcp_lease_time)
    {
        if (is_null($dhcp_lease_time)) {
            throw new \InvalidArgumentException('non-nullable dhcp_lease_time cannot be null');
        }
        $allowedValues = $this->getDhcpLeaseTimeAllowableValues();
        if (!in_array($dhcp_lease_time, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'dhcp_lease_time', must be one of '%s'",
                    $dhcp_lease_time,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['dhcp_lease_time'] = $dhcp_lease_time;

        return $this;
    }

    /**
     * Gets dns_nameservers
     *
     * @return string|null
     */
    public function getDnsNameservers()
    {
        return $this->container['dns_nameservers'];
    }

    /**
     * Sets dns_nameservers
     *
     * @param string|null $dns_nameservers DNS name servers mode for all MG in the network.
     *
     * @return self
     */
    public function setDnsNameservers($dns_nameservers)
    {
        if (is_null($dns_nameservers)) {
            throw new \InvalidArgumentException('non-nullable dns_nameservers cannot be null');
        }
        $allowedValues = $this->getDnsNameserversAllowableValues();
        if (!in_array($dns_nameservers, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'dns_nameservers', must be one of '%s'",
                    $dns_nameservers,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['dns_nameservers'] = $dns_nameservers;

        return $this;
    }

    /**
     * Gets dns_custom_nameservers
     *
     * @return string[]|null
     */
    public function getDnsCustomNameservers()
    {
        return $this->container['dns_custom_nameservers'];
    }

    /**
     * Sets dns_custom_nameservers
     *
     * @param string[]|null $dns_custom_nameservers List of fixed IPs representing the the DNS Name servers when the mode is 'custom'.
     *
     * @return self
     */
    public function setDnsCustomNameservers($dns_custom_nameservers)
    {
        if (is_null($dns_custom_nameservers)) {
            throw new \InvalidArgumentException('non-nullable dns_custom_nameservers cannot be null');
        }
        $this->container['dns_custom_nameservers'] = $dns_custom_nameservers;

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


