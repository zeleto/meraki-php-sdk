# Meraki\SoftwaresApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkSmDeviceSoftwares()**](SoftwaresApi.md#getNetworkSmDeviceSoftwares) | **GET** /networks/{networkId}/sm/devices/{deviceId}/softwares | Get a list of softwares associated with a device |
| [**getNetworkSmUserSoftwares()**](SoftwaresApi.md#getNetworkSmUserSoftwares) | **GET** /networks/{networkId}/sm/users/{userId}/softwares | Get a list of softwares associated with a user |


## `getNetworkSmDeviceSoftwares()`

```php
getNetworkSmDeviceSoftwares($network_id, $device_id): \Meraki\Model\GetNetworkSmDeviceSoftwares200ResponseInner[]
```

Get a list of softwares associated with a device

Get a list of softwares associated with a device

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


$apiInstance = new Meraki\Api\SoftwaresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID

try {
    $result = $apiInstance->getNetworkSmDeviceSoftwares($network_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftwaresApi->getNetworkSmDeviceSoftwares: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |

### Return type

[**\Meraki\Model\GetNetworkSmDeviceSoftwares200ResponseInner[]**](../Model/GetNetworkSmDeviceSoftwares200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmUserSoftwares()`

```php
getNetworkSmUserSoftwares($network_id, $user_id): \Meraki\Model\GetNetworkSmDeviceSoftwares200ResponseInner[]
```

Get a list of softwares associated with a user

Get a list of softwares associated with a user

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


$apiInstance = new Meraki\Api\SoftwaresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$user_id = 'user_id_example'; // string | User ID

try {
    $result = $apiInstance->getNetworkSmUserSoftwares($network_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftwaresApi->getNetworkSmUserSoftwares: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **user_id** | **string**| User ID | |

### Return type

[**\Meraki\Model\GetNetworkSmDeviceSoftwares200ResponseInner[]**](../Model/GetNetworkSmDeviceSoftwares200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
