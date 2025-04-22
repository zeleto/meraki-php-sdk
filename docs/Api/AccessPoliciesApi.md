# Meraki\AccessPoliciesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkSwitchAccessPolicy()**](AccessPoliciesApi.md#createNetworkSwitchAccessPolicy) | **POST** /networks/{networkId}/switch/accessPolicies | Create an access policy for a switch network |
| [**deleteNetworkSwitchAccessPolicy()**](AccessPoliciesApi.md#deleteNetworkSwitchAccessPolicy) | **DELETE** /networks/{networkId}/switch/accessPolicies/{accessPolicyNumber} | Delete an access policy for a switch network |
| [**getNetworkSwitchAccessPolicies()**](AccessPoliciesApi.md#getNetworkSwitchAccessPolicies) | **GET** /networks/{networkId}/switch/accessPolicies | List the access policies for a switch network |
| [**getNetworkSwitchAccessPolicy()**](AccessPoliciesApi.md#getNetworkSwitchAccessPolicy) | **GET** /networks/{networkId}/switch/accessPolicies/{accessPolicyNumber} | Return a specific access policy for a switch network |
| [**updateNetworkSwitchAccessPolicy()**](AccessPoliciesApi.md#updateNetworkSwitchAccessPolicy) | **PUT** /networks/{networkId}/switch/accessPolicies/{accessPolicyNumber} | Update an access policy for a switch network |


## `createNetworkSwitchAccessPolicy()`

```php
createNetworkSwitchAccessPolicy($network_id, $create_network_switch_access_policy_request): \Meraki\Model\GetNetworkSwitchAccessPolicies200ResponseInner
```

Create an access policy for a switch network

Create an access policy for a switch network. If you would like to enable Meraki Authentication, set radiusServers to empty array.

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


$apiInstance = new Meraki\Api\AccessPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_switch_access_policy_request = new \Meraki\Model\CreateNetworkSwitchAccessPolicyRequest(); // \Meraki\Model\CreateNetworkSwitchAccessPolicyRequest

try {
    $result = $apiInstance->createNetworkSwitchAccessPolicy($network_id, $create_network_switch_access_policy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPoliciesApi->createNetworkSwitchAccessPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_switch_access_policy_request** | [**\Meraki\Model\CreateNetworkSwitchAccessPolicyRequest**](../Model/CreateNetworkSwitchAccessPolicyRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkSwitchAccessPolicies200ResponseInner**](../Model/GetNetworkSwitchAccessPolicies200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkSwitchAccessPolicy()`

```php
deleteNetworkSwitchAccessPolicy($network_id, $access_policy_number)
```

Delete an access policy for a switch network

Delete an access policy for a switch network

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


$apiInstance = new Meraki\Api\AccessPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$access_policy_number = 'access_policy_number_example'; // string | Access policy number

try {
    $apiInstance->deleteNetworkSwitchAccessPolicy($network_id, $access_policy_number);
} catch (Exception $e) {
    echo 'Exception when calling AccessPoliciesApi->deleteNetworkSwitchAccessPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **access_policy_number** | **string**| Access policy number | |

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

## `getNetworkSwitchAccessPolicies()`

```php
getNetworkSwitchAccessPolicies($network_id): \Meraki\Model\GetNetworkSwitchAccessPolicies200ResponseInner[]
```

List the access policies for a switch network

List the access policies for a switch network. Only returns access policies with 'my RADIUS server' as authentication method

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


$apiInstance = new Meraki\Api\AccessPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSwitchAccessPolicies($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPoliciesApi->getNetworkSwitchAccessPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchAccessPolicies200ResponseInner[]**](../Model/GetNetworkSwitchAccessPolicies200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchAccessPolicy()`

```php
getNetworkSwitchAccessPolicy($network_id, $access_policy_number): \Meraki\Model\GetNetworkSwitchAccessPolicies200ResponseInner
```

Return a specific access policy for a switch network

Return a specific access policy for a switch network

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


$apiInstance = new Meraki\Api\AccessPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$access_policy_number = 'access_policy_number_example'; // string | Access policy number

try {
    $result = $apiInstance->getNetworkSwitchAccessPolicy($network_id, $access_policy_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPoliciesApi->getNetworkSwitchAccessPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **access_policy_number** | **string**| Access policy number | |

### Return type

[**\Meraki\Model\GetNetworkSwitchAccessPolicies200ResponseInner**](../Model/GetNetworkSwitchAccessPolicies200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchAccessPolicy()`

```php
updateNetworkSwitchAccessPolicy($network_id, $access_policy_number, $update_network_switch_access_policy_request): \Meraki\Model\GetNetworkSwitchAccessPolicies200ResponseInner
```

Update an access policy for a switch network

Update an access policy for a switch network. If you would like to enable Meraki Authentication, set radiusServers to empty array.

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


$apiInstance = new Meraki\Api\AccessPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$access_policy_number = 'access_policy_number_example'; // string | Access policy number
$update_network_switch_access_policy_request = new \Meraki\Model\UpdateNetworkSwitchAccessPolicyRequest(); // \Meraki\Model\UpdateNetworkSwitchAccessPolicyRequest

try {
    $result = $apiInstance->updateNetworkSwitchAccessPolicy($network_id, $access_policy_number, $update_network_switch_access_policy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPoliciesApi->updateNetworkSwitchAccessPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **access_policy_number** | **string**| Access policy number | |
| **update_network_switch_access_policy_request** | [**\Meraki\Model\UpdateNetworkSwitchAccessPolicyRequest**](../Model/UpdateNetworkSwitchAccessPolicyRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchAccessPolicies200ResponseInner**](../Model/GetNetworkSwitchAccessPolicies200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
