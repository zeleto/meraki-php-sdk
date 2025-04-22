# Meraki\AccessControlListsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkSwitchAccessControlLists()**](AccessControlListsApi.md#getNetworkSwitchAccessControlLists) | **GET** /networks/{networkId}/switch/accessControlLists | Return the access control lists for a MS network |
| [**updateNetworkSwitchAccessControlLists()**](AccessControlListsApi.md#updateNetworkSwitchAccessControlLists) | **PUT** /networks/{networkId}/switch/accessControlLists | Update the access control lists for a MS network |


## `getNetworkSwitchAccessControlLists()`

```php
getNetworkSwitchAccessControlLists($network_id): \Meraki\Model\GetNetworkSwitchAccessControlLists200Response
```

Return the access control lists for a MS network

Return the access control lists for a MS network

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


$apiInstance = new Meraki\Api\AccessControlListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSwitchAccessControlLists($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlListsApi->getNetworkSwitchAccessControlLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchAccessControlLists200Response**](../Model/GetNetworkSwitchAccessControlLists200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchAccessControlLists()`

```php
updateNetworkSwitchAccessControlLists($network_id, $update_network_switch_access_control_lists_request): \Meraki\Model\GetNetworkSwitchAccessControlLists200Response
```

Update the access control lists for a MS network

Update the access control lists for a MS network

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


$apiInstance = new Meraki\Api\AccessControlListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_switch_access_control_lists_request = new \Meraki\Model\UpdateNetworkSwitchAccessControlListsRequest(); // \Meraki\Model\UpdateNetworkSwitchAccessControlListsRequest

try {
    $result = $apiInstance->updateNetworkSwitchAccessControlLists($network_id, $update_network_switch_access_control_lists_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlListsApi->updateNetworkSwitchAccessControlLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_switch_access_control_lists_request** | [**\Meraki\Model\UpdateNetworkSwitchAccessControlListsRequest**](../Model/UpdateNetworkSwitchAccessControlListsRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkSwitchAccessControlLists200Response**](../Model/GetNetworkSwitchAccessControlLists200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
