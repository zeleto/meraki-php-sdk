# Meraki\AirMarshalApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkWirelessAirMarshalRule()**](AirMarshalApi.md#createNetworkWirelessAirMarshalRule) | **POST** /networks/{networkId}/wireless/airMarshal/rules | Creates a new rule |
| [**deleteNetworkWirelessAirMarshalRule()**](AirMarshalApi.md#deleteNetworkWirelessAirMarshalRule) | **DELETE** /networks/{networkId}/wireless/airMarshal/rules/{ruleId} | Delete an Air Marshal rule. |
| [**getNetworkWirelessAirMarshal()**](AirMarshalApi.md#getNetworkWirelessAirMarshal) | **GET** /networks/{networkId}/wireless/airMarshal | List Air Marshal scan results from a network |
| [**getOrganizationWirelessAirMarshalRules()**](AirMarshalApi.md#getOrganizationWirelessAirMarshalRules) | **GET** /organizations/{organizationId}/wireless/airMarshal/rules | Returns the current Air Marshal rules for this organization |
| [**getOrganizationWirelessAirMarshalSettingsByNetwork()**](AirMarshalApi.md#getOrganizationWirelessAirMarshalSettingsByNetwork) | **GET** /organizations/{organizationId}/wireless/airMarshal/settings/byNetwork | Returns the current Air Marshal settings for this network |
| [**updateNetworkWirelessAirMarshalRule()**](AirMarshalApi.md#updateNetworkWirelessAirMarshalRule) | **PUT** /networks/{networkId}/wireless/airMarshal/rules/{ruleId} | Update a rule |
| [**updateNetworkWirelessAirMarshalSettings()**](AirMarshalApi.md#updateNetworkWirelessAirMarshalSettings) | **PUT** /networks/{networkId}/wireless/airMarshal/settings | Updates Air Marshal settings. |


## `createNetworkWirelessAirMarshalRule()`

```php
createNetworkWirelessAirMarshalRule($network_id, $create_network_wireless_air_marshal_rule_request): \Meraki\Model\CreateNetworkWirelessAirMarshalRule201Response
```

Creates a new rule

Creates a new rule

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


$apiInstance = new Meraki\Api\AirMarshalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_wireless_air_marshal_rule_request = new \Meraki\Model\CreateNetworkWirelessAirMarshalRuleRequest(); // \Meraki\Model\CreateNetworkWirelessAirMarshalRuleRequest

try {
    $result = $apiInstance->createNetworkWirelessAirMarshalRule($network_id, $create_network_wireless_air_marshal_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirMarshalApi->createNetworkWirelessAirMarshalRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_wireless_air_marshal_rule_request** | [**\Meraki\Model\CreateNetworkWirelessAirMarshalRuleRequest**](../Model/CreateNetworkWirelessAirMarshalRuleRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateNetworkWirelessAirMarshalRule201Response**](../Model/CreateNetworkWirelessAirMarshalRule201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkWirelessAirMarshalRule()`

```php
deleteNetworkWirelessAirMarshalRule($network_id, $rule_id)
```

Delete an Air Marshal rule.

Delete an Air Marshal rule.

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


$apiInstance = new Meraki\Api\AirMarshalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$rule_id = 'rule_id_example'; // string | Rule ID

try {
    $apiInstance->deleteNetworkWirelessAirMarshalRule($network_id, $rule_id);
} catch (Exception $e) {
    echo 'Exception when calling AirMarshalApi->deleteNetworkWirelessAirMarshalRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **rule_id** | **string**| Rule ID | |

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

## `getNetworkWirelessAirMarshal()`

```php
getNetworkWirelessAirMarshal($network_id, $t0, $timespan): object[]
```

List Air Marshal scan results from a network

List Air Marshal scan results from a network

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


$apiInstance = new Meraki\Api\AirMarshalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 31 days. The default is 7 days.

try {
    $result = $apiInstance->getNetworkWirelessAirMarshal($network_id, $t0, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirMarshalApi->getNetworkWirelessAirMarshal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 31 days. The default is 7 days. | [optional] |

### Return type

**object[]**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessAirMarshalRules()`

```php
getOrganizationWirelessAirMarshalRules($organization_id, $network_ids, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessAirMarshalRules200Response
```

Returns the current Air Marshal rules for this organization

Returns the current Air Marshal rules for this organization

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


$apiInstance = new Meraki\Api\AirMarshalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_ids = array('network_ids_example'); // string[] | (optional) The set of network IDs to include.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessAirMarshalRules($organization_id, $network_ids, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirMarshalApi->getOrganizationWirelessAirMarshalRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_ids** | [**string[]**](../Model/string.md)| (optional) The set of network IDs to include. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessAirMarshalRules200Response**](../Model/GetOrganizationWirelessAirMarshalRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessAirMarshalSettingsByNetwork()`

```php
getOrganizationWirelessAirMarshalSettingsByNetwork($organization_id, $network_ids, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessAirMarshalSettingsByNetwork200Response
```

Returns the current Air Marshal settings for this network

Returns the current Air Marshal settings for this network

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


$apiInstance = new Meraki\Api\AirMarshalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_ids = array('network_ids_example'); // string[] | The network IDs to include in the result set.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessAirMarshalSettingsByNetwork($organization_id, $network_ids, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirMarshalApi->getOrganizationWirelessAirMarshalSettingsByNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_ids** | [**string[]**](../Model/string.md)| The network IDs to include in the result set. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessAirMarshalSettingsByNetwork200Response**](../Model/GetOrganizationWirelessAirMarshalSettingsByNetwork200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessAirMarshalRule()`

```php
updateNetworkWirelessAirMarshalRule($network_id, $rule_id, $update_network_wireless_air_marshal_rule_request): \Meraki\Model\CreateNetworkWirelessAirMarshalRule201Response
```

Update a rule

Update a rule

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


$apiInstance = new Meraki\Api\AirMarshalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$rule_id = 'rule_id_example'; // string | Rule ID
$update_network_wireless_air_marshal_rule_request = new \Meraki\Model\UpdateNetworkWirelessAirMarshalRuleRequest(); // \Meraki\Model\UpdateNetworkWirelessAirMarshalRuleRequest

try {
    $result = $apiInstance->updateNetworkWirelessAirMarshalRule($network_id, $rule_id, $update_network_wireless_air_marshal_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirMarshalApi->updateNetworkWirelessAirMarshalRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **rule_id** | **string**| Rule ID | |
| **update_network_wireless_air_marshal_rule_request** | [**\Meraki\Model\UpdateNetworkWirelessAirMarshalRuleRequest**](../Model/UpdateNetworkWirelessAirMarshalRuleRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\CreateNetworkWirelessAirMarshalRule201Response**](../Model/CreateNetworkWirelessAirMarshalRule201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessAirMarshalSettings()`

```php
updateNetworkWirelessAirMarshalSettings($network_id, $update_network_wireless_air_marshal_settings_request): \Meraki\Model\UpdateNetworkWirelessAirMarshalSettings200Response
```

Updates Air Marshal settings.

Updates Air Marshal settings.

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


$apiInstance = new Meraki\Api\AirMarshalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_wireless_air_marshal_settings_request = new \Meraki\Model\UpdateNetworkWirelessAirMarshalSettingsRequest(); // \Meraki\Model\UpdateNetworkWirelessAirMarshalSettingsRequest

try {
    $result = $apiInstance->updateNetworkWirelessAirMarshalSettings($network_id, $update_network_wireless_air_marshal_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirMarshalApi->updateNetworkWirelessAirMarshalSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_wireless_air_marshal_settings_request** | [**\Meraki\Model\UpdateNetworkWirelessAirMarshalSettingsRequest**](../Model/UpdateNetworkWirelessAirMarshalSettingsRequest.md)|  | |

### Return type

[**\Meraki\Model\UpdateNetworkWirelessAirMarshalSettings200Response**](../Model/UpdateNetworkWirelessAirMarshalSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
