# Meraki\DeviceProfilesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkSmDeviceDeviceProfiles()**](DeviceProfilesApi.md#getNetworkSmDeviceDeviceProfiles) | **GET** /networks/{networkId}/sm/devices/{deviceId}/deviceProfiles | Get the installed profiles associated with a device |
| [**getNetworkSmUserDeviceProfiles()**](DeviceProfilesApi.md#getNetworkSmUserDeviceProfiles) | **GET** /networks/{networkId}/sm/users/{userId}/deviceProfiles | Get the profiles associated with a user |


## `getNetworkSmDeviceDeviceProfiles()`

```php
getNetworkSmDeviceDeviceProfiles($network_id, $device_id): \Meraki\Model\GetNetworkSmDeviceDeviceProfiles200ResponseInner[]
```

Get the installed profiles associated with a device

Get the installed profiles associated with a device

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


$apiInstance = new Meraki\Api\DeviceProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID

try {
    $result = $apiInstance->getNetworkSmDeviceDeviceProfiles($network_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceProfilesApi->getNetworkSmDeviceDeviceProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |

### Return type

[**\Meraki\Model\GetNetworkSmDeviceDeviceProfiles200ResponseInner[]**](../Model/GetNetworkSmDeviceDeviceProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmUserDeviceProfiles()`

```php
getNetworkSmUserDeviceProfiles($network_id, $user_id): \Meraki\Model\GetNetworkSmDeviceDeviceProfiles200ResponseInner[]
```

Get the profiles associated with a user

Get the profiles associated with a user

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


$apiInstance = new Meraki\Api\DeviceProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$user_id = 'user_id_example'; // string | User ID

try {
    $result = $apiInstance->getNetworkSmUserDeviceProfiles($network_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceProfilesApi->getNetworkSmUserDeviceProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **user_id** | **string**| User ID | |

### Return type

[**\Meraki\Model\GetNetworkSmDeviceDeviceProfiles200ResponseInner[]**](../Model/GetNetworkSmDeviceDeviceProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
