# # UpdateNetworkApplianceVpnBgpRequestNeighborsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ip** | **string** | The IPv4 address of the neighbor | [optional]
**ipv6** | [**\Meraki\Model\UpdateNetworkApplianceVpnBgpRequestNeighborsInnerIpv6**](UpdateNetworkApplianceVpnBgpRequestNeighborsInnerIpv6.md) |  | [optional]
**remote_as_number** | **int** | Remote ASN of the neighbor. The remote ASN must be an integer between 1 and 4294967295. |
**receive_limit** | **int** | The receive limit is the maximum number of routes that can be received from any BGP peer. The receive limit must be an integer between 0 and 2147483647. When absent, it defaults to 0. | [optional]
**allow_transit** | **bool** | When this feature is on, the Meraki device will advertise routes learned from other Autonomous Systems, thereby allowing traffic between Autonomous Systems to transit this AS. When absent, it defaults to false. | [optional]
**ebgp_hold_timer** | **int** | The eBGP hold timer in seconds for each neighbor. The eBGP hold timer must be an integer between 12 and 240. |
**ebgp_multihop** | **int** | Configure this if the neighbor is not adjacent. The eBGP multi-hop must be an integer between 1 and 255. |
**source_interface** | **string** | The output interface for peering with the remote BGP peer. Valid values are: &#39;wan{NUMBER}&#39; (e.g. &#39;wan3&#39;) or &#39;vlan{VLAN ID}&#39; (e.g. &#39;vlan123&#39;). | [optional]
**next_hop_ip** | **string** | The IPv4 address of the remote BGP peer that will establish a TCP session with the local MX. | [optional]
**ttl_security** | [**\Meraki\Model\UpdateNetworkApplianceVpnBgpRequestNeighborsInnerTtlSecurity**](UpdateNetworkApplianceVpnBgpRequestNeighborsInnerTtlSecurity.md) |  | [optional]
**authentication** | [**\Meraki\Model\UpdateNetworkApplianceVpnBgpRequestNeighborsInnerAuthentication**](UpdateNetworkApplianceVpnBgpRequestNeighborsInnerAuthentication.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
