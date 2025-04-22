# Meraki\ConfigTemplatesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrganizationConfigTemplate()**](ConfigTemplatesApi.md#createOrganizationConfigTemplate) | **POST** /organizations/{organizationId}/configTemplates | Create a new configuration template |
| [**deleteOrganizationConfigTemplate()**](ConfigTemplatesApi.md#deleteOrganizationConfigTemplate) | **DELETE** /organizations/{organizationId}/configTemplates/{configTemplateId} | Remove a configuration template |
| [**getOrganizationConfigTemplate()**](ConfigTemplatesApi.md#getOrganizationConfigTemplate) | **GET** /organizations/{organizationId}/configTemplates/{configTemplateId} | Return a single configuration template |
| [**getOrganizationConfigTemplateSwitchProfilePort()**](ConfigTemplatesApi.md#getOrganizationConfigTemplateSwitchProfilePort) | **GET** /organizations/{organizationId}/configTemplates/{configTemplateId}/switch/profiles/{profileId}/ports/{portId} | Return a switch template port |
| [**getOrganizationConfigTemplateSwitchProfilePorts()**](ConfigTemplatesApi.md#getOrganizationConfigTemplateSwitchProfilePorts) | **GET** /organizations/{organizationId}/configTemplates/{configTemplateId}/switch/profiles/{profileId}/ports | Return all the ports of a switch template |
| [**getOrganizationConfigTemplateSwitchProfiles()**](ConfigTemplatesApi.md#getOrganizationConfigTemplateSwitchProfiles) | **GET** /organizations/{organizationId}/configTemplates/{configTemplateId}/switch/profiles | List the switch templates for your switch template configuration |
| [**getOrganizationConfigTemplates()**](ConfigTemplatesApi.md#getOrganizationConfigTemplates) | **GET** /organizations/{organizationId}/configTemplates | List the configuration templates for this organization |
| [**updateOrganizationConfigTemplate()**](ConfigTemplatesApi.md#updateOrganizationConfigTemplate) | **PUT** /organizations/{organizationId}/configTemplates/{configTemplateId} | Update a configuration template |
| [**updateOrganizationConfigTemplateSwitchProfilePort()**](ConfigTemplatesApi.md#updateOrganizationConfigTemplateSwitchProfilePort) | **PUT** /organizations/{organizationId}/configTemplates/{configTemplateId}/switch/profiles/{profileId}/ports/{portId} | Update a switch template port |


## `createOrganizationConfigTemplate()`

```php
createOrganizationConfigTemplate($organization_id, $create_organization_config_template_request): \Meraki\Model\GetOrganizationConfigTemplates200ResponseInner
```

Create a new configuration template

Create a new configuration template

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


$apiInstance = new Meraki\Api\ConfigTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_config_template_request = new \Meraki\Model\CreateOrganizationConfigTemplateRequest(); // \Meraki\Model\CreateOrganizationConfigTemplateRequest

try {
    $result = $apiInstance->createOrganizationConfigTemplate($organization_id, $create_organization_config_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigTemplatesApi->createOrganizationConfigTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_config_template_request** | [**\Meraki\Model\CreateOrganizationConfigTemplateRequest**](../Model/CreateOrganizationConfigTemplateRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationConfigTemplates200ResponseInner**](../Model/GetOrganizationConfigTemplates200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrganizationConfigTemplate()`

```php
deleteOrganizationConfigTemplate($organization_id, $config_template_id)
```

Remove a configuration template

Remove a configuration template

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


$apiInstance = new Meraki\Api\ConfigTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$config_template_id = 'config_template_id_example'; // string | Config template ID

try {
    $apiInstance->deleteOrganizationConfigTemplate($organization_id, $config_template_id);
} catch (Exception $e) {
    echo 'Exception when calling ConfigTemplatesApi->deleteOrganizationConfigTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **config_template_id** | **string**| Config template ID | |

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

## `getOrganizationConfigTemplate()`

```php
getOrganizationConfigTemplate($organization_id, $config_template_id): \Meraki\Model\GetOrganizationConfigTemplates200ResponseInner
```

Return a single configuration template

Return a single configuration template

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


$apiInstance = new Meraki\Api\ConfigTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$config_template_id = 'config_template_id_example'; // string | Config template ID

try {
    $result = $apiInstance->getOrganizationConfigTemplate($organization_id, $config_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigTemplatesApi->getOrganizationConfigTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **config_template_id** | **string**| Config template ID | |

### Return type

[**\Meraki\Model\GetOrganizationConfigTemplates200ResponseInner**](../Model/GetOrganizationConfigTemplates200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationConfigTemplateSwitchProfilePort()`

```php
getOrganizationConfigTemplateSwitchProfilePort($organization_id, $config_template_id, $profile_id, $port_id): \Meraki\Model\GetOrganizationConfigTemplateSwitchProfilePorts200ResponseInner
```

Return a switch template port

Return a switch template port

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


$apiInstance = new Meraki\Api\ConfigTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$config_template_id = 'config_template_id_example'; // string | Config template ID
$profile_id = 'profile_id_example'; // string | Profile ID
$port_id = 'port_id_example'; // string | Port ID

try {
    $result = $apiInstance->getOrganizationConfigTemplateSwitchProfilePort($organization_id, $config_template_id, $profile_id, $port_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigTemplatesApi->getOrganizationConfigTemplateSwitchProfilePort: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **config_template_id** | **string**| Config template ID | |
| **profile_id** | **string**| Profile ID | |
| **port_id** | **string**| Port ID | |

### Return type

[**\Meraki\Model\GetOrganizationConfigTemplateSwitchProfilePorts200ResponseInner**](../Model/GetOrganizationConfigTemplateSwitchProfilePorts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationConfigTemplateSwitchProfilePorts()`

```php
getOrganizationConfigTemplateSwitchProfilePorts($organization_id, $config_template_id, $profile_id): \Meraki\Model\GetOrganizationConfigTemplateSwitchProfilePorts200ResponseInner[]
```

Return all the ports of a switch template

Return all the ports of a switch template

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


$apiInstance = new Meraki\Api\ConfigTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$config_template_id = 'config_template_id_example'; // string | Config template ID
$profile_id = 'profile_id_example'; // string | Profile ID

try {
    $result = $apiInstance->getOrganizationConfigTemplateSwitchProfilePorts($organization_id, $config_template_id, $profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigTemplatesApi->getOrganizationConfigTemplateSwitchProfilePorts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **config_template_id** | **string**| Config template ID | |
| **profile_id** | **string**| Profile ID | |

### Return type

[**\Meraki\Model\GetOrganizationConfigTemplateSwitchProfilePorts200ResponseInner[]**](../Model/GetOrganizationConfigTemplateSwitchProfilePorts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationConfigTemplateSwitchProfiles()`

```php
getOrganizationConfigTemplateSwitchProfiles($organization_id, $config_template_id): \Meraki\Model\GetOrganizationConfigTemplateSwitchProfiles200ResponseInner[]
```

List the switch templates for your switch template configuration

List the switch templates for your switch template configuration

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


$apiInstance = new Meraki\Api\ConfigTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$config_template_id = 'config_template_id_example'; // string | Config template ID

try {
    $result = $apiInstance->getOrganizationConfigTemplateSwitchProfiles($organization_id, $config_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigTemplatesApi->getOrganizationConfigTemplateSwitchProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **config_template_id** | **string**| Config template ID | |

### Return type

[**\Meraki\Model\GetOrganizationConfigTemplateSwitchProfiles200ResponseInner[]**](../Model/GetOrganizationConfigTemplateSwitchProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationConfigTemplates()`

```php
getOrganizationConfigTemplates($organization_id): \Meraki\Model\GetOrganizationConfigTemplates200ResponseInner[]
```

List the configuration templates for this organization

List the configuration templates for this organization

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


$apiInstance = new Meraki\Api\ConfigTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationConfigTemplates($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigTemplatesApi->getOrganizationConfigTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationConfigTemplates200ResponseInner[]**](../Model/GetOrganizationConfigTemplates200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationConfigTemplate()`

```php
updateOrganizationConfigTemplate($organization_id, $config_template_id, $update_organization_config_template_request): \Meraki\Model\GetOrganizationConfigTemplates200ResponseInner
```

Update a configuration template

Update a configuration template

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


$apiInstance = new Meraki\Api\ConfigTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$config_template_id = 'config_template_id_example'; // string | Config template ID
$update_organization_config_template_request = new \Meraki\Model\UpdateOrganizationConfigTemplateRequest(); // \Meraki\Model\UpdateOrganizationConfigTemplateRequest

try {
    $result = $apiInstance->updateOrganizationConfigTemplate($organization_id, $config_template_id, $update_organization_config_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigTemplatesApi->updateOrganizationConfigTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **config_template_id** | **string**| Config template ID | |
| **update_organization_config_template_request** | [**\Meraki\Model\UpdateOrganizationConfigTemplateRequest**](../Model/UpdateOrganizationConfigTemplateRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationConfigTemplates200ResponseInner**](../Model/GetOrganizationConfigTemplates200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationConfigTemplateSwitchProfilePort()`

```php
updateOrganizationConfigTemplateSwitchProfilePort($organization_id, $config_template_id, $profile_id, $port_id, $update_organization_config_template_switch_profile_port_request): \Meraki\Model\GetOrganizationConfigTemplateSwitchProfilePorts200ResponseInner
```

Update a switch template port

Update a switch template port

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


$apiInstance = new Meraki\Api\ConfigTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$config_template_id = 'config_template_id_example'; // string | Config template ID
$profile_id = 'profile_id_example'; // string | Profile ID
$port_id = 'port_id_example'; // string | Port ID
$update_organization_config_template_switch_profile_port_request = new \Meraki\Model\UpdateOrganizationConfigTemplateSwitchProfilePortRequest(); // \Meraki\Model\UpdateOrganizationConfigTemplateSwitchProfilePortRequest

try {
    $result = $apiInstance->updateOrganizationConfigTemplateSwitchProfilePort($organization_id, $config_template_id, $profile_id, $port_id, $update_organization_config_template_switch_profile_port_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigTemplatesApi->updateOrganizationConfigTemplateSwitchProfilePort: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **config_template_id** | **string**| Config template ID | |
| **profile_id** | **string**| Profile ID | |
| **port_id** | **string**| Port ID | |
| **update_organization_config_template_switch_profile_port_request** | [**\Meraki\Model\UpdateOrganizationConfigTemplateSwitchProfilePortRequest**](../Model/UpdateOrganizationConfigTemplateSwitchProfilePortRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationConfigTemplateSwitchProfilePorts200ResponseInner**](../Model/GetOrganizationConfigTemplateSwitchProfilePorts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
