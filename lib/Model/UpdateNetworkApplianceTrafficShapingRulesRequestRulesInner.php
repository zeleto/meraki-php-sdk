<?php
/**
 * UpdateNetworkApplianceTrafficShapingRulesRequestRulesInner
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
 * UpdateNetworkApplianceTrafficShapingRulesRequestRulesInner Class Doc Comment
 *
 * @category Class
 * @package  Meraki
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateNetworkApplianceTrafficShapingRulesRequestRulesInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'updateNetworkApplianceTrafficShapingRules_request_rules_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'definitions' => '\Meraki\Model\UpdateNetworkApplianceTrafficShapingRulesRequestRulesInnerDefinitionsInner[]',
        'per_client_bandwidth_limits' => '\Meraki\Model\UpdateNetworkApplianceTrafficShapingRulesRequestRulesInnerPerClientBandwidthLimits',
        'dscp_tag_value' => 'int',
        'priority' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'definitions' => null,
        'per_client_bandwidth_limits' => null,
        'dscp_tag_value' => null,
        'priority' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'definitions' => false,
        'per_client_bandwidth_limits' => false,
        'dscp_tag_value' => false,
        'priority' => false
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
        'definitions' => 'definitions',
        'per_client_bandwidth_limits' => 'perClientBandwidthLimits',
        'dscp_tag_value' => 'dscpTagValue',
        'priority' => 'priority'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'definitions' => 'setDefinitions',
        'per_client_bandwidth_limits' => 'setPerClientBandwidthLimits',
        'dscp_tag_value' => 'setDscpTagValue',
        'priority' => 'setPriority'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'definitions' => 'getDefinitions',
        'per_client_bandwidth_limits' => 'getPerClientBandwidthLimits',
        'dscp_tag_value' => 'getDscpTagValue',
        'priority' => 'getPriority'
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
        $this->setIfExists('definitions', $data ?? [], null);
        $this->setIfExists('per_client_bandwidth_limits', $data ?? [], null);
        $this->setIfExists('dscp_tag_value', $data ?? [], null);
        $this->setIfExists('priority', $data ?? [], null);
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

        if ($this->container['definitions'] === null) {
            $invalidProperties[] = "'definitions' can't be null";
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
     * Gets definitions
     *
     * @return \Meraki\Model\UpdateNetworkApplianceTrafficShapingRulesRequestRulesInnerDefinitionsInner[]
     */
    public function getDefinitions()
    {
        return $this->container['definitions'];
    }

    /**
     * Sets definitions
     *
     * @param \Meraki\Model\UpdateNetworkApplianceTrafficShapingRulesRequestRulesInnerDefinitionsInner[] $definitions A list of objects describing the definitions of your traffic shaping rule. At least one definition is required.
     *
     * @return self
     */
    public function setDefinitions($definitions)
    {
        if (is_null($definitions)) {
            throw new \InvalidArgumentException('non-nullable definitions cannot be null');
        }
        $this->container['definitions'] = $definitions;

        return $this;
    }

    /**
     * Gets per_client_bandwidth_limits
     *
     * @return \Meraki\Model\UpdateNetworkApplianceTrafficShapingRulesRequestRulesInnerPerClientBandwidthLimits|null
     */
    public function getPerClientBandwidthLimits()
    {
        return $this->container['per_client_bandwidth_limits'];
    }

    /**
     * Sets per_client_bandwidth_limits
     *
     * @param \Meraki\Model\UpdateNetworkApplianceTrafficShapingRulesRequestRulesInnerPerClientBandwidthLimits|null $per_client_bandwidth_limits per_client_bandwidth_limits
     *
     * @return self
     */
    public function setPerClientBandwidthLimits($per_client_bandwidth_limits)
    {
        if (is_null($per_client_bandwidth_limits)) {
            throw new \InvalidArgumentException('non-nullable per_client_bandwidth_limits cannot be null');
        }
        $this->container['per_client_bandwidth_limits'] = $per_client_bandwidth_limits;

        return $this;
    }

    /**
     * Gets dscp_tag_value
     *
     * @return int|null
     */
    public function getDscpTagValue()
    {
        return $this->container['dscp_tag_value'];
    }

    /**
     * Sets dscp_tag_value
     *
     * @param int|null $dscp_tag_value The DSCP tag applied by your rule. null means 'Do not change DSCP tag'.     For a list of possible tag values, use the trafficShaping/dscpTaggingOptions endpoint.
     *
     * @return self
     */
    public function setDscpTagValue($dscp_tag_value)
    {
        if (is_null($dscp_tag_value)) {
            throw new \InvalidArgumentException('non-nullable dscp_tag_value cannot be null');
        }
        $this->container['dscp_tag_value'] = $dscp_tag_value;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return string|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param string|null $priority A string, indicating the priority level for packets bound to your rule.     Can be 'low', 'normal' or 'high'.
     *
     * @return self
     */
    public function setPriority($priority)
    {
        if (is_null($priority)) {
            throw new \InvalidArgumentException('non-nullable priority cannot be null');
        }
        $this->container['priority'] = $priority;

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


