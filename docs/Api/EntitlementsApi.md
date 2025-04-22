# Meraki\EntitlementsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAdministeredLicensingSubscriptionEntitlements()**](EntitlementsApi.md#getAdministeredLicensingSubscriptionEntitlements) | **GET** /administered/licensing/subscription/entitlements | Retrieve the list of purchasable entitlements |


## `getAdministeredLicensingSubscriptionEntitlements()`

```php
getAdministeredLicensingSubscriptionEntitlements($skus): \Meraki\Model\GetAdministeredLicensingSubscriptionEntitlements200Response
```

Retrieve the list of purchasable entitlements

Retrieve the list of purchasable entitlements

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


$apiInstance = new Meraki\Api\EntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skus = array('skus_example'); // string[] | Filter to entitlements with the specified SKUs

try {
    $result = $apiInstance->getAdministeredLicensingSubscriptionEntitlements($skus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitlementsApi->getAdministeredLicensingSubscriptionEntitlements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skus** | [**string[]**](../Model/string.md)| Filter to entitlements with the specified SKUs | [optional] |

### Return type

[**\Meraki\Model\GetAdministeredLicensingSubscriptionEntitlements200Response**](../Model/GetAdministeredLicensingSubscriptionEntitlements200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
