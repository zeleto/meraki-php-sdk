# Meraki\ComplianceApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAdministeredLicensingSubscriptionSubscriptionsComplianceStatuses()**](ComplianceApi.md#getAdministeredLicensingSubscriptionSubscriptionsComplianceStatuses) | **GET** /administered/licensing/subscription/subscriptions/compliance/statuses | Get compliance status for requested subscriptions |


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


$apiInstance = new Meraki\Api\ComplianceApi(
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
    echo 'Exception when calling ComplianceApi->getAdministeredLicensingSubscriptionSubscriptionsComplianceStatuses: ', $e->getMessage(), PHP_EOL;
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
