# Meraki\AuthenticationTokenApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDeviceApplianceVmxAuthenticationToken()**](AuthenticationTokenApi.md#createDeviceApplianceVmxAuthenticationToken) | **POST** /devices/{serial}/appliance/vmx/authenticationToken | Generate a new vMX authentication token |


## `createDeviceApplianceVmxAuthenticationToken()`

```php
createDeviceApplianceVmxAuthenticationToken($serial): \Meraki\Model\CreateDeviceApplianceVmxAuthenticationToken201Response
```

Generate a new vMX authentication token

Generate a new vMX authentication token

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


$apiInstance = new Meraki\Api\AuthenticationTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->createDeviceApplianceVmxAuthenticationToken($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationTokenApi->createDeviceApplianceVmxAuthenticationToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\CreateDeviceApplianceVmxAuthenticationToken201Response**](../Model/CreateDeviceApplianceVmxAuthenticationToken201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
