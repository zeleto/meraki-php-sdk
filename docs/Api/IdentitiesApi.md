# Meraki\IdentitiesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**generateAdministeredIdentitiesMeApiKeys()**](IdentitiesApi.md#generateAdministeredIdentitiesMeApiKeys) | **POST** /administered/identities/me/api/keys/generate | Generates an API key for an identity |
| [**getAdministeredIdentitiesMe()**](IdentitiesApi.md#getAdministeredIdentitiesMe) | **GET** /administered/identities/me | Returns the identity of the current user. |
| [**getAdministeredIdentitiesMeApiKeys()**](IdentitiesApi.md#getAdministeredIdentitiesMeApiKeys) | **GET** /administered/identities/me/api/keys | List the non-sensitive metadata associated with the API keys that belong to the user |
| [**revokeAdministeredIdentitiesMeApiKeys()**](IdentitiesApi.md#revokeAdministeredIdentitiesMeApiKeys) | **POST** /administered/identities/me/api/keys/{suffix}/revoke | Revokes an identity&#39;s API key, using the last four characters of the key |


## `generateAdministeredIdentitiesMeApiKeys()`

```php
generateAdministeredIdentitiesMeApiKeys(): \Meraki\Model\GenerateAdministeredIdentitiesMeApiKeys202Response
```

Generates an API key for an identity

Generates an API key for an identity. For users who have access to more than one organization, the change will take up to five minutes to propagate. If one of the organizations is currently under maintenance, the change may not propagate fully until after the maintenance has been completed.

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


$apiInstance = new Meraki\Api\IdentitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->generateAdministeredIdentitiesMeApiKeys();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentitiesApi->generateAdministeredIdentitiesMeApiKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Meraki\Model\GenerateAdministeredIdentitiesMeApiKeys202Response**](../Model/GenerateAdministeredIdentitiesMeApiKeys202Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdministeredIdentitiesMe()`

```php
getAdministeredIdentitiesMe(): \Meraki\Model\GetAdministeredIdentitiesMe200Response
```

Returns the identity of the current user.

Returns the identity of the current user.

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


$apiInstance = new Meraki\Api\IdentitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAdministeredIdentitiesMe();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentitiesApi->getAdministeredIdentitiesMe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Meraki\Model\GetAdministeredIdentitiesMe200Response**](../Model/GetAdministeredIdentitiesMe200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdministeredIdentitiesMeApiKeys()`

```php
getAdministeredIdentitiesMeApiKeys(): \Meraki\Model\GetAdministeredIdentitiesMeApiKeys200ResponseInner[]
```

List the non-sensitive metadata associated with the API keys that belong to the user

List the non-sensitive metadata associated with the API keys that belong to the user

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


$apiInstance = new Meraki\Api\IdentitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAdministeredIdentitiesMeApiKeys();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentitiesApi->getAdministeredIdentitiesMeApiKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Meraki\Model\GetAdministeredIdentitiesMeApiKeys200ResponseInner[]**](../Model/GetAdministeredIdentitiesMeApiKeys200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokeAdministeredIdentitiesMeApiKeys()`

```php
revokeAdministeredIdentitiesMeApiKeys($suffix)
```

Revokes an identity's API key, using the last four characters of the key

Revokes an identity's API key, using the last four characters of the key. For users who have access to more than one organization, the change will take up to five minutes to propagate. If one of the organizations is currently under maintenance, the change may not propagate fully until after the maintenance has been completed.

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


$apiInstance = new Meraki\Api\IdentitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$suffix = 'suffix_example'; // string | Suffix

try {
    $apiInstance->revokeAdministeredIdentitiesMeApiKeys($suffix);
} catch (Exception $e) {
    echo 'Exception when calling IdentitiesApi->revokeAdministeredIdentitiesMeApiKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **suffix** | **string**| Suffix | |

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
