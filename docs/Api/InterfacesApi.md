# Meraki\InterfacesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDeviceSwitchRoutingInterface()**](InterfacesApi.md#createDeviceSwitchRoutingInterface) | **POST** /devices/{serial}/switch/routing/interfaces | Create a layer 3 interface for a switch |
| [**createNetworkSwitchStackRoutingInterface()**](InterfacesApi.md#createNetworkSwitchStackRoutingInterface) | **POST** /networks/{networkId}/switch/stacks/{switchStackId}/routing/interfaces | Create a layer 3 interface for a switch stack |
| [**deleteDeviceSwitchRoutingInterface()**](InterfacesApi.md#deleteDeviceSwitchRoutingInterface) | **DELETE** /devices/{serial}/switch/routing/interfaces/{interfaceId} | Delete a layer 3 interface from the switch |
| [**deleteNetworkSwitchStackRoutingInterface()**](InterfacesApi.md#deleteNetworkSwitchStackRoutingInterface) | **DELETE** /networks/{networkId}/switch/stacks/{switchStackId}/routing/interfaces/{interfaceId} | Delete a layer 3 interface from a switch stack |
| [**getDeviceSwitchRoutingInterface()**](InterfacesApi.md#getDeviceSwitchRoutingInterface) | **GET** /devices/{serial}/switch/routing/interfaces/{interfaceId} | Return a layer 3 interface for a switch |
| [**getDeviceSwitchRoutingInterfaceDhcp()**](InterfacesApi.md#getDeviceSwitchRoutingInterfaceDhcp) | **GET** /devices/{serial}/switch/routing/interfaces/{interfaceId}/dhcp | Return a layer 3 interface DHCP configuration for a switch |
| [**getDeviceSwitchRoutingInterfaces()**](InterfacesApi.md#getDeviceSwitchRoutingInterfaces) | **GET** /devices/{serial}/switch/routing/interfaces | List layer 3 interfaces for a switch |
| [**getNetworkSwitchStackRoutingInterface()**](InterfacesApi.md#getNetworkSwitchStackRoutingInterface) | **GET** /networks/{networkId}/switch/stacks/{switchStackId}/routing/interfaces/{interfaceId} | Return a layer 3 interface from a switch stack |
| [**getNetworkSwitchStackRoutingInterfaceDhcp()**](InterfacesApi.md#getNetworkSwitchStackRoutingInterfaceDhcp) | **GET** /networks/{networkId}/switch/stacks/{switchStackId}/routing/interfaces/{interfaceId}/dhcp | Return a layer 3 interface DHCP configuration for a switch stack |
| [**getNetworkSwitchStackRoutingInterfaces()**](InterfacesApi.md#getNetworkSwitchStackRoutingInterfaces) | **GET** /networks/{networkId}/switch/stacks/{switchStackId}/routing/interfaces | List layer 3 interfaces for a switch stack |
| [**getOrganizationWirelessControllerDevicesInterfacesL2ByDevice()**](InterfacesApi.md#getOrganizationWirelessControllerDevicesInterfacesL2ByDevice) | **GET** /organizations/{organizationId}/wirelessController/devices/interfaces/l2/byDevice | List wireless LAN controller layer 2 interfaces in an organization |
| [**getOrganizationWirelessControllerDevicesInterfacesL2StatusesChangeHistoryByDevice()**](InterfacesApi.md#getOrganizationWirelessControllerDevicesInterfacesL2StatusesChangeHistoryByDevice) | **GET** /organizations/{organizationId}/wirelessController/devices/interfaces/l2/statuses/changeHistory/byDevice | List wireless LAN controller layer 2 interfaces history status in an organization |
| [**getOrganizationWirelessControllerDevicesInterfacesL2UsageHistoryByInterval()**](InterfacesApi.md#getOrganizationWirelessControllerDevicesInterfacesL2UsageHistoryByInterval) | **GET** /organizations/{organizationId}/wirelessController/devices/interfaces/l2/usage/history/byInterval | List wireless LAN controller layer 2 interfaces history usage in an organization |
| [**getOrganizationWirelessControllerDevicesInterfacesL3ByDevice()**](InterfacesApi.md#getOrganizationWirelessControllerDevicesInterfacesL3ByDevice) | **GET** /organizations/{organizationId}/wirelessController/devices/interfaces/l3/byDevice | List wireless LAN controller layer 3 interfaces in an organization |
| [**getOrganizationWirelessControllerDevicesInterfacesL3StatusesChangeHistoryByDevice()**](InterfacesApi.md#getOrganizationWirelessControllerDevicesInterfacesL3StatusesChangeHistoryByDevice) | **GET** /organizations/{organizationId}/wirelessController/devices/interfaces/l3/statuses/changeHistory/byDevice | List wireless LAN controller layer 3 interfaces history status in an organization |
| [**getOrganizationWirelessControllerDevicesInterfacesL3UsageHistoryByInterval()**](InterfacesApi.md#getOrganizationWirelessControllerDevicesInterfacesL3UsageHistoryByInterval) | **GET** /organizations/{organizationId}/wirelessController/devices/interfaces/l3/usage/history/byInterval | List wireless LAN controller layer 3 interfaces history usage in an organization |
| [**getOrganizationWirelessControllerDevicesInterfacesPacketsOverviewByDevice()**](InterfacesApi.md#getOrganizationWirelessControllerDevicesInterfacesPacketsOverviewByDevice) | **GET** /organizations/{organizationId}/wirelessController/devices/interfaces/packets/overview/byDevice | Retrieve the packet counters for the interfaces of a Wireless LAN controller |
| [**getOrganizationWirelessControllerDevicesInterfacesUsageHistoryByInterval()**](InterfacesApi.md#getOrganizationWirelessControllerDevicesInterfacesUsageHistoryByInterval) | **GET** /organizations/{organizationId}/wirelessController/devices/interfaces/usage/history/byInterval | Retrieve the traffic for the interfaces of a Wireless LAN controller |
| [**updateDeviceSwitchRoutingInterface()**](InterfacesApi.md#updateDeviceSwitchRoutingInterface) | **PUT** /devices/{serial}/switch/routing/interfaces/{interfaceId} | Update a layer 3 interface for a switch |
| [**updateDeviceSwitchRoutingInterfaceDhcp()**](InterfacesApi.md#updateDeviceSwitchRoutingInterfaceDhcp) | **PUT** /devices/{serial}/switch/routing/interfaces/{interfaceId}/dhcp | Update a layer 3 interface DHCP configuration for a switch |
| [**updateNetworkSwitchStackRoutingInterface()**](InterfacesApi.md#updateNetworkSwitchStackRoutingInterface) | **PUT** /networks/{networkId}/switch/stacks/{switchStackId}/routing/interfaces/{interfaceId} | Update a layer 3 interface for a switch stack |
| [**updateNetworkSwitchStackRoutingInterfaceDhcp()**](InterfacesApi.md#updateNetworkSwitchStackRoutingInterfaceDhcp) | **PUT** /networks/{networkId}/switch/stacks/{switchStackId}/routing/interfaces/{interfaceId}/dhcp | Update a layer 3 interface DHCP configuration for a switch stack |


## `createDeviceSwitchRoutingInterface()`

```php
createDeviceSwitchRoutingInterface($serial, $create_device_switch_routing_interface_request): \Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInner
```

Create a layer 3 interface for a switch

Create a layer 3 interface for a switch

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


$apiInstance = new Meraki\Api\InterfacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$create_device_switch_routing_interface_request = new \Meraki\Model\CreateDeviceSwitchRoutingInterfaceRequest(); // \Meraki\Model\CreateDeviceSwitchRoutingInterfaceRequest

try {
    $result = $apiInstance->createDeviceSwitchRoutingInterface($serial, $create_device_switch_routing_interface_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterfacesApi->createDeviceSwitchRoutingInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **create_device_switch_routing_interface_request** | [**\Meraki\Model\CreateDeviceSwitchRoutingInterfaceRequest**](../Model/CreateDeviceSwitchRoutingInterfaceRequest.md)|  | |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInner**](../Model/GetDeviceSwitchRoutingInterfaces200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkSwitchStackRoutingInterface()`

```php
createNetworkSwitchStackRoutingInterface($network_id, $switch_stack_id, $create_device_switch_routing_interface_request): \Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInner
```

Create a layer 3 interface for a switch stack

Create a layer 3 interface for a switch stack

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


$apiInstance = new Meraki\Api\InterfacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$switch_stack_id = 'switch_stack_id_example'; // string | Switch stack ID
$create_device_switch_routing_interface_request = new \Meraki\Model\CreateDeviceSwitchRoutingInterfaceRequest(); // \Meraki\Model\CreateDeviceSwitchRoutingInterfaceRequest

try {
    $result = $apiInstance->createNetworkSwitchStackRoutingInterface($network_id, $switch_stack_id, $create_device_switch_routing_interface_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterfacesApi->createNetworkSwitchStackRoutingInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **switch_stack_id** | **string**| Switch stack ID | |
| **create_device_switch_routing_interface_request** | [**\Meraki\Model\CreateDeviceSwitchRoutingInterfaceRequest**](../Model/CreateDeviceSwitchRoutingInterfaceRequest.md)|  | |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInner**](../Model/GetDeviceSwitchRoutingInterfaces200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDeviceSwitchRoutingInterface()`

```php
deleteDeviceSwitchRoutingInterface($serial, $interface_id)
```

Delete a layer 3 interface from the switch

Delete a layer 3 interface from the switch

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


$apiInstance = new Meraki\Api\InterfacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$interface_id = 'interface_id_example'; // string | Interface ID

try {
    $apiInstance->deleteDeviceSwitchRoutingInterface($serial, $interface_id);
} catch (Exception $e) {
    echo 'Exception when calling InterfacesApi->deleteDeviceSwitchRoutingInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **interface_id** | **string**| Interface ID | |

### Return type

void (empty response body)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkSwitchStackRoutingInterface()`

```php
deleteNetworkSwitchStackRoutingInterface($network_id, $switch_stack_id, $interface_id)
```

Delete a layer 3 interface from a switch stack

Delete a layer 3 interface from a switch stack

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


$apiInstance = new Meraki\Api\InterfacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$switch_stack_id = 'switch_stack_id_example'; // string | Switch stack ID
$interface_id = 'interface_id_example'; // string | Interface ID

try {
    $apiInstance->deleteNetworkSwitchStackRoutingInterface($network_id, $switch_stack_id, $interface_id);
} catch (Exception $e) {
    echo 'Exception when calling InterfacesApi->deleteNetworkSwitchStackRoutingInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **switch_stack_id** | **string**| Switch stack ID | |
| **interface_id** | **string**| Interface ID | |

### Return type

void (empty response body)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceSwitchRoutingInterface()`

```php
getDeviceSwitchRoutingInterface($serial, $interface_id): \Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInner
```

Return a layer 3 interface for a switch

Return a layer 3 interface for a switch

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


$apiInstance = new Meraki\Api\InterfacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$interface_id = 'interface_id_example'; // string | Interface ID

try {
    $result = $apiInstance->getDeviceSwitchRoutingInterface($serial, $interface_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterfacesApi->getDeviceSwitchRoutingInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **interface_id** | **string**| Interface ID | |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInner**](../Model/GetDeviceSwitchRoutingInterfaces200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceSwitchRoutingInterfaceDhcp()`

```php
getDeviceSwitchRoutingInterfaceDhcp($serial, $interface_id): \Meraki\Model\GetDeviceSwitchRoutingInterfaceDhcp200Response
```

Return a layer 3 interface DHCP configuration for a switch

Return a layer 3 interface DHCP configuration for a switch

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


$apiInstance = new Meraki\Api\InterfacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$interface_id = 'interface_id_example'; // string | Interface ID

try {
    $result = $apiInstance->getDeviceSwitchRoutingInterfaceDhcp($serial, $interface_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterfacesApi->getDeviceSwitchRoutingInterfaceDhcp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **interface_id** | **string**| Interface ID | |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingInterfaceDhcp200Response**](../Model/GetDeviceSwitchRoutingInterfaceDhcp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceSwitchRoutingInterfaces()`

```php
getDeviceSwitchRoutingInterfaces($serial, $protocol): \Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInner[]
```

List layer 3 interfaces for a switch

List layer 3 interfaces for a switch. Those for a stack may be found under switch stack routing.

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


$apiInstance = new Meraki\Api\InterfacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$protocol = 'protocol_example'; // string | Optional parameter to filter L3 interfaces by protocol.

try {
    $result = $apiInstance->getDeviceSwitchRoutingInterfaces($serial, $protocol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterfacesApi->getDeviceSwitchRoutingInterfaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **protocol** | **string**| Optional parameter to filter L3 interfaces by protocol. | [optional] |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInner[]**](../Model/GetDeviceSwitchRoutingInterfaces200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchStackRoutingInterface()`

```php
getNetworkSwitchStackRoutingInterface($network_id, $switch_stack_id, $interface_id): \Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInner
```

Return a layer 3 interface from a switch stack

Return a layer 3 interface from a switch stack

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


$apiInstance = new Meraki\Api\InterfacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$switch_stack_id = 'switch_stack_id_example'; // string | Switch stack ID
$interface_id = 'interface_id_example'; // string | Interface ID

try {
    $result = $apiInstance->getNetworkSwitchStackRoutingInterface($network_id, $switch_stack_id, $interface_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterfacesApi->getNetworkSwitchStackRoutingInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **switch_stack_id** | **string**| Switch stack ID | |
| **interface_id** | **string**| Interface ID | |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInner**](../Model/GetDeviceSwitchRoutingInterfaces200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchStackRoutingInterfaceDhcp()`

```php
getNetworkSwitchStackRoutingInterfaceDhcp($network_id, $switch_stack_id, $interface_id): \Meraki\Model\GetDeviceSwitchRoutingInterfaceDhcp200Response
```

Return a layer 3 interface DHCP configuration for a switch stack

Return a layer 3 interface DHCP configuration for a switch stack

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


$apiInstance = new Meraki\Api\InterfacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$switch_stack_id = 'switch_stack_id_example'; // string | Switch stack ID
$interface_id = 'interface_id_example'; // string | Interface ID

try {
    $result = $apiInstance->getNetworkSwitchStackRoutingInterfaceDhcp($network_id, $switch_stack_id, $interface_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterfacesApi->getNetworkSwitchStackRoutingInterfaceDhcp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **switch_stack_id** | **string**| Switch stack ID | |
| **interface_id** | **string**| Interface ID | |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingInterfaceDhcp200Response**](../Model/GetDeviceSwitchRoutingInterfaceDhcp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchStackRoutingInterfaces()`

```php
getNetworkSwitchStackRoutingInterfaces($network_id, $switch_stack_id, $protocol): \Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInner[]
```

List layer 3 interfaces for a switch stack

List layer 3 interfaces for a switch stack

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


$apiInstance = new Meraki\Api\InterfacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$switch_stack_id = 'switch_stack_id_example'; // string | Switch stack ID
$protocol = 'protocol_example'; // string | Optional parameter to filter L3 interfaces by protocol.

try {
    $result = $apiInstance->getNetworkSwitchStackRoutingInterfaces($network_id, $switch_stack_id, $protocol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterfacesApi->getNetworkSwitchStackRoutingInterfaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **switch_stack_id** | **string**| Switch stack ID | |
| **protocol** | **string**| Optional parameter to filter L3 interfaces by protocol. | [optional] |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInner[]**](../Model/GetDeviceSwitchRoutingInterfaces200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessControllerDevicesInterfacesL2ByDevice()`

```php
getOrganizationWirelessControllerDevicesInterfacesL2ByDevice($organization_id, $serials, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesL2ByDevice200Response
```

List wireless LAN controller layer 2 interfaces in an organization

List wireless LAN controller layer 2 interfaces in an organization

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


$apiInstance = new Meraki\Api\InterfacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$serials = array('serials_example'); // string[] | Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessControllerDevicesInterfacesL2ByDevice($organization_id, $serials, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterfacesApi->getOrganizationWirelessControllerDevicesInterfacesL2ByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesL2ByDevice200Response**](../Model/GetOrganizationWirelessControllerDevicesInterfacesL2ByDevice200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessControllerDevicesInterfacesL2StatusesChangeHistoryByDevice()`

```php
getOrganizationWirelessControllerDevicesInterfacesL2StatusesChangeHistoryByDevice($organization_id, $serials, $include_interfaces_without_changes, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesL2StatusesChangeHistoryByDevice200Response
```

List wireless LAN controller layer 2 interfaces history status in an organization

List wireless LAN controller layer 2 interfaces history status in an organization

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


$apiInstance = new Meraki\Api\InterfacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$serials = array('serials_example'); // string[] | Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches.
$include_interfaces_without_changes = True; // bool | By default, interfaces without changes are omitted from the response for brevity. If you want to include the interfaces even if they have no changes, set to true. (default: false)
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessControllerDevicesInterfacesL2StatusesChangeHistoryByDevice($organization_id, $serials, $include_interfaces_without_changes, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterfacesApi->getOrganizationWirelessControllerDevicesInterfacesL2StatusesChangeHistoryByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches. | [optional] |
| **include_interfaces_without_changes** | **bool**| By default, interfaces without changes are omitted from the response for brevity. If you want to include the interfaces even if they have no changes, set to true. (default: false) | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesL2StatusesChangeHistoryByDevice200Response**](../Model/GetOrganizationWirelessControllerDevicesInterfacesL2StatusesChangeHistoryByDevice200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessControllerDevicesInterfacesL2UsageHistoryByInterval()`

```php
getOrganizationWirelessControllerDevicesInterfacesL2UsageHistoryByInterval($organization_id, $serials, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesL2UsageHistoryByInterval200Response
```

List wireless LAN controller layer 2 interfaces history usage in an organization

List wireless LAN controller layer 2 interfaces history usage in an organization

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


$apiInstance = new Meraki\Api\InterfacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$serials = array('serials_example'); // string[] | Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessControllerDevicesInterfacesL2UsageHistoryByInterval($organization_id, $serials, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterfacesApi->getOrganizationWirelessControllerDevicesInterfacesL2UsageHistoryByInterval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesL2UsageHistoryByInterval200Response**](../Model/GetOrganizationWirelessControllerDevicesInterfacesL2UsageHistoryByInterval200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessControllerDevicesInterfacesL3ByDevice()`

```php
getOrganizationWirelessControllerDevicesInterfacesL3ByDevice($organization_id, $serials, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesL3ByDevice200Response
```

List wireless LAN controller layer 3 interfaces in an organization

List wireless LAN controller layer 3 interfaces in an organization

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


$apiInstance = new Meraki\Api\InterfacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$serials = array('serials_example'); // string[] | Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessControllerDevicesInterfacesL3ByDevice($organization_id, $serials, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterfacesApi->getOrganizationWirelessControllerDevicesInterfacesL3ByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesL3ByDevice200Response**](../Model/GetOrganizationWirelessControllerDevicesInterfacesL3ByDevice200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessControllerDevicesInterfacesL3StatusesChangeHistoryByDevice()`

```php
getOrganizationWirelessControllerDevicesInterfacesL3StatusesChangeHistoryByDevice($organization_id, $serials, $include_interfaces_without_changes, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesL3StatusesChangeHistoryByDevice200Response
```

List wireless LAN controller layer 3 interfaces history status in an organization

List wireless LAN controller layer 3 interfaces history status in an organization

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


$apiInstance = new Meraki\Api\InterfacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$serials = array('serials_example'); // string[] | Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches.
$include_interfaces_without_changes = True; // bool | By default, interfaces without changes are omitted from the response for brevity. If you want to include the interfaces even if they have no changes, set to true. (default: false)
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessControllerDevicesInterfacesL3StatusesChangeHistoryByDevice($organization_id, $serials, $include_interfaces_without_changes, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterfacesApi->getOrganizationWirelessControllerDevicesInterfacesL3StatusesChangeHistoryByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches. | [optional] |
| **include_interfaces_without_changes** | **bool**| By default, interfaces without changes are omitted from the response for brevity. If you want to include the interfaces even if they have no changes, set to true. (default: false) | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesL3StatusesChangeHistoryByDevice200Response**](../Model/GetOrganizationWirelessControllerDevicesInterfacesL3StatusesChangeHistoryByDevice200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessControllerDevicesInterfacesL3UsageHistoryByInterval()`

```php
getOrganizationWirelessControllerDevicesInterfacesL3UsageHistoryByInterval($organization_id, $serials, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesL3UsageHistoryByInterval200Response
```

List wireless LAN controller layer 3 interfaces history usage in an organization

List wireless LAN controller layer 3 interfaces history usage in an organization

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


$apiInstance = new Meraki\Api\InterfacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$serials = array('serials_example'); // string[] | Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessControllerDevicesInterfacesL3UsageHistoryByInterval($organization_id, $serials, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterfacesApi->getOrganizationWirelessControllerDevicesInterfacesL3UsageHistoryByInterval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesL3UsageHistoryByInterval200Response**](../Model/GetOrganizationWirelessControllerDevicesInterfacesL3UsageHistoryByInterval200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessControllerDevicesInterfacesPacketsOverviewByDevice()`

```php
getOrganizationWirelessControllerDevicesInterfacesPacketsOverviewByDevice($organization_id, $serials, $names, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesPacketsOverviewByDevice200Response
```

Retrieve the packet counters for the interfaces of a Wireless LAN controller

Retrieve the packet counters for the interfaces of a Wireless LAN controller

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


$apiInstance = new Meraki\Api\InterfacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$serials = array('serials_example'); // string[] | Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches.
$names = array('names_example'); // string[] | Optional parameter to filter wireless LAN controller by its interface name. This filter uses multiple exact matches.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 1 day from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 1 day after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 1 day. The default is 1 hour.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessControllerDevicesInterfacesPacketsOverviewByDevice($organization_id, $serials, $names, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterfacesApi->getOrganizationWirelessControllerDevicesInterfacesPacketsOverviewByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches. | [optional] |
| **names** | [**string[]**](../Model/string.md)| Optional parameter to filter wireless LAN controller by its interface name. This filter uses multiple exact matches. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 1 day from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 1 day after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 1 day. The default is 1 hour. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesPacketsOverviewByDevice200Response**](../Model/GetOrganizationWirelessControllerDevicesInterfacesPacketsOverviewByDevice200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessControllerDevicesInterfacesUsageHistoryByInterval()`

```php
getOrganizationWirelessControllerDevicesInterfacesUsageHistoryByInterval($organization_id, $serials, $names, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesUsageHistoryByInterval200Response
```

Retrieve the traffic for the interfaces of a Wireless LAN controller

Retrieve the traffic for the interfaces of a Wireless LAN controller

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


$apiInstance = new Meraki\Api\InterfacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$serials = array('serials_example'); // string[] | Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches.
$names = array('names_example'); // string[] | Optional parameter to filter wireless LAN controller by its interface name. This filter uses multiple exact matches.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessControllerDevicesInterfacesUsageHistoryByInterval($organization_id, $serials, $names, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterfacesApi->getOrganizationWirelessControllerDevicesInterfacesUsageHistoryByInterval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches. | [optional] |
| **names** | [**string[]**](../Model/string.md)| Optional parameter to filter wireless LAN controller by its interface name. This filter uses multiple exact matches. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesUsageHistoryByInterval200Response**](../Model/GetOrganizationWirelessControllerDevicesInterfacesUsageHistoryByInterval200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceSwitchRoutingInterface()`

```php
updateDeviceSwitchRoutingInterface($serial, $interface_id, $update_device_switch_routing_interface_request): \Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInner
```

Update a layer 3 interface for a switch

Update a layer 3 interface for a switch

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


$apiInstance = new Meraki\Api\InterfacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$interface_id = 'interface_id_example'; // string | Interface ID
$update_device_switch_routing_interface_request = new \Meraki\Model\UpdateDeviceSwitchRoutingInterfaceRequest(); // \Meraki\Model\UpdateDeviceSwitchRoutingInterfaceRequest

try {
    $result = $apiInstance->updateDeviceSwitchRoutingInterface($serial, $interface_id, $update_device_switch_routing_interface_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterfacesApi->updateDeviceSwitchRoutingInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **interface_id** | **string**| Interface ID | |
| **update_device_switch_routing_interface_request** | [**\Meraki\Model\UpdateDeviceSwitchRoutingInterfaceRequest**](../Model/UpdateDeviceSwitchRoutingInterfaceRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInner**](../Model/GetDeviceSwitchRoutingInterfaces200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceSwitchRoutingInterfaceDhcp()`

```php
updateDeviceSwitchRoutingInterfaceDhcp($serial, $interface_id, $update_device_switch_routing_interface_dhcp_request): \Meraki\Model\GetDeviceSwitchRoutingInterfaceDhcp200Response
```

Update a layer 3 interface DHCP configuration for a switch

Update a layer 3 interface DHCP configuration for a switch

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


$apiInstance = new Meraki\Api\InterfacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$interface_id = 'interface_id_example'; // string | Interface ID
$update_device_switch_routing_interface_dhcp_request = new \Meraki\Model\UpdateDeviceSwitchRoutingInterfaceDhcpRequest(); // \Meraki\Model\UpdateDeviceSwitchRoutingInterfaceDhcpRequest

try {
    $result = $apiInstance->updateDeviceSwitchRoutingInterfaceDhcp($serial, $interface_id, $update_device_switch_routing_interface_dhcp_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterfacesApi->updateDeviceSwitchRoutingInterfaceDhcp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **interface_id** | **string**| Interface ID | |
| **update_device_switch_routing_interface_dhcp_request** | [**\Meraki\Model\UpdateDeviceSwitchRoutingInterfaceDhcpRequest**](../Model/UpdateDeviceSwitchRoutingInterfaceDhcpRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingInterfaceDhcp200Response**](../Model/GetDeviceSwitchRoutingInterfaceDhcp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchStackRoutingInterface()`

```php
updateNetworkSwitchStackRoutingInterface($network_id, $switch_stack_id, $interface_id, $update_device_switch_routing_interface_request): \Meraki\Model\UpdateNetworkSwitchStackRoutingInterface200Response
```

Update a layer 3 interface for a switch stack

Update a layer 3 interface for a switch stack

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


$apiInstance = new Meraki\Api\InterfacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$switch_stack_id = 'switch_stack_id_example'; // string | Switch stack ID
$interface_id = 'interface_id_example'; // string | Interface ID
$update_device_switch_routing_interface_request = new \Meraki\Model\UpdateDeviceSwitchRoutingInterfaceRequest(); // \Meraki\Model\UpdateDeviceSwitchRoutingInterfaceRequest

try {
    $result = $apiInstance->updateNetworkSwitchStackRoutingInterface($network_id, $switch_stack_id, $interface_id, $update_device_switch_routing_interface_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterfacesApi->updateNetworkSwitchStackRoutingInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **switch_stack_id** | **string**| Switch stack ID | |
| **interface_id** | **string**| Interface ID | |
| **update_device_switch_routing_interface_request** | [**\Meraki\Model\UpdateDeviceSwitchRoutingInterfaceRequest**](../Model/UpdateDeviceSwitchRoutingInterfaceRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\UpdateNetworkSwitchStackRoutingInterface200Response**](../Model/UpdateNetworkSwitchStackRoutingInterface200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchStackRoutingInterfaceDhcp()`

```php
updateNetworkSwitchStackRoutingInterfaceDhcp($network_id, $switch_stack_id, $interface_id, $update_network_switch_stack_routing_interface_dhcp_request): \Meraki\Model\GetDeviceSwitchRoutingInterfaceDhcp200Response
```

Update a layer 3 interface DHCP configuration for a switch stack

Update a layer 3 interface DHCP configuration for a switch stack

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


$apiInstance = new Meraki\Api\InterfacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$switch_stack_id = 'switch_stack_id_example'; // string | Switch stack ID
$interface_id = 'interface_id_example'; // string | Interface ID
$update_network_switch_stack_routing_interface_dhcp_request = new \Meraki\Model\UpdateNetworkSwitchStackRoutingInterfaceDhcpRequest(); // \Meraki\Model\UpdateNetworkSwitchStackRoutingInterfaceDhcpRequest

try {
    $result = $apiInstance->updateNetworkSwitchStackRoutingInterfaceDhcp($network_id, $switch_stack_id, $interface_id, $update_network_switch_stack_routing_interface_dhcp_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterfacesApi->updateNetworkSwitchStackRoutingInterfaceDhcp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **switch_stack_id** | **string**| Switch stack ID | |
| **interface_id** | **string**| Interface ID | |
| **update_network_switch_stack_routing_interface_dhcp_request** | [**\Meraki\Model\UpdateNetworkSwitchStackRoutingInterfaceDhcpRequest**](../Model/UpdateNetworkSwitchStackRoutingInterfaceDhcpRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingInterfaceDhcp200Response**](../Model/GetDeviceSwitchRoutingInterfaceDhcp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
