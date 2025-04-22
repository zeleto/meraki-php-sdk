# Meraki\AppliancesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrganizationSummaryTopAppliancesByUtilization()**](AppliancesApi.md#getOrganizationSummaryTopAppliancesByUtilization) | **GET** /organizations/{organizationId}/summary/top/appliances/byUtilization | Return the top 10 appliances sorted by utilization over given time range. |


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


$apiInstance = new Meraki\Api\AppliancesApi(
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
    echo 'Exception when calling AppliancesApi->getOrganizationSummaryTopAppliancesByUtilization: ', $e->getMessage(), PHP_EOL;
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
