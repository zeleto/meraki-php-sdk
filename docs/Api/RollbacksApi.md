# Meraki\RollbacksApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkFirmwareUpgradesRollback()**](RollbacksApi.md#createNetworkFirmwareUpgradesRollback) | **POST** /networks/{networkId}/firmwareUpgrades/rollbacks | Rollback a Firmware Upgrade For A Network |


## `createNetworkFirmwareUpgradesRollback()`

```php
createNetworkFirmwareUpgradesRollback($network_id, $create_network_firmware_upgrades_rollback_request): \Meraki\Model\CreateNetworkFirmwareUpgradesRollback200Response
```

Rollback a Firmware Upgrade For A Network

Rollback a Firmware Upgrade For A Network

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


$apiInstance = new Meraki\Api\RollbacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_firmware_upgrades_rollback_request = new \Meraki\Model\CreateNetworkFirmwareUpgradesRollbackRequest(); // \Meraki\Model\CreateNetworkFirmwareUpgradesRollbackRequest

try {
    $result = $apiInstance->createNetworkFirmwareUpgradesRollback($network_id, $create_network_firmware_upgrades_rollback_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RollbacksApi->createNetworkFirmwareUpgradesRollback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_firmware_upgrades_rollback_request** | [**\Meraki\Model\CreateNetworkFirmwareUpgradesRollbackRequest**](../Model/CreateNetworkFirmwareUpgradesRollbackRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateNetworkFirmwareUpgradesRollback200Response**](../Model/CreateNetworkFirmwareUpgradesRollback200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
