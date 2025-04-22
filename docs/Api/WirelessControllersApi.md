# Meraki\WirelessControllersApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrganizationWirelessDevicesWirelessControllersByDevice()**](WirelessControllersApi.md#getOrganizationWirelessDevicesWirelessControllersByDevice) | **GET** /organizations/{organizationId}/wireless/devices/wirelessControllers/byDevice | List of Catalyst access points information |


## `getOrganizationWirelessDevicesWirelessControllersByDevice()`

```php
getOrganizationWirelessDevicesWirelessControllersByDevice($organization_id, $network_ids, $serials, $controller_serials, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessDevicesWirelessControllersByDevice200Response
```

List of Catalyst access points information

List of Catalyst access points information

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


$apiInstance = new Meraki\Api\WirelessControllersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter access points by network ID. This filter uses multiple exact matches.
$serials = array('serials_example'); // string[] | Optional parameter to filter access points by its cloud ID. This filter uses multiple exact matches.
$controller_serials = array('controller_serials_example'); // string[] | Optional parameter to filter access points by its wireless LAN controller cloud ID. This filter uses multiple exact matches.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessDevicesWirelessControllersByDevice($organization_id, $network_ids, $serials, $controller_serials, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessControllersApi->getOrganizationWirelessDevicesWirelessControllersByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter access points by network ID. This filter uses multiple exact matches. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter access points by its cloud ID. This filter uses multiple exact matches. | [optional] |
| **controller_serials** | [**string[]**](../Model/string.md)| Optional parameter to filter access points by its wireless LAN controller cloud ID. This filter uses multiple exact matches. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessDevicesWirelessControllersByDevice200Response**](../Model/GetOrganizationWirelessDevicesWirelessControllersByDevice200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
