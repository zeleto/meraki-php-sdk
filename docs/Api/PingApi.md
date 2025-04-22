# Meraki\PingApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDeviceLiveToolsPing()**](PingApi.md#createDeviceLiveToolsPing) | **POST** /devices/{serial}/liveTools/ping | Enqueue a job to ping a target host from the device |
| [**getDeviceLiveToolsPing()**](PingApi.md#getDeviceLiveToolsPing) | **GET** /devices/{serial}/liveTools/ping/{id} | Return a ping job |


## `createDeviceLiveToolsPing()`

```php
createDeviceLiveToolsPing($serial, $create_device_live_tools_ping_request): \Meraki\Model\CreateDeviceLiveToolsPing201Response
```

Enqueue a job to ping a target host from the device

Enqueue a job to ping a target host from the device. This endpoint has a sustained rate limit of one request every five seconds per device, with an allowed burst of five requests.

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


$apiInstance = new Meraki\Api\PingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$create_device_live_tools_ping_request = new \Meraki\Model\CreateDeviceLiveToolsPingRequest(); // \Meraki\Model\CreateDeviceLiveToolsPingRequest

try {
    $result = $apiInstance->createDeviceLiveToolsPing($serial, $create_device_live_tools_ping_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingApi->createDeviceLiveToolsPing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **create_device_live_tools_ping_request** | [**\Meraki\Model\CreateDeviceLiveToolsPingRequest**](../Model/CreateDeviceLiveToolsPingRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateDeviceLiveToolsPing201Response**](../Model/CreateDeviceLiveToolsPing201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceLiveToolsPing()`

```php
getDeviceLiveToolsPing($serial, $id): \Meraki\Model\DevicesSerialLiveToolsPingPostRequestMessage
```

Return a ping job

Return a ping job. Latency unit in response is in milliseconds. Size is in bytes.

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


$apiInstance = new Meraki\Api\PingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$id = 'id_example'; // string | ID

try {
    $result = $apiInstance->getDeviceLiveToolsPing($serial, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingApi->getDeviceLiveToolsPing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **id** | **string**| ID | |

### Return type

[**\Meraki\Model\DevicesSerialLiveToolsPingPostRequestMessage**](../Model/DevicesSerialLiveToolsPingPostRequestMessage.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
