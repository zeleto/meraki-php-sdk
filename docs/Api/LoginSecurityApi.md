# Meraki\LoginSecurityApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrganizationLoginSecurity()**](LoginSecurityApi.md#getOrganizationLoginSecurity) | **GET** /organizations/{organizationId}/loginSecurity | Returns the login security settings for an organization. |
| [**updateOrganizationLoginSecurity()**](LoginSecurityApi.md#updateOrganizationLoginSecurity) | **PUT** /organizations/{organizationId}/loginSecurity | Update the login security settings for an organization |


## `getOrganizationLoginSecurity()`

```php
getOrganizationLoginSecurity($organization_id): \Meraki\Model\GetOrganizationLoginSecurity200Response
```

Returns the login security settings for an organization.

Returns the login security settings for an organization.

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


$apiInstance = new Meraki\Api\LoginSecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationLoginSecurity($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginSecurityApi->getOrganizationLoginSecurity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationLoginSecurity200Response**](../Model/GetOrganizationLoginSecurity200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationLoginSecurity()`

```php
updateOrganizationLoginSecurity($organization_id, $update_organization_login_security_request): \Meraki\Model\GetOrganizationLoginSecurity200Response
```

Update the login security settings for an organization

Update the login security settings for an organization

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


$apiInstance = new Meraki\Api\LoginSecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$update_organization_login_security_request = new \Meraki\Model\UpdateOrganizationLoginSecurityRequest(); // \Meraki\Model\UpdateOrganizationLoginSecurityRequest

try {
    $result = $apiInstance->updateOrganizationLoginSecurity($organization_id, $update_organization_login_security_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginSecurityApi->updateOrganizationLoginSecurity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **update_organization_login_security_request** | [**\Meraki\Model\UpdateOrganizationLoginSecurityRequest**](../Model/UpdateOrganizationLoginSecurityRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationLoginSecurity200Response**](../Model/GetOrganizationLoginSecurity200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
