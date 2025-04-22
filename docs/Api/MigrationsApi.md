# Meraki\MigrationsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrganizationDevicesControllerMigration()**](MigrationsApi.md#createOrganizationDevicesControllerMigration) | **POST** /organizations/{organizationId}/devices/controller/migrations | Migrate devices to another controller or management mode |
| [**getOrganizationDevicesControllerMigrations()**](MigrationsApi.md#getOrganizationDevicesControllerMigrations) | **GET** /organizations/{organizationId}/devices/controller/migrations | Retrieve device migration statuses in an organization |


## `createOrganizationDevicesControllerMigration()`

```php
createOrganizationDevicesControllerMigration($organization_id, $create_organization_devices_controller_migration_request): \Meraki\Model\GetOrganizationDevicesControllerMigrations200ResponseItemsInner[]
```

Migrate devices to another controller or management mode

Migrate devices to another controller or management mode

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


$apiInstance = new Meraki\Api\MigrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_devices_controller_migration_request = new \Meraki\Model\CreateOrganizationDevicesControllerMigrationRequest(); // \Meraki\Model\CreateOrganizationDevicesControllerMigrationRequest

try {
    $result = $apiInstance->createOrganizationDevicesControllerMigration($organization_id, $create_organization_devices_controller_migration_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationsApi->createOrganizationDevicesControllerMigration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_devices_controller_migration_request** | [**\Meraki\Model\CreateOrganizationDevicesControllerMigrationRequest**](../Model/CreateOrganizationDevicesControllerMigrationRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationDevicesControllerMigrations200ResponseItemsInner[]**](../Model/GetOrganizationDevicesControllerMigrations200ResponseItemsInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationDevicesControllerMigrations()`

```php
getOrganizationDevicesControllerMigrations($organization_id, $serials, $network_ids, $target, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationDevicesControllerMigrations200Response
```

Retrieve device migration statuses in an organization

Retrieve device migration statuses in an organization

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


$apiInstance = new Meraki\Api\MigrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$serials = array('serials_example'); // string[] | A list of Meraki Serials for which to retrieve migrations
$network_ids = array('network_ids_example'); // string[] | Filter device migrations by network IDs
$target = 'target_example'; // string | Filter device migrations by target destination
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationDevicesControllerMigrations($organization_id, $serials, $network_ids, $target, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationsApi->getOrganizationDevicesControllerMigrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **serials** | [**string[]**](../Model/string.md)| A list of Meraki Serials for which to retrieve migrations | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Filter device migrations by network IDs | [optional] |
| **target** | **string**| Filter device migrations by target destination | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationDevicesControllerMigrations200Response**](../Model/GetOrganizationDevicesControllerMigrations200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
