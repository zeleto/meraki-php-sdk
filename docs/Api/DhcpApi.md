# Meraki\DhcpApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDeviceApplianceDhcpSubnets()**](DhcpApi.md#getDeviceApplianceDhcpSubnets) | **GET** /devices/{serial}/appliance/dhcp/subnets | Return the DHCP subnet information for an appliance |
| [**getDeviceSwitchRoutingInterfaceDhcp()**](DhcpApi.md#getDeviceSwitchRoutingInterfaceDhcp) | **GET** /devices/{serial}/switch/routing/interfaces/{interfaceId}/dhcp | Return a layer 3 interface DHCP configuration for a switch |
| [**getNetworkCellularGatewayDhcp()**](DhcpApi.md#getNetworkCellularGatewayDhcp) | **GET** /networks/{networkId}/cellularGateway/dhcp | List common DHCP settings of MGs |
| [**getNetworkSwitchDhcpV4ServersSeen()**](DhcpApi.md#getNetworkSwitchDhcpV4ServersSeen) | **GET** /networks/{networkId}/switch/dhcp/v4/servers/seen | Return the network&#39;s DHCPv4 servers seen within the selected timeframe (default 1 day) |
| [**getNetworkSwitchStackRoutingInterfaceDhcp()**](DhcpApi.md#getNetworkSwitchStackRoutingInterfaceDhcp) | **GET** /networks/{networkId}/switch/stacks/{switchStackId}/routing/interfaces/{interfaceId}/dhcp | Return a layer 3 interface DHCP configuration for a switch stack |
| [**updateDeviceSwitchRoutingInterfaceDhcp()**](DhcpApi.md#updateDeviceSwitchRoutingInterfaceDhcp) | **PUT** /devices/{serial}/switch/routing/interfaces/{interfaceId}/dhcp | Update a layer 3 interface DHCP configuration for a switch |
| [**updateNetworkCellularGatewayDhcp()**](DhcpApi.md#updateNetworkCellularGatewayDhcp) | **PUT** /networks/{networkId}/cellularGateway/dhcp | Update common DHCP settings of MGs |
| [**updateNetworkSwitchStackRoutingInterfaceDhcp()**](DhcpApi.md#updateNetworkSwitchStackRoutingInterfaceDhcp) | **PUT** /networks/{networkId}/switch/stacks/{switchStackId}/routing/interfaces/{interfaceId}/dhcp | Update a layer 3 interface DHCP configuration for a switch stack |


## `getDeviceApplianceDhcpSubnets()`

```php
getDeviceApplianceDhcpSubnets($serial): \Meraki\Model\GetDeviceApplianceDhcpSubnets200ResponseInner[]
```

Return the DHCP subnet information for an appliance

Return the DHCP subnet information for an appliance

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


$apiInstance = new Meraki\Api\DhcpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceApplianceDhcpSubnets($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DhcpApi->getDeviceApplianceDhcpSubnets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceApplianceDhcpSubnets200ResponseInner[]**](../Model/GetDeviceApplianceDhcpSubnets200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceSwitchRoutingInterfaceDhcp()`

```php
getDeviceSwitchRoutingInterfaceDhcp($serial, $interface_id): \Meraki\Model\GetDeviceSwitchRoutingInterfaceDhcp200Response
```

Return a layer 3 interface DHCP configuration for a switch

Return a layer 3 interface DHCP configuration for a switch

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


$apiInstance = new Meraki\Api\DhcpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$interface_id = 'interface_id_example'; // string | Interface ID

try {
    $result = $apiInstance->getDeviceSwitchRoutingInterfaceDhcp($serial, $interface_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DhcpApi->getDeviceSwitchRoutingInterfaceDhcp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **interface_id** | **string**| Interface ID | |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingInterfaceDhcp200Response**](../Model/GetDeviceSwitchRoutingInterfaceDhcp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkCellularGatewayDhcp()`

```php
getNetworkCellularGatewayDhcp($network_id): \Meraki\Model\GetNetworkCellularGatewayDhcp200Response
```

List common DHCP settings of MGs

List common DHCP settings of MGs

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


$apiInstance = new Meraki\Api\DhcpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkCellularGatewayDhcp($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DhcpApi->getNetworkCellularGatewayDhcp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkCellularGatewayDhcp200Response**](../Model/GetNetworkCellularGatewayDhcp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchDhcpV4ServersSeen()`

```php
getNetworkSwitchDhcpV4ServersSeen($network_id, $t0, $timespan, $per_page, $starting_after, $ending_before): \Meraki\Model\GetNetworkSwitchDhcpV4ServersSeen200ResponseInner[]
```

Return the network's DHCPv4 servers seen within the selected timeframe (default 1 day)

Return the network's DHCPv4 servers seen within the selected timeframe (default 1 day)

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


$apiInstance = new Meraki\Api\DhcpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 31 days. The default is 1 day.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getNetworkSwitchDhcpV4ServersSeen($network_id, $t0, $timespan, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DhcpApi->getNetworkSwitchDhcpV4ServersSeen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchDhcpV4ServersSeen200ResponseInner[]**](../Model/GetNetworkSwitchDhcpV4ServersSeen200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchStackRoutingInterfaceDhcp()`

```php
getNetworkSwitchStackRoutingInterfaceDhcp($network_id, $switch_stack_id, $interface_id): \Meraki\Model\GetDeviceSwitchRoutingInterfaceDhcp200Response
```

Return a layer 3 interface DHCP configuration for a switch stack

Return a layer 3 interface DHCP configuration for a switch stack

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


$apiInstance = new Meraki\Api\DhcpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$switch_stack_id = 'switch_stack_id_example'; // string | Switch stack ID
$interface_id = 'interface_id_example'; // string | Interface ID

try {
    $result = $apiInstance->getNetworkSwitchStackRoutingInterfaceDhcp($network_id, $switch_stack_id, $interface_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DhcpApi->getNetworkSwitchStackRoutingInterfaceDhcp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **switch_stack_id** | **string**| Switch stack ID | |
| **interface_id** | **string**| Interface ID | |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingInterfaceDhcp200Response**](../Model/GetDeviceSwitchRoutingInterfaceDhcp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceSwitchRoutingInterfaceDhcp()`

```php
updateDeviceSwitchRoutingInterfaceDhcp($serial, $interface_id, $update_device_switch_routing_interface_dhcp_request): \Meraki\Model\GetDeviceSwitchRoutingInterfaceDhcp200Response
```

Update a layer 3 interface DHCP configuration for a switch

Update a layer 3 interface DHCP configuration for a switch

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


$apiInstance = new Meraki\Api\DhcpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$interface_id = 'interface_id_example'; // string | Interface ID
$update_device_switch_routing_interface_dhcp_request = new \Meraki\Model\UpdateDeviceSwitchRoutingInterfaceDhcpRequest(); // \Meraki\Model\UpdateDeviceSwitchRoutingInterfaceDhcpRequest

try {
    $result = $apiInstance->updateDeviceSwitchRoutingInterfaceDhcp($serial, $interface_id, $update_device_switch_routing_interface_dhcp_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DhcpApi->updateDeviceSwitchRoutingInterfaceDhcp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **interface_id** | **string**| Interface ID | |
| **update_device_switch_routing_interface_dhcp_request** | [**\Meraki\Model\UpdateDeviceSwitchRoutingInterfaceDhcpRequest**](../Model/UpdateDeviceSwitchRoutingInterfaceDhcpRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingInterfaceDhcp200Response**](../Model/GetDeviceSwitchRoutingInterfaceDhcp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkCellularGatewayDhcp()`

```php
updateNetworkCellularGatewayDhcp($network_id, $update_network_cellular_gateway_dhcp_request): \Meraki\Model\GetNetworkCellularGatewayDhcp200Response
```

Update common DHCP settings of MGs

Update common DHCP settings of MGs

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


$apiInstance = new Meraki\Api\DhcpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_cellular_gateway_dhcp_request = new \Meraki\Model\UpdateNetworkCellularGatewayDhcpRequest(); // \Meraki\Model\UpdateNetworkCellularGatewayDhcpRequest

try {
    $result = $apiInstance->updateNetworkCellularGatewayDhcp($network_id, $update_network_cellular_gateway_dhcp_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DhcpApi->updateNetworkCellularGatewayDhcp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_cellular_gateway_dhcp_request** | [**\Meraki\Model\UpdateNetworkCellularGatewayDhcpRequest**](../Model/UpdateNetworkCellularGatewayDhcpRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkCellularGatewayDhcp200Response**](../Model/GetNetworkCellularGatewayDhcp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchStackRoutingInterfaceDhcp()`

```php
updateNetworkSwitchStackRoutingInterfaceDhcp($network_id, $switch_stack_id, $interface_id, $update_network_switch_stack_routing_interface_dhcp_request): \Meraki\Model\GetDeviceSwitchRoutingInterfaceDhcp200Response
```

Update a layer 3 interface DHCP configuration for a switch stack

Update a layer 3 interface DHCP configuration for a switch stack

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


$apiInstance = new Meraki\Api\DhcpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$switch_stack_id = 'switch_stack_id_example'; // string | Switch stack ID
$interface_id = 'interface_id_example'; // string | Interface ID
$update_network_switch_stack_routing_interface_dhcp_request = new \Meraki\Model\UpdateNetworkSwitchStackRoutingInterfaceDhcpRequest(); // \Meraki\Model\UpdateNetworkSwitchStackRoutingInterfaceDhcpRequest

try {
    $result = $apiInstance->updateNetworkSwitchStackRoutingInterfaceDhcp($network_id, $switch_stack_id, $interface_id, $update_network_switch_stack_routing_interface_dhcp_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DhcpApi->updateNetworkSwitchStackRoutingInterfaceDhcp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **switch_stack_id** | **string**| Switch stack ID | |
| **interface_id** | **string**| Interface ID | |
| **update_network_switch_stack_routing_interface_dhcp_request** | [**\Meraki\Model\UpdateNetworkSwitchStackRoutingInterfaceDhcpRequest**](../Model/UpdateNetworkSwitchStackRoutingInterfaceDhcpRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingInterfaceDhcp200Response**](../Model/GetDeviceSwitchRoutingInterfaceDhcp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
