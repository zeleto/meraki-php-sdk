# Meraki\ApiRequestsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrganizationApiRequests()**](ApiRequestsApi.md#getOrganizationApiRequests) | **GET** /organizations/{organizationId}/apiRequests | List the API requests made by an organization |
| [**getOrganizationApiRequestsOverview()**](ApiRequestsApi.md#getOrganizationApiRequestsOverview) | **GET** /organizations/{organizationId}/apiRequests/overview | Return an aggregated overview of API requests data |
| [**getOrganizationApiRequestsOverviewResponseCodesByInterval()**](ApiRequestsApi.md#getOrganizationApiRequestsOverviewResponseCodesByInterval) | **GET** /organizations/{organizationId}/apiRequests/overview/responseCodes/byInterval | Tracks organizations&#39; API requests by response code across a given time period |


## `getOrganizationApiRequests()`

```php
getOrganizationApiRequests($organization_id, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before, $admin_id, $path, $method, $response_code, $source_ip, $user_agent, $version, $operation_ids): \Meraki\Model\GetOrganizationApiRequests200ResponseInner[]
```

List the API requests made by an organization

List the API requests made by an organization

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


$apiInstance = new Meraki\Api\ApiRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 31 days.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 50.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$admin_id = 'admin_id_example'; // string | Filter the results by the ID of the admin who made the API requests
$path = 'path_example'; // string | Filter the results by the path of the API requests
$method = 'method_example'; // string | Filter the results by the method of the API requests (must be 'GET', 'PUT', 'POST' or 'DELETE')
$response_code = 56; // int | Filter the results by the response code of the API requests
$source_ip = 'source_ip_example'; // string | Filter the results by the IP address of the originating API request
$user_agent = 'user_agent_example'; // string | Filter the results by the user agent string of the API request
$version = 56; // int | Filter the results by the API version of the API request
$operation_ids = array('operation_ids_example'); // string[] | Filter the results by one or more operation IDs for the API request

try {
    $result = $apiInstance->getOrganizationApiRequests($organization_id, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before, $admin_id, $path, $method, $response_code, $source_ip, $user_agent, $version, $operation_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiRequestsApi->getOrganizationApiRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 31 days. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 50. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **admin_id** | **string**| Filter the results by the ID of the admin who made the API requests | [optional] |
| **path** | **string**| Filter the results by the path of the API requests | [optional] |
| **method** | **string**| Filter the results by the method of the API requests (must be &#39;GET&#39;, &#39;PUT&#39;, &#39;POST&#39; or &#39;DELETE&#39;) | [optional] |
| **response_code** | **int**| Filter the results by the response code of the API requests | [optional] |
| **source_ip** | **string**| Filter the results by the IP address of the originating API request | [optional] |
| **user_agent** | **string**| Filter the results by the user agent string of the API request | [optional] |
| **version** | **int**| Filter the results by the API version of the API request | [optional] |
| **operation_ids** | [**string[]**](../Model/string.md)| Filter the results by one or more operation IDs for the API request | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApiRequests200ResponseInner[]**](../Model/GetOrganizationApiRequests200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationApiRequestsOverview()`

```php
getOrganizationApiRequestsOverview($organization_id, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationApiRequestsOverview200Response
```

Return an aggregated overview of API requests data

Return an aggregated overview of API requests data

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


$apiInstance = new Meraki\Api\ApiRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 31 days.

try {
    $result = $apiInstance->getOrganizationApiRequestsOverview($organization_id, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiRequestsApi->getOrganizationApiRequestsOverview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 31 days. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApiRequestsOverview200Response**](../Model/GetOrganizationApiRequestsOverview200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new Meraki\Api\ApiRequestsApi(
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
    echo 'Exception when calling ApiRequestsApi->getOrganizationApiRequestsOverviewResponseCodesByInterval: ', $e->getMessage(), PHP_EOL;
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
