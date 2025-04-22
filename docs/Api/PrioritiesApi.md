# Meraki\PrioritiesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrganizationBrandingPoliciesPriorities()**](PrioritiesApi.md#getOrganizationBrandingPoliciesPriorities) | **GET** /organizations/{organizationId}/brandingPolicies/priorities | Return the branding policy IDs of an organization in priority order |
| [**updateOrganizationBrandingPoliciesPriorities()**](PrioritiesApi.md#updateOrganizationBrandingPoliciesPriorities) | **PUT** /organizations/{organizationId}/brandingPolicies/priorities | Update the priority ordering of an organization&#39;s branding policies. |


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


$apiInstance = new Meraki\Api\PrioritiesApi(
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
    echo 'Exception when calling PrioritiesApi->getOrganizationBrandingPoliciesPriorities: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\PrioritiesApi(
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
    echo 'Exception when calling PrioritiesApi->updateOrganizationBrandingPoliciesPriorities: ', $e->getMessage(), PHP_EOL;
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
