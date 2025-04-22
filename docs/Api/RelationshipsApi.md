# Meraki\RelationshipsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDeviceSensorRelationships()**](RelationshipsApi.md#getDeviceSensorRelationships) | **GET** /devices/{serial}/sensor/relationships | List the sensor roles for a given sensor or camera device. |
| [**getNetworkSensorRelationships()**](RelationshipsApi.md#getNetworkSensorRelationships) | **GET** /networks/{networkId}/sensor/relationships | List the sensor roles for devices in a given network |
| [**updateDeviceSensorRelationships()**](RelationshipsApi.md#updateDeviceSensorRelationships) | **PUT** /devices/{serial}/sensor/relationships | Assign one or more sensor roles to a given sensor or camera device. |


## `getDeviceSensorRelationships()`

```php
getDeviceSensorRelationships($serial): \Meraki\Model\GetDeviceSensorRelationships200Response
```

List the sensor roles for a given sensor or camera device.

List the sensor roles for a given sensor or camera device.

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


$apiInstance = new Meraki\Api\RelationshipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceSensorRelationships($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->getDeviceSensorRelationships: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceSensorRelationships200Response**](../Model/GetDeviceSensorRelationships200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSensorRelationships()`

```php
getNetworkSensorRelationships($network_id): \Meraki\Model\GetNetworkSensorRelationships200ResponseInner[]
```

List the sensor roles for devices in a given network

List the sensor roles for devices in a given network

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


$apiInstance = new Meraki\Api\RelationshipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSensorRelationships($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->getNetworkSensorRelationships: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSensorRelationships200ResponseInner[]**](../Model/GetNetworkSensorRelationships200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceSensorRelationships()`

```php
updateDeviceSensorRelationships($serial, $update_device_sensor_relationships_request): \Meraki\Model\GetDeviceSensorRelationships200Response
```

Assign one or more sensor roles to a given sensor or camera device.

Assign one or more sensor roles to a given sensor or camera device.

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


$apiInstance = new Meraki\Api\RelationshipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_sensor_relationships_request = new \Meraki\Model\UpdateDeviceSensorRelationshipsRequest(); // \Meraki\Model\UpdateDeviceSensorRelationshipsRequest

try {
    $result = $apiInstance->updateDeviceSensorRelationships($serial, $update_device_sensor_relationships_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipsApi->updateDeviceSensorRelationships: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_sensor_relationships_request** | [**\Meraki\Model\UpdateDeviceSensorRelationshipsRequest**](../Model/UpdateDeviceSensorRelationshipsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceSensorRelationships200Response**](../Model/GetDeviceSensorRelationships200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
