# Meraki\StagesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkFirmwareUpgradesStagedStages()**](StagesApi.md#getNetworkFirmwareUpgradesStagedStages) | **GET** /networks/{networkId}/firmwareUpgrades/staged/stages | Order of Staged Upgrade Groups in a network |
| [**updateNetworkFirmwareUpgradesStagedStages()**](StagesApi.md#updateNetworkFirmwareUpgradesStagedStages) | **PUT** /networks/{networkId}/firmwareUpgrades/staged/stages | Assign Staged Upgrade Group order in the sequence. |


## `getNetworkFirmwareUpgradesStagedStages()`

```php
getNetworkFirmwareUpgradesStagedStages($network_id): \Meraki\Model\GetNetworkFirmwareUpgradesStagedStages200ResponseInner[]
```

Order of Staged Upgrade Groups in a network

Order of Staged Upgrade Groups in a network

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


$apiInstance = new Meraki\Api\StagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkFirmwareUpgradesStagedStages($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StagesApi->getNetworkFirmwareUpgradesStagedStages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgradesStagedStages200ResponseInner[]**](../Model/GetNetworkFirmwareUpgradesStagedStages200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkFirmwareUpgradesStagedStages()`

```php
updateNetworkFirmwareUpgradesStagedStages($network_id, $update_network_firmware_upgrades_staged_stages_request): \Meraki\Model\GetNetworkFirmwareUpgradesStagedStages200ResponseInner[]
```

Assign Staged Upgrade Group order in the sequence.

Assign Staged Upgrade Group order in the sequence.

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


$apiInstance = new Meraki\Api\StagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_firmware_upgrades_staged_stages_request = new \Meraki\Model\UpdateNetworkFirmwareUpgradesStagedStagesRequest(); // \Meraki\Model\UpdateNetworkFirmwareUpgradesStagedStagesRequest

try {
    $result = $apiInstance->updateNetworkFirmwareUpgradesStagedStages($network_id, $update_network_firmware_upgrades_staged_stages_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StagesApi->updateNetworkFirmwareUpgradesStagedStages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_firmware_upgrades_staged_stages_request** | [**\Meraki\Model\UpdateNetworkFirmwareUpgradesStagedStagesRequest**](../Model/UpdateNetworkFirmwareUpgradesStagedStagesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgradesStagedStages200ResponseInner[]**](../Model/GetNetworkFirmwareUpgradesStagedStages200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
