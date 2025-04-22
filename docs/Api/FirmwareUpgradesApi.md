# Meraki\FirmwareUpgradesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkFirmwareUpgradesRollback()**](FirmwareUpgradesApi.md#createNetworkFirmwareUpgradesRollback) | **POST** /networks/{networkId}/firmwareUpgrades/rollbacks | Rollback a Firmware Upgrade For A Network |
| [**createNetworkFirmwareUpgradesStagedEvent()**](FirmwareUpgradesApi.md#createNetworkFirmwareUpgradesStagedEvent) | **POST** /networks/{networkId}/firmwareUpgrades/staged/events | Create a Staged Upgrade Event for a network |
| [**createNetworkFirmwareUpgradesStagedGroup()**](FirmwareUpgradesApi.md#createNetworkFirmwareUpgradesStagedGroup) | **POST** /networks/{networkId}/firmwareUpgrades/staged/groups | Create a Staged Upgrade Group for a network |
| [**deferNetworkFirmwareUpgradesStagedEvents()**](FirmwareUpgradesApi.md#deferNetworkFirmwareUpgradesStagedEvents) | **POST** /networks/{networkId}/firmwareUpgrades/staged/events/defer | Postpone by 1 week all pending staged upgrade stages for a network |
| [**deleteNetworkFirmwareUpgradesStagedGroup()**](FirmwareUpgradesApi.md#deleteNetworkFirmwareUpgradesStagedGroup) | **DELETE** /networks/{networkId}/firmwareUpgrades/staged/groups/{groupId} | Delete a Staged Upgrade Group |
| [**getNetworkFirmwareUpgrades()**](FirmwareUpgradesApi.md#getNetworkFirmwareUpgrades) | **GET** /networks/{networkId}/firmwareUpgrades | Get firmware upgrade information for a network |
| [**getNetworkFirmwareUpgradesStagedEvents()**](FirmwareUpgradesApi.md#getNetworkFirmwareUpgradesStagedEvents) | **GET** /networks/{networkId}/firmwareUpgrades/staged/events | Get the Staged Upgrade Event from a network |
| [**getNetworkFirmwareUpgradesStagedGroup()**](FirmwareUpgradesApi.md#getNetworkFirmwareUpgradesStagedGroup) | **GET** /networks/{networkId}/firmwareUpgrades/staged/groups/{groupId} | Get a Staged Upgrade Group from a network |
| [**getNetworkFirmwareUpgradesStagedGroups()**](FirmwareUpgradesApi.md#getNetworkFirmwareUpgradesStagedGroups) | **GET** /networks/{networkId}/firmwareUpgrades/staged/groups | List of Staged Upgrade Groups in a network |
| [**getNetworkFirmwareUpgradesStagedStages()**](FirmwareUpgradesApi.md#getNetworkFirmwareUpgradesStagedStages) | **GET** /networks/{networkId}/firmwareUpgrades/staged/stages | Order of Staged Upgrade Groups in a network |
| [**rollbacksNetworkFirmwareUpgradesStagedEvents()**](FirmwareUpgradesApi.md#rollbacksNetworkFirmwareUpgradesStagedEvents) | **POST** /networks/{networkId}/firmwareUpgrades/staged/events/rollbacks | Rollback a Staged Upgrade Event for a network |
| [**updateNetworkFirmwareUpgrades()**](FirmwareUpgradesApi.md#updateNetworkFirmwareUpgrades) | **PUT** /networks/{networkId}/firmwareUpgrades | Update firmware upgrade information for a network |
| [**updateNetworkFirmwareUpgradesStagedEvents()**](FirmwareUpgradesApi.md#updateNetworkFirmwareUpgradesStagedEvents) | **PUT** /networks/{networkId}/firmwareUpgrades/staged/events | Update the Staged Upgrade Event for a network |
| [**updateNetworkFirmwareUpgradesStagedGroup()**](FirmwareUpgradesApi.md#updateNetworkFirmwareUpgradesStagedGroup) | **PUT** /networks/{networkId}/firmwareUpgrades/staged/groups/{groupId} | Update a Staged Upgrade Group for a network |
| [**updateNetworkFirmwareUpgradesStagedStages()**](FirmwareUpgradesApi.md#updateNetworkFirmwareUpgradesStagedStages) | **PUT** /networks/{networkId}/firmwareUpgrades/staged/stages | Assign Staged Upgrade Group order in the sequence. |


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


$apiInstance = new Meraki\Api\FirmwareUpgradesApi(
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
    echo 'Exception when calling FirmwareUpgradesApi->createNetworkFirmwareUpgradesRollback: ', $e->getMessage(), PHP_EOL;
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

## `createNetworkFirmwareUpgradesStagedEvent()`

```php
createNetworkFirmwareUpgradesStagedEvent($network_id, $create_network_firmware_upgrades_staged_event_request): \Meraki\Model\GetNetworkFirmwareUpgradesStagedEvents200Response
```

Create a Staged Upgrade Event for a network

Create a Staged Upgrade Event for a network

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


$apiInstance = new Meraki\Api\FirmwareUpgradesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_firmware_upgrades_staged_event_request = new \Meraki\Model\CreateNetworkFirmwareUpgradesStagedEventRequest(); // \Meraki\Model\CreateNetworkFirmwareUpgradesStagedEventRequest

try {
    $result = $apiInstance->createNetworkFirmwareUpgradesStagedEvent($network_id, $create_network_firmware_upgrades_staged_event_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirmwareUpgradesApi->createNetworkFirmwareUpgradesStagedEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_firmware_upgrades_staged_event_request** | [**\Meraki\Model\CreateNetworkFirmwareUpgradesStagedEventRequest**](../Model/CreateNetworkFirmwareUpgradesStagedEventRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgradesStagedEvents200Response**](../Model/GetNetworkFirmwareUpgradesStagedEvents200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkFirmwareUpgradesStagedGroup()`

```php
createNetworkFirmwareUpgradesStagedGroup($network_id, $create_network_firmware_upgrades_staged_group_request): \Meraki\Model\GetNetworkFirmwareUpgradesStagedGroups200ResponseInner
```

Create a Staged Upgrade Group for a network

Create a Staged Upgrade Group for a network

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


$apiInstance = new Meraki\Api\FirmwareUpgradesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_firmware_upgrades_staged_group_request = new \Meraki\Model\CreateNetworkFirmwareUpgradesStagedGroupRequest(); // \Meraki\Model\CreateNetworkFirmwareUpgradesStagedGroupRequest

try {
    $result = $apiInstance->createNetworkFirmwareUpgradesStagedGroup($network_id, $create_network_firmware_upgrades_staged_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirmwareUpgradesApi->createNetworkFirmwareUpgradesStagedGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_firmware_upgrades_staged_group_request** | [**\Meraki\Model\CreateNetworkFirmwareUpgradesStagedGroupRequest**](../Model/CreateNetworkFirmwareUpgradesStagedGroupRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgradesStagedGroups200ResponseInner**](../Model/GetNetworkFirmwareUpgradesStagedGroups200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deferNetworkFirmwareUpgradesStagedEvents()`

```php
deferNetworkFirmwareUpgradesStagedEvents($network_id): \Meraki\Model\GetNetworkFirmwareUpgradesStagedEvents200Response
```

Postpone by 1 week all pending staged upgrade stages for a network

Postpone by 1 week all pending staged upgrade stages for a network

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


$apiInstance = new Meraki\Api\FirmwareUpgradesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->deferNetworkFirmwareUpgradesStagedEvents($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirmwareUpgradesApi->deferNetworkFirmwareUpgradesStagedEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgradesStagedEvents200Response**](../Model/GetNetworkFirmwareUpgradesStagedEvents200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkFirmwareUpgradesStagedGroup()`

```php
deleteNetworkFirmwareUpgradesStagedGroup($network_id, $group_id)
```

Delete a Staged Upgrade Group

Delete a Staged Upgrade Group

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


$apiInstance = new Meraki\Api\FirmwareUpgradesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$group_id = 'group_id_example'; // string | Group ID

try {
    $apiInstance->deleteNetworkFirmwareUpgradesStagedGroup($network_id, $group_id);
} catch (Exception $e) {
    echo 'Exception when calling FirmwareUpgradesApi->deleteNetworkFirmwareUpgradesStagedGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **group_id** | **string**| Group ID | |

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

## `getNetworkFirmwareUpgrades()`

```php
getNetworkFirmwareUpgrades($network_id): \Meraki\Model\GetNetworkFirmwareUpgrades200Response
```

Get firmware upgrade information for a network

Get firmware upgrade information for a network

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


$apiInstance = new Meraki\Api\FirmwareUpgradesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkFirmwareUpgrades($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirmwareUpgradesApi->getNetworkFirmwareUpgrades: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgrades200Response**](../Model/GetNetworkFirmwareUpgrades200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkFirmwareUpgradesStagedEvents()`

```php
getNetworkFirmwareUpgradesStagedEvents($network_id): \Meraki\Model\GetNetworkFirmwareUpgradesStagedEvents200Response
```

Get the Staged Upgrade Event from a network

Get the Staged Upgrade Event from a network

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


$apiInstance = new Meraki\Api\FirmwareUpgradesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkFirmwareUpgradesStagedEvents($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirmwareUpgradesApi->getNetworkFirmwareUpgradesStagedEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgradesStagedEvents200Response**](../Model/GetNetworkFirmwareUpgradesStagedEvents200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkFirmwareUpgradesStagedGroup()`

```php
getNetworkFirmwareUpgradesStagedGroup($network_id, $group_id): \Meraki\Model\GetNetworkFirmwareUpgradesStagedGroups200ResponseInner
```

Get a Staged Upgrade Group from a network

Get a Staged Upgrade Group from a network

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


$apiInstance = new Meraki\Api\FirmwareUpgradesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$group_id = 'group_id_example'; // string | Group ID

try {
    $result = $apiInstance->getNetworkFirmwareUpgradesStagedGroup($network_id, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirmwareUpgradesApi->getNetworkFirmwareUpgradesStagedGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **group_id** | **string**| Group ID | |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgradesStagedGroups200ResponseInner**](../Model/GetNetworkFirmwareUpgradesStagedGroups200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkFirmwareUpgradesStagedGroups()`

```php
getNetworkFirmwareUpgradesStagedGroups($network_id): \Meraki\Model\GetNetworkFirmwareUpgradesStagedGroups200ResponseInner[]
```

List of Staged Upgrade Groups in a network

List of Staged Upgrade Groups in a network

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


$apiInstance = new Meraki\Api\FirmwareUpgradesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkFirmwareUpgradesStagedGroups($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirmwareUpgradesApi->getNetworkFirmwareUpgradesStagedGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgradesStagedGroups200ResponseInner[]**](../Model/GetNetworkFirmwareUpgradesStagedGroups200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new Meraki\Api\FirmwareUpgradesApi(
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
    echo 'Exception when calling FirmwareUpgradesApi->getNetworkFirmwareUpgradesStagedStages: ', $e->getMessage(), PHP_EOL;
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

## `rollbacksNetworkFirmwareUpgradesStagedEvents()`

```php
rollbacksNetworkFirmwareUpgradesStagedEvents($network_id, $rollbacks_network_firmware_upgrades_staged_events_request): \Meraki\Model\GetNetworkFirmwareUpgradesStagedEvents200Response
```

Rollback a Staged Upgrade Event for a network

Rollback a Staged Upgrade Event for a network

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


$apiInstance = new Meraki\Api\FirmwareUpgradesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$rollbacks_network_firmware_upgrades_staged_events_request = new \Meraki\Model\RollbacksNetworkFirmwareUpgradesStagedEventsRequest(); // \Meraki\Model\RollbacksNetworkFirmwareUpgradesStagedEventsRequest

try {
    $result = $apiInstance->rollbacksNetworkFirmwareUpgradesStagedEvents($network_id, $rollbacks_network_firmware_upgrades_staged_events_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirmwareUpgradesApi->rollbacksNetworkFirmwareUpgradesStagedEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **rollbacks_network_firmware_upgrades_staged_events_request** | [**\Meraki\Model\RollbacksNetworkFirmwareUpgradesStagedEventsRequest**](../Model/RollbacksNetworkFirmwareUpgradesStagedEventsRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgradesStagedEvents200Response**](../Model/GetNetworkFirmwareUpgradesStagedEvents200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkFirmwareUpgrades()`

```php
updateNetworkFirmwareUpgrades($network_id, $update_network_firmware_upgrades_request): \Meraki\Model\GetNetworkFirmwareUpgrades200Response
```

Update firmware upgrade information for a network

Update firmware upgrade information for a network

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


$apiInstance = new Meraki\Api\FirmwareUpgradesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_firmware_upgrades_request = new \Meraki\Model\UpdateNetworkFirmwareUpgradesRequest(); // \Meraki\Model\UpdateNetworkFirmwareUpgradesRequest

try {
    $result = $apiInstance->updateNetworkFirmwareUpgrades($network_id, $update_network_firmware_upgrades_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirmwareUpgradesApi->updateNetworkFirmwareUpgrades: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_firmware_upgrades_request** | [**\Meraki\Model\UpdateNetworkFirmwareUpgradesRequest**](../Model/UpdateNetworkFirmwareUpgradesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgrades200Response**](../Model/GetNetworkFirmwareUpgrades200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkFirmwareUpgradesStagedEvents()`

```php
updateNetworkFirmwareUpgradesStagedEvents($network_id, $update_network_firmware_upgrades_staged_events_request): \Meraki\Model\GetNetworkFirmwareUpgradesStagedEvents200Response
```

Update the Staged Upgrade Event for a network

Update the Staged Upgrade Event for a network

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


$apiInstance = new Meraki\Api\FirmwareUpgradesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_firmware_upgrades_staged_events_request = new \Meraki\Model\UpdateNetworkFirmwareUpgradesStagedEventsRequest(); // \Meraki\Model\UpdateNetworkFirmwareUpgradesStagedEventsRequest

try {
    $result = $apiInstance->updateNetworkFirmwareUpgradesStagedEvents($network_id, $update_network_firmware_upgrades_staged_events_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirmwareUpgradesApi->updateNetworkFirmwareUpgradesStagedEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_firmware_upgrades_staged_events_request** | [**\Meraki\Model\UpdateNetworkFirmwareUpgradesStagedEventsRequest**](../Model/UpdateNetworkFirmwareUpgradesStagedEventsRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgradesStagedEvents200Response**](../Model/GetNetworkFirmwareUpgradesStagedEvents200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkFirmwareUpgradesStagedGroup()`

```php
updateNetworkFirmwareUpgradesStagedGroup($network_id, $group_id, $create_network_firmware_upgrades_staged_group_request): \Meraki\Model\GetNetworkFirmwareUpgradesStagedGroups200ResponseInner
```

Update a Staged Upgrade Group for a network

Update a Staged Upgrade Group for a network

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


$apiInstance = new Meraki\Api\FirmwareUpgradesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$group_id = 'group_id_example'; // string | Group ID
$create_network_firmware_upgrades_staged_group_request = new \Meraki\Model\CreateNetworkFirmwareUpgradesStagedGroupRequest(); // \Meraki\Model\CreateNetworkFirmwareUpgradesStagedGroupRequest

try {
    $result = $apiInstance->updateNetworkFirmwareUpgradesStagedGroup($network_id, $group_id, $create_network_firmware_upgrades_staged_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirmwareUpgradesApi->updateNetworkFirmwareUpgradesStagedGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **group_id** | **string**| Group ID | |
| **create_network_firmware_upgrades_staged_group_request** | [**\Meraki\Model\CreateNetworkFirmwareUpgradesStagedGroupRequest**](../Model/CreateNetworkFirmwareUpgradesStagedGroupRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgradesStagedGroups200ResponseInner**](../Model/GetNetworkFirmwareUpgradesStagedGroups200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
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


$apiInstance = new Meraki\Api\FirmwareUpgradesApi(
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
    echo 'Exception when calling FirmwareUpgradesApi->updateNetworkFirmwareUpgradesStagedStages: ', $e->getMessage(), PHP_EOL;
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
