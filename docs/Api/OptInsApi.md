# Meraki\OptInsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrganizationEarlyAccessFeaturesOptIn()**](OptInsApi.md#createOrganizationEarlyAccessFeaturesOptIn) | **POST** /organizations/{organizationId}/earlyAccess/features/optIns | Create a new early access feature opt-in for an organization |
| [**deleteOrganizationEarlyAccessFeaturesOptIn()**](OptInsApi.md#deleteOrganizationEarlyAccessFeaturesOptIn) | **DELETE** /organizations/{organizationId}/earlyAccess/features/optIns/{optInId} | Delete an early access feature opt-in |
| [**getOrganizationEarlyAccessFeaturesOptIn()**](OptInsApi.md#getOrganizationEarlyAccessFeaturesOptIn) | **GET** /organizations/{organizationId}/earlyAccess/features/optIns/{optInId} | Show an early access feature opt-in for an organization |
| [**getOrganizationEarlyAccessFeaturesOptIns()**](OptInsApi.md#getOrganizationEarlyAccessFeaturesOptIns) | **GET** /organizations/{organizationId}/earlyAccess/features/optIns | List the early access feature opt-ins for an organization |
| [**updateOrganizationEarlyAccessFeaturesOptIn()**](OptInsApi.md#updateOrganizationEarlyAccessFeaturesOptIn) | **PUT** /organizations/{organizationId}/earlyAccess/features/optIns/{optInId} | Update an early access feature opt-in for an organization |


## `createOrganizationEarlyAccessFeaturesOptIn()`

```php
createOrganizationEarlyAccessFeaturesOptIn($organization_id, $create_organization_early_access_features_opt_in_request): \Meraki\Model\GetOrganizationEarlyAccessFeaturesOptIns200Response
```

Create a new early access feature opt-in for an organization

Create a new early access feature opt-in for an organization

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


$apiInstance = new Meraki\Api\OptInsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_early_access_features_opt_in_request = new \Meraki\Model\CreateOrganizationEarlyAccessFeaturesOptInRequest(); // \Meraki\Model\CreateOrganizationEarlyAccessFeaturesOptInRequest

try {
    $result = $apiInstance->createOrganizationEarlyAccessFeaturesOptIn($organization_id, $create_organization_early_access_features_opt_in_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptInsApi->createOrganizationEarlyAccessFeaturesOptIn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_early_access_features_opt_in_request** | [**\Meraki\Model\CreateOrganizationEarlyAccessFeaturesOptInRequest**](../Model/CreateOrganizationEarlyAccessFeaturesOptInRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationEarlyAccessFeaturesOptIns200Response**](../Model/GetOrganizationEarlyAccessFeaturesOptIns200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrganizationEarlyAccessFeaturesOptIn()`

```php
deleteOrganizationEarlyAccessFeaturesOptIn($organization_id, $opt_in_id)
```

Delete an early access feature opt-in

Delete an early access feature opt-in

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


$apiInstance = new Meraki\Api\OptInsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$opt_in_id = 'opt_in_id_example'; // string | Opt in ID

try {
    $apiInstance->deleteOrganizationEarlyAccessFeaturesOptIn($organization_id, $opt_in_id);
} catch (Exception $e) {
    echo 'Exception when calling OptInsApi->deleteOrganizationEarlyAccessFeaturesOptIn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **opt_in_id** | **string**| Opt in ID | |

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

## `getOrganizationEarlyAccessFeaturesOptIn()`

```php
getOrganizationEarlyAccessFeaturesOptIn($organization_id, $opt_in_id): \Meraki\Model\GetOrganizationEarlyAccessFeaturesOptIns200Response
```

Show an early access feature opt-in for an organization

Show an early access feature opt-in for an organization

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


$apiInstance = new Meraki\Api\OptInsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$opt_in_id = 'opt_in_id_example'; // string | Opt in ID

try {
    $result = $apiInstance->getOrganizationEarlyAccessFeaturesOptIn($organization_id, $opt_in_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptInsApi->getOrganizationEarlyAccessFeaturesOptIn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **opt_in_id** | **string**| Opt in ID | |

### Return type

[**\Meraki\Model\GetOrganizationEarlyAccessFeaturesOptIns200Response**](../Model/GetOrganizationEarlyAccessFeaturesOptIns200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationEarlyAccessFeaturesOptIns()`

```php
getOrganizationEarlyAccessFeaturesOptIns($organization_id): \Meraki\Model\GetOrganizationEarlyAccessFeaturesOptIns200Response
```

List the early access feature opt-ins for an organization

List the early access feature opt-ins for an organization

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


$apiInstance = new Meraki\Api\OptInsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationEarlyAccessFeaturesOptIns($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptInsApi->getOrganizationEarlyAccessFeaturesOptIns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationEarlyAccessFeaturesOptIns200Response**](../Model/GetOrganizationEarlyAccessFeaturesOptIns200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationEarlyAccessFeaturesOptIn()`

```php
updateOrganizationEarlyAccessFeaturesOptIn($organization_id, $opt_in_id, $update_organization_early_access_features_opt_in_request): \Meraki\Model\GetOrganizationEarlyAccessFeaturesOptIns200Response
```

Update an early access feature opt-in for an organization

Update an early access feature opt-in for an organization

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


$apiInstance = new Meraki\Api\OptInsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$opt_in_id = 'opt_in_id_example'; // string | Opt in ID
$update_organization_early_access_features_opt_in_request = new \Meraki\Model\UpdateOrganizationEarlyAccessFeaturesOptInRequest(); // \Meraki\Model\UpdateOrganizationEarlyAccessFeaturesOptInRequest

try {
    $result = $apiInstance->updateOrganizationEarlyAccessFeaturesOptIn($organization_id, $opt_in_id, $update_organization_early_access_features_opt_in_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptInsApi->updateOrganizationEarlyAccessFeaturesOptIn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **opt_in_id** | **string**| Opt in ID | |
| **update_organization_early_access_features_opt_in_request** | [**\Meraki\Model\UpdateOrganizationEarlyAccessFeaturesOptInRequest**](../Model/UpdateOrganizationEarlyAccessFeaturesOptInRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationEarlyAccessFeaturesOptIns200Response**](../Model/GetOrganizationEarlyAccessFeaturesOptIns200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
