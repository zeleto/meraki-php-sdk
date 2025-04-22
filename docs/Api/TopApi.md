# Meraki\TopApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrganizationSummaryTopAppliancesByUtilization()**](TopApi.md#getOrganizationSummaryTopAppliancesByUtilization) | **GET** /organizations/{organizationId}/summary/top/appliances/byUtilization | Return the top 10 appliances sorted by utilization over given time range. |
| [**getOrganizationSummaryTopApplicationsByUsage()**](TopApi.md#getOrganizationSummaryTopApplicationsByUsage) | **GET** /organizations/{organizationId}/summary/top/applications/byUsage | Return the top applications sorted by data usage over given time range |
| [**getOrganizationSummaryTopApplicationsCategoriesByUsage()**](TopApi.md#getOrganizationSummaryTopApplicationsCategoriesByUsage) | **GET** /organizations/{organizationId}/summary/top/applications/categories/byUsage | Return the top application categories sorted by data usage over given time range |
| [**getOrganizationSummaryTopClientsByUsage()**](TopApi.md#getOrganizationSummaryTopClientsByUsage) | **GET** /organizations/{organizationId}/summary/top/clients/byUsage | Return metrics for organization&#39;s top 10 clients by data usage (in mb) over given time range. |
| [**getOrganizationSummaryTopClientsManufacturersByUsage()**](TopApi.md#getOrganizationSummaryTopClientsManufacturersByUsage) | **GET** /organizations/{organizationId}/summary/top/clients/manufacturers/byUsage | Return metrics for organization&#39;s top clients by data usage (in mb) over given time range, grouped by manufacturer. |
| [**getOrganizationSummaryTopDevicesByUsage()**](TopApi.md#getOrganizationSummaryTopDevicesByUsage) | **GET** /organizations/{organizationId}/summary/top/devices/byUsage | Return metrics for organization&#39;s top 10 devices sorted by data usage over given time range |
| [**getOrganizationSummaryTopDevicesModelsByUsage()**](TopApi.md#getOrganizationSummaryTopDevicesModelsByUsage) | **GET** /organizations/{organizationId}/summary/top/devices/models/byUsage | Return metrics for organization&#39;s top 10 device models sorted by data usage over given time range |
| [**getOrganizationSummaryTopNetworksByStatus()**](TopApi.md#getOrganizationSummaryTopNetworksByStatus) | **GET** /organizations/{organizationId}/summary/top/networks/byStatus | List the client and status overview information for the networks in an organization |
| [**getOrganizationSummaryTopSsidsByUsage()**](TopApi.md#getOrganizationSummaryTopSsidsByUsage) | **GET** /organizations/{organizationId}/summary/top/ssids/byUsage | Return metrics for organization&#39;s top 10 ssids by data usage over given time range |
| [**getOrganizationSummaryTopSwitchesByEnergyUsage()**](TopApi.md#getOrganizationSummaryTopSwitchesByEnergyUsage) | **GET** /organizations/{organizationId}/summary/top/switches/byEnergyUsage | Return metrics for organization&#39;s top 10 switches by energy usage over given time range |


## `getOrganizationSummaryTopAppliancesByUtilization()`

```php
getOrganizationSummaryTopAppliancesByUtilization($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationSummaryTopAppliancesByUtilization200ResponseInner[]
```

Return the top 10 appliances sorted by utilization over given time range.

Return the top 10 appliances sorted by utilization over given time range.

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


$apiInstance = new Meraki\Api\TopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_tag = 'network_tag_example'; // string | Match result to an exact network tag
$device_tag = 'device_tag_example'; // string | Match result to an exact device tag
$quantity = 56; // int | Set number of desired results to return. Default is 10.
$ssid_name = 'ssid_name_example'; // string | Filter results by ssid name
$usage_uplink = 'usage_uplink_example'; // string | Filter results by usage uplink
$t0 = 't0_example'; // string | The beginning of the timespan for the data.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 186 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 25 minutes and be less than or equal to 186 days. The default is 1 day.

try {
    $result = $apiInstance->getOrganizationSummaryTopAppliancesByUtilization($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopApi->getOrganizationSummaryTopAppliancesByUtilization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_tag** | **string**| Match result to an exact network tag | [optional] |
| **device_tag** | **string**| Match result to an exact device tag | [optional] |
| **quantity** | **int**| Set number of desired results to return. Default is 10. | [optional] |
| **ssid_name** | **string**| Filter results by ssid name | [optional] |
| **usage_uplink** | **string**| Filter results by usage uplink | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 186 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 25 minutes and be less than or equal to 186 days. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSummaryTopAppliancesByUtilization200ResponseInner[]**](../Model/GetOrganizationSummaryTopAppliancesByUtilization200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSummaryTopApplicationsByUsage()`

```php
getOrganizationSummaryTopApplicationsByUsage($organization_id, $network_tag, $device, $network_id, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationSummaryTopApplicationsByUsage200ResponseInner[]
```

Return the top applications sorted by data usage over given time range

Return the top applications sorted by data usage over given time range. Default unit is megabytes.

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


$apiInstance = new Meraki\Api\TopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_tag = 'network_tag_example'; // string | Match result to an exact network tag
$device = 'device_example'; // string | Match result to an exact device tag
$network_id = 'network_id_example'; // string | Match result to an exact network id
$quantity = 56; // int | Set number of desired results to return. Default is 10.
$ssid_name = 'ssid_name_example'; // string | Filter results by ssid name
$usage_uplink = 'usage_uplink_example'; // string | Filter results by usage uplink
$t0 = 't0_example'; // string | The beginning of the timespan for the data.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 186 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 25 minutes and be less than or equal to 186 days. The default is 1 day.

try {
    $result = $apiInstance->getOrganizationSummaryTopApplicationsByUsage($organization_id, $network_tag, $device, $network_id, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopApi->getOrganizationSummaryTopApplicationsByUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_tag** | **string**| Match result to an exact network tag | [optional] |
| **device** | **string**| Match result to an exact device tag | [optional] |
| **network_id** | **string**| Match result to an exact network id | [optional] |
| **quantity** | **int**| Set number of desired results to return. Default is 10. | [optional] |
| **ssid_name** | **string**| Filter results by ssid name | [optional] |
| **usage_uplink** | **string**| Filter results by usage uplink | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 186 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 25 minutes and be less than or equal to 186 days. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSummaryTopApplicationsByUsage200ResponseInner[]**](../Model/GetOrganizationSummaryTopApplicationsByUsage200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSummaryTopApplicationsCategoriesByUsage()`

```php
getOrganizationSummaryTopApplicationsCategoriesByUsage($organization_id, $network_tag, $device_tag, $network_id, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationSummaryTopApplicationsCategoriesByUsage200ResponseInner[]
```

Return the top application categories sorted by data usage over given time range

Return the top application categories sorted by data usage over given time range. Default unit is megabytes.

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


$apiInstance = new Meraki\Api\TopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_tag = 'network_tag_example'; // string | Match result to an exact network tag
$device_tag = 'device_tag_example'; // string | Match result to an exact device tag
$network_id = 'network_id_example'; // string | Match result to an exact network id
$quantity = 56; // int | Set number of desired results to return. Default is 10.
$ssid_name = 'ssid_name_example'; // string | Filter results by ssid name
$usage_uplink = 'usage_uplink_example'; // string | Filter results by usage uplink
$t0 = 't0_example'; // string | The beginning of the timespan for the data.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 186 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 25 minutes and be less than or equal to 186 days. The default is 1 day.

try {
    $result = $apiInstance->getOrganizationSummaryTopApplicationsCategoriesByUsage($organization_id, $network_tag, $device_tag, $network_id, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopApi->getOrganizationSummaryTopApplicationsCategoriesByUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_tag** | **string**| Match result to an exact network tag | [optional] |
| **device_tag** | **string**| Match result to an exact device tag | [optional] |
| **network_id** | **string**| Match result to an exact network id | [optional] |
| **quantity** | **int**| Set number of desired results to return. Default is 10. | [optional] |
| **ssid_name** | **string**| Filter results by ssid name | [optional] |
| **usage_uplink** | **string**| Filter results by usage uplink | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 186 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 25 minutes and be less than or equal to 186 days. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSummaryTopApplicationsCategoriesByUsage200ResponseInner[]**](../Model/GetOrganizationSummaryTopApplicationsCategoriesByUsage200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSummaryTopClientsByUsage()`

```php
getOrganizationSummaryTopClientsByUsage($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationSummaryTopClientsByUsage200ResponseInner[]
```

Return metrics for organization's top 10 clients by data usage (in mb) over given time range.

Return metrics for organization's top 10 clients by data usage (in mb) over given time range.

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


$apiInstance = new Meraki\Api\TopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_tag = 'network_tag_example'; // string | Match result to an exact network tag
$device_tag = 'device_tag_example'; // string | Match result to an exact device tag
$quantity = 56; // int | Set number of desired results to return. Default is 10.
$ssid_name = 'ssid_name_example'; // string | Filter results by ssid name
$usage_uplink = 'usage_uplink_example'; // string | Filter results by usage uplink
$t0 = 't0_example'; // string | The beginning of the timespan for the data.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 186 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 8 hours and be less than or equal to 186 days. The default is 1 day.

try {
    $result = $apiInstance->getOrganizationSummaryTopClientsByUsage($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopApi->getOrganizationSummaryTopClientsByUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_tag** | **string**| Match result to an exact network tag | [optional] |
| **device_tag** | **string**| Match result to an exact device tag | [optional] |
| **quantity** | **int**| Set number of desired results to return. Default is 10. | [optional] |
| **ssid_name** | **string**| Filter results by ssid name | [optional] |
| **usage_uplink** | **string**| Filter results by usage uplink | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 186 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 8 hours and be less than or equal to 186 days. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSummaryTopClientsByUsage200ResponseInner[]**](../Model/GetOrganizationSummaryTopClientsByUsage200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSummaryTopClientsManufacturersByUsage()`

```php
getOrganizationSummaryTopClientsManufacturersByUsage($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationSummaryTopClientsManufacturersByUsage200ResponseInner[]
```

Return metrics for organization's top clients by data usage (in mb) over given time range, grouped by manufacturer.

Return metrics for organization's top clients by data usage (in mb) over given time range, grouped by manufacturer.

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


$apiInstance = new Meraki\Api\TopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_tag = 'network_tag_example'; // string | Match result to an exact network tag
$device_tag = 'device_tag_example'; // string | Match result to an exact device tag
$quantity = 56; // int | Set number of desired results to return. Default is 10.
$ssid_name = 'ssid_name_example'; // string | Filter results by ssid name
$usage_uplink = 'usage_uplink_example'; // string | Filter results by usage uplink
$t0 = 't0_example'; // string | The beginning of the timespan for the data.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 186 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 186 days. The default is 1 day.

try {
    $result = $apiInstance->getOrganizationSummaryTopClientsManufacturersByUsage($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopApi->getOrganizationSummaryTopClientsManufacturersByUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_tag** | **string**| Match result to an exact network tag | [optional] |
| **device_tag** | **string**| Match result to an exact device tag | [optional] |
| **quantity** | **int**| Set number of desired results to return. Default is 10. | [optional] |
| **ssid_name** | **string**| Filter results by ssid name | [optional] |
| **usage_uplink** | **string**| Filter results by usage uplink | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 186 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 186 days. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSummaryTopClientsManufacturersByUsage200ResponseInner[]**](../Model/GetOrganizationSummaryTopClientsManufacturersByUsage200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSummaryTopDevicesByUsage()`

```php
getOrganizationSummaryTopDevicesByUsage($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationSummaryTopDevicesByUsage200ResponseInner[]
```

Return metrics for organization's top 10 devices sorted by data usage over given time range

Return metrics for organization's top 10 devices sorted by data usage over given time range. Default unit is megabytes.

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


$apiInstance = new Meraki\Api\TopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_tag = 'network_tag_example'; // string | Match result to an exact network tag
$device_tag = 'device_tag_example'; // string | Match result to an exact device tag
$quantity = 56; // int | Set number of desired results to return. Default is 10.
$ssid_name = 'ssid_name_example'; // string | Filter results by ssid name
$usage_uplink = 'usage_uplink_example'; // string | Filter results by usage uplink
$t0 = 't0_example'; // string | The beginning of the timespan for the data.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 186 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 8 hours and be less than or equal to 186 days. The default is 1 day.

try {
    $result = $apiInstance->getOrganizationSummaryTopDevicesByUsage($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopApi->getOrganizationSummaryTopDevicesByUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_tag** | **string**| Match result to an exact network tag | [optional] |
| **device_tag** | **string**| Match result to an exact device tag | [optional] |
| **quantity** | **int**| Set number of desired results to return. Default is 10. | [optional] |
| **ssid_name** | **string**| Filter results by ssid name | [optional] |
| **usage_uplink** | **string**| Filter results by usage uplink | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 186 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 8 hours and be less than or equal to 186 days. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSummaryTopDevicesByUsage200ResponseInner[]**](../Model/GetOrganizationSummaryTopDevicesByUsage200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSummaryTopDevicesModelsByUsage()`

```php
getOrganizationSummaryTopDevicesModelsByUsage($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationSummaryTopDevicesModelsByUsage200ResponseInner[]
```

Return metrics for organization's top 10 device models sorted by data usage over given time range

Return metrics for organization's top 10 device models sorted by data usage over given time range. Default unit is megabytes.

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


$apiInstance = new Meraki\Api\TopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_tag = 'network_tag_example'; // string | Match result to an exact network tag
$device_tag = 'device_tag_example'; // string | Match result to an exact device tag
$quantity = 56; // int | Set number of desired results to return. Default is 10.
$ssid_name = 'ssid_name_example'; // string | Filter results by ssid name
$usage_uplink = 'usage_uplink_example'; // string | Filter results by usage uplink
$t0 = 't0_example'; // string | The beginning of the timespan for the data.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 186 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 8 hours and be less than or equal to 186 days. The default is 1 day.

try {
    $result = $apiInstance->getOrganizationSummaryTopDevicesModelsByUsage($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopApi->getOrganizationSummaryTopDevicesModelsByUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_tag** | **string**| Match result to an exact network tag | [optional] |
| **device_tag** | **string**| Match result to an exact device tag | [optional] |
| **quantity** | **int**| Set number of desired results to return. Default is 10. | [optional] |
| **ssid_name** | **string**| Filter results by ssid name | [optional] |
| **usage_uplink** | **string**| Filter results by usage uplink | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 186 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 8 hours and be less than or equal to 186 days. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSummaryTopDevicesModelsByUsage200ResponseInner[]**](../Model/GetOrganizationSummaryTopDevicesModelsByUsage200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSummaryTopNetworksByStatus()`

```php
getOrganizationSummaryTopNetworksByStatus($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationSummaryTopNetworksByStatus200ResponseInner[]
```

List the client and status overview information for the networks in an organization

List the client and status overview information for the networks in an organization. Usage is measured in kilobytes and from the last seven days.

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


$apiInstance = new Meraki\Api\TopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_tag = 'network_tag_example'; // string | Match result to an exact network tag
$device_tag = 'device_tag_example'; // string | Match result to an exact device tag
$quantity = 56; // int | Set number of desired results to return. Default is 10.
$ssid_name = 'ssid_name_example'; // string | Filter results by ssid name
$usage_uplink = 'usage_uplink_example'; // string | Filter results by usage uplink
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 5000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationSummaryTopNetworksByStatus($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopApi->getOrganizationSummaryTopNetworksByStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_tag** | **string**| Match result to an exact network tag | [optional] |
| **device_tag** | **string**| Match result to an exact device tag | [optional] |
| **quantity** | **int**| Set number of desired results to return. Default is 10. | [optional] |
| **ssid_name** | **string**| Filter results by ssid name | [optional] |
| **usage_uplink** | **string**| Filter results by usage uplink | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 5000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSummaryTopNetworksByStatus200ResponseInner[]**](../Model/GetOrganizationSummaryTopNetworksByStatus200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSummaryTopSsidsByUsage()`

```php
getOrganizationSummaryTopSsidsByUsage($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationSummaryTopSsidsByUsage200ResponseInner[]
```

Return metrics for organization's top 10 ssids by data usage over given time range

Return metrics for organization's top 10 ssids by data usage over given time range. Default unit is megabytes.

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


$apiInstance = new Meraki\Api\TopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_tag = 'network_tag_example'; // string | Match result to an exact network tag
$device_tag = 'device_tag_example'; // string | Match result to an exact device tag
$quantity = 56; // int | Set number of desired results to return. Default is 10.
$ssid_name = 'ssid_name_example'; // string | Filter results by ssid name
$usage_uplink = 'usage_uplink_example'; // string | Filter results by usage uplink
$t0 = 't0_example'; // string | The beginning of the timespan for the data.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 186 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 8 hours and be less than or equal to 186 days. The default is 1 day.

try {
    $result = $apiInstance->getOrganizationSummaryTopSsidsByUsage($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopApi->getOrganizationSummaryTopSsidsByUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_tag** | **string**| Match result to an exact network tag | [optional] |
| **device_tag** | **string**| Match result to an exact device tag | [optional] |
| **quantity** | **int**| Set number of desired results to return. Default is 10. | [optional] |
| **ssid_name** | **string**| Filter results by ssid name | [optional] |
| **usage_uplink** | **string**| Filter results by usage uplink | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 186 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 8 hours and be less than or equal to 186 days. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSummaryTopSsidsByUsage200ResponseInner[]**](../Model/GetOrganizationSummaryTopSsidsByUsage200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSummaryTopSwitchesByEnergyUsage()`

```php
getOrganizationSummaryTopSwitchesByEnergyUsage($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationSummaryTopSwitchesByEnergyUsage200ResponseInner[]
```

Return metrics for organization's top 10 switches by energy usage over given time range

Return metrics for organization's top 10 switches by energy usage over given time range. Default unit is joules.

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


$apiInstance = new Meraki\Api\TopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_tag = 'network_tag_example'; // string | Match result to an exact network tag
$device_tag = 'device_tag_example'; // string | Match result to an exact device tag
$quantity = 56; // int | Set number of desired results to return. Default is 10.
$ssid_name = 'ssid_name_example'; // string | Filter results by ssid name
$usage_uplink = 'usage_uplink_example'; // string | Filter results by usage uplink
$t0 = 't0_example'; // string | The beginning of the timespan for the data.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 186 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 25 minutes and be less than or equal to 186 days. The default is 1 day.

try {
    $result = $apiInstance->getOrganizationSummaryTopSwitchesByEnergyUsage($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopApi->getOrganizationSummaryTopSwitchesByEnergyUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_tag** | **string**| Match result to an exact network tag | [optional] |
| **device_tag** | **string**| Match result to an exact device tag | [optional] |
| **quantity** | **int**| Set number of desired results to return. Default is 10. | [optional] |
| **ssid_name** | **string**| Filter results by ssid name | [optional] |
| **usage_uplink** | **string**| Filter results by usage uplink | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 186 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 25 minutes and be less than or equal to 186 days. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSummaryTopSwitchesByEnergyUsage200ResponseInner[]**](../Model/GetOrganizationSummaryTopSwitchesByEnergyUsage200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
