# Meraki\UpgradesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrganizationFirmwareUpgrades()**](UpgradesApi.md#getOrganizationFirmwareUpgrades) | **GET** /organizations/{organizationId}/firmware/upgrades | Get firmware upgrade information for an organization |
| [**getOrganizationFirmwareUpgradesByDevice()**](UpgradesApi.md#getOrganizationFirmwareUpgradesByDevice) | **GET** /organizations/{organizationId}/firmware/upgrades/byDevice | Get firmware upgrade status for the filtered devices |


## `getOrganizationFirmwareUpgrades()`

```php
getOrganizationFirmwareUpgrades($organization_id, $per_page, $starting_after, $ending_before, $status, $product_types): \Meraki\Model\GetOrganizationFirmwareUpgrades200ResponseInner[]
```

Get firmware upgrade information for an organization

Get firmware upgrade information for an organization

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


$apiInstance = new Meraki\Api\UpgradesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$status = array('status_example'); // string[] | Optional parameter to filter the upgrade by status.
$product_types = array('product_types_example'); // string[] | Optional parameter to filter the upgrade by product type.

try {
    $result = $apiInstance->getOrganizationFirmwareUpgrades($organization_id, $per_page, $starting_after, $ending_before, $status, $product_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UpgradesApi->getOrganizationFirmwareUpgrades: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **status** | [**string[]**](../Model/string.md)| Optional parameter to filter the upgrade by status. | [optional] |
| **product_types** | [**string[]**](../Model/string.md)| Optional parameter to filter the upgrade by product type. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationFirmwareUpgrades200ResponseInner[]**](../Model/GetOrganizationFirmwareUpgrades200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationFirmwareUpgradesByDevice()`

```php
getOrganizationFirmwareUpgradesByDevice($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $serials, $macs, $firmware_upgrade_batch_ids, $upgrade_statuses, $current_upgrades_only): \Meraki\Model\GetOrganizationFirmwareUpgradesByDevice200ResponseInner[]
```

Get firmware upgrade status for the filtered devices

Get firmware upgrade status for the filtered devices. This endpoint currently only supports Meraki switches.

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


$apiInstance = new Meraki\Api\UpgradesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 50.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter by network
$serials = array('serials_example'); // string[] | Optional parameter to filter by serial number.  All returned devices will have a serial number that is an exact match.
$macs = array('macs_example'); // string[] | Optional parameter to filter by one or more MAC addresses belonging to devices. All devices returned belong to MAC addresses that are an exact match.
$firmware_upgrade_batch_ids = array('firmware_upgrade_batch_ids_example'); // string[] | Optional parameter to filter by firmware upgrade batch ids.
$upgrade_statuses = array('upgrade_statuses_example'); // string[] | Optional parameter to filter by firmware upgrade statuses.
$current_upgrades_only = True; // bool | Optional parameter to filter to only current or pending upgrade statuses

try {
    $result = $apiInstance->getOrganizationFirmwareUpgradesByDevice($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $serials, $macs, $firmware_upgrade_batch_ids, $upgrade_statuses, $current_upgrades_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UpgradesApi->getOrganizationFirmwareUpgradesByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 50. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter by network | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter by serial number.  All returned devices will have a serial number that is an exact match. | [optional] |
| **macs** | [**string[]**](../Model/string.md)| Optional parameter to filter by one or more MAC addresses belonging to devices. All devices returned belong to MAC addresses that are an exact match. | [optional] |
| **firmware_upgrade_batch_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter by firmware upgrade batch ids. | [optional] |
| **upgrade_statuses** | [**string[]**](../Model/string.md)| Optional parameter to filter by firmware upgrade statuses. | [optional] |
| **current_upgrades_only** | **bool**| Optional parameter to filter to only current or pending upgrade statuses | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationFirmwareUpgradesByDevice200ResponseInner[]**](../Model/GetOrganizationFirmwareUpgradesByDevice200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
