# Meraki\LossAndLatencyHistoryApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDeviceLossAndLatencyHistory()**](LossAndLatencyHistoryApi.md#getDeviceLossAndLatencyHistory) | **GET** /devices/{serial}/lossAndLatencyHistory | Get the uplink loss percentage and latency in milliseconds, and goodput in kilobits per second for MX, MG and Z devices. |


## `getDeviceLossAndLatencyHistory()`

```php
getDeviceLossAndLatencyHistory($serial, $ip, $t0, $t1, $timespan, $resolution, $uplink): \Meraki\Model\GetDeviceLossAndLatencyHistory200ResponseInner[]
```

Get the uplink loss percentage and latency in milliseconds, and goodput in kilobits per second for MX, MG and Z devices.

Get the uplink loss percentage and latency in milliseconds, and goodput in kilobits per second for MX, MG and Z devices.

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


$apiInstance = new Meraki\Api\LossAndLatencyHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$ip = 'ip_example'; // string | The destination IP used to obtain the requested stats. This is required.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 60 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day.
$resolution = 56; // int | The time resolution in seconds for returned data. The valid resolutions are: 60, 600, 3600, 86400. The default is 60.
$uplink = 'uplink_example'; // string | The WAN uplink used to obtain the requested stats. Valid uplinks are wan1, wan2, wan3, cellular. The default is wan1.

try {
    $result = $apiInstance->getDeviceLossAndLatencyHistory($serial, $ip, $t0, $t1, $timespan, $resolution, $uplink);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LossAndLatencyHistoryApi->getDeviceLossAndLatencyHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **ip** | **string**| The destination IP used to obtain the requested stats. This is required. | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 60 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. | [optional] |
| **resolution** | **int**| The time resolution in seconds for returned data. The valid resolutions are: 60, 600, 3600, 86400. The default is 60. | [optional] |
| **uplink** | **string**| The WAN uplink used to obtain the requested stats. Valid uplinks are wan1, wan2, wan3, cellular. The default is wan1. | [optional] |

### Return type

[**\Meraki\Model\GetDeviceLossAndLatencyHistory200ResponseInner[]**](../Model/GetDeviceLossAndLatencyHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
