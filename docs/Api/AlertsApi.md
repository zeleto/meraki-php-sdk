# Meraki\AlertsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkSensorAlertsProfile()**](AlertsApi.md#createNetworkSensorAlertsProfile) | **POST** /networks/{networkId}/sensor/alerts/profiles | Creates a sensor alert profile for a network. |
| [**createOrganizationAlertsProfile()**](AlertsApi.md#createOrganizationAlertsProfile) | **POST** /organizations/{organizationId}/alerts/profiles | Create an organization-wide alert configuration |
| [**deleteNetworkSensorAlertsProfile()**](AlertsApi.md#deleteNetworkSensorAlertsProfile) | **DELETE** /networks/{networkId}/sensor/alerts/profiles/{id} | Deletes a sensor alert profile from a network. |
| [**deleteOrganizationAlertsProfile()**](AlertsApi.md#deleteOrganizationAlertsProfile) | **DELETE** /organizations/{organizationId}/alerts/profiles/{alertConfigId} | Removes an organization-wide alert config |
| [**dismissOrganizationAssuranceAlerts()**](AlertsApi.md#dismissOrganizationAssuranceAlerts) | **POST** /organizations/{organizationId}/assurance/alerts/dismiss | Dismiss health alerts |
| [**getNetworkAlertsHistory()**](AlertsApi.md#getNetworkAlertsHistory) | **GET** /networks/{networkId}/alerts/history | Return the alert history for this network |
| [**getNetworkAlertsSettings()**](AlertsApi.md#getNetworkAlertsSettings) | **GET** /networks/{networkId}/alerts/settings | Return the alert configuration for this network |
| [**getNetworkHealthAlerts()**](AlertsApi.md#getNetworkHealthAlerts) | **GET** /networks/{networkId}/health/alerts | Return all global alerts on this network |
| [**getNetworkSensorAlertsCurrentOverviewByMetric()**](AlertsApi.md#getNetworkSensorAlertsCurrentOverviewByMetric) | **GET** /networks/{networkId}/sensor/alerts/current/overview/byMetric | Return an overview of currently alerting sensors by metric |
| [**getNetworkSensorAlertsOverviewByMetric()**](AlertsApi.md#getNetworkSensorAlertsOverviewByMetric) | **GET** /networks/{networkId}/sensor/alerts/overview/byMetric | Return an overview of alert occurrences over a timespan, by metric |
| [**getNetworkSensorAlertsProfile()**](AlertsApi.md#getNetworkSensorAlertsProfile) | **GET** /networks/{networkId}/sensor/alerts/profiles/{id} | Show details of a sensor alert profile for a network. |
| [**getNetworkSensorAlertsProfiles()**](AlertsApi.md#getNetworkSensorAlertsProfiles) | **GET** /networks/{networkId}/sensor/alerts/profiles | Lists all sensor alert profiles for a network. |
| [**getOrganizationAlertsProfiles()**](AlertsApi.md#getOrganizationAlertsProfiles) | **GET** /organizations/{organizationId}/alerts/profiles | List all organization-wide alert configurations |
| [**getOrganizationAssuranceAlert()**](AlertsApi.md#getOrganizationAssuranceAlert) | **GET** /organizations/{organizationId}/assurance/alerts/{id} | Return a singular Health Alert by its id |
| [**getOrganizationAssuranceAlerts()**](AlertsApi.md#getOrganizationAssuranceAlerts) | **GET** /organizations/{organizationId}/assurance/alerts | Return all health alerts for an organization |
| [**getOrganizationAssuranceAlertsOverview()**](AlertsApi.md#getOrganizationAssuranceAlertsOverview) | **GET** /organizations/{organizationId}/assurance/alerts/overview | Return overview of active health alerts for an organization |
| [**getOrganizationAssuranceAlertsOverviewByNetwork()**](AlertsApi.md#getOrganizationAssuranceAlertsOverviewByNetwork) | **GET** /organizations/{organizationId}/assurance/alerts/overview/byNetwork | Return a Summary of Alerts grouped by network and severity |
| [**getOrganizationAssuranceAlertsOverviewByType()**](AlertsApi.md#getOrganizationAssuranceAlertsOverviewByType) | **GET** /organizations/{organizationId}/assurance/alerts/overview/byType | Return a Summary of Alerts grouped by type and severity |
| [**getOrganizationAssuranceAlertsOverviewHistorical()**](AlertsApi.md#getOrganizationAssuranceAlertsOverviewHistorical) | **GET** /organizations/{organizationId}/assurance/alerts/overview/historical | Returns historical health alert overviews |
| [**restoreOrganizationAssuranceAlerts()**](AlertsApi.md#restoreOrganizationAssuranceAlerts) | **POST** /organizations/{organizationId}/assurance/alerts/restore | Restore health alerts from dismissed |
| [**updateNetworkAlertsSettings()**](AlertsApi.md#updateNetworkAlertsSettings) | **PUT** /networks/{networkId}/alerts/settings | Update the alert configuration for this network |
| [**updateNetworkSensorAlertsProfile()**](AlertsApi.md#updateNetworkSensorAlertsProfile) | **PUT** /networks/{networkId}/sensor/alerts/profiles/{id} | Updates a sensor alert profile for a network. |
| [**updateOrganizationAlertsProfile()**](AlertsApi.md#updateOrganizationAlertsProfile) | **PUT** /organizations/{organizationId}/alerts/profiles/{alertConfigId} | Update an organization-wide alert config |


## `createNetworkSensorAlertsProfile()`

```php
createNetworkSensorAlertsProfile($network_id, $create_network_sensor_alerts_profile_request): \Meraki\Model\GetNetworkSensorAlertsProfiles200ResponseInner
```

Creates a sensor alert profile for a network.

Creates a sensor alert profile for a network.

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


$apiInstance = new Meraki\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_sensor_alerts_profile_request = new \Meraki\Model\CreateNetworkSensorAlertsProfileRequest(); // \Meraki\Model\CreateNetworkSensorAlertsProfileRequest

try {
    $result = $apiInstance->createNetworkSensorAlertsProfile($network_id, $create_network_sensor_alerts_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->createNetworkSensorAlertsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_sensor_alerts_profile_request** | [**\Meraki\Model\CreateNetworkSensorAlertsProfileRequest**](../Model/CreateNetworkSensorAlertsProfileRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkSensorAlertsProfiles200ResponseInner**](../Model/GetNetworkSensorAlertsProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationAlertsProfile()`

```php
createOrganizationAlertsProfile($organization_id, $create_organization_alerts_profile_request): \Meraki\Model\GetOrganizationAlertsProfiles200ResponseInner
```

Create an organization-wide alert configuration

Create an organization-wide alert configuration

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


$apiInstance = new Meraki\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_alerts_profile_request = new \Meraki\Model\CreateOrganizationAlertsProfileRequest(); // \Meraki\Model\CreateOrganizationAlertsProfileRequest

try {
    $result = $apiInstance->createOrganizationAlertsProfile($organization_id, $create_organization_alerts_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->createOrganizationAlertsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_alerts_profile_request** | [**\Meraki\Model\CreateOrganizationAlertsProfileRequest**](../Model/CreateOrganizationAlertsProfileRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationAlertsProfiles200ResponseInner**](../Model/GetOrganizationAlertsProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkSensorAlertsProfile()`

```php
deleteNetworkSensorAlertsProfile($network_id, $id)
```

Deletes a sensor alert profile from a network.

Deletes a sensor alert profile from a network.

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


$apiInstance = new Meraki\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$id = 'id_example'; // string | ID

try {
    $apiInstance->deleteNetworkSensorAlertsProfile($network_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->deleteNetworkSensorAlertsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **id** | **string**| ID | |

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

## `deleteOrganizationAlertsProfile()`

```php
deleteOrganizationAlertsProfile($organization_id, $alert_config_id)
```

Removes an organization-wide alert config

Removes an organization-wide alert config

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


$apiInstance = new Meraki\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$alert_config_id = 'alert_config_id_example'; // string | Alert config ID

try {
    $apiInstance->deleteOrganizationAlertsProfile($organization_id, $alert_config_id);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->deleteOrganizationAlertsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **alert_config_id** | **string**| Alert config ID | |

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

## `dismissOrganizationAssuranceAlerts()`

```php
dismissOrganizationAssuranceAlerts($organization_id, $dismiss_organization_assurance_alerts_request)
```

Dismiss health alerts

Dismiss health alerts

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


$apiInstance = new Meraki\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$dismiss_organization_assurance_alerts_request = new \Meraki\Model\DismissOrganizationAssuranceAlertsRequest(); // \Meraki\Model\DismissOrganizationAssuranceAlertsRequest

try {
    $apiInstance->dismissOrganizationAssuranceAlerts($organization_id, $dismiss_organization_assurance_alerts_request);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->dismissOrganizationAssuranceAlerts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **dismiss_organization_assurance_alerts_request** | [**\Meraki\Model\DismissOrganizationAssuranceAlertsRequest**](../Model/DismissOrganizationAssuranceAlertsRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkAlertsHistory()`

```php
getNetworkAlertsHistory($network_id, $per_page, $starting_after, $ending_before): \Meraki\Model\GetNetworkAlertsHistory200ResponseInner[]
```

Return the alert history for this network

Return the alert history for this network

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


$apiInstance = new Meraki\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getNetworkAlertsHistory($network_id, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->getNetworkAlertsHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkAlertsHistory200ResponseInner[]**](../Model/GetNetworkAlertsHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkAlertsSettings()`

```php
getNetworkAlertsSettings($network_id): \Meraki\Model\GetNetworkAlertsSettings200Response
```

Return the alert configuration for this network

Return the alert configuration for this network

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


$apiInstance = new Meraki\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkAlertsSettings($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->getNetworkAlertsSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkAlertsSettings200Response**](../Model/GetNetworkAlertsSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkHealthAlerts()`

```php
getNetworkHealthAlerts($network_id): \Meraki\Model\GetNetworkHealthAlerts200ResponseInner[]
```

Return all global alerts on this network

Return all global alerts on this network

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


$apiInstance = new Meraki\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkHealthAlerts($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->getNetworkHealthAlerts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkHealthAlerts200ResponseInner[]**](../Model/GetNetworkHealthAlerts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSensorAlertsCurrentOverviewByMetric()`

```php
getNetworkSensorAlertsCurrentOverviewByMetric($network_id): \Meraki\Model\GetNetworkSensorAlertsCurrentOverviewByMetric200Response
```

Return an overview of currently alerting sensors by metric

Return an overview of currently alerting sensors by metric

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


$apiInstance = new Meraki\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSensorAlertsCurrentOverviewByMetric($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->getNetworkSensorAlertsCurrentOverviewByMetric: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSensorAlertsCurrentOverviewByMetric200Response**](../Model/GetNetworkSensorAlertsCurrentOverviewByMetric200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSensorAlertsOverviewByMetric()`

```php
getNetworkSensorAlertsOverviewByMetric($network_id, $t0, $t1, $timespan, $interval): \Meraki\Model\GetNetworkSensorAlertsOverviewByMetric200ResponseInner[]
```

Return an overview of alert occurrences over a timespan, by metric

Return an overview of alert occurrences over a timespan, by metric

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


$apiInstance = new Meraki\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 731 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 366 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 366 days. The default is 7 days. If interval is provided, the timespan will be autocalculated.
$interval = 56; // int | The time interval in seconds for returned data. The valid intervals are: 900, 3600, 86400, 604800, 2592000. The default is 604800. Interval is calculated if time params are provided.

try {
    $result = $apiInstance->getNetworkSensorAlertsOverviewByMetric($network_id, $t0, $t1, $timespan, $interval);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->getNetworkSensorAlertsOverviewByMetric: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 731 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 366 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 366 days. The default is 7 days. If interval is provided, the timespan will be autocalculated. | [optional] |
| **interval** | **int**| The time interval in seconds for returned data. The valid intervals are: 900, 3600, 86400, 604800, 2592000. The default is 604800. Interval is calculated if time params are provided. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSensorAlertsOverviewByMetric200ResponseInner[]**](../Model/GetNetworkSensorAlertsOverviewByMetric200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSensorAlertsProfile()`

```php
getNetworkSensorAlertsProfile($network_id, $id): \Meraki\Model\GetNetworkSensorAlertsProfiles200ResponseInner
```

Show details of a sensor alert profile for a network.

Show details of a sensor alert profile for a network.

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


$apiInstance = new Meraki\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$id = 'id_example'; // string | ID

try {
    $result = $apiInstance->getNetworkSensorAlertsProfile($network_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->getNetworkSensorAlertsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **id** | **string**| ID | |

### Return type

[**\Meraki\Model\GetNetworkSensorAlertsProfiles200ResponseInner**](../Model/GetNetworkSensorAlertsProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSensorAlertsProfiles()`

```php
getNetworkSensorAlertsProfiles($network_id): \Meraki\Model\GetNetworkSensorAlertsProfiles200ResponseInner[]
```

Lists all sensor alert profiles for a network.

Lists all sensor alert profiles for a network.

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


$apiInstance = new Meraki\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSensorAlertsProfiles($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->getNetworkSensorAlertsProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSensorAlertsProfiles200ResponseInner[]**](../Model/GetNetworkSensorAlertsProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAlertsProfiles()`

```php
getOrganizationAlertsProfiles($organization_id): \Meraki\Model\GetOrganizationAlertsProfiles200ResponseInner[]
```

List all organization-wide alert configurations

List all organization-wide alert configurations

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


$apiInstance = new Meraki\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationAlertsProfiles($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->getOrganizationAlertsProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationAlertsProfiles200ResponseInner[]**](../Model/GetOrganizationAlertsProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAssuranceAlert()`

```php
getOrganizationAssuranceAlert($organization_id, $id): \Meraki\Model\GetOrganizationAssuranceAlerts200ResponseInner
```

Return a singular Health Alert by its id

Return a singular Health Alert by its id

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


$apiInstance = new Meraki\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$id = 'id_example'; // string | ID

try {
    $result = $apiInstance->getOrganizationAssuranceAlert($organization_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->getOrganizationAssuranceAlert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **id** | **string**| ID | |

### Return type

[**\Meraki\Model\GetOrganizationAssuranceAlerts200ResponseInner**](../Model/GetOrganizationAssuranceAlerts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAssuranceAlerts()`

```php
getOrganizationAssuranceAlerts($organization_id, $per_page, $starting_after, $ending_before, $sort_order, $network_id, $severity, $types, $ts_start, $ts_end, $category, $sort_by, $serials, $device_types, $device_tags, $active, $dismissed, $resolved, $suppress_alerts_for_offline_nodes): \Meraki\Model\GetOrganizationAssuranceAlerts200ResponseInner[]
```

Return all health alerts for an organization

Return all health alerts for an organization

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


$apiInstance = new Meraki\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 4 - 300. Default is 30.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$sort_order = 'sort_order_example'; // string | Sorted order of entries. Order options are 'ascending' and 'descending'. Default is 'ascending'.
$network_id = 'network_id_example'; // string | Optional parameter to filter alerts by network ids.
$severity = 'severity_example'; // string | Optional parameter to filter by severity type.
$types = array('types_example'); // string[] | Optional parameter to filter by alert type.
$ts_start = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter by starting timestamp
$ts_end = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter by end timestamp
$category = 'category_example'; // string | Optional parameter to filter by category.
$sort_by = 'sort_by_example'; // string | Optional parameter to set column to sort by.
$serials = array('serials_example'); // string[] | Optional parameter to filter by primary device serial
$device_types = array('device_types_example'); // string[] | Optional parameter to filter by device types
$device_tags = array('device_tags_example'); // string[] | Optional parameter to filter by device tags
$active = True; // bool | Optional parameter to filter by active alerts defaults to true
$dismissed = True; // bool | Optional parameter to filter by dismissed alerts defaults to false
$resolved = True; // bool | Optional parameter to filter by resolved alerts defaults to false
$suppress_alerts_for_offline_nodes = True; // bool | When set to true the api will only return connectivity alerts for a given device if that device is in an offline state. This only applies to devices. This is ignored when resolved is true. Example:  If a Switch has a VLan Mismatch and is Unreachable. only the Unreachable alert will be returned. Defaults to false.

try {
    $result = $apiInstance->getOrganizationAssuranceAlerts($organization_id, $per_page, $starting_after, $ending_before, $sort_order, $network_id, $severity, $types, $ts_start, $ts_end, $category, $sort_by, $serials, $device_types, $device_tags, $active, $dismissed, $resolved, $suppress_alerts_for_offline_nodes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->getOrganizationAssuranceAlerts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 4 - 300. Default is 30. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **sort_order** | **string**| Sorted order of entries. Order options are &#39;ascending&#39; and &#39;descending&#39;. Default is &#39;ascending&#39;. | [optional] |
| **network_id** | **string**| Optional parameter to filter alerts by network ids. | [optional] |
| **severity** | **string**| Optional parameter to filter by severity type. | [optional] |
| **types** | [**string[]**](../Model/string.md)| Optional parameter to filter by alert type. | [optional] |
| **ts_start** | **\DateTime**| Optional parameter to filter by starting timestamp | [optional] |
| **ts_end** | **\DateTime**| Optional parameter to filter by end timestamp | [optional] |
| **category** | **string**| Optional parameter to filter by category. | [optional] |
| **sort_by** | **string**| Optional parameter to set column to sort by. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter by primary device serial | [optional] |
| **device_types** | [**string[]**](../Model/string.md)| Optional parameter to filter by device types | [optional] |
| **device_tags** | [**string[]**](../Model/string.md)| Optional parameter to filter by device tags | [optional] |
| **active** | **bool**| Optional parameter to filter by active alerts defaults to true | [optional] |
| **dismissed** | **bool**| Optional parameter to filter by dismissed alerts defaults to false | [optional] |
| **resolved** | **bool**| Optional parameter to filter by resolved alerts defaults to false | [optional] |
| **suppress_alerts_for_offline_nodes** | **bool**| When set to true the api will only return connectivity alerts for a given device if that device is in an offline state. This only applies to devices. This is ignored when resolved is true. Example:  If a Switch has a VLan Mismatch and is Unreachable. only the Unreachable alert will be returned. Defaults to false. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationAssuranceAlerts200ResponseInner[]**](../Model/GetOrganizationAssuranceAlerts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAssuranceAlertsOverview()`

```php
getOrganizationAssuranceAlertsOverview($organization_id, $network_id, $severity, $types, $ts_start, $ts_end, $category, $serials, $device_types, $device_tags, $active, $dismissed, $resolved, $suppress_alerts_for_offline_nodes): \Meraki\Model\GetOrganizationAssuranceAlertsOverview200Response
```

Return overview of active health alerts for an organization

Return overview of active health alerts for an organization

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


$apiInstance = new Meraki\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_id = 'network_id_example'; // string | Optional parameter to filter alerts overview by network ids.
$severity = 'severity_example'; // string | Optional parameter to filter alerts overview by severity type.
$types = array('types_example'); // string[] | Optional parameter to filter by alert type.
$ts_start = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter by starting timestamp
$ts_end = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter by end timestamp
$category = 'category_example'; // string | Optional parameter to filter by category.
$serials = array('serials_example'); // string[] | Optional parameter to filter by primary device serial
$device_types = array('device_types_example'); // string[] | Optional parameter to filter by device types
$device_tags = array('device_tags_example'); // string[] | Optional parameter to filter by device tags
$active = True; // bool | Optional parameter to filter by active alerts defaults to true
$dismissed = True; // bool | Optional parameter to filter by dismissed alerts defaults to false
$resolved = True; // bool | Optional parameter to filter by resolved alerts defaults to false
$suppress_alerts_for_offline_nodes = True; // bool | When set to true the api will only return connectivity alerts for a given device if that device is in an offline state. This only applies to devices. This is ignored when resolved is true. Example:  If a Switch has a VLan Mismatch and is Unreachable. only the Unreachable alert will be returned. Defaults to false.

try {
    $result = $apiInstance->getOrganizationAssuranceAlertsOverview($organization_id, $network_id, $severity, $types, $ts_start, $ts_end, $category, $serials, $device_types, $device_tags, $active, $dismissed, $resolved, $suppress_alerts_for_offline_nodes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->getOrganizationAssuranceAlertsOverview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_id** | **string**| Optional parameter to filter alerts overview by network ids. | [optional] |
| **severity** | **string**| Optional parameter to filter alerts overview by severity type. | [optional] |
| **types** | [**string[]**](../Model/string.md)| Optional parameter to filter by alert type. | [optional] |
| **ts_start** | **\DateTime**| Optional parameter to filter by starting timestamp | [optional] |
| **ts_end** | **\DateTime**| Optional parameter to filter by end timestamp | [optional] |
| **category** | **string**| Optional parameter to filter by category. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter by primary device serial | [optional] |
| **device_types** | [**string[]**](../Model/string.md)| Optional parameter to filter by device types | [optional] |
| **device_tags** | [**string[]**](../Model/string.md)| Optional parameter to filter by device tags | [optional] |
| **active** | **bool**| Optional parameter to filter by active alerts defaults to true | [optional] |
| **dismissed** | **bool**| Optional parameter to filter by dismissed alerts defaults to false | [optional] |
| **resolved** | **bool**| Optional parameter to filter by resolved alerts defaults to false | [optional] |
| **suppress_alerts_for_offline_nodes** | **bool**| When set to true the api will only return connectivity alerts for a given device if that device is in an offline state. This only applies to devices. This is ignored when resolved is true. Example:  If a Switch has a VLan Mismatch and is Unreachable. only the Unreachable alert will be returned. Defaults to false. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationAssuranceAlertsOverview200Response**](../Model/GetOrganizationAssuranceAlertsOverview200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAssuranceAlertsOverviewByNetwork()`

```php
getOrganizationAssuranceAlertsOverviewByNetwork($organization_id, $per_page, $starting_after, $ending_before, $sort_order, $network_id, $severity, $types, $ts_start, $ts_end, $category, $serials, $device_types, $device_tags, $active, $dismissed, $resolved, $suppress_alerts_for_offline_nodes): \Meraki\Model\GetOrganizationAssuranceAlertsOverviewByNetwork200Response
```

Return a Summary of Alerts grouped by network and severity

Return a Summary of Alerts grouped by network and severity

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


$apiInstance = new Meraki\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$sort_order = 'sort_order_example'; // string | Sorted order of entries. Order options are 'ascending' and 'descending'. Default is 'ascending'.
$network_id = 'network_id_example'; // string | Optional parameter to filter alerts overview by network id.
$severity = 'severity_example'; // string | Optional parameter to filter alerts overview by severity type.
$types = array('types_example'); // string[] | Optional parameter to filter by alert type.
$ts_start = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter by starting timestamp
$ts_end = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter by end timestamp
$category = 'category_example'; // string | Optional parameter to filter by category.
$serials = array('serials_example'); // string[] | Optional parameter to filter by primary device serial
$device_types = array('device_types_example'); // string[] | Optional parameter to filter by device types
$device_tags = array('device_tags_example'); // string[] | Optional parameter to filter by device tags
$active = True; // bool | Optional parameter to filter by active alerts defaults to true
$dismissed = True; // bool | Optional parameter to filter by dismissed alerts defaults to false
$resolved = True; // bool | Optional parameter to filter by resolved alerts defaults to false
$suppress_alerts_for_offline_nodes = True; // bool | When set to true the api will only return connectivity alerts for a given device if that device is in an offline state. This only applies to devices. This is ignored when resolved is true. Example:  If a Switch has a VLan Mismatch and is Unreachable. only the Unreachable alert will be returned. Defaults to false.

try {
    $result = $apiInstance->getOrganizationAssuranceAlertsOverviewByNetwork($organization_id, $per_page, $starting_after, $ending_before, $sort_order, $network_id, $severity, $types, $ts_start, $ts_end, $category, $serials, $device_types, $device_tags, $active, $dismissed, $resolved, $suppress_alerts_for_offline_nodes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->getOrganizationAssuranceAlertsOverviewByNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **sort_order** | **string**| Sorted order of entries. Order options are &#39;ascending&#39; and &#39;descending&#39;. Default is &#39;ascending&#39;. | [optional] |
| **network_id** | **string**| Optional parameter to filter alerts overview by network id. | [optional] |
| **severity** | **string**| Optional parameter to filter alerts overview by severity type. | [optional] |
| **types** | [**string[]**](../Model/string.md)| Optional parameter to filter by alert type. | [optional] |
| **ts_start** | **\DateTime**| Optional parameter to filter by starting timestamp | [optional] |
| **ts_end** | **\DateTime**| Optional parameter to filter by end timestamp | [optional] |
| **category** | **string**| Optional parameter to filter by category. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter by primary device serial | [optional] |
| **device_types** | [**string[]**](../Model/string.md)| Optional parameter to filter by device types | [optional] |
| **device_tags** | [**string[]**](../Model/string.md)| Optional parameter to filter by device tags | [optional] |
| **active** | **bool**| Optional parameter to filter by active alerts defaults to true | [optional] |
| **dismissed** | **bool**| Optional parameter to filter by dismissed alerts defaults to false | [optional] |
| **resolved** | **bool**| Optional parameter to filter by resolved alerts defaults to false | [optional] |
| **suppress_alerts_for_offline_nodes** | **bool**| When set to true the api will only return connectivity alerts for a given device if that device is in an offline state. This only applies to devices. This is ignored when resolved is true. Example:  If a Switch has a VLan Mismatch and is Unreachable. only the Unreachable alert will be returned. Defaults to false. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationAssuranceAlertsOverviewByNetwork200Response**](../Model/GetOrganizationAssuranceAlertsOverviewByNetwork200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAssuranceAlertsOverviewByType()`

```php
getOrganizationAssuranceAlertsOverviewByType($organization_id, $per_page, $starting_after, $ending_before, $sort_order, $network_id, $severity, $types, $ts_start, $ts_end, $category, $sort_by, $serials, $device_types, $device_tags, $active, $dismissed, $resolved, $suppress_alerts_for_offline_nodes): \Meraki\Model\GetOrganizationAssuranceAlertsOverviewByType200Response
```

Return a Summary of Alerts grouped by type and severity

Return a Summary of Alerts grouped by type and severity

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


$apiInstance = new Meraki\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$sort_order = 'sort_order_example'; // string | Sorted order of entries. Order options are 'ascending' and 'descending'. Default is 'ascending'.
$network_id = 'network_id_example'; // string | Optional parameter to filter alerts overview by network ids.
$severity = 'severity_example'; // string | Optional parameter to filter alerts overview by severity type.
$types = array('types_example'); // string[] | Optional parameter to filter by alert type.
$ts_start = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter by starting timestamp
$ts_end = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter by end timestamp
$category = 'category_example'; // string | Optional parameter to filter by category.
$sort_by = 'sort_by_example'; // string | Optional parameter to set column to sort by.
$serials = array('serials_example'); // string[] | Optional parameter to filter by primary device serial
$device_types = array('device_types_example'); // string[] | Optional parameter to filter by device types
$device_tags = array('device_tags_example'); // string[] | Optional parameter to filter by device tags
$active = True; // bool | Optional parameter to filter by active alerts defaults to true
$dismissed = True; // bool | Optional parameter to filter by dismissed alerts defaults to false
$resolved = True; // bool | Optional parameter to filter by resolved alerts defaults to false
$suppress_alerts_for_offline_nodes = True; // bool | When set to true the api will only return connectivity alerts for a given device if that device is in an offline state. This only applies to devices. This is ignored when resolved is true. Example:  If a Switch has a VLan Mismatch and is Unreachable. only the Unreachable alert will be returned. Defaults to false.

try {
    $result = $apiInstance->getOrganizationAssuranceAlertsOverviewByType($organization_id, $per_page, $starting_after, $ending_before, $sort_order, $network_id, $severity, $types, $ts_start, $ts_end, $category, $sort_by, $serials, $device_types, $device_tags, $active, $dismissed, $resolved, $suppress_alerts_for_offline_nodes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->getOrganizationAssuranceAlertsOverviewByType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **sort_order** | **string**| Sorted order of entries. Order options are &#39;ascending&#39; and &#39;descending&#39;. Default is &#39;ascending&#39;. | [optional] |
| **network_id** | **string**| Optional parameter to filter alerts overview by network ids. | [optional] |
| **severity** | **string**| Optional parameter to filter alerts overview by severity type. | [optional] |
| **types** | [**string[]**](../Model/string.md)| Optional parameter to filter by alert type. | [optional] |
| **ts_start** | **\DateTime**| Optional parameter to filter by starting timestamp | [optional] |
| **ts_end** | **\DateTime**| Optional parameter to filter by end timestamp | [optional] |
| **category** | **string**| Optional parameter to filter by category. | [optional] |
| **sort_by** | **string**| Optional parameter to set column to sort by. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter by primary device serial | [optional] |
| **device_types** | [**string[]**](../Model/string.md)| Optional parameter to filter by device types | [optional] |
| **device_tags** | [**string[]**](../Model/string.md)| Optional parameter to filter by device tags | [optional] |
| **active** | **bool**| Optional parameter to filter by active alerts defaults to true | [optional] |
| **dismissed** | **bool**| Optional parameter to filter by dismissed alerts defaults to false | [optional] |
| **resolved** | **bool**| Optional parameter to filter by resolved alerts defaults to false | [optional] |
| **suppress_alerts_for_offline_nodes** | **bool**| When set to true the api will only return connectivity alerts for a given device if that device is in an offline state. This only applies to devices. This is ignored when resolved is true. Example:  If a Switch has a VLan Mismatch and is Unreachable. only the Unreachable alert will be returned. Defaults to false. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationAssuranceAlertsOverviewByType200Response**](../Model/GetOrganizationAssuranceAlertsOverviewByType200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAssuranceAlertsOverviewHistorical()`

```php
getOrganizationAssuranceAlertsOverviewHistorical($organization_id, $segment_duration, $ts_start, $network_id, $severity, $types, $ts_end, $category, $serials, $device_types): \Meraki\Model\GetOrganizationAssuranceAlertsOverviewHistorical200Response
```

Returns historical health alert overviews

Returns historical health alert overviews

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


$apiInstance = new Meraki\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$segment_duration = 56; // int | Amount of time in seconds for each segment in the returned dataset
$ts_start = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Parameter to define starting timestamp of historical totals
$network_id = 'network_id_example'; // string | Optional parameter to filter alerts overview by network ids.
$severity = 'severity_example'; // string | Optional parameter to filter alerts overview by severity type.
$types = array('types_example'); // string[] | Optional parameter to filter by alert type.
$ts_end = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter by end timestamp defaults to the current time
$category = 'category_example'; // string | Optional parameter to filter by category.
$serials = array('serials_example'); // string[] | Optional parameter to filter by primary device serial
$device_types = array('device_types_example'); // string[] | Optional parameter to filter by device types

try {
    $result = $apiInstance->getOrganizationAssuranceAlertsOverviewHistorical($organization_id, $segment_duration, $ts_start, $network_id, $severity, $types, $ts_end, $category, $serials, $device_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->getOrganizationAssuranceAlertsOverviewHistorical: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **segment_duration** | **int**| Amount of time in seconds for each segment in the returned dataset | |
| **ts_start** | **\DateTime**| Parameter to define starting timestamp of historical totals | |
| **network_id** | **string**| Optional parameter to filter alerts overview by network ids. | [optional] |
| **severity** | **string**| Optional parameter to filter alerts overview by severity type. | [optional] |
| **types** | [**string[]**](../Model/string.md)| Optional parameter to filter by alert type. | [optional] |
| **ts_end** | **\DateTime**| Optional parameter to filter by end timestamp defaults to the current time | [optional] |
| **category** | **string**| Optional parameter to filter by category. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter by primary device serial | [optional] |
| **device_types** | [**string[]**](../Model/string.md)| Optional parameter to filter by device types | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationAssuranceAlertsOverviewHistorical200Response**](../Model/GetOrganizationAssuranceAlertsOverviewHistorical200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreOrganizationAssuranceAlerts()`

```php
restoreOrganizationAssuranceAlerts($organization_id, $restore_organization_assurance_alerts_request)
```

Restore health alerts from dismissed

Restore health alerts from dismissed

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


$apiInstance = new Meraki\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$restore_organization_assurance_alerts_request = new \Meraki\Model\RestoreOrganizationAssuranceAlertsRequest(); // \Meraki\Model\RestoreOrganizationAssuranceAlertsRequest

try {
    $apiInstance->restoreOrganizationAssuranceAlerts($organization_id, $restore_organization_assurance_alerts_request);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->restoreOrganizationAssuranceAlerts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **restore_organization_assurance_alerts_request** | [**\Meraki\Model\RestoreOrganizationAssuranceAlertsRequest**](../Model/RestoreOrganizationAssuranceAlertsRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkAlertsSettings()`

```php
updateNetworkAlertsSettings($network_id, $update_network_alerts_settings_request): \Meraki\Model\GetNetworkAlertsSettings200Response
```

Update the alert configuration for this network

Update the alert configuration for this network

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


$apiInstance = new Meraki\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_alerts_settings_request = new \Meraki\Model\UpdateNetworkAlertsSettingsRequest(); // \Meraki\Model\UpdateNetworkAlertsSettingsRequest

try {
    $result = $apiInstance->updateNetworkAlertsSettings($network_id, $update_network_alerts_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->updateNetworkAlertsSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_alerts_settings_request** | [**\Meraki\Model\UpdateNetworkAlertsSettingsRequest**](../Model/UpdateNetworkAlertsSettingsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkAlertsSettings200Response**](../Model/GetNetworkAlertsSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSensorAlertsProfile()`

```php
updateNetworkSensorAlertsProfile($network_id, $id, $update_network_sensor_alerts_profile_request): \Meraki\Model\GetNetworkSensorAlertsProfiles200ResponseInner
```

Updates a sensor alert profile for a network.

Updates a sensor alert profile for a network.

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


$apiInstance = new Meraki\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$id = 'id_example'; // string | ID
$update_network_sensor_alerts_profile_request = new \Meraki\Model\UpdateNetworkSensorAlertsProfileRequest(); // \Meraki\Model\UpdateNetworkSensorAlertsProfileRequest

try {
    $result = $apiInstance->updateNetworkSensorAlertsProfile($network_id, $id, $update_network_sensor_alerts_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->updateNetworkSensorAlertsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **id** | **string**| ID | |
| **update_network_sensor_alerts_profile_request** | [**\Meraki\Model\UpdateNetworkSensorAlertsProfileRequest**](../Model/UpdateNetworkSensorAlertsProfileRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSensorAlertsProfiles200ResponseInner**](../Model/GetNetworkSensorAlertsProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationAlertsProfile()`

```php
updateOrganizationAlertsProfile($organization_id, $alert_config_id, $update_organization_alerts_profile_request): \Meraki\Model\GetOrganizationAlertsProfiles200ResponseInner
```

Update an organization-wide alert config

Update an organization-wide alert config

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


$apiInstance = new Meraki\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$alert_config_id = 'alert_config_id_example'; // string | Alert config ID
$update_organization_alerts_profile_request = new \Meraki\Model\UpdateOrganizationAlertsProfileRequest(); // \Meraki\Model\UpdateOrganizationAlertsProfileRequest

try {
    $result = $apiInstance->updateOrganizationAlertsProfile($organization_id, $alert_config_id, $update_organization_alerts_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->updateOrganizationAlertsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **alert_config_id** | **string**| Alert config ID | |
| **update_organization_alerts_profile_request** | [**\Meraki\Model\UpdateOrganizationAlertsProfileRequest**](../Model/UpdateOrganizationAlertsProfileRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationAlertsProfiles200ResponseInner**](../Model/GetOrganizationAlertsProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
