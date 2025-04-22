# Meraki\VideoApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDeviceCameraVideoSettings()**](VideoApi.md#getDeviceCameraVideoSettings) | **GET** /devices/{serial}/camera/video/settings | Returns video settings for the given camera |
| [**updateDeviceCameraVideoSettings()**](VideoApi.md#updateDeviceCameraVideoSettings) | **PUT** /devices/{serial}/camera/video/settings | Update video settings for the given camera |


## `getDeviceCameraVideoSettings()`

```php
getDeviceCameraVideoSettings($serial): \Meraki\Model\GetDeviceCameraVideoSettings200Response
```

Returns video settings for the given camera

Returns video settings for the given camera

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


$apiInstance = new Meraki\Api\VideoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceCameraVideoSettings($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoApi->getDeviceCameraVideoSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceCameraVideoSettings200Response**](../Model/GetDeviceCameraVideoSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceCameraVideoSettings()`

```php
updateDeviceCameraVideoSettings($serial, $update_device_camera_video_settings_request): \Meraki\Model\GetDeviceCameraVideoSettings200Response
```

Update video settings for the given camera

Update video settings for the given camera

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


$apiInstance = new Meraki\Api\VideoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_camera_video_settings_request = new \Meraki\Model\UpdateDeviceCameraVideoSettingsRequest(); // \Meraki\Model\UpdateDeviceCameraVideoSettingsRequest

try {
    $result = $apiInstance->updateDeviceCameraVideoSettings($serial, $update_device_camera_video_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoApi->updateDeviceCameraVideoSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_camera_video_settings_request** | [**\Meraki\Model\UpdateDeviceCameraVideoSettingsRequest**](../Model/UpdateDeviceCameraVideoSettingsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceCameraVideoSettings200Response**](../Model/GetDeviceCameraVideoSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
