# Meraki\LanApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDeviceCellularGatewayLan()**](LanApi.md#getDeviceCellularGatewayLan) | **GET** /devices/{serial}/cellularGateway/lan | Show the LAN Settings of a MG |
| [**updateDeviceCellularGatewayLan()**](LanApi.md#updateDeviceCellularGatewayLan) | **PUT** /devices/{serial}/cellularGateway/lan | Update the LAN Settings for a single MG. |


## `getDeviceCellularGatewayLan()`

```php
getDeviceCellularGatewayLan($serial): \Meraki\Model\GetDeviceCellularGatewayLan200Response
```

Show the LAN Settings of a MG

Show the LAN Settings of a MG

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


$apiInstance = new Meraki\Api\LanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceCellularGatewayLan($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LanApi->getDeviceCellularGatewayLan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceCellularGatewayLan200Response**](../Model/GetDeviceCellularGatewayLan200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceCellularGatewayLan()`

```php
updateDeviceCellularGatewayLan($serial, $update_device_cellular_gateway_lan_request): \Meraki\Model\GetDeviceCellularGatewayLan200Response
```

Update the LAN Settings for a single MG.

Update the LAN Settings for a single MG.

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


$apiInstance = new Meraki\Api\LanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_cellular_gateway_lan_request = new \Meraki\Model\UpdateDeviceCellularGatewayLanRequest(); // \Meraki\Model\UpdateDeviceCellularGatewayLanRequest

try {
    $result = $apiInstance->updateDeviceCellularGatewayLan($serial, $update_device_cellular_gateway_lan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LanApi->updateDeviceCellularGatewayLan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_cellular_gateway_lan_request** | [**\Meraki\Model\UpdateDeviceCellularGatewayLanRequest**](../Model/UpdateDeviceCellularGatewayLanRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceCellularGatewayLan200Response**](../Model/GetDeviceCellularGatewayLan200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
