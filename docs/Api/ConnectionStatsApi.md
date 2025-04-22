# Meraki\ConnectionStatsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDeviceWirelessConnectionStats()**](ConnectionStatsApi.md#getDeviceWirelessConnectionStats) | **GET** /devices/{serial}/wireless/connectionStats | Aggregated connectivity info for a given AP on this network |
| [**getNetworkWirelessClientConnectionStats()**](ConnectionStatsApi.md#getNetworkWirelessClientConnectionStats) | **GET** /networks/{networkId}/wireless/clients/{clientId}/connectionStats | Aggregated connectivity info for a given client on this network |
| [**getNetworkWirelessClientsConnectionStats()**](ConnectionStatsApi.md#getNetworkWirelessClientsConnectionStats) | **GET** /networks/{networkId}/wireless/clients/connectionStats | Aggregated connectivity info for this network, grouped by clients |
| [**getNetworkWirelessConnectionStats()**](ConnectionStatsApi.md#getNetworkWirelessConnectionStats) | **GET** /networks/{networkId}/wireless/connectionStats | Aggregated connectivity info for this network |
| [**getNetworkWirelessDevicesConnectionStats()**](ConnectionStatsApi.md#getNetworkWirelessDevicesConnectionStats) | **GET** /networks/{networkId}/wireless/devices/connectionStats | Aggregated connectivity info for this network, grouped by node |


## `getDeviceWirelessConnectionStats()`

```php
getDeviceWirelessConnectionStats($serial, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag): \Meraki\Model\GetDeviceWirelessConnectionStats200Response
```

Aggregated connectivity info for a given AP on this network

Aggregated connectivity info for a given AP on this network

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


$apiInstance = new Meraki\Api\ConnectionStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 180 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 7 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days.
$band = 'band_example'; // string | Filter results by band (either '2.4', '5' or '6'). Note that data prior to February 2020 will not have band information.
$ssid = 56; // int | Filter results by SSID
$vlan = 56; // int | Filter results by VLAN
$ap_tag = 'ap_tag_example'; // string | Filter results by AP Tag

try {
    $result = $apiInstance->getDeviceWirelessConnectionStats($serial, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionStatsApi->getDeviceWirelessConnectionStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 180 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 7 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days. | [optional] |
| **band** | **string**| Filter results by band (either &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;). Note that data prior to February 2020 will not have band information. | [optional] |
| **ssid** | **int**| Filter results by SSID | [optional] |
| **vlan** | **int**| Filter results by VLAN | [optional] |
| **ap_tag** | **string**| Filter results by AP Tag | [optional] |

### Return type

[**\Meraki\Model\GetDeviceWirelessConnectionStats200Response**](../Model/GetDeviceWirelessConnectionStats200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessClientConnectionStats()`

```php
getNetworkWirelessClientConnectionStats($network_id, $client_id, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag): \Meraki\Model\GetNetworkWirelessClientConnectionStats200Response
```

Aggregated connectivity info for a given client on this network

Aggregated connectivity info for a given client on this network. Clients are identified by their MAC.

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


$apiInstance = new Meraki\Api\ConnectionStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$client_id = 'client_id_example'; // string | Client ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 180 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 7 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days.
$band = 'band_example'; // string | Filter results by band (either '2.4', '5' or '6'). Note that data prior to February 2020 will not have band information.
$ssid = 56; // int | Filter results by SSID
$vlan = 56; // int | Filter results by VLAN
$ap_tag = 'ap_tag_example'; // string | Filter results by AP Tag

try {
    $result = $apiInstance->getNetworkWirelessClientConnectionStats($network_id, $client_id, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionStatsApi->getNetworkWirelessClientConnectionStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **client_id** | **string**| Client ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 180 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 7 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days. | [optional] |
| **band** | **string**| Filter results by band (either &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;). Note that data prior to February 2020 will not have band information. | [optional] |
| **ssid** | **int**| Filter results by SSID | [optional] |
| **vlan** | **int**| Filter results by VLAN | [optional] |
| **ap_tag** | **string**| Filter results by AP Tag | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessClientConnectionStats200Response**](../Model/GetNetworkWirelessClientConnectionStats200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessClientsConnectionStats()`

```php
getNetworkWirelessClientsConnectionStats($network_id, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag): object[]
```

Aggregated connectivity info for this network, grouped by clients

Aggregated connectivity info for this network, grouped by clients

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


$apiInstance = new Meraki\Api\ConnectionStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 180 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 7 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days.
$band = 'band_example'; // string | Filter results by band (either '2.4', '5' or '6'). Note that data prior to February 2020 will not have band information.
$ssid = 56; // int | Filter results by SSID
$vlan = 56; // int | Filter results by VLAN
$ap_tag = 'ap_tag_example'; // string | Filter results by AP Tag

try {
    $result = $apiInstance->getNetworkWirelessClientsConnectionStats($network_id, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionStatsApi->getNetworkWirelessClientsConnectionStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 180 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 7 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days. | [optional] |
| **band** | **string**| Filter results by band (either &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;). Note that data prior to February 2020 will not have band information. | [optional] |
| **ssid** | **int**| Filter results by SSID | [optional] |
| **vlan** | **int**| Filter results by VLAN | [optional] |
| **ap_tag** | **string**| Filter results by AP Tag | [optional] |

### Return type

**object[]**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessConnectionStats()`

```php
getNetworkWirelessConnectionStats($network_id, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag): \Meraki\Model\GetNetworkWirelessConnectionStats200Response
```

Aggregated connectivity info for this network

Aggregated connectivity info for this network

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


$apiInstance = new Meraki\Api\ConnectionStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 180 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 7 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days.
$band = 'band_example'; // string | Filter results by band (either '2.4', '5' or '6'). Note that data prior to February 2020 will not have band information.
$ssid = 56; // int | Filter results by SSID
$vlan = 56; // int | Filter results by VLAN
$ap_tag = 'ap_tag_example'; // string | Filter results by AP Tag

try {
    $result = $apiInstance->getNetworkWirelessConnectionStats($network_id, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionStatsApi->getNetworkWirelessConnectionStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 180 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 7 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days. | [optional] |
| **band** | **string**| Filter results by band (either &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;). Note that data prior to February 2020 will not have band information. | [optional] |
| **ssid** | **int**| Filter results by SSID | [optional] |
| **vlan** | **int**| Filter results by VLAN | [optional] |
| **ap_tag** | **string**| Filter results by AP Tag | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessConnectionStats200Response**](../Model/GetNetworkWirelessConnectionStats200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessDevicesConnectionStats()`

```php
getNetworkWirelessDevicesConnectionStats($network_id, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag): \Meraki\Model\GetDeviceWirelessConnectionStats200Response[]
```

Aggregated connectivity info for this network, grouped by node

Aggregated connectivity info for this network, grouped by node

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


$apiInstance = new Meraki\Api\ConnectionStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 180 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 7 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days.
$band = 'band_example'; // string | Filter results by band (either '2.4', '5' or '6'). Note that data prior to February 2020 will not have band information.
$ssid = 56; // int | Filter results by SSID
$vlan = 56; // int | Filter results by VLAN
$ap_tag = 'ap_tag_example'; // string | Filter results by AP Tag

try {
    $result = $apiInstance->getNetworkWirelessDevicesConnectionStats($network_id, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionStatsApi->getNetworkWirelessDevicesConnectionStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 180 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 7 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days. | [optional] |
| **band** | **string**| Filter results by band (either &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;). Note that data prior to February 2020 will not have band information. | [optional] |
| **ssid** | **int**| Filter results by SSID | [optional] |
| **vlan** | **int**| Filter results by VLAN | [optional] |
| **ap_tag** | **string**| Filter results by AP Tag | [optional] |

### Return type

[**\Meraki\Model\GetDeviceWirelessConnectionStats200Response[]**](../Model/GetDeviceWirelessConnectionStats200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
