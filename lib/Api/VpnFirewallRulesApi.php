<?php
/**
 * VpnFirewallRulesApi
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
 * VpnFirewallRulesApi Class Doc Comment
 *
 * @category Class
 * @package  Meraki
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VpnFirewallRulesApi
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
        'getOrganizationApplianceVpnVpnFirewallRules' => [
            'application/json',
        ],
        'updateOrganizationApplianceVpnVpnFirewallRules' => [
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
     * Operation getOrganizationApplianceVpnVpnFirewallRules
     *
     * Return the firewall rules for an organization&#39;s site-to-site VPN
     *
     * @param  string $organization_id Organization ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOrganizationApplianceVpnVpnFirewallRules'] to see the possible values for this operation
     *
     * @throws \Meraki\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response
     */
    public function getOrganizationApplianceVpnVpnFirewallRules($organization_id, string $contentType = self::contentTypes['getOrganizationApplianceVpnVpnFirewallRules'][0])
    {
        list($response) = $this->getOrganizationApplianceVpnVpnFirewallRulesWithHttpInfo($organization_id, $contentType);
        return $response;
    }

    /**
     * Operation getOrganizationApplianceVpnVpnFirewallRulesWithHttpInfo
     *
     * Return the firewall rules for an organization&#39;s site-to-site VPN
     *
     * @param  string $organization_id Organization ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOrganizationApplianceVpnVpnFirewallRules'] to see the possible values for this operation
     *
     * @throws \Meraki\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrganizationApplianceVpnVpnFirewallRulesWithHttpInfo($organization_id, string $contentType = self::contentTypes['getOrganizationApplianceVpnVpnFirewallRules'][0])
    {
        $request = $this->getOrganizationApplianceVpnVpnFirewallRulesRequest($organization_id, $contentType);

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
                    if ('\Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response', []),
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

            $returnType = '\Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response';
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
                        '\Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getOrganizationApplianceVpnVpnFirewallRulesAsync
     *
     * Return the firewall rules for an organization&#39;s site-to-site VPN
     *
     * @param  string $organization_id Organization ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOrganizationApplianceVpnVpnFirewallRules'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrganizationApplianceVpnVpnFirewallRulesAsync($organization_id, string $contentType = self::contentTypes['getOrganizationApplianceVpnVpnFirewallRules'][0])
    {
        return $this->getOrganizationApplianceVpnVpnFirewallRulesAsyncWithHttpInfo($organization_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrganizationApplianceVpnVpnFirewallRulesAsyncWithHttpInfo
     *
     * Return the firewall rules for an organization&#39;s site-to-site VPN
     *
     * @param  string $organization_id Organization ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOrganizationApplianceVpnVpnFirewallRules'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrganizationApplianceVpnVpnFirewallRulesAsyncWithHttpInfo($organization_id, string $contentType = self::contentTypes['getOrganizationApplianceVpnVpnFirewallRules'][0])
    {
        $returnType = '\Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response';
        $request = $this->getOrganizationApplianceVpnVpnFirewallRulesRequest($organization_id, $contentType);

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
     * Create request for operation 'getOrganizationApplianceVpnVpnFirewallRules'
     *
     * @param  string $organization_id Organization ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOrganizationApplianceVpnVpnFirewallRules'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getOrganizationApplianceVpnVpnFirewallRulesRequest($organization_id, string $contentType = self::contentTypes['getOrganizationApplianceVpnVpnFirewallRules'][0])
    {

        // verify the required parameter 'organization_id' is set
        if ($organization_id === null || (is_array($organization_id) && count($organization_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization_id when calling getOrganizationApplianceVpnVpnFirewallRules'
            );
        }


        $resourcePath = '/organizations/{organizationId}/appliance/vpn/vpnFirewallRules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($organization_id !== null) {
            $resourcePath = str_replace(
                '{' . 'organizationId' . '}',
                ObjectSerializer::toPathValue($organization_id),
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
     * Operation updateOrganizationApplianceVpnVpnFirewallRules
     *
     * Update the firewall rules of an organization&#39;s site-to-site VPN
     *
     * @param  string $organization_id Organization ID (required)
     * @param  \Meraki\Model\UpdateOrganizationApplianceVpnVpnFirewallRulesRequest|null $update_organization_appliance_vpn_vpn_firewall_rules_request update_organization_appliance_vpn_vpn_firewall_rules_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateOrganizationApplianceVpnVpnFirewallRules'] to see the possible values for this operation
     *
     * @throws \Meraki\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response
     */
    public function updateOrganizationApplianceVpnVpnFirewallRules($organization_id, $update_organization_appliance_vpn_vpn_firewall_rules_request = null, string $contentType = self::contentTypes['updateOrganizationApplianceVpnVpnFirewallRules'][0])
    {
        list($response) = $this->updateOrganizationApplianceVpnVpnFirewallRulesWithHttpInfo($organization_id, $update_organization_appliance_vpn_vpn_firewall_rules_request, $contentType);
        return $response;
    }

    /**
     * Operation updateOrganizationApplianceVpnVpnFirewallRulesWithHttpInfo
     *
     * Update the firewall rules of an organization&#39;s site-to-site VPN
     *
     * @param  string $organization_id Organization ID (required)
     * @param  \Meraki\Model\UpdateOrganizationApplianceVpnVpnFirewallRulesRequest|null $update_organization_appliance_vpn_vpn_firewall_rules_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateOrganizationApplianceVpnVpnFirewallRules'] to see the possible values for this operation
     *
     * @throws \Meraki\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateOrganizationApplianceVpnVpnFirewallRulesWithHttpInfo($organization_id, $update_organization_appliance_vpn_vpn_firewall_rules_request = null, string $contentType = self::contentTypes['updateOrganizationApplianceVpnVpnFirewallRules'][0])
    {
        $request = $this->updateOrganizationApplianceVpnVpnFirewallRulesRequest($organization_id, $update_organization_appliance_vpn_vpn_firewall_rules_request, $contentType);

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
                    if ('\Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response', []),
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

            $returnType = '\Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response';
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
                        '\Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateOrganizationApplianceVpnVpnFirewallRulesAsync
     *
     * Update the firewall rules of an organization&#39;s site-to-site VPN
     *
     * @param  string $organization_id Organization ID (required)
     * @param  \Meraki\Model\UpdateOrganizationApplianceVpnVpnFirewallRulesRequest|null $update_organization_appliance_vpn_vpn_firewall_rules_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateOrganizationApplianceVpnVpnFirewallRules'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateOrganizationApplianceVpnVpnFirewallRulesAsync($organization_id, $update_organization_appliance_vpn_vpn_firewall_rules_request = null, string $contentType = self::contentTypes['updateOrganizationApplianceVpnVpnFirewallRules'][0])
    {
        return $this->updateOrganizationApplianceVpnVpnFirewallRulesAsyncWithHttpInfo($organization_id, $update_organization_appliance_vpn_vpn_firewall_rules_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateOrganizationApplianceVpnVpnFirewallRulesAsyncWithHttpInfo
     *
     * Update the firewall rules of an organization&#39;s site-to-site VPN
     *
     * @param  string $organization_id Organization ID (required)
     * @param  \Meraki\Model\UpdateOrganizationApplianceVpnVpnFirewallRulesRequest|null $update_organization_appliance_vpn_vpn_firewall_rules_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateOrganizationApplianceVpnVpnFirewallRules'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateOrganizationApplianceVpnVpnFirewallRulesAsyncWithHttpInfo($organization_id, $update_organization_appliance_vpn_vpn_firewall_rules_request = null, string $contentType = self::contentTypes['updateOrganizationApplianceVpnVpnFirewallRules'][0])
    {
        $returnType = '\Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response';
        $request = $this->updateOrganizationApplianceVpnVpnFirewallRulesRequest($organization_id, $update_organization_appliance_vpn_vpn_firewall_rules_request, $contentType);

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
     * Create request for operation 'updateOrganizationApplianceVpnVpnFirewallRules'
     *
     * @param  string $organization_id Organization ID (required)
     * @param  \Meraki\Model\UpdateOrganizationApplianceVpnVpnFirewallRulesRequest|null $update_organization_appliance_vpn_vpn_firewall_rules_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateOrganizationApplianceVpnVpnFirewallRules'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateOrganizationApplianceVpnVpnFirewallRulesRequest($organization_id, $update_organization_appliance_vpn_vpn_firewall_rules_request = null, string $contentType = self::contentTypes['updateOrganizationApplianceVpnVpnFirewallRules'][0])
    {

        // verify the required parameter 'organization_id' is set
        if ($organization_id === null || (is_array($organization_id) && count($organization_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization_id when calling updateOrganizationApplianceVpnVpnFirewallRules'
            );
        }



        $resourcePath = '/organizations/{organizationId}/appliance/vpn/vpnFirewallRules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($organization_id !== null) {
            $resourcePath = str_replace(
                '{' . 'organizationId' . '}',
                ObjectSerializer::toPathValue($organization_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($update_organization_appliance_vpn_vpn_firewall_rules_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($update_organization_appliance_vpn_vpn_firewall_rules_request));
            } else {
                $httpBody = $update_organization_appliance_vpn_vpn_firewall_rules_request;
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
