# # GetNetworkApplianceVpnBgp200ResponseNeighborsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ip** | **string** | The IPv4 address of the neighbor | [optional]
**ipv6** | [**\Meraki\Model\GetNetworkApplianceVpnBgp200ResponseNeighborsInnerIpv6**](GetNetworkApplianceVpnBgp200ResponseNeighborsInnerIpv6.md) |  | [optional]
**remote_as_number** | **int** | Remote AS number of the neighbor | [optional]
**receive_limit** | **int** | The maximum number of routes that the appliance can receive from the neighbor | [optional]
**allow_transit** | **bool** | Whether the appliance will advertise routes learned from other Autonomous Systems | [optional]
**ebgp_hold_timer** | **int** | The eBGP hold time in seconds for the neighbor | [optional]
**ebgp_multihop** | **int** | The number of hops the appliance must traverse to establish a peering relationship with the neighbor | [optional]
**source_interface** | **string** | The output interface the appliance uses to establish a peering relationship with the neighbor | [optional]
**next_hop_ip** | **string** | The IPv4 address of the neighbor that will establish a TCP session with the appliance | [optional]
**ttl_security** | [**\Meraki\Model\GetNetworkApplianceVpnBgp200ResponseNeighborsInnerTtlSecurity**](GetNetworkApplianceVpnBgp200ResponseNeighborsInnerTtlSecurity.md) |  | [optional]
**authentication** | [**\Meraki\Model\GetNetworkApplianceVpnBgp200ResponseNeighborsInnerAuthentication**](GetNetworkApplianceVpnBgp200ResponseNeighborsInnerAuthentication.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
