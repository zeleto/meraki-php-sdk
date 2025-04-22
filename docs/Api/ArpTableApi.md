# Meraki\ArpTableApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDeviceLiveToolsArpTable()**](ArpTableApi.md#createDeviceLiveToolsArpTable) | **POST** /devices/{serial}/liveTools/arpTable | Enqueue a job to perform a ARP table request for the device |
| [**getDeviceLiveToolsArpTable()**](ArpTableApi.md#getDeviceLiveToolsArpTable) | **GET** /devices/{serial}/liveTools/arpTable/{arpTableId} | Return an ARP table live tool job. |


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


$apiInstance = new Meraki\Api\ArpTableApi(
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
    echo 'Exception when calling ArpTableApi->createDeviceLiveToolsArpTable: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\ArpTableApi(
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
    echo 'Exception when calling ArpTableApi->getDeviceLiveToolsArpTable: ', $e->getMessage(), PHP_EOL;
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
