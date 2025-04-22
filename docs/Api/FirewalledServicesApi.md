# Meraki\FirewalledServicesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkApplianceFirewallFirewalledService()**](FirewalledServicesApi.md#getNetworkApplianceFirewallFirewalledService) | **GET** /networks/{networkId}/appliance/firewall/firewalledServices/{service} | Return the accessibility settings of the given service (&#39;ICMP&#39;, &#39;web&#39;, or &#39;SNMP&#39;) |
| [**getNetworkApplianceFirewallFirewalledServices()**](FirewalledServicesApi.md#getNetworkApplianceFirewallFirewalledServices) | **GET** /networks/{networkId}/appliance/firewall/firewalledServices | List the appliance services and their accessibility rules |
| [**updateNetworkApplianceFirewallFirewalledService()**](FirewalledServicesApi.md#updateNetworkApplianceFirewallFirewalledService) | **PUT** /networks/{networkId}/appliance/firewall/firewalledServices/{service} | Updates the accessibility settings for the given service (&#39;ICMP&#39;, &#39;web&#39;, or &#39;SNMP&#39;) |


## `getNetworkApplianceFirewallFirewalledService()`

```php
getNetworkApplianceFirewallFirewalledService($network_id, $service): \Meraki\Model\GetNetworkApplianceFirewallFirewalledServices200ResponseInner
```

Return the accessibility settings of the given service ('ICMP', 'web', or 'SNMP')

Return the accessibility settings of the given service ('ICMP', 'web', or 'SNMP')

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


$apiInstance = new Meraki\Api\FirewalledServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$service = 'service_example'; // string | Service

try {
    $result = $apiInstance->getNetworkApplianceFirewallFirewalledService($network_id, $service);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewalledServicesApi->getNetworkApplianceFirewallFirewalledService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **service** | **string**| Service | |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallFirewalledServices200ResponseInner**](../Model/GetNetworkApplianceFirewallFirewalledServices200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceFirewallFirewalledServices()`

```php
getNetworkApplianceFirewallFirewalledServices($network_id): \Meraki\Model\GetNetworkApplianceFirewallFirewalledServices200ResponseInner[]
```

List the appliance services and their accessibility rules

List the appliance services and their accessibility rules

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


$apiInstance = new Meraki\Api\FirewalledServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceFirewallFirewalledServices($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewalledServicesApi->getNetworkApplianceFirewallFirewalledServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallFirewalledServices200ResponseInner[]**](../Model/GetNetworkApplianceFirewallFirewalledServices200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceFirewallFirewalledService()`

```php
updateNetworkApplianceFirewallFirewalledService($network_id, $service, $update_network_appliance_firewall_firewalled_service_request): \Meraki\Model\GetNetworkApplianceFirewallFirewalledServices200ResponseInner
```

Updates the accessibility settings for the given service ('ICMP', 'web', or 'SNMP')

Updates the accessibility settings for the given service ('ICMP', 'web', or 'SNMP')

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


$apiInstance = new Meraki\Api\FirewalledServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$service = 'service_example'; // string | Service
$update_network_appliance_firewall_firewalled_service_request = new \Meraki\Model\UpdateNetworkApplianceFirewallFirewalledServiceRequest(); // \Meraki\Model\UpdateNetworkApplianceFirewallFirewalledServiceRequest

try {
    $result = $apiInstance->updateNetworkApplianceFirewallFirewalledService($network_id, $service, $update_network_appliance_firewall_firewalled_service_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewalledServicesApi->updateNetworkApplianceFirewallFirewalledService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **service** | **string**| Service | |
| **update_network_appliance_firewall_firewalled_service_request** | [**\Meraki\Model\UpdateNetworkApplianceFirewallFirewalledServiceRequest**](../Model/UpdateNetworkApplianceFirewallFirewalledServiceRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallFirewalledServices200ResponseInner**](../Model/GetNetworkApplianceFirewallFirewalledServices200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
