# Meraki\CellularGatewayApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrganizationCellularGatewayEsimsServiceProvidersAccount()**](CellularGatewayApi.md#createOrganizationCellularGatewayEsimsServiceProvidersAccount) | **POST** /organizations/{organizationId}/cellularGateway/esims/serviceProviders/accounts | Add a service provider account. |
| [**createOrganizationCellularGatewayEsimsSwap()**](CellularGatewayApi.md#createOrganizationCellularGatewayEsimsSwap) | **POST** /organizations/{organizationId}/cellularGateway/esims/swap | Swap which profile an eSIM uses. |
| [**deleteOrganizationCellularGatewayEsimsServiceProvidersAccount()**](CellularGatewayApi.md#deleteOrganizationCellularGatewayEsimsServiceProvidersAccount) | **DELETE** /organizations/{organizationId}/cellularGateway/esims/serviceProviders/accounts/{accountId} | Remove a service provider account&#39;s integration with the Dashboard. |
| [**getDeviceCellularGatewayLan()**](CellularGatewayApi.md#getDeviceCellularGatewayLan) | **GET** /devices/{serial}/cellularGateway/lan | Show the LAN Settings of a MG |
| [**getDeviceCellularGatewayPortForwardingRules()**](CellularGatewayApi.md#getDeviceCellularGatewayPortForwardingRules) | **GET** /devices/{serial}/cellularGateway/portForwardingRules | Returns the port forwarding rules for a single MG. |
| [**getNetworkCellularGatewayConnectivityMonitoringDestinations()**](CellularGatewayApi.md#getNetworkCellularGatewayConnectivityMonitoringDestinations) | **GET** /networks/{networkId}/cellularGateway/connectivityMonitoringDestinations | Return the connectivity testing destinations for an MG network |
| [**getNetworkCellularGatewayDhcp()**](CellularGatewayApi.md#getNetworkCellularGatewayDhcp) | **GET** /networks/{networkId}/cellularGateway/dhcp | List common DHCP settings of MGs |
| [**getNetworkCellularGatewaySubnetPool()**](CellularGatewayApi.md#getNetworkCellularGatewaySubnetPool) | **GET** /networks/{networkId}/cellularGateway/subnetPool | Return the subnet pool and mask configured for MGs in the network. |
| [**getNetworkCellularGatewayUplink()**](CellularGatewayApi.md#getNetworkCellularGatewayUplink) | **GET** /networks/{networkId}/cellularGateway/uplink | Returns the uplink settings for your MG network. |
| [**getOrganizationCellularGatewayEsimsInventory()**](CellularGatewayApi.md#getOrganizationCellularGatewayEsimsInventory) | **GET** /organizations/{organizationId}/cellularGateway/esims/inventory | The eSIM inventory of a given organization. |
| [**getOrganizationCellularGatewayEsimsServiceProviders()**](CellularGatewayApi.md#getOrganizationCellularGatewayEsimsServiceProviders) | **GET** /organizations/{organizationId}/cellularGateway/esims/serviceProviders | Service providers customers can add accounts for. |
| [**getOrganizationCellularGatewayEsimsServiceProvidersAccounts()**](CellularGatewayApi.md#getOrganizationCellularGatewayEsimsServiceProvidersAccounts) | **GET** /organizations/{organizationId}/cellularGateway/esims/serviceProviders/accounts | Inventory of service provider accounts tied to the organization. |
| [**getOrganizationCellularGatewayEsimsServiceProvidersAccountsCommunicationPlans()**](CellularGatewayApi.md#getOrganizationCellularGatewayEsimsServiceProvidersAccountsCommunicationPlans) | **GET** /organizations/{organizationId}/cellularGateway/esims/serviceProviders/accounts/communicationPlans | The communication plans available for a given provider. |
| [**getOrganizationCellularGatewayEsimsServiceProvidersAccountsRatePlans()**](CellularGatewayApi.md#getOrganizationCellularGatewayEsimsServiceProvidersAccountsRatePlans) | **GET** /organizations/{organizationId}/cellularGateway/esims/serviceProviders/accounts/ratePlans | The rate plans available for a given provider. |
| [**getOrganizationCellularGatewayUplinkStatuses()**](CellularGatewayApi.md#getOrganizationCellularGatewayUplinkStatuses) | **GET** /organizations/{organizationId}/cellularGateway/uplink/statuses | List the uplink status of every Meraki MG cellular gateway in the organization |
| [**updateDeviceCellularGatewayLan()**](CellularGatewayApi.md#updateDeviceCellularGatewayLan) | **PUT** /devices/{serial}/cellularGateway/lan | Update the LAN Settings for a single MG. |
| [**updateDeviceCellularGatewayPortForwardingRules()**](CellularGatewayApi.md#updateDeviceCellularGatewayPortForwardingRules) | **PUT** /devices/{serial}/cellularGateway/portForwardingRules | Updates the port forwarding rules for a single MG. |
| [**updateNetworkCellularGatewayConnectivityMonitoringDestinations()**](CellularGatewayApi.md#updateNetworkCellularGatewayConnectivityMonitoringDestinations) | **PUT** /networks/{networkId}/cellularGateway/connectivityMonitoringDestinations | Update the connectivity testing destinations for an MG network |
| [**updateNetworkCellularGatewayDhcp()**](CellularGatewayApi.md#updateNetworkCellularGatewayDhcp) | **PUT** /networks/{networkId}/cellularGateway/dhcp | Update common DHCP settings of MGs |
| [**updateNetworkCellularGatewaySubnetPool()**](CellularGatewayApi.md#updateNetworkCellularGatewaySubnetPool) | **PUT** /networks/{networkId}/cellularGateway/subnetPool | Update the subnet pool and mask configuration for MGs in the network. |
| [**updateNetworkCellularGatewayUplink()**](CellularGatewayApi.md#updateNetworkCellularGatewayUplink) | **PUT** /networks/{networkId}/cellularGateway/uplink | Updates the uplink settings for your MG network. |
| [**updateOrganizationCellularGatewayEsimsInventory()**](CellularGatewayApi.md#updateOrganizationCellularGatewayEsimsInventory) | **PUT** /organizations/{organizationId}/cellularGateway/esims/inventory/{id} | Toggle the status of an eSIM |
| [**updateOrganizationCellularGatewayEsimsServiceProvidersAccount()**](CellularGatewayApi.md#updateOrganizationCellularGatewayEsimsServiceProvidersAccount) | **PUT** /organizations/{organizationId}/cellularGateway/esims/serviceProviders/accounts/{accountId} | Edit service provider account info stored in Meraki&#39;s database. |
| [**updateOrganizationCellularGatewayEsimsSwap()**](CellularGatewayApi.md#updateOrganizationCellularGatewayEsimsSwap) | **PUT** /organizations/{organizationId}/cellularGateway/esims/swap/{id} | Get the status of a profile swap. |


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


$apiInstance = new Meraki\Api\CellularGatewayApi(
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
    echo 'Exception when calling CellularGatewayApi->createOrganizationCellularGatewayEsimsServiceProvidersAccount: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\CellularGatewayApi(
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
    echo 'Exception when calling CellularGatewayApi->createOrganizationCellularGatewayEsimsSwap: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\CellularGatewayApi(
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
    echo 'Exception when calling CellularGatewayApi->deleteOrganizationCellularGatewayEsimsServiceProvidersAccount: ', $e->getMessage(), PHP_EOL;
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

## `getDeviceCellularGatewayLan()`

```php
getDeviceCellularGatewayLan($serial): \Meraki\Model\GetDeviceCellularGatewayLan200Response
```

Show the LAN Settings of a MG

Show the LAN Settings of a MG

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


$apiInstance = new Meraki\Api\CellularGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceCellularGatewayLan($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellularGatewayApi->getDeviceCellularGatewayLan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceCellularGatewayLan200Response**](../Model/GetDeviceCellularGatewayLan200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceCellularGatewayPortForwardingRules()`

```php
getDeviceCellularGatewayPortForwardingRules($serial): \Meraki\Model\GetDeviceCellularGatewayPortForwardingRules200Response
```

Returns the port forwarding rules for a single MG.

Returns the port forwarding rules for a single MG.

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


$apiInstance = new Meraki\Api\CellularGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceCellularGatewayPortForwardingRules($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellularGatewayApi->getDeviceCellularGatewayPortForwardingRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceCellularGatewayPortForwardingRules200Response**](../Model/GetDeviceCellularGatewayPortForwardingRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkCellularGatewayConnectivityMonitoringDestinations()`

```php
getNetworkCellularGatewayConnectivityMonitoringDestinations($network_id): \Meraki\Model\GetNetworkApplianceConnectivityMonitoringDestinations200Response
```

Return the connectivity testing destinations for an MG network

Return the connectivity testing destinations for an MG network

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


$apiInstance = new Meraki\Api\CellularGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkCellularGatewayConnectivityMonitoringDestinations($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellularGatewayApi->getNetworkCellularGatewayConnectivityMonitoringDestinations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceConnectivityMonitoringDestinations200Response**](../Model/GetNetworkApplianceConnectivityMonitoringDestinations200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkCellularGatewayDhcp()`

```php
getNetworkCellularGatewayDhcp($network_id): \Meraki\Model\GetNetworkCellularGatewayDhcp200Response
```

List common DHCP settings of MGs

List common DHCP settings of MGs

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


$apiInstance = new Meraki\Api\CellularGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkCellularGatewayDhcp($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellularGatewayApi->getNetworkCellularGatewayDhcp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkCellularGatewayDhcp200Response**](../Model/GetNetworkCellularGatewayDhcp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkCellularGatewaySubnetPool()`

```php
getNetworkCellularGatewaySubnetPool($network_id): \Meraki\Model\GetNetworkCellularGatewaySubnetPool200Response
```

Return the subnet pool and mask configured for MGs in the network.

Return the subnet pool and mask configured for MGs in the network.

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


$apiInstance = new Meraki\Api\CellularGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkCellularGatewaySubnetPool($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellularGatewayApi->getNetworkCellularGatewaySubnetPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkCellularGatewaySubnetPool200Response**](../Model/GetNetworkCellularGatewaySubnetPool200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkCellularGatewayUplink()`

```php
getNetworkCellularGatewayUplink($network_id): \Meraki\Model\GetNetworkCellularGatewayUplink200Response
```

Returns the uplink settings for your MG network.

Returns the uplink settings for your MG network.

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


$apiInstance = new Meraki\Api\CellularGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkCellularGatewayUplink($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellularGatewayApi->getNetworkCellularGatewayUplink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkCellularGatewayUplink200Response**](../Model/GetNetworkCellularGatewayUplink200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

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


$apiInstance = new Meraki\Api\CellularGatewayApi(
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
    echo 'Exception when calling CellularGatewayApi->getOrganizationCellularGatewayEsimsInventory: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\CellularGatewayApi(
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
    echo 'Exception when calling CellularGatewayApi->getOrganizationCellularGatewayEsimsServiceProviders: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\CellularGatewayApi(
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
    echo 'Exception when calling CellularGatewayApi->getOrganizationCellularGatewayEsimsServiceProvidersAccounts: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\CellularGatewayApi(
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
    echo 'Exception when calling CellularGatewayApi->getOrganizationCellularGatewayEsimsServiceProvidersAccountsCommunicationPlans: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\CellularGatewayApi(
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
    echo 'Exception when calling CellularGatewayApi->getOrganizationCellularGatewayEsimsServiceProvidersAccountsRatePlans: ', $e->getMessage(), PHP_EOL;
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

## `getOrganizationCellularGatewayUplinkStatuses()`

```php
getOrganizationCellularGatewayUplinkStatuses($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $serials, $iccids): \Meraki\Model\GetOrganizationCellularGatewayUplinkStatuses200ResponseInner[]
```

List the uplink status of every Meraki MG cellular gateway in the organization

List the uplink status of every Meraki MG cellular gateway in the organization

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


$apiInstance = new Meraki\Api\CellularGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | A list of network IDs. The returned devices will be filtered to only include these networks.
$serials = array('serials_example'); // string[] | A list of serial numbers. The returned devices will be filtered to only include these serials.
$iccids = array('iccids_example'); // string[] | A list of ICCIDs. The returned devices will be filtered to only include these ICCIDs.

try {
    $result = $apiInstance->getOrganizationCellularGatewayUplinkStatuses($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $serials, $iccids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellularGatewayApi->getOrganizationCellularGatewayUplinkStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| A list of network IDs. The returned devices will be filtered to only include these networks. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| A list of serial numbers. The returned devices will be filtered to only include these serials. | [optional] |
| **iccids** | [**string[]**](../Model/string.md)| A list of ICCIDs. The returned devices will be filtered to only include these ICCIDs. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationCellularGatewayUplinkStatuses200ResponseInner[]**](../Model/GetOrganizationCellularGatewayUplinkStatuses200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceCellularGatewayLan()`

```php
updateDeviceCellularGatewayLan($serial, $update_device_cellular_gateway_lan_request): \Meraki\Model\GetDeviceCellularGatewayLan200Response
```

Update the LAN Settings for a single MG.

Update the LAN Settings for a single MG.

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


$apiInstance = new Meraki\Api\CellularGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_cellular_gateway_lan_request = new \Meraki\Model\UpdateDeviceCellularGatewayLanRequest(); // \Meraki\Model\UpdateDeviceCellularGatewayLanRequest

try {
    $result = $apiInstance->updateDeviceCellularGatewayLan($serial, $update_device_cellular_gateway_lan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellularGatewayApi->updateDeviceCellularGatewayLan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_cellular_gateway_lan_request** | [**\Meraki\Model\UpdateDeviceCellularGatewayLanRequest**](../Model/UpdateDeviceCellularGatewayLanRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceCellularGatewayLan200Response**](../Model/GetDeviceCellularGatewayLan200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceCellularGatewayPortForwardingRules()`

```php
updateDeviceCellularGatewayPortForwardingRules($serial, $update_device_cellular_gateway_port_forwarding_rules_request): \Meraki\Model\GetDeviceCellularGatewayPortForwardingRules200Response
```

Updates the port forwarding rules for a single MG.

Updates the port forwarding rules for a single MG.

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


$apiInstance = new Meraki\Api\CellularGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_cellular_gateway_port_forwarding_rules_request = new \Meraki\Model\UpdateDeviceCellularGatewayPortForwardingRulesRequest(); // \Meraki\Model\UpdateDeviceCellularGatewayPortForwardingRulesRequest

try {
    $result = $apiInstance->updateDeviceCellularGatewayPortForwardingRules($serial, $update_device_cellular_gateway_port_forwarding_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellularGatewayApi->updateDeviceCellularGatewayPortForwardingRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_cellular_gateway_port_forwarding_rules_request** | [**\Meraki\Model\UpdateDeviceCellularGatewayPortForwardingRulesRequest**](../Model/UpdateDeviceCellularGatewayPortForwardingRulesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceCellularGatewayPortForwardingRules200Response**](../Model/GetDeviceCellularGatewayPortForwardingRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkCellularGatewayConnectivityMonitoringDestinations()`

```php
updateNetworkCellularGatewayConnectivityMonitoringDestinations($network_id, $update_network_cellular_gateway_connectivity_monitoring_destinations_request): \Meraki\Model\GetNetworkApplianceConnectivityMonitoringDestinations200Response
```

Update the connectivity testing destinations for an MG network

Update the connectivity testing destinations for an MG network

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


$apiInstance = new Meraki\Api\CellularGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_cellular_gateway_connectivity_monitoring_destinations_request = new \Meraki\Model\UpdateNetworkCellularGatewayConnectivityMonitoringDestinationsRequest(); // \Meraki\Model\UpdateNetworkCellularGatewayConnectivityMonitoringDestinationsRequest

try {
    $result = $apiInstance->updateNetworkCellularGatewayConnectivityMonitoringDestinations($network_id, $update_network_cellular_gateway_connectivity_monitoring_destinations_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellularGatewayApi->updateNetworkCellularGatewayConnectivityMonitoringDestinations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_cellular_gateway_connectivity_monitoring_destinations_request** | [**\Meraki\Model\UpdateNetworkCellularGatewayConnectivityMonitoringDestinationsRequest**](../Model/UpdateNetworkCellularGatewayConnectivityMonitoringDestinationsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceConnectivityMonitoringDestinations200Response**](../Model/GetNetworkApplianceConnectivityMonitoringDestinations200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkCellularGatewayDhcp()`

```php
updateNetworkCellularGatewayDhcp($network_id, $update_network_cellular_gateway_dhcp_request): \Meraki\Model\GetNetworkCellularGatewayDhcp200Response
```

Update common DHCP settings of MGs

Update common DHCP settings of MGs

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


$apiInstance = new Meraki\Api\CellularGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_cellular_gateway_dhcp_request = new \Meraki\Model\UpdateNetworkCellularGatewayDhcpRequest(); // \Meraki\Model\UpdateNetworkCellularGatewayDhcpRequest

try {
    $result = $apiInstance->updateNetworkCellularGatewayDhcp($network_id, $update_network_cellular_gateway_dhcp_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellularGatewayApi->updateNetworkCellularGatewayDhcp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_cellular_gateway_dhcp_request** | [**\Meraki\Model\UpdateNetworkCellularGatewayDhcpRequest**](../Model/UpdateNetworkCellularGatewayDhcpRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkCellularGatewayDhcp200Response**](../Model/GetNetworkCellularGatewayDhcp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkCellularGatewaySubnetPool()`

```php
updateNetworkCellularGatewaySubnetPool($network_id, $update_network_cellular_gateway_subnet_pool_request): \Meraki\Model\GetNetworkCellularGatewaySubnetPool200Response
```

Update the subnet pool and mask configuration for MGs in the network.

Update the subnet pool and mask configuration for MGs in the network.

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


$apiInstance = new Meraki\Api\CellularGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_cellular_gateway_subnet_pool_request = new \Meraki\Model\UpdateNetworkCellularGatewaySubnetPoolRequest(); // \Meraki\Model\UpdateNetworkCellularGatewaySubnetPoolRequest

try {
    $result = $apiInstance->updateNetworkCellularGatewaySubnetPool($network_id, $update_network_cellular_gateway_subnet_pool_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellularGatewayApi->updateNetworkCellularGatewaySubnetPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_cellular_gateway_subnet_pool_request** | [**\Meraki\Model\UpdateNetworkCellularGatewaySubnetPoolRequest**](../Model/UpdateNetworkCellularGatewaySubnetPoolRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkCellularGatewaySubnetPool200Response**](../Model/GetNetworkCellularGatewaySubnetPool200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkCellularGatewayUplink()`

```php
updateNetworkCellularGatewayUplink($network_id, $update_network_cellular_gateway_uplink_request): \Meraki\Model\GetNetworkCellularGatewayUplink200Response
```

Updates the uplink settings for your MG network.

Updates the uplink settings for your MG network.

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


$apiInstance = new Meraki\Api\CellularGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_cellular_gateway_uplink_request = new \Meraki\Model\UpdateNetworkCellularGatewayUplinkRequest(); // \Meraki\Model\UpdateNetworkCellularGatewayUplinkRequest

try {
    $result = $apiInstance->updateNetworkCellularGatewayUplink($network_id, $update_network_cellular_gateway_uplink_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellularGatewayApi->updateNetworkCellularGatewayUplink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_cellular_gateway_uplink_request** | [**\Meraki\Model\UpdateNetworkCellularGatewayUplinkRequest**](../Model/UpdateNetworkCellularGatewayUplinkRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkCellularGatewayUplink200Response**](../Model/GetNetworkCellularGatewayUplink200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
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


$apiInstance = new Meraki\Api\CellularGatewayApi(
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
    echo 'Exception when calling CellularGatewayApi->updateOrganizationCellularGatewayEsimsInventory: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\CellularGatewayApi(
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
    echo 'Exception when calling CellularGatewayApi->updateOrganizationCellularGatewayEsimsServiceProvidersAccount: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\CellularGatewayApi(
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
    echo 'Exception when calling CellularGatewayApi->updateOrganizationCellularGatewayEsimsSwap: ', $e->getMessage(), PHP_EOL;
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
