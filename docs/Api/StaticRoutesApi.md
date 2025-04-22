# Meraki\StaticRoutesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDeviceSwitchRoutingStaticRoute()**](StaticRoutesApi.md#createDeviceSwitchRoutingStaticRoute) | **POST** /devices/{serial}/switch/routing/staticRoutes | Create a layer 3 static route for a switch |
| [**createNetworkApplianceStaticRoute()**](StaticRoutesApi.md#createNetworkApplianceStaticRoute) | **POST** /networks/{networkId}/appliance/staticRoutes | Add a static route for an MX or teleworker network |
| [**createNetworkSwitchStackRoutingStaticRoute()**](StaticRoutesApi.md#createNetworkSwitchStackRoutingStaticRoute) | **POST** /networks/{networkId}/switch/stacks/{switchStackId}/routing/staticRoutes | Create a layer 3 static route for a switch stack |
| [**deleteDeviceSwitchRoutingStaticRoute()**](StaticRoutesApi.md#deleteDeviceSwitchRoutingStaticRoute) | **DELETE** /devices/{serial}/switch/routing/staticRoutes/{staticRouteId} | Delete a layer 3 static route for a switch |
| [**deleteNetworkApplianceStaticRoute()**](StaticRoutesApi.md#deleteNetworkApplianceStaticRoute) | **DELETE** /networks/{networkId}/appliance/staticRoutes/{staticRouteId} | Delete a static route from an MX or teleworker network |
| [**deleteNetworkSwitchStackRoutingStaticRoute()**](StaticRoutesApi.md#deleteNetworkSwitchStackRoutingStaticRoute) | **DELETE** /networks/{networkId}/switch/stacks/{switchStackId}/routing/staticRoutes/{staticRouteId} | Delete a layer 3 static route for a switch stack |
| [**getDeviceSwitchRoutingStaticRoute()**](StaticRoutesApi.md#getDeviceSwitchRoutingStaticRoute) | **GET** /devices/{serial}/switch/routing/staticRoutes/{staticRouteId} | Return a layer 3 static route for a switch |
| [**getDeviceSwitchRoutingStaticRoutes()**](StaticRoutesApi.md#getDeviceSwitchRoutingStaticRoutes) | **GET** /devices/{serial}/switch/routing/staticRoutes | List layer 3 static routes for a switch |
| [**getNetworkApplianceStaticRoute()**](StaticRoutesApi.md#getNetworkApplianceStaticRoute) | **GET** /networks/{networkId}/appliance/staticRoutes/{staticRouteId} | Return a static route for an MX or teleworker network |
| [**getNetworkApplianceStaticRoutes()**](StaticRoutesApi.md#getNetworkApplianceStaticRoutes) | **GET** /networks/{networkId}/appliance/staticRoutes | List the static routes for an MX or teleworker network |
| [**getNetworkSwitchStackRoutingStaticRoute()**](StaticRoutesApi.md#getNetworkSwitchStackRoutingStaticRoute) | **GET** /networks/{networkId}/switch/stacks/{switchStackId}/routing/staticRoutes/{staticRouteId} | Return a layer 3 static route for a switch stack |
| [**getNetworkSwitchStackRoutingStaticRoutes()**](StaticRoutesApi.md#getNetworkSwitchStackRoutingStaticRoutes) | **GET** /networks/{networkId}/switch/stacks/{switchStackId}/routing/staticRoutes | List layer 3 static routes for a switch stack |
| [**updateDeviceSwitchRoutingStaticRoute()**](StaticRoutesApi.md#updateDeviceSwitchRoutingStaticRoute) | **PUT** /devices/{serial}/switch/routing/staticRoutes/{staticRouteId} | Update a layer 3 static route for a switch |
| [**updateNetworkApplianceStaticRoute()**](StaticRoutesApi.md#updateNetworkApplianceStaticRoute) | **PUT** /networks/{networkId}/appliance/staticRoutes/{staticRouteId} | Update a static route for an MX or teleworker network |
| [**updateNetworkSwitchStackRoutingStaticRoute()**](StaticRoutesApi.md#updateNetworkSwitchStackRoutingStaticRoute) | **PUT** /networks/{networkId}/switch/stacks/{switchStackId}/routing/staticRoutes/{staticRouteId} | Update a layer 3 static route for a switch stack |


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


$apiInstance = new Meraki\Api\StaticRoutesApi(
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
    echo 'Exception when calling StaticRoutesApi->createDeviceSwitchRoutingStaticRoute: ', $e->getMessage(), PHP_EOL;
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

## `createNetworkApplianceStaticRoute()`

```php
createNetworkApplianceStaticRoute($network_id, $create_network_appliance_static_route_request): \Meraki\Model\GetNetworkApplianceStaticRoutes200ResponseInner
```

Add a static route for an MX or teleworker network

Add a static route for an MX or teleworker network

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


$apiInstance = new Meraki\Api\StaticRoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_appliance_static_route_request = new \Meraki\Model\CreateNetworkApplianceStaticRouteRequest(); // \Meraki\Model\CreateNetworkApplianceStaticRouteRequest

try {
    $result = $apiInstance->createNetworkApplianceStaticRoute($network_id, $create_network_appliance_static_route_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticRoutesApi->createNetworkApplianceStaticRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_appliance_static_route_request** | [**\Meraki\Model\CreateNetworkApplianceStaticRouteRequest**](../Model/CreateNetworkApplianceStaticRouteRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkApplianceStaticRoutes200ResponseInner**](../Model/GetNetworkApplianceStaticRoutes200ResponseInner.md)

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


$apiInstance = new Meraki\Api\StaticRoutesApi(
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
    echo 'Exception when calling StaticRoutesApi->createNetworkSwitchStackRoutingStaticRoute: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\StaticRoutesApi(
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
    echo 'Exception when calling StaticRoutesApi->deleteDeviceSwitchRoutingStaticRoute: ', $e->getMessage(), PHP_EOL;
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

## `deleteNetworkApplianceStaticRoute()`

```php
deleteNetworkApplianceStaticRoute($network_id, $static_route_id)
```

Delete a static route from an MX or teleworker network

Delete a static route from an MX or teleworker network

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


$apiInstance = new Meraki\Api\StaticRoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$static_route_id = 'static_route_id_example'; // string | Static route ID

try {
    $apiInstance->deleteNetworkApplianceStaticRoute($network_id, $static_route_id);
} catch (Exception $e) {
    echo 'Exception when calling StaticRoutesApi->deleteNetworkApplianceStaticRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
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


$apiInstance = new Meraki\Api\StaticRoutesApi(
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
    echo 'Exception when calling StaticRoutesApi->deleteNetworkSwitchStackRoutingStaticRoute: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\StaticRoutesApi(
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
    echo 'Exception when calling StaticRoutesApi->getDeviceSwitchRoutingStaticRoute: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\StaticRoutesApi(
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
    echo 'Exception when calling StaticRoutesApi->getDeviceSwitchRoutingStaticRoutes: ', $e->getMessage(), PHP_EOL;
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

## `getNetworkApplianceStaticRoute()`

```php
getNetworkApplianceStaticRoute($network_id, $static_route_id): \Meraki\Model\GetNetworkApplianceStaticRoutes200ResponseInner
```

Return a static route for an MX or teleworker network

Return a static route for an MX or teleworker network

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


$apiInstance = new Meraki\Api\StaticRoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$static_route_id = 'static_route_id_example'; // string | Static route ID

try {
    $result = $apiInstance->getNetworkApplianceStaticRoute($network_id, $static_route_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticRoutesApi->getNetworkApplianceStaticRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **static_route_id** | **string**| Static route ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceStaticRoutes200ResponseInner**](../Model/GetNetworkApplianceStaticRoutes200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceStaticRoutes()`

```php
getNetworkApplianceStaticRoutes($network_id): \Meraki\Model\GetNetworkApplianceStaticRoutes200ResponseInner[]
```

List the static routes for an MX or teleworker network

List the static routes for an MX or teleworker network

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


$apiInstance = new Meraki\Api\StaticRoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceStaticRoutes($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticRoutesApi->getNetworkApplianceStaticRoutes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceStaticRoutes200ResponseInner[]**](../Model/GetNetworkApplianceStaticRoutes200ResponseInner.md)

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


$apiInstance = new Meraki\Api\StaticRoutesApi(
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
    echo 'Exception when calling StaticRoutesApi->getNetworkSwitchStackRoutingStaticRoute: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\StaticRoutesApi(
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
    echo 'Exception when calling StaticRoutesApi->getNetworkSwitchStackRoutingStaticRoutes: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\StaticRoutesApi(
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
    echo 'Exception when calling StaticRoutesApi->updateDeviceSwitchRoutingStaticRoute: ', $e->getMessage(), PHP_EOL;
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

## `updateNetworkApplianceStaticRoute()`

```php
updateNetworkApplianceStaticRoute($network_id, $static_route_id, $update_network_appliance_static_route_request): \Meraki\Model\GetNetworkApplianceStaticRoutes200ResponseInner
```

Update a static route for an MX or teleworker network

Update a static route for an MX or teleworker network

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


$apiInstance = new Meraki\Api\StaticRoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$static_route_id = 'static_route_id_example'; // string | Static route ID
$update_network_appliance_static_route_request = new \Meraki\Model\UpdateNetworkApplianceStaticRouteRequest(); // \Meraki\Model\UpdateNetworkApplianceStaticRouteRequest

try {
    $result = $apiInstance->updateNetworkApplianceStaticRoute($network_id, $static_route_id, $update_network_appliance_static_route_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticRoutesApi->updateNetworkApplianceStaticRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **static_route_id** | **string**| Static route ID | |
| **update_network_appliance_static_route_request** | [**\Meraki\Model\UpdateNetworkApplianceStaticRouteRequest**](../Model/UpdateNetworkApplianceStaticRouteRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceStaticRoutes200ResponseInner**](../Model/GetNetworkApplianceStaticRoutes200ResponseInner.md)

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


$apiInstance = new Meraki\Api\StaticRoutesApi(
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
    echo 'Exception when calling StaticRoutesApi->updateNetworkSwitchStackRoutingStaticRoute: ', $e->getMessage(), PHP_EOL;
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
