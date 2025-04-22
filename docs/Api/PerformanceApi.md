# Meraki\PerformanceApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDeviceAppliancePerformance()**](PerformanceApi.md#getDeviceAppliancePerformance) | **GET** /devices/{serial}/appliance/performance | Return the performance score for a single MX |


## `getDeviceAppliancePerformance()`

```php
getDeviceAppliancePerformance($serial, $t0, $t1, $timespan): \Meraki\Model\GetDeviceAppliancePerformance200Response
```

Return the performance score for a single MX

Return the performance score for a single MX. Only primary MX devices supported. If no data is available, a 204 error code is returned.

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


$apiInstance = new Meraki\Api\PerformanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 30 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 14 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 30 minutes and be less than or equal to 14 days. The default is 30 minutes.

try {
    $result = $apiInstance->getDeviceAppliancePerformance($serial, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceApi->getDeviceAppliancePerformance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 30 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 14 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 30 minutes and be less than or equal to 14 days. The default is 30 minutes. | [optional] |

### Return type

[**\Meraki\Model\GetDeviceAppliancePerformance200Response**](../Model/GetDeviceAppliancePerformance200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
