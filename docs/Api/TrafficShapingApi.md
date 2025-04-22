# Meraki\TrafficShapingApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkApplianceTrafficShapingCustomPerformanceClass()**](TrafficShapingApi.md#createNetworkApplianceTrafficShapingCustomPerformanceClass) | **POST** /networks/{networkId}/appliance/trafficShaping/customPerformanceClasses | Add a custom performance class for an MX network |
| [**deleteNetworkApplianceTrafficShapingCustomPerformanceClass()**](TrafficShapingApi.md#deleteNetworkApplianceTrafficShapingCustomPerformanceClass) | **DELETE** /networks/{networkId}/appliance/trafficShaping/customPerformanceClasses/{customPerformanceClassId} | Delete a custom performance class from an MX network |
| [**getNetworkApplianceTrafficShaping()**](TrafficShapingApi.md#getNetworkApplianceTrafficShaping) | **GET** /networks/{networkId}/appliance/trafficShaping | Display the traffic shaping settings for an MX network |
| [**getNetworkApplianceTrafficShapingCustomPerformanceClass()**](TrafficShapingApi.md#getNetworkApplianceTrafficShapingCustomPerformanceClass) | **GET** /networks/{networkId}/appliance/trafficShaping/customPerformanceClasses/{customPerformanceClassId} | Return a custom performance class for an MX network |
| [**getNetworkApplianceTrafficShapingCustomPerformanceClasses()**](TrafficShapingApi.md#getNetworkApplianceTrafficShapingCustomPerformanceClasses) | **GET** /networks/{networkId}/appliance/trafficShaping/customPerformanceClasses | List all custom performance classes for an MX network |
| [**getNetworkApplianceTrafficShapingRules()**](TrafficShapingApi.md#getNetworkApplianceTrafficShapingRules) | **GET** /networks/{networkId}/appliance/trafficShaping/rules | Display the traffic shaping settings rules for an MX network |
| [**getNetworkApplianceTrafficShapingUplinkBandwidth()**](TrafficShapingApi.md#getNetworkApplianceTrafficShapingUplinkBandwidth) | **GET** /networks/{networkId}/appliance/trafficShaping/uplinkBandwidth | Returns the uplink bandwidth limits for your MX network |
| [**getNetworkApplianceTrafficShapingUplinkSelection()**](TrafficShapingApi.md#getNetworkApplianceTrafficShapingUplinkSelection) | **GET** /networks/{networkId}/appliance/trafficShaping/uplinkSelection | Show uplink selection settings for an MX network |
| [**getNetworkTrafficShapingApplicationCategories()**](TrafficShapingApi.md#getNetworkTrafficShapingApplicationCategories) | **GET** /networks/{networkId}/trafficShaping/applicationCategories | Returns the application categories for traffic shaping rules |
| [**getNetworkTrafficShapingDscpTaggingOptions()**](TrafficShapingApi.md#getNetworkTrafficShapingDscpTaggingOptions) | **GET** /networks/{networkId}/trafficShaping/dscpTaggingOptions | Returns the available DSCP tagging options for your traffic shaping rules. |
| [**getNetworkWirelessSsidTrafficShapingRules()**](TrafficShapingApi.md#getNetworkWirelessSsidTrafficShapingRules) | **GET** /networks/{networkId}/wireless/ssids/{number}/trafficShaping/rules | Display the traffic shaping settings for a SSID on an MR network |
| [**getOrganizationApplianceTrafficShapingVpnExclusionsByNetwork()**](TrafficShapingApi.md#getOrganizationApplianceTrafficShapingVpnExclusionsByNetwork) | **GET** /organizations/{organizationId}/appliance/trafficShaping/vpnExclusions/byNetwork | Display VPN exclusion rules for MX networks. |
| [**updateNetworkApplianceTrafficShaping()**](TrafficShapingApi.md#updateNetworkApplianceTrafficShaping) | **PUT** /networks/{networkId}/appliance/trafficShaping | Update the traffic shaping settings for an MX network |
| [**updateNetworkApplianceTrafficShapingCustomPerformanceClass()**](TrafficShapingApi.md#updateNetworkApplianceTrafficShapingCustomPerformanceClass) | **PUT** /networks/{networkId}/appliance/trafficShaping/customPerformanceClasses/{customPerformanceClassId} | Update a custom performance class for an MX network |
| [**updateNetworkApplianceTrafficShapingRules()**](TrafficShapingApi.md#updateNetworkApplianceTrafficShapingRules) | **PUT** /networks/{networkId}/appliance/trafficShaping/rules | Update the traffic shaping settings rules for an MX network |
| [**updateNetworkApplianceTrafficShapingUplinkBandwidth()**](TrafficShapingApi.md#updateNetworkApplianceTrafficShapingUplinkBandwidth) | **PUT** /networks/{networkId}/appliance/trafficShaping/uplinkBandwidth | Updates the uplink bandwidth settings for your MX network. |
| [**updateNetworkApplianceTrafficShapingUplinkSelection()**](TrafficShapingApi.md#updateNetworkApplianceTrafficShapingUplinkSelection) | **PUT** /networks/{networkId}/appliance/trafficShaping/uplinkSelection | Update uplink selection settings for an MX network |
| [**updateNetworkApplianceTrafficShapingVpnExclusions()**](TrafficShapingApi.md#updateNetworkApplianceTrafficShapingVpnExclusions) | **PUT** /networks/{networkId}/appliance/trafficShaping/vpnExclusions | Update VPN exclusion rules for an MX network. |
| [**updateNetworkWirelessSsidTrafficShapingRules()**](TrafficShapingApi.md#updateNetworkWirelessSsidTrafficShapingRules) | **PUT** /networks/{networkId}/wireless/ssids/{number}/trafficShaping/rules | Update the traffic shaping rules for an SSID on an MR network. |


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


$apiInstance = new Meraki\Api\TrafficShapingApi(
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
    echo 'Exception when calling TrafficShapingApi->createNetworkApplianceTrafficShapingCustomPerformanceClass: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\TrafficShapingApi(
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
    echo 'Exception when calling TrafficShapingApi->deleteNetworkApplianceTrafficShapingCustomPerformanceClass: ', $e->getMessage(), PHP_EOL;
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

## `getNetworkApplianceTrafficShaping()`

```php
getNetworkApplianceTrafficShaping($network_id): object
```

Display the traffic shaping settings for an MX network

Display the traffic shaping settings for an MX network

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


$apiInstance = new Meraki\Api\TrafficShapingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceTrafficShaping($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrafficShapingApi->getNetworkApplianceTrafficShaping: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\TrafficShapingApi(
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
    echo 'Exception when calling TrafficShapingApi->getNetworkApplianceTrafficShapingCustomPerformanceClass: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\TrafficShapingApi(
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
    echo 'Exception when calling TrafficShapingApi->getNetworkApplianceTrafficShapingCustomPerformanceClasses: ', $e->getMessage(), PHP_EOL;
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

## `getNetworkApplianceTrafficShapingRules()`

```php
getNetworkApplianceTrafficShapingRules($network_id): object
```

Display the traffic shaping settings rules for an MX network

Display the traffic shaping settings rules for an MX network

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


$apiInstance = new Meraki\Api\TrafficShapingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceTrafficShapingRules($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrafficShapingApi->getNetworkApplianceTrafficShapingRules: ', $e->getMessage(), PHP_EOL;
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

## `getNetworkApplianceTrafficShapingUplinkBandwidth()`

```php
getNetworkApplianceTrafficShapingUplinkBandwidth($network_id): \Meraki\Model\GetNetworkApplianceTrafficShapingUplinkBandwidth200Response
```

Returns the uplink bandwidth limits for your MX network

Returns the uplink bandwidth limits for your MX network. This may not reflect the affected device's hardware capabilities.  For more information on your device's hardware capabilities, please consult our MX Family Datasheet - [https://meraki.cisco.com/product-collateral/mx-family-datasheet/?file]

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


$apiInstance = new Meraki\Api\TrafficShapingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceTrafficShapingUplinkBandwidth($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrafficShapingApi->getNetworkApplianceTrafficShapingUplinkBandwidth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceTrafficShapingUplinkBandwidth200Response**](../Model/GetNetworkApplianceTrafficShapingUplinkBandwidth200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceTrafficShapingUplinkSelection()`

```php
getNetworkApplianceTrafficShapingUplinkSelection($network_id): \Meraki\Model\GetNetworkApplianceTrafficShapingUplinkSelection200Response
```

Show uplink selection settings for an MX network

Show uplink selection settings for an MX network

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


$apiInstance = new Meraki\Api\TrafficShapingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceTrafficShapingUplinkSelection($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrafficShapingApi->getNetworkApplianceTrafficShapingUplinkSelection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceTrafficShapingUplinkSelection200Response**](../Model/GetNetworkApplianceTrafficShapingUplinkSelection200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkTrafficShapingApplicationCategories()`

```php
getNetworkTrafficShapingApplicationCategories($network_id): object
```

Returns the application categories for traffic shaping rules

Returns the application categories for traffic shaping rules. Only applicable on networks with a security applicance.

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


$apiInstance = new Meraki\Api\TrafficShapingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkTrafficShapingApplicationCategories($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrafficShapingApi->getNetworkTrafficShapingApplicationCategories: ', $e->getMessage(), PHP_EOL;
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

## `getNetworkTrafficShapingDscpTaggingOptions()`

```php
getNetworkTrafficShapingDscpTaggingOptions($network_id): object[]
```

Returns the available DSCP tagging options for your traffic shaping rules.

Returns the available DSCP tagging options for your traffic shaping rules.

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


$apiInstance = new Meraki\Api\TrafficShapingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkTrafficShapingDscpTaggingOptions($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrafficShapingApi->getNetworkTrafficShapingDscpTaggingOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

**object[]**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSsidTrafficShapingRules()`

```php
getNetworkWirelessSsidTrafficShapingRules($network_id, $number): \Meraki\Model\GetNetworkWirelessSsidTrafficShapingRules200Response
```

Display the traffic shaping settings for a SSID on an MR network

Display the traffic shaping settings for a SSID on an MR network

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


$apiInstance = new Meraki\Api\TrafficShapingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidTrafficShapingRules($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrafficShapingApi->getNetworkWirelessSsidTrafficShapingRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidTrafficShapingRules200Response**](../Model/GetNetworkWirelessSsidTrafficShapingRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationApplianceTrafficShapingVpnExclusionsByNetwork()`

```php
getOrganizationApplianceTrafficShapingVpnExclusionsByNetwork($organization_id, $per_page, $starting_after, $ending_before, $network_ids): \Meraki\Model\GetOrganizationApplianceTrafficShapingVpnExclusionsByNetwork200Response
```

Display VPN exclusion rules for MX networks.

Display VPN exclusion rules for MX networks.

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


$apiInstance = new Meraki\Api\TrafficShapingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 50.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter the results by network IDs

try {
    $result = $apiInstance->getOrganizationApplianceTrafficShapingVpnExclusionsByNetwork($organization_id, $per_page, $starting_after, $ending_before, $network_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrafficShapingApi->getOrganizationApplianceTrafficShapingVpnExclusionsByNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 50. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the results by network IDs | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApplianceTrafficShapingVpnExclusionsByNetwork200Response**](../Model/GetOrganizationApplianceTrafficShapingVpnExclusionsByNetwork200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceTrafficShaping()`

```php
updateNetworkApplianceTrafficShaping($network_id, $update_network_appliance_traffic_shaping_request): object
```

Update the traffic shaping settings for an MX network

Update the traffic shaping settings for an MX network

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


$apiInstance = new Meraki\Api\TrafficShapingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_traffic_shaping_request = new \Meraki\Model\UpdateNetworkApplianceTrafficShapingRequest(); // \Meraki\Model\UpdateNetworkApplianceTrafficShapingRequest

try {
    $result = $apiInstance->updateNetworkApplianceTrafficShaping($network_id, $update_network_appliance_traffic_shaping_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrafficShapingApi->updateNetworkApplianceTrafficShaping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_traffic_shaping_request** | [**\Meraki\Model\UpdateNetworkApplianceTrafficShapingRequest**](../Model/UpdateNetworkApplianceTrafficShapingRequest.md)|  | [optional] |

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


$apiInstance = new Meraki\Api\TrafficShapingApi(
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
    echo 'Exception when calling TrafficShapingApi->updateNetworkApplianceTrafficShapingCustomPerformanceClass: ', $e->getMessage(), PHP_EOL;
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

## `updateNetworkApplianceTrafficShapingRules()`

```php
updateNetworkApplianceTrafficShapingRules($network_id, $update_network_appliance_traffic_shaping_rules_request): object
```

Update the traffic shaping settings rules for an MX network

Update the traffic shaping settings rules for an MX network

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


$apiInstance = new Meraki\Api\TrafficShapingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_traffic_shaping_rules_request = new \Meraki\Model\UpdateNetworkApplianceTrafficShapingRulesRequest(); // \Meraki\Model\UpdateNetworkApplianceTrafficShapingRulesRequest

try {
    $result = $apiInstance->updateNetworkApplianceTrafficShapingRules($network_id, $update_network_appliance_traffic_shaping_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrafficShapingApi->updateNetworkApplianceTrafficShapingRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_traffic_shaping_rules_request** | [**\Meraki\Model\UpdateNetworkApplianceTrafficShapingRulesRequest**](../Model/UpdateNetworkApplianceTrafficShapingRulesRequest.md)|  | [optional] |

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

## `updateNetworkApplianceTrafficShapingUplinkBandwidth()`

```php
updateNetworkApplianceTrafficShapingUplinkBandwidth($network_id, $update_network_appliance_traffic_shaping_uplink_bandwidth_request): object
```

Updates the uplink bandwidth settings for your MX network.

Updates the uplink bandwidth settings for your MX network.

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


$apiInstance = new Meraki\Api\TrafficShapingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_traffic_shaping_uplink_bandwidth_request = new \Meraki\Model\UpdateNetworkApplianceTrafficShapingUplinkBandwidthRequest(); // \Meraki\Model\UpdateNetworkApplianceTrafficShapingUplinkBandwidthRequest

try {
    $result = $apiInstance->updateNetworkApplianceTrafficShapingUplinkBandwidth($network_id, $update_network_appliance_traffic_shaping_uplink_bandwidth_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrafficShapingApi->updateNetworkApplianceTrafficShapingUplinkBandwidth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_traffic_shaping_uplink_bandwidth_request** | [**\Meraki\Model\UpdateNetworkApplianceTrafficShapingUplinkBandwidthRequest**](../Model/UpdateNetworkApplianceTrafficShapingUplinkBandwidthRequest.md)|  | [optional] |

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

## `updateNetworkApplianceTrafficShapingUplinkSelection()`

```php
updateNetworkApplianceTrafficShapingUplinkSelection($network_id, $update_network_appliance_traffic_shaping_uplink_selection_request): \Meraki\Model\GetNetworkApplianceTrafficShapingUplinkSelection200Response
```

Update uplink selection settings for an MX network

Update uplink selection settings for an MX network

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


$apiInstance = new Meraki\Api\TrafficShapingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_traffic_shaping_uplink_selection_request = new \Meraki\Model\UpdateNetworkApplianceTrafficShapingUplinkSelectionRequest(); // \Meraki\Model\UpdateNetworkApplianceTrafficShapingUplinkSelectionRequest

try {
    $result = $apiInstance->updateNetworkApplianceTrafficShapingUplinkSelection($network_id, $update_network_appliance_traffic_shaping_uplink_selection_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrafficShapingApi->updateNetworkApplianceTrafficShapingUplinkSelection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_traffic_shaping_uplink_selection_request** | [**\Meraki\Model\UpdateNetworkApplianceTrafficShapingUplinkSelectionRequest**](../Model/UpdateNetworkApplianceTrafficShapingUplinkSelectionRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceTrafficShapingUplinkSelection200Response**](../Model/GetNetworkApplianceTrafficShapingUplinkSelection200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceTrafficShapingVpnExclusions()`

```php
updateNetworkApplianceTrafficShapingVpnExclusions($network_id, $update_network_appliance_traffic_shaping_vpn_exclusions_request): \Meraki\Model\UpdateNetworkApplianceTrafficShapingVpnExclusions200Response
```

Update VPN exclusion rules for an MX network.

Update VPN exclusion rules for an MX network.

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


$apiInstance = new Meraki\Api\TrafficShapingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_traffic_shaping_vpn_exclusions_request = new \Meraki\Model\UpdateNetworkApplianceTrafficShapingVpnExclusionsRequest(); // \Meraki\Model\UpdateNetworkApplianceTrafficShapingVpnExclusionsRequest

try {
    $result = $apiInstance->updateNetworkApplianceTrafficShapingVpnExclusions($network_id, $update_network_appliance_traffic_shaping_vpn_exclusions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrafficShapingApi->updateNetworkApplianceTrafficShapingVpnExclusions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_traffic_shaping_vpn_exclusions_request** | [**\Meraki\Model\UpdateNetworkApplianceTrafficShapingVpnExclusionsRequest**](../Model/UpdateNetworkApplianceTrafficShapingVpnExclusionsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\UpdateNetworkApplianceTrafficShapingVpnExclusions200Response**](../Model/UpdateNetworkApplianceTrafficShapingVpnExclusions200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessSsidTrafficShapingRules()`

```php
updateNetworkWirelessSsidTrafficShapingRules($network_id, $number, $update_network_wireless_ssid_traffic_shaping_rules_request): \Meraki\Model\GetNetworkWirelessSsidTrafficShapingRules200Response
```

Update the traffic shaping rules for an SSID on an MR network.

Update the traffic shaping rules for an SSID on an MR network.

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


$apiInstance = new Meraki\Api\TrafficShapingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_traffic_shaping_rules_request = new \Meraki\Model\UpdateNetworkWirelessSsidTrafficShapingRulesRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidTrafficShapingRulesRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsidTrafficShapingRules($network_id, $number, $update_network_wireless_ssid_traffic_shaping_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrafficShapingApi->updateNetworkWirelessSsidTrafficShapingRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_traffic_shaping_rules_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidTrafficShapingRulesRequest**](../Model/UpdateNetworkWirelessSsidTrafficShapingRulesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidTrafficShapingRules200Response**](../Model/GetNetworkWirelessSsidTrafficShapingRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
