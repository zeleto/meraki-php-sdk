# Meraki\LiveToolsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**blinkDeviceLeds()**](LiveToolsApi.md#blinkDeviceLeds) | **POST** /devices/{serial}/blinkLeds | Blink the LEDs on a device |
| [**createDeviceLiveToolsArpTable()**](LiveToolsApi.md#createDeviceLiveToolsArpTable) | **POST** /devices/{serial}/liveTools/arpTable | Enqueue a job to perform a ARP table request for the device |
| [**createDeviceLiveToolsCableTest()**](LiveToolsApi.md#createDeviceLiveToolsCableTest) | **POST** /devices/{serial}/liveTools/cableTest | Enqueue a job to perform a cable test for the device on the specified ports |
| [**createDeviceLiveToolsLedsBlink()**](LiveToolsApi.md#createDeviceLiveToolsLedsBlink) | **POST** /devices/{serial}/liveTools/leds/blink | Enqueue a job to blink LEDs on a device |
| [**createDeviceLiveToolsPing()**](LiveToolsApi.md#createDeviceLiveToolsPing) | **POST** /devices/{serial}/liveTools/ping | Enqueue a job to ping a target host from the device |
| [**createDeviceLiveToolsPingDevice()**](LiveToolsApi.md#createDeviceLiveToolsPingDevice) | **POST** /devices/{serial}/liveTools/pingDevice | Enqueue a job to check connectivity status to the device |
| [**createDeviceLiveToolsThroughputTest()**](LiveToolsApi.md#createDeviceLiveToolsThroughputTest) | **POST** /devices/{serial}/liveTools/throughputTest | Enqueue a job to test a device throughput, the test will run for 10 secs to test throughput |
| [**createDeviceLiveToolsWakeOnLan()**](LiveToolsApi.md#createDeviceLiveToolsWakeOnLan) | **POST** /devices/{serial}/liveTools/wakeOnLan | Enqueue a job to send a Wake-on-LAN packet from the device |
| [**cycleDeviceSwitchPorts()**](LiveToolsApi.md#cycleDeviceSwitchPorts) | **POST** /devices/{serial}/switch/ports/cycle | Cycle a set of switch ports |
| [**getDeviceLiveToolsArpTable()**](LiveToolsApi.md#getDeviceLiveToolsArpTable) | **GET** /devices/{serial}/liveTools/arpTable/{arpTableId} | Return an ARP table live tool job. |
| [**getDeviceLiveToolsCableTest()**](LiveToolsApi.md#getDeviceLiveToolsCableTest) | **GET** /devices/{serial}/liveTools/cableTest/{id} | Return a cable test live tool job. |
| [**getDeviceLiveToolsLedsBlink()**](LiveToolsApi.md#getDeviceLiveToolsLedsBlink) | **GET** /devices/{serial}/liveTools/leds/blink/{ledsBlinkId} | Return a blink LEDs job |
| [**getDeviceLiveToolsPing()**](LiveToolsApi.md#getDeviceLiveToolsPing) | **GET** /devices/{serial}/liveTools/ping/{id} | Return a ping job |
| [**getDeviceLiveToolsPingDevice()**](LiveToolsApi.md#getDeviceLiveToolsPingDevice) | **GET** /devices/{serial}/liveTools/pingDevice/{id} | Return a ping device job |
| [**getDeviceLiveToolsThroughputTest()**](LiveToolsApi.md#getDeviceLiveToolsThroughputTest) | **GET** /devices/{serial}/liveTools/throughputTest/{throughputTestId} | Return a throughput test job |
| [**getDeviceLiveToolsWakeOnLan()**](LiveToolsApi.md#getDeviceLiveToolsWakeOnLan) | **GET** /devices/{serial}/liveTools/wakeOnLan/{wakeOnLanId} | Return a Wake-on-LAN job |
| [**rebootDevice()**](LiveToolsApi.md#rebootDevice) | **POST** /devices/{serial}/reboot | Reboot a device |


## `blinkDeviceLeds()`

```php
blinkDeviceLeds($serial, $blink_device_leds_request): \Meraki\Model\BlinkDeviceLeds202Response
```

Blink the LEDs on a device

Blink the LEDs on a device.  This endpoint is deprecrated in favor of \"/devices/{serial}/liveTools/leds/blink\".

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


$apiInstance = new Meraki\Api\LiveToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$blink_device_leds_request = new \Meraki\Model\BlinkDeviceLedsRequest(); // \Meraki\Model\BlinkDeviceLedsRequest

try {
    $result = $apiInstance->blinkDeviceLeds($serial, $blink_device_leds_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveToolsApi->blinkDeviceLeds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **blink_device_leds_request** | [**\Meraki\Model\BlinkDeviceLedsRequest**](../Model/BlinkDeviceLedsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\BlinkDeviceLeds202Response**](../Model/BlinkDeviceLeds202Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDeviceLiveToolsArpTable()`

```php
createDeviceLiveToolsArpTable($serial, $create_device_live_tools_arp_table_request): \Meraki\Model\CreateDeviceLiveToolsArpTable201Response
```

Enqueue a job to perform a ARP table request for the device

Enqueue a job to perform a ARP table request for the device. This endpoint currently supports switches. This endpoint has a sustained rate limit of one request every five seconds per device, with an allowed burst of five requests.

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


$apiInstance = new Meraki\Api\LiveToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$create_device_live_tools_arp_table_request = new \Meraki\Model\CreateDeviceLiveToolsArpTableRequest(); // \Meraki\Model\CreateDeviceLiveToolsArpTableRequest

try {
    $result = $apiInstance->createDeviceLiveToolsArpTable($serial, $create_device_live_tools_arp_table_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveToolsApi->createDeviceLiveToolsArpTable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **create_device_live_tools_arp_table_request** | [**\Meraki\Model\CreateDeviceLiveToolsArpTableRequest**](../Model/CreateDeviceLiveToolsArpTableRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\CreateDeviceLiveToolsArpTable201Response**](../Model/CreateDeviceLiveToolsArpTable201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDeviceLiveToolsCableTest()`

```php
createDeviceLiveToolsCableTest($serial, $create_device_live_tools_cable_test_request): \Meraki\Model\CreateDeviceLiveToolsCableTest201Response
```

Enqueue a job to perform a cable test for the device on the specified ports

Enqueue a job to perform a cable test for the device on the specified ports. This endpoint has a sustained rate limit of one request every five seconds per device, with an allowed burst of five requests.

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


$apiInstance = new Meraki\Api\LiveToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$create_device_live_tools_cable_test_request = new \Meraki\Model\CreateDeviceLiveToolsCableTestRequest(); // \Meraki\Model\CreateDeviceLiveToolsCableTestRequest

try {
    $result = $apiInstance->createDeviceLiveToolsCableTest($serial, $create_device_live_tools_cable_test_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveToolsApi->createDeviceLiveToolsCableTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **create_device_live_tools_cable_test_request** | [**\Meraki\Model\CreateDeviceLiveToolsCableTestRequest**](../Model/CreateDeviceLiveToolsCableTestRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateDeviceLiveToolsCableTest201Response**](../Model/CreateDeviceLiveToolsCableTest201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDeviceLiveToolsLedsBlink()`

```php
createDeviceLiveToolsLedsBlink($serial, $create_device_live_tools_leds_blink_request): \Meraki\Model\CreateDeviceLiveToolsLedsBlink201Response
```

Enqueue a job to blink LEDs on a device

Enqueue a job to blink LEDs on a device. This endpoint has a rate limit of one request every 10 seconds.

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


$apiInstance = new Meraki\Api\LiveToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$create_device_live_tools_leds_blink_request = new \Meraki\Model\CreateDeviceLiveToolsLedsBlinkRequest(); // \Meraki\Model\CreateDeviceLiveToolsLedsBlinkRequest

try {
    $result = $apiInstance->createDeviceLiveToolsLedsBlink($serial, $create_device_live_tools_leds_blink_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveToolsApi->createDeviceLiveToolsLedsBlink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **create_device_live_tools_leds_blink_request** | [**\Meraki\Model\CreateDeviceLiveToolsLedsBlinkRequest**](../Model/CreateDeviceLiveToolsLedsBlinkRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateDeviceLiveToolsLedsBlink201Response**](../Model/CreateDeviceLiveToolsLedsBlink201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDeviceLiveToolsPing()`

```php
createDeviceLiveToolsPing($serial, $create_device_live_tools_ping_request): \Meraki\Model\CreateDeviceLiveToolsPing201Response
```

Enqueue a job to ping a target host from the device

Enqueue a job to ping a target host from the device. This endpoint has a sustained rate limit of one request every five seconds per device, with an allowed burst of five requests.

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


$apiInstance = new Meraki\Api\LiveToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$create_device_live_tools_ping_request = new \Meraki\Model\CreateDeviceLiveToolsPingRequest(); // \Meraki\Model\CreateDeviceLiveToolsPingRequest

try {
    $result = $apiInstance->createDeviceLiveToolsPing($serial, $create_device_live_tools_ping_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveToolsApi->createDeviceLiveToolsPing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **create_device_live_tools_ping_request** | [**\Meraki\Model\CreateDeviceLiveToolsPingRequest**](../Model/CreateDeviceLiveToolsPingRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateDeviceLiveToolsPing201Response**](../Model/CreateDeviceLiveToolsPing201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDeviceLiveToolsPingDevice()`

```php
createDeviceLiveToolsPingDevice($serial, $create_device_live_tools_ping_device_request): \Meraki\Model\CreateDeviceLiveToolsPingDevice201Response
```

Enqueue a job to check connectivity status to the device

Enqueue a job to check connectivity status to the device. This endpoint has a sustained rate limit of one request every five seconds per device, with an allowed burst of five requests.

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


$apiInstance = new Meraki\Api\LiveToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$create_device_live_tools_ping_device_request = new \Meraki\Model\CreateDeviceLiveToolsPingDeviceRequest(); // \Meraki\Model\CreateDeviceLiveToolsPingDeviceRequest

try {
    $result = $apiInstance->createDeviceLiveToolsPingDevice($serial, $create_device_live_tools_ping_device_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveToolsApi->createDeviceLiveToolsPingDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **create_device_live_tools_ping_device_request** | [**\Meraki\Model\CreateDeviceLiveToolsPingDeviceRequest**](../Model/CreateDeviceLiveToolsPingDeviceRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\CreateDeviceLiveToolsPingDevice201Response**](../Model/CreateDeviceLiveToolsPingDevice201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDeviceLiveToolsThroughputTest()`

```php
createDeviceLiveToolsThroughputTest($serial, $create_device_live_tools_arp_table_request): \Meraki\Model\CreateDeviceLiveToolsThroughputTest201Response
```

Enqueue a job to test a device throughput, the test will run for 10 secs to test throughput

Enqueue a job to test a device throughput, the test will run for 10 secs to test throughput. This endpoint has a rate limit of one request every five seconds per device.

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


$apiInstance = new Meraki\Api\LiveToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$create_device_live_tools_arp_table_request = new \Meraki\Model\CreateDeviceLiveToolsArpTableRequest(); // \Meraki\Model\CreateDeviceLiveToolsArpTableRequest

try {
    $result = $apiInstance->createDeviceLiveToolsThroughputTest($serial, $create_device_live_tools_arp_table_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveToolsApi->createDeviceLiveToolsThroughputTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **create_device_live_tools_arp_table_request** | [**\Meraki\Model\CreateDeviceLiveToolsArpTableRequest**](../Model/CreateDeviceLiveToolsArpTableRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\CreateDeviceLiveToolsThroughputTest201Response**](../Model/CreateDeviceLiveToolsThroughputTest201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDeviceLiveToolsWakeOnLan()`

```php
createDeviceLiveToolsWakeOnLan($serial, $create_device_live_tools_wake_on_lan_request): \Meraki\Model\CreateDeviceLiveToolsWakeOnLan201Response
```

Enqueue a job to send a Wake-on-LAN packet from the device

Enqueue a job to send a Wake-on-LAN packet from the device. This endpoint has a sustained rate limit of one request every five seconds per device, with an allowed burst of five requests.

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


$apiInstance = new Meraki\Api\LiveToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$create_device_live_tools_wake_on_lan_request = new \Meraki\Model\CreateDeviceLiveToolsWakeOnLanRequest(); // \Meraki\Model\CreateDeviceLiveToolsWakeOnLanRequest

try {
    $result = $apiInstance->createDeviceLiveToolsWakeOnLan($serial, $create_device_live_tools_wake_on_lan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveToolsApi->createDeviceLiveToolsWakeOnLan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **create_device_live_tools_wake_on_lan_request** | [**\Meraki\Model\CreateDeviceLiveToolsWakeOnLanRequest**](../Model/CreateDeviceLiveToolsWakeOnLanRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateDeviceLiveToolsWakeOnLan201Response**](../Model/CreateDeviceLiveToolsWakeOnLan201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cycleDeviceSwitchPorts()`

```php
cycleDeviceSwitchPorts($serial, $cycle_device_switch_ports_request): \Meraki\Model\CycleDeviceSwitchPorts200Response
```

Cycle a set of switch ports

Cycle a set of switch ports

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


$apiInstance = new Meraki\Api\LiveToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$cycle_device_switch_ports_request = new \Meraki\Model\CycleDeviceSwitchPortsRequest(); // \Meraki\Model\CycleDeviceSwitchPortsRequest

try {
    $result = $apiInstance->cycleDeviceSwitchPorts($serial, $cycle_device_switch_ports_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveToolsApi->cycleDeviceSwitchPorts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **cycle_device_switch_ports_request** | [**\Meraki\Model\CycleDeviceSwitchPortsRequest**](../Model/CycleDeviceSwitchPortsRequest.md)|  | |

### Return type

[**\Meraki\Model\CycleDeviceSwitchPorts200Response**](../Model/CycleDeviceSwitchPorts200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceLiveToolsArpTable()`

```php
getDeviceLiveToolsArpTable($serial, $arp_table_id): \Meraki\Model\DevicesSerialLiveToolsArpTablePostRequestMessage
```

Return an ARP table live tool job.

Return an ARP table live tool job.

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


$apiInstance = new Meraki\Api\LiveToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$arp_table_id = 'arp_table_id_example'; // string | Arp table ID

try {
    $result = $apiInstance->getDeviceLiveToolsArpTable($serial, $arp_table_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveToolsApi->getDeviceLiveToolsArpTable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **arp_table_id** | **string**| Arp table ID | |

### Return type

[**\Meraki\Model\DevicesSerialLiveToolsArpTablePostRequestMessage**](../Model/DevicesSerialLiveToolsArpTablePostRequestMessage.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceLiveToolsCableTest()`

```php
getDeviceLiveToolsCableTest($serial, $id): \Meraki\Model\DevicesSerialLiveToolsCableTestPostRequestMessage
```

Return a cable test live tool job.

Return a cable test live tool job.

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


$apiInstance = new Meraki\Api\LiveToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$id = 'id_example'; // string | ID

try {
    $result = $apiInstance->getDeviceLiveToolsCableTest($serial, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveToolsApi->getDeviceLiveToolsCableTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **id** | **string**| ID | |

### Return type

[**\Meraki\Model\DevicesSerialLiveToolsCableTestPostRequestMessage**](../Model/DevicesSerialLiveToolsCableTestPostRequestMessage.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceLiveToolsLedsBlink()`

```php
getDeviceLiveToolsLedsBlink($serial, $leds_blink_id): \Meraki\Model\DevicesSerialLiveToolsLedsBlinkPostRequestMessage
```

Return a blink LEDs job

Return a blink LEDs job

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


$apiInstance = new Meraki\Api\LiveToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$leds_blink_id = 'leds_blink_id_example'; // string | Leds blink ID

try {
    $result = $apiInstance->getDeviceLiveToolsLedsBlink($serial, $leds_blink_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveToolsApi->getDeviceLiveToolsLedsBlink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **leds_blink_id** | **string**| Leds blink ID | |

### Return type

[**\Meraki\Model\DevicesSerialLiveToolsLedsBlinkPostRequestMessage**](../Model/DevicesSerialLiveToolsLedsBlinkPostRequestMessage.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceLiveToolsPing()`

```php
getDeviceLiveToolsPing($serial, $id): \Meraki\Model\DevicesSerialLiveToolsPingPostRequestMessage
```

Return a ping job

Return a ping job. Latency unit in response is in milliseconds. Size is in bytes.

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


$apiInstance = new Meraki\Api\LiveToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$id = 'id_example'; // string | ID

try {
    $result = $apiInstance->getDeviceLiveToolsPing($serial, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveToolsApi->getDeviceLiveToolsPing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **id** | **string**| ID | |

### Return type

[**\Meraki\Model\DevicesSerialLiveToolsPingPostRequestMessage**](../Model/DevicesSerialLiveToolsPingPostRequestMessage.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceLiveToolsPingDevice()`

```php
getDeviceLiveToolsPingDevice($serial, $id): \Meraki\Model\GetDeviceLiveToolsPingDevice200Response
```

Return a ping device job

Return a ping device job. Latency unit in response is in milliseconds. Size is in bytes.

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


$apiInstance = new Meraki\Api\LiveToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$id = 'id_example'; // string | ID

try {
    $result = $apiInstance->getDeviceLiveToolsPingDevice($serial, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveToolsApi->getDeviceLiveToolsPingDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **id** | **string**| ID | |

### Return type

[**\Meraki\Model\GetDeviceLiveToolsPingDevice200Response**](../Model/GetDeviceLiveToolsPingDevice200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceLiveToolsThroughputTest()`

```php
getDeviceLiveToolsThroughputTest($serial, $throughput_test_id): \Meraki\Model\DevicesSerialLiveToolsThroughputTestPostRequestMessage
```

Return a throughput test job

Return a throughput test job

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


$apiInstance = new Meraki\Api\LiveToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$throughput_test_id = 'throughput_test_id_example'; // string | Throughput test ID

try {
    $result = $apiInstance->getDeviceLiveToolsThroughputTest($serial, $throughput_test_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveToolsApi->getDeviceLiveToolsThroughputTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **throughput_test_id** | **string**| Throughput test ID | |

### Return type

[**\Meraki\Model\DevicesSerialLiveToolsThroughputTestPostRequestMessage**](../Model/DevicesSerialLiveToolsThroughputTestPostRequestMessage.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceLiveToolsWakeOnLan()`

```php
getDeviceLiveToolsWakeOnLan($serial, $wake_on_lan_id): \Meraki\Model\DevicesSerialLiveToolsWakeOnLanPostRequestMessage
```

Return a Wake-on-LAN job

Return a Wake-on-LAN job

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


$apiInstance = new Meraki\Api\LiveToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$wake_on_lan_id = 'wake_on_lan_id_example'; // string | Wake on lan ID

try {
    $result = $apiInstance->getDeviceLiveToolsWakeOnLan($serial, $wake_on_lan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveToolsApi->getDeviceLiveToolsWakeOnLan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **wake_on_lan_id** | **string**| Wake on lan ID | |

### Return type

[**\Meraki\Model\DevicesSerialLiveToolsWakeOnLanPostRequestMessage**](../Model/DevicesSerialLiveToolsWakeOnLanPostRequestMessage.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rebootDevice()`

```php
rebootDevice($serial): \Meraki\Model\RebootDevice202Response
```

Reboot a device

Reboot a device. This endpoint has a sustained rate limit of one request every 60 seconds.

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


$apiInstance = new Meraki\Api\LiveToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->rebootDevice($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveToolsApi->rebootDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\RebootDevice202Response**](../Model/RebootDevice202Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
