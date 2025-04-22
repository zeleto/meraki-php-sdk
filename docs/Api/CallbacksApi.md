# Meraki\CallbacksApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrganizationWebhooksCallbacksStatus()**](CallbacksApi.md#getOrganizationWebhooksCallbacksStatus) | **GET** /organizations/{organizationId}/webhooks/callbacks/statuses/{callbackId} | Return the status of an API callback |


## `getOrganizationWebhooksCallbacksStatus()`

```php
getOrganizationWebhooksCallbacksStatus($organization_id, $callback_id): \Meraki\Model\GetOrganizationWebhooksCallbacksStatus200Response
```

Return the status of an API callback

Return the status of an API callback

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


$apiInstance = new Meraki\Api\CallbacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$callback_id = 'callback_id_example'; // string | Callback ID

try {
    $result = $apiInstance->getOrganizationWebhooksCallbacksStatus($organization_id, $callback_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallbacksApi->getOrganizationWebhooksCallbacksStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **callback_id** | **string**| Callback ID | |

### Return type

[**\Meraki\Model\GetOrganizationWebhooksCallbacksStatus200Response**](../Model/GetOrganizationWebhooksCallbacksStatus200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
