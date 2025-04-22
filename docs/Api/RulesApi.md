# Meraki\RulesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkWirelessAirMarshalRule()**](RulesApi.md#createNetworkWirelessAirMarshalRule) | **POST** /networks/{networkId}/wireless/airMarshal/rules | Creates a new rule |
| [**deleteNetworkWirelessAirMarshalRule()**](RulesApi.md#deleteNetworkWirelessAirMarshalRule) | **DELETE** /networks/{networkId}/wireless/airMarshal/rules/{ruleId} | Delete an Air Marshal rule. |
| [**getNetworkApplianceTrafficShapingRules()**](RulesApi.md#getNetworkApplianceTrafficShapingRules) | **GET** /networks/{networkId}/appliance/trafficShaping/rules | Display the traffic shaping settings rules for an MX network |
| [**getNetworkWirelessSsidTrafficShapingRules()**](RulesApi.md#getNetworkWirelessSsidTrafficShapingRules) | **GET** /networks/{networkId}/wireless/ssids/{number}/trafficShaping/rules | Display the traffic shaping settings for a SSID on an MR network |
| [**getOrganizationWirelessAirMarshalRules()**](RulesApi.md#getOrganizationWirelessAirMarshalRules) | **GET** /organizations/{organizationId}/wireless/airMarshal/rules | Returns the current Air Marshal rules for this organization |
| [**updateNetworkApplianceTrafficShapingRules()**](RulesApi.md#updateNetworkApplianceTrafficShapingRules) | **PUT** /networks/{networkId}/appliance/trafficShaping/rules | Update the traffic shaping settings rules for an MX network |
| [**updateNetworkWirelessAirMarshalRule()**](RulesApi.md#updateNetworkWirelessAirMarshalRule) | **PUT** /networks/{networkId}/wireless/airMarshal/rules/{ruleId} | Update a rule |
| [**updateNetworkWirelessSsidTrafficShapingRules()**](RulesApi.md#updateNetworkWirelessSsidTrafficShapingRules) | **PUT** /networks/{networkId}/wireless/ssids/{number}/trafficShaping/rules | Update the traffic shaping rules for an SSID on an MR network. |


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


$apiInstance = new Meraki\Api\RulesApi(
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
    echo 'Exception when calling RulesApi->createNetworkWirelessAirMarshalRule: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\RulesApi(
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
    echo 'Exception when calling RulesApi->deleteNetworkWirelessAirMarshalRule: ', $e->getMessage(), PHP_EOL;
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

## `getNetworkApplianceTrafficShapingRules()`

```php
getNetworkApplianceTrafficShapingRules($network_id): object
```

Display the traffic shaping settings rules for an MX network

Display the traffic shaping settings rules for an MX network

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


$apiInstance = new Meraki\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceTrafficShapingRules($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->getNetworkApplianceTrafficShapingRules: ', $e->getMessage(), PHP_EOL;
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

## `getNetworkWirelessSsidTrafficShapingRules()`

```php
getNetworkWirelessSsidTrafficShapingRules($network_id, $number): \Meraki\Model\GetNetworkWirelessSsidTrafficShapingRules200Response
```

Display the traffic shaping settings for a SSID on an MR network

Display the traffic shaping settings for a SSID on an MR network

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


$apiInstance = new Meraki\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidTrafficShapingRules($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->getNetworkWirelessSsidTrafficShapingRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidTrafficShapingRules200Response**](../Model/GetNetworkWirelessSsidTrafficShapingRules200Response.md)

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


$apiInstance = new Meraki\Api\RulesApi(
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
    echo 'Exception when calling RulesApi->getOrganizationWirelessAirMarshalRules: ', $e->getMessage(), PHP_EOL;
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

## `updateNetworkApplianceTrafficShapingRules()`

```php
updateNetworkApplianceTrafficShapingRules($network_id, $update_network_appliance_traffic_shaping_rules_request): object
```

Update the traffic shaping settings rules for an MX network

Update the traffic shaping settings rules for an MX network

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


$apiInstance = new Meraki\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_traffic_shaping_rules_request = new \Meraki\Model\UpdateNetworkApplianceTrafficShapingRulesRequest(); // \Meraki\Model\UpdateNetworkApplianceTrafficShapingRulesRequest

try {
    $result = $apiInstance->updateNetworkApplianceTrafficShapingRules($network_id, $update_network_appliance_traffic_shaping_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->updateNetworkApplianceTrafficShapingRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_traffic_shaping_rules_request** | [**\Meraki\Model\UpdateNetworkApplianceTrafficShapingRulesRequest**](../Model/UpdateNetworkApplianceTrafficShapingRulesRequest.md)|  | [optional] |

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


$apiInstance = new Meraki\Api\RulesApi(
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
    echo 'Exception when calling RulesApi->updateNetworkWirelessAirMarshalRule: ', $e->getMessage(), PHP_EOL;
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

## `updateNetworkWirelessSsidTrafficShapingRules()`

```php
updateNetworkWirelessSsidTrafficShapingRules($network_id, $number, $update_network_wireless_ssid_traffic_shaping_rules_request): \Meraki\Model\GetNetworkWirelessSsidTrafficShapingRules200Response
```

Update the traffic shaping rules for an SSID on an MR network.

Update the traffic shaping rules for an SSID on an MR network.

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


$apiInstance = new Meraki\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_traffic_shaping_rules_request = new \Meraki\Model\UpdateNetworkWirelessSsidTrafficShapingRulesRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidTrafficShapingRulesRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsidTrafficShapingRules($network_id, $number, $update_network_wireless_ssid_traffic_shaping_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->updateNetworkWirelessSsidTrafficShapingRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_traffic_shaping_rules_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidTrafficShapingRulesRequest**](../Model/UpdateNetworkWirelessSsidTrafficShapingRulesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidTrafficShapingRules200Response**](../Model/GetNetworkWirelessSsidTrafficShapingRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
