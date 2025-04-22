# Meraki\SingleLanApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkApplianceSingleLan()**](SingleLanApi.md#getNetworkApplianceSingleLan) | **GET** /networks/{networkId}/appliance/singleLan | Return single LAN configuration |
| [**updateNetworkApplianceSingleLan()**](SingleLanApi.md#updateNetworkApplianceSingleLan) | **PUT** /networks/{networkId}/appliance/singleLan | Update single LAN configuration |


## `getNetworkApplianceSingleLan()`

```php
getNetworkApplianceSingleLan($network_id): \Meraki\Model\GetNetworkApplianceSingleLan200Response
```

Return single LAN configuration

Return single LAN configuration

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


$apiInstance = new Meraki\Api\SingleLanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceSingleLan($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SingleLanApi->getNetworkApplianceSingleLan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceSingleLan200Response**](../Model/GetNetworkApplianceSingleLan200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceSingleLan()`

```php
updateNetworkApplianceSingleLan($network_id, $update_network_appliance_single_lan_request): \Meraki\Model\GetNetworkApplianceSingleLan200Response
```

Update single LAN configuration

Update single LAN configuration

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


$apiInstance = new Meraki\Api\SingleLanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_single_lan_request = new \Meraki\Model\UpdateNetworkApplianceSingleLanRequest(); // \Meraki\Model\UpdateNetworkApplianceSingleLanRequest

try {
    $result = $apiInstance->updateNetworkApplianceSingleLan($network_id, $update_network_appliance_single_lan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SingleLanApi->updateNetworkApplianceSingleLan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_single_lan_request** | [**\Meraki\Model\UpdateNetworkApplianceSingleLanRequest**](../Model/UpdateNetworkApplianceSingleLanRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceSingleLan200Response**](../Model/GetNetworkApplianceSingleLan200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
