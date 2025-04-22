# Meraki\BulkDeleteApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrganizationApplianceDnsLocalProfilesAssignmentsBulkDelete()**](BulkDeleteApi.md#createOrganizationApplianceDnsLocalProfilesAssignmentsBulkDelete) | **POST** /organizations/{organizationId}/appliance/dns/local/profiles/assignments/bulkDelete | Unassign the local DNS profile to networks in the organization |
| [**createOrganizationApplianceDnsSplitProfilesAssignmentsBulkDelete()**](BulkDeleteApi.md#createOrganizationApplianceDnsSplitProfilesAssignmentsBulkDelete) | **POST** /organizations/{organizationId}/appliance/dns/split/profiles/assignments/bulkDelete | Unassign the split DNS profile to networks in the organization |


## `createOrganizationApplianceDnsLocalProfilesAssignmentsBulkDelete()`

```php
createOrganizationApplianceDnsLocalProfilesAssignmentsBulkDelete($organization_id, $create_organization_appliance_dns_local_profiles_assignments_bulk_delete_request): \Meraki\Model\BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate200Response
```

Unassign the local DNS profile to networks in the organization

Unassign the local DNS profile to networks in the organization

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


$apiInstance = new Meraki\Api\BulkDeleteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_appliance_dns_local_profiles_assignments_bulk_delete_request = new \Meraki\Model\CreateOrganizationApplianceDnsLocalProfilesAssignmentsBulkDeleteRequest(); // \Meraki\Model\CreateOrganizationApplianceDnsLocalProfilesAssignmentsBulkDeleteRequest

try {
    $result = $apiInstance->createOrganizationApplianceDnsLocalProfilesAssignmentsBulkDelete($organization_id, $create_organization_appliance_dns_local_profiles_assignments_bulk_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkDeleteApi->createOrganizationApplianceDnsLocalProfilesAssignmentsBulkDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_appliance_dns_local_profiles_assignments_bulk_delete_request** | [**\Meraki\Model\CreateOrganizationApplianceDnsLocalProfilesAssignmentsBulkDeleteRequest**](../Model/CreateOrganizationApplianceDnsLocalProfilesAssignmentsBulkDeleteRequest.md)|  | |

### Return type

[**\Meraki\Model\BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate200Response**](../Model/BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationApplianceDnsSplitProfilesAssignmentsBulkDelete()`

```php
createOrganizationApplianceDnsSplitProfilesAssignmentsBulkDelete($organization_id, $create_organization_appliance_dns_local_profiles_assignments_bulk_delete_request): \Meraki\Model\CreateOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate200Response
```

Unassign the split DNS profile to networks in the organization

Unassign the split DNS profile to networks in the organization

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


$apiInstance = new Meraki\Api\BulkDeleteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_appliance_dns_local_profiles_assignments_bulk_delete_request = new \Meraki\Model\CreateOrganizationApplianceDnsLocalProfilesAssignmentsBulkDeleteRequest(); // \Meraki\Model\CreateOrganizationApplianceDnsLocalProfilesAssignmentsBulkDeleteRequest

try {
    $result = $apiInstance->createOrganizationApplianceDnsSplitProfilesAssignmentsBulkDelete($organization_id, $create_organization_appliance_dns_local_profiles_assignments_bulk_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkDeleteApi->createOrganizationApplianceDnsSplitProfilesAssignmentsBulkDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_appliance_dns_local_profiles_assignments_bulk_delete_request** | [**\Meraki\Model\CreateOrganizationApplianceDnsLocalProfilesAssignmentsBulkDeleteRequest**](../Model/CreateOrganizationApplianceDnsLocalProfilesAssignmentsBulkDeleteRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate200Response**](../Model/CreateOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
