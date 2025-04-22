# # GetNetworkSwitchAccessPolicies200ResponseInnerRadiusCriticalAuth

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data_vlan_id** | **int** | VLAN that clients who use data will be placed on when RADIUS authentication fails. Will be null if hostMode is Multi-Auth | [optional]
**voice_vlan_id** | **int** | VLAN that clients who use voice will be placed on when RADIUS authentication fails. Will be null if hostMode is Multi-Auth | [optional]
**suspend_port_bounce** | **bool** | Enable to suspend port bounce when RADIUS servers are unreachable | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
