# Meraki\InsightApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrganizationInsightMonitoredMediaServer()**](InsightApi.md#createOrganizationInsightMonitoredMediaServer) | **POST** /organizations/{organizationId}/insight/monitoredMediaServers | Add a media server to be monitored for this organization |
| [**deleteOrganizationInsightMonitoredMediaServer()**](InsightApi.md#deleteOrganizationInsightMonitoredMediaServer) | **DELETE** /organizations/{organizationId}/insight/monitoredMediaServers/{monitoredMediaServerId} | Delete a monitored media server from this organization |
| [**getNetworkInsightApplicationHealthByTime()**](InsightApi.md#getNetworkInsightApplicationHealthByTime) | **GET** /networks/{networkId}/insight/applications/{applicationId}/healthByTime | Get application health by time |
| [**getOrganizationInsightApplications()**](InsightApi.md#getOrganizationInsightApplications) | **GET** /organizations/{organizationId}/insight/applications | List all Insight tracked applications |
| [**getOrganizationInsightMonitoredMediaServer()**](InsightApi.md#getOrganizationInsightMonitoredMediaServer) | **GET** /organizations/{organizationId}/insight/monitoredMediaServers/{monitoredMediaServerId} | Return a monitored media server for this organization |
| [**getOrganizationInsightMonitoredMediaServers()**](InsightApi.md#getOrganizationInsightMonitoredMediaServers) | **GET** /organizations/{organizationId}/insight/monitoredMediaServers | List the monitored media servers for this organization |
| [**updateOrganizationInsightMonitoredMediaServer()**](InsightApi.md#updateOrganizationInsightMonitoredMediaServer) | **PUT** /organizations/{organizationId}/insight/monitoredMediaServers/{monitoredMediaServerId} | Update a monitored media server for this organization |


## `createOrganizationInsightMonitoredMediaServer()`

```php
createOrganizationInsightMonitoredMediaServer($organization_id, $create_organization_insight_monitored_media_server_request): \Meraki\Model\GetOrganizationInsightMonitoredMediaServers200ResponseInner
```

Add a media server to be monitored for this organization

Add a media server to be monitored for this organization. Only valid for organizations with Meraki Insight.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\InsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_insight_monitored_media_server_request = new \Meraki\Model\CreateOrganizationInsightMonitoredMediaServerRequest(); // \Meraki\Model\CreateOrganizationInsightMonitoredMediaServerRequest

try {
    $result = $apiInstance->createOrganizationInsightMonitoredMediaServer($organization_id, $create_organization_insight_monitored_media_server_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightApi->createOrganizationInsightMonitoredMediaServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_insight_monitored_media_server_request** | [**\Meraki\Model\CreateOrganizationInsightMonitoredMediaServerRequest**](../Model/CreateOrganizationInsightMonitoredMediaServerRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationInsightMonitoredMediaServers200ResponseInner**](../Model/GetOrganizationInsightMonitoredMediaServers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrganizationInsightMonitoredMediaServer()`

```php
deleteOrganizationInsightMonitoredMediaServer($organization_id, $monitored_media_server_id)
```

Delete a monitored media server from this organization

Delete a monitored media server from this organization. Only valid for organizations with Meraki Insight.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\InsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$monitored_media_server_id = 'monitored_media_server_id_example'; // string | Monitored media server ID

try {
    $apiInstance->deleteOrganizationInsightMonitoredMediaServer($organization_id, $monitored_media_server_id);
} catch (Exception $e) {
    echo 'Exception when calling InsightApi->deleteOrganizationInsightMonitoredMediaServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **monitored_media_server_id** | **string**| Monitored media server ID | |

### Return type

void (empty response body)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkInsightApplicationHealthByTime()`

```php
getNetworkInsightApplicationHealthByTime($network_id, $application_id, $t0, $t1, $timespan, $resolution): \Meraki\Model\GetNetworkInsightApplicationHealthByTime200ResponseInner[]
```

Get application health by time

Get application health by time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\InsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$application_id = 'application_id_example'; // string | Application ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 7 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 7 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days. The default is 2 hours.
$resolution = 56; // int | The time resolution in seconds for returned data. The valid resolutions are: 60, 300, 3600, 86400. The default is 300.

try {
    $result = $apiInstance->getNetworkInsightApplicationHealthByTime($network_id, $application_id, $t0, $t1, $timespan, $resolution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightApi->getNetworkInsightApplicationHealthByTime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **application_id** | **string**| Application ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 7 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 7 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days. The default is 2 hours. | [optional] |
| **resolution** | **int**| The time resolution in seconds for returned data. The valid resolutions are: 60, 300, 3600, 86400. The default is 300. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkInsightApplicationHealthByTime200ResponseInner[]**](../Model/GetNetworkInsightApplicationHealthByTime200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationInsightApplications()`

```php
getOrganizationInsightApplications($organization_id): \Meraki\Model\GetOrganizationInsightApplications200ResponseInner[]
```

List all Insight tracked applications

List all Insight tracked applications

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\InsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationInsightApplications($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightApi->getOrganizationInsightApplications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationInsightApplications200ResponseInner[]**](../Model/GetOrganizationInsightApplications200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationInsightMonitoredMediaServer()`

```php
getOrganizationInsightMonitoredMediaServer($organization_id, $monitored_media_server_id): \Meraki\Model\GetOrganizationInsightMonitoredMediaServers200ResponseInner
```

Return a monitored media server for this organization

Return a monitored media server for this organization. Only valid for organizations with Meraki Insight.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\InsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$monitored_media_server_id = 'monitored_media_server_id_example'; // string | Monitored media server ID

try {
    $result = $apiInstance->getOrganizationInsightMonitoredMediaServer($organization_id, $monitored_media_server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightApi->getOrganizationInsightMonitoredMediaServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **monitored_media_server_id** | **string**| Monitored media server ID | |

### Return type

[**\Meraki\Model\GetOrganizationInsightMonitoredMediaServers200ResponseInner**](../Model/GetOrganizationInsightMonitoredMediaServers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationInsightMonitoredMediaServers()`

```php
getOrganizationInsightMonitoredMediaServers($organization_id): \Meraki\Model\GetOrganizationInsightMonitoredMediaServers200ResponseInner[]
```

List the monitored media servers for this organization

List the monitored media servers for this organization. Only valid for organizations with Meraki Insight.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\InsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationInsightMonitoredMediaServers($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightApi->getOrganizationInsightMonitoredMediaServers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationInsightMonitoredMediaServers200ResponseInner[]**](../Model/GetOrganizationInsightMonitoredMediaServers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationInsightMonitoredMediaServer()`

```php
updateOrganizationInsightMonitoredMediaServer($organization_id, $monitored_media_server_id, $update_organization_insight_monitored_media_server_request): \Meraki\Model\GetOrganizationInsightMonitoredMediaServers200ResponseInner
```

Update a monitored media server for this organization

Update a monitored media server for this organization. Only valid for organizations with Meraki Insight.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\InsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$monitored_media_server_id = 'monitored_media_server_id_example'; // string | Monitored media server ID
$update_organization_insight_monitored_media_server_request = new \Meraki\Model\UpdateOrganizationInsightMonitoredMediaServerRequest(); // \Meraki\Model\UpdateOrganizationInsightMonitoredMediaServerRequest

try {
    $result = $apiInstance->updateOrganizationInsightMonitoredMediaServer($organization_id, $monitored_media_server_id, $update_organization_insight_monitored_media_server_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightApi->updateOrganizationInsightMonitoredMediaServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **monitored_media_server_id** | **string**| Monitored media server ID | |
| **update_organization_insight_monitored_media_server_request** | [**\Meraki\Model\UpdateOrganizationInsightMonitoredMediaServerRequest**](../Model/UpdateOrganizationInsightMonitoredMediaServerRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationInsightMonitoredMediaServers200ResponseInner**](../Model/GetOrganizationInsightMonitoredMediaServers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
