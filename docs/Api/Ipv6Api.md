# Meraki\Ipv6Api

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**updateDeviceWirelessAlternateManagementInterfaceIpv6()**](Ipv6Api.md#updateDeviceWirelessAlternateManagementInterfaceIpv6) | **PUT** /devices/{serial}/wireless/alternateManagementInterface/ipv6 | Update alternate management interface IPv6 address |


## `updateDeviceWirelessAlternateManagementInterfaceIpv6()`

```php
updateDeviceWirelessAlternateManagementInterfaceIpv6($serial, $update_device_wireless_alternate_management_interface_ipv6_request): \Meraki\Model\UpdateDeviceWirelessAlternateManagementInterfaceIpv6200Response
```

Update alternate management interface IPv6 address

Update alternate management interface IPv6 address

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


$apiInstance = new Meraki\Api\Ipv6Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_wireless_alternate_management_interface_ipv6_request = new \Meraki\Model\UpdateDeviceWirelessAlternateManagementInterfaceIpv6Request(); // \Meraki\Model\UpdateDeviceWirelessAlternateManagementInterfaceIpv6Request

try {
    $result = $apiInstance->updateDeviceWirelessAlternateManagementInterfaceIpv6($serial, $update_device_wireless_alternate_management_interface_ipv6_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Ipv6Api->updateDeviceWirelessAlternateManagementInterfaceIpv6: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_wireless_alternate_management_interface_ipv6_request** | [**\Meraki\Model\UpdateDeviceWirelessAlternateManagementInterfaceIpv6Request**](../Model/UpdateDeviceWirelessAlternateManagementInterfaceIpv6Request.md)|  | [optional] |

### Return type

[**\Meraki\Model\UpdateDeviceWirelessAlternateManagementInterfaceIpv6200Response**](../Model/UpdateDeviceWirelessAlternateManagementInterfaceIpv6200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
