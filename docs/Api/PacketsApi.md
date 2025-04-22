# Meraki\PacketsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDeviceSwitchPortsStatusesPackets()**](PacketsApi.md#getDeviceSwitchPortsStatusesPackets) | **GET** /devices/{serial}/switch/ports/statuses/packets | Return the packet counters for all the ports of a switch |
| [**getOrganizationWirelessControllerDevicesInterfacesPacketsOverviewByDevice()**](PacketsApi.md#getOrganizationWirelessControllerDevicesInterfacesPacketsOverviewByDevice) | **GET** /organizations/{organizationId}/wirelessController/devices/interfaces/packets/overview/byDevice | Retrieve the packet counters for the interfaces of a Wireless LAN controller |


## `getDeviceSwitchPortsStatusesPackets()`

```php
getDeviceSwitchPortsStatusesPackets($serial, $t0, $timespan): \Meraki\Model\GetDeviceSwitchPortsStatusesPackets200ResponseInner[]
```

Return the packet counters for all the ports of a switch

Return the packet counters for all the ports of a switch

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


$apiInstance = new Meraki\Api\PacketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 1 day from today.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 1 day. The default is 1 day.

try {
    $result = $apiInstance->getDeviceSwitchPortsStatusesPackets($serial, $t0, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PacketsApi->getDeviceSwitchPortsStatusesPackets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 1 day from today. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 1 day. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetDeviceSwitchPortsStatusesPackets200ResponseInner[]**](../Model/GetDeviceSwitchPortsStatusesPackets200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessControllerDevicesInterfacesPacketsOverviewByDevice()`

```php
getOrganizationWirelessControllerDevicesInterfacesPacketsOverviewByDevice($organization_id, $serials, $names, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesPacketsOverviewByDevice200Response
```

Retrieve the packet counters for the interfaces of a Wireless LAN controller

Retrieve the packet counters for the interfaces of a Wireless LAN controller

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


$apiInstance = new Meraki\Api\PacketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$serials = array('serials_example'); // string[] | Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches.
$names = array('names_example'); // string[] | Optional parameter to filter wireless LAN controller by its interface name. This filter uses multiple exact matches.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 1 day from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 1 day after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 1 day. The default is 1 hour.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessControllerDevicesInterfacesPacketsOverviewByDevice($organization_id, $serials, $names, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PacketsApi->getOrganizationWirelessControllerDevicesInterfacesPacketsOverviewByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches. | [optional] |
| **names** | [**string[]**](../Model/string.md)| Optional parameter to filter wireless LAN controller by its interface name. This filter uses multiple exact matches. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 1 day from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 1 day after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 1 day. The default is 1 hour. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesPacketsOverviewByDevice200Response**](../Model/GetOrganizationWirelessControllerDevicesInterfacesPacketsOverviewByDevice200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
