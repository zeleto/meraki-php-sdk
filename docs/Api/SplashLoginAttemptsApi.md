# Meraki\SplashLoginAttemptsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkSplashLoginAttempts()**](SplashLoginAttemptsApi.md#getNetworkSplashLoginAttempts) | **GET** /networks/{networkId}/splashLoginAttempts | List the splash login attempts for a network |


## `getNetworkSplashLoginAttempts()`

```php
getNetworkSplashLoginAttempts($network_id, $ssid_number, $login_identifier, $timespan): \Meraki\Model\GetNetworkSplashLoginAttempts200ResponseInner[]
```

List the splash login attempts for a network

List the splash login attempts for a network

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


$apiInstance = new Meraki\Api\SplashLoginAttemptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$ssid_number = 56; // int | Only return the login attempts for the specified SSID
$login_identifier = 'login_identifier_example'; // string | The username, email, or phone number used during login
$timespan = 56; // int | The timespan, in seconds, for the login attempts. The period will be from [timespan] seconds ago until now. The maximum timespan is 3 months

try {
    $result = $apiInstance->getNetworkSplashLoginAttempts($network_id, $ssid_number, $login_identifier, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SplashLoginAttemptsApi->getNetworkSplashLoginAttempts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **ssid_number** | **int**| Only return the login attempts for the specified SSID | [optional] |
| **login_identifier** | **string**| The username, email, or phone number used during login | [optional] |
| **timespan** | **int**| The timespan, in seconds, for the login attempts. The period will be from [timespan] seconds ago until now. The maximum timespan is 3 months | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSplashLoginAttempts200ResponseInner[]**](../Model/GetNetworkSplashLoginAttempts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
