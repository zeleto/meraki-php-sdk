# Meraki\AdminsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrganizationAdmin()**](AdminsApi.md#createOrganizationAdmin) | **POST** /organizations/{organizationId}/admins | Create a new dashboard administrator |
| [**createOrganizationSmAdminsRole()**](AdminsApi.md#createOrganizationSmAdminsRole) | **POST** /organizations/{organizationId}/sm/admins/roles | Create a Limited Access Role |
| [**deleteOrganizationAdmin()**](AdminsApi.md#deleteOrganizationAdmin) | **DELETE** /organizations/{organizationId}/admins/{adminId} | Revoke all access for a dashboard administrator within this organization |
| [**deleteOrganizationSmAdminsRole()**](AdminsApi.md#deleteOrganizationSmAdminsRole) | **DELETE** /organizations/{organizationId}/sm/admins/roles/{roleId} | Delete a Limited Access Role |
| [**getOrganizationAdmins()**](AdminsApi.md#getOrganizationAdmins) | **GET** /organizations/{organizationId}/admins | List the dashboard administrators in this organization |
| [**getOrganizationSmAdminsRole()**](AdminsApi.md#getOrganizationSmAdminsRole) | **GET** /organizations/{organizationId}/sm/admins/roles/{roleId} | Return a Limited Access Role |
| [**getOrganizationSmAdminsRoles()**](AdminsApi.md#getOrganizationSmAdminsRoles) | **GET** /organizations/{organizationId}/sm/admins/roles | List the Limited Access Roles for an organization |
| [**updateOrganizationAdmin()**](AdminsApi.md#updateOrganizationAdmin) | **PUT** /organizations/{organizationId}/admins/{adminId} | Update an administrator |
| [**updateOrganizationSmAdminsRole()**](AdminsApi.md#updateOrganizationSmAdminsRole) | **PUT** /organizations/{organizationId}/sm/admins/roles/{roleId} | Update a Limited Access Role |


## `createOrganizationAdmin()`

```php
createOrganizationAdmin($organization_id, $create_organization_admin_request): \Meraki\Model\GetOrganizationAdmins200ResponseInner
```

Create a new dashboard administrator

Create a new dashboard administrator

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


$apiInstance = new Meraki\Api\AdminsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_admin_request = new \Meraki\Model\CreateOrganizationAdminRequest(); // \Meraki\Model\CreateOrganizationAdminRequest

try {
    $result = $apiInstance->createOrganizationAdmin($organization_id, $create_organization_admin_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminsApi->createOrganizationAdmin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_admin_request** | [**\Meraki\Model\CreateOrganizationAdminRequest**](../Model/CreateOrganizationAdminRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationAdmins200ResponseInner**](../Model/GetOrganizationAdmins200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationSmAdminsRole()`

```php
createOrganizationSmAdminsRole($organization_id, $create_organization_sm_admins_role_request): \Meraki\Model\GetOrganizationSmAdminsRoles200ResponseItemsInner
```

Create a Limited Access Role

Create a Limited Access Role

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


$apiInstance = new Meraki\Api\AdminsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_sm_admins_role_request = new \Meraki\Model\CreateOrganizationSmAdminsRoleRequest(); // \Meraki\Model\CreateOrganizationSmAdminsRoleRequest

try {
    $result = $apiInstance->createOrganizationSmAdminsRole($organization_id, $create_organization_sm_admins_role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminsApi->createOrganizationSmAdminsRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_sm_admins_role_request** | [**\Meraki\Model\CreateOrganizationSmAdminsRoleRequest**](../Model/CreateOrganizationSmAdminsRoleRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationSmAdminsRoles200ResponseItemsInner**](../Model/GetOrganizationSmAdminsRoles200ResponseItemsInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrganizationAdmin()`

```php
deleteOrganizationAdmin($organization_id, $admin_id)
```

Revoke all access for a dashboard administrator within this organization

Revoke all access for a dashboard administrator within this organization

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


$apiInstance = new Meraki\Api\AdminsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$admin_id = 'admin_id_example'; // string | Admin ID

try {
    $apiInstance->deleteOrganizationAdmin($organization_id, $admin_id);
} catch (Exception $e) {
    echo 'Exception when calling AdminsApi->deleteOrganizationAdmin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **admin_id** | **string**| Admin ID | |

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

## `deleteOrganizationSmAdminsRole()`

```php
deleteOrganizationSmAdminsRole($organization_id, $role_id)
```

Delete a Limited Access Role

Delete a Limited Access Role

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


$apiInstance = new Meraki\Api\AdminsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$role_id = 'role_id_example'; // string | Role ID

try {
    $apiInstance->deleteOrganizationSmAdminsRole($organization_id, $role_id);
} catch (Exception $e) {
    echo 'Exception when calling AdminsApi->deleteOrganizationSmAdminsRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **role_id** | **string**| Role ID | |

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

## `getOrganizationAdmins()`

```php
getOrganizationAdmins($organization_id, $network_ids): \Meraki\Model\GetOrganizationAdmins200ResponseInner[]
```

List the dashboard administrators in this organization

List the dashboard administrators in this organization

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


$apiInstance = new Meraki\Api\AdminsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter the result set by the included set of network IDs

try {
    $result = $apiInstance->getOrganizationAdmins($organization_id, $network_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminsApi->getOrganizationAdmins: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the result set by the included set of network IDs | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationAdmins200ResponseInner[]**](../Model/GetOrganizationAdmins200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSmAdminsRole()`

```php
getOrganizationSmAdminsRole($organization_id, $role_id): \Meraki\Model\GetOrganizationSmAdminsRoles200ResponseItemsInner
```

Return a Limited Access Role

Return a Limited Access Role

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


$apiInstance = new Meraki\Api\AdminsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$role_id = 'role_id_example'; // string | Role ID

try {
    $result = $apiInstance->getOrganizationSmAdminsRole($organization_id, $role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminsApi->getOrganizationSmAdminsRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **role_id** | **string**| Role ID | |

### Return type

[**\Meraki\Model\GetOrganizationSmAdminsRoles200ResponseItemsInner**](../Model/GetOrganizationSmAdminsRoles200ResponseItemsInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSmAdminsRoles()`

```php
getOrganizationSmAdminsRoles($organization_id, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationSmAdminsRoles200Response
```

List the Limited Access Roles for an organization

List the Limited Access Roles for an organization

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


$apiInstance = new Meraki\Api\AdminsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 50.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationSmAdminsRoles($organization_id, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminsApi->getOrganizationSmAdminsRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 50. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSmAdminsRoles200Response**](../Model/GetOrganizationSmAdminsRoles200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationAdmin()`

```php
updateOrganizationAdmin($organization_id, $admin_id, $update_organization_admin_request): \Meraki\Model\GetOrganizationAdmins200ResponseInner
```

Update an administrator

Update an administrator

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


$apiInstance = new Meraki\Api\AdminsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$admin_id = 'admin_id_example'; // string | Admin ID
$update_organization_admin_request = new \Meraki\Model\UpdateOrganizationAdminRequest(); // \Meraki\Model\UpdateOrganizationAdminRequest

try {
    $result = $apiInstance->updateOrganizationAdmin($organization_id, $admin_id, $update_organization_admin_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminsApi->updateOrganizationAdmin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **admin_id** | **string**| Admin ID | |
| **update_organization_admin_request** | [**\Meraki\Model\UpdateOrganizationAdminRequest**](../Model/UpdateOrganizationAdminRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationAdmins200ResponseInner**](../Model/GetOrganizationAdmins200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationSmAdminsRole()`

```php
updateOrganizationSmAdminsRole($organization_id, $role_id, $update_organization_sm_admins_role_request): \Meraki\Model\GetOrganizationSmAdminsRoles200ResponseItemsInner
```

Update a Limited Access Role

Update a Limited Access Role

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


$apiInstance = new Meraki\Api\AdminsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$role_id = 'role_id_example'; // string | Role ID
$update_organization_sm_admins_role_request = new \Meraki\Model\UpdateOrganizationSmAdminsRoleRequest(); // \Meraki\Model\UpdateOrganizationSmAdminsRoleRequest

try {
    $result = $apiInstance->updateOrganizationSmAdminsRole($organization_id, $role_id, $update_organization_sm_admins_role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminsApi->updateOrganizationSmAdminsRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **role_id** | **string**| Role ID | |
| **update_organization_sm_admins_role_request** | [**\Meraki\Model\UpdateOrganizationSmAdminsRoleRequest**](../Model/UpdateOrganizationSmAdminsRoleRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSmAdminsRoles200ResponseItemsInner**](../Model/GetOrganizationSmAdminsRoles200ResponseItemsInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
