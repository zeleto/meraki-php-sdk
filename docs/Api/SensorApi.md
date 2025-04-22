# Meraki\SensorApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDeviceSensorCommand()**](SensorApi.md#createDeviceSensorCommand) | **POST** /devices/{serial}/sensor/commands | Sends a command to a sensor |
| [**createNetworkSensorAlertsProfile()**](SensorApi.md#createNetworkSensorAlertsProfile) | **POST** /networks/{networkId}/sensor/alerts/profiles | Creates a sensor alert profile for a network. |
| [**deleteNetworkSensorAlertsProfile()**](SensorApi.md#deleteNetworkSensorAlertsProfile) | **DELETE** /networks/{networkId}/sensor/alerts/profiles/{id} | Deletes a sensor alert profile from a network. |
| [**getDeviceSensorCommand()**](SensorApi.md#getDeviceSensorCommand) | **GET** /devices/{serial}/sensor/commands/{commandId} | Returns information about the command&#39;s execution, including the status |
| [**getDeviceSensorCommands()**](SensorApi.md#getDeviceSensorCommands) | **GET** /devices/{serial}/sensor/commands | Returns a historical log of all commands |
| [**getDeviceSensorRelationships()**](SensorApi.md#getDeviceSensorRelationships) | **GET** /devices/{serial}/sensor/relationships | List the sensor roles for a given sensor or camera device. |
| [**getNetworkSensorAlertsCurrentOverviewByMetric()**](SensorApi.md#getNetworkSensorAlertsCurrentOverviewByMetric) | **GET** /networks/{networkId}/sensor/alerts/current/overview/byMetric | Return an overview of currently alerting sensors by metric |
| [**getNetworkSensorAlertsOverviewByMetric()**](SensorApi.md#getNetworkSensorAlertsOverviewByMetric) | **GET** /networks/{networkId}/sensor/alerts/overview/byMetric | Return an overview of alert occurrences over a timespan, by metric |
| [**getNetworkSensorAlertsProfile()**](SensorApi.md#getNetworkSensorAlertsProfile) | **GET** /networks/{networkId}/sensor/alerts/profiles/{id} | Show details of a sensor alert profile for a network. |
| [**getNetworkSensorAlertsProfiles()**](SensorApi.md#getNetworkSensorAlertsProfiles) | **GET** /networks/{networkId}/sensor/alerts/profiles | Lists all sensor alert profiles for a network. |
| [**getNetworkSensorMqttBroker()**](SensorApi.md#getNetworkSensorMqttBroker) | **GET** /networks/{networkId}/sensor/mqttBrokers/{mqttBrokerId} | Return the sensor settings of an MQTT broker |
| [**getNetworkSensorMqttBrokers()**](SensorApi.md#getNetworkSensorMqttBrokers) | **GET** /networks/{networkId}/sensor/mqttBrokers | List the sensor settings of all MQTT brokers for this network |
| [**getNetworkSensorRelationships()**](SensorApi.md#getNetworkSensorRelationships) | **GET** /networks/{networkId}/sensor/relationships | List the sensor roles for devices in a given network |
| [**getOrganizationSensorReadingsHistory()**](SensorApi.md#getOrganizationSensorReadingsHistory) | **GET** /organizations/{organizationId}/sensor/readings/history | Return all reported readings from sensors in a given timespan, sorted by timestamp |
| [**getOrganizationSensorReadingsLatest()**](SensorApi.md#getOrganizationSensorReadingsLatest) | **GET** /organizations/{organizationId}/sensor/readings/latest | Return the latest available reading for each metric from each sensor, sorted by sensor serial |
| [**updateDeviceSensorRelationships()**](SensorApi.md#updateDeviceSensorRelationships) | **PUT** /devices/{serial}/sensor/relationships | Assign one or more sensor roles to a given sensor or camera device. |
| [**updateNetworkSensorAlertsProfile()**](SensorApi.md#updateNetworkSensorAlertsProfile) | **PUT** /networks/{networkId}/sensor/alerts/profiles/{id} | Updates a sensor alert profile for a network. |
| [**updateNetworkSensorMqttBroker()**](SensorApi.md#updateNetworkSensorMqttBroker) | **PUT** /networks/{networkId}/sensor/mqttBrokers/{mqttBrokerId} | Update the sensor settings of an MQTT broker |


## `createDeviceSensorCommand()`

```php
createDeviceSensorCommand($serial, $create_device_sensor_command_request): \Meraki\Model\GetDeviceSensorCommands200ResponseInner
```

Sends a command to a sensor

Sends a command to a sensor

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


$apiInstance = new Meraki\Api\SensorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$create_device_sensor_command_request = new \Meraki\Model\CreateDeviceSensorCommandRequest(); // \Meraki\Model\CreateDeviceSensorCommandRequest

try {
    $result = $apiInstance->createDeviceSensorCommand($serial, $create_device_sensor_command_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorApi->createDeviceSensorCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **create_device_sensor_command_request** | [**\Meraki\Model\CreateDeviceSensorCommandRequest**](../Model/CreateDeviceSensorCommandRequest.md)|  | |

### Return type

[**\Meraki\Model\GetDeviceSensorCommands200ResponseInner**](../Model/GetDeviceSensorCommands200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkSensorAlertsProfile()`

```php
createNetworkSensorAlertsProfile($network_id, $create_network_sensor_alerts_profile_request): \Meraki\Model\GetNetworkSensorAlertsProfiles200ResponseInner
```

Creates a sensor alert profile for a network.

Creates a sensor alert profile for a network.

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


$apiInstance = new Meraki\Api\SensorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_sensor_alerts_profile_request = new \Meraki\Model\CreateNetworkSensorAlertsProfileRequest(); // \Meraki\Model\CreateNetworkSensorAlertsProfileRequest

try {
    $result = $apiInstance->createNetworkSensorAlertsProfile($network_id, $create_network_sensor_alerts_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorApi->createNetworkSensorAlertsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_sensor_alerts_profile_request** | [**\Meraki\Model\CreateNetworkSensorAlertsProfileRequest**](../Model/CreateNetworkSensorAlertsProfileRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkSensorAlertsProfiles200ResponseInner**](../Model/GetNetworkSensorAlertsProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkSensorAlertsProfile()`

```php
deleteNetworkSensorAlertsProfile($network_id, $id)
```

Deletes a sensor alert profile from a network.

Deletes a sensor alert profile from a network.

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


$apiInstance = new Meraki\Api\SensorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$id = 'id_example'; // string | ID

try {
    $apiInstance->deleteNetworkSensorAlertsProfile($network_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling SensorApi->deleteNetworkSensorAlertsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **id** | **string**| ID | |

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

## `getDeviceSensorCommand()`

```php
getDeviceSensorCommand($serial, $command_id): \Meraki\Model\GetDeviceSensorCommands200ResponseInner
```

Returns information about the command's execution, including the status

Returns information about the command's execution, including the status

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


$apiInstance = new Meraki\Api\SensorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$command_id = 'command_id_example'; // string | Command ID

try {
    $result = $apiInstance->getDeviceSensorCommand($serial, $command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorApi->getDeviceSensorCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **command_id** | **string**| Command ID | |

### Return type

[**\Meraki\Model\GetDeviceSensorCommands200ResponseInner**](../Model/GetDeviceSensorCommands200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceSensorCommands()`

```php
getDeviceSensorCommands($serial, $operations, $per_page, $starting_after, $ending_before, $sort_order, $t0, $t1, $timespan): \Meraki\Model\GetDeviceSensorCommands200ResponseInner[]
```

Returns a historical log of all commands

Returns a historical log of all commands

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


$apiInstance = new Meraki\Api\SensorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$operations = array('operations_example'); // string[] | Optional parameter to filter commands by operation. Allowed values are disableDownstreamPower, enableDownstreamPower, cycleDownstreamPower, and refreshData.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 10.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$sort_order = 'sort_order_example'; // string | Sorted order of entries. Order options are 'ascending' and 'descending'. Default is 'descending'.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 30 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 30 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 30 days. The default is 30 days.

try {
    $result = $apiInstance->getDeviceSensorCommands($serial, $operations, $per_page, $starting_after, $ending_before, $sort_order, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorApi->getDeviceSensorCommands: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **operations** | [**string[]**](../Model/string.md)| Optional parameter to filter commands by operation. Allowed values are disableDownstreamPower, enableDownstreamPower, cycleDownstreamPower, and refreshData. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 10. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **sort_order** | **string**| Sorted order of entries. Order options are &#39;ascending&#39; and &#39;descending&#39;. Default is &#39;descending&#39;. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 30 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 30 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 30 days. The default is 30 days. | [optional] |

### Return type

[**\Meraki\Model\GetDeviceSensorCommands200ResponseInner[]**](../Model/GetDeviceSensorCommands200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new Meraki\Api\SensorApi(
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
    echo 'Exception when calling SensorApi->getDeviceSensorRelationships: ', $e->getMessage(), PHP_EOL;
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

## `getNetworkSensorAlertsCurrentOverviewByMetric()`

```php
getNetworkSensorAlertsCurrentOverviewByMetric($network_id): \Meraki\Model\GetNetworkSensorAlertsCurrentOverviewByMetric200Response
```

Return an overview of currently alerting sensors by metric

Return an overview of currently alerting sensors by metric

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


$apiInstance = new Meraki\Api\SensorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSensorAlertsCurrentOverviewByMetric($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorApi->getNetworkSensorAlertsCurrentOverviewByMetric: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSensorAlertsCurrentOverviewByMetric200Response**](../Model/GetNetworkSensorAlertsCurrentOverviewByMetric200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSensorAlertsOverviewByMetric()`

```php
getNetworkSensorAlertsOverviewByMetric($network_id, $t0, $t1, $timespan, $interval): \Meraki\Model\GetNetworkSensorAlertsOverviewByMetric200ResponseInner[]
```

Return an overview of alert occurrences over a timespan, by metric

Return an overview of alert occurrences over a timespan, by metric

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


$apiInstance = new Meraki\Api\SensorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 731 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 366 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 366 days. The default is 7 days. If interval is provided, the timespan will be autocalculated.
$interval = 56; // int | The time interval in seconds for returned data. The valid intervals are: 900, 3600, 86400, 604800, 2592000. The default is 604800. Interval is calculated if time params are provided.

try {
    $result = $apiInstance->getNetworkSensorAlertsOverviewByMetric($network_id, $t0, $t1, $timespan, $interval);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorApi->getNetworkSensorAlertsOverviewByMetric: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 731 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 366 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 366 days. The default is 7 days. If interval is provided, the timespan will be autocalculated. | [optional] |
| **interval** | **int**| The time interval in seconds for returned data. The valid intervals are: 900, 3600, 86400, 604800, 2592000. The default is 604800. Interval is calculated if time params are provided. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSensorAlertsOverviewByMetric200ResponseInner[]**](../Model/GetNetworkSensorAlertsOverviewByMetric200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSensorAlertsProfile()`

```php
getNetworkSensorAlertsProfile($network_id, $id): \Meraki\Model\GetNetworkSensorAlertsProfiles200ResponseInner
```

Show details of a sensor alert profile for a network.

Show details of a sensor alert profile for a network.

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


$apiInstance = new Meraki\Api\SensorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$id = 'id_example'; // string | ID

try {
    $result = $apiInstance->getNetworkSensorAlertsProfile($network_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorApi->getNetworkSensorAlertsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **id** | **string**| ID | |

### Return type

[**\Meraki\Model\GetNetworkSensorAlertsProfiles200ResponseInner**](../Model/GetNetworkSensorAlertsProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSensorAlertsProfiles()`

```php
getNetworkSensorAlertsProfiles($network_id): \Meraki\Model\GetNetworkSensorAlertsProfiles200ResponseInner[]
```

Lists all sensor alert profiles for a network.

Lists all sensor alert profiles for a network.

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


$apiInstance = new Meraki\Api\SensorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSensorAlertsProfiles($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorApi->getNetworkSensorAlertsProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSensorAlertsProfiles200ResponseInner[]**](../Model/GetNetworkSensorAlertsProfiles200ResponseInner.md)

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


$apiInstance = new Meraki\Api\SensorApi(
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
    echo 'Exception when calling SensorApi->getNetworkSensorMqttBroker: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\SensorApi(
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
    echo 'Exception when calling SensorApi->getNetworkSensorMqttBrokers: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\SensorApi(
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
    echo 'Exception when calling SensorApi->getNetworkSensorRelationships: ', $e->getMessage(), PHP_EOL;
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

## `getOrganizationSensorReadingsHistory()`

```php
getOrganizationSensorReadingsHistory($organization_id, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan, $network_ids, $serials, $metrics): \Meraki\Model\GetOrganizationSensorReadingsHistory200ResponseInner[]
```

Return all reported readings from sensors in a given timespan, sorted by timestamp

Return all reported readings from sensors in a given timespan, sorted by timestamp

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


$apiInstance = new Meraki\Api\SensorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 365 days and 6 hours from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 7 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days. The default is 2 hours.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter readings by network.
$serials = array('serials_example'); // string[] | Optional parameter to filter readings by sensor.
$metrics = array('metrics_example'); // string[] | Types of sensor readings to retrieve. If no metrics are supplied, all available types of readings will be retrieved.

try {
    $result = $apiInstance->getOrganizationSensorReadingsHistory($organization_id, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan, $network_ids, $serials, $metrics);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorApi->getOrganizationSensorReadingsHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 365 days and 6 hours from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 7 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days. The default is 2 hours. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter readings by network. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter readings by sensor. | [optional] |
| **metrics** | [**string[]**](../Model/string.md)| Types of sensor readings to retrieve. If no metrics are supplied, all available types of readings will be retrieved. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSensorReadingsHistory200ResponseInner[]**](../Model/GetOrganizationSensorReadingsHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSensorReadingsLatest()`

```php
getOrganizationSensorReadingsLatest($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $serials, $metrics): \Meraki\Model\GetOrganizationSensorReadingsLatest200ResponseInner[]
```

Return the latest available reading for each metric from each sensor, sorted by sensor serial

Return the latest available reading for each metric from each sensor, sorted by sensor serial

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


$apiInstance = new Meraki\Api\SensorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter readings by network.
$serials = array('serials_example'); // string[] | Optional parameter to filter readings by sensor.
$metrics = array('metrics_example'); // string[] | Types of sensor readings to retrieve. If no metrics are supplied, all available types of readings will be retrieved.

try {
    $result = $apiInstance->getOrganizationSensorReadingsLatest($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $serials, $metrics);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorApi->getOrganizationSensorReadingsLatest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter readings by network. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter readings by sensor. | [optional] |
| **metrics** | [**string[]**](../Model/string.md)| Types of sensor readings to retrieve. If no metrics are supplied, all available types of readings will be retrieved. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSensorReadingsLatest200ResponseInner[]**](../Model/GetOrganizationSensorReadingsLatest200ResponseInner.md)

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


$apiInstance = new Meraki\Api\SensorApi(
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
    echo 'Exception when calling SensorApi->updateDeviceSensorRelationships: ', $e->getMessage(), PHP_EOL;
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

## `updateNetworkSensorAlertsProfile()`

```php
updateNetworkSensorAlertsProfile($network_id, $id, $update_network_sensor_alerts_profile_request): \Meraki\Model\GetNetworkSensorAlertsProfiles200ResponseInner
```

Updates a sensor alert profile for a network.

Updates a sensor alert profile for a network.

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


$apiInstance = new Meraki\Api\SensorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$id = 'id_example'; // string | ID
$update_network_sensor_alerts_profile_request = new \Meraki\Model\UpdateNetworkSensorAlertsProfileRequest(); // \Meraki\Model\UpdateNetworkSensorAlertsProfileRequest

try {
    $result = $apiInstance->updateNetworkSensorAlertsProfile($network_id, $id, $update_network_sensor_alerts_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorApi->updateNetworkSensorAlertsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **id** | **string**| ID | |
| **update_network_sensor_alerts_profile_request** | [**\Meraki\Model\UpdateNetworkSensorAlertsProfileRequest**](../Model/UpdateNetworkSensorAlertsProfileRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSensorAlertsProfiles200ResponseInner**](../Model/GetNetworkSensorAlertsProfiles200ResponseInner.md)

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


$apiInstance = new Meraki\Api\SensorApi(
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
    echo 'Exception when calling SensorApi->updateNetworkSensorMqttBroker: ', $e->getMessage(), PHP_EOL;
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
