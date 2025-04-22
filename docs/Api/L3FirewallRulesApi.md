# Meraki\L3FirewallRulesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkApplianceFirewallL3FirewallRules()**](L3FirewallRulesApi.md#getNetworkApplianceFirewallL3FirewallRules) | **GET** /networks/{networkId}/appliance/firewall/l3FirewallRules | Return the L3 firewall rules for an MX network |
| [**getNetworkWirelessSsidFirewallL3FirewallRules()**](L3FirewallRulesApi.md#getNetworkWirelessSsidFirewallL3FirewallRules) | **GET** /networks/{networkId}/wireless/ssids/{number}/firewall/l3FirewallRules | Return the L3 firewall rules for an SSID on an MR network |
| [**updateNetworkApplianceFirewallL3FirewallRules()**](L3FirewallRulesApi.md#updateNetworkApplianceFirewallL3FirewallRules) | **PUT** /networks/{networkId}/appliance/firewall/l3FirewallRules | Update the L3 firewall rules of an MX network |
| [**updateNetworkWirelessSsidFirewallL3FirewallRules()**](L3FirewallRulesApi.md#updateNetworkWirelessSsidFirewallL3FirewallRules) | **PUT** /networks/{networkId}/wireless/ssids/{number}/firewall/l3FirewallRules | Update the L3 firewall rules of an SSID on an MR network |


## `getNetworkApplianceFirewallL3FirewallRules()`

```php
getNetworkApplianceFirewallL3FirewallRules($network_id): object
```

Return the L3 firewall rules for an MX network

Return the L3 firewall rules for an MX network

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


$apiInstance = new Meraki\Api\L3FirewallRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceFirewallL3FirewallRules($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling L3FirewallRulesApi->getNetworkApplianceFirewallL3FirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

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

## `getNetworkWirelessSsidFirewallL3FirewallRules()`

```php
getNetworkWirelessSsidFirewallL3FirewallRules($network_id, $number): \Meraki\Model\GetNetworkWirelessSsidFirewallL3FirewallRules200Response
```

Return the L3 firewall rules for an SSID on an MR network

Return the L3 firewall rules for an SSID on an MR network

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


$apiInstance = new Meraki\Api\L3FirewallRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidFirewallL3FirewallRules($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling L3FirewallRulesApi->getNetworkWirelessSsidFirewallL3FirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidFirewallL3FirewallRules200Response**](../Model/GetNetworkWirelessSsidFirewallL3FirewallRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceFirewallL3FirewallRules()`

```php
updateNetworkApplianceFirewallL3FirewallRules($network_id, $update_network_appliance_firewall_l3_firewall_rules_request): object
```

Update the L3 firewall rules of an MX network

Update the L3 firewall rules of an MX network

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


$apiInstance = new Meraki\Api\L3FirewallRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_firewall_l3_firewall_rules_request = new \Meraki\Model\UpdateNetworkApplianceFirewallL3FirewallRulesRequest(); // \Meraki\Model\UpdateNetworkApplianceFirewallL3FirewallRulesRequest

try {
    $result = $apiInstance->updateNetworkApplianceFirewallL3FirewallRules($network_id, $update_network_appliance_firewall_l3_firewall_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling L3FirewallRulesApi->updateNetworkApplianceFirewallL3FirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_firewall_l3_firewall_rules_request** | [**\Meraki\Model\UpdateNetworkApplianceFirewallL3FirewallRulesRequest**](../Model/UpdateNetworkApplianceFirewallL3FirewallRulesRequest.md)|  | [optional] |

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

## `updateNetworkWirelessSsidFirewallL3FirewallRules()`

```php
updateNetworkWirelessSsidFirewallL3FirewallRules($network_id, $number, $update_network_wireless_ssid_firewall_l3_firewall_rules_request): \Meraki\Model\GetNetworkWirelessSsidFirewallL3FirewallRules200Response
```

Update the L3 firewall rules of an SSID on an MR network

Update the L3 firewall rules of an SSID on an MR network

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


$apiInstance = new Meraki\Api\L3FirewallRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_firewall_l3_firewall_rules_request = new \Meraki\Model\UpdateNetworkWirelessSsidFirewallL3FirewallRulesRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidFirewallL3FirewallRulesRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsidFirewallL3FirewallRules($network_id, $number, $update_network_wireless_ssid_firewall_l3_firewall_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling L3FirewallRulesApi->updateNetworkWirelessSsidFirewallL3FirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_firewall_l3_firewall_rules_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidFirewallL3FirewallRulesRequest**](../Model/UpdateNetworkWirelessSsidFirewallL3FirewallRulesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidFirewallL3FirewallRules200Response**](../Model/GetNetworkWirelessSsidFirewallL3FirewallRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
