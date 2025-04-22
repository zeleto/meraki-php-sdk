# Meraki\DetectionsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrganizationCameraDetectionsHistoryByBoundaryByInterval()**](DetectionsApi.md#getOrganizationCameraDetectionsHistoryByBoundaryByInterval) | **GET** /organizations/{organizationId}/camera/detections/history/byBoundary/byInterval | Returns analytics data for timespans |


## `getOrganizationCameraDetectionsHistoryByBoundaryByInterval()`

```php
getOrganizationCameraDetectionsHistoryByBoundaryByInterval($organization_id, $boundary_ids, $ranges, $duration, $per_page, $boundary_types): \Meraki\Model\GetOrganizationCameraDetectionsHistoryByBoundaryByInterval200ResponseInner[]
```

Returns analytics data for timespans

Returns analytics data for timespans

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


$apiInstance = new Meraki\Api\DetectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$boundary_ids = array('boundary_ids_example'); // string[] | A list of boundary ids. The returned cameras will be filtered to only include these ids.
$ranges = array(new \Meraki\Model\\Meraki\Model\GetOrganizationCameraDetectionsHistoryByBoundaryByIntervalRangesParameterInner()); // \Meraki\Model\GetOrganizationCameraDetectionsHistoryByBoundaryByIntervalRangesParameterInner[] | A list of time ranges with intervals
$duration = 56; // int | The minimum time, in seconds, that the person or car remains in the area to be counted. Defaults to boundary configuration or 60.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 1 - 1000. Defaults to 1000.
$boundary_types = array('boundary_types_example'); // string[] | The detection types. Defaults to 'person'.

try {
    $result = $apiInstance->getOrganizationCameraDetectionsHistoryByBoundaryByInterval($organization_id, $boundary_ids, $ranges, $duration, $per_page, $boundary_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DetectionsApi->getOrganizationCameraDetectionsHistoryByBoundaryByInterval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **boundary_ids** | [**string[]**](../Model/string.md)| A list of boundary ids. The returned cameras will be filtered to only include these ids. | |
| **ranges** | [**\Meraki\Model\GetOrganizationCameraDetectionsHistoryByBoundaryByIntervalRangesParameterInner[]**](../Model/\Meraki\Model\GetOrganizationCameraDetectionsHistoryByBoundaryByIntervalRangesParameterInner.md)| A list of time ranges with intervals | |
| **duration** | **int**| The minimum time, in seconds, that the person or car remains in the area to be counted. Defaults to boundary configuration or 60. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 1 - 1000. Defaults to 1000. | [optional] |
| **boundary_types** | [**string[]**](../Model/string.md)| The detection types. Defaults to &#39;person&#39;. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationCameraDetectionsHistoryByBoundaryByInterval200ResponseInner[]**](../Model/GetOrganizationCameraDetectionsHistoryByBoundaryByInterval200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
