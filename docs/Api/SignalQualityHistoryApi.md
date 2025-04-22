# Meraki\SignalQualityHistoryApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkWirelessSignalQualityHistory()**](SignalQualityHistoryApi.md#getNetworkWirelessSignalQualityHistory) | **GET** /networks/{networkId}/wireless/signalQualityHistory | Return signal quality (SNR/RSSI) over time for a device or network client |


## `getNetworkWirelessSignalQualityHistory()`

```php
getNetworkWirelessSignalQualityHistory($network_id, $t0, $t1, $timespan, $resolution, $auto_resolution, $client_id, $device_serial, $ap_tag, $band, $ssid): \Meraki\Model\GetNetworkWirelessSignalQualityHistory200ResponseInner[]
```

Return signal quality (SNR/RSSI) over time for a device or network client

Return signal quality (SNR/RSSI) over time for a device or network client

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


$apiInstance = new Meraki\Api\SignalQualityHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days.
$resolution = 56; // int | The time resolution in seconds for returned data. The valid resolutions are: 300, 600, 1200, 3600, 14400, 86400. The default is 86400.
$auto_resolution = True; // bool | Automatically select a data resolution based on the given timespan; this overrides the value specified by the 'resolution' parameter. The default setting is false.
$client_id = 'client_id_example'; // string | Filter results by network client.
$device_serial = 'device_serial_example'; // string | Filter results by device.
$ap_tag = 'ap_tag_example'; // string | Filter results by AP tag; either :clientId or :deviceSerial must be jointly specified.
$band = 'band_example'; // string | Filter results by band (either '2.4', '5' or '6').
$ssid = 56; // int | Filter results by SSID number.

try {
    $result = $apiInstance->getNetworkWirelessSignalQualityHistory($network_id, $t0, $t1, $timespan, $resolution, $auto_resolution, $client_id, $device_serial, $ap_tag, $band, $ssid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignalQualityHistoryApi->getNetworkWirelessSignalQualityHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days. | [optional] |
| **resolution** | **int**| The time resolution in seconds for returned data. The valid resolutions are: 300, 600, 1200, 3600, 14400, 86400. The default is 86400. | [optional] |
| **auto_resolution** | **bool**| Automatically select a data resolution based on the given timespan; this overrides the value specified by the &#39;resolution&#39; parameter. The default setting is false. | [optional] |
| **client_id** | **string**| Filter results by network client. | [optional] |
| **device_serial** | **string**| Filter results by device. | [optional] |
| **ap_tag** | **string**| Filter results by AP tag; either :clientId or :deviceSerial must be jointly specified. | [optional] |
| **band** | **string**| Filter results by band (either &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;). | [optional] |
| **ssid** | **int**| Filter results by SSID number. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessSignalQualityHistory200ResponseInner[]**](../Model/GetNetworkWirelessSignalQualityHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
