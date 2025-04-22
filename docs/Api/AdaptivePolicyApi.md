# Meraki\AdaptivePolicyApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrganizationAdaptivePolicyAcl()**](AdaptivePolicyApi.md#createOrganizationAdaptivePolicyAcl) | **POST** /organizations/{organizationId}/adaptivePolicy/acls | Creates new adaptive policy ACL |
| [**createOrganizationAdaptivePolicyGroup()**](AdaptivePolicyApi.md#createOrganizationAdaptivePolicyGroup) | **POST** /organizations/{organizationId}/adaptivePolicy/groups | Creates a new adaptive policy group |
| [**createOrganizationAdaptivePolicyPolicy()**](AdaptivePolicyApi.md#createOrganizationAdaptivePolicyPolicy) | **POST** /organizations/{organizationId}/adaptivePolicy/policies | Add an Adaptive Policy |
| [**deleteOrganizationAdaptivePolicyAcl()**](AdaptivePolicyApi.md#deleteOrganizationAdaptivePolicyAcl) | **DELETE** /organizations/{organizationId}/adaptivePolicy/acls/{aclId} | Deletes the specified adaptive policy ACL |
| [**deleteOrganizationAdaptivePolicyGroup()**](AdaptivePolicyApi.md#deleteOrganizationAdaptivePolicyGroup) | **DELETE** /organizations/{organizationId}/adaptivePolicy/groups/{id} | Deletes the specified adaptive policy group and any associated policies and references |
| [**deleteOrganizationAdaptivePolicyPolicy()**](AdaptivePolicyApi.md#deleteOrganizationAdaptivePolicyPolicy) | **DELETE** /organizations/{organizationId}/adaptivePolicy/policies/{id} | Delete an Adaptive Policy |
| [**getOrganizationAdaptivePolicyAcl()**](AdaptivePolicyApi.md#getOrganizationAdaptivePolicyAcl) | **GET** /organizations/{organizationId}/adaptivePolicy/acls/{aclId} | Returns the adaptive policy ACL information |
| [**getOrganizationAdaptivePolicyAcls()**](AdaptivePolicyApi.md#getOrganizationAdaptivePolicyAcls) | **GET** /organizations/{organizationId}/adaptivePolicy/acls | List adaptive policy ACLs in a organization |
| [**getOrganizationAdaptivePolicyGroup()**](AdaptivePolicyApi.md#getOrganizationAdaptivePolicyGroup) | **GET** /organizations/{organizationId}/adaptivePolicy/groups/{id} | Returns an adaptive policy group |
| [**getOrganizationAdaptivePolicyGroups()**](AdaptivePolicyApi.md#getOrganizationAdaptivePolicyGroups) | **GET** /organizations/{organizationId}/adaptivePolicy/groups | List adaptive policy groups in a organization |
| [**getOrganizationAdaptivePolicyOverview()**](AdaptivePolicyApi.md#getOrganizationAdaptivePolicyOverview) | **GET** /organizations/{organizationId}/adaptivePolicy/overview | Returns adaptive policy aggregate statistics for an organization |
| [**getOrganizationAdaptivePolicyPolicies()**](AdaptivePolicyApi.md#getOrganizationAdaptivePolicyPolicies) | **GET** /organizations/{organizationId}/adaptivePolicy/policies | List adaptive policies in an organization |
| [**getOrganizationAdaptivePolicyPolicy()**](AdaptivePolicyApi.md#getOrganizationAdaptivePolicyPolicy) | **GET** /organizations/{organizationId}/adaptivePolicy/policies/{id} | Return an adaptive policy |
| [**getOrganizationAdaptivePolicySettings()**](AdaptivePolicyApi.md#getOrganizationAdaptivePolicySettings) | **GET** /organizations/{organizationId}/adaptivePolicy/settings | Returns global adaptive policy settings in an organization |
| [**updateOrganizationAdaptivePolicyAcl()**](AdaptivePolicyApi.md#updateOrganizationAdaptivePolicyAcl) | **PUT** /organizations/{organizationId}/adaptivePolicy/acls/{aclId} | Updates an adaptive policy ACL |
| [**updateOrganizationAdaptivePolicyGroup()**](AdaptivePolicyApi.md#updateOrganizationAdaptivePolicyGroup) | **PUT** /organizations/{organizationId}/adaptivePolicy/groups/{id} | Updates an adaptive policy group |
| [**updateOrganizationAdaptivePolicyPolicy()**](AdaptivePolicyApi.md#updateOrganizationAdaptivePolicyPolicy) | **PUT** /organizations/{organizationId}/adaptivePolicy/policies/{id} | Update an Adaptive Policy |
| [**updateOrganizationAdaptivePolicySettings()**](AdaptivePolicyApi.md#updateOrganizationAdaptivePolicySettings) | **PUT** /organizations/{organizationId}/adaptivePolicy/settings | Update global adaptive policy settings |


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


$apiInstance = new Meraki\Api\AdaptivePolicyApi(
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
    echo 'Exception when calling AdaptivePolicyApi->createOrganizationAdaptivePolicyAcl: ', $e->getMessage(), PHP_EOL;
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

## `createOrganizationAdaptivePolicyGroup()`

```php
createOrganizationAdaptivePolicyGroup($organization_id, $create_organization_adaptive_policy_group_request): \Meraki\Model\GetOrganizationAdaptivePolicyGroups200ResponseInner
```

Creates a new adaptive policy group

Creates a new adaptive policy group

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


$apiInstance = new Meraki\Api\AdaptivePolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_adaptive_policy_group_request = new \Meraki\Model\CreateOrganizationAdaptivePolicyGroupRequest(); // \Meraki\Model\CreateOrganizationAdaptivePolicyGroupRequest

try {
    $result = $apiInstance->createOrganizationAdaptivePolicyGroup($organization_id, $create_organization_adaptive_policy_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdaptivePolicyApi->createOrganizationAdaptivePolicyGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_adaptive_policy_group_request** | [**\Meraki\Model\CreateOrganizationAdaptivePolicyGroupRequest**](../Model/CreateOrganizationAdaptivePolicyGroupRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicyGroups200ResponseInner**](../Model/GetOrganizationAdaptivePolicyGroups200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationAdaptivePolicyPolicy()`

```php
createOrganizationAdaptivePolicyPolicy($organization_id, $create_organization_adaptive_policy_policy_request): \Meraki\Model\GetOrganizationAdaptivePolicyPolicies200ResponseInner
```

Add an Adaptive Policy

Add an Adaptive Policy

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


$apiInstance = new Meraki\Api\AdaptivePolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_adaptive_policy_policy_request = new \Meraki\Model\CreateOrganizationAdaptivePolicyPolicyRequest(); // \Meraki\Model\CreateOrganizationAdaptivePolicyPolicyRequest

try {
    $result = $apiInstance->createOrganizationAdaptivePolicyPolicy($organization_id, $create_organization_adaptive_policy_policy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdaptivePolicyApi->createOrganizationAdaptivePolicyPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_adaptive_policy_policy_request** | [**\Meraki\Model\CreateOrganizationAdaptivePolicyPolicyRequest**](../Model/CreateOrganizationAdaptivePolicyPolicyRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicyPolicies200ResponseInner**](../Model/GetOrganizationAdaptivePolicyPolicies200ResponseInner.md)

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


$apiInstance = new Meraki\Api\AdaptivePolicyApi(
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
    echo 'Exception when calling AdaptivePolicyApi->deleteOrganizationAdaptivePolicyAcl: ', $e->getMessage(), PHP_EOL;
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

## `deleteOrganizationAdaptivePolicyGroup()`

```php
deleteOrganizationAdaptivePolicyGroup($organization_id, $id)
```

Deletes the specified adaptive policy group and any associated policies and references

Deletes the specified adaptive policy group and any associated policies and references

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


$apiInstance = new Meraki\Api\AdaptivePolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$id = 'id_example'; // string | ID

try {
    $apiInstance->deleteOrganizationAdaptivePolicyGroup($organization_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling AdaptivePolicyApi->deleteOrganizationAdaptivePolicyGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **id** | **string**| ID | |

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

## `deleteOrganizationAdaptivePolicyPolicy()`

```php
deleteOrganizationAdaptivePolicyPolicy($organization_id, $id)
```

Delete an Adaptive Policy

Delete an Adaptive Policy

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


$apiInstance = new Meraki\Api\AdaptivePolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$id = 'id_example'; // string | ID

try {
    $apiInstance->deleteOrganizationAdaptivePolicyPolicy($organization_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling AdaptivePolicyApi->deleteOrganizationAdaptivePolicyPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **id** | **string**| ID | |

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


$apiInstance = new Meraki\Api\AdaptivePolicyApi(
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
    echo 'Exception when calling AdaptivePolicyApi->getOrganizationAdaptivePolicyAcl: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\AdaptivePolicyApi(
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
    echo 'Exception when calling AdaptivePolicyApi->getOrganizationAdaptivePolicyAcls: ', $e->getMessage(), PHP_EOL;
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

## `getOrganizationAdaptivePolicyGroup()`

```php
getOrganizationAdaptivePolicyGroup($organization_id, $id): \Meraki\Model\GetOrganizationAdaptivePolicyGroups200ResponseInner
```

Returns an adaptive policy group

Returns an adaptive policy group

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


$apiInstance = new Meraki\Api\AdaptivePolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$id = 'id_example'; // string | ID

try {
    $result = $apiInstance->getOrganizationAdaptivePolicyGroup($organization_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdaptivePolicyApi->getOrganizationAdaptivePolicyGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **id** | **string**| ID | |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicyGroups200ResponseInner**](../Model/GetOrganizationAdaptivePolicyGroups200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAdaptivePolicyGroups()`

```php
getOrganizationAdaptivePolicyGroups($organization_id): \Meraki\Model\GetOrganizationAdaptivePolicyGroups200ResponseInner[]
```

List adaptive policy groups in a organization

List adaptive policy groups in a organization

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


$apiInstance = new Meraki\Api\AdaptivePolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationAdaptivePolicyGroups($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdaptivePolicyApi->getOrganizationAdaptivePolicyGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicyGroups200ResponseInner[]**](../Model/GetOrganizationAdaptivePolicyGroups200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAdaptivePolicyOverview()`

```php
getOrganizationAdaptivePolicyOverview($organization_id): \Meraki\Model\GetOrganizationAdaptivePolicyOverview200Response
```

Returns adaptive policy aggregate statistics for an organization

Returns adaptive policy aggregate statistics for an organization

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


$apiInstance = new Meraki\Api\AdaptivePolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationAdaptivePolicyOverview($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdaptivePolicyApi->getOrganizationAdaptivePolicyOverview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicyOverview200Response**](../Model/GetOrganizationAdaptivePolicyOverview200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAdaptivePolicyPolicies()`

```php
getOrganizationAdaptivePolicyPolicies($organization_id): \Meraki\Model\GetOrganizationAdaptivePolicyPolicies200ResponseInner[]
```

List adaptive policies in an organization

List adaptive policies in an organization

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


$apiInstance = new Meraki\Api\AdaptivePolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationAdaptivePolicyPolicies($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdaptivePolicyApi->getOrganizationAdaptivePolicyPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicyPolicies200ResponseInner[]**](../Model/GetOrganizationAdaptivePolicyPolicies200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAdaptivePolicyPolicy()`

```php
getOrganizationAdaptivePolicyPolicy($organization_id, $id): \Meraki\Model\GetOrganizationAdaptivePolicyPolicies200ResponseInner
```

Return an adaptive policy

Return an adaptive policy

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


$apiInstance = new Meraki\Api\AdaptivePolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$id = 'id_example'; // string | ID

try {
    $result = $apiInstance->getOrganizationAdaptivePolicyPolicy($organization_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdaptivePolicyApi->getOrganizationAdaptivePolicyPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **id** | **string**| ID | |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicyPolicies200ResponseInner**](../Model/GetOrganizationAdaptivePolicyPolicies200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAdaptivePolicySettings()`

```php
getOrganizationAdaptivePolicySettings($organization_id): \Meraki\Model\GetOrganizationAdaptivePolicySettings200Response
```

Returns global adaptive policy settings in an organization

Returns global adaptive policy settings in an organization

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


$apiInstance = new Meraki\Api\AdaptivePolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationAdaptivePolicySettings($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdaptivePolicyApi->getOrganizationAdaptivePolicySettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicySettings200Response**](../Model/GetOrganizationAdaptivePolicySettings200Response.md)

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


$apiInstance = new Meraki\Api\AdaptivePolicyApi(
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
    echo 'Exception when calling AdaptivePolicyApi->updateOrganizationAdaptivePolicyAcl: ', $e->getMessage(), PHP_EOL;
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

## `updateOrganizationAdaptivePolicyGroup()`

```php
updateOrganizationAdaptivePolicyGroup($organization_id, $id, $update_organization_adaptive_policy_group_request): \Meraki\Model\GetOrganizationAdaptivePolicyGroups200ResponseInner
```

Updates an adaptive policy group

Updates an adaptive policy group. If updating \"Infrastructure\", only the SGT is allowed. Cannot update \"Unknown\".

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


$apiInstance = new Meraki\Api\AdaptivePolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$id = 'id_example'; // string | ID
$update_organization_adaptive_policy_group_request = new \Meraki\Model\UpdateOrganizationAdaptivePolicyGroupRequest(); // \Meraki\Model\UpdateOrganizationAdaptivePolicyGroupRequest

try {
    $result = $apiInstance->updateOrganizationAdaptivePolicyGroup($organization_id, $id, $update_organization_adaptive_policy_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdaptivePolicyApi->updateOrganizationAdaptivePolicyGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **id** | **string**| ID | |
| **update_organization_adaptive_policy_group_request** | [**\Meraki\Model\UpdateOrganizationAdaptivePolicyGroupRequest**](../Model/UpdateOrganizationAdaptivePolicyGroupRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicyGroups200ResponseInner**](../Model/GetOrganizationAdaptivePolicyGroups200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationAdaptivePolicyPolicy()`

```php
updateOrganizationAdaptivePolicyPolicy($organization_id, $id, $update_organization_adaptive_policy_policy_request): \Meraki\Model\GetOrganizationAdaptivePolicyPolicies200ResponseInner
```

Update an Adaptive Policy

Update an Adaptive Policy

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


$apiInstance = new Meraki\Api\AdaptivePolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$id = 'id_example'; // string | ID
$update_organization_adaptive_policy_policy_request = new \Meraki\Model\UpdateOrganizationAdaptivePolicyPolicyRequest(); // \Meraki\Model\UpdateOrganizationAdaptivePolicyPolicyRequest

try {
    $result = $apiInstance->updateOrganizationAdaptivePolicyPolicy($organization_id, $id, $update_organization_adaptive_policy_policy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdaptivePolicyApi->updateOrganizationAdaptivePolicyPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **id** | **string**| ID | |
| **update_organization_adaptive_policy_policy_request** | [**\Meraki\Model\UpdateOrganizationAdaptivePolicyPolicyRequest**](../Model/UpdateOrganizationAdaptivePolicyPolicyRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicyPolicies200ResponseInner**](../Model/GetOrganizationAdaptivePolicyPolicies200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationAdaptivePolicySettings()`

```php
updateOrganizationAdaptivePolicySettings($organization_id, $update_organization_adaptive_policy_settings_request): \Meraki\Model\GetOrganizationAdaptivePolicySettings200Response
```

Update global adaptive policy settings

Update global adaptive policy settings

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


$apiInstance = new Meraki\Api\AdaptivePolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$update_organization_adaptive_policy_settings_request = new \Meraki\Model\UpdateOrganizationAdaptivePolicySettingsRequest(); // \Meraki\Model\UpdateOrganizationAdaptivePolicySettingsRequest

try {
    $result = $apiInstance->updateOrganizationAdaptivePolicySettings($organization_id, $update_organization_adaptive_policy_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdaptivePolicyApi->updateOrganizationAdaptivePolicySettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **update_organization_adaptive_policy_settings_request** | [**\Meraki\Model\UpdateOrganizationAdaptivePolicySettingsRequest**](../Model/UpdateOrganizationAdaptivePolicySettingsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicySettings200Response**](../Model/GetOrganizationAdaptivePolicySettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
