# Meraki\LicensesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assignOrganizationLicensesSeats()**](LicensesApi.md#assignOrganizationLicensesSeats) | **POST** /organizations/{organizationId}/licenses/assignSeats | Assign SM seats to a network |
| [**getOrganizationLicense()**](LicensesApi.md#getOrganizationLicense) | **GET** /organizations/{organizationId}/licenses/{licenseId} | Display a license |
| [**getOrganizationLicenses()**](LicensesApi.md#getOrganizationLicenses) | **GET** /organizations/{organizationId}/licenses | List the licenses for an organization |
| [**getOrganizationLicensesOverview()**](LicensesApi.md#getOrganizationLicensesOverview) | **GET** /organizations/{organizationId}/licenses/overview | Return an overview of the license state for an organization |
| [**getOrganizationLicensingCotermLicenses()**](LicensesApi.md#getOrganizationLicensingCotermLicenses) | **GET** /organizations/{organizationId}/licensing/coterm/licenses | List the licenses in a coterm organization |
| [**moveOrganizationLicenses()**](LicensesApi.md#moveOrganizationLicenses) | **POST** /organizations/{organizationId}/licenses/move | Move licenses to another organization |
| [**moveOrganizationLicensesSeats()**](LicensesApi.md#moveOrganizationLicensesSeats) | **POST** /organizations/{organizationId}/licenses/moveSeats | Move SM seats to another organization |
| [**moveOrganizationLicensingCotermLicenses()**](LicensesApi.md#moveOrganizationLicensingCotermLicenses) | **POST** /organizations/{organizationId}/licensing/coterm/licenses/move | Moves a license to a different organization (coterm only) |
| [**renewOrganizationLicensesSeats()**](LicensesApi.md#renewOrganizationLicensesSeats) | **POST** /organizations/{organizationId}/licenses/renewSeats | Renew SM seats of a license |
| [**updateOrganizationLicense()**](LicensesApi.md#updateOrganizationLicense) | **PUT** /organizations/{organizationId}/licenses/{licenseId} | Update a license |


## `assignOrganizationLicensesSeats()`

```php
assignOrganizationLicensesSeats($organization_id, $assign_organization_licenses_seats_request): \Meraki\Model\AssignOrganizationLicensesSeats200Response
```

Assign SM seats to a network

Assign SM seats to a network. This will increase the managed SM device limit of the network

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


$apiInstance = new Meraki\Api\LicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$assign_organization_licenses_seats_request = new \Meraki\Model\AssignOrganizationLicensesSeatsRequest(); // \Meraki\Model\AssignOrganizationLicensesSeatsRequest

try {
    $result = $apiInstance->assignOrganizationLicensesSeats($organization_id, $assign_organization_licenses_seats_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensesApi->assignOrganizationLicensesSeats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **assign_organization_licenses_seats_request** | [**\Meraki\Model\AssignOrganizationLicensesSeatsRequest**](../Model/AssignOrganizationLicensesSeatsRequest.md)|  | |

### Return type

[**\Meraki\Model\AssignOrganizationLicensesSeats200Response**](../Model/AssignOrganizationLicensesSeats200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationLicense()`

```php
getOrganizationLicense($organization_id, $license_id): \Meraki\Model\GetOrganizationLicenses200ResponseInner
```

Display a license

Display a license

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


$apiInstance = new Meraki\Api\LicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$license_id = 'license_id_example'; // string | License ID

try {
    $result = $apiInstance->getOrganizationLicense($organization_id, $license_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensesApi->getOrganizationLicense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **license_id** | **string**| License ID | |

### Return type

[**\Meraki\Model\GetOrganizationLicenses200ResponseInner**](../Model/GetOrganizationLicenses200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationLicenses()`

```php
getOrganizationLicenses($organization_id, $per_page, $starting_after, $ending_before, $device_serial, $network_id, $state): \Meraki\Model\GetOrganizationLicenses200ResponseInner[]
```

List the licenses for an organization

List the licenses for an organization

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


$apiInstance = new Meraki\Api\LicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$device_serial = 'device_serial_example'; // string | Filter the licenses to those assigned to a particular device. Returned in the same order that they are queued to the device.
$network_id = 'network_id_example'; // string | Filter the licenses to those assigned in a particular network
$state = 'state_example'; // string | Filter the licenses to those in a particular state. Can be one of 'active', 'expired', 'expiring', 'recentlyQueued', 'unused' or 'unusedActive'

try {
    $result = $apiInstance->getOrganizationLicenses($organization_id, $per_page, $starting_after, $ending_before, $device_serial, $network_id, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensesApi->getOrganizationLicenses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **device_serial** | **string**| Filter the licenses to those assigned to a particular device. Returned in the same order that they are queued to the device. | [optional] |
| **network_id** | **string**| Filter the licenses to those assigned in a particular network | [optional] |
| **state** | **string**| Filter the licenses to those in a particular state. Can be one of &#39;active&#39;, &#39;expired&#39;, &#39;expiring&#39;, &#39;recentlyQueued&#39;, &#39;unused&#39; or &#39;unusedActive&#39; | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationLicenses200ResponseInner[]**](../Model/GetOrganizationLicenses200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationLicensesOverview()`

```php
getOrganizationLicensesOverview($organization_id): \Meraki\Model\GetOrganizationLicensesOverview200Response
```

Return an overview of the license state for an organization

Return an overview of the license state for an organization

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


$apiInstance = new Meraki\Api\LicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationLicensesOverview($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensesApi->getOrganizationLicensesOverview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationLicensesOverview200Response**](../Model/GetOrganizationLicensesOverview200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new Meraki\Api\LicensesApi(
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
    echo 'Exception when calling LicensesApi->getOrganizationLicensingCotermLicenses: ', $e->getMessage(), PHP_EOL;
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

## `moveOrganizationLicenses()`

```php
moveOrganizationLicenses($organization_id, $move_organization_licenses_request): \Meraki\Model\MoveOrganizationLicenses200Response
```

Move licenses to another organization

Move licenses to another organization. This will also move any devices that the licenses are assigned to

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


$apiInstance = new Meraki\Api\LicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$move_organization_licenses_request = new \Meraki\Model\MoveOrganizationLicensesRequest(); // \Meraki\Model\MoveOrganizationLicensesRequest

try {
    $result = $apiInstance->moveOrganizationLicenses($organization_id, $move_organization_licenses_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensesApi->moveOrganizationLicenses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **move_organization_licenses_request** | [**\Meraki\Model\MoveOrganizationLicensesRequest**](../Model/MoveOrganizationLicensesRequest.md)|  | |

### Return type

[**\Meraki\Model\MoveOrganizationLicenses200Response**](../Model/MoveOrganizationLicenses200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `moveOrganizationLicensesSeats()`

```php
moveOrganizationLicensesSeats($organization_id, $move_organization_licenses_seats_request): \Meraki\Model\MoveOrganizationLicensesSeats200Response
```

Move SM seats to another organization

Move SM seats to another organization

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


$apiInstance = new Meraki\Api\LicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$move_organization_licenses_seats_request = new \Meraki\Model\MoveOrganizationLicensesSeatsRequest(); // \Meraki\Model\MoveOrganizationLicensesSeatsRequest

try {
    $result = $apiInstance->moveOrganizationLicensesSeats($organization_id, $move_organization_licenses_seats_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensesApi->moveOrganizationLicensesSeats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **move_organization_licenses_seats_request** | [**\Meraki\Model\MoveOrganizationLicensesSeatsRequest**](../Model/MoveOrganizationLicensesSeatsRequest.md)|  | |

### Return type

[**\Meraki\Model\MoveOrganizationLicensesSeats200Response**](../Model/MoveOrganizationLicensesSeats200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
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


$apiInstance = new Meraki\Api\LicensesApi(
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
    echo 'Exception when calling LicensesApi->moveOrganizationLicensingCotermLicenses: ', $e->getMessage(), PHP_EOL;
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

## `renewOrganizationLicensesSeats()`

```php
renewOrganizationLicensesSeats($organization_id, $renew_organization_licenses_seats_request): \Meraki\Model\AssignOrganizationLicensesSeats200Response
```

Renew SM seats of a license

Renew SM seats of a license. This will extend the license expiration date of managed SM devices covered by this license

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


$apiInstance = new Meraki\Api\LicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$renew_organization_licenses_seats_request = new \Meraki\Model\RenewOrganizationLicensesSeatsRequest(); // \Meraki\Model\RenewOrganizationLicensesSeatsRequest

try {
    $result = $apiInstance->renewOrganizationLicensesSeats($organization_id, $renew_organization_licenses_seats_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensesApi->renewOrganizationLicensesSeats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **renew_organization_licenses_seats_request** | [**\Meraki\Model\RenewOrganizationLicensesSeatsRequest**](../Model/RenewOrganizationLicensesSeatsRequest.md)|  | |

### Return type

[**\Meraki\Model\AssignOrganizationLicensesSeats200Response**](../Model/AssignOrganizationLicensesSeats200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationLicense()`

```php
updateOrganizationLicense($organization_id, $license_id, $update_organization_license_request): \Meraki\Model\GetOrganizationLicenses200ResponseInner
```

Update a license

Update a license

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


$apiInstance = new Meraki\Api\LicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$license_id = 'license_id_example'; // string | License ID
$update_organization_license_request = new \Meraki\Model\UpdateOrganizationLicenseRequest(); // \Meraki\Model\UpdateOrganizationLicenseRequest

try {
    $result = $apiInstance->updateOrganizationLicense($organization_id, $license_id, $update_organization_license_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensesApi->updateOrganizationLicense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **license_id** | **string**| License ID | |
| **update_organization_license_request** | [**\Meraki\Model\UpdateOrganizationLicenseRequest**](../Model/UpdateOrganizationLicenseRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationLicenses200ResponseInner**](../Model/GetOrganizationLicenses200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
