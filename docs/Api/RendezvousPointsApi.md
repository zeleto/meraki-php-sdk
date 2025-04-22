# Meraki\RendezvousPointsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkSwitchRoutingMulticastRendezvousPoint()**](RendezvousPointsApi.md#createNetworkSwitchRoutingMulticastRendezvousPoint) | **POST** /networks/{networkId}/switch/routing/multicast/rendezvousPoints | Create a multicast rendezvous point |
| [**deleteNetworkSwitchRoutingMulticastRendezvousPoint()**](RendezvousPointsApi.md#deleteNetworkSwitchRoutingMulticastRendezvousPoint) | **DELETE** /networks/{networkId}/switch/routing/multicast/rendezvousPoints/{rendezvousPointId} | Delete a multicast rendezvous point |
| [**getNetworkSwitchRoutingMulticastRendezvousPoint()**](RendezvousPointsApi.md#getNetworkSwitchRoutingMulticastRendezvousPoint) | **GET** /networks/{networkId}/switch/routing/multicast/rendezvousPoints/{rendezvousPointId} | Return a multicast rendezvous point |
| [**getNetworkSwitchRoutingMulticastRendezvousPoints()**](RendezvousPointsApi.md#getNetworkSwitchRoutingMulticastRendezvousPoints) | **GET** /networks/{networkId}/switch/routing/multicast/rendezvousPoints | List multicast rendezvous points |
| [**updateNetworkSwitchRoutingMulticastRendezvousPoint()**](RendezvousPointsApi.md#updateNetworkSwitchRoutingMulticastRendezvousPoint) | **PUT** /networks/{networkId}/switch/routing/multicast/rendezvousPoints/{rendezvousPointId} | Update a multicast rendezvous point |


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


$apiInstance = new Meraki\Api\RendezvousPointsApi(
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
    echo 'Exception when calling RendezvousPointsApi->createNetworkSwitchRoutingMulticastRendezvousPoint: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\RendezvousPointsApi(
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
    echo 'Exception when calling RendezvousPointsApi->deleteNetworkSwitchRoutingMulticastRendezvousPoint: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\RendezvousPointsApi(
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
    echo 'Exception when calling RendezvousPointsApi->getNetworkSwitchRoutingMulticastRendezvousPoint: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\RendezvousPointsApi(
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
    echo 'Exception when calling RendezvousPointsApi->getNetworkSwitchRoutingMulticastRendezvousPoints: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\RendezvousPointsApi(
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
    echo 'Exception when calling RendezvousPointsApi->updateNetworkSwitchRoutingMulticastRendezvousPoint: ', $e->getMessage(), PHP_EOL;
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
