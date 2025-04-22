# Meraki\ProfilesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assignNetworkWirelessEthernetPortsProfiles()**](ProfilesApi.md#assignNetworkWirelessEthernetPortsProfiles) | **POST** /networks/{networkId}/wireless/ethernet/ports/profiles/assign | Assign AP port profile to list of APs |
| [**bulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate()**](ProfilesApi.md#bulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate) | **POST** /organizations/{organizationId}/appliance/dns/local/profiles/assignments/bulkCreate | Assign the local DNS profile to networks in the organization |
| [**createNetworkSensorAlertsProfile()**](ProfilesApi.md#createNetworkSensorAlertsProfile) | **POST** /networks/{networkId}/sensor/alerts/profiles | Creates a sensor alert profile for a network. |
| [**createNetworkWirelessEthernetPortsProfile()**](ProfilesApi.md#createNetworkWirelessEthernetPortsProfile) | **POST** /networks/{networkId}/wireless/ethernet/ports/profiles | Create an AP port profile |
| [**createOrganizationAlertsProfile()**](ProfilesApi.md#createOrganizationAlertsProfile) | **POST** /organizations/{organizationId}/alerts/profiles | Create an organization-wide alert configuration |
| [**createOrganizationApplianceDnsLocalProfile()**](ProfilesApi.md#createOrganizationApplianceDnsLocalProfile) | **POST** /organizations/{organizationId}/appliance/dns/local/profiles | Create a new local DNS profile |
| [**createOrganizationApplianceDnsLocalProfilesAssignmentsBulkDelete()**](ProfilesApi.md#createOrganizationApplianceDnsLocalProfilesAssignmentsBulkDelete) | **POST** /organizations/{organizationId}/appliance/dns/local/profiles/assignments/bulkDelete | Unassign the local DNS profile to networks in the organization |
| [**createOrganizationApplianceDnsSplitProfile()**](ProfilesApi.md#createOrganizationApplianceDnsSplitProfile) | **POST** /organizations/{organizationId}/appliance/dns/split/profiles | Create a new split DNS profile |
| [**createOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate()**](ProfilesApi.md#createOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate) | **POST** /organizations/{organizationId}/appliance/dns/split/profiles/assignments/bulkCreate | Assign the split DNS profile to networks in the organization |
| [**createOrganizationApplianceDnsSplitProfilesAssignmentsBulkDelete()**](ProfilesApi.md#createOrganizationApplianceDnsSplitProfilesAssignmentsBulkDelete) | **POST** /organizations/{organizationId}/appliance/dns/split/profiles/assignments/bulkDelete | Unassign the split DNS profile to networks in the organization |
| [**deleteNetworkSensorAlertsProfile()**](ProfilesApi.md#deleteNetworkSensorAlertsProfile) | **DELETE** /networks/{networkId}/sensor/alerts/profiles/{id} | Deletes a sensor alert profile from a network. |
| [**deleteNetworkWirelessEthernetPortsProfile()**](ProfilesApi.md#deleteNetworkWirelessEthernetPortsProfile) | **DELETE** /networks/{networkId}/wireless/ethernet/ports/profiles/{profileId} | Delete an AP port profile |
| [**deleteOrganizationAlertsProfile()**](ProfilesApi.md#deleteOrganizationAlertsProfile) | **DELETE** /organizations/{organizationId}/alerts/profiles/{alertConfigId} | Removes an organization-wide alert config |
| [**deleteOrganizationApplianceDnsLocalProfile()**](ProfilesApi.md#deleteOrganizationApplianceDnsLocalProfile) | **DELETE** /organizations/{organizationId}/appliance/dns/local/profiles/{profileId} | Deletes a local DNS profile |
| [**deleteOrganizationApplianceDnsSplitProfile()**](ProfilesApi.md#deleteOrganizationApplianceDnsSplitProfile) | **DELETE** /organizations/{organizationId}/appliance/dns/split/profiles/{profileId} | Deletes a split DNS profile |
| [**getNetworkSensorAlertsProfile()**](ProfilesApi.md#getNetworkSensorAlertsProfile) | **GET** /networks/{networkId}/sensor/alerts/profiles/{id} | Show details of a sensor alert profile for a network. |
| [**getNetworkSensorAlertsProfiles()**](ProfilesApi.md#getNetworkSensorAlertsProfiles) | **GET** /networks/{networkId}/sensor/alerts/profiles | Lists all sensor alert profiles for a network. |
| [**getNetworkSmProfiles()**](ProfilesApi.md#getNetworkSmProfiles) | **GET** /networks/{networkId}/sm/profiles | List all profiles in a network |
| [**getNetworkWirelessEthernetPortsProfile()**](ProfilesApi.md#getNetworkWirelessEthernetPortsProfile) | **GET** /networks/{networkId}/wireless/ethernet/ports/profiles/{profileId} | Show the AP port profile by ID for this network |
| [**getNetworkWirelessEthernetPortsProfiles()**](ProfilesApi.md#getNetworkWirelessEthernetPortsProfiles) | **GET** /networks/{networkId}/wireless/ethernet/ports/profiles | List the AP port profiles for this network |
| [**getOrganizationAlertsProfiles()**](ProfilesApi.md#getOrganizationAlertsProfiles) | **GET** /organizations/{organizationId}/alerts/profiles | List all organization-wide alert configurations |
| [**getOrganizationApplianceDnsLocalProfiles()**](ProfilesApi.md#getOrganizationApplianceDnsLocalProfiles) | **GET** /organizations/{organizationId}/appliance/dns/local/profiles | Fetch the local DNS profiles used in the organization |
| [**getOrganizationApplianceDnsLocalProfilesAssignments()**](ProfilesApi.md#getOrganizationApplianceDnsLocalProfilesAssignments) | **GET** /organizations/{organizationId}/appliance/dns/local/profiles/assignments | Fetch the local DNS profile assignments in the organization |
| [**getOrganizationApplianceDnsSplitProfiles()**](ProfilesApi.md#getOrganizationApplianceDnsSplitProfiles) | **GET** /organizations/{organizationId}/appliance/dns/split/profiles | Fetch the split DNS profiles used in the organization |
| [**getOrganizationApplianceDnsSplitProfilesAssignments()**](ProfilesApi.md#getOrganizationApplianceDnsSplitProfilesAssignments) | **GET** /organizations/{organizationId}/appliance/dns/split/profiles/assignments | Fetch the split DNS profile assignments in the organization |
| [**getOrganizationConfigTemplateSwitchProfilePort()**](ProfilesApi.md#getOrganizationConfigTemplateSwitchProfilePort) | **GET** /organizations/{organizationId}/configTemplates/{configTemplateId}/switch/profiles/{profileId}/ports/{portId} | Return a switch template port |
| [**getOrganizationConfigTemplateSwitchProfilePorts()**](ProfilesApi.md#getOrganizationConfigTemplateSwitchProfilePorts) | **GET** /organizations/{organizationId}/configTemplates/{configTemplateId}/switch/profiles/{profileId}/ports | Return all the ports of a switch template |
| [**getOrganizationConfigTemplateSwitchProfiles()**](ProfilesApi.md#getOrganizationConfigTemplateSwitchProfiles) | **GET** /organizations/{organizationId}/configTemplates/{configTemplateId}/switch/profiles | List the switch templates for your switch template configuration |
| [**setNetworkWirelessEthernetPortsProfilesDefault()**](ProfilesApi.md#setNetworkWirelessEthernetPortsProfilesDefault) | **POST** /networks/{networkId}/wireless/ethernet/ports/profiles/setDefault | Set the AP port profile to be default for this network |
| [**updateNetworkSensorAlertsProfile()**](ProfilesApi.md#updateNetworkSensorAlertsProfile) | **PUT** /networks/{networkId}/sensor/alerts/profiles/{id} | Updates a sensor alert profile for a network. |
| [**updateNetworkWirelessEthernetPortsProfile()**](ProfilesApi.md#updateNetworkWirelessEthernetPortsProfile) | **PUT** /networks/{networkId}/wireless/ethernet/ports/profiles/{profileId} | Update the AP port profile by ID for this network |
| [**updateOrganizationAlertsProfile()**](ProfilesApi.md#updateOrganizationAlertsProfile) | **PUT** /organizations/{organizationId}/alerts/profiles/{alertConfigId} | Update an organization-wide alert config |
| [**updateOrganizationApplianceDnsLocalProfile()**](ProfilesApi.md#updateOrganizationApplianceDnsLocalProfile) | **PUT** /organizations/{organizationId}/appliance/dns/local/profiles/{profileId} | Update a local DNS profile |
| [**updateOrganizationApplianceDnsSplitProfile()**](ProfilesApi.md#updateOrganizationApplianceDnsSplitProfile) | **PUT** /organizations/{organizationId}/appliance/dns/split/profiles/{profileId} | Update a split DNS profile |
| [**updateOrganizationConfigTemplateSwitchProfilePort()**](ProfilesApi.md#updateOrganizationConfigTemplateSwitchProfilePort) | **PUT** /organizations/{organizationId}/configTemplates/{configTemplateId}/switch/profiles/{profileId}/ports/{portId} | Update a switch template port |


## `assignNetworkWirelessEthernetPortsProfiles()`

```php
assignNetworkWirelessEthernetPortsProfiles($network_id, $assign_network_wireless_ethernet_ports_profiles_request): \Meraki\Model\AssignNetworkWirelessEthernetPortsProfiles201Response
```

Assign AP port profile to list of APs

Assign AP port profile to list of APs

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$assign_network_wireless_ethernet_ports_profiles_request = new \Meraki\Model\AssignNetworkWirelessEthernetPortsProfilesRequest(); // \Meraki\Model\AssignNetworkWirelessEthernetPortsProfilesRequest

try {
    $result = $apiInstance->assignNetworkWirelessEthernetPortsProfiles($network_id, $assign_network_wireless_ethernet_ports_profiles_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->assignNetworkWirelessEthernetPortsProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **assign_network_wireless_ethernet_ports_profiles_request** | [**\Meraki\Model\AssignNetworkWirelessEthernetPortsProfilesRequest**](../Model/AssignNetworkWirelessEthernetPortsProfilesRequest.md)|  | |

### Return type

[**\Meraki\Model\AssignNetworkWirelessEthernetPortsProfiles201Response**](../Model/AssignNetworkWirelessEthernetPortsProfiles201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate()`

```php
bulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate($organization_id, $bulk_organization_appliance_dns_local_profiles_assignments_create_request): \Meraki\Model\BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate200Response
```

Assign the local DNS profile to networks in the organization

Assign the local DNS profile to networks in the organization

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$bulk_organization_appliance_dns_local_profiles_assignments_create_request = new \Meraki\Model\BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreateRequest(); // \Meraki\Model\BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreateRequest

try {
    $result = $apiInstance->bulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate($organization_id, $bulk_organization_appliance_dns_local_profiles_assignments_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->bulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **bulk_organization_appliance_dns_local_profiles_assignments_create_request** | [**\Meraki\Model\BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreateRequest**](../Model/BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreateRequest.md)|  | |

### Return type

[**\Meraki\Model\BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate200Response**](../Model/BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkSensorAlertsProfile()`

```php
createNetworkSensorAlertsProfile($network_id, $create_network_sensor_alerts_profile_request): \Meraki\Model\GetNetworkSensorAlertsProfiles200ResponseInner
```

Creates a sensor alert profile for a network.

Creates a sensor alert profile for a network.

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_sensor_alerts_profile_request = new \Meraki\Model\CreateNetworkSensorAlertsProfileRequest(); // \Meraki\Model\CreateNetworkSensorAlertsProfileRequest

try {
    $result = $apiInstance->createNetworkSensorAlertsProfile($network_id, $create_network_sensor_alerts_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->createNetworkSensorAlertsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_sensor_alerts_profile_request** | [**\Meraki\Model\CreateNetworkSensorAlertsProfileRequest**](../Model/CreateNetworkSensorAlertsProfileRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkSensorAlertsProfiles200ResponseInner**](../Model/GetNetworkSensorAlertsProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkWirelessEthernetPortsProfile()`

```php
createNetworkWirelessEthernetPortsProfile($network_id, $create_network_wireless_ethernet_ports_profile_request): \Meraki\Model\GetNetworkWirelessEthernetPortsProfiles200ResponseInner
```

Create an AP port profile

Create an AP port profile

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_wireless_ethernet_ports_profile_request = new \Meraki\Model\CreateNetworkWirelessEthernetPortsProfileRequest(); // \Meraki\Model\CreateNetworkWirelessEthernetPortsProfileRequest

try {
    $result = $apiInstance->createNetworkWirelessEthernetPortsProfile($network_id, $create_network_wireless_ethernet_ports_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->createNetworkWirelessEthernetPortsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_wireless_ethernet_ports_profile_request** | [**\Meraki\Model\CreateNetworkWirelessEthernetPortsProfileRequest**](../Model/CreateNetworkWirelessEthernetPortsProfileRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkWirelessEthernetPortsProfiles200ResponseInner**](../Model/GetNetworkWirelessEthernetPortsProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationAlertsProfile()`

```php
createOrganizationAlertsProfile($organization_id, $create_organization_alerts_profile_request): \Meraki\Model\GetOrganizationAlertsProfiles200ResponseInner
```

Create an organization-wide alert configuration

Create an organization-wide alert configuration

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_alerts_profile_request = new \Meraki\Model\CreateOrganizationAlertsProfileRequest(); // \Meraki\Model\CreateOrganizationAlertsProfileRequest

try {
    $result = $apiInstance->createOrganizationAlertsProfile($organization_id, $create_organization_alerts_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->createOrganizationAlertsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_alerts_profile_request** | [**\Meraki\Model\CreateOrganizationAlertsProfileRequest**](../Model/CreateOrganizationAlertsProfileRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationAlertsProfiles200ResponseInner**](../Model/GetOrganizationAlertsProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationApplianceDnsLocalProfile()`

```php
createOrganizationApplianceDnsLocalProfile($organization_id, $create_organization_appliance_dns_local_profile_request): \Meraki\Model\GetOrganizationApplianceDnsLocalProfiles200ResponseInner
```

Create a new local DNS profile

Create a new local DNS profile

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_appliance_dns_local_profile_request = new \Meraki\Model\CreateOrganizationApplianceDnsLocalProfileRequest(); // \Meraki\Model\CreateOrganizationApplianceDnsLocalProfileRequest

try {
    $result = $apiInstance->createOrganizationApplianceDnsLocalProfile($organization_id, $create_organization_appliance_dns_local_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->createOrganizationApplianceDnsLocalProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_appliance_dns_local_profile_request** | [**\Meraki\Model\CreateOrganizationApplianceDnsLocalProfileRequest**](../Model/CreateOrganizationApplianceDnsLocalProfileRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationApplianceDnsLocalProfiles200ResponseInner**](../Model/GetOrganizationApplianceDnsLocalProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationApplianceDnsLocalProfilesAssignmentsBulkDelete()`

```php
createOrganizationApplianceDnsLocalProfilesAssignmentsBulkDelete($organization_id, $create_organization_appliance_dns_local_profiles_assignments_bulk_delete_request): \Meraki\Model\BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate200Response
```

Unassign the local DNS profile to networks in the organization

Unassign the local DNS profile to networks in the organization

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_appliance_dns_local_profiles_assignments_bulk_delete_request = new \Meraki\Model\CreateOrganizationApplianceDnsLocalProfilesAssignmentsBulkDeleteRequest(); // \Meraki\Model\CreateOrganizationApplianceDnsLocalProfilesAssignmentsBulkDeleteRequest

try {
    $result = $apiInstance->createOrganizationApplianceDnsLocalProfilesAssignmentsBulkDelete($organization_id, $create_organization_appliance_dns_local_profiles_assignments_bulk_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->createOrganizationApplianceDnsLocalProfilesAssignmentsBulkDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_appliance_dns_local_profiles_assignments_bulk_delete_request** | [**\Meraki\Model\CreateOrganizationApplianceDnsLocalProfilesAssignmentsBulkDeleteRequest**](../Model/CreateOrganizationApplianceDnsLocalProfilesAssignmentsBulkDeleteRequest.md)|  | |

### Return type

[**\Meraki\Model\BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate200Response**](../Model/BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationApplianceDnsSplitProfile()`

```php
createOrganizationApplianceDnsSplitProfile($organization_id, $create_organization_appliance_dns_split_profile_request): \Meraki\Model\GetOrganizationApplianceDnsSplitProfiles200ResponseInner
```

Create a new split DNS profile

Create a new split DNS profile

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_appliance_dns_split_profile_request = new \Meraki\Model\CreateOrganizationApplianceDnsSplitProfileRequest(); // \Meraki\Model\CreateOrganizationApplianceDnsSplitProfileRequest

try {
    $result = $apiInstance->createOrganizationApplianceDnsSplitProfile($organization_id, $create_organization_appliance_dns_split_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->createOrganizationApplianceDnsSplitProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_appliance_dns_split_profile_request** | [**\Meraki\Model\CreateOrganizationApplianceDnsSplitProfileRequest**](../Model/CreateOrganizationApplianceDnsSplitProfileRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationApplianceDnsSplitProfiles200ResponseInner**](../Model/GetOrganizationApplianceDnsSplitProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate()`

```php
createOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate($organization_id, $bulk_organization_appliance_dns_local_profiles_assignments_create_request): \Meraki\Model\CreateOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate200Response
```

Assign the split DNS profile to networks in the organization

Assign the split DNS profile to networks in the organization

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$bulk_organization_appliance_dns_local_profiles_assignments_create_request = new \Meraki\Model\BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreateRequest(); // \Meraki\Model\BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreateRequest

try {
    $result = $apiInstance->createOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate($organization_id, $bulk_organization_appliance_dns_local_profiles_assignments_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->createOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **bulk_organization_appliance_dns_local_profiles_assignments_create_request** | [**\Meraki\Model\BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreateRequest**](../Model/BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreateRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate200Response**](../Model/CreateOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationApplianceDnsSplitProfilesAssignmentsBulkDelete()`

```php
createOrganizationApplianceDnsSplitProfilesAssignmentsBulkDelete($organization_id, $create_organization_appliance_dns_local_profiles_assignments_bulk_delete_request): \Meraki\Model\CreateOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate200Response
```

Unassign the split DNS profile to networks in the organization

Unassign the split DNS profile to networks in the organization

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_appliance_dns_local_profiles_assignments_bulk_delete_request = new \Meraki\Model\CreateOrganizationApplianceDnsLocalProfilesAssignmentsBulkDeleteRequest(); // \Meraki\Model\CreateOrganizationApplianceDnsLocalProfilesAssignmentsBulkDeleteRequest

try {
    $result = $apiInstance->createOrganizationApplianceDnsSplitProfilesAssignmentsBulkDelete($organization_id, $create_organization_appliance_dns_local_profiles_assignments_bulk_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->createOrganizationApplianceDnsSplitProfilesAssignmentsBulkDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_appliance_dns_local_profiles_assignments_bulk_delete_request** | [**\Meraki\Model\CreateOrganizationApplianceDnsLocalProfilesAssignmentsBulkDeleteRequest**](../Model/CreateOrganizationApplianceDnsLocalProfilesAssignmentsBulkDeleteRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate200Response**](../Model/CreateOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkSensorAlertsProfile()`

```php
deleteNetworkSensorAlertsProfile($network_id, $id)
```

Deletes a sensor alert profile from a network.

Deletes a sensor alert profile from a network.

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$id = 'id_example'; // string | ID

try {
    $apiInstance->deleteNetworkSensorAlertsProfile($network_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->deleteNetworkSensorAlertsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
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

## `deleteNetworkWirelessEthernetPortsProfile()`

```php
deleteNetworkWirelessEthernetPortsProfile($network_id, $profile_id)
```

Delete an AP port profile

Delete an AP port profile

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$profile_id = 'profile_id_example'; // string | Profile ID

try {
    $apiInstance->deleteNetworkWirelessEthernetPortsProfile($network_id, $profile_id);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->deleteNetworkWirelessEthernetPortsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **profile_id** | **string**| Profile ID | |

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

## `deleteOrganizationAlertsProfile()`

```php
deleteOrganizationAlertsProfile($organization_id, $alert_config_id)
```

Removes an organization-wide alert config

Removes an organization-wide alert config

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$alert_config_id = 'alert_config_id_example'; // string | Alert config ID

try {
    $apiInstance->deleteOrganizationAlertsProfile($organization_id, $alert_config_id);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->deleteOrganizationAlertsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **alert_config_id** | **string**| Alert config ID | |

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

## `deleteOrganizationApplianceDnsLocalProfile()`

```php
deleteOrganizationApplianceDnsLocalProfile($organization_id, $profile_id)
```

Deletes a local DNS profile

Deletes a local DNS profile

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$profile_id = 'profile_id_example'; // string | Profile ID

try {
    $apiInstance->deleteOrganizationApplianceDnsLocalProfile($organization_id, $profile_id);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->deleteOrganizationApplianceDnsLocalProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **profile_id** | **string**| Profile ID | |

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

## `deleteOrganizationApplianceDnsSplitProfile()`

```php
deleteOrganizationApplianceDnsSplitProfile($organization_id, $profile_id)
```

Deletes a split DNS profile

Deletes a split DNS profile

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$profile_id = 'profile_id_example'; // string | Profile ID

try {
    $apiInstance->deleteOrganizationApplianceDnsSplitProfile($organization_id, $profile_id);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->deleteOrganizationApplianceDnsSplitProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **profile_id** | **string**| Profile ID | |

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

## `getNetworkSensorAlertsProfile()`

```php
getNetworkSensorAlertsProfile($network_id, $id): \Meraki\Model\GetNetworkSensorAlertsProfiles200ResponseInner
```

Show details of a sensor alert profile for a network.

Show details of a sensor alert profile for a network.

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$id = 'id_example'; // string | ID

try {
    $result = $apiInstance->getNetworkSensorAlertsProfile($network_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getNetworkSensorAlertsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **id** | **string**| ID | |

### Return type

[**\Meraki\Model\GetNetworkSensorAlertsProfiles200ResponseInner**](../Model/GetNetworkSensorAlertsProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSensorAlertsProfiles()`

```php
getNetworkSensorAlertsProfiles($network_id): \Meraki\Model\GetNetworkSensorAlertsProfiles200ResponseInner[]
```

Lists all sensor alert profiles for a network.

Lists all sensor alert profiles for a network.

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSensorAlertsProfiles($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getNetworkSensorAlertsProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSensorAlertsProfiles200ResponseInner[]**](../Model/GetNetworkSensorAlertsProfiles200ResponseInner.md)

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


$apiInstance = new Meraki\Api\ProfilesApi(
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
    echo 'Exception when calling ProfilesApi->getNetworkSmProfiles: ', $e->getMessage(), PHP_EOL;
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

## `getNetworkWirelessEthernetPortsProfile()`

```php
getNetworkWirelessEthernetPortsProfile($network_id, $profile_id): \Meraki\Model\GetNetworkWirelessEthernetPortsProfiles200ResponseInner
```

Show the AP port profile by ID for this network

Show the AP port profile by ID for this network

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$profile_id = 'profile_id_example'; // string | Profile ID

try {
    $result = $apiInstance->getNetworkWirelessEthernetPortsProfile($network_id, $profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getNetworkWirelessEthernetPortsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **profile_id** | **string**| Profile ID | |

### Return type

[**\Meraki\Model\GetNetworkWirelessEthernetPortsProfiles200ResponseInner**](../Model/GetNetworkWirelessEthernetPortsProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessEthernetPortsProfiles()`

```php
getNetworkWirelessEthernetPortsProfiles($network_id): \Meraki\Model\GetNetworkWirelessEthernetPortsProfiles200ResponseInner[]
```

List the AP port profiles for this network

List the AP port profiles for this network

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkWirelessEthernetPortsProfiles($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getNetworkWirelessEthernetPortsProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkWirelessEthernetPortsProfiles200ResponseInner[]**](../Model/GetNetworkWirelessEthernetPortsProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAlertsProfiles()`

```php
getOrganizationAlertsProfiles($organization_id): \Meraki\Model\GetOrganizationAlertsProfiles200ResponseInner[]
```

List all organization-wide alert configurations

List all organization-wide alert configurations

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationAlertsProfiles($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getOrganizationAlertsProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationAlertsProfiles200ResponseInner[]**](../Model/GetOrganizationAlertsProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationApplianceDnsLocalProfiles()`

```php
getOrganizationApplianceDnsLocalProfiles($organization_id, $profile_ids): \Meraki\Model\GetOrganizationApplianceDnsLocalProfiles200ResponseInner[]
```

Fetch the local DNS profiles used in the organization

Fetch the local DNS profiles used in the organization

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$profile_ids = array('profile_ids_example'); // string[] | Optional parameter to filter the results by profile IDs

try {
    $result = $apiInstance->getOrganizationApplianceDnsLocalProfiles($organization_id, $profile_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getOrganizationApplianceDnsLocalProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **profile_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the results by profile IDs | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApplianceDnsLocalProfiles200ResponseInner[]**](../Model/GetOrganizationApplianceDnsLocalProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationApplianceDnsLocalProfilesAssignments()`

```php
getOrganizationApplianceDnsLocalProfilesAssignments($organization_id, $profile_ids, $network_ids): \Meraki\Model\GetOrganizationApplianceDnsLocalProfilesAssignments200Response
```

Fetch the local DNS profile assignments in the organization

Fetch the local DNS profile assignments in the organization

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$profile_ids = array('profile_ids_example'); // string[] | Optional parameter to filter the results by profile IDs
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter the results by network IDs

try {
    $result = $apiInstance->getOrganizationApplianceDnsLocalProfilesAssignments($organization_id, $profile_ids, $network_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getOrganizationApplianceDnsLocalProfilesAssignments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **profile_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the results by profile IDs | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the results by network IDs | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApplianceDnsLocalProfilesAssignments200Response**](../Model/GetOrganizationApplianceDnsLocalProfilesAssignments200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationApplianceDnsSplitProfiles()`

```php
getOrganizationApplianceDnsSplitProfiles($organization_id, $profile_ids): \Meraki\Model\GetOrganizationApplianceDnsSplitProfiles200ResponseInner[]
```

Fetch the split DNS profiles used in the organization

Fetch the split DNS profiles used in the organization

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$profile_ids = array('profile_ids_example'); // string[] | Optional parameter to filter the results by profile IDs

try {
    $result = $apiInstance->getOrganizationApplianceDnsSplitProfiles($organization_id, $profile_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getOrganizationApplianceDnsSplitProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **profile_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the results by profile IDs | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApplianceDnsSplitProfiles200ResponseInner[]**](../Model/GetOrganizationApplianceDnsSplitProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationApplianceDnsSplitProfilesAssignments()`

```php
getOrganizationApplianceDnsSplitProfilesAssignments($organization_id, $profile_ids, $network_ids): \Meraki\Model\GetOrganizationApplianceDnsSplitProfilesAssignments200Response
```

Fetch the split DNS profile assignments in the organization

Fetch the split DNS profile assignments in the organization

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$profile_ids = array('profile_ids_example'); // string[] | Optional parameter to filter the results by profile IDs
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter the results by network IDs

try {
    $result = $apiInstance->getOrganizationApplianceDnsSplitProfilesAssignments($organization_id, $profile_ids, $network_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getOrganizationApplianceDnsSplitProfilesAssignments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **profile_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the results by profile IDs | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the results by network IDs | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApplianceDnsSplitProfilesAssignments200Response**](../Model/GetOrganizationApplianceDnsSplitProfilesAssignments200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationConfigTemplateSwitchProfilePort()`

```php
getOrganizationConfigTemplateSwitchProfilePort($organization_id, $config_template_id, $profile_id, $port_id): \Meraki\Model\GetOrganizationConfigTemplateSwitchProfilePorts200ResponseInner
```

Return a switch template port

Return a switch template port

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$config_template_id = 'config_template_id_example'; // string | Config template ID
$profile_id = 'profile_id_example'; // string | Profile ID
$port_id = 'port_id_example'; // string | Port ID

try {
    $result = $apiInstance->getOrganizationConfigTemplateSwitchProfilePort($organization_id, $config_template_id, $profile_id, $port_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getOrganizationConfigTemplateSwitchProfilePort: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **config_template_id** | **string**| Config template ID | |
| **profile_id** | **string**| Profile ID | |
| **port_id** | **string**| Port ID | |

### Return type

[**\Meraki\Model\GetOrganizationConfigTemplateSwitchProfilePorts200ResponseInner**](../Model/GetOrganizationConfigTemplateSwitchProfilePorts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationConfigTemplateSwitchProfilePorts()`

```php
getOrganizationConfigTemplateSwitchProfilePorts($organization_id, $config_template_id, $profile_id): \Meraki\Model\GetOrganizationConfigTemplateSwitchProfilePorts200ResponseInner[]
```

Return all the ports of a switch template

Return all the ports of a switch template

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$config_template_id = 'config_template_id_example'; // string | Config template ID
$profile_id = 'profile_id_example'; // string | Profile ID

try {
    $result = $apiInstance->getOrganizationConfigTemplateSwitchProfilePorts($organization_id, $config_template_id, $profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getOrganizationConfigTemplateSwitchProfilePorts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **config_template_id** | **string**| Config template ID | |
| **profile_id** | **string**| Profile ID | |

### Return type

[**\Meraki\Model\GetOrganizationConfigTemplateSwitchProfilePorts200ResponseInner[]**](../Model/GetOrganizationConfigTemplateSwitchProfilePorts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationConfigTemplateSwitchProfiles()`

```php
getOrganizationConfigTemplateSwitchProfiles($organization_id, $config_template_id): \Meraki\Model\GetOrganizationConfigTemplateSwitchProfiles200ResponseInner[]
```

List the switch templates for your switch template configuration

List the switch templates for your switch template configuration

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$config_template_id = 'config_template_id_example'; // string | Config template ID

try {
    $result = $apiInstance->getOrganizationConfigTemplateSwitchProfiles($organization_id, $config_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getOrganizationConfigTemplateSwitchProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **config_template_id** | **string**| Config template ID | |

### Return type

[**\Meraki\Model\GetOrganizationConfigTemplateSwitchProfiles200ResponseInner[]**](../Model/GetOrganizationConfigTemplateSwitchProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setNetworkWirelessEthernetPortsProfilesDefault()`

```php
setNetworkWirelessEthernetPortsProfilesDefault($network_id, $set_network_wireless_ethernet_ports_profiles_default_request): \Meraki\Model\SetNetworkWirelessEthernetPortsProfilesDefault200Response
```

Set the AP port profile to be default for this network

Set the AP port profile to be default for this network

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$set_network_wireless_ethernet_ports_profiles_default_request = new \Meraki\Model\SetNetworkWirelessEthernetPortsProfilesDefaultRequest(); // \Meraki\Model\SetNetworkWirelessEthernetPortsProfilesDefaultRequest

try {
    $result = $apiInstance->setNetworkWirelessEthernetPortsProfilesDefault($network_id, $set_network_wireless_ethernet_ports_profiles_default_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->setNetworkWirelessEthernetPortsProfilesDefault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **set_network_wireless_ethernet_ports_profiles_default_request** | [**\Meraki\Model\SetNetworkWirelessEthernetPortsProfilesDefaultRequest**](../Model/SetNetworkWirelessEthernetPortsProfilesDefaultRequest.md)|  | |

### Return type

[**\Meraki\Model\SetNetworkWirelessEthernetPortsProfilesDefault200Response**](../Model/SetNetworkWirelessEthernetPortsProfilesDefault200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSensorAlertsProfile()`

```php
updateNetworkSensorAlertsProfile($network_id, $id, $update_network_sensor_alerts_profile_request): \Meraki\Model\GetNetworkSensorAlertsProfiles200ResponseInner
```

Updates a sensor alert profile for a network.

Updates a sensor alert profile for a network.

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$id = 'id_example'; // string | ID
$update_network_sensor_alerts_profile_request = new \Meraki\Model\UpdateNetworkSensorAlertsProfileRequest(); // \Meraki\Model\UpdateNetworkSensorAlertsProfileRequest

try {
    $result = $apiInstance->updateNetworkSensorAlertsProfile($network_id, $id, $update_network_sensor_alerts_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->updateNetworkSensorAlertsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **id** | **string**| ID | |
| **update_network_sensor_alerts_profile_request** | [**\Meraki\Model\UpdateNetworkSensorAlertsProfileRequest**](../Model/UpdateNetworkSensorAlertsProfileRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSensorAlertsProfiles200ResponseInner**](../Model/GetNetworkSensorAlertsProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessEthernetPortsProfile()`

```php
updateNetworkWirelessEthernetPortsProfile($network_id, $profile_id, $update_network_wireless_ethernet_ports_profile_request): \Meraki\Model\GetNetworkWirelessEthernetPortsProfiles200ResponseInner
```

Update the AP port profile by ID for this network

Update the AP port profile by ID for this network

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$profile_id = 'profile_id_example'; // string | Profile ID
$update_network_wireless_ethernet_ports_profile_request = new \Meraki\Model\UpdateNetworkWirelessEthernetPortsProfileRequest(); // \Meraki\Model\UpdateNetworkWirelessEthernetPortsProfileRequest

try {
    $result = $apiInstance->updateNetworkWirelessEthernetPortsProfile($network_id, $profile_id, $update_network_wireless_ethernet_ports_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->updateNetworkWirelessEthernetPortsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **profile_id** | **string**| Profile ID | |
| **update_network_wireless_ethernet_ports_profile_request** | [**\Meraki\Model\UpdateNetworkWirelessEthernetPortsProfileRequest**](../Model/UpdateNetworkWirelessEthernetPortsProfileRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessEthernetPortsProfiles200ResponseInner**](../Model/GetNetworkWirelessEthernetPortsProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationAlertsProfile()`

```php
updateOrganizationAlertsProfile($organization_id, $alert_config_id, $update_organization_alerts_profile_request): \Meraki\Model\GetOrganizationAlertsProfiles200ResponseInner
```

Update an organization-wide alert config

Update an organization-wide alert config

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$alert_config_id = 'alert_config_id_example'; // string | Alert config ID
$update_organization_alerts_profile_request = new \Meraki\Model\UpdateOrganizationAlertsProfileRequest(); // \Meraki\Model\UpdateOrganizationAlertsProfileRequest

try {
    $result = $apiInstance->updateOrganizationAlertsProfile($organization_id, $alert_config_id, $update_organization_alerts_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->updateOrganizationAlertsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **alert_config_id** | **string**| Alert config ID | |
| **update_organization_alerts_profile_request** | [**\Meraki\Model\UpdateOrganizationAlertsProfileRequest**](../Model/UpdateOrganizationAlertsProfileRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationAlertsProfiles200ResponseInner**](../Model/GetOrganizationAlertsProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationApplianceDnsLocalProfile()`

```php
updateOrganizationApplianceDnsLocalProfile($organization_id, $profile_id, $create_organization_appliance_dns_local_profile_request): \Meraki\Model\GetOrganizationApplianceDnsLocalProfiles200ResponseInner
```

Update a local DNS profile

Update a local DNS profile

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$profile_id = 'profile_id_example'; // string | Profile ID
$create_organization_appliance_dns_local_profile_request = new \Meraki\Model\CreateOrganizationApplianceDnsLocalProfileRequest(); // \Meraki\Model\CreateOrganizationApplianceDnsLocalProfileRequest

try {
    $result = $apiInstance->updateOrganizationApplianceDnsLocalProfile($organization_id, $profile_id, $create_organization_appliance_dns_local_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->updateOrganizationApplianceDnsLocalProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **profile_id** | **string**| Profile ID | |
| **create_organization_appliance_dns_local_profile_request** | [**\Meraki\Model\CreateOrganizationApplianceDnsLocalProfileRequest**](../Model/CreateOrganizationApplianceDnsLocalProfileRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationApplianceDnsLocalProfiles200ResponseInner**](../Model/GetOrganizationApplianceDnsLocalProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationApplianceDnsSplitProfile()`

```php
updateOrganizationApplianceDnsSplitProfile($organization_id, $profile_id, $update_organization_appliance_dns_split_profile_request): \Meraki\Model\GetOrganizationApplianceDnsSplitProfiles200ResponseInner
```

Update a split DNS profile

Update a split DNS profile

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$profile_id = 'profile_id_example'; // string | Profile ID
$update_organization_appliance_dns_split_profile_request = new \Meraki\Model\UpdateOrganizationApplianceDnsSplitProfileRequest(); // \Meraki\Model\UpdateOrganizationApplianceDnsSplitProfileRequest

try {
    $result = $apiInstance->updateOrganizationApplianceDnsSplitProfile($organization_id, $profile_id, $update_organization_appliance_dns_split_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->updateOrganizationApplianceDnsSplitProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **profile_id** | **string**| Profile ID | |
| **update_organization_appliance_dns_split_profile_request** | [**\Meraki\Model\UpdateOrganizationApplianceDnsSplitProfileRequest**](../Model/UpdateOrganizationApplianceDnsSplitProfileRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApplianceDnsSplitProfiles200ResponseInner**](../Model/GetOrganizationApplianceDnsSplitProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationConfigTemplateSwitchProfilePort()`

```php
updateOrganizationConfigTemplateSwitchProfilePort($organization_id, $config_template_id, $profile_id, $port_id, $update_organization_config_template_switch_profile_port_request): \Meraki\Model\GetOrganizationConfigTemplateSwitchProfilePorts200ResponseInner
```

Update a switch template port

Update a switch template port

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


$apiInstance = new Meraki\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$config_template_id = 'config_template_id_example'; // string | Config template ID
$profile_id = 'profile_id_example'; // string | Profile ID
$port_id = 'port_id_example'; // string | Port ID
$update_organization_config_template_switch_profile_port_request = new \Meraki\Model\UpdateOrganizationConfigTemplateSwitchProfilePortRequest(); // \Meraki\Model\UpdateOrganizationConfigTemplateSwitchProfilePortRequest

try {
    $result = $apiInstance->updateOrganizationConfigTemplateSwitchProfilePort($organization_id, $config_template_id, $profile_id, $port_id, $update_organization_config_template_switch_profile_port_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->updateOrganizationConfigTemplateSwitchProfilePort: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **config_template_id** | **string**| Config template ID | |
| **profile_id** | **string**| Profile ID | |
| **port_id** | **string**| Port ID | |
| **update_organization_config_template_switch_profile_port_request** | [**\Meraki\Model\UpdateOrganizationConfigTemplateSwitchProfilePortRequest**](../Model/UpdateOrganizationConfigTemplateSwitchProfilePortRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationConfigTemplateSwitchProfilePorts200ResponseInner**](../Model/GetOrganizationConfigTemplateSwitchProfilePorts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
