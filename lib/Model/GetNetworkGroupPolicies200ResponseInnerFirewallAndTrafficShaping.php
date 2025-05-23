<?php
/**
 * GetNetworkGroupPolicies200ResponseInnerFirewallAndTrafficShaping
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
 * GetNetworkGroupPolicies200ResponseInnerFirewallAndTrafficShaping Class Doc Comment
 *
 * @category Class
 * @description The firewall and traffic shaping rules and settings for your policy.
 * @package  Meraki
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetNetworkGroupPolicies200ResponseInnerFirewallAndTrafficShaping implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getNetworkGroupPolicies_200_response_inner_firewallAndTrafficShaping';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'settings' => 'string',
        'traffic_shaping_rules' => '\Meraki\Model\GetNetworkGroupPolicies200ResponseInnerFirewallAndTrafficShapingTrafficShapingRulesInner[]',
        'l3_firewall_rules' => '\Meraki\Model\GetNetworkGroupPolicies200ResponseInnerFirewallAndTrafficShapingL3FirewallRulesInner[]',
        'l7_firewall_rules' => '\Meraki\Model\GetNetworkGroupPolicies200ResponseInnerFirewallAndTrafficShapingL7FirewallRulesInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'settings' => null,
        'traffic_shaping_rules' => null,
        'l3_firewall_rules' => null,
        'l7_firewall_rules' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'settings' => false,
        'traffic_shaping_rules' => false,
        'l3_firewall_rules' => false,
        'l7_firewall_rules' => false
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
        'settings' => 'settings',
        'traffic_shaping_rules' => 'trafficShapingRules',
        'l3_firewall_rules' => 'l3FirewallRules',
        'l7_firewall_rules' => 'l7FirewallRules'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'settings' => 'setSettings',
        'traffic_shaping_rules' => 'setTrafficShapingRules',
        'l3_firewall_rules' => 'setL3FirewallRules',
        'l7_firewall_rules' => 'setL7FirewallRules'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'settings' => 'getSettings',
        'traffic_shaping_rules' => 'getTrafficShapingRules',
        'l3_firewall_rules' => 'getL3FirewallRules',
        'l7_firewall_rules' => 'getL7FirewallRules'
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

    public const SETTINGS_CUSTOM = 'custom';
    public const SETTINGS_IGNORE = 'ignore';
    public const SETTINGS_NETWORK_DEFAULT = 'network default';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSettingsAllowableValues()
    {
        return [
            self::SETTINGS_CUSTOM,
            self::SETTINGS_IGNORE,
            self::SETTINGS_NETWORK_DEFAULT,
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
        $this->setIfExists('settings', $data ?? [], null);
        $this->setIfExists('traffic_shaping_rules', $data ?? [], null);
        $this->setIfExists('l3_firewall_rules', $data ?? [], null);
        $this->setIfExists('l7_firewall_rules', $data ?? [], null);
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

        $allowedValues = $this->getSettingsAllowableValues();
        if (!is_null($this->container['settings']) && !in_array($this->container['settings'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'settings', must be one of '%s'",
                $this->container['settings'],
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
     * Gets settings
     *
     * @return string|null
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param string|null $settings How firewall and traffic shaping rules are enforced. Can be 'network default', 'ignore' or 'custom'.
     *
     * @return self
     */
    public function setSettings($settings)
    {
        if (is_null($settings)) {
            throw new \InvalidArgumentException('non-nullable settings cannot be null');
        }
        $allowedValues = $this->getSettingsAllowableValues();
        if (!in_array($settings, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'settings', must be one of '%s'",
                    $settings,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['settings'] = $settings;

        return $this;
    }

    /**
     * Gets traffic_shaping_rules
     *
     * @return \Meraki\Model\GetNetworkGroupPolicies200ResponseInnerFirewallAndTrafficShapingTrafficShapingRulesInner[]|null
     */
    public function getTrafficShapingRules()
    {
        return $this->container['traffic_shaping_rules'];
    }

    /**
     * Sets traffic_shaping_rules
     *
     * @param \Meraki\Model\GetNetworkGroupPolicies200ResponseInnerFirewallAndTrafficShapingTrafficShapingRulesInner[]|null $traffic_shaping_rules An array of traffic shaping rules. Rules are applied in the order that     they are specified in. An empty list (or null) means no rules. Note that     you are allowed a maximum of 8 rules.
     *
     * @return self
     */
    public function setTrafficShapingRules($traffic_shaping_rules)
    {
        if (is_null($traffic_shaping_rules)) {
            throw new \InvalidArgumentException('non-nullable traffic_shaping_rules cannot be null');
        }
        $this->container['traffic_shaping_rules'] = $traffic_shaping_rules;

        return $this;
    }

    /**
     * Gets l3_firewall_rules
     *
     * @return \Meraki\Model\GetNetworkGroupPolicies200ResponseInnerFirewallAndTrafficShapingL3FirewallRulesInner[]|null
     */
    public function getL3FirewallRules()
    {
        return $this->container['l3_firewall_rules'];
    }

    /**
     * Sets l3_firewall_rules
     *
     * @param \Meraki\Model\GetNetworkGroupPolicies200ResponseInnerFirewallAndTrafficShapingL3FirewallRulesInner[]|null $l3_firewall_rules An ordered array of the L3 firewall rules
     *
     * @return self
     */
    public function setL3FirewallRules($l3_firewall_rules)
    {
        if (is_null($l3_firewall_rules)) {
            throw new \InvalidArgumentException('non-nullable l3_firewall_rules cannot be null');
        }
        $this->container['l3_firewall_rules'] = $l3_firewall_rules;

        return $this;
    }

    /**
     * Gets l7_firewall_rules
     *
     * @return \Meraki\Model\GetNetworkGroupPolicies200ResponseInnerFirewallAndTrafficShapingL7FirewallRulesInner[]|null
     */
    public function getL7FirewallRules()
    {
        return $this->container['l7_firewall_rules'];
    }

    /**
     * Sets l7_firewall_rules
     *
     * @param \Meraki\Model\GetNetworkGroupPolicies200ResponseInnerFirewallAndTrafficShapingL7FirewallRulesInner[]|null $l7_firewall_rules An ordered array of L7 firewall rules
     *
     * @return self
     */
    public function setL7FirewallRules($l7_firewall_rules)
    {
        if (is_null($l7_firewall_rules)) {
            throw new \InvalidArgumentException('non-nullable l7_firewall_rules cannot be null');
        }
        $this->container['l7_firewall_rules'] = $l7_firewall_rules;

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


