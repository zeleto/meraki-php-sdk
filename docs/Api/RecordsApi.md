# Meraki\RecordsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrganizationApplianceDnsLocalRecord()**](RecordsApi.md#createOrganizationApplianceDnsLocalRecord) | **POST** /organizations/{organizationId}/appliance/dns/local/records | Create a new local DNS record |
| [**deleteOrganizationApplianceDnsLocalRecord()**](RecordsApi.md#deleteOrganizationApplianceDnsLocalRecord) | **DELETE** /organizations/{organizationId}/appliance/dns/local/records/{recordId} | Deletes a local DNS record |
| [**getOrganizationApplianceDnsLocalRecords()**](RecordsApi.md#getOrganizationApplianceDnsLocalRecords) | **GET** /organizations/{organizationId}/appliance/dns/local/records | Fetch the DNS records used in local DNS profiles |
| [**updateOrganizationApplianceDnsLocalRecord()**](RecordsApi.md#updateOrganizationApplianceDnsLocalRecord) | **PUT** /organizations/{organizationId}/appliance/dns/local/records/{recordId} | Updates a local DNS record |


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


$apiInstance = new Meraki\Api\RecordsApi(
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
    echo 'Exception when calling RecordsApi->createOrganizationApplianceDnsLocalRecord: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\RecordsApi(
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
    echo 'Exception when calling RecordsApi->deleteOrganizationApplianceDnsLocalRecord: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\RecordsApi(
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
    echo 'Exception when calling RecordsApi->getOrganizationApplianceDnsLocalRecords: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\RecordsApi(
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
    echo 'Exception when calling RecordsApi->updateOrganizationApplianceDnsLocalRecord: ', $e->getMessage(), PHP_EOL;
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
