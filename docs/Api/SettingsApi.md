# Meraki\SettingsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDeviceApplianceRadioSettings()**](SettingsApi.md#getDeviceApplianceRadioSettings) | **GET** /devices/{serial}/appliance/radio/settings | Return the radio settings of an appliance |
| [**getDeviceApplianceUplinksSettings()**](SettingsApi.md#getDeviceApplianceUplinksSettings) | **GET** /devices/{serial}/appliance/uplinks/settings | Return the uplink settings for an MX appliance |
| [**getDeviceCameraVideoSettings()**](SettingsApi.md#getDeviceCameraVideoSettings) | **GET** /devices/{serial}/camera/video/settings | Returns video settings for the given camera |
| [**getDeviceWirelessBluetoothSettings()**](SettingsApi.md#getDeviceWirelessBluetoothSettings) | **GET** /devices/{serial}/wireless/bluetooth/settings | Return the bluetooth settings for a wireless device |
| [**getDeviceWirelessRadioSettings()**](SettingsApi.md#getDeviceWirelessRadioSettings) | **GET** /devices/{serial}/wireless/radio/settings | Return the manually configured radio settings overrides of a device, which take precedence over RF profiles. |
| [**getNetworkAlertsSettings()**](SettingsApi.md#getNetworkAlertsSettings) | **GET** /networks/{networkId}/alerts/settings | Return the alert configuration for this network |
| [**getNetworkApplianceFirewallSettings()**](SettingsApi.md#getNetworkApplianceFirewallSettings) | **GET** /networks/{networkId}/appliance/firewall/settings | Return the firewall settings for this network |
| [**getNetworkApplianceSettings()**](SettingsApi.md#getNetworkApplianceSettings) | **GET** /networks/{networkId}/appliance/settings | Return the appliance settings for a network |
| [**getNetworkApplianceVlansSettings()**](SettingsApi.md#getNetworkApplianceVlansSettings) | **GET** /networks/{networkId}/appliance/vlans/settings | Returns the enabled status of VLANs for the network |
| [**getNetworkSettings()**](SettingsApi.md#getNetworkSettings) | **GET** /networks/{networkId}/settings | Return the settings for a network |
| [**getNetworkSwitchSettings()**](SettingsApi.md#getNetworkSwitchSettings) | **GET** /networks/{networkId}/switch/settings | Returns the switch network settings |
| [**getNetworkWirelessBluetoothSettings()**](SettingsApi.md#getNetworkWirelessBluetoothSettings) | **GET** /networks/{networkId}/wireless/bluetooth/settings | Return the Bluetooth settings for a network. &lt;a href&#x3D;\&quot;https://documentation.meraki.com/MR/Bluetooth/Bluetooth_Low_Energy_(BLE)\&quot;&gt;Bluetooth settings&lt;/a&gt; must be enabled on the network. |
| [**getNetworkWirelessSettings()**](SettingsApi.md#getNetworkWirelessSettings) | **GET** /networks/{networkId}/wireless/settings | Return the wireless settings for a network |
| [**getNetworkWirelessSsidSplashSettings()**](SettingsApi.md#getNetworkWirelessSsidSplashSettings) | **GET** /networks/{networkId}/wireless/ssids/{number}/splash/settings | Display the splash page settings for the given SSID |
| [**getOrganizationAdaptivePolicySettings()**](SettingsApi.md#getOrganizationAdaptivePolicySettings) | **GET** /organizations/{organizationId}/adaptivePolicy/settings | Returns global adaptive policy settings in an organization |
| [**getOrganizationWirelessAirMarshalSettingsByNetwork()**](SettingsApi.md#getOrganizationWirelessAirMarshalSettingsByNetwork) | **GET** /organizations/{organizationId}/wireless/airMarshal/settings/byNetwork | Returns the current Air Marshal settings for this network |
| [**updateDeviceApplianceRadioSettings()**](SettingsApi.md#updateDeviceApplianceRadioSettings) | **PUT** /devices/{serial}/appliance/radio/settings | Update the radio settings of an appliance |
| [**updateDeviceApplianceUplinksSettings()**](SettingsApi.md#updateDeviceApplianceUplinksSettings) | **PUT** /devices/{serial}/appliance/uplinks/settings | Update the uplink settings for an MX appliance |
| [**updateDeviceCameraVideoSettings()**](SettingsApi.md#updateDeviceCameraVideoSettings) | **PUT** /devices/{serial}/camera/video/settings | Update video settings for the given camera |
| [**updateDeviceWirelessBluetoothSettings()**](SettingsApi.md#updateDeviceWirelessBluetoothSettings) | **PUT** /devices/{serial}/wireless/bluetooth/settings | Update the bluetooth settings for a wireless device |
| [**updateDeviceWirelessRadioSettings()**](SettingsApi.md#updateDeviceWirelessRadioSettings) | **PUT** /devices/{serial}/wireless/radio/settings | Update the radio settings overrides of a device, which take precedence over RF profiles. |
| [**updateNetworkAlertsSettings()**](SettingsApi.md#updateNetworkAlertsSettings) | **PUT** /networks/{networkId}/alerts/settings | Update the alert configuration for this network |
| [**updateNetworkApplianceFirewallSettings()**](SettingsApi.md#updateNetworkApplianceFirewallSettings) | **PUT** /networks/{networkId}/appliance/firewall/settings | Update the firewall settings for this network |
| [**updateNetworkApplianceSettings()**](SettingsApi.md#updateNetworkApplianceSettings) | **PUT** /networks/{networkId}/appliance/settings | Update the appliance settings for a network |
| [**updateNetworkApplianceVlansSettings()**](SettingsApi.md#updateNetworkApplianceVlansSettings) | **PUT** /networks/{networkId}/appliance/vlans/settings | Enable/Disable VLANs for the given network |
| [**updateNetworkSettings()**](SettingsApi.md#updateNetworkSettings) | **PUT** /networks/{networkId}/settings | Update the settings for a network |
| [**updateNetworkSwitchSettings()**](SettingsApi.md#updateNetworkSwitchSettings) | **PUT** /networks/{networkId}/switch/settings | Update switch network settings |
| [**updateNetworkWirelessAirMarshalSettings()**](SettingsApi.md#updateNetworkWirelessAirMarshalSettings) | **PUT** /networks/{networkId}/wireless/airMarshal/settings | Updates Air Marshal settings. |
| [**updateNetworkWirelessBluetoothSettings()**](SettingsApi.md#updateNetworkWirelessBluetoothSettings) | **PUT** /networks/{networkId}/wireless/bluetooth/settings | Update the Bluetooth settings for a network |
| [**updateNetworkWirelessSettings()**](SettingsApi.md#updateNetworkWirelessSettings) | **PUT** /networks/{networkId}/wireless/settings | Update the wireless settings for a network |
| [**updateNetworkWirelessSsidSplashSettings()**](SettingsApi.md#updateNetworkWirelessSsidSplashSettings) | **PUT** /networks/{networkId}/wireless/ssids/{number}/splash/settings | Modify the splash page settings for the given SSID |
| [**updateOrganizationAdaptivePolicySettings()**](SettingsApi.md#updateOrganizationAdaptivePolicySettings) | **PUT** /organizations/{organizationId}/adaptivePolicy/settings | Update global adaptive policy settings |


## `getDeviceApplianceRadioSettings()`

```php
getDeviceApplianceRadioSettings($serial): \Meraki\Model\GetDeviceApplianceRadioSettings200Response
```

Return the radio settings of an appliance

Return the radio settings of an appliance

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceApplianceRadioSettings($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getDeviceApplianceRadioSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceApplianceRadioSettings200Response**](../Model/GetDeviceApplianceRadioSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceApplianceUplinksSettings()`

```php
getDeviceApplianceUplinksSettings($serial): \Meraki\Model\GetDeviceApplianceUplinksSettings200Response
```

Return the uplink settings for an MX appliance

Return the uplink settings for an MX appliance

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceApplianceUplinksSettings($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getDeviceApplianceUplinksSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceApplianceUplinksSettings200Response**](../Model/GetDeviceApplianceUplinksSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceCameraVideoSettings()`

```php
getDeviceCameraVideoSettings($serial): \Meraki\Model\GetDeviceCameraVideoSettings200Response
```

Returns video settings for the given camera

Returns video settings for the given camera

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceCameraVideoSettings($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getDeviceCameraVideoSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceCameraVideoSettings200Response**](../Model/GetDeviceCameraVideoSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceWirelessBluetoothSettings()`

```php
getDeviceWirelessBluetoothSettings($serial): \Meraki\Model\GetDeviceWirelessBluetoothSettings200Response
```

Return the bluetooth settings for a wireless device

Return the bluetooth settings for a wireless device

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceWirelessBluetoothSettings($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getDeviceWirelessBluetoothSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceWirelessBluetoothSettings200Response**](../Model/GetDeviceWirelessBluetoothSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceWirelessRadioSettings()`

```php
getDeviceWirelessRadioSettings($serial): object
```

Return the manually configured radio settings overrides of a device, which take precedence over RF profiles.

Return the manually configured radio settings overrides of a device, which take precedence over RF profiles.

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceWirelessRadioSettings($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getDeviceWirelessRadioSettings: ', $e->getMessage(), PHP_EOL;
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

## `getNetworkAlertsSettings()`

```php
getNetworkAlertsSettings($network_id): \Meraki\Model\GetNetworkAlertsSettings200Response
```

Return the alert configuration for this network

Return the alert configuration for this network

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkAlertsSettings($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getNetworkAlertsSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkAlertsSettings200Response**](../Model/GetNetworkAlertsSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceFirewallSettings()`

```php
getNetworkApplianceFirewallSettings($network_id): object
```

Return the firewall settings for this network

Return the firewall settings for this network

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceFirewallSettings($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getNetworkApplianceFirewallSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

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

## `getNetworkApplianceSettings()`

```php
getNetworkApplianceSettings($network_id): \Meraki\Model\GetNetworkApplianceSettings200Response
```

Return the appliance settings for a network

Return the appliance settings for a network

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceSettings($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getNetworkApplianceSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceSettings200Response**](../Model/GetNetworkApplianceSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceVlansSettings()`

```php
getNetworkApplianceVlansSettings($network_id): \Meraki\Model\GetNetworkApplianceVlansSettings200Response
```

Returns the enabled status of VLANs for the network

Returns the enabled status of VLANs for the network

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceVlansSettings($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getNetworkApplianceVlansSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceVlansSettings200Response**](../Model/GetNetworkApplianceVlansSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSettings()`

```php
getNetworkSettings($network_id): \Meraki\Model\GetNetworkSettings200Response
```

Return the settings for a network

Return the settings for a network

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSettings($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getNetworkSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSettings200Response**](../Model/GetNetworkSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchSettings()`

```php
getNetworkSwitchSettings($network_id): \Meraki\Model\GetNetworkSwitchSettings200Response
```

Returns the switch network settings

Returns the switch network settings

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSwitchSettings($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getNetworkSwitchSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchSettings200Response**](../Model/GetNetworkSwitchSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessBluetoothSettings()`

```php
getNetworkWirelessBluetoothSettings($network_id): \Meraki\Model\GetNetworkWirelessBluetoothSettings200Response
```

Return the Bluetooth settings for a network. <a href=\"https://documentation.meraki.com/MR/Bluetooth/Bluetooth_Low_Energy_(BLE)\">Bluetooth settings</a> must be enabled on the network.

Return the Bluetooth settings for a network. <a href=\"https://documentation.meraki.com/MR/Bluetooth/Bluetooth_Low_Energy_(BLE)\">Bluetooth settings</a> must be enabled on the network.

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkWirelessBluetoothSettings($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getNetworkWirelessBluetoothSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkWirelessBluetoothSettings200Response**](../Model/GetNetworkWirelessBluetoothSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSettings()`

```php
getNetworkWirelessSettings($network_id): \Meraki\Model\GetNetworkWirelessSettings200Response
```

Return the wireless settings for a network

Return the wireless settings for a network

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkWirelessSettings($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getNetworkWirelessSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSettings200Response**](../Model/GetNetworkWirelessSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSsidSplashSettings()`

```php
getNetworkWirelessSsidSplashSettings($network_id, $number): \Meraki\Model\GetNetworkWirelessSsidSplashSettings200Response
```

Display the splash page settings for the given SSID

Display the splash page settings for the given SSID

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidSplashSettings($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getNetworkWirelessSsidSplashSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidSplashSettings200Response**](../Model/GetNetworkWirelessSsidSplashSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAdaptivePolicySettings()`

```php
getOrganizationAdaptivePolicySettings($organization_id): \Meraki\Model\GetOrganizationAdaptivePolicySettings200Response
```

Returns global adaptive policy settings in an organization

Returns global adaptive policy settings in an organization

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationAdaptivePolicySettings($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getOrganizationAdaptivePolicySettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicySettings200Response**](../Model/GetOrganizationAdaptivePolicySettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessAirMarshalSettingsByNetwork()`

```php
getOrganizationWirelessAirMarshalSettingsByNetwork($organization_id, $network_ids, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessAirMarshalSettingsByNetwork200Response
```

Returns the current Air Marshal settings for this network

Returns the current Air Marshal settings for this network

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_ids = array('network_ids_example'); // string[] | The network IDs to include in the result set.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessAirMarshalSettingsByNetwork($organization_id, $network_ids, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getOrganizationWirelessAirMarshalSettingsByNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_ids** | [**string[]**](../Model/string.md)| The network IDs to include in the result set. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessAirMarshalSettingsByNetwork200Response**](../Model/GetOrganizationWirelessAirMarshalSettingsByNetwork200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceApplianceRadioSettings()`

```php
updateDeviceApplianceRadioSettings($serial, $update_device_appliance_radio_settings_request): \Meraki\Model\GetDeviceApplianceRadioSettings200Response
```

Update the radio settings of an appliance

Update the radio settings of an appliance

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_appliance_radio_settings_request = new \Meraki\Model\UpdateDeviceApplianceRadioSettingsRequest(); // \Meraki\Model\UpdateDeviceApplianceRadioSettingsRequest

try {
    $result = $apiInstance->updateDeviceApplianceRadioSettings($serial, $update_device_appliance_radio_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->updateDeviceApplianceRadioSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_appliance_radio_settings_request** | [**\Meraki\Model\UpdateDeviceApplianceRadioSettingsRequest**](../Model/UpdateDeviceApplianceRadioSettingsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceApplianceRadioSettings200Response**](../Model/GetDeviceApplianceRadioSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceApplianceUplinksSettings()`

```php
updateDeviceApplianceUplinksSettings($serial, $update_device_appliance_uplinks_settings_request): \Meraki\Model\GetDeviceApplianceUplinksSettings200Response
```

Update the uplink settings for an MX appliance

Update the uplink settings for an MX appliance

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_appliance_uplinks_settings_request = new \Meraki\Model\UpdateDeviceApplianceUplinksSettingsRequest(); // \Meraki\Model\UpdateDeviceApplianceUplinksSettingsRequest

try {
    $result = $apiInstance->updateDeviceApplianceUplinksSettings($serial, $update_device_appliance_uplinks_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->updateDeviceApplianceUplinksSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_appliance_uplinks_settings_request** | [**\Meraki\Model\UpdateDeviceApplianceUplinksSettingsRequest**](../Model/UpdateDeviceApplianceUplinksSettingsRequest.md)|  | |

### Return type

[**\Meraki\Model\GetDeviceApplianceUplinksSettings200Response**](../Model/GetDeviceApplianceUplinksSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceCameraVideoSettings()`

```php
updateDeviceCameraVideoSettings($serial, $update_device_camera_video_settings_request): \Meraki\Model\GetDeviceCameraVideoSettings200Response
```

Update video settings for the given camera

Update video settings for the given camera

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_camera_video_settings_request = new \Meraki\Model\UpdateDeviceCameraVideoSettingsRequest(); // \Meraki\Model\UpdateDeviceCameraVideoSettingsRequest

try {
    $result = $apiInstance->updateDeviceCameraVideoSettings($serial, $update_device_camera_video_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->updateDeviceCameraVideoSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_camera_video_settings_request** | [**\Meraki\Model\UpdateDeviceCameraVideoSettingsRequest**](../Model/UpdateDeviceCameraVideoSettingsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceCameraVideoSettings200Response**](../Model/GetDeviceCameraVideoSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceWirelessBluetoothSettings()`

```php
updateDeviceWirelessBluetoothSettings($serial, $update_device_wireless_bluetooth_settings_request): \Meraki\Model\GetDeviceWirelessBluetoothSettings200Response
```

Update the bluetooth settings for a wireless device

Update the bluetooth settings for a wireless device

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_wireless_bluetooth_settings_request = new \Meraki\Model\UpdateDeviceWirelessBluetoothSettingsRequest(); // \Meraki\Model\UpdateDeviceWirelessBluetoothSettingsRequest

try {
    $result = $apiInstance->updateDeviceWirelessBluetoothSettings($serial, $update_device_wireless_bluetooth_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->updateDeviceWirelessBluetoothSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_wireless_bluetooth_settings_request** | [**\Meraki\Model\UpdateDeviceWirelessBluetoothSettingsRequest**](../Model/UpdateDeviceWirelessBluetoothSettingsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceWirelessBluetoothSettings200Response**](../Model/GetDeviceWirelessBluetoothSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceWirelessRadioSettings()`

```php
updateDeviceWirelessRadioSettings($serial, $update_device_appliance_radio_settings_request): object
```

Update the radio settings overrides of a device, which take precedence over RF profiles.

Update the radio settings overrides of a device, which take precedence over RF profiles.

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_appliance_radio_settings_request = new \Meraki\Model\UpdateDeviceApplianceRadioSettingsRequest(); // \Meraki\Model\UpdateDeviceApplianceRadioSettingsRequest

try {
    $result = $apiInstance->updateDeviceWirelessRadioSettings($serial, $update_device_appliance_radio_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->updateDeviceWirelessRadioSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_appliance_radio_settings_request** | [**\Meraki\Model\UpdateDeviceApplianceRadioSettingsRequest**](../Model/UpdateDeviceApplianceRadioSettingsRequest.md)|  | [optional] |

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

## `updateNetworkAlertsSettings()`

```php
updateNetworkAlertsSettings($network_id, $update_network_alerts_settings_request): \Meraki\Model\GetNetworkAlertsSettings200Response
```

Update the alert configuration for this network

Update the alert configuration for this network

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_alerts_settings_request = new \Meraki\Model\UpdateNetworkAlertsSettingsRequest(); // \Meraki\Model\UpdateNetworkAlertsSettingsRequest

try {
    $result = $apiInstance->updateNetworkAlertsSettings($network_id, $update_network_alerts_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->updateNetworkAlertsSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_alerts_settings_request** | [**\Meraki\Model\UpdateNetworkAlertsSettingsRequest**](../Model/UpdateNetworkAlertsSettingsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkAlertsSettings200Response**](../Model/GetNetworkAlertsSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceFirewallSettings()`

```php
updateNetworkApplianceFirewallSettings($network_id, $update_network_appliance_firewall_settings_request): object
```

Update the firewall settings for this network

Update the firewall settings for this network

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_firewall_settings_request = new \Meraki\Model\UpdateNetworkApplianceFirewallSettingsRequest(); // \Meraki\Model\UpdateNetworkApplianceFirewallSettingsRequest

try {
    $result = $apiInstance->updateNetworkApplianceFirewallSettings($network_id, $update_network_appliance_firewall_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->updateNetworkApplianceFirewallSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_firewall_settings_request** | [**\Meraki\Model\UpdateNetworkApplianceFirewallSettingsRequest**](../Model/UpdateNetworkApplianceFirewallSettingsRequest.md)|  | [optional] |

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

## `updateNetworkApplianceSettings()`

```php
updateNetworkApplianceSettings($network_id, $update_network_appliance_settings_request): \Meraki\Model\GetNetworkApplianceSettings200Response
```

Update the appliance settings for a network

Update the appliance settings for a network

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_settings_request = new \Meraki\Model\UpdateNetworkApplianceSettingsRequest(); // \Meraki\Model\UpdateNetworkApplianceSettingsRequest

try {
    $result = $apiInstance->updateNetworkApplianceSettings($network_id, $update_network_appliance_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->updateNetworkApplianceSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_settings_request** | [**\Meraki\Model\UpdateNetworkApplianceSettingsRequest**](../Model/UpdateNetworkApplianceSettingsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceSettings200Response**](../Model/GetNetworkApplianceSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceVlansSettings()`

```php
updateNetworkApplianceVlansSettings($network_id, $update_network_appliance_vlans_settings_request): \Meraki\Model\GetNetworkApplianceVlansSettings200Response
```

Enable/Disable VLANs for the given network

Enable/Disable VLANs for the given network

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_vlans_settings_request = new \Meraki\Model\UpdateNetworkApplianceVlansSettingsRequest(); // \Meraki\Model\UpdateNetworkApplianceVlansSettingsRequest

try {
    $result = $apiInstance->updateNetworkApplianceVlansSettings($network_id, $update_network_appliance_vlans_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->updateNetworkApplianceVlansSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_vlans_settings_request** | [**\Meraki\Model\UpdateNetworkApplianceVlansSettingsRequest**](../Model/UpdateNetworkApplianceVlansSettingsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceVlansSettings200Response**](../Model/GetNetworkApplianceVlansSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSettings()`

```php
updateNetworkSettings($network_id, $update_network_settings_request): \Meraki\Model\GetNetworkSettings200Response
```

Update the settings for a network

Update the settings for a network

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_settings_request = new \Meraki\Model\UpdateNetworkSettingsRequest(); // \Meraki\Model\UpdateNetworkSettingsRequest

try {
    $result = $apiInstance->updateNetworkSettings($network_id, $update_network_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->updateNetworkSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_settings_request** | [**\Meraki\Model\UpdateNetworkSettingsRequest**](../Model/UpdateNetworkSettingsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSettings200Response**](../Model/GetNetworkSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchSettings()`

```php
updateNetworkSwitchSettings($network_id, $update_network_switch_settings_request): \Meraki\Model\GetNetworkSwitchSettings200Response
```

Update switch network settings

Update switch network settings

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_switch_settings_request = new \Meraki\Model\UpdateNetworkSwitchSettingsRequest(); // \Meraki\Model\UpdateNetworkSwitchSettingsRequest

try {
    $result = $apiInstance->updateNetworkSwitchSettings($network_id, $update_network_switch_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->updateNetworkSwitchSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_switch_settings_request** | [**\Meraki\Model\UpdateNetworkSwitchSettingsRequest**](../Model/UpdateNetworkSwitchSettingsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchSettings200Response**](../Model/GetNetworkSwitchSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessAirMarshalSettings()`

```php
updateNetworkWirelessAirMarshalSettings($network_id, $update_network_wireless_air_marshal_settings_request): \Meraki\Model\UpdateNetworkWirelessAirMarshalSettings200Response
```

Updates Air Marshal settings.

Updates Air Marshal settings.

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_wireless_air_marshal_settings_request = new \Meraki\Model\UpdateNetworkWirelessAirMarshalSettingsRequest(); // \Meraki\Model\UpdateNetworkWirelessAirMarshalSettingsRequest

try {
    $result = $apiInstance->updateNetworkWirelessAirMarshalSettings($network_id, $update_network_wireless_air_marshal_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->updateNetworkWirelessAirMarshalSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_wireless_air_marshal_settings_request** | [**\Meraki\Model\UpdateNetworkWirelessAirMarshalSettingsRequest**](../Model/UpdateNetworkWirelessAirMarshalSettingsRequest.md)|  | |

### Return type

[**\Meraki\Model\UpdateNetworkWirelessAirMarshalSettings200Response**](../Model/UpdateNetworkWirelessAirMarshalSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessBluetoothSettings()`

```php
updateNetworkWirelessBluetoothSettings($network_id, $update_network_wireless_bluetooth_settings_request): \Meraki\Model\GetNetworkWirelessBluetoothSettings200Response
```

Update the Bluetooth settings for a network

Update the Bluetooth settings for a network. See the docs page for <a href=\"https://documentation.meraki.com/MR/Bluetooth/Bluetooth_Low_Energy_(BLE)\">Bluetooth settings</a>.

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_wireless_bluetooth_settings_request = new \Meraki\Model\UpdateNetworkWirelessBluetoothSettingsRequest(); // \Meraki\Model\UpdateNetworkWirelessBluetoothSettingsRequest

try {
    $result = $apiInstance->updateNetworkWirelessBluetoothSettings($network_id, $update_network_wireless_bluetooth_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->updateNetworkWirelessBluetoothSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_wireless_bluetooth_settings_request** | [**\Meraki\Model\UpdateNetworkWirelessBluetoothSettingsRequest**](../Model/UpdateNetworkWirelessBluetoothSettingsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessBluetoothSettings200Response**](../Model/GetNetworkWirelessBluetoothSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessSettings()`

```php
updateNetworkWirelessSettings($network_id, $update_network_wireless_settings_request): \Meraki\Model\GetNetworkWirelessSettings200Response
```

Update the wireless settings for a network

Update the wireless settings for a network

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_wireless_settings_request = new \Meraki\Model\UpdateNetworkWirelessSettingsRequest(); // \Meraki\Model\UpdateNetworkWirelessSettingsRequest

try {
    $result = $apiInstance->updateNetworkWirelessSettings($network_id, $update_network_wireless_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->updateNetworkWirelessSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_wireless_settings_request** | [**\Meraki\Model\UpdateNetworkWirelessSettingsRequest**](../Model/UpdateNetworkWirelessSettingsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessSettings200Response**](../Model/GetNetworkWirelessSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessSsidSplashSettings()`

```php
updateNetworkWirelessSsidSplashSettings($network_id, $number, $update_network_wireless_ssid_splash_settings_request): \Meraki\Model\GetNetworkWirelessSsidSplashSettings200Response
```

Modify the splash page settings for the given SSID

Modify the splash page settings for the given SSID

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_splash_settings_request = new \Meraki\Model\UpdateNetworkWirelessSsidSplashSettingsRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidSplashSettingsRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsidSplashSettings($network_id, $number, $update_network_wireless_ssid_splash_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->updateNetworkWirelessSsidSplashSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_splash_settings_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidSplashSettingsRequest**](../Model/UpdateNetworkWirelessSsidSplashSettingsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidSplashSettings200Response**](../Model/GetNetworkWirelessSsidSplashSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationAdaptivePolicySettings()`

```php
updateOrganizationAdaptivePolicySettings($organization_id, $update_organization_adaptive_policy_settings_request): \Meraki\Model\GetOrganizationAdaptivePolicySettings200Response
```

Update global adaptive policy settings

Update global adaptive policy settings

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


$apiInstance = new Meraki\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$update_organization_adaptive_policy_settings_request = new \Meraki\Model\UpdateOrganizationAdaptivePolicySettingsRequest(); // \Meraki\Model\UpdateOrganizationAdaptivePolicySettingsRequest

try {
    $result = $apiInstance->updateOrganizationAdaptivePolicySettings($organization_id, $update_organization_adaptive_policy_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->updateOrganizationAdaptivePolicySettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **update_organization_adaptive_policy_settings_request** | [**\Meraki\Model\UpdateOrganizationAdaptivePolicySettingsRequest**](../Model/UpdateOrganizationAdaptivePolicySettingsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicySettings200Response**](../Model/GetOrganizationAdaptivePolicySettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
