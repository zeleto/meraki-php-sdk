# Meraki\GroupsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkFirmwareUpgradesStagedGroup()**](GroupsApi.md#createNetworkFirmwareUpgradesStagedGroup) | **POST** /networks/{networkId}/firmwareUpgrades/staged/groups | Create a Staged Upgrade Group for a network |
| [**createOrganizationAdaptivePolicyGroup()**](GroupsApi.md#createOrganizationAdaptivePolicyGroup) | **POST** /organizations/{organizationId}/adaptivePolicy/groups | Creates a new adaptive policy group |
| [**createOrganizationPolicyObjectsGroup()**](GroupsApi.md#createOrganizationPolicyObjectsGroup) | **POST** /organizations/{organizationId}/policyObjects/groups | Creates a new Policy Object Group. |
| [**deleteNetworkFirmwareUpgradesStagedGroup()**](GroupsApi.md#deleteNetworkFirmwareUpgradesStagedGroup) | **DELETE** /networks/{networkId}/firmwareUpgrades/staged/groups/{groupId} | Delete a Staged Upgrade Group |
| [**deleteOrganizationAdaptivePolicyGroup()**](GroupsApi.md#deleteOrganizationAdaptivePolicyGroup) | **DELETE** /organizations/{organizationId}/adaptivePolicy/groups/{id} | Deletes the specified adaptive policy group and any associated policies and references |
| [**deleteOrganizationPolicyObjectsGroup()**](GroupsApi.md#deleteOrganizationPolicyObjectsGroup) | **DELETE** /organizations/{organizationId}/policyObjects/groups/{policyObjectGroupId} | Deletes a Policy Object Group. |
| [**getNetworkFirmwareUpgradesStagedGroup()**](GroupsApi.md#getNetworkFirmwareUpgradesStagedGroup) | **GET** /networks/{networkId}/firmwareUpgrades/staged/groups/{groupId} | Get a Staged Upgrade Group from a network |
| [**getNetworkFirmwareUpgradesStagedGroups()**](GroupsApi.md#getNetworkFirmwareUpgradesStagedGroups) | **GET** /networks/{networkId}/firmwareUpgrades/staged/groups | List of Staged Upgrade Groups in a network |
| [**getOrganizationAdaptivePolicyGroup()**](GroupsApi.md#getOrganizationAdaptivePolicyGroup) | **GET** /organizations/{organizationId}/adaptivePolicy/groups/{id} | Returns an adaptive policy group |
| [**getOrganizationAdaptivePolicyGroups()**](GroupsApi.md#getOrganizationAdaptivePolicyGroups) | **GET** /organizations/{organizationId}/adaptivePolicy/groups | List adaptive policy groups in a organization |
| [**getOrganizationPolicyObjectsGroup()**](GroupsApi.md#getOrganizationPolicyObjectsGroup) | **GET** /organizations/{organizationId}/policyObjects/groups/{policyObjectGroupId} | Shows details of a Policy Object Group. |
| [**getOrganizationPolicyObjectsGroups()**](GroupsApi.md#getOrganizationPolicyObjectsGroups) | **GET** /organizations/{organizationId}/policyObjects/groups | Lists Policy Object Groups belonging to the organization. |
| [**updateNetworkFirmwareUpgradesStagedGroup()**](GroupsApi.md#updateNetworkFirmwareUpgradesStagedGroup) | **PUT** /networks/{networkId}/firmwareUpgrades/staged/groups/{groupId} | Update a Staged Upgrade Group for a network |
| [**updateOrganizationAdaptivePolicyGroup()**](GroupsApi.md#updateOrganizationAdaptivePolicyGroup) | **PUT** /organizations/{organizationId}/adaptivePolicy/groups/{id} | Updates an adaptive policy group |
| [**updateOrganizationPolicyObjectsGroup()**](GroupsApi.md#updateOrganizationPolicyObjectsGroup) | **PUT** /organizations/{organizationId}/policyObjects/groups/{policyObjectGroupId} | Updates a Policy Object Group. |


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


$apiInstance = new Meraki\Api\GroupsApi(
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
    echo 'Exception when calling GroupsApi->createNetworkFirmwareUpgradesStagedGroup: ', $e->getMessage(), PHP_EOL;
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

## `createOrganizationAdaptivePolicyGroup()`

```php
createOrganizationAdaptivePolicyGroup($organization_id, $create_organization_adaptive_policy_group_request): \Meraki\Model\GetOrganizationAdaptivePolicyGroups200ResponseInner
```

Creates a new adaptive policy group

Creates a new adaptive policy group

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


$apiInstance = new Meraki\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_adaptive_policy_group_request = new \Meraki\Model\CreateOrganizationAdaptivePolicyGroupRequest(); // \Meraki\Model\CreateOrganizationAdaptivePolicyGroupRequest

try {
    $result = $apiInstance->createOrganizationAdaptivePolicyGroup($organization_id, $create_organization_adaptive_policy_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->createOrganizationAdaptivePolicyGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_adaptive_policy_group_request** | [**\Meraki\Model\CreateOrganizationAdaptivePolicyGroupRequest**](../Model/CreateOrganizationAdaptivePolicyGroupRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicyGroups200ResponseInner**](../Model/GetOrganizationAdaptivePolicyGroups200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationPolicyObjectsGroup()`

```php
createOrganizationPolicyObjectsGroup($organization_id, $create_organization_policy_objects_group_request): \Meraki\Model\GetOrganizationPolicyObjectsGroups200Response
```

Creates a new Policy Object Group.

Creates a new Policy Object Group.

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


$apiInstance = new Meraki\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_policy_objects_group_request = new \Meraki\Model\CreateOrganizationPolicyObjectsGroupRequest(); // \Meraki\Model\CreateOrganizationPolicyObjectsGroupRequest

try {
    $result = $apiInstance->createOrganizationPolicyObjectsGroup($organization_id, $create_organization_policy_objects_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->createOrganizationPolicyObjectsGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_policy_objects_group_request** | [**\Meraki\Model\CreateOrganizationPolicyObjectsGroupRequest**](../Model/CreateOrganizationPolicyObjectsGroupRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationPolicyObjectsGroups200Response**](../Model/GetOrganizationPolicyObjectsGroups200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
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


$apiInstance = new Meraki\Api\GroupsApi(
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
    echo 'Exception when calling GroupsApi->deleteNetworkFirmwareUpgradesStagedGroup: ', $e->getMessage(), PHP_EOL;
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

## `deleteOrganizationAdaptivePolicyGroup()`

```php
deleteOrganizationAdaptivePolicyGroup($organization_id, $id)
```

Deletes the specified adaptive policy group and any associated policies and references

Deletes the specified adaptive policy group and any associated policies and references

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


$apiInstance = new Meraki\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$id = 'id_example'; // string | ID

try {
    $apiInstance->deleteOrganizationAdaptivePolicyGroup($organization_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->deleteOrganizationAdaptivePolicyGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **id** | **string**| ID | |

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

## `deleteOrganizationPolicyObjectsGroup()`

```php
deleteOrganizationPolicyObjectsGroup($organization_id, $policy_object_group_id)
```

Deletes a Policy Object Group.

Deletes a Policy Object Group.

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


$apiInstance = new Meraki\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$policy_object_group_id = 'policy_object_group_id_example'; // string | Policy object group ID

try {
    $apiInstance->deleteOrganizationPolicyObjectsGroup($organization_id, $policy_object_group_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->deleteOrganizationPolicyObjectsGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **policy_object_group_id** | **string**| Policy object group ID | |

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


$apiInstance = new Meraki\Api\GroupsApi(
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
    echo 'Exception when calling GroupsApi->getNetworkFirmwareUpgradesStagedGroup: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\GroupsApi(
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
    echo 'Exception when calling GroupsApi->getNetworkFirmwareUpgradesStagedGroups: ', $e->getMessage(), PHP_EOL;
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

## `getOrganizationAdaptivePolicyGroup()`

```php
getOrganizationAdaptivePolicyGroup($organization_id, $id): \Meraki\Model\GetOrganizationAdaptivePolicyGroups200ResponseInner
```

Returns an adaptive policy group

Returns an adaptive policy group

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


$apiInstance = new Meraki\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$id = 'id_example'; // string | ID

try {
    $result = $apiInstance->getOrganizationAdaptivePolicyGroup($organization_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getOrganizationAdaptivePolicyGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **id** | **string**| ID | |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicyGroups200ResponseInner**](../Model/GetOrganizationAdaptivePolicyGroups200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAdaptivePolicyGroups()`

```php
getOrganizationAdaptivePolicyGroups($organization_id): \Meraki\Model\GetOrganizationAdaptivePolicyGroups200ResponseInner[]
```

List adaptive policy groups in a organization

List adaptive policy groups in a organization

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


$apiInstance = new Meraki\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationAdaptivePolicyGroups($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getOrganizationAdaptivePolicyGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicyGroups200ResponseInner[]**](../Model/GetOrganizationAdaptivePolicyGroups200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationPolicyObjectsGroup()`

```php
getOrganizationPolicyObjectsGroup($organization_id, $policy_object_group_id): \Meraki\Model\GetOrganizationPolicyObjectsGroups200Response
```

Shows details of a Policy Object Group.

Shows details of a Policy Object Group.

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


$apiInstance = new Meraki\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$policy_object_group_id = 'policy_object_group_id_example'; // string | Policy object group ID

try {
    $result = $apiInstance->getOrganizationPolicyObjectsGroup($organization_id, $policy_object_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getOrganizationPolicyObjectsGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **policy_object_group_id** | **string**| Policy object group ID | |

### Return type

[**\Meraki\Model\GetOrganizationPolicyObjectsGroups200Response**](../Model/GetOrganizationPolicyObjectsGroups200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationPolicyObjectsGroups()`

```php
getOrganizationPolicyObjectsGroups($organization_id, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationPolicyObjectsGroups200Response
```

Lists Policy Object Groups belonging to the organization.

Lists Policy Object Groups belonging to the organization.

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


$apiInstance = new Meraki\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 10 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationPolicyObjectsGroups($organization_id, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getOrganizationPolicyObjectsGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 10 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationPolicyObjectsGroups200Response**](../Model/GetOrganizationPolicyObjectsGroups200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
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


$apiInstance = new Meraki\Api\GroupsApi(
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
    echo 'Exception when calling GroupsApi->updateNetworkFirmwareUpgradesStagedGroup: ', $e->getMessage(), PHP_EOL;
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

## `updateOrganizationAdaptivePolicyGroup()`

```php
updateOrganizationAdaptivePolicyGroup($organization_id, $id, $update_organization_adaptive_policy_group_request): \Meraki\Model\GetOrganizationAdaptivePolicyGroups200ResponseInner
```

Updates an adaptive policy group

Updates an adaptive policy group. If updating \"Infrastructure\", only the SGT is allowed. Cannot update \"Unknown\".

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


$apiInstance = new Meraki\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$id = 'id_example'; // string | ID
$update_organization_adaptive_policy_group_request = new \Meraki\Model\UpdateOrganizationAdaptivePolicyGroupRequest(); // \Meraki\Model\UpdateOrganizationAdaptivePolicyGroupRequest

try {
    $result = $apiInstance->updateOrganizationAdaptivePolicyGroup($organization_id, $id, $update_organization_adaptive_policy_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->updateOrganizationAdaptivePolicyGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **id** | **string**| ID | |
| **update_organization_adaptive_policy_group_request** | [**\Meraki\Model\UpdateOrganizationAdaptivePolicyGroupRequest**](../Model/UpdateOrganizationAdaptivePolicyGroupRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicyGroups200ResponseInner**](../Model/GetOrganizationAdaptivePolicyGroups200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationPolicyObjectsGroup()`

```php
updateOrganizationPolicyObjectsGroup($organization_id, $policy_object_group_id, $update_organization_policy_objects_group_request): \Meraki\Model\GetOrganizationPolicyObjectsGroups200Response
```

Updates a Policy Object Group.

Updates a Policy Object Group.

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


$apiInstance = new Meraki\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$policy_object_group_id = 'policy_object_group_id_example'; // string | Policy object group ID
$update_organization_policy_objects_group_request = new \Meraki\Model\UpdateOrganizationPolicyObjectsGroupRequest(); // \Meraki\Model\UpdateOrganizationPolicyObjectsGroupRequest

try {
    $result = $apiInstance->updateOrganizationPolicyObjectsGroup($organization_id, $policy_object_group_id, $update_organization_policy_objects_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->updateOrganizationPolicyObjectsGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **policy_object_group_id** | **string**| Policy object group ID | |
| **update_organization_policy_objects_group_request** | [**\Meraki\Model\UpdateOrganizationPolicyObjectsGroupRequest**](../Model/UpdateOrganizationPolicyObjectsGroupRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationPolicyObjectsGroups200Response**](../Model/GetOrganizationPolicyObjectsGroups200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
