# Meraki\MqttBrokersApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkMqttBroker()**](MqttBrokersApi.md#createNetworkMqttBroker) | **POST** /networks/{networkId}/mqttBrokers | Add an MQTT broker |
| [**deleteNetworkMqttBroker()**](MqttBrokersApi.md#deleteNetworkMqttBroker) | **DELETE** /networks/{networkId}/mqttBrokers/{mqttBrokerId} | Delete an MQTT broker |
| [**getNetworkMqttBroker()**](MqttBrokersApi.md#getNetworkMqttBroker) | **GET** /networks/{networkId}/mqttBrokers/{mqttBrokerId} | Return an MQTT broker |
| [**getNetworkMqttBrokers()**](MqttBrokersApi.md#getNetworkMqttBrokers) | **GET** /networks/{networkId}/mqttBrokers | List the MQTT brokers for this network |
| [**getNetworkSensorMqttBroker()**](MqttBrokersApi.md#getNetworkSensorMqttBroker) | **GET** /networks/{networkId}/sensor/mqttBrokers/{mqttBrokerId} | Return the sensor settings of an MQTT broker |
| [**getNetworkSensorMqttBrokers()**](MqttBrokersApi.md#getNetworkSensorMqttBrokers) | **GET** /networks/{networkId}/sensor/mqttBrokers | List the sensor settings of all MQTT brokers for this network |
| [**updateNetworkMqttBroker()**](MqttBrokersApi.md#updateNetworkMqttBroker) | **PUT** /networks/{networkId}/mqttBrokers/{mqttBrokerId} | Update an MQTT broker |
| [**updateNetworkSensorMqttBroker()**](MqttBrokersApi.md#updateNetworkSensorMqttBroker) | **PUT** /networks/{networkId}/sensor/mqttBrokers/{mqttBrokerId} | Update the sensor settings of an MQTT broker |


## `createNetworkMqttBroker()`

```php
createNetworkMqttBroker($network_id, $create_network_mqtt_broker_request): \Meraki\Model\GetNetworkMqttBrokers200ResponseInner
```

Add an MQTT broker

Add an MQTT broker

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


$apiInstance = new Meraki\Api\MqttBrokersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_mqtt_broker_request = new \Meraki\Model\CreateNetworkMqttBrokerRequest(); // \Meraki\Model\CreateNetworkMqttBrokerRequest

try {
    $result = $apiInstance->createNetworkMqttBroker($network_id, $create_network_mqtt_broker_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MqttBrokersApi->createNetworkMqttBroker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_mqtt_broker_request** | [**\Meraki\Model\CreateNetworkMqttBrokerRequest**](../Model/CreateNetworkMqttBrokerRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkMqttBrokers200ResponseInner**](../Model/GetNetworkMqttBrokers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkMqttBroker()`

```php
deleteNetworkMqttBroker($network_id, $mqtt_broker_id)
```

Delete an MQTT broker

Delete an MQTT broker

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


$apiInstance = new Meraki\Api\MqttBrokersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$mqtt_broker_id = 'mqtt_broker_id_example'; // string | Mqtt broker ID

try {
    $apiInstance->deleteNetworkMqttBroker($network_id, $mqtt_broker_id);
} catch (Exception $e) {
    echo 'Exception when calling MqttBrokersApi->deleteNetworkMqttBroker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **mqtt_broker_id** | **string**| Mqtt broker ID | |

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

## `getNetworkMqttBroker()`

```php
getNetworkMqttBroker($network_id, $mqtt_broker_id): \Meraki\Model\GetNetworkMqttBrokers200ResponseInner
```

Return an MQTT broker

Return an MQTT broker

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


$apiInstance = new Meraki\Api\MqttBrokersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$mqtt_broker_id = 'mqtt_broker_id_example'; // string | Mqtt broker ID

try {
    $result = $apiInstance->getNetworkMqttBroker($network_id, $mqtt_broker_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MqttBrokersApi->getNetworkMqttBroker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **mqtt_broker_id** | **string**| Mqtt broker ID | |

### Return type

[**\Meraki\Model\GetNetworkMqttBrokers200ResponseInner**](../Model/GetNetworkMqttBrokers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkMqttBrokers()`

```php
getNetworkMqttBrokers($network_id): \Meraki\Model\GetNetworkMqttBrokers200ResponseInner[]
```

List the MQTT brokers for this network

List the MQTT brokers for this network

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


$apiInstance = new Meraki\Api\MqttBrokersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkMqttBrokers($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MqttBrokersApi->getNetworkMqttBrokers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkMqttBrokers200ResponseInner[]**](../Model/GetNetworkMqttBrokers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSensorMqttBroker()`

```php
getNetworkSensorMqttBroker($network_id, $mqtt_broker_id): \Meraki\Model\GetNetworkSensorMqttBrokers200ResponseInner
```

Return the sensor settings of an MQTT broker

Return the sensor settings of an MQTT broker. To get the broker itself, use /networks/{networkId}/mqttBrokers/{mqttBrokerId}.

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


$apiInstance = new Meraki\Api\MqttBrokersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$mqtt_broker_id = 'mqtt_broker_id_example'; // string | Mqtt broker ID

try {
    $result = $apiInstance->getNetworkSensorMqttBroker($network_id, $mqtt_broker_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MqttBrokersApi->getNetworkSensorMqttBroker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **mqtt_broker_id** | **string**| Mqtt broker ID | |

### Return type

[**\Meraki\Model\GetNetworkSensorMqttBrokers200ResponseInner**](../Model/GetNetworkSensorMqttBrokers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSensorMqttBrokers()`

```php
getNetworkSensorMqttBrokers($network_id): \Meraki\Model\GetNetworkSensorMqttBrokers200ResponseInner[]
```

List the sensor settings of all MQTT brokers for this network

List the sensor settings of all MQTT brokers for this network. To get the brokers themselves, use /networks/{networkId}/mqttBrokers.

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


$apiInstance = new Meraki\Api\MqttBrokersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSensorMqttBrokers($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MqttBrokersApi->getNetworkSensorMqttBrokers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSensorMqttBrokers200ResponseInner[]**](../Model/GetNetworkSensorMqttBrokers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkMqttBroker()`

```php
updateNetworkMqttBroker($network_id, $mqtt_broker_id, $update_network_mqtt_broker_request): \Meraki\Model\GetNetworkMqttBrokers200ResponseInner
```

Update an MQTT broker

Update an MQTT broker

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


$apiInstance = new Meraki\Api\MqttBrokersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$mqtt_broker_id = 'mqtt_broker_id_example'; // string | Mqtt broker ID
$update_network_mqtt_broker_request = new \Meraki\Model\UpdateNetworkMqttBrokerRequest(); // \Meraki\Model\UpdateNetworkMqttBrokerRequest

try {
    $result = $apiInstance->updateNetworkMqttBroker($network_id, $mqtt_broker_id, $update_network_mqtt_broker_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MqttBrokersApi->updateNetworkMqttBroker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **mqtt_broker_id** | **string**| Mqtt broker ID | |
| **update_network_mqtt_broker_request** | [**\Meraki\Model\UpdateNetworkMqttBrokerRequest**](../Model/UpdateNetworkMqttBrokerRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkMqttBrokers200ResponseInner**](../Model/GetNetworkMqttBrokers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSensorMqttBroker()`

```php
updateNetworkSensorMqttBroker($network_id, $mqtt_broker_id, $update_network_sensor_mqtt_broker_request): \Meraki\Model\GetNetworkSensorMqttBrokers200ResponseInner
```

Update the sensor settings of an MQTT broker

Update the sensor settings of an MQTT broker. To update the broker itself, use /networks/{networkId}/mqttBrokers/{mqttBrokerId}.

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


$apiInstance = new Meraki\Api\MqttBrokersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$mqtt_broker_id = 'mqtt_broker_id_example'; // string | Mqtt broker ID
$update_network_sensor_mqtt_broker_request = new \Meraki\Model\UpdateNetworkSensorMqttBrokerRequest(); // \Meraki\Model\UpdateNetworkSensorMqttBrokerRequest

try {
    $result = $apiInstance->updateNetworkSensorMqttBroker($network_id, $mqtt_broker_id, $update_network_sensor_mqtt_broker_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MqttBrokersApi->updateNetworkSensorMqttBroker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **mqtt_broker_id** | **string**| Mqtt broker ID | |
| **update_network_sensor_mqtt_broker_request** | [**\Meraki\Model\UpdateNetworkSensorMqttBrokerRequest**](../Model/UpdateNetworkSensorMqttBrokerRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkSensorMqttBrokers200ResponseInner**](../Model/GetNetworkSensorMqttBrokers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
