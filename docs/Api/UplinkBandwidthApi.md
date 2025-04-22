# Meraki\UplinkBandwidthApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkApplianceTrafficShapingUplinkBandwidth()**](UplinkBandwidthApi.md#getNetworkApplianceTrafficShapingUplinkBandwidth) | **GET** /networks/{networkId}/appliance/trafficShaping/uplinkBandwidth | Returns the uplink bandwidth limits for your MX network |
| [**updateNetworkApplianceTrafficShapingUplinkBandwidth()**](UplinkBandwidthApi.md#updateNetworkApplianceTrafficShapingUplinkBandwidth) | **PUT** /networks/{networkId}/appliance/trafficShaping/uplinkBandwidth | Updates the uplink bandwidth settings for your MX network. |


## `getNetworkApplianceTrafficShapingUplinkBandwidth()`

```php
getNetworkApplianceTrafficShapingUplinkBandwidth($network_id): \Meraki\Model\GetNetworkApplianceTrafficShapingUplinkBandwidth200Response
```

Returns the uplink bandwidth limits for your MX network

Returns the uplink bandwidth limits for your MX network. This may not reflect the affected device's hardware capabilities.  For more information on your device's hardware capabilities, please consult our MX Family Datasheet - [https://meraki.cisco.com/product-collateral/mx-family-datasheet/?file]

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


$apiInstance = new Meraki\Api\UplinkBandwidthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceTrafficShapingUplinkBandwidth($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UplinkBandwidthApi->getNetworkApplianceTrafficShapingUplinkBandwidth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceTrafficShapingUplinkBandwidth200Response**](../Model/GetNetworkApplianceTrafficShapingUplinkBandwidth200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceTrafficShapingUplinkBandwidth()`

```php
updateNetworkApplianceTrafficShapingUplinkBandwidth($network_id, $update_network_appliance_traffic_shaping_uplink_bandwidth_request): object
```

Updates the uplink bandwidth settings for your MX network.

Updates the uplink bandwidth settings for your MX network.

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


$apiInstance = new Meraki\Api\UplinkBandwidthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_traffic_shaping_uplink_bandwidth_request = new \Meraki\Model\UpdateNetworkApplianceTrafficShapingUplinkBandwidthRequest(); // \Meraki\Model\UpdateNetworkApplianceTrafficShapingUplinkBandwidthRequest

try {
    $result = $apiInstance->updateNetworkApplianceTrafficShapingUplinkBandwidth($network_id, $update_network_appliance_traffic_shaping_uplink_bandwidth_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UplinkBandwidthApi->updateNetworkApplianceTrafficShapingUplinkBandwidth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_traffic_shaping_uplink_bandwidth_request** | [**\Meraki\Model\UpdateNetworkApplianceTrafficShapingUplinkBandwidthRequest**](../Model/UpdateNetworkApplianceTrafficShapingUplinkBandwidthRequest.md)|  | [optional] |

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
