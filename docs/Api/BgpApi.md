# Meraki\BgpApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkApplianceVpnBgp()**](BgpApi.md#getNetworkApplianceVpnBgp) | **GET** /networks/{networkId}/appliance/vpn/bgp | Return a Hub BGP Configuration |
| [**updateNetworkApplianceVpnBgp()**](BgpApi.md#updateNetworkApplianceVpnBgp) | **PUT** /networks/{networkId}/appliance/vpn/bgp | Update a Hub BGP Configuration |


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


$apiInstance = new Meraki\Api\BgpApi(
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
    echo 'Exception when calling BgpApi->getNetworkApplianceVpnBgp: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\BgpApi(
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
    echo 'Exception when calling BgpApi->updateNetworkApplianceVpnBgp: ', $e->getMessage(), PHP_EOL;
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
