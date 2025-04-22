# # GetNetworkApplianceVlans200ResponseInner

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
**dhcp_relay_server_ips** | **string[]** | The IPs of the DHCP servers that DHCP requests should be relayed to | [optional]
**dhcp_handling** | **string** | The appliance&#39;s handling of DHCP requests on this VLAN. One of: &#39;Run a DHCP server&#39;, &#39;Relay DHCP to another server&#39; or &#39;Do not respond to DHCP requests&#39; | [optional]
**dhcp_lease_time** | **string** | The term of DHCP leases if the appliance is running a DHCP server on this VLAN. One of: &#39;30 minutes&#39;, &#39;1 hour&#39;, &#39;4 hours&#39;, &#39;12 hours&#39;, &#39;1 day&#39; or &#39;1 week&#39; | [optional]
**dhcp_boot_options_enabled** | **bool** | Use DHCP boot options specified in other properties | [optional]
**dhcp_boot_next_server** | **string** | DHCP boot option to direct boot clients to the server to load the boot file from | [optional]
**dhcp_boot_filename** | **string** | DHCP boot option for boot filename | [optional]
**fixed_ip_assignments** | [**array<string,\Meraki\Model\GetNetworkApplianceVlans200ResponseInnerFixedIpAssignmentsValue>**](GetNetworkApplianceVlans200ResponseInnerFixedIpAssignmentsValue.md) | The DHCP fixed IP assignments on the VLAN. This should be an object that contains mappings from MAC addresses to objects that themselves each contain \&quot;ip\&quot; and \&quot;name\&quot; string fields. See the sample request/response for more details. | [optional]
**reserved_ip_ranges** | [**\Meraki\Model\GetNetworkApplianceVlans200ResponseInnerReservedIpRangesInner[]**](GetNetworkApplianceVlans200ResponseInnerReservedIpRangesInner.md) | The DHCP reserved IP ranges on the VLAN | [optional]
**dns_nameservers** | **string** | The DNS nameservers used for DHCP responses, either \&quot;upstream_dns\&quot;, \&quot;google_dns\&quot;, \&quot;opendns\&quot;, or a newline seperated string of IP addresses or domain names | [optional]
**dhcp_options** | [**\Meraki\Model\GetNetworkApplianceVlans200ResponseInnerDhcpOptionsInner[]**](GetNetworkApplianceVlans200ResponseInnerDhcpOptionsInner.md) | The list of DHCP options that will be included in DHCP responses. Each object in the list should have \&quot;code\&quot;, \&quot;type\&quot;, and \&quot;value\&quot; properties. | [optional]
**vpn_nat_subnet** | **string** | The translated VPN subnet if VPN and VPN subnet translation are enabled on the VLAN | [optional]
**mandatory_dhcp** | [**\Meraki\Model\GetNetworkApplianceVlans200ResponseInnerMandatoryDhcp**](GetNetworkApplianceVlans200ResponseInnerMandatoryDhcp.md) |  | [optional]
**ipv6** | [**\Meraki\Model\GetNetworkApplianceVlans200ResponseInnerIpv6**](GetNetworkApplianceVlans200ResponseInnerIpv6.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
