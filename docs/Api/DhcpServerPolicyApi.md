# Meraki\DhcpServerPolicyApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer()**](DhcpServerPolicyApi.md#createNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer) | **POST** /networks/{networkId}/switch/dhcpServerPolicy/arpInspection/trustedServers | Add a server to be trusted by Dynamic ARP Inspection on this network |
| [**deleteNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer()**](DhcpServerPolicyApi.md#deleteNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer) | **DELETE** /networks/{networkId}/switch/dhcpServerPolicy/arpInspection/trustedServers/{trustedServerId} | Remove a server from being trusted by Dynamic ARP Inspection on this network |
| [**getNetworkSwitchDhcpServerPolicy()**](DhcpServerPolicyApi.md#getNetworkSwitchDhcpServerPolicy) | **GET** /networks/{networkId}/switch/dhcpServerPolicy | Return the DHCP server settings |
| [**getNetworkSwitchDhcpServerPolicyArpInspectionTrustedServers()**](DhcpServerPolicyApi.md#getNetworkSwitchDhcpServerPolicyArpInspectionTrustedServers) | **GET** /networks/{networkId}/switch/dhcpServerPolicy/arpInspection/trustedServers | Return the list of servers trusted by Dynamic ARP Inspection on this network |
| [**getNetworkSwitchDhcpServerPolicyArpInspectionWarningsByDevice()**](DhcpServerPolicyApi.md#getNetworkSwitchDhcpServerPolicyArpInspectionWarningsByDevice) | **GET** /networks/{networkId}/switch/dhcpServerPolicy/arpInspection/warnings/byDevice | Return the devices that have a Dynamic ARP Inspection warning and their warnings |
| [**updateNetworkSwitchDhcpServerPolicy()**](DhcpServerPolicyApi.md#updateNetworkSwitchDhcpServerPolicy) | **PUT** /networks/{networkId}/switch/dhcpServerPolicy | Update the DHCP server settings |
| [**updateNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer()**](DhcpServerPolicyApi.md#updateNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer) | **PUT** /networks/{networkId}/switch/dhcpServerPolicy/arpInspection/trustedServers/{trustedServerId} | Update a server that is trusted by Dynamic ARP Inspection on this network |


## `createNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer()`

```php
createNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer($network_id, $create_network_switch_dhcp_server_policy_arp_inspection_trusted_server_request): \Meraki\Model\GetNetworkSwitchDhcpServerPolicyArpInspectionTrustedServers200ResponseInner
```

Add a server to be trusted by Dynamic ARP Inspection on this network

Add a server to be trusted by Dynamic ARP Inspection on this network

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


$apiInstance = new Meraki\Api\DhcpServerPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_switch_dhcp_server_policy_arp_inspection_trusted_server_request = new \Meraki\Model\CreateNetworkSwitchDhcpServerPolicyArpInspectionTrustedServerRequest(); // \Meraki\Model\CreateNetworkSwitchDhcpServerPolicyArpInspectionTrustedServerRequest

try {
    $result = $apiInstance->createNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer($network_id, $create_network_switch_dhcp_server_policy_arp_inspection_trusted_server_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DhcpServerPolicyApi->createNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_switch_dhcp_server_policy_arp_inspection_trusted_server_request** | [**\Meraki\Model\CreateNetworkSwitchDhcpServerPolicyArpInspectionTrustedServerRequest**](../Model/CreateNetworkSwitchDhcpServerPolicyArpInspectionTrustedServerRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkSwitchDhcpServerPolicyArpInspectionTrustedServers200ResponseInner**](../Model/GetNetworkSwitchDhcpServerPolicyArpInspectionTrustedServers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer()`

```php
deleteNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer($network_id, $trusted_server_id)
```

Remove a server from being trusted by Dynamic ARP Inspection on this network

Remove a server from being trusted by Dynamic ARP Inspection on this network

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


$apiInstance = new Meraki\Api\DhcpServerPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$trusted_server_id = 'trusted_server_id_example'; // string | Trusted server ID

try {
    $apiInstance->deleteNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer($network_id, $trusted_server_id);
} catch (Exception $e) {
    echo 'Exception when calling DhcpServerPolicyApi->deleteNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **trusted_server_id** | **string**| Trusted server ID | |

### Return type

void (empty response body)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchDhcpServerPolicy()`

```php
getNetworkSwitchDhcpServerPolicy($network_id): \Meraki\Model\GetNetworkSwitchDhcpServerPolicy200Response
```

Return the DHCP server settings

Return the DHCP server settings. Blocked/allowed servers are only applied when default policy is allow/block, respectively

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


$apiInstance = new Meraki\Api\DhcpServerPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSwitchDhcpServerPolicy($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DhcpServerPolicyApi->getNetworkSwitchDhcpServerPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchDhcpServerPolicy200Response**](../Model/GetNetworkSwitchDhcpServerPolicy200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchDhcpServerPolicyArpInspectionTrustedServers()`

```php
getNetworkSwitchDhcpServerPolicyArpInspectionTrustedServers($network_id, $per_page, $starting_after, $ending_before): \Meraki\Model\GetNetworkSwitchDhcpServerPolicyArpInspectionTrustedServers200ResponseInner[]
```

Return the list of servers trusted by Dynamic ARP Inspection on this network

Return the list of servers trusted by Dynamic ARP Inspection on this network. These are also known as allow listed snoop entries

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


$apiInstance = new Meraki\Api\DhcpServerPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getNetworkSwitchDhcpServerPolicyArpInspectionTrustedServers($network_id, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DhcpServerPolicyApi->getNetworkSwitchDhcpServerPolicyArpInspectionTrustedServers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchDhcpServerPolicyArpInspectionTrustedServers200ResponseInner[]**](../Model/GetNetworkSwitchDhcpServerPolicyArpInspectionTrustedServers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchDhcpServerPolicyArpInspectionWarningsByDevice()`

```php
getNetworkSwitchDhcpServerPolicyArpInspectionWarningsByDevice($network_id, $per_page, $starting_after, $ending_before): \Meraki\Model\GetNetworkSwitchDhcpServerPolicyArpInspectionWarningsByDevice200ResponseInner[]
```

Return the devices that have a Dynamic ARP Inspection warning and their warnings

Return the devices that have a Dynamic ARP Inspection warning and their warnings

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


$apiInstance = new Meraki\Api\DhcpServerPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getNetworkSwitchDhcpServerPolicyArpInspectionWarningsByDevice($network_id, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DhcpServerPolicyApi->getNetworkSwitchDhcpServerPolicyArpInspectionWarningsByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchDhcpServerPolicyArpInspectionWarningsByDevice200ResponseInner[]**](../Model/GetNetworkSwitchDhcpServerPolicyArpInspectionWarningsByDevice200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchDhcpServerPolicy()`

```php
updateNetworkSwitchDhcpServerPolicy($network_id, $update_network_switch_dhcp_server_policy_request): \Meraki\Model\GetNetworkSwitchDhcpServerPolicy200Response
```

Update the DHCP server settings

Update the DHCP server settings. Blocked/allowed servers are only applied when default policy is allow/block, respectively

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


$apiInstance = new Meraki\Api\DhcpServerPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_switch_dhcp_server_policy_request = new \Meraki\Model\UpdateNetworkSwitchDhcpServerPolicyRequest(); // \Meraki\Model\UpdateNetworkSwitchDhcpServerPolicyRequest

try {
    $result = $apiInstance->updateNetworkSwitchDhcpServerPolicy($network_id, $update_network_switch_dhcp_server_policy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DhcpServerPolicyApi->updateNetworkSwitchDhcpServerPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_switch_dhcp_server_policy_request** | [**\Meraki\Model\UpdateNetworkSwitchDhcpServerPolicyRequest**](../Model/UpdateNetworkSwitchDhcpServerPolicyRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchDhcpServerPolicy200Response**](../Model/GetNetworkSwitchDhcpServerPolicy200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer()`

```php
updateNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer($network_id, $trusted_server_id, $update_network_switch_dhcp_server_policy_arp_inspection_trusted_server_request): \Meraki\Model\GetNetworkSwitchDhcpServerPolicyArpInspectionTrustedServers200ResponseInner
```

Update a server that is trusted by Dynamic ARP Inspection on this network

Update a server that is trusted by Dynamic ARP Inspection on this network

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


$apiInstance = new Meraki\Api\DhcpServerPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$trusted_server_id = 'trusted_server_id_example'; // string | Trusted server ID
$update_network_switch_dhcp_server_policy_arp_inspection_trusted_server_request = new \Meraki\Model\UpdateNetworkSwitchDhcpServerPolicyArpInspectionTrustedServerRequest(); // \Meraki\Model\UpdateNetworkSwitchDhcpServerPolicyArpInspectionTrustedServerRequest

try {
    $result = $apiInstance->updateNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer($network_id, $trusted_server_id, $update_network_switch_dhcp_server_policy_arp_inspection_trusted_server_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DhcpServerPolicyApi->updateNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **trusted_server_id** | **string**| Trusted server ID | |
| **update_network_switch_dhcp_server_policy_arp_inspection_trusted_server_request** | [**\Meraki\Model\UpdateNetworkSwitchDhcpServerPolicyArpInspectionTrustedServerRequest**](../Model/UpdateNetworkSwitchDhcpServerPolicyArpInspectionTrustedServerRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchDhcpServerPolicyArpInspectionTrustedServers200ResponseInner**](../Model/GetNetworkSwitchDhcpServerPolicyArpInspectionTrustedServers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
