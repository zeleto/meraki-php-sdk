# Meraki\InboundFirewallRulesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkApplianceFirewallInboundFirewallRules()**](InboundFirewallRulesApi.md#getNetworkApplianceFirewallInboundFirewallRules) | **GET** /networks/{networkId}/appliance/firewall/inboundFirewallRules | Return the inbound firewall rules for an MX network |
| [**updateNetworkApplianceFirewallInboundFirewallRules()**](InboundFirewallRulesApi.md#updateNetworkApplianceFirewallInboundFirewallRules) | **PUT** /networks/{networkId}/appliance/firewall/inboundFirewallRules | Update the inbound firewall rules of an MX network |


## `getNetworkApplianceFirewallInboundFirewallRules()`

```php
getNetworkApplianceFirewallInboundFirewallRules($network_id): \Meraki\Model\GetNetworkApplianceFirewallInboundFirewallRules200Response
```

Return the inbound firewall rules for an MX network

Return the inbound firewall rules for an MX network

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


$apiInstance = new Meraki\Api\InboundFirewallRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceFirewallInboundFirewallRules($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundFirewallRulesApi->getNetworkApplianceFirewallInboundFirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallInboundFirewallRules200Response**](../Model/GetNetworkApplianceFirewallInboundFirewallRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceFirewallInboundFirewallRules()`

```php
updateNetworkApplianceFirewallInboundFirewallRules($network_id, $update_network_appliance_firewall_inbound_firewall_rules_request): \Meraki\Model\GetNetworkApplianceFirewallInboundFirewallRules200Response
```

Update the inbound firewall rules of an MX network

Update the inbound firewall rules of an MX network

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


$apiInstance = new Meraki\Api\InboundFirewallRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_firewall_inbound_firewall_rules_request = new \Meraki\Model\UpdateNetworkApplianceFirewallInboundFirewallRulesRequest(); // \Meraki\Model\UpdateNetworkApplianceFirewallInboundFirewallRulesRequest

try {
    $result = $apiInstance->updateNetworkApplianceFirewallInboundFirewallRules($network_id, $update_network_appliance_firewall_inbound_firewall_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundFirewallRulesApi->updateNetworkApplianceFirewallInboundFirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_firewall_inbound_firewall_rules_request** | [**\Meraki\Model\UpdateNetworkApplianceFirewallInboundFirewallRulesRequest**](../Model/UpdateNetworkApplianceFirewallInboundFirewallRulesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallInboundFirewallRules200Response**](../Model/GetNetworkApplianceFirewallInboundFirewallRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
