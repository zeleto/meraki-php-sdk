# Meraki\BulkApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrganizationInventoryDevicesSwapsBulk()**](BulkApi.md#createOrganizationInventoryDevicesSwapsBulk) | **POST** /organizations/{organizationId}/inventory/devices/swaps/bulk | Swap the devices identified by devices.old with a devices.new, then perform the :afterAction on the devices.old. |
| [**getOrganizationInventoryDevicesSwapsBulk()**](BulkApi.md#getOrganizationInventoryDevicesSwapsBulk) | **GET** /organizations/{organizationId}/inventory/devices/swaps/bulk/{id} | List of device swaps for a given request ID ({id}). |


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


$apiInstance = new Meraki\Api\BulkApi(
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
    echo 'Exception when calling BulkApi->createOrganizationInventoryDevicesSwapsBulk: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\BulkApi(
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
    echo 'Exception when calling BulkApi->getOrganizationInventoryDevicesSwapsBulk: ', $e->getMessage(), PHP_EOL;
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
