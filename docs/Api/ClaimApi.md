# Meraki\ClaimApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**vmxNetworkDevicesClaim()**](ClaimApi.md#vmxNetworkDevicesClaim) | **POST** /networks/{networkId}/devices/claim/vmx | Claim a vMX into a network |


## `vmxNetworkDevicesClaim()`

```php
vmxNetworkDevicesClaim($network_id, $vmx_network_devices_claim_request): \Meraki\Model\VmxNetworkDevicesClaim200Response
```

Claim a vMX into a network

Claim a vMX into a network

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


$apiInstance = new Meraki\Api\ClaimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$vmx_network_devices_claim_request = new \Meraki\Model\VmxNetworkDevicesClaimRequest(); // \Meraki\Model\VmxNetworkDevicesClaimRequest

try {
    $result = $apiInstance->vmxNetworkDevicesClaim($network_id, $vmx_network_devices_claim_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClaimApi->vmxNetworkDevicesClaim: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **vmx_network_devices_claim_request** | [**\Meraki\Model\VmxNetworkDevicesClaimRequest**](../Model/VmxNetworkDevicesClaimRequest.md)|  | |

### Return type

[**\Meraki\Model\VmxNetworkDevicesClaim200Response**](../Model/VmxNetworkDevicesClaim200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
