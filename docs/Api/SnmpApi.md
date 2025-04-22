# Meraki\SnmpApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkSnmp()**](SnmpApi.md#getNetworkSnmp) | **GET** /networks/{networkId}/snmp | Return the SNMP settings for a network |
| [**getOrganizationSnmp()**](SnmpApi.md#getOrganizationSnmp) | **GET** /organizations/{organizationId}/snmp | Return the SNMP settings for an organization |
| [**updateNetworkSnmp()**](SnmpApi.md#updateNetworkSnmp) | **PUT** /networks/{networkId}/snmp | Update the SNMP settings for a network |
| [**updateOrganizationSnmp()**](SnmpApi.md#updateOrganizationSnmp) | **PUT** /organizations/{organizationId}/snmp | Update the SNMP settings for an organization |


## `getNetworkSnmp()`

```php
getNetworkSnmp($network_id): \Meraki\Model\GetNetworkSnmp200Response
```

Return the SNMP settings for a network

Return the SNMP settings for a network

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


$apiInstance = new Meraki\Api\SnmpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSnmp($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnmpApi->getNetworkSnmp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSnmp200Response**](../Model/GetNetworkSnmp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSnmp()`

```php
getOrganizationSnmp($organization_id): \Meraki\Model\GetOrganizationSnmp200Response
```

Return the SNMP settings for an organization

Return the SNMP settings for an organization

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


$apiInstance = new Meraki\Api\SnmpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationSnmp($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnmpApi->getOrganizationSnmp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationSnmp200Response**](../Model/GetOrganizationSnmp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSnmp()`

```php
updateNetworkSnmp($network_id, $update_network_snmp_request): \Meraki\Model\GetNetworkSnmp200Response
```

Update the SNMP settings for a network

Update the SNMP settings for a network

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


$apiInstance = new Meraki\Api\SnmpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_snmp_request = new \Meraki\Model\UpdateNetworkSnmpRequest(); // \Meraki\Model\UpdateNetworkSnmpRequest

try {
    $result = $apiInstance->updateNetworkSnmp($network_id, $update_network_snmp_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnmpApi->updateNetworkSnmp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_snmp_request** | [**\Meraki\Model\UpdateNetworkSnmpRequest**](../Model/UpdateNetworkSnmpRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSnmp200Response**](../Model/GetNetworkSnmp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationSnmp()`

```php
updateOrganizationSnmp($organization_id, $update_organization_snmp_request): \Meraki\Model\GetOrganizationSnmp200Response
```

Update the SNMP settings for an organization

Update the SNMP settings for an organization

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


$apiInstance = new Meraki\Api\SnmpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$update_organization_snmp_request = new \Meraki\Model\UpdateOrganizationSnmpRequest(); // \Meraki\Model\UpdateOrganizationSnmpRequest

try {
    $result = $apiInstance->updateOrganizationSnmp($organization_id, $update_organization_snmp_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnmpApi->updateOrganizationSnmp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **update_organization_snmp_request** | [**\Meraki\Model\UpdateOrganizationSnmpRequest**](../Model/UpdateOrganizationSnmpRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSnmp200Response**](../Model/GetOrganizationSnmp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
