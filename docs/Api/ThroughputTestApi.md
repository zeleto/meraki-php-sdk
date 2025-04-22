# Meraki\ThroughputTestApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDeviceLiveToolsThroughputTest()**](ThroughputTestApi.md#createDeviceLiveToolsThroughputTest) | **POST** /devices/{serial}/liveTools/throughputTest | Enqueue a job to test a device throughput, the test will run for 10 secs to test throughput |
| [**getDeviceLiveToolsThroughputTest()**](ThroughputTestApi.md#getDeviceLiveToolsThroughputTest) | **GET** /devices/{serial}/liveTools/throughputTest/{throughputTestId} | Return a throughput test job |


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


$apiInstance = new Meraki\Api\ThroughputTestApi(
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
    echo 'Exception when calling ThroughputTestApi->createDeviceLiveToolsThroughputTest: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\ThroughputTestApi(
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
    echo 'Exception when calling ThroughputTestApi->getDeviceLiveToolsThroughputTest: ', $e->getMessage(), PHP_EOL;
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
