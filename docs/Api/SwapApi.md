# Meraki\SwapApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrganizationCellularGatewayEsimsSwap()**](SwapApi.md#createOrganizationCellularGatewayEsimsSwap) | **POST** /organizations/{organizationId}/cellularGateway/esims/swap | Swap which profile an eSIM uses. |
| [**updateOrganizationCellularGatewayEsimsSwap()**](SwapApi.md#updateOrganizationCellularGatewayEsimsSwap) | **PUT** /organizations/{organizationId}/cellularGateway/esims/swap/{id} | Get the status of a profile swap. |


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


$apiInstance = new Meraki\Api\SwapApi(
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
    echo 'Exception when calling SwapApi->createOrganizationCellularGatewayEsimsSwap: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\SwapApi(
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
    echo 'Exception when calling SwapApi->updateOrganizationCellularGatewayEsimsSwap: ', $e->getMessage(), PHP_EOL;
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
