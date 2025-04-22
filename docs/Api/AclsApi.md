# Meraki\AclsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrganizationAdaptivePolicyAcl()**](AclsApi.md#createOrganizationAdaptivePolicyAcl) | **POST** /organizations/{organizationId}/adaptivePolicy/acls | Creates new adaptive policy ACL |
| [**deleteOrganizationAdaptivePolicyAcl()**](AclsApi.md#deleteOrganizationAdaptivePolicyAcl) | **DELETE** /organizations/{organizationId}/adaptivePolicy/acls/{aclId} | Deletes the specified adaptive policy ACL |
| [**getOrganizationAdaptivePolicyAcl()**](AclsApi.md#getOrganizationAdaptivePolicyAcl) | **GET** /organizations/{organizationId}/adaptivePolicy/acls/{aclId} | Returns the adaptive policy ACL information |
| [**getOrganizationAdaptivePolicyAcls()**](AclsApi.md#getOrganizationAdaptivePolicyAcls) | **GET** /organizations/{organizationId}/adaptivePolicy/acls | List adaptive policy ACLs in a organization |
| [**updateOrganizationAdaptivePolicyAcl()**](AclsApi.md#updateOrganizationAdaptivePolicyAcl) | **PUT** /organizations/{organizationId}/adaptivePolicy/acls/{aclId} | Updates an adaptive policy ACL |


## `createOrganizationAdaptivePolicyAcl()`

```php
createOrganizationAdaptivePolicyAcl($organization_id, $create_organization_adaptive_policy_acl_request): \Meraki\Model\GetOrganizationAdaptivePolicyAcls200ResponseInner
```

Creates new adaptive policy ACL

Creates new adaptive policy ACL

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


$apiInstance = new Meraki\Api\AclsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_adaptive_policy_acl_request = new \Meraki\Model\CreateOrganizationAdaptivePolicyAclRequest(); // \Meraki\Model\CreateOrganizationAdaptivePolicyAclRequest

try {
    $result = $apiInstance->createOrganizationAdaptivePolicyAcl($organization_id, $create_organization_adaptive_policy_acl_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclsApi->createOrganizationAdaptivePolicyAcl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_adaptive_policy_acl_request** | [**\Meraki\Model\CreateOrganizationAdaptivePolicyAclRequest**](../Model/CreateOrganizationAdaptivePolicyAclRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicyAcls200ResponseInner**](../Model/GetOrganizationAdaptivePolicyAcls200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrganizationAdaptivePolicyAcl()`

```php
deleteOrganizationAdaptivePolicyAcl($organization_id, $acl_id)
```

Deletes the specified adaptive policy ACL

Deletes the specified adaptive policy ACL. Note this adaptive policy ACL will also be removed from policies using it.

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


$apiInstance = new Meraki\Api\AclsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$acl_id = 'acl_id_example'; // string | Acl ID

try {
    $apiInstance->deleteOrganizationAdaptivePolicyAcl($organization_id, $acl_id);
} catch (Exception $e) {
    echo 'Exception when calling AclsApi->deleteOrganizationAdaptivePolicyAcl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **acl_id** | **string**| Acl ID | |

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

## `getOrganizationAdaptivePolicyAcl()`

```php
getOrganizationAdaptivePolicyAcl($organization_id, $acl_id): \Meraki\Model\GetOrganizationAdaptivePolicyAcls200ResponseInner
```

Returns the adaptive policy ACL information

Returns the adaptive policy ACL information

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


$apiInstance = new Meraki\Api\AclsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$acl_id = 'acl_id_example'; // string | Acl ID

try {
    $result = $apiInstance->getOrganizationAdaptivePolicyAcl($organization_id, $acl_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclsApi->getOrganizationAdaptivePolicyAcl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **acl_id** | **string**| Acl ID | |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicyAcls200ResponseInner**](../Model/GetOrganizationAdaptivePolicyAcls200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAdaptivePolicyAcls()`

```php
getOrganizationAdaptivePolicyAcls($organization_id): \Meraki\Model\GetOrganizationAdaptivePolicyAcls200ResponseInner[]
```

List adaptive policy ACLs in a organization

List adaptive policy ACLs in a organization

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


$apiInstance = new Meraki\Api\AclsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationAdaptivePolicyAcls($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclsApi->getOrganizationAdaptivePolicyAcls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicyAcls200ResponseInner[]**](../Model/GetOrganizationAdaptivePolicyAcls200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationAdaptivePolicyAcl()`

```php
updateOrganizationAdaptivePolicyAcl($organization_id, $acl_id, $update_organization_adaptive_policy_acl_request): \Meraki\Model\GetOrganizationAdaptivePolicyAcls200ResponseInner
```

Updates an adaptive policy ACL

Updates an adaptive policy ACL

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


$apiInstance = new Meraki\Api\AclsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$acl_id = 'acl_id_example'; // string | Acl ID
$update_organization_adaptive_policy_acl_request = new \Meraki\Model\UpdateOrganizationAdaptivePolicyAclRequest(); // \Meraki\Model\UpdateOrganizationAdaptivePolicyAclRequest

try {
    $result = $apiInstance->updateOrganizationAdaptivePolicyAcl($organization_id, $acl_id, $update_organization_adaptive_policy_acl_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclsApi->updateOrganizationAdaptivePolicyAcl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **acl_id** | **string**| Acl ID | |
| **update_organization_adaptive_policy_acl_request** | [**\Meraki\Model\UpdateOrganizationAdaptivePolicyAclRequest**](../Model/UpdateOrganizationAdaptivePolicyAclRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicyAcls200ResponseInner**](../Model/GetOrganizationAdaptivePolicyAcls200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
