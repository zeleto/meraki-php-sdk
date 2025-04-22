# Meraki\PortSchedulesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkSwitchPortSchedule()**](PortSchedulesApi.md#createNetworkSwitchPortSchedule) | **POST** /networks/{networkId}/switch/portSchedules | Add a switch port schedule |
| [**deleteNetworkSwitchPortSchedule()**](PortSchedulesApi.md#deleteNetworkSwitchPortSchedule) | **DELETE** /networks/{networkId}/switch/portSchedules/{portScheduleId} | Delete a switch port schedule |
| [**getNetworkSwitchPortSchedules()**](PortSchedulesApi.md#getNetworkSwitchPortSchedules) | **GET** /networks/{networkId}/switch/portSchedules | List switch port schedules |
| [**updateNetworkSwitchPortSchedule()**](PortSchedulesApi.md#updateNetworkSwitchPortSchedule) | **PUT** /networks/{networkId}/switch/portSchedules/{portScheduleId} | Update a switch port schedule |


## `createNetworkSwitchPortSchedule()`

```php
createNetworkSwitchPortSchedule($network_id, $create_network_switch_port_schedule_request): \Meraki\Model\GetNetworkSwitchPortSchedules200ResponseInner
```

Add a switch port schedule

Add a switch port schedule

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


$apiInstance = new Meraki\Api\PortSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_switch_port_schedule_request = new \Meraki\Model\CreateNetworkSwitchPortScheduleRequest(); // \Meraki\Model\CreateNetworkSwitchPortScheduleRequest

try {
    $result = $apiInstance->createNetworkSwitchPortSchedule($network_id, $create_network_switch_port_schedule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortSchedulesApi->createNetworkSwitchPortSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_switch_port_schedule_request** | [**\Meraki\Model\CreateNetworkSwitchPortScheduleRequest**](../Model/CreateNetworkSwitchPortScheduleRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkSwitchPortSchedules200ResponseInner**](../Model/GetNetworkSwitchPortSchedules200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkSwitchPortSchedule()`

```php
deleteNetworkSwitchPortSchedule($network_id, $port_schedule_id)
```

Delete a switch port schedule

Delete a switch port schedule

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


$apiInstance = new Meraki\Api\PortSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$port_schedule_id = 'port_schedule_id_example'; // string | Port schedule ID

try {
    $apiInstance->deleteNetworkSwitchPortSchedule($network_id, $port_schedule_id);
} catch (Exception $e) {
    echo 'Exception when calling PortSchedulesApi->deleteNetworkSwitchPortSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **port_schedule_id** | **string**| Port schedule ID | |

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

## `getNetworkSwitchPortSchedules()`

```php
getNetworkSwitchPortSchedules($network_id): \Meraki\Model\GetNetworkSwitchPortSchedules200ResponseInner[]
```

List switch port schedules

List switch port schedules

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


$apiInstance = new Meraki\Api\PortSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSwitchPortSchedules($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortSchedulesApi->getNetworkSwitchPortSchedules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchPortSchedules200ResponseInner[]**](../Model/GetNetworkSwitchPortSchedules200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchPortSchedule()`

```php
updateNetworkSwitchPortSchedule($network_id, $port_schedule_id, $update_network_switch_port_schedule_request): \Meraki\Model\GetNetworkSwitchPortSchedules200ResponseInner
```

Update a switch port schedule

Update a switch port schedule

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


$apiInstance = new Meraki\Api\PortSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$port_schedule_id = 'port_schedule_id_example'; // string | Port schedule ID
$update_network_switch_port_schedule_request = new \Meraki\Model\UpdateNetworkSwitchPortScheduleRequest(); // \Meraki\Model\UpdateNetworkSwitchPortScheduleRequest

try {
    $result = $apiInstance->updateNetworkSwitchPortSchedule($network_id, $port_schedule_id, $update_network_switch_port_schedule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortSchedulesApi->updateNetworkSwitchPortSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **port_schedule_id** | **string**| Port schedule ID | |
| **update_network_switch_port_schedule_request** | [**\Meraki\Model\UpdateNetworkSwitchPortScheduleRequest**](../Model/UpdateNetworkSwitchPortScheduleRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchPortSchedules200ResponseInner**](../Model/GetNetworkSwitchPortSchedules200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
