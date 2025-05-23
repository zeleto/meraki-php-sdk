<?php
/**
 * GetOrganizationLicensingCotermLicenses200ResponseInner
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
 * GetOrganizationLicensingCotermLicenses200ResponseInner Class Doc Comment
 *
 * @category Class
 * @package  Meraki
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetOrganizationLicensingCotermLicenses200ResponseInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getOrganizationLicensingCotermLicenses_200_response_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'key' => 'string',
        'organization_id' => 'string',
        'duration' => 'int',
        'mode' => 'string',
        'started_at' => '\DateTime',
        'claimed_at' => '\DateTime',
        'invalidated' => 'bool',
        'invalidated_at' => '\DateTime',
        'expired' => 'bool',
        'editions' => '\Meraki\Model\GetOrganizationLicensingCotermLicenses200ResponseInnerEditionsInner[]',
        'counts' => '\Meraki\Model\GetOrganizationLicensingCotermLicenses200ResponseInnerCountsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'key' => null,
        'organization_id' => null,
        'duration' => null,
        'mode' => null,
        'started_at' => 'date-time',
        'claimed_at' => 'date-time',
        'invalidated' => null,
        'invalidated_at' => 'date-time',
        'expired' => null,
        'editions' => null,
        'counts' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'key' => false,
        'organization_id' => false,
        'duration' => false,
        'mode' => false,
        'started_at' => false,
        'claimed_at' => false,
        'invalidated' => false,
        'invalidated_at' => false,
        'expired' => false,
        'editions' => false,
        'counts' => false
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
        'key' => 'key',
        'organization_id' => 'organizationId',
        'duration' => 'duration',
        'mode' => 'mode',
        'started_at' => 'startedAt',
        'claimed_at' => 'claimedAt',
        'invalidated' => 'invalidated',
        'invalidated_at' => 'invalidatedAt',
        'expired' => 'expired',
        'editions' => 'editions',
        'counts' => 'counts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'key' => 'setKey',
        'organization_id' => 'setOrganizationId',
        'duration' => 'setDuration',
        'mode' => 'setMode',
        'started_at' => 'setStartedAt',
        'claimed_at' => 'setClaimedAt',
        'invalidated' => 'setInvalidated',
        'invalidated_at' => 'setInvalidatedAt',
        'expired' => 'setExpired',
        'editions' => 'setEditions',
        'counts' => 'setCounts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'key' => 'getKey',
        'organization_id' => 'getOrganizationId',
        'duration' => 'getDuration',
        'mode' => 'getMode',
        'started_at' => 'getStartedAt',
        'claimed_at' => 'getClaimedAt',
        'invalidated' => 'getInvalidated',
        'invalidated_at' => 'getInvalidatedAt',
        'expired' => 'getExpired',
        'editions' => 'getEditions',
        'counts' => 'getCounts'
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

    public const MODE_ADD_DEVICES = 'addDevices';
    public const MODE_RENEW = 'renew';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_ADD_DEVICES,
            self::MODE_RENEW,
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
        $this->setIfExists('key', $data ?? [], null);
        $this->setIfExists('organization_id', $data ?? [], null);
        $this->setIfExists('duration', $data ?? [], null);
        $this->setIfExists('mode', $data ?? [], null);
        $this->setIfExists('started_at', $data ?? [], null);
        $this->setIfExists('claimed_at', $data ?? [], null);
        $this->setIfExists('invalidated', $data ?? [], null);
        $this->setIfExists('invalidated_at', $data ?? [], null);
        $this->setIfExists('expired', $data ?? [], null);
        $this->setIfExists('editions', $data ?? [], null);
        $this->setIfExists('counts', $data ?? [], null);
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

        $allowedValues = $this->getModeAllowableValues();
        if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'mode', must be one of '%s'",
                $this->container['mode'],
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
     * Gets key
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string|null $key The key of the license
     *
     * @return self
     */
    public function setKey($key)
    {
        if (is_null($key)) {
            throw new \InvalidArgumentException('non-nullable key cannot be null');
        }
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets organization_id
     *
     * @return string|null
     */
    public function getOrganizationId()
    {
        return $this->container['organization_id'];
    }

    /**
     * Sets organization_id
     *
     * @param string|null $organization_id The ID of the organization that the license is claimed in
     *
     * @return self
     */
    public function setOrganizationId($organization_id)
    {
        if (is_null($organization_id)) {
            throw new \InvalidArgumentException('non-nullable organization_id cannot be null');
        }
        $this->container['organization_id'] = $organization_id;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int|null $duration The duration (term length) of the license, measured in days
     *
     * @return self
     */
    public function setDuration($duration)
    {
        if (is_null($duration)) {
            throw new \InvalidArgumentException('non-nullable duration cannot be null');
        }
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets mode
     *
     * @return string|null
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param string|null $mode The operation mode of the license when it was claimed
     *
     * @return self
     */
    public function setMode($mode)
    {
        if (is_null($mode)) {
            throw new \InvalidArgumentException('non-nullable mode cannot be null');
        }
        $allowedValues = $this->getModeAllowableValues();
        if (!in_array($mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'mode', must be one of '%s'",
                    $mode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets started_at
     *
     * @return \DateTime|null
     */
    public function getStartedAt()
    {
        return $this->container['started_at'];
    }

    /**
     * Sets started_at
     *
     * @param \DateTime|null $started_at When the license's term began (approximately the date when the license was created)
     *
     * @return self
     */
    public function setStartedAt($started_at)
    {
        if (is_null($started_at)) {
            throw new \InvalidArgumentException('non-nullable started_at cannot be null');
        }
        $this->container['started_at'] = $started_at;

        return $this;
    }

    /**
     * Gets claimed_at
     *
     * @return \DateTime|null
     */
    public function getClaimedAt()
    {
        return $this->container['claimed_at'];
    }

    /**
     * Sets claimed_at
     *
     * @param \DateTime|null $claimed_at When the license was claimed into the organization
     *
     * @return self
     */
    public function setClaimedAt($claimed_at)
    {
        if (is_null($claimed_at)) {
            throw new \InvalidArgumentException('non-nullable claimed_at cannot be null');
        }
        $this->container['claimed_at'] = $claimed_at;

        return $this;
    }

    /**
     * Gets invalidated
     *
     * @return bool|null
     */
    public function getInvalidated()
    {
        return $this->container['invalidated'];
    }

    /**
     * Sets invalidated
     *
     * @param bool|null $invalidated Flag to indicated that the license is invalidated
     *
     * @return self
     */
    public function setInvalidated($invalidated)
    {
        if (is_null($invalidated)) {
            throw new \InvalidArgumentException('non-nullable invalidated cannot be null');
        }
        $this->container['invalidated'] = $invalidated;

        return $this;
    }

    /**
     * Gets invalidated_at
     *
     * @return \DateTime|null
     */
    public function getInvalidatedAt()
    {
        return $this->container['invalidated_at'];
    }

    /**
     * Sets invalidated_at
     *
     * @param \DateTime|null $invalidated_at When the license was invalidated. Will be null for active licenses
     *
     * @return self
     */
    public function setInvalidatedAt($invalidated_at)
    {
        if (is_null($invalidated_at)) {
            throw new \InvalidArgumentException('non-nullable invalidated_at cannot be null');
        }
        $this->container['invalidated_at'] = $invalidated_at;

        return $this;
    }

    /**
     * Gets expired
     *
     * @return bool|null
     */
    public function getExpired()
    {
        return $this->container['expired'];
    }

    /**
     * Sets expired
     *
     * @param bool|null $expired Flag to indicate if the license is expired
     *
     * @return self
     */
    public function setExpired($expired)
    {
        if (is_null($expired)) {
            throw new \InvalidArgumentException('non-nullable expired cannot be null');
        }
        $this->container['expired'] = $expired;

        return $this;
    }

    /**
     * Gets editions
     *
     * @return \Meraki\Model\GetOrganizationLicensingCotermLicenses200ResponseInnerEditionsInner[]|null
     */
    public function getEditions()
    {
        return $this->container['editions'];
    }

    /**
     * Sets editions
     *
     * @param \Meraki\Model\GetOrganizationLicensingCotermLicenses200ResponseInnerEditionsInner[]|null $editions The editions of the license for each relevant product type
     *
     * @return self
     */
    public function setEditions($editions)
    {
        if (is_null($editions)) {
            throw new \InvalidArgumentException('non-nullable editions cannot be null');
        }
        $this->container['editions'] = $editions;

        return $this;
    }

    /**
     * Gets counts
     *
     * @return \Meraki\Model\GetOrganizationLicensingCotermLicenses200ResponseInnerCountsInner[]|null
     */
    public function getCounts()
    {
        return $this->container['counts'];
    }

    /**
     * Sets counts
     *
     * @param \Meraki\Model\GetOrganizationLicensingCotermLicenses200ResponseInnerCountsInner[]|null $counts The counts of the license by model type
     *
     * @return self
     */
    public function setCounts($counts)
    {
        if (is_null($counts)) {
            throw new \InvalidArgumentException('non-nullable counts cannot be null');
        }
        $this->container['counts'] = $counts;

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


