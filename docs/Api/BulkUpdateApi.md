# Meraki\BulkUpdateApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkUpdateOrganizationDevicesDetails()**](BulkUpdateApi.md#bulkUpdateOrganizationDevicesDetails) | **POST** /organizations/{organizationId}/devices/details/bulkUpdate | Updating device details (currently only used for Catalyst devices) |


## `bulkUpdateOrganizationDevicesDetails()`

```php
bulkUpdateOrganizationDevicesDetails($organization_id, $bulk_update_organization_devices_details_request): \Meraki\Model\BulkUpdateOrganizationDevicesDetails200Response
```

Updating device details (currently only used for Catalyst devices)

Updating device details (currently only used for Catalyst devices)

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


$apiInstance = new Meraki\Api\BulkUpdateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$bulk_update_organization_devices_details_request = new \Meraki\Model\BulkUpdateOrganizationDevicesDetailsRequest(); // \Meraki\Model\BulkUpdateOrganizationDevicesDetailsRequest

try {
    $result = $apiInstance->bulkUpdateOrganizationDevicesDetails($organization_id, $bulk_update_organization_devices_details_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkUpdateApi->bulkUpdateOrganizationDevicesDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **bulk_update_organization_devices_details_request** | [**\Meraki\Model\BulkUpdateOrganizationDevicesDetailsRequest**](../Model/BulkUpdateOrganizationDevicesDetailsRequest.md)|  | |

### Return type

[**\Meraki\Model\BulkUpdateOrganizationDevicesDetails200Response**](../Model/BulkUpdateOrganizationDevicesDetails200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
