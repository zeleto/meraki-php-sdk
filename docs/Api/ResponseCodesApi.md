# Meraki\ResponseCodesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrganizationApiRequestsOverviewResponseCodesByInterval()**](ResponseCodesApi.md#getOrganizationApiRequestsOverviewResponseCodesByInterval) | **GET** /organizations/{organizationId}/apiRequests/overview/responseCodes/byInterval | Tracks organizations&#39; API requests by response code across a given time period |


## `getOrganizationApiRequestsOverviewResponseCodesByInterval()`

```php
getOrganizationApiRequestsOverviewResponseCodesByInterval($organization_id, $t0, $t1, $timespan, $interval, $version, $operation_ids, $source_ips, $admin_ids, $user_agent): \Meraki\Model\GetOrganizationApiRequestsOverviewResponseCodesByInterval200ResponseInner[]
```

Tracks organizations' API requests by response code across a given time period

Tracks organizations' API requests by response code across a given time period

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


$apiInstance = new Meraki\Api\ResponseCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 31 days. If interval is provided, the timespan will be autocalculated.
$interval = 56; // int | The time interval in seconds for returned data. The valid intervals are: 120, 3600, 14400, 21600. The default is 21600. Interval is calculated if time params are provided.
$version = 56; // int | Filter by API version of the endpoint. Allowable values are: [0, 1]
$operation_ids = array('operation_ids_example'); // string[] | Filter by operation ID of the endpoint
$source_ips = array('source_ips_example'); // string[] | Filter by source IP that made the API request
$admin_ids = array('admin_ids_example'); // string[] | Filter by admin ID of user that made the API request
$user_agent = 'user_agent_example'; // string | Filter by user agent string for API request. This will filter by a complete or partial match.

try {
    $result = $apiInstance->getOrganizationApiRequestsOverviewResponseCodesByInterval($organization_id, $t0, $t1, $timespan, $interval, $version, $operation_ids, $source_ips, $admin_ids, $user_agent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResponseCodesApi->getOrganizationApiRequestsOverviewResponseCodesByInterval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 31 days. If interval is provided, the timespan will be autocalculated. | [optional] |
| **interval** | **int**| The time interval in seconds for returned data. The valid intervals are: 120, 3600, 14400, 21600. The default is 21600. Interval is calculated if time params are provided. | [optional] |
| **version** | **int**| Filter by API version of the endpoint. Allowable values are: [0, 1] | [optional] |
| **operation_ids** | [**string[]**](../Model/string.md)| Filter by operation ID of the endpoint | [optional] |
| **source_ips** | [**string[]**](../Model/string.md)| Filter by source IP that made the API request | [optional] |
| **admin_ids** | [**string[]**](../Model/string.md)| Filter by admin ID of user that made the API request | [optional] |
| **user_agent** | **string**| Filter by user agent string for API request. This will filter by a complete or partial match. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApiRequestsOverviewResponseCodesByInterval200ResponseInner[]**](../Model/GetOrganizationApiRequestsOverviewResponseCodesByInterval200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
