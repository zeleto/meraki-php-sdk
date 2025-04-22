# Meraki\RfProfilesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkApplianceRfProfile()**](RfProfilesApi.md#createNetworkApplianceRfProfile) | **POST** /networks/{networkId}/appliance/rfProfiles | Creates new RF profile for this network |
| [**createNetworkWirelessRfProfile()**](RfProfilesApi.md#createNetworkWirelessRfProfile) | **POST** /networks/{networkId}/wireless/rfProfiles | Creates new RF profile for this network |
| [**deleteNetworkApplianceRfProfile()**](RfProfilesApi.md#deleteNetworkApplianceRfProfile) | **DELETE** /networks/{networkId}/appliance/rfProfiles/{rfProfileId} | Delete a RF Profile |
| [**deleteNetworkWirelessRfProfile()**](RfProfilesApi.md#deleteNetworkWirelessRfProfile) | **DELETE** /networks/{networkId}/wireless/rfProfiles/{rfProfileId} | Delete a RF Profile |
| [**getNetworkApplianceRfProfile()**](RfProfilesApi.md#getNetworkApplianceRfProfile) | **GET** /networks/{networkId}/appliance/rfProfiles/{rfProfileId} | Return a RF profile |
| [**getNetworkApplianceRfProfiles()**](RfProfilesApi.md#getNetworkApplianceRfProfiles) | **GET** /networks/{networkId}/appliance/rfProfiles | List the RF profiles for this network |
| [**getNetworkWirelessRfProfile()**](RfProfilesApi.md#getNetworkWirelessRfProfile) | **GET** /networks/{networkId}/wireless/rfProfiles/{rfProfileId} | Return a RF profile |
| [**getNetworkWirelessRfProfiles()**](RfProfilesApi.md#getNetworkWirelessRfProfiles) | **GET** /networks/{networkId}/wireless/rfProfiles | List RF profiles for this network |
| [**getOrganizationWirelessRfProfilesAssignmentsByDevice()**](RfProfilesApi.md#getOrganizationWirelessRfProfilesAssignmentsByDevice) | **GET** /organizations/{organizationId}/wireless/rfProfiles/assignments/byDevice | List the RF profiles of an organization by device |
| [**updateNetworkApplianceRfProfile()**](RfProfilesApi.md#updateNetworkApplianceRfProfile) | **PUT** /networks/{networkId}/appliance/rfProfiles/{rfProfileId} | Updates specified RF profile for this network |
| [**updateNetworkWirelessRfProfile()**](RfProfilesApi.md#updateNetworkWirelessRfProfile) | **PUT** /networks/{networkId}/wireless/rfProfiles/{rfProfileId} | Updates specified RF profile for this network |


## `createNetworkApplianceRfProfile()`

```php
createNetworkApplianceRfProfile($network_id, $create_network_appliance_rf_profile_request): \Meraki\Model\GetNetworkApplianceRfProfiles200ResponseAssignedInner
```

Creates new RF profile for this network

Creates new RF profile for this network

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


$apiInstance = new Meraki\Api\RfProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_appliance_rf_profile_request = new \Meraki\Model\CreateNetworkApplianceRfProfileRequest(); // \Meraki\Model\CreateNetworkApplianceRfProfileRequest

try {
    $result = $apiInstance->createNetworkApplianceRfProfile($network_id, $create_network_appliance_rf_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RfProfilesApi->createNetworkApplianceRfProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_appliance_rf_profile_request** | [**\Meraki\Model\CreateNetworkApplianceRfProfileRequest**](../Model/CreateNetworkApplianceRfProfileRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkApplianceRfProfiles200ResponseAssignedInner**](../Model/GetNetworkApplianceRfProfiles200ResponseAssignedInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkWirelessRfProfile()`

```php
createNetworkWirelessRfProfile($network_id, $create_network_wireless_rf_profile_request): \Meraki\Model\GetNetworkWirelessRfProfiles200Response
```

Creates new RF profile for this network

Creates new RF profile for this network

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


$apiInstance = new Meraki\Api\RfProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_wireless_rf_profile_request = new \Meraki\Model\CreateNetworkWirelessRfProfileRequest(); // \Meraki\Model\CreateNetworkWirelessRfProfileRequest

try {
    $result = $apiInstance->createNetworkWirelessRfProfile($network_id, $create_network_wireless_rf_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RfProfilesApi->createNetworkWirelessRfProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_wireless_rf_profile_request** | [**\Meraki\Model\CreateNetworkWirelessRfProfileRequest**](../Model/CreateNetworkWirelessRfProfileRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkWirelessRfProfiles200Response**](../Model/GetNetworkWirelessRfProfiles200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkApplianceRfProfile()`

```php
deleteNetworkApplianceRfProfile($network_id, $rf_profile_id)
```

Delete a RF Profile

Delete a RF Profile

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


$apiInstance = new Meraki\Api\RfProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$rf_profile_id = 'rf_profile_id_example'; // string | Rf profile ID

try {
    $apiInstance->deleteNetworkApplianceRfProfile($network_id, $rf_profile_id);
} catch (Exception $e) {
    echo 'Exception when calling RfProfilesApi->deleteNetworkApplianceRfProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **rf_profile_id** | **string**| Rf profile ID | |

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

## `deleteNetworkWirelessRfProfile()`

```php
deleteNetworkWirelessRfProfile($network_id, $rf_profile_id)
```

Delete a RF Profile

Delete a RF Profile

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


$apiInstance = new Meraki\Api\RfProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$rf_profile_id = 'rf_profile_id_example'; // string | Rf profile ID

try {
    $apiInstance->deleteNetworkWirelessRfProfile($network_id, $rf_profile_id);
} catch (Exception $e) {
    echo 'Exception when calling RfProfilesApi->deleteNetworkWirelessRfProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **rf_profile_id** | **string**| Rf profile ID | |

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

## `getNetworkApplianceRfProfile()`

```php
getNetworkApplianceRfProfile($network_id, $rf_profile_id): \Meraki\Model\GetNetworkApplianceRfProfiles200ResponseAssignedInner
```

Return a RF profile

Return a RF profile

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


$apiInstance = new Meraki\Api\RfProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$rf_profile_id = 'rf_profile_id_example'; // string | Rf profile ID

try {
    $result = $apiInstance->getNetworkApplianceRfProfile($network_id, $rf_profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RfProfilesApi->getNetworkApplianceRfProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **rf_profile_id** | **string**| Rf profile ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceRfProfiles200ResponseAssignedInner**](../Model/GetNetworkApplianceRfProfiles200ResponseAssignedInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceRfProfiles()`

```php
getNetworkApplianceRfProfiles($network_id): \Meraki\Model\GetNetworkApplianceRfProfiles200Response
```

List the RF profiles for this network

List the RF profiles for this network

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


$apiInstance = new Meraki\Api\RfProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceRfProfiles($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RfProfilesApi->getNetworkApplianceRfProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceRfProfiles200Response**](../Model/GetNetworkApplianceRfProfiles200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessRfProfile()`

```php
getNetworkWirelessRfProfile($network_id, $rf_profile_id): \Meraki\Model\GetNetworkWirelessRfProfiles200Response
```

Return a RF profile

Return a RF profile

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


$apiInstance = new Meraki\Api\RfProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$rf_profile_id = 'rf_profile_id_example'; // string | Rf profile ID

try {
    $result = $apiInstance->getNetworkWirelessRfProfile($network_id, $rf_profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RfProfilesApi->getNetworkWirelessRfProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **rf_profile_id** | **string**| Rf profile ID | |

### Return type

[**\Meraki\Model\GetNetworkWirelessRfProfiles200Response**](../Model/GetNetworkWirelessRfProfiles200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessRfProfiles()`

```php
getNetworkWirelessRfProfiles($network_id, $include_template_profiles): \Meraki\Model\GetNetworkWirelessRfProfiles200Response
```

List RF profiles for this network

List RF profiles for this network

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


$apiInstance = new Meraki\Api\RfProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$include_template_profiles = True; // bool | If the network is bound to a template, this parameter controls whether or not the non-basic RF profiles defined on the template should be included in the response alongside the non-basic profiles defined on the bound network. Defaults to false.

try {
    $result = $apiInstance->getNetworkWirelessRfProfiles($network_id, $include_template_profiles);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RfProfilesApi->getNetworkWirelessRfProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **include_template_profiles** | **bool**| If the network is bound to a template, this parameter controls whether or not the non-basic RF profiles defined on the template should be included in the response alongside the non-basic profiles defined on the bound network. Defaults to false. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessRfProfiles200Response**](../Model/GetNetworkWirelessRfProfiles200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessRfProfilesAssignmentsByDevice()`

```php
getOrganizationWirelessRfProfilesAssignmentsByDevice($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $product_types, $name, $mac, $serial, $model, $macs, $serials, $models): \Meraki\Model\GetOrganizationWirelessRfProfilesAssignmentsByDevice200ResponseInner[]
```

List the RF profiles of an organization by device

List the RF profiles of an organization by device

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


$apiInstance = new Meraki\Api\RfProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter devices by network.
$product_types = array('product_types_example'); // string[] | Optional parameter to filter devices by product type. Valid types are wireless, appliance, switch, systemsManager, camera, cellularGateway, sensor, wirelessController, and secureConnect.
$name = 'name_example'; // string | Optional parameter to filter RF profiles by device name. All returned devices will have a name that contains the search term or is an exact match.
$mac = 'mac_example'; // string | Optional parameter to filter RF profiles by device MAC address. All returned devices will have a MAC address that contains the search term or is an exact match.
$serial = 'serial_example'; // string | Optional parameter to filter RF profiles by device serial number. All returned devices will have a serial number that contains the search term or is an exact match.
$model = 'model_example'; // string | Optional parameter to filter RF profiles by device model. All returned devices will have a model that contains the search term or is an exact match.
$macs = array('macs_example'); // string[] | Optional parameter to filter RF profiles by one or more device MAC addresses. All returned devices will have a MAC address that is an exact match.
$serials = array('serials_example'); // string[] | Optional parameter to filter RF profiles by one or more device serial numbers. All returned devices will have a serial number that is an exact match.
$models = array('models_example'); // string[] | Optional parameter to filter RF profiles by one or more device models. All returned devices will have a model that is an exact match.

try {
    $result = $apiInstance->getOrganizationWirelessRfProfilesAssignmentsByDevice($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $product_types, $name, $mac, $serial, $model, $macs, $serials, $models);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RfProfilesApi->getOrganizationWirelessRfProfilesAssignmentsByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by network. | [optional] |
| **product_types** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by product type. Valid types are wireless, appliance, switch, systemsManager, camera, cellularGateway, sensor, wirelessController, and secureConnect. | [optional] |
| **name** | **string**| Optional parameter to filter RF profiles by device name. All returned devices will have a name that contains the search term or is an exact match. | [optional] |
| **mac** | **string**| Optional parameter to filter RF profiles by device MAC address. All returned devices will have a MAC address that contains the search term or is an exact match. | [optional] |
| **serial** | **string**| Optional parameter to filter RF profiles by device serial number. All returned devices will have a serial number that contains the search term or is an exact match. | [optional] |
| **model** | **string**| Optional parameter to filter RF profiles by device model. All returned devices will have a model that contains the search term or is an exact match. | [optional] |
| **macs** | [**string[]**](../Model/string.md)| Optional parameter to filter RF profiles by one or more device MAC addresses. All returned devices will have a MAC address that is an exact match. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter RF profiles by one or more device serial numbers. All returned devices will have a serial number that is an exact match. | [optional] |
| **models** | [**string[]**](../Model/string.md)| Optional parameter to filter RF profiles by one or more device models. All returned devices will have a model that is an exact match. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessRfProfilesAssignmentsByDevice200ResponseInner[]**](../Model/GetOrganizationWirelessRfProfilesAssignmentsByDevice200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceRfProfile()`

```php
updateNetworkApplianceRfProfile($network_id, $rf_profile_id, $update_network_appliance_rf_profile_request): \Meraki\Model\GetNetworkApplianceRfProfiles200ResponseAssignedInner
```

Updates specified RF profile for this network

Updates specified RF profile for this network

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


$apiInstance = new Meraki\Api\RfProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$rf_profile_id = 'rf_profile_id_example'; // string | Rf profile ID
$update_network_appliance_rf_profile_request = new \Meraki\Model\UpdateNetworkApplianceRfProfileRequest(); // \Meraki\Model\UpdateNetworkApplianceRfProfileRequest

try {
    $result = $apiInstance->updateNetworkApplianceRfProfile($network_id, $rf_profile_id, $update_network_appliance_rf_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RfProfilesApi->updateNetworkApplianceRfProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **rf_profile_id** | **string**| Rf profile ID | |
| **update_network_appliance_rf_profile_request** | [**\Meraki\Model\UpdateNetworkApplianceRfProfileRequest**](../Model/UpdateNetworkApplianceRfProfileRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceRfProfiles200ResponseAssignedInner**](../Model/GetNetworkApplianceRfProfiles200ResponseAssignedInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessRfProfile()`

```php
updateNetworkWirelessRfProfile($network_id, $rf_profile_id, $update_network_wireless_rf_profile_request): \Meraki\Model\GetNetworkWirelessRfProfiles200Response
```

Updates specified RF profile for this network

Updates specified RF profile for this network. Note: built-in RF profiles can only be assigned as a default, and its attributes are immutable

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


$apiInstance = new Meraki\Api\RfProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$rf_profile_id = 'rf_profile_id_example'; // string | Rf profile ID
$update_network_wireless_rf_profile_request = new \Meraki\Model\UpdateNetworkWirelessRfProfileRequest(); // \Meraki\Model\UpdateNetworkWirelessRfProfileRequest

try {
    $result = $apiInstance->updateNetworkWirelessRfProfile($network_id, $rf_profile_id, $update_network_wireless_rf_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RfProfilesApi->updateNetworkWirelessRfProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **rf_profile_id** | **string**| Rf profile ID | |
| **update_network_wireless_rf_profile_request** | [**\Meraki\Model\UpdateNetworkWirelessRfProfileRequest**](../Model/UpdateNetworkWirelessRfProfileRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessRfProfiles200Response**](../Model/GetNetworkWirelessRfProfiles200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
