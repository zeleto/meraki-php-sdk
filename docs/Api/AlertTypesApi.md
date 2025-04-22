# Meraki\AlertTypesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrganizationWebhooksAlertTypes()**](AlertTypesApi.md#getOrganizationWebhooksAlertTypes) | **GET** /organizations/{organizationId}/webhooks/alertTypes | Return a list of alert types to be used with managing webhook alerts |


## `getOrganizationWebhooksAlertTypes()`

```php
getOrganizationWebhooksAlertTypes($organization_id, $product_type): \Meraki\Model\GetOrganizationWebhooksAlertTypes200Response
```

Return a list of alert types to be used with managing webhook alerts

Return a list of alert types to be used with managing webhook alerts

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


$apiInstance = new Meraki\Api\AlertTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$product_type = 'product_type_example'; // string | Filter sample alerts to a specific product type

try {
    $result = $apiInstance->getOrganizationWebhooksAlertTypes($organization_id, $product_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertTypesApi->getOrganizationWebhooksAlertTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **product_type** | **string**| Filter sample alerts to a specific product type | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWebhooksAlertTypes200Response**](../Model/GetOrganizationWebhooksAlertTypes200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
