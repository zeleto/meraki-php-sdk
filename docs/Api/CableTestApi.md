# Meraki\CableTestApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDeviceLiveToolsCableTest()**](CableTestApi.md#createDeviceLiveToolsCableTest) | **POST** /devices/{serial}/liveTools/cableTest | Enqueue a job to perform a cable test for the device on the specified ports |
| [**getDeviceLiveToolsCableTest()**](CableTestApi.md#getDeviceLiveToolsCableTest) | **GET** /devices/{serial}/liveTools/cableTest/{id} | Return a cable test live tool job. |


## `createDeviceLiveToolsCableTest()`

```php
createDeviceLiveToolsCableTest($serial, $create_device_live_tools_cable_test_request): \Meraki\Model\CreateDeviceLiveToolsCableTest201Response
```

Enqueue a job to perform a cable test for the device on the specified ports

Enqueue a job to perform a cable test for the device on the specified ports. This endpoint has a sustained rate limit of one request every five seconds per device, with an allowed burst of five requests.

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


$apiInstance = new Meraki\Api\CableTestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$create_device_live_tools_cable_test_request = new \Meraki\Model\CreateDeviceLiveToolsCableTestRequest(); // \Meraki\Model\CreateDeviceLiveToolsCableTestRequest

try {
    $result = $apiInstance->createDeviceLiveToolsCableTest($serial, $create_device_live_tools_cable_test_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CableTestApi->createDeviceLiveToolsCableTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **create_device_live_tools_cable_test_request** | [**\Meraki\Model\CreateDeviceLiveToolsCableTestRequest**](../Model/CreateDeviceLiveToolsCableTestRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateDeviceLiveToolsCableTest201Response**](../Model/CreateDeviceLiveToolsCableTest201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceLiveToolsCableTest()`

```php
getDeviceLiveToolsCableTest($serial, $id): \Meraki\Model\DevicesSerialLiveToolsCableTestPostRequestMessage
```

Return a cable test live tool job.

Return a cable test live tool job.

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


$apiInstance = new Meraki\Api\CableTestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$id = 'id_example'; // string | ID

try {
    $result = $apiInstance->getDeviceLiveToolsCableTest($serial, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CableTestApi->getDeviceLiveToolsCableTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **id** | **string**| ID | |

### Return type

[**\Meraki\Model\DevicesSerialLiveToolsCableTestPostRequestMessage**](../Model/DevicesSerialLiveToolsCableTestPostRequestMessage.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
