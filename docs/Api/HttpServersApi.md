# Meraki\HttpServersApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkWebhooksHttpServer()**](HttpServersApi.md#createNetworkWebhooksHttpServer) | **POST** /networks/{networkId}/webhooks/httpServers | Add an HTTP server to a network |
| [**deleteNetworkWebhooksHttpServer()**](HttpServersApi.md#deleteNetworkWebhooksHttpServer) | **DELETE** /networks/{networkId}/webhooks/httpServers/{httpServerId} | Delete an HTTP server from a network |
| [**getNetworkWebhooksHttpServer()**](HttpServersApi.md#getNetworkWebhooksHttpServer) | **GET** /networks/{networkId}/webhooks/httpServers/{httpServerId} | Return an HTTP server for a network |
| [**getNetworkWebhooksHttpServers()**](HttpServersApi.md#getNetworkWebhooksHttpServers) | **GET** /networks/{networkId}/webhooks/httpServers | List the HTTP servers for a network |
| [**updateNetworkWebhooksHttpServer()**](HttpServersApi.md#updateNetworkWebhooksHttpServer) | **PUT** /networks/{networkId}/webhooks/httpServers/{httpServerId} | Update an HTTP server |


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


$apiInstance = new Meraki\Api\HttpServersApi(
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
    echo 'Exception when calling HttpServersApi->createNetworkWebhooksHttpServer: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\HttpServersApi(
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
    echo 'Exception when calling HttpServersApi->deleteNetworkWebhooksHttpServer: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\HttpServersApi(
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
    echo 'Exception when calling HttpServersApi->getNetworkWebhooksHttpServer: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\HttpServersApi(
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
    echo 'Exception when calling HttpServersApi->getNetworkWebhooksHttpServers: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\HttpServersApi(
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
    echo 'Exception when calling HttpServersApi->updateNetworkWebhooksHttpServer: ', $e->getMessage(), PHP_EOL;
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
