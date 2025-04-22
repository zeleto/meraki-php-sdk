# Meraki\PayloadTemplatesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkWebhooksPayloadTemplate()**](PayloadTemplatesApi.md#createNetworkWebhooksPayloadTemplate) | **POST** /networks/{networkId}/webhooks/payloadTemplates | Create a webhook payload template for a network |
| [**deleteNetworkWebhooksPayloadTemplate()**](PayloadTemplatesApi.md#deleteNetworkWebhooksPayloadTemplate) | **DELETE** /networks/{networkId}/webhooks/payloadTemplates/{payloadTemplateId} | Destroy a webhook payload template for a network |
| [**getNetworkWebhooksPayloadTemplate()**](PayloadTemplatesApi.md#getNetworkWebhooksPayloadTemplate) | **GET** /networks/{networkId}/webhooks/payloadTemplates/{payloadTemplateId} | Get the webhook payload template for a network |
| [**getNetworkWebhooksPayloadTemplates()**](PayloadTemplatesApi.md#getNetworkWebhooksPayloadTemplates) | **GET** /networks/{networkId}/webhooks/payloadTemplates | List the webhook payload templates for a network |
| [**updateNetworkWebhooksPayloadTemplate()**](PayloadTemplatesApi.md#updateNetworkWebhooksPayloadTemplate) | **PUT** /networks/{networkId}/webhooks/payloadTemplates/{payloadTemplateId} | Update a webhook payload template for a network |


## `createNetworkWebhooksPayloadTemplate()`

```php
createNetworkWebhooksPayloadTemplate($network_id, $create_network_webhooks_payload_template_request): \Meraki\Model\GetNetworkWebhooksPayloadTemplates200ResponseInner
```

Create a webhook payload template for a network

Create a webhook payload template for a network

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


$apiInstance = new Meraki\Api\PayloadTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_webhooks_payload_template_request = new \Meraki\Model\CreateNetworkWebhooksPayloadTemplateRequest(); // \Meraki\Model\CreateNetworkWebhooksPayloadTemplateRequest

try {
    $result = $apiInstance->createNetworkWebhooksPayloadTemplate($network_id, $create_network_webhooks_payload_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayloadTemplatesApi->createNetworkWebhooksPayloadTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_webhooks_payload_template_request** | [**\Meraki\Model\CreateNetworkWebhooksPayloadTemplateRequest**](../Model/CreateNetworkWebhooksPayloadTemplateRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkWebhooksPayloadTemplates200ResponseInner**](../Model/GetNetworkWebhooksPayloadTemplates200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkWebhooksPayloadTemplate()`

```php
deleteNetworkWebhooksPayloadTemplate($network_id, $payload_template_id)
```

Destroy a webhook payload template for a network

Destroy a webhook payload template for a network. Does not work for included templates ('wpt_00001', 'wpt_00002', 'wpt_00003', 'wpt_00004', 'wpt_00005' or 'wpt_00006')

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


$apiInstance = new Meraki\Api\PayloadTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$payload_template_id = 'payload_template_id_example'; // string | Payload template ID

try {
    $apiInstance->deleteNetworkWebhooksPayloadTemplate($network_id, $payload_template_id);
} catch (Exception $e) {
    echo 'Exception when calling PayloadTemplatesApi->deleteNetworkWebhooksPayloadTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **payload_template_id** | **string**| Payload template ID | |

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

## `getNetworkWebhooksPayloadTemplate()`

```php
getNetworkWebhooksPayloadTemplate($network_id, $payload_template_id): \Meraki\Model\GetNetworkWebhooksPayloadTemplates200ResponseInner
```

Get the webhook payload template for a network

Get the webhook payload template for a network

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


$apiInstance = new Meraki\Api\PayloadTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$payload_template_id = 'payload_template_id_example'; // string | Payload template ID

try {
    $result = $apiInstance->getNetworkWebhooksPayloadTemplate($network_id, $payload_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayloadTemplatesApi->getNetworkWebhooksPayloadTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **payload_template_id** | **string**| Payload template ID | |

### Return type

[**\Meraki\Model\GetNetworkWebhooksPayloadTemplates200ResponseInner**](../Model/GetNetworkWebhooksPayloadTemplates200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWebhooksPayloadTemplates()`

```php
getNetworkWebhooksPayloadTemplates($network_id): \Meraki\Model\GetNetworkWebhooksPayloadTemplates200ResponseInner[]
```

List the webhook payload templates for a network

List the webhook payload templates for a network

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


$apiInstance = new Meraki\Api\PayloadTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkWebhooksPayloadTemplates($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayloadTemplatesApi->getNetworkWebhooksPayloadTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkWebhooksPayloadTemplates200ResponseInner[]**](../Model/GetNetworkWebhooksPayloadTemplates200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWebhooksPayloadTemplate()`

```php
updateNetworkWebhooksPayloadTemplate($network_id, $payload_template_id, $update_network_webhooks_payload_template_request): \Meraki\Model\GetNetworkWebhooksPayloadTemplates200ResponseInner
```

Update a webhook payload template for a network

Update a webhook payload template for a network

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


$apiInstance = new Meraki\Api\PayloadTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$payload_template_id = 'payload_template_id_example'; // string | Payload template ID
$update_network_webhooks_payload_template_request = new \Meraki\Model\UpdateNetworkWebhooksPayloadTemplateRequest(); // \Meraki\Model\UpdateNetworkWebhooksPayloadTemplateRequest

try {
    $result = $apiInstance->updateNetworkWebhooksPayloadTemplate($network_id, $payload_template_id, $update_network_webhooks_payload_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayloadTemplatesApi->updateNetworkWebhooksPayloadTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **payload_template_id** | **string**| Payload template ID | |
| **update_network_webhooks_payload_template_request** | [**\Meraki\Model\UpdateNetworkWebhooksPayloadTemplateRequest**](../Model/UpdateNetworkWebhooksPayloadTemplateRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWebhooksPayloadTemplates200ResponseInner**](../Model/GetNetworkWebhooksPayloadTemplates200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
