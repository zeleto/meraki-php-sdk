# Meraki\FirewallApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrganizationWirelessSsidsFirewallIsolationAllowlistEntry()**](FirewallApi.md#createOrganizationWirelessSsidsFirewallIsolationAllowlistEntry) | **POST** /organizations/{organizationId}/wireless/ssids/firewall/isolation/allowlist/entries | Create isolation allow list MAC entry for this organization |
| [**deleteOrganizationWirelessSsidsFirewallIsolationAllowlistEntry()**](FirewallApi.md#deleteOrganizationWirelessSsidsFirewallIsolationAllowlistEntry) | **DELETE** /organizations/{organizationId}/wireless/ssids/firewall/isolation/allowlist/entries/{entryId} | Destroy isolation allow list MAC entry for this organization |
| [**getNetworkApplianceFirewallCellularFirewallRules()**](FirewallApi.md#getNetworkApplianceFirewallCellularFirewallRules) | **GET** /networks/{networkId}/appliance/firewall/cellularFirewallRules | Return the cellular firewall rules for an MX network |
| [**getNetworkApplianceFirewallFirewalledService()**](FirewallApi.md#getNetworkApplianceFirewallFirewalledService) | **GET** /networks/{networkId}/appliance/firewall/firewalledServices/{service} | Return the accessibility settings of the given service (&#39;ICMP&#39;, &#39;web&#39;, or &#39;SNMP&#39;) |
| [**getNetworkApplianceFirewallFirewalledServices()**](FirewallApi.md#getNetworkApplianceFirewallFirewalledServices) | **GET** /networks/{networkId}/appliance/firewall/firewalledServices | List the appliance services and their accessibility rules |
| [**getNetworkApplianceFirewallInboundCellularFirewallRules()**](FirewallApi.md#getNetworkApplianceFirewallInboundCellularFirewallRules) | **GET** /networks/{networkId}/appliance/firewall/inboundCellularFirewallRules | Return the inbound cellular firewall rules for an MX network |
| [**getNetworkApplianceFirewallInboundFirewallRules()**](FirewallApi.md#getNetworkApplianceFirewallInboundFirewallRules) | **GET** /networks/{networkId}/appliance/firewall/inboundFirewallRules | Return the inbound firewall rules for an MX network |
| [**getNetworkApplianceFirewallL3FirewallRules()**](FirewallApi.md#getNetworkApplianceFirewallL3FirewallRules) | **GET** /networks/{networkId}/appliance/firewall/l3FirewallRules | Return the L3 firewall rules for an MX network |
| [**getNetworkApplianceFirewallL7FirewallRules()**](FirewallApi.md#getNetworkApplianceFirewallL7FirewallRules) | **GET** /networks/{networkId}/appliance/firewall/l7FirewallRules | List the MX L7 firewall rules for an MX network |
| [**getNetworkApplianceFirewallL7FirewallRulesApplicationCategories()**](FirewallApi.md#getNetworkApplianceFirewallL7FirewallRulesApplicationCategories) | **GET** /networks/{networkId}/appliance/firewall/l7FirewallRules/applicationCategories | Return the L7 firewall application categories and their associated applications for an MX network |
| [**getNetworkApplianceFirewallOneToManyNatRules()**](FirewallApi.md#getNetworkApplianceFirewallOneToManyNatRules) | **GET** /networks/{networkId}/appliance/firewall/oneToManyNatRules | Return the 1:Many NAT mapping rules for an MX network |
| [**getNetworkApplianceFirewallOneToOneNatRules()**](FirewallApi.md#getNetworkApplianceFirewallOneToOneNatRules) | **GET** /networks/{networkId}/appliance/firewall/oneToOneNatRules | Return the 1:1 NAT mapping rules for an MX network |
| [**getNetworkApplianceFirewallPortForwardingRules()**](FirewallApi.md#getNetworkApplianceFirewallPortForwardingRules) | **GET** /networks/{networkId}/appliance/firewall/portForwardingRules | Return the port forwarding rules for an MX network |
| [**getNetworkApplianceFirewallSettings()**](FirewallApi.md#getNetworkApplianceFirewallSettings) | **GET** /networks/{networkId}/appliance/firewall/settings | Return the firewall settings for this network |
| [**getNetworkWirelessSsidFirewallL3FirewallRules()**](FirewallApi.md#getNetworkWirelessSsidFirewallL3FirewallRules) | **GET** /networks/{networkId}/wireless/ssids/{number}/firewall/l3FirewallRules | Return the L3 firewall rules for an SSID on an MR network |
| [**getNetworkWirelessSsidFirewallL7FirewallRules()**](FirewallApi.md#getNetworkWirelessSsidFirewallL7FirewallRules) | **GET** /networks/{networkId}/wireless/ssids/{number}/firewall/l7FirewallRules | Return the L7 firewall rules for an SSID on an MR network |
| [**getOrganizationApplianceFirewallMulticastForwardingByNetwork()**](FirewallApi.md#getOrganizationApplianceFirewallMulticastForwardingByNetwork) | **GET** /organizations/{organizationId}/appliance/firewall/multicastForwarding/byNetwork | List Static Multicasting forwarding settings for MX networks |
| [**getOrganizationWirelessSsidsFirewallIsolationAllowlistEntries()**](FirewallApi.md#getOrganizationWirelessSsidsFirewallIsolationAllowlistEntries) | **GET** /organizations/{organizationId}/wireless/ssids/firewall/isolation/allowlist/entries | List the L2 isolation allow list MAC entry in an organization |
| [**updateNetworkApplianceFirewallCellularFirewallRules()**](FirewallApi.md#updateNetworkApplianceFirewallCellularFirewallRules) | **PUT** /networks/{networkId}/appliance/firewall/cellularFirewallRules | Update the cellular firewall rules of an MX network |
| [**updateNetworkApplianceFirewallFirewalledService()**](FirewallApi.md#updateNetworkApplianceFirewallFirewalledService) | **PUT** /networks/{networkId}/appliance/firewall/firewalledServices/{service} | Updates the accessibility settings for the given service (&#39;ICMP&#39;, &#39;web&#39;, or &#39;SNMP&#39;) |
| [**updateNetworkApplianceFirewallInboundCellularFirewallRules()**](FirewallApi.md#updateNetworkApplianceFirewallInboundCellularFirewallRules) | **PUT** /networks/{networkId}/appliance/firewall/inboundCellularFirewallRules | Update the inbound cellular firewall rules of an MX network |
| [**updateNetworkApplianceFirewallInboundFirewallRules()**](FirewallApi.md#updateNetworkApplianceFirewallInboundFirewallRules) | **PUT** /networks/{networkId}/appliance/firewall/inboundFirewallRules | Update the inbound firewall rules of an MX network |
| [**updateNetworkApplianceFirewallL3FirewallRules()**](FirewallApi.md#updateNetworkApplianceFirewallL3FirewallRules) | **PUT** /networks/{networkId}/appliance/firewall/l3FirewallRules | Update the L3 firewall rules of an MX network |
| [**updateNetworkApplianceFirewallL7FirewallRules()**](FirewallApi.md#updateNetworkApplianceFirewallL7FirewallRules) | **PUT** /networks/{networkId}/appliance/firewall/l7FirewallRules | Update the MX L7 firewall rules for an MX network |
| [**updateNetworkApplianceFirewallMulticastForwarding()**](FirewallApi.md#updateNetworkApplianceFirewallMulticastForwarding) | **PUT** /networks/{networkId}/appliance/firewall/multicastForwarding | Update static multicast forward rules for a network |
| [**updateNetworkApplianceFirewallOneToManyNatRules()**](FirewallApi.md#updateNetworkApplianceFirewallOneToManyNatRules) | **PUT** /networks/{networkId}/appliance/firewall/oneToManyNatRules | Set the 1:Many NAT mapping rules for an MX network |
| [**updateNetworkApplianceFirewallOneToOneNatRules()**](FirewallApi.md#updateNetworkApplianceFirewallOneToOneNatRules) | **PUT** /networks/{networkId}/appliance/firewall/oneToOneNatRules | Set the 1:1 NAT mapping rules for an MX network |
| [**updateNetworkApplianceFirewallPortForwardingRules()**](FirewallApi.md#updateNetworkApplianceFirewallPortForwardingRules) | **PUT** /networks/{networkId}/appliance/firewall/portForwardingRules | Update the port forwarding rules for an MX network |
| [**updateNetworkApplianceFirewallSettings()**](FirewallApi.md#updateNetworkApplianceFirewallSettings) | **PUT** /networks/{networkId}/appliance/firewall/settings | Update the firewall settings for this network |
| [**updateNetworkWirelessSsidFirewallL3FirewallRules()**](FirewallApi.md#updateNetworkWirelessSsidFirewallL3FirewallRules) | **PUT** /networks/{networkId}/wireless/ssids/{number}/firewall/l3FirewallRules | Update the L3 firewall rules of an SSID on an MR network |
| [**updateNetworkWirelessSsidFirewallL7FirewallRules()**](FirewallApi.md#updateNetworkWirelessSsidFirewallL7FirewallRules) | **PUT** /networks/{networkId}/wireless/ssids/{number}/firewall/l7FirewallRules | Update the L7 firewall rules of an SSID on an MR network |
| [**updateOrganizationWirelessSsidsFirewallIsolationAllowlistEntry()**](FirewallApi.md#updateOrganizationWirelessSsidsFirewallIsolationAllowlistEntry) | **PUT** /organizations/{organizationId}/wireless/ssids/firewall/isolation/allowlist/entries/{entryId} | Update isolation allow list MAC entry info |


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


$apiInstance = new Meraki\Api\FirewallApi(
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
    echo 'Exception when calling FirewallApi->createOrganizationWirelessSsidsFirewallIsolationAllowlistEntry: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\FirewallApi(
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
    echo 'Exception when calling FirewallApi->deleteOrganizationWirelessSsidsFirewallIsolationAllowlistEntry: ', $e->getMessage(), PHP_EOL;
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

## `getNetworkApplianceFirewallCellularFirewallRules()`

```php
getNetworkApplianceFirewallCellularFirewallRules($network_id): object
```

Return the cellular firewall rules for an MX network

Return the cellular firewall rules for an MX network

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


$apiInstance = new Meraki\Api\FirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceFirewallCellularFirewallRules($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallApi->getNetworkApplianceFirewallCellularFirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

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

## `getNetworkApplianceFirewallFirewalledService()`

```php
getNetworkApplianceFirewallFirewalledService($network_id, $service): \Meraki\Model\GetNetworkApplianceFirewallFirewalledServices200ResponseInner
```

Return the accessibility settings of the given service ('ICMP', 'web', or 'SNMP')

Return the accessibility settings of the given service ('ICMP', 'web', or 'SNMP')

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


$apiInstance = new Meraki\Api\FirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$service = 'service_example'; // string | Service

try {
    $result = $apiInstance->getNetworkApplianceFirewallFirewalledService($network_id, $service);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallApi->getNetworkApplianceFirewallFirewalledService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **service** | **string**| Service | |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallFirewalledServices200ResponseInner**](../Model/GetNetworkApplianceFirewallFirewalledServices200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceFirewallFirewalledServices()`

```php
getNetworkApplianceFirewallFirewalledServices($network_id): \Meraki\Model\GetNetworkApplianceFirewallFirewalledServices200ResponseInner[]
```

List the appliance services and their accessibility rules

List the appliance services and their accessibility rules

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


$apiInstance = new Meraki\Api\FirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceFirewallFirewalledServices($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallApi->getNetworkApplianceFirewallFirewalledServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallFirewalledServices200ResponseInner[]**](../Model/GetNetworkApplianceFirewallFirewalledServices200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceFirewallInboundCellularFirewallRules()`

```php
getNetworkApplianceFirewallInboundCellularFirewallRules($network_id): \Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response
```

Return the inbound cellular firewall rules for an MX network

Return the inbound cellular firewall rules for an MX network

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


$apiInstance = new Meraki\Api\FirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceFirewallInboundCellularFirewallRules($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallApi->getNetworkApplianceFirewallInboundCellularFirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response**](../Model/GetNetworkApplianceFirewallInboundCellularFirewallRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceFirewallInboundFirewallRules()`

```php
getNetworkApplianceFirewallInboundFirewallRules($network_id): \Meraki\Model\GetNetworkApplianceFirewallInboundFirewallRules200Response
```

Return the inbound firewall rules for an MX network

Return the inbound firewall rules for an MX network

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


$apiInstance = new Meraki\Api\FirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceFirewallInboundFirewallRules($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallApi->getNetworkApplianceFirewallInboundFirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallInboundFirewallRules200Response**](../Model/GetNetworkApplianceFirewallInboundFirewallRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceFirewallL3FirewallRules()`

```php
getNetworkApplianceFirewallL3FirewallRules($network_id): object
```

Return the L3 firewall rules for an MX network

Return the L3 firewall rules for an MX network

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


$apiInstance = new Meraki\Api\FirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceFirewallL3FirewallRules($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallApi->getNetworkApplianceFirewallL3FirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

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

## `getNetworkApplianceFirewallL7FirewallRules()`

```php
getNetworkApplianceFirewallL7FirewallRules($network_id): object
```

List the MX L7 firewall rules for an MX network

List the MX L7 firewall rules for an MX network

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


$apiInstance = new Meraki\Api\FirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceFirewallL7FirewallRules($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallApi->getNetworkApplianceFirewallL7FirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

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

## `getNetworkApplianceFirewallL7FirewallRulesApplicationCategories()`

```php
getNetworkApplianceFirewallL7FirewallRulesApplicationCategories($network_id): \Meraki\Model\GetNetworkApplianceFirewallL7FirewallRulesApplicationCategories200Response
```

Return the L7 firewall application categories and their associated applications for an MX network

Return the L7 firewall application categories and their associated applications for an MX network

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


$apiInstance = new Meraki\Api\FirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceFirewallL7FirewallRulesApplicationCategories($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallApi->getNetworkApplianceFirewallL7FirewallRulesApplicationCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallL7FirewallRulesApplicationCategories200Response**](../Model/GetNetworkApplianceFirewallL7FirewallRulesApplicationCategories200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceFirewallOneToManyNatRules()`

```php
getNetworkApplianceFirewallOneToManyNatRules($network_id): object
```

Return the 1:Many NAT mapping rules for an MX network

Return the 1:Many NAT mapping rules for an MX network

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


$apiInstance = new Meraki\Api\FirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceFirewallOneToManyNatRules($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallApi->getNetworkApplianceFirewallOneToManyNatRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

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

## `getNetworkApplianceFirewallOneToOneNatRules()`

```php
getNetworkApplianceFirewallOneToOneNatRules($network_id): object
```

Return the 1:1 NAT mapping rules for an MX network

Return the 1:1 NAT mapping rules for an MX network

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


$apiInstance = new Meraki\Api\FirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceFirewallOneToOneNatRules($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallApi->getNetworkApplianceFirewallOneToOneNatRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

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

## `getNetworkApplianceFirewallPortForwardingRules()`

```php
getNetworkApplianceFirewallPortForwardingRules($network_id): \Meraki\Model\GetNetworkApplianceFirewallPortForwardingRules200Response
```

Return the port forwarding rules for an MX network

Return the port forwarding rules for an MX network

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


$apiInstance = new Meraki\Api\FirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceFirewallPortForwardingRules($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallApi->getNetworkApplianceFirewallPortForwardingRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallPortForwardingRules200Response**](../Model/GetNetworkApplianceFirewallPortForwardingRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceFirewallSettings()`

```php
getNetworkApplianceFirewallSettings($network_id): object
```

Return the firewall settings for this network

Return the firewall settings for this network

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


$apiInstance = new Meraki\Api\FirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceFirewallSettings($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallApi->getNetworkApplianceFirewallSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

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


$apiInstance = new Meraki\Api\FirewallApi(
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
    echo 'Exception when calling FirewallApi->getNetworkWirelessSsidFirewallL3FirewallRules: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\FirewallApi(
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
    echo 'Exception when calling FirewallApi->getNetworkWirelessSsidFirewallL7FirewallRules: ', $e->getMessage(), PHP_EOL;
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

## `getOrganizationApplianceFirewallMulticastForwardingByNetwork()`

```php
getOrganizationApplianceFirewallMulticastForwardingByNetwork($organization_id, $per_page, $starting_after, $ending_before, $network_ids): \Meraki\Model\GetOrganizationApplianceFirewallMulticastForwardingByNetwork200Response
```

List Static Multicasting forwarding settings for MX networks

List Static Multicasting forwarding settings for MX networks

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


$apiInstance = new Meraki\Api\FirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter the results by network IDs

try {
    $result = $apiInstance->getOrganizationApplianceFirewallMulticastForwardingByNetwork($organization_id, $per_page, $starting_after, $ending_before, $network_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallApi->getOrganizationApplianceFirewallMulticastForwardingByNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the results by network IDs | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApplianceFirewallMulticastForwardingByNetwork200Response**](../Model/GetOrganizationApplianceFirewallMulticastForwardingByNetwork200Response.md)

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


$apiInstance = new Meraki\Api\FirewallApi(
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
    echo 'Exception when calling FirewallApi->getOrganizationWirelessSsidsFirewallIsolationAllowlistEntries: ', $e->getMessage(), PHP_EOL;
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

## `updateNetworkApplianceFirewallCellularFirewallRules()`

```php
updateNetworkApplianceFirewallCellularFirewallRules($network_id, $update_network_appliance_firewall_cellular_firewall_rules_request): object
```

Update the cellular firewall rules of an MX network

Update the cellular firewall rules of an MX network

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


$apiInstance = new Meraki\Api\FirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_firewall_cellular_firewall_rules_request = new \Meraki\Model\UpdateNetworkApplianceFirewallCellularFirewallRulesRequest(); // \Meraki\Model\UpdateNetworkApplianceFirewallCellularFirewallRulesRequest

try {
    $result = $apiInstance->updateNetworkApplianceFirewallCellularFirewallRules($network_id, $update_network_appliance_firewall_cellular_firewall_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallApi->updateNetworkApplianceFirewallCellularFirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_firewall_cellular_firewall_rules_request** | [**\Meraki\Model\UpdateNetworkApplianceFirewallCellularFirewallRulesRequest**](../Model/UpdateNetworkApplianceFirewallCellularFirewallRulesRequest.md)|  | [optional] |

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

## `updateNetworkApplianceFirewallFirewalledService()`

```php
updateNetworkApplianceFirewallFirewalledService($network_id, $service, $update_network_appliance_firewall_firewalled_service_request): \Meraki\Model\GetNetworkApplianceFirewallFirewalledServices200ResponseInner
```

Updates the accessibility settings for the given service ('ICMP', 'web', or 'SNMP')

Updates the accessibility settings for the given service ('ICMP', 'web', or 'SNMP')

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


$apiInstance = new Meraki\Api\FirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$service = 'service_example'; // string | Service
$update_network_appliance_firewall_firewalled_service_request = new \Meraki\Model\UpdateNetworkApplianceFirewallFirewalledServiceRequest(); // \Meraki\Model\UpdateNetworkApplianceFirewallFirewalledServiceRequest

try {
    $result = $apiInstance->updateNetworkApplianceFirewallFirewalledService($network_id, $service, $update_network_appliance_firewall_firewalled_service_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallApi->updateNetworkApplianceFirewallFirewalledService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **service** | **string**| Service | |
| **update_network_appliance_firewall_firewalled_service_request** | [**\Meraki\Model\UpdateNetworkApplianceFirewallFirewalledServiceRequest**](../Model/UpdateNetworkApplianceFirewallFirewalledServiceRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallFirewalledServices200ResponseInner**](../Model/GetNetworkApplianceFirewallFirewalledServices200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceFirewallInboundCellularFirewallRules()`

```php
updateNetworkApplianceFirewallInboundCellularFirewallRules($network_id, $update_network_appliance_firewall_inbound_cellular_firewall_rules_request): \Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response
```

Update the inbound cellular firewall rules of an MX network

Update the inbound cellular firewall rules of an MX network

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


$apiInstance = new Meraki\Api\FirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_firewall_inbound_cellular_firewall_rules_request = new \Meraki\Model\UpdateNetworkApplianceFirewallInboundCellularFirewallRulesRequest(); // \Meraki\Model\UpdateNetworkApplianceFirewallInboundCellularFirewallRulesRequest

try {
    $result = $apiInstance->updateNetworkApplianceFirewallInboundCellularFirewallRules($network_id, $update_network_appliance_firewall_inbound_cellular_firewall_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallApi->updateNetworkApplianceFirewallInboundCellularFirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_firewall_inbound_cellular_firewall_rules_request** | [**\Meraki\Model\UpdateNetworkApplianceFirewallInboundCellularFirewallRulesRequest**](../Model/UpdateNetworkApplianceFirewallInboundCellularFirewallRulesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response**](../Model/GetNetworkApplianceFirewallInboundCellularFirewallRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceFirewallInboundFirewallRules()`

```php
updateNetworkApplianceFirewallInboundFirewallRules($network_id, $update_network_appliance_firewall_inbound_firewall_rules_request): \Meraki\Model\GetNetworkApplianceFirewallInboundFirewallRules200Response
```

Update the inbound firewall rules of an MX network

Update the inbound firewall rules of an MX network

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


$apiInstance = new Meraki\Api\FirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_firewall_inbound_firewall_rules_request = new \Meraki\Model\UpdateNetworkApplianceFirewallInboundFirewallRulesRequest(); // \Meraki\Model\UpdateNetworkApplianceFirewallInboundFirewallRulesRequest

try {
    $result = $apiInstance->updateNetworkApplianceFirewallInboundFirewallRules($network_id, $update_network_appliance_firewall_inbound_firewall_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallApi->updateNetworkApplianceFirewallInboundFirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_firewall_inbound_firewall_rules_request** | [**\Meraki\Model\UpdateNetworkApplianceFirewallInboundFirewallRulesRequest**](../Model/UpdateNetworkApplianceFirewallInboundFirewallRulesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallInboundFirewallRules200Response**](../Model/GetNetworkApplianceFirewallInboundFirewallRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceFirewallL3FirewallRules()`

```php
updateNetworkApplianceFirewallL3FirewallRules($network_id, $update_network_appliance_firewall_l3_firewall_rules_request): object
```

Update the L3 firewall rules of an MX network

Update the L3 firewall rules of an MX network

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


$apiInstance = new Meraki\Api\FirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_firewall_l3_firewall_rules_request = new \Meraki\Model\UpdateNetworkApplianceFirewallL3FirewallRulesRequest(); // \Meraki\Model\UpdateNetworkApplianceFirewallL3FirewallRulesRequest

try {
    $result = $apiInstance->updateNetworkApplianceFirewallL3FirewallRules($network_id, $update_network_appliance_firewall_l3_firewall_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallApi->updateNetworkApplianceFirewallL3FirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_firewall_l3_firewall_rules_request** | [**\Meraki\Model\UpdateNetworkApplianceFirewallL3FirewallRulesRequest**](../Model/UpdateNetworkApplianceFirewallL3FirewallRulesRequest.md)|  | [optional] |

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

## `updateNetworkApplianceFirewallL7FirewallRules()`

```php
updateNetworkApplianceFirewallL7FirewallRules($network_id, $update_network_appliance_firewall_l7_firewall_rules_request): object
```

Update the MX L7 firewall rules for an MX network

Update the MX L7 firewall rules for an MX network

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


$apiInstance = new Meraki\Api\FirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_firewall_l7_firewall_rules_request = new \Meraki\Model\UpdateNetworkApplianceFirewallL7FirewallRulesRequest(); // \Meraki\Model\UpdateNetworkApplianceFirewallL7FirewallRulesRequest

try {
    $result = $apiInstance->updateNetworkApplianceFirewallL7FirewallRules($network_id, $update_network_appliance_firewall_l7_firewall_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallApi->updateNetworkApplianceFirewallL7FirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_firewall_l7_firewall_rules_request** | [**\Meraki\Model\UpdateNetworkApplianceFirewallL7FirewallRulesRequest**](../Model/UpdateNetworkApplianceFirewallL7FirewallRulesRequest.md)|  | [optional] |

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

## `updateNetworkApplianceFirewallMulticastForwarding()`

```php
updateNetworkApplianceFirewallMulticastForwarding($network_id, $update_network_appliance_firewall_multicast_forwarding_request): \Meraki\Model\UpdateNetworkApplianceFirewallMulticastForwarding200Response
```

Update static multicast forward rules for a network

Update static multicast forward rules for a network

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


$apiInstance = new Meraki\Api\FirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_firewall_multicast_forwarding_request = new \Meraki\Model\UpdateNetworkApplianceFirewallMulticastForwardingRequest(); // \Meraki\Model\UpdateNetworkApplianceFirewallMulticastForwardingRequest

try {
    $result = $apiInstance->updateNetworkApplianceFirewallMulticastForwarding($network_id, $update_network_appliance_firewall_multicast_forwarding_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallApi->updateNetworkApplianceFirewallMulticastForwarding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_firewall_multicast_forwarding_request** | [**\Meraki\Model\UpdateNetworkApplianceFirewallMulticastForwardingRequest**](../Model/UpdateNetworkApplianceFirewallMulticastForwardingRequest.md)|  | |

### Return type

[**\Meraki\Model\UpdateNetworkApplianceFirewallMulticastForwarding200Response**](../Model/UpdateNetworkApplianceFirewallMulticastForwarding200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceFirewallOneToManyNatRules()`

```php
updateNetworkApplianceFirewallOneToManyNatRules($network_id, $update_network_appliance_firewall_one_to_many_nat_rules_request): object
```

Set the 1:Many NAT mapping rules for an MX network

Set the 1:Many NAT mapping rules for an MX network

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


$apiInstance = new Meraki\Api\FirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_firewall_one_to_many_nat_rules_request = new \Meraki\Model\UpdateNetworkApplianceFirewallOneToManyNatRulesRequest(); // \Meraki\Model\UpdateNetworkApplianceFirewallOneToManyNatRulesRequest

try {
    $result = $apiInstance->updateNetworkApplianceFirewallOneToManyNatRules($network_id, $update_network_appliance_firewall_one_to_many_nat_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallApi->updateNetworkApplianceFirewallOneToManyNatRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_firewall_one_to_many_nat_rules_request** | [**\Meraki\Model\UpdateNetworkApplianceFirewallOneToManyNatRulesRequest**](../Model/UpdateNetworkApplianceFirewallOneToManyNatRulesRequest.md)|  | |

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

## `updateNetworkApplianceFirewallOneToOneNatRules()`

```php
updateNetworkApplianceFirewallOneToOneNatRules($network_id, $update_network_appliance_firewall_one_to_one_nat_rules_request): object
```

Set the 1:1 NAT mapping rules for an MX network

Set the 1:1 NAT mapping rules for an MX network

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


$apiInstance = new Meraki\Api\FirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_firewall_one_to_one_nat_rules_request = new \Meraki\Model\UpdateNetworkApplianceFirewallOneToOneNatRulesRequest(); // \Meraki\Model\UpdateNetworkApplianceFirewallOneToOneNatRulesRequest

try {
    $result = $apiInstance->updateNetworkApplianceFirewallOneToOneNatRules($network_id, $update_network_appliance_firewall_one_to_one_nat_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallApi->updateNetworkApplianceFirewallOneToOneNatRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_firewall_one_to_one_nat_rules_request** | [**\Meraki\Model\UpdateNetworkApplianceFirewallOneToOneNatRulesRequest**](../Model/UpdateNetworkApplianceFirewallOneToOneNatRulesRequest.md)|  | |

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

## `updateNetworkApplianceFirewallPortForwardingRules()`

```php
updateNetworkApplianceFirewallPortForwardingRules($network_id, $update_network_appliance_firewall_port_forwarding_rules_request): \Meraki\Model\GetNetworkApplianceFirewallPortForwardingRules200Response
```

Update the port forwarding rules for an MX network

Update the port forwarding rules for an MX network

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


$apiInstance = new Meraki\Api\FirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_firewall_port_forwarding_rules_request = new \Meraki\Model\UpdateNetworkApplianceFirewallPortForwardingRulesRequest(); // \Meraki\Model\UpdateNetworkApplianceFirewallPortForwardingRulesRequest

try {
    $result = $apiInstance->updateNetworkApplianceFirewallPortForwardingRules($network_id, $update_network_appliance_firewall_port_forwarding_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallApi->updateNetworkApplianceFirewallPortForwardingRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_firewall_port_forwarding_rules_request** | [**\Meraki\Model\UpdateNetworkApplianceFirewallPortForwardingRulesRequest**](../Model/UpdateNetworkApplianceFirewallPortForwardingRulesRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallPortForwardingRules200Response**](../Model/GetNetworkApplianceFirewallPortForwardingRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceFirewallSettings()`

```php
updateNetworkApplianceFirewallSettings($network_id, $update_network_appliance_firewall_settings_request): object
```

Update the firewall settings for this network

Update the firewall settings for this network

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


$apiInstance = new Meraki\Api\FirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_firewall_settings_request = new \Meraki\Model\UpdateNetworkApplianceFirewallSettingsRequest(); // \Meraki\Model\UpdateNetworkApplianceFirewallSettingsRequest

try {
    $result = $apiInstance->updateNetworkApplianceFirewallSettings($network_id, $update_network_appliance_firewall_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallApi->updateNetworkApplianceFirewallSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_firewall_settings_request** | [**\Meraki\Model\UpdateNetworkApplianceFirewallSettingsRequest**](../Model/UpdateNetworkApplianceFirewallSettingsRequest.md)|  | [optional] |

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


$apiInstance = new Meraki\Api\FirewallApi(
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
    echo 'Exception when calling FirewallApi->updateNetworkWirelessSsidFirewallL3FirewallRules: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\FirewallApi(
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
    echo 'Exception when calling FirewallApi->updateNetworkWirelessSsidFirewallL7FirewallRules: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\FirewallApi(
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
    echo 'Exception when calling FirewallApi->updateOrganizationWirelessSsidsFirewallIsolationAllowlistEntry: ', $e->getMessage(), PHP_EOL;
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
