# Meraki\ManagementInterfaceApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDeviceManagementInterface()**](ManagementInterfaceApi.md#getDeviceManagementInterface) | **GET** /devices/{serial}/managementInterface | Return the management interface settings for a device |
| [**updateDeviceManagementInterface()**](ManagementInterfaceApi.md#updateDeviceManagementInterface) | **PUT** /devices/{serial}/managementInterface | Update the management interface settings for a device |


## `getDeviceManagementInterface()`

```php
getDeviceManagementInterface($serial): \Meraki\Model\GetDeviceManagementInterface200Response
```

Return the management interface settings for a device

Return the management interface settings for a device

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


$apiInstance = new Meraki\Api\ManagementInterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceManagementInterface($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementInterfaceApi->getDeviceManagementInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceManagementInterface200Response**](../Model/GetDeviceManagementInterface200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceManagementInterface()`

```php
updateDeviceManagementInterface($serial, $update_device_management_interface_request): \Meraki\Model\GetDeviceManagementInterface200Response
```

Update the management interface settings for a device

Update the management interface settings for a device

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


$apiInstance = new Meraki\Api\ManagementInterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_management_interface_request = new \Meraki\Model\UpdateDeviceManagementInterfaceRequest(); // \Meraki\Model\UpdateDeviceManagementInterfaceRequest

try {
    $result = $apiInstance->updateDeviceManagementInterface($serial, $update_device_management_interface_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementInterfaceApi->updateDeviceManagementInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_management_interface_request** | [**\Meraki\Model\UpdateDeviceManagementInterfaceRequest**](../Model/UpdateDeviceManagementInterfaceRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceManagementInterface200Response**](../Model/GetDeviceManagementInterface200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
