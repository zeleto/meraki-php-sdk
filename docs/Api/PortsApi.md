# Meraki\PortsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assignNetworkWirelessEthernetPortsProfiles()**](PortsApi.md#assignNetworkWirelessEthernetPortsProfiles) | **POST** /networks/{networkId}/wireless/ethernet/ports/profiles/assign | Assign AP port profile to list of APs |
| [**createNetworkWirelessEthernetPortsProfile()**](PortsApi.md#createNetworkWirelessEthernetPortsProfile) | **POST** /networks/{networkId}/wireless/ethernet/ports/profiles | Create an AP port profile |
| [**cycleDeviceSwitchPorts()**](PortsApi.md#cycleDeviceSwitchPorts) | **POST** /devices/{serial}/switch/ports/cycle | Cycle a set of switch ports |
| [**deleteNetworkWirelessEthernetPortsProfile()**](PortsApi.md#deleteNetworkWirelessEthernetPortsProfile) | **DELETE** /networks/{networkId}/wireless/ethernet/ports/profiles/{profileId} | Delete an AP port profile |
| [**getDeviceSwitchPort()**](PortsApi.md#getDeviceSwitchPort) | **GET** /devices/{serial}/switch/ports/{portId} | Return a switch port |
| [**getDeviceSwitchPorts()**](PortsApi.md#getDeviceSwitchPorts) | **GET** /devices/{serial}/switch/ports | List the switch ports for a switch |
| [**getDeviceSwitchPortsStatuses()**](PortsApi.md#getDeviceSwitchPortsStatuses) | **GET** /devices/{serial}/switch/ports/statuses | Return the status for all the ports of a switch |
| [**getDeviceSwitchPortsStatusesPackets()**](PortsApi.md#getDeviceSwitchPortsStatusesPackets) | **GET** /devices/{serial}/switch/ports/statuses/packets | Return the packet counters for all the ports of a switch |
| [**getNetworkAppliancePort()**](PortsApi.md#getNetworkAppliancePort) | **GET** /networks/{networkId}/appliance/ports/{portId} | Return per-port VLAN settings for a single MX port. |
| [**getNetworkAppliancePorts()**](PortsApi.md#getNetworkAppliancePorts) | **GET** /networks/{networkId}/appliance/ports | List per-port VLAN settings for all ports of a MX. |
| [**getNetworkWirelessEthernetPortsProfile()**](PortsApi.md#getNetworkWirelessEthernetPortsProfile) | **GET** /networks/{networkId}/wireless/ethernet/ports/profiles/{profileId} | Show the AP port profile by ID for this network |
| [**getNetworkWirelessEthernetPortsProfiles()**](PortsApi.md#getNetworkWirelessEthernetPortsProfiles) | **GET** /networks/{networkId}/wireless/ethernet/ports/profiles | List the AP port profiles for this network |
| [**getOrganizationConfigTemplateSwitchProfilePort()**](PortsApi.md#getOrganizationConfigTemplateSwitchProfilePort) | **GET** /organizations/{organizationId}/configTemplates/{configTemplateId}/switch/profiles/{profileId}/ports/{portId} | Return a switch template port |
| [**getOrganizationConfigTemplateSwitchProfilePorts()**](PortsApi.md#getOrganizationConfigTemplateSwitchProfilePorts) | **GET** /organizations/{organizationId}/configTemplates/{configTemplateId}/switch/profiles/{profileId}/ports | Return all the ports of a switch template |
| [**getOrganizationSwitchPortsBySwitch()**](PortsApi.md#getOrganizationSwitchPortsBySwitch) | **GET** /organizations/{organizationId}/switch/ports/bySwitch | List the switchports in an organization by switch |
| [**getOrganizationSwitchPortsClientsOverviewByDevice()**](PortsApi.md#getOrganizationSwitchPortsClientsOverviewByDevice) | **GET** /organizations/{organizationId}/switch/ports/clients/overview/byDevice | List the number of clients for all switchports with at least one online client in an organization. |
| [**getOrganizationSwitchPortsOverview()**](PortsApi.md#getOrganizationSwitchPortsOverview) | **GET** /organizations/{organizationId}/switch/ports/overview | Returns the counts of all active ports for the requested timespan, grouped by speed |
| [**getOrganizationSwitchPortsStatusesBySwitch()**](PortsApi.md#getOrganizationSwitchPortsStatusesBySwitch) | **GET** /organizations/{organizationId}/switch/ports/statuses/bySwitch | List the switchports in an organization |
| [**getOrganizationSwitchPortsTopologyDiscoveryByDevice()**](PortsApi.md#getOrganizationSwitchPortsTopologyDiscoveryByDevice) | **GET** /organizations/{organizationId}/switch/ports/topology/discovery/byDevice | List most recently seen LLDP/CDP discovery and topology information per switch port in an organization. |
| [**getOrganizationSwitchPortsUsageHistoryByDeviceByInterval()**](PortsApi.md#getOrganizationSwitchPortsUsageHistoryByDeviceByInterval) | **GET** /organizations/{organizationId}/switch/ports/usage/history/byDevice/byInterval | List the historical usage and traffic data of switchports in an organization. |
| [**setNetworkWirelessEthernetPortsProfilesDefault()**](PortsApi.md#setNetworkWirelessEthernetPortsProfilesDefault) | **POST** /networks/{networkId}/wireless/ethernet/ports/profiles/setDefault | Set the AP port profile to be default for this network |
| [**updateDeviceSwitchPort()**](PortsApi.md#updateDeviceSwitchPort) | **PUT** /devices/{serial}/switch/ports/{portId} | Update a switch port |
| [**updateNetworkAppliancePort()**](PortsApi.md#updateNetworkAppliancePort) | **PUT** /networks/{networkId}/appliance/ports/{portId} | Update the per-port VLAN settings for a single MX port. |
| [**updateNetworkWirelessEthernetPortsProfile()**](PortsApi.md#updateNetworkWirelessEthernetPortsProfile) | **PUT** /networks/{networkId}/wireless/ethernet/ports/profiles/{profileId} | Update the AP port profile by ID for this network |
| [**updateOrganizationConfigTemplateSwitchProfilePort()**](PortsApi.md#updateOrganizationConfigTemplateSwitchProfilePort) | **PUT** /organizations/{organizationId}/configTemplates/{configTemplateId}/switch/profiles/{profileId}/ports/{portId} | Update a switch template port |


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


$apiInstance = new Meraki\Api\PortsApi(
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
    echo 'Exception when calling PortsApi->assignNetworkWirelessEthernetPortsProfiles: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\PortsApi(
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
    echo 'Exception when calling PortsApi->createNetworkWirelessEthernetPortsProfile: ', $e->getMessage(), PHP_EOL;
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

## `cycleDeviceSwitchPorts()`

```php
cycleDeviceSwitchPorts($serial, $cycle_device_switch_ports_request): \Meraki\Model\CycleDeviceSwitchPorts200Response
```

Cycle a set of switch ports

Cycle a set of switch ports

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


$apiInstance = new Meraki\Api\PortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$cycle_device_switch_ports_request = new \Meraki\Model\CycleDeviceSwitchPortsRequest(); // \Meraki\Model\CycleDeviceSwitchPortsRequest

try {
    $result = $apiInstance->cycleDeviceSwitchPorts($serial, $cycle_device_switch_ports_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortsApi->cycleDeviceSwitchPorts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **cycle_device_switch_ports_request** | [**\Meraki\Model\CycleDeviceSwitchPortsRequest**](../Model/CycleDeviceSwitchPortsRequest.md)|  | |

### Return type

[**\Meraki\Model\CycleDeviceSwitchPorts200Response**](../Model/CycleDeviceSwitchPorts200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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


$apiInstance = new Meraki\Api\PortsApi(
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
    echo 'Exception when calling PortsApi->deleteNetworkWirelessEthernetPortsProfile: ', $e->getMessage(), PHP_EOL;
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

## `getDeviceSwitchPort()`

```php
getDeviceSwitchPort($serial, $port_id): \Meraki\Model\GetDeviceSwitchPorts200ResponseInner
```

Return a switch port

Return a switch port

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


$apiInstance = new Meraki\Api\PortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$port_id = 'port_id_example'; // string | Port ID

try {
    $result = $apiInstance->getDeviceSwitchPort($serial, $port_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortsApi->getDeviceSwitchPort: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **port_id** | **string**| Port ID | |

### Return type

[**\Meraki\Model\GetDeviceSwitchPorts200ResponseInner**](../Model/GetDeviceSwitchPorts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceSwitchPorts()`

```php
getDeviceSwitchPorts($serial): \Meraki\Model\GetDeviceSwitchPorts200ResponseInner[]
```

List the switch ports for a switch

List the switch ports for a switch

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


$apiInstance = new Meraki\Api\PortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceSwitchPorts($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortsApi->getDeviceSwitchPorts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceSwitchPorts200ResponseInner[]**](../Model/GetDeviceSwitchPorts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceSwitchPortsStatuses()`

```php
getDeviceSwitchPortsStatuses($serial, $t0, $timespan): \Meraki\Model\GetDeviceSwitchPortsStatuses200ResponseInner[]
```

Return the status for all the ports of a switch

Return the status for all the ports of a switch

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


$apiInstance = new Meraki\Api\PortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 31 days. The default is 1 day.

try {
    $result = $apiInstance->getDeviceSwitchPortsStatuses($serial, $t0, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortsApi->getDeviceSwitchPortsStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetDeviceSwitchPortsStatuses200ResponseInner[]**](../Model/GetDeviceSwitchPortsStatuses200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceSwitchPortsStatusesPackets()`

```php
getDeviceSwitchPortsStatusesPackets($serial, $t0, $timespan): \Meraki\Model\GetDeviceSwitchPortsStatusesPackets200ResponseInner[]
```

Return the packet counters for all the ports of a switch

Return the packet counters for all the ports of a switch

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


$apiInstance = new Meraki\Api\PortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 1 day from today.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 1 day. The default is 1 day.

try {
    $result = $apiInstance->getDeviceSwitchPortsStatusesPackets($serial, $t0, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortsApi->getDeviceSwitchPortsStatusesPackets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 1 day from today. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 1 day. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetDeviceSwitchPortsStatusesPackets200ResponseInner[]**](../Model/GetDeviceSwitchPortsStatusesPackets200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkAppliancePort()`

```php
getNetworkAppliancePort($network_id, $port_id): \Meraki\Model\GetNetworkAppliancePorts200ResponseInner
```

Return per-port VLAN settings for a single MX port.

Return per-port VLAN settings for a single MX port.

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


$apiInstance = new Meraki\Api\PortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$port_id = 'port_id_example'; // string | Port ID

try {
    $result = $apiInstance->getNetworkAppliancePort($network_id, $port_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortsApi->getNetworkAppliancePort: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **port_id** | **string**| Port ID | |

### Return type

[**\Meraki\Model\GetNetworkAppliancePorts200ResponseInner**](../Model/GetNetworkAppliancePorts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkAppliancePorts()`

```php
getNetworkAppliancePorts($network_id): \Meraki\Model\GetNetworkAppliancePorts200ResponseInner[]
```

List per-port VLAN settings for all ports of a MX.

List per-port VLAN settings for all ports of a MX.

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


$apiInstance = new Meraki\Api\PortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkAppliancePorts($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortsApi->getNetworkAppliancePorts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkAppliancePorts200ResponseInner[]**](../Model/GetNetworkAppliancePorts200ResponseInner.md)

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


$apiInstance = new Meraki\Api\PortsApi(
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
    echo 'Exception when calling PortsApi->getNetworkWirelessEthernetPortsProfile: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\PortsApi(
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
    echo 'Exception when calling PortsApi->getNetworkWirelessEthernetPortsProfiles: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\PortsApi(
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
    echo 'Exception when calling PortsApi->getOrganizationConfigTemplateSwitchProfilePort: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\PortsApi(
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
    echo 'Exception when calling PortsApi->getOrganizationConfigTemplateSwitchProfilePorts: ', $e->getMessage(), PHP_EOL;
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

## `getOrganizationSwitchPortsBySwitch()`

```php
getOrganizationSwitchPortsBySwitch($organization_id, $per_page, $starting_after, $ending_before, $configuration_updated_after, $mac, $macs, $name, $network_ids, $port_profile_ids, $serial, $serials): \Meraki\Model\GetOrganizationSwitchPortsBySwitch200Response
```

List the switchports in an organization by switch

List the switchports in an organization by switch

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


$apiInstance = new Meraki\Api\PortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 50. Default is 50.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$configuration_updated_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter items to switches where the configuration has been updated after the given timestamp.
$mac = 'mac_example'; // string | Optional parameter to filter items to switches with MAC addresses that contain the search term or are an exact match.
$macs = array('macs_example'); // string[] | Optional parameter to filter items to switches that have one of the provided MAC addresses.
$name = 'name_example'; // string | Optional parameter to filter items to switches with names that contain the search term or are an exact match.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter items to switches in one of the provided networks.
$port_profile_ids = array('port_profile_ids_example'); // string[] | Optional parameter to filter items to switches that contain switchports belonging to one of the specified port profiles.
$serial = 'serial_example'; // string | Optional parameter to filter items to switches with serial number that contains the search term or are an exact match.
$serials = array('serials_example'); // string[] | Optional parameter to filter items to switches that have one of the provided serials.

try {
    $result = $apiInstance->getOrganizationSwitchPortsBySwitch($organization_id, $per_page, $starting_after, $ending_before, $configuration_updated_after, $mac, $macs, $name, $network_ids, $port_profile_ids, $serial, $serials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortsApi->getOrganizationSwitchPortsBySwitch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 50. Default is 50. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **configuration_updated_after** | **\DateTime**| Optional parameter to filter items to switches where the configuration has been updated after the given timestamp. | [optional] |
| **mac** | **string**| Optional parameter to filter items to switches with MAC addresses that contain the search term or are an exact match. | [optional] |
| **macs** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches that have one of the provided MAC addresses. | [optional] |
| **name** | **string**| Optional parameter to filter items to switches with names that contain the search term or are an exact match. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches in one of the provided networks. | [optional] |
| **port_profile_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches that contain switchports belonging to one of the specified port profiles. | [optional] |
| **serial** | **string**| Optional parameter to filter items to switches with serial number that contains the search term or are an exact match. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches that have one of the provided serials. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSwitchPortsBySwitch200Response**](../Model/GetOrganizationSwitchPortsBySwitch200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSwitchPortsClientsOverviewByDevice()`

```php
getOrganizationSwitchPortsClientsOverviewByDevice($organization_id, $t0, $timespan, $per_page, $starting_after, $ending_before, $configuration_updated_after, $mac, $macs, $name, $network_ids, $port_profile_ids, $serial, $serials): \Meraki\Model\GetOrganizationSwitchPortsClientsOverviewByDevice200Response
```

List the number of clients for all switchports with at least one online client in an organization.

List the number of clients for all switchports with at least one online client in an organization.

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


$apiInstance = new Meraki\Api\PortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 31 days. The default is 1 day.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 20. Default is 20.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$configuration_updated_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter items to switches where the configuration has been updated after the given timestamp.
$mac = 'mac_example'; // string | Optional parameter to filter items to switches with MAC addresses that contain the search term or are an exact match.
$macs = array('macs_example'); // string[] | Optional parameter to filter items to switches that have one of the provided MAC addresses.
$name = 'name_example'; // string | Optional parameter to filter items to switches with names that contain the search term or are an exact match.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter items to switches in one of the provided networks.
$port_profile_ids = array('port_profile_ids_example'); // string[] | Optional parameter to filter items to switches that contain switchports belonging to one of the specified port profiles.
$serial = 'serial_example'; // string | Optional parameter to filter items to switches with serial number that contains the search term or are an exact match.
$serials = array('serials_example'); // string[] | Optional parameter to filter items to switches that have one of the provided serials.

try {
    $result = $apiInstance->getOrganizationSwitchPortsClientsOverviewByDevice($organization_id, $t0, $timespan, $per_page, $starting_after, $ending_before, $configuration_updated_after, $mac, $macs, $name, $network_ids, $port_profile_ids, $serial, $serials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortsApi->getOrganizationSwitchPortsClientsOverviewByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 20. Default is 20. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **configuration_updated_after** | **\DateTime**| Optional parameter to filter items to switches where the configuration has been updated after the given timestamp. | [optional] |
| **mac** | **string**| Optional parameter to filter items to switches with MAC addresses that contain the search term or are an exact match. | [optional] |
| **macs** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches that have one of the provided MAC addresses. | [optional] |
| **name** | **string**| Optional parameter to filter items to switches with names that contain the search term or are an exact match. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches in one of the provided networks. | [optional] |
| **port_profile_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches that contain switchports belonging to one of the specified port profiles. | [optional] |
| **serial** | **string**| Optional parameter to filter items to switches with serial number that contains the search term or are an exact match. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches that have one of the provided serials. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSwitchPortsClientsOverviewByDevice200Response**](../Model/GetOrganizationSwitchPortsClientsOverviewByDevice200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSwitchPortsOverview()`

```php
getOrganizationSwitchPortsOverview($organization_id, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationSwitchPortsOverview200Response
```

Returns the counts of all active ports for the requested timespan, grouped by speed

Returns the counts of all active ports for the requested timespan, grouped by speed. An active port is a port that at any point during the timeframe is observed to be connected to a responsive device and isn't configured to be disabled. For a port that is observed at multiple speeds during the timeframe, it will be counted at the highest speed observed. The number of inactive ports, and the total number of ports are also provided. Only ports on switches online during the timeframe will be represented and a port is only guaranteed to be present if its switch was online for at least 6 hours of the timeframe.

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


$apiInstance = new Meraki\Api\PortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 186 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 12 hours and be less than or equal to 186 days. The default is 1 day.

try {
    $result = $apiInstance->getOrganizationSwitchPortsOverview($organization_id, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortsApi->getOrganizationSwitchPortsOverview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **t0** | **string**| The beginning of the timespan for the data. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 186 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 12 hours and be less than or equal to 186 days. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSwitchPortsOverview200Response**](../Model/GetOrganizationSwitchPortsOverview200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSwitchPortsStatusesBySwitch()`

```php
getOrganizationSwitchPortsStatusesBySwitch($organization_id, $per_page, $starting_after, $ending_before, $configuration_updated_after, $mac, $macs, $name, $network_ids, $port_profile_ids, $serial, $serials): \Meraki\Model\GetOrganizationSwitchPortsStatusesBySwitch200Response
```

List the switchports in an organization

List the switchports in an organization

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


$apiInstance = new Meraki\Api\PortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 20. Default is 10.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$configuration_updated_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter items to switches where the configuration has been updated after the given timestamp.
$mac = 'mac_example'; // string | Optional parameter to filter items to switches with MAC addresses that contain the search term or are an exact match.
$macs = array('macs_example'); // string[] | Optional parameter to filter items to switches that have one of the provided MAC addresses.
$name = 'name_example'; // string | Optional parameter to filter items to switches with names that contain the search term or are an exact match.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter items to switches in one of the provided networks.
$port_profile_ids = array('port_profile_ids_example'); // string[] | Optional parameter to filter items to switches that contain switchports belonging to one of the specified port profiles.
$serial = 'serial_example'; // string | Optional parameter to filter items to switches with serial number that contains the search term or are an exact match.
$serials = array('serials_example'); // string[] | Optional parameter to filter items to switches that have one of the provided serials.

try {
    $result = $apiInstance->getOrganizationSwitchPortsStatusesBySwitch($organization_id, $per_page, $starting_after, $ending_before, $configuration_updated_after, $mac, $macs, $name, $network_ids, $port_profile_ids, $serial, $serials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortsApi->getOrganizationSwitchPortsStatusesBySwitch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 20. Default is 10. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **configuration_updated_after** | **\DateTime**| Optional parameter to filter items to switches where the configuration has been updated after the given timestamp. | [optional] |
| **mac** | **string**| Optional parameter to filter items to switches with MAC addresses that contain the search term or are an exact match. | [optional] |
| **macs** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches that have one of the provided MAC addresses. | [optional] |
| **name** | **string**| Optional parameter to filter items to switches with names that contain the search term or are an exact match. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches in one of the provided networks. | [optional] |
| **port_profile_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches that contain switchports belonging to one of the specified port profiles. | [optional] |
| **serial** | **string**| Optional parameter to filter items to switches with serial number that contains the search term or are an exact match. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches that have one of the provided serials. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSwitchPortsStatusesBySwitch200Response**](../Model/GetOrganizationSwitchPortsStatusesBySwitch200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSwitchPortsTopologyDiscoveryByDevice()`

```php
getOrganizationSwitchPortsTopologyDiscoveryByDevice($organization_id, $t0, $timespan, $per_page, $starting_after, $ending_before, $configuration_updated_after, $mac, $macs, $name, $network_ids, $port_profile_ids, $serial, $serials): \Meraki\Model\GetOrganizationSwitchPortsTopologyDiscoveryByDevice200Response
```

List most recently seen LLDP/CDP discovery and topology information per switch port in an organization.

List most recently seen LLDP/CDP discovery and topology information per switch port in an organization.

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


$apiInstance = new Meraki\Api\PortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 31 days. The default is 1 day.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 20. Default is 10.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$configuration_updated_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter items to switches where the configuration has been updated after the given timestamp.
$mac = 'mac_example'; // string | Optional parameter to filter items to switches with MAC addresses that contain the search term or are an exact match.
$macs = array('macs_example'); // string[] | Optional parameter to filter items to switches that have one of the provided MAC addresses.
$name = 'name_example'; // string | Optional parameter to filter items to switches with names that contain the search term or are an exact match.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter items to switches in one of the provided networks.
$port_profile_ids = array('port_profile_ids_example'); // string[] | Optional parameter to filter items to switches that contain switchports belonging to one of the specified port profiles.
$serial = 'serial_example'; // string | Optional parameter to filter items to switches with serial number that contains the search term or are an exact match.
$serials = array('serials_example'); // string[] | Optional parameter to filter items to switches that have one of the provided serials.

try {
    $result = $apiInstance->getOrganizationSwitchPortsTopologyDiscoveryByDevice($organization_id, $t0, $timespan, $per_page, $starting_after, $ending_before, $configuration_updated_after, $mac, $macs, $name, $network_ids, $port_profile_ids, $serial, $serials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortsApi->getOrganizationSwitchPortsTopologyDiscoveryByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 20. Default is 10. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **configuration_updated_after** | **\DateTime**| Optional parameter to filter items to switches where the configuration has been updated after the given timestamp. | [optional] |
| **mac** | **string**| Optional parameter to filter items to switches with MAC addresses that contain the search term or are an exact match. | [optional] |
| **macs** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches that have one of the provided MAC addresses. | [optional] |
| **name** | **string**| Optional parameter to filter items to switches with names that contain the search term or are an exact match. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches in one of the provided networks. | [optional] |
| **port_profile_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches that contain switchports belonging to one of the specified port profiles. | [optional] |
| **serial** | **string**| Optional parameter to filter items to switches with serial number that contains the search term or are an exact match. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches that have one of the provided serials. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSwitchPortsTopologyDiscoveryByDevice200Response**](../Model/GetOrganizationSwitchPortsTopologyDiscoveryByDevice200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSwitchPortsUsageHistoryByDeviceByInterval()`

```php
getOrganizationSwitchPortsUsageHistoryByDeviceByInterval($organization_id, $t0, $t1, $timespan, $interval, $per_page, $starting_after, $ending_before, $configuration_updated_after, $mac, $macs, $name, $network_ids, $port_profile_ids, $serial, $serials): \Meraki\Model\GetOrganizationSwitchPortsUsageHistoryByDeviceByInterval200Response
```

List the historical usage and traffic data of switchports in an organization.

List the historical usage and traffic data of switchports in an organization.

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


$apiInstance = new Meraki\Api\PortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. If interval is provided, the timespan will be autocalculated.
$interval = 56; // int | The time interval in seconds for returned data. The valid intervals are: 300, 1200, 14400, 86400. The default is 1200. Interval is calculated if time params are provided.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 50. Default is 10.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$configuration_updated_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter items to switches where the configuration has been updated after the given timestamp.
$mac = 'mac_example'; // string | Optional parameter to filter items to switches with MAC addresses that contain the search term or are an exact match.
$macs = array('macs_example'); // string[] | Optional parameter to filter items to switches that have one of the provided MAC addresses.
$name = 'name_example'; // string | Optional parameter to filter items to switches with names that contain the search term or are an exact match.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter items to switches in one of the provided networks.
$port_profile_ids = array('port_profile_ids_example'); // string[] | Optional parameter to filter items to switches that contain switchports belonging to one of the specified port profiles.
$serial = 'serial_example'; // string | Optional parameter to filter items to switches with serial number that contains the search term or are an exact match.
$serials = array('serials_example'); // string[] | Optional parameter to filter items to switches that have one of the provided serials.

try {
    $result = $apiInstance->getOrganizationSwitchPortsUsageHistoryByDeviceByInterval($organization_id, $t0, $t1, $timespan, $interval, $per_page, $starting_after, $ending_before, $configuration_updated_after, $mac, $macs, $name, $network_ids, $port_profile_ids, $serial, $serials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortsApi->getOrganizationSwitchPortsUsageHistoryByDeviceByInterval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. If interval is provided, the timespan will be autocalculated. | [optional] |
| **interval** | **int**| The time interval in seconds for returned data. The valid intervals are: 300, 1200, 14400, 86400. The default is 1200. Interval is calculated if time params are provided. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 50. Default is 10. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **configuration_updated_after** | **\DateTime**| Optional parameter to filter items to switches where the configuration has been updated after the given timestamp. | [optional] |
| **mac** | **string**| Optional parameter to filter items to switches with MAC addresses that contain the search term or are an exact match. | [optional] |
| **macs** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches that have one of the provided MAC addresses. | [optional] |
| **name** | **string**| Optional parameter to filter items to switches with names that contain the search term or are an exact match. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches in one of the provided networks. | [optional] |
| **port_profile_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches that contain switchports belonging to one of the specified port profiles. | [optional] |
| **serial** | **string**| Optional parameter to filter items to switches with serial number that contains the search term or are an exact match. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches that have one of the provided serials. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSwitchPortsUsageHistoryByDeviceByInterval200Response**](../Model/GetOrganizationSwitchPortsUsageHistoryByDeviceByInterval200Response.md)

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


$apiInstance = new Meraki\Api\PortsApi(
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
    echo 'Exception when calling PortsApi->setNetworkWirelessEthernetPortsProfilesDefault: ', $e->getMessage(), PHP_EOL;
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

## `updateDeviceSwitchPort()`

```php
updateDeviceSwitchPort($serial, $port_id, $update_device_switch_port_request): \Meraki\Model\GetDeviceSwitchPorts200ResponseInner
```

Update a switch port

Update a switch port

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


$apiInstance = new Meraki\Api\PortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$port_id = 'port_id_example'; // string | Port ID
$update_device_switch_port_request = new \Meraki\Model\UpdateDeviceSwitchPortRequest(); // \Meraki\Model\UpdateDeviceSwitchPortRequest

try {
    $result = $apiInstance->updateDeviceSwitchPort($serial, $port_id, $update_device_switch_port_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortsApi->updateDeviceSwitchPort: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **port_id** | **string**| Port ID | |
| **update_device_switch_port_request** | [**\Meraki\Model\UpdateDeviceSwitchPortRequest**](../Model/UpdateDeviceSwitchPortRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceSwitchPorts200ResponseInner**](../Model/GetDeviceSwitchPorts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkAppliancePort()`

```php
updateNetworkAppliancePort($network_id, $port_id, $update_network_appliance_port_request): \Meraki\Model\GetNetworkAppliancePorts200ResponseInner
```

Update the per-port VLAN settings for a single MX port.

Update the per-port VLAN settings for a single MX port.

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


$apiInstance = new Meraki\Api\PortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$port_id = 'port_id_example'; // string | Port ID
$update_network_appliance_port_request = new \Meraki\Model\UpdateNetworkAppliancePortRequest(); // \Meraki\Model\UpdateNetworkAppliancePortRequest

try {
    $result = $apiInstance->updateNetworkAppliancePort($network_id, $port_id, $update_network_appliance_port_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortsApi->updateNetworkAppliancePort: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **port_id** | **string**| Port ID | |
| **update_network_appliance_port_request** | [**\Meraki\Model\UpdateNetworkAppliancePortRequest**](../Model/UpdateNetworkAppliancePortRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkAppliancePorts200ResponseInner**](../Model/GetNetworkAppliancePorts200ResponseInner.md)

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


$apiInstance = new Meraki\Api\PortsApi(
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
    echo 'Exception when calling PortsApi->updateNetworkWirelessEthernetPortsProfile: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\PortsApi(
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
    echo 'Exception when calling PortsApi->updateOrganizationConfigTemplateSwitchProfilePort: ', $e->getMessage(), PHP_EOL;
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
