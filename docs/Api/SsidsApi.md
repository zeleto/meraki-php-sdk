# Meraki\SsidsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkWirelessSsidIdentityPsk()**](SsidsApi.md#createNetworkWirelessSsidIdentityPsk) | **POST** /networks/{networkId}/wireless/ssids/{number}/identityPsks | Create an Identity PSK |
| [**createOrganizationWirelessSsidsFirewallIsolationAllowlistEntry()**](SsidsApi.md#createOrganizationWirelessSsidsFirewallIsolationAllowlistEntry) | **POST** /organizations/{organizationId}/wireless/ssids/firewall/isolation/allowlist/entries | Create isolation allow list MAC entry for this organization |
| [**deleteNetworkWirelessSsidIdentityPsk()**](SsidsApi.md#deleteNetworkWirelessSsidIdentityPsk) | **DELETE** /networks/{networkId}/wireless/ssids/{number}/identityPsks/{identityPskId} | Delete an Identity PSK |
| [**deleteOrganizationWirelessSsidsFirewallIsolationAllowlistEntry()**](SsidsApi.md#deleteOrganizationWirelessSsidsFirewallIsolationAllowlistEntry) | **DELETE** /organizations/{organizationId}/wireless/ssids/firewall/isolation/allowlist/entries/{entryId} | Destroy isolation allow list MAC entry for this organization |
| [**getNetworkApplianceSsid()**](SsidsApi.md#getNetworkApplianceSsid) | **GET** /networks/{networkId}/appliance/ssids/{number} | Return a single MX SSID |
| [**getNetworkApplianceSsids()**](SsidsApi.md#getNetworkApplianceSsids) | **GET** /networks/{networkId}/appliance/ssids | List the MX SSIDs in a network |
| [**getNetworkWirelessSsid()**](SsidsApi.md#getNetworkWirelessSsid) | **GET** /networks/{networkId}/wireless/ssids/{number} | Return a single MR SSID |
| [**getNetworkWirelessSsidBonjourForwarding()**](SsidsApi.md#getNetworkWirelessSsidBonjourForwarding) | **GET** /networks/{networkId}/wireless/ssids/{number}/bonjourForwarding | List the Bonjour forwarding setting and rules for the SSID |
| [**getNetworkWirelessSsidDeviceTypeGroupPolicies()**](SsidsApi.md#getNetworkWirelessSsidDeviceTypeGroupPolicies) | **GET** /networks/{networkId}/wireless/ssids/{number}/deviceTypeGroupPolicies | List the device type group policies for the SSID |
| [**getNetworkWirelessSsidEapOverride()**](SsidsApi.md#getNetworkWirelessSsidEapOverride) | **GET** /networks/{networkId}/wireless/ssids/{number}/eapOverride | Return the EAP overridden parameters for an SSID |
| [**getNetworkWirelessSsidFirewallL3FirewallRules()**](SsidsApi.md#getNetworkWirelessSsidFirewallL3FirewallRules) | **GET** /networks/{networkId}/wireless/ssids/{number}/firewall/l3FirewallRules | Return the L3 firewall rules for an SSID on an MR network |
| [**getNetworkWirelessSsidFirewallL7FirewallRules()**](SsidsApi.md#getNetworkWirelessSsidFirewallL7FirewallRules) | **GET** /networks/{networkId}/wireless/ssids/{number}/firewall/l7FirewallRules | Return the L7 firewall rules for an SSID on an MR network |
| [**getNetworkWirelessSsidHotspot20()**](SsidsApi.md#getNetworkWirelessSsidHotspot20) | **GET** /networks/{networkId}/wireless/ssids/{number}/hotspot20 | Return the Hotspot 2.0 settings for an SSID |
| [**getNetworkWirelessSsidIdentityPsk()**](SsidsApi.md#getNetworkWirelessSsidIdentityPsk) | **GET** /networks/{networkId}/wireless/ssids/{number}/identityPsks/{identityPskId} | Return an Identity PSK |
| [**getNetworkWirelessSsidIdentityPsks()**](SsidsApi.md#getNetworkWirelessSsidIdentityPsks) | **GET** /networks/{networkId}/wireless/ssids/{number}/identityPsks | List all Identity PSKs in a wireless network |
| [**getNetworkWirelessSsidSchedules()**](SsidsApi.md#getNetworkWirelessSsidSchedules) | **GET** /networks/{networkId}/wireless/ssids/{number}/schedules | List the outage schedule for the SSID |
| [**getNetworkWirelessSsidSplashSettings()**](SsidsApi.md#getNetworkWirelessSsidSplashSettings) | **GET** /networks/{networkId}/wireless/ssids/{number}/splash/settings | Display the splash page settings for the given SSID |
| [**getNetworkWirelessSsidTrafficShapingRules()**](SsidsApi.md#getNetworkWirelessSsidTrafficShapingRules) | **GET** /networks/{networkId}/wireless/ssids/{number}/trafficShaping/rules | Display the traffic shaping settings for a SSID on an MR network |
| [**getNetworkWirelessSsidVpn()**](SsidsApi.md#getNetworkWirelessSsidVpn) | **GET** /networks/{networkId}/wireless/ssids/{number}/vpn | List the VPN settings for the SSID. |
| [**getNetworkWirelessSsids()**](SsidsApi.md#getNetworkWirelessSsids) | **GET** /networks/{networkId}/wireless/ssids | List the MR SSIDs in a network |
| [**getOrganizationSummaryTopSsidsByUsage()**](SsidsApi.md#getOrganizationSummaryTopSsidsByUsage) | **GET** /organizations/{organizationId}/summary/top/ssids/byUsage | Return metrics for organization&#39;s top 10 ssids by data usage over given time range |
| [**getOrganizationWirelessSsidsFirewallIsolationAllowlistEntries()**](SsidsApi.md#getOrganizationWirelessSsidsFirewallIsolationAllowlistEntries) | **GET** /organizations/{organizationId}/wireless/ssids/firewall/isolation/allowlist/entries | List the L2 isolation allow list MAC entry in an organization |
| [**getOrganizationWirelessSsidsStatusesByDevice()**](SsidsApi.md#getOrganizationWirelessSsidsStatusesByDevice) | **GET** /organizations/{organizationId}/wireless/ssids/statuses/byDevice | List status information of all BSSIDs in your organization |
| [**updateNetworkApplianceSsid()**](SsidsApi.md#updateNetworkApplianceSsid) | **PUT** /networks/{networkId}/appliance/ssids/{number} | Update the attributes of an MX SSID |
| [**updateNetworkWirelessSsid()**](SsidsApi.md#updateNetworkWirelessSsid) | **PUT** /networks/{networkId}/wireless/ssids/{number} | Update the attributes of an MR SSID |
| [**updateNetworkWirelessSsidBonjourForwarding()**](SsidsApi.md#updateNetworkWirelessSsidBonjourForwarding) | **PUT** /networks/{networkId}/wireless/ssids/{number}/bonjourForwarding | Update the bonjour forwarding setting and rules for the SSID |
| [**updateNetworkWirelessSsidDeviceTypeGroupPolicies()**](SsidsApi.md#updateNetworkWirelessSsidDeviceTypeGroupPolicies) | **PUT** /networks/{networkId}/wireless/ssids/{number}/deviceTypeGroupPolicies | Update the device type group policies for the SSID |
| [**updateNetworkWirelessSsidEapOverride()**](SsidsApi.md#updateNetworkWirelessSsidEapOverride) | **PUT** /networks/{networkId}/wireless/ssids/{number}/eapOverride | Update the EAP overridden parameters for an SSID. |
| [**updateNetworkWirelessSsidFirewallL3FirewallRules()**](SsidsApi.md#updateNetworkWirelessSsidFirewallL3FirewallRules) | **PUT** /networks/{networkId}/wireless/ssids/{number}/firewall/l3FirewallRules | Update the L3 firewall rules of an SSID on an MR network |
| [**updateNetworkWirelessSsidFirewallL7FirewallRules()**](SsidsApi.md#updateNetworkWirelessSsidFirewallL7FirewallRules) | **PUT** /networks/{networkId}/wireless/ssids/{number}/firewall/l7FirewallRules | Update the L7 firewall rules of an SSID on an MR network |
| [**updateNetworkWirelessSsidHotspot20()**](SsidsApi.md#updateNetworkWirelessSsidHotspot20) | **PUT** /networks/{networkId}/wireless/ssids/{number}/hotspot20 | Update the Hotspot 2.0 settings of an SSID |
| [**updateNetworkWirelessSsidIdentityPsk()**](SsidsApi.md#updateNetworkWirelessSsidIdentityPsk) | **PUT** /networks/{networkId}/wireless/ssids/{number}/identityPsks/{identityPskId} | Update an Identity PSK |
| [**updateNetworkWirelessSsidSchedules()**](SsidsApi.md#updateNetworkWirelessSsidSchedules) | **PUT** /networks/{networkId}/wireless/ssids/{number}/schedules | Update the outage schedule for the SSID |
| [**updateNetworkWirelessSsidSplashSettings()**](SsidsApi.md#updateNetworkWirelessSsidSplashSettings) | **PUT** /networks/{networkId}/wireless/ssids/{number}/splash/settings | Modify the splash page settings for the given SSID |
| [**updateNetworkWirelessSsidTrafficShapingRules()**](SsidsApi.md#updateNetworkWirelessSsidTrafficShapingRules) | **PUT** /networks/{networkId}/wireless/ssids/{number}/trafficShaping/rules | Update the traffic shaping rules for an SSID on an MR network. |
| [**updateNetworkWirelessSsidVpn()**](SsidsApi.md#updateNetworkWirelessSsidVpn) | **PUT** /networks/{networkId}/wireless/ssids/{number}/vpn | Update the VPN settings for the SSID |
| [**updateOrganizationWirelessSsidsFirewallIsolationAllowlistEntry()**](SsidsApi.md#updateOrganizationWirelessSsidsFirewallIsolationAllowlistEntry) | **PUT** /organizations/{organizationId}/wireless/ssids/firewall/isolation/allowlist/entries/{entryId} | Update isolation allow list MAC entry info |


## `createNetworkWirelessSsidIdentityPsk()`

```php
createNetworkWirelessSsidIdentityPsk($network_id, $number, $create_network_wireless_ssid_identity_psk_request): \Meraki\Model\GetNetworkWirelessSsidIdentityPsks200ResponseInner
```

Create an Identity PSK

Create an Identity PSK

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$create_network_wireless_ssid_identity_psk_request = new \Meraki\Model\CreateNetworkWirelessSsidIdentityPskRequest(); // \Meraki\Model\CreateNetworkWirelessSsidIdentityPskRequest

try {
    $result = $apiInstance->createNetworkWirelessSsidIdentityPsk($network_id, $number, $create_network_wireless_ssid_identity_psk_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->createNetworkWirelessSsidIdentityPsk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **create_network_wireless_ssid_identity_psk_request** | [**\Meraki\Model\CreateNetworkWirelessSsidIdentityPskRequest**](../Model/CreateNetworkWirelessSsidIdentityPskRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidIdentityPsks200ResponseInner**](../Model/GetNetworkWirelessSsidIdentityPsks200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationWirelessSsidsFirewallIsolationAllowlistEntry()`

```php
createOrganizationWirelessSsidsFirewallIsolationAllowlistEntry($organization_id, $create_organization_wireless_ssids_firewall_isolation_allowlist_entry_request): \Meraki\Model\GetOrganizationWirelessSsidsFirewallIsolationAllowlistEntries200ResponseItemsInner
```

Create isolation allow list MAC entry for this organization

Create isolation allow list MAC entry for this organization

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_wireless_ssids_firewall_isolation_allowlist_entry_request = new \Meraki\Model\CreateOrganizationWirelessSsidsFirewallIsolationAllowlistEntryRequest(); // \Meraki\Model\CreateOrganizationWirelessSsidsFirewallIsolationAllowlistEntryRequest

try {
    $result = $apiInstance->createOrganizationWirelessSsidsFirewallIsolationAllowlistEntry($organization_id, $create_organization_wireless_ssids_firewall_isolation_allowlist_entry_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->createOrganizationWirelessSsidsFirewallIsolationAllowlistEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_wireless_ssids_firewall_isolation_allowlist_entry_request** | [**\Meraki\Model\CreateOrganizationWirelessSsidsFirewallIsolationAllowlistEntryRequest**](../Model/CreateOrganizationWirelessSsidsFirewallIsolationAllowlistEntryRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationWirelessSsidsFirewallIsolationAllowlistEntries200ResponseItemsInner**](../Model/GetOrganizationWirelessSsidsFirewallIsolationAllowlistEntries200ResponseItemsInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkWirelessSsidIdentityPsk()`

```php
deleteNetworkWirelessSsidIdentityPsk($network_id, $number, $identity_psk_id)
```

Delete an Identity PSK

Delete an Identity PSK

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$identity_psk_id = 'identity_psk_id_example'; // string | Identity psk ID

try {
    $apiInstance->deleteNetworkWirelessSsidIdentityPsk($network_id, $number, $identity_psk_id);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->deleteNetworkWirelessSsidIdentityPsk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **identity_psk_id** | **string**| Identity psk ID | |

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

## `deleteOrganizationWirelessSsidsFirewallIsolationAllowlistEntry()`

```php
deleteOrganizationWirelessSsidsFirewallIsolationAllowlistEntry($organization_id, $entry_id)
```

Destroy isolation allow list MAC entry for this organization

Destroy isolation allow list MAC entry for this organization

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$entry_id = 'entry_id_example'; // string | Entry ID

try {
    $apiInstance->deleteOrganizationWirelessSsidsFirewallIsolationAllowlistEntry($organization_id, $entry_id);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->deleteOrganizationWirelessSsidsFirewallIsolationAllowlistEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **entry_id** | **string**| Entry ID | |

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

## `getNetworkApplianceSsid()`

```php
getNetworkApplianceSsid($network_id, $number): \Meraki\Model\GetNetworkApplianceSsids200ResponseInner
```

Return a single MX SSID

Return a single MX SSID

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkApplianceSsid($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->getNetworkApplianceSsid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

[**\Meraki\Model\GetNetworkApplianceSsids200ResponseInner**](../Model/GetNetworkApplianceSsids200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceSsids()`

```php
getNetworkApplianceSsids($network_id): \Meraki\Model\GetNetworkApplianceSsids200ResponseInner[]
```

List the MX SSIDs in a network

List the MX SSIDs in a network

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceSsids($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->getNetworkApplianceSsids: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceSsids200ResponseInner[]**](../Model/GetNetworkApplianceSsids200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSsid()`

```php
getNetworkWirelessSsid($network_id, $number): \Meraki\Model\GetNetworkWirelessSsids200ResponseInner
```

Return a single MR SSID

Return a single MR SSID

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsid($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->getNetworkWirelessSsid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsids200ResponseInner**](../Model/GetNetworkWirelessSsids200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSsidBonjourForwarding()`

```php
getNetworkWirelessSsidBonjourForwarding($network_id, $number): \Meraki\Model\GetNetworkWirelessSsidBonjourForwarding200Response
```

List the Bonjour forwarding setting and rules for the SSID

List the Bonjour forwarding setting and rules for the SSID

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidBonjourForwarding($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->getNetworkWirelessSsidBonjourForwarding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidBonjourForwarding200Response**](../Model/GetNetworkWirelessSsidBonjourForwarding200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSsidDeviceTypeGroupPolicies()`

```php
getNetworkWirelessSsidDeviceTypeGroupPolicies($network_id, $number): object
```

List the device type group policies for the SSID

List the device type group policies for the SSID

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidDeviceTypeGroupPolicies($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->getNetworkWirelessSsidDeviceTypeGroupPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

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

## `getNetworkWirelessSsidEapOverride()`

```php
getNetworkWirelessSsidEapOverride($network_id, $number): \Meraki\Model\GetNetworkWirelessSsidEapOverride200Response
```

Return the EAP overridden parameters for an SSID

Return the EAP overridden parameters for an SSID

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidEapOverride($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->getNetworkWirelessSsidEapOverride: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidEapOverride200Response**](../Model/GetNetworkWirelessSsidEapOverride200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSsidFirewallL3FirewallRules()`

```php
getNetworkWirelessSsidFirewallL3FirewallRules($network_id, $number): \Meraki\Model\GetNetworkWirelessSsidFirewallL3FirewallRules200Response
```

Return the L3 firewall rules for an SSID on an MR network

Return the L3 firewall rules for an SSID on an MR network

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidFirewallL3FirewallRules($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->getNetworkWirelessSsidFirewallL3FirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidFirewallL3FirewallRules200Response**](../Model/GetNetworkWirelessSsidFirewallL3FirewallRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSsidFirewallL7FirewallRules()`

```php
getNetworkWirelessSsidFirewallL7FirewallRules($network_id, $number): \Meraki\Model\GetNetworkWirelessSsidFirewallL7FirewallRules200Response
```

Return the L7 firewall rules for an SSID on an MR network

Return the L7 firewall rules for an SSID on an MR network

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidFirewallL7FirewallRules($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->getNetworkWirelessSsidFirewallL7FirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidFirewallL7FirewallRules200Response**](../Model/GetNetworkWirelessSsidFirewallL7FirewallRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSsidHotspot20()`

```php
getNetworkWirelessSsidHotspot20($network_id, $number): object
```

Return the Hotspot 2.0 settings for an SSID

Return the Hotspot 2.0 settings for an SSID

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidHotspot20($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->getNetworkWirelessSsidHotspot20: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

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

## `getNetworkWirelessSsidIdentityPsk()`

```php
getNetworkWirelessSsidIdentityPsk($network_id, $number, $identity_psk_id): \Meraki\Model\GetNetworkWirelessSsidIdentityPsks200ResponseInner
```

Return an Identity PSK

Return an Identity PSK

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$identity_psk_id = 'identity_psk_id_example'; // string | Identity psk ID

try {
    $result = $apiInstance->getNetworkWirelessSsidIdentityPsk($network_id, $number, $identity_psk_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->getNetworkWirelessSsidIdentityPsk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **identity_psk_id** | **string**| Identity psk ID | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidIdentityPsks200ResponseInner**](../Model/GetNetworkWirelessSsidIdentityPsks200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSsidIdentityPsks()`

```php
getNetworkWirelessSsidIdentityPsks($network_id, $number): \Meraki\Model\GetNetworkWirelessSsidIdentityPsks200ResponseInner[]
```

List all Identity PSKs in a wireless network

List all Identity PSKs in a wireless network

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidIdentityPsks($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->getNetworkWirelessSsidIdentityPsks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidIdentityPsks200ResponseInner[]**](../Model/GetNetworkWirelessSsidIdentityPsks200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSsidSchedules()`

```php
getNetworkWirelessSsidSchedules($network_id, $number): \Meraki\Model\GetNetworkWirelessSsidSchedules200Response
```

List the outage schedule for the SSID

List the outage schedule for the SSID

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidSchedules($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->getNetworkWirelessSsidSchedules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidSchedules200Response**](../Model/GetNetworkWirelessSsidSchedules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSsidSplashSettings()`

```php
getNetworkWirelessSsidSplashSettings($network_id, $number): \Meraki\Model\GetNetworkWirelessSsidSplashSettings200Response
```

Display the splash page settings for the given SSID

Display the splash page settings for the given SSID

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidSplashSettings($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->getNetworkWirelessSsidSplashSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidSplashSettings200Response**](../Model/GetNetworkWirelessSsidSplashSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSsidTrafficShapingRules()`

```php
getNetworkWirelessSsidTrafficShapingRules($network_id, $number): \Meraki\Model\GetNetworkWirelessSsidTrafficShapingRules200Response
```

Display the traffic shaping settings for a SSID on an MR network

Display the traffic shaping settings for a SSID on an MR network

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidTrafficShapingRules($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->getNetworkWirelessSsidTrafficShapingRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidTrafficShapingRules200Response**](../Model/GetNetworkWirelessSsidTrafficShapingRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSsidVpn()`

```php
getNetworkWirelessSsidVpn($network_id, $number): object
```

List the VPN settings for the SSID.

List the VPN settings for the SSID.

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidVpn($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->getNetworkWirelessSsidVpn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

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

## `getNetworkWirelessSsids()`

```php
getNetworkWirelessSsids($network_id): \Meraki\Model\GetNetworkWirelessSsids200ResponseInner[]
```

List the MR SSIDs in a network

List the MR SSIDs in a network

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkWirelessSsids($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->getNetworkWirelessSsids: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsids200ResponseInner[]**](../Model/GetNetworkWirelessSsids200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSummaryTopSsidsByUsage()`

```php
getOrganizationSummaryTopSsidsByUsage($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationSummaryTopSsidsByUsage200ResponseInner[]
```

Return metrics for organization's top 10 ssids by data usage over given time range

Return metrics for organization's top 10 ssids by data usage over given time range. Default unit is megabytes.

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_tag = 'network_tag_example'; // string | Match result to an exact network tag
$device_tag = 'device_tag_example'; // string | Match result to an exact device tag
$quantity = 56; // int | Set number of desired results to return. Default is 10.
$ssid_name = 'ssid_name_example'; // string | Filter results by ssid name
$usage_uplink = 'usage_uplink_example'; // string | Filter results by usage uplink
$t0 = 't0_example'; // string | The beginning of the timespan for the data.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 186 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 8 hours and be less than or equal to 186 days. The default is 1 day.

try {
    $result = $apiInstance->getOrganizationSummaryTopSsidsByUsage($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->getOrganizationSummaryTopSsidsByUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_tag** | **string**| Match result to an exact network tag | [optional] |
| **device_tag** | **string**| Match result to an exact device tag | [optional] |
| **quantity** | **int**| Set number of desired results to return. Default is 10. | [optional] |
| **ssid_name** | **string**| Filter results by ssid name | [optional] |
| **usage_uplink** | **string**| Filter results by usage uplink | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 186 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 8 hours and be less than or equal to 186 days. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSummaryTopSsidsByUsage200ResponseInner[]**](../Model/GetOrganizationSummaryTopSsidsByUsage200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessSsidsFirewallIsolationAllowlistEntries()`

```php
getOrganizationWirelessSsidsFirewallIsolationAllowlistEntries($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $ssids): \Meraki\Model\GetOrganizationWirelessSsidsFirewallIsolationAllowlistEntries200Response
```

List the L2 isolation allow list MAC entry in an organization

List the L2 isolation allow list MAC entry in an organization

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | networkIds array to filter out results
$ssids = array(56); // int[] | ssids number array to filter out results

try {
    $result = $apiInstance->getOrganizationWirelessSsidsFirewallIsolationAllowlistEntries($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $ssids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->getOrganizationWirelessSsidsFirewallIsolationAllowlistEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| networkIds array to filter out results | [optional] |
| **ssids** | [**int[]**](../Model/int.md)| ssids number array to filter out results | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessSsidsFirewallIsolationAllowlistEntries200Response**](../Model/GetOrganizationWirelessSsidsFirewallIsolationAllowlistEntries200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessSsidsStatusesByDevice()`

```php
getOrganizationWirelessSsidsStatusesByDevice($organization_id, $network_ids, $serials, $bssids, $hide_disabled, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessSsidsStatusesByDevice200Response
```

List status information of all BSSIDs in your organization

List status information of all BSSIDs in your organization

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter the result set by the included set of network IDs
$serials = array('serials_example'); // string[] | A list of serial numbers. The returned devices will be filtered to only include these serials.
$bssids = array('bssids_example'); // string[] | A list of BSSIDs. The returned devices will be filtered to only include these BSSIDs.
$hide_disabled = True; // bool | If true, the returned devices will not include disabled SSIDs. (default: true)
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 500. Default is 100.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessSsidsStatusesByDevice($organization_id, $network_ids, $serials, $bssids, $hide_disabled, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->getOrganizationWirelessSsidsStatusesByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the result set by the included set of network IDs | [optional] |
| **serials** | [**string[]**](../Model/string.md)| A list of serial numbers. The returned devices will be filtered to only include these serials. | [optional] |
| **bssids** | [**string[]**](../Model/string.md)| A list of BSSIDs. The returned devices will be filtered to only include these BSSIDs. | [optional] |
| **hide_disabled** | **bool**| If true, the returned devices will not include disabled SSIDs. (default: true) | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 500. Default is 100. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessSsidsStatusesByDevice200Response**](../Model/GetOrganizationWirelessSsidsStatusesByDevice200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceSsid()`

```php
updateNetworkApplianceSsid($network_id, $number, $update_network_appliance_ssid_request): \Meraki\Model\GetNetworkApplianceSsids200ResponseInner
```

Update the attributes of an MX SSID

Update the attributes of an MX SSID

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_appliance_ssid_request = new \Meraki\Model\UpdateNetworkApplianceSsidRequest(); // \Meraki\Model\UpdateNetworkApplianceSsidRequest

try {
    $result = $apiInstance->updateNetworkApplianceSsid($network_id, $number, $update_network_appliance_ssid_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->updateNetworkApplianceSsid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_appliance_ssid_request** | [**\Meraki\Model\UpdateNetworkApplianceSsidRequest**](../Model/UpdateNetworkApplianceSsidRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceSsids200ResponseInner**](../Model/GetNetworkApplianceSsids200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessSsid()`

```php
updateNetworkWirelessSsid($network_id, $number, $update_network_wireless_ssid_request): \Meraki\Model\GetNetworkWirelessSsids200ResponseInner
```

Update the attributes of an MR SSID

Update the attributes of an MR SSID

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_request = new \Meraki\Model\UpdateNetworkWirelessSsidRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsid($network_id, $number, $update_network_wireless_ssid_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->updateNetworkWirelessSsid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidRequest**](../Model/UpdateNetworkWirelessSsidRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsids200ResponseInner**](../Model/GetNetworkWirelessSsids200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessSsidBonjourForwarding()`

```php
updateNetworkWirelessSsidBonjourForwarding($network_id, $number, $update_network_wireless_ssid_bonjour_forwarding_request): \Meraki\Model\GetNetworkWirelessSsidBonjourForwarding200Response
```

Update the bonjour forwarding setting and rules for the SSID

Update the bonjour forwarding setting and rules for the SSID

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_bonjour_forwarding_request = new \Meraki\Model\UpdateNetworkWirelessSsidBonjourForwardingRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidBonjourForwardingRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsidBonjourForwarding($network_id, $number, $update_network_wireless_ssid_bonjour_forwarding_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->updateNetworkWirelessSsidBonjourForwarding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_bonjour_forwarding_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidBonjourForwardingRequest**](../Model/UpdateNetworkWirelessSsidBonjourForwardingRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidBonjourForwarding200Response**](../Model/GetNetworkWirelessSsidBonjourForwarding200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessSsidDeviceTypeGroupPolicies()`

```php
updateNetworkWirelessSsidDeviceTypeGroupPolicies($network_id, $number, $update_network_wireless_ssid_device_type_group_policies_request): object
```

Update the device type group policies for the SSID

Update the device type group policies for the SSID

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_device_type_group_policies_request = new \Meraki\Model\UpdateNetworkWirelessSsidDeviceTypeGroupPoliciesRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidDeviceTypeGroupPoliciesRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsidDeviceTypeGroupPolicies($network_id, $number, $update_network_wireless_ssid_device_type_group_policies_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->updateNetworkWirelessSsidDeviceTypeGroupPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_device_type_group_policies_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidDeviceTypeGroupPoliciesRequest**](../Model/UpdateNetworkWirelessSsidDeviceTypeGroupPoliciesRequest.md)|  | [optional] |

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

## `updateNetworkWirelessSsidEapOverride()`

```php
updateNetworkWirelessSsidEapOverride($network_id, $number, $update_network_wireless_ssid_eap_override_request): \Meraki\Model\GetNetworkWirelessSsidEapOverride200Response
```

Update the EAP overridden parameters for an SSID.

Update the EAP overridden parameters for an SSID.

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_eap_override_request = new \Meraki\Model\UpdateNetworkWirelessSsidEapOverrideRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidEapOverrideRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsidEapOverride($network_id, $number, $update_network_wireless_ssid_eap_override_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->updateNetworkWirelessSsidEapOverride: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_eap_override_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidEapOverrideRequest**](../Model/UpdateNetworkWirelessSsidEapOverrideRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidEapOverride200Response**](../Model/GetNetworkWirelessSsidEapOverride200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessSsidFirewallL3FirewallRules()`

```php
updateNetworkWirelessSsidFirewallL3FirewallRules($network_id, $number, $update_network_wireless_ssid_firewall_l3_firewall_rules_request): \Meraki\Model\GetNetworkWirelessSsidFirewallL3FirewallRules200Response
```

Update the L3 firewall rules of an SSID on an MR network

Update the L3 firewall rules of an SSID on an MR network

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_firewall_l3_firewall_rules_request = new \Meraki\Model\UpdateNetworkWirelessSsidFirewallL3FirewallRulesRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidFirewallL3FirewallRulesRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsidFirewallL3FirewallRules($network_id, $number, $update_network_wireless_ssid_firewall_l3_firewall_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->updateNetworkWirelessSsidFirewallL3FirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_firewall_l3_firewall_rules_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidFirewallL3FirewallRulesRequest**](../Model/UpdateNetworkWirelessSsidFirewallL3FirewallRulesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidFirewallL3FirewallRules200Response**](../Model/GetNetworkWirelessSsidFirewallL3FirewallRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessSsidFirewallL7FirewallRules()`

```php
updateNetworkWirelessSsidFirewallL7FirewallRules($network_id, $number, $update_network_wireless_ssid_firewall_l7_firewall_rules_request): \Meraki\Model\GetNetworkWirelessSsidFirewallL7FirewallRules200Response
```

Update the L7 firewall rules of an SSID on an MR network

Update the L7 firewall rules of an SSID on an MR network

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_firewall_l7_firewall_rules_request = new \Meraki\Model\UpdateNetworkWirelessSsidFirewallL7FirewallRulesRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidFirewallL7FirewallRulesRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsidFirewallL7FirewallRules($network_id, $number, $update_network_wireless_ssid_firewall_l7_firewall_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->updateNetworkWirelessSsidFirewallL7FirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_firewall_l7_firewall_rules_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidFirewallL7FirewallRulesRequest**](../Model/UpdateNetworkWirelessSsidFirewallL7FirewallRulesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidFirewallL7FirewallRules200Response**](../Model/GetNetworkWirelessSsidFirewallL7FirewallRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessSsidHotspot20()`

```php
updateNetworkWirelessSsidHotspot20($network_id, $number, $update_network_wireless_ssid_hotspot20_request): object
```

Update the Hotspot 2.0 settings of an SSID

Update the Hotspot 2.0 settings of an SSID

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_hotspot20_request = new \Meraki\Model\UpdateNetworkWirelessSsidHotspot20Request(); // \Meraki\Model\UpdateNetworkWirelessSsidHotspot20Request

try {
    $result = $apiInstance->updateNetworkWirelessSsidHotspot20($network_id, $number, $update_network_wireless_ssid_hotspot20_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->updateNetworkWirelessSsidHotspot20: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_hotspot20_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidHotspot20Request**](../Model/UpdateNetworkWirelessSsidHotspot20Request.md)|  | [optional] |

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

## `updateNetworkWirelessSsidIdentityPsk()`

```php
updateNetworkWirelessSsidIdentityPsk($network_id, $number, $identity_psk_id, $update_network_wireless_ssid_identity_psk_request): \Meraki\Model\GetNetworkWirelessSsidIdentityPsks200ResponseInner
```

Update an Identity PSK

Update an Identity PSK

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$identity_psk_id = 'identity_psk_id_example'; // string | Identity psk ID
$update_network_wireless_ssid_identity_psk_request = new \Meraki\Model\UpdateNetworkWirelessSsidIdentityPskRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidIdentityPskRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsidIdentityPsk($network_id, $number, $identity_psk_id, $update_network_wireless_ssid_identity_psk_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->updateNetworkWirelessSsidIdentityPsk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **identity_psk_id** | **string**| Identity psk ID | |
| **update_network_wireless_ssid_identity_psk_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidIdentityPskRequest**](../Model/UpdateNetworkWirelessSsidIdentityPskRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidIdentityPsks200ResponseInner**](../Model/GetNetworkWirelessSsidIdentityPsks200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessSsidSchedules()`

```php
updateNetworkWirelessSsidSchedules($network_id, $number, $update_network_wireless_ssid_schedules_request): \Meraki\Model\GetNetworkWirelessSsidSchedules200Response
```

Update the outage schedule for the SSID

Update the outage schedule for the SSID

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_schedules_request = new \Meraki\Model\UpdateNetworkWirelessSsidSchedulesRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidSchedulesRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsidSchedules($network_id, $number, $update_network_wireless_ssid_schedules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->updateNetworkWirelessSsidSchedules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_schedules_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidSchedulesRequest**](../Model/UpdateNetworkWirelessSsidSchedulesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidSchedules200Response**](../Model/GetNetworkWirelessSsidSchedules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessSsidSplashSettings()`

```php
updateNetworkWirelessSsidSplashSettings($network_id, $number, $update_network_wireless_ssid_splash_settings_request): \Meraki\Model\GetNetworkWirelessSsidSplashSettings200Response
```

Modify the splash page settings for the given SSID

Modify the splash page settings for the given SSID

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_splash_settings_request = new \Meraki\Model\UpdateNetworkWirelessSsidSplashSettingsRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidSplashSettingsRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsidSplashSettings($network_id, $number, $update_network_wireless_ssid_splash_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->updateNetworkWirelessSsidSplashSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_splash_settings_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidSplashSettingsRequest**](../Model/UpdateNetworkWirelessSsidSplashSettingsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidSplashSettings200Response**](../Model/GetNetworkWirelessSsidSplashSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessSsidTrafficShapingRules()`

```php
updateNetworkWirelessSsidTrafficShapingRules($network_id, $number, $update_network_wireless_ssid_traffic_shaping_rules_request): \Meraki\Model\GetNetworkWirelessSsidTrafficShapingRules200Response
```

Update the traffic shaping rules for an SSID on an MR network.

Update the traffic shaping rules for an SSID on an MR network.

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_traffic_shaping_rules_request = new \Meraki\Model\UpdateNetworkWirelessSsidTrafficShapingRulesRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidTrafficShapingRulesRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsidTrafficShapingRules($network_id, $number, $update_network_wireless_ssid_traffic_shaping_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->updateNetworkWirelessSsidTrafficShapingRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_traffic_shaping_rules_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidTrafficShapingRulesRequest**](../Model/UpdateNetworkWirelessSsidTrafficShapingRulesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidTrafficShapingRules200Response**](../Model/GetNetworkWirelessSsidTrafficShapingRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessSsidVpn()`

```php
updateNetworkWirelessSsidVpn($network_id, $number, $update_network_wireless_ssid_vpn_request): object
```

Update the VPN settings for the SSID

Update the VPN settings for the SSID

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_vpn_request = new \Meraki\Model\UpdateNetworkWirelessSsidVpnRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidVpnRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsidVpn($network_id, $number, $update_network_wireless_ssid_vpn_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->updateNetworkWirelessSsidVpn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_vpn_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidVpnRequest**](../Model/UpdateNetworkWirelessSsidVpnRequest.md)|  | [optional] |

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

## `updateOrganizationWirelessSsidsFirewallIsolationAllowlistEntry()`

```php
updateOrganizationWirelessSsidsFirewallIsolationAllowlistEntry($organization_id, $entry_id, $update_organization_wireless_ssids_firewall_isolation_allowlist_entry_request): \Meraki\Model\GetOrganizationWirelessSsidsFirewallIsolationAllowlistEntries200ResponseItemsInner
```

Update isolation allow list MAC entry info

Update isolation allow list MAC entry info

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


$apiInstance = new Meraki\Api\SsidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$entry_id = 'entry_id_example'; // string | Entry ID
$update_organization_wireless_ssids_firewall_isolation_allowlist_entry_request = new \Meraki\Model\UpdateOrganizationWirelessSsidsFirewallIsolationAllowlistEntryRequest(); // \Meraki\Model\UpdateOrganizationWirelessSsidsFirewallIsolationAllowlistEntryRequest

try {
    $result = $apiInstance->updateOrganizationWirelessSsidsFirewallIsolationAllowlistEntry($organization_id, $entry_id, $update_organization_wireless_ssids_firewall_isolation_allowlist_entry_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsidsApi->updateOrganizationWirelessSsidsFirewallIsolationAllowlistEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **entry_id** | **string**| Entry ID | |
| **update_organization_wireless_ssids_firewall_isolation_allowlist_entry_request** | [**\Meraki\Model\UpdateOrganizationWirelessSsidsFirewallIsolationAllowlistEntryRequest**](../Model/UpdateOrganizationWirelessSsidsFirewallIsolationAllowlistEntryRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessSsidsFirewallIsolationAllowlistEntries200ResponseItemsInner**](../Model/GetOrganizationWirelessSsidsFirewallIsolationAllowlistEntries200ResponseItemsInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
