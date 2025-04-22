# Meraki\BlinkApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDeviceLiveToolsLedsBlink()**](BlinkApi.md#createDeviceLiveToolsLedsBlink) | **POST** /devices/{serial}/liveTools/leds/blink | Enqueue a job to blink LEDs on a device |
| [**getDeviceLiveToolsLedsBlink()**](BlinkApi.md#getDeviceLiveToolsLedsBlink) | **GET** /devices/{serial}/liveTools/leds/blink/{ledsBlinkId} | Return a blink LEDs job |


## `createDeviceLiveToolsLedsBlink()`

```php
createDeviceLiveToolsLedsBlink($serial, $create_device_live_tools_leds_blink_request): \Meraki\Model\CreateDeviceLiveToolsLedsBlink201Response
```

Enqueue a job to blink LEDs on a device

Enqueue a job to blink LEDs on a device. This endpoint has a rate limit of one request every 10 seconds.

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


$apiInstance = new Meraki\Api\BlinkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$create_device_live_tools_leds_blink_request = new \Meraki\Model\CreateDeviceLiveToolsLedsBlinkRequest(); // \Meraki\Model\CreateDeviceLiveToolsLedsBlinkRequest

try {
    $result = $apiInstance->createDeviceLiveToolsLedsBlink($serial, $create_device_live_tools_leds_blink_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlinkApi->createDeviceLiveToolsLedsBlink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **create_device_live_tools_leds_blink_request** | [**\Meraki\Model\CreateDeviceLiveToolsLedsBlinkRequest**](../Model/CreateDeviceLiveToolsLedsBlinkRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateDeviceLiveToolsLedsBlink201Response**](../Model/CreateDeviceLiveToolsLedsBlink201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceLiveToolsLedsBlink()`

```php
getDeviceLiveToolsLedsBlink($serial, $leds_blink_id): \Meraki\Model\DevicesSerialLiveToolsLedsBlinkPostRequestMessage
```

Return a blink LEDs job

Return a blink LEDs job

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


$apiInstance = new Meraki\Api\BlinkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$leds_blink_id = 'leds_blink_id_example'; // string | Leds blink ID

try {
    $result = $apiInstance->getDeviceLiveToolsLedsBlink($serial, $leds_blink_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlinkApi->getDeviceLiveToolsLedsBlink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **leds_blink_id** | **string**| Leds blink ID | |

### Return type

[**\Meraki\Model\DevicesSerialLiveToolsLedsBlinkPostRequestMessage**](../Model/DevicesSerialLiveToolsLedsBlinkPostRequestMessage.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
