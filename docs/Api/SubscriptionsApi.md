# Meraki\SubscriptionsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bindAdministeredLicensingSubscriptionSubscription()**](SubscriptionsApi.md#bindAdministeredLicensingSubscriptionSubscription) | **POST** /administered/licensing/subscription/subscriptions/{subscriptionId}/bind | Bind networks to a subscription |
| [**claimAdministeredLicensingSubscriptionSubscriptions()**](SubscriptionsApi.md#claimAdministeredLicensingSubscriptionSubscriptions) | **POST** /administered/licensing/subscription/subscriptions/claim | Claim a subscription into an organization. |
| [**getAdministeredLicensingSubscriptionSubscriptions()**](SubscriptionsApi.md#getAdministeredLicensingSubscriptionSubscriptions) | **GET** /administered/licensing/subscription/subscriptions | List available subscriptions |
| [**getAdministeredLicensingSubscriptionSubscriptionsComplianceStatuses()**](SubscriptionsApi.md#getAdministeredLicensingSubscriptionSubscriptionsComplianceStatuses) | **GET** /administered/licensing/subscription/subscriptions/compliance/statuses | Get compliance status for requested subscriptions |
| [**validateAdministeredLicensingSubscriptionSubscriptionsClaimKey()**](SubscriptionsApi.md#validateAdministeredLicensingSubscriptionSubscriptionsClaimKey) | **POST** /administered/licensing/subscription/subscriptions/claimKey/validate | Find a subscription by claim key |


## `bindAdministeredLicensingSubscriptionSubscription()`

```php
bindAdministeredLicensingSubscriptionSubscription($subscription_id, $validate, $bind_administered_licensing_subscription_subscription_request): \Meraki\Model\BindAdministeredLicensingSubscriptionSubscription200Response
```

Bind networks to a subscription

Bind networks to a subscription

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


$apiInstance = new Meraki\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | Subscription ID
$validate = True; // bool | Check if the provided networks can be bound to the subscription. Returns any licensing problems and does not commit the results.
$bind_administered_licensing_subscription_subscription_request = new \Meraki\Model\BindAdministeredLicensingSubscriptionSubscriptionRequest(); // \Meraki\Model\BindAdministeredLicensingSubscriptionSubscriptionRequest

try {
    $result = $apiInstance->bindAdministeredLicensingSubscriptionSubscription($subscription_id, $validate, $bind_administered_licensing_subscription_subscription_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->bindAdministeredLicensingSubscriptionSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| Subscription ID | |
| **validate** | **bool**| Check if the provided networks can be bound to the subscription. Returns any licensing problems and does not commit the results. | [optional] |
| **bind_administered_licensing_subscription_subscription_request** | [**\Meraki\Model\BindAdministeredLicensingSubscriptionSubscriptionRequest**](../Model/BindAdministeredLicensingSubscriptionSubscriptionRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\BindAdministeredLicensingSubscriptionSubscription200Response**](../Model/BindAdministeredLicensingSubscriptionSubscription200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `claimAdministeredLicensingSubscriptionSubscriptions()`

```php
claimAdministeredLicensingSubscriptionSubscriptions($claim_administered_licensing_subscription_subscriptions_request, $validate): \Meraki\Model\GetAdministeredLicensingSubscriptionSubscriptions200ResponseInner
```

Claim a subscription into an organization.

Claim a subscription into an organization.

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


$apiInstance = new Meraki\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_administered_licensing_subscription_subscriptions_request = new \Meraki\Model\ClaimAdministeredLicensingSubscriptionSubscriptionsRequest(); // \Meraki\Model\ClaimAdministeredLicensingSubscriptionSubscriptionsRequest
$validate = True; // bool | Check if the provided claim key is valid and can be claimed into the organization.

try {
    $result = $apiInstance->claimAdministeredLicensingSubscriptionSubscriptions($claim_administered_licensing_subscription_subscriptions_request, $validate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->claimAdministeredLicensingSubscriptionSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **claim_administered_licensing_subscription_subscriptions_request** | [**\Meraki\Model\ClaimAdministeredLicensingSubscriptionSubscriptionsRequest**](../Model/ClaimAdministeredLicensingSubscriptionSubscriptionsRequest.md)|  | |
| **validate** | **bool**| Check if the provided claim key is valid and can be claimed into the organization. | [optional] |

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

## `getAdministeredLicensingSubscriptionSubscriptions()`

```php
getAdministeredLicensingSubscriptionSubscriptions($organization_ids, $per_page, $starting_after, $ending_before, $subscription_ids, $statuses, $product_types, $name, $start_date, $end_date): \Meraki\Model\GetAdministeredLicensingSubscriptionSubscriptions200ResponseInner[]
```

List available subscriptions

List available subscriptions

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


$apiInstance = new Meraki\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_ids = array('organization_ids_example'); // string[] | Organizations to get associated subscriptions for
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$subscription_ids = array('subscription_ids_example'); // string[] | List of subscription ids to fetch
$statuses = array('statuses_example'); // string[] | List of statuses that returned subscriptions can have
$product_types = array('product_types_example'); // string[] | List of product types that returned subscriptions need to have entitlements for.
$name = 'name_example'; // string | Search for subscription name
$start_date = new \Meraki\Model\\Meraki\Model\GetAdministeredLicensingSubscriptionSubscriptionsStartDateParameter(); // \Meraki\Model\GetAdministeredLicensingSubscriptionSubscriptionsStartDateParameter | Filter subscriptions by start date, ISO 8601 format. To filter with a range of dates, use 'startDate[<option>]=?' in the request. Accepted options include lt, gt, lte, gte.
$end_date = new \Meraki\Model\\Meraki\Model\GetAdministeredLicensingSubscriptionSubscriptionsStartDateParameter(); // \Meraki\Model\GetAdministeredLicensingSubscriptionSubscriptionsStartDateParameter | Filter subscriptions by end date, ISO 8601 format. To filter with a range of dates, use 'endDate[<option>]=?' in the request. Accepted options include lt, gt, lte, gte.

try {
    $result = $apiInstance->getAdministeredLicensingSubscriptionSubscriptions($organization_ids, $per_page, $starting_after, $ending_before, $subscription_ids, $statuses, $product_types, $name, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getAdministeredLicensingSubscriptionSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_ids** | [**string[]**](../Model/string.md)| Organizations to get associated subscriptions for | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **subscription_ids** | [**string[]**](../Model/string.md)| List of subscription ids to fetch | [optional] |
| **statuses** | [**string[]**](../Model/string.md)| List of statuses that returned subscriptions can have | [optional] |
| **product_types** | [**string[]**](../Model/string.md)| List of product types that returned subscriptions need to have entitlements for. | [optional] |
| **name** | **string**| Search for subscription name | [optional] |
| **start_date** | [**\Meraki\Model\GetAdministeredLicensingSubscriptionSubscriptionsStartDateParameter**](../Model/.md)| Filter subscriptions by start date, ISO 8601 format. To filter with a range of dates, use &#39;startDate[&lt;option&gt;]&#x3D;?&#39; in the request. Accepted options include lt, gt, lte, gte. | [optional] |
| **end_date** | [**\Meraki\Model\GetAdministeredLicensingSubscriptionSubscriptionsStartDateParameter**](../Model/.md)| Filter subscriptions by end date, ISO 8601 format. To filter with a range of dates, use &#39;endDate[&lt;option&gt;]&#x3D;?&#39; in the request. Accepted options include lt, gt, lte, gte. | [optional] |

### Return type

[**\Meraki\Model\GetAdministeredLicensingSubscriptionSubscriptions200ResponseInner[]**](../Model/GetAdministeredLicensingSubscriptionSubscriptions200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdministeredLicensingSubscriptionSubscriptionsComplianceStatuses()`

```php
getAdministeredLicensingSubscriptionSubscriptionsComplianceStatuses($organization_ids, $subscription_ids): \Meraki\Model\GetAdministeredLicensingSubscriptionSubscriptionsComplianceStatuses200ResponseInner[]
```

Get compliance status for requested subscriptions

Get compliance status for requested subscriptions

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


$apiInstance = new Meraki\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_ids = array('organization_ids_example'); // string[] | Organizations to get subscription compliance information for
$subscription_ids = array('subscription_ids_example'); // string[] | Subscription ids

try {
    $result = $apiInstance->getAdministeredLicensingSubscriptionSubscriptionsComplianceStatuses($organization_ids, $subscription_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getAdministeredLicensingSubscriptionSubscriptionsComplianceStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_ids** | [**string[]**](../Model/string.md)| Organizations to get subscription compliance information for | |
| **subscription_ids** | [**string[]**](../Model/string.md)| Subscription ids | [optional] |

### Return type

[**\Meraki\Model\GetAdministeredLicensingSubscriptionSubscriptionsComplianceStatuses200ResponseInner[]**](../Model/GetAdministeredLicensingSubscriptionSubscriptionsComplianceStatuses200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new Meraki\Api\SubscriptionsApi(
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
    echo 'Exception when calling SubscriptionsApi->validateAdministeredLicensingSubscriptionSubscriptionsClaimKey: ', $e->getMessage(), PHP_EOL;
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
