# Meraki\BonjourForwardingApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkWirelessSsidBonjourForwarding()**](BonjourForwardingApi.md#getNetworkWirelessSsidBonjourForwarding) | **GET** /networks/{networkId}/wireless/ssids/{number}/bonjourForwarding | List the Bonjour forwarding setting and rules for the SSID |
| [**updateNetworkWirelessSsidBonjourForwarding()**](BonjourForwardingApi.md#updateNetworkWirelessSsidBonjourForwarding) | **PUT** /networks/{networkId}/wireless/ssids/{number}/bonjourForwarding | Update the bonjour forwarding setting and rules for the SSID |


## `getNetworkWirelessSsidBonjourForwarding()`

```php
getNetworkWirelessSsidBonjourForwarding($network_id, $number): \Meraki\Model\GetNetworkWirelessSsidBonjourForwarding200Response
```

List the Bonjour forwarding setting and rules for the SSID

List the Bonjour forwarding setting and rules for the SSID

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


$apiInstance = new Meraki\Api\BonjourForwardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidBonjourForwarding($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BonjourForwardingApi->getNetworkWirelessSsidBonjourForwarding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidBonjourForwarding200Response**](../Model/GetNetworkWirelessSsidBonjourForwarding200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessSsidBonjourForwarding()`

```php
updateNetworkWirelessSsidBonjourForwarding($network_id, $number, $update_network_wireless_ssid_bonjour_forwarding_request): \Meraki\Model\GetNetworkWirelessSsidBonjourForwarding200Response
```

Update the bonjour forwarding setting and rules for the SSID

Update the bonjour forwarding setting and rules for the SSID

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


$apiInstance = new Meraki\Api\BonjourForwardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_bonjour_forwarding_request = new \Meraki\Model\UpdateNetworkWirelessSsidBonjourForwardingRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidBonjourForwardingRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsidBonjourForwarding($network_id, $number, $update_network_wireless_ssid_bonjour_forwarding_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BonjourForwardingApi->updateNetworkWirelessSsidBonjourForwarding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_bonjour_forwarding_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidBonjourForwardingRequest**](../Model/UpdateNetworkWirelessSsidBonjourForwardingRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidBonjourForwarding200Response**](../Model/GetNetworkWirelessSsidBonjourForwarding200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
