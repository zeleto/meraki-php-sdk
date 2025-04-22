# Meraki\ByMetricApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkSensorAlertsCurrentOverviewByMetric()**](ByMetricApi.md#getNetworkSensorAlertsCurrentOverviewByMetric) | **GET** /networks/{networkId}/sensor/alerts/current/overview/byMetric | Return an overview of currently alerting sensors by metric |
| [**getNetworkSensorAlertsOverviewByMetric()**](ByMetricApi.md#getNetworkSensorAlertsOverviewByMetric) | **GET** /networks/{networkId}/sensor/alerts/overview/byMetric | Return an overview of alert occurrences over a timespan, by metric |


## `getNetworkSensorAlertsCurrentOverviewByMetric()`

```php
getNetworkSensorAlertsCurrentOverviewByMetric($network_id): \Meraki\Model\GetNetworkSensorAlertsCurrentOverviewByMetric200Response
```

Return an overview of currently alerting sensors by metric

Return an overview of currently alerting sensors by metric

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


$apiInstance = new Meraki\Api\ByMetricApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSensorAlertsCurrentOverviewByMetric($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ByMetricApi->getNetworkSensorAlertsCurrentOverviewByMetric: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSensorAlertsCurrentOverviewByMetric200Response**](../Model/GetNetworkSensorAlertsCurrentOverviewByMetric200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSensorAlertsOverviewByMetric()`

```php
getNetworkSensorAlertsOverviewByMetric($network_id, $t0, $t1, $timespan, $interval): \Meraki\Model\GetNetworkSensorAlertsOverviewByMetric200ResponseInner[]
```

Return an overview of alert occurrences over a timespan, by metric

Return an overview of alert occurrences over a timespan, by metric

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


$apiInstance = new Meraki\Api\ByMetricApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 731 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 366 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 366 days. The default is 7 days. If interval is provided, the timespan will be autocalculated.
$interval = 56; // int | The time interval in seconds for returned data. The valid intervals are: 900, 3600, 86400, 604800, 2592000. The default is 604800. Interval is calculated if time params are provided.

try {
    $result = $apiInstance->getNetworkSensorAlertsOverviewByMetric($network_id, $t0, $t1, $timespan, $interval);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ByMetricApi->getNetworkSensorAlertsOverviewByMetric: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 731 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 366 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 366 days. The default is 7 days. If interval is provided, the timespan will be autocalculated. | [optional] |
| **interval** | **int**| The time interval in seconds for returned data. The valid intervals are: 900, 3600, 86400, 604800, 2592000. The default is 604800. Interval is calculated if time params are provided. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSensorAlertsOverviewByMetric200ResponseInner[]**](../Model/GetNetworkSensorAlertsOverviewByMetric200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
