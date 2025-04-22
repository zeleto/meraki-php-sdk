# Meraki\CommandsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDeviceSensorCommand()**](CommandsApi.md#createDeviceSensorCommand) | **POST** /devices/{serial}/sensor/commands | Sends a command to a sensor |
| [**getDeviceSensorCommand()**](CommandsApi.md#getDeviceSensorCommand) | **GET** /devices/{serial}/sensor/commands/{commandId} | Returns information about the command&#39;s execution, including the status |
| [**getDeviceSensorCommands()**](CommandsApi.md#getDeviceSensorCommands) | **GET** /devices/{serial}/sensor/commands | Returns a historical log of all commands |


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


$apiInstance = new Meraki\Api\CommandsApi(
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
    echo 'Exception when calling CommandsApi->createDeviceSensorCommand: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\CommandsApi(
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
    echo 'Exception when calling CommandsApi->getDeviceSensorCommand: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\CommandsApi(
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
    echo 'Exception when calling CommandsApi->getDeviceSensorCommands: ', $e->getMessage(), PHP_EOL;
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
