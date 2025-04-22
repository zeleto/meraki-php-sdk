# Meraki\HistoricalApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrganizationAssuranceAlertsOverviewHistorical()**](HistoricalApi.md#getOrganizationAssuranceAlertsOverviewHistorical) | **GET** /organizations/{organizationId}/assurance/alerts/overview/historical | Returns historical health alert overviews |


## `getOrganizationAssuranceAlertsOverviewHistorical()`

```php
getOrganizationAssuranceAlertsOverviewHistorical($organization_id, $segment_duration, $ts_start, $network_id, $severity, $types, $ts_end, $category, $serials, $device_types): \Meraki\Model\GetOrganizationAssuranceAlertsOverviewHistorical200Response
```

Returns historical health alert overviews

Returns historical health alert overviews

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


$apiInstance = new Meraki\Api\HistoricalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$segment_duration = 56; // int | Amount of time in seconds for each segment in the returned dataset
$ts_start = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Parameter to define starting timestamp of historical totals
$network_id = 'network_id_example'; // string | Optional parameter to filter alerts overview by network ids.
$severity = 'severity_example'; // string | Optional parameter to filter alerts overview by severity type.
$types = array('types_example'); // string[] | Optional parameter to filter by alert type.
$ts_end = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter by end timestamp defaults to the current time
$category = 'category_example'; // string | Optional parameter to filter by category.
$serials = array('serials_example'); // string[] | Optional parameter to filter by primary device serial
$device_types = array('device_types_example'); // string[] | Optional parameter to filter by device types

try {
    $result = $apiInstance->getOrganizationAssuranceAlertsOverviewHistorical($organization_id, $segment_duration, $ts_start, $network_id, $severity, $types, $ts_end, $category, $serials, $device_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricalApi->getOrganizationAssuranceAlertsOverviewHistorical: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **segment_duration** | **int**| Amount of time in seconds for each segment in the returned dataset | |
| **ts_start** | **\DateTime**| Parameter to define starting timestamp of historical totals | |
| **network_id** | **string**| Optional parameter to filter alerts overview by network ids. | [optional] |
| **severity** | **string**| Optional parameter to filter alerts overview by severity type. | [optional] |
| **types** | [**string[]**](../Model/string.md)| Optional parameter to filter by alert type. | [optional] |
| **ts_end** | **\DateTime**| Optional parameter to filter by end timestamp defaults to the current time | [optional] |
| **category** | **string**| Optional parameter to filter by category. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter by primary device serial | [optional] |
| **device_types** | [**string[]**](../Model/string.md)| Optional parameter to filter by device types | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationAssuranceAlertsOverviewHistorical200Response**](../Model/GetOrganizationAssuranceAlertsOverviewHistorical200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
