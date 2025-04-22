# # UpdateNetworkSwitchAccessPolicyRequestRadiusServersInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**server_id** | **string** | Unique ID of the RADIUS server. When provided, the existing RADIUS server will be updated instead of creating a new one | [optional]
**organization_radius_server_id** | **string** | Organization wide RADIUS server ID. If this field is provided, the host, port and secret field will be ignored | [optional]
**host** | **string** | Public IP address of the RADIUS server | [optional]
**port** | **int** | UDP port that the RADIUS server listens on for access requests | [optional]
**secret** | **string** | RADIUS client shared secret | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
