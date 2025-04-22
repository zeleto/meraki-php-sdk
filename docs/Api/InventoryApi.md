# Meraki\InventoryApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**claimIntoOrganizationInventory()**](InventoryApi.md#claimIntoOrganizationInventory) | **POST** /organizations/{organizationId}/inventory/claim | Claim a list of devices, licenses, and/or orders into an organization inventory |
| [**createOrganizationInventoryDevicesSwapsBulk()**](InventoryApi.md#createOrganizationInventoryDevicesSwapsBulk) | **POST** /organizations/{organizationId}/inventory/devices/swaps/bulk | Swap the devices identified by devices.old with a devices.new, then perform the :afterAction on the devices.old. |
| [**createOrganizationInventoryOnboardingCloudMonitoringExportEvent()**](InventoryApi.md#createOrganizationInventoryOnboardingCloudMonitoringExportEvent) | **POST** /organizations/{organizationId}/inventory/onboarding/cloudMonitoring/exportEvents | Imports event logs related to the onboarding app into elastisearch |
| [**createOrganizationInventoryOnboardingCloudMonitoringImport()**](InventoryApi.md#createOrganizationInventoryOnboardingCloudMonitoringImport) | **POST** /organizations/{organizationId}/inventory/onboarding/cloudMonitoring/imports | Commits the import operation to complete the onboarding of a device into Dashboard for monitoring. |
| [**createOrganizationInventoryOnboardingCloudMonitoringPrepare()**](InventoryApi.md#createOrganizationInventoryOnboardingCloudMonitoringPrepare) | **POST** /organizations/{organizationId}/inventory/onboarding/cloudMonitoring/prepare | Initiates or updates an import session |
| [**getOrganizationCellularGatewayEsimsInventory()**](InventoryApi.md#getOrganizationCellularGatewayEsimsInventory) | **GET** /organizations/{organizationId}/cellularGateway/esims/inventory | The eSIM inventory of a given organization. |
| [**getOrganizationInventoryDevice()**](InventoryApi.md#getOrganizationInventoryDevice) | **GET** /organizations/{organizationId}/inventory/devices/{serial} | Return a single device from the inventory of an organization |
| [**getOrganizationInventoryDevices()**](InventoryApi.md#getOrganizationInventoryDevices) | **GET** /organizations/{organizationId}/inventory/devices | Return the device inventory for an organization |
| [**getOrganizationInventoryDevicesSwapsBulk()**](InventoryApi.md#getOrganizationInventoryDevicesSwapsBulk) | **GET** /organizations/{organizationId}/inventory/devices/swaps/bulk/{id} | List of device swaps for a given request ID ({id}). |
| [**getOrganizationInventoryOnboardingCloudMonitoringImports()**](InventoryApi.md#getOrganizationInventoryOnboardingCloudMonitoringImports) | **GET** /organizations/{organizationId}/inventory/onboarding/cloudMonitoring/imports | Check the status of a committed Import operation |
| [**getOrganizationInventoryOnboardingCloudMonitoringNetworks()**](InventoryApi.md#getOrganizationInventoryOnboardingCloudMonitoringNetworks) | **GET** /organizations/{organizationId}/inventory/onboarding/cloudMonitoring/networks | Returns list of networks eligible for adding cloud monitored device |
| [**releaseFromOrganizationInventory()**](InventoryApi.md#releaseFromOrganizationInventory) | **POST** /organizations/{organizationId}/inventory/release | Release a list of claimed devices from an organization. |
| [**updateOrganizationCellularGatewayEsimsInventory()**](InventoryApi.md#updateOrganizationCellularGatewayEsimsInventory) | **PUT** /organizations/{organizationId}/cellularGateway/esims/inventory/{id} | Toggle the status of an eSIM |


## `claimIntoOrganizationInventory()`

```php
claimIntoOrganizationInventory($organization_id, $claim_into_organization_inventory_request): \Meraki\Model\ClaimIntoOrganization200Response
```

Claim a list of devices, licenses, and/or orders into an organization inventory

Claim a list of devices, licenses, and/or orders into an organization inventory. When claiming by order, all devices and licenses in the order will be claimed; licenses will be added to the organization and devices will be placed in the organization's inventory. This operation can be used up to ten times within a single five minute window.

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


$apiInstance = new Meraki\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$claim_into_organization_inventory_request = new \Meraki\Model\ClaimIntoOrganizationInventoryRequest(); // \Meraki\Model\ClaimIntoOrganizationInventoryRequest

try {
    $result = $apiInstance->claimIntoOrganizationInventory($organization_id, $claim_into_organization_inventory_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->claimIntoOrganizationInventory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **claim_into_organization_inventory_request** | [**\Meraki\Model\ClaimIntoOrganizationInventoryRequest**](../Model/ClaimIntoOrganizationInventoryRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\ClaimIntoOrganization200Response**](../Model/ClaimIntoOrganization200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationInventoryDevicesSwapsBulk()`

```php
createOrganizationInventoryDevicesSwapsBulk($organization_id, $create_organization_inventory_devices_swaps_bulk_request): \Meraki\Model\CreateOrganizationInventoryDevicesSwapsBulk207Response
```

Swap the devices identified by devices.old with a devices.new, then perform the :afterAction on the devices.old.

Swap the devices identified by devices.old with a devices.new, then perform the :afterAction on the devices.old.

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


$apiInstance = new Meraki\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_inventory_devices_swaps_bulk_request = new \Meraki\Model\CreateOrganizationInventoryDevicesSwapsBulkRequest(); // \Meraki\Model\CreateOrganizationInventoryDevicesSwapsBulkRequest

try {
    $result = $apiInstance->createOrganizationInventoryDevicesSwapsBulk($organization_id, $create_organization_inventory_devices_swaps_bulk_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->createOrganizationInventoryDevicesSwapsBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_inventory_devices_swaps_bulk_request** | [**\Meraki\Model\CreateOrganizationInventoryDevicesSwapsBulkRequest**](../Model/CreateOrganizationInventoryDevicesSwapsBulkRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateOrganizationInventoryDevicesSwapsBulk207Response**](../Model/CreateOrganizationInventoryDevicesSwapsBulk207Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new Meraki\Api\InventoryApi(
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
    echo 'Exception when calling InventoryApi->createOrganizationInventoryOnboardingCloudMonitoringExportEvent: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\InventoryApi(
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
    echo 'Exception when calling InventoryApi->createOrganizationInventoryOnboardingCloudMonitoringImport: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\InventoryApi(
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
    echo 'Exception when calling InventoryApi->createOrganizationInventoryOnboardingCloudMonitoringPrepare: ', $e->getMessage(), PHP_EOL;
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

## `getOrganizationCellularGatewayEsimsInventory()`

```php
getOrganizationCellularGatewayEsimsInventory($organization_id, $eids): \Meraki\Model\GetOrganizationCellularGatewayEsimsInventory200Response
```

The eSIM inventory of a given organization.

The eSIM inventory of a given organization.

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


$apiInstance = new Meraki\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$eids = array('eids_example'); // string[] | Optional parameter to filter the results by EID.

try {
    $result = $apiInstance->getOrganizationCellularGatewayEsimsInventory($organization_id, $eids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->getOrganizationCellularGatewayEsimsInventory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **eids** | [**string[]**](../Model/string.md)| Optional parameter to filter the results by EID. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationCellularGatewayEsimsInventory200Response**](../Model/GetOrganizationCellularGatewayEsimsInventory200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationInventoryDevice()`

```php
getOrganizationInventoryDevice($organization_id, $serial): \Meraki\Model\GetOrganizationInventoryDevices200ResponseInner
```

Return a single device from the inventory of an organization

Return a single device from the inventory of an organization

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


$apiInstance = new Meraki\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getOrganizationInventoryDevice($organization_id, $serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->getOrganizationInventoryDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetOrganizationInventoryDevices200ResponseInner**](../Model/GetOrganizationInventoryDevices200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationInventoryDevices()`

```php
getOrganizationInventoryDevices($organization_id, $per_page, $starting_after, $ending_before, $used_state, $search, $macs, $network_ids, $serials, $models, $order_numbers, $tags, $tags_filter_type, $product_types): \Meraki\Model\GetOrganizationInventoryDevices200ResponseInner[]
```

Return the device inventory for an organization

Return the device inventory for an organization

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


$apiInstance = new Meraki\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$used_state = 'used_state_example'; // string | Filter results by used or unused inventory. Accepted values are 'used' or 'unused'.
$search = 'search_example'; // string | Search for devices in inventory based on serial number, mac address, or model.
$macs = array('macs_example'); // string[] | Search for devices in inventory based on mac addresses.
$network_ids = array('network_ids_example'); // string[] | Search for devices in inventory based on network ids. Use explicit 'null' value to get available devices only.
$serials = array('serials_example'); // string[] | Search for devices in inventory based on serials.
$models = array('models_example'); // string[] | Search for devices in inventory based on model.
$order_numbers = array('order_numbers_example'); // string[] | Search for devices in inventory based on order numbers.
$tags = array('tags_example'); // string[] | Filter devices by tags. The filtering is case-sensitive. If tags are included, 'tagsFilterType' should also be included (see below).
$tags_filter_type = 'tags_filter_type_example'; // string | To use with 'tags' parameter, to filter devices which contain ANY or ALL given tags. Accepted values are 'withAnyTags' or 'withAllTags', default is 'withAnyTags'.
$product_types = array('product_types_example'); // string[] | Filter devices by product type. Accepted values are appliance, camera, cellularGateway, secureConnect, sensor, switch, systemsManager, wireless, and wirelessController.

try {
    $result = $apiInstance->getOrganizationInventoryDevices($organization_id, $per_page, $starting_after, $ending_before, $used_state, $search, $macs, $network_ids, $serials, $models, $order_numbers, $tags, $tags_filter_type, $product_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->getOrganizationInventoryDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **used_state** | **string**| Filter results by used or unused inventory. Accepted values are &#39;used&#39; or &#39;unused&#39;. | [optional] |
| **search** | **string**| Search for devices in inventory based on serial number, mac address, or model. | [optional] |
| **macs** | [**string[]**](../Model/string.md)| Search for devices in inventory based on mac addresses. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Search for devices in inventory based on network ids. Use explicit &#39;null&#39; value to get available devices only. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Search for devices in inventory based on serials. | [optional] |
| **models** | [**string[]**](../Model/string.md)| Search for devices in inventory based on model. | [optional] |
| **order_numbers** | [**string[]**](../Model/string.md)| Search for devices in inventory based on order numbers. | [optional] |
| **tags** | [**string[]**](../Model/string.md)| Filter devices by tags. The filtering is case-sensitive. If tags are included, &#39;tagsFilterType&#39; should also be included (see below). | [optional] |
| **tags_filter_type** | **string**| To use with &#39;tags&#39; parameter, to filter devices which contain ANY or ALL given tags. Accepted values are &#39;withAnyTags&#39; or &#39;withAllTags&#39;, default is &#39;withAnyTags&#39;. | [optional] |
| **product_types** | [**string[]**](../Model/string.md)| Filter devices by product type. Accepted values are appliance, camera, cellularGateway, secureConnect, sensor, switch, systemsManager, wireless, and wirelessController. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationInventoryDevices200ResponseInner[]**](../Model/GetOrganizationInventoryDevices200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationInventoryDevicesSwapsBulk()`

```php
getOrganizationInventoryDevicesSwapsBulk($organization_id, $id): \Meraki\Model\CreateOrganizationInventoryDevicesSwapsBulk207Response
```

List of device swaps for a given request ID ({id}).

List of device swaps for a given request ID ({id}).

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


$apiInstance = new Meraki\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$id = 'id_example'; // string | ID

try {
    $result = $apiInstance->getOrganizationInventoryDevicesSwapsBulk($organization_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->getOrganizationInventoryDevicesSwapsBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **id** | **string**| ID | |

### Return type

[**\Meraki\Model\CreateOrganizationInventoryDevicesSwapsBulk207Response**](../Model/CreateOrganizationInventoryDevicesSwapsBulk207Response.md)

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


$apiInstance = new Meraki\Api\InventoryApi(
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
    echo 'Exception when calling InventoryApi->getOrganizationInventoryOnboardingCloudMonitoringImports: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\InventoryApi(
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
    echo 'Exception when calling InventoryApi->getOrganizationInventoryOnboardingCloudMonitoringNetworks: ', $e->getMessage(), PHP_EOL;
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

## `releaseFromOrganizationInventory()`

```php
releaseFromOrganizationInventory($organization_id, $release_from_organization_inventory_request): \Meraki\Model\ReleaseFromOrganizationInventory200Response
```

Release a list of claimed devices from an organization.

Release a list of claimed devices from an organization.

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


$apiInstance = new Meraki\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$release_from_organization_inventory_request = new \Meraki\Model\ReleaseFromOrganizationInventoryRequest(); // \Meraki\Model\ReleaseFromOrganizationInventoryRequest

try {
    $result = $apiInstance->releaseFromOrganizationInventory($organization_id, $release_from_organization_inventory_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->releaseFromOrganizationInventory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **release_from_organization_inventory_request** | [**\Meraki\Model\ReleaseFromOrganizationInventoryRequest**](../Model/ReleaseFromOrganizationInventoryRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\ReleaseFromOrganizationInventory200Response**](../Model/ReleaseFromOrganizationInventory200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationCellularGatewayEsimsInventory()`

```php
updateOrganizationCellularGatewayEsimsInventory($organization_id, $id, $update_organization_cellular_gateway_esims_inventory_request): \Meraki\Model\GetOrganizationCellularGatewayEsimsInventory200ResponseItemsInner
```

Toggle the status of an eSIM

Toggle the status of an eSIM

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


$apiInstance = new Meraki\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$id = 'id_example'; // string | ID
$update_organization_cellular_gateway_esims_inventory_request = new \Meraki\Model\UpdateOrganizationCellularGatewayEsimsInventoryRequest(); // \Meraki\Model\UpdateOrganizationCellularGatewayEsimsInventoryRequest

try {
    $result = $apiInstance->updateOrganizationCellularGatewayEsimsInventory($organization_id, $id, $update_organization_cellular_gateway_esims_inventory_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->updateOrganizationCellularGatewayEsimsInventory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **id** | **string**| ID | |
| **update_organization_cellular_gateway_esims_inventory_request** | [**\Meraki\Model\UpdateOrganizationCellularGatewayEsimsInventoryRequest**](../Model/UpdateOrganizationCellularGatewayEsimsInventoryRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationCellularGatewayEsimsInventory200ResponseItemsInner**](../Model/GetOrganizationCellularGatewayEsimsInventory200ResponseItemsInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
