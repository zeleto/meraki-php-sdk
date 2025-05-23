<?php
/**
 * OneToManyNatRulesApi
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

namespace Meraki\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Meraki\ApiException;
use Meraki\Configuration;
use Meraki\HeaderSelector;
use Meraki\ObjectSerializer;

/**
 * OneToManyNatRulesApi Class Doc Comment
 *
 * @category Class
 * @package  Meraki
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OneToManyNatRulesApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'getNetworkApplianceFirewallOneToManyNatRules' => [
            'application/json',
        ],
        'updateNetworkApplianceFirewallOneToManyNatRules' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ?ClientInterface $client = null,
        ?Configuration $config = null,
        ?HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getNetworkApplianceFirewallOneToManyNatRules
     *
     * Return the 1:Many NAT mapping rules for an MX network
     *
     * @param  string $network_id Network ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getNetworkApplianceFirewallOneToManyNatRules'] to see the possible values for this operation
     *
     * @throws \Meraki\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return object
     */
    public function getNetworkApplianceFirewallOneToManyNatRules($network_id, string $contentType = self::contentTypes['getNetworkApplianceFirewallOneToManyNatRules'][0])
    {
        list($response) = $this->getNetworkApplianceFirewallOneToManyNatRulesWithHttpInfo($network_id, $contentType);
        return $response;
    }

    /**
     * Operation getNetworkApplianceFirewallOneToManyNatRulesWithHttpInfo
     *
     * Return the 1:Many NAT mapping rules for an MX network
     *
     * @param  string $network_id Network ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getNetworkApplianceFirewallOneToManyNatRules'] to see the possible values for this operation
     *
     * @throws \Meraki\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getNetworkApplianceFirewallOneToManyNatRulesWithHttpInfo($network_id, string $contentType = self::contentTypes['getNetworkApplianceFirewallOneToManyNatRules'][0])
    {
        $request = $this->getNetworkApplianceFirewallOneToManyNatRulesRequest($network_id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    if ('object' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('object' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = 'object';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getNetworkApplianceFirewallOneToManyNatRulesAsync
     *
     * Return the 1:Many NAT mapping rules for an MX network
     *
     * @param  string $network_id Network ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getNetworkApplianceFirewallOneToManyNatRules'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getNetworkApplianceFirewallOneToManyNatRulesAsync($network_id, string $contentType = self::contentTypes['getNetworkApplianceFirewallOneToManyNatRules'][0])
    {
        return $this->getNetworkApplianceFirewallOneToManyNatRulesAsyncWithHttpInfo($network_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getNetworkApplianceFirewallOneToManyNatRulesAsyncWithHttpInfo
     *
     * Return the 1:Many NAT mapping rules for an MX network
     *
     * @param  string $network_id Network ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getNetworkApplianceFirewallOneToManyNatRules'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getNetworkApplianceFirewallOneToManyNatRulesAsyncWithHttpInfo($network_id, string $contentType = self::contentTypes['getNetworkApplianceFirewallOneToManyNatRules'][0])
    {
        $returnType = 'object';
        $request = $this->getNetworkApplianceFirewallOneToManyNatRulesRequest($network_id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getNetworkApplianceFirewallOneToManyNatRules'
     *
     * @param  string $network_id Network ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getNetworkApplianceFirewallOneToManyNatRules'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getNetworkApplianceFirewallOneToManyNatRulesRequest($network_id, string $contentType = self::contentTypes['getNetworkApplianceFirewallOneToManyNatRules'][0])
    {

        // verify the required parameter 'network_id' is set
        if ($network_id === null || (is_array($network_id) && count($network_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $network_id when calling getNetworkApplianceFirewallOneToManyNatRules'
            );
        }


        $resourcePath = '/networks/{networkId}/appliance/firewall/oneToManyNatRules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($network_id !== null) {
            $resourcePath = str_replace(
                '{' . 'networkId' . '}',
                ObjectSerializer::toPathValue($network_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Cisco-Meraki-API-Key');
        if ($apiKey !== null) {
            $headers['X-Cisco-Meraki-API-Key'] = $apiKey;
        }
        // this endpoint requires Bearer (API Key) authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateNetworkApplianceFirewallOneToManyNatRules
     *
     * Set the 1:Many NAT mapping rules for an MX network
     *
     * @param  string $network_id Network ID (required)
     * @param  \Meraki\Model\UpdateNetworkApplianceFirewallOneToManyNatRulesRequest $update_network_appliance_firewall_one_to_many_nat_rules_request update_network_appliance_firewall_one_to_many_nat_rules_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateNetworkApplianceFirewallOneToManyNatRules'] to see the possible values for this operation
     *
     * @throws \Meraki\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return object
     */
    public function updateNetworkApplianceFirewallOneToManyNatRules($network_id, $update_network_appliance_firewall_one_to_many_nat_rules_request, string $contentType = self::contentTypes['updateNetworkApplianceFirewallOneToManyNatRules'][0])
    {
        list($response) = $this->updateNetworkApplianceFirewallOneToManyNatRulesWithHttpInfo($network_id, $update_network_appliance_firewall_one_to_many_nat_rules_request, $contentType);
        return $response;
    }

    /**
     * Operation updateNetworkApplianceFirewallOneToManyNatRulesWithHttpInfo
     *
     * Set the 1:Many NAT mapping rules for an MX network
     *
     * @param  string $network_id Network ID (required)
     * @param  \Meraki\Model\UpdateNetworkApplianceFirewallOneToManyNatRulesRequest $update_network_appliance_firewall_one_to_many_nat_rules_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateNetworkApplianceFirewallOneToManyNatRules'] to see the possible values for this operation
     *
     * @throws \Meraki\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateNetworkApplianceFirewallOneToManyNatRulesWithHttpInfo($network_id, $update_network_appliance_firewall_one_to_many_nat_rules_request, string $contentType = self::contentTypes['updateNetworkApplianceFirewallOneToManyNatRules'][0])
    {
        $request = $this->updateNetworkApplianceFirewallOneToManyNatRulesRequest($network_id, $update_network_appliance_firewall_one_to_many_nat_rules_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    if ('object' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('object' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = 'object';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateNetworkApplianceFirewallOneToManyNatRulesAsync
     *
     * Set the 1:Many NAT mapping rules for an MX network
     *
     * @param  string $network_id Network ID (required)
     * @param  \Meraki\Model\UpdateNetworkApplianceFirewallOneToManyNatRulesRequest $update_network_appliance_firewall_one_to_many_nat_rules_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateNetworkApplianceFirewallOneToManyNatRules'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateNetworkApplianceFirewallOneToManyNatRulesAsync($network_id, $update_network_appliance_firewall_one_to_many_nat_rules_request, string $contentType = self::contentTypes['updateNetworkApplianceFirewallOneToManyNatRules'][0])
    {
        return $this->updateNetworkApplianceFirewallOneToManyNatRulesAsyncWithHttpInfo($network_id, $update_network_appliance_firewall_one_to_many_nat_rules_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateNetworkApplianceFirewallOneToManyNatRulesAsyncWithHttpInfo
     *
     * Set the 1:Many NAT mapping rules for an MX network
     *
     * @param  string $network_id Network ID (required)
     * @param  \Meraki\Model\UpdateNetworkApplianceFirewallOneToManyNatRulesRequest $update_network_appliance_firewall_one_to_many_nat_rules_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateNetworkApplianceFirewallOneToManyNatRules'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateNetworkApplianceFirewallOneToManyNatRulesAsyncWithHttpInfo($network_id, $update_network_appliance_firewall_one_to_many_nat_rules_request, string $contentType = self::contentTypes['updateNetworkApplianceFirewallOneToManyNatRules'][0])
    {
        $returnType = 'object';
        $request = $this->updateNetworkApplianceFirewallOneToManyNatRulesRequest($network_id, $update_network_appliance_firewall_one_to_many_nat_rules_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'updateNetworkApplianceFirewallOneToManyNatRules'
     *
     * @param  string $network_id Network ID (required)
     * @param  \Meraki\Model\UpdateNetworkApplianceFirewallOneToManyNatRulesRequest $update_network_appliance_firewall_one_to_many_nat_rules_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateNetworkApplianceFirewallOneToManyNatRules'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateNetworkApplianceFirewallOneToManyNatRulesRequest($network_id, $update_network_appliance_firewall_one_to_many_nat_rules_request, string $contentType = self::contentTypes['updateNetworkApplianceFirewallOneToManyNatRules'][0])
    {

        // verify the required parameter 'network_id' is set
        if ($network_id === null || (is_array($network_id) && count($network_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $network_id when calling updateNetworkApplianceFirewallOneToManyNatRules'
            );
        }

        // verify the required parameter 'update_network_appliance_firewall_one_to_many_nat_rules_request' is set
        if ($update_network_appliance_firewall_one_to_many_nat_rules_request === null || (is_array($update_network_appliance_firewall_one_to_many_nat_rules_request) && count($update_network_appliance_firewall_one_to_many_nat_rules_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $update_network_appliance_firewall_one_to_many_nat_rules_request when calling updateNetworkApplianceFirewallOneToManyNatRules'
            );
        }


        $resourcePath = '/networks/{networkId}/appliance/firewall/oneToManyNatRules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($network_id !== null) {
            $resourcePath = str_replace(
                '{' . 'networkId' . '}',
                ObjectSerializer::toPathValue($network_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($update_network_appliance_firewall_one_to_many_nat_rules_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($update_network_appliance_firewall_one_to_many_nat_rules_request));
            } else {
                $httpBody = $update_network_appliance_firewall_one_to_many_nat_rules_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Cisco-Meraki-API-Key');
        if ($apiKey !== null) {
            $headers['X-Cisco-Meraki-API-Key'] = $apiKey;
        }
        // this endpoint requires Bearer (API Key) authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
