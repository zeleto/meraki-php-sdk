# Meraki\AddressesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrganizationDevicesUplinksAddressesByDevice()**](AddressesApi.md#getOrganizationDevicesUplinksAddressesByDevice) | **GET** /organizations/{organizationId}/devices/uplinks/addresses/byDevice | List the current uplink addresses for devices in an organization. |


## `getOrganizationDevicesUplinksAddressesByDevice()`

```php
getOrganizationDevicesUplinksAddressesByDevice($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $product_types, $serials, $tags, $tags_filter_type): \Meraki\Model\GetOrganizationDevicesUplinksAddressesByDevice200ResponseInner[]
```

List the current uplink addresses for devices in an organization.

List the current uplink addresses for devices in an organization.

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


$apiInstance = new Meraki\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter device uplinks by network ID. This filter uses multiple exact matches.
$product_types = array('product_types_example'); // string[] | Optional parameter to filter device uplinks by device product types. This filter uses multiple exact matches.
$serials = array('serials_example'); // string[] | Optional parameter to filter device availabilities by device serial numbers. This filter uses multiple exact matches.
$tags = array('tags_example'); // string[] | An optional parameter to filter devices by tags. The filtering is case-sensitive. If tags are included, 'tagsFilterType' should also be included (see below). This filter uses multiple exact matches.
$tags_filter_type = 'tags_filter_type_example'; // string | An optional parameter of value 'withAnyTags' or 'withAllTags' to indicate whether to return devices which contain ANY or ALL of the included tags. If no type is included, 'withAnyTags' will be selected.

try {
    $result = $apiInstance->getOrganizationDevicesUplinksAddressesByDevice($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $product_types, $serials, $tags, $tags_filter_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getOrganizationDevicesUplinksAddressesByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter device uplinks by network ID. This filter uses multiple exact matches. | [optional] |
| **product_types** | [**string[]**](../Model/string.md)| Optional parameter to filter device uplinks by device product types. This filter uses multiple exact matches. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter device availabilities by device serial numbers. This filter uses multiple exact matches. | [optional] |
| **tags** | [**string[]**](../Model/string.md)| An optional parameter to filter devices by tags. The filtering is case-sensitive. If tags are included, &#39;tagsFilterType&#39; should also be included (see below). This filter uses multiple exact matches. | [optional] |
| **tags_filter_type** | **string**| An optional parameter of value &#39;withAnyTags&#39; or &#39;withAllTags&#39; to indicate whether to return devices which contain ANY or ALL of the included tags. If no type is included, &#39;withAnyTags&#39; will be selected. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationDevicesUplinksAddressesByDevice200ResponseInner[]**](../Model/GetOrganizationDevicesUplinksAddressesByDevice200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
