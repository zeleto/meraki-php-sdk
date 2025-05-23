<?php
/**
 * ImportsApi
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
 * ImportsApi Class Doc Comment
 *
 * @category Class
 * @package  Meraki
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ImportsApi
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
        'createOrganizationInventoryOnboardingCloudMonitoringImport' => [
            'application/json',
        ],
        'getOrganizationInventoryOnboardingCloudMonitoringImports' => [
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
     * Operation createOrganizationInventoryOnboardingCloudMonitoringImport
     *
     * Commits the import operation to complete the onboarding of a device into Dashboard for monitoring.
     *
     * @param  string $organization_id Organization ID (required)
     * @param  \Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringImportRequest $create_organization_inventory_onboarding_cloud_monitoring_import_request create_organization_inventory_onboarding_cloud_monitoring_import_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createOrganizationInventoryOnboardingCloudMonitoringImport'] to see the possible values for this operation
     *
     * @throws \Meraki\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringImport201ResponseInner[]
     */
    public function createOrganizationInventoryOnboardingCloudMonitoringImport($organization_id, $create_organization_inventory_onboarding_cloud_monitoring_import_request, string $contentType = self::contentTypes['createOrganizationInventoryOnboardingCloudMonitoringImport'][0])
    {
        list($response) = $this->createOrganizationInventoryOnboardingCloudMonitoringImportWithHttpInfo($organization_id, $create_organization_inventory_onboarding_cloud_monitoring_import_request, $contentType);
        return $response;
    }

    /**
     * Operation createOrganizationInventoryOnboardingCloudMonitoringImportWithHttpInfo
     *
     * Commits the import operation to complete the onboarding of a device into Dashboard for monitoring.
     *
     * @param  string $organization_id Organization ID (required)
     * @param  \Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringImportRequest $create_organization_inventory_onboarding_cloud_monitoring_import_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createOrganizationInventoryOnboardingCloudMonitoringImport'] to see the possible values for this operation
     *
     * @throws \Meraki\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringImport201ResponseInner[], HTTP status code, HTTP response headers (array of strings)
     */
    public function createOrganizationInventoryOnboardingCloudMonitoringImportWithHttpInfo($organization_id, $create_organization_inventory_onboarding_cloud_monitoring_import_request, string $contentType = self::contentTypes['createOrganizationInventoryOnboardingCloudMonitoringImport'][0])
    {
        $request = $this->createOrganizationInventoryOnboardingCloudMonitoringImportRequest($organization_id, $create_organization_inventory_onboarding_cloud_monitoring_import_request, $contentType);

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
                case 201:
                    if ('\Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringImport201ResponseInner[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringImport201ResponseInner[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringImport201ResponseInner[]', []),
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

            $returnType = '\Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringImport201ResponseInner[]';
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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringImport201ResponseInner[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createOrganizationInventoryOnboardingCloudMonitoringImportAsync
     *
     * Commits the import operation to complete the onboarding of a device into Dashboard for monitoring.
     *
     * @param  string $organization_id Organization ID (required)
     * @param  \Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringImportRequest $create_organization_inventory_onboarding_cloud_monitoring_import_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createOrganizationInventoryOnboardingCloudMonitoringImport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createOrganizationInventoryOnboardingCloudMonitoringImportAsync($organization_id, $create_organization_inventory_onboarding_cloud_monitoring_import_request, string $contentType = self::contentTypes['createOrganizationInventoryOnboardingCloudMonitoringImport'][0])
    {
        return $this->createOrganizationInventoryOnboardingCloudMonitoringImportAsyncWithHttpInfo($organization_id, $create_organization_inventory_onboarding_cloud_monitoring_import_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createOrganizationInventoryOnboardingCloudMonitoringImportAsyncWithHttpInfo
     *
     * Commits the import operation to complete the onboarding of a device into Dashboard for monitoring.
     *
     * @param  string $organization_id Organization ID (required)
     * @param  \Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringImportRequest $create_organization_inventory_onboarding_cloud_monitoring_import_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createOrganizationInventoryOnboardingCloudMonitoringImport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createOrganizationInventoryOnboardingCloudMonitoringImportAsyncWithHttpInfo($organization_id, $create_organization_inventory_onboarding_cloud_monitoring_import_request, string $contentType = self::contentTypes['createOrganizationInventoryOnboardingCloudMonitoringImport'][0])
    {
        $returnType = '\Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringImport201ResponseInner[]';
        $request = $this->createOrganizationInventoryOnboardingCloudMonitoringImportRequest($organization_id, $create_organization_inventory_onboarding_cloud_monitoring_import_request, $contentType);

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
     * Create request for operation 'createOrganizationInventoryOnboardingCloudMonitoringImport'
     *
     * @param  string $organization_id Organization ID (required)
     * @param  \Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringImportRequest $create_organization_inventory_onboarding_cloud_monitoring_import_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createOrganizationInventoryOnboardingCloudMonitoringImport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createOrganizationInventoryOnboardingCloudMonitoringImportRequest($organization_id, $create_organization_inventory_onboarding_cloud_monitoring_import_request, string $contentType = self::contentTypes['createOrganizationInventoryOnboardingCloudMonitoringImport'][0])
    {

        // verify the required parameter 'organization_id' is set
        if ($organization_id === null || (is_array($organization_id) && count($organization_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization_id when calling createOrganizationInventoryOnboardingCloudMonitoringImport'
            );
        }

        // verify the required parameter 'create_organization_inventory_onboarding_cloud_monitoring_import_request' is set
        if ($create_organization_inventory_onboarding_cloud_monitoring_import_request === null || (is_array($create_organization_inventory_onboarding_cloud_monitoring_import_request) && count($create_organization_inventory_onboarding_cloud_monitoring_import_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $create_organization_inventory_onboarding_cloud_monitoring_import_request when calling createOrganizationInventoryOnboardingCloudMonitoringImport'
            );
        }


        $resourcePath = '/organizations/{organizationId}/inventory/onboarding/cloudMonitoring/imports';
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
        if (isset($create_organization_inventory_onboarding_cloud_monitoring_import_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($create_organization_inventory_onboarding_cloud_monitoring_import_request));
            } else {
                $httpBody = $create_organization_inventory_onboarding_cloud_monitoring_import_request;
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getOrganizationInventoryOnboardingCloudMonitoringImports
     *
     * Check the status of a committed Import operation
     *
     * @param  string $organization_id Organization ID (required)
     * @param  string[] $import_ids import ids from an imports (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOrganizationInventoryOnboardingCloudMonitoringImports'] to see the possible values for this operation
     *
     * @throws \Meraki\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Meraki\Model\GetOrganizationInventoryOnboardingCloudMonitoringImports200ResponseInner[]
     */
    public function getOrganizationInventoryOnboardingCloudMonitoringImports($organization_id, $import_ids, string $contentType = self::contentTypes['getOrganizationInventoryOnboardingCloudMonitoringImports'][0])
    {
        list($response) = $this->getOrganizationInventoryOnboardingCloudMonitoringImportsWithHttpInfo($organization_id, $import_ids, $contentType);
        return $response;
    }

    /**
     * Operation getOrganizationInventoryOnboardingCloudMonitoringImportsWithHttpInfo
     *
     * Check the status of a committed Import operation
     *
     * @param  string $organization_id Organization ID (required)
     * @param  string[] $import_ids import ids from an imports (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOrganizationInventoryOnboardingCloudMonitoringImports'] to see the possible values for this operation
     *
     * @throws \Meraki\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Meraki\Model\GetOrganizationInventoryOnboardingCloudMonitoringImports200ResponseInner[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrganizationInventoryOnboardingCloudMonitoringImportsWithHttpInfo($organization_id, $import_ids, string $contentType = self::contentTypes['getOrganizationInventoryOnboardingCloudMonitoringImports'][0])
    {
        $request = $this->getOrganizationInventoryOnboardingCloudMonitoringImportsRequest($organization_id, $import_ids, $contentType);

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
                    if ('\Meraki\Model\GetOrganizationInventoryOnboardingCloudMonitoringImports200ResponseInner[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Meraki\Model\GetOrganizationInventoryOnboardingCloudMonitoringImports200ResponseInner[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Meraki\Model\GetOrganizationInventoryOnboardingCloudMonitoringImports200ResponseInner[]', []),
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

            $returnType = '\Meraki\Model\GetOrganizationInventoryOnboardingCloudMonitoringImports200ResponseInner[]';
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
                        '\Meraki\Model\GetOrganizationInventoryOnboardingCloudMonitoringImports200ResponseInner[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getOrganizationInventoryOnboardingCloudMonitoringImportsAsync
     *
     * Check the status of a committed Import operation
     *
     * @param  string $organization_id Organization ID (required)
     * @param  string[] $import_ids import ids from an imports (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOrganizationInventoryOnboardingCloudMonitoringImports'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrganizationInventoryOnboardingCloudMonitoringImportsAsync($organization_id, $import_ids, string $contentType = self::contentTypes['getOrganizationInventoryOnboardingCloudMonitoringImports'][0])
    {
        return $this->getOrganizationInventoryOnboardingCloudMonitoringImportsAsyncWithHttpInfo($organization_id, $import_ids, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrganizationInventoryOnboardingCloudMonitoringImportsAsyncWithHttpInfo
     *
     * Check the status of a committed Import operation
     *
     * @param  string $organization_id Organization ID (required)
     * @param  string[] $import_ids import ids from an imports (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOrganizationInventoryOnboardingCloudMonitoringImports'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrganizationInventoryOnboardingCloudMonitoringImportsAsyncWithHttpInfo($organization_id, $import_ids, string $contentType = self::contentTypes['getOrganizationInventoryOnboardingCloudMonitoringImports'][0])
    {
        $returnType = '\Meraki\Model\GetOrganizationInventoryOnboardingCloudMonitoringImports200ResponseInner[]';
        $request = $this->getOrganizationInventoryOnboardingCloudMonitoringImportsRequest($organization_id, $import_ids, $contentType);

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
     * Create request for operation 'getOrganizationInventoryOnboardingCloudMonitoringImports'
     *
     * @param  string $organization_id Organization ID (required)
     * @param  string[] $import_ids import ids from an imports (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOrganizationInventoryOnboardingCloudMonitoringImports'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getOrganizationInventoryOnboardingCloudMonitoringImportsRequest($organization_id, $import_ids, string $contentType = self::contentTypes['getOrganizationInventoryOnboardingCloudMonitoringImports'][0])
    {

        // verify the required parameter 'organization_id' is set
        if ($organization_id === null || (is_array($organization_id) && count($organization_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization_id when calling getOrganizationInventoryOnboardingCloudMonitoringImports'
            );
        }

        // verify the required parameter 'import_ids' is set
        if ($import_ids === null || (is_array($import_ids) && count($import_ids) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $import_ids when calling getOrganizationInventoryOnboardingCloudMonitoringImports'
            );
        }


        $resourcePath = '/organizations/{organizationId}/inventory/onboarding/cloudMonitoring/imports';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $import_ids,
            'importIds', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);


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
