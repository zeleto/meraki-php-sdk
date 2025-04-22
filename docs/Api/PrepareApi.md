# Meraki\PrepareApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrganizationInventoryOnboardingCloudMonitoringPrepare()**](PrepareApi.md#createOrganizationInventoryOnboardingCloudMonitoringPrepare) | **POST** /organizations/{organizationId}/inventory/onboarding/cloudMonitoring/prepare | Initiates or updates an import session |


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


$apiInstance = new Meraki\Api\PrepareApi(
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
    echo 'Exception when calling PrepareApi->createOrganizationInventoryOnboardingCloudMonitoringPrepare: ', $e->getMessage(), PHP_EOL;
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
