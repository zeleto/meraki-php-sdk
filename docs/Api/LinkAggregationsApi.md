# Meraki\LinkAggregationsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkSwitchLinkAggregation()**](LinkAggregationsApi.md#createNetworkSwitchLinkAggregation) | **POST** /networks/{networkId}/switch/linkAggregations | Create a link aggregation group |
| [**deleteNetworkSwitchLinkAggregation()**](LinkAggregationsApi.md#deleteNetworkSwitchLinkAggregation) | **DELETE** /networks/{networkId}/switch/linkAggregations/{linkAggregationId} | Split a link aggregation group into separate ports |
| [**getNetworkSwitchLinkAggregations()**](LinkAggregationsApi.md#getNetworkSwitchLinkAggregations) | **GET** /networks/{networkId}/switch/linkAggregations | List link aggregation groups |
| [**updateNetworkSwitchLinkAggregation()**](LinkAggregationsApi.md#updateNetworkSwitchLinkAggregation) | **PUT** /networks/{networkId}/switch/linkAggregations/{linkAggregationId} | Update a link aggregation group |


## `createNetworkSwitchLinkAggregation()`

```php
createNetworkSwitchLinkAggregation($network_id, $create_network_switch_link_aggregation_request): \Meraki\Model\GetNetworkSwitchLinkAggregations200ResponseInner
```

Create a link aggregation group

Create a link aggregation group

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


$apiInstance = new Meraki\Api\LinkAggregationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_switch_link_aggregation_request = new \Meraki\Model\CreateNetworkSwitchLinkAggregationRequest(); // \Meraki\Model\CreateNetworkSwitchLinkAggregationRequest

try {
    $result = $apiInstance->createNetworkSwitchLinkAggregation($network_id, $create_network_switch_link_aggregation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkAggregationsApi->createNetworkSwitchLinkAggregation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_switch_link_aggregation_request** | [**\Meraki\Model\CreateNetworkSwitchLinkAggregationRequest**](../Model/CreateNetworkSwitchLinkAggregationRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchLinkAggregations200ResponseInner**](../Model/GetNetworkSwitchLinkAggregations200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkSwitchLinkAggregation()`

```php
deleteNetworkSwitchLinkAggregation($network_id, $link_aggregation_id)
```

Split a link aggregation group into separate ports

Split a link aggregation group into separate ports

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


$apiInstance = new Meraki\Api\LinkAggregationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$link_aggregation_id = 'link_aggregation_id_example'; // string | Link aggregation ID

try {
    $apiInstance->deleteNetworkSwitchLinkAggregation($network_id, $link_aggregation_id);
} catch (Exception $e) {
    echo 'Exception when calling LinkAggregationsApi->deleteNetworkSwitchLinkAggregation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **link_aggregation_id** | **string**| Link aggregation ID | |

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

## `getNetworkSwitchLinkAggregations()`

```php
getNetworkSwitchLinkAggregations($network_id): \Meraki\Model\GetNetworkSwitchLinkAggregations200ResponseInner[]
```

List link aggregation groups

List link aggregation groups

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


$apiInstance = new Meraki\Api\LinkAggregationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSwitchLinkAggregations($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkAggregationsApi->getNetworkSwitchLinkAggregations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchLinkAggregations200ResponseInner[]**](../Model/GetNetworkSwitchLinkAggregations200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchLinkAggregation()`

```php
updateNetworkSwitchLinkAggregation($network_id, $link_aggregation_id, $update_network_switch_link_aggregation_request): \Meraki\Model\GetNetworkSwitchLinkAggregations200ResponseInner
```

Update a link aggregation group

Update a link aggregation group

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


$apiInstance = new Meraki\Api\LinkAggregationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$link_aggregation_id = 'link_aggregation_id_example'; // string | Link aggregation ID
$update_network_switch_link_aggregation_request = new \Meraki\Model\UpdateNetworkSwitchLinkAggregationRequest(); // \Meraki\Model\UpdateNetworkSwitchLinkAggregationRequest

try {
    $result = $apiInstance->updateNetworkSwitchLinkAggregation($network_id, $link_aggregation_id, $update_network_switch_link_aggregation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkAggregationsApi->updateNetworkSwitchLinkAggregation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **link_aggregation_id** | **string**| Link aggregation ID | |
| **update_network_switch_link_aggregation_request** | [**\Meraki\Model\UpdateNetworkSwitchLinkAggregationRequest**](../Model/UpdateNetworkSwitchLinkAggregationRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchLinkAggregations200ResponseInner**](../Model/GetNetworkSwitchLinkAggregations200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
