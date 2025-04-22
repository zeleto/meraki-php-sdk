# Meraki\AvailabilitiesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrganizationDevicesAvailabilities()**](AvailabilitiesApi.md#getOrganizationDevicesAvailabilities) | **GET** /organizations/{organizationId}/devices/availabilities | List the availability information for devices in an organization |
| [**getOrganizationDevicesAvailabilitiesChangeHistory()**](AvailabilitiesApi.md#getOrganizationDevicesAvailabilitiesChangeHistory) | **GET** /organizations/{organizationId}/devices/availabilities/changeHistory | List the availability history information for devices in an organization. |
| [**getOrganizationWirelessControllerAvailabilitiesChangeHistory()**](AvailabilitiesApi.md#getOrganizationWirelessControllerAvailabilitiesChangeHistory) | **GET** /organizations/{organizationId}/wirelessController/availabilities/changeHistory | List connectivity data of wireless LAN controllers in an organization |


## `getOrganizationDevicesAvailabilities()`

```php
getOrganizationDevicesAvailabilities($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $product_types, $serials, $tags, $tags_filter_type, $statuses): \Meraki\Model\GetOrganizationDevicesAvailabilities200ResponseInner[]
```

List the availability information for devices in an organization

List the availability information for devices in an organization. The data returned by this endpoint is updated every 5 minutes.

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


$apiInstance = new Meraki\Api\AvailabilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter device availabilities by network ID. This filter uses multiple exact matches.
$product_types = array('product_types_example'); // string[] | Optional parameter to filter device availabilities by device product types. This filter uses multiple exact matches. Valid types are wireless, appliance, switch, camera, cellularGateway, sensor, wirelessController, and campusGateway
$serials = array('serials_example'); // string[] | Optional parameter to filter device availabilities by device serial numbers. This filter uses multiple exact matches.
$tags = array('tags_example'); // string[] | An optional parameter to filter devices by tags. The filtering is case-sensitive. If tags are included, 'tagsFilterType' should also be included (see below). This filter uses multiple exact matches.
$tags_filter_type = 'tags_filter_type_example'; // string | An optional parameter of value 'withAnyTags' or 'withAllTags' to indicate whether to return devices which contain ANY or ALL of the included tags. If no type is included, 'withAnyTags' will be selected.
$statuses = array('statuses_example'); // string[] | Optional parameter to filter device availabilities by device status. This filter uses multiple exact matches.

try {
    $result = $apiInstance->getOrganizationDevicesAvailabilities($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $product_types, $serials, $tags, $tags_filter_type, $statuses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilitiesApi->getOrganizationDevicesAvailabilities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter device availabilities by network ID. This filter uses multiple exact matches. | [optional] |
| **product_types** | [**string[]**](../Model/string.md)| Optional parameter to filter device availabilities by device product types. This filter uses multiple exact matches. Valid types are wireless, appliance, switch, camera, cellularGateway, sensor, wirelessController, and campusGateway | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter device availabilities by device serial numbers. This filter uses multiple exact matches. | [optional] |
| **tags** | [**string[]**](../Model/string.md)| An optional parameter to filter devices by tags. The filtering is case-sensitive. If tags are included, &#39;tagsFilterType&#39; should also be included (see below). This filter uses multiple exact matches. | [optional] |
| **tags_filter_type** | **string**| An optional parameter of value &#39;withAnyTags&#39; or &#39;withAllTags&#39; to indicate whether to return devices which contain ANY or ALL of the included tags. If no type is included, &#39;withAnyTags&#39; will be selected. | [optional] |
| **statuses** | [**string[]**](../Model/string.md)| Optional parameter to filter device availabilities by device status. This filter uses multiple exact matches. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationDevicesAvailabilities200ResponseInner[]**](../Model/GetOrganizationDevicesAvailabilities200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationDevicesAvailabilitiesChangeHistory()`

```php
getOrganizationDevicesAvailabilitiesChangeHistory($organization_id, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan, $serials, $product_types, $network_ids, $statuses): \Meraki\Model\GetOrganizationDevicesAvailabilitiesChangeHistory200ResponseInner[]
```

List the availability history information for devices in an organization.

List the availability history information for devices in an organization.

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


$apiInstance = new Meraki\Api\AvailabilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day.
$serials = array('serials_example'); // string[] | Optional parameter to filter device availabilities history by device serial numbers
$product_types = array('product_types_example'); // string[] | Optional parameter to filter device availabilities history by device product types
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter device availabilities history by network IDs
$statuses = array('statuses_example'); // string[] | Optional parameter to filter device availabilities history by device statuses

try {
    $result = $apiInstance->getOrganizationDevicesAvailabilitiesChangeHistory($organization_id, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan, $serials, $product_types, $network_ids, $statuses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilitiesApi->getOrganizationDevicesAvailabilitiesChangeHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter device availabilities history by device serial numbers | [optional] |
| **product_types** | [**string[]**](../Model/string.md)| Optional parameter to filter device availabilities history by device product types | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter device availabilities history by network IDs | [optional] |
| **statuses** | [**string[]**](../Model/string.md)| Optional parameter to filter device availabilities history by device statuses | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationDevicesAvailabilitiesChangeHistory200ResponseInner[]**](../Model/GetOrganizationDevicesAvailabilitiesChangeHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessControllerAvailabilitiesChangeHistory()`

```php
getOrganizationWirelessControllerAvailabilitiesChangeHistory($organization_id, $serials, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessControllerAvailabilitiesChangeHistory200Response
```

List connectivity data of wireless LAN controllers in an organization

List connectivity data of wireless LAN controllers in an organization. If it is HA setup, then only returns active WLC data start from switchover

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


$apiInstance = new Meraki\Api\AvailabilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$serials = array('serials_example'); // string[] | Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessControllerAvailabilitiesChangeHistory($organization_id, $serials, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilitiesApi->getOrganizationWirelessControllerAvailabilitiesChangeHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessControllerAvailabilitiesChangeHistory200Response**](../Model/GetOrganizationWirelessControllerAvailabilitiesChangeHistory200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
