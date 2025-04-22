# Meraki\SchedulesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkCameraSchedules()**](SchedulesApi.md#getNetworkCameraSchedules) | **GET** /networks/{networkId}/camera/schedules | Returns a list of all camera recording schedules. |
| [**getNetworkWirelessSsidSchedules()**](SchedulesApi.md#getNetworkWirelessSsidSchedules) | **GET** /networks/{networkId}/wireless/ssids/{number}/schedules | List the outage schedule for the SSID |
| [**updateNetworkWirelessSsidSchedules()**](SchedulesApi.md#updateNetworkWirelessSsidSchedules) | **PUT** /networks/{networkId}/wireless/ssids/{number}/schedules | Update the outage schedule for the SSID |


## `getNetworkCameraSchedules()`

```php
getNetworkCameraSchedules($network_id): \Meraki\Model\GetNetworkCameraSchedules200ResponseInner[]
```

Returns a list of all camera recording schedules.

Returns a list of all camera recording schedules.

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


$apiInstance = new Meraki\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkCameraSchedules($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->getNetworkCameraSchedules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkCameraSchedules200ResponseInner[]**](../Model/GetNetworkCameraSchedules200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSsidSchedules()`

```php
getNetworkWirelessSsidSchedules($network_id, $number): \Meraki\Model\GetNetworkWirelessSsidSchedules200Response
```

List the outage schedule for the SSID

List the outage schedule for the SSID

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


$apiInstance = new Meraki\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidSchedules($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->getNetworkWirelessSsidSchedules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidSchedules200Response**](../Model/GetNetworkWirelessSsidSchedules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessSsidSchedules()`

```php
updateNetworkWirelessSsidSchedules($network_id, $number, $update_network_wireless_ssid_schedules_request): \Meraki\Model\GetNetworkWirelessSsidSchedules200Response
```

Update the outage schedule for the SSID

Update the outage schedule for the SSID

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


$apiInstance = new Meraki\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_schedules_request = new \Meraki\Model\UpdateNetworkWirelessSsidSchedulesRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidSchedulesRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsidSchedules($network_id, $number, $update_network_wireless_ssid_schedules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->updateNetworkWirelessSsidSchedules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_schedules_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidSchedulesRequest**](../Model/UpdateNetworkWirelessSsidSchedulesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidSchedules200Response**](../Model/GetNetworkWirelessSsidSchedules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
