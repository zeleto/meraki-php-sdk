# Meraki\AlternateManagementInterfaceApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkSwitchAlternateManagementInterface()**](AlternateManagementInterfaceApi.md#getNetworkSwitchAlternateManagementInterface) | **GET** /networks/{networkId}/switch/alternateManagementInterface | Return the switch alternate management interface for the network |
| [**getNetworkWirelessAlternateManagementInterface()**](AlternateManagementInterfaceApi.md#getNetworkWirelessAlternateManagementInterface) | **GET** /networks/{networkId}/wireless/alternateManagementInterface | Return alternate management interface and devices with IP assigned |
| [**updateDeviceWirelessAlternateManagementInterfaceIpv6()**](AlternateManagementInterfaceApi.md#updateDeviceWirelessAlternateManagementInterfaceIpv6) | **PUT** /devices/{serial}/wireless/alternateManagementInterface/ipv6 | Update alternate management interface IPv6 address |
| [**updateNetworkSwitchAlternateManagementInterface()**](AlternateManagementInterfaceApi.md#updateNetworkSwitchAlternateManagementInterface) | **PUT** /networks/{networkId}/switch/alternateManagementInterface | Update the switch alternate management interface for the network |
| [**updateNetworkWirelessAlternateManagementInterface()**](AlternateManagementInterfaceApi.md#updateNetworkWirelessAlternateManagementInterface) | **PUT** /networks/{networkId}/wireless/alternateManagementInterface | Update alternate management interface and device static IP |


## `getNetworkSwitchAlternateManagementInterface()`

```php
getNetworkSwitchAlternateManagementInterface($network_id): \Meraki\Model\GetNetworkSwitchAlternateManagementInterface200Response
```

Return the switch alternate management interface for the network

Return the switch alternate management interface for the network

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


$apiInstance = new Meraki\Api\AlternateManagementInterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSwitchAlternateManagementInterface($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlternateManagementInterfaceApi->getNetworkSwitchAlternateManagementInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchAlternateManagementInterface200Response**](../Model/GetNetworkSwitchAlternateManagementInterface200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessAlternateManagementInterface()`

```php
getNetworkWirelessAlternateManagementInterface($network_id): object
```

Return alternate management interface and devices with IP assigned

Return alternate management interface and devices with IP assigned

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


$apiInstance = new Meraki\Api\AlternateManagementInterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkWirelessAlternateManagementInterface($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlternateManagementInterfaceApi->getNetworkWirelessAlternateManagementInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

**object**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceWirelessAlternateManagementInterfaceIpv6()`

```php
updateDeviceWirelessAlternateManagementInterfaceIpv6($serial, $update_device_wireless_alternate_management_interface_ipv6_request): \Meraki\Model\UpdateDeviceWirelessAlternateManagementInterfaceIpv6200Response
```

Update alternate management interface IPv6 address

Update alternate management interface IPv6 address

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


$apiInstance = new Meraki\Api\AlternateManagementInterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_wireless_alternate_management_interface_ipv6_request = new \Meraki\Model\UpdateDeviceWirelessAlternateManagementInterfaceIpv6Request(); // \Meraki\Model\UpdateDeviceWirelessAlternateManagementInterfaceIpv6Request

try {
    $result = $apiInstance->updateDeviceWirelessAlternateManagementInterfaceIpv6($serial, $update_device_wireless_alternate_management_interface_ipv6_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlternateManagementInterfaceApi->updateDeviceWirelessAlternateManagementInterfaceIpv6: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_wireless_alternate_management_interface_ipv6_request** | [**\Meraki\Model\UpdateDeviceWirelessAlternateManagementInterfaceIpv6Request**](../Model/UpdateDeviceWirelessAlternateManagementInterfaceIpv6Request.md)|  | [optional] |

### Return type

[**\Meraki\Model\UpdateDeviceWirelessAlternateManagementInterfaceIpv6200Response**](../Model/UpdateDeviceWirelessAlternateManagementInterfaceIpv6200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchAlternateManagementInterface()`

```php
updateNetworkSwitchAlternateManagementInterface($network_id, $update_network_switch_alternate_management_interface_request): \Meraki\Model\GetNetworkSwitchAlternateManagementInterface200Response
```

Update the switch alternate management interface for the network

Update the switch alternate management interface for the network

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


$apiInstance = new Meraki\Api\AlternateManagementInterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_switch_alternate_management_interface_request = new \Meraki\Model\UpdateNetworkSwitchAlternateManagementInterfaceRequest(); // \Meraki\Model\UpdateNetworkSwitchAlternateManagementInterfaceRequest

try {
    $result = $apiInstance->updateNetworkSwitchAlternateManagementInterface($network_id, $update_network_switch_alternate_management_interface_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlternateManagementInterfaceApi->updateNetworkSwitchAlternateManagementInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_switch_alternate_management_interface_request** | [**\Meraki\Model\UpdateNetworkSwitchAlternateManagementInterfaceRequest**](../Model/UpdateNetworkSwitchAlternateManagementInterfaceRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchAlternateManagementInterface200Response**](../Model/GetNetworkSwitchAlternateManagementInterface200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessAlternateManagementInterface()`

```php
updateNetworkWirelessAlternateManagementInterface($network_id, $update_network_wireless_alternate_management_interface_request): object
```

Update alternate management interface and device static IP

Update alternate management interface and device static IP

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


$apiInstance = new Meraki\Api\AlternateManagementInterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_wireless_alternate_management_interface_request = new \Meraki\Model\UpdateNetworkWirelessAlternateManagementInterfaceRequest(); // \Meraki\Model\UpdateNetworkWirelessAlternateManagementInterfaceRequest

try {
    $result = $apiInstance->updateNetworkWirelessAlternateManagementInterface($network_id, $update_network_wireless_alternate_management_interface_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlternateManagementInterfaceApi->updateNetworkWirelessAlternateManagementInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_wireless_alternate_management_interface_request** | [**\Meraki\Model\UpdateNetworkWirelessAlternateManagementInterfaceRequest**](../Model/UpdateNetworkWirelessAlternateManagementInterfaceRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
