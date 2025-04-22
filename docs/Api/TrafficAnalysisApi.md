# Meraki\TrafficAnalysisApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkTrafficAnalysis()**](TrafficAnalysisApi.md#getNetworkTrafficAnalysis) | **GET** /networks/{networkId}/trafficAnalysis | Return the traffic analysis settings for a network |
| [**updateNetworkTrafficAnalysis()**](TrafficAnalysisApi.md#updateNetworkTrafficAnalysis) | **PUT** /networks/{networkId}/trafficAnalysis | Update the traffic analysis settings for a network |


## `getNetworkTrafficAnalysis()`

```php
getNetworkTrafficAnalysis($network_id): \Meraki\Model\GetNetworkTrafficAnalysis200Response
```

Return the traffic analysis settings for a network

Return the traffic analysis settings for a network

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


$apiInstance = new Meraki\Api\TrafficAnalysisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkTrafficAnalysis($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrafficAnalysisApi->getNetworkTrafficAnalysis: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkTrafficAnalysis200Response**](../Model/GetNetworkTrafficAnalysis200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkTrafficAnalysis()`

```php
updateNetworkTrafficAnalysis($network_id, $update_network_traffic_analysis_request): \Meraki\Model\GetNetworkTrafficAnalysis200Response
```

Update the traffic analysis settings for a network

Update the traffic analysis settings for a network

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


$apiInstance = new Meraki\Api\TrafficAnalysisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_traffic_analysis_request = new \Meraki\Model\UpdateNetworkTrafficAnalysisRequest(); // \Meraki\Model\UpdateNetworkTrafficAnalysisRequest

try {
    $result = $apiInstance->updateNetworkTrafficAnalysis($network_id, $update_network_traffic_analysis_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrafficAnalysisApi->updateNetworkTrafficAnalysis: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_traffic_analysis_request** | [**\Meraki\Model\UpdateNetworkTrafficAnalysisRequest**](../Model/UpdateNetworkTrafficAnalysisRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkTrafficAnalysis200Response**](../Model/GetNetworkTrafficAnalysis200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
