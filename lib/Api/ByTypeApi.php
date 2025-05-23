<?php
/**
 * ByTypeApi
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
 * ByTypeApi Class Doc Comment
 *
 * @category Class
 * @package  Meraki
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ByTypeApi
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
        'getOrganizationAssuranceAlertsOverviewByType' => [
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
     * Operation getOrganizationAssuranceAlertsOverviewByType
     *
     * Return a Summary of Alerts grouped by type and severity
     *
     * @param  string $organization_id Organization ID (required)
     * @param  int|null $per_page The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. (optional)
     * @param  string|null $starting_after A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. (optional)
     * @param  string|null $ending_before A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. (optional)
     * @param  string|null $sort_order Sorted order of entries. Order options are &#39;ascending&#39; and &#39;descending&#39;. Default is &#39;ascending&#39;. (optional)
     * @param  string|null $network_id Optional parameter to filter alerts overview by network ids. (optional)
     * @param  string|null $severity Optional parameter to filter alerts overview by severity type. (optional)
     * @param  string[]|null $types Optional parameter to filter by alert type. (optional)
     * @param  \DateTime|null $ts_start Optional parameter to filter by starting timestamp (optional)
     * @param  \DateTime|null $ts_end Optional parameter to filter by end timestamp (optional)
     * @param  string|null $category Optional parameter to filter by category. (optional)
     * @param  string|null $sort_by Optional parameter to set column to sort by. (optional)
     * @param  string[]|null $serials Optional parameter to filter by primary device serial (optional)
     * @param  string[]|null $device_types Optional parameter to filter by device types (optional)
     * @param  string[]|null $device_tags Optional parameter to filter by device tags (optional)
     * @param  bool|null $active Optional parameter to filter by active alerts defaults to true (optional)
     * @param  bool|null $dismissed Optional parameter to filter by dismissed alerts defaults to false (optional)
     * @param  bool|null $resolved Optional parameter to filter by resolved alerts defaults to false (optional)
     * @param  bool|null $suppress_alerts_for_offline_nodes When set to true the api will only return connectivity alerts for a given device if that device is in an offline state. This only applies to devices. This is ignored when resolved is true. Example:  If a Switch has a VLan Mismatch and is Unreachable. only the Unreachable alert will be returned. Defaults to false. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOrganizationAssuranceAlertsOverviewByType'] to see the possible values for this operation
     *
     * @throws \Meraki\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Meraki\Model\GetOrganizationAssuranceAlertsOverviewByType200Response
     */
    public function getOrganizationAssuranceAlertsOverviewByType($organization_id, $per_page = null, $starting_after = null, $ending_before = null, $sort_order = null, $network_id = null, $severity = null, $types = null, $ts_start = null, $ts_end = null, $category = null, $sort_by = null, $serials = null, $device_types = null, $device_tags = null, $active = null, $dismissed = null, $resolved = null, $suppress_alerts_for_offline_nodes = null, string $contentType = self::contentTypes['getOrganizationAssuranceAlertsOverviewByType'][0])
    {
        list($response) = $this->getOrganizationAssuranceAlertsOverviewByTypeWithHttpInfo($organization_id, $per_page, $starting_after, $ending_before, $sort_order, $network_id, $severity, $types, $ts_start, $ts_end, $category, $sort_by, $serials, $device_types, $device_tags, $active, $dismissed, $resolved, $suppress_alerts_for_offline_nodes, $contentType);
        return $response;
    }

    /**
     * Operation getOrganizationAssuranceAlertsOverviewByTypeWithHttpInfo
     *
     * Return a Summary of Alerts grouped by type and severity
     *
     * @param  string $organization_id Organization ID (required)
     * @param  int|null $per_page The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. (optional)
     * @param  string|null $starting_after A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. (optional)
     * @param  string|null $ending_before A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. (optional)
     * @param  string|null $sort_order Sorted order of entries. Order options are &#39;ascending&#39; and &#39;descending&#39;. Default is &#39;ascending&#39;. (optional)
     * @param  string|null $network_id Optional parameter to filter alerts overview by network ids. (optional)
     * @param  string|null $severity Optional parameter to filter alerts overview by severity type. (optional)
     * @param  string[]|null $types Optional parameter to filter by alert type. (optional)
     * @param  \DateTime|null $ts_start Optional parameter to filter by starting timestamp (optional)
     * @param  \DateTime|null $ts_end Optional parameter to filter by end timestamp (optional)
     * @param  string|null $category Optional parameter to filter by category. (optional)
     * @param  string|null $sort_by Optional parameter to set column to sort by. (optional)
     * @param  string[]|null $serials Optional parameter to filter by primary device serial (optional)
     * @param  string[]|null $device_types Optional parameter to filter by device types (optional)
     * @param  string[]|null $device_tags Optional parameter to filter by device tags (optional)
     * @param  bool|null $active Optional parameter to filter by active alerts defaults to true (optional)
     * @param  bool|null $dismissed Optional parameter to filter by dismissed alerts defaults to false (optional)
     * @param  bool|null $resolved Optional parameter to filter by resolved alerts defaults to false (optional)
     * @param  bool|null $suppress_alerts_for_offline_nodes When set to true the api will only return connectivity alerts for a given device if that device is in an offline state. This only applies to devices. This is ignored when resolved is true. Example:  If a Switch has a VLan Mismatch and is Unreachable. only the Unreachable alert will be returned. Defaults to false. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOrganizationAssuranceAlertsOverviewByType'] to see the possible values for this operation
     *
     * @throws \Meraki\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Meraki\Model\GetOrganizationAssuranceAlertsOverviewByType200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrganizationAssuranceAlertsOverviewByTypeWithHttpInfo($organization_id, $per_page = null, $starting_after = null, $ending_before = null, $sort_order = null, $network_id = null, $severity = null, $types = null, $ts_start = null, $ts_end = null, $category = null, $sort_by = null, $serials = null, $device_types = null, $device_tags = null, $active = null, $dismissed = null, $resolved = null, $suppress_alerts_for_offline_nodes = null, string $contentType = self::contentTypes['getOrganizationAssuranceAlertsOverviewByType'][0])
    {
        $request = $this->getOrganizationAssuranceAlertsOverviewByTypeRequest($organization_id, $per_page, $starting_after, $ending_before, $sort_order, $network_id, $severity, $types, $ts_start, $ts_end, $category, $sort_by, $serials, $device_types, $device_tags, $active, $dismissed, $resolved, $suppress_alerts_for_offline_nodes, $contentType);

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
                    if ('\Meraki\Model\GetOrganizationAssuranceAlertsOverviewByType200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Meraki\Model\GetOrganizationAssuranceAlertsOverviewByType200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Meraki\Model\GetOrganizationAssuranceAlertsOverviewByType200Response', []),
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

            $returnType = '\Meraki\Model\GetOrganizationAssuranceAlertsOverviewByType200Response';
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
                        '\Meraki\Model\GetOrganizationAssuranceAlertsOverviewByType200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getOrganizationAssuranceAlertsOverviewByTypeAsync
     *
     * Return a Summary of Alerts grouped by type and severity
     *
     * @param  string $organization_id Organization ID (required)
     * @param  int|null $per_page The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. (optional)
     * @param  string|null $starting_after A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. (optional)
     * @param  string|null $ending_before A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. (optional)
     * @param  string|null $sort_order Sorted order of entries. Order options are &#39;ascending&#39; and &#39;descending&#39;. Default is &#39;ascending&#39;. (optional)
     * @param  string|null $network_id Optional parameter to filter alerts overview by network ids. (optional)
     * @param  string|null $severity Optional parameter to filter alerts overview by severity type. (optional)
     * @param  string[]|null $types Optional parameter to filter by alert type. (optional)
     * @param  \DateTime|null $ts_start Optional parameter to filter by starting timestamp (optional)
     * @param  \DateTime|null $ts_end Optional parameter to filter by end timestamp (optional)
     * @param  string|null $category Optional parameter to filter by category. (optional)
     * @param  string|null $sort_by Optional parameter to set column to sort by. (optional)
     * @param  string[]|null $serials Optional parameter to filter by primary device serial (optional)
     * @param  string[]|null $device_types Optional parameter to filter by device types (optional)
     * @param  string[]|null $device_tags Optional parameter to filter by device tags (optional)
     * @param  bool|null $active Optional parameter to filter by active alerts defaults to true (optional)
     * @param  bool|null $dismissed Optional parameter to filter by dismissed alerts defaults to false (optional)
     * @param  bool|null $resolved Optional parameter to filter by resolved alerts defaults to false (optional)
     * @param  bool|null $suppress_alerts_for_offline_nodes When set to true the api will only return connectivity alerts for a given device if that device is in an offline state. This only applies to devices. This is ignored when resolved is true. Example:  If a Switch has a VLan Mismatch and is Unreachable. only the Unreachable alert will be returned. Defaults to false. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOrganizationAssuranceAlertsOverviewByType'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrganizationAssuranceAlertsOverviewByTypeAsync($organization_id, $per_page = null, $starting_after = null, $ending_before = null, $sort_order = null, $network_id = null, $severity = null, $types = null, $ts_start = null, $ts_end = null, $category = null, $sort_by = null, $serials = null, $device_types = null, $device_tags = null, $active = null, $dismissed = null, $resolved = null, $suppress_alerts_for_offline_nodes = null, string $contentType = self::contentTypes['getOrganizationAssuranceAlertsOverviewByType'][0])
    {
        return $this->getOrganizationAssuranceAlertsOverviewByTypeAsyncWithHttpInfo($organization_id, $per_page, $starting_after, $ending_before, $sort_order, $network_id, $severity, $types, $ts_start, $ts_end, $category, $sort_by, $serials, $device_types, $device_tags, $active, $dismissed, $resolved, $suppress_alerts_for_offline_nodes, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrganizationAssuranceAlertsOverviewByTypeAsyncWithHttpInfo
     *
     * Return a Summary of Alerts grouped by type and severity
     *
     * @param  string $organization_id Organization ID (required)
     * @param  int|null $per_page The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. (optional)
     * @param  string|null $starting_after A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. (optional)
     * @param  string|null $ending_before A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. (optional)
     * @param  string|null $sort_order Sorted order of entries. Order options are &#39;ascending&#39; and &#39;descending&#39;. Default is &#39;ascending&#39;. (optional)
     * @param  string|null $network_id Optional parameter to filter alerts overview by network ids. (optional)
     * @param  string|null $severity Optional parameter to filter alerts overview by severity type. (optional)
     * @param  string[]|null $types Optional parameter to filter by alert type. (optional)
     * @param  \DateTime|null $ts_start Optional parameter to filter by starting timestamp (optional)
     * @param  \DateTime|null $ts_end Optional parameter to filter by end timestamp (optional)
     * @param  string|null $category Optional parameter to filter by category. (optional)
     * @param  string|null $sort_by Optional parameter to set column to sort by. (optional)
     * @param  string[]|null $serials Optional parameter to filter by primary device serial (optional)
     * @param  string[]|null $device_types Optional parameter to filter by device types (optional)
     * @param  string[]|null $device_tags Optional parameter to filter by device tags (optional)
     * @param  bool|null $active Optional parameter to filter by active alerts defaults to true (optional)
     * @param  bool|null $dismissed Optional parameter to filter by dismissed alerts defaults to false (optional)
     * @param  bool|null $resolved Optional parameter to filter by resolved alerts defaults to false (optional)
     * @param  bool|null $suppress_alerts_for_offline_nodes When set to true the api will only return connectivity alerts for a given device if that device is in an offline state. This only applies to devices. This is ignored when resolved is true. Example:  If a Switch has a VLan Mismatch and is Unreachable. only the Unreachable alert will be returned. Defaults to false. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOrganizationAssuranceAlertsOverviewByType'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrganizationAssuranceAlertsOverviewByTypeAsyncWithHttpInfo($organization_id, $per_page = null, $starting_after = null, $ending_before = null, $sort_order = null, $network_id = null, $severity = null, $types = null, $ts_start = null, $ts_end = null, $category = null, $sort_by = null, $serials = null, $device_types = null, $device_tags = null, $active = null, $dismissed = null, $resolved = null, $suppress_alerts_for_offline_nodes = null, string $contentType = self::contentTypes['getOrganizationAssuranceAlertsOverviewByType'][0])
    {
        $returnType = '\Meraki\Model\GetOrganizationAssuranceAlertsOverviewByType200Response';
        $request = $this->getOrganizationAssuranceAlertsOverviewByTypeRequest($organization_id, $per_page, $starting_after, $ending_before, $sort_order, $network_id, $severity, $types, $ts_start, $ts_end, $category, $sort_by, $serials, $device_types, $device_tags, $active, $dismissed, $resolved, $suppress_alerts_for_offline_nodes, $contentType);

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
     * Create request for operation 'getOrganizationAssuranceAlertsOverviewByType'
     *
     * @param  string $organization_id Organization ID (required)
     * @param  int|null $per_page The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. (optional)
     * @param  string|null $starting_after A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. (optional)
     * @param  string|null $ending_before A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. (optional)
     * @param  string|null $sort_order Sorted order of entries. Order options are &#39;ascending&#39; and &#39;descending&#39;. Default is &#39;ascending&#39;. (optional)
     * @param  string|null $network_id Optional parameter to filter alerts overview by network ids. (optional)
     * @param  string|null $severity Optional parameter to filter alerts overview by severity type. (optional)
     * @param  string[]|null $types Optional parameter to filter by alert type. (optional)
     * @param  \DateTime|null $ts_start Optional parameter to filter by starting timestamp (optional)
     * @param  \DateTime|null $ts_end Optional parameter to filter by end timestamp (optional)
     * @param  string|null $category Optional parameter to filter by category. (optional)
     * @param  string|null $sort_by Optional parameter to set column to sort by. (optional)
     * @param  string[]|null $serials Optional parameter to filter by primary device serial (optional)
     * @param  string[]|null $device_types Optional parameter to filter by device types (optional)
     * @param  string[]|null $device_tags Optional parameter to filter by device tags (optional)
     * @param  bool|null $active Optional parameter to filter by active alerts defaults to true (optional)
     * @param  bool|null $dismissed Optional parameter to filter by dismissed alerts defaults to false (optional)
     * @param  bool|null $resolved Optional parameter to filter by resolved alerts defaults to false (optional)
     * @param  bool|null $suppress_alerts_for_offline_nodes When set to true the api will only return connectivity alerts for a given device if that device is in an offline state. This only applies to devices. This is ignored when resolved is true. Example:  If a Switch has a VLan Mismatch and is Unreachable. only the Unreachable alert will be returned. Defaults to false. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOrganizationAssuranceAlertsOverviewByType'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getOrganizationAssuranceAlertsOverviewByTypeRequest($organization_id, $per_page = null, $starting_after = null, $ending_before = null, $sort_order = null, $network_id = null, $severity = null, $types = null, $ts_start = null, $ts_end = null, $category = null, $sort_by = null, $serials = null, $device_types = null, $device_tags = null, $active = null, $dismissed = null, $resolved = null, $suppress_alerts_for_offline_nodes = null, string $contentType = self::contentTypes['getOrganizationAssuranceAlertsOverviewByType'][0])
    {

        // verify the required parameter 'organization_id' is set
        if ($organization_id === null || (is_array($organization_id) && count($organization_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization_id when calling getOrganizationAssuranceAlertsOverviewByType'
            );
        }




















        $resourcePath = '/organizations/{organizationId}/assurance/alerts/overview/byType';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $per_page,
            'perPage', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $starting_after,
            'startingAfter', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ending_before,
            'endingBefore', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort_order,
            'sortOrder', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $network_id,
            'networkId', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $severity,
            'severity', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $types,
            'types', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ts_start,
            'tsStart', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ts_end,
            'tsEnd', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $category,
            'category', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort_by,
            'sortBy', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $serials,
            'serials', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $device_types,
            'deviceTypes', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $device_tags,
            'deviceTags', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $active,
            'active', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $dismissed,
            'dismissed', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $resolved,
            'resolved', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $suppress_alerts_for_offline_nodes,
            'suppressAlertsForOfflineNodes', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
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
