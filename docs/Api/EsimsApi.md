# Meraki\EsimsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrganizationCellularGatewayEsimsServiceProvidersAccount()**](EsimsApi.md#createOrganizationCellularGatewayEsimsServiceProvidersAccount) | **POST** /organizations/{organizationId}/cellularGateway/esims/serviceProviders/accounts | Add a service provider account. |
| [**createOrganizationCellularGatewayEsimsSwap()**](EsimsApi.md#createOrganizationCellularGatewayEsimsSwap) | **POST** /organizations/{organizationId}/cellularGateway/esims/swap | Swap which profile an eSIM uses. |
| [**deleteOrganizationCellularGatewayEsimsServiceProvidersAccount()**](EsimsApi.md#deleteOrganizationCellularGatewayEsimsServiceProvidersAccount) | **DELETE** /organizations/{organizationId}/cellularGateway/esims/serviceProviders/accounts/{accountId} | Remove a service provider account&#39;s integration with the Dashboard. |
| [**getOrganizationCellularGatewayEsimsInventory()**](EsimsApi.md#getOrganizationCellularGatewayEsimsInventory) | **GET** /organizations/{organizationId}/cellularGateway/esims/inventory | The eSIM inventory of a given organization. |
| [**getOrganizationCellularGatewayEsimsServiceProviders()**](EsimsApi.md#getOrganizationCellularGatewayEsimsServiceProviders) | **GET** /organizations/{organizationId}/cellularGateway/esims/serviceProviders | Service providers customers can add accounts for. |
| [**getOrganizationCellularGatewayEsimsServiceProvidersAccounts()**](EsimsApi.md#getOrganizationCellularGatewayEsimsServiceProvidersAccounts) | **GET** /organizations/{organizationId}/cellularGateway/esims/serviceProviders/accounts | Inventory of service provider accounts tied to the organization. |
| [**getOrganizationCellularGatewayEsimsServiceProvidersAccountsCommunicationPlans()**](EsimsApi.md#getOrganizationCellularGatewayEsimsServiceProvidersAccountsCommunicationPlans) | **GET** /organizations/{organizationId}/cellularGateway/esims/serviceProviders/accounts/communicationPlans | The communication plans available for a given provider. |
| [**getOrganizationCellularGatewayEsimsServiceProvidersAccountsRatePlans()**](EsimsApi.md#getOrganizationCellularGatewayEsimsServiceProvidersAccountsRatePlans) | **GET** /organizations/{organizationId}/cellularGateway/esims/serviceProviders/accounts/ratePlans | The rate plans available for a given provider. |
| [**updateOrganizationCellularGatewayEsimsInventory()**](EsimsApi.md#updateOrganizationCellularGatewayEsimsInventory) | **PUT** /organizations/{organizationId}/cellularGateway/esims/inventory/{id} | Toggle the status of an eSIM |
| [**updateOrganizationCellularGatewayEsimsServiceProvidersAccount()**](EsimsApi.md#updateOrganizationCellularGatewayEsimsServiceProvidersAccount) | **PUT** /organizations/{organizationId}/cellularGateway/esims/serviceProviders/accounts/{accountId} | Edit service provider account info stored in Meraki&#39;s database. |
| [**updateOrganizationCellularGatewayEsimsSwap()**](EsimsApi.md#updateOrganizationCellularGatewayEsimsSwap) | **PUT** /organizations/{organizationId}/cellularGateway/esims/swap/{id} | Get the status of a profile swap. |


## `createOrganizationCellularGatewayEsimsServiceProvidersAccount()`

```php
createOrganizationCellularGatewayEsimsServiceProvidersAccount($organization_id, $create_organization_cellular_gateway_esims_service_providers_account_request): \Meraki\Model\GetOrganizationCellularGatewayEsimsServiceProvidersAccounts200ResponseInnerItemsInner
```

Add a service provider account.

Add a service provider account.

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


$apiInstance = new Meraki\Api\EsimsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_cellular_gateway_esims_service_providers_account_request = new \Meraki\Model\CreateOrganizationCellularGatewayEsimsServiceProvidersAccountRequest(); // \Meraki\Model\CreateOrganizationCellularGatewayEsimsServiceProvidersAccountRequest

try {
    $result = $apiInstance->createOrganizationCellularGatewayEsimsServiceProvidersAccount($organization_id, $create_organization_cellular_gateway_esims_service_providers_account_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EsimsApi->createOrganizationCellularGatewayEsimsServiceProvidersAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_cellular_gateway_esims_service_providers_account_request** | [**\Meraki\Model\CreateOrganizationCellularGatewayEsimsServiceProvidersAccountRequest**](../Model/CreateOrganizationCellularGatewayEsimsServiceProvidersAccountRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationCellularGatewayEsimsServiceProvidersAccounts200ResponseInnerItemsInner**](../Model/GetOrganizationCellularGatewayEsimsServiceProvidersAccounts200ResponseInnerItemsInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationCellularGatewayEsimsSwap()`

```php
createOrganizationCellularGatewayEsimsSwap($organization_id, $create_organization_cellular_gateway_esims_swap_request): \Meraki\Model\CreateOrganizationCellularGatewayEsimsSwap200Response
```

Swap which profile an eSIM uses.

Swap which profile an eSIM uses.

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


$apiInstance = new Meraki\Api\EsimsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_cellular_gateway_esims_swap_request = new \Meraki\Model\CreateOrganizationCellularGatewayEsimsSwapRequest(); // \Meraki\Model\CreateOrganizationCellularGatewayEsimsSwapRequest

try {
    $result = $apiInstance->createOrganizationCellularGatewayEsimsSwap($organization_id, $create_organization_cellular_gateway_esims_swap_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EsimsApi->createOrganizationCellularGatewayEsimsSwap: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_cellular_gateway_esims_swap_request** | [**\Meraki\Model\CreateOrganizationCellularGatewayEsimsSwapRequest**](../Model/CreateOrganizationCellularGatewayEsimsSwapRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateOrganizationCellularGatewayEsimsSwap200Response**](../Model/CreateOrganizationCellularGatewayEsimsSwap200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrganizationCellularGatewayEsimsServiceProvidersAccount()`

```php
deleteOrganizationCellularGatewayEsimsServiceProvidersAccount($organization_id, $account_id)
```

Remove a service provider account's integration with the Dashboard.

Remove a service provider account's integration with the Dashboard.

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


$apiInstance = new Meraki\Api\EsimsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$account_id = 'account_id_example'; // string | Account ID

try {
    $apiInstance->deleteOrganizationCellularGatewayEsimsServiceProvidersAccount($organization_id, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling EsimsApi->deleteOrganizationCellularGatewayEsimsServiceProvidersAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **account_id** | **string**| Account ID | |

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

## `getOrganizationCellularGatewayEsimsInventory()`

```php
getOrganizationCellularGatewayEsimsInventory($organization_id, $eids): \Meraki\Model\GetOrganizationCellularGatewayEsimsInventory200Response
```

The eSIM inventory of a given organization.

The eSIM inventory of a given organization.

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


$apiInstance = new Meraki\Api\EsimsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$eids = array('eids_example'); // string[] | Optional parameter to filter the results by EID.

try {
    $result = $apiInstance->getOrganizationCellularGatewayEsimsInventory($organization_id, $eids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EsimsApi->getOrganizationCellularGatewayEsimsInventory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **eids** | [**string[]**](../Model/string.md)| Optional parameter to filter the results by EID. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationCellularGatewayEsimsInventory200Response**](../Model/GetOrganizationCellularGatewayEsimsInventory200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationCellularGatewayEsimsServiceProviders()`

```php
getOrganizationCellularGatewayEsimsServiceProviders($organization_id): \Meraki\Model\GetOrganizationCellularGatewayEsimsServiceProviders200Response
```

Service providers customers can add accounts for.

Service providers customers can add accounts for.

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


$apiInstance = new Meraki\Api\EsimsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationCellularGatewayEsimsServiceProviders($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EsimsApi->getOrganizationCellularGatewayEsimsServiceProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationCellularGatewayEsimsServiceProviders200Response**](../Model/GetOrganizationCellularGatewayEsimsServiceProviders200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationCellularGatewayEsimsServiceProvidersAccounts()`

```php
getOrganizationCellularGatewayEsimsServiceProvidersAccounts($organization_id, $account_ids): \Meraki\Model\GetOrganizationCellularGatewayEsimsServiceProvidersAccounts200ResponseInner[]
```

Inventory of service provider accounts tied to the organization.

Inventory of service provider accounts tied to the organization.

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


$apiInstance = new Meraki\Api\EsimsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$account_ids = array(56); // int[] | Optional parameter to filter the results by service provider account IDs.

try {
    $result = $apiInstance->getOrganizationCellularGatewayEsimsServiceProvidersAccounts($organization_id, $account_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EsimsApi->getOrganizationCellularGatewayEsimsServiceProvidersAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **account_ids** | [**int[]**](../Model/int.md)| Optional parameter to filter the results by service provider account IDs. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationCellularGatewayEsimsServiceProvidersAccounts200ResponseInner[]**](../Model/GetOrganizationCellularGatewayEsimsServiceProvidersAccounts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationCellularGatewayEsimsServiceProvidersAccountsCommunicationPlans()`

```php
getOrganizationCellularGatewayEsimsServiceProvidersAccountsCommunicationPlans($organization_id, $account_ids): \Meraki\Model\GetOrganizationCellularGatewayEsimsServiceProvidersAccountsCommunicationPlans200Response
```

The communication plans available for a given provider.

The communication plans available for a given provider.

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


$apiInstance = new Meraki\Api\EsimsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$account_ids = array('account_ids_example'); // string[] | Account IDs that communication plans will be fetched for

try {
    $result = $apiInstance->getOrganizationCellularGatewayEsimsServiceProvidersAccountsCommunicationPlans($organization_id, $account_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EsimsApi->getOrganizationCellularGatewayEsimsServiceProvidersAccountsCommunicationPlans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **account_ids** | [**string[]**](../Model/string.md)| Account IDs that communication plans will be fetched for | |

### Return type

[**\Meraki\Model\GetOrganizationCellularGatewayEsimsServiceProvidersAccountsCommunicationPlans200Response**](../Model/GetOrganizationCellularGatewayEsimsServiceProvidersAccountsCommunicationPlans200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationCellularGatewayEsimsServiceProvidersAccountsRatePlans()`

```php
getOrganizationCellularGatewayEsimsServiceProvidersAccountsRatePlans($organization_id, $account_ids): \Meraki\Model\GetOrganizationCellularGatewayEsimsServiceProvidersAccountsRatePlans200Response
```

The rate plans available for a given provider.

The rate plans available for a given provider.

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


$apiInstance = new Meraki\Api\EsimsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$account_ids = array('account_ids_example'); // string[] | Account IDs that rate plans will be fetched for

try {
    $result = $apiInstance->getOrganizationCellularGatewayEsimsServiceProvidersAccountsRatePlans($organization_id, $account_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EsimsApi->getOrganizationCellularGatewayEsimsServiceProvidersAccountsRatePlans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **account_ids** | [**string[]**](../Model/string.md)| Account IDs that rate plans will be fetched for | |

### Return type

[**\Meraki\Model\GetOrganizationCellularGatewayEsimsServiceProvidersAccountsRatePlans200Response**](../Model/GetOrganizationCellularGatewayEsimsServiceProvidersAccountsRatePlans200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationCellularGatewayEsimsInventory()`

```php
updateOrganizationCellularGatewayEsimsInventory($organization_id, $id, $update_organization_cellular_gateway_esims_inventory_request): \Meraki\Model\GetOrganizationCellularGatewayEsimsInventory200ResponseItemsInner
```

Toggle the status of an eSIM

Toggle the status of an eSIM

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


$apiInstance = new Meraki\Api\EsimsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$id = 'id_example'; // string | ID
$update_organization_cellular_gateway_esims_inventory_request = new \Meraki\Model\UpdateOrganizationCellularGatewayEsimsInventoryRequest(); // \Meraki\Model\UpdateOrganizationCellularGatewayEsimsInventoryRequest

try {
    $result = $apiInstance->updateOrganizationCellularGatewayEsimsInventory($organization_id, $id, $update_organization_cellular_gateway_esims_inventory_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EsimsApi->updateOrganizationCellularGatewayEsimsInventory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **id** | **string**| ID | |
| **update_organization_cellular_gateway_esims_inventory_request** | [**\Meraki\Model\UpdateOrganizationCellularGatewayEsimsInventoryRequest**](../Model/UpdateOrganizationCellularGatewayEsimsInventoryRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationCellularGatewayEsimsInventory200ResponseItemsInner**](../Model/GetOrganizationCellularGatewayEsimsInventory200ResponseItemsInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationCellularGatewayEsimsServiceProvidersAccount()`

```php
updateOrganizationCellularGatewayEsimsServiceProvidersAccount($organization_id, $account_id, $update_organization_cellular_gateway_esims_service_providers_account_request): \Meraki\Model\GetOrganizationCellularGatewayEsimsServiceProvidersAccounts200ResponseInnerItemsInner
```

Edit service provider account info stored in Meraki's database.

Edit service provider account info stored in Meraki's database.

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


$apiInstance = new Meraki\Api\EsimsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$account_id = 'account_id_example'; // string | Account ID
$update_organization_cellular_gateway_esims_service_providers_account_request = new \Meraki\Model\UpdateOrganizationCellularGatewayEsimsServiceProvidersAccountRequest(); // \Meraki\Model\UpdateOrganizationCellularGatewayEsimsServiceProvidersAccountRequest

try {
    $result = $apiInstance->updateOrganizationCellularGatewayEsimsServiceProvidersAccount($organization_id, $account_id, $update_organization_cellular_gateway_esims_service_providers_account_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EsimsApi->updateOrganizationCellularGatewayEsimsServiceProvidersAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **account_id** | **string**| Account ID | |
| **update_organization_cellular_gateway_esims_service_providers_account_request** | [**\Meraki\Model\UpdateOrganizationCellularGatewayEsimsServiceProvidersAccountRequest**](../Model/UpdateOrganizationCellularGatewayEsimsServiceProvidersAccountRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationCellularGatewayEsimsServiceProvidersAccounts200ResponseInnerItemsInner**](../Model/GetOrganizationCellularGatewayEsimsServiceProvidersAccounts200ResponseInnerItemsInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationCellularGatewayEsimsSwap()`

```php
updateOrganizationCellularGatewayEsimsSwap($id, $organization_id): \Meraki\Model\CreateOrganizationCellularGatewayEsimsSwap200Response
```

Get the status of a profile swap.

Get the status of a profile swap.

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


$apiInstance = new Meraki\Api\EsimsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | eSIM EID
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->updateOrganizationCellularGatewayEsimsSwap($id, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EsimsApi->updateOrganizationCellularGatewayEsimsSwap: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| eSIM EID | |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\CreateOrganizationCellularGatewayEsimsSwap200Response**](../Model/CreateOrganizationCellularGatewayEsimsSwap200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
