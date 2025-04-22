# Meraki\CustomAnalyticsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrganizationCameraCustomAnalyticsArtifact()**](CustomAnalyticsApi.md#createOrganizationCameraCustomAnalyticsArtifact) | **POST** /organizations/{organizationId}/camera/customAnalytics/artifacts | Create custom analytics artifact |
| [**deleteOrganizationCameraCustomAnalyticsArtifact()**](CustomAnalyticsApi.md#deleteOrganizationCameraCustomAnalyticsArtifact) | **DELETE** /organizations/{organizationId}/camera/customAnalytics/artifacts/{artifactId} | Delete Custom Analytics Artifact |
| [**getDeviceCameraCustomAnalytics()**](CustomAnalyticsApi.md#getDeviceCameraCustomAnalytics) | **GET** /devices/{serial}/camera/customAnalytics | Return custom analytics settings for a camera |
| [**getOrganizationCameraCustomAnalyticsArtifact()**](CustomAnalyticsApi.md#getOrganizationCameraCustomAnalyticsArtifact) | **GET** /organizations/{organizationId}/camera/customAnalytics/artifacts/{artifactId} | Get Custom Analytics Artifact |
| [**getOrganizationCameraCustomAnalyticsArtifacts()**](CustomAnalyticsApi.md#getOrganizationCameraCustomAnalyticsArtifacts) | **GET** /organizations/{organizationId}/camera/customAnalytics/artifacts | List Custom Analytics Artifacts |
| [**updateDeviceCameraCustomAnalytics()**](CustomAnalyticsApi.md#updateDeviceCameraCustomAnalytics) | **PUT** /devices/{serial}/camera/customAnalytics | Update custom analytics settings for a camera |


## `createOrganizationCameraCustomAnalyticsArtifact()`

```php
createOrganizationCameraCustomAnalyticsArtifact($organization_id, $create_organization_camera_custom_analytics_artifact_request): \Meraki\Model\CreateOrganizationCameraCustomAnalyticsArtifact201Response
```

Create custom analytics artifact

Create custom analytics artifact. Returns an artifact upload URL with expiry time. Upload the artifact file with a put request to the returned upload URL before its expiry.

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


$apiInstance = new Meraki\Api\CustomAnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_camera_custom_analytics_artifact_request = new \Meraki\Model\CreateOrganizationCameraCustomAnalyticsArtifactRequest(); // \Meraki\Model\CreateOrganizationCameraCustomAnalyticsArtifactRequest

try {
    $result = $apiInstance->createOrganizationCameraCustomAnalyticsArtifact($organization_id, $create_organization_camera_custom_analytics_artifact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomAnalyticsApi->createOrganizationCameraCustomAnalyticsArtifact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_camera_custom_analytics_artifact_request** | [**\Meraki\Model\CreateOrganizationCameraCustomAnalyticsArtifactRequest**](../Model/CreateOrganizationCameraCustomAnalyticsArtifactRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\CreateOrganizationCameraCustomAnalyticsArtifact201Response**](../Model/CreateOrganizationCameraCustomAnalyticsArtifact201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrganizationCameraCustomAnalyticsArtifact()`

```php
deleteOrganizationCameraCustomAnalyticsArtifact($organization_id, $artifact_id)
```

Delete Custom Analytics Artifact

Delete Custom Analytics Artifact

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


$apiInstance = new Meraki\Api\CustomAnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$artifact_id = 'artifact_id_example'; // string | Artifact ID

try {
    $apiInstance->deleteOrganizationCameraCustomAnalyticsArtifact($organization_id, $artifact_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomAnalyticsApi->deleteOrganizationCameraCustomAnalyticsArtifact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **artifact_id** | **string**| Artifact ID | |

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

## `getDeviceCameraCustomAnalytics()`

```php
getDeviceCameraCustomAnalytics($serial): \Meraki\Model\GetDeviceCameraCustomAnalytics200Response
```

Return custom analytics settings for a camera

Return custom analytics settings for a camera

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


$apiInstance = new Meraki\Api\CustomAnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceCameraCustomAnalytics($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomAnalyticsApi->getDeviceCameraCustomAnalytics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceCameraCustomAnalytics200Response**](../Model/GetDeviceCameraCustomAnalytics200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationCameraCustomAnalyticsArtifact()`

```php
getOrganizationCameraCustomAnalyticsArtifact($organization_id, $artifact_id): \Meraki\Model\GetOrganizationCameraCustomAnalyticsArtifacts200ResponseInner
```

Get Custom Analytics Artifact

Get Custom Analytics Artifact

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


$apiInstance = new Meraki\Api\CustomAnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$artifact_id = 'artifact_id_example'; // string | Artifact ID

try {
    $result = $apiInstance->getOrganizationCameraCustomAnalyticsArtifact($organization_id, $artifact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomAnalyticsApi->getOrganizationCameraCustomAnalyticsArtifact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **artifact_id** | **string**| Artifact ID | |

### Return type

[**\Meraki\Model\GetOrganizationCameraCustomAnalyticsArtifacts200ResponseInner**](../Model/GetOrganizationCameraCustomAnalyticsArtifacts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationCameraCustomAnalyticsArtifacts()`

```php
getOrganizationCameraCustomAnalyticsArtifacts($organization_id): \Meraki\Model\GetOrganizationCameraCustomAnalyticsArtifacts200ResponseInner[]
```

List Custom Analytics Artifacts

List Custom Analytics Artifacts

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


$apiInstance = new Meraki\Api\CustomAnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationCameraCustomAnalyticsArtifacts($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomAnalyticsApi->getOrganizationCameraCustomAnalyticsArtifacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationCameraCustomAnalyticsArtifacts200ResponseInner[]**](../Model/GetOrganizationCameraCustomAnalyticsArtifacts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceCameraCustomAnalytics()`

```php
updateDeviceCameraCustomAnalytics($serial, $update_device_camera_custom_analytics_request): \Meraki\Model\GetDeviceCameraCustomAnalytics200Response
```

Update custom analytics settings for a camera

Update custom analytics settings for a camera

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


$apiInstance = new Meraki\Api\CustomAnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_camera_custom_analytics_request = new \Meraki\Model\UpdateDeviceCameraCustomAnalyticsRequest(); // \Meraki\Model\UpdateDeviceCameraCustomAnalyticsRequest

try {
    $result = $apiInstance->updateDeviceCameraCustomAnalytics($serial, $update_device_camera_custom_analytics_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomAnalyticsApi->updateDeviceCameraCustomAnalytics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_camera_custom_analytics_request** | [**\Meraki\Model\UpdateDeviceCameraCustomAnalyticsRequest**](../Model/UpdateDeviceCameraCustomAnalyticsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceCameraCustomAnalytics200Response**](../Model/GetDeviceCameraCustomAnalytics200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
