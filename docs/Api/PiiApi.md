# Meraki\PiiApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkPiiRequest()**](PiiApi.md#createNetworkPiiRequest) | **POST** /networks/{networkId}/pii/requests | Submit a new delete or restrict processing PII request |
| [**deleteNetworkPiiRequest()**](PiiApi.md#deleteNetworkPiiRequest) | **DELETE** /networks/{networkId}/pii/requests/{requestId} | Delete a restrict processing PII request |
| [**getNetworkPiiPiiKeys()**](PiiApi.md#getNetworkPiiPiiKeys) | **GET** /networks/{networkId}/pii/piiKeys | List the keys required to access Personally Identifiable Information (PII) for a given identifier |
| [**getNetworkPiiRequest()**](PiiApi.md#getNetworkPiiRequest) | **GET** /networks/{networkId}/pii/requests/{requestId} | Return a PII request |
| [**getNetworkPiiRequests()**](PiiApi.md#getNetworkPiiRequests) | **GET** /networks/{networkId}/pii/requests | List the PII requests for this network or organization |
| [**getNetworkPiiSmDevicesForKey()**](PiiApi.md#getNetworkPiiSmDevicesForKey) | **GET** /networks/{networkId}/pii/smDevicesForKey | Given a piece of Personally Identifiable Information (PII), return the Systems Manager device ID(s) associated with that identifier |
| [**getNetworkPiiSmOwnersForKey()**](PiiApi.md#getNetworkPiiSmOwnersForKey) | **GET** /networks/{networkId}/pii/smOwnersForKey | Given a piece of Personally Identifiable Information (PII), return the Systems Manager owner ID(s) associated with that identifier |


## `createNetworkPiiRequest()`

```php
createNetworkPiiRequest($network_id, $create_network_pii_request_request): \Meraki\Model\GetNetworkPiiRequests200ResponseInner
```

Submit a new delete or restrict processing PII request

Submit a new delete or restrict processing PII request  ## ALTERNATE PATH  ``` /organizations/{organizationId}/pii/requests ```

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


$apiInstance = new Meraki\Api\PiiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_pii_request_request = new \Meraki\Model\CreateNetworkPiiRequestRequest(); // \Meraki\Model\CreateNetworkPiiRequestRequest

try {
    $result = $apiInstance->createNetworkPiiRequest($network_id, $create_network_pii_request_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PiiApi->createNetworkPiiRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_pii_request_request** | [**\Meraki\Model\CreateNetworkPiiRequestRequest**](../Model/CreateNetworkPiiRequestRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkPiiRequests200ResponseInner**](../Model/GetNetworkPiiRequests200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkPiiRequest()`

```php
deleteNetworkPiiRequest($network_id, $request_id)
```

Delete a restrict processing PII request

Delete a restrict processing PII request  ## ALTERNATE PATH  ``` /organizations/{organizationId}/pii/requests/{requestId} ```

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


$apiInstance = new Meraki\Api\PiiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$request_id = 'request_id_example'; // string | Request ID

try {
    $apiInstance->deleteNetworkPiiRequest($network_id, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling PiiApi->deleteNetworkPiiRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **request_id** | **string**| Request ID | |

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

## `getNetworkPiiPiiKeys()`

```php
getNetworkPiiPiiKeys($network_id, $username, $email, $mac, $serial, $imei, $bluetooth_mac): array<string,\Meraki\Model\GetNetworkPiiPiiKeys200ResponseValue>
```

List the keys required to access Personally Identifiable Information (PII) for a given identifier

List the keys required to access Personally Identifiable Information (PII) for a given identifier. Exactly one identifier will be accepted. If the organization contains org-wide Systems Manager users matching the key provided then there will be an entry with the key \"0\" containing the applicable keys.  ## ALTERNATE PATH  ``` /organizations/{organizationId}/pii/piiKeys ```

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


$apiInstance = new Meraki\Api\PiiApi(
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
    $result = $apiInstance->getNetworkPiiPiiKeys($network_id, $username, $email, $mac, $serial, $imei, $bluetooth_mac);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PiiApi->getNetworkPiiPiiKeys: ', $e->getMessage(), PHP_EOL;
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

[**array<string,\Meraki\Model\GetNetworkPiiPiiKeys200ResponseValue>**](../Model/GetNetworkPiiPiiKeys200ResponseValue.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkPiiRequest()`

```php
getNetworkPiiRequest($network_id, $request_id): \Meraki\Model\GetNetworkPiiRequests200ResponseInner
```

Return a PII request

Return a PII request  ## ALTERNATE PATH  ``` /organizations/{organizationId}/pii/requests/{requestId} ```

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


$apiInstance = new Meraki\Api\PiiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$request_id = 'request_id_example'; // string | Request ID

try {
    $result = $apiInstance->getNetworkPiiRequest($network_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PiiApi->getNetworkPiiRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **request_id** | **string**| Request ID | |

### Return type

[**\Meraki\Model\GetNetworkPiiRequests200ResponseInner**](../Model/GetNetworkPiiRequests200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkPiiRequests()`

```php
getNetworkPiiRequests($network_id): \Meraki\Model\GetNetworkPiiRequests200ResponseInner[]
```

List the PII requests for this network or organization

List the PII requests for this network or organization  ## ALTERNATE PATH  ``` /organizations/{organizationId}/pii/requests ```

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


$apiInstance = new Meraki\Api\PiiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkPiiRequests($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PiiApi->getNetworkPiiRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkPiiRequests200ResponseInner[]**](../Model/GetNetworkPiiRequests200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkPiiSmDevicesForKey()`

```php
getNetworkPiiSmDevicesForKey($network_id, $username, $email, $mac, $serial, $imei, $bluetooth_mac): array<string,string[]>
```

Given a piece of Personally Identifiable Information (PII), return the Systems Manager device ID(s) associated with that identifier

Given a piece of Personally Identifiable Information (PII), return the Systems Manager device ID(s) associated with that identifier. These device IDs can be used with the Systems Manager API endpoints to retrieve device details. Exactly one identifier will be accepted.  ## ALTERNATE PATH  ``` /organizations/{organizationId}/pii/smDevicesForKey ```

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


$apiInstance = new Meraki\Api\PiiApi(
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
    $result = $apiInstance->getNetworkPiiSmDevicesForKey($network_id, $username, $email, $mac, $serial, $imei, $bluetooth_mac);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PiiApi->getNetworkPiiSmDevicesForKey: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\PiiApi(
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
    echo 'Exception when calling PiiApi->getNetworkPiiSmOwnersForKey: ', $e->getMessage(), PHP_EOL;
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
