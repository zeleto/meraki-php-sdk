# Meraki\AutoLocateApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**batchNetworkFloorPlansAutoLocateJobs()**](AutoLocateApi.md#batchNetworkFloorPlansAutoLocateJobs) | **POST** /networks/{networkId}/floorPlans/autoLocate/jobs/batch | Schedule auto locate jobs for one or more floor plans in a network |
| [**cancelNetworkFloorPlansAutoLocateJob()**](AutoLocateApi.md#cancelNetworkFloorPlansAutoLocateJob) | **POST** /networks/{networkId}/floorPlans/autoLocate/jobs/{jobId}/cancel | Cancel a scheduled or running auto locate job |
| [**getOrganizationFloorPlansAutoLocateDevices()**](AutoLocateApi.md#getOrganizationFloorPlansAutoLocateDevices) | **GET** /organizations/{organizationId}/floorPlans/autoLocate/devices | List auto locate details for each device in your organization |
| [**getOrganizationFloorPlansAutoLocateStatuses()**](AutoLocateApi.md#getOrganizationFloorPlansAutoLocateStatuses) | **GET** /organizations/{organizationId}/floorPlans/autoLocate/statuses | List the status of auto locate for each floorplan in your organization |
| [**publishNetworkFloorPlansAutoLocateJob()**](AutoLocateApi.md#publishNetworkFloorPlansAutoLocateJob) | **POST** /networks/{networkId}/floorPlans/autoLocate/jobs/{jobId}/publish | Update the status of a finished auto locate job to be published, and update device locations |
| [**recalculateNetworkFloorPlansAutoLocateJob()**](AutoLocateApi.md#recalculateNetworkFloorPlansAutoLocateJob) | **POST** /networks/{networkId}/floorPlans/autoLocate/jobs/{jobId}/recalculate | Trigger auto locate recalculation for a job, and optionally set anchors |


## `batchNetworkFloorPlansAutoLocateJobs()`

```php
batchNetworkFloorPlansAutoLocateJobs($network_id, $batch_network_floor_plans_auto_locate_jobs_request): \Meraki\Model\BatchNetworkFloorPlansAutoLocateJobs200Response
```

Schedule auto locate jobs for one or more floor plans in a network

Schedule auto locate jobs for one or more floor plans in a network

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


$apiInstance = new Meraki\Api\AutoLocateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$batch_network_floor_plans_auto_locate_jobs_request = new \Meraki\Model\BatchNetworkFloorPlansAutoLocateJobsRequest(); // \Meraki\Model\BatchNetworkFloorPlansAutoLocateJobsRequest

try {
    $result = $apiInstance->batchNetworkFloorPlansAutoLocateJobs($network_id, $batch_network_floor_plans_auto_locate_jobs_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoLocateApi->batchNetworkFloorPlansAutoLocateJobs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **batch_network_floor_plans_auto_locate_jobs_request** | [**\Meraki\Model\BatchNetworkFloorPlansAutoLocateJobsRequest**](../Model/BatchNetworkFloorPlansAutoLocateJobsRequest.md)|  | |

### Return type

[**\Meraki\Model\BatchNetworkFloorPlansAutoLocateJobs200Response**](../Model/BatchNetworkFloorPlansAutoLocateJobs200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelNetworkFloorPlansAutoLocateJob()`

```php
cancelNetworkFloorPlansAutoLocateJob($network_id, $job_id)
```

Cancel a scheduled or running auto locate job

Cancel a scheduled or running auto locate job

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


$apiInstance = new Meraki\Api\AutoLocateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$job_id = 'job_id_example'; // string | Job ID

try {
    $apiInstance->cancelNetworkFloorPlansAutoLocateJob($network_id, $job_id);
} catch (Exception $e) {
    echo 'Exception when calling AutoLocateApi->cancelNetworkFloorPlansAutoLocateJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **job_id** | **string**| Job ID | |

### Return type

void (empty response body)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationFloorPlansAutoLocateDevices()`

```php
getOrganizationFloorPlansAutoLocateDevices($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $floor_plan_ids): \Meraki\Model\GetOrganizationFloorPlansAutoLocateDevices200ResponseInner[]
```

List auto locate details for each device in your organization

List auto locate details for each device in your organization

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


$apiInstance = new Meraki\Api\AutoLocateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 10000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter devices by one or more network IDs
$floor_plan_ids = array('floor_plan_ids_example'); // string[] | Optional parameter to filter devices by one or more floorplan IDs

try {
    $result = $apiInstance->getOrganizationFloorPlansAutoLocateDevices($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $floor_plan_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoLocateApi->getOrganizationFloorPlansAutoLocateDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 10000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by one or more network IDs | [optional] |
| **floor_plan_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by one or more floorplan IDs | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationFloorPlansAutoLocateDevices200ResponseInner[]**](../Model/GetOrganizationFloorPlansAutoLocateDevices200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationFloorPlansAutoLocateStatuses()`

```php
getOrganizationFloorPlansAutoLocateStatuses($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $floor_plan_ids): \Meraki\Model\GetOrganizationFloorPlansAutoLocateStatuses200ResponseInner[]
```

List the status of auto locate for each floorplan in your organization

List the status of auto locate for each floorplan in your organization

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


$apiInstance = new Meraki\Api\AutoLocateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 10000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter floorplans by one or more network IDs
$floor_plan_ids = array('floor_plan_ids_example'); // string[] | Optional parameter to filter floorplans by one or more floorplan IDs

try {
    $result = $apiInstance->getOrganizationFloorPlansAutoLocateStatuses($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $floor_plan_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoLocateApi->getOrganizationFloorPlansAutoLocateStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 10000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter floorplans by one or more network IDs | [optional] |
| **floor_plan_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter floorplans by one or more floorplan IDs | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationFloorPlansAutoLocateStatuses200ResponseInner[]**](../Model/GetOrganizationFloorPlansAutoLocateStatuses200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `publishNetworkFloorPlansAutoLocateJob()`

```php
publishNetworkFloorPlansAutoLocateJob($network_id, $job_id, $publish_network_floor_plans_auto_locate_job_request): \Meraki\Model\PublishNetworkFloorPlansAutoLocateJob200Response
```

Update the status of a finished auto locate job to be published, and update device locations

Update the status of a finished auto locate job to be published, and update device locations

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


$apiInstance = new Meraki\Api\AutoLocateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$job_id = 'job_id_example'; // string | Job ID
$publish_network_floor_plans_auto_locate_job_request = new \Meraki\Model\PublishNetworkFloorPlansAutoLocateJobRequest(); // \Meraki\Model\PublishNetworkFloorPlansAutoLocateJobRequest

try {
    $result = $apiInstance->publishNetworkFloorPlansAutoLocateJob($network_id, $job_id, $publish_network_floor_plans_auto_locate_job_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoLocateApi->publishNetworkFloorPlansAutoLocateJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **job_id** | **string**| Job ID | |
| **publish_network_floor_plans_auto_locate_job_request** | [**\Meraki\Model\PublishNetworkFloorPlansAutoLocateJobRequest**](../Model/PublishNetworkFloorPlansAutoLocateJobRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\PublishNetworkFloorPlansAutoLocateJob200Response**](../Model/PublishNetworkFloorPlansAutoLocateJob200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recalculateNetworkFloorPlansAutoLocateJob()`

```php
recalculateNetworkFloorPlansAutoLocateJob($network_id, $job_id, $recalculate_network_floor_plans_auto_locate_job_request): \Meraki\Model\RecalculateNetworkFloorPlansAutoLocateJob200Response
```

Trigger auto locate recalculation for a job, and optionally set anchors

Trigger auto locate recalculation for a job, and optionally set anchors

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


$apiInstance = new Meraki\Api\AutoLocateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$job_id = 'job_id_example'; // string | Job ID
$recalculate_network_floor_plans_auto_locate_job_request = new \Meraki\Model\RecalculateNetworkFloorPlansAutoLocateJobRequest(); // \Meraki\Model\RecalculateNetworkFloorPlansAutoLocateJobRequest

try {
    $result = $apiInstance->recalculateNetworkFloorPlansAutoLocateJob($network_id, $job_id, $recalculate_network_floor_plans_auto_locate_job_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoLocateApi->recalculateNetworkFloorPlansAutoLocateJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **job_id** | **string**| Job ID | |
| **recalculate_network_floor_plans_auto_locate_job_request** | [**\Meraki\Model\RecalculateNetworkFloorPlansAutoLocateJobRequest**](../Model/RecalculateNetworkFloorPlansAutoLocateJobRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\RecalculateNetworkFloorPlansAutoLocateJob200Response**](../Model/RecalculateNetworkFloorPlansAutoLocateJob200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
