# Meraki\SmApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkinNetworkSmDevices()**](SmApi.md#checkinNetworkSmDevices) | **POST** /networks/{networkId}/sm/devices/checkin | Force check-in a set of devices |
| [**createNetworkSmBypassActivationLockAttempt()**](SmApi.md#createNetworkSmBypassActivationLockAttempt) | **POST** /networks/{networkId}/sm/bypassActivationLockAttempts | Bypass activation lock attempt |
| [**createNetworkSmTargetGroup()**](SmApi.md#createNetworkSmTargetGroup) | **POST** /networks/{networkId}/sm/targetGroups | Add a target group |
| [**createOrganizationSmAdminsRole()**](SmApi.md#createOrganizationSmAdminsRole) | **POST** /organizations/{organizationId}/sm/admins/roles | Create a Limited Access Role |
| [**deleteNetworkSmTargetGroup()**](SmApi.md#deleteNetworkSmTargetGroup) | **DELETE** /networks/{networkId}/sm/targetGroups/{targetGroupId} | Delete a target group from a network |
| [**deleteNetworkSmUserAccessDevice()**](SmApi.md#deleteNetworkSmUserAccessDevice) | **DELETE** /networks/{networkId}/sm/userAccessDevices/{userAccessDeviceId} | Delete a User Access Device |
| [**deleteOrganizationSmAdminsRole()**](SmApi.md#deleteOrganizationSmAdminsRole) | **DELETE** /organizations/{organizationId}/sm/admins/roles/{roleId} | Delete a Limited Access Role |
| [**getNetworkSmBypassActivationLockAttempt()**](SmApi.md#getNetworkSmBypassActivationLockAttempt) | **GET** /networks/{networkId}/sm/bypassActivationLockAttempts/{attemptId} | Bypass activation lock attempt status |
| [**getNetworkSmDeviceCellularUsageHistory()**](SmApi.md#getNetworkSmDeviceCellularUsageHistory) | **GET** /networks/{networkId}/sm/devices/{deviceId}/cellularUsageHistory | Return the client&#39;s daily cellular data usage history |
| [**getNetworkSmDeviceCerts()**](SmApi.md#getNetworkSmDeviceCerts) | **GET** /networks/{networkId}/sm/devices/{deviceId}/certs | List the certs on a device |
| [**getNetworkSmDeviceConnectivity()**](SmApi.md#getNetworkSmDeviceConnectivity) | **GET** /networks/{networkId}/sm/devices/{deviceId}/connectivity | Returns historical connectivity data (whether a device is regularly checking in to Dashboard). |
| [**getNetworkSmDeviceDesktopLogs()**](SmApi.md#getNetworkSmDeviceDesktopLogs) | **GET** /networks/{networkId}/sm/devices/{deviceId}/desktopLogs | Return historical records of various Systems Manager network connection details for desktop devices. |
| [**getNetworkSmDeviceDeviceCommandLogs()**](SmApi.md#getNetworkSmDeviceDeviceCommandLogs) | **GET** /networks/{networkId}/sm/devices/{deviceId}/deviceCommandLogs | Return historical records of commands sent to Systems Manager devices |
| [**getNetworkSmDeviceDeviceProfiles()**](SmApi.md#getNetworkSmDeviceDeviceProfiles) | **GET** /networks/{networkId}/sm/devices/{deviceId}/deviceProfiles | Get the installed profiles associated with a device |
| [**getNetworkSmDeviceNetworkAdapters()**](SmApi.md#getNetworkSmDeviceNetworkAdapters) | **GET** /networks/{networkId}/sm/devices/{deviceId}/networkAdapters | List the network adapters of a device |
| [**getNetworkSmDevicePerformanceHistory()**](SmApi.md#getNetworkSmDevicePerformanceHistory) | **GET** /networks/{networkId}/sm/devices/{deviceId}/performanceHistory | Return historical records of various Systems Manager client metrics for desktop devices. |
| [**getNetworkSmDeviceRestrictions()**](SmApi.md#getNetworkSmDeviceRestrictions) | **GET** /networks/{networkId}/sm/devices/{deviceId}/restrictions | List the restrictions on a device |
| [**getNetworkSmDeviceSecurityCenters()**](SmApi.md#getNetworkSmDeviceSecurityCenters) | **GET** /networks/{networkId}/sm/devices/{deviceId}/securityCenters | List the security centers on a device |
| [**getNetworkSmDeviceSoftwares()**](SmApi.md#getNetworkSmDeviceSoftwares) | **GET** /networks/{networkId}/sm/devices/{deviceId}/softwares | Get a list of softwares associated with a device |
| [**getNetworkSmDeviceWlanLists()**](SmApi.md#getNetworkSmDeviceWlanLists) | **GET** /networks/{networkId}/sm/devices/{deviceId}/wlanLists | List the saved SSID names on a device |
| [**getNetworkSmDevices()**](SmApi.md#getNetworkSmDevices) | **GET** /networks/{networkId}/sm/devices | List the devices enrolled in an SM network with various specified fields and filters |
| [**getNetworkSmProfiles()**](SmApi.md#getNetworkSmProfiles) | **GET** /networks/{networkId}/sm/profiles | List all profiles in a network |
| [**getNetworkSmTargetGroup()**](SmApi.md#getNetworkSmTargetGroup) | **GET** /networks/{networkId}/sm/targetGroups/{targetGroupId} | Return a target group |
| [**getNetworkSmTargetGroups()**](SmApi.md#getNetworkSmTargetGroups) | **GET** /networks/{networkId}/sm/targetGroups | List the target groups in this network |
| [**getNetworkSmTrustedAccessConfigs()**](SmApi.md#getNetworkSmTrustedAccessConfigs) | **GET** /networks/{networkId}/sm/trustedAccessConfigs | List Trusted Access Configs |
| [**getNetworkSmUserAccessDevices()**](SmApi.md#getNetworkSmUserAccessDevices) | **GET** /networks/{networkId}/sm/userAccessDevices | List User Access Devices and its Trusted Access Connections |
| [**getNetworkSmUserDeviceProfiles()**](SmApi.md#getNetworkSmUserDeviceProfiles) | **GET** /networks/{networkId}/sm/users/{userId}/deviceProfiles | Get the profiles associated with a user |
| [**getNetworkSmUserSoftwares()**](SmApi.md#getNetworkSmUserSoftwares) | **GET** /networks/{networkId}/sm/users/{userId}/softwares | Get a list of softwares associated with a user |
| [**getNetworkSmUsers()**](SmApi.md#getNetworkSmUsers) | **GET** /networks/{networkId}/sm/users | List the owners in an SM network with various specified fields and filters |
| [**getOrganizationSmAdminsRole()**](SmApi.md#getOrganizationSmAdminsRole) | **GET** /organizations/{organizationId}/sm/admins/roles/{roleId} | Return a Limited Access Role |
| [**getOrganizationSmAdminsRoles()**](SmApi.md#getOrganizationSmAdminsRoles) | **GET** /organizations/{organizationId}/sm/admins/roles | List the Limited Access Roles for an organization |
| [**getOrganizationSmApnsCert()**](SmApi.md#getOrganizationSmApnsCert) | **GET** /organizations/{organizationId}/sm/apnsCert | Get the organization&#39;s APNS certificate |
| [**getOrganizationSmSentryPoliciesAssignmentsByNetwork()**](SmApi.md#getOrganizationSmSentryPoliciesAssignmentsByNetwork) | **GET** /organizations/{organizationId}/sm/sentry/policies/assignments/byNetwork | List the Sentry Policies for an organization ordered in ascending order of priority |
| [**getOrganizationSmVppAccount()**](SmApi.md#getOrganizationSmVppAccount) | **GET** /organizations/{organizationId}/sm/vppAccounts/{vppAccountId} | Get a hash containing the unparsed token of the VPP account with the given ID |
| [**getOrganizationSmVppAccounts()**](SmApi.md#getOrganizationSmVppAccounts) | **GET** /organizations/{organizationId}/sm/vppAccounts | List the VPP accounts in the organization |
| [**installNetworkSmDeviceApps()**](SmApi.md#installNetworkSmDeviceApps) | **POST** /networks/{networkId}/sm/devices/{deviceId}/installApps | Install applications on a device |
| [**lockNetworkSmDevices()**](SmApi.md#lockNetworkSmDevices) | **POST** /networks/{networkId}/sm/devices/lock | Lock a set of devices |
| [**modifyNetworkSmDevicesTags()**](SmApi.md#modifyNetworkSmDevicesTags) | **POST** /networks/{networkId}/sm/devices/modifyTags | Add, delete, or update the tags of a set of devices |
| [**moveNetworkSmDevices()**](SmApi.md#moveNetworkSmDevices) | **POST** /networks/{networkId}/sm/devices/move | Move a set of devices to a new network |
| [**rebootNetworkSmDevices()**](SmApi.md#rebootNetworkSmDevices) | **POST** /networks/{networkId}/sm/devices/reboot | Reboot a set of endpoints |
| [**refreshNetworkSmDeviceDetails()**](SmApi.md#refreshNetworkSmDeviceDetails) | **POST** /networks/{networkId}/sm/devices/{deviceId}/refreshDetails | Refresh the details of a device |
| [**shutdownNetworkSmDevices()**](SmApi.md#shutdownNetworkSmDevices) | **POST** /networks/{networkId}/sm/devices/shutdown | Shutdown a set of endpoints |
| [**unenrollNetworkSmDevice()**](SmApi.md#unenrollNetworkSmDevice) | **POST** /networks/{networkId}/sm/devices/{deviceId}/unenroll | Unenroll a device |
| [**uninstallNetworkSmDeviceApps()**](SmApi.md#uninstallNetworkSmDeviceApps) | **POST** /networks/{networkId}/sm/devices/{deviceId}/uninstallApps | Uninstall applications on a device |
| [**updateNetworkSmDevicesFields()**](SmApi.md#updateNetworkSmDevicesFields) | **PUT** /networks/{networkId}/sm/devices/fields | Modify the fields of a device |
| [**updateNetworkSmTargetGroup()**](SmApi.md#updateNetworkSmTargetGroup) | **PUT** /networks/{networkId}/sm/targetGroups/{targetGroupId} | Update a target group |
| [**updateOrganizationSmAdminsRole()**](SmApi.md#updateOrganizationSmAdminsRole) | **PUT** /organizations/{organizationId}/sm/admins/roles/{roleId} | Update a Limited Access Role |
| [**updateOrganizationSmSentryPoliciesAssignments()**](SmApi.md#updateOrganizationSmSentryPoliciesAssignments) | **PUT** /organizations/{organizationId}/sm/sentry/policies/assignments | Update an Organizations Sentry Policies using the provided list |
| [**wipeNetworkSmDevices()**](SmApi.md#wipeNetworkSmDevices) | **POST** /networks/{networkId}/sm/devices/wipe | Wipe a device |


## `checkinNetworkSmDevices()`

```php
checkinNetworkSmDevices($network_id, $checkin_network_sm_devices_request): \Meraki\Model\CheckinNetworkSmDevices200Response
```

Force check-in a set of devices

Force check-in a set of devices

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$checkin_network_sm_devices_request = new \Meraki\Model\CheckinNetworkSmDevicesRequest(); // \Meraki\Model\CheckinNetworkSmDevicesRequest

try {
    $result = $apiInstance->checkinNetworkSmDevices($network_id, $checkin_network_sm_devices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->checkinNetworkSmDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **checkin_network_sm_devices_request** | [**\Meraki\Model\CheckinNetworkSmDevicesRequest**](../Model/CheckinNetworkSmDevicesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\CheckinNetworkSmDevices200Response**](../Model/CheckinNetworkSmDevices200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkSmBypassActivationLockAttempt()`

```php
createNetworkSmBypassActivationLockAttempt($network_id, $create_network_sm_bypass_activation_lock_attempt_request): object
```

Bypass activation lock attempt

Bypass activation lock attempt

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_sm_bypass_activation_lock_attempt_request = new \Meraki\Model\CreateNetworkSmBypassActivationLockAttemptRequest(); // \Meraki\Model\CreateNetworkSmBypassActivationLockAttemptRequest

try {
    $result = $apiInstance->createNetworkSmBypassActivationLockAttempt($network_id, $create_network_sm_bypass_activation_lock_attempt_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->createNetworkSmBypassActivationLockAttempt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_sm_bypass_activation_lock_attempt_request** | [**\Meraki\Model\CreateNetworkSmBypassActivationLockAttemptRequest**](../Model/CreateNetworkSmBypassActivationLockAttemptRequest.md)|  | |

### Return type

**object**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkSmTargetGroup()`

```php
createNetworkSmTargetGroup($network_id, $create_network_sm_target_group_request): \Meraki\Model\GetNetworkSmTargetGroups200ResponseInner
```

Add a target group

Add a target group

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_sm_target_group_request = new \Meraki\Model\CreateNetworkSmTargetGroupRequest(); // \Meraki\Model\CreateNetworkSmTargetGroupRequest

try {
    $result = $apiInstance->createNetworkSmTargetGroup($network_id, $create_network_sm_target_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->createNetworkSmTargetGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_sm_target_group_request** | [**\Meraki\Model\CreateNetworkSmTargetGroupRequest**](../Model/CreateNetworkSmTargetGroupRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSmTargetGroups200ResponseInner**](../Model/GetNetworkSmTargetGroups200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationSmAdminsRole()`

```php
createOrganizationSmAdminsRole($organization_id, $create_organization_sm_admins_role_request): \Meraki\Model\GetOrganizationSmAdminsRoles200ResponseItemsInner
```

Create a Limited Access Role

Create a Limited Access Role

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_sm_admins_role_request = new \Meraki\Model\CreateOrganizationSmAdminsRoleRequest(); // \Meraki\Model\CreateOrganizationSmAdminsRoleRequest

try {
    $result = $apiInstance->createOrganizationSmAdminsRole($organization_id, $create_organization_sm_admins_role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->createOrganizationSmAdminsRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_sm_admins_role_request** | [**\Meraki\Model\CreateOrganizationSmAdminsRoleRequest**](../Model/CreateOrganizationSmAdminsRoleRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationSmAdminsRoles200ResponseItemsInner**](../Model/GetOrganizationSmAdminsRoles200ResponseItemsInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkSmTargetGroup()`

```php
deleteNetworkSmTargetGroup($network_id, $target_group_id)
```

Delete a target group from a network

Delete a target group from a network

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$target_group_id = 'target_group_id_example'; // string | Target group ID

try {
    $apiInstance->deleteNetworkSmTargetGroup($network_id, $target_group_id);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->deleteNetworkSmTargetGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **target_group_id** | **string**| Target group ID | |

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

## `deleteNetworkSmUserAccessDevice()`

```php
deleteNetworkSmUserAccessDevice($network_id, $user_access_device_id)
```

Delete a User Access Device

Delete a User Access Device

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$user_access_device_id = 'user_access_device_id_example'; // string | User access device ID

try {
    $apiInstance->deleteNetworkSmUserAccessDevice($network_id, $user_access_device_id);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->deleteNetworkSmUserAccessDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **user_access_device_id** | **string**| User access device ID | |

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

## `deleteOrganizationSmAdminsRole()`

```php
deleteOrganizationSmAdminsRole($organization_id, $role_id)
```

Delete a Limited Access Role

Delete a Limited Access Role

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$role_id = 'role_id_example'; // string | Role ID

try {
    $apiInstance->deleteOrganizationSmAdminsRole($organization_id, $role_id);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->deleteOrganizationSmAdminsRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **role_id** | **string**| Role ID | |

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

## `getNetworkSmBypassActivationLockAttempt()`

```php
getNetworkSmBypassActivationLockAttempt($network_id, $attempt_id): object
```

Bypass activation lock attempt status

Bypass activation lock attempt status

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$attempt_id = 'attempt_id_example'; // string | Attempt ID

try {
    $result = $apiInstance->getNetworkSmBypassActivationLockAttempt($network_id, $attempt_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->getNetworkSmBypassActivationLockAttempt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **attempt_id** | **string**| Attempt ID | |

### Return type

**object**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmDeviceCellularUsageHistory()`

```php
getNetworkSmDeviceCellularUsageHistory($network_id, $device_id): \Meraki\Model\GetNetworkSmDeviceCellularUsageHistory200ResponseInner[]
```

Return the client's daily cellular data usage history

Return the client's daily cellular data usage history. Usage data is in kilobytes.

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID

try {
    $result = $apiInstance->getNetworkSmDeviceCellularUsageHistory($network_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->getNetworkSmDeviceCellularUsageHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |

### Return type

[**\Meraki\Model\GetNetworkSmDeviceCellularUsageHistory200ResponseInner[]**](../Model/GetNetworkSmDeviceCellularUsageHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmDeviceCerts()`

```php
getNetworkSmDeviceCerts($network_id, $device_id): \Meraki\Model\GetNetworkSmDeviceCerts200ResponseInner[]
```

List the certs on a device

List the certs on a device

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID

try {
    $result = $apiInstance->getNetworkSmDeviceCerts($network_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->getNetworkSmDeviceCerts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |

### Return type

[**\Meraki\Model\GetNetworkSmDeviceCerts200ResponseInner[]**](../Model/GetNetworkSmDeviceCerts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmDeviceConnectivity()`

```php
getNetworkSmDeviceConnectivity($network_id, $device_id, $per_page, $starting_after, $ending_before): \Meraki\Model\GetNetworkSmDeviceConnectivity200ResponseInner[]
```

Returns historical connectivity data (whether a device is regularly checking in to Dashboard).

Returns historical connectivity data (whether a device is regularly checking in to Dashboard).

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getNetworkSmDeviceConnectivity($network_id, $device_id, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->getNetworkSmDeviceConnectivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSmDeviceConnectivity200ResponseInner[]**](../Model/GetNetworkSmDeviceConnectivity200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmDeviceDesktopLogs()`

```php
getNetworkSmDeviceDesktopLogs($network_id, $device_id, $per_page, $starting_after, $ending_before): \Meraki\Model\GetNetworkSmDeviceDesktopLogs200ResponseInner[]
```

Return historical records of various Systems Manager network connection details for desktop devices.

Return historical records of various Systems Manager network connection details for desktop devices.

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getNetworkSmDeviceDesktopLogs($network_id, $device_id, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->getNetworkSmDeviceDesktopLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSmDeviceDesktopLogs200ResponseInner[]**](../Model/GetNetworkSmDeviceDesktopLogs200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmDeviceDeviceCommandLogs()`

```php
getNetworkSmDeviceDeviceCommandLogs($network_id, $device_id, $per_page, $starting_after, $ending_before): \Meraki\Model\GetNetworkSmDeviceDeviceCommandLogs200ResponseInner[]
```

Return historical records of commands sent to Systems Manager devices

Return historical records of commands sent to Systems Manager devices. Note that this will include the name of the Dashboard user who initiated the command if it was generated by a Dashboard admin rather than the automatic behavior of the system; you may wish to filter this out of any reports.

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getNetworkSmDeviceDeviceCommandLogs($network_id, $device_id, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->getNetworkSmDeviceDeviceCommandLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSmDeviceDeviceCommandLogs200ResponseInner[]**](../Model/GetNetworkSmDeviceDeviceCommandLogs200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmDeviceDeviceProfiles()`

```php
getNetworkSmDeviceDeviceProfiles($network_id, $device_id): \Meraki\Model\GetNetworkSmDeviceDeviceProfiles200ResponseInner[]
```

Get the installed profiles associated with a device

Get the installed profiles associated with a device

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID

try {
    $result = $apiInstance->getNetworkSmDeviceDeviceProfiles($network_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->getNetworkSmDeviceDeviceProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |

### Return type

[**\Meraki\Model\GetNetworkSmDeviceDeviceProfiles200ResponseInner[]**](../Model/GetNetworkSmDeviceDeviceProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmDeviceNetworkAdapters()`

```php
getNetworkSmDeviceNetworkAdapters($network_id, $device_id): \Meraki\Model\GetNetworkSmDeviceNetworkAdapters200ResponseInner[]
```

List the network adapters of a device

List the network adapters of a device

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID

try {
    $result = $apiInstance->getNetworkSmDeviceNetworkAdapters($network_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->getNetworkSmDeviceNetworkAdapters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |

### Return type

[**\Meraki\Model\GetNetworkSmDeviceNetworkAdapters200ResponseInner[]**](../Model/GetNetworkSmDeviceNetworkAdapters200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmDevicePerformanceHistory()`

```php
getNetworkSmDevicePerformanceHistory($network_id, $device_id, $per_page, $starting_after, $ending_before): \Meraki\Model\GetNetworkSmDevicePerformanceHistory200ResponseInner[]
```

Return historical records of various Systems Manager client metrics for desktop devices.

Return historical records of various Systems Manager client metrics for desktop devices.

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getNetworkSmDevicePerformanceHistory($network_id, $device_id, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->getNetworkSmDevicePerformanceHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSmDevicePerformanceHistory200ResponseInner[]**](../Model/GetNetworkSmDevicePerformanceHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmDeviceRestrictions()`

```php
getNetworkSmDeviceRestrictions($network_id, $device_id): \Meraki\Model\GetNetworkSmDeviceRestrictions200Response
```

List the restrictions on a device

List the restrictions on a device

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID

try {
    $result = $apiInstance->getNetworkSmDeviceRestrictions($network_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->getNetworkSmDeviceRestrictions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |

### Return type

[**\Meraki\Model\GetNetworkSmDeviceRestrictions200Response**](../Model/GetNetworkSmDeviceRestrictions200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmDeviceSecurityCenters()`

```php
getNetworkSmDeviceSecurityCenters($network_id, $device_id): \Meraki\Model\GetNetworkSmDeviceSecurityCenters200ResponseInner[]
```

List the security centers on a device

List the security centers on a device

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID

try {
    $result = $apiInstance->getNetworkSmDeviceSecurityCenters($network_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->getNetworkSmDeviceSecurityCenters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |

### Return type

[**\Meraki\Model\GetNetworkSmDeviceSecurityCenters200ResponseInner[]**](../Model/GetNetworkSmDeviceSecurityCenters200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmDeviceSoftwares()`

```php
getNetworkSmDeviceSoftwares($network_id, $device_id): \Meraki\Model\GetNetworkSmDeviceSoftwares200ResponseInner[]
```

Get a list of softwares associated with a device

Get a list of softwares associated with a device

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID

try {
    $result = $apiInstance->getNetworkSmDeviceSoftwares($network_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->getNetworkSmDeviceSoftwares: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |

### Return type

[**\Meraki\Model\GetNetworkSmDeviceSoftwares200ResponseInner[]**](../Model/GetNetworkSmDeviceSoftwares200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmDeviceWlanLists()`

```php
getNetworkSmDeviceWlanLists($network_id, $device_id): \Meraki\Model\GetNetworkSmDeviceWlanLists200ResponseInner[]
```

List the saved SSID names on a device

List the saved SSID names on a device

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID

try {
    $result = $apiInstance->getNetworkSmDeviceWlanLists($network_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->getNetworkSmDeviceWlanLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |

### Return type

[**\Meraki\Model\GetNetworkSmDeviceWlanLists200ResponseInner[]**](../Model/GetNetworkSmDeviceWlanLists200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmDevices()`

```php
getNetworkSmDevices($network_id, $fields, $wifi_macs, $serials, $ids, $uuids, $system_types, $scope, $per_page, $starting_after, $ending_before): \Meraki\Model\GetNetworkSmDevices200ResponseInner[]
```

List the devices enrolled in an SM network with various specified fields and filters

List the devices enrolled in an SM network with various specified fields and filters

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$fields = array('fields_example'); // string[] | Additional fields that will be displayed for each device.     The default fields are: id, name, tags, ssid, wifiMac, osName, systemModel, uuid, and serialNumber. The additional fields are: ip,     systemType, availableDeviceCapacity, kioskAppName, biosVersion, lastConnected, missingAppsCount, userSuppliedAddress, location, lastUser,     ownerEmail, ownerUsername, osBuild, publicIp, phoneNumber, diskInfoJson, deviceCapacity, isManaged, hadMdm, isSupervised, meid, imei, iccid,     simCarrierNetwork, cellularDataUsed, isHotspotEnabled, createdAt, batteryEstCharge, quarantined, avName, avRunning, asName, fwName,     isRooted, loginRequired, screenLockEnabled, screenLockDelay, autoLoginDisabled, autoTags, hasMdm, hasDesktopAgent, diskEncryptionEnabled,     hardwareEncryptionCaps, passCodeLock, usesHardwareKeystore, androidSecurityPatchVersion, cellular, and url.
$wifi_macs = array('wifi_macs_example'); // string[] | Filter devices by wifi mac(s).
$serials = array('serials_example'); // string[] | Filter devices by serial(s).
$ids = array('ids_example'); // string[] | Filter devices by id(s).
$uuids = array('uuids_example'); // string[] | Filter devices by uuid(s).
$system_types = array('system_types_example'); // string[] | Filter devices by system type(s).
$scope = array('scope_example'); // string[] | Specify a scope (one of all, none, withAny, withAll, withoutAny, or withoutAll) and a set of tags.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getNetworkSmDevices($network_id, $fields, $wifi_macs, $serials, $ids, $uuids, $system_types, $scope, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->getNetworkSmDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **fields** | [**string[]**](../Model/string.md)| Additional fields that will be displayed for each device.     The default fields are: id, name, tags, ssid, wifiMac, osName, systemModel, uuid, and serialNumber. The additional fields are: ip,     systemType, availableDeviceCapacity, kioskAppName, biosVersion, lastConnected, missingAppsCount, userSuppliedAddress, location, lastUser,     ownerEmail, ownerUsername, osBuild, publicIp, phoneNumber, diskInfoJson, deviceCapacity, isManaged, hadMdm, isSupervised, meid, imei, iccid,     simCarrierNetwork, cellularDataUsed, isHotspotEnabled, createdAt, batteryEstCharge, quarantined, avName, avRunning, asName, fwName,     isRooted, loginRequired, screenLockEnabled, screenLockDelay, autoLoginDisabled, autoTags, hasMdm, hasDesktopAgent, diskEncryptionEnabled,     hardwareEncryptionCaps, passCodeLock, usesHardwareKeystore, androidSecurityPatchVersion, cellular, and url. | [optional] |
| **wifi_macs** | [**string[]**](../Model/string.md)| Filter devices by wifi mac(s). | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Filter devices by serial(s). | [optional] |
| **ids** | [**string[]**](../Model/string.md)| Filter devices by id(s). | [optional] |
| **uuids** | [**string[]**](../Model/string.md)| Filter devices by uuid(s). | [optional] |
| **system_types** | [**string[]**](../Model/string.md)| Filter devices by system type(s). | [optional] |
| **scope** | [**string[]**](../Model/string.md)| Specify a scope (one of all, none, withAny, withAll, withoutAny, or withoutAll) and a set of tags. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSmDevices200ResponseInner[]**](../Model/GetNetworkSmDevices200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmProfiles()`

```php
getNetworkSmProfiles($network_id, $payload_types): \Meraki\Model\GetNetworkSmProfiles200ResponseInner[]
```

List all profiles in a network

List all profiles in a network

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$payload_types = array('payload_types_example'); // string[] | Filter by payload types

try {
    $result = $apiInstance->getNetworkSmProfiles($network_id, $payload_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->getNetworkSmProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **payload_types** | [**string[]**](../Model/string.md)| Filter by payload types | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSmProfiles200ResponseInner[]**](../Model/GetNetworkSmProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmTargetGroup()`

```php
getNetworkSmTargetGroup($network_id, $target_group_id, $with_details): \Meraki\Model\GetNetworkSmTargetGroups200ResponseInner
```

Return a target group

Return a target group

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$target_group_id = 'target_group_id_example'; // string | Target group ID
$with_details = True; // bool | Boolean indicating if the the ids of the devices or users scoped by the target group should be included in the response

try {
    $result = $apiInstance->getNetworkSmTargetGroup($network_id, $target_group_id, $with_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->getNetworkSmTargetGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **target_group_id** | **string**| Target group ID | |
| **with_details** | **bool**| Boolean indicating if the the ids of the devices or users scoped by the target group should be included in the response | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSmTargetGroups200ResponseInner**](../Model/GetNetworkSmTargetGroups200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmTargetGroups()`

```php
getNetworkSmTargetGroups($network_id, $with_details): \Meraki\Model\GetNetworkSmTargetGroups200ResponseInner[]
```

List the target groups in this network

List the target groups in this network

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$with_details = True; // bool | Boolean indicating if the the ids of the devices or users scoped by the target group should be included in the response

try {
    $result = $apiInstance->getNetworkSmTargetGroups($network_id, $with_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->getNetworkSmTargetGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **with_details** | **bool**| Boolean indicating if the the ids of the devices or users scoped by the target group should be included in the response | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSmTargetGroups200ResponseInner[]**](../Model/GetNetworkSmTargetGroups200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmTrustedAccessConfigs()`

```php
getNetworkSmTrustedAccessConfigs($network_id, $per_page, $starting_after, $ending_before): \Meraki\Model\GetNetworkSmTrustedAccessConfigs200ResponseInner[]
```

List Trusted Access Configs

List Trusted Access Configs

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getNetworkSmTrustedAccessConfigs($network_id, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->getNetworkSmTrustedAccessConfigs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSmTrustedAccessConfigs200ResponseInner[]**](../Model/GetNetworkSmTrustedAccessConfigs200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmUserAccessDevices()`

```php
getNetworkSmUserAccessDevices($network_id, $per_page, $starting_after, $ending_before): \Meraki\Model\GetNetworkSmUserAccessDevices200ResponseInner[]
```

List User Access Devices and its Trusted Access Connections

List User Access Devices and its Trusted Access Connections

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getNetworkSmUserAccessDevices($network_id, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->getNetworkSmUserAccessDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSmUserAccessDevices200ResponseInner[]**](../Model/GetNetworkSmUserAccessDevices200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmUserDeviceProfiles()`

```php
getNetworkSmUserDeviceProfiles($network_id, $user_id): \Meraki\Model\GetNetworkSmDeviceDeviceProfiles200ResponseInner[]
```

Get the profiles associated with a user

Get the profiles associated with a user

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$user_id = 'user_id_example'; // string | User ID

try {
    $result = $apiInstance->getNetworkSmUserDeviceProfiles($network_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->getNetworkSmUserDeviceProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **user_id** | **string**| User ID | |

### Return type

[**\Meraki\Model\GetNetworkSmDeviceDeviceProfiles200ResponseInner[]**](../Model/GetNetworkSmDeviceDeviceProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmUserSoftwares()`

```php
getNetworkSmUserSoftwares($network_id, $user_id): \Meraki\Model\GetNetworkSmDeviceSoftwares200ResponseInner[]
```

Get a list of softwares associated with a user

Get a list of softwares associated with a user

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$user_id = 'user_id_example'; // string | User ID

try {
    $result = $apiInstance->getNetworkSmUserSoftwares($network_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->getNetworkSmUserSoftwares: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **user_id** | **string**| User ID | |

### Return type

[**\Meraki\Model\GetNetworkSmDeviceSoftwares200ResponseInner[]**](../Model/GetNetworkSmDeviceSoftwares200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmUsers()`

```php
getNetworkSmUsers($network_id, $ids, $usernames, $emails, $scope): \Meraki\Model\GetNetworkSmUsers200ResponseInner[]
```

List the owners in an SM network with various specified fields and filters

List the owners in an SM network with various specified fields and filters

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$ids = array('ids_example'); // string[] | Filter users by id(s).
$usernames = array('usernames_example'); // string[] | Filter users by username(s).
$emails = array('emails_example'); // string[] | Filter users by email(s).
$scope = array('scope_example'); // string[] | Specifiy a scope (one of all, none, withAny, withAll, withoutAny, withoutAll) and a set of tags.

try {
    $result = $apiInstance->getNetworkSmUsers($network_id, $ids, $usernames, $emails, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->getNetworkSmUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **ids** | [**string[]**](../Model/string.md)| Filter users by id(s). | [optional] |
| **usernames** | [**string[]**](../Model/string.md)| Filter users by username(s). | [optional] |
| **emails** | [**string[]**](../Model/string.md)| Filter users by email(s). | [optional] |
| **scope** | [**string[]**](../Model/string.md)| Specifiy a scope (one of all, none, withAny, withAll, withoutAny, withoutAll) and a set of tags. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSmUsers200ResponseInner[]**](../Model/GetNetworkSmUsers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSmAdminsRole()`

```php
getOrganizationSmAdminsRole($organization_id, $role_id): \Meraki\Model\GetOrganizationSmAdminsRoles200ResponseItemsInner
```

Return a Limited Access Role

Return a Limited Access Role

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$role_id = 'role_id_example'; // string | Role ID

try {
    $result = $apiInstance->getOrganizationSmAdminsRole($organization_id, $role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->getOrganizationSmAdminsRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **role_id** | **string**| Role ID | |

### Return type

[**\Meraki\Model\GetOrganizationSmAdminsRoles200ResponseItemsInner**](../Model/GetOrganizationSmAdminsRoles200ResponseItemsInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSmAdminsRoles()`

```php
getOrganizationSmAdminsRoles($organization_id, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationSmAdminsRoles200Response
```

List the Limited Access Roles for an organization

List the Limited Access Roles for an organization

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 50.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationSmAdminsRoles($organization_id, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->getOrganizationSmAdminsRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 50. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSmAdminsRoles200Response**](../Model/GetOrganizationSmAdminsRoles200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSmApnsCert()`

```php
getOrganizationSmApnsCert($organization_id): \Meraki\Model\GetOrganizationSmApnsCert200Response
```

Get the organization's APNS certificate

Get the organization's APNS certificate

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationSmApnsCert($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->getOrganizationSmApnsCert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationSmApnsCert200Response**](../Model/GetOrganizationSmApnsCert200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSmSentryPoliciesAssignmentsByNetwork()`

```php
getOrganizationSmSentryPoliciesAssignmentsByNetwork($organization_id, $per_page, $starting_after, $ending_before, $network_ids): \Meraki\Model\GetOrganizationSmSentryPoliciesAssignmentsByNetwork200ResponseInner[]
```

List the Sentry Policies for an organization ordered in ascending order of priority

List the Sentry Policies for an organization ordered in ascending order of priority

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 50.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter Sentry Policies by Network Id

try {
    $result = $apiInstance->getOrganizationSmSentryPoliciesAssignmentsByNetwork($organization_id, $per_page, $starting_after, $ending_before, $network_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->getOrganizationSmSentryPoliciesAssignmentsByNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 50. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter Sentry Policies by Network Id | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSmSentryPoliciesAssignmentsByNetwork200ResponseInner[]**](../Model/GetOrganizationSmSentryPoliciesAssignmentsByNetwork200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSmVppAccount()`

```php
getOrganizationSmVppAccount($organization_id, $vpp_account_id): \Meraki\Model\GetOrganizationSmVppAccounts200ResponseInner
```

Get a hash containing the unparsed token of the VPP account with the given ID

Get a hash containing the unparsed token of the VPP account with the given ID

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$vpp_account_id = 'vpp_account_id_example'; // string | Vpp account ID

try {
    $result = $apiInstance->getOrganizationSmVppAccount($organization_id, $vpp_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->getOrganizationSmVppAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **vpp_account_id** | **string**| Vpp account ID | |

### Return type

[**\Meraki\Model\GetOrganizationSmVppAccounts200ResponseInner**](../Model/GetOrganizationSmVppAccounts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSmVppAccounts()`

```php
getOrganizationSmVppAccounts($organization_id): \Meraki\Model\GetOrganizationSmVppAccounts200ResponseInner[]
```

List the VPP accounts in the organization

List the VPP accounts in the organization

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationSmVppAccounts($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->getOrganizationSmVppAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationSmVppAccounts200ResponseInner[]**](../Model/GetOrganizationSmVppAccounts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `installNetworkSmDeviceApps()`

```php
installNetworkSmDeviceApps($network_id, $device_id, $install_network_sm_device_apps_request): object
```

Install applications on a device

Install applications on a device

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID
$install_network_sm_device_apps_request = new \Meraki\Model\InstallNetworkSmDeviceAppsRequest(); // \Meraki\Model\InstallNetworkSmDeviceAppsRequest

try {
    $result = $apiInstance->installNetworkSmDeviceApps($network_id, $device_id, $install_network_sm_device_apps_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->installNetworkSmDeviceApps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |
| **install_network_sm_device_apps_request** | [**\Meraki\Model\InstallNetworkSmDeviceAppsRequest**](../Model/InstallNetworkSmDeviceAppsRequest.md)|  | |

### Return type

**object**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lockNetworkSmDevices()`

```php
lockNetworkSmDevices($network_id, $lock_network_sm_devices_request): \Meraki\Model\CheckinNetworkSmDevices200Response
```

Lock a set of devices

Lock a set of devices

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$lock_network_sm_devices_request = new \Meraki\Model\LockNetworkSmDevicesRequest(); // \Meraki\Model\LockNetworkSmDevicesRequest

try {
    $result = $apiInstance->lockNetworkSmDevices($network_id, $lock_network_sm_devices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->lockNetworkSmDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **lock_network_sm_devices_request** | [**\Meraki\Model\LockNetworkSmDevicesRequest**](../Model/LockNetworkSmDevicesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\CheckinNetworkSmDevices200Response**](../Model/CheckinNetworkSmDevices200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyNetworkSmDevicesTags()`

```php
modifyNetworkSmDevicesTags($network_id, $modify_network_sm_devices_tags_request): \Meraki\Model\ModifyNetworkSmDevicesTags200ResponseInner[]
```

Add, delete, or update the tags of a set of devices

Add, delete, or update the tags of a set of devices

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$modify_network_sm_devices_tags_request = new \Meraki\Model\ModifyNetworkSmDevicesTagsRequest(); // \Meraki\Model\ModifyNetworkSmDevicesTagsRequest

try {
    $result = $apiInstance->modifyNetworkSmDevicesTags($network_id, $modify_network_sm_devices_tags_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->modifyNetworkSmDevicesTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **modify_network_sm_devices_tags_request** | [**\Meraki\Model\ModifyNetworkSmDevicesTagsRequest**](../Model/ModifyNetworkSmDevicesTagsRequest.md)|  | |

### Return type

[**\Meraki\Model\ModifyNetworkSmDevicesTags200ResponseInner[]**](../Model/ModifyNetworkSmDevicesTags200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `moveNetworkSmDevices()`

```php
moveNetworkSmDevices($network_id, $move_network_sm_devices_request): \Meraki\Model\MoveNetworkSmDevices200Response
```

Move a set of devices to a new network

Move a set of devices to a new network

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$move_network_sm_devices_request = new \Meraki\Model\MoveNetworkSmDevicesRequest(); // \Meraki\Model\MoveNetworkSmDevicesRequest

try {
    $result = $apiInstance->moveNetworkSmDevices($network_id, $move_network_sm_devices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->moveNetworkSmDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **move_network_sm_devices_request** | [**\Meraki\Model\MoveNetworkSmDevicesRequest**](../Model/MoveNetworkSmDevicesRequest.md)|  | |

### Return type

[**\Meraki\Model\MoveNetworkSmDevices200Response**](../Model/MoveNetworkSmDevices200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rebootNetworkSmDevices()`

```php
rebootNetworkSmDevices($network_id, $reboot_network_sm_devices_request): \Meraki\Model\RebootNetworkSmDevices200Response
```

Reboot a set of endpoints

Reboot a set of endpoints

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$reboot_network_sm_devices_request = new \Meraki\Model\RebootNetworkSmDevicesRequest(); // \Meraki\Model\RebootNetworkSmDevicesRequest

try {
    $result = $apiInstance->rebootNetworkSmDevices($network_id, $reboot_network_sm_devices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->rebootNetworkSmDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **reboot_network_sm_devices_request** | [**\Meraki\Model\RebootNetworkSmDevicesRequest**](../Model/RebootNetworkSmDevicesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\RebootNetworkSmDevices200Response**](../Model/RebootNetworkSmDevices200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refreshNetworkSmDeviceDetails()`

```php
refreshNetworkSmDeviceDetails($network_id, $device_id): object
```

Refresh the details of a device

Refresh the details of a device

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID

try {
    $result = $apiInstance->refreshNetworkSmDeviceDetails($network_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->refreshNetworkSmDeviceDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |

### Return type

**object**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shutdownNetworkSmDevices()`

```php
shutdownNetworkSmDevices($network_id, $shutdown_network_sm_devices_request): \Meraki\Model\RebootNetworkSmDevices200Response
```

Shutdown a set of endpoints

Shutdown a set of endpoints

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$shutdown_network_sm_devices_request = new \Meraki\Model\ShutdownNetworkSmDevicesRequest(); // \Meraki\Model\ShutdownNetworkSmDevicesRequest

try {
    $result = $apiInstance->shutdownNetworkSmDevices($network_id, $shutdown_network_sm_devices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->shutdownNetworkSmDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **shutdown_network_sm_devices_request** | [**\Meraki\Model\ShutdownNetworkSmDevicesRequest**](../Model/ShutdownNetworkSmDevicesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\RebootNetworkSmDevices200Response**](../Model/RebootNetworkSmDevices200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unenrollNetworkSmDevice()`

```php
unenrollNetworkSmDevice($network_id, $device_id): \Meraki\Model\UnenrollNetworkSmDevice200Response
```

Unenroll a device

Unenroll a device

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID

try {
    $result = $apiInstance->unenrollNetworkSmDevice($network_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->unenrollNetworkSmDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |

### Return type

[**\Meraki\Model\UnenrollNetworkSmDevice200Response**](../Model/UnenrollNetworkSmDevice200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uninstallNetworkSmDeviceApps()`

```php
uninstallNetworkSmDeviceApps($network_id, $device_id, $uninstall_network_sm_device_apps_request): object
```

Uninstall applications on a device

Uninstall applications on a device

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID
$uninstall_network_sm_device_apps_request = new \Meraki\Model\UninstallNetworkSmDeviceAppsRequest(); // \Meraki\Model\UninstallNetworkSmDeviceAppsRequest

try {
    $result = $apiInstance->uninstallNetworkSmDeviceApps($network_id, $device_id, $uninstall_network_sm_device_apps_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->uninstallNetworkSmDeviceApps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |
| **uninstall_network_sm_device_apps_request** | [**\Meraki\Model\UninstallNetworkSmDeviceAppsRequest**](../Model/UninstallNetworkSmDeviceAppsRequest.md)|  | |

### Return type

**object**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSmDevicesFields()`

```php
updateNetworkSmDevicesFields($network_id, $update_network_sm_devices_fields_request): \Meraki\Model\UpdateNetworkSmDevicesFields200ResponseInner[]
```

Modify the fields of a device

Modify the fields of a device

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_sm_devices_fields_request = new \Meraki\Model\UpdateNetworkSmDevicesFieldsRequest(); // \Meraki\Model\UpdateNetworkSmDevicesFieldsRequest

try {
    $result = $apiInstance->updateNetworkSmDevicesFields($network_id, $update_network_sm_devices_fields_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->updateNetworkSmDevicesFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_sm_devices_fields_request** | [**\Meraki\Model\UpdateNetworkSmDevicesFieldsRequest**](../Model/UpdateNetworkSmDevicesFieldsRequest.md)|  | |

### Return type

[**\Meraki\Model\UpdateNetworkSmDevicesFields200ResponseInner[]**](../Model/UpdateNetworkSmDevicesFields200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSmTargetGroup()`

```php
updateNetworkSmTargetGroup($network_id, $target_group_id, $create_network_sm_target_group_request): \Meraki\Model\GetNetworkSmTargetGroups200ResponseInner
```

Update a target group

Update a target group

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$target_group_id = 'target_group_id_example'; // string | Target group ID
$create_network_sm_target_group_request = new \Meraki\Model\CreateNetworkSmTargetGroupRequest(); // \Meraki\Model\CreateNetworkSmTargetGroupRequest

try {
    $result = $apiInstance->updateNetworkSmTargetGroup($network_id, $target_group_id, $create_network_sm_target_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->updateNetworkSmTargetGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **target_group_id** | **string**| Target group ID | |
| **create_network_sm_target_group_request** | [**\Meraki\Model\CreateNetworkSmTargetGroupRequest**](../Model/CreateNetworkSmTargetGroupRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSmTargetGroups200ResponseInner**](../Model/GetNetworkSmTargetGroups200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationSmAdminsRole()`

```php
updateOrganizationSmAdminsRole($organization_id, $role_id, $update_organization_sm_admins_role_request): \Meraki\Model\GetOrganizationSmAdminsRoles200ResponseItemsInner
```

Update a Limited Access Role

Update a Limited Access Role

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$role_id = 'role_id_example'; // string | Role ID
$update_organization_sm_admins_role_request = new \Meraki\Model\UpdateOrganizationSmAdminsRoleRequest(); // \Meraki\Model\UpdateOrganizationSmAdminsRoleRequest

try {
    $result = $apiInstance->updateOrganizationSmAdminsRole($organization_id, $role_id, $update_organization_sm_admins_role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->updateOrganizationSmAdminsRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **role_id** | **string**| Role ID | |
| **update_organization_sm_admins_role_request** | [**\Meraki\Model\UpdateOrganizationSmAdminsRoleRequest**](../Model/UpdateOrganizationSmAdminsRoleRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSmAdminsRoles200ResponseItemsInner**](../Model/GetOrganizationSmAdminsRoles200ResponseItemsInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationSmSentryPoliciesAssignments()`

```php
updateOrganizationSmSentryPoliciesAssignments($organization_id, $update_organization_sm_sentry_policies_assignments_request): \Meraki\Model\UpdateOrganizationSmSentryPoliciesAssignments200Response
```

Update an Organizations Sentry Policies using the provided list

Update an Organizations Sentry Policies using the provided list. Sentry Policies are ordered in descending order of priority (i.e. highest priority at the bottom, this is opposite the Dashboard UI). Policies not present in the request will be deleted.

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$update_organization_sm_sentry_policies_assignments_request = new \Meraki\Model\UpdateOrganizationSmSentryPoliciesAssignmentsRequest(); // \Meraki\Model\UpdateOrganizationSmSentryPoliciesAssignmentsRequest

try {
    $result = $apiInstance->updateOrganizationSmSentryPoliciesAssignments($organization_id, $update_organization_sm_sentry_policies_assignments_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->updateOrganizationSmSentryPoliciesAssignments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **update_organization_sm_sentry_policies_assignments_request** | [**\Meraki\Model\UpdateOrganizationSmSentryPoliciesAssignmentsRequest**](../Model/UpdateOrganizationSmSentryPoliciesAssignmentsRequest.md)|  | |

### Return type

[**\Meraki\Model\UpdateOrganizationSmSentryPoliciesAssignments200Response**](../Model/UpdateOrganizationSmSentryPoliciesAssignments200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wipeNetworkSmDevices()`

```php
wipeNetworkSmDevices($network_id, $wipe_network_sm_devices_request): \Meraki\Model\WipeNetworkSmDevices200Response
```

Wipe a device

Wipe a device

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


$apiInstance = new Meraki\Api\SmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$wipe_network_sm_devices_request = new \Meraki\Model\WipeNetworkSmDevicesRequest(); // \Meraki\Model\WipeNetworkSmDevicesRequest

try {
    $result = $apiInstance->wipeNetworkSmDevices($network_id, $wipe_network_sm_devices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmApi->wipeNetworkSmDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **wipe_network_sm_devices_request** | [**\Meraki\Model\WipeNetworkSmDevicesRequest**](../Model/WipeNetworkSmDevicesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\WipeNetworkSmDevices200Response**](../Model/WipeNetworkSmDevices200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
