# Meraki\SiteToSiteVpnApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkApplianceVpnSiteToSiteVpn()**](SiteToSiteVpnApi.md#getNetworkApplianceVpnSiteToSiteVpn) | **GET** /networks/{networkId}/appliance/vpn/siteToSiteVpn | Return the site-to-site VPN settings of a network |
| [**updateNetworkApplianceVpnSiteToSiteVpn()**](SiteToSiteVpnApi.md#updateNetworkApplianceVpnSiteToSiteVpn) | **PUT** /networks/{networkId}/appliance/vpn/siteToSiteVpn | Update the site-to-site VPN settings of a network |


## `getNetworkApplianceVpnSiteToSiteVpn()`

```php
getNetworkApplianceVpnSiteToSiteVpn($network_id): \Meraki\Model\GetNetworkApplianceVpnSiteToSiteVpn200Response
```

Return the site-to-site VPN settings of a network

Return the site-to-site VPN settings of a network. Only valid for MX networks.

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


$apiInstance = new Meraki\Api\SiteToSiteVpnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceVpnSiteToSiteVpn($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteToSiteVpnApi->getNetworkApplianceVpnSiteToSiteVpn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceVpnSiteToSiteVpn200Response**](../Model/GetNetworkApplianceVpnSiteToSiteVpn200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceVpnSiteToSiteVpn()`

```php
updateNetworkApplianceVpnSiteToSiteVpn($network_id, $update_network_appliance_vpn_site_to_site_vpn_request): \Meraki\Model\GetNetworkApplianceVpnSiteToSiteVpn200Response
```

Update the site-to-site VPN settings of a network

Update the site-to-site VPN settings of a network. Only valid for MX networks in NAT mode.

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


$apiInstance = new Meraki\Api\SiteToSiteVpnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_vpn_site_to_site_vpn_request = new \Meraki\Model\UpdateNetworkApplianceVpnSiteToSiteVpnRequest(); // \Meraki\Model\UpdateNetworkApplianceVpnSiteToSiteVpnRequest

try {
    $result = $apiInstance->updateNetworkApplianceVpnSiteToSiteVpn($network_id, $update_network_appliance_vpn_site_to_site_vpn_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteToSiteVpnApi->updateNetworkApplianceVpnSiteToSiteVpn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_vpn_site_to_site_vpn_request** | [**\Meraki\Model\UpdateNetworkApplianceVpnSiteToSiteVpnRequest**](../Model/UpdateNetworkApplianceVpnSiteToSiteVpnRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkApplianceVpnSiteToSiteVpn200Response**](../Model/GetNetworkApplianceVpnSiteToSiteVpn200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
