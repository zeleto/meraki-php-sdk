# Meraki\IdentityPsksApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkWirelessSsidIdentityPsk()**](IdentityPsksApi.md#createNetworkWirelessSsidIdentityPsk) | **POST** /networks/{networkId}/wireless/ssids/{number}/identityPsks | Create an Identity PSK |
| [**deleteNetworkWirelessSsidIdentityPsk()**](IdentityPsksApi.md#deleteNetworkWirelessSsidIdentityPsk) | **DELETE** /networks/{networkId}/wireless/ssids/{number}/identityPsks/{identityPskId} | Delete an Identity PSK |
| [**getNetworkWirelessSsidIdentityPsk()**](IdentityPsksApi.md#getNetworkWirelessSsidIdentityPsk) | **GET** /networks/{networkId}/wireless/ssids/{number}/identityPsks/{identityPskId} | Return an Identity PSK |
| [**getNetworkWirelessSsidIdentityPsks()**](IdentityPsksApi.md#getNetworkWirelessSsidIdentityPsks) | **GET** /networks/{networkId}/wireless/ssids/{number}/identityPsks | List all Identity PSKs in a wireless network |
| [**updateNetworkWirelessSsidIdentityPsk()**](IdentityPsksApi.md#updateNetworkWirelessSsidIdentityPsk) | **PUT** /networks/{networkId}/wireless/ssids/{number}/identityPsks/{identityPskId} | Update an Identity PSK |


## `createNetworkWirelessSsidIdentityPsk()`

```php
createNetworkWirelessSsidIdentityPsk($network_id, $number, $create_network_wireless_ssid_identity_psk_request): \Meraki\Model\GetNetworkWirelessSsidIdentityPsks200ResponseInner
```

Create an Identity PSK

Create an Identity PSK

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


$apiInstance = new Meraki\Api\IdentityPsksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$create_network_wireless_ssid_identity_psk_request = new \Meraki\Model\CreateNetworkWirelessSsidIdentityPskRequest(); // \Meraki\Model\CreateNetworkWirelessSsidIdentityPskRequest

try {
    $result = $apiInstance->createNetworkWirelessSsidIdentityPsk($network_id, $number, $create_network_wireless_ssid_identity_psk_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityPsksApi->createNetworkWirelessSsidIdentityPsk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **create_network_wireless_ssid_identity_psk_request** | [**\Meraki\Model\CreateNetworkWirelessSsidIdentityPskRequest**](../Model/CreateNetworkWirelessSsidIdentityPskRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidIdentityPsks200ResponseInner**](../Model/GetNetworkWirelessSsidIdentityPsks200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkWirelessSsidIdentityPsk()`

```php
deleteNetworkWirelessSsidIdentityPsk($network_id, $number, $identity_psk_id)
```

Delete an Identity PSK

Delete an Identity PSK

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


$apiInstance = new Meraki\Api\IdentityPsksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$identity_psk_id = 'identity_psk_id_example'; // string | Identity psk ID

try {
    $apiInstance->deleteNetworkWirelessSsidIdentityPsk($network_id, $number, $identity_psk_id);
} catch (Exception $e) {
    echo 'Exception when calling IdentityPsksApi->deleteNetworkWirelessSsidIdentityPsk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **identity_psk_id** | **string**| Identity psk ID | |

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

## `getNetworkWirelessSsidIdentityPsk()`

```php
getNetworkWirelessSsidIdentityPsk($network_id, $number, $identity_psk_id): \Meraki\Model\GetNetworkWirelessSsidIdentityPsks200ResponseInner
```

Return an Identity PSK

Return an Identity PSK

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


$apiInstance = new Meraki\Api\IdentityPsksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$identity_psk_id = 'identity_psk_id_example'; // string | Identity psk ID

try {
    $result = $apiInstance->getNetworkWirelessSsidIdentityPsk($network_id, $number, $identity_psk_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityPsksApi->getNetworkWirelessSsidIdentityPsk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **identity_psk_id** | **string**| Identity psk ID | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidIdentityPsks200ResponseInner**](../Model/GetNetworkWirelessSsidIdentityPsks200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSsidIdentityPsks()`

```php
getNetworkWirelessSsidIdentityPsks($network_id, $number): \Meraki\Model\GetNetworkWirelessSsidIdentityPsks200ResponseInner[]
```

List all Identity PSKs in a wireless network

List all Identity PSKs in a wireless network

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


$apiInstance = new Meraki\Api\IdentityPsksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidIdentityPsks($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityPsksApi->getNetworkWirelessSsidIdentityPsks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidIdentityPsks200ResponseInner[]**](../Model/GetNetworkWirelessSsidIdentityPsks200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessSsidIdentityPsk()`

```php
updateNetworkWirelessSsidIdentityPsk($network_id, $number, $identity_psk_id, $update_network_wireless_ssid_identity_psk_request): \Meraki\Model\GetNetworkWirelessSsidIdentityPsks200ResponseInner
```

Update an Identity PSK

Update an Identity PSK

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


$apiInstance = new Meraki\Api\IdentityPsksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$identity_psk_id = 'identity_psk_id_example'; // string | Identity psk ID
$update_network_wireless_ssid_identity_psk_request = new \Meraki\Model\UpdateNetworkWirelessSsidIdentityPskRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidIdentityPskRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsidIdentityPsk($network_id, $number, $identity_psk_id, $update_network_wireless_ssid_identity_psk_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityPsksApi->updateNetworkWirelessSsidIdentityPsk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **identity_psk_id** | **string**| Identity psk ID | |
| **update_network_wireless_ssid_identity_psk_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidIdentityPskRequest**](../Model/UpdateNetworkWirelessSsidIdentityPskRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidIdentityPsks200ResponseInner**](../Model/GetNetworkWirelessSsidIdentityPsks200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
