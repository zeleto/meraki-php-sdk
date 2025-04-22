# Meraki\MerakiAuthUsersApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkMerakiAuthUser()**](MerakiAuthUsersApi.md#createNetworkMerakiAuthUser) | **POST** /networks/{networkId}/merakiAuthUsers | Authorize a user configured with Meraki Authentication for a network (currently supports 802.1X, splash guest, and client VPN users, and currently, organizations have a 50,000 user cap) |
| [**deleteNetworkMerakiAuthUser()**](MerakiAuthUsersApi.md#deleteNetworkMerakiAuthUser) | **DELETE** /networks/{networkId}/merakiAuthUsers/{merakiAuthUserId} | Delete an 802.1X RADIUS user, or deauthorize and optionally delete a splash guest or client VPN user. |
| [**getNetworkMerakiAuthUser()**](MerakiAuthUsersApi.md#getNetworkMerakiAuthUser) | **GET** /networks/{networkId}/merakiAuthUsers/{merakiAuthUserId} | Return the Meraki Auth splash guest, RADIUS, or client VPN user |
| [**getNetworkMerakiAuthUsers()**](MerakiAuthUsersApi.md#getNetworkMerakiAuthUsers) | **GET** /networks/{networkId}/merakiAuthUsers | List the authorized users configured under Meraki Authentication for a network (splash guest or RADIUS users for a wireless network, or client VPN users for a MX network) |
| [**updateNetworkMerakiAuthUser()**](MerakiAuthUsersApi.md#updateNetworkMerakiAuthUser) | **PUT** /networks/{networkId}/merakiAuthUsers/{merakiAuthUserId} | Update a user configured with Meraki Authentication (currently, 802.1X RADIUS, splash guest, and client VPN users can be updated) |


## `createNetworkMerakiAuthUser()`

```php
createNetworkMerakiAuthUser($network_id, $create_network_meraki_auth_user_request): \Meraki\Model\GetNetworkMerakiAuthUsers200ResponseInner
```

Authorize a user configured with Meraki Authentication for a network (currently supports 802.1X, splash guest, and client VPN users, and currently, organizations have a 50,000 user cap)

Authorize a user configured with Meraki Authentication for a network (currently supports 802.1X, splash guest, and client VPN users, and currently, organizations have a 50,000 user cap)

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


$apiInstance = new Meraki\Api\MerakiAuthUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_meraki_auth_user_request = new \Meraki\Model\CreateNetworkMerakiAuthUserRequest(); // \Meraki\Model\CreateNetworkMerakiAuthUserRequest

try {
    $result = $apiInstance->createNetworkMerakiAuthUser($network_id, $create_network_meraki_auth_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerakiAuthUsersApi->createNetworkMerakiAuthUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_meraki_auth_user_request** | [**\Meraki\Model\CreateNetworkMerakiAuthUserRequest**](../Model/CreateNetworkMerakiAuthUserRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkMerakiAuthUsers200ResponseInner**](../Model/GetNetworkMerakiAuthUsers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkMerakiAuthUser()`

```php
deleteNetworkMerakiAuthUser($network_id, $meraki_auth_user_id, $delete)
```

Delete an 802.1X RADIUS user, or deauthorize and optionally delete a splash guest or client VPN user.

Delete an 802.1X RADIUS user, or deauthorize and optionally delete a splash guest or client VPN user.

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


$apiInstance = new Meraki\Api\MerakiAuthUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$meraki_auth_user_id = 'meraki_auth_user_id_example'; // string | Meraki auth user ID
$delete = True; // bool | If the ID supplied is for a splash guest or client VPN user, and that user is not authorized for any other networks in the organization, then also delete the user. 802.1X RADIUS users are always deleted regardless of this optional attribute.

try {
    $apiInstance->deleteNetworkMerakiAuthUser($network_id, $meraki_auth_user_id, $delete);
} catch (Exception $e) {
    echo 'Exception when calling MerakiAuthUsersApi->deleteNetworkMerakiAuthUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **meraki_auth_user_id** | **string**| Meraki auth user ID | |
| **delete** | **bool**| If the ID supplied is for a splash guest or client VPN user, and that user is not authorized for any other networks in the organization, then also delete the user. 802.1X RADIUS users are always deleted regardless of this optional attribute. | [optional] |

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

## `getNetworkMerakiAuthUser()`

```php
getNetworkMerakiAuthUser($network_id, $meraki_auth_user_id): \Meraki\Model\GetNetworkMerakiAuthUsers200ResponseInner
```

Return the Meraki Auth splash guest, RADIUS, or client VPN user

Return the Meraki Auth splash guest, RADIUS, or client VPN user

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


$apiInstance = new Meraki\Api\MerakiAuthUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$meraki_auth_user_id = 'meraki_auth_user_id_example'; // string | Meraki auth user ID

try {
    $result = $apiInstance->getNetworkMerakiAuthUser($network_id, $meraki_auth_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerakiAuthUsersApi->getNetworkMerakiAuthUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **meraki_auth_user_id** | **string**| Meraki auth user ID | |

### Return type

[**\Meraki\Model\GetNetworkMerakiAuthUsers200ResponseInner**](../Model/GetNetworkMerakiAuthUsers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkMerakiAuthUsers()`

```php
getNetworkMerakiAuthUsers($network_id): \Meraki\Model\GetNetworkMerakiAuthUsers200ResponseInner[]
```

List the authorized users configured under Meraki Authentication for a network (splash guest or RADIUS users for a wireless network, or client VPN users for a MX network)

List the authorized users configured under Meraki Authentication for a network (splash guest or RADIUS users for a wireless network, or client VPN users for a MX network)

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


$apiInstance = new Meraki\Api\MerakiAuthUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkMerakiAuthUsers($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerakiAuthUsersApi->getNetworkMerakiAuthUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkMerakiAuthUsers200ResponseInner[]**](../Model/GetNetworkMerakiAuthUsers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkMerakiAuthUser()`

```php
updateNetworkMerakiAuthUser($network_id, $meraki_auth_user_id, $update_network_meraki_auth_user_request): \Meraki\Model\GetNetworkMerakiAuthUsers200ResponseInner
```

Update a user configured with Meraki Authentication (currently, 802.1X RADIUS, splash guest, and client VPN users can be updated)

Update a user configured with Meraki Authentication (currently, 802.1X RADIUS, splash guest, and client VPN users can be updated)

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


$apiInstance = new Meraki\Api\MerakiAuthUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$meraki_auth_user_id = 'meraki_auth_user_id_example'; // string | Meraki auth user ID
$update_network_meraki_auth_user_request = new \Meraki\Model\UpdateNetworkMerakiAuthUserRequest(); // \Meraki\Model\UpdateNetworkMerakiAuthUserRequest

try {
    $result = $apiInstance->updateNetworkMerakiAuthUser($network_id, $meraki_auth_user_id, $update_network_meraki_auth_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerakiAuthUsersApi->updateNetworkMerakiAuthUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **meraki_auth_user_id** | **string**| Meraki auth user ID | |
| **update_network_meraki_auth_user_request** | [**\Meraki\Model\UpdateNetworkMerakiAuthUserRequest**](../Model/UpdateNetworkMerakiAuthUserRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkMerakiAuthUsers200ResponseInner**](../Model/GetNetworkMerakiAuthUsers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
