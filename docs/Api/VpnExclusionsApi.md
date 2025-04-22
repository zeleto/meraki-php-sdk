# Meraki\VpnExclusionsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrganizationApplianceTrafficShapingVpnExclusionsByNetwork()**](VpnExclusionsApi.md#getOrganizationApplianceTrafficShapingVpnExclusionsByNetwork) | **GET** /organizations/{organizationId}/appliance/trafficShaping/vpnExclusions/byNetwork | Display VPN exclusion rules for MX networks. |
| [**updateNetworkApplianceTrafficShapingVpnExclusions()**](VpnExclusionsApi.md#updateNetworkApplianceTrafficShapingVpnExclusions) | **PUT** /networks/{networkId}/appliance/trafficShaping/vpnExclusions | Update VPN exclusion rules for an MX network. |


## `getOrganizationApplianceTrafficShapingVpnExclusionsByNetwork()`

```php
getOrganizationApplianceTrafficShapingVpnExclusionsByNetwork($organization_id, $per_page, $starting_after, $ending_before, $network_ids): \Meraki\Model\GetOrganizationApplianceTrafficShapingVpnExclusionsByNetwork200Response
```

Display VPN exclusion rules for MX networks.

Display VPN exclusion rules for MX networks.

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


$apiInstance = new Meraki\Api\VpnExclusionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 50.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter the results by network IDs

try {
    $result = $apiInstance->getOrganizationApplianceTrafficShapingVpnExclusionsByNetwork($organization_id, $per_page, $starting_after, $ending_before, $network_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VpnExclusionsApi->getOrganizationApplianceTrafficShapingVpnExclusionsByNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 50. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the results by network IDs | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApplianceTrafficShapingVpnExclusionsByNetwork200Response**](../Model/GetOrganizationApplianceTrafficShapingVpnExclusionsByNetwork200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceTrafficShapingVpnExclusions()`

```php
updateNetworkApplianceTrafficShapingVpnExclusions($network_id, $update_network_appliance_traffic_shaping_vpn_exclusions_request): \Meraki\Model\UpdateNetworkApplianceTrafficShapingVpnExclusions200Response
```

Update VPN exclusion rules for an MX network.

Update VPN exclusion rules for an MX network.

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


$apiInstance = new Meraki\Api\VpnExclusionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_traffic_shaping_vpn_exclusions_request = new \Meraki\Model\UpdateNetworkApplianceTrafficShapingVpnExclusionsRequest(); // \Meraki\Model\UpdateNetworkApplianceTrafficShapingVpnExclusionsRequest

try {
    $result = $apiInstance->updateNetworkApplianceTrafficShapingVpnExclusions($network_id, $update_network_appliance_traffic_shaping_vpn_exclusions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VpnExclusionsApi->updateNetworkApplianceTrafficShapingVpnExclusions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_traffic_shaping_vpn_exclusions_request** | [**\Meraki\Model\UpdateNetworkApplianceTrafficShapingVpnExclusionsRequest**](../Model/UpdateNetworkApplianceTrafficShapingVpnExclusionsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\UpdateNetworkApplianceTrafficShapingVpnExclusions200Response**](../Model/UpdateNetworkApplianceTrafficShapingVpnExclusions200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
