# Meraki\QosRulesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkSwitchQosRule()**](QosRulesApi.md#createNetworkSwitchQosRule) | **POST** /networks/{networkId}/switch/qosRules | Add a quality of service rule |
| [**deleteNetworkSwitchQosRule()**](QosRulesApi.md#deleteNetworkSwitchQosRule) | **DELETE** /networks/{networkId}/switch/qosRules/{qosRuleId} | Delete a quality of service rule |
| [**getNetworkSwitchQosRule()**](QosRulesApi.md#getNetworkSwitchQosRule) | **GET** /networks/{networkId}/switch/qosRules/{qosRuleId} | Return a quality of service rule |
| [**getNetworkSwitchQosRules()**](QosRulesApi.md#getNetworkSwitchQosRules) | **GET** /networks/{networkId}/switch/qosRules | List quality of service rules |
| [**getNetworkSwitchQosRulesOrder()**](QosRulesApi.md#getNetworkSwitchQosRulesOrder) | **GET** /networks/{networkId}/switch/qosRules/order | Return the quality of service rule IDs by order in which they will be processed by the switch |
| [**updateNetworkSwitchQosRule()**](QosRulesApi.md#updateNetworkSwitchQosRule) | **PUT** /networks/{networkId}/switch/qosRules/{qosRuleId} | Update a quality of service rule |
| [**updateNetworkSwitchQosRulesOrder()**](QosRulesApi.md#updateNetworkSwitchQosRulesOrder) | **PUT** /networks/{networkId}/switch/qosRules/order | Update the order in which the rules should be processed by the switch |


## `createNetworkSwitchQosRule()`

```php
createNetworkSwitchQosRule($network_id, $create_network_switch_qos_rule_request): \Meraki\Model\GetNetworkSwitchQosRules200ResponseInner
```

Add a quality of service rule

Add a quality of service rule

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


$apiInstance = new Meraki\Api\QosRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_switch_qos_rule_request = new \Meraki\Model\CreateNetworkSwitchQosRuleRequest(); // \Meraki\Model\CreateNetworkSwitchQosRuleRequest

try {
    $result = $apiInstance->createNetworkSwitchQosRule($network_id, $create_network_switch_qos_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QosRulesApi->createNetworkSwitchQosRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_switch_qos_rule_request** | [**\Meraki\Model\CreateNetworkSwitchQosRuleRequest**](../Model/CreateNetworkSwitchQosRuleRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkSwitchQosRules200ResponseInner**](../Model/GetNetworkSwitchQosRules200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkSwitchQosRule()`

```php
deleteNetworkSwitchQosRule($network_id, $qos_rule_id)
```

Delete a quality of service rule

Delete a quality of service rule

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


$apiInstance = new Meraki\Api\QosRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$qos_rule_id = 'qos_rule_id_example'; // string | Qos rule ID

try {
    $apiInstance->deleteNetworkSwitchQosRule($network_id, $qos_rule_id);
} catch (Exception $e) {
    echo 'Exception when calling QosRulesApi->deleteNetworkSwitchQosRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **qos_rule_id** | **string**| Qos rule ID | |

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

## `getNetworkSwitchQosRule()`

```php
getNetworkSwitchQosRule($network_id, $qos_rule_id): \Meraki\Model\GetNetworkSwitchQosRules200ResponseInner
```

Return a quality of service rule

Return a quality of service rule

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


$apiInstance = new Meraki\Api\QosRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$qos_rule_id = 'qos_rule_id_example'; // string | Qos rule ID

try {
    $result = $apiInstance->getNetworkSwitchQosRule($network_id, $qos_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QosRulesApi->getNetworkSwitchQosRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **qos_rule_id** | **string**| Qos rule ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchQosRules200ResponseInner**](../Model/GetNetworkSwitchQosRules200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchQosRules()`

```php
getNetworkSwitchQosRules($network_id): \Meraki\Model\GetNetworkSwitchQosRules200ResponseInner[]
```

List quality of service rules

List quality of service rules

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


$apiInstance = new Meraki\Api\QosRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSwitchQosRules($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QosRulesApi->getNetworkSwitchQosRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchQosRules200ResponseInner[]**](../Model/GetNetworkSwitchQosRules200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchQosRulesOrder()`

```php
getNetworkSwitchQosRulesOrder($network_id): \Meraki\Model\GetNetworkSwitchQosRulesOrder200Response
```

Return the quality of service rule IDs by order in which they will be processed by the switch

Return the quality of service rule IDs by order in which they will be processed by the switch

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


$apiInstance = new Meraki\Api\QosRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSwitchQosRulesOrder($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QosRulesApi->getNetworkSwitchQosRulesOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchQosRulesOrder200Response**](../Model/GetNetworkSwitchQosRulesOrder200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchQosRule()`

```php
updateNetworkSwitchQosRule($network_id, $qos_rule_id, $update_network_switch_qos_rule_request): \Meraki\Model\GetNetworkSwitchQosRules200ResponseInner
```

Update a quality of service rule

Update a quality of service rule

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


$apiInstance = new Meraki\Api\QosRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$qos_rule_id = 'qos_rule_id_example'; // string | Qos rule ID
$update_network_switch_qos_rule_request = new \Meraki\Model\UpdateNetworkSwitchQosRuleRequest(); // \Meraki\Model\UpdateNetworkSwitchQosRuleRequest

try {
    $result = $apiInstance->updateNetworkSwitchQosRule($network_id, $qos_rule_id, $update_network_switch_qos_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QosRulesApi->updateNetworkSwitchQosRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **qos_rule_id** | **string**| Qos rule ID | |
| **update_network_switch_qos_rule_request** | [**\Meraki\Model\UpdateNetworkSwitchQosRuleRequest**](../Model/UpdateNetworkSwitchQosRuleRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchQosRules200ResponseInner**](../Model/GetNetworkSwitchQosRules200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchQosRulesOrder()`

```php
updateNetworkSwitchQosRulesOrder($network_id, $update_network_switch_qos_rules_order_request): \Meraki\Model\GetNetworkSwitchQosRulesOrder200Response
```

Update the order in which the rules should be processed by the switch

Update the order in which the rules should be processed by the switch

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


$apiInstance = new Meraki\Api\QosRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_switch_qos_rules_order_request = new \Meraki\Model\UpdateNetworkSwitchQosRulesOrderRequest(); // \Meraki\Model\UpdateNetworkSwitchQosRulesOrderRequest

try {
    $result = $apiInstance->updateNetworkSwitchQosRulesOrder($network_id, $update_network_switch_qos_rules_order_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QosRulesApi->updateNetworkSwitchQosRulesOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_switch_qos_rules_order_request** | [**\Meraki\Model\UpdateNetworkSwitchQosRulesOrderRequest**](../Model/UpdateNetworkSwitchQosRulesOrderRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkSwitchQosRulesOrder200Response**](../Model/GetNetworkSwitchQosRulesOrder200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
