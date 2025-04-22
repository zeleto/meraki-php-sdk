# Meraki\NetflowApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkNetflow()**](NetflowApi.md#getNetworkNetflow) | **GET** /networks/{networkId}/netflow | Return the NetFlow traffic reporting settings for a network |
| [**updateNetworkNetflow()**](NetflowApi.md#updateNetworkNetflow) | **PUT** /networks/{networkId}/netflow | Update the NetFlow traffic reporting settings for a network |


## `getNetworkNetflow()`

```php
getNetworkNetflow($network_id): \Meraki\Model\GetNetworkNetflow200Response
```

Return the NetFlow traffic reporting settings for a network

Return the NetFlow traffic reporting settings for a network

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


$apiInstance = new Meraki\Api\NetflowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkNetflow($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetflowApi->getNetworkNetflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkNetflow200Response**](../Model/GetNetworkNetflow200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkNetflow()`

```php
updateNetworkNetflow($network_id, $update_network_netflow_request): \Meraki\Model\GetNetworkNetflow200Response
```

Update the NetFlow traffic reporting settings for a network

Update the NetFlow traffic reporting settings for a network

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


$apiInstance = new Meraki\Api\NetflowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_netflow_request = new \Meraki\Model\UpdateNetworkNetflowRequest(); // \Meraki\Model\UpdateNetworkNetflowRequest

try {
    $result = $apiInstance->updateNetworkNetflow($network_id, $update_network_netflow_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetflowApi->updateNetworkNetflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_netflow_request** | [**\Meraki\Model\UpdateNetworkNetflowRequest**](../Model/UpdateNetworkNetflowRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkNetflow200Response**](../Model/GetNetworkNetflow200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
