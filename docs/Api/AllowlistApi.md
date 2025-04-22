# Meraki\AllowlistApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrganizationWirelessSsidsFirewallIsolationAllowlistEntry()**](AllowlistApi.md#createOrganizationWirelessSsidsFirewallIsolationAllowlistEntry) | **POST** /organizations/{organizationId}/wireless/ssids/firewall/isolation/allowlist/entries | Create isolation allow list MAC entry for this organization |
| [**deleteOrganizationWirelessSsidsFirewallIsolationAllowlistEntry()**](AllowlistApi.md#deleteOrganizationWirelessSsidsFirewallIsolationAllowlistEntry) | **DELETE** /organizations/{organizationId}/wireless/ssids/firewall/isolation/allowlist/entries/{entryId} | Destroy isolation allow list MAC entry for this organization |
| [**getOrganizationWirelessSsidsFirewallIsolationAllowlistEntries()**](AllowlistApi.md#getOrganizationWirelessSsidsFirewallIsolationAllowlistEntries) | **GET** /organizations/{organizationId}/wireless/ssids/firewall/isolation/allowlist/entries | List the L2 isolation allow list MAC entry in an organization |
| [**updateOrganizationWirelessSsidsFirewallIsolationAllowlistEntry()**](AllowlistApi.md#updateOrganizationWirelessSsidsFirewallIsolationAllowlistEntry) | **PUT** /organizations/{organizationId}/wireless/ssids/firewall/isolation/allowlist/entries/{entryId} | Update isolation allow list MAC entry info |


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


$apiInstance = new Meraki\Api\AllowlistApi(
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
    echo 'Exception when calling AllowlistApi->createOrganizationWirelessSsidsFirewallIsolationAllowlistEntry: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\AllowlistApi(
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
    echo 'Exception when calling AllowlistApi->deleteOrganizationWirelessSsidsFirewallIsolationAllowlistEntry: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\AllowlistApi(
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
    echo 'Exception when calling AllowlistApi->getOrganizationWirelessSsidsFirewallIsolationAllowlistEntries: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\AllowlistApi(
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
    echo 'Exception when calling AllowlistApi->updateOrganizationWirelessSsidsFirewallIsolationAllowlistEntry: ', $e->getMessage(), PHP_EOL;
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
