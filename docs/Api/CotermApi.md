# Meraki\CotermApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrganizationLicensingCotermLicenses()**](CotermApi.md#getOrganizationLicensingCotermLicenses) | **GET** /organizations/{organizationId}/licensing/coterm/licenses | List the licenses in a coterm organization |
| [**moveOrganizationLicensingCotermLicenses()**](CotermApi.md#moveOrganizationLicensingCotermLicenses) | **POST** /organizations/{organizationId}/licensing/coterm/licenses/move | Moves a license to a different organization (coterm only) |


## `getOrganizationLicensingCotermLicenses()`

```php
getOrganizationLicensingCotermLicenses($organization_id, $per_page, $starting_after, $ending_before, $invalidated, $expired): \Meraki\Model\GetOrganizationLicensingCotermLicenses200ResponseInner[]
```

List the licenses in a coterm organization

List the licenses in a coterm organization

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


$apiInstance = new Meraki\Api\CotermApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$invalidated = True; // bool | Filter for licenses that are invalidated
$expired = True; // bool | Filter for licenses that are expired

try {
    $result = $apiInstance->getOrganizationLicensingCotermLicenses($organization_id, $per_page, $starting_after, $ending_before, $invalidated, $expired);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CotermApi->getOrganizationLicensingCotermLicenses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **invalidated** | **bool**| Filter for licenses that are invalidated | [optional] |
| **expired** | **bool**| Filter for licenses that are expired | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationLicensingCotermLicenses200ResponseInner[]**](../Model/GetOrganizationLicensingCotermLicenses200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `moveOrganizationLicensingCotermLicenses()`

```php
moveOrganizationLicensingCotermLicenses($organization_id, $move_organization_licensing_coterm_licenses_request): \Meraki\Model\MoveOrganizationLicensingCotermLicenses200Response
```

Moves a license to a different organization (coterm only)

Moves a license to a different organization (coterm only)

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


$apiInstance = new Meraki\Api\CotermApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$move_organization_licensing_coterm_licenses_request = new \Meraki\Model\MoveOrganizationLicensingCotermLicensesRequest(); // \Meraki\Model\MoveOrganizationLicensingCotermLicensesRequest

try {
    $result = $apiInstance->moveOrganizationLicensingCotermLicenses($organization_id, $move_organization_licensing_coterm_licenses_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CotermApi->moveOrganizationLicensingCotermLicenses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **move_organization_licensing_coterm_licenses_request** | [**\Meraki\Model\MoveOrganizationLicensingCotermLicensesRequest**](../Model/MoveOrganizationLicensingCotermLicensesRequest.md)|  | |

### Return type

[**\Meraki\Model\MoveOrganizationLicensingCotermLicenses200Response**](../Model/MoveOrganizationLicensingCotermLicenses200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
