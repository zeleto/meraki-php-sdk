# Meraki\VpnApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkApplianceVpnBgp()**](VpnApi.md#getNetworkApplianceVpnBgp) | **GET** /networks/{networkId}/appliance/vpn/bgp | Return a Hub BGP Configuration |
| [**getNetworkApplianceVpnSiteToSiteVpn()**](VpnApi.md#getNetworkApplianceVpnSiteToSiteVpn) | **GET** /networks/{networkId}/appliance/vpn/siteToSiteVpn | Return the site-to-site VPN settings of a network |
| [**getNetworkWirelessSsidVpn()**](VpnApi.md#getNetworkWirelessSsidVpn) | **GET** /networks/{networkId}/wireless/ssids/{number}/vpn | List the VPN settings for the SSID. |
| [**getOrganizationApplianceVpnStats()**](VpnApi.md#getOrganizationApplianceVpnStats) | **GET** /organizations/{organizationId}/appliance/vpn/stats | Show VPN history stat for networks in an organization |
| [**getOrganizationApplianceVpnStatuses()**](VpnApi.md#getOrganizationApplianceVpnStatuses) | **GET** /organizations/{organizationId}/appliance/vpn/statuses | Show VPN status for networks in an organization |
| [**getOrganizationApplianceVpnThirdPartyVPNPeers()**](VpnApi.md#getOrganizationApplianceVpnThirdPartyVPNPeers) | **GET** /organizations/{organizationId}/appliance/vpn/thirdPartyVPNPeers | Return the third party VPN peers for an organization |
| [**getOrganizationApplianceVpnVpnFirewallRules()**](VpnApi.md#getOrganizationApplianceVpnVpnFirewallRules) | **GET** /organizations/{organizationId}/appliance/vpn/vpnFirewallRules | Return the firewall rules for an organization&#39;s site-to-site VPN |
| [**updateNetworkApplianceVpnBgp()**](VpnApi.md#updateNetworkApplianceVpnBgp) | **PUT** /networks/{networkId}/appliance/vpn/bgp | Update a Hub BGP Configuration |
| [**updateNetworkApplianceVpnSiteToSiteVpn()**](VpnApi.md#updateNetworkApplianceVpnSiteToSiteVpn) | **PUT** /networks/{networkId}/appliance/vpn/siteToSiteVpn | Update the site-to-site VPN settings of a network |
| [**updateNetworkWirelessSsidVpn()**](VpnApi.md#updateNetworkWirelessSsidVpn) | **PUT** /networks/{networkId}/wireless/ssids/{number}/vpn | Update the VPN settings for the SSID |
| [**updateOrganizationApplianceVpnThirdPartyVPNPeers()**](VpnApi.md#updateOrganizationApplianceVpnThirdPartyVPNPeers) | **PUT** /organizations/{organizationId}/appliance/vpn/thirdPartyVPNPeers | Update the third party VPN peers for an organization |
| [**updateOrganizationApplianceVpnVpnFirewallRules()**](VpnApi.md#updateOrganizationApplianceVpnVpnFirewallRules) | **PUT** /organizations/{organizationId}/appliance/vpn/vpnFirewallRules | Update the firewall rules of an organization&#39;s site-to-site VPN |


## `getNetworkApplianceVpnBgp()`

```php
getNetworkApplianceVpnBgp($network_id): \Meraki\Model\GetNetworkApplianceVpnBgp200Response
```

Return a Hub BGP Configuration

Return a Hub BGP Configuration

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


$apiInstance = new Meraki\Api\VpnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceVpnBgp($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VpnApi->getNetworkApplianceVpnBgp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceVpnBgp200Response**](../Model/GetNetworkApplianceVpnBgp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new Meraki\Api\VpnApi(
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
    echo 'Exception when calling VpnApi->getNetworkApplianceVpnSiteToSiteVpn: ', $e->getMessage(), PHP_EOL;
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

## `getNetworkWirelessSsidVpn()`

```php
getNetworkWirelessSsidVpn($network_id, $number): object
```

List the VPN settings for the SSID.

List the VPN settings for the SSID.

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


$apiInstance = new Meraki\Api\VpnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidVpn($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VpnApi->getNetworkWirelessSsidVpn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

**object**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationApplianceVpnStats()`

```php
getOrganizationApplianceVpnStats($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationApplianceVpnStats200ResponseInner[]
```

Show VPN history stat for networks in an organization

Show VPN history stat for networks in an organization

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


$apiInstance = new Meraki\Api\VpnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 300. Default is 300.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | A list of Meraki network IDs to filter results to contain only specified networks. E.g.: networkIds[]=N_12345678&networkIds[]=L_3456
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day.

try {
    $result = $apiInstance->getOrganizationApplianceVpnStats($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VpnApi->getOrganizationApplianceVpnStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 300. Default is 300. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| A list of Meraki network IDs to filter results to contain only specified networks. E.g.: networkIds[]&#x3D;N_12345678&amp;networkIds[]&#x3D;L_3456 | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApplianceVpnStats200ResponseInner[]**](../Model/GetOrganizationApplianceVpnStats200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationApplianceVpnStatuses()`

```php
getOrganizationApplianceVpnStatuses($organization_id, $per_page, $starting_after, $ending_before, $network_ids): \Meraki\Model\GetOrganizationApplianceVpnStatuses200Response
```

Show VPN status for networks in an organization

Show VPN status for networks in an organization

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


$apiInstance = new Meraki\Api\VpnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 300. Default is 300.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | A list of Meraki network IDs to filter results to contain only specified networks. E.g.: networkIds[]=N_12345678&networkIds[]=L_3456

try {
    $result = $apiInstance->getOrganizationApplianceVpnStatuses($organization_id, $per_page, $starting_after, $ending_before, $network_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VpnApi->getOrganizationApplianceVpnStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 300. Default is 300. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| A list of Meraki network IDs to filter results to contain only specified networks. E.g.: networkIds[]&#x3D;N_12345678&amp;networkIds[]&#x3D;L_3456 | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApplianceVpnStatuses200Response**](../Model/GetOrganizationApplianceVpnStatuses200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new Meraki\Api\VpnApi(
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
    echo 'Exception when calling VpnApi->getOrganizationApplianceVpnThirdPartyVPNPeers: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\VpnApi(
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
    echo 'Exception when calling VpnApi->getOrganizationApplianceVpnVpnFirewallRules: ', $e->getMessage(), PHP_EOL;
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

## `updateNetworkApplianceVpnBgp()`

```php
updateNetworkApplianceVpnBgp($network_id, $update_network_appliance_vpn_bgp_request): \Meraki\Model\GetNetworkApplianceVpnBgp200Response
```

Update a Hub BGP Configuration

Update a Hub BGP Configuration

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


$apiInstance = new Meraki\Api\VpnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_vpn_bgp_request = new \Meraki\Model\UpdateNetworkApplianceVpnBgpRequest(); // \Meraki\Model\UpdateNetworkApplianceVpnBgpRequest

try {
    $result = $apiInstance->updateNetworkApplianceVpnBgp($network_id, $update_network_appliance_vpn_bgp_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VpnApi->updateNetworkApplianceVpnBgp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_vpn_bgp_request** | [**\Meraki\Model\UpdateNetworkApplianceVpnBgpRequest**](../Model/UpdateNetworkApplianceVpnBgpRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkApplianceVpnBgp200Response**](../Model/GetNetworkApplianceVpnBgp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
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


$apiInstance = new Meraki\Api\VpnApi(
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
    echo 'Exception when calling VpnApi->updateNetworkApplianceVpnSiteToSiteVpn: ', $e->getMessage(), PHP_EOL;
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

## `updateNetworkWirelessSsidVpn()`

```php
updateNetworkWirelessSsidVpn($network_id, $number, $update_network_wireless_ssid_vpn_request): object
```

Update the VPN settings for the SSID

Update the VPN settings for the SSID

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


$apiInstance = new Meraki\Api\VpnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_vpn_request = new \Meraki\Model\UpdateNetworkWirelessSsidVpnRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidVpnRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsidVpn($network_id, $number, $update_network_wireless_ssid_vpn_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VpnApi->updateNetworkWirelessSsidVpn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_vpn_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidVpnRequest**](../Model/UpdateNetworkWirelessSsidVpnRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
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


$apiInstance = new Meraki\Api\VpnApi(
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
    echo 'Exception when calling VpnApi->updateOrganizationApplianceVpnThirdPartyVPNPeers: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\VpnApi(
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
    echo 'Exception when calling VpnApi->updateOrganizationApplianceVpnVpnFirewallRules: ', $e->getMessage(), PHP_EOL;
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
