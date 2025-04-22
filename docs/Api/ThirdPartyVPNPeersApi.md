# Meraki\ThirdPartyVPNPeersApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrganizationApplianceVpnThirdPartyVPNPeers()**](ThirdPartyVPNPeersApi.md#getOrganizationApplianceVpnThirdPartyVPNPeers) | **GET** /organizations/{organizationId}/appliance/vpn/thirdPartyVPNPeers | Return the third party VPN peers for an organization |
| [**updateOrganizationApplianceVpnThirdPartyVPNPeers()**](ThirdPartyVPNPeersApi.md#updateOrganizationApplianceVpnThirdPartyVPNPeers) | **PUT** /organizations/{organizationId}/appliance/vpn/thirdPartyVPNPeers | Update the third party VPN peers for an organization |


## `getOrganizationApplianceVpnThirdPartyVPNPeers()`

```php
getOrganizationApplianceVpnThirdPartyVPNPeers($organization_id): \Meraki\Model\GetOrganizationApplianceVpnThirdPartyVPNPeers200Response
```

Return the third party VPN peers for an organization

Return the third party VPN peers for an organization

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


$apiInstance = new Meraki\Api\ThirdPartyVPNPeersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationApplianceVpnThirdPartyVPNPeers($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThirdPartyVPNPeersApi->getOrganizationApplianceVpnThirdPartyVPNPeers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationApplianceVpnThirdPartyVPNPeers200Response**](../Model/GetOrganizationApplianceVpnThirdPartyVPNPeers200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationApplianceVpnThirdPartyVPNPeers()`

```php
updateOrganizationApplianceVpnThirdPartyVPNPeers($organization_id, $update_organization_appliance_vpn_third_party_vpn_peers_request): \Meraki\Model\GetOrganizationApplianceVpnThirdPartyVPNPeers200Response
```

Update the third party VPN peers for an organization

Update the third party VPN peers for an organization

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


$apiInstance = new Meraki\Api\ThirdPartyVPNPeersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$update_organization_appliance_vpn_third_party_vpn_peers_request = new \Meraki\Model\UpdateOrganizationApplianceVpnThirdPartyVPNPeersRequest(); // \Meraki\Model\UpdateOrganizationApplianceVpnThirdPartyVPNPeersRequest

try {
    $result = $apiInstance->updateOrganizationApplianceVpnThirdPartyVPNPeers($organization_id, $update_organization_appliance_vpn_third_party_vpn_peers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThirdPartyVPNPeersApi->updateOrganizationApplianceVpnThirdPartyVPNPeers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **update_organization_appliance_vpn_third_party_vpn_peers_request** | [**\Meraki\Model\UpdateOrganizationApplianceVpnThirdPartyVPNPeersRequest**](../Model/UpdateOrganizationApplianceVpnThirdPartyVPNPeersRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationApplianceVpnThirdPartyVPNPeers200Response**](../Model/GetOrganizationApplianceVpnThirdPartyVPNPeers200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
