<?php
/**
 * UpdateOrganizationLoginSecurityRequest
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
 * UpdateOrganizationLoginSecurityRequest Class Doc Comment
 *
 * @category Class
 * @package  Meraki
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateOrganizationLoginSecurityRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'updateOrganizationLoginSecurity_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'enforce_password_expiration' => 'bool',
        'password_expiration_days' => 'int',
        'enforce_different_passwords' => 'bool',
        'num_different_passwords' => 'int',
        'enforce_strong_passwords' => 'bool',
        'minimum_password_length' => 'int',
        'enforce_account_lockout' => 'bool',
        'account_lockout_attempts' => 'int',
        'enforce_idle_timeout' => 'bool',
        'idle_timeout_minutes' => 'int',
        'enforce_two_factor_auth' => 'bool',
        'enforce_login_ip_ranges' => 'bool',
        'login_ip_ranges' => 'string[]',
        'api_authentication' => '\Meraki\Model\GetOrganizationLoginSecurity200ResponseApiAuthentication'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'enforce_password_expiration' => null,
        'password_expiration_days' => null,
        'enforce_different_passwords' => null,
        'num_different_passwords' => null,
        'enforce_strong_passwords' => null,
        'minimum_password_length' => null,
        'enforce_account_lockout' => null,
        'account_lockout_attempts' => null,
        'enforce_idle_timeout' => null,
        'idle_timeout_minutes' => null,
        'enforce_two_factor_auth' => null,
        'enforce_login_ip_ranges' => null,
        'login_ip_ranges' => null,
        'api_authentication' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'enforce_password_expiration' => false,
        'password_expiration_days' => false,
        'enforce_different_passwords' => false,
        'num_different_passwords' => false,
        'enforce_strong_passwords' => false,
        'minimum_password_length' => false,
        'enforce_account_lockout' => false,
        'account_lockout_attempts' => false,
        'enforce_idle_timeout' => false,
        'idle_timeout_minutes' => false,
        'enforce_two_factor_auth' => false,
        'enforce_login_ip_ranges' => false,
        'login_ip_ranges' => false,
        'api_authentication' => false
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
        'enforce_password_expiration' => 'enforcePasswordExpiration',
        'password_expiration_days' => 'passwordExpirationDays',
        'enforce_different_passwords' => 'enforceDifferentPasswords',
        'num_different_passwords' => 'numDifferentPasswords',
        'enforce_strong_passwords' => 'enforceStrongPasswords',
        'minimum_password_length' => 'minimumPasswordLength',
        'enforce_account_lockout' => 'enforceAccountLockout',
        'account_lockout_attempts' => 'accountLockoutAttempts',
        'enforce_idle_timeout' => 'enforceIdleTimeout',
        'idle_timeout_minutes' => 'idleTimeoutMinutes',
        'enforce_two_factor_auth' => 'enforceTwoFactorAuth',
        'enforce_login_ip_ranges' => 'enforceLoginIpRanges',
        'login_ip_ranges' => 'loginIpRanges',
        'api_authentication' => 'apiAuthentication'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enforce_password_expiration' => 'setEnforcePasswordExpiration',
        'password_expiration_days' => 'setPasswordExpirationDays',
        'enforce_different_passwords' => 'setEnforceDifferentPasswords',
        'num_different_passwords' => 'setNumDifferentPasswords',
        'enforce_strong_passwords' => 'setEnforceStrongPasswords',
        'minimum_password_length' => 'setMinimumPasswordLength',
        'enforce_account_lockout' => 'setEnforceAccountLockout',
        'account_lockout_attempts' => 'setAccountLockoutAttempts',
        'enforce_idle_timeout' => 'setEnforceIdleTimeout',
        'idle_timeout_minutes' => 'setIdleTimeoutMinutes',
        'enforce_two_factor_auth' => 'setEnforceTwoFactorAuth',
        'enforce_login_ip_ranges' => 'setEnforceLoginIpRanges',
        'login_ip_ranges' => 'setLoginIpRanges',
        'api_authentication' => 'setApiAuthentication'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enforce_password_expiration' => 'getEnforcePasswordExpiration',
        'password_expiration_days' => 'getPasswordExpirationDays',
        'enforce_different_passwords' => 'getEnforceDifferentPasswords',
        'num_different_passwords' => 'getNumDifferentPasswords',
        'enforce_strong_passwords' => 'getEnforceStrongPasswords',
        'minimum_password_length' => 'getMinimumPasswordLength',
        'enforce_account_lockout' => 'getEnforceAccountLockout',
        'account_lockout_attempts' => 'getAccountLockoutAttempts',
        'enforce_idle_timeout' => 'getEnforceIdleTimeout',
        'idle_timeout_minutes' => 'getIdleTimeoutMinutes',
        'enforce_two_factor_auth' => 'getEnforceTwoFactorAuth',
        'enforce_login_ip_ranges' => 'getEnforceLoginIpRanges',
        'login_ip_ranges' => 'getLoginIpRanges',
        'api_authentication' => 'getApiAuthentication'
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
        $this->setIfExists('enforce_password_expiration', $data ?? [], null);
        $this->setIfExists('password_expiration_days', $data ?? [], null);
        $this->setIfExists('enforce_different_passwords', $data ?? [], null);
        $this->setIfExists('num_different_passwords', $data ?? [], null);
        $this->setIfExists('enforce_strong_passwords', $data ?? [], null);
        $this->setIfExists('minimum_password_length', $data ?? [], null);
        $this->setIfExists('enforce_account_lockout', $data ?? [], null);
        $this->setIfExists('account_lockout_attempts', $data ?? [], null);
        $this->setIfExists('enforce_idle_timeout', $data ?? [], null);
        $this->setIfExists('idle_timeout_minutes', $data ?? [], null);
        $this->setIfExists('enforce_two_factor_auth', $data ?? [], null);
        $this->setIfExists('enforce_login_ip_ranges', $data ?? [], null);
        $this->setIfExists('login_ip_ranges', $data ?? [], null);
        $this->setIfExists('api_authentication', $data ?? [], null);
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

        if (!is_null($this->container['minimum_password_length']) && ($this->container['minimum_password_length'] > 16)) {
            $invalidProperties[] = "invalid value for 'minimum_password_length', must be smaller than or equal to 16.";
        }

        if (!is_null($this->container['minimum_password_length']) && ($this->container['minimum_password_length'] < 8)) {
            $invalidProperties[] = "invalid value for 'minimum_password_length', must be bigger than or equal to 8.";
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
     * Gets enforce_password_expiration
     *
     * @return bool|null
     */
    public function getEnforcePasswordExpiration()
    {
        return $this->container['enforce_password_expiration'];
    }

    /**
     * Sets enforce_password_expiration
     *
     * @param bool|null $enforce_password_expiration Boolean indicating whether users are forced to change their password every X number of days.
     *
     * @return self
     */
    public function setEnforcePasswordExpiration($enforce_password_expiration)
    {
        if (is_null($enforce_password_expiration)) {
            throw new \InvalidArgumentException('non-nullable enforce_password_expiration cannot be null');
        }
        $this->container['enforce_password_expiration'] = $enforce_password_expiration;

        return $this;
    }

    /**
     * Gets password_expiration_days
     *
     * @return int|null
     */
    public function getPasswordExpirationDays()
    {
        return $this->container['password_expiration_days'];
    }

    /**
     * Sets password_expiration_days
     *
     * @param int|null $password_expiration_days Number of days after which users will be forced to change their password.
     *
     * @return self
     */
    public function setPasswordExpirationDays($password_expiration_days)
    {
        if (is_null($password_expiration_days)) {
            throw new \InvalidArgumentException('non-nullable password_expiration_days cannot be null');
        }
        $this->container['password_expiration_days'] = $password_expiration_days;

        return $this;
    }

    /**
     * Gets enforce_different_passwords
     *
     * @return bool|null
     */
    public function getEnforceDifferentPasswords()
    {
        return $this->container['enforce_different_passwords'];
    }

    /**
     * Sets enforce_different_passwords
     *
     * @param bool|null $enforce_different_passwords Boolean indicating whether users, when setting a new password, are forced to choose a new password that is different from any past passwords.
     *
     * @return self
     */
    public function setEnforceDifferentPasswords($enforce_different_passwords)
    {
        if (is_null($enforce_different_passwords)) {
            throw new \InvalidArgumentException('non-nullable enforce_different_passwords cannot be null');
        }
        $this->container['enforce_different_passwords'] = $enforce_different_passwords;

        return $this;
    }

    /**
     * Gets num_different_passwords
     *
     * @return int|null
     */
    public function getNumDifferentPasswords()
    {
        return $this->container['num_different_passwords'];
    }

    /**
     * Sets num_different_passwords
     *
     * @param int|null $num_different_passwords Number of recent passwords that new password must be distinct from.
     *
     * @return self
     */
    public function setNumDifferentPasswords($num_different_passwords)
    {
        if (is_null($num_different_passwords)) {
            throw new \InvalidArgumentException('non-nullable num_different_passwords cannot be null');
        }
        $this->container['num_different_passwords'] = $num_different_passwords;

        return $this;
    }

    /**
     * Gets enforce_strong_passwords
     *
     * @return bool|null
     */
    public function getEnforceStrongPasswords()
    {
        return $this->container['enforce_strong_passwords'];
    }

    /**
     * Sets enforce_strong_passwords
     *
     * @param bool|null $enforce_strong_passwords Deprecated. Values of 'false' are always ignored.
     *
     * @return self
     */
    public function setEnforceStrongPasswords($enforce_strong_passwords)
    {
        if (is_null($enforce_strong_passwords)) {
            throw new \InvalidArgumentException('non-nullable enforce_strong_passwords cannot be null');
        }
        $this->container['enforce_strong_passwords'] = $enforce_strong_passwords;

        return $this;
    }

    /**
     * Gets minimum_password_length
     *
     * @return int|null
     */
    public function getMinimumPasswordLength()
    {
        return $this->container['minimum_password_length'];
    }

    /**
     * Sets minimum_password_length
     *
     * @param int|null $minimum_password_length Minimum number of characters required in admins' passwords.
     *
     * @return self
     */
    public function setMinimumPasswordLength($minimum_password_length)
    {
        if (is_null($minimum_password_length)) {
            throw new \InvalidArgumentException('non-nullable minimum_password_length cannot be null');
        }

        if (($minimum_password_length > 16)) {
            throw new \InvalidArgumentException('invalid value for $minimum_password_length when calling UpdateOrganizationLoginSecurityRequest., must be smaller than or equal to 16.');
        }
        if (($minimum_password_length < 8)) {
            throw new \InvalidArgumentException('invalid value for $minimum_password_length when calling UpdateOrganizationLoginSecurityRequest., must be bigger than or equal to 8.');
        }

        $this->container['minimum_password_length'] = $minimum_password_length;

        return $this;
    }

    /**
     * Gets enforce_account_lockout
     *
     * @return bool|null
     */
    public function getEnforceAccountLockout()
    {
        return $this->container['enforce_account_lockout'];
    }

    /**
     * Sets enforce_account_lockout
     *
     * @param bool|null $enforce_account_lockout Boolean indicating whether users' Dashboard accounts will be locked out after a specified number of consecutive failed login attempts.
     *
     * @return self
     */
    public function setEnforceAccountLockout($enforce_account_lockout)
    {
        if (is_null($enforce_account_lockout)) {
            throw new \InvalidArgumentException('non-nullable enforce_account_lockout cannot be null');
        }
        $this->container['enforce_account_lockout'] = $enforce_account_lockout;

        return $this;
    }

    /**
     * Gets account_lockout_attempts
     *
     * @return int|null
     */
    public function getAccountLockoutAttempts()
    {
        return $this->container['account_lockout_attempts'];
    }

    /**
     * Sets account_lockout_attempts
     *
     * @param int|null $account_lockout_attempts Number of consecutive failed login attempts after which users' accounts will be locked.
     *
     * @return self
     */
    public function setAccountLockoutAttempts($account_lockout_attempts)
    {
        if (is_null($account_lockout_attempts)) {
            throw new \InvalidArgumentException('non-nullable account_lockout_attempts cannot be null');
        }
        $this->container['account_lockout_attempts'] = $account_lockout_attempts;

        return $this;
    }

    /**
     * Gets enforce_idle_timeout
     *
     * @return bool|null
     */
    public function getEnforceIdleTimeout()
    {
        return $this->container['enforce_idle_timeout'];
    }

    /**
     * Sets enforce_idle_timeout
     *
     * @param bool|null $enforce_idle_timeout Boolean indicating whether users will be logged out after being idle for the specified number of minutes.
     *
     * @return self
     */
    public function setEnforceIdleTimeout($enforce_idle_timeout)
    {
        if (is_null($enforce_idle_timeout)) {
            throw new \InvalidArgumentException('non-nullable enforce_idle_timeout cannot be null');
        }
        $this->container['enforce_idle_timeout'] = $enforce_idle_timeout;

        return $this;
    }

    /**
     * Gets idle_timeout_minutes
     *
     * @return int|null
     */
    public function getIdleTimeoutMinutes()
    {
        return $this->container['idle_timeout_minutes'];
    }

    /**
     * Sets idle_timeout_minutes
     *
     * @param int|null $idle_timeout_minutes Number of minutes users can remain idle before being logged out of their accounts.
     *
     * @return self
     */
    public function setIdleTimeoutMinutes($idle_timeout_minutes)
    {
        if (is_null($idle_timeout_minutes)) {
            throw new \InvalidArgumentException('non-nullable idle_timeout_minutes cannot be null');
        }
        $this->container['idle_timeout_minutes'] = $idle_timeout_minutes;

        return $this;
    }

    /**
     * Gets enforce_two_factor_auth
     *
     * @return bool|null
     */
    public function getEnforceTwoFactorAuth()
    {
        return $this->container['enforce_two_factor_auth'];
    }

    /**
     * Sets enforce_two_factor_auth
     *
     * @param bool|null $enforce_two_factor_auth Boolean indicating whether users in this organization will be required to use an extra verification code when logging in to Dashboard. This code will be sent to their mobile phone via SMS, or can be generated by the authenticator application.
     *
     * @return self
     */
    public function setEnforceTwoFactorAuth($enforce_two_factor_auth)
    {
        if (is_null($enforce_two_factor_auth)) {
            throw new \InvalidArgumentException('non-nullable enforce_two_factor_auth cannot be null');
        }
        $this->container['enforce_two_factor_auth'] = $enforce_two_factor_auth;

        return $this;
    }

    /**
     * Gets enforce_login_ip_ranges
     *
     * @return bool|null
     */
    public function getEnforceLoginIpRanges()
    {
        return $this->container['enforce_login_ip_ranges'];
    }

    /**
     * Sets enforce_login_ip_ranges
     *
     * @param bool|null $enforce_login_ip_ranges Boolean indicating whether organization will restrict access to Dashboard (including the API) from certain IP addresses.
     *
     * @return self
     */
    public function setEnforceLoginIpRanges($enforce_login_ip_ranges)
    {
        if (is_null($enforce_login_ip_ranges)) {
            throw new \InvalidArgumentException('non-nullable enforce_login_ip_ranges cannot be null');
        }
        $this->container['enforce_login_ip_ranges'] = $enforce_login_ip_ranges;

        return $this;
    }

    /**
     * Gets login_ip_ranges
     *
     * @return string[]|null
     */
    public function getLoginIpRanges()
    {
        return $this->container['login_ip_ranges'];
    }

    /**
     * Sets login_ip_ranges
     *
     * @param string[]|null $login_ip_ranges List of acceptable IP ranges. Entries can be single IP addresses, IP address ranges, and CIDR subnets.
     *
     * @return self
     */
    public function setLoginIpRanges($login_ip_ranges)
    {
        if (is_null($login_ip_ranges)) {
            throw new \InvalidArgumentException('non-nullable login_ip_ranges cannot be null');
        }
        $this->container['login_ip_ranges'] = $login_ip_ranges;

        return $this;
    }

    /**
     * Gets api_authentication
     *
     * @return \Meraki\Model\GetOrganizationLoginSecurity200ResponseApiAuthentication|null
     */
    public function getApiAuthentication()
    {
        return $this->container['api_authentication'];
    }

    /**
     * Sets api_authentication
     *
     * @param \Meraki\Model\GetOrganizationLoginSecurity200ResponseApiAuthentication|null $api_authentication api_authentication
     *
     * @return self
     */
    public function setApiAuthentication($api_authentication)
    {
        if (is_null($api_authentication)) {
            throw new \InvalidArgumentException('non-nullable api_authentication cannot be null');
        }
        $this->container['api_authentication'] = $api_authentication;

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


