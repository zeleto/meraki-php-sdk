# Meraki\ImportsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrganizationInventoryOnboardingCloudMonitoringImport()**](ImportsApi.md#createOrganizationInventoryOnboardingCloudMonitoringImport) | **POST** /organizations/{organizationId}/inventory/onboarding/cloudMonitoring/imports | Commits the import operation to complete the onboarding of a device into Dashboard for monitoring. |
| [**getOrganizationInventoryOnboardingCloudMonitoringImports()**](ImportsApi.md#getOrganizationInventoryOnboardingCloudMonitoringImports) | **GET** /organizations/{organizationId}/inventory/onboarding/cloudMonitoring/imports | Check the status of a committed Import operation |


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


$apiInstance = new Meraki\Api\ImportsApi(
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
    echo 'Exception when calling ImportsApi->createOrganizationInventoryOnboardingCloudMonitoringImport: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\ImportsApi(
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
    echo 'Exception when calling ImportsApi->getOrganizationInventoryOnboardingCloudMonitoringImports: ', $e->getMessage(), PHP_EOL;
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
