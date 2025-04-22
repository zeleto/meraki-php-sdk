# # CreateNetworkSwitchAccessPolicyRequestRadiusAccountingServersInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**organization_radius_server_id** | **string** | Organization wide RADIUS server ID. If this field is provided, the host, port and secret field will be ignored | [optional]
**host** | **string** | Public IP address of the RADIUS accounting server | [optional]
**port** | **int** | UDP port that the RADIUS Accounting server listens on for access requests | [optional]
**secret** | **string** | RADIUS client shared secret | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
