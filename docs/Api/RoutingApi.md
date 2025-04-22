# Meraki\RoutingApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDeviceSwitchRoutingInterface()**](RoutingApi.md#createDeviceSwitchRoutingInterface) | **POST** /devices/{serial}/switch/routing/interfaces | Create a layer 3 interface for a switch |
| [**createDeviceSwitchRoutingStaticRoute()**](RoutingApi.md#createDeviceSwitchRoutingStaticRoute) | **POST** /devices/{serial}/switch/routing/staticRoutes | Create a layer 3 static route for a switch |
| [**createNetworkSwitchRoutingMulticastRendezvousPoint()**](RoutingApi.md#createNetworkSwitchRoutingMulticastRendezvousPoint) | **POST** /networks/{networkId}/switch/routing/multicast/rendezvousPoints | Create a multicast rendezvous point |
| [**createNetworkSwitchStackRoutingInterface()**](RoutingApi.md#createNetworkSwitchStackRoutingInterface) | **POST** /networks/{networkId}/switch/stacks/{switchStackId}/routing/interfaces | Create a layer 3 interface for a switch stack |
| [**createNetworkSwitchStackRoutingStaticRoute()**](RoutingApi.md#createNetworkSwitchStackRoutingStaticRoute) | **POST** /networks/{networkId}/switch/stacks/{switchStackId}/routing/staticRoutes | Create a layer 3 static route for a switch stack |
| [**deleteDeviceSwitchRoutingInterface()**](RoutingApi.md#deleteDeviceSwitchRoutingInterface) | **DELETE** /devices/{serial}/switch/routing/interfaces/{interfaceId} | Delete a layer 3 interface from the switch |
| [**deleteDeviceSwitchRoutingStaticRoute()**](RoutingApi.md#deleteDeviceSwitchRoutingStaticRoute) | **DELETE** /devices/{serial}/switch/routing/staticRoutes/{staticRouteId} | Delete a layer 3 static route for a switch |
| [**deleteNetworkSwitchRoutingMulticastRendezvousPoint()**](RoutingApi.md#deleteNetworkSwitchRoutingMulticastRendezvousPoint) | **DELETE** /networks/{networkId}/switch/routing/multicast/rendezvousPoints/{rendezvousPointId} | Delete a multicast rendezvous point |
| [**deleteNetworkSwitchStackRoutingInterface()**](RoutingApi.md#deleteNetworkSwitchStackRoutingInterface) | **DELETE** /networks/{networkId}/switch/stacks/{switchStackId}/routing/interfaces/{interfaceId} | Delete a layer 3 interface from a switch stack |
| [**deleteNetworkSwitchStackRoutingStaticRoute()**](RoutingApi.md#deleteNetworkSwitchStackRoutingStaticRoute) | **DELETE** /networks/{networkId}/switch/stacks/{switchStackId}/routing/staticRoutes/{staticRouteId} | Delete a layer 3 static route for a switch stack |
| [**getDeviceSwitchRoutingInterface()**](RoutingApi.md#getDeviceSwitchRoutingInterface) | **GET** /devices/{serial}/switch/routing/interfaces/{interfaceId} | Return a layer 3 interface for a switch |
| [**getDeviceSwitchRoutingInterfaceDhcp()**](RoutingApi.md#getDeviceSwitchRoutingInterfaceDhcp) | **GET** /devices/{serial}/switch/routing/interfaces/{interfaceId}/dhcp | Return a layer 3 interface DHCP configuration for a switch |
| [**getDeviceSwitchRoutingInterfaces()**](RoutingApi.md#getDeviceSwitchRoutingInterfaces) | **GET** /devices/{serial}/switch/routing/interfaces | List layer 3 interfaces for a switch |
| [**getDeviceSwitchRoutingStaticRoute()**](RoutingApi.md#getDeviceSwitchRoutingStaticRoute) | **GET** /devices/{serial}/switch/routing/staticRoutes/{staticRouteId} | Return a layer 3 static route for a switch |
| [**getDeviceSwitchRoutingStaticRoutes()**](RoutingApi.md#getDeviceSwitchRoutingStaticRoutes) | **GET** /devices/{serial}/switch/routing/staticRoutes | List layer 3 static routes for a switch |
| [**getNetworkSwitchRoutingMulticast()**](RoutingApi.md#getNetworkSwitchRoutingMulticast) | **GET** /networks/{networkId}/switch/routing/multicast | Return multicast settings for a network |
| [**getNetworkSwitchRoutingMulticastRendezvousPoint()**](RoutingApi.md#getNetworkSwitchRoutingMulticastRendezvousPoint) | **GET** /networks/{networkId}/switch/routing/multicast/rendezvousPoints/{rendezvousPointId} | Return a multicast rendezvous point |
| [**getNetworkSwitchRoutingMulticastRendezvousPoints()**](RoutingApi.md#getNetworkSwitchRoutingMulticastRendezvousPoints) | **GET** /networks/{networkId}/switch/routing/multicast/rendezvousPoints | List multicast rendezvous points |
| [**getNetworkSwitchRoutingOspf()**](RoutingApi.md#getNetworkSwitchRoutingOspf) | **GET** /networks/{networkId}/switch/routing/ospf | Return layer 3 OSPF routing configuration |
| [**getNetworkSwitchStackRoutingInterface()**](RoutingApi.md#getNetworkSwitchStackRoutingInterface) | **GET** /networks/{networkId}/switch/stacks/{switchStackId}/routing/interfaces/{interfaceId} | Return a layer 3 interface from a switch stack |
| [**getNetworkSwitchStackRoutingInterfaceDhcp()**](RoutingApi.md#getNetworkSwitchStackRoutingInterfaceDhcp) | **GET** /networks/{networkId}/switch/stacks/{switchStackId}/routing/interfaces/{interfaceId}/dhcp | Return a layer 3 interface DHCP configuration for a switch stack |
| [**getNetworkSwitchStackRoutingInterfaces()**](RoutingApi.md#getNetworkSwitchStackRoutingInterfaces) | **GET** /networks/{networkId}/switch/stacks/{switchStackId}/routing/interfaces | List layer 3 interfaces for a switch stack |
| [**getNetworkSwitchStackRoutingStaticRoute()**](RoutingApi.md#getNetworkSwitchStackRoutingStaticRoute) | **GET** /networks/{networkId}/switch/stacks/{switchStackId}/routing/staticRoutes/{staticRouteId} | Return a layer 3 static route for a switch stack |
| [**getNetworkSwitchStackRoutingStaticRoutes()**](RoutingApi.md#getNetworkSwitchStackRoutingStaticRoutes) | **GET** /networks/{networkId}/switch/stacks/{switchStackId}/routing/staticRoutes | List layer 3 static routes for a switch stack |
| [**updateDeviceSwitchRoutingInterface()**](RoutingApi.md#updateDeviceSwitchRoutingInterface) | **PUT** /devices/{serial}/switch/routing/interfaces/{interfaceId} | Update a layer 3 interface for a switch |
| [**updateDeviceSwitchRoutingInterfaceDhcp()**](RoutingApi.md#updateDeviceSwitchRoutingInterfaceDhcp) | **PUT** /devices/{serial}/switch/routing/interfaces/{interfaceId}/dhcp | Update a layer 3 interface DHCP configuration for a switch |
| [**updateDeviceSwitchRoutingStaticRoute()**](RoutingApi.md#updateDeviceSwitchRoutingStaticRoute) | **PUT** /devices/{serial}/switch/routing/staticRoutes/{staticRouteId} | Update a layer 3 static route for a switch |
| [**updateNetworkSwitchRoutingMulticast()**](RoutingApi.md#updateNetworkSwitchRoutingMulticast) | **PUT** /networks/{networkId}/switch/routing/multicast | Update multicast settings for a network |
| [**updateNetworkSwitchRoutingMulticastRendezvousPoint()**](RoutingApi.md#updateNetworkSwitchRoutingMulticastRendezvousPoint) | **PUT** /networks/{networkId}/switch/routing/multicast/rendezvousPoints/{rendezvousPointId} | Update a multicast rendezvous point |
| [**updateNetworkSwitchRoutingOspf()**](RoutingApi.md#updateNetworkSwitchRoutingOspf) | **PUT** /networks/{networkId}/switch/routing/ospf | Update layer 3 OSPF routing configuration |
| [**updateNetworkSwitchStackRoutingInterface()**](RoutingApi.md#updateNetworkSwitchStackRoutingInterface) | **PUT** /networks/{networkId}/switch/stacks/{switchStackId}/routing/interfaces/{interfaceId} | Update a layer 3 interface for a switch stack |
| [**updateNetworkSwitchStackRoutingInterfaceDhcp()**](RoutingApi.md#updateNetworkSwitchStackRoutingInterfaceDhcp) | **PUT** /networks/{networkId}/switch/stacks/{switchStackId}/routing/interfaces/{interfaceId}/dhcp | Update a layer 3 interface DHCP configuration for a switch stack |
| [**updateNetworkSwitchStackRoutingStaticRoute()**](RoutingApi.md#updateNetworkSwitchStackRoutingStaticRoute) | **PUT** /networks/{networkId}/switch/stacks/{switchStackId}/routing/staticRoutes/{staticRouteId} | Update a layer 3 static route for a switch stack |


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


$apiInstance = new Meraki\Api\RoutingApi(
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
    echo 'Exception when calling RoutingApi->createDeviceSwitchRoutingInterface: ', $e->getMessage(), PHP_EOL;
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

## `createDeviceSwitchRoutingStaticRoute()`

```php
createDeviceSwitchRoutingStaticRoute($serial, $create_device_switch_routing_static_route_request): \Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner
```

Create a layer 3 static route for a switch

Create a layer 3 static route for a switch

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


$apiInstance = new Meraki\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$create_device_switch_routing_static_route_request = new \Meraki\Model\CreateDeviceSwitchRoutingStaticRouteRequest(); // \Meraki\Model\CreateDeviceSwitchRoutingStaticRouteRequest

try {
    $result = $apiInstance->createDeviceSwitchRoutingStaticRoute($serial, $create_device_switch_routing_static_route_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->createDeviceSwitchRoutingStaticRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **create_device_switch_routing_static_route_request** | [**\Meraki\Model\CreateDeviceSwitchRoutingStaticRouteRequest**](../Model/CreateDeviceSwitchRoutingStaticRouteRequest.md)|  | |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner**](../Model/GetDeviceSwitchRoutingStaticRoutes200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkSwitchRoutingMulticastRendezvousPoint()`

```php
createNetworkSwitchRoutingMulticastRendezvousPoint($network_id, $create_network_switch_routing_multicast_rendezvous_point_request): \Meraki\Model\GetNetworkSwitchRoutingMulticastRendezvousPoints200ResponseInner
```

Create a multicast rendezvous point

Create a multicast rendezvous point

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


$apiInstance = new Meraki\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_switch_routing_multicast_rendezvous_point_request = new \Meraki\Model\CreateNetworkSwitchRoutingMulticastRendezvousPointRequest(); // \Meraki\Model\CreateNetworkSwitchRoutingMulticastRendezvousPointRequest

try {
    $result = $apiInstance->createNetworkSwitchRoutingMulticastRendezvousPoint($network_id, $create_network_switch_routing_multicast_rendezvous_point_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->createNetworkSwitchRoutingMulticastRendezvousPoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_switch_routing_multicast_rendezvous_point_request** | [**\Meraki\Model\CreateNetworkSwitchRoutingMulticastRendezvousPointRequest**](../Model/CreateNetworkSwitchRoutingMulticastRendezvousPointRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkSwitchRoutingMulticastRendezvousPoints200ResponseInner**](../Model/GetNetworkSwitchRoutingMulticastRendezvousPoints200ResponseInner.md)

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


$apiInstance = new Meraki\Api\RoutingApi(
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
    echo 'Exception when calling RoutingApi->createNetworkSwitchStackRoutingInterface: ', $e->getMessage(), PHP_EOL;
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

## `createNetworkSwitchStackRoutingStaticRoute()`

```php
createNetworkSwitchStackRoutingStaticRoute($network_id, $switch_stack_id, $create_device_switch_routing_static_route_request): \Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner
```

Create a layer 3 static route for a switch stack

Create a layer 3 static route for a switch stack

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


$apiInstance = new Meraki\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$switch_stack_id = 'switch_stack_id_example'; // string | Switch stack ID
$create_device_switch_routing_static_route_request = new \Meraki\Model\CreateDeviceSwitchRoutingStaticRouteRequest(); // \Meraki\Model\CreateDeviceSwitchRoutingStaticRouteRequest

try {
    $result = $apiInstance->createNetworkSwitchStackRoutingStaticRoute($network_id, $switch_stack_id, $create_device_switch_routing_static_route_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->createNetworkSwitchStackRoutingStaticRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **switch_stack_id** | **string**| Switch stack ID | |
| **create_device_switch_routing_static_route_request** | [**\Meraki\Model\CreateDeviceSwitchRoutingStaticRouteRequest**](../Model/CreateDeviceSwitchRoutingStaticRouteRequest.md)|  | |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner**](../Model/GetDeviceSwitchRoutingStaticRoutes200ResponseInner.md)

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


$apiInstance = new Meraki\Api\RoutingApi(
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
    echo 'Exception when calling RoutingApi->deleteDeviceSwitchRoutingInterface: ', $e->getMessage(), PHP_EOL;
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

## `deleteDeviceSwitchRoutingStaticRoute()`

```php
deleteDeviceSwitchRoutingStaticRoute($serial, $static_route_id)
```

Delete a layer 3 static route for a switch

Delete a layer 3 static route for a switch

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


$apiInstance = new Meraki\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$static_route_id = 'static_route_id_example'; // string | Static route ID

try {
    $apiInstance->deleteDeviceSwitchRoutingStaticRoute($serial, $static_route_id);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->deleteDeviceSwitchRoutingStaticRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **static_route_id** | **string**| Static route ID | |

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

## `deleteNetworkSwitchRoutingMulticastRendezvousPoint()`

```php
deleteNetworkSwitchRoutingMulticastRendezvousPoint($network_id, $rendezvous_point_id)
```

Delete a multicast rendezvous point

Delete a multicast rendezvous point

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


$apiInstance = new Meraki\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$rendezvous_point_id = 'rendezvous_point_id_example'; // string | Rendezvous point ID

try {
    $apiInstance->deleteNetworkSwitchRoutingMulticastRendezvousPoint($network_id, $rendezvous_point_id);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->deleteNetworkSwitchRoutingMulticastRendezvousPoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **rendezvous_point_id** | **string**| Rendezvous point ID | |

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


$apiInstance = new Meraki\Api\RoutingApi(
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
    echo 'Exception when calling RoutingApi->deleteNetworkSwitchStackRoutingInterface: ', $e->getMessage(), PHP_EOL;
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

## `deleteNetworkSwitchStackRoutingStaticRoute()`

```php
deleteNetworkSwitchStackRoutingStaticRoute($network_id, $switch_stack_id, $static_route_id)
```

Delete a layer 3 static route for a switch stack

Delete a layer 3 static route for a switch stack

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


$apiInstance = new Meraki\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$switch_stack_id = 'switch_stack_id_example'; // string | Switch stack ID
$static_route_id = 'static_route_id_example'; // string | Static route ID

try {
    $apiInstance->deleteNetworkSwitchStackRoutingStaticRoute($network_id, $switch_stack_id, $static_route_id);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->deleteNetworkSwitchStackRoutingStaticRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **switch_stack_id** | **string**| Switch stack ID | |
| **static_route_id** | **string**| Static route ID | |

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


$apiInstance = new Meraki\Api\RoutingApi(
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
    echo 'Exception when calling RoutingApi->getDeviceSwitchRoutingInterface: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\RoutingApi(
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
    echo 'Exception when calling RoutingApi->getDeviceSwitchRoutingInterfaceDhcp: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\RoutingApi(
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
    echo 'Exception when calling RoutingApi->getDeviceSwitchRoutingInterfaces: ', $e->getMessage(), PHP_EOL;
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

## `getDeviceSwitchRoutingStaticRoute()`

```php
getDeviceSwitchRoutingStaticRoute($serial, $static_route_id): \Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner
```

Return a layer 3 static route for a switch

Return a layer 3 static route for a switch

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


$apiInstance = new Meraki\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$static_route_id = 'static_route_id_example'; // string | Static route ID

try {
    $result = $apiInstance->getDeviceSwitchRoutingStaticRoute($serial, $static_route_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getDeviceSwitchRoutingStaticRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **static_route_id** | **string**| Static route ID | |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner**](../Model/GetDeviceSwitchRoutingStaticRoutes200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceSwitchRoutingStaticRoutes()`

```php
getDeviceSwitchRoutingStaticRoutes($serial): \Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner[]
```

List layer 3 static routes for a switch

List layer 3 static routes for a switch

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


$apiInstance = new Meraki\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceSwitchRoutingStaticRoutes($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getDeviceSwitchRoutingStaticRoutes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner[]**](../Model/GetDeviceSwitchRoutingStaticRoutes200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchRoutingMulticast()`

```php
getNetworkSwitchRoutingMulticast($network_id): \Meraki\Model\GetNetworkSwitchRoutingMulticast200Response
```

Return multicast settings for a network

Return multicast settings for a network

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


$apiInstance = new Meraki\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSwitchRoutingMulticast($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getNetworkSwitchRoutingMulticast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchRoutingMulticast200Response**](../Model/GetNetworkSwitchRoutingMulticast200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchRoutingMulticastRendezvousPoint()`

```php
getNetworkSwitchRoutingMulticastRendezvousPoint($network_id, $rendezvous_point_id): \Meraki\Model\GetNetworkSwitchRoutingMulticastRendezvousPoints200ResponseInner
```

Return a multicast rendezvous point

Return a multicast rendezvous point

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


$apiInstance = new Meraki\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$rendezvous_point_id = 'rendezvous_point_id_example'; // string | Rendezvous point ID

try {
    $result = $apiInstance->getNetworkSwitchRoutingMulticastRendezvousPoint($network_id, $rendezvous_point_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getNetworkSwitchRoutingMulticastRendezvousPoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **rendezvous_point_id** | **string**| Rendezvous point ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchRoutingMulticastRendezvousPoints200ResponseInner**](../Model/GetNetworkSwitchRoutingMulticastRendezvousPoints200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchRoutingMulticastRendezvousPoints()`

```php
getNetworkSwitchRoutingMulticastRendezvousPoints($network_id): \Meraki\Model\GetNetworkSwitchRoutingMulticastRendezvousPoints200ResponseInner[]
```

List multicast rendezvous points

List multicast rendezvous points

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


$apiInstance = new Meraki\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSwitchRoutingMulticastRendezvousPoints($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getNetworkSwitchRoutingMulticastRendezvousPoints: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchRoutingMulticastRendezvousPoints200ResponseInner[]**](../Model/GetNetworkSwitchRoutingMulticastRendezvousPoints200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchRoutingOspf()`

```php
getNetworkSwitchRoutingOspf($network_id): \Meraki\Model\GetNetworkSwitchRoutingOspf200Response
```

Return layer 3 OSPF routing configuration

Return layer 3 OSPF routing configuration

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


$apiInstance = new Meraki\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSwitchRoutingOspf($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getNetworkSwitchRoutingOspf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchRoutingOspf200Response**](../Model/GetNetworkSwitchRoutingOspf200Response.md)

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


$apiInstance = new Meraki\Api\RoutingApi(
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
    echo 'Exception when calling RoutingApi->getNetworkSwitchStackRoutingInterface: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\RoutingApi(
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
    echo 'Exception when calling RoutingApi->getNetworkSwitchStackRoutingInterfaceDhcp: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\RoutingApi(
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
    echo 'Exception when calling RoutingApi->getNetworkSwitchStackRoutingInterfaces: ', $e->getMessage(), PHP_EOL;
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

## `getNetworkSwitchStackRoutingStaticRoute()`

```php
getNetworkSwitchStackRoutingStaticRoute($network_id, $switch_stack_id, $static_route_id): \Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner
```

Return a layer 3 static route for a switch stack

Return a layer 3 static route for a switch stack

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


$apiInstance = new Meraki\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$switch_stack_id = 'switch_stack_id_example'; // string | Switch stack ID
$static_route_id = 'static_route_id_example'; // string | Static route ID

try {
    $result = $apiInstance->getNetworkSwitchStackRoutingStaticRoute($network_id, $switch_stack_id, $static_route_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getNetworkSwitchStackRoutingStaticRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **switch_stack_id** | **string**| Switch stack ID | |
| **static_route_id** | **string**| Static route ID | |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner**](../Model/GetDeviceSwitchRoutingStaticRoutes200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchStackRoutingStaticRoutes()`

```php
getNetworkSwitchStackRoutingStaticRoutes($network_id, $switch_stack_id): \Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner[]
```

List layer 3 static routes for a switch stack

List layer 3 static routes for a switch stack

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


$apiInstance = new Meraki\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$switch_stack_id = 'switch_stack_id_example'; // string | Switch stack ID

try {
    $result = $apiInstance->getNetworkSwitchStackRoutingStaticRoutes($network_id, $switch_stack_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getNetworkSwitchStackRoutingStaticRoutes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **switch_stack_id** | **string**| Switch stack ID | |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner[]**](../Model/GetDeviceSwitchRoutingStaticRoutes200ResponseInner.md)

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


$apiInstance = new Meraki\Api\RoutingApi(
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
    echo 'Exception when calling RoutingApi->updateDeviceSwitchRoutingInterface: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\RoutingApi(
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
    echo 'Exception when calling RoutingApi->updateDeviceSwitchRoutingInterfaceDhcp: ', $e->getMessage(), PHP_EOL;
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

## `updateDeviceSwitchRoutingStaticRoute()`

```php
updateDeviceSwitchRoutingStaticRoute($serial, $static_route_id, $update_device_switch_routing_static_route_request): \Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner
```

Update a layer 3 static route for a switch

Update a layer 3 static route for a switch

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


$apiInstance = new Meraki\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$static_route_id = 'static_route_id_example'; // string | Static route ID
$update_device_switch_routing_static_route_request = new \Meraki\Model\UpdateDeviceSwitchRoutingStaticRouteRequest(); // \Meraki\Model\UpdateDeviceSwitchRoutingStaticRouteRequest

try {
    $result = $apiInstance->updateDeviceSwitchRoutingStaticRoute($serial, $static_route_id, $update_device_switch_routing_static_route_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->updateDeviceSwitchRoutingStaticRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **static_route_id** | **string**| Static route ID | |
| **update_device_switch_routing_static_route_request** | [**\Meraki\Model\UpdateDeviceSwitchRoutingStaticRouteRequest**](../Model/UpdateDeviceSwitchRoutingStaticRouteRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner**](../Model/GetDeviceSwitchRoutingStaticRoutes200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchRoutingMulticast()`

```php
updateNetworkSwitchRoutingMulticast($network_id, $update_network_switch_routing_multicast_request): \Meraki\Model\GetNetworkSwitchRoutingMulticast200Response
```

Update multicast settings for a network

Update multicast settings for a network

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


$apiInstance = new Meraki\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_switch_routing_multicast_request = new \Meraki\Model\UpdateNetworkSwitchRoutingMulticastRequest(); // \Meraki\Model\UpdateNetworkSwitchRoutingMulticastRequest

try {
    $result = $apiInstance->updateNetworkSwitchRoutingMulticast($network_id, $update_network_switch_routing_multicast_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->updateNetworkSwitchRoutingMulticast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_switch_routing_multicast_request** | [**\Meraki\Model\UpdateNetworkSwitchRoutingMulticastRequest**](../Model/UpdateNetworkSwitchRoutingMulticastRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchRoutingMulticast200Response**](../Model/GetNetworkSwitchRoutingMulticast200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchRoutingMulticastRendezvousPoint()`

```php
updateNetworkSwitchRoutingMulticastRendezvousPoint($network_id, $rendezvous_point_id, $create_network_switch_routing_multicast_rendezvous_point_request): \Meraki\Model\GetNetworkSwitchRoutingMulticastRendezvousPoints200ResponseInner
```

Update a multicast rendezvous point

Update a multicast rendezvous point

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


$apiInstance = new Meraki\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$rendezvous_point_id = 'rendezvous_point_id_example'; // string | Rendezvous point ID
$create_network_switch_routing_multicast_rendezvous_point_request = new \Meraki\Model\CreateNetworkSwitchRoutingMulticastRendezvousPointRequest(); // \Meraki\Model\CreateNetworkSwitchRoutingMulticastRendezvousPointRequest

try {
    $result = $apiInstance->updateNetworkSwitchRoutingMulticastRendezvousPoint($network_id, $rendezvous_point_id, $create_network_switch_routing_multicast_rendezvous_point_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->updateNetworkSwitchRoutingMulticastRendezvousPoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **rendezvous_point_id** | **string**| Rendezvous point ID | |
| **create_network_switch_routing_multicast_rendezvous_point_request** | [**\Meraki\Model\CreateNetworkSwitchRoutingMulticastRendezvousPointRequest**](../Model/CreateNetworkSwitchRoutingMulticastRendezvousPointRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkSwitchRoutingMulticastRendezvousPoints200ResponseInner**](../Model/GetNetworkSwitchRoutingMulticastRendezvousPoints200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchRoutingOspf()`

```php
updateNetworkSwitchRoutingOspf($network_id, $update_network_switch_routing_ospf_request): \Meraki\Model\GetNetworkSwitchRoutingOspf200Response
```

Update layer 3 OSPF routing configuration

Update layer 3 OSPF routing configuration

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


$apiInstance = new Meraki\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_switch_routing_ospf_request = new \Meraki\Model\UpdateNetworkSwitchRoutingOspfRequest(); // \Meraki\Model\UpdateNetworkSwitchRoutingOspfRequest

try {
    $result = $apiInstance->updateNetworkSwitchRoutingOspf($network_id, $update_network_switch_routing_ospf_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->updateNetworkSwitchRoutingOspf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_switch_routing_ospf_request** | [**\Meraki\Model\UpdateNetworkSwitchRoutingOspfRequest**](../Model/UpdateNetworkSwitchRoutingOspfRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchRoutingOspf200Response**](../Model/GetNetworkSwitchRoutingOspf200Response.md)

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


$apiInstance = new Meraki\Api\RoutingApi(
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
    echo 'Exception when calling RoutingApi->updateNetworkSwitchStackRoutingInterface: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\RoutingApi(
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
    echo 'Exception when calling RoutingApi->updateNetworkSwitchStackRoutingInterfaceDhcp: ', $e->getMessage(), PHP_EOL;
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

## `updateNetworkSwitchStackRoutingStaticRoute()`

```php
updateNetworkSwitchStackRoutingStaticRoute($network_id, $switch_stack_id, $static_route_id, $update_device_switch_routing_static_route_request): \Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner
```

Update a layer 3 static route for a switch stack

Update a layer 3 static route for a switch stack

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


$apiInstance = new Meraki\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$switch_stack_id = 'switch_stack_id_example'; // string | Switch stack ID
$static_route_id = 'static_route_id_example'; // string | Static route ID
$update_device_switch_routing_static_route_request = new \Meraki\Model\UpdateDeviceSwitchRoutingStaticRouteRequest(); // \Meraki\Model\UpdateDeviceSwitchRoutingStaticRouteRequest

try {
    $result = $apiInstance->updateNetworkSwitchStackRoutingStaticRoute($network_id, $switch_stack_id, $static_route_id, $update_device_switch_routing_static_route_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->updateNetworkSwitchStackRoutingStaticRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **switch_stack_id** | **string**| Switch stack ID | |
| **static_route_id** | **string**| Static route ID | |
| **update_device_switch_routing_static_route_request** | [**\Meraki\Model\UpdateDeviceSwitchRoutingStaticRouteRequest**](../Model/UpdateDeviceSwitchRoutingStaticRouteRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner**](../Model/GetDeviceSwitchRoutingStaticRoutes200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
