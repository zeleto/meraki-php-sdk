# # GetNetworkApplianceTrafficShapingUplinkSelection200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active_active_auto_vpn_enabled** | **bool** | Whether active-active AutoVPN is enabled | [optional]
**default_uplink** | **string** | The default uplink. Must be one of: &#39;wan1&#39; or &#39;wan2&#39; | [optional]
**load_balancing_enabled** | **bool** | Whether load balancing is enabled | [optional]
**failover_and_failback** | [**\Meraki\Model\GetNetworkApplianceTrafficShapingUplinkSelection200ResponseFailoverAndFailback**](GetNetworkApplianceTrafficShapingUplinkSelection200ResponseFailoverAndFailback.md) |  | [optional]
**wan_traffic_uplink_preferences** | [**\Meraki\Model\GetNetworkApplianceTrafficShapingUplinkSelection200ResponseWanTrafficUplinkPreferencesInner[]**](GetNetworkApplianceTrafficShapingUplinkSelection200ResponseWanTrafficUplinkPreferencesInner.md) | Uplink preference rules for WAN traffic | [optional]
**vpn_traffic_uplink_preferences** | [**\Meraki\Model\GetNetworkApplianceTrafficShapingUplinkSelection200ResponseVpnTrafficUplinkPreferencesInner[]**](GetNetworkApplianceTrafficShapingUplinkSelection200ResponseVpnTrafficUplinkPreferencesInner.md) | Uplink preference rules for VPN traffic | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
