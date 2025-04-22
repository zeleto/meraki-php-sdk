# Meraki\XdrApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**disableOrganizationIntegrationsXdrNetworks()**](XdrApi.md#disableOrganizationIntegrationsXdrNetworks) | **POST** /organizations/{organizationId}/integrations/xdr/networks/disable | Disable XDR on networks |
| [**enableOrganizationIntegrationsXdrNetworks()**](XdrApi.md#enableOrganizationIntegrationsXdrNetworks) | **POST** /organizations/{organizationId}/integrations/xdr/networks/enable | Enable XDR on networks |
| [**getOrganizationIntegrationsXdrNetworks()**](XdrApi.md#getOrganizationIntegrationsXdrNetworks) | **GET** /organizations/{organizationId}/integrations/xdr/networks | Returns the networks in the organization that have XDR enabled |


## `disableOrganizationIntegrationsXdrNetworks()`

```php
disableOrganizationIntegrationsXdrNetworks($organization_id, $disable_organization_integrations_xdr_networks_request): \Meraki\Model\DisableOrganizationIntegrationsXdrNetworks200Response
```

Disable XDR on networks

Disable XDR on networks

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


$apiInstance = new Meraki\Api\XdrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$disable_organization_integrations_xdr_networks_request = new \Meraki\Model\DisableOrganizationIntegrationsXdrNetworksRequest(); // \Meraki\Model\DisableOrganizationIntegrationsXdrNetworksRequest

try {
    $result = $apiInstance->disableOrganizationIntegrationsXdrNetworks($organization_id, $disable_organization_integrations_xdr_networks_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XdrApi->disableOrganizationIntegrationsXdrNetworks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **disable_organization_integrations_xdr_networks_request** | [**\Meraki\Model\DisableOrganizationIntegrationsXdrNetworksRequest**](../Model/DisableOrganizationIntegrationsXdrNetworksRequest.md)|  | |

### Return type

[**\Meraki\Model\DisableOrganizationIntegrationsXdrNetworks200Response**](../Model/DisableOrganizationIntegrationsXdrNetworks200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableOrganizationIntegrationsXdrNetworks()`

```php
enableOrganizationIntegrationsXdrNetworks($organization_id, $enable_organization_integrations_xdr_networks_request): \Meraki\Model\EnableOrganizationIntegrationsXdrNetworks200Response
```

Enable XDR on networks

Enable XDR on networks

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


$apiInstance = new Meraki\Api\XdrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$enable_organization_integrations_xdr_networks_request = new \Meraki\Model\EnableOrganizationIntegrationsXdrNetworksRequest(); // \Meraki\Model\EnableOrganizationIntegrationsXdrNetworksRequest

try {
    $result = $apiInstance->enableOrganizationIntegrationsXdrNetworks($organization_id, $enable_organization_integrations_xdr_networks_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XdrApi->enableOrganizationIntegrationsXdrNetworks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **enable_organization_integrations_xdr_networks_request** | [**\Meraki\Model\EnableOrganizationIntegrationsXdrNetworksRequest**](../Model/EnableOrganizationIntegrationsXdrNetworksRequest.md)|  | |

### Return type

[**\Meraki\Model\EnableOrganizationIntegrationsXdrNetworks200Response**](../Model/EnableOrganizationIntegrationsXdrNetworks200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationIntegrationsXdrNetworks()`

```php
getOrganizationIntegrationsXdrNetworks($organization_id, $network_ids, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationIntegrationsXdrNetworks200Response
```

Returns the networks in the organization that have XDR enabled

Returns the networks in the organization that have XDR enabled

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


$apiInstance = new Meraki\Api\XdrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter the results by network IDs
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 100. Default is 20.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationIntegrationsXdrNetworks($organization_id, $network_ids, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XdrApi->getOrganizationIntegrationsXdrNetworks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the results by network IDs | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 100. Default is 20. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationIntegrationsXdrNetworks200Response**](../Model/GetOrganizationIntegrationsXdrNetworks200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
