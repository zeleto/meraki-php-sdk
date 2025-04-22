# Meraki\ByModelApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrganizationDevicesOverviewByModel()**](ByModelApi.md#getOrganizationDevicesOverviewByModel) | **GET** /organizations/{organizationId}/devices/overview/byModel | Lists the count for each device model |


## `getOrganizationDevicesOverviewByModel()`

```php
getOrganizationDevicesOverviewByModel($organization_id, $models, $network_ids, $product_types): \Meraki\Model\GetOrganizationDevicesOverviewByModel200Response
```

Lists the count for each device model

Lists the count for each device model

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


$apiInstance = new Meraki\Api\ByModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$models = array('models_example'); // string[] | Optional parameter to filter devices by one or more models. All returned devices will have a model that is an exact match.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter devices by networkId.
$product_types = array('product_types_example'); // string[] | Optional parameter to filter device by device product types. This filter uses multiple exact matches.

try {
    $result = $apiInstance->getOrganizationDevicesOverviewByModel($organization_id, $models, $network_ids, $product_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ByModelApi->getOrganizationDevicesOverviewByModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **models** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by one or more models. All returned devices will have a model that is an exact match. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by networkId. | [optional] |
| **product_types** | [**string[]**](../Model/string.md)| Optional parameter to filter device by device product types. This filter uses multiple exact matches. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationDevicesOverviewByModel200Response**](../Model/GetOrganizationDevicesOverviewByModel200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
