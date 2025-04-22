# Meraki\CellularUsageHistoryApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkSmDeviceCellularUsageHistory()**](CellularUsageHistoryApi.md#getNetworkSmDeviceCellularUsageHistory) | **GET** /networks/{networkId}/sm/devices/{deviceId}/cellularUsageHistory | Return the client&#39;s daily cellular data usage history |


## `getNetworkSmDeviceCellularUsageHistory()`

```php
getNetworkSmDeviceCellularUsageHistory($network_id, $device_id): \Meraki\Model\GetNetworkSmDeviceCellularUsageHistory200ResponseInner[]
```

Return the client's daily cellular data usage history

Return the client's daily cellular data usage history. Usage data is in kilobytes.

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


$apiInstance = new Meraki\Api\CellularUsageHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID

try {
    $result = $apiInstance->getNetworkSmDeviceCellularUsageHistory($network_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellularUsageHistoryApi->getNetworkSmDeviceCellularUsageHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |

### Return type

[**\Meraki\Model\GetNetworkSmDeviceCellularUsageHistory200ResponseInner[]**](../Model/GetNetworkSmDeviceCellularUsageHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
