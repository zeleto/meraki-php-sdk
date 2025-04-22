# Meraki\ThemesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrganizationSplashTheme()**](ThemesApi.md#createOrganizationSplashTheme) | **POST** /organizations/{organizationId}/splash/themes | Create a Splash Theme |
| [**createOrganizationSplashThemeAsset()**](ThemesApi.md#createOrganizationSplashThemeAsset) | **POST** /organizations/{organizationId}/splash/themes/{themeIdentifier}/assets | Create a Splash Theme Asset |
| [**deleteOrganizationSplashTheme()**](ThemesApi.md#deleteOrganizationSplashTheme) | **DELETE** /organizations/{organizationId}/splash/themes/{id} | Delete a Splash Theme |
| [**getOrganizationSplashThemes()**](ThemesApi.md#getOrganizationSplashThemes) | **GET** /organizations/{organizationId}/splash/themes | List Splash Themes |


## `createOrganizationSplashTheme()`

```php
createOrganizationSplashTheme($organization_id, $create_organization_splash_theme_request): \Meraki\Model\GetOrganizationSplashThemes200ResponseInner
```

Create a Splash Theme

Create a Splash Theme

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


$apiInstance = new Meraki\Api\ThemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_splash_theme_request = new \Meraki\Model\CreateOrganizationSplashThemeRequest(); // \Meraki\Model\CreateOrganizationSplashThemeRequest

try {
    $result = $apiInstance->createOrganizationSplashTheme($organization_id, $create_organization_splash_theme_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThemesApi->createOrganizationSplashTheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_splash_theme_request** | [**\Meraki\Model\CreateOrganizationSplashThemeRequest**](../Model/CreateOrganizationSplashThemeRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSplashThemes200ResponseInner**](../Model/GetOrganizationSplashThemes200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationSplashThemeAsset()`

```php
createOrganizationSplashThemeAsset($organization_id, $theme_identifier, $create_organization_splash_theme_asset_request): \Meraki\Model\GetOrganizationSplashAsset200Response
```

Create a Splash Theme Asset

Create a Splash Theme Asset

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


$apiInstance = new Meraki\Api\ThemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$theme_identifier = 'theme_identifier_example'; // string | Theme identifier
$create_organization_splash_theme_asset_request = new \Meraki\Model\CreateOrganizationSplashThemeAssetRequest(); // \Meraki\Model\CreateOrganizationSplashThemeAssetRequest

try {
    $result = $apiInstance->createOrganizationSplashThemeAsset($organization_id, $theme_identifier, $create_organization_splash_theme_asset_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThemesApi->createOrganizationSplashThemeAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **theme_identifier** | **string**| Theme identifier | |
| **create_organization_splash_theme_asset_request** | [**\Meraki\Model\CreateOrganizationSplashThemeAssetRequest**](../Model/CreateOrganizationSplashThemeAssetRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSplashAsset200Response**](../Model/GetOrganizationSplashAsset200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrganizationSplashTheme()`

```php
deleteOrganizationSplashTheme($organization_id, $id)
```

Delete a Splash Theme

Delete a Splash Theme

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


$apiInstance = new Meraki\Api\ThemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$id = 'id_example'; // string | ID

try {
    $apiInstance->deleteOrganizationSplashTheme($organization_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling ThemesApi->deleteOrganizationSplashTheme: ', $e->getMessage(), PHP_EOL;
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

## `getOrganizationSplashThemes()`

```php
getOrganizationSplashThemes($organization_id): \Meraki\Model\GetOrganizationSplashThemes200ResponseInner[]
```

List Splash Themes

List Splash Themes

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


$apiInstance = new Meraki\Api\ThemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationSplashThemes($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThemesApi->getOrganizationSplashThemes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationSplashThemes200ResponseInner[]**](../Model/GetOrganizationSplashThemes200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
