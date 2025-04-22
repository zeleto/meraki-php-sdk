# Meraki\PrefixesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkAppliancePrefixesDelegatedStatic()**](PrefixesApi.md#createNetworkAppliancePrefixesDelegatedStatic) | **POST** /networks/{networkId}/appliance/prefixes/delegated/statics | Add a static delegated prefix from a network |
| [**deleteNetworkAppliancePrefixesDelegatedStatic()**](PrefixesApi.md#deleteNetworkAppliancePrefixesDelegatedStatic) | **DELETE** /networks/{networkId}/appliance/prefixes/delegated/statics/{staticDelegatedPrefixId} | Delete a static delegated prefix from a network |
| [**getDeviceAppliancePrefixesDelegated()**](PrefixesApi.md#getDeviceAppliancePrefixesDelegated) | **GET** /devices/{serial}/appliance/prefixes/delegated | Return current delegated IPv6 prefixes on an appliance. |
| [**getDeviceAppliancePrefixesDelegatedVlanAssignments()**](PrefixesApi.md#getDeviceAppliancePrefixesDelegatedVlanAssignments) | **GET** /devices/{serial}/appliance/prefixes/delegated/vlanAssignments | Return prefixes assigned to all IPv6 enabled VLANs on an appliance. |
| [**getNetworkAppliancePrefixesDelegatedStatic()**](PrefixesApi.md#getNetworkAppliancePrefixesDelegatedStatic) | **GET** /networks/{networkId}/appliance/prefixes/delegated/statics/{staticDelegatedPrefixId} | Return a static delegated prefix from a network |
| [**getNetworkAppliancePrefixesDelegatedStatics()**](PrefixesApi.md#getNetworkAppliancePrefixesDelegatedStatics) | **GET** /networks/{networkId}/appliance/prefixes/delegated/statics | List static delegated prefixes for a network |
| [**updateNetworkAppliancePrefixesDelegatedStatic()**](PrefixesApi.md#updateNetworkAppliancePrefixesDelegatedStatic) | **PUT** /networks/{networkId}/appliance/prefixes/delegated/statics/{staticDelegatedPrefixId} | Update a static delegated prefix from a network |


## `createNetworkAppliancePrefixesDelegatedStatic()`

```php
createNetworkAppliancePrefixesDelegatedStatic($network_id, $create_network_appliance_prefixes_delegated_static_request): object
```

Add a static delegated prefix from a network

Add a static delegated prefix from a network

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


$apiInstance = new Meraki\Api\PrefixesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_appliance_prefixes_delegated_static_request = new \Meraki\Model\CreateNetworkAppliancePrefixesDelegatedStaticRequest(); // \Meraki\Model\CreateNetworkAppliancePrefixesDelegatedStaticRequest

try {
    $result = $apiInstance->createNetworkAppliancePrefixesDelegatedStatic($network_id, $create_network_appliance_prefixes_delegated_static_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrefixesApi->createNetworkAppliancePrefixesDelegatedStatic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_appliance_prefixes_delegated_static_request** | [**\Meraki\Model\CreateNetworkAppliancePrefixesDelegatedStaticRequest**](../Model/CreateNetworkAppliancePrefixesDelegatedStaticRequest.md)|  | |

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

## `deleteNetworkAppliancePrefixesDelegatedStatic()`

```php
deleteNetworkAppliancePrefixesDelegatedStatic($network_id, $static_delegated_prefix_id)
```

Delete a static delegated prefix from a network

Delete a static delegated prefix from a network

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


$apiInstance = new Meraki\Api\PrefixesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$static_delegated_prefix_id = 'static_delegated_prefix_id_example'; // string | Static delegated prefix ID

try {
    $apiInstance->deleteNetworkAppliancePrefixesDelegatedStatic($network_id, $static_delegated_prefix_id);
} catch (Exception $e) {
    echo 'Exception when calling PrefixesApi->deleteNetworkAppliancePrefixesDelegatedStatic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **static_delegated_prefix_id** | **string**| Static delegated prefix ID | |

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

## `getDeviceAppliancePrefixesDelegated()`

```php
getDeviceAppliancePrefixesDelegated($serial): object[]
```

Return current delegated IPv6 prefixes on an appliance.

Return current delegated IPv6 prefixes on an appliance.

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


$apiInstance = new Meraki\Api\PrefixesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceAppliancePrefixesDelegated($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrefixesApi->getDeviceAppliancePrefixesDelegated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

**object[]**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceAppliancePrefixesDelegatedVlanAssignments()`

```php
getDeviceAppliancePrefixesDelegatedVlanAssignments($serial): object[]
```

Return prefixes assigned to all IPv6 enabled VLANs on an appliance.

Return prefixes assigned to all IPv6 enabled VLANs on an appliance.

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


$apiInstance = new Meraki\Api\PrefixesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceAppliancePrefixesDelegatedVlanAssignments($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrefixesApi->getDeviceAppliancePrefixesDelegatedVlanAssignments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

**object[]**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkAppliancePrefixesDelegatedStatic()`

```php
getNetworkAppliancePrefixesDelegatedStatic($network_id, $static_delegated_prefix_id): \Meraki\Model\GetNetworkAppliancePrefixesDelegatedStatics200ResponseInner
```

Return a static delegated prefix from a network

Return a static delegated prefix from a network

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


$apiInstance = new Meraki\Api\PrefixesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$static_delegated_prefix_id = 'static_delegated_prefix_id_example'; // string | Static delegated prefix ID

try {
    $result = $apiInstance->getNetworkAppliancePrefixesDelegatedStatic($network_id, $static_delegated_prefix_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrefixesApi->getNetworkAppliancePrefixesDelegatedStatic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **static_delegated_prefix_id** | **string**| Static delegated prefix ID | |

### Return type

[**\Meraki\Model\GetNetworkAppliancePrefixesDelegatedStatics200ResponseInner**](../Model/GetNetworkAppliancePrefixesDelegatedStatics200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkAppliancePrefixesDelegatedStatics()`

```php
getNetworkAppliancePrefixesDelegatedStatics($network_id): \Meraki\Model\GetNetworkAppliancePrefixesDelegatedStatics200ResponseInner[]
```

List static delegated prefixes for a network

List static delegated prefixes for a network

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


$apiInstance = new Meraki\Api\PrefixesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkAppliancePrefixesDelegatedStatics($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrefixesApi->getNetworkAppliancePrefixesDelegatedStatics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkAppliancePrefixesDelegatedStatics200ResponseInner[]**](../Model/GetNetworkAppliancePrefixesDelegatedStatics200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkAppliancePrefixesDelegatedStatic()`

```php
updateNetworkAppliancePrefixesDelegatedStatic($network_id, $static_delegated_prefix_id, $update_network_appliance_prefixes_delegated_static_request): object
```

Update a static delegated prefix from a network

Update a static delegated prefix from a network

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


$apiInstance = new Meraki\Api\PrefixesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$static_delegated_prefix_id = 'static_delegated_prefix_id_example'; // string | Static delegated prefix ID
$update_network_appliance_prefixes_delegated_static_request = new \Meraki\Model\UpdateNetworkAppliancePrefixesDelegatedStaticRequest(); // \Meraki\Model\UpdateNetworkAppliancePrefixesDelegatedStaticRequest

try {
    $result = $apiInstance->updateNetworkAppliancePrefixesDelegatedStatic($network_id, $static_delegated_prefix_id, $update_network_appliance_prefixes_delegated_static_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrefixesApi->updateNetworkAppliancePrefixesDelegatedStatic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **static_delegated_prefix_id** | **string**| Static delegated prefix ID | |
| **update_network_appliance_prefixes_delegated_static_request** | [**\Meraki\Model\UpdateNetworkAppliancePrefixesDelegatedStaticRequest**](../Model/UpdateNetworkAppliancePrefixesDelegatedStaticRequest.md)|  | [optional] |

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
