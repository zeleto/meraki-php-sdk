# # UpdateDeviceSwitchRoutingInterfaceRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | A friendly name or description for the interface or VLAN. | [optional]
**subnet** | **string** | The network that this L3 interface is on, in CIDR notation (ex. 10.1.1.0/24). | [optional]
**interface_ip** | **string** | The IP address that will be used for Layer 3 routing on this VLAN or subnet. This cannot be the same         as the device management IP. | [optional]
**multicast_routing** | **string** | Enable multicast support if, multicast routing between VLANs is required. Options are:         &#39;disabled&#39;, &#39;enabled&#39; or &#39;IGMP snooping querier&#39;. Default is &#39;disabled&#39;. | [optional]
**vlan_id** | **int** | The VLAN this L3 interface is on. VLAN must be between 1 and 4094. | [optional]
**default_gateway** | **string** | The next hop for any traffic that isn&#39;t going to a directly connected subnet or over a static route.         This IP address must exist in a subnet with a L3 interface. Required if this is the first IPv4 interface. | [optional]
**ospf_settings** | [**\Meraki\Model\CreateDeviceSwitchRoutingInterfaceRequestOspfSettings**](CreateDeviceSwitchRoutingInterfaceRequestOspfSettings.md) |  | [optional]
**ipv6** | [**\Meraki\Model\CreateDeviceSwitchRoutingInterfaceRequestIpv6**](CreateDeviceSwitchRoutingInterfaceRequestIpv6.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
