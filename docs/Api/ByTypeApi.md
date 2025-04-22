# Meraki\ByTypeApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrganizationAssuranceAlertsOverviewByType()**](ByTypeApi.md#getOrganizationAssuranceAlertsOverviewByType) | **GET** /organizations/{organizationId}/assurance/alerts/overview/byType | Return a Summary of Alerts grouped by type and severity |


## `getOrganizationAssuranceAlertsOverviewByType()`

```php
getOrganizationAssuranceAlertsOverviewByType($organization_id, $per_page, $starting_after, $ending_before, $sort_order, $network_id, $severity, $types, $ts_start, $ts_end, $category, $sort_by, $serials, $device_types, $device_tags, $active, $dismissed, $resolved, $suppress_alerts_for_offline_nodes): \Meraki\Model\GetOrganizationAssuranceAlertsOverviewByType200Response
```

Return a Summary of Alerts grouped by type and severity

Return a Summary of Alerts grouped by type and severity

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


$apiInstance = new Meraki\Api\ByTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$sort_order = 'sort_order_example'; // string | Sorted order of entries. Order options are 'ascending' and 'descending'. Default is 'ascending'.
$network_id = 'network_id_example'; // string | Optional parameter to filter alerts overview by network ids.
$severity = 'severity_example'; // string | Optional parameter to filter alerts overview by severity type.
$types = array('types_example'); // string[] | Optional parameter to filter by alert type.
$ts_start = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter by starting timestamp
$ts_end = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter by end timestamp
$category = 'category_example'; // string | Optional parameter to filter by category.
$sort_by = 'sort_by_example'; // string | Optional parameter to set column to sort by.
$serials = array('serials_example'); // string[] | Optional parameter to filter by primary device serial
$device_types = array('device_types_example'); // string[] | Optional parameter to filter by device types
$device_tags = array('device_tags_example'); // string[] | Optional parameter to filter by device tags
$active = True; // bool | Optional parameter to filter by active alerts defaults to true
$dismissed = True; // bool | Optional parameter to filter by dismissed alerts defaults to false
$resolved = True; // bool | Optional parameter to filter by resolved alerts defaults to false
$suppress_alerts_for_offline_nodes = True; // bool | When set to true the api will only return connectivity alerts for a given device if that device is in an offline state. This only applies to devices. This is ignored when resolved is true. Example:  If a Switch has a VLan Mismatch and is Unreachable. only the Unreachable alert will be returned. Defaults to false.

try {
    $result = $apiInstance->getOrganizationAssuranceAlertsOverviewByType($organization_id, $per_page, $starting_after, $ending_before, $sort_order, $network_id, $severity, $types, $ts_start, $ts_end, $category, $sort_by, $serials, $device_types, $device_tags, $active, $dismissed, $resolved, $suppress_alerts_for_offline_nodes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ByTypeApi->getOrganizationAssuranceAlertsOverviewByType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **sort_order** | **string**| Sorted order of entries. Order options are &#39;ascending&#39; and &#39;descending&#39;. Default is &#39;ascending&#39;. | [optional] |
| **network_id** | **string**| Optional parameter to filter alerts overview by network ids. | [optional] |
| **severity** | **string**| Optional parameter to filter alerts overview by severity type. | [optional] |
| **types** | [**string[]**](../Model/string.md)| Optional parameter to filter by alert type. | [optional] |
| **ts_start** | **\DateTime**| Optional parameter to filter by starting timestamp | [optional] |
| **ts_end** | **\DateTime**| Optional parameter to filter by end timestamp | [optional] |
| **category** | **string**| Optional parameter to filter by category. | [optional] |
| **sort_by** | **string**| Optional parameter to set column to sort by. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter by primary device serial | [optional] |
| **device_types** | [**string[]**](../Model/string.md)| Optional parameter to filter by device types | [optional] |
| **device_tags** | [**string[]**](../Model/string.md)| Optional parameter to filter by device tags | [optional] |
| **active** | **bool**| Optional parameter to filter by active alerts defaults to true | [optional] |
| **dismissed** | **bool**| Optional parameter to filter by dismissed alerts defaults to false | [optional] |
| **resolved** | **bool**| Optional parameter to filter by resolved alerts defaults to false | [optional] |
| **suppress_alerts_for_offline_nodes** | **bool**| When set to true the api will only return connectivity alerts for a given device if that device is in an offline state. This only applies to devices. This is ignored when resolved is true. Example:  If a Switch has a VLan Mismatch and is Unreachable. only the Unreachable alert will be returned. Defaults to false. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationAssuranceAlertsOverviewByType200Response**](../Model/GetOrganizationAssuranceAlertsOverviewByType200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
