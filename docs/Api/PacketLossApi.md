# Meraki\PacketLossApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrganizationWirelessDevicesPacketLossByClient()**](PacketLossApi.md#getOrganizationWirelessDevicesPacketLossByClient) | **GET** /organizations/{organizationId}/wireless/devices/packetLoss/byClient | Get average packet loss for the given timespan for all clients in the organization. |
| [**getOrganizationWirelessDevicesPacketLossByDevice()**](PacketLossApi.md#getOrganizationWirelessDevicesPacketLossByDevice) | **GET** /organizations/{organizationId}/wireless/devices/packetLoss/byDevice | Get average packet loss for the given timespan for all devices in the organization |
| [**getOrganizationWirelessDevicesPacketLossByNetwork()**](PacketLossApi.md#getOrganizationWirelessDevicesPacketLossByNetwork) | **GET** /organizations/{organizationId}/wireless/devices/packetLoss/byNetwork | Get average packet loss for the given timespan for all networks in the organization. |


## `getOrganizationWirelessDevicesPacketLossByClient()`

```php
getOrganizationWirelessDevicesPacketLossByClient($organization_id, $network_ids, $ssids, $bands, $macs, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationWirelessDevicesPacketLossByClient200ResponseInner[]
```

Get average packet loss for the given timespan for all clients in the organization.

Get average packet loss for the given timespan for all clients in the organization.

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


$apiInstance = new Meraki\Api\PacketLossApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_ids = array('network_ids_example'); // string[] | Filter results by network.
$ssids = array(56); // int[] | Filter results by SSID number.
$bands = array('bands_example'); // string[] | Filter results by band. Valid bands are: 2.4, 5, and 6.
$macs = array('macs_example'); // string[] | Filter results by client mac address(es).
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 90 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 90 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 5 minutes and be less than or equal to 90 days. The default is 7 days.

try {
    $result = $apiInstance->getOrganizationWirelessDevicesPacketLossByClient($organization_id, $network_ids, $ssids, $bands, $macs, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PacketLossApi->getOrganizationWirelessDevicesPacketLossByClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_ids** | [**string[]**](../Model/string.md)| Filter results by network. | [optional] |
| **ssids** | [**int[]**](../Model/int.md)| Filter results by SSID number. | [optional] |
| **bands** | [**string[]**](../Model/string.md)| Filter results by band. Valid bands are: 2.4, 5, and 6. | [optional] |
| **macs** | [**string[]**](../Model/string.md)| Filter results by client mac address(es). | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 90 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 90 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 5 minutes and be less than or equal to 90 days. The default is 7 days. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessDevicesPacketLossByClient200ResponseInner[]**](../Model/GetOrganizationWirelessDevicesPacketLossByClient200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessDevicesPacketLossByDevice()`

```php
getOrganizationWirelessDevicesPacketLossByDevice($organization_id, $network_ids, $serials, $ssids, $bands, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationWirelessDevicesPacketLossByDevice200ResponseInner[]
```

Get average packet loss for the given timespan for all devices in the organization

Get average packet loss for the given timespan for all devices in the organization. Does not include device's own traffic.

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


$apiInstance = new Meraki\Api\PacketLossApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_ids = array('network_ids_example'); // string[] | Filter results by network.
$serials = array('serials_example'); // string[] | Filter results by device.
$ssids = array(56); // int[] | Filter results by SSID number.
$bands = array('bands_example'); // string[] | Filter results by band. Valid bands are: 2.4, 5, and 6.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 90 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 90 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 5 minutes and be less than or equal to 90 days. The default is 7 days.

try {
    $result = $apiInstance->getOrganizationWirelessDevicesPacketLossByDevice($organization_id, $network_ids, $serials, $ssids, $bands, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PacketLossApi->getOrganizationWirelessDevicesPacketLossByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_ids** | [**string[]**](../Model/string.md)| Filter results by network. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Filter results by device. | [optional] |
| **ssids** | [**int[]**](../Model/int.md)| Filter results by SSID number. | [optional] |
| **bands** | [**string[]**](../Model/string.md)| Filter results by band. Valid bands are: 2.4, 5, and 6. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 90 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 90 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 5 minutes and be less than or equal to 90 days. The default is 7 days. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessDevicesPacketLossByDevice200ResponseInner[]**](../Model/GetOrganizationWirelessDevicesPacketLossByDevice200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessDevicesPacketLossByNetwork()`

```php
getOrganizationWirelessDevicesPacketLossByNetwork($organization_id, $network_ids, $serials, $ssids, $bands, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationWirelessDevicesPacketLossByNetwork200ResponseInner[]
```

Get average packet loss for the given timespan for all networks in the organization.

Get average packet loss for the given timespan for all networks in the organization.

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


$apiInstance = new Meraki\Api\PacketLossApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_ids = array('network_ids_example'); // string[] | Filter results by network.
$serials = array('serials_example'); // string[] | Filter results by device.
$ssids = array(56); // int[] | Filter results by SSID number.
$bands = array('bands_example'); // string[] | Filter results by band. Valid bands are: 2.4, 5, and 6.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 90 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 90 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 5 minutes and be less than or equal to 90 days. The default is 7 days.

try {
    $result = $apiInstance->getOrganizationWirelessDevicesPacketLossByNetwork($organization_id, $network_ids, $serials, $ssids, $bands, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PacketLossApi->getOrganizationWirelessDevicesPacketLossByNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_ids** | [**string[]**](../Model/string.md)| Filter results by network. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Filter results by device. | [optional] |
| **ssids** | [**int[]**](../Model/int.md)| Filter results by SSID number. | [optional] |
| **bands** | [**string[]**](../Model/string.md)| Filter results by band. Valid bands are: 2.4, 5, and 6. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 90 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 90 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 5 minutes and be less than or equal to 90 days. The default is 7 days. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessDevicesPacketLossByNetwork200ResponseInner[]**](../Model/GetOrganizationWirelessDevicesPacketLossByNetwork200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
