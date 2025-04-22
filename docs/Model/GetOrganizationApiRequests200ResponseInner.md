# # GetOrganizationApiRequests200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**admin_id** | **string** | Database ID for the admin user who made the API request. | [optional]
**method** | **string** | HTTP method used in the API request. | [optional]
**host** | **string** | The host which the API request was directed at. | [optional]
**path** | **string** | The API request path. | [optional]
**query_string** | **string** | The query string sent with the API request. | [optional]
**user_agent** | **string** | The API request user agent. | [optional]
**ts** | **\DateTime** | Timestamp, in iso8601 format, indicating when the API request was made. | [optional]
**response_code** | **int** | API request response code. | [optional]
**source_ip** | **string** | Public IP address from which the API request was made. | [optional]
**version** | **int** | API version of the endpoint. | [optional]
**operation_id** | **string** | Operation ID for the endpoint. | [optional]
**client** | [**\Meraki\Model\GetOrganizationApiRequests200ResponseInnerClient**](GetOrganizationApiRequests200ResponseInnerClient.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
