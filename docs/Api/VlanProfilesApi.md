# Meraki\VlanProfilesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkVlanProfile()**](VlanProfilesApi.md#createNetworkVlanProfile) | **POST** /networks/{networkId}/vlanProfiles | Create a VLAN profile for a network |
| [**deleteNetworkVlanProfile()**](VlanProfilesApi.md#deleteNetworkVlanProfile) | **DELETE** /networks/{networkId}/vlanProfiles/{iname} | Delete a VLAN profile of a network |
| [**getNetworkVlanProfile()**](VlanProfilesApi.md#getNetworkVlanProfile) | **GET** /networks/{networkId}/vlanProfiles/{iname} | Get an existing VLAN profile of a network |
| [**getNetworkVlanProfiles()**](VlanProfilesApi.md#getNetworkVlanProfiles) | **GET** /networks/{networkId}/vlanProfiles | List VLAN profiles for a network |
| [**getNetworkVlanProfilesAssignmentsByDevice()**](VlanProfilesApi.md#getNetworkVlanProfilesAssignmentsByDevice) | **GET** /networks/{networkId}/vlanProfiles/assignments/byDevice | Get the assigned VLAN Profiles for devices in a network |
| [**reassignNetworkVlanProfilesAssignments()**](VlanProfilesApi.md#reassignNetworkVlanProfilesAssignments) | **POST** /networks/{networkId}/vlanProfiles/assignments/reassign | Update the assigned VLAN Profile for devices in a network |
| [**updateNetworkVlanProfile()**](VlanProfilesApi.md#updateNetworkVlanProfile) | **PUT** /networks/{networkId}/vlanProfiles/{iname} | Update an existing VLAN profile of a network |


## `createNetworkVlanProfile()`

```php
createNetworkVlanProfile($network_id, $create_network_vlan_profile_request): \Meraki\Model\GetNetworkVlanProfiles200ResponseInner
```

Create a VLAN profile for a network

Create a VLAN profile for a network

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


$apiInstance = new Meraki\Api\VlanProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_vlan_profile_request = new \Meraki\Model\CreateNetworkVlanProfileRequest(); // \Meraki\Model\CreateNetworkVlanProfileRequest

try {
    $result = $apiInstance->createNetworkVlanProfile($network_id, $create_network_vlan_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VlanProfilesApi->createNetworkVlanProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_vlan_profile_request** | [**\Meraki\Model\CreateNetworkVlanProfileRequest**](../Model/CreateNetworkVlanProfileRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkVlanProfiles200ResponseInner**](../Model/GetNetworkVlanProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkVlanProfile()`

```php
deleteNetworkVlanProfile($network_id, $iname)
```

Delete a VLAN profile of a network

Delete a VLAN profile of a network

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


$apiInstance = new Meraki\Api\VlanProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$iname = 'iname_example'; // string | Iname

try {
    $apiInstance->deleteNetworkVlanProfile($network_id, $iname);
} catch (Exception $e) {
    echo 'Exception when calling VlanProfilesApi->deleteNetworkVlanProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **iname** | **string**| Iname | |

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

## `getNetworkVlanProfile()`

```php
getNetworkVlanProfile($network_id, $iname): \Meraki\Model\GetNetworkVlanProfiles200ResponseInner
```

Get an existing VLAN profile of a network

Get an existing VLAN profile of a network

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


$apiInstance = new Meraki\Api\VlanProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$iname = 'iname_example'; // string | Iname

try {
    $result = $apiInstance->getNetworkVlanProfile($network_id, $iname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VlanProfilesApi->getNetworkVlanProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **iname** | **string**| Iname | |

### Return type

[**\Meraki\Model\GetNetworkVlanProfiles200ResponseInner**](../Model/GetNetworkVlanProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkVlanProfiles()`

```php
getNetworkVlanProfiles($network_id): \Meraki\Model\GetNetworkVlanProfiles200ResponseInner[]
```

List VLAN profiles for a network

List VLAN profiles for a network

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


$apiInstance = new Meraki\Api\VlanProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkVlanProfiles($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VlanProfilesApi->getNetworkVlanProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkVlanProfiles200ResponseInner[]**](../Model/GetNetworkVlanProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkVlanProfilesAssignmentsByDevice()`

```php
getNetworkVlanProfilesAssignmentsByDevice($network_id, $per_page, $starting_after, $ending_before, $serials, $product_types, $stack_ids): \Meraki\Model\GetNetworkVlanProfilesAssignmentsByDevice200ResponseInner[]
```

Get the assigned VLAN Profiles for devices in a network

Get the assigned VLAN Profiles for devices in a network

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


$apiInstance = new Meraki\Api\VlanProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$serials = array('serials_example'); // string[] | Optional parameter to filter devices by serials. All devices returned belong to serial numbers that are an exact match.
$product_types = array('product_types_example'); // string[] | Optional parameter to filter devices by product types.
$stack_ids = array('stack_ids_example'); // string[] | Optional parameter to filter devices by Switch Stack ids.

try {
    $result = $apiInstance->getNetworkVlanProfilesAssignmentsByDevice($network_id, $per_page, $starting_after, $ending_before, $serials, $product_types, $stack_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VlanProfilesApi->getNetworkVlanProfilesAssignmentsByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by serials. All devices returned belong to serial numbers that are an exact match. | [optional] |
| **product_types** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by product types. | [optional] |
| **stack_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by Switch Stack ids. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkVlanProfilesAssignmentsByDevice200ResponseInner[]**](../Model/GetNetworkVlanProfilesAssignmentsByDevice200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reassignNetworkVlanProfilesAssignments()`

```php
reassignNetworkVlanProfilesAssignments($network_id, $reassign_network_vlan_profiles_assignments_request): \Meraki\Model\ReassignNetworkVlanProfilesAssignments200Response
```

Update the assigned VLAN Profile for devices in a network

Update the assigned VLAN Profile for devices in a network

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


$apiInstance = new Meraki\Api\VlanProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$reassign_network_vlan_profiles_assignments_request = new \Meraki\Model\ReassignNetworkVlanProfilesAssignmentsRequest(); // \Meraki\Model\ReassignNetworkVlanProfilesAssignmentsRequest

try {
    $result = $apiInstance->reassignNetworkVlanProfilesAssignments($network_id, $reassign_network_vlan_profiles_assignments_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VlanProfilesApi->reassignNetworkVlanProfilesAssignments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **reassign_network_vlan_profiles_assignments_request** | [**\Meraki\Model\ReassignNetworkVlanProfilesAssignmentsRequest**](../Model/ReassignNetworkVlanProfilesAssignmentsRequest.md)|  | |

### Return type

[**\Meraki\Model\ReassignNetworkVlanProfilesAssignments200Response**](../Model/ReassignNetworkVlanProfilesAssignments200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkVlanProfile()`

```php
updateNetworkVlanProfile($network_id, $iname, $update_network_vlan_profile_request): \Meraki\Model\GetNetworkVlanProfiles200ResponseInner
```

Update an existing VLAN profile of a network

Update an existing VLAN profile of a network

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


$apiInstance = new Meraki\Api\VlanProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$iname = 'iname_example'; // string | Iname
$update_network_vlan_profile_request = new \Meraki\Model\UpdateNetworkVlanProfileRequest(); // \Meraki\Model\UpdateNetworkVlanProfileRequest

try {
    $result = $apiInstance->updateNetworkVlanProfile($network_id, $iname, $update_network_vlan_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VlanProfilesApi->updateNetworkVlanProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **iname** | **string**| Iname | |
| **update_network_vlan_profile_request** | [**\Meraki\Model\UpdateNetworkVlanProfileRequest**](../Model/UpdateNetworkVlanProfileRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkVlanProfiles200ResponseInner**](../Model/GetNetworkVlanProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
