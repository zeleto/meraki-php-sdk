# Meraki\HealthByTimeApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkInsightApplicationHealthByTime()**](HealthByTimeApi.md#getNetworkInsightApplicationHealthByTime) | **GET** /networks/{networkId}/insight/applications/{applicationId}/healthByTime | Get application health by time |


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


$apiInstance = new Meraki\Api\HealthByTimeApi(
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
    echo 'Exception when calling HealthByTimeApi->getNetworkInsightApplicationHealthByTime: ', $e->getMessage(), PHP_EOL;
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
