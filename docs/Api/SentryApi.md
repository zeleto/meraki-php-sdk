# Meraki\SentryApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrganizationSmSentryPoliciesAssignmentsByNetwork()**](SentryApi.md#getOrganizationSmSentryPoliciesAssignmentsByNetwork) | **GET** /organizations/{organizationId}/sm/sentry/policies/assignments/byNetwork | List the Sentry Policies for an organization ordered in ascending order of priority |
| [**updateOrganizationSmSentryPoliciesAssignments()**](SentryApi.md#updateOrganizationSmSentryPoliciesAssignments) | **PUT** /organizations/{organizationId}/sm/sentry/policies/assignments | Update an Organizations Sentry Policies using the provided list |


## `getOrganizationSmSentryPoliciesAssignmentsByNetwork()`

```php
getOrganizationSmSentryPoliciesAssignmentsByNetwork($organization_id, $per_page, $starting_after, $ending_before, $network_ids): \Meraki\Model\GetOrganizationSmSentryPoliciesAssignmentsByNetwork200ResponseInner[]
```

List the Sentry Policies for an organization ordered in ascending order of priority

List the Sentry Policies for an organization ordered in ascending order of priority

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


$apiInstance = new Meraki\Api\SentryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 50.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter Sentry Policies by Network Id

try {
    $result = $apiInstance->getOrganizationSmSentryPoliciesAssignmentsByNetwork($organization_id, $per_page, $starting_after, $ending_before, $network_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SentryApi->getOrganizationSmSentryPoliciesAssignmentsByNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 50. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter Sentry Policies by Network Id | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSmSentryPoliciesAssignmentsByNetwork200ResponseInner[]**](../Model/GetOrganizationSmSentryPoliciesAssignmentsByNetwork200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationSmSentryPoliciesAssignments()`

```php
updateOrganizationSmSentryPoliciesAssignments($organization_id, $update_organization_sm_sentry_policies_assignments_request): \Meraki\Model\UpdateOrganizationSmSentryPoliciesAssignments200Response
```

Update an Organizations Sentry Policies using the provided list

Update an Organizations Sentry Policies using the provided list. Sentry Policies are ordered in descending order of priority (i.e. highest priority at the bottom, this is opposite the Dashboard UI). Policies not present in the request will be deleted.

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


$apiInstance = new Meraki\Api\SentryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$update_organization_sm_sentry_policies_assignments_request = new \Meraki\Model\UpdateOrganizationSmSentryPoliciesAssignmentsRequest(); // \Meraki\Model\UpdateOrganizationSmSentryPoliciesAssignmentsRequest

try {
    $result = $apiInstance->updateOrganizationSmSentryPoliciesAssignments($organization_id, $update_organization_sm_sentry_policies_assignments_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SentryApi->updateOrganizationSmSentryPoliciesAssignments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **update_organization_sm_sentry_policies_assignments_request** | [**\Meraki\Model\UpdateOrganizationSmSentryPoliciesAssignmentsRequest**](../Model/UpdateOrganizationSmSentryPoliciesAssignmentsRequest.md)|  | |

### Return type

[**\Meraki\Model\UpdateOrganizationSmSentryPoliciesAssignments200Response**](../Model/UpdateOrganizationSmSentryPoliciesAssignments200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
