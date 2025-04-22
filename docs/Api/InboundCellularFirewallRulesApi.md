# Meraki\InboundCellularFirewallRulesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkApplianceFirewallInboundCellularFirewallRules()**](InboundCellularFirewallRulesApi.md#getNetworkApplianceFirewallInboundCellularFirewallRules) | **GET** /networks/{networkId}/appliance/firewall/inboundCellularFirewallRules | Return the inbound cellular firewall rules for an MX network |
| [**updateNetworkApplianceFirewallInboundCellularFirewallRules()**](InboundCellularFirewallRulesApi.md#updateNetworkApplianceFirewallInboundCellularFirewallRules) | **PUT** /networks/{networkId}/appliance/firewall/inboundCellularFirewallRules | Update the inbound cellular firewall rules of an MX network |


## `getNetworkApplianceFirewallInboundCellularFirewallRules()`

```php
getNetworkApplianceFirewallInboundCellularFirewallRules($network_id): \Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response
```

Return the inbound cellular firewall rules for an MX network

Return the inbound cellular firewall rules for an MX network

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


$apiInstance = new Meraki\Api\InboundCellularFirewallRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceFirewallInboundCellularFirewallRules($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundCellularFirewallRulesApi->getNetworkApplianceFirewallInboundCellularFirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response**](../Model/GetNetworkApplianceFirewallInboundCellularFirewallRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceFirewallInboundCellularFirewallRules()`

```php
updateNetworkApplianceFirewallInboundCellularFirewallRules($network_id, $update_network_appliance_firewall_inbound_cellular_firewall_rules_request): \Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response
```

Update the inbound cellular firewall rules of an MX network

Update the inbound cellular firewall rules of an MX network

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


$apiInstance = new Meraki\Api\InboundCellularFirewallRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_firewall_inbound_cellular_firewall_rules_request = new \Meraki\Model\UpdateNetworkApplianceFirewallInboundCellularFirewallRulesRequest(); // \Meraki\Model\UpdateNetworkApplianceFirewallInboundCellularFirewallRulesRequest

try {
    $result = $apiInstance->updateNetworkApplianceFirewallInboundCellularFirewallRules($network_id, $update_network_appliance_firewall_inbound_cellular_firewall_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundCellularFirewallRulesApi->updateNetworkApplianceFirewallInboundCellularFirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_firewall_inbound_cellular_firewall_rules_request** | [**\Meraki\Model\UpdateNetworkApplianceFirewallInboundCellularFirewallRulesRequest**](../Model/UpdateNetworkApplianceFirewallInboundCellularFirewallRulesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response**](../Model/GetNetworkApplianceFirewallInboundCellularFirewallRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
