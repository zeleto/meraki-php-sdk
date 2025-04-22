# Meraki\UsageHistoryApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkApplianceUplinksUsageHistory()**](UsageHistoryApi.md#getNetworkApplianceUplinksUsageHistory) | **GET** /networks/{networkId}/appliance/uplinks/usageHistory | Get the sent and received bytes for each uplink of a network. |
| [**getNetworkClientUsageHistory()**](UsageHistoryApi.md#getNetworkClientUsageHistory) | **GET** /networks/{networkId}/clients/{clientId}/usageHistory | Return the client&#39;s daily usage history |
| [**getNetworkWirelessUsageHistory()**](UsageHistoryApi.md#getNetworkWirelessUsageHistory) | **GET** /networks/{networkId}/wireless/usageHistory | Return AP usage over time for a device or network client |


## `getNetworkApplianceUplinksUsageHistory()`

```php
getNetworkApplianceUplinksUsageHistory($network_id, $t0, $t1, $timespan, $resolution): \Meraki\Model\GetNetworkApplianceUplinksUsageHistory200ResponseInner[]
```

Get the sent and received bytes for each uplink of a network.

Get the sent and received bytes for each uplink of a network.

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


$apiInstance = new Meraki\Api\UsageHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 365 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 10 minutes.
$resolution = 56; // int | The time resolution in seconds for returned data. The valid resolutions are: 60, 300, 600, 1800, 3600, 86400. The default is 60.

try {
    $result = $apiInstance->getNetworkApplianceUplinksUsageHistory($network_id, $t0, $t1, $timespan, $resolution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageHistoryApi->getNetworkApplianceUplinksUsageHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 365 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 10 minutes. | [optional] |
| **resolution** | **int**| The time resolution in seconds for returned data. The valid resolutions are: 60, 300, 600, 1800, 3600, 86400. The default is 60. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceUplinksUsageHistory200ResponseInner[]**](../Model/GetNetworkApplianceUplinksUsageHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkClientUsageHistory()`

```php
getNetworkClientUsageHistory($network_id, $client_id): \Meraki\Model\GetNetworkClientUsageHistory200ResponseInner[]
```

Return the client's daily usage history

Return the client's daily usage history. Usage data is in kilobytes. Clients can be identified by a client key or either the MAC or IP depending on whether the network uses Track-by-IP.

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


$apiInstance = new Meraki\Api\UsageHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$client_id = 'client_id_example'; // string | Client ID

try {
    $result = $apiInstance->getNetworkClientUsageHistory($network_id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageHistoryApi->getNetworkClientUsageHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **client_id** | **string**| Client ID | |

### Return type

[**\Meraki\Model\GetNetworkClientUsageHistory200ResponseInner[]**](../Model/GetNetworkClientUsageHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessUsageHistory()`

```php
getNetworkWirelessUsageHistory($network_id, $t0, $t1, $timespan, $resolution, $auto_resolution, $client_id, $device_serial, $ap_tag, $band, $ssid): \Meraki\Model\GetNetworkWirelessUsageHistory200ResponseInner[]
```

Return AP usage over time for a device or network client

Return AP usage over time for a device or network client

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


$apiInstance = new Meraki\Api\UsageHistoryApi(
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
$client_id = 'client_id_example'; // string | Filter results by network client to return per-device AP usage over time inner joined by the queried client's connection history.
$device_serial = 'device_serial_example'; // string | Filter results by device. Requires :band.
$ap_tag = 'ap_tag_example'; // string | Filter results by AP tag; either :clientId or :deviceSerial must be jointly specified.
$band = 'band_example'; // string | Filter results by band (either '2.4', '5' or '6').
$ssid = 56; // int | Filter results by SSID number.

try {
    $result = $apiInstance->getNetworkWirelessUsageHistory($network_id, $t0, $t1, $timespan, $resolution, $auto_resolution, $client_id, $device_serial, $ap_tag, $band, $ssid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageHistoryApi->getNetworkWirelessUsageHistory: ', $e->getMessage(), PHP_EOL;
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
| **client_id** | **string**| Filter results by network client to return per-device AP usage over time inner joined by the queried client&#39;s connection history. | [optional] |
| **device_serial** | **string**| Filter results by device. Requires :band. | [optional] |
| **ap_tag** | **string**| Filter results by AP tag; either :clientId or :deviceSerial must be jointly specified. | [optional] |
| **band** | **string**| Filter results by band (either &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;). | [optional] |
| **ssid** | **int**| Filter results by SSID number. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessUsageHistory200ResponseInner[]**](../Model/GetNetworkWirelessUsageHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
