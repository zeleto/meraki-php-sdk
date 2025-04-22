# Meraki\PingDeviceApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDeviceLiveToolsPingDevice()**](PingDeviceApi.md#createDeviceLiveToolsPingDevice) | **POST** /devices/{serial}/liveTools/pingDevice | Enqueue a job to check connectivity status to the device |
| [**getDeviceLiveToolsPingDevice()**](PingDeviceApi.md#getDeviceLiveToolsPingDevice) | **GET** /devices/{serial}/liveTools/pingDevice/{id} | Return a ping device job |


## `createDeviceLiveToolsPingDevice()`

```php
createDeviceLiveToolsPingDevice($serial, $create_device_live_tools_ping_device_request): \Meraki\Model\CreateDeviceLiveToolsPingDevice201Response
```

Enqueue a job to check connectivity status to the device

Enqueue a job to check connectivity status to the device. This endpoint has a sustained rate limit of one request every five seconds per device, with an allowed burst of five requests.

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


$apiInstance = new Meraki\Api\PingDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$create_device_live_tools_ping_device_request = new \Meraki\Model\CreateDeviceLiveToolsPingDeviceRequest(); // \Meraki\Model\CreateDeviceLiveToolsPingDeviceRequest

try {
    $result = $apiInstance->createDeviceLiveToolsPingDevice($serial, $create_device_live_tools_ping_device_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingDeviceApi->createDeviceLiveToolsPingDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **create_device_live_tools_ping_device_request** | [**\Meraki\Model\CreateDeviceLiveToolsPingDeviceRequest**](../Model/CreateDeviceLiveToolsPingDeviceRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\CreateDeviceLiveToolsPingDevice201Response**](../Model/CreateDeviceLiveToolsPingDevice201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceLiveToolsPingDevice()`

```php
getDeviceLiveToolsPingDevice($serial, $id): \Meraki\Model\GetDeviceLiveToolsPingDevice200Response
```

Return a ping device job

Return a ping device job. Latency unit in response is in milliseconds. Size is in bytes.

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


$apiInstance = new Meraki\Api\PingDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$id = 'id_example'; // string | ID

try {
    $result = $apiInstance->getDeviceLiveToolsPingDevice($serial, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingDeviceApi->getDeviceLiveToolsPingDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **id** | **string**| ID | |

### Return type

[**\Meraki\Model\GetDeviceLiveToolsPingDevice200Response**](../Model/GetDeviceLiveToolsPingDevice200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
