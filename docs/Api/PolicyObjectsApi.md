# Meraki\PolicyObjectsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrganizationPolicyObject()**](PolicyObjectsApi.md#createOrganizationPolicyObject) | **POST** /organizations/{organizationId}/policyObjects | Creates a new Policy Object. |
| [**createOrganizationPolicyObjectsGroup()**](PolicyObjectsApi.md#createOrganizationPolicyObjectsGroup) | **POST** /organizations/{organizationId}/policyObjects/groups | Creates a new Policy Object Group. |
| [**deleteOrganizationPolicyObject()**](PolicyObjectsApi.md#deleteOrganizationPolicyObject) | **DELETE** /organizations/{organizationId}/policyObjects/{policyObjectId} | Deletes a Policy Object. |
| [**deleteOrganizationPolicyObjectsGroup()**](PolicyObjectsApi.md#deleteOrganizationPolicyObjectsGroup) | **DELETE** /organizations/{organizationId}/policyObjects/groups/{policyObjectGroupId} | Deletes a Policy Object Group. |
| [**getOrganizationPolicyObject()**](PolicyObjectsApi.md#getOrganizationPolicyObject) | **GET** /organizations/{organizationId}/policyObjects/{policyObjectId} | Shows details of a Policy Object. |
| [**getOrganizationPolicyObjects()**](PolicyObjectsApi.md#getOrganizationPolicyObjects) | **GET** /organizations/{organizationId}/policyObjects | Lists Policy Objects belonging to the organization. |
| [**getOrganizationPolicyObjectsGroup()**](PolicyObjectsApi.md#getOrganizationPolicyObjectsGroup) | **GET** /organizations/{organizationId}/policyObjects/groups/{policyObjectGroupId} | Shows details of a Policy Object Group. |
| [**getOrganizationPolicyObjectsGroups()**](PolicyObjectsApi.md#getOrganizationPolicyObjectsGroups) | **GET** /organizations/{organizationId}/policyObjects/groups | Lists Policy Object Groups belonging to the organization. |
| [**updateOrganizationPolicyObject()**](PolicyObjectsApi.md#updateOrganizationPolicyObject) | **PUT** /organizations/{organizationId}/policyObjects/{policyObjectId} | Updates a Policy Object. |
| [**updateOrganizationPolicyObjectsGroup()**](PolicyObjectsApi.md#updateOrganizationPolicyObjectsGroup) | **PUT** /organizations/{organizationId}/policyObjects/groups/{policyObjectGroupId} | Updates a Policy Object Group. |


## `createOrganizationPolicyObject()`

```php
createOrganizationPolicyObject($organization_id, $create_organization_policy_object_request): \Meraki\Model\GetOrganizationPolicyObjects200Response
```

Creates a new Policy Object.

Creates a new Policy Object.

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


$apiInstance = new Meraki\Api\PolicyObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_policy_object_request = new \Meraki\Model\CreateOrganizationPolicyObjectRequest(); // \Meraki\Model\CreateOrganizationPolicyObjectRequest

try {
    $result = $apiInstance->createOrganizationPolicyObject($organization_id, $create_organization_policy_object_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyObjectsApi->createOrganizationPolicyObject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_policy_object_request** | [**\Meraki\Model\CreateOrganizationPolicyObjectRequest**](../Model/CreateOrganizationPolicyObjectRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationPolicyObjects200Response**](../Model/GetOrganizationPolicyObjects200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationPolicyObjectsGroup()`

```php
createOrganizationPolicyObjectsGroup($organization_id, $create_organization_policy_objects_group_request): \Meraki\Model\GetOrganizationPolicyObjectsGroups200Response
```

Creates a new Policy Object Group.

Creates a new Policy Object Group.

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


$apiInstance = new Meraki\Api\PolicyObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_policy_objects_group_request = new \Meraki\Model\CreateOrganizationPolicyObjectsGroupRequest(); // \Meraki\Model\CreateOrganizationPolicyObjectsGroupRequest

try {
    $result = $apiInstance->createOrganizationPolicyObjectsGroup($organization_id, $create_organization_policy_objects_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyObjectsApi->createOrganizationPolicyObjectsGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_policy_objects_group_request** | [**\Meraki\Model\CreateOrganizationPolicyObjectsGroupRequest**](../Model/CreateOrganizationPolicyObjectsGroupRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationPolicyObjectsGroups200Response**](../Model/GetOrganizationPolicyObjectsGroups200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrganizationPolicyObject()`

```php
deleteOrganizationPolicyObject($organization_id, $policy_object_id)
```

Deletes a Policy Object.

Deletes a Policy Object.

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


$apiInstance = new Meraki\Api\PolicyObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$policy_object_id = 'policy_object_id_example'; // string | Policy object ID

try {
    $apiInstance->deleteOrganizationPolicyObject($organization_id, $policy_object_id);
} catch (Exception $e) {
    echo 'Exception when calling PolicyObjectsApi->deleteOrganizationPolicyObject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **policy_object_id** | **string**| Policy object ID | |

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

## `deleteOrganizationPolicyObjectsGroup()`

```php
deleteOrganizationPolicyObjectsGroup($organization_id, $policy_object_group_id)
```

Deletes a Policy Object Group.

Deletes a Policy Object Group.

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


$apiInstance = new Meraki\Api\PolicyObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$policy_object_group_id = 'policy_object_group_id_example'; // string | Policy object group ID

try {
    $apiInstance->deleteOrganizationPolicyObjectsGroup($organization_id, $policy_object_group_id);
} catch (Exception $e) {
    echo 'Exception when calling PolicyObjectsApi->deleteOrganizationPolicyObjectsGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **policy_object_group_id** | **string**| Policy object group ID | |

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

## `getOrganizationPolicyObject()`

```php
getOrganizationPolicyObject($organization_id, $policy_object_id): \Meraki\Model\GetOrganizationPolicyObjects200Response
```

Shows details of a Policy Object.

Shows details of a Policy Object.

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


$apiInstance = new Meraki\Api\PolicyObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$policy_object_id = 'policy_object_id_example'; // string | Policy object ID

try {
    $result = $apiInstance->getOrganizationPolicyObject($organization_id, $policy_object_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyObjectsApi->getOrganizationPolicyObject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **policy_object_id** | **string**| Policy object ID | |

### Return type

[**\Meraki\Model\GetOrganizationPolicyObjects200Response**](../Model/GetOrganizationPolicyObjects200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationPolicyObjects()`

```php
getOrganizationPolicyObjects($organization_id, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationPolicyObjects200Response
```

Lists Policy Objects belonging to the organization.

Lists Policy Objects belonging to the organization.

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


$apiInstance = new Meraki\Api\PolicyObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 10 - 5000. Default is 5000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationPolicyObjects($organization_id, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyObjectsApi->getOrganizationPolicyObjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 10 - 5000. Default is 5000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationPolicyObjects200Response**](../Model/GetOrganizationPolicyObjects200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationPolicyObjectsGroup()`

```php
getOrganizationPolicyObjectsGroup($organization_id, $policy_object_group_id): \Meraki\Model\GetOrganizationPolicyObjectsGroups200Response
```

Shows details of a Policy Object Group.

Shows details of a Policy Object Group.

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


$apiInstance = new Meraki\Api\PolicyObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$policy_object_group_id = 'policy_object_group_id_example'; // string | Policy object group ID

try {
    $result = $apiInstance->getOrganizationPolicyObjectsGroup($organization_id, $policy_object_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyObjectsApi->getOrganizationPolicyObjectsGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **policy_object_group_id** | **string**| Policy object group ID | |

### Return type

[**\Meraki\Model\GetOrganizationPolicyObjectsGroups200Response**](../Model/GetOrganizationPolicyObjectsGroups200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationPolicyObjectsGroups()`

```php
getOrganizationPolicyObjectsGroups($organization_id, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationPolicyObjectsGroups200Response
```

Lists Policy Object Groups belonging to the organization.

Lists Policy Object Groups belonging to the organization.

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


$apiInstance = new Meraki\Api\PolicyObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 10 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationPolicyObjectsGroups($organization_id, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyObjectsApi->getOrganizationPolicyObjectsGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 10 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationPolicyObjectsGroups200Response**](../Model/GetOrganizationPolicyObjectsGroups200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationPolicyObject()`

```php
updateOrganizationPolicyObject($organization_id, $policy_object_id, $update_organization_policy_object_request): \Meraki\Model\GetOrganizationPolicyObjects200Response
```

Updates a Policy Object.

Updates a Policy Object.

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


$apiInstance = new Meraki\Api\PolicyObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$policy_object_id = 'policy_object_id_example'; // string | Policy object ID
$update_organization_policy_object_request = new \Meraki\Model\UpdateOrganizationPolicyObjectRequest(); // \Meraki\Model\UpdateOrganizationPolicyObjectRequest

try {
    $result = $apiInstance->updateOrganizationPolicyObject($organization_id, $policy_object_id, $update_organization_policy_object_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyObjectsApi->updateOrganizationPolicyObject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **policy_object_id** | **string**| Policy object ID | |
| **update_organization_policy_object_request** | [**\Meraki\Model\UpdateOrganizationPolicyObjectRequest**](../Model/UpdateOrganizationPolicyObjectRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationPolicyObjects200Response**](../Model/GetOrganizationPolicyObjects200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationPolicyObjectsGroup()`

```php
updateOrganizationPolicyObjectsGroup($organization_id, $policy_object_group_id, $update_organization_policy_objects_group_request): \Meraki\Model\GetOrganizationPolicyObjectsGroups200Response
```

Updates a Policy Object Group.

Updates a Policy Object Group.

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


$apiInstance = new Meraki\Api\PolicyObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$policy_object_group_id = 'policy_object_group_id_example'; // string | Policy object group ID
$update_organization_policy_objects_group_request = new \Meraki\Model\UpdateOrganizationPolicyObjectsGroupRequest(); // \Meraki\Model\UpdateOrganizationPolicyObjectsGroupRequest

try {
    $result = $apiInstance->updateOrganizationPolicyObjectsGroup($organization_id, $policy_object_group_id, $update_organization_policy_objects_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyObjectsApi->updateOrganizationPolicyObjectsGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **policy_object_group_id** | **string**| Policy object group ID | |
| **update_organization_policy_objects_group_request** | [**\Meraki\Model\UpdateOrganizationPolicyObjectsGroupRequest**](../Model/UpdateOrganizationPolicyObjectsGroupRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationPolicyObjectsGroups200Response**](../Model/GetOrganizationPolicyObjectsGroups200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
