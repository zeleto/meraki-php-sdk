# Meraki\EthernetApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assignNetworkWirelessEthernetPortsProfiles()**](EthernetApi.md#assignNetworkWirelessEthernetPortsProfiles) | **POST** /networks/{networkId}/wireless/ethernet/ports/profiles/assign | Assign AP port profile to list of APs |
| [**createNetworkWirelessEthernetPortsProfile()**](EthernetApi.md#createNetworkWirelessEthernetPortsProfile) | **POST** /networks/{networkId}/wireless/ethernet/ports/profiles | Create an AP port profile |
| [**deleteNetworkWirelessEthernetPortsProfile()**](EthernetApi.md#deleteNetworkWirelessEthernetPortsProfile) | **DELETE** /networks/{networkId}/wireless/ethernet/ports/profiles/{profileId} | Delete an AP port profile |
| [**getNetworkWirelessEthernetPortsProfile()**](EthernetApi.md#getNetworkWirelessEthernetPortsProfile) | **GET** /networks/{networkId}/wireless/ethernet/ports/profiles/{profileId} | Show the AP port profile by ID for this network |
| [**getNetworkWirelessEthernetPortsProfiles()**](EthernetApi.md#getNetworkWirelessEthernetPortsProfiles) | **GET** /networks/{networkId}/wireless/ethernet/ports/profiles | List the AP port profiles for this network |
| [**getOrganizationWirelessDevicesEthernetStatuses()**](EthernetApi.md#getOrganizationWirelessDevicesEthernetStatuses) | **GET** /organizations/{organizationId}/wireless/devices/ethernet/statuses | List the most recent Ethernet link speed, duplex, aggregation and power mode and status information for wireless devices. |
| [**setNetworkWirelessEthernetPortsProfilesDefault()**](EthernetApi.md#setNetworkWirelessEthernetPortsProfilesDefault) | **POST** /networks/{networkId}/wireless/ethernet/ports/profiles/setDefault | Set the AP port profile to be default for this network |
| [**updateNetworkWirelessEthernetPortsProfile()**](EthernetApi.md#updateNetworkWirelessEthernetPortsProfile) | **PUT** /networks/{networkId}/wireless/ethernet/ports/profiles/{profileId} | Update the AP port profile by ID for this network |


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


$apiInstance = new Meraki\Api\EthernetApi(
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
    echo 'Exception when calling EthernetApi->assignNetworkWirelessEthernetPortsProfiles: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\EthernetApi(
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
    echo 'Exception when calling EthernetApi->createNetworkWirelessEthernetPortsProfile: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\EthernetApi(
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
    echo 'Exception when calling EthernetApi->deleteNetworkWirelessEthernetPortsProfile: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\EthernetApi(
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
    echo 'Exception when calling EthernetApi->getNetworkWirelessEthernetPortsProfile: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\EthernetApi(
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
    echo 'Exception when calling EthernetApi->getNetworkWirelessEthernetPortsProfiles: ', $e->getMessage(), PHP_EOL;
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

## `getOrganizationWirelessDevicesEthernetStatuses()`

```php
getOrganizationWirelessDevicesEthernetStatuses($organization_id, $per_page, $starting_after, $ending_before, $network_ids): \Meraki\Model\GetOrganizationWirelessDevicesEthernetStatuses200ResponseInner[]
```

List the most recent Ethernet link speed, duplex, aggregation and power mode and status information for wireless devices.

List the most recent Ethernet link speed, duplex, aggregation and power mode and status information for wireless devices.

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


$apiInstance = new Meraki\Api\EthernetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | A list of Meraki network IDs to filter results to contain only specified networks. E.g.: networkIds[]=N_12345678&networkIds[]=L_3456

try {
    $result = $apiInstance->getOrganizationWirelessDevicesEthernetStatuses($organization_id, $per_page, $starting_after, $ending_before, $network_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EthernetApi->getOrganizationWirelessDevicesEthernetStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| A list of Meraki network IDs to filter results to contain only specified networks. E.g.: networkIds[]&#x3D;N_12345678&amp;networkIds[]&#x3D;L_3456 | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessDevicesEthernetStatuses200ResponseInner[]**](../Model/GetOrganizationWirelessDevicesEthernetStatuses200ResponseInner.md)

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


$apiInstance = new Meraki\Api\EthernetApi(
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
    echo 'Exception when calling EthernetApi->setNetworkWirelessEthernetPortsProfilesDefault: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\EthernetApi(
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
    echo 'Exception when calling EthernetApi->updateNetworkWirelessEthernetPortsProfile: ', $e->getMessage(), PHP_EOL;
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
