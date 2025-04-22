# Meraki\BrandingPoliciesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrganizationBrandingPolicy()**](BrandingPoliciesApi.md#createOrganizationBrandingPolicy) | **POST** /organizations/{organizationId}/brandingPolicies | Add a new branding policy to an organization |
| [**deleteOrganizationBrandingPolicy()**](BrandingPoliciesApi.md#deleteOrganizationBrandingPolicy) | **DELETE** /organizations/{organizationId}/brandingPolicies/{brandingPolicyId} | Delete a branding policy |
| [**getOrganizationBrandingPolicies()**](BrandingPoliciesApi.md#getOrganizationBrandingPolicies) | **GET** /organizations/{organizationId}/brandingPolicies | List the branding policies of an organization |
| [**getOrganizationBrandingPoliciesPriorities()**](BrandingPoliciesApi.md#getOrganizationBrandingPoliciesPriorities) | **GET** /organizations/{organizationId}/brandingPolicies/priorities | Return the branding policy IDs of an organization in priority order |
| [**getOrganizationBrandingPolicy()**](BrandingPoliciesApi.md#getOrganizationBrandingPolicy) | **GET** /organizations/{organizationId}/brandingPolicies/{brandingPolicyId} | Return a branding policy |
| [**updateOrganizationBrandingPoliciesPriorities()**](BrandingPoliciesApi.md#updateOrganizationBrandingPoliciesPriorities) | **PUT** /organizations/{organizationId}/brandingPolicies/priorities | Update the priority ordering of an organization&#39;s branding policies. |
| [**updateOrganizationBrandingPolicy()**](BrandingPoliciesApi.md#updateOrganizationBrandingPolicy) | **PUT** /organizations/{organizationId}/brandingPolicies/{brandingPolicyId} | Update a branding policy |


## `createOrganizationBrandingPolicy()`

```php
createOrganizationBrandingPolicy($organization_id, $create_organization_branding_policy_request): \Meraki\Model\CreateOrganizationBrandingPolicy201Response
```

Add a new branding policy to an organization

Add a new branding policy to an organization

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


$apiInstance = new Meraki\Api\BrandingPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_branding_policy_request = new \Meraki\Model\CreateOrganizationBrandingPolicyRequest(); // \Meraki\Model\CreateOrganizationBrandingPolicyRequest

try {
    $result = $apiInstance->createOrganizationBrandingPolicy($organization_id, $create_organization_branding_policy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandingPoliciesApi->createOrganizationBrandingPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_branding_policy_request** | [**\Meraki\Model\CreateOrganizationBrandingPolicyRequest**](../Model/CreateOrganizationBrandingPolicyRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\CreateOrganizationBrandingPolicy201Response**](../Model/CreateOrganizationBrandingPolicy201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrganizationBrandingPolicy()`

```php
deleteOrganizationBrandingPolicy($organization_id, $branding_policy_id)
```

Delete a branding policy

Delete a branding policy

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


$apiInstance = new Meraki\Api\BrandingPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$branding_policy_id = 'branding_policy_id_example'; // string | Branding policy ID

try {
    $apiInstance->deleteOrganizationBrandingPolicy($organization_id, $branding_policy_id);
} catch (Exception $e) {
    echo 'Exception when calling BrandingPoliciesApi->deleteOrganizationBrandingPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **branding_policy_id** | **string**| Branding policy ID | |

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

## `getOrganizationBrandingPolicies()`

```php
getOrganizationBrandingPolicies($organization_id): \Meraki\Model\GetOrganizationBrandingPolicies200ResponseInner[]
```

List the branding policies of an organization

List the branding policies of an organization

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


$apiInstance = new Meraki\Api\BrandingPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationBrandingPolicies($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandingPoliciesApi->getOrganizationBrandingPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationBrandingPolicies200ResponseInner[]**](../Model/GetOrganizationBrandingPolicies200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationBrandingPoliciesPriorities()`

```php
getOrganizationBrandingPoliciesPriorities($organization_id): \Meraki\Model\GetOrganizationBrandingPoliciesPriorities200Response
```

Return the branding policy IDs of an organization in priority order

Return the branding policy IDs of an organization in priority order. IDs are ordered in ascending order of priority (IDs later in the array have higher priority).

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


$apiInstance = new Meraki\Api\BrandingPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationBrandingPoliciesPriorities($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandingPoliciesApi->getOrganizationBrandingPoliciesPriorities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationBrandingPoliciesPriorities200Response**](../Model/GetOrganizationBrandingPoliciesPriorities200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationBrandingPolicy()`

```php
getOrganizationBrandingPolicy($organization_id, $branding_policy_id): \Meraki\Model\GetOrganizationBrandingPolicies200ResponseInner
```

Return a branding policy

Return a branding policy

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


$apiInstance = new Meraki\Api\BrandingPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$branding_policy_id = 'branding_policy_id_example'; // string | Branding policy ID

try {
    $result = $apiInstance->getOrganizationBrandingPolicy($organization_id, $branding_policy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandingPoliciesApi->getOrganizationBrandingPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **branding_policy_id** | **string**| Branding policy ID | |

### Return type

[**\Meraki\Model\GetOrganizationBrandingPolicies200ResponseInner**](../Model/GetOrganizationBrandingPolicies200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationBrandingPoliciesPriorities()`

```php
updateOrganizationBrandingPoliciesPriorities($organization_id, $update_organization_branding_policies_priorities_request): \Meraki\Model\GetOrganizationBrandingPoliciesPriorities200Response
```

Update the priority ordering of an organization's branding policies.

Update the priority ordering of an organization's branding policies.

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


$apiInstance = new Meraki\Api\BrandingPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$update_organization_branding_policies_priorities_request = new \Meraki\Model\UpdateOrganizationBrandingPoliciesPrioritiesRequest(); // \Meraki\Model\UpdateOrganizationBrandingPoliciesPrioritiesRequest

try {
    $result = $apiInstance->updateOrganizationBrandingPoliciesPriorities($organization_id, $update_organization_branding_policies_priorities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandingPoliciesApi->updateOrganizationBrandingPoliciesPriorities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **update_organization_branding_policies_priorities_request** | [**\Meraki\Model\UpdateOrganizationBrandingPoliciesPrioritiesRequest**](../Model/UpdateOrganizationBrandingPoliciesPrioritiesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationBrandingPoliciesPriorities200Response**](../Model/GetOrganizationBrandingPoliciesPriorities200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationBrandingPolicy()`

```php
updateOrganizationBrandingPolicy($organization_id, $branding_policy_id, $update_organization_branding_policy_request): \Meraki\Model\GetOrganizationBrandingPolicies200ResponseInner
```

Update a branding policy

Update a branding policy

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


$apiInstance = new Meraki\Api\BrandingPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$branding_policy_id = 'branding_policy_id_example'; // string | Branding policy ID
$update_organization_branding_policy_request = new \Meraki\Model\UpdateOrganizationBrandingPolicyRequest(); // \Meraki\Model\UpdateOrganizationBrandingPolicyRequest

try {
    $result = $apiInstance->updateOrganizationBrandingPolicy($organization_id, $branding_policy_id, $update_organization_branding_policy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandingPoliciesApi->updateOrganizationBrandingPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **branding_policy_id** | **string**| Branding policy ID | |
| **update_organization_branding_policy_request** | [**\Meraki\Model\UpdateOrganizationBrandingPolicyRequest**](../Model/UpdateOrganizationBrandingPolicyRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationBrandingPolicies200ResponseInner**](../Model/GetOrganizationBrandingPolicies200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
