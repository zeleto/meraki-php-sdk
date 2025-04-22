# Meraki\BypassActivationLockAttemptsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkSmBypassActivationLockAttempt()**](BypassActivationLockAttemptsApi.md#createNetworkSmBypassActivationLockAttempt) | **POST** /networks/{networkId}/sm/bypassActivationLockAttempts | Bypass activation lock attempt |
| [**getNetworkSmBypassActivationLockAttempt()**](BypassActivationLockAttemptsApi.md#getNetworkSmBypassActivationLockAttempt) | **GET** /networks/{networkId}/sm/bypassActivationLockAttempts/{attemptId} | Bypass activation lock attempt status |


## `createNetworkSmBypassActivationLockAttempt()`

```php
createNetworkSmBypassActivationLockAttempt($network_id, $create_network_sm_bypass_activation_lock_attempt_request): object
```

Bypass activation lock attempt

Bypass activation lock attempt

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


$apiInstance = new Meraki\Api\BypassActivationLockAttemptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_sm_bypass_activation_lock_attempt_request = new \Meraki\Model\CreateNetworkSmBypassActivationLockAttemptRequest(); // \Meraki\Model\CreateNetworkSmBypassActivationLockAttemptRequest

try {
    $result = $apiInstance->createNetworkSmBypassActivationLockAttempt($network_id, $create_network_sm_bypass_activation_lock_attempt_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BypassActivationLockAttemptsApi->createNetworkSmBypassActivationLockAttempt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_sm_bypass_activation_lock_attempt_request** | [**\Meraki\Model\CreateNetworkSmBypassActivationLockAttemptRequest**](../Model/CreateNetworkSmBypassActivationLockAttemptRequest.md)|  | |

### Return type

**object**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmBypassActivationLockAttempt()`

```php
getNetworkSmBypassActivationLockAttempt($network_id, $attempt_id): object
```

Bypass activation lock attempt status

Bypass activation lock attempt status

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


$apiInstance = new Meraki\Api\BypassActivationLockAttemptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$attempt_id = 'attempt_id_example'; // string | Attempt ID

try {
    $result = $apiInstance->getNetworkSmBypassActivationLockAttempt($network_id, $attempt_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BypassActivationLockAttemptsApi->getNetworkSmBypassActivationLockAttempt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **attempt_id** | **string**| Attempt ID | |

### Return type

**object**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
