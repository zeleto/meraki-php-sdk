# Meraki\VppAccountsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrganizationSmVppAccount()**](VppAccountsApi.md#getOrganizationSmVppAccount) | **GET** /organizations/{organizationId}/sm/vppAccounts/{vppAccountId} | Get a hash containing the unparsed token of the VPP account with the given ID |
| [**getOrganizationSmVppAccounts()**](VppAccountsApi.md#getOrganizationSmVppAccounts) | **GET** /organizations/{organizationId}/sm/vppAccounts | List the VPP accounts in the organization |


## `getOrganizationSmVppAccount()`

```php
getOrganizationSmVppAccount($organization_id, $vpp_account_id): \Meraki\Model\GetOrganizationSmVppAccounts200ResponseInner
```

Get a hash containing the unparsed token of the VPP account with the given ID

Get a hash containing the unparsed token of the VPP account with the given ID

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


$apiInstance = new Meraki\Api\VppAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$vpp_account_id = 'vpp_account_id_example'; // string | Vpp account ID

try {
    $result = $apiInstance->getOrganizationSmVppAccount($organization_id, $vpp_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VppAccountsApi->getOrganizationSmVppAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **vpp_account_id** | **string**| Vpp account ID | |

### Return type

[**\Meraki\Model\GetOrganizationSmVppAccounts200ResponseInner**](../Model/GetOrganizationSmVppAccounts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSmVppAccounts()`

```php
getOrganizationSmVppAccounts($organization_id): \Meraki\Model\GetOrganizationSmVppAccounts200ResponseInner[]
```

List the VPP accounts in the organization

List the VPP accounts in the organization

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


$apiInstance = new Meraki\Api\VppAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationSmVppAccounts($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VppAccountsApi->getOrganizationSmVppAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationSmVppAccounts200ResponseInner[]**](../Model/GetOrganizationSmVppAccounts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
