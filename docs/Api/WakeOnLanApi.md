# Meraki\WakeOnLanApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDeviceLiveToolsWakeOnLan()**](WakeOnLanApi.md#createDeviceLiveToolsWakeOnLan) | **POST** /devices/{serial}/liveTools/wakeOnLan | Enqueue a job to send a Wake-on-LAN packet from the device |
| [**getDeviceLiveToolsWakeOnLan()**](WakeOnLanApi.md#getDeviceLiveToolsWakeOnLan) | **GET** /devices/{serial}/liveTools/wakeOnLan/{wakeOnLanId} | Return a Wake-on-LAN job |


## `createDeviceLiveToolsWakeOnLan()`

```php
createDeviceLiveToolsWakeOnLan($serial, $create_device_live_tools_wake_on_lan_request): \Meraki\Model\CreateDeviceLiveToolsWakeOnLan201Response
```

Enqueue a job to send a Wake-on-LAN packet from the device

Enqueue a job to send a Wake-on-LAN packet from the device. This endpoint has a sustained rate limit of one request every five seconds per device, with an allowed burst of five requests.

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


$apiInstance = new Meraki\Api\WakeOnLanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$create_device_live_tools_wake_on_lan_request = new \Meraki\Model\CreateDeviceLiveToolsWakeOnLanRequest(); // \Meraki\Model\CreateDeviceLiveToolsWakeOnLanRequest

try {
    $result = $apiInstance->createDeviceLiveToolsWakeOnLan($serial, $create_device_live_tools_wake_on_lan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WakeOnLanApi->createDeviceLiveToolsWakeOnLan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **create_device_live_tools_wake_on_lan_request** | [**\Meraki\Model\CreateDeviceLiveToolsWakeOnLanRequest**](../Model/CreateDeviceLiveToolsWakeOnLanRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateDeviceLiveToolsWakeOnLan201Response**](../Model/CreateDeviceLiveToolsWakeOnLan201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceLiveToolsWakeOnLan()`

```php
getDeviceLiveToolsWakeOnLan($serial, $wake_on_lan_id): \Meraki\Model\DevicesSerialLiveToolsWakeOnLanPostRequestMessage
```

Return a Wake-on-LAN job

Return a Wake-on-LAN job

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


$apiInstance = new Meraki\Api\WakeOnLanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$wake_on_lan_id = 'wake_on_lan_id_example'; // string | Wake on lan ID

try {
    $result = $apiInstance->getDeviceLiveToolsWakeOnLan($serial, $wake_on_lan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WakeOnLanApi->getDeviceLiveToolsWakeOnLan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **wake_on_lan_id** | **string**| Wake on lan ID | |

### Return type

[**\Meraki\Model\DevicesSerialLiveToolsWakeOnLanPostRequestMessage**](../Model/DevicesSerialLiveToolsWakeOnLanPostRequestMessage.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
