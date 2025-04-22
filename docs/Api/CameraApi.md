# Meraki\CameraApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkCameraQualityRetentionProfile()**](CameraApi.md#createNetworkCameraQualityRetentionProfile) | **POST** /networks/{networkId}/camera/qualityRetentionProfiles | Creates new quality retention profile for this network. |
| [**createNetworkCameraWirelessProfile()**](CameraApi.md#createNetworkCameraWirelessProfile) | **POST** /networks/{networkId}/camera/wirelessProfiles | Creates a new camera wireless profile for this network. |
| [**createOrganizationCameraCustomAnalyticsArtifact()**](CameraApi.md#createOrganizationCameraCustomAnalyticsArtifact) | **POST** /organizations/{organizationId}/camera/customAnalytics/artifacts | Create custom analytics artifact |
| [**createOrganizationCameraRole()**](CameraApi.md#createOrganizationCameraRole) | **POST** /organizations/{organizationId}/camera/roles | Creates new role for this organization. |
| [**deleteNetworkCameraQualityRetentionProfile()**](CameraApi.md#deleteNetworkCameraQualityRetentionProfile) | **DELETE** /networks/{networkId}/camera/qualityRetentionProfiles/{qualityRetentionProfileId} | Delete an existing quality retention profile for this network. |
| [**deleteNetworkCameraWirelessProfile()**](CameraApi.md#deleteNetworkCameraWirelessProfile) | **DELETE** /networks/{networkId}/camera/wirelessProfiles/{wirelessProfileId} | Delete an existing camera wireless profile for this network. |
| [**deleteOrganizationCameraCustomAnalyticsArtifact()**](CameraApi.md#deleteOrganizationCameraCustomAnalyticsArtifact) | **DELETE** /organizations/{organizationId}/camera/customAnalytics/artifacts/{artifactId} | Delete Custom Analytics Artifact |
| [**deleteOrganizationCameraRole()**](CameraApi.md#deleteOrganizationCameraRole) | **DELETE** /organizations/{organizationId}/camera/roles/{roleId} | Delete an existing role for this organization. |
| [**generateDeviceCameraSnapshot()**](CameraApi.md#generateDeviceCameraSnapshot) | **POST** /devices/{serial}/camera/generateSnapshot | Generate a snapshot of what the camera sees at the specified time and return a link to that image. |
| [**getDeviceCameraAnalyticsLive()**](CameraApi.md#getDeviceCameraAnalyticsLive) | **GET** /devices/{serial}/camera/analytics/live | Returns live state from camera analytics zones |
| [**getDeviceCameraAnalyticsOverview()**](CameraApi.md#getDeviceCameraAnalyticsOverview) | **GET** /devices/{serial}/camera/analytics/overview | Returns an overview of aggregate analytics data for a timespan |
| [**getDeviceCameraAnalyticsRecent()**](CameraApi.md#getDeviceCameraAnalyticsRecent) | **GET** /devices/{serial}/camera/analytics/recent | Returns most recent record for analytics zones |
| [**getDeviceCameraAnalyticsZoneHistory()**](CameraApi.md#getDeviceCameraAnalyticsZoneHistory) | **GET** /devices/{serial}/camera/analytics/zones/{zoneId}/history | Return historical records for analytic zones |
| [**getDeviceCameraAnalyticsZones()**](CameraApi.md#getDeviceCameraAnalyticsZones) | **GET** /devices/{serial}/camera/analytics/zones | Returns all configured analytic zones for this camera |
| [**getDeviceCameraCustomAnalytics()**](CameraApi.md#getDeviceCameraCustomAnalytics) | **GET** /devices/{serial}/camera/customAnalytics | Return custom analytics settings for a camera |
| [**getDeviceCameraQualityAndRetention()**](CameraApi.md#getDeviceCameraQualityAndRetention) | **GET** /devices/{serial}/camera/qualityAndRetention | Returns quality and retention settings for the given camera |
| [**getDeviceCameraSense()**](CameraApi.md#getDeviceCameraSense) | **GET** /devices/{serial}/camera/sense | Returns sense settings for a given camera |
| [**getDeviceCameraSenseObjectDetectionModels()**](CameraApi.md#getDeviceCameraSenseObjectDetectionModels) | **GET** /devices/{serial}/camera/sense/objectDetectionModels | Returns the MV Sense object detection model list for the given camera |
| [**getDeviceCameraVideoLink()**](CameraApi.md#getDeviceCameraVideoLink) | **GET** /devices/{serial}/camera/videoLink | Returns video link to the specified camera |
| [**getDeviceCameraVideoSettings()**](CameraApi.md#getDeviceCameraVideoSettings) | **GET** /devices/{serial}/camera/video/settings | Returns video settings for the given camera |
| [**getDeviceCameraWirelessProfiles()**](CameraApi.md#getDeviceCameraWirelessProfiles) | **GET** /devices/{serial}/camera/wirelessProfiles | Returns wireless profile assigned to the given camera |
| [**getNetworkCameraQualityRetentionProfile()**](CameraApi.md#getNetworkCameraQualityRetentionProfile) | **GET** /networks/{networkId}/camera/qualityRetentionProfiles/{qualityRetentionProfileId} | Retrieve a single quality retention profile |
| [**getNetworkCameraQualityRetentionProfiles()**](CameraApi.md#getNetworkCameraQualityRetentionProfiles) | **GET** /networks/{networkId}/camera/qualityRetentionProfiles | List the quality retention profiles for this network |
| [**getNetworkCameraSchedules()**](CameraApi.md#getNetworkCameraSchedules) | **GET** /networks/{networkId}/camera/schedules | Returns a list of all camera recording schedules. |
| [**getNetworkCameraWirelessProfile()**](CameraApi.md#getNetworkCameraWirelessProfile) | **GET** /networks/{networkId}/camera/wirelessProfiles/{wirelessProfileId} | Retrieve a single camera wireless profile. |
| [**getNetworkCameraWirelessProfiles()**](CameraApi.md#getNetworkCameraWirelessProfiles) | **GET** /networks/{networkId}/camera/wirelessProfiles | List the camera wireless profiles for this network. |
| [**getOrganizationCameraBoundariesAreasByDevice()**](CameraApi.md#getOrganizationCameraBoundariesAreasByDevice) | **GET** /organizations/{organizationId}/camera/boundaries/areas/byDevice | Returns all configured area boundaries of cameras |
| [**getOrganizationCameraBoundariesLinesByDevice()**](CameraApi.md#getOrganizationCameraBoundariesLinesByDevice) | **GET** /organizations/{organizationId}/camera/boundaries/lines/byDevice | Returns all configured crossingline boundaries of cameras |
| [**getOrganizationCameraCustomAnalyticsArtifact()**](CameraApi.md#getOrganizationCameraCustomAnalyticsArtifact) | **GET** /organizations/{organizationId}/camera/customAnalytics/artifacts/{artifactId} | Get Custom Analytics Artifact |
| [**getOrganizationCameraCustomAnalyticsArtifacts()**](CameraApi.md#getOrganizationCameraCustomAnalyticsArtifacts) | **GET** /organizations/{organizationId}/camera/customAnalytics/artifacts | List Custom Analytics Artifacts |
| [**getOrganizationCameraDetectionsHistoryByBoundaryByInterval()**](CameraApi.md#getOrganizationCameraDetectionsHistoryByBoundaryByInterval) | **GET** /organizations/{organizationId}/camera/detections/history/byBoundary/byInterval | Returns analytics data for timespans |
| [**getOrganizationCameraOnboardingStatuses()**](CameraApi.md#getOrganizationCameraOnboardingStatuses) | **GET** /organizations/{organizationId}/camera/onboarding/statuses | Fetch onboarding status of cameras |
| [**getOrganizationCameraPermission()**](CameraApi.md#getOrganizationCameraPermission) | **GET** /organizations/{organizationId}/camera/permissions/{permissionScopeId} | Retrieve a single permission scope |
| [**getOrganizationCameraPermissions()**](CameraApi.md#getOrganizationCameraPermissions) | **GET** /organizations/{organizationId}/camera/permissions | List the permissions scopes for this organization |
| [**getOrganizationCameraRole()**](CameraApi.md#getOrganizationCameraRole) | **GET** /organizations/{organizationId}/camera/roles/{roleId} | Retrieve a single role. |
| [**getOrganizationCameraRoles()**](CameraApi.md#getOrganizationCameraRoles) | **GET** /organizations/{organizationId}/camera/roles | List all the roles in this organization |
| [**updateDeviceCameraCustomAnalytics()**](CameraApi.md#updateDeviceCameraCustomAnalytics) | **PUT** /devices/{serial}/camera/customAnalytics | Update custom analytics settings for a camera |
| [**updateDeviceCameraQualityAndRetention()**](CameraApi.md#updateDeviceCameraQualityAndRetention) | **PUT** /devices/{serial}/camera/qualityAndRetention | Update quality and retention settings for the given camera |
| [**updateDeviceCameraSense()**](CameraApi.md#updateDeviceCameraSense) | **PUT** /devices/{serial}/camera/sense | Update sense settings for the given camera |
| [**updateDeviceCameraVideoSettings()**](CameraApi.md#updateDeviceCameraVideoSettings) | **PUT** /devices/{serial}/camera/video/settings | Update video settings for the given camera |
| [**updateDeviceCameraWirelessProfiles()**](CameraApi.md#updateDeviceCameraWirelessProfiles) | **PUT** /devices/{serial}/camera/wirelessProfiles | Assign wireless profiles to the given camera |
| [**updateNetworkCameraQualityRetentionProfile()**](CameraApi.md#updateNetworkCameraQualityRetentionProfile) | **PUT** /networks/{networkId}/camera/qualityRetentionProfiles/{qualityRetentionProfileId} | Update an existing quality retention profile for this network. |
| [**updateNetworkCameraWirelessProfile()**](CameraApi.md#updateNetworkCameraWirelessProfile) | **PUT** /networks/{networkId}/camera/wirelessProfiles/{wirelessProfileId} | Update an existing camera wireless profile in this network. |
| [**updateOrganizationCameraOnboardingStatuses()**](CameraApi.md#updateOrganizationCameraOnboardingStatuses) | **PUT** /organizations/{organizationId}/camera/onboarding/statuses | Notify that credential handoff to camera has completed |
| [**updateOrganizationCameraRole()**](CameraApi.md#updateOrganizationCameraRole) | **PUT** /organizations/{organizationId}/camera/roles/{roleId} | Update an existing role in this organization. |


## `createNetworkCameraQualityRetentionProfile()`

```php
createNetworkCameraQualityRetentionProfile($network_id, $create_network_camera_quality_retention_profile_request): object
```

Creates new quality retention profile for this network.

Creates new quality retention profile for this network.

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_camera_quality_retention_profile_request = new \Meraki\Model\CreateNetworkCameraQualityRetentionProfileRequest(); // \Meraki\Model\CreateNetworkCameraQualityRetentionProfileRequest

try {
    $result = $apiInstance->createNetworkCameraQualityRetentionProfile($network_id, $create_network_camera_quality_retention_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->createNetworkCameraQualityRetentionProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_camera_quality_retention_profile_request** | [**\Meraki\Model\CreateNetworkCameraQualityRetentionProfileRequest**](../Model/CreateNetworkCameraQualityRetentionProfileRequest.md)|  | |

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

## `createNetworkCameraWirelessProfile()`

```php
createNetworkCameraWirelessProfile($network_id, $create_network_camera_wireless_profile_request): \Meraki\Model\GetNetworkCameraWirelessProfiles200ResponseInner
```

Creates a new camera wireless profile for this network.

Creates a new camera wireless profile for this network.

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_camera_wireless_profile_request = new \Meraki\Model\CreateNetworkCameraWirelessProfileRequest(); // \Meraki\Model\CreateNetworkCameraWirelessProfileRequest

try {
    $result = $apiInstance->createNetworkCameraWirelessProfile($network_id, $create_network_camera_wireless_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->createNetworkCameraWirelessProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_camera_wireless_profile_request** | [**\Meraki\Model\CreateNetworkCameraWirelessProfileRequest**](../Model/CreateNetworkCameraWirelessProfileRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkCameraWirelessProfiles200ResponseInner**](../Model/GetNetworkCameraWirelessProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new Meraki\Api\CameraApi(
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
    echo 'Exception when calling CameraApi->createOrganizationCameraCustomAnalyticsArtifact: ', $e->getMessage(), PHP_EOL;
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

## `createOrganizationCameraRole()`

```php
createOrganizationCameraRole($organization_id, $create_organization_camera_role_request): object
```

Creates new role for this organization.

Creates new role for this organization.

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_camera_role_request = new \Meraki\Model\CreateOrganizationCameraRoleRequest(); // \Meraki\Model\CreateOrganizationCameraRoleRequest

try {
    $result = $apiInstance->createOrganizationCameraRole($organization_id, $create_organization_camera_role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->createOrganizationCameraRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_camera_role_request** | [**\Meraki\Model\CreateOrganizationCameraRoleRequest**](../Model/CreateOrganizationCameraRoleRequest.md)|  | |

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

## `deleteNetworkCameraQualityRetentionProfile()`

```php
deleteNetworkCameraQualityRetentionProfile($network_id, $quality_retention_profile_id)
```

Delete an existing quality retention profile for this network.

Delete an existing quality retention profile for this network.

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$quality_retention_profile_id = 'quality_retention_profile_id_example'; // string | Quality retention profile ID

try {
    $apiInstance->deleteNetworkCameraQualityRetentionProfile($network_id, $quality_retention_profile_id);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->deleteNetworkCameraQualityRetentionProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **quality_retention_profile_id** | **string**| Quality retention profile ID | |

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

## `deleteNetworkCameraWirelessProfile()`

```php
deleteNetworkCameraWirelessProfile($network_id, $wireless_profile_id)
```

Delete an existing camera wireless profile for this network.

Delete an existing camera wireless profile for this network.

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$wireless_profile_id = 'wireless_profile_id_example'; // string | Wireless profile ID

try {
    $apiInstance->deleteNetworkCameraWirelessProfile($network_id, $wireless_profile_id);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->deleteNetworkCameraWirelessProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **wireless_profile_id** | **string**| Wireless profile ID | |

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


$apiInstance = new Meraki\Api\CameraApi(
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
    echo 'Exception when calling CameraApi->deleteOrganizationCameraCustomAnalyticsArtifact: ', $e->getMessage(), PHP_EOL;
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

## `deleteOrganizationCameraRole()`

```php
deleteOrganizationCameraRole($organization_id, $role_id)
```

Delete an existing role for this organization.

Delete an existing role for this organization.

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$role_id = 'role_id_example'; // string | Role ID

try {
    $apiInstance->deleteOrganizationCameraRole($organization_id, $role_id);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->deleteOrganizationCameraRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **role_id** | **string**| Role ID | |

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

## `generateDeviceCameraSnapshot()`

```php
generateDeviceCameraSnapshot($serial, $generate_device_camera_snapshot_request): \Meraki\Model\GenerateDeviceCameraSnapshot202Response
```

Generate a snapshot of what the camera sees at the specified time and return a link to that image.

Generate a snapshot of what the camera sees at the specified time and return a link to that image.

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$generate_device_camera_snapshot_request = new \Meraki\Model\GenerateDeviceCameraSnapshotRequest(); // \Meraki\Model\GenerateDeviceCameraSnapshotRequest

try {
    $result = $apiInstance->generateDeviceCameraSnapshot($serial, $generate_device_camera_snapshot_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->generateDeviceCameraSnapshot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **generate_device_camera_snapshot_request** | [**\Meraki\Model\GenerateDeviceCameraSnapshotRequest**](../Model/GenerateDeviceCameraSnapshotRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GenerateDeviceCameraSnapshot202Response**](../Model/GenerateDeviceCameraSnapshot202Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceCameraAnalyticsLive()`

```php
getDeviceCameraAnalyticsLive($serial): \Meraki\Model\GetDeviceCameraAnalyticsLive200Response
```

Returns live state from camera analytics zones

Returns live state from camera analytics zones

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceCameraAnalyticsLive($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->getDeviceCameraAnalyticsLive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceCameraAnalyticsLive200Response**](../Model/GetDeviceCameraAnalyticsLive200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceCameraAnalyticsOverview()`

```php
getDeviceCameraAnalyticsOverview($serial, $t0, $t1, $timespan, $object_type): \Meraki\Model\GetDeviceCameraAnalyticsOverview200ResponseInner[]
```

Returns an overview of aggregate analytics data for a timespan

Returns an overview of aggregate analytics data for a timespan

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 365 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 7 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days. The default is 1 hour.
$object_type = 'object_type_example'; // string | [optional] The object type for which analytics will be retrieved. The default object type is person. The available types are [person, vehicle].

try {
    $result = $apiInstance->getDeviceCameraAnalyticsOverview($serial, $t0, $t1, $timespan, $object_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->getDeviceCameraAnalyticsOverview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 365 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 7 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days. The default is 1 hour. | [optional] |
| **object_type** | **string**| [optional] The object type for which analytics will be retrieved. The default object type is person. The available types are [person, vehicle]. | [optional] |

### Return type

[**\Meraki\Model\GetDeviceCameraAnalyticsOverview200ResponseInner[]**](../Model/GetDeviceCameraAnalyticsOverview200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceCameraAnalyticsRecent()`

```php
getDeviceCameraAnalyticsRecent($serial, $object_type): \Meraki\Model\GetDeviceCameraAnalyticsRecent200ResponseInner[]
```

Returns most recent record for analytics zones

Returns most recent record for analytics zones

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$object_type = 'object_type_example'; // string | [optional] The object type for which analytics will be retrieved. The default object type is person. The available types are [person, vehicle].

try {
    $result = $apiInstance->getDeviceCameraAnalyticsRecent($serial, $object_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->getDeviceCameraAnalyticsRecent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **object_type** | **string**| [optional] The object type for which analytics will be retrieved. The default object type is person. The available types are [person, vehicle]. | [optional] |

### Return type

[**\Meraki\Model\GetDeviceCameraAnalyticsRecent200ResponseInner[]**](../Model/GetDeviceCameraAnalyticsRecent200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceCameraAnalyticsZoneHistory()`

```php
getDeviceCameraAnalyticsZoneHistory($serial, $zone_id, $t0, $t1, $timespan, $resolution, $object_type): \Meraki\Model\GetDeviceCameraAnalyticsZoneHistory200ResponseInner[]
```

Return historical records for analytic zones

Return historical records for analytic zones

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$zone_id = 'zone_id_example'; // string | Zone ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 365 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 14 hours after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 14 hours. The default is 1 hour.
$resolution = 56; // int | The time resolution in seconds for returned data. The valid resolutions are: 60. The default is 60.
$object_type = 'object_type_example'; // string | [optional] The object type for which analytics will be retrieved. The default object type is person. The available types are [person, vehicle].

try {
    $result = $apiInstance->getDeviceCameraAnalyticsZoneHistory($serial, $zone_id, $t0, $t1, $timespan, $resolution, $object_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->getDeviceCameraAnalyticsZoneHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **zone_id** | **string**| Zone ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 365 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 14 hours after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 14 hours. The default is 1 hour. | [optional] |
| **resolution** | **int**| The time resolution in seconds for returned data. The valid resolutions are: 60. The default is 60. | [optional] |
| **object_type** | **string**| [optional] The object type for which analytics will be retrieved. The default object type is person. The available types are [person, vehicle]. | [optional] |

### Return type

[**\Meraki\Model\GetDeviceCameraAnalyticsZoneHistory200ResponseInner[]**](../Model/GetDeviceCameraAnalyticsZoneHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceCameraAnalyticsZones()`

```php
getDeviceCameraAnalyticsZones($serial): \Meraki\Model\GetDeviceCameraAnalyticsZones200ResponseInner[]
```

Returns all configured analytic zones for this camera

Returns all configured analytic zones for this camera

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceCameraAnalyticsZones($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->getDeviceCameraAnalyticsZones: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceCameraAnalyticsZones200ResponseInner[]**](../Model/GetDeviceCameraAnalyticsZones200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

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


$apiInstance = new Meraki\Api\CameraApi(
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
    echo 'Exception when calling CameraApi->getDeviceCameraCustomAnalytics: ', $e->getMessage(), PHP_EOL;
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

## `getDeviceCameraQualityAndRetention()`

```php
getDeviceCameraQualityAndRetention($serial): object
```

Returns quality and retention settings for the given camera

Returns quality and retention settings for the given camera

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceCameraQualityAndRetention($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->getDeviceCameraQualityAndRetention: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

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

## `getDeviceCameraSense()`

```php
getDeviceCameraSense($serial): object
```

Returns sense settings for a given camera

Returns sense settings for a given camera

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceCameraSense($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->getDeviceCameraSense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

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

## `getDeviceCameraSenseObjectDetectionModels()`

```php
getDeviceCameraSenseObjectDetectionModels($serial): object[]
```

Returns the MV Sense object detection model list for the given camera

Returns the MV Sense object detection model list for the given camera

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceCameraSenseObjectDetectionModels($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->getDeviceCameraSenseObjectDetectionModels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

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

## `getDeviceCameraVideoLink()`

```php
getDeviceCameraVideoLink($serial, $timestamp): object
```

Returns video link to the specified camera

Returns video link to the specified camera. If a timestamp is supplied, it links to that timestamp.

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$timestamp = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | [optional] The video link will start at this time. The timestamp should be a string in ISO8601 format. If no timestamp is specified, we will assume current time.

try {
    $result = $apiInstance->getDeviceCameraVideoLink($serial, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->getDeviceCameraVideoLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **timestamp** | **\DateTime**| [optional] The video link will start at this time. The timestamp should be a string in ISO8601 format. If no timestamp is specified, we will assume current time. | [optional] |

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

## `getDeviceCameraVideoSettings()`

```php
getDeviceCameraVideoSettings($serial): \Meraki\Model\GetDeviceCameraVideoSettings200Response
```

Returns video settings for the given camera

Returns video settings for the given camera

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceCameraVideoSettings($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->getDeviceCameraVideoSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceCameraVideoSettings200Response**](../Model/GetDeviceCameraVideoSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceCameraWirelessProfiles()`

```php
getDeviceCameraWirelessProfiles($serial): object
```

Returns wireless profile assigned to the given camera

Returns wireless profile assigned to the given camera

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceCameraWirelessProfiles($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->getDeviceCameraWirelessProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

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

## `getNetworkCameraQualityRetentionProfile()`

```php
getNetworkCameraQualityRetentionProfile($network_id, $quality_retention_profile_id): object
```

Retrieve a single quality retention profile

Retrieve a single quality retention profile

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$quality_retention_profile_id = 'quality_retention_profile_id_example'; // string | Quality retention profile ID

try {
    $result = $apiInstance->getNetworkCameraQualityRetentionProfile($network_id, $quality_retention_profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->getNetworkCameraQualityRetentionProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **quality_retention_profile_id** | **string**| Quality retention profile ID | |

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

## `getNetworkCameraQualityRetentionProfiles()`

```php
getNetworkCameraQualityRetentionProfiles($network_id): object[]
```

List the quality retention profiles for this network

List the quality retention profiles for this network

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkCameraQualityRetentionProfiles($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->getNetworkCameraQualityRetentionProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

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

## `getNetworkCameraSchedules()`

```php
getNetworkCameraSchedules($network_id): \Meraki\Model\GetNetworkCameraSchedules200ResponseInner[]
```

Returns a list of all camera recording schedules.

Returns a list of all camera recording schedules.

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkCameraSchedules($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->getNetworkCameraSchedules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkCameraSchedules200ResponseInner[]**](../Model/GetNetworkCameraSchedules200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkCameraWirelessProfile()`

```php
getNetworkCameraWirelessProfile($network_id, $wireless_profile_id): \Meraki\Model\GetNetworkCameraWirelessProfiles200ResponseInner
```

Retrieve a single camera wireless profile.

Retrieve a single camera wireless profile.

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$wireless_profile_id = 'wireless_profile_id_example'; // string | Wireless profile ID

try {
    $result = $apiInstance->getNetworkCameraWirelessProfile($network_id, $wireless_profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->getNetworkCameraWirelessProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **wireless_profile_id** | **string**| Wireless profile ID | |

### Return type

[**\Meraki\Model\GetNetworkCameraWirelessProfiles200ResponseInner**](../Model/GetNetworkCameraWirelessProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkCameraWirelessProfiles()`

```php
getNetworkCameraWirelessProfiles($network_id): \Meraki\Model\GetNetworkCameraWirelessProfiles200ResponseInner[]
```

List the camera wireless profiles for this network.

List the camera wireless profiles for this network.

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkCameraWirelessProfiles($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->getNetworkCameraWirelessProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkCameraWirelessProfiles200ResponseInner[]**](../Model/GetNetworkCameraWirelessProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationCameraBoundariesAreasByDevice()`

```php
getOrganizationCameraBoundariesAreasByDevice($organization_id, $serials): \Meraki\Model\GetOrganizationCameraBoundariesAreasByDevice200ResponseInner[]
```

Returns all configured area boundaries of cameras

Returns all configured area boundaries of cameras

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$serials = array('serials_example'); // string[] | A list of serial numbers. The returned cameras will be filtered to only include these serials.

try {
    $result = $apiInstance->getOrganizationCameraBoundariesAreasByDevice($organization_id, $serials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->getOrganizationCameraBoundariesAreasByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **serials** | [**string[]**](../Model/string.md)| A list of serial numbers. The returned cameras will be filtered to only include these serials. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationCameraBoundariesAreasByDevice200ResponseInner[]**](../Model/GetOrganizationCameraBoundariesAreasByDevice200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationCameraBoundariesLinesByDevice()`

```php
getOrganizationCameraBoundariesLinesByDevice($organization_id, $serials): \Meraki\Model\GetOrganizationCameraBoundariesLinesByDevice200ResponseInner[]
```

Returns all configured crossingline boundaries of cameras

Returns all configured crossingline boundaries of cameras

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$serials = array('serials_example'); // string[] | A list of serial numbers. The returned cameras will be filtered to only include these serials.

try {
    $result = $apiInstance->getOrganizationCameraBoundariesLinesByDevice($organization_id, $serials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->getOrganizationCameraBoundariesLinesByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **serials** | [**string[]**](../Model/string.md)| A list of serial numbers. The returned cameras will be filtered to only include these serials. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationCameraBoundariesLinesByDevice200ResponseInner[]**](../Model/GetOrganizationCameraBoundariesLinesByDevice200ResponseInner.md)

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


$apiInstance = new Meraki\Api\CameraApi(
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
    echo 'Exception when calling CameraApi->getOrganizationCameraCustomAnalyticsArtifact: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\CameraApi(
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
    echo 'Exception when calling CameraApi->getOrganizationCameraCustomAnalyticsArtifacts: ', $e->getMessage(), PHP_EOL;
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

## `getOrganizationCameraDetectionsHistoryByBoundaryByInterval()`

```php
getOrganizationCameraDetectionsHistoryByBoundaryByInterval($organization_id, $boundary_ids, $ranges, $duration, $per_page, $boundary_types): \Meraki\Model\GetOrganizationCameraDetectionsHistoryByBoundaryByInterval200ResponseInner[]
```

Returns analytics data for timespans

Returns analytics data for timespans

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$boundary_ids = array('boundary_ids_example'); // string[] | A list of boundary ids. The returned cameras will be filtered to only include these ids.
$ranges = array(new \Meraki\Model\\Meraki\Model\GetOrganizationCameraDetectionsHistoryByBoundaryByIntervalRangesParameterInner()); // \Meraki\Model\GetOrganizationCameraDetectionsHistoryByBoundaryByIntervalRangesParameterInner[] | A list of time ranges with intervals
$duration = 56; // int | The minimum time, in seconds, that the person or car remains in the area to be counted. Defaults to boundary configuration or 60.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 1 - 1000. Defaults to 1000.
$boundary_types = array('boundary_types_example'); // string[] | The detection types. Defaults to 'person'.

try {
    $result = $apiInstance->getOrganizationCameraDetectionsHistoryByBoundaryByInterval($organization_id, $boundary_ids, $ranges, $duration, $per_page, $boundary_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->getOrganizationCameraDetectionsHistoryByBoundaryByInterval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **boundary_ids** | [**string[]**](../Model/string.md)| A list of boundary ids. The returned cameras will be filtered to only include these ids. | |
| **ranges** | [**\Meraki\Model\GetOrganizationCameraDetectionsHistoryByBoundaryByIntervalRangesParameterInner[]**](../Model/\Meraki\Model\GetOrganizationCameraDetectionsHistoryByBoundaryByIntervalRangesParameterInner.md)| A list of time ranges with intervals | |
| **duration** | **int**| The minimum time, in seconds, that the person or car remains in the area to be counted. Defaults to boundary configuration or 60. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 1 - 1000. Defaults to 1000. | [optional] |
| **boundary_types** | [**string[]**](../Model/string.md)| The detection types. Defaults to &#39;person&#39;. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationCameraDetectionsHistoryByBoundaryByInterval200ResponseInner[]**](../Model/GetOrganizationCameraDetectionsHistoryByBoundaryByInterval200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationCameraOnboardingStatuses()`

```php
getOrganizationCameraOnboardingStatuses($organization_id, $serials, $network_ids): object[]
```

Fetch onboarding status of cameras

Fetch onboarding status of cameras

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$serials = array('serials_example'); // string[] | A list of serial numbers. The returned cameras will be filtered to only include these serials.
$network_ids = array('network_ids_example'); // string[] | A list of network IDs. The returned cameras will be filtered to only include these networks.

try {
    $result = $apiInstance->getOrganizationCameraOnboardingStatuses($organization_id, $serials, $network_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->getOrganizationCameraOnboardingStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **serials** | [**string[]**](../Model/string.md)| A list of serial numbers. The returned cameras will be filtered to only include these serials. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| A list of network IDs. The returned cameras will be filtered to only include these networks. | [optional] |

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

## `getOrganizationCameraPermission()`

```php
getOrganizationCameraPermission($organization_id, $permission_scope_id): \Meraki\Model\GetOrganizationCameraPermissions200ResponseInner
```

Retrieve a single permission scope

Retrieve a single permission scope

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$permission_scope_id = 'permission_scope_id_example'; // string | Permission scope ID

try {
    $result = $apiInstance->getOrganizationCameraPermission($organization_id, $permission_scope_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->getOrganizationCameraPermission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **permission_scope_id** | **string**| Permission scope ID | |

### Return type

[**\Meraki\Model\GetOrganizationCameraPermissions200ResponseInner**](../Model/GetOrganizationCameraPermissions200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationCameraPermissions()`

```php
getOrganizationCameraPermissions($organization_id): \Meraki\Model\GetOrganizationCameraPermissions200ResponseInner[]
```

List the permissions scopes for this organization

List the permissions scopes for this organization

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationCameraPermissions($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->getOrganizationCameraPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationCameraPermissions200ResponseInner[]**](../Model/GetOrganizationCameraPermissions200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationCameraRole()`

```php
getOrganizationCameraRole($organization_id, $role_id): object
```

Retrieve a single role.

Retrieve a single role.

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$role_id = 'role_id_example'; // string | Role ID

try {
    $result = $apiInstance->getOrganizationCameraRole($organization_id, $role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->getOrganizationCameraRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **role_id** | **string**| Role ID | |

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

## `getOrganizationCameraRoles()`

```php
getOrganizationCameraRoles($organization_id): object[]
```

List all the roles in this organization

List all the roles in this organization

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationCameraRoles($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->getOrganizationCameraRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

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


$apiInstance = new Meraki\Api\CameraApi(
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
    echo 'Exception when calling CameraApi->updateDeviceCameraCustomAnalytics: ', $e->getMessage(), PHP_EOL;
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

## `updateDeviceCameraQualityAndRetention()`

```php
updateDeviceCameraQualityAndRetention($serial, $update_device_camera_quality_and_retention_request): object
```

Update quality and retention settings for the given camera

Update quality and retention settings for the given camera

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_camera_quality_and_retention_request = new \Meraki\Model\UpdateDeviceCameraQualityAndRetentionRequest(); // \Meraki\Model\UpdateDeviceCameraQualityAndRetentionRequest

try {
    $result = $apiInstance->updateDeviceCameraQualityAndRetention($serial, $update_device_camera_quality_and_retention_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->updateDeviceCameraQualityAndRetention: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_camera_quality_and_retention_request** | [**\Meraki\Model\UpdateDeviceCameraQualityAndRetentionRequest**](../Model/UpdateDeviceCameraQualityAndRetentionRequest.md)|  | [optional] |

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

## `updateDeviceCameraSense()`

```php
updateDeviceCameraSense($serial, $update_device_camera_sense_request): object
```

Update sense settings for the given camera

Update sense settings for the given camera

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_camera_sense_request = new \Meraki\Model\UpdateDeviceCameraSenseRequest(); // \Meraki\Model\UpdateDeviceCameraSenseRequest

try {
    $result = $apiInstance->updateDeviceCameraSense($serial, $update_device_camera_sense_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->updateDeviceCameraSense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_camera_sense_request** | [**\Meraki\Model\UpdateDeviceCameraSenseRequest**](../Model/UpdateDeviceCameraSenseRequest.md)|  | [optional] |

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

## `updateDeviceCameraVideoSettings()`

```php
updateDeviceCameraVideoSettings($serial, $update_device_camera_video_settings_request): \Meraki\Model\GetDeviceCameraVideoSettings200Response
```

Update video settings for the given camera

Update video settings for the given camera

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_camera_video_settings_request = new \Meraki\Model\UpdateDeviceCameraVideoSettingsRequest(); // \Meraki\Model\UpdateDeviceCameraVideoSettingsRequest

try {
    $result = $apiInstance->updateDeviceCameraVideoSettings($serial, $update_device_camera_video_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->updateDeviceCameraVideoSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_camera_video_settings_request** | [**\Meraki\Model\UpdateDeviceCameraVideoSettingsRequest**](../Model/UpdateDeviceCameraVideoSettingsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceCameraVideoSettings200Response**](../Model/GetDeviceCameraVideoSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceCameraWirelessProfiles()`

```php
updateDeviceCameraWirelessProfiles($serial, $update_device_camera_wireless_profiles_request): object
```

Assign wireless profiles to the given camera

Assign wireless profiles to the given camera. Incremental updates are not supported, all profile assignment need to be supplied at once.

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_camera_wireless_profiles_request = new \Meraki\Model\UpdateDeviceCameraWirelessProfilesRequest(); // \Meraki\Model\UpdateDeviceCameraWirelessProfilesRequest

try {
    $result = $apiInstance->updateDeviceCameraWirelessProfiles($serial, $update_device_camera_wireless_profiles_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->updateDeviceCameraWirelessProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_camera_wireless_profiles_request** | [**\Meraki\Model\UpdateDeviceCameraWirelessProfilesRequest**](../Model/UpdateDeviceCameraWirelessProfilesRequest.md)|  | |

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

## `updateNetworkCameraQualityRetentionProfile()`

```php
updateNetworkCameraQualityRetentionProfile($network_id, $quality_retention_profile_id, $update_network_camera_quality_retention_profile_request): object
```

Update an existing quality retention profile for this network.

Update an existing quality retention profile for this network.

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$quality_retention_profile_id = 'quality_retention_profile_id_example'; // string | Quality retention profile ID
$update_network_camera_quality_retention_profile_request = new \Meraki\Model\UpdateNetworkCameraQualityRetentionProfileRequest(); // \Meraki\Model\UpdateNetworkCameraQualityRetentionProfileRequest

try {
    $result = $apiInstance->updateNetworkCameraQualityRetentionProfile($network_id, $quality_retention_profile_id, $update_network_camera_quality_retention_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->updateNetworkCameraQualityRetentionProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **quality_retention_profile_id** | **string**| Quality retention profile ID | |
| **update_network_camera_quality_retention_profile_request** | [**\Meraki\Model\UpdateNetworkCameraQualityRetentionProfileRequest**](../Model/UpdateNetworkCameraQualityRetentionProfileRequest.md)|  | [optional] |

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

## `updateNetworkCameraWirelessProfile()`

```php
updateNetworkCameraWirelessProfile($network_id, $wireless_profile_id, $update_network_camera_wireless_profile_request): \Meraki\Model\GetNetworkCameraWirelessProfiles200ResponseInner
```

Update an existing camera wireless profile in this network.

Update an existing camera wireless profile in this network.

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$wireless_profile_id = 'wireless_profile_id_example'; // string | Wireless profile ID
$update_network_camera_wireless_profile_request = new \Meraki\Model\UpdateNetworkCameraWirelessProfileRequest(); // \Meraki\Model\UpdateNetworkCameraWirelessProfileRequest

try {
    $result = $apiInstance->updateNetworkCameraWirelessProfile($network_id, $wireless_profile_id, $update_network_camera_wireless_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->updateNetworkCameraWirelessProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **wireless_profile_id** | **string**| Wireless profile ID | |
| **update_network_camera_wireless_profile_request** | [**\Meraki\Model\UpdateNetworkCameraWirelessProfileRequest**](../Model/UpdateNetworkCameraWirelessProfileRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkCameraWirelessProfiles200ResponseInner**](../Model/GetNetworkCameraWirelessProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationCameraOnboardingStatuses()`

```php
updateOrganizationCameraOnboardingStatuses($organization_id, $update_organization_camera_onboarding_statuses_request): object
```

Notify that credential handoff to camera has completed

Notify that credential handoff to camera has completed

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$update_organization_camera_onboarding_statuses_request = new \Meraki\Model\UpdateOrganizationCameraOnboardingStatusesRequest(); // \Meraki\Model\UpdateOrganizationCameraOnboardingStatusesRequest

try {
    $result = $apiInstance->updateOrganizationCameraOnboardingStatuses($organization_id, $update_organization_camera_onboarding_statuses_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->updateOrganizationCameraOnboardingStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **update_organization_camera_onboarding_statuses_request** | [**\Meraki\Model\UpdateOrganizationCameraOnboardingStatusesRequest**](../Model/UpdateOrganizationCameraOnboardingStatusesRequest.md)|  | [optional] |

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

## `updateOrganizationCameraRole()`

```php
updateOrganizationCameraRole($organization_id, $role_id, $update_organization_camera_role_request): object
```

Update an existing role in this organization.

Update an existing role in this organization.

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


$apiInstance = new Meraki\Api\CameraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$role_id = 'role_id_example'; // string | Role ID
$update_organization_camera_role_request = new \Meraki\Model\UpdateOrganizationCameraRoleRequest(); // \Meraki\Model\UpdateOrganizationCameraRoleRequest

try {
    $result = $apiInstance->updateOrganizationCameraRole($organization_id, $role_id, $update_organization_camera_role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CameraApi->updateOrganizationCameraRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **role_id** | **string**| Role ID | |
| **update_organization_camera_role_request** | [**\Meraki\Model\UpdateOrganizationCameraRoleRequest**](../Model/UpdateOrganizationCameraRoleRequest.md)|  | [optional] |

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
