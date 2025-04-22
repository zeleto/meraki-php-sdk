# Meraki\AssignmentsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate()**](AssignmentsApi.md#bulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate) | **POST** /organizations/{organizationId}/appliance/dns/local/profiles/assignments/bulkCreate | Assign the local DNS profile to networks in the organization |
| [**createOrganizationApplianceDnsLocalProfilesAssignmentsBulkDelete()**](AssignmentsApi.md#createOrganizationApplianceDnsLocalProfilesAssignmentsBulkDelete) | **POST** /organizations/{organizationId}/appliance/dns/local/profiles/assignments/bulkDelete | Unassign the local DNS profile to networks in the organization |
| [**createOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate()**](AssignmentsApi.md#createOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate) | **POST** /organizations/{organizationId}/appliance/dns/split/profiles/assignments/bulkCreate | Assign the split DNS profile to networks in the organization |
| [**createOrganizationApplianceDnsSplitProfilesAssignmentsBulkDelete()**](AssignmentsApi.md#createOrganizationApplianceDnsSplitProfilesAssignmentsBulkDelete) | **POST** /organizations/{organizationId}/appliance/dns/split/profiles/assignments/bulkDelete | Unassign the split DNS profile to networks in the organization |
| [**getNetworkVlanProfilesAssignmentsByDevice()**](AssignmentsApi.md#getNetworkVlanProfilesAssignmentsByDevice) | **GET** /networks/{networkId}/vlanProfiles/assignments/byDevice | Get the assigned VLAN Profiles for devices in a network |
| [**getOrganizationApplianceDnsLocalProfilesAssignments()**](AssignmentsApi.md#getOrganizationApplianceDnsLocalProfilesAssignments) | **GET** /organizations/{organizationId}/appliance/dns/local/profiles/assignments | Fetch the local DNS profile assignments in the organization |
| [**getOrganizationApplianceDnsSplitProfilesAssignments()**](AssignmentsApi.md#getOrganizationApplianceDnsSplitProfilesAssignments) | **GET** /organizations/{organizationId}/appliance/dns/split/profiles/assignments | Fetch the split DNS profile assignments in the organization |
| [**getOrganizationSmSentryPoliciesAssignmentsByNetwork()**](AssignmentsApi.md#getOrganizationSmSentryPoliciesAssignmentsByNetwork) | **GET** /organizations/{organizationId}/sm/sentry/policies/assignments/byNetwork | List the Sentry Policies for an organization ordered in ascending order of priority |
| [**getOrganizationWirelessRfProfilesAssignmentsByDevice()**](AssignmentsApi.md#getOrganizationWirelessRfProfilesAssignmentsByDevice) | **GET** /organizations/{organizationId}/wireless/rfProfiles/assignments/byDevice | List the RF profiles of an organization by device |
| [**reassignNetworkVlanProfilesAssignments()**](AssignmentsApi.md#reassignNetworkVlanProfilesAssignments) | **POST** /networks/{networkId}/vlanProfiles/assignments/reassign | Update the assigned VLAN Profile for devices in a network |
| [**updateOrganizationSmSentryPoliciesAssignments()**](AssignmentsApi.md#updateOrganizationSmSentryPoliciesAssignments) | **PUT** /organizations/{organizationId}/sm/sentry/policies/assignments | Update an Organizations Sentry Policies using the provided list |


## `bulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate()`

```php
bulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate($organization_id, $bulk_organization_appliance_dns_local_profiles_assignments_create_request): \Meraki\Model\BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate200Response
```

Assign the local DNS profile to networks in the organization

Assign the local DNS profile to networks in the organization

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


$apiInstance = new Meraki\Api\AssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$bulk_organization_appliance_dns_local_profiles_assignments_create_request = new \Meraki\Model\BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreateRequest(); // \Meraki\Model\BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreateRequest

try {
    $result = $apiInstance->bulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate($organization_id, $bulk_organization_appliance_dns_local_profiles_assignments_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentsApi->bulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **bulk_organization_appliance_dns_local_profiles_assignments_create_request** | [**\Meraki\Model\BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreateRequest**](../Model/BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreateRequest.md)|  | |

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


$apiInstance = new Meraki\Api\AssignmentsApi(
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
    echo 'Exception when calling AssignmentsApi->createOrganizationApplianceDnsLocalProfilesAssignmentsBulkDelete: ', $e->getMessage(), PHP_EOL;
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

## `createOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate()`

```php
createOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate($organization_id, $bulk_organization_appliance_dns_local_profiles_assignments_create_request): \Meraki\Model\CreateOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate200Response
```

Assign the split DNS profile to networks in the organization

Assign the split DNS profile to networks in the organization

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


$apiInstance = new Meraki\Api\AssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$bulk_organization_appliance_dns_local_profiles_assignments_create_request = new \Meraki\Model\BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreateRequest(); // \Meraki\Model\BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreateRequest

try {
    $result = $apiInstance->createOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate($organization_id, $bulk_organization_appliance_dns_local_profiles_assignments_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentsApi->createOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **bulk_organization_appliance_dns_local_profiles_assignments_create_request** | [**\Meraki\Model\BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreateRequest**](../Model/BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreateRequest.md)|  | |

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


$apiInstance = new Meraki\Api\AssignmentsApi(
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
    echo 'Exception when calling AssignmentsApi->createOrganizationApplianceDnsSplitProfilesAssignmentsBulkDelete: ', $e->getMessage(), PHP_EOL;
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

## `getNetworkVlanProfilesAssignmentsByDevice()`

```php
getNetworkVlanProfilesAssignmentsByDevice($network_id, $per_page, $starting_after, $ending_before, $serials, $product_types, $stack_ids): \Meraki\Model\GetNetworkVlanProfilesAssignmentsByDevice200ResponseInner[]
```

Get the assigned VLAN Profiles for devices in a network

Get the assigned VLAN Profiles for devices in a network

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


$apiInstance = new Meraki\Api\AssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$serials = array('serials_example'); // string[] | Optional parameter to filter devices by serials. All devices returned belong to serial numbers that are an exact match.
$product_types = array('product_types_example'); // string[] | Optional parameter to filter devices by product types.
$stack_ids = array('stack_ids_example'); // string[] | Optional parameter to filter devices by Switch Stack ids.

try {
    $result = $apiInstance->getNetworkVlanProfilesAssignmentsByDevice($network_id, $per_page, $starting_after, $ending_before, $serials, $product_types, $stack_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentsApi->getNetworkVlanProfilesAssignmentsByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by serials. All devices returned belong to serial numbers that are an exact match. | [optional] |
| **product_types** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by product types. | [optional] |
| **stack_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by Switch Stack ids. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkVlanProfilesAssignmentsByDevice200ResponseInner[]**](../Model/GetNetworkVlanProfilesAssignmentsByDevice200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationApplianceDnsLocalProfilesAssignments()`

```php
getOrganizationApplianceDnsLocalProfilesAssignments($organization_id, $profile_ids, $network_ids): \Meraki\Model\GetOrganizationApplianceDnsLocalProfilesAssignments200Response
```

Fetch the local DNS profile assignments in the organization

Fetch the local DNS profile assignments in the organization

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


$apiInstance = new Meraki\Api\AssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$profile_ids = array('profile_ids_example'); // string[] | Optional parameter to filter the results by profile IDs
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter the results by network IDs

try {
    $result = $apiInstance->getOrganizationApplianceDnsLocalProfilesAssignments($organization_id, $profile_ids, $network_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentsApi->getOrganizationApplianceDnsLocalProfilesAssignments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **profile_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the results by profile IDs | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the results by network IDs | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApplianceDnsLocalProfilesAssignments200Response**](../Model/GetOrganizationApplianceDnsLocalProfilesAssignments200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationApplianceDnsSplitProfilesAssignments()`

```php
getOrganizationApplianceDnsSplitProfilesAssignments($organization_id, $profile_ids, $network_ids): \Meraki\Model\GetOrganizationApplianceDnsSplitProfilesAssignments200Response
```

Fetch the split DNS profile assignments in the organization

Fetch the split DNS profile assignments in the organization

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


$apiInstance = new Meraki\Api\AssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$profile_ids = array('profile_ids_example'); // string[] | Optional parameter to filter the results by profile IDs
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter the results by network IDs

try {
    $result = $apiInstance->getOrganizationApplianceDnsSplitProfilesAssignments($organization_id, $profile_ids, $network_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentsApi->getOrganizationApplianceDnsSplitProfilesAssignments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **profile_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the results by profile IDs | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the results by network IDs | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApplianceDnsSplitProfilesAssignments200Response**](../Model/GetOrganizationApplianceDnsSplitProfilesAssignments200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSmSentryPoliciesAssignmentsByNetwork()`

```php
getOrganizationSmSentryPoliciesAssignmentsByNetwork($organization_id, $per_page, $starting_after, $ending_before, $network_ids): \Meraki\Model\GetOrganizationSmSentryPoliciesAssignmentsByNetwork200ResponseInner[]
```

List the Sentry Policies for an organization ordered in ascending order of priority

List the Sentry Policies for an organization ordered in ascending order of priority

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


$apiInstance = new Meraki\Api\AssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 50.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter Sentry Policies by Network Id

try {
    $result = $apiInstance->getOrganizationSmSentryPoliciesAssignmentsByNetwork($organization_id, $per_page, $starting_after, $ending_before, $network_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentsApi->getOrganizationSmSentryPoliciesAssignmentsByNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 50. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter Sentry Policies by Network Id | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSmSentryPoliciesAssignmentsByNetwork200ResponseInner[]**](../Model/GetOrganizationSmSentryPoliciesAssignmentsByNetwork200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessRfProfilesAssignmentsByDevice()`

```php
getOrganizationWirelessRfProfilesAssignmentsByDevice($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $product_types, $name, $mac, $serial, $model, $macs, $serials, $models): \Meraki\Model\GetOrganizationWirelessRfProfilesAssignmentsByDevice200ResponseInner[]
```

List the RF profiles of an organization by device

List the RF profiles of an organization by device

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


$apiInstance = new Meraki\Api\AssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter devices by network.
$product_types = array('product_types_example'); // string[] | Optional parameter to filter devices by product type. Valid types are wireless, appliance, switch, systemsManager, camera, cellularGateway, sensor, wirelessController, and secureConnect.
$name = 'name_example'; // string | Optional parameter to filter RF profiles by device name. All returned devices will have a name that contains the search term or is an exact match.
$mac = 'mac_example'; // string | Optional parameter to filter RF profiles by device MAC address. All returned devices will have a MAC address that contains the search term or is an exact match.
$serial = 'serial_example'; // string | Optional parameter to filter RF profiles by device serial number. All returned devices will have a serial number that contains the search term or is an exact match.
$model = 'model_example'; // string | Optional parameter to filter RF profiles by device model. All returned devices will have a model that contains the search term or is an exact match.
$macs = array('macs_example'); // string[] | Optional parameter to filter RF profiles by one or more device MAC addresses. All returned devices will have a MAC address that is an exact match.
$serials = array('serials_example'); // string[] | Optional parameter to filter RF profiles by one or more device serial numbers. All returned devices will have a serial number that is an exact match.
$models = array('models_example'); // string[] | Optional parameter to filter RF profiles by one or more device models. All returned devices will have a model that is an exact match.

try {
    $result = $apiInstance->getOrganizationWirelessRfProfilesAssignmentsByDevice($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $product_types, $name, $mac, $serial, $model, $macs, $serials, $models);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentsApi->getOrganizationWirelessRfProfilesAssignmentsByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by network. | [optional] |
| **product_types** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by product type. Valid types are wireless, appliance, switch, systemsManager, camera, cellularGateway, sensor, wirelessController, and secureConnect. | [optional] |
| **name** | **string**| Optional parameter to filter RF profiles by device name. All returned devices will have a name that contains the search term or is an exact match. | [optional] |
| **mac** | **string**| Optional parameter to filter RF profiles by device MAC address. All returned devices will have a MAC address that contains the search term or is an exact match. | [optional] |
| **serial** | **string**| Optional parameter to filter RF profiles by device serial number. All returned devices will have a serial number that contains the search term or is an exact match. | [optional] |
| **model** | **string**| Optional parameter to filter RF profiles by device model. All returned devices will have a model that contains the search term or is an exact match. | [optional] |
| **macs** | [**string[]**](../Model/string.md)| Optional parameter to filter RF profiles by one or more device MAC addresses. All returned devices will have a MAC address that is an exact match. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter RF profiles by one or more device serial numbers. All returned devices will have a serial number that is an exact match. | [optional] |
| **models** | [**string[]**](../Model/string.md)| Optional parameter to filter RF profiles by one or more device models. All returned devices will have a model that is an exact match. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessRfProfilesAssignmentsByDevice200ResponseInner[]**](../Model/GetOrganizationWirelessRfProfilesAssignmentsByDevice200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reassignNetworkVlanProfilesAssignments()`

```php
reassignNetworkVlanProfilesAssignments($network_id, $reassign_network_vlan_profiles_assignments_request): \Meraki\Model\ReassignNetworkVlanProfilesAssignments200Response
```

Update the assigned VLAN Profile for devices in a network

Update the assigned VLAN Profile for devices in a network

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


$apiInstance = new Meraki\Api\AssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$reassign_network_vlan_profiles_assignments_request = new \Meraki\Model\ReassignNetworkVlanProfilesAssignmentsRequest(); // \Meraki\Model\ReassignNetworkVlanProfilesAssignmentsRequest

try {
    $result = $apiInstance->reassignNetworkVlanProfilesAssignments($network_id, $reassign_network_vlan_profiles_assignments_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentsApi->reassignNetworkVlanProfilesAssignments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **reassign_network_vlan_profiles_assignments_request** | [**\Meraki\Model\ReassignNetworkVlanProfilesAssignmentsRequest**](../Model/ReassignNetworkVlanProfilesAssignmentsRequest.md)|  | |

### Return type

[**\Meraki\Model\ReassignNetworkVlanProfilesAssignments200Response**](../Model/ReassignNetworkVlanProfilesAssignments200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationSmSentryPoliciesAssignments()`

```php
updateOrganizationSmSentryPoliciesAssignments($organization_id, $update_organization_sm_sentry_policies_assignments_request): \Meraki\Model\UpdateOrganizationSmSentryPoliciesAssignments200Response
```

Update an Organizations Sentry Policies using the provided list

Update an Organizations Sentry Policies using the provided list. Sentry Policies are ordered in descending order of priority (i.e. highest priority at the bottom, this is opposite the Dashboard UI). Policies not present in the request will be deleted.

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


$apiInstance = new Meraki\Api\AssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$update_organization_sm_sentry_policies_assignments_request = new \Meraki\Model\UpdateOrganizationSmSentryPoliciesAssignmentsRequest(); // \Meraki\Model\UpdateOrganizationSmSentryPoliciesAssignmentsRequest

try {
    $result = $apiInstance->updateOrganizationSmSentryPoliciesAssignments($organization_id, $update_organization_sm_sentry_policies_assignments_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentsApi->updateOrganizationSmSentryPoliciesAssignments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **update_organization_sm_sentry_policies_assignments_request** | [**\Meraki\Model\UpdateOrganizationSmSentryPoliciesAssignmentsRequest**](../Model/UpdateOrganizationSmSentryPoliciesAssignmentsRequest.md)|  | |

### Return type

[**\Meraki\Model\UpdateOrganizationSmSentryPoliciesAssignments200Response**](../Model/UpdateOrganizationSmSentryPoliciesAssignments200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
