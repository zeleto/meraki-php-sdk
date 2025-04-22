# Meraki\OnboardingApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrganizationInventoryOnboardingCloudMonitoringExportEvent()**](OnboardingApi.md#createOrganizationInventoryOnboardingCloudMonitoringExportEvent) | **POST** /organizations/{organizationId}/inventory/onboarding/cloudMonitoring/exportEvents | Imports event logs related to the onboarding app into elastisearch |
| [**createOrganizationInventoryOnboardingCloudMonitoringImport()**](OnboardingApi.md#createOrganizationInventoryOnboardingCloudMonitoringImport) | **POST** /organizations/{organizationId}/inventory/onboarding/cloudMonitoring/imports | Commits the import operation to complete the onboarding of a device into Dashboard for monitoring. |
| [**createOrganizationInventoryOnboardingCloudMonitoringPrepare()**](OnboardingApi.md#createOrganizationInventoryOnboardingCloudMonitoringPrepare) | **POST** /organizations/{organizationId}/inventory/onboarding/cloudMonitoring/prepare | Initiates or updates an import session |
| [**getOrganizationCameraOnboardingStatuses()**](OnboardingApi.md#getOrganizationCameraOnboardingStatuses) | **GET** /organizations/{organizationId}/camera/onboarding/statuses | Fetch onboarding status of cameras |
| [**getOrganizationInventoryOnboardingCloudMonitoringImports()**](OnboardingApi.md#getOrganizationInventoryOnboardingCloudMonitoringImports) | **GET** /organizations/{organizationId}/inventory/onboarding/cloudMonitoring/imports | Check the status of a committed Import operation |
| [**getOrganizationInventoryOnboardingCloudMonitoringNetworks()**](OnboardingApi.md#getOrganizationInventoryOnboardingCloudMonitoringNetworks) | **GET** /organizations/{organizationId}/inventory/onboarding/cloudMonitoring/networks | Returns list of networks eligible for adding cloud monitored device |
| [**updateOrganizationCameraOnboardingStatuses()**](OnboardingApi.md#updateOrganizationCameraOnboardingStatuses) | **PUT** /organizations/{organizationId}/camera/onboarding/statuses | Notify that credential handoff to camera has completed |


## `createOrganizationInventoryOnboardingCloudMonitoringExportEvent()`

```php
createOrganizationInventoryOnboardingCloudMonitoringExportEvent($organization_id, $create_organization_inventory_onboarding_cloud_monitoring_export_event_request): object
```

Imports event logs related to the onboarding app into elastisearch

Imports event logs related to the onboarding app into elastisearch

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


$apiInstance = new Meraki\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_inventory_onboarding_cloud_monitoring_export_event_request = new \Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringExportEventRequest(); // \Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringExportEventRequest

try {
    $result = $apiInstance->createOrganizationInventoryOnboardingCloudMonitoringExportEvent($organization_id, $create_organization_inventory_onboarding_cloud_monitoring_export_event_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->createOrganizationInventoryOnboardingCloudMonitoringExportEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_inventory_onboarding_cloud_monitoring_export_event_request** | [**\Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringExportEventRequest**](../Model/CreateOrganizationInventoryOnboardingCloudMonitoringExportEventRequest.md)|  | |

### Return type

**object**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationInventoryOnboardingCloudMonitoringImport()`

```php
createOrganizationInventoryOnboardingCloudMonitoringImport($organization_id, $create_organization_inventory_onboarding_cloud_monitoring_import_request): \Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringImport201ResponseInner[]
```

Commits the import operation to complete the onboarding of a device into Dashboard for monitoring.

Commits the import operation to complete the onboarding of a device into Dashboard for monitoring.

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


$apiInstance = new Meraki\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_inventory_onboarding_cloud_monitoring_import_request = new \Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringImportRequest(); // \Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringImportRequest

try {
    $result = $apiInstance->createOrganizationInventoryOnboardingCloudMonitoringImport($organization_id, $create_organization_inventory_onboarding_cloud_monitoring_import_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->createOrganizationInventoryOnboardingCloudMonitoringImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_inventory_onboarding_cloud_monitoring_import_request** | [**\Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringImportRequest**](../Model/CreateOrganizationInventoryOnboardingCloudMonitoringImportRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringImport201ResponseInner[]**](../Model/CreateOrganizationInventoryOnboardingCloudMonitoringImport201ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationInventoryOnboardingCloudMonitoringPrepare()`

```php
createOrganizationInventoryOnboardingCloudMonitoringPrepare($organization_id, $create_organization_inventory_onboarding_cloud_monitoring_prepare_request): \Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringPrepare201ResponseInner[]
```

Initiates or updates an import session

Initiates or updates an import session. An import ID will be generated and used when you are ready to commit the import.

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


$apiInstance = new Meraki\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_inventory_onboarding_cloud_monitoring_prepare_request = new \Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringPrepareRequest(); // \Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringPrepareRequest

try {
    $result = $apiInstance->createOrganizationInventoryOnboardingCloudMonitoringPrepare($organization_id, $create_organization_inventory_onboarding_cloud_monitoring_prepare_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->createOrganizationInventoryOnboardingCloudMonitoringPrepare: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_inventory_onboarding_cloud_monitoring_prepare_request** | [**\Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringPrepareRequest**](../Model/CreateOrganizationInventoryOnboardingCloudMonitoringPrepareRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringPrepare201ResponseInner[]**](../Model/CreateOrganizationInventoryOnboardingCloudMonitoringPrepare201ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationCameraOnboardingStatuses()`

```php
getOrganizationCameraOnboardingStatuses($organization_id, $serials, $network_ids): object[]
```

Fetch onboarding status of cameras

Fetch onboarding status of cameras

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


$apiInstance = new Meraki\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$serials = array('serials_example'); // string[] | A list of serial numbers. The returned cameras will be filtered to only include these serials.
$network_ids = array('network_ids_example'); // string[] | A list of network IDs. The returned cameras will be filtered to only include these networks.

try {
    $result = $apiInstance->getOrganizationCameraOnboardingStatuses($organization_id, $serials, $network_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->getOrganizationCameraOnboardingStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **serials** | [**string[]**](../Model/string.md)| A list of serial numbers. The returned cameras will be filtered to only include these serials. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| A list of network IDs. The returned cameras will be filtered to only include these networks. | [optional] |

### Return type

**object[]**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationInventoryOnboardingCloudMonitoringImports()`

```php
getOrganizationInventoryOnboardingCloudMonitoringImports($organization_id, $import_ids): \Meraki\Model\GetOrganizationInventoryOnboardingCloudMonitoringImports200ResponseInner[]
```

Check the status of a committed Import operation

Check the status of a committed Import operation

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


$apiInstance = new Meraki\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$import_ids = array('import_ids_example'); // string[] | import ids from an imports

try {
    $result = $apiInstance->getOrganizationInventoryOnboardingCloudMonitoringImports($organization_id, $import_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->getOrganizationInventoryOnboardingCloudMonitoringImports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **import_ids** | [**string[]**](../Model/string.md)| import ids from an imports | |

### Return type

[**\Meraki\Model\GetOrganizationInventoryOnboardingCloudMonitoringImports200ResponseInner[]**](../Model/GetOrganizationInventoryOnboardingCloudMonitoringImports200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationInventoryOnboardingCloudMonitoringNetworks()`

```php
getOrganizationInventoryOnboardingCloudMonitoringNetworks($organization_id, $device_type, $search, $per_page, $starting_after, $ending_before): \Meraki\Model\GetNetwork200Response[]
```

Returns list of networks eligible for adding cloud monitored device

Returns list of networks eligible for adding cloud monitored device

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


$apiInstance = new Meraki\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$device_type = 'device_type_example'; // string | Device Type switch or wireless controller
$search = 'search_example'; // string | Optional parameter to search on network name
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 100000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationInventoryOnboardingCloudMonitoringNetworks($organization_id, $device_type, $search, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->getOrganizationInventoryOnboardingCloudMonitoringNetworks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **device_type** | **string**| Device Type switch or wireless controller | |
| **search** | **string**| Optional parameter to search on network name | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 100000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetNetwork200Response[]**](../Model/GetNetwork200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationCameraOnboardingStatuses()`

```php
updateOrganizationCameraOnboardingStatuses($organization_id, $update_organization_camera_onboarding_statuses_request): object
```

Notify that credential handoff to camera has completed

Notify that credential handoff to camera has completed

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


$apiInstance = new Meraki\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$update_organization_camera_onboarding_statuses_request = new \Meraki\Model\UpdateOrganizationCameraOnboardingStatusesRequest(); // \Meraki\Model\UpdateOrganizationCameraOnboardingStatusesRequest

try {
    $result = $apiInstance->updateOrganizationCameraOnboardingStatuses($organization_id, $update_organization_camera_onboarding_statuses_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->updateOrganizationCameraOnboardingStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **update_organization_camera_onboarding_statuses_request** | [**\Meraki\Model\UpdateOrganizationCameraOnboardingStatusesRequest**](../Model/UpdateOrganizationCameraOnboardingStatusesRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
