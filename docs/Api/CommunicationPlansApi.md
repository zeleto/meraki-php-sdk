# Meraki\CommunicationPlansApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrganizationCellularGatewayEsimsServiceProvidersAccountsCommunicationPlans()**](CommunicationPlansApi.md#getOrganizationCellularGatewayEsimsServiceProvidersAccountsCommunicationPlans) | **GET** /organizations/{organizationId}/cellularGateway/esims/serviceProviders/accounts/communicationPlans | The communication plans available for a given provider. |


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


$apiInstance = new Meraki\Api\CommunicationPlansApi(
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
    echo 'Exception when calling CommunicationPlansApi->getOrganizationCellularGatewayEsimsServiceProvidersAccountsCommunicationPlans: ', $e->getMessage(), PHP_EOL;
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
