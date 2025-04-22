# Meraki\TargetGroupsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkSmTargetGroup()**](TargetGroupsApi.md#createNetworkSmTargetGroup) | **POST** /networks/{networkId}/sm/targetGroups | Add a target group |
| [**deleteNetworkSmTargetGroup()**](TargetGroupsApi.md#deleteNetworkSmTargetGroup) | **DELETE** /networks/{networkId}/sm/targetGroups/{targetGroupId} | Delete a target group from a network |
| [**getNetworkSmTargetGroup()**](TargetGroupsApi.md#getNetworkSmTargetGroup) | **GET** /networks/{networkId}/sm/targetGroups/{targetGroupId} | Return a target group |
| [**getNetworkSmTargetGroups()**](TargetGroupsApi.md#getNetworkSmTargetGroups) | **GET** /networks/{networkId}/sm/targetGroups | List the target groups in this network |
| [**updateNetworkSmTargetGroup()**](TargetGroupsApi.md#updateNetworkSmTargetGroup) | **PUT** /networks/{networkId}/sm/targetGroups/{targetGroupId} | Update a target group |


## `createNetworkSmTargetGroup()`

```php
createNetworkSmTargetGroup($network_id, $create_network_sm_target_group_request): \Meraki\Model\GetNetworkSmTargetGroups200ResponseInner
```

Add a target group

Add a target group

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


$apiInstance = new Meraki\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_sm_target_group_request = new \Meraki\Model\CreateNetworkSmTargetGroupRequest(); // \Meraki\Model\CreateNetworkSmTargetGroupRequest

try {
    $result = $apiInstance->createNetworkSmTargetGroup($network_id, $create_network_sm_target_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->createNetworkSmTargetGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_sm_target_group_request** | [**\Meraki\Model\CreateNetworkSmTargetGroupRequest**](../Model/CreateNetworkSmTargetGroupRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSmTargetGroups200ResponseInner**](../Model/GetNetworkSmTargetGroups200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkSmTargetGroup()`

```php
deleteNetworkSmTargetGroup($network_id, $target_group_id)
```

Delete a target group from a network

Delete a target group from a network

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


$apiInstance = new Meraki\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$target_group_id = 'target_group_id_example'; // string | Target group ID

try {
    $apiInstance->deleteNetworkSmTargetGroup($network_id, $target_group_id);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->deleteNetworkSmTargetGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **target_group_id** | **string**| Target group ID | |

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

## `getNetworkSmTargetGroup()`

```php
getNetworkSmTargetGroup($network_id, $target_group_id, $with_details): \Meraki\Model\GetNetworkSmTargetGroups200ResponseInner
```

Return a target group

Return a target group

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


$apiInstance = new Meraki\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$target_group_id = 'target_group_id_example'; // string | Target group ID
$with_details = True; // bool | Boolean indicating if the the ids of the devices or users scoped by the target group should be included in the response

try {
    $result = $apiInstance->getNetworkSmTargetGroup($network_id, $target_group_id, $with_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->getNetworkSmTargetGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **target_group_id** | **string**| Target group ID | |
| **with_details** | **bool**| Boolean indicating if the the ids of the devices or users scoped by the target group should be included in the response | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSmTargetGroups200ResponseInner**](../Model/GetNetworkSmTargetGroups200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmTargetGroups()`

```php
getNetworkSmTargetGroups($network_id, $with_details): \Meraki\Model\GetNetworkSmTargetGroups200ResponseInner[]
```

List the target groups in this network

List the target groups in this network

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


$apiInstance = new Meraki\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$with_details = True; // bool | Boolean indicating if the the ids of the devices or users scoped by the target group should be included in the response

try {
    $result = $apiInstance->getNetworkSmTargetGroups($network_id, $with_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->getNetworkSmTargetGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **with_details** | **bool**| Boolean indicating if the the ids of the devices or users scoped by the target group should be included in the response | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSmTargetGroups200ResponseInner[]**](../Model/GetNetworkSmTargetGroups200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSmTargetGroup()`

```php
updateNetworkSmTargetGroup($network_id, $target_group_id, $create_network_sm_target_group_request): \Meraki\Model\GetNetworkSmTargetGroups200ResponseInner
```

Update a target group

Update a target group

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


$apiInstance = new Meraki\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$target_group_id = 'target_group_id_example'; // string | Target group ID
$create_network_sm_target_group_request = new \Meraki\Model\CreateNetworkSmTargetGroupRequest(); // \Meraki\Model\CreateNetworkSmTargetGroupRequest

try {
    $result = $apiInstance->updateNetworkSmTargetGroup($network_id, $target_group_id, $create_network_sm_target_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->updateNetworkSmTargetGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **target_group_id** | **string**| Target group ID | |
| **create_network_sm_target_group_request** | [**\Meraki\Model\CreateNetworkSmTargetGroupRequest**](../Model/CreateNetworkSmTargetGroupRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSmTargetGroups200ResponseInner**](../Model/GetNetworkSmTargetGroups200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
