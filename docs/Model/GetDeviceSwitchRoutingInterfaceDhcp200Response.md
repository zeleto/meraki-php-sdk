# # GetDeviceSwitchRoutingInterfaceDhcp200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dhcp_mode** | **string** | The DHCP mode options for the switch stack interface (&#39;dhcpDisabled&#39;, &#39;dhcpRelay&#39; or &#39;dhcpServer&#39;) | [optional]
**dhcp_relay_server_ips** | **string[]** | The DHCP relay server IPs to which DHCP packets would get relayed for the switch stack interface | [optional]
**dhcp_lease_time** | **string** | The DHCP lease time config for the dhcp server running on the switch stack interface (&#39;30 minutes&#39;, &#39;1 hour&#39;, &#39;4 hours&#39;, &#39;12 hours&#39;, &#39;1 day&#39; or &#39;1 week&#39;) | [optional]
**dns_nameservers_option** | **string** | The DHCP name server option for the dhcp server running on the switch stack interface (&#39;googlePublicDns&#39;, &#39;openDns&#39; or &#39;custom&#39;) | [optional]
**dns_custom_nameservers** | **string[]** | The DHCP name server IPs when DHCP name server option is &#39;custom&#39; | [optional]
**boot_options_enabled** | **bool** | Enable DHCP boot options to provide PXE boot options configs for the dhcp server running on the switch stack interface | [optional]
**boot_next_server** | **string** | The PXE boot server IP for the DHCP server running on the switch stack interface | [optional]
**boot_file_name** | **string** | The PXE boot server file name for the DHCP server running on the switch stack interface | [optional]
**dhcp_options** | [**\Meraki\Model\GetDeviceSwitchRoutingInterfaceDhcp200ResponseDhcpOptionsInner[]**](GetDeviceSwitchRoutingInterfaceDhcp200ResponseDhcpOptionsInner.md) | Array of DHCP options consisting of code, type and value for the DHCP server running on the switch stack interface | [optional]
**reserved_ip_ranges** | [**\Meraki\Model\GetDeviceSwitchRoutingInterfaceDhcp200ResponseReservedIpRangesInner[]**](GetDeviceSwitchRoutingInterfaceDhcp200ResponseReservedIpRangesInner.md) | Array of DHCP reserved IP assignments for the DHCP server running on the switch stack interface | [optional]
**fixed_ip_assignments** | [**\Meraki\Model\GetDeviceSwitchRoutingInterfaceDhcp200ResponseFixedIpAssignmentsInner[]**](GetDeviceSwitchRoutingInterfaceDhcp200ResponseFixedIpAssignmentsInner.md) | Array of DHCP reserved IP assignments for the DHCP server running on the switch stack interface | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
