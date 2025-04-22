# # GetNetworkAppliancePorts200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **int** | Number of the port | [optional]
**enabled** | **bool** | The status of the port | [optional]
**type** | **string** | The type of the port: &#39;access&#39; or &#39;trunk&#39;. | [optional]
**drop_untagged_traffic** | **bool** | Whether the trunk port can drop all untagged traffic. | [optional]
**vlan** | **int** | Native VLAN when the port is in Trunk mode. Access VLAN when the port is in Access mode. | [optional]
**allowed_vlans** | **string** | Comma-delimited list of the VLAN ID&#39;s allowed on the port, or &#39;all&#39; to permit all VLAN&#39;s on the port. | [optional]
**access_policy** | **string** | The name of the policy. Only applicable to Access ports. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
