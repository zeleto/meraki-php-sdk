# Meraki\SmOwnersForKeyApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworkPiiSmOwnersForKey()**](SmOwnersForKeyApi.md#getNetworkPiiSmOwnersForKey) | **GET** /networks/{networkId}/pii/smOwnersForKey | Given a piece of Personally Identifiable Information (PII), return the Systems Manager owner ID(s) associated with that identifier |


## `getNetworkPiiSmOwnersForKey()`

```php
getNetworkPiiSmOwnersForKey($network_id, $username, $email, $mac, $serial, $imei, $bluetooth_mac): array<string,string[]>
```

Given a piece of Personally Identifiable Information (PII), return the Systems Manager owner ID(s) associated with that identifier

Given a piece of Personally Identifiable Information (PII), return the Systems Manager owner ID(s) associated with that identifier. These owner IDs can be used with the Systems Manager API endpoints to retrieve owner details. Exactly one identifier will be accepted.  ## ALTERNATE PATH  ``` /organizations/{organizationId}/pii/smOwnersForKey ```

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


$apiInstance = new Meraki\Api\SmOwnersForKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$username = 'username_example'; // string | The username of a Systems Manager user
$email = 'email_example'; // string | The email of a network user account or a Systems Manager device
$mac = 'mac_example'; // string | The MAC of a network client device or a Systems Manager device
$serial = 'serial_example'; // string | The serial of a Systems Manager device
$imei = 'imei_example'; // string | The IMEI of a Systems Manager device
$bluetooth_mac = 'bluetooth_mac_example'; // string | The MAC of a Bluetooth client

try {
    $result = $apiInstance->getNetworkPiiSmOwnersForKey($network_id, $username, $email, $mac, $serial, $imei, $bluetooth_mac);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmOwnersForKeyApi->getNetworkPiiSmOwnersForKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **username** | **string**| The username of a Systems Manager user | [optional] |
| **email** | **string**| The email of a network user account or a Systems Manager device | [optional] |
| **mac** | **string**| The MAC of a network client device or a Systems Manager device | [optional] |
| **serial** | **string**| The serial of a Systems Manager device | [optional] |
| **imei** | **string**| The IMEI of a Systems Manager device | [optional] |
| **bluetooth_mac** | **string**| The MAC of a Bluetooth client | [optional] |

### Return type

**array<string,string[]>**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
