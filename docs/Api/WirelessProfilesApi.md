# Meraki\WirelessProfilesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkCameraWirelessProfile()**](WirelessProfilesApi.md#createNetworkCameraWirelessProfile) | **POST** /networks/{networkId}/camera/wirelessProfiles | Creates a new camera wireless profile for this network. |
| [**deleteNetworkCameraWirelessProfile()**](WirelessProfilesApi.md#deleteNetworkCameraWirelessProfile) | **DELETE** /networks/{networkId}/camera/wirelessProfiles/{wirelessProfileId} | Delete an existing camera wireless profile for this network. |
| [**getDeviceCameraWirelessProfiles()**](WirelessProfilesApi.md#getDeviceCameraWirelessProfiles) | **GET** /devices/{serial}/camera/wirelessProfiles | Returns wireless profile assigned to the given camera |
| [**getNetworkCameraWirelessProfile()**](WirelessProfilesApi.md#getNetworkCameraWirelessProfile) | **GET** /networks/{networkId}/camera/wirelessProfiles/{wirelessProfileId} | Retrieve a single camera wireless profile. |
| [**getNetworkCameraWirelessProfiles()**](WirelessProfilesApi.md#getNetworkCameraWirelessProfiles) | **GET** /networks/{networkId}/camera/wirelessProfiles | List the camera wireless profiles for this network. |
| [**updateDeviceCameraWirelessProfiles()**](WirelessProfilesApi.md#updateDeviceCameraWirelessProfiles) | **PUT** /devices/{serial}/camera/wirelessProfiles | Assign wireless profiles to the given camera |
| [**updateNetworkCameraWirelessProfile()**](WirelessProfilesApi.md#updateNetworkCameraWirelessProfile) | **PUT** /networks/{networkId}/camera/wirelessProfiles/{wirelessProfileId} | Update an existing camera wireless profile in this network. |


## `createNetworkCameraWirelessProfile()`

```php
createNetworkCameraWirelessProfile($network_id, $create_network_camera_wireless_profile_request): \Meraki\Model\GetNetworkCameraWirelessProfiles200ResponseInner
```

Creates a new camera wireless profile for this network.

Creates a new camera wireless profile for this network.

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


$apiInstance = new Meraki\Api\WirelessProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_camera_wireless_profile_request = new \Meraki\Model\CreateNetworkCameraWirelessProfileRequest(); // \Meraki\Model\CreateNetworkCameraWirelessProfileRequest

try {
    $result = $apiInstance->createNetworkCameraWirelessProfile($network_id, $create_network_camera_wireless_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessProfilesApi->createNetworkCameraWirelessProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_camera_wireless_profile_request** | [**\Meraki\Model\CreateNetworkCameraWirelessProfileRequest**](../Model/CreateNetworkCameraWirelessProfileRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkCameraWirelessProfiles200ResponseInner**](../Model/GetNetworkCameraWirelessProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkCameraWirelessProfile()`

```php
deleteNetworkCameraWirelessProfile($network_id, $wireless_profile_id)
```

Delete an existing camera wireless profile for this network.

Delete an existing camera wireless profile for this network.

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


$apiInstance = new Meraki\Api\WirelessProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$wireless_profile_id = 'wireless_profile_id_example'; // string | Wireless profile ID

try {
    $apiInstance->deleteNetworkCameraWirelessProfile($network_id, $wireless_profile_id);
} catch (Exception $e) {
    echo 'Exception when calling WirelessProfilesApi->deleteNetworkCameraWirelessProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **wireless_profile_id** | **string**| Wireless profile ID | |

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

## `getDeviceCameraWirelessProfiles()`

```php
getDeviceCameraWirelessProfiles($serial): object
```

Returns wireless profile assigned to the given camera

Returns wireless profile assigned to the given camera

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


$apiInstance = new Meraki\Api\WirelessProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceCameraWirelessProfiles($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessProfilesApi->getDeviceCameraWirelessProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

**object**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkCameraWirelessProfile()`

```php
getNetworkCameraWirelessProfile($network_id, $wireless_profile_id): \Meraki\Model\GetNetworkCameraWirelessProfiles200ResponseInner
```

Retrieve a single camera wireless profile.

Retrieve a single camera wireless profile.

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


$apiInstance = new Meraki\Api\WirelessProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$wireless_profile_id = 'wireless_profile_id_example'; // string | Wireless profile ID

try {
    $result = $apiInstance->getNetworkCameraWirelessProfile($network_id, $wireless_profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessProfilesApi->getNetworkCameraWirelessProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **wireless_profile_id** | **string**| Wireless profile ID | |

### Return type

[**\Meraki\Model\GetNetworkCameraWirelessProfiles200ResponseInner**](../Model/GetNetworkCameraWirelessProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkCameraWirelessProfiles()`

```php
getNetworkCameraWirelessProfiles($network_id): \Meraki\Model\GetNetworkCameraWirelessProfiles200ResponseInner[]
```

List the camera wireless profiles for this network.

List the camera wireless profiles for this network.

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


$apiInstance = new Meraki\Api\WirelessProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkCameraWirelessProfiles($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessProfilesApi->getNetworkCameraWirelessProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkCameraWirelessProfiles200ResponseInner[]**](../Model/GetNetworkCameraWirelessProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceCameraWirelessProfiles()`

```php
updateDeviceCameraWirelessProfiles($serial, $update_device_camera_wireless_profiles_request): object
```

Assign wireless profiles to the given camera

Assign wireless profiles to the given camera. Incremental updates are not supported, all profile assignment need to be supplied at once.

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


$apiInstance = new Meraki\Api\WirelessProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_camera_wireless_profiles_request = new \Meraki\Model\UpdateDeviceCameraWirelessProfilesRequest(); // \Meraki\Model\UpdateDeviceCameraWirelessProfilesRequest

try {
    $result = $apiInstance->updateDeviceCameraWirelessProfiles($serial, $update_device_camera_wireless_profiles_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessProfilesApi->updateDeviceCameraWirelessProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_camera_wireless_profiles_request** | [**\Meraki\Model\UpdateDeviceCameraWirelessProfilesRequest**](../Model/UpdateDeviceCameraWirelessProfilesRequest.md)|  | |

### Return type

**object**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkCameraWirelessProfile()`

```php
updateNetworkCameraWirelessProfile($network_id, $wireless_profile_id, $update_network_camera_wireless_profile_request): \Meraki\Model\GetNetworkCameraWirelessProfiles200ResponseInner
```

Update an existing camera wireless profile in this network.

Update an existing camera wireless profile in this network.

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


$apiInstance = new Meraki\Api\WirelessProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$wireless_profile_id = 'wireless_profile_id_example'; // string | Wireless profile ID
$update_network_camera_wireless_profile_request = new \Meraki\Model\UpdateNetworkCameraWirelessProfileRequest(); // \Meraki\Model\UpdateNetworkCameraWirelessProfileRequest

try {
    $result = $apiInstance->updateNetworkCameraWirelessProfile($network_id, $wireless_profile_id, $update_network_camera_wireless_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessProfilesApi->updateNetworkCameraWirelessProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **wireless_profile_id** | **string**| Wireless profile ID | |
| **update_network_camera_wireless_profile_request** | [**\Meraki\Model\UpdateNetworkCameraWirelessProfileRequest**](../Model/UpdateNetworkCameraWirelessProfileRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkCameraWirelessProfiles200ResponseInner**](../Model/GetNetworkCameraWirelessProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
