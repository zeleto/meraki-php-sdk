<?php
/**
 * FailedConnectionsApi
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
 * FailedConnectionsApi Class Doc Comment
 *
 * @category Class
 * @package  Meraki
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FailedConnectionsApi
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
        'getNetworkWirelessFailedConnections' => [
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
     * Operation getNetworkWirelessFailedConnections
     *
     * List of all failed client connection events on this network in a given time range
     *
     * @param  string $network_id Network ID (required)
     * @param  string|null $t0 The beginning of the timespan for the data. The maximum lookback period is 180 days from today. (optional)
     * @param  string|null $t1 The end of the timespan for the data. t1 can be a maximum of 7 days after t0. (optional)
     * @param  float|null $timespan The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days. (optional)
     * @param  string|null $band Filter results by band (either &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;). Note that data prior to February 2020 will not have band information. (optional)
     * @param  int|null $ssid Filter results by SSID (optional)
     * @param  int|null $vlan Filter results by VLAN (optional)
     * @param  string|null $ap_tag Filter results by AP Tag (optional)
     * @param  string|null $serial Filter by AP (optional)
     * @param  string|null $client_id Filter by client MAC (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getNetworkWirelessFailedConnections'] to see the possible values for this operation
     *
     * @throws \Meraki\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Meraki\Model\GetNetworkWirelessFailedConnections200ResponseInner[]
     */
    public function getNetworkWirelessFailedConnections($network_id, $t0 = null, $t1 = null, $timespan = null, $band = null, $ssid = null, $vlan = null, $ap_tag = null, $serial = null, $client_id = null, string $contentType = self::contentTypes['getNetworkWirelessFailedConnections'][0])
    {
        list($response) = $this->getNetworkWirelessFailedConnectionsWithHttpInfo($network_id, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag, $serial, $client_id, $contentType);
        return $response;
    }

    /**
     * Operation getNetworkWirelessFailedConnectionsWithHttpInfo
     *
     * List of all failed client connection events on this network in a given time range
     *
     * @param  string $network_id Network ID (required)
     * @param  string|null $t0 The beginning of the timespan for the data. The maximum lookback period is 180 days from today. (optional)
     * @param  string|null $t1 The end of the timespan for the data. t1 can be a maximum of 7 days after t0. (optional)
     * @param  float|null $timespan The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days. (optional)
     * @param  string|null $band Filter results by band (either &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;). Note that data prior to February 2020 will not have band information. (optional)
     * @param  int|null $ssid Filter results by SSID (optional)
     * @param  int|null $vlan Filter results by VLAN (optional)
     * @param  string|null $ap_tag Filter results by AP Tag (optional)
     * @param  string|null $serial Filter by AP (optional)
     * @param  string|null $client_id Filter by client MAC (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getNetworkWirelessFailedConnections'] to see the possible values for this operation
     *
     * @throws \Meraki\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Meraki\Model\GetNetworkWirelessFailedConnections200ResponseInner[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getNetworkWirelessFailedConnectionsWithHttpInfo($network_id, $t0 = null, $t1 = null, $timespan = null, $band = null, $ssid = null, $vlan = null, $ap_tag = null, $serial = null, $client_id = null, string $contentType = self::contentTypes['getNetworkWirelessFailedConnections'][0])
    {
        $request = $this->getNetworkWirelessFailedConnectionsRequest($network_id, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag, $serial, $client_id, $contentType);

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
                    if ('\Meraki\Model\GetNetworkWirelessFailedConnections200ResponseInner[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Meraki\Model\GetNetworkWirelessFailedConnections200ResponseInner[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Meraki\Model\GetNetworkWirelessFailedConnections200ResponseInner[]', []),
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

            $returnType = '\Meraki\Model\GetNetworkWirelessFailedConnections200ResponseInner[]';
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
                        '\Meraki\Model\GetNetworkWirelessFailedConnections200ResponseInner[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getNetworkWirelessFailedConnectionsAsync
     *
     * List of all failed client connection events on this network in a given time range
     *
     * @param  string $network_id Network ID (required)
     * @param  string|null $t0 The beginning of the timespan for the data. The maximum lookback period is 180 days from today. (optional)
     * @param  string|null $t1 The end of the timespan for the data. t1 can be a maximum of 7 days after t0. (optional)
     * @param  float|null $timespan The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days. (optional)
     * @param  string|null $band Filter results by band (either &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;). Note that data prior to February 2020 will not have band information. (optional)
     * @param  int|null $ssid Filter results by SSID (optional)
     * @param  int|null $vlan Filter results by VLAN (optional)
     * @param  string|null $ap_tag Filter results by AP Tag (optional)
     * @param  string|null $serial Filter by AP (optional)
     * @param  string|null $client_id Filter by client MAC (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getNetworkWirelessFailedConnections'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getNetworkWirelessFailedConnectionsAsync($network_id, $t0 = null, $t1 = null, $timespan = null, $band = null, $ssid = null, $vlan = null, $ap_tag = null, $serial = null, $client_id = null, string $contentType = self::contentTypes['getNetworkWirelessFailedConnections'][0])
    {
        return $this->getNetworkWirelessFailedConnectionsAsyncWithHttpInfo($network_id, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag, $serial, $client_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getNetworkWirelessFailedConnectionsAsyncWithHttpInfo
     *
     * List of all failed client connection events on this network in a given time range
     *
     * @param  string $network_id Network ID (required)
     * @param  string|null $t0 The beginning of the timespan for the data. The maximum lookback period is 180 days from today. (optional)
     * @param  string|null $t1 The end of the timespan for the data. t1 can be a maximum of 7 days after t0. (optional)
     * @param  float|null $timespan The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days. (optional)
     * @param  string|null $band Filter results by band (either &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;). Note that data prior to February 2020 will not have band information. (optional)
     * @param  int|null $ssid Filter results by SSID (optional)
     * @param  int|null $vlan Filter results by VLAN (optional)
     * @param  string|null $ap_tag Filter results by AP Tag (optional)
     * @param  string|null $serial Filter by AP (optional)
     * @param  string|null $client_id Filter by client MAC (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getNetworkWirelessFailedConnections'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getNetworkWirelessFailedConnectionsAsyncWithHttpInfo($network_id, $t0 = null, $t1 = null, $timespan = null, $band = null, $ssid = null, $vlan = null, $ap_tag = null, $serial = null, $client_id = null, string $contentType = self::contentTypes['getNetworkWirelessFailedConnections'][0])
    {
        $returnType = '\Meraki\Model\GetNetworkWirelessFailedConnections200ResponseInner[]';
        $request = $this->getNetworkWirelessFailedConnectionsRequest($network_id, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag, $serial, $client_id, $contentType);

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
     * Create request for operation 'getNetworkWirelessFailedConnections'
     *
     * @param  string $network_id Network ID (required)
     * @param  string|null $t0 The beginning of the timespan for the data. The maximum lookback period is 180 days from today. (optional)
     * @param  string|null $t1 The end of the timespan for the data. t1 can be a maximum of 7 days after t0. (optional)
     * @param  float|null $timespan The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days. (optional)
     * @param  string|null $band Filter results by band (either &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;). Note that data prior to February 2020 will not have band information. (optional)
     * @param  int|null $ssid Filter results by SSID (optional)
     * @param  int|null $vlan Filter results by VLAN (optional)
     * @param  string|null $ap_tag Filter results by AP Tag (optional)
     * @param  string|null $serial Filter by AP (optional)
     * @param  string|null $client_id Filter by client MAC (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getNetworkWirelessFailedConnections'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getNetworkWirelessFailedConnectionsRequest($network_id, $t0 = null, $t1 = null, $timespan = null, $band = null, $ssid = null, $vlan = null, $ap_tag = null, $serial = null, $client_id = null, string $contentType = self::contentTypes['getNetworkWirelessFailedConnections'][0])
    {

        // verify the required parameter 'network_id' is set
        if ($network_id === null || (is_array($network_id) && count($network_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $network_id when calling getNetworkWirelessFailedConnections'
            );
        }



        if ($timespan !== null && $timespan > 604800) {
            throw new \InvalidArgumentException('invalid value for "$timespan" when calling FailedConnectionsApi.getNetworkWirelessFailedConnections, must be smaller than or equal to 604800.');
        }
        







        $resourcePath = '/networks/{networkId}/wireless/failedConnections';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $t0,
            't0', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $t1,
            't1', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $timespan,
            'timespan', // param base name
            'number', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $band,
            'band', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ssid,
            'ssid', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $vlan,
            'vlan', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ap_tag,
            'apTag', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $serial,
            'serial', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $client_id,
            'clientId', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


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
