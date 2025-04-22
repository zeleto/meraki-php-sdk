# Meraki\EventsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkFirmwareUpgradesStagedEvent()**](EventsApi.md#createNetworkFirmwareUpgradesStagedEvent) | **POST** /networks/{networkId}/firmwareUpgrades/staged/events | Create a Staged Upgrade Event for a network |
| [**deferNetworkFirmwareUpgradesStagedEvents()**](EventsApi.md#deferNetworkFirmwareUpgradesStagedEvents) | **POST** /networks/{networkId}/firmwareUpgrades/staged/events/defer | Postpone by 1 week all pending staged upgrade stages for a network |
| [**getNetworkApplianceClientSecurityEvents()**](EventsApi.md#getNetworkApplianceClientSecurityEvents) | **GET** /networks/{networkId}/appliance/clients/{clientId}/security/events | List the security events for a client |
| [**getNetworkApplianceSecurityEvents()**](EventsApi.md#getNetworkApplianceSecurityEvents) | **GET** /networks/{networkId}/appliance/security/events | List the security events for a network |
| [**getNetworkEvents()**](EventsApi.md#getNetworkEvents) | **GET** /networks/{networkId}/events | List the events for the network |
| [**getNetworkEventsEventTypes()**](EventsApi.md#getNetworkEventsEventTypes) | **GET** /networks/{networkId}/events/eventTypes | List the event type to human-readable description |
| [**getNetworkFirmwareUpgradesStagedEvents()**](EventsApi.md#getNetworkFirmwareUpgradesStagedEvents) | **GET** /networks/{networkId}/firmwareUpgrades/staged/events | Get the Staged Upgrade Event from a network |
| [**getOrganizationApplianceSecurityEvents()**](EventsApi.md#getOrganizationApplianceSecurityEvents) | **GET** /organizations/{organizationId}/appliance/security/events | List the security events for an organization |
| [**rollbacksNetworkFirmwareUpgradesStagedEvents()**](EventsApi.md#rollbacksNetworkFirmwareUpgradesStagedEvents) | **POST** /networks/{networkId}/firmwareUpgrades/staged/events/rollbacks | Rollback a Staged Upgrade Event for a network |
| [**updateNetworkFirmwareUpgradesStagedEvents()**](EventsApi.md#updateNetworkFirmwareUpgradesStagedEvents) | **PUT** /networks/{networkId}/firmwareUpgrades/staged/events | Update the Staged Upgrade Event for a network |


## `createNetworkFirmwareUpgradesStagedEvent()`

```php
createNetworkFirmwareUpgradesStagedEvent($network_id, $create_network_firmware_upgrades_staged_event_request): \Meraki\Model\GetNetworkFirmwareUpgradesStagedEvents200Response
```

Create a Staged Upgrade Event for a network

Create a Staged Upgrade Event for a network

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


$apiInstance = new Meraki\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_firmware_upgrades_staged_event_request = new \Meraki\Model\CreateNetworkFirmwareUpgradesStagedEventRequest(); // \Meraki\Model\CreateNetworkFirmwareUpgradesStagedEventRequest

try {
    $result = $apiInstance->createNetworkFirmwareUpgradesStagedEvent($network_id, $create_network_firmware_upgrades_staged_event_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->createNetworkFirmwareUpgradesStagedEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_firmware_upgrades_staged_event_request** | [**\Meraki\Model\CreateNetworkFirmwareUpgradesStagedEventRequest**](../Model/CreateNetworkFirmwareUpgradesStagedEventRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgradesStagedEvents200Response**](../Model/GetNetworkFirmwareUpgradesStagedEvents200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deferNetworkFirmwareUpgradesStagedEvents()`

```php
deferNetworkFirmwareUpgradesStagedEvents($network_id): \Meraki\Model\GetNetworkFirmwareUpgradesStagedEvents200Response
```

Postpone by 1 week all pending staged upgrade stages for a network

Postpone by 1 week all pending staged upgrade stages for a network

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


$apiInstance = new Meraki\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->deferNetworkFirmwareUpgradesStagedEvents($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->deferNetworkFirmwareUpgradesStagedEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgradesStagedEvents200Response**](../Model/GetNetworkFirmwareUpgradesStagedEvents200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceClientSecurityEvents()`

```php
getNetworkApplianceClientSecurityEvents($network_id, $client_id, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before, $sort_order): array<string,mixed>[]
```

List the security events for a client

List the security events for a client. Clients can be identified by a client key or either the MAC or IP depending on whether the network uses Track-by-IP.

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


$apiInstance = new Meraki\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$client_id = 'client_id_example'; // string | Client ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. Data is gathered after the specified t0 value. The maximum lookback period is 791 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 791 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 791 days. The default is 31 days.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$sort_order = 'sort_order_example'; // string | Sorted order of security events based on event detection time. Order options are 'ascending' or 'descending'. Default is ascending order.

try {
    $result = $apiInstance->getNetworkApplianceClientSecurityEvents($network_id, $client_id, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before, $sort_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getNetworkApplianceClientSecurityEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **client_id** | **string**| Client ID | |
| **t0** | **string**| The beginning of the timespan for the data. Data is gathered after the specified t0 value. The maximum lookback period is 791 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 791 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 791 days. The default is 31 days. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **sort_order** | **string**| Sorted order of security events based on event detection time. Order options are &#39;ascending&#39; or &#39;descending&#39;. Default is ascending order. | [optional] |

### Return type

**array<string,mixed>[]**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceSecurityEvents()`

```php
getNetworkApplianceSecurityEvents($network_id, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before, $sort_order): array<string,mixed>[]
```

List the security events for a network

List the security events for a network

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


$apiInstance = new Meraki\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. Data is gathered after the specified t0 value. The maximum lookback period is 365 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 365 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 365 days. The default is 31 days.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$sort_order = 'sort_order_example'; // string | Sorted order of security events based on event detection time. Order options are 'ascending' or 'descending'. Default is ascending order.

try {
    $result = $apiInstance->getNetworkApplianceSecurityEvents($network_id, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before, $sort_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getNetworkApplianceSecurityEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. Data is gathered after the specified t0 value. The maximum lookback period is 365 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 365 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 365 days. The default is 31 days. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **sort_order** | **string**| Sorted order of security events based on event detection time. Order options are &#39;ascending&#39; or &#39;descending&#39;. Default is ascending order. | [optional] |

### Return type

**array<string,mixed>[]**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkEvents()`

```php
getNetworkEvents($network_id, $product_type, $included_event_types, $excluded_event_types, $device_mac, $device_serial, $device_name, $client_ip, $client_mac, $client_name, $sm_device_mac, $sm_device_name, $event_details, $event_severity, $is_catalyst, $per_page, $starting_after, $ending_before): \Meraki\Model\GetNetworkEvents200Response
```

List the events for the network

List the events for the network

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


$apiInstance = new Meraki\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$product_type = 'product_type_example'; // string | The product type to fetch events for. This parameter is required for networks with multiple device types. Valid types are wireless, appliance, switch, systemsManager, camera, cellularGateway, wirelessController, and secureConnect
$included_event_types = array('included_event_types_example'); // string[] | A list of event types. The returned events will be filtered to only include events with these types.
$excluded_event_types = array('excluded_event_types_example'); // string[] | A list of event types. The returned events will be filtered to exclude events with these types.
$device_mac = 'device_mac_example'; // string | The MAC address of the Meraki device which the list of events will be filtered with
$device_serial = 'device_serial_example'; // string | The serial of the Meraki device which the list of events will be filtered with
$device_name = 'device_name_example'; // string | The name of the Meraki device which the list of events will be filtered with
$client_ip = 'client_ip_example'; // string | The IP of the client which the list of events will be filtered with. Only supported for track-by-IP networks.
$client_mac = 'client_mac_example'; // string | The MAC address of the client which the list of events will be filtered with. Only supported for track-by-MAC networks.
$client_name = 'client_name_example'; // string | The name, or partial name, of the client which the list of events will be filtered with
$sm_device_mac = 'sm_device_mac_example'; // string | The MAC address of the Systems Manager device which the list of events will be filtered with
$sm_device_name = 'sm_device_name_example'; // string | The name of the Systems Manager device which the list of events will be filtered with
$event_details = 'event_details_example'; // string | The details of the event(Catalyst device only) which the list of events will be filtered with
$event_severity = 'event_severity_example'; // string | The severity of the event(Catalyst device only) which the list of events will be filtered with
$is_catalyst = True; // bool | Boolean indicating that whether it is a Catalyst device. For Catalyst device, eventDetails and eventSeverity can be used to filter events.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 10.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getNetworkEvents($network_id, $product_type, $included_event_types, $excluded_event_types, $device_mac, $device_serial, $device_name, $client_ip, $client_mac, $client_name, $sm_device_mac, $sm_device_name, $event_details, $event_severity, $is_catalyst, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getNetworkEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **product_type** | **string**| The product type to fetch events for. This parameter is required for networks with multiple device types. Valid types are wireless, appliance, switch, systemsManager, camera, cellularGateway, wirelessController, and secureConnect | [optional] |
| **included_event_types** | [**string[]**](../Model/string.md)| A list of event types. The returned events will be filtered to only include events with these types. | [optional] |
| **excluded_event_types** | [**string[]**](../Model/string.md)| A list of event types. The returned events will be filtered to exclude events with these types. | [optional] |
| **device_mac** | **string**| The MAC address of the Meraki device which the list of events will be filtered with | [optional] |
| **device_serial** | **string**| The serial of the Meraki device which the list of events will be filtered with | [optional] |
| **device_name** | **string**| The name of the Meraki device which the list of events will be filtered with | [optional] |
| **client_ip** | **string**| The IP of the client which the list of events will be filtered with. Only supported for track-by-IP networks. | [optional] |
| **client_mac** | **string**| The MAC address of the client which the list of events will be filtered with. Only supported for track-by-MAC networks. | [optional] |
| **client_name** | **string**| The name, or partial name, of the client which the list of events will be filtered with | [optional] |
| **sm_device_mac** | **string**| The MAC address of the Systems Manager device which the list of events will be filtered with | [optional] |
| **sm_device_name** | **string**| The name of the Systems Manager device which the list of events will be filtered with | [optional] |
| **event_details** | **string**| The details of the event(Catalyst device only) which the list of events will be filtered with | [optional] |
| **event_severity** | **string**| The severity of the event(Catalyst device only) which the list of events will be filtered with | [optional] |
| **is_catalyst** | **bool**| Boolean indicating that whether it is a Catalyst device. For Catalyst device, eventDetails and eventSeverity can be used to filter events. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 10. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkEvents200Response**](../Model/GetNetworkEvents200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkEventsEventTypes()`

```php
getNetworkEventsEventTypes($network_id): \Meraki\Model\GetNetworkEventsEventTypes200ResponseInner[]
```

List the event type to human-readable description

List the event type to human-readable description

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


$apiInstance = new Meraki\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkEventsEventTypes($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getNetworkEventsEventTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkEventsEventTypes200ResponseInner[]**](../Model/GetNetworkEventsEventTypes200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkFirmwareUpgradesStagedEvents()`

```php
getNetworkFirmwareUpgradesStagedEvents($network_id): \Meraki\Model\GetNetworkFirmwareUpgradesStagedEvents200Response
```

Get the Staged Upgrade Event from a network

Get the Staged Upgrade Event from a network

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


$apiInstance = new Meraki\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkFirmwareUpgradesStagedEvents($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getNetworkFirmwareUpgradesStagedEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgradesStagedEvents200Response**](../Model/GetNetworkFirmwareUpgradesStagedEvents200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationApplianceSecurityEvents()`

```php
getOrganizationApplianceSecurityEvents($organization_id, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before, $sort_order): array<string,mixed>[]
```

List the security events for an organization

List the security events for an organization

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


$apiInstance = new Meraki\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. Data is gathered after the specified t0 value. The maximum lookback period is 365 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 365 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 365 days. The default is 31 days.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$sort_order = 'sort_order_example'; // string | Sorted order of security events based on event detection time. Order options are 'ascending' or 'descending'. Default is ascending order.

try {
    $result = $apiInstance->getOrganizationApplianceSecurityEvents($organization_id, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before, $sort_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getOrganizationApplianceSecurityEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **t0** | **string**| The beginning of the timespan for the data. Data is gathered after the specified t0 value. The maximum lookback period is 365 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 365 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 365 days. The default is 31 days. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **sort_order** | **string**| Sorted order of security events based on event detection time. Order options are &#39;ascending&#39; or &#39;descending&#39;. Default is ascending order. | [optional] |

### Return type

**array<string,mixed>[]**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rollbacksNetworkFirmwareUpgradesStagedEvents()`

```php
rollbacksNetworkFirmwareUpgradesStagedEvents($network_id, $rollbacks_network_firmware_upgrades_staged_events_request): \Meraki\Model\GetNetworkFirmwareUpgradesStagedEvents200Response
```

Rollback a Staged Upgrade Event for a network

Rollback a Staged Upgrade Event for a network

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


$apiInstance = new Meraki\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$rollbacks_network_firmware_upgrades_staged_events_request = new \Meraki\Model\RollbacksNetworkFirmwareUpgradesStagedEventsRequest(); // \Meraki\Model\RollbacksNetworkFirmwareUpgradesStagedEventsRequest

try {
    $result = $apiInstance->rollbacksNetworkFirmwareUpgradesStagedEvents($network_id, $rollbacks_network_firmware_upgrades_staged_events_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->rollbacksNetworkFirmwareUpgradesStagedEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **rollbacks_network_firmware_upgrades_staged_events_request** | [**\Meraki\Model\RollbacksNetworkFirmwareUpgradesStagedEventsRequest**](../Model/RollbacksNetworkFirmwareUpgradesStagedEventsRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgradesStagedEvents200Response**](../Model/GetNetworkFirmwareUpgradesStagedEvents200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkFirmwareUpgradesStagedEvents()`

```php
updateNetworkFirmwareUpgradesStagedEvents($network_id, $update_network_firmware_upgrades_staged_events_request): \Meraki\Model\GetNetworkFirmwareUpgradesStagedEvents200Response
```

Update the Staged Upgrade Event for a network

Update the Staged Upgrade Event for a network

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


$apiInstance = new Meraki\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_firmware_upgrades_staged_events_request = new \Meraki\Model\UpdateNetworkFirmwareUpgradesStagedEventsRequest(); // \Meraki\Model\UpdateNetworkFirmwareUpgradesStagedEventsRequest

try {
    $result = $apiInstance->updateNetworkFirmwareUpgradesStagedEvents($network_id, $update_network_firmware_upgrades_staged_events_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->updateNetworkFirmwareUpgradesStagedEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_firmware_upgrades_staged_events_request** | [**\Meraki\Model\UpdateNetworkFirmwareUpgradesStagedEventsRequest**](../Model/UpdateNetworkFirmwareUpgradesStagedEventsRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgradesStagedEvents200Response**](../Model/GetNetworkFirmwareUpgradesStagedEvents200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
