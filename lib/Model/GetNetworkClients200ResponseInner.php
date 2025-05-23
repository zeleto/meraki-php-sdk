<?php
/**
 * GetNetworkClients200ResponseInner
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
 * GetNetworkClients200ResponseInner Class Doc Comment
 *
 * @category Class
 * @package  Meraki
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetNetworkClients200ResponseInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getNetworkClients_200_response_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'mac' => 'string',
        'ip' => 'string',
        'ip6' => 'string',
        'description' => 'string',
        'first_seen' => 'int',
        'last_seen' => 'int',
        'manufacturer' => 'string',
        'os' => 'string',
        'user' => 'string',
        'vlan' => 'string',
        'ssid' => 'string',
        'switchport' => 'string',
        'wireless_capabilities' => 'string',
        'sm_installed' => 'bool',
        'recent_device_mac' => 'string',
        'status' => 'string',
        'usage' => '\Meraki\Model\GetNetworkClients200ResponseInnerUsage',
        'named_vlan' => 'string',
        'adaptive_policy_group' => 'string',
        'device_type_prediction' => 'string',
        'recent_device_serial' => 'string',
        'recent_device_name' => 'string',
        'recent_device_connection' => 'string',
        'notes' => 'string',
        'ip6_local' => 'string',
        'group_policy8021x' => 'string',
        'psk_group' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'mac' => null,
        'ip' => null,
        'ip6' => null,
        'description' => null,
        'first_seen' => null,
        'last_seen' => null,
        'manufacturer' => null,
        'os' => null,
        'user' => null,
        'vlan' => null,
        'ssid' => null,
        'switchport' => null,
        'wireless_capabilities' => null,
        'sm_installed' => null,
        'recent_device_mac' => null,
        'status' => null,
        'usage' => null,
        'named_vlan' => null,
        'adaptive_policy_group' => null,
        'device_type_prediction' => null,
        'recent_device_serial' => null,
        'recent_device_name' => null,
        'recent_device_connection' => null,
        'notes' => null,
        'ip6_local' => null,
        'group_policy8021x' => null,
        'psk_group' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'mac' => false,
        'ip' => false,
        'ip6' => false,
        'description' => false,
        'first_seen' => false,
        'last_seen' => false,
        'manufacturer' => false,
        'os' => false,
        'user' => false,
        'vlan' => false,
        'ssid' => false,
        'switchport' => false,
        'wireless_capabilities' => false,
        'sm_installed' => false,
        'recent_device_mac' => false,
        'status' => false,
        'usage' => false,
        'named_vlan' => false,
        'adaptive_policy_group' => false,
        'device_type_prediction' => false,
        'recent_device_serial' => false,
        'recent_device_name' => false,
        'recent_device_connection' => false,
        'notes' => false,
        'ip6_local' => false,
        'group_policy8021x' => false,
        'psk_group' => false
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
        'id' => 'id',
        'mac' => 'mac',
        'ip' => 'ip',
        'ip6' => 'ip6',
        'description' => 'description',
        'first_seen' => 'firstSeen',
        'last_seen' => 'lastSeen',
        'manufacturer' => 'manufacturer',
        'os' => 'os',
        'user' => 'user',
        'vlan' => 'vlan',
        'ssid' => 'ssid',
        'switchport' => 'switchport',
        'wireless_capabilities' => 'wirelessCapabilities',
        'sm_installed' => 'smInstalled',
        'recent_device_mac' => 'recentDeviceMac',
        'status' => 'status',
        'usage' => 'usage',
        'named_vlan' => 'namedVlan',
        'adaptive_policy_group' => 'adaptivePolicyGroup',
        'device_type_prediction' => 'deviceTypePrediction',
        'recent_device_serial' => 'recentDeviceSerial',
        'recent_device_name' => 'recentDeviceName',
        'recent_device_connection' => 'recentDeviceConnection',
        'notes' => 'notes',
        'ip6_local' => 'ip6Local',
        'group_policy8021x' => 'groupPolicy8021x',
        'psk_group' => 'pskGroup'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'mac' => 'setMac',
        'ip' => 'setIp',
        'ip6' => 'setIp6',
        'description' => 'setDescription',
        'first_seen' => 'setFirstSeen',
        'last_seen' => 'setLastSeen',
        'manufacturer' => 'setManufacturer',
        'os' => 'setOs',
        'user' => 'setUser',
        'vlan' => 'setVlan',
        'ssid' => 'setSsid',
        'switchport' => 'setSwitchport',
        'wireless_capabilities' => 'setWirelessCapabilities',
        'sm_installed' => 'setSmInstalled',
        'recent_device_mac' => 'setRecentDeviceMac',
        'status' => 'setStatus',
        'usage' => 'setUsage',
        'named_vlan' => 'setNamedVlan',
        'adaptive_policy_group' => 'setAdaptivePolicyGroup',
        'device_type_prediction' => 'setDeviceTypePrediction',
        'recent_device_serial' => 'setRecentDeviceSerial',
        'recent_device_name' => 'setRecentDeviceName',
        'recent_device_connection' => 'setRecentDeviceConnection',
        'notes' => 'setNotes',
        'ip6_local' => 'setIp6Local',
        'group_policy8021x' => 'setGroupPolicy8021x',
        'psk_group' => 'setPskGroup'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'mac' => 'getMac',
        'ip' => 'getIp',
        'ip6' => 'getIp6',
        'description' => 'getDescription',
        'first_seen' => 'getFirstSeen',
        'last_seen' => 'getLastSeen',
        'manufacturer' => 'getManufacturer',
        'os' => 'getOs',
        'user' => 'getUser',
        'vlan' => 'getVlan',
        'ssid' => 'getSsid',
        'switchport' => 'getSwitchport',
        'wireless_capabilities' => 'getWirelessCapabilities',
        'sm_installed' => 'getSmInstalled',
        'recent_device_mac' => 'getRecentDeviceMac',
        'status' => 'getStatus',
        'usage' => 'getUsage',
        'named_vlan' => 'getNamedVlan',
        'adaptive_policy_group' => 'getAdaptivePolicyGroup',
        'device_type_prediction' => 'getDeviceTypePrediction',
        'recent_device_serial' => 'getRecentDeviceSerial',
        'recent_device_name' => 'getRecentDeviceName',
        'recent_device_connection' => 'getRecentDeviceConnection',
        'notes' => 'getNotes',
        'ip6_local' => 'getIp6Local',
        'group_policy8021x' => 'getGroupPolicy8021x',
        'psk_group' => 'getPskGroup'
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

    public const STATUS_OFFLINE = 'Offline';
    public const STATUS_ONLINE = 'Online';
    public const RECENT_DEVICE_CONNECTION_WIRED = 'Wired';
    public const RECENT_DEVICE_CONNECTION_WIRELESS = 'Wireless';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OFFLINE,
            self::STATUS_ONLINE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRecentDeviceConnectionAllowableValues()
    {
        return [
            self::RECENT_DEVICE_CONNECTION_WIRED,
            self::RECENT_DEVICE_CONNECTION_WIRELESS,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('mac', $data ?? [], null);
        $this->setIfExists('ip', $data ?? [], null);
        $this->setIfExists('ip6', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('first_seen', $data ?? [], null);
        $this->setIfExists('last_seen', $data ?? [], null);
        $this->setIfExists('manufacturer', $data ?? [], null);
        $this->setIfExists('os', $data ?? [], null);
        $this->setIfExists('user', $data ?? [], null);
        $this->setIfExists('vlan', $data ?? [], null);
        $this->setIfExists('ssid', $data ?? [], null);
        $this->setIfExists('switchport', $data ?? [], null);
        $this->setIfExists('wireless_capabilities', $data ?? [], null);
        $this->setIfExists('sm_installed', $data ?? [], null);
        $this->setIfExists('recent_device_mac', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('usage', $data ?? [], null);
        $this->setIfExists('named_vlan', $data ?? [], null);
        $this->setIfExists('adaptive_policy_group', $data ?? [], null);
        $this->setIfExists('device_type_prediction', $data ?? [], null);
        $this->setIfExists('recent_device_serial', $data ?? [], null);
        $this->setIfExists('recent_device_name', $data ?? [], null);
        $this->setIfExists('recent_device_connection', $data ?? [], null);
        $this->setIfExists('notes', $data ?? [], null);
        $this->setIfExists('ip6_local', $data ?? [], null);
        $this->setIfExists('group_policy8021x', $data ?? [], null);
        $this->setIfExists('psk_group', $data ?? [], null);
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRecentDeviceConnectionAllowableValues();
        if (!is_null($this->container['recent_device_connection']) && !in_array($this->container['recent_device_connection'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'recent_device_connection', must be one of '%s'",
                $this->container['recent_device_connection'],
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The ID of the client
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets mac
     *
     * @return string|null
     */
    public function getMac()
    {
        return $this->container['mac'];
    }

    /**
     * Sets mac
     *
     * @param string|null $mac The MAC address of the client
     *
     * @return self
     */
    public function setMac($mac)
    {
        if (is_null($mac)) {
            throw new \InvalidArgumentException('non-nullable mac cannot be null');
        }
        $this->container['mac'] = $mac;

        return $this;
    }

    /**
     * Gets ip
     *
     * @return string|null
     */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip
     *
     * @param string|null $ip The IP address of the client
     *
     * @return self
     */
    public function setIp($ip)
    {
        if (is_null($ip)) {
            throw new \InvalidArgumentException('non-nullable ip cannot be null');
        }
        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets ip6
     *
     * @return string|null
     */
    public function getIp6()
    {
        return $this->container['ip6'];
    }

    /**
     * Sets ip6
     *
     * @param string|null $ip6 The IPv6 address of the client
     *
     * @return self
     */
    public function setIp6($ip6)
    {
        if (is_null($ip6)) {
            throw new \InvalidArgumentException('non-nullable ip6 cannot be null');
        }
        $this->container['ip6'] = $ip6;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Short description of the client
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets first_seen
     *
     * @return int|null
     */
    public function getFirstSeen()
    {
        return $this->container['first_seen'];
    }

    /**
     * Sets first_seen
     *
     * @param int|null $first_seen Timestamp client was first seen in the network
     *
     * @return self
     */
    public function setFirstSeen($first_seen)
    {
        if (is_null($first_seen)) {
            throw new \InvalidArgumentException('non-nullable first_seen cannot be null');
        }
        $this->container['first_seen'] = $first_seen;

        return $this;
    }

    /**
     * Gets last_seen
     *
     * @return int|null
     */
    public function getLastSeen()
    {
        return $this->container['last_seen'];
    }

    /**
     * Sets last_seen
     *
     * @param int|null $last_seen Timestamp client was last seen in the network
     *
     * @return self
     */
    public function setLastSeen($last_seen)
    {
        if (is_null($last_seen)) {
            throw new \InvalidArgumentException('non-nullable last_seen cannot be null');
        }
        $this->container['last_seen'] = $last_seen;

        return $this;
    }

    /**
     * Gets manufacturer
     *
     * @return string|null
     */
    public function getManufacturer()
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer
     *
     * @param string|null $manufacturer Manufacturer of the client
     *
     * @return self
     */
    public function setManufacturer($manufacturer)
    {
        if (is_null($manufacturer)) {
            throw new \InvalidArgumentException('non-nullable manufacturer cannot be null');
        }
        $this->container['manufacturer'] = $manufacturer;

        return $this;
    }

    /**
     * Gets os
     *
     * @return string|null
     */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
     * Sets os
     *
     * @param string|null $os The operating system of the client
     *
     * @return self
     */
    public function setOs($os)
    {
        if (is_null($os)) {
            throw new \InvalidArgumentException('non-nullable os cannot be null');
        }
        $this->container['os'] = $os;

        return $this;
    }

    /**
     * Gets user
     *
     * @return string|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param string|null $user The username of the user of the client
     *
     * @return self
     */
    public function setUser($user)
    {
        if (is_null($user)) {
            throw new \InvalidArgumentException('non-nullable user cannot be null');
        }
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets vlan
     *
     * @return string|null
     */
    public function getVlan()
    {
        return $this->container['vlan'];
    }

    /**
     * Sets vlan
     *
     * @param string|null $vlan The name of the VLAN that the client is connected to
     *
     * @return self
     */
    public function setVlan($vlan)
    {
        if (is_null($vlan)) {
            throw new \InvalidArgumentException('non-nullable vlan cannot be null');
        }
        $this->container['vlan'] = $vlan;

        return $this;
    }

    /**
     * Gets ssid
     *
     * @return string|null
     */
    public function getSsid()
    {
        return $this->container['ssid'];
    }

    /**
     * Sets ssid
     *
     * @param string|null $ssid The name of the SSID that the client is connected to
     *
     * @return self
     */
    public function setSsid($ssid)
    {
        if (is_null($ssid)) {
            throw new \InvalidArgumentException('non-nullable ssid cannot be null');
        }
        $this->container['ssid'] = $ssid;

        return $this;
    }

    /**
     * Gets switchport
     *
     * @return string|null
     */
    public function getSwitchport()
    {
        return $this->container['switchport'];
    }

    /**
     * Sets switchport
     *
     * @param string|null $switchport The switch port that the client is connected to
     *
     * @return self
     */
    public function setSwitchport($switchport)
    {
        if (is_null($switchport)) {
            throw new \InvalidArgumentException('non-nullable switchport cannot be null');
        }
        $this->container['switchport'] = $switchport;

        return $this;
    }

    /**
     * Gets wireless_capabilities
     *
     * @return string|null
     */
    public function getWirelessCapabilities()
    {
        return $this->container['wireless_capabilities'];
    }

    /**
     * Sets wireless_capabilities
     *
     * @param string|null $wireless_capabilities Wireless capabilities of the client
     *
     * @return self
     */
    public function setWirelessCapabilities($wireless_capabilities)
    {
        if (is_null($wireless_capabilities)) {
            throw new \InvalidArgumentException('non-nullable wireless_capabilities cannot be null');
        }
        $this->container['wireless_capabilities'] = $wireless_capabilities;

        return $this;
    }

    /**
     * Gets sm_installed
     *
     * @return bool|null
     */
    public function getSmInstalled()
    {
        return $this->container['sm_installed'];
    }

    /**
     * Sets sm_installed
     *
     * @param bool|null $sm_installed Status of SM for the client
     *
     * @return self
     */
    public function setSmInstalled($sm_installed)
    {
        if (is_null($sm_installed)) {
            throw new \InvalidArgumentException('non-nullable sm_installed cannot be null');
        }
        $this->container['sm_installed'] = $sm_installed;

        return $this;
    }

    /**
     * Gets recent_device_mac
     *
     * @return string|null
     */
    public function getRecentDeviceMac()
    {
        return $this->container['recent_device_mac'];
    }

    /**
     * Sets recent_device_mac
     *
     * @param string|null $recent_device_mac The MAC address of the node that the device was last connected to
     *
     * @return self
     */
    public function setRecentDeviceMac($recent_device_mac)
    {
        if (is_null($recent_device_mac)) {
            throw new \InvalidArgumentException('non-nullable recent_device_mac cannot be null');
        }
        $this->container['recent_device_mac'] = $recent_device_mac;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The connection status of the client
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets usage
     *
     * @return \Meraki\Model\GetNetworkClients200ResponseInnerUsage|null
     */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
     * Sets usage
     *
     * @param \Meraki\Model\GetNetworkClients200ResponseInnerUsage|null $usage usage
     *
     * @return self
     */
    public function setUsage($usage)
    {
        if (is_null($usage)) {
            throw new \InvalidArgumentException('non-nullable usage cannot be null');
        }
        $this->container['usage'] = $usage;

        return $this;
    }

    /**
     * Gets named_vlan
     *
     * @return string|null
     */
    public function getNamedVlan()
    {
        return $this->container['named_vlan'];
    }

    /**
     * Sets named_vlan
     *
     * @param string|null $named_vlan Named VLAN of the client
     *
     * @return self
     */
    public function setNamedVlan($named_vlan)
    {
        if (is_null($named_vlan)) {
            throw new \InvalidArgumentException('non-nullable named_vlan cannot be null');
        }
        $this->container['named_vlan'] = $named_vlan;

        return $this;
    }

    /**
     * Gets adaptive_policy_group
     *
     * @return string|null
     */
    public function getAdaptivePolicyGroup()
    {
        return $this->container['adaptive_policy_group'];
    }

    /**
     * Sets adaptive_policy_group
     *
     * @param string|null $adaptive_policy_group The adaptive policy group of the client
     *
     * @return self
     */
    public function setAdaptivePolicyGroup($adaptive_policy_group)
    {
        if (is_null($adaptive_policy_group)) {
            throw new \InvalidArgumentException('non-nullable adaptive_policy_group cannot be null');
        }
        $this->container['adaptive_policy_group'] = $adaptive_policy_group;

        return $this;
    }

    /**
     * Gets device_type_prediction
     *
     * @return string|null
     */
    public function getDeviceTypePrediction()
    {
        return $this->container['device_type_prediction'];
    }

    /**
     * Sets device_type_prediction
     *
     * @param string|null $device_type_prediction Prediction of the client's device type
     *
     * @return self
     */
    public function setDeviceTypePrediction($device_type_prediction)
    {
        if (is_null($device_type_prediction)) {
            throw new \InvalidArgumentException('non-nullable device_type_prediction cannot be null');
        }
        $this->container['device_type_prediction'] = $device_type_prediction;

        return $this;
    }

    /**
     * Gets recent_device_serial
     *
     * @return string|null
     */
    public function getRecentDeviceSerial()
    {
        return $this->container['recent_device_serial'];
    }

    /**
     * Sets recent_device_serial
     *
     * @param string|null $recent_device_serial The serial of the node the device was last connected to
     *
     * @return self
     */
    public function setRecentDeviceSerial($recent_device_serial)
    {
        if (is_null($recent_device_serial)) {
            throw new \InvalidArgumentException('non-nullable recent_device_serial cannot be null');
        }
        $this->container['recent_device_serial'] = $recent_device_serial;

        return $this;
    }

    /**
     * Gets recent_device_name
     *
     * @return string|null
     */
    public function getRecentDeviceName()
    {
        return $this->container['recent_device_name'];
    }

    /**
     * Sets recent_device_name
     *
     * @param string|null $recent_device_name The name of the node the device was last connected to
     *
     * @return self
     */
    public function setRecentDeviceName($recent_device_name)
    {
        if (is_null($recent_device_name)) {
            throw new \InvalidArgumentException('non-nullable recent_device_name cannot be null');
        }
        $this->container['recent_device_name'] = $recent_device_name;

        return $this;
    }

    /**
     * Gets recent_device_connection
     *
     * @return string|null
     */
    public function getRecentDeviceConnection()
    {
        return $this->container['recent_device_connection'];
    }

    /**
     * Sets recent_device_connection
     *
     * @param string|null $recent_device_connection Client's most recent connection type
     *
     * @return self
     */
    public function setRecentDeviceConnection($recent_device_connection)
    {
        if (is_null($recent_device_connection)) {
            throw new \InvalidArgumentException('non-nullable recent_device_connection cannot be null');
        }
        $allowedValues = $this->getRecentDeviceConnectionAllowableValues();
        if (!in_array($recent_device_connection, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'recent_device_connection', must be one of '%s'",
                    $recent_device_connection,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['recent_device_connection'] = $recent_device_connection;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes Notes on the client
     *
     * @return self
     */
    public function setNotes($notes)
    {
        if (is_null($notes)) {
            throw new \InvalidArgumentException('non-nullable notes cannot be null');
        }
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets ip6_local
     *
     * @return string|null
     */
    public function getIp6Local()
    {
        return $this->container['ip6_local'];
    }

    /**
     * Sets ip6_local
     *
     * @param string|null $ip6_local Local IPv6 address of the client
     *
     * @return self
     */
    public function setIp6Local($ip6_local)
    {
        if (is_null($ip6_local)) {
            throw new \InvalidArgumentException('non-nullable ip6_local cannot be null');
        }
        $this->container['ip6_local'] = $ip6_local;

        return $this;
    }

    /**
     * Gets group_policy8021x
     *
     * @return string|null
     */
    public function getGroupPolicy8021x()
    {
        return $this->container['group_policy8021x'];
    }

    /**
     * Sets group_policy8021x
     *
     * @param string|null $group_policy8021x 802.1x group policy of the client
     *
     * @return self
     */
    public function setGroupPolicy8021x($group_policy8021x)
    {
        if (is_null($group_policy8021x)) {
            throw new \InvalidArgumentException('non-nullable group_policy8021x cannot be null');
        }
        $this->container['group_policy8021x'] = $group_policy8021x;

        return $this;
    }

    /**
     * Gets psk_group
     *
     * @return string|null
     */
    public function getPskGroup()
    {
        return $this->container['psk_group'];
    }

    /**
     * Sets psk_group
     *
     * @param string|null $psk_group iPSK name of the client
     *
     * @return self
     */
    public function setPskGroup($psk_group)
    {
        if (is_null($psk_group)) {
            throw new \InvalidArgumentException('non-nullable psk_group cannot be null');
        }
        $this->container['psk_group'] = $psk_group;

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


