<?php
/**
 * GetOrganizationAdmins200ResponseInner
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
 * GetOrganizationAdmins200ResponseInner Class Doc Comment
 *
 * @category Class
 * @package  Meraki
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetOrganizationAdmins200ResponseInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getOrganizationAdmins_200_response_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'email' => 'string',
        'org_access' => 'string',
        'account_status' => 'string',
        'two_factor_auth_enabled' => 'bool',
        'has_api_key' => 'bool',
        'last_active' => '\DateTime',
        'tags' => '\Meraki\Model\GetOrganizationAdmins200ResponseInnerTagsInner[]',
        'networks' => '\Meraki\Model\GetOrganizationAdmins200ResponseInnerNetworksInner[]',
        'authentication_method' => 'string'
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
        'email' => null,
        'org_access' => null,
        'account_status' => null,
        'two_factor_auth_enabled' => null,
        'has_api_key' => null,
        'last_active' => 'date-time',
        'tags' => null,
        'networks' => null,
        'authentication_method' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => false,
        'email' => false,
        'org_access' => false,
        'account_status' => false,
        'two_factor_auth_enabled' => false,
        'has_api_key' => false,
        'last_active' => false,
        'tags' => false,
        'networks' => false,
        'authentication_method' => false
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
        'email' => 'email',
        'org_access' => 'orgAccess',
        'account_status' => 'accountStatus',
        'two_factor_auth_enabled' => 'twoFactorAuthEnabled',
        'has_api_key' => 'hasApiKey',
        'last_active' => 'lastActive',
        'tags' => 'tags',
        'networks' => 'networks',
        'authentication_method' => 'authenticationMethod'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'email' => 'setEmail',
        'org_access' => 'setOrgAccess',
        'account_status' => 'setAccountStatus',
        'two_factor_auth_enabled' => 'setTwoFactorAuthEnabled',
        'has_api_key' => 'setHasApiKey',
        'last_active' => 'setLastActive',
        'tags' => 'setTags',
        'networks' => 'setNetworks',
        'authentication_method' => 'setAuthenticationMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'email' => 'getEmail',
        'org_access' => 'getOrgAccess',
        'account_status' => 'getAccountStatus',
        'two_factor_auth_enabled' => 'getTwoFactorAuthEnabled',
        'has_api_key' => 'getHasApiKey',
        'last_active' => 'getLastActive',
        'tags' => 'getTags',
        'networks' => 'getNetworks',
        'authentication_method' => 'getAuthenticationMethod'
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

    public const ORG_ACCESS_ENTERPRISE = 'enterprise';
    public const ORG_ACCESS_FULL = 'full';
    public const ORG_ACCESS_NONE = 'none';
    public const ORG_ACCESS_READ_ONLY = 'read-only';
    public const ACCOUNT_STATUS_LOCKED = 'locked';
    public const ACCOUNT_STATUS_OK = 'ok';
    public const ACCOUNT_STATUS_PENDING = 'pending';
    public const ACCOUNT_STATUS_UNVERIFIED = 'unverified';
    public const AUTHENTICATION_METHOD_CISCO_SECURE_X_SIGN_ON = 'Cisco SecureX Sign-On';
    public const AUTHENTICATION_METHOD_EMAIL = 'Email';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrgAccessAllowableValues()
    {
        return [
            self::ORG_ACCESS_ENTERPRISE,
            self::ORG_ACCESS_FULL,
            self::ORG_ACCESS_NONE,
            self::ORG_ACCESS_READ_ONLY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccountStatusAllowableValues()
    {
        return [
            self::ACCOUNT_STATUS_LOCKED,
            self::ACCOUNT_STATUS_OK,
            self::ACCOUNT_STATUS_PENDING,
            self::ACCOUNT_STATUS_UNVERIFIED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAuthenticationMethodAllowableValues()
    {
        return [
            self::AUTHENTICATION_METHOD_CISCO_SECURE_X_SIGN_ON,
            self::AUTHENTICATION_METHOD_EMAIL,
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
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('org_access', $data ?? [], null);
        $this->setIfExists('account_status', $data ?? [], null);
        $this->setIfExists('two_factor_auth_enabled', $data ?? [], null);
        $this->setIfExists('has_api_key', $data ?? [], null);
        $this->setIfExists('last_active', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('networks', $data ?? [], null);
        $this->setIfExists('authentication_method', $data ?? [], null);
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

        $allowedValues = $this->getOrgAccessAllowableValues();
        if (!is_null($this->container['org_access']) && !in_array($this->container['org_access'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'org_access', must be one of '%s'",
                $this->container['org_access'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAccountStatusAllowableValues();
        if (!is_null($this->container['account_status']) && !in_array($this->container['account_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'account_status', must be one of '%s'",
                $this->container['account_status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAuthenticationMethodAllowableValues();
        if (!is_null($this->container['authentication_method']) && !in_array($this->container['authentication_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'authentication_method', must be one of '%s'",
                $this->container['authentication_method'],
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
     * @param string|null $id Admin's ID
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
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Admin's username
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
     * @param string|null $email Admin's email address
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
     * Gets org_access
     *
     * @return string|null
     */
    public function getOrgAccess()
    {
        return $this->container['org_access'];
    }

    /**
     * Sets org_access
     *
     * @param string|null $org_access Admin's level of access to the organization
     *
     * @return self
     */
    public function setOrgAccess($org_access)
    {
        if (is_null($org_access)) {
            throw new \InvalidArgumentException('non-nullable org_access cannot be null');
        }
        $allowedValues = $this->getOrgAccessAllowableValues();
        if (!in_array($org_access, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'org_access', must be one of '%s'",
                    $org_access,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['org_access'] = $org_access;

        return $this;
    }

    /**
     * Gets account_status
     *
     * @return string|null
     */
    public function getAccountStatus()
    {
        return $this->container['account_status'];
    }

    /**
     * Sets account_status
     *
     * @param string|null $account_status Status of the admin's account
     *
     * @return self
     */
    public function setAccountStatus($account_status)
    {
        if (is_null($account_status)) {
            throw new \InvalidArgumentException('non-nullable account_status cannot be null');
        }
        $allowedValues = $this->getAccountStatusAllowableValues();
        if (!in_array($account_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'account_status', must be one of '%s'",
                    $account_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['account_status'] = $account_status;

        return $this;
    }

    /**
     * Gets two_factor_auth_enabled
     *
     * @return bool|null
     */
    public function getTwoFactorAuthEnabled()
    {
        return $this->container['two_factor_auth_enabled'];
    }

    /**
     * Sets two_factor_auth_enabled
     *
     * @param bool|null $two_factor_auth_enabled Indicates whether two-factor authentication is enabled
     *
     * @return self
     */
    public function setTwoFactorAuthEnabled($two_factor_auth_enabled)
    {
        if (is_null($two_factor_auth_enabled)) {
            throw new \InvalidArgumentException('non-nullable two_factor_auth_enabled cannot be null');
        }
        $this->container['two_factor_auth_enabled'] = $two_factor_auth_enabled;

        return $this;
    }

    /**
     * Gets has_api_key
     *
     * @return bool|null
     */
    public function getHasApiKey()
    {
        return $this->container['has_api_key'];
    }

    /**
     * Sets has_api_key
     *
     * @param bool|null $has_api_key Indicates whether the admin has an API key
     *
     * @return self
     */
    public function setHasApiKey($has_api_key)
    {
        if (is_null($has_api_key)) {
            throw new \InvalidArgumentException('non-nullable has_api_key cannot be null');
        }
        $this->container['has_api_key'] = $has_api_key;

        return $this;
    }

    /**
     * Gets last_active
     *
     * @return \DateTime|null
     */
    public function getLastActive()
    {
        return $this->container['last_active'];
    }

    /**
     * Sets last_active
     *
     * @param \DateTime|null $last_active Time when the admin was last active
     *
     * @return self
     */
    public function setLastActive($last_active)
    {
        if (is_null($last_active)) {
            throw new \InvalidArgumentException('non-nullable last_active cannot be null');
        }
        $this->container['last_active'] = $last_active;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \Meraki\Model\GetOrganizationAdmins200ResponseInnerTagsInner[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Meraki\Model\GetOrganizationAdmins200ResponseInnerTagsInner[]|null $tags Admin tag information
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (is_null($tags)) {
            throw new \InvalidArgumentException('non-nullable tags cannot be null');
        }
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets networks
     *
     * @return \Meraki\Model\GetOrganizationAdmins200ResponseInnerNetworksInner[]|null
     */
    public function getNetworks()
    {
        return $this->container['networks'];
    }

    /**
     * Sets networks
     *
     * @param \Meraki\Model\GetOrganizationAdmins200ResponseInnerNetworksInner[]|null $networks Admin network access information
     *
     * @return self
     */
    public function setNetworks($networks)
    {
        if (is_null($networks)) {
            throw new \InvalidArgumentException('non-nullable networks cannot be null');
        }
        $this->container['networks'] = $networks;

        return $this;
    }

    /**
     * Gets authentication_method
     *
     * @return string|null
     */
    public function getAuthenticationMethod()
    {
        return $this->container['authentication_method'];
    }

    /**
     * Sets authentication_method
     *
     * @param string|null $authentication_method Admin's authentication method
     *
     * @return self
     */
    public function setAuthenticationMethod($authentication_method)
    {
        if (is_null($authentication_method)) {
            throw new \InvalidArgumentException('non-nullable authentication_method cannot be null');
        }
        $allowedValues = $this->getAuthenticationMethodAllowableValues();
        if (!in_array($authentication_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'authentication_method', must be one of '%s'",
                    $authentication_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['authentication_method'] = $authentication_method;

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


