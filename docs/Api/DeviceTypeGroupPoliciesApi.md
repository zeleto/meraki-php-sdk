# Meraki\DeviceTypeGroupPoliciesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkWirelessSsidDeviceTypeGroupPolicies()**](DeviceTypeGroupPoliciesApi.md#getNetworkWirelessSsidDeviceTypeGroupPolicies) | **GET** /networks/{networkId}/wireless/ssids/{number}/deviceTypeGroupPolicies | List the device type group policies for the SSID |
| [**updateNetworkWirelessSsidDeviceTypeGroupPolicies()**](DeviceTypeGroupPoliciesApi.md#updateNetworkWirelessSsidDeviceTypeGroupPolicies) | **PUT** /networks/{networkId}/wireless/ssids/{number}/deviceTypeGroupPolicies | Update the device type group policies for the SSID |


## `getNetworkWirelessSsidDeviceTypeGroupPolicies()`

```php
getNetworkWirelessSsidDeviceTypeGroupPolicies($network_id, $number): object
```

List the device type group policies for the SSID

List the device type group policies for the SSID

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


$apiInstance = new Meraki\Api\DeviceTypeGroupPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidDeviceTypeGroupPolicies($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceTypeGroupPoliciesApi->getNetworkWirelessSsidDeviceTypeGroupPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

**object**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessSsidDeviceTypeGroupPolicies()`

```php
updateNetworkWirelessSsidDeviceTypeGroupPolicies($network_id, $number, $update_network_wireless_ssid_device_type_group_policies_request): object
```

Update the device type group policies for the SSID

Update the device type group policies for the SSID

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


$apiInstance = new Meraki\Api\DeviceTypeGroupPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_device_type_group_policies_request = new \Meraki\Model\UpdateNetworkWirelessSsidDeviceTypeGroupPoliciesRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidDeviceTypeGroupPoliciesRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsidDeviceTypeGroupPolicies($network_id, $number, $update_network_wireless_ssid_device_type_group_policies_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceTypeGroupPoliciesApi->updateNetworkWirelessSsidDeviceTypeGroupPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_device_type_group_policies_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidDeviceTypeGroupPoliciesRequest**](../Model/UpdateNetworkWirelessSsidDeviceTypeGroupPoliciesRequest.md)|  | [optional] |

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
