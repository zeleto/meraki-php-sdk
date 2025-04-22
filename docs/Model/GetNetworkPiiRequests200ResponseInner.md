# # GetNetworkPiiRequests200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The network or organization identifier | [optional]
**organization_wide** | **bool** | If the data returned is organization-wide. False indicates the data is network-wide. | [optional]
**network_id** | **string** | The network identifier | [optional]
**type** | **string** | The type of PII request | [optional]
**mac** | **string** | The MAC address of the PII request | [optional]
**datasets** | **string** | The stringified array of datasets related to the provided key that should be deleted. | [optional]
**status** | **string** | The status of the PII request | [optional]
**created_at** | **int** | The request&#39;s creation time | [optional]
**completed_at** | **int** | The request&#39;s completion time | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
