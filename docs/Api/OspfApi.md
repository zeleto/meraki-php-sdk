# Meraki\OspfApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkSwitchRoutingOspf()**](OspfApi.md#getNetworkSwitchRoutingOspf) | **GET** /networks/{networkId}/switch/routing/ospf | Return layer 3 OSPF routing configuration |
| [**updateNetworkSwitchRoutingOspf()**](OspfApi.md#updateNetworkSwitchRoutingOspf) | **PUT** /networks/{networkId}/switch/routing/ospf | Update layer 3 OSPF routing configuration |


## `getNetworkSwitchRoutingOspf()`

```php
getNetworkSwitchRoutingOspf($network_id): \Meraki\Model\GetNetworkSwitchRoutingOspf200Response
```

Return layer 3 OSPF routing configuration

Return layer 3 OSPF routing configuration

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


$apiInstance = new Meraki\Api\OspfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSwitchRoutingOspf($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OspfApi->getNetworkSwitchRoutingOspf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchRoutingOspf200Response**](../Model/GetNetworkSwitchRoutingOspf200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchRoutingOspf()`

```php
updateNetworkSwitchRoutingOspf($network_id, $update_network_switch_routing_ospf_request): \Meraki\Model\GetNetworkSwitchRoutingOspf200Response
```

Update layer 3 OSPF routing configuration

Update layer 3 OSPF routing configuration

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


$apiInstance = new Meraki\Api\OspfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_switch_routing_ospf_request = new \Meraki\Model\UpdateNetworkSwitchRoutingOspfRequest(); // \Meraki\Model\UpdateNetworkSwitchRoutingOspfRequest

try {
    $result = $apiInstance->updateNetworkSwitchRoutingOspf($network_id, $update_network_switch_routing_ospf_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OspfApi->updateNetworkSwitchRoutingOspf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_switch_routing_ospf_request** | [**\Meraki\Model\UpdateNetworkSwitchRoutingOspfRequest**](../Model/UpdateNetworkSwitchRoutingOspfRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchRoutingOspf200Response**](../Model/GetNetworkSwitchRoutingOspf200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
