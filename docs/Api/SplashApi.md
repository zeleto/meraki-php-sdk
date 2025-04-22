# Meraki\SplashApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrganizationSplashTheme()**](SplashApi.md#createOrganizationSplashTheme) | **POST** /organizations/{organizationId}/splash/themes | Create a Splash Theme |
| [**createOrganizationSplashThemeAsset()**](SplashApi.md#createOrganizationSplashThemeAsset) | **POST** /organizations/{organizationId}/splash/themes/{themeIdentifier}/assets | Create a Splash Theme Asset |
| [**deleteOrganizationSplashAsset()**](SplashApi.md#deleteOrganizationSplashAsset) | **DELETE** /organizations/{organizationId}/splash/assets/{id} | Delete a Splash Theme Asset |
| [**deleteOrganizationSplashTheme()**](SplashApi.md#deleteOrganizationSplashTheme) | **DELETE** /organizations/{organizationId}/splash/themes/{id} | Delete a Splash Theme |
| [**getNetworkWirelessSsidSplashSettings()**](SplashApi.md#getNetworkWirelessSsidSplashSettings) | **GET** /networks/{networkId}/wireless/ssids/{number}/splash/settings | Display the splash page settings for the given SSID |
| [**getOrganizationSplashAsset()**](SplashApi.md#getOrganizationSplashAsset) | **GET** /organizations/{organizationId}/splash/assets/{id} | Get a Splash Theme Asset |
| [**getOrganizationSplashThemes()**](SplashApi.md#getOrganizationSplashThemes) | **GET** /organizations/{organizationId}/splash/themes | List Splash Themes |
| [**updateNetworkWirelessSsidSplashSettings()**](SplashApi.md#updateNetworkWirelessSsidSplashSettings) | **PUT** /networks/{networkId}/wireless/ssids/{number}/splash/settings | Modify the splash page settings for the given SSID |


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


$apiInstance = new Meraki\Api\SplashApi(
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
    echo 'Exception when calling SplashApi->createOrganizationSplashTheme: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\SplashApi(
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
    echo 'Exception when calling SplashApi->createOrganizationSplashThemeAsset: ', $e->getMessage(), PHP_EOL;
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

## `deleteOrganizationSplashAsset()`

```php
deleteOrganizationSplashAsset($organization_id, $id)
```

Delete a Splash Theme Asset

Delete a Splash Theme Asset

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


$apiInstance = new Meraki\Api\SplashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$id = 'id_example'; // string | ID

try {
    $apiInstance->deleteOrganizationSplashAsset($organization_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling SplashApi->deleteOrganizationSplashAsset: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\SplashApi(
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
    echo 'Exception when calling SplashApi->deleteOrganizationSplashTheme: ', $e->getMessage(), PHP_EOL;
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

## `getNetworkWirelessSsidSplashSettings()`

```php
getNetworkWirelessSsidSplashSettings($network_id, $number): \Meraki\Model\GetNetworkWirelessSsidSplashSettings200Response
```

Display the splash page settings for the given SSID

Display the splash page settings for the given SSID

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


$apiInstance = new Meraki\Api\SplashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidSplashSettings($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SplashApi->getNetworkWirelessSsidSplashSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidSplashSettings200Response**](../Model/GetNetworkWirelessSsidSplashSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSplashAsset()`

```php
getOrganizationSplashAsset($organization_id, $id): \Meraki\Model\GetOrganizationSplashAsset200Response
```

Get a Splash Theme Asset

Get a Splash Theme Asset

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


$apiInstance = new Meraki\Api\SplashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$id = 'id_example'; // string | ID

try {
    $result = $apiInstance->getOrganizationSplashAsset($organization_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SplashApi->getOrganizationSplashAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **id** | **string**| ID | |

### Return type

[**\Meraki\Model\GetOrganizationSplashAsset200Response**](../Model/GetOrganizationSplashAsset200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

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


$apiInstance = new Meraki\Api\SplashApi(
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
    echo 'Exception when calling SplashApi->getOrganizationSplashThemes: ', $e->getMessage(), PHP_EOL;
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

## `updateNetworkWirelessSsidSplashSettings()`

```php
updateNetworkWirelessSsidSplashSettings($network_id, $number, $update_network_wireless_ssid_splash_settings_request): \Meraki\Model\GetNetworkWirelessSsidSplashSettings200Response
```

Modify the splash page settings for the given SSID

Modify the splash page settings for the given SSID

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


$apiInstance = new Meraki\Api\SplashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_splash_settings_request = new \Meraki\Model\UpdateNetworkWirelessSsidSplashSettingsRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidSplashSettingsRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsidSplashSettings($network_id, $number, $update_network_wireless_ssid_splash_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SplashApi->updateNetworkWirelessSsidSplashSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_splash_settings_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidSplashSettingsRequest**](../Model/UpdateNetworkWirelessSsidSplashSettingsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidSplashSettings200Response**](../Model/GetNetworkWirelessSsidSplashSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
