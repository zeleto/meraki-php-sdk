# Meraki\WebhooksApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkWebhooksHttpServer()**](WebhooksApi.md#createNetworkWebhooksHttpServer) | **POST** /networks/{networkId}/webhooks/httpServers | Add an HTTP server to a network |
| [**createNetworkWebhooksPayloadTemplate()**](WebhooksApi.md#createNetworkWebhooksPayloadTemplate) | **POST** /networks/{networkId}/webhooks/payloadTemplates | Create a webhook payload template for a network |
| [**createNetworkWebhooksWebhookTest()**](WebhooksApi.md#createNetworkWebhooksWebhookTest) | **POST** /networks/{networkId}/webhooks/webhookTests | Send a test webhook for a network |
| [**deleteNetworkWebhooksHttpServer()**](WebhooksApi.md#deleteNetworkWebhooksHttpServer) | **DELETE** /networks/{networkId}/webhooks/httpServers/{httpServerId} | Delete an HTTP server from a network |
| [**deleteNetworkWebhooksPayloadTemplate()**](WebhooksApi.md#deleteNetworkWebhooksPayloadTemplate) | **DELETE** /networks/{networkId}/webhooks/payloadTemplates/{payloadTemplateId} | Destroy a webhook payload template for a network |
| [**getNetworkWebhooksHttpServer()**](WebhooksApi.md#getNetworkWebhooksHttpServer) | **GET** /networks/{networkId}/webhooks/httpServers/{httpServerId} | Return an HTTP server for a network |
| [**getNetworkWebhooksHttpServers()**](WebhooksApi.md#getNetworkWebhooksHttpServers) | **GET** /networks/{networkId}/webhooks/httpServers | List the HTTP servers for a network |
| [**getNetworkWebhooksPayloadTemplate()**](WebhooksApi.md#getNetworkWebhooksPayloadTemplate) | **GET** /networks/{networkId}/webhooks/payloadTemplates/{payloadTemplateId} | Get the webhook payload template for a network |
| [**getNetworkWebhooksPayloadTemplates()**](WebhooksApi.md#getNetworkWebhooksPayloadTemplates) | **GET** /networks/{networkId}/webhooks/payloadTemplates | List the webhook payload templates for a network |
| [**getNetworkWebhooksWebhookTest()**](WebhooksApi.md#getNetworkWebhooksWebhookTest) | **GET** /networks/{networkId}/webhooks/webhookTests/{webhookTestId} | Return the status of a webhook test for a network |
| [**getOrganizationWebhooksAlertTypes()**](WebhooksApi.md#getOrganizationWebhooksAlertTypes) | **GET** /organizations/{organizationId}/webhooks/alertTypes | Return a list of alert types to be used with managing webhook alerts |
| [**getOrganizationWebhooksCallbacksStatus()**](WebhooksApi.md#getOrganizationWebhooksCallbacksStatus) | **GET** /organizations/{organizationId}/webhooks/callbacks/statuses/{callbackId} | Return the status of an API callback |
| [**getOrganizationWebhooksLogs()**](WebhooksApi.md#getOrganizationWebhooksLogs) | **GET** /organizations/{organizationId}/webhooks/logs | Return the log of webhook POSTs sent |
| [**updateNetworkWebhooksHttpServer()**](WebhooksApi.md#updateNetworkWebhooksHttpServer) | **PUT** /networks/{networkId}/webhooks/httpServers/{httpServerId} | Update an HTTP server |
| [**updateNetworkWebhooksPayloadTemplate()**](WebhooksApi.md#updateNetworkWebhooksPayloadTemplate) | **PUT** /networks/{networkId}/webhooks/payloadTemplates/{payloadTemplateId} | Update a webhook payload template for a network |


## `createNetworkWebhooksHttpServer()`

```php
createNetworkWebhooksHttpServer($network_id, $create_network_webhooks_http_server_request): \Meraki\Model\GetNetworkWebhooksHttpServers200ResponseInner
```

Add an HTTP server to a network

Add an HTTP server to a network

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


$apiInstance = new Meraki\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_webhooks_http_server_request = new \Meraki\Model\CreateNetworkWebhooksHttpServerRequest(); // \Meraki\Model\CreateNetworkWebhooksHttpServerRequest

try {
    $result = $apiInstance->createNetworkWebhooksHttpServer($network_id, $create_network_webhooks_http_server_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->createNetworkWebhooksHttpServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_webhooks_http_server_request** | [**\Meraki\Model\CreateNetworkWebhooksHttpServerRequest**](../Model/CreateNetworkWebhooksHttpServerRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkWebhooksHttpServers200ResponseInner**](../Model/GetNetworkWebhooksHttpServers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new Meraki\Api\WebhooksApi(
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
    echo 'Exception when calling WebhooksApi->createNetworkWebhooksPayloadTemplate: ', $e->getMessage(), PHP_EOL;
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

## `createNetworkWebhooksWebhookTest()`

```php
createNetworkWebhooksWebhookTest($network_id, $create_network_webhooks_webhook_test_request): \Meraki\Model\CreateNetworkWebhooksWebhookTest201Response
```

Send a test webhook for a network

Send a test webhook for a network

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


$apiInstance = new Meraki\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_webhooks_webhook_test_request = new \Meraki\Model\CreateNetworkWebhooksWebhookTestRequest(); // \Meraki\Model\CreateNetworkWebhooksWebhookTestRequest

try {
    $result = $apiInstance->createNetworkWebhooksWebhookTest($network_id, $create_network_webhooks_webhook_test_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->createNetworkWebhooksWebhookTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_webhooks_webhook_test_request** | [**\Meraki\Model\CreateNetworkWebhooksWebhookTestRequest**](../Model/CreateNetworkWebhooksWebhookTestRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateNetworkWebhooksWebhookTest201Response**](../Model/CreateNetworkWebhooksWebhookTest201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkWebhooksHttpServer()`

```php
deleteNetworkWebhooksHttpServer($network_id, $http_server_id)
```

Delete an HTTP server from a network

Delete an HTTP server from a network

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


$apiInstance = new Meraki\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$http_server_id = 'http_server_id_example'; // string | Http server ID

try {
    $apiInstance->deleteNetworkWebhooksHttpServer($network_id, $http_server_id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteNetworkWebhooksHttpServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **http_server_id** | **string**| Http server ID | |

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


$apiInstance = new Meraki\Api\WebhooksApi(
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
    echo 'Exception when calling WebhooksApi->deleteNetworkWebhooksPayloadTemplate: ', $e->getMessage(), PHP_EOL;
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

## `getNetworkWebhooksHttpServer()`

```php
getNetworkWebhooksHttpServer($network_id, $http_server_id): \Meraki\Model\GetNetworkWebhooksHttpServers200ResponseInner
```

Return an HTTP server for a network

Return an HTTP server for a network

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


$apiInstance = new Meraki\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$http_server_id = 'http_server_id_example'; // string | Http server ID

try {
    $result = $apiInstance->getNetworkWebhooksHttpServer($network_id, $http_server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getNetworkWebhooksHttpServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **http_server_id** | **string**| Http server ID | |

### Return type

[**\Meraki\Model\GetNetworkWebhooksHttpServers200ResponseInner**](../Model/GetNetworkWebhooksHttpServers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWebhooksHttpServers()`

```php
getNetworkWebhooksHttpServers($network_id): \Meraki\Model\GetNetworkWebhooksHttpServers200ResponseInner[]
```

List the HTTP servers for a network

List the HTTP servers for a network

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


$apiInstance = new Meraki\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkWebhooksHttpServers($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getNetworkWebhooksHttpServers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkWebhooksHttpServers200ResponseInner[]**](../Model/GetNetworkWebhooksHttpServers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

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


$apiInstance = new Meraki\Api\WebhooksApi(
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
    echo 'Exception when calling WebhooksApi->getNetworkWebhooksPayloadTemplate: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\WebhooksApi(
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
    echo 'Exception when calling WebhooksApi->getNetworkWebhooksPayloadTemplates: ', $e->getMessage(), PHP_EOL;
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

## `getNetworkWebhooksWebhookTest()`

```php
getNetworkWebhooksWebhookTest($network_id, $webhook_test_id): \Meraki\Model\CreateNetworkWebhooksWebhookTest201Response
```

Return the status of a webhook test for a network

Return the status of a webhook test for a network

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


$apiInstance = new Meraki\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$webhook_test_id = 'webhook_test_id_example'; // string | Webhook test ID

try {
    $result = $apiInstance->getNetworkWebhooksWebhookTest($network_id, $webhook_test_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getNetworkWebhooksWebhookTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **webhook_test_id** | **string**| Webhook test ID | |

### Return type

[**\Meraki\Model\CreateNetworkWebhooksWebhookTest201Response**](../Model/CreateNetworkWebhooksWebhookTest201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new Meraki\Api\WebhooksApi(
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
    echo 'Exception when calling WebhooksApi->getOrganizationWebhooksAlertTypes: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\WebhooksApi(
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
    echo 'Exception when calling WebhooksApi->getOrganizationWebhooksCallbacksStatus: ', $e->getMessage(), PHP_EOL;
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

## `getOrganizationWebhooksLogs()`

```php
getOrganizationWebhooksLogs($organization_id, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before, $url): \Meraki\Model\GetOrganizationWebhooksLogs200ResponseInner[]
```

Return the log of webhook POSTs sent

Return the log of webhook POSTs sent

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


$apiInstance = new Meraki\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 90 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 50.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$url = 'url_example'; // string | The URL the webhook was sent to

try {
    $result = $apiInstance->getOrganizationWebhooksLogs($organization_id, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getOrganizationWebhooksLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 90 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 50. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **url** | **string**| The URL the webhook was sent to | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWebhooksLogs200ResponseInner[]**](../Model/GetOrganizationWebhooksLogs200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWebhooksHttpServer()`

```php
updateNetworkWebhooksHttpServer($network_id, $http_server_id, $update_network_webhooks_http_server_request): \Meraki\Model\GetNetworkWebhooksHttpServers200ResponseInner
```

Update an HTTP server

Update an HTTP server. To change a URL, create a new HTTP server.

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


$apiInstance = new Meraki\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$http_server_id = 'http_server_id_example'; // string | Http server ID
$update_network_webhooks_http_server_request = new \Meraki\Model\UpdateNetworkWebhooksHttpServerRequest(); // \Meraki\Model\UpdateNetworkWebhooksHttpServerRequest

try {
    $result = $apiInstance->updateNetworkWebhooksHttpServer($network_id, $http_server_id, $update_network_webhooks_http_server_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->updateNetworkWebhooksHttpServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **http_server_id** | **string**| Http server ID | |
| **update_network_webhooks_http_server_request** | [**\Meraki\Model\UpdateNetworkWebhooksHttpServerRequest**](../Model/UpdateNetworkWebhooksHttpServerRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWebhooksHttpServers200ResponseInner**](../Model/GetNetworkWebhooksHttpServers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
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


$apiInstance = new Meraki\Api\WebhooksApi(
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
    echo 'Exception when calling WebhooksApi->updateNetworkWebhooksPayloadTemplate: ', $e->getMessage(), PHP_EOL;
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
