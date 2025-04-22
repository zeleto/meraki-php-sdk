# Meraki\ElectronicShelfLabelApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDeviceWirelessElectronicShelfLabel()**](ElectronicShelfLabelApi.md#getDeviceWirelessElectronicShelfLabel) | **GET** /devices/{serial}/wireless/electronicShelfLabel | Return the ESL settings of a device |
| [**getNetworkWirelessElectronicShelfLabel()**](ElectronicShelfLabelApi.md#getNetworkWirelessElectronicShelfLabel) | **GET** /networks/{networkId}/wireless/electronicShelfLabel | Return the ESL settings of a wireless network |
| [**getNetworkWirelessElectronicShelfLabelConfiguredDevices()**](ElectronicShelfLabelApi.md#getNetworkWirelessElectronicShelfLabelConfiguredDevices) | **GET** /networks/{networkId}/wireless/electronicShelfLabel/configuredDevices | Get a list of all ESL eligible devices of a network |
| [**updateDeviceWirelessElectronicShelfLabel()**](ElectronicShelfLabelApi.md#updateDeviceWirelessElectronicShelfLabel) | **PUT** /devices/{serial}/wireless/electronicShelfLabel | Update the ESL settings of a device |
| [**updateNetworkWirelessElectronicShelfLabel()**](ElectronicShelfLabelApi.md#updateNetworkWirelessElectronicShelfLabel) | **PUT** /networks/{networkId}/wireless/electronicShelfLabel | Update the ESL settings of a wireless network |


## `getDeviceWirelessElectronicShelfLabel()`

```php
getDeviceWirelessElectronicShelfLabel($serial): \Meraki\Model\GetDeviceWirelessElectronicShelfLabel200Response
```

Return the ESL settings of a device

Return the ESL settings of a device

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


$apiInstance = new Meraki\Api\ElectronicShelfLabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceWirelessElectronicShelfLabel($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElectronicShelfLabelApi->getDeviceWirelessElectronicShelfLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceWirelessElectronicShelfLabel200Response**](../Model/GetDeviceWirelessElectronicShelfLabel200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessElectronicShelfLabel()`

```php
getNetworkWirelessElectronicShelfLabel($network_id): \Meraki\Model\GetNetworkWirelessElectronicShelfLabel200Response
```

Return the ESL settings of a wireless network

Return the ESL settings of a wireless network

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


$apiInstance = new Meraki\Api\ElectronicShelfLabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkWirelessElectronicShelfLabel($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElectronicShelfLabelApi->getNetworkWirelessElectronicShelfLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkWirelessElectronicShelfLabel200Response**](../Model/GetNetworkWirelessElectronicShelfLabel200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessElectronicShelfLabelConfiguredDevices()`

```php
getNetworkWirelessElectronicShelfLabelConfiguredDevices($network_id): \Meraki\Model\GetNetworkWirelessElectronicShelfLabel200Response[]
```

Get a list of all ESL eligible devices of a network

Get a list of all ESL eligible devices of a network

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


$apiInstance = new Meraki\Api\ElectronicShelfLabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkWirelessElectronicShelfLabelConfiguredDevices($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElectronicShelfLabelApi->getNetworkWirelessElectronicShelfLabelConfiguredDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkWirelessElectronicShelfLabel200Response[]**](../Model/GetNetworkWirelessElectronicShelfLabel200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceWirelessElectronicShelfLabel()`

```php
updateDeviceWirelessElectronicShelfLabel($serial, $update_device_wireless_electronic_shelf_label_request): \Meraki\Model\GetDeviceWirelessElectronicShelfLabel200Response
```

Update the ESL settings of a device

Update the ESL settings of a device

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


$apiInstance = new Meraki\Api\ElectronicShelfLabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_wireless_electronic_shelf_label_request = new \Meraki\Model\UpdateDeviceWirelessElectronicShelfLabelRequest(); // \Meraki\Model\UpdateDeviceWirelessElectronicShelfLabelRequest

try {
    $result = $apiInstance->updateDeviceWirelessElectronicShelfLabel($serial, $update_device_wireless_electronic_shelf_label_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElectronicShelfLabelApi->updateDeviceWirelessElectronicShelfLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_wireless_electronic_shelf_label_request** | [**\Meraki\Model\UpdateDeviceWirelessElectronicShelfLabelRequest**](../Model/UpdateDeviceWirelessElectronicShelfLabelRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceWirelessElectronicShelfLabel200Response**](../Model/GetDeviceWirelessElectronicShelfLabel200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessElectronicShelfLabel()`

```php
updateNetworkWirelessElectronicShelfLabel($network_id, $update_network_wireless_electronic_shelf_label_request): \Meraki\Model\GetNetworkWirelessElectronicShelfLabel200Response
```

Update the ESL settings of a wireless network

Update the ESL settings of a wireless network

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


$apiInstance = new Meraki\Api\ElectronicShelfLabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_wireless_electronic_shelf_label_request = new \Meraki\Model\UpdateNetworkWirelessElectronicShelfLabelRequest(); // \Meraki\Model\UpdateNetworkWirelessElectronicShelfLabelRequest

try {
    $result = $apiInstance->updateNetworkWirelessElectronicShelfLabel($network_id, $update_network_wireless_electronic_shelf_label_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElectronicShelfLabelApi->updateNetworkWirelessElectronicShelfLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_wireless_electronic_shelf_label_request** | [**\Meraki\Model\UpdateNetworkWirelessElectronicShelfLabelRequest**](../Model/UpdateNetworkWirelessElectronicShelfLabelRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessElectronicShelfLabel200Response**](../Model/GetNetworkWirelessElectronicShelfLabel200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
