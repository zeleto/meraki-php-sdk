# Meraki\ClaimKeyApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**validateAdministeredLicensingSubscriptionSubscriptionsClaimKey()**](ClaimKeyApi.md#validateAdministeredLicensingSubscriptionSubscriptionsClaimKey) | **POST** /administered/licensing/subscription/subscriptions/claimKey/validate | Find a subscription by claim key |


## `validateAdministeredLicensingSubscriptionSubscriptionsClaimKey()`

```php
validateAdministeredLicensingSubscriptionSubscriptionsClaimKey($validate_administered_licensing_subscription_subscriptions_claim_key_request): \Meraki\Model\GetAdministeredLicensingSubscriptionSubscriptions200ResponseInner
```

Find a subscription by claim key

Find a subscription by claim key. Returns 400 if the key has already been claimed.

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


$apiInstance = new Meraki\Api\ClaimKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$validate_administered_licensing_subscription_subscriptions_claim_key_request = new \Meraki\Model\ValidateAdministeredLicensingSubscriptionSubscriptionsClaimKeyRequest(); // \Meraki\Model\ValidateAdministeredLicensingSubscriptionSubscriptionsClaimKeyRequest

try {
    $result = $apiInstance->validateAdministeredLicensingSubscriptionSubscriptionsClaimKey($validate_administered_licensing_subscription_subscriptions_claim_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClaimKeyApi->validateAdministeredLicensingSubscriptionSubscriptionsClaimKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **validate_administered_licensing_subscription_subscriptions_claim_key_request** | [**\Meraki\Model\ValidateAdministeredLicensingSubscriptionSubscriptionsClaimKeyRequest**](../Model/ValidateAdministeredLicensingSubscriptionSubscriptionsClaimKeyRequest.md)|  | |

### Return type

[**\Meraki\Model\GetAdministeredLicensingSubscriptionSubscriptions200ResponseInner**](../Model/GetAdministeredLicensingSubscriptionSubscriptions200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
