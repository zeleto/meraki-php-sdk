# Meraki\PermissionsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrganizationCameraPermission()**](PermissionsApi.md#getOrganizationCameraPermission) | **GET** /organizations/{organizationId}/camera/permissions/{permissionScopeId} | Retrieve a single permission scope |
| [**getOrganizationCameraPermissions()**](PermissionsApi.md#getOrganizationCameraPermissions) | **GET** /organizations/{organizationId}/camera/permissions | List the permissions scopes for this organization |


## `getOrganizationCameraPermission()`

```php
getOrganizationCameraPermission($organization_id, $permission_scope_id): \Meraki\Model\GetOrganizationCameraPermissions200ResponseInner
```

Retrieve a single permission scope

Retrieve a single permission scope

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


$apiInstance = new Meraki\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$permission_scope_id = 'permission_scope_id_example'; // string | Permission scope ID

try {
    $result = $apiInstance->getOrganizationCameraPermission($organization_id, $permission_scope_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->getOrganizationCameraPermission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **permission_scope_id** | **string**| Permission scope ID | |

### Return type

[**\Meraki\Model\GetOrganizationCameraPermissions200ResponseInner**](../Model/GetOrganizationCameraPermissions200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationCameraPermissions()`

```php
getOrganizationCameraPermissions($organization_id): \Meraki\Model\GetOrganizationCameraPermissions200ResponseInner[]
```

List the permissions scopes for this organization

List the permissions scopes for this organization

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


$apiInstance = new Meraki\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationCameraPermissions($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->getOrganizationCameraPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationCameraPermissions200ResponseInner[]**](../Model/GetOrganizationCameraPermissions200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
