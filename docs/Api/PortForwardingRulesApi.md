# Meraki\PortForwardingRulesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDeviceCellularGatewayPortForwardingRules()**](PortForwardingRulesApi.md#getDeviceCellularGatewayPortForwardingRules) | **GET** /devices/{serial}/cellularGateway/portForwardingRules | Returns the port forwarding rules for a single MG. |
| [**getNetworkApplianceFirewallPortForwardingRules()**](PortForwardingRulesApi.md#getNetworkApplianceFirewallPortForwardingRules) | **GET** /networks/{networkId}/appliance/firewall/portForwardingRules | Return the port forwarding rules for an MX network |
| [**updateDeviceCellularGatewayPortForwardingRules()**](PortForwardingRulesApi.md#updateDeviceCellularGatewayPortForwardingRules) | **PUT** /devices/{serial}/cellularGateway/portForwardingRules | Updates the port forwarding rules for a single MG. |
| [**updateNetworkApplianceFirewallPortForwardingRules()**](PortForwardingRulesApi.md#updateNetworkApplianceFirewallPortForwardingRules) | **PUT** /networks/{networkId}/appliance/firewall/portForwardingRules | Update the port forwarding rules for an MX network |


## `getDeviceCellularGatewayPortForwardingRules()`

```php
getDeviceCellularGatewayPortForwardingRules($serial): \Meraki\Model\GetDeviceCellularGatewayPortForwardingRules200Response
```

Returns the port forwarding rules for a single MG.

Returns the port forwarding rules for a single MG.

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


$apiInstance = new Meraki\Api\PortForwardingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceCellularGatewayPortForwardingRules($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortForwardingRulesApi->getDeviceCellularGatewayPortForwardingRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceCellularGatewayPortForwardingRules200Response**](../Model/GetDeviceCellularGatewayPortForwardingRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceFirewallPortForwardingRules()`

```php
getNetworkApplianceFirewallPortForwardingRules($network_id): \Meraki\Model\GetNetworkApplianceFirewallPortForwardingRules200Response
```

Return the port forwarding rules for an MX network

Return the port forwarding rules for an MX network

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


$apiInstance = new Meraki\Api\PortForwardingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceFirewallPortForwardingRules($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortForwardingRulesApi->getNetworkApplianceFirewallPortForwardingRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallPortForwardingRules200Response**](../Model/GetNetworkApplianceFirewallPortForwardingRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceCellularGatewayPortForwardingRules()`

```php
updateDeviceCellularGatewayPortForwardingRules($serial, $update_device_cellular_gateway_port_forwarding_rules_request): \Meraki\Model\GetDeviceCellularGatewayPortForwardingRules200Response
```

Updates the port forwarding rules for a single MG.

Updates the port forwarding rules for a single MG.

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


$apiInstance = new Meraki\Api\PortForwardingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_cellular_gateway_port_forwarding_rules_request = new \Meraki\Model\UpdateDeviceCellularGatewayPortForwardingRulesRequest(); // \Meraki\Model\UpdateDeviceCellularGatewayPortForwardingRulesRequest

try {
    $result = $apiInstance->updateDeviceCellularGatewayPortForwardingRules($serial, $update_device_cellular_gateway_port_forwarding_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortForwardingRulesApi->updateDeviceCellularGatewayPortForwardingRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_cellular_gateway_port_forwarding_rules_request** | [**\Meraki\Model\UpdateDeviceCellularGatewayPortForwardingRulesRequest**](../Model/UpdateDeviceCellularGatewayPortForwardingRulesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceCellularGatewayPortForwardingRules200Response**](../Model/GetDeviceCellularGatewayPortForwardingRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceFirewallPortForwardingRules()`

```php
updateNetworkApplianceFirewallPortForwardingRules($network_id, $update_network_appliance_firewall_port_forwarding_rules_request): \Meraki\Model\GetNetworkApplianceFirewallPortForwardingRules200Response
```

Update the port forwarding rules for an MX network

Update the port forwarding rules for an MX network

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


$apiInstance = new Meraki\Api\PortForwardingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_firewall_port_forwarding_rules_request = new \Meraki\Model\UpdateNetworkApplianceFirewallPortForwardingRulesRequest(); // \Meraki\Model\UpdateNetworkApplianceFirewallPortForwardingRulesRequest

try {
    $result = $apiInstance->updateNetworkApplianceFirewallPortForwardingRules($network_id, $update_network_appliance_firewall_port_forwarding_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortForwardingRulesApi->updateNetworkApplianceFirewallPortForwardingRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_firewall_port_forwarding_rules_request** | [**\Meraki\Model\UpdateNetworkApplianceFirewallPortForwardingRulesRequest**](../Model/UpdateNetworkApplianceFirewallPortForwardingRulesRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallPortForwardingRules200Response**](../Model/GetNetworkApplianceFirewallPortForwardingRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
