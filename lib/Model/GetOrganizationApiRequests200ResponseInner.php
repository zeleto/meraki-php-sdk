<?php
/**
 * GetOrganizationApiRequests200ResponseInner
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
 * GetOrganizationApiRequests200ResponseInner Class Doc Comment
 *
 * @category Class
 * @package  Meraki
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetOrganizationApiRequests200ResponseInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getOrganizationApiRequests_200_response_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'admin_id' => 'string',
        'method' => 'string',
        'host' => 'string',
        'path' => 'string',
        'query_string' => 'string',
        'user_agent' => 'string',
        'ts' => '\DateTime',
        'response_code' => 'int',
        'source_ip' => 'string',
        'version' => 'int',
        'operation_id' => 'string',
        'client' => '\Meraki\Model\GetOrganizationApiRequests200ResponseInnerClient'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'admin_id' => null,
        'method' => null,
        'host' => null,
        'path' => null,
        'query_string' => null,
        'user_agent' => null,
        'ts' => 'date-time',
        'response_code' => null,
        'source_ip' => null,
        'version' => null,
        'operation_id' => null,
        'client' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'admin_id' => false,
        'method' => false,
        'host' => false,
        'path' => false,
        'query_string' => false,
        'user_agent' => false,
        'ts' => false,
        'response_code' => false,
        'source_ip' => false,
        'version' => false,
        'operation_id' => false,
        'client' => false
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
        'admin_id' => 'adminId',
        'method' => 'method',
        'host' => 'host',
        'path' => 'path',
        'query_string' => 'queryString',
        'user_agent' => 'userAgent',
        'ts' => 'ts',
        'response_code' => 'responseCode',
        'source_ip' => 'sourceIp',
        'version' => 'version',
        'operation_id' => 'operationId',
        'client' => 'client'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'admin_id' => 'setAdminId',
        'method' => 'setMethod',
        'host' => 'setHost',
        'path' => 'setPath',
        'query_string' => 'setQueryString',
        'user_agent' => 'setUserAgent',
        'ts' => 'setTs',
        'response_code' => 'setResponseCode',
        'source_ip' => 'setSourceIp',
        'version' => 'setVersion',
        'operation_id' => 'setOperationId',
        'client' => 'setClient'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'admin_id' => 'getAdminId',
        'method' => 'getMethod',
        'host' => 'getHost',
        'path' => 'getPath',
        'query_string' => 'getQueryString',
        'user_agent' => 'getUserAgent',
        'ts' => 'getTs',
        'response_code' => 'getResponseCode',
        'source_ip' => 'getSourceIp',
        'version' => 'getVersion',
        'operation_id' => 'getOperationId',
        'client' => 'getClient'
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

    public const VERSION_NUMBER_0 = 0;
    public const VERSION_NUMBER_1 = 1;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVersionAllowableValues()
    {
        return [
            self::VERSION_NUMBER_0,
            self::VERSION_NUMBER_1,
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
        $this->setIfExists('admin_id', $data ?? [], null);
        $this->setIfExists('method', $data ?? [], null);
        $this->setIfExists('host', $data ?? [], null);
        $this->setIfExists('path', $data ?? [], null);
        $this->setIfExists('query_string', $data ?? [], null);
        $this->setIfExists('user_agent', $data ?? [], null);
        $this->setIfExists('ts', $data ?? [], null);
        $this->setIfExists('response_code', $data ?? [], null);
        $this->setIfExists('source_ip', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('operation_id', $data ?? [], null);
        $this->setIfExists('client', $data ?? [], null);
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

        $allowedValues = $this->getVersionAllowableValues();
        if (!is_null($this->container['version']) && !in_array($this->container['version'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'version', must be one of '%s'",
                $this->container['version'],
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
     * Gets admin_id
     *
     * @return string|null
     */
    public function getAdminId()
    {
        return $this->container['admin_id'];
    }

    /**
     * Sets admin_id
     *
     * @param string|null $admin_id Database ID for the admin user who made the API request.
     *
     * @return self
     */
    public function setAdminId($admin_id)
    {
        if (is_null($admin_id)) {
            throw new \InvalidArgumentException('non-nullable admin_id cannot be null');
        }
        $this->container['admin_id'] = $admin_id;

        return $this;
    }

    /**
     * Gets method
     *
     * @return string|null
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string|null $method HTTP method used in the API request.
     *
     * @return self
     */
    public function setMethod($method)
    {
        if (is_null($method)) {
            throw new \InvalidArgumentException('non-nullable method cannot be null');
        }
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets host
     *
     * @return string|null
     */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
     * Sets host
     *
     * @param string|null $host The host which the API request was directed at.
     *
     * @return self
     */
    public function setHost($host)
    {
        if (is_null($host)) {
            throw new \InvalidArgumentException('non-nullable host cannot be null');
        }
        $this->container['host'] = $host;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string|null $path The API request path.
     *
     * @return self
     */
    public function setPath($path)
    {
        if (is_null($path)) {
            throw new \InvalidArgumentException('non-nullable path cannot be null');
        }
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets query_string
     *
     * @return string|null
     */
    public function getQueryString()
    {
        return $this->container['query_string'];
    }

    /**
     * Sets query_string
     *
     * @param string|null $query_string The query string sent with the API request.
     *
     * @return self
     */
    public function setQueryString($query_string)
    {
        if (is_null($query_string)) {
            throw new \InvalidArgumentException('non-nullable query_string cannot be null');
        }
        $this->container['query_string'] = $query_string;

        return $this;
    }

    /**
     * Gets user_agent
     *
     * @return string|null
     */
    public function getUserAgent()
    {
        return $this->container['user_agent'];
    }

    /**
     * Sets user_agent
     *
     * @param string|null $user_agent The API request user agent.
     *
     * @return self
     */
    public function setUserAgent($user_agent)
    {
        if (is_null($user_agent)) {
            throw new \InvalidArgumentException('non-nullable user_agent cannot be null');
        }
        $this->container['user_agent'] = $user_agent;

        return $this;
    }

    /**
     * Gets ts
     *
     * @return \DateTime|null
     */
    public function getTs()
    {
        return $this->container['ts'];
    }

    /**
     * Sets ts
     *
     * @param \DateTime|null $ts Timestamp, in iso8601 format, indicating when the API request was made.
     *
     * @return self
     */
    public function setTs($ts)
    {
        if (is_null($ts)) {
            throw new \InvalidArgumentException('non-nullable ts cannot be null');
        }
        $this->container['ts'] = $ts;

        return $this;
    }

    /**
     * Gets response_code
     *
     * @return int|null
     */
    public function getResponseCode()
    {
        return $this->container['response_code'];
    }

    /**
     * Sets response_code
     *
     * @param int|null $response_code API request response code.
     *
     * @return self
     */
    public function setResponseCode($response_code)
    {
        if (is_null($response_code)) {
            throw new \InvalidArgumentException('non-nullable response_code cannot be null');
        }
        $this->container['response_code'] = $response_code;

        return $this;
    }

    /**
     * Gets source_ip
     *
     * @return string|null
     */
    public function getSourceIp()
    {
        return $this->container['source_ip'];
    }

    /**
     * Sets source_ip
     *
     * @param string|null $source_ip Public IP address from which the API request was made.
     *
     * @return self
     */
    public function setSourceIp($source_ip)
    {
        if (is_null($source_ip)) {
            throw new \InvalidArgumentException('non-nullable source_ip cannot be null');
        }
        $this->container['source_ip'] = $source_ip;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int|null $version API version of the endpoint.
     *
     * @return self
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }
        $allowedValues = $this->getVersionAllowableValues();
        if (!in_array($version, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'version', must be one of '%s'",
                    $version,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets operation_id
     *
     * @return string|null
     */
    public function getOperationId()
    {
        return $this->container['operation_id'];
    }

    /**
     * Sets operation_id
     *
     * @param string|null $operation_id Operation ID for the endpoint.
     *
     * @return self
     */
    public function setOperationId($operation_id)
    {
        if (is_null($operation_id)) {
            throw new \InvalidArgumentException('non-nullable operation_id cannot be null');
        }
        $this->container['operation_id'] = $operation_id;

        return $this;
    }

    /**
     * Gets client
     *
     * @return \Meraki\Model\GetOrganizationApiRequests200ResponseInnerClient|null
     */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
     * Sets client
     *
     * @param \Meraki\Model\GetOrganizationApiRequests200ResponseInnerClient|null $client client
     *
     * @return self
     */
    public function setClient($client)
    {
        if (is_null($client)) {
            throw new \InvalidArgumentException('non-nullable client cannot be null');
        }
        $this->container['client'] = $client;

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


