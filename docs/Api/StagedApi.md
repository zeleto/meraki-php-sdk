# Meraki\StagedApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkFirmwareUpgradesStagedEvent()**](StagedApi.md#createNetworkFirmwareUpgradesStagedEvent) | **POST** /networks/{networkId}/firmwareUpgrades/staged/events | Create a Staged Upgrade Event for a network |
| [**createNetworkFirmwareUpgradesStagedGroup()**](StagedApi.md#createNetworkFirmwareUpgradesStagedGroup) | **POST** /networks/{networkId}/firmwareUpgrades/staged/groups | Create a Staged Upgrade Group for a network |
| [**deferNetworkFirmwareUpgradesStagedEvents()**](StagedApi.md#deferNetworkFirmwareUpgradesStagedEvents) | **POST** /networks/{networkId}/firmwareUpgrades/staged/events/defer | Postpone by 1 week all pending staged upgrade stages for a network |
| [**deleteNetworkFirmwareUpgradesStagedGroup()**](StagedApi.md#deleteNetworkFirmwareUpgradesStagedGroup) | **DELETE** /networks/{networkId}/firmwareUpgrades/staged/groups/{groupId} | Delete a Staged Upgrade Group |
| [**getNetworkFirmwareUpgradesStagedEvents()**](StagedApi.md#getNetworkFirmwareUpgradesStagedEvents) | **GET** /networks/{networkId}/firmwareUpgrades/staged/events | Get the Staged Upgrade Event from a network |
| [**getNetworkFirmwareUpgradesStagedGroup()**](StagedApi.md#getNetworkFirmwareUpgradesStagedGroup) | **GET** /networks/{networkId}/firmwareUpgrades/staged/groups/{groupId} | Get a Staged Upgrade Group from a network |
| [**getNetworkFirmwareUpgradesStagedGroups()**](StagedApi.md#getNetworkFirmwareUpgradesStagedGroups) | **GET** /networks/{networkId}/firmwareUpgrades/staged/groups | List of Staged Upgrade Groups in a network |
| [**getNetworkFirmwareUpgradesStagedStages()**](StagedApi.md#getNetworkFirmwareUpgradesStagedStages) | **GET** /networks/{networkId}/firmwareUpgrades/staged/stages | Order of Staged Upgrade Groups in a network |
| [**rollbacksNetworkFirmwareUpgradesStagedEvents()**](StagedApi.md#rollbacksNetworkFirmwareUpgradesStagedEvents) | **POST** /networks/{networkId}/firmwareUpgrades/staged/events/rollbacks | Rollback a Staged Upgrade Event for a network |
| [**updateNetworkFirmwareUpgradesStagedEvents()**](StagedApi.md#updateNetworkFirmwareUpgradesStagedEvents) | **PUT** /networks/{networkId}/firmwareUpgrades/staged/events | Update the Staged Upgrade Event for a network |
| [**updateNetworkFirmwareUpgradesStagedGroup()**](StagedApi.md#updateNetworkFirmwareUpgradesStagedGroup) | **PUT** /networks/{networkId}/firmwareUpgrades/staged/groups/{groupId} | Update a Staged Upgrade Group for a network |
| [**updateNetworkFirmwareUpgradesStagedStages()**](StagedApi.md#updateNetworkFirmwareUpgradesStagedStages) | **PUT** /networks/{networkId}/firmwareUpgrades/staged/stages | Assign Staged Upgrade Group order in the sequence. |


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


$apiInstance = new Meraki\Api\StagedApi(
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
    echo 'Exception when calling StagedApi->createNetworkFirmwareUpgradesStagedEvent: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\StagedApi(
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
    echo 'Exception when calling StagedApi->createNetworkFirmwareUpgradesStagedGroup: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\StagedApi(
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
    echo 'Exception when calling StagedApi->deferNetworkFirmwareUpgradesStagedEvents: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\StagedApi(
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
    echo 'Exception when calling StagedApi->deleteNetworkFirmwareUpgradesStagedGroup: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\StagedApi(
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
    echo 'Exception when calling StagedApi->getNetworkFirmwareUpgradesStagedEvents: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\StagedApi(
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
    echo 'Exception when calling StagedApi->getNetworkFirmwareUpgradesStagedGroup: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\StagedApi(
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
    echo 'Exception when calling StagedApi->getNetworkFirmwareUpgradesStagedGroups: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\StagedApi(
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
    echo 'Exception when calling StagedApi->getNetworkFirmwareUpgradesStagedStages: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\StagedApi(
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
    echo 'Exception when calling StagedApi->rollbacksNetworkFirmwareUpgradesStagedEvents: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\StagedApi(
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
    echo 'Exception when calling StagedApi->updateNetworkFirmwareUpgradesStagedEvents: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\StagedApi(
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
    echo 'Exception when calling StagedApi->updateNetworkFirmwareUpgradesStagedGroup: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\StagedApi(
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
    echo 'Exception when calling StagedApi->updateNetworkFirmwareUpgradesStagedStages: ', $e->getMessage(), PHP_EOL;
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
