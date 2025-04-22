# Meraki\SdwanApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**updateNetworkApplianceSdwanInternetPolicies()**](SdwanApi.md#updateNetworkApplianceSdwanInternetPolicies) | **PUT** /networks/{networkId}/appliance/sdwan/internetPolicies | Update SDWAN internet traffic preferences for an MX network |


## `updateNetworkApplianceSdwanInternetPolicies()`

```php
updateNetworkApplianceSdwanInternetPolicies($network_id, $update_network_appliance_sdwan_internet_policies_request): \Meraki\Model\UpdateNetworkApplianceSdwanInternetPolicies200Response
```

Update SDWAN internet traffic preferences for an MX network

Update SDWAN internet traffic preferences for an MX network

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


$apiInstance = new Meraki\Api\SdwanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_sdwan_internet_policies_request = new \Meraki\Model\UpdateNetworkApplianceSdwanInternetPoliciesRequest(); // \Meraki\Model\UpdateNetworkApplianceSdwanInternetPoliciesRequest

try {
    $result = $apiInstance->updateNetworkApplianceSdwanInternetPolicies($network_id, $update_network_appliance_sdwan_internet_policies_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SdwanApi->updateNetworkApplianceSdwanInternetPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_sdwan_internet_policies_request** | [**\Meraki\Model\UpdateNetworkApplianceSdwanInternetPoliciesRequest**](../Model/UpdateNetworkApplianceSdwanInternetPoliciesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\UpdateNetworkApplianceSdwanInternetPolicies200Response**](../Model/UpdateNetworkApplianceSdwanInternetPolicies200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
