<?php
/**
 * CreateNetworkApplianceVlanRequest
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
 * CreateNetworkApplianceVlanRequest Class Doc Comment
 *
 * @category Class
 * @package  Meraki
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateNetworkApplianceVlanRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'createNetworkApplianceVlan_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'subnet' => 'string',
        'appliance_ip' => 'string',
        'group_policy_id' => 'string',
        'template_vlan_type' => 'string',
        'cidr' => 'string',
        'mask' => 'int',
        'ipv6' => '\Meraki\Model\UpdateNetworkApplianceSingleLanRequestIpv6',
        'dhcp_handling' => 'string',
        'dhcp_lease_time' => 'string',
        'mandatory_dhcp' => '\Meraki\Model\GetNetworkApplianceVlans200ResponseInnerMandatoryDhcp',
        'dhcp_boot_options_enabled' => 'bool',
        'dhcp_options' => '\Meraki\Model\GetNetworkApplianceVlans200ResponseInnerDhcpOptionsInner[]'
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
        'name' => null,
        'subnet' => null,
        'appliance_ip' => null,
        'group_policy_id' => null,
        'template_vlan_type' => null,
        'cidr' => null,
        'mask' => null,
        'ipv6' => null,
        'dhcp_handling' => null,
        'dhcp_lease_time' => null,
        'mandatory_dhcp' => null,
        'dhcp_boot_options_enabled' => null,
        'dhcp_options' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => false,
        'subnet' => false,
        'appliance_ip' => false,
        'group_policy_id' => false,
        'template_vlan_type' => false,
        'cidr' => false,
        'mask' => false,
        'ipv6' => false,
        'dhcp_handling' => false,
        'dhcp_lease_time' => false,
        'mandatory_dhcp' => false,
        'dhcp_boot_options_enabled' => false,
        'dhcp_options' => false
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
        'name' => 'name',
        'subnet' => 'subnet',
        'appliance_ip' => 'applianceIp',
        'group_policy_id' => 'groupPolicyId',
        'template_vlan_type' => 'templateVlanType',
        'cidr' => 'cidr',
        'mask' => 'mask',
        'ipv6' => 'ipv6',
        'dhcp_handling' => 'dhcpHandling',
        'dhcp_lease_time' => 'dhcpLeaseTime',
        'mandatory_dhcp' => 'mandatoryDhcp',
        'dhcp_boot_options_enabled' => 'dhcpBootOptionsEnabled',
        'dhcp_options' => 'dhcpOptions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'subnet' => 'setSubnet',
        'appliance_ip' => 'setApplianceIp',
        'group_policy_id' => 'setGroupPolicyId',
        'template_vlan_type' => 'setTemplateVlanType',
        'cidr' => 'setCidr',
        'mask' => 'setMask',
        'ipv6' => 'setIpv6',
        'dhcp_handling' => 'setDhcpHandling',
        'dhcp_lease_time' => 'setDhcpLeaseTime',
        'mandatory_dhcp' => 'setMandatoryDhcp',
        'dhcp_boot_options_enabled' => 'setDhcpBootOptionsEnabled',
        'dhcp_options' => 'setDhcpOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'subnet' => 'getSubnet',
        'appliance_ip' => 'getApplianceIp',
        'group_policy_id' => 'getGroupPolicyId',
        'template_vlan_type' => 'getTemplateVlanType',
        'cidr' => 'getCidr',
        'mask' => 'getMask',
        'ipv6' => 'getIpv6',
        'dhcp_handling' => 'getDhcpHandling',
        'dhcp_lease_time' => 'getDhcpLeaseTime',
        'mandatory_dhcp' => 'getMandatoryDhcp',
        'dhcp_boot_options_enabled' => 'getDhcpBootOptionsEnabled',
        'dhcp_options' => 'getDhcpOptions'
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

    public const TEMPLATE_VLAN_TYPE_SAME = 'same';
    public const TEMPLATE_VLAN_TYPE_UNIQUE = 'unique';
    public const DHCP_HANDLING_DO_NOT_RESPOND_TO_DHCP_REQUESTS = 'Do not respond to DHCP requests';
    public const DHCP_HANDLING_RELAY_DHCP_TO_ANOTHER_SERVER = 'Relay DHCP to another server';
    public const DHCP_HANDLING_RUN_A_DHCP_SERVER = 'Run a DHCP server';
    public const DHCP_LEASE_TIME__1_DAY = '1 day';
    public const DHCP_LEASE_TIME__1_HOUR = '1 hour';
    public const DHCP_LEASE_TIME__1_WEEK = '1 week';
    public const DHCP_LEASE_TIME__12_HOURS = '12 hours';
    public const DHCP_LEASE_TIME__30_MINUTES = '30 minutes';
    public const DHCP_LEASE_TIME__4_HOURS = '4 hours';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTemplateVlanTypeAllowableValues()
    {
        return [
            self::TEMPLATE_VLAN_TYPE_SAME,
            self::TEMPLATE_VLAN_TYPE_UNIQUE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDhcpHandlingAllowableValues()
    {
        return [
            self::DHCP_HANDLING_DO_NOT_RESPOND_TO_DHCP_REQUESTS,
            self::DHCP_HANDLING_RELAY_DHCP_TO_ANOTHER_SERVER,
            self::DHCP_HANDLING_RUN_A_DHCP_SERVER,
        ];
    }

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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('subnet', $data ?? [], null);
        $this->setIfExists('appliance_ip', $data ?? [], null);
        $this->setIfExists('group_policy_id', $data ?? [], null);
        $this->setIfExists('template_vlan_type', $data ?? [], 'same');
        $this->setIfExists('cidr', $data ?? [], null);
        $this->setIfExists('mask', $data ?? [], null);
        $this->setIfExists('ipv6', $data ?? [], null);
        $this->setIfExists('dhcp_handling', $data ?? [], null);
        $this->setIfExists('dhcp_lease_time', $data ?? [], null);
        $this->setIfExists('mandatory_dhcp', $data ?? [], null);
        $this->setIfExists('dhcp_boot_options_enabled', $data ?? [], null);
        $this->setIfExists('dhcp_options', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        $allowedValues = $this->getTemplateVlanTypeAllowableValues();
        if (!is_null($this->container['template_vlan_type']) && !in_array($this->container['template_vlan_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'template_vlan_type', must be one of '%s'",
                $this->container['template_vlan_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDhcpHandlingAllowableValues();
        if (!is_null($this->container['dhcp_handling']) && !in_array($this->container['dhcp_handling'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'dhcp_handling', must be one of '%s'",
                $this->container['dhcp_handling'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDhcpLeaseTimeAllowableValues();
        if (!is_null($this->container['dhcp_lease_time']) && !in_array($this->container['dhcp_lease_time'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'dhcp_lease_time', must be one of '%s'",
                $this->container['dhcp_lease_time'],
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The VLAN ID of the new VLAN (must be between 1 and 4094)
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the new VLAN
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets subnet
     *
     * @return string|null
     */
    public function getSubnet()
    {
        return $this->container['subnet'];
    }

    /**
     * Sets subnet
     *
     * @param string|null $subnet The subnet of the VLAN
     *
     * @return self
     */
    public function setSubnet($subnet)
    {
        if (is_null($subnet)) {
            throw new \InvalidArgumentException('non-nullable subnet cannot be null');
        }
        $this->container['subnet'] = $subnet;

        return $this;
    }

    /**
     * Gets appliance_ip
     *
     * @return string|null
     */
    public function getApplianceIp()
    {
        return $this->container['appliance_ip'];
    }

    /**
     * Sets appliance_ip
     *
     * @param string|null $appliance_ip The local IP of the appliance on the VLAN
     *
     * @return self
     */
    public function setApplianceIp($appliance_ip)
    {
        if (is_null($appliance_ip)) {
            throw new \InvalidArgumentException('non-nullable appliance_ip cannot be null');
        }
        $this->container['appliance_ip'] = $appliance_ip;

        return $this;
    }

    /**
     * Gets group_policy_id
     *
     * @return string|null
     */
    public function getGroupPolicyId()
    {
        return $this->container['group_policy_id'];
    }

    /**
     * Sets group_policy_id
     *
     * @param string|null $group_policy_id The id of the desired group policy to apply to the VLAN
     *
     * @return self
     */
    public function setGroupPolicyId($group_policy_id)
    {
        if (is_null($group_policy_id)) {
            throw new \InvalidArgumentException('non-nullable group_policy_id cannot be null');
        }
        $this->container['group_policy_id'] = $group_policy_id;

        return $this;
    }

    /**
     * Gets template_vlan_type
     *
     * @return string|null
     */
    public function getTemplateVlanType()
    {
        return $this->container['template_vlan_type'];
    }

    /**
     * Sets template_vlan_type
     *
     * @param string|null $template_vlan_type Type of subnetting of the VLAN. Applicable only for template network.
     *
     * @return self
     */
    public function setTemplateVlanType($template_vlan_type)
    {
        if (is_null($template_vlan_type)) {
            throw new \InvalidArgumentException('non-nullable template_vlan_type cannot be null');
        }
        $allowedValues = $this->getTemplateVlanTypeAllowableValues();
        if (!in_array($template_vlan_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'template_vlan_type', must be one of '%s'",
                    $template_vlan_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['template_vlan_type'] = $template_vlan_type;

        return $this;
    }

    /**
     * Gets cidr
     *
     * @return string|null
     */
    public function getCidr()
    {
        return $this->container['cidr'];
    }

    /**
     * Sets cidr
     *
     * @param string|null $cidr CIDR of the pool of subnets. Applicable only for template network. Each network bound to the template will automatically pick a subnet from this pool to build its own VLAN.
     *
     * @return self
     */
    public function setCidr($cidr)
    {
        if (is_null($cidr)) {
            throw new \InvalidArgumentException('non-nullable cidr cannot be null');
        }
        $this->container['cidr'] = $cidr;

        return $this;
    }

    /**
     * Gets mask
     *
     * @return int|null
     */
    public function getMask()
    {
        return $this->container['mask'];
    }

    /**
     * Sets mask
     *
     * @param int|null $mask Mask used for the subnet of all bound to the template networks. Applicable only for template network.
     *
     * @return self
     */
    public function setMask($mask)
    {
        if (is_null($mask)) {
            throw new \InvalidArgumentException('non-nullable mask cannot be null');
        }
        $this->container['mask'] = $mask;

        return $this;
    }

    /**
     * Gets ipv6
     *
     * @return \Meraki\Model\UpdateNetworkApplianceSingleLanRequestIpv6|null
     */
    public function getIpv6()
    {
        return $this->container['ipv6'];
    }

    /**
     * Sets ipv6
     *
     * @param \Meraki\Model\UpdateNetworkApplianceSingleLanRequestIpv6|null $ipv6 ipv6
     *
     * @return self
     */
    public function setIpv6($ipv6)
    {
        if (is_null($ipv6)) {
            throw new \InvalidArgumentException('non-nullable ipv6 cannot be null');
        }
        $this->container['ipv6'] = $ipv6;

        return $this;
    }

    /**
     * Gets dhcp_handling
     *
     * @return string|null
     */
    public function getDhcpHandling()
    {
        return $this->container['dhcp_handling'];
    }

    /**
     * Sets dhcp_handling
     *
     * @param string|null $dhcp_handling The appliance's handling of DHCP requests on this VLAN. One of: 'Run a DHCP server', 'Relay DHCP to another server' or 'Do not respond to DHCP requests'
     *
     * @return self
     */
    public function setDhcpHandling($dhcp_handling)
    {
        if (is_null($dhcp_handling)) {
            throw new \InvalidArgumentException('non-nullable dhcp_handling cannot be null');
        }
        $allowedValues = $this->getDhcpHandlingAllowableValues();
        if (!in_array($dhcp_handling, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'dhcp_handling', must be one of '%s'",
                    $dhcp_handling,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['dhcp_handling'] = $dhcp_handling;

        return $this;
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
     * @param string|null $dhcp_lease_time The term of DHCP leases if the appliance is running a DHCP server on this VLAN. One of: '30 minutes', '1 hour', '4 hours', '12 hours', '1 day' or '1 week'
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
     * Gets mandatory_dhcp
     *
     * @return \Meraki\Model\GetNetworkApplianceVlans200ResponseInnerMandatoryDhcp|null
     */
    public function getMandatoryDhcp()
    {
        return $this->container['mandatory_dhcp'];
    }

    /**
     * Sets mandatory_dhcp
     *
     * @param \Meraki\Model\GetNetworkApplianceVlans200ResponseInnerMandatoryDhcp|null $mandatory_dhcp mandatory_dhcp
     *
     * @return self
     */
    public function setMandatoryDhcp($mandatory_dhcp)
    {
        if (is_null($mandatory_dhcp)) {
            throw new \InvalidArgumentException('non-nullable mandatory_dhcp cannot be null');
        }
        $this->container['mandatory_dhcp'] = $mandatory_dhcp;

        return $this;
    }

    /**
     * Gets dhcp_boot_options_enabled
     *
     * @return bool|null
     */
    public function getDhcpBootOptionsEnabled()
    {
        return $this->container['dhcp_boot_options_enabled'];
    }

    /**
     * Sets dhcp_boot_options_enabled
     *
     * @param bool|null $dhcp_boot_options_enabled Use DHCP boot options specified in other properties
     *
     * @return self
     */
    public function setDhcpBootOptionsEnabled($dhcp_boot_options_enabled)
    {
        if (is_null($dhcp_boot_options_enabled)) {
            throw new \InvalidArgumentException('non-nullable dhcp_boot_options_enabled cannot be null');
        }
        $this->container['dhcp_boot_options_enabled'] = $dhcp_boot_options_enabled;

        return $this;
    }

    /**
     * Gets dhcp_options
     *
     * @return \Meraki\Model\GetNetworkApplianceVlans200ResponseInnerDhcpOptionsInner[]|null
     */
    public function getDhcpOptions()
    {
        return $this->container['dhcp_options'];
    }

    /**
     * Sets dhcp_options
     *
     * @param \Meraki\Model\GetNetworkApplianceVlans200ResponseInnerDhcpOptionsInner[]|null $dhcp_options The list of DHCP options that will be included in DHCP responses. Each object in the list should have \"code\", \"type\", and \"value\" properties.
     *
     * @return self
     */
    public function setDhcpOptions($dhcp_options)
    {
        if (is_null($dhcp_options)) {
            throw new \InvalidArgumentException('non-nullable dhcp_options cannot be null');
        }
        $this->container['dhcp_options'] = $dhcp_options;

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


