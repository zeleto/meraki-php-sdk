# Meraki\SplitApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrganizationApplianceDnsSplitProfile()**](SplitApi.md#createOrganizationApplianceDnsSplitProfile) | **POST** /organizations/{organizationId}/appliance/dns/split/profiles | Create a new split DNS profile |
| [**createOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate()**](SplitApi.md#createOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate) | **POST** /organizations/{organizationId}/appliance/dns/split/profiles/assignments/bulkCreate | Assign the split DNS profile to networks in the organization |
| [**createOrganizationApplianceDnsSplitProfilesAssignmentsBulkDelete()**](SplitApi.md#createOrganizationApplianceDnsSplitProfilesAssignmentsBulkDelete) | **POST** /organizations/{organizationId}/appliance/dns/split/profiles/assignments/bulkDelete | Unassign the split DNS profile to networks in the organization |
| [**deleteOrganizationApplianceDnsSplitProfile()**](SplitApi.md#deleteOrganizationApplianceDnsSplitProfile) | **DELETE** /organizations/{organizationId}/appliance/dns/split/profiles/{profileId} | Deletes a split DNS profile |
| [**getOrganizationApplianceDnsSplitProfiles()**](SplitApi.md#getOrganizationApplianceDnsSplitProfiles) | **GET** /organizations/{organizationId}/appliance/dns/split/profiles | Fetch the split DNS profiles used in the organization |
| [**getOrganizationApplianceDnsSplitProfilesAssignments()**](SplitApi.md#getOrganizationApplianceDnsSplitProfilesAssignments) | **GET** /organizations/{organizationId}/appliance/dns/split/profiles/assignments | Fetch the split DNS profile assignments in the organization |
| [**updateOrganizationApplianceDnsSplitProfile()**](SplitApi.md#updateOrganizationApplianceDnsSplitProfile) | **PUT** /organizations/{organizationId}/appliance/dns/split/profiles/{profileId} | Update a split DNS profile |


## `createOrganizationApplianceDnsSplitProfile()`

```php
createOrganizationApplianceDnsSplitProfile($organization_id, $create_organization_appliance_dns_split_profile_request): \Meraki\Model\GetOrganizationApplianceDnsSplitProfiles200ResponseInner
```

Create a new split DNS profile

Create a new split DNS profile

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


$apiInstance = new Meraki\Api\SplitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_appliance_dns_split_profile_request = new \Meraki\Model\CreateOrganizationApplianceDnsSplitProfileRequest(); // \Meraki\Model\CreateOrganizationApplianceDnsSplitProfileRequest

try {
    $result = $apiInstance->createOrganizationApplianceDnsSplitProfile($organization_id, $create_organization_appliance_dns_split_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SplitApi->createOrganizationApplianceDnsSplitProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_appliance_dns_split_profile_request** | [**\Meraki\Model\CreateOrganizationApplianceDnsSplitProfileRequest**](../Model/CreateOrganizationApplianceDnsSplitProfileRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationApplianceDnsSplitProfiles200ResponseInner**](../Model/GetOrganizationApplianceDnsSplitProfiles200ResponseInner.md)

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


$apiInstance = new Meraki\Api\SplitApi(
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
    echo 'Exception when calling SplitApi->createOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\SplitApi(
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
    echo 'Exception when calling SplitApi->createOrganizationApplianceDnsSplitProfilesAssignmentsBulkDelete: ', $e->getMessage(), PHP_EOL;
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

## `deleteOrganizationApplianceDnsSplitProfile()`

```php
deleteOrganizationApplianceDnsSplitProfile($organization_id, $profile_id)
```

Deletes a split DNS profile

Deletes a split DNS profile

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


$apiInstance = new Meraki\Api\SplitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$profile_id = 'profile_id_example'; // string | Profile ID

try {
    $apiInstance->deleteOrganizationApplianceDnsSplitProfile($organization_id, $profile_id);
} catch (Exception $e) {
    echo 'Exception when calling SplitApi->deleteOrganizationApplianceDnsSplitProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **profile_id** | **string**| Profile ID | |

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

## `getOrganizationApplianceDnsSplitProfiles()`

```php
getOrganizationApplianceDnsSplitProfiles($organization_id, $profile_ids): \Meraki\Model\GetOrganizationApplianceDnsSplitProfiles200ResponseInner[]
```

Fetch the split DNS profiles used in the organization

Fetch the split DNS profiles used in the organization

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


$apiInstance = new Meraki\Api\SplitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$profile_ids = array('profile_ids_example'); // string[] | Optional parameter to filter the results by profile IDs

try {
    $result = $apiInstance->getOrganizationApplianceDnsSplitProfiles($organization_id, $profile_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SplitApi->getOrganizationApplianceDnsSplitProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **profile_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the results by profile IDs | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApplianceDnsSplitProfiles200ResponseInner[]**](../Model/GetOrganizationApplianceDnsSplitProfiles200ResponseInner.md)

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


$apiInstance = new Meraki\Api\SplitApi(
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
    echo 'Exception when calling SplitApi->getOrganizationApplianceDnsSplitProfilesAssignments: ', $e->getMessage(), PHP_EOL;
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

## `updateOrganizationApplianceDnsSplitProfile()`

```php
updateOrganizationApplianceDnsSplitProfile($organization_id, $profile_id, $update_organization_appliance_dns_split_profile_request): \Meraki\Model\GetOrganizationApplianceDnsSplitProfiles200ResponseInner
```

Update a split DNS profile

Update a split DNS profile

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


$apiInstance = new Meraki\Api\SplitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$profile_id = 'profile_id_example'; // string | Profile ID
$update_organization_appliance_dns_split_profile_request = new \Meraki\Model\UpdateOrganizationApplianceDnsSplitProfileRequest(); // \Meraki\Model\UpdateOrganizationApplianceDnsSplitProfileRequest

try {
    $result = $apiInstance->updateOrganizationApplianceDnsSplitProfile($organization_id, $profile_id, $update_organization_appliance_dns_split_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SplitApi->updateOrganizationApplianceDnsSplitProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **profile_id** | **string**| Profile ID | |
| **update_organization_appliance_dns_split_profile_request** | [**\Meraki\Model\UpdateOrganizationApplianceDnsSplitProfileRequest**](../Model/UpdateOrganizationApplianceDnsSplitProfileRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApplianceDnsSplitProfiles200ResponseInner**](../Model/GetOrganizationApplianceDnsSplitProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
