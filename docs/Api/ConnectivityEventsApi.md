# Meraki\ConnectivityEventsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkWirelessClientConnectivityEvents()**](ConnectivityEventsApi.md#getNetworkWirelessClientConnectivityEvents) | **GET** /networks/{networkId}/wireless/clients/{clientId}/connectivityEvents | List the wireless connectivity events for a client within a network in the timespan. |


## `getNetworkWirelessClientConnectivityEvents()`

```php
getNetworkWirelessClientConnectivityEvents($network_id, $client_id, $per_page, $starting_after, $ending_before, $sort_order, $t0, $t1, $timespan, $types, $band, $ssid_number, $included_severities, $device_serial): \Meraki\Model\GetNetworkWirelessClientConnectivityEvents200ResponseInner[]
```

List the wireless connectivity events for a client within a network in the timespan.

List the wireless connectivity events for a client within a network in the timespan.

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


$apiInstance = new Meraki\Api\ConnectivityEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$client_id = 'client_id_example'; // string | Client ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$sort_order = 'sort_order_example'; // string | Sorted order of entries. Order options are 'ascending' and 'descending'. Default is 'ascending'.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day.
$types = array('types_example'); // string[] | A list of event types to include. If not specified, events of all types will be returned. Valid types are 'assoc', 'disassoc', 'auth', 'deauth', 'dns', 'dhcp', 'roam', 'connection' and/or 'sticky'.
$band = 'band_example'; // string | Filter results by band. Valid bands are '2.4', '5' or '6'.
$ssid_number = 56; // int | Filter results by SSID. If not specified, events for all SSIDs will be returned.
$included_severities = array('included_severities_example'); // string[] | A list of severities to include. If not specified, events of all severities will be returned. Valid severities are 'good', 'info', 'warn' and/or 'bad'.
$device_serial = 'device_serial_example'; // string | Filter results by an AP's serial number.

try {
    $result = $apiInstance->getNetworkWirelessClientConnectivityEvents($network_id, $client_id, $per_page, $starting_after, $ending_before, $sort_order, $t0, $t1, $timespan, $types, $band, $ssid_number, $included_severities, $device_serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectivityEventsApi->getNetworkWirelessClientConnectivityEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **client_id** | **string**| Client ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **sort_order** | **string**| Sorted order of entries. Order options are &#39;ascending&#39; and &#39;descending&#39;. Default is &#39;ascending&#39;. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. | [optional] |
| **types** | [**string[]**](../Model/string.md)| A list of event types to include. If not specified, events of all types will be returned. Valid types are &#39;assoc&#39;, &#39;disassoc&#39;, &#39;auth&#39;, &#39;deauth&#39;, &#39;dns&#39;, &#39;dhcp&#39;, &#39;roam&#39;, &#39;connection&#39; and/or &#39;sticky&#39;. | [optional] |
| **band** | **string**| Filter results by band. Valid bands are &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;. | [optional] |
| **ssid_number** | **int**| Filter results by SSID. If not specified, events for all SSIDs will be returned. | [optional] |
| **included_severities** | [**string[]**](../Model/string.md)| A list of severities to include. If not specified, events of all severities will be returned. Valid severities are &#39;good&#39;, &#39;info&#39;, &#39;warn&#39; and/or &#39;bad&#39;. | [optional] |
| **device_serial** | **string**| Filter results by an AP&#39;s serial number. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessClientConnectivityEvents200ResponseInner[]**](../Model/GetNetworkWirelessClientConnectivityEvents200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
