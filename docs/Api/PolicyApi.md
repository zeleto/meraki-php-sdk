# Meraki\PolicyApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkClientPolicy()**](PolicyApi.md#getNetworkClientPolicy) | **GET** /networks/{networkId}/clients/{clientId}/policy | Return the policy assigned to a client on the network |
| [**updateNetworkClientPolicy()**](PolicyApi.md#updateNetworkClientPolicy) | **PUT** /networks/{networkId}/clients/{clientId}/policy | Update the policy assigned to a client on the network |


## `getNetworkClientPolicy()`

```php
getNetworkClientPolicy($network_id, $client_id): \Meraki\Model\GetNetworkClientPolicy200Response
```

Return the policy assigned to a client on the network

Return the policy assigned to a client on the network. Clients can be identified by a client key or either the MAC or IP depending on whether the network uses Track-by-IP.

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


$apiInstance = new Meraki\Api\PolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$client_id = 'client_id_example'; // string | Client ID

try {
    $result = $apiInstance->getNetworkClientPolicy($network_id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyApi->getNetworkClientPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **client_id** | **string**| Client ID | |

### Return type

[**\Meraki\Model\GetNetworkClientPolicy200Response**](../Model/GetNetworkClientPolicy200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkClientPolicy()`

```php
updateNetworkClientPolicy($network_id, $client_id, $update_network_client_policy_request): \Meraki\Model\GetNetworkClientPolicy200Response
```

Update the policy assigned to a client on the network

Update the policy assigned to a client on the network. Clients can be identified by a client key or either the MAC or IP depending on whether the network uses Track-by-IP.

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


$apiInstance = new Meraki\Api\PolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$client_id = 'client_id_example'; // string | Client ID
$update_network_client_policy_request = new \Meraki\Model\UpdateNetworkClientPolicyRequest(); // \Meraki\Model\UpdateNetworkClientPolicyRequest

try {
    $result = $apiInstance->updateNetworkClientPolicy($network_id, $client_id, $update_network_client_policy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyApi->updateNetworkClientPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **client_id** | **string**| Client ID | |
| **update_network_client_policy_request** | [**\Meraki\Model\UpdateNetworkClientPolicyRequest**](../Model/UpdateNetworkClientPolicyRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkClientPolicy200Response**](../Model/GetNetworkClientPolicy200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
