<?php
/**
 * UpdateNetworkApplianceTrafficShapingVpnExclusions200Response
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
 * UpdateNetworkApplianceTrafficShapingVpnExclusions200Response Class Doc Comment
 *
 * @category Class
 * @package  Meraki
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateNetworkApplianceTrafficShapingVpnExclusions200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'updateNetworkApplianceTrafficShapingVpnExclusions_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'network_id' => 'string',
        'network_name' => 'string',
        'custom' => '\Meraki\Model\UpdateNetworkApplianceTrafficShapingVpnExclusions200ResponseCustomInner[]',
        'major_applications' => '\Meraki\Model\UpdateNetworkApplianceTrafficShapingVpnExclusions200ResponseMajorApplicationsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'network_id' => null,
        'network_name' => null,
        'custom' => null,
        'major_applications' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'network_id' => false,
        'network_name' => false,
        'custom' => false,
        'major_applications' => false
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
        'network_id' => 'networkId',
        'network_name' => 'networkName',
        'custom' => 'custom',
        'major_applications' => 'majorApplications'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'network_id' => 'setNetworkId',
        'network_name' => 'setNetworkName',
        'custom' => 'setCustom',
        'major_applications' => 'setMajorApplications'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'network_id' => 'getNetworkId',
        'network_name' => 'getNetworkName',
        'custom' => 'getCustom',
        'major_applications' => 'getMajorApplications'
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
        $this->setIfExists('network_id', $data ?? [], null);
        $this->setIfExists('network_name', $data ?? [], null);
        $this->setIfExists('custom', $data ?? [], null);
        $this->setIfExists('major_applications', $data ?? [], null);
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

        if ($this->container['network_id'] === null) {
            $invalidProperties[] = "'network_id' can't be null";
        }
        if ($this->container['network_name'] === null) {
            $invalidProperties[] = "'network_name' can't be null";
        }
        if ($this->container['custom'] === null) {
            $invalidProperties[] = "'custom' can't be null";
        }
        if ($this->container['major_applications'] === null) {
            $invalidProperties[] = "'major_applications' can't be null";
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
     * Gets network_id
     *
     * @return string
     */
    public function getNetworkId()
    {
        return $this->container['network_id'];
    }

    /**
     * Sets network_id
     *
     * @param string $network_id ID of the network whose VPN exclusion rules are returned.
     *
     * @return self
     */
    public function setNetworkId($network_id)
    {
        if (is_null($network_id)) {
            throw new \InvalidArgumentException('non-nullable network_id cannot be null');
        }
        $this->container['network_id'] = $network_id;

        return $this;
    }

    /**
     * Gets network_name
     *
     * @return string
     */
    public function getNetworkName()
    {
        return $this->container['network_name'];
    }

    /**
     * Sets network_name
     *
     * @param string $network_name Name of the network whose VPN exclusion rules are returned.
     *
     * @return self
     */
    public function setNetworkName($network_name)
    {
        if (is_null($network_name)) {
            throw new \InvalidArgumentException('non-nullable network_name cannot be null');
        }
        $this->container['network_name'] = $network_name;

        return $this;
    }

    /**
     * Gets custom
     *
     * @return \Meraki\Model\UpdateNetworkApplianceTrafficShapingVpnExclusions200ResponseCustomInner[]
     */
    public function getCustom()
    {
        return $this->container['custom'];
    }

    /**
     * Sets custom
     *
     * @param \Meraki\Model\UpdateNetworkApplianceTrafficShapingVpnExclusions200ResponseCustomInner[] $custom Custom VPN exclusion rules.
     *
     * @return self
     */
    public function setCustom($custom)
    {
        if (is_null($custom)) {
            throw new \InvalidArgumentException('non-nullable custom cannot be null');
        }
        $this->container['custom'] = $custom;

        return $this;
    }

    /**
     * Gets major_applications
     *
     * @return \Meraki\Model\UpdateNetworkApplianceTrafficShapingVpnExclusions200ResponseMajorApplicationsInner[]
     */
    public function getMajorApplications()
    {
        return $this->container['major_applications'];
    }

    /**
     * Sets major_applications
     *
     * @param \Meraki\Model\UpdateNetworkApplianceTrafficShapingVpnExclusions200ResponseMajorApplicationsInner[] $major_applications Major Application based VPN exclusion rules.
     *
     * @return self
     */
    public function setMajorApplications($major_applications)
    {
        if (is_null($major_applications)) {
            throw new \InvalidArgumentException('non-nullable major_applications cannot be null');
        }
        $this->container['major_applications'] = $major_applications;

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


