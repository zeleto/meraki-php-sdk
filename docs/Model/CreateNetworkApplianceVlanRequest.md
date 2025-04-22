# # CreateNetworkApplianceVlanRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The VLAN ID of the new VLAN (must be between 1 and 4094) |
**name** | **string** | The name of the new VLAN |
**subnet** | **string** | The subnet of the VLAN | [optional]
**appliance_ip** | **string** | The local IP of the appliance on the VLAN | [optional]
**group_policy_id** | **string** | The id of the desired group policy to apply to the VLAN | [optional]
**template_vlan_type** | **string** | Type of subnetting of the VLAN. Applicable only for template network. | [optional] [default to 'same']
**cidr** | **string** | CIDR of the pool of subnets. Applicable only for template network. Each network bound to the template will automatically pick a subnet from this pool to build its own VLAN. | [optional]
**mask** | **int** | Mask used for the subnet of all bound to the template networks. Applicable only for template network. | [optional]
**ipv6** | [**\Meraki\Model\UpdateNetworkApplianceSingleLanRequestIpv6**](UpdateNetworkApplianceSingleLanRequestIpv6.md) |  | [optional]
**dhcp_handling** | **string** | The appliance&#39;s handling of DHCP requests on this VLAN. One of: &#39;Run a DHCP server&#39;, &#39;Relay DHCP to another server&#39; or &#39;Do not respond to DHCP requests&#39; | [optional]
**dhcp_lease_time** | **string** | The term of DHCP leases if the appliance is running a DHCP server on this VLAN. One of: &#39;30 minutes&#39;, &#39;1 hour&#39;, &#39;4 hours&#39;, &#39;12 hours&#39;, &#39;1 day&#39; or &#39;1 week&#39; | [optional]
**mandatory_dhcp** | [**\Meraki\Model\GetNetworkApplianceVlans200ResponseInnerMandatoryDhcp**](GetNetworkApplianceVlans200ResponseInnerMandatoryDhcp.md) |  | [optional]
**dhcp_boot_options_enabled** | **bool** | Use DHCP boot options specified in other properties | [optional]
**dhcp_options** | [**\Meraki\Model\GetNetworkApplianceVlans200ResponseInnerDhcpOptionsInner[]**](GetNetworkApplianceVlans200ResponseInnerDhcpOptionsInner.md) | The list of DHCP options that will be included in DHCP responses. Each object in the list should have \&quot;code\&quot;, \&quot;type\&quot;, and \&quot;value\&quot; properties. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
