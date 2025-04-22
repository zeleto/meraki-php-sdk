# Meraki\JobsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**batchNetworkFloorPlansAutoLocateJobs()**](JobsApi.md#batchNetworkFloorPlansAutoLocateJobs) | **POST** /networks/{networkId}/floorPlans/autoLocate/jobs/batch | Schedule auto locate jobs for one or more floor plans in a network |
| [**cancelNetworkFloorPlansAutoLocateJob()**](JobsApi.md#cancelNetworkFloorPlansAutoLocateJob) | **POST** /networks/{networkId}/floorPlans/autoLocate/jobs/{jobId}/cancel | Cancel a scheduled or running auto locate job |
| [**publishNetworkFloorPlansAutoLocateJob()**](JobsApi.md#publishNetworkFloorPlansAutoLocateJob) | **POST** /networks/{networkId}/floorPlans/autoLocate/jobs/{jobId}/publish | Update the status of a finished auto locate job to be published, and update device locations |
| [**recalculateNetworkFloorPlansAutoLocateJob()**](JobsApi.md#recalculateNetworkFloorPlansAutoLocateJob) | **POST** /networks/{networkId}/floorPlans/autoLocate/jobs/{jobId}/recalculate | Trigger auto locate recalculation for a job, and optionally set anchors |


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


$apiInstance = new Meraki\Api\JobsApi(
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
    echo 'Exception when calling JobsApi->batchNetworkFloorPlansAutoLocateJobs: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\JobsApi(
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
    echo 'Exception when calling JobsApi->cancelNetworkFloorPlansAutoLocateJob: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\JobsApi(
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
    echo 'Exception when calling JobsApi->publishNetworkFloorPlansAutoLocateJob: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\JobsApi(
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
    echo 'Exception when calling JobsApi->recalculateNetworkFloorPlansAutoLocateJob: ', $e->getMessage(), PHP_EOL;
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
