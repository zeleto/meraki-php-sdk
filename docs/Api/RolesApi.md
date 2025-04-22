# Meraki\RolesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrganizationCameraRole()**](RolesApi.md#createOrganizationCameraRole) | **POST** /organizations/{organizationId}/camera/roles | Creates new role for this organization. |
| [**createOrganizationSmAdminsRole()**](RolesApi.md#createOrganizationSmAdminsRole) | **POST** /organizations/{organizationId}/sm/admins/roles | Create a Limited Access Role |
| [**deleteOrganizationCameraRole()**](RolesApi.md#deleteOrganizationCameraRole) | **DELETE** /organizations/{organizationId}/camera/roles/{roleId} | Delete an existing role for this organization. |
| [**deleteOrganizationSmAdminsRole()**](RolesApi.md#deleteOrganizationSmAdminsRole) | **DELETE** /organizations/{organizationId}/sm/admins/roles/{roleId} | Delete a Limited Access Role |
| [**getOrganizationCameraRole()**](RolesApi.md#getOrganizationCameraRole) | **GET** /organizations/{organizationId}/camera/roles/{roleId} | Retrieve a single role. |
| [**getOrganizationCameraRoles()**](RolesApi.md#getOrganizationCameraRoles) | **GET** /organizations/{organizationId}/camera/roles | List all the roles in this organization |
| [**getOrganizationSmAdminsRole()**](RolesApi.md#getOrganizationSmAdminsRole) | **GET** /organizations/{organizationId}/sm/admins/roles/{roleId} | Return a Limited Access Role |
| [**getOrganizationSmAdminsRoles()**](RolesApi.md#getOrganizationSmAdminsRoles) | **GET** /organizations/{organizationId}/sm/admins/roles | List the Limited Access Roles for an organization |
| [**updateOrganizationCameraRole()**](RolesApi.md#updateOrganizationCameraRole) | **PUT** /organizations/{organizationId}/camera/roles/{roleId} | Update an existing role in this organization. |
| [**updateOrganizationSmAdminsRole()**](RolesApi.md#updateOrganizationSmAdminsRole) | **PUT** /organizations/{organizationId}/sm/admins/roles/{roleId} | Update a Limited Access Role |


## `createOrganizationCameraRole()`

```php
createOrganizationCameraRole($organization_id, $create_organization_camera_role_request): object
```

Creates new role for this organization.

Creates new role for this organization.

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


$apiInstance = new Meraki\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_camera_role_request = new \Meraki\Model\CreateOrganizationCameraRoleRequest(); // \Meraki\Model\CreateOrganizationCameraRoleRequest

try {
    $result = $apiInstance->createOrganizationCameraRole($organization_id, $create_organization_camera_role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->createOrganizationCameraRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_camera_role_request** | [**\Meraki\Model\CreateOrganizationCameraRoleRequest**](../Model/CreateOrganizationCameraRoleRequest.md)|  | |

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


$apiInstance = new Meraki\Api\RolesApi(
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
    echo 'Exception when calling RolesApi->createOrganizationSmAdminsRole: ', $e->getMessage(), PHP_EOL;
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

## `deleteOrganizationCameraRole()`

```php
deleteOrganizationCameraRole($organization_id, $role_id)
```

Delete an existing role for this organization.

Delete an existing role for this organization.

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


$apiInstance = new Meraki\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$role_id = 'role_id_example'; // string | Role ID

try {
    $apiInstance->deleteOrganizationCameraRole($organization_id, $role_id);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->deleteOrganizationCameraRole: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\RolesApi(
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
    echo 'Exception when calling RolesApi->deleteOrganizationSmAdminsRole: ', $e->getMessage(), PHP_EOL;
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

## `getOrganizationCameraRole()`

```php
getOrganizationCameraRole($organization_id, $role_id): object
```

Retrieve a single role.

Retrieve a single role.

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


$apiInstance = new Meraki\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$role_id = 'role_id_example'; // string | Role ID

try {
    $result = $apiInstance->getOrganizationCameraRole($organization_id, $role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->getOrganizationCameraRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **role_id** | **string**| Role ID | |

### Return type

**object**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationCameraRoles()`

```php
getOrganizationCameraRoles($organization_id): object[]
```

List all the roles in this organization

List all the roles in this organization

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


$apiInstance = new Meraki\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationCameraRoles($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->getOrganizationCameraRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

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


$apiInstance = new Meraki\Api\RolesApi(
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
    echo 'Exception when calling RolesApi->getOrganizationSmAdminsRole: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\RolesApi(
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
    echo 'Exception when calling RolesApi->getOrganizationSmAdminsRoles: ', $e->getMessage(), PHP_EOL;
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

## `updateOrganizationCameraRole()`

```php
updateOrganizationCameraRole($organization_id, $role_id, $update_organization_camera_role_request): object
```

Update an existing role in this organization.

Update an existing role in this organization.

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


$apiInstance = new Meraki\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$role_id = 'role_id_example'; // string | Role ID
$update_organization_camera_role_request = new \Meraki\Model\UpdateOrganizationCameraRoleRequest(); // \Meraki\Model\UpdateOrganizationCameraRoleRequest

try {
    $result = $apiInstance->updateOrganizationCameraRole($organization_id, $role_id, $update_organization_camera_role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->updateOrganizationCameraRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **role_id** | **string**| Role ID | |
| **update_organization_camera_role_request** | [**\Meraki\Model\UpdateOrganizationCameraRoleRequest**](../Model/UpdateOrganizationCameraRoleRequest.md)|  | [optional] |

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


$apiInstance = new Meraki\Api\RolesApi(
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
    echo 'Exception when calling RolesApi->updateOrganizationSmAdminsRole: ', $e->getMessage(), PHP_EOL;
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
