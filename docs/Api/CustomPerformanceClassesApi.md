# Meraki\CustomPerformanceClassesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkApplianceTrafficShapingCustomPerformanceClass()**](CustomPerformanceClassesApi.md#createNetworkApplianceTrafficShapingCustomPerformanceClass) | **POST** /networks/{networkId}/appliance/trafficShaping/customPerformanceClasses | Add a custom performance class for an MX network |
| [**deleteNetworkApplianceTrafficShapingCustomPerformanceClass()**](CustomPerformanceClassesApi.md#deleteNetworkApplianceTrafficShapingCustomPerformanceClass) | **DELETE** /networks/{networkId}/appliance/trafficShaping/customPerformanceClasses/{customPerformanceClassId} | Delete a custom performance class from an MX network |
| [**getNetworkApplianceTrafficShapingCustomPerformanceClass()**](CustomPerformanceClassesApi.md#getNetworkApplianceTrafficShapingCustomPerformanceClass) | **GET** /networks/{networkId}/appliance/trafficShaping/customPerformanceClasses/{customPerformanceClassId} | Return a custom performance class for an MX network |
| [**getNetworkApplianceTrafficShapingCustomPerformanceClasses()**](CustomPerformanceClassesApi.md#getNetworkApplianceTrafficShapingCustomPerformanceClasses) | **GET** /networks/{networkId}/appliance/trafficShaping/customPerformanceClasses | List all custom performance classes for an MX network |
| [**updateNetworkApplianceTrafficShapingCustomPerformanceClass()**](CustomPerformanceClassesApi.md#updateNetworkApplianceTrafficShapingCustomPerformanceClass) | **PUT** /networks/{networkId}/appliance/trafficShaping/customPerformanceClasses/{customPerformanceClassId} | Update a custom performance class for an MX network |


## `createNetworkApplianceTrafficShapingCustomPerformanceClass()`

```php
createNetworkApplianceTrafficShapingCustomPerformanceClass($network_id, $create_network_appliance_traffic_shaping_custom_performance_class_request): \Meraki\Model\GetNetworkApplianceTrafficShapingCustomPerformanceClasses200ResponseInner
```

Add a custom performance class for an MX network

Add a custom performance class for an MX network

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


$apiInstance = new Meraki\Api\CustomPerformanceClassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_appliance_traffic_shaping_custom_performance_class_request = new \Meraki\Model\CreateNetworkApplianceTrafficShapingCustomPerformanceClassRequest(); // \Meraki\Model\CreateNetworkApplianceTrafficShapingCustomPerformanceClassRequest

try {
    $result = $apiInstance->createNetworkApplianceTrafficShapingCustomPerformanceClass($network_id, $create_network_appliance_traffic_shaping_custom_performance_class_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomPerformanceClassesApi->createNetworkApplianceTrafficShapingCustomPerformanceClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_appliance_traffic_shaping_custom_performance_class_request** | [**\Meraki\Model\CreateNetworkApplianceTrafficShapingCustomPerformanceClassRequest**](../Model/CreateNetworkApplianceTrafficShapingCustomPerformanceClassRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkApplianceTrafficShapingCustomPerformanceClasses200ResponseInner**](../Model/GetNetworkApplianceTrafficShapingCustomPerformanceClasses200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkApplianceTrafficShapingCustomPerformanceClass()`

```php
deleteNetworkApplianceTrafficShapingCustomPerformanceClass($network_id, $custom_performance_class_id)
```

Delete a custom performance class from an MX network

Delete a custom performance class from an MX network

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


$apiInstance = new Meraki\Api\CustomPerformanceClassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$custom_performance_class_id = 'custom_performance_class_id_example'; // string | Custom performance class ID

try {
    $apiInstance->deleteNetworkApplianceTrafficShapingCustomPerformanceClass($network_id, $custom_performance_class_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomPerformanceClassesApi->deleteNetworkApplianceTrafficShapingCustomPerformanceClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **custom_performance_class_id** | **string**| Custom performance class ID | |

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

## `getNetworkApplianceTrafficShapingCustomPerformanceClass()`

```php
getNetworkApplianceTrafficShapingCustomPerformanceClass($network_id, $custom_performance_class_id): \Meraki\Model\GetNetworkApplianceTrafficShapingCustomPerformanceClasses200ResponseInner
```

Return a custom performance class for an MX network

Return a custom performance class for an MX network

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


$apiInstance = new Meraki\Api\CustomPerformanceClassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$custom_performance_class_id = 'custom_performance_class_id_example'; // string | Custom performance class ID

try {
    $result = $apiInstance->getNetworkApplianceTrafficShapingCustomPerformanceClass($network_id, $custom_performance_class_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomPerformanceClassesApi->getNetworkApplianceTrafficShapingCustomPerformanceClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **custom_performance_class_id** | **string**| Custom performance class ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceTrafficShapingCustomPerformanceClasses200ResponseInner**](../Model/GetNetworkApplianceTrafficShapingCustomPerformanceClasses200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceTrafficShapingCustomPerformanceClasses()`

```php
getNetworkApplianceTrafficShapingCustomPerformanceClasses($network_id): \Meraki\Model\GetNetworkApplianceTrafficShapingCustomPerformanceClasses200ResponseInner[]
```

List all custom performance classes for an MX network

List all custom performance classes for an MX network

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


$apiInstance = new Meraki\Api\CustomPerformanceClassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceTrafficShapingCustomPerformanceClasses($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomPerformanceClassesApi->getNetworkApplianceTrafficShapingCustomPerformanceClasses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceTrafficShapingCustomPerformanceClasses200ResponseInner[]**](../Model/GetNetworkApplianceTrafficShapingCustomPerformanceClasses200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceTrafficShapingCustomPerformanceClass()`

```php
updateNetworkApplianceTrafficShapingCustomPerformanceClass($network_id, $custom_performance_class_id, $update_network_appliance_traffic_shaping_custom_performance_class_request): \Meraki\Model\GetNetworkApplianceTrafficShapingCustomPerformanceClasses200ResponseInner
```

Update a custom performance class for an MX network

Update a custom performance class for an MX network

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


$apiInstance = new Meraki\Api\CustomPerformanceClassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$custom_performance_class_id = 'custom_performance_class_id_example'; // string | Custom performance class ID
$update_network_appliance_traffic_shaping_custom_performance_class_request = new \Meraki\Model\UpdateNetworkApplianceTrafficShapingCustomPerformanceClassRequest(); // \Meraki\Model\UpdateNetworkApplianceTrafficShapingCustomPerformanceClassRequest

try {
    $result = $apiInstance->updateNetworkApplianceTrafficShapingCustomPerformanceClass($network_id, $custom_performance_class_id, $update_network_appliance_traffic_shaping_custom_performance_class_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomPerformanceClassesApi->updateNetworkApplianceTrafficShapingCustomPerformanceClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **custom_performance_class_id** | **string**| Custom performance class ID | |
| **update_network_appliance_traffic_shaping_custom_performance_class_request** | [**\Meraki\Model\UpdateNetworkApplianceTrafficShapingCustomPerformanceClassRequest**](../Model/UpdateNetworkApplianceTrafficShapingCustomPerformanceClassRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceTrafficShapingCustomPerformanceClasses200ResponseInner**](../Model/GetNetworkApplianceTrafficShapingCustomPerformanceClasses200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
