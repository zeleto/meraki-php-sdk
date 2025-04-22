# Meraki\QualityRetentionProfilesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNetworkCameraQualityRetentionProfile()**](QualityRetentionProfilesApi.md#createNetworkCameraQualityRetentionProfile) | **POST** /networks/{networkId}/camera/qualityRetentionProfiles | Creates new quality retention profile for this network. |
| [**deleteNetworkCameraQualityRetentionProfile()**](QualityRetentionProfilesApi.md#deleteNetworkCameraQualityRetentionProfile) | **DELETE** /networks/{networkId}/camera/qualityRetentionProfiles/{qualityRetentionProfileId} | Delete an existing quality retention profile for this network. |
| [**getNetworkCameraQualityRetentionProfile()**](QualityRetentionProfilesApi.md#getNetworkCameraQualityRetentionProfile) | **GET** /networks/{networkId}/camera/qualityRetentionProfiles/{qualityRetentionProfileId} | Retrieve a single quality retention profile |
| [**getNetworkCameraQualityRetentionProfiles()**](QualityRetentionProfilesApi.md#getNetworkCameraQualityRetentionProfiles) | **GET** /networks/{networkId}/camera/qualityRetentionProfiles | List the quality retention profiles for this network |
| [**updateNetworkCameraQualityRetentionProfile()**](QualityRetentionProfilesApi.md#updateNetworkCameraQualityRetentionProfile) | **PUT** /networks/{networkId}/camera/qualityRetentionProfiles/{qualityRetentionProfileId} | Update an existing quality retention profile for this network. |


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


$apiInstance = new Meraki\Api\QualityRetentionProfilesApi(
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
    echo 'Exception when calling QualityRetentionProfilesApi->createNetworkCameraQualityRetentionProfile: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\QualityRetentionProfilesApi(
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
    echo 'Exception when calling QualityRetentionProfilesApi->deleteNetworkCameraQualityRetentionProfile: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\QualityRetentionProfilesApi(
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
    echo 'Exception when calling QualityRetentionProfilesApi->getNetworkCameraQualityRetentionProfile: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\QualityRetentionProfilesApi(
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
    echo 'Exception when calling QualityRetentionProfilesApi->getNetworkCameraQualityRetentionProfiles: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\QualityRetentionProfilesApi(
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
    echo 'Exception when calling QualityRetentionProfilesApi->updateNetworkCameraQualityRetentionProfile: ', $e->getMessage(), PHP_EOL;
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
