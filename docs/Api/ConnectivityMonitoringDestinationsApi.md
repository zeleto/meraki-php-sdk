# Meraki\ConnectivityMonitoringDestinationsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkApplianceConnectivityMonitoringDestinations()**](ConnectivityMonitoringDestinationsApi.md#getNetworkApplianceConnectivityMonitoringDestinations) | **GET** /networks/{networkId}/appliance/connectivityMonitoringDestinations | Return the connectivity testing destinations for an MX network |
| [**getNetworkCellularGatewayConnectivityMonitoringDestinations()**](ConnectivityMonitoringDestinationsApi.md#getNetworkCellularGatewayConnectivityMonitoringDestinations) | **GET** /networks/{networkId}/cellularGateway/connectivityMonitoringDestinations | Return the connectivity testing destinations for an MG network |
| [**updateNetworkApplianceConnectivityMonitoringDestinations()**](ConnectivityMonitoringDestinationsApi.md#updateNetworkApplianceConnectivityMonitoringDestinations) | **PUT** /networks/{networkId}/appliance/connectivityMonitoringDestinations | Update the connectivity testing destinations for an MX network |
| [**updateNetworkCellularGatewayConnectivityMonitoringDestinations()**](ConnectivityMonitoringDestinationsApi.md#updateNetworkCellularGatewayConnectivityMonitoringDestinations) | **PUT** /networks/{networkId}/cellularGateway/connectivityMonitoringDestinations | Update the connectivity testing destinations for an MG network |


## `getNetworkApplianceConnectivityMonitoringDestinations()`

```php
getNetworkApplianceConnectivityMonitoringDestinations($network_id): \Meraki\Model\GetNetworkApplianceConnectivityMonitoringDestinations200Response
```

Return the connectivity testing destinations for an MX network

Return the connectivity testing destinations for an MX network

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


$apiInstance = new Meraki\Api\ConnectivityMonitoringDestinationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceConnectivityMonitoringDestinations($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectivityMonitoringDestinationsApi->getNetworkApplianceConnectivityMonitoringDestinations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceConnectivityMonitoringDestinations200Response**](../Model/GetNetworkApplianceConnectivityMonitoringDestinations200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkCellularGatewayConnectivityMonitoringDestinations()`

```php
getNetworkCellularGatewayConnectivityMonitoringDestinations($network_id): \Meraki\Model\GetNetworkApplianceConnectivityMonitoringDestinations200Response
```

Return the connectivity testing destinations for an MG network

Return the connectivity testing destinations for an MG network

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


$apiInstance = new Meraki\Api\ConnectivityMonitoringDestinationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkCellularGatewayConnectivityMonitoringDestinations($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectivityMonitoringDestinationsApi->getNetworkCellularGatewayConnectivityMonitoringDestinations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceConnectivityMonitoringDestinations200Response**](../Model/GetNetworkApplianceConnectivityMonitoringDestinations200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceConnectivityMonitoringDestinations()`

```php
updateNetworkApplianceConnectivityMonitoringDestinations($network_id, $update_network_appliance_connectivity_monitoring_destinations_request): \Meraki\Model\GetNetworkApplianceConnectivityMonitoringDestinations200Response
```

Update the connectivity testing destinations for an MX network

Update the connectivity testing destinations for an MX network

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


$apiInstance = new Meraki\Api\ConnectivityMonitoringDestinationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_connectivity_monitoring_destinations_request = new \Meraki\Model\UpdateNetworkApplianceConnectivityMonitoringDestinationsRequest(); // \Meraki\Model\UpdateNetworkApplianceConnectivityMonitoringDestinationsRequest

try {
    $result = $apiInstance->updateNetworkApplianceConnectivityMonitoringDestinations($network_id, $update_network_appliance_connectivity_monitoring_destinations_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectivityMonitoringDestinationsApi->updateNetworkApplianceConnectivityMonitoringDestinations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_connectivity_monitoring_destinations_request** | [**\Meraki\Model\UpdateNetworkApplianceConnectivityMonitoringDestinationsRequest**](../Model/UpdateNetworkApplianceConnectivityMonitoringDestinationsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceConnectivityMonitoringDestinations200Response**](../Model/GetNetworkApplianceConnectivityMonitoringDestinations200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkCellularGatewayConnectivityMonitoringDestinations()`

```php
updateNetworkCellularGatewayConnectivityMonitoringDestinations($network_id, $update_network_cellular_gateway_connectivity_monitoring_destinations_request): \Meraki\Model\GetNetworkApplianceConnectivityMonitoringDestinations200Response
```

Update the connectivity testing destinations for an MG network

Update the connectivity testing destinations for an MG network

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


$apiInstance = new Meraki\Api\ConnectivityMonitoringDestinationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_cellular_gateway_connectivity_monitoring_destinations_request = new \Meraki\Model\UpdateNetworkCellularGatewayConnectivityMonitoringDestinationsRequest(); // \Meraki\Model\UpdateNetworkCellularGatewayConnectivityMonitoringDestinationsRequest

try {
    $result = $apiInstance->updateNetworkCellularGatewayConnectivityMonitoringDestinations($network_id, $update_network_cellular_gateway_connectivity_monitoring_destinations_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectivityMonitoringDestinationsApi->updateNetworkCellularGatewayConnectivityMonitoringDestinations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_cellular_gateway_connectivity_monitoring_destinations_request** | [**\Meraki\Model\UpdateNetworkCellularGatewayConnectivityMonitoringDestinationsRequest**](../Model/UpdateNetworkCellularGatewayConnectivityMonitoringDestinationsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceConnectivityMonitoringDestinations200Response**](../Model/GetNetworkApplianceConnectivityMonitoringDestinations200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
