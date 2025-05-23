<?php
/**
 * CreateNetworkGroupPolicyRequest
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
 * CreateNetworkGroupPolicyRequest Class Doc Comment
 *
 * @category Class
 * @package  Meraki
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateNetworkGroupPolicyRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'createNetworkGroupPolicy_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'scheduling' => '\Meraki\Model\GetNetworkGroupPolicies200ResponseInnerScheduling',
        'bandwidth' => '\Meraki\Model\GetNetworkGroupPolicies200ResponseInnerBandwidth',
        'firewall_and_traffic_shaping' => '\Meraki\Model\GetNetworkGroupPolicies200ResponseInnerFirewallAndTrafficShaping',
        'content_filtering' => '\Meraki\Model\GetNetworkGroupPolicies200ResponseInnerContentFiltering',
        'splash_auth_settings' => 'string',
        'vlan_tagging' => '\Meraki\Model\GetNetworkGroupPolicies200ResponseInnerVlanTagging',
        'bonjour_forwarding' => '\Meraki\Model\GetNetworkGroupPolicies200ResponseInnerBonjourForwarding'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'scheduling' => null,
        'bandwidth' => null,
        'firewall_and_traffic_shaping' => null,
        'content_filtering' => null,
        'splash_auth_settings' => null,
        'vlan_tagging' => null,
        'bonjour_forwarding' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'scheduling' => false,
        'bandwidth' => false,
        'firewall_and_traffic_shaping' => false,
        'content_filtering' => false,
        'splash_auth_settings' => false,
        'vlan_tagging' => false,
        'bonjour_forwarding' => false
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
        'name' => 'name',
        'scheduling' => 'scheduling',
        'bandwidth' => 'bandwidth',
        'firewall_and_traffic_shaping' => 'firewallAndTrafficShaping',
        'content_filtering' => 'contentFiltering',
        'splash_auth_settings' => 'splashAuthSettings',
        'vlan_tagging' => 'vlanTagging',
        'bonjour_forwarding' => 'bonjourForwarding'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'scheduling' => 'setScheduling',
        'bandwidth' => 'setBandwidth',
        'firewall_and_traffic_shaping' => 'setFirewallAndTrafficShaping',
        'content_filtering' => 'setContentFiltering',
        'splash_auth_settings' => 'setSplashAuthSettings',
        'vlan_tagging' => 'setVlanTagging',
        'bonjour_forwarding' => 'setBonjourForwarding'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'scheduling' => 'getScheduling',
        'bandwidth' => 'getBandwidth',
        'firewall_and_traffic_shaping' => 'getFirewallAndTrafficShaping',
        'content_filtering' => 'getContentFiltering',
        'splash_auth_settings' => 'getSplashAuthSettings',
        'vlan_tagging' => 'getVlanTagging',
        'bonjour_forwarding' => 'getBonjourForwarding'
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

    public const SPLASH_AUTH_SETTINGS_BYPASS = 'bypass';
    public const SPLASH_AUTH_SETTINGS_NETWORK_DEFAULT = 'network default';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSplashAuthSettingsAllowableValues()
    {
        return [
            self::SPLASH_AUTH_SETTINGS_BYPASS,
            self::SPLASH_AUTH_SETTINGS_NETWORK_DEFAULT,
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('scheduling', $data ?? [], null);
        $this->setIfExists('bandwidth', $data ?? [], null);
        $this->setIfExists('firewall_and_traffic_shaping', $data ?? [], null);
        $this->setIfExists('content_filtering', $data ?? [], null);
        $this->setIfExists('splash_auth_settings', $data ?? [], null);
        $this->setIfExists('vlan_tagging', $data ?? [], null);
        $this->setIfExists('bonjour_forwarding', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        $allowedValues = $this->getSplashAuthSettingsAllowableValues();
        if (!is_null($this->container['splash_auth_settings']) && !in_array($this->container['splash_auth_settings'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'splash_auth_settings', must be one of '%s'",
                $this->container['splash_auth_settings'],
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
     * @param string $name The name for your group policy. Required.
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
     * Gets scheduling
     *
     * @return \Meraki\Model\GetNetworkGroupPolicies200ResponseInnerScheduling|null
     */
    public function getScheduling()
    {
        return $this->container['scheduling'];
    }

    /**
     * Sets scheduling
     *
     * @param \Meraki\Model\GetNetworkGroupPolicies200ResponseInnerScheduling|null $scheduling scheduling
     *
     * @return self
     */
    public function setScheduling($scheduling)
    {
        if (is_null($scheduling)) {
            throw new \InvalidArgumentException('non-nullable scheduling cannot be null');
        }
        $this->container['scheduling'] = $scheduling;

        return $this;
    }

    /**
     * Gets bandwidth
     *
     * @return \Meraki\Model\GetNetworkGroupPolicies200ResponseInnerBandwidth|null
     */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
     * Sets bandwidth
     *
     * @param \Meraki\Model\GetNetworkGroupPolicies200ResponseInnerBandwidth|null $bandwidth bandwidth
     *
     * @return self
     */
    public function setBandwidth($bandwidth)
    {
        if (is_null($bandwidth)) {
            throw new \InvalidArgumentException('non-nullable bandwidth cannot be null');
        }
        $this->container['bandwidth'] = $bandwidth;

        return $this;
    }

    /**
     * Gets firewall_and_traffic_shaping
     *
     * @return \Meraki\Model\GetNetworkGroupPolicies200ResponseInnerFirewallAndTrafficShaping|null
     */
    public function getFirewallAndTrafficShaping()
    {
        return $this->container['firewall_and_traffic_shaping'];
    }

    /**
     * Sets firewall_and_traffic_shaping
     *
     * @param \Meraki\Model\GetNetworkGroupPolicies200ResponseInnerFirewallAndTrafficShaping|null $firewall_and_traffic_shaping firewall_and_traffic_shaping
     *
     * @return self
     */
    public function setFirewallAndTrafficShaping($firewall_and_traffic_shaping)
    {
        if (is_null($firewall_and_traffic_shaping)) {
            throw new \InvalidArgumentException('non-nullable firewall_and_traffic_shaping cannot be null');
        }
        $this->container['firewall_and_traffic_shaping'] = $firewall_and_traffic_shaping;

        return $this;
    }

    /**
     * Gets content_filtering
     *
     * @return \Meraki\Model\GetNetworkGroupPolicies200ResponseInnerContentFiltering|null
     */
    public function getContentFiltering()
    {
        return $this->container['content_filtering'];
    }

    /**
     * Sets content_filtering
     *
     * @param \Meraki\Model\GetNetworkGroupPolicies200ResponseInnerContentFiltering|null $content_filtering content_filtering
     *
     * @return self
     */
    public function setContentFiltering($content_filtering)
    {
        if (is_null($content_filtering)) {
            throw new \InvalidArgumentException('non-nullable content_filtering cannot be null');
        }
        $this->container['content_filtering'] = $content_filtering;

        return $this;
    }

    /**
     * Gets splash_auth_settings
     *
     * @return string|null
     */
    public function getSplashAuthSettings()
    {
        return $this->container['splash_auth_settings'];
    }

    /**
     * Sets splash_auth_settings
     *
     * @param string|null $splash_auth_settings Whether clients bound to your policy will bypass splash authorization or behave according to the network's rules. Can be one of 'network default' or 'bypass'. Only available if your network has a wireless configuration.
     *
     * @return self
     */
    public function setSplashAuthSettings($splash_auth_settings)
    {
        if (is_null($splash_auth_settings)) {
            throw new \InvalidArgumentException('non-nullable splash_auth_settings cannot be null');
        }
        $allowedValues = $this->getSplashAuthSettingsAllowableValues();
        if (!in_array($splash_auth_settings, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'splash_auth_settings', must be one of '%s'",
                    $splash_auth_settings,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['splash_auth_settings'] = $splash_auth_settings;

        return $this;
    }

    /**
     * Gets vlan_tagging
     *
     * @return \Meraki\Model\GetNetworkGroupPolicies200ResponseInnerVlanTagging|null
     */
    public function getVlanTagging()
    {
        return $this->container['vlan_tagging'];
    }

    /**
     * Sets vlan_tagging
     *
     * @param \Meraki\Model\GetNetworkGroupPolicies200ResponseInnerVlanTagging|null $vlan_tagging vlan_tagging
     *
     * @return self
     */
    public function setVlanTagging($vlan_tagging)
    {
        if (is_null($vlan_tagging)) {
            throw new \InvalidArgumentException('non-nullable vlan_tagging cannot be null');
        }
        $this->container['vlan_tagging'] = $vlan_tagging;

        return $this;
    }

    /**
     * Gets bonjour_forwarding
     *
     * @return \Meraki\Model\GetNetworkGroupPolicies200ResponseInnerBonjourForwarding|null
     */
    public function getBonjourForwarding()
    {
        return $this->container['bonjour_forwarding'];
    }

    /**
     * Sets bonjour_forwarding
     *
     * @param \Meraki\Model\GetNetworkGroupPolicies200ResponseInnerBonjourForwarding|null $bonjour_forwarding bonjour_forwarding
     *
     * @return self
     */
    public function setBonjourForwarding($bonjour_forwarding)
    {
        if (is_null($bonjour_forwarding)) {
            throw new \InvalidArgumentException('non-nullable bonjour_forwarding cannot be null');
        }
        $this->container['bonjour_forwarding'] = $bonjour_forwarding;

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


