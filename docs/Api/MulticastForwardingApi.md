# Meraki\MulticastForwardingApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrganizationApplianceFirewallMulticastForwardingByNetwork()**](MulticastForwardingApi.md#getOrganizationApplianceFirewallMulticastForwardingByNetwork) | **GET** /organizations/{organizationId}/appliance/firewall/multicastForwarding/byNetwork | List Static Multicasting forwarding settings for MX networks |
| [**updateNetworkApplianceFirewallMulticastForwarding()**](MulticastForwardingApi.md#updateNetworkApplianceFirewallMulticastForwarding) | **PUT** /networks/{networkId}/appliance/firewall/multicastForwarding | Update static multicast forward rules for a network |


## `getOrganizationApplianceFirewallMulticastForwardingByNetwork()`

```php
getOrganizationApplianceFirewallMulticastForwardingByNetwork($organization_id, $per_page, $starting_after, $ending_before, $network_ids): \Meraki\Model\GetOrganizationApplianceFirewallMulticastForwardingByNetwork200Response
```

List Static Multicasting forwarding settings for MX networks

List Static Multicasting forwarding settings for MX networks

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


$apiInstance = new Meraki\Api\MulticastForwardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter the results by network IDs

try {
    $result = $apiInstance->getOrganizationApplianceFirewallMulticastForwardingByNetwork($organization_id, $per_page, $starting_after, $ending_before, $network_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MulticastForwardingApi->getOrganizationApplianceFirewallMulticastForwardingByNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the results by network IDs | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApplianceFirewallMulticastForwardingByNetwork200Response**](../Model/GetOrganizationApplianceFirewallMulticastForwardingByNetwork200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceFirewallMulticastForwarding()`

```php
updateNetworkApplianceFirewallMulticastForwarding($network_id, $update_network_appliance_firewall_multicast_forwarding_request): \Meraki\Model\UpdateNetworkApplianceFirewallMulticastForwarding200Response
```

Update static multicast forward rules for a network

Update static multicast forward rules for a network

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


$apiInstance = new Meraki\Api\MulticastForwardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_firewall_multicast_forwarding_request = new \Meraki\Model\UpdateNetworkApplianceFirewallMulticastForwardingRequest(); // \Meraki\Model\UpdateNetworkApplianceFirewallMulticastForwardingRequest

try {
    $result = $apiInstance->updateNetworkApplianceFirewallMulticastForwarding($network_id, $update_network_appliance_firewall_multicast_forwarding_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MulticastForwardingApi->updateNetworkApplianceFirewallMulticastForwarding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_firewall_multicast_forwarding_request** | [**\Meraki\Model\UpdateNetworkApplianceFirewallMulticastForwardingRequest**](../Model/UpdateNetworkApplianceFirewallMulticastForwardingRequest.md)|  | |

### Return type

[**\Meraki\Model\UpdateNetworkApplianceFirewallMulticastForwarding200Response**](../Model/UpdateNetworkApplianceFirewallMulticastForwarding200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
