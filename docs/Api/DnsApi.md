# Meraki\DnsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate()**](DnsApi.md#bulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate) | **POST** /organizations/{organizationId}/appliance/dns/local/profiles/assignments/bulkCreate | Assign the local DNS profile to networks in the organization |
| [**createOrganizationApplianceDnsLocalProfile()**](DnsApi.md#createOrganizationApplianceDnsLocalProfile) | **POST** /organizations/{organizationId}/appliance/dns/local/profiles | Create a new local DNS profile |
| [**createOrganizationApplianceDnsLocalProfilesAssignmentsBulkDelete()**](DnsApi.md#createOrganizationApplianceDnsLocalProfilesAssignmentsBulkDelete) | **POST** /organizations/{organizationId}/appliance/dns/local/profiles/assignments/bulkDelete | Unassign the local DNS profile to networks in the organization |
| [**createOrganizationApplianceDnsLocalRecord()**](DnsApi.md#createOrganizationApplianceDnsLocalRecord) | **POST** /organizations/{organizationId}/appliance/dns/local/records | Create a new local DNS record |
| [**createOrganizationApplianceDnsSplitProfile()**](DnsApi.md#createOrganizationApplianceDnsSplitProfile) | **POST** /organizations/{organizationId}/appliance/dns/split/profiles | Create a new split DNS profile |
| [**createOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate()**](DnsApi.md#createOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate) | **POST** /organizations/{organizationId}/appliance/dns/split/profiles/assignments/bulkCreate | Assign the split DNS profile to networks in the organization |
| [**createOrganizationApplianceDnsSplitProfilesAssignmentsBulkDelete()**](DnsApi.md#createOrganizationApplianceDnsSplitProfilesAssignmentsBulkDelete) | **POST** /organizations/{organizationId}/appliance/dns/split/profiles/assignments/bulkDelete | Unassign the split DNS profile to networks in the organization |
| [**deleteOrganizationApplianceDnsLocalProfile()**](DnsApi.md#deleteOrganizationApplianceDnsLocalProfile) | **DELETE** /organizations/{organizationId}/appliance/dns/local/profiles/{profileId} | Deletes a local DNS profile |
| [**deleteOrganizationApplianceDnsLocalRecord()**](DnsApi.md#deleteOrganizationApplianceDnsLocalRecord) | **DELETE** /organizations/{organizationId}/appliance/dns/local/records/{recordId} | Deletes a local DNS record |
| [**deleteOrganizationApplianceDnsSplitProfile()**](DnsApi.md#deleteOrganizationApplianceDnsSplitProfile) | **DELETE** /organizations/{organizationId}/appliance/dns/split/profiles/{profileId} | Deletes a split DNS profile |
| [**getOrganizationApplianceDnsLocalProfiles()**](DnsApi.md#getOrganizationApplianceDnsLocalProfiles) | **GET** /organizations/{organizationId}/appliance/dns/local/profiles | Fetch the local DNS profiles used in the organization |
| [**getOrganizationApplianceDnsLocalProfilesAssignments()**](DnsApi.md#getOrganizationApplianceDnsLocalProfilesAssignments) | **GET** /organizations/{organizationId}/appliance/dns/local/profiles/assignments | Fetch the local DNS profile assignments in the organization |
| [**getOrganizationApplianceDnsLocalRecords()**](DnsApi.md#getOrganizationApplianceDnsLocalRecords) | **GET** /organizations/{organizationId}/appliance/dns/local/records | Fetch the DNS records used in local DNS profiles |
| [**getOrganizationApplianceDnsSplitProfiles()**](DnsApi.md#getOrganizationApplianceDnsSplitProfiles) | **GET** /organizations/{organizationId}/appliance/dns/split/profiles | Fetch the split DNS profiles used in the organization |
| [**getOrganizationApplianceDnsSplitProfilesAssignments()**](DnsApi.md#getOrganizationApplianceDnsSplitProfilesAssignments) | **GET** /organizations/{organizationId}/appliance/dns/split/profiles/assignments | Fetch the split DNS profile assignments in the organization |
| [**updateOrganizationApplianceDnsLocalProfile()**](DnsApi.md#updateOrganizationApplianceDnsLocalProfile) | **PUT** /organizations/{organizationId}/appliance/dns/local/profiles/{profileId} | Update a local DNS profile |
| [**updateOrganizationApplianceDnsLocalRecord()**](DnsApi.md#updateOrganizationApplianceDnsLocalRecord) | **PUT** /organizations/{organizationId}/appliance/dns/local/records/{recordId} | Updates a local DNS record |
| [**updateOrganizationApplianceDnsSplitProfile()**](DnsApi.md#updateOrganizationApplianceDnsSplitProfile) | **PUT** /organizations/{organizationId}/appliance/dns/split/profiles/{profileId} | Update a split DNS profile |


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


$apiInstance = new Meraki\Api\DnsApi(
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
    echo 'Exception when calling DnsApi->bulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate: ', $e->getMessage(), PHP_EOL;
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

## `createOrganizationApplianceDnsLocalProfile()`

```php
createOrganizationApplianceDnsLocalProfile($organization_id, $create_organization_appliance_dns_local_profile_request): \Meraki\Model\GetOrganizationApplianceDnsLocalProfiles200ResponseInner
```

Create a new local DNS profile

Create a new local DNS profile

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


$apiInstance = new Meraki\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_appliance_dns_local_profile_request = new \Meraki\Model\CreateOrganizationApplianceDnsLocalProfileRequest(); // \Meraki\Model\CreateOrganizationApplianceDnsLocalProfileRequest

try {
    $result = $apiInstance->createOrganizationApplianceDnsLocalProfile($organization_id, $create_organization_appliance_dns_local_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->createOrganizationApplianceDnsLocalProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_appliance_dns_local_profile_request** | [**\Meraki\Model\CreateOrganizationApplianceDnsLocalProfileRequest**](../Model/CreateOrganizationApplianceDnsLocalProfileRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationApplianceDnsLocalProfiles200ResponseInner**](../Model/GetOrganizationApplianceDnsLocalProfiles200ResponseInner.md)

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


$apiInstance = new Meraki\Api\DnsApi(
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
    echo 'Exception when calling DnsApi->createOrganizationApplianceDnsLocalProfilesAssignmentsBulkDelete: ', $e->getMessage(), PHP_EOL;
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

## `createOrganizationApplianceDnsLocalRecord()`

```php
createOrganizationApplianceDnsLocalRecord($organization_id, $create_organization_appliance_dns_local_record_request): \Meraki\Model\GetOrganizationApplianceDnsLocalRecords200ResponseInner[]
```

Create a new local DNS record

Create a new local DNS record

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


$apiInstance = new Meraki\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_appliance_dns_local_record_request = new \Meraki\Model\CreateOrganizationApplianceDnsLocalRecordRequest(); // \Meraki\Model\CreateOrganizationApplianceDnsLocalRecordRequest

try {
    $result = $apiInstance->createOrganizationApplianceDnsLocalRecord($organization_id, $create_organization_appliance_dns_local_record_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->createOrganizationApplianceDnsLocalRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_appliance_dns_local_record_request** | [**\Meraki\Model\CreateOrganizationApplianceDnsLocalRecordRequest**](../Model/CreateOrganizationApplianceDnsLocalRecordRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationApplianceDnsLocalRecords200ResponseInner[]**](../Model/GetOrganizationApplianceDnsLocalRecords200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new Meraki\Api\DnsApi(
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
    echo 'Exception when calling DnsApi->createOrganizationApplianceDnsSplitProfile: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\DnsApi(
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
    echo 'Exception when calling DnsApi->createOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\DnsApi(
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
    echo 'Exception when calling DnsApi->createOrganizationApplianceDnsSplitProfilesAssignmentsBulkDelete: ', $e->getMessage(), PHP_EOL;
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

## `deleteOrganizationApplianceDnsLocalProfile()`

```php
deleteOrganizationApplianceDnsLocalProfile($organization_id, $profile_id)
```

Deletes a local DNS profile

Deletes a local DNS profile

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


$apiInstance = new Meraki\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$profile_id = 'profile_id_example'; // string | Profile ID

try {
    $apiInstance->deleteOrganizationApplianceDnsLocalProfile($organization_id, $profile_id);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->deleteOrganizationApplianceDnsLocalProfile: ', $e->getMessage(), PHP_EOL;
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

## `deleteOrganizationApplianceDnsLocalRecord()`

```php
deleteOrganizationApplianceDnsLocalRecord($organization_id, $record_id)
```

Deletes a local DNS record

Deletes a local DNS record

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


$apiInstance = new Meraki\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$record_id = 'record_id_example'; // string | Record ID

try {
    $apiInstance->deleteOrganizationApplianceDnsLocalRecord($organization_id, $record_id);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->deleteOrganizationApplianceDnsLocalRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **record_id** | **string**| Record ID | |

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


$apiInstance = new Meraki\Api\DnsApi(
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
    echo 'Exception when calling DnsApi->deleteOrganizationApplianceDnsSplitProfile: ', $e->getMessage(), PHP_EOL;
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

## `getOrganizationApplianceDnsLocalProfiles()`

```php
getOrganizationApplianceDnsLocalProfiles($organization_id, $profile_ids): \Meraki\Model\GetOrganizationApplianceDnsLocalProfiles200ResponseInner[]
```

Fetch the local DNS profiles used in the organization

Fetch the local DNS profiles used in the organization

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


$apiInstance = new Meraki\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$profile_ids = array('profile_ids_example'); // string[] | Optional parameter to filter the results by profile IDs

try {
    $result = $apiInstance->getOrganizationApplianceDnsLocalProfiles($organization_id, $profile_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->getOrganizationApplianceDnsLocalProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **profile_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the results by profile IDs | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApplianceDnsLocalProfiles200ResponseInner[]**](../Model/GetOrganizationApplianceDnsLocalProfiles200ResponseInner.md)

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


$apiInstance = new Meraki\Api\DnsApi(
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
    echo 'Exception when calling DnsApi->getOrganizationApplianceDnsLocalProfilesAssignments: ', $e->getMessage(), PHP_EOL;
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

## `getOrganizationApplianceDnsLocalRecords()`

```php
getOrganizationApplianceDnsLocalRecords($organization_id, $profile_ids): \Meraki\Model\GetOrganizationApplianceDnsLocalRecords200ResponseInner[]
```

Fetch the DNS records used in local DNS profiles

Fetch the DNS records used in local DNS profiles

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


$apiInstance = new Meraki\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$profile_ids = array('profile_ids_example'); // string[] | Optional parameter to filter the results by profile IDs

try {
    $result = $apiInstance->getOrganizationApplianceDnsLocalRecords($organization_id, $profile_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->getOrganizationApplianceDnsLocalRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **profile_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the results by profile IDs | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApplianceDnsLocalRecords200ResponseInner[]**](../Model/GetOrganizationApplianceDnsLocalRecords200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

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


$apiInstance = new Meraki\Api\DnsApi(
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
    echo 'Exception when calling DnsApi->getOrganizationApplianceDnsSplitProfiles: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\DnsApi(
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
    echo 'Exception when calling DnsApi->getOrganizationApplianceDnsSplitProfilesAssignments: ', $e->getMessage(), PHP_EOL;
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

## `updateOrganizationApplianceDnsLocalProfile()`

```php
updateOrganizationApplianceDnsLocalProfile($organization_id, $profile_id, $create_organization_appliance_dns_local_profile_request): \Meraki\Model\GetOrganizationApplianceDnsLocalProfiles200ResponseInner
```

Update a local DNS profile

Update a local DNS profile

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


$apiInstance = new Meraki\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$profile_id = 'profile_id_example'; // string | Profile ID
$create_organization_appliance_dns_local_profile_request = new \Meraki\Model\CreateOrganizationApplianceDnsLocalProfileRequest(); // \Meraki\Model\CreateOrganizationApplianceDnsLocalProfileRequest

try {
    $result = $apiInstance->updateOrganizationApplianceDnsLocalProfile($organization_id, $profile_id, $create_organization_appliance_dns_local_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->updateOrganizationApplianceDnsLocalProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **profile_id** | **string**| Profile ID | |
| **create_organization_appliance_dns_local_profile_request** | [**\Meraki\Model\CreateOrganizationApplianceDnsLocalProfileRequest**](../Model/CreateOrganizationApplianceDnsLocalProfileRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationApplianceDnsLocalProfiles200ResponseInner**](../Model/GetOrganizationApplianceDnsLocalProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationApplianceDnsLocalRecord()`

```php
updateOrganizationApplianceDnsLocalRecord($organization_id, $record_id, $update_organization_appliance_dns_local_record_request): \Meraki\Model\GetOrganizationApplianceDnsLocalRecords200ResponseInner
```

Updates a local DNS record

Updates a local DNS record

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


$apiInstance = new Meraki\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$record_id = 'record_id_example'; // string | Record ID
$update_organization_appliance_dns_local_record_request = new \Meraki\Model\UpdateOrganizationApplianceDnsLocalRecordRequest(); // \Meraki\Model\UpdateOrganizationApplianceDnsLocalRecordRequest

try {
    $result = $apiInstance->updateOrganizationApplianceDnsLocalRecord($organization_id, $record_id, $update_organization_appliance_dns_local_record_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->updateOrganizationApplianceDnsLocalRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **record_id** | **string**| Record ID | |
| **update_organization_appliance_dns_local_record_request** | [**\Meraki\Model\UpdateOrganizationApplianceDnsLocalRecordRequest**](../Model/UpdateOrganizationApplianceDnsLocalRecordRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApplianceDnsLocalRecords200ResponseInner**](../Model/GetOrganizationApplianceDnsLocalRecords200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
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


$apiInstance = new Meraki\Api\DnsApi(
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
    echo 'Exception when calling DnsApi->updateOrganizationApplianceDnsSplitProfile: ', $e->getMessage(), PHP_EOL;
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
