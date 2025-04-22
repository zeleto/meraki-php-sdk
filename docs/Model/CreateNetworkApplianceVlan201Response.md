# # CreateNetworkApplianceVlan201Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The VLAN ID of the VLAN | [optional]
**interface_id** | **string** | The interface ID of the VLAN | [optional]
**name** | **string** | The name of the VLAN | [optional]
**subnet** | **string** | The subnet of the VLAN | [optional]
**appliance_ip** | **string** | The local IP of the appliance on the VLAN | [optional]
**group_policy_id** | **string** | The id of the desired group policy to apply to the VLAN | [optional]
**template_vlan_type** | **string** | Type of subnetting of the VLAN. Applicable only for template network. | [optional] [default to 'same']
**cidr** | **string** | CIDR of the pool of subnets. Applicable only for template network. Each network bound to the template will automatically pick a subnet from this pool to build its own VLAN. | [optional]
**mask** | **int** | Mask used for the subnet of all bound to the template networks. Applicable only for template network. | [optional]
**mandatory_dhcp** | [**\Meraki\Model\GetNetworkApplianceVlans200ResponseInnerMandatoryDhcp**](GetNetworkApplianceVlans200ResponseInnerMandatoryDhcp.md) |  | [optional]
**ipv6** | [**\Meraki\Model\GetNetworkApplianceVlans200ResponseInnerIpv6**](GetNetworkApplianceVlans200ResponseInnerIpv6.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
