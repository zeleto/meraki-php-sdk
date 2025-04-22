# Meraki\VpnFirewallRulesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrganizationApplianceVpnVpnFirewallRules()**](VpnFirewallRulesApi.md#getOrganizationApplianceVpnVpnFirewallRules) | **GET** /organizations/{organizationId}/appliance/vpn/vpnFirewallRules | Return the firewall rules for an organization&#39;s site-to-site VPN |
| [**updateOrganizationApplianceVpnVpnFirewallRules()**](VpnFirewallRulesApi.md#updateOrganizationApplianceVpnVpnFirewallRules) | **PUT** /organizations/{organizationId}/appliance/vpn/vpnFirewallRules | Update the firewall rules of an organization&#39;s site-to-site VPN |


## `getOrganizationApplianceVpnVpnFirewallRules()`

```php
getOrganizationApplianceVpnVpnFirewallRules($organization_id): \Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response
```

Return the firewall rules for an organization's site-to-site VPN

Return the firewall rules for an organization's site-to-site VPN

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


$apiInstance = new Meraki\Api\VpnFirewallRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationApplianceVpnVpnFirewallRules($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VpnFirewallRulesApi->getOrganizationApplianceVpnVpnFirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

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

## `updateOrganizationApplianceVpnVpnFirewallRules()`

```php
updateOrganizationApplianceVpnVpnFirewallRules($organization_id, $update_organization_appliance_vpn_vpn_firewall_rules_request): \Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response
```

Update the firewall rules of an organization's site-to-site VPN

Update the firewall rules of an organization's site-to-site VPN

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


$apiInstance = new Meraki\Api\VpnFirewallRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$update_organization_appliance_vpn_vpn_firewall_rules_request = new \Meraki\Model\UpdateOrganizationApplianceVpnVpnFirewallRulesRequest(); // \Meraki\Model\UpdateOrganizationApplianceVpnVpnFirewallRulesRequest

try {
    $result = $apiInstance->updateOrganizationApplianceVpnVpnFirewallRules($organization_id, $update_organization_appliance_vpn_vpn_firewall_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VpnFirewallRulesApi->updateOrganizationApplianceVpnVpnFirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **update_organization_appliance_vpn_vpn_firewall_rules_request** | [**\Meraki\Model\UpdateOrganizationApplianceVpnVpnFirewallRulesRequest**](../Model/UpdateOrganizationApplianceVpnVpnFirewallRulesRequest.md)|  | [optional] |

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
