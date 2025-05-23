<?php
/**
 * GetOrganizationSmVppAccounts200ResponseInner
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
 * GetOrganizationSmVppAccounts200ResponseInner Class Doc Comment
 *
 * @category Class
 * @package  Meraki
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetOrganizationSmVppAccounts200ResponseInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getOrganizationSmVppAccounts_200_response_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'vpp_account_id' => 'string',
        'content_token' => 'string',
        'email' => 'string',
        'name' => 'string',
        'allowed_admins' => 'string',
        'network_id_admins' => 'string',
        'assignable_networks' => 'string',
        'assignable_network_ids' => 'string[]',
        'vpp_location_id' => 'string',
        'vpp_location_name' => 'string',
        'last_synced_at' => 'string',
        'last_force_synced_at' => 'string',
        'parsed_token' => '\Meraki\Model\GetOrganizationSmVppAccounts200ResponseInnerParsedToken',
        'id' => 'string',
        'vpp_service_token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'vpp_account_id' => null,
        'content_token' => null,
        'email' => null,
        'name' => null,
        'allowed_admins' => null,
        'network_id_admins' => null,
        'assignable_networks' => null,
        'assignable_network_ids' => null,
        'vpp_location_id' => null,
        'vpp_location_name' => null,
        'last_synced_at' => null,
        'last_force_synced_at' => null,
        'parsed_token' => null,
        'id' => null,
        'vpp_service_token' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'vpp_account_id' => false,
        'content_token' => false,
        'email' => false,
        'name' => false,
        'allowed_admins' => false,
        'network_id_admins' => false,
        'assignable_networks' => false,
        'assignable_network_ids' => false,
        'vpp_location_id' => false,
        'vpp_location_name' => false,
        'last_synced_at' => false,
        'last_force_synced_at' => false,
        'parsed_token' => false,
        'id' => false,
        'vpp_service_token' => false
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
        'vpp_account_id' => 'vppAccountId',
        'content_token' => 'contentToken',
        'email' => 'email',
        'name' => 'name',
        'allowed_admins' => 'allowedAdmins',
        'network_id_admins' => 'networkIdAdmins',
        'assignable_networks' => 'assignableNetworks',
        'assignable_network_ids' => 'assignableNetworkIds',
        'vpp_location_id' => 'vppLocationId',
        'vpp_location_name' => 'vppLocationName',
        'last_synced_at' => 'lastSyncedAt',
        'last_force_synced_at' => 'lastForceSyncedAt',
        'parsed_token' => 'parsedToken',
        'id' => 'id',
        'vpp_service_token' => 'vppServiceToken'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vpp_account_id' => 'setVppAccountId',
        'content_token' => 'setContentToken',
        'email' => 'setEmail',
        'name' => 'setName',
        'allowed_admins' => 'setAllowedAdmins',
        'network_id_admins' => 'setNetworkIdAdmins',
        'assignable_networks' => 'setAssignableNetworks',
        'assignable_network_ids' => 'setAssignableNetworkIds',
        'vpp_location_id' => 'setVppLocationId',
        'vpp_location_name' => 'setVppLocationName',
        'last_synced_at' => 'setLastSyncedAt',
        'last_force_synced_at' => 'setLastForceSyncedAt',
        'parsed_token' => 'setParsedToken',
        'id' => 'setId',
        'vpp_service_token' => 'setVppServiceToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vpp_account_id' => 'getVppAccountId',
        'content_token' => 'getContentToken',
        'email' => 'getEmail',
        'name' => 'getName',
        'allowed_admins' => 'getAllowedAdmins',
        'network_id_admins' => 'getNetworkIdAdmins',
        'assignable_networks' => 'getAssignableNetworks',
        'assignable_network_ids' => 'getAssignableNetworkIds',
        'vpp_location_id' => 'getVppLocationId',
        'vpp_location_name' => 'getVppLocationName',
        'last_synced_at' => 'getLastSyncedAt',
        'last_force_synced_at' => 'getLastForceSyncedAt',
        'parsed_token' => 'getParsedToken',
        'id' => 'getId',
        'vpp_service_token' => 'getVppServiceToken'
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
        $this->setIfExists('vpp_account_id', $data ?? [], null);
        $this->setIfExists('content_token', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('allowed_admins', $data ?? [], null);
        $this->setIfExists('network_id_admins', $data ?? [], null);
        $this->setIfExists('assignable_networks', $data ?? [], null);
        $this->setIfExists('assignable_network_ids', $data ?? [], null);
        $this->setIfExists('vpp_location_id', $data ?? [], null);
        $this->setIfExists('vpp_location_name', $data ?? [], null);
        $this->setIfExists('last_synced_at', $data ?? [], null);
        $this->setIfExists('last_force_synced_at', $data ?? [], null);
        $this->setIfExists('parsed_token', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('vpp_service_token', $data ?? [], null);
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
     * Gets vpp_account_id
     *
     * @return string|null
     */
    public function getVppAccountId()
    {
        return $this->container['vpp_account_id'];
    }

    /**
     * Sets vpp_account_id
     *
     * @param string|null $vpp_account_id The id of the VPP Account
     *
     * @return self
     */
    public function setVppAccountId($vpp_account_id)
    {
        if (is_null($vpp_account_id)) {
            throw new \InvalidArgumentException('non-nullable vpp_account_id cannot be null');
        }
        $this->container['vpp_account_id'] = $vpp_account_id;

        return $this;
    }

    /**
     * Gets content_token
     *
     * @return string|null
     */
    public function getContentToken()
    {
        return $this->container['content_token'];
    }

    /**
     * Sets content_token
     *
     * @param string|null $content_token The VPP service token
     *
     * @return self
     */
    public function setContentToken($content_token)
    {
        if (is_null($content_token)) {
            throw new \InvalidArgumentException('non-nullable content_token cannot be null');
        }
        $this->container['content_token'] = $content_token;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email The email address associated with the VPP account
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the VPP account
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
     * Gets allowed_admins
     *
     * @return string|null
     */
    public function getAllowedAdmins()
    {
        return $this->container['allowed_admins'];
    }

    /**
     * Sets allowed_admins
     *
     * @param string|null $allowed_admins The allowed admins for the VPP account
     *
     * @return self
     */
    public function setAllowedAdmins($allowed_admins)
    {
        if (is_null($allowed_admins)) {
            throw new \InvalidArgumentException('non-nullable allowed_admins cannot be null');
        }
        $this->container['allowed_admins'] = $allowed_admins;

        return $this;
    }

    /**
     * Gets network_id_admins
     *
     * @return string|null
     */
    public function getNetworkIdAdmins()
    {
        return $this->container['network_id_admins'];
    }

    /**
     * Sets network_id_admins
     *
     * @param string|null $network_id_admins The network IDs of the admins for the VPP account
     *
     * @return self
     */
    public function setNetworkIdAdmins($network_id_admins)
    {
        if (is_null($network_id_admins)) {
            throw new \InvalidArgumentException('non-nullable network_id_admins cannot be null');
        }
        $this->container['network_id_admins'] = $network_id_admins;

        return $this;
    }

    /**
     * Gets assignable_networks
     *
     * @return string|null
     */
    public function getAssignableNetworks()
    {
        return $this->container['assignable_networks'];
    }

    /**
     * Sets assignable_networks
     *
     * @param string|null $assignable_networks The assignable networks for the VPP account
     *
     * @return self
     */
    public function setAssignableNetworks($assignable_networks)
    {
        if (is_null($assignable_networks)) {
            throw new \InvalidArgumentException('non-nullable assignable_networks cannot be null');
        }
        $this->container['assignable_networks'] = $assignable_networks;

        return $this;
    }

    /**
     * Gets assignable_network_ids
     *
     * @return string[]|null
     */
    public function getAssignableNetworkIds()
    {
        return $this->container['assignable_network_ids'];
    }

    /**
     * Sets assignable_network_ids
     *
     * @param string[]|null $assignable_network_ids The network IDs of the assignable networks for the VPP account
     *
     * @return self
     */
    public function setAssignableNetworkIds($assignable_network_ids)
    {
        if (is_null($assignable_network_ids)) {
            throw new \InvalidArgumentException('non-nullable assignable_network_ids cannot be null');
        }
        $this->container['assignable_network_ids'] = $assignable_network_ids;

        return $this;
    }

    /**
     * Gets vpp_location_id
     *
     * @return string|null
     */
    public function getVppLocationId()
    {
        return $this->container['vpp_location_id'];
    }

    /**
     * Sets vpp_location_id
     *
     * @param string|null $vpp_location_id The VPP location ID
     *
     * @return self
     */
    public function setVppLocationId($vpp_location_id)
    {
        if (is_null($vpp_location_id)) {
            throw new \InvalidArgumentException('non-nullable vpp_location_id cannot be null');
        }
        $this->container['vpp_location_id'] = $vpp_location_id;

        return $this;
    }

    /**
     * Gets vpp_location_name
     *
     * @return string|null
     */
    public function getVppLocationName()
    {
        return $this->container['vpp_location_name'];
    }

    /**
     * Sets vpp_location_name
     *
     * @param string|null $vpp_location_name The VPP location name
     *
     * @return self
     */
    public function setVppLocationName($vpp_location_name)
    {
        if (is_null($vpp_location_name)) {
            throw new \InvalidArgumentException('non-nullable vpp_location_name cannot be null');
        }
        $this->container['vpp_location_name'] = $vpp_location_name;

        return $this;
    }

    /**
     * Gets last_synced_at
     *
     * @return string|null
     */
    public function getLastSyncedAt()
    {
        return $this->container['last_synced_at'];
    }

    /**
     * Sets last_synced_at
     *
     * @param string|null $last_synced_at The last time the VPP account was synced
     *
     * @return self
     */
    public function setLastSyncedAt($last_synced_at)
    {
        if (is_null($last_synced_at)) {
            throw new \InvalidArgumentException('non-nullable last_synced_at cannot be null');
        }
        $this->container['last_synced_at'] = $last_synced_at;

        return $this;
    }

    /**
     * Gets last_force_synced_at
     *
     * @return string|null
     */
    public function getLastForceSyncedAt()
    {
        return $this->container['last_force_synced_at'];
    }

    /**
     * Sets last_force_synced_at
     *
     * @param string|null $last_force_synced_at The last time the VPP account was force synced
     *
     * @return self
     */
    public function setLastForceSyncedAt($last_force_synced_at)
    {
        if (is_null($last_force_synced_at)) {
            throw new \InvalidArgumentException('non-nullable last_force_synced_at cannot be null');
        }
        $this->container['last_force_synced_at'] = $last_force_synced_at;

        return $this;
    }

    /**
     * Gets parsed_token
     *
     * @return \Meraki\Model\GetOrganizationSmVppAccounts200ResponseInnerParsedToken|null
     */
    public function getParsedToken()
    {
        return $this->container['parsed_token'];
    }

    /**
     * Sets parsed_token
     *
     * @param \Meraki\Model\GetOrganizationSmVppAccounts200ResponseInnerParsedToken|null $parsed_token parsed_token
     *
     * @return self
     */
    public function setParsedToken($parsed_token)
    {
        if (is_null($parsed_token)) {
            throw new \InvalidArgumentException('non-nullable parsed_token cannot be null');
        }
        $this->container['parsed_token'] = $parsed_token;

        return $this;
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
     * @param string|null $id The id of the VPP Account
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
     * Gets vpp_service_token
     *
     * @return string|null
     */
    public function getVppServiceToken()
    {
        return $this->container['vpp_service_token'];
    }

    /**
     * Sets vpp_service_token
     *
     * @param string|null $vpp_service_token The VPP Account's Service Token
     *
     * @return self
     */
    public function setVppServiceToken($vpp_service_token)
    {
        if (is_null($vpp_service_token)) {
            throw new \InvalidArgumentException('non-nullable vpp_service_token cannot be null');
        }
        $this->container['vpp_service_token'] = $vpp_service_token;

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


