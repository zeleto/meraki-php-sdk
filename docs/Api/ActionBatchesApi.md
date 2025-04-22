# Meraki\ActionBatchesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrganizationActionBatch()**](ActionBatchesApi.md#createOrganizationActionBatch) | **POST** /organizations/{organizationId}/actionBatches | Create an action batch |
| [**deleteOrganizationActionBatch()**](ActionBatchesApi.md#deleteOrganizationActionBatch) | **DELETE** /organizations/{organizationId}/actionBatches/{actionBatchId} | Delete an action batch |
| [**getOrganizationActionBatch()**](ActionBatchesApi.md#getOrganizationActionBatch) | **GET** /organizations/{organizationId}/actionBatches/{actionBatchId} | Return an action batch |
| [**getOrganizationActionBatches()**](ActionBatchesApi.md#getOrganizationActionBatches) | **GET** /organizations/{organizationId}/actionBatches | Return the list of action batches in the organization |
| [**updateOrganizationActionBatch()**](ActionBatchesApi.md#updateOrganizationActionBatch) | **PUT** /organizations/{organizationId}/actionBatches/{actionBatchId} | Update an action batch |


## `createOrganizationActionBatch()`

```php
createOrganizationActionBatch($organization_id, $create_organization_action_batch_request): \Meraki\Model\CreateOrganizationActionBatch201Response
```

Create an action batch

Create an action batch

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


$apiInstance = new Meraki\Api\ActionBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_action_batch_request = new \Meraki\Model\CreateOrganizationActionBatchRequest(); // \Meraki\Model\CreateOrganizationActionBatchRequest

try {
    $result = $apiInstance->createOrganizationActionBatch($organization_id, $create_organization_action_batch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionBatchesApi->createOrganizationActionBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_action_batch_request** | [**\Meraki\Model\CreateOrganizationActionBatchRequest**](../Model/CreateOrganizationActionBatchRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateOrganizationActionBatch201Response**](../Model/CreateOrganizationActionBatch201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrganizationActionBatch()`

```php
deleteOrganizationActionBatch($organization_id, $action_batch_id)
```

Delete an action batch

Delete an action batch

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


$apiInstance = new Meraki\Api\ActionBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$action_batch_id = 'action_batch_id_example'; // string | Action batch ID

try {
    $apiInstance->deleteOrganizationActionBatch($organization_id, $action_batch_id);
} catch (Exception $e) {
    echo 'Exception when calling ActionBatchesApi->deleteOrganizationActionBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **action_batch_id** | **string**| Action batch ID | |

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

## `getOrganizationActionBatch()`

```php
getOrganizationActionBatch($organization_id, $action_batch_id): \Meraki\Model\CreateOrganizationActionBatch201Response
```

Return an action batch

Return an action batch

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


$apiInstance = new Meraki\Api\ActionBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$action_batch_id = 'action_batch_id_example'; // string | Action batch ID

try {
    $result = $apiInstance->getOrganizationActionBatch($organization_id, $action_batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionBatchesApi->getOrganizationActionBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **action_batch_id** | **string**| Action batch ID | |

### Return type

[**\Meraki\Model\CreateOrganizationActionBatch201Response**](../Model/CreateOrganizationActionBatch201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationActionBatches()`

```php
getOrganizationActionBatches($organization_id, $status): \Meraki\Model\GetOrganizationActionBatches200ResponseInner[]
```

Return the list of action batches in the organization

Return the list of action batches in the organization

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


$apiInstance = new Meraki\Api\ActionBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$status = 'status_example'; // string | Filter batches by status. Valid types are pending, completed, and failed.

try {
    $result = $apiInstance->getOrganizationActionBatches($organization_id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionBatchesApi->getOrganizationActionBatches: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **status** | **string**| Filter batches by status. Valid types are pending, completed, and failed. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationActionBatches200ResponseInner[]**](../Model/GetOrganizationActionBatches200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationActionBatch()`

```php
updateOrganizationActionBatch($organization_id, $action_batch_id, $update_organization_action_batch_request): \Meraki\Model\GetOrganizationActionBatches200ResponseInner
```

Update an action batch

Update an action batch

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


$apiInstance = new Meraki\Api\ActionBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$action_batch_id = 'action_batch_id_example'; // string | Action batch ID
$update_organization_action_batch_request = new \Meraki\Model\UpdateOrganizationActionBatchRequest(); // \Meraki\Model\UpdateOrganizationActionBatchRequest

try {
    $result = $apiInstance->updateOrganizationActionBatch($organization_id, $action_batch_id, $update_organization_action_batch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionBatchesApi->updateOrganizationActionBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **action_batch_id** | **string**| Action batch ID | |
| **update_organization_action_batch_request** | [**\Meraki\Model\UpdateOrganizationActionBatchRequest**](../Model/UpdateOrganizationActionBatchRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationActionBatches200ResponseInner**](../Model/GetOrganizationActionBatches200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
