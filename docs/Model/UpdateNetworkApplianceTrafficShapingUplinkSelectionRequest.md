# # UpdateNetworkApplianceTrafficShapingUplinkSelectionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active_active_auto_vpn_enabled** | **bool** | Toggle for enabling or disabling active-active AutoVPN | [optional]
**default_uplink** | **string** | The default uplink. Must be one of: &#39;wan1&#39; or &#39;wan2&#39; | [optional]
**load_balancing_enabled** | **bool** | Toggle for enabling or disabling load balancing | [optional]
**failover_and_failback** | [**\Meraki\Model\UpdateNetworkApplianceTrafficShapingUplinkSelectionRequestFailoverAndFailback**](UpdateNetworkApplianceTrafficShapingUplinkSelectionRequestFailoverAndFailback.md) |  | [optional]
**wan_traffic_uplink_preferences** | [**\Meraki\Model\UpdateNetworkApplianceTrafficShapingUplinkSelectionRequestWanTrafficUplinkPreferencesInner[]**](UpdateNetworkApplianceTrafficShapingUplinkSelectionRequestWanTrafficUplinkPreferencesInner.md) | Array of uplink preference rules for WAN traffic | [optional]
**vpn_traffic_uplink_preferences** | [**\Meraki\Model\UpdateNetworkApplianceTrafficShapingUplinkSelectionRequestVpnTrafficUplinkPreferencesInner[]**](UpdateNetworkApplianceTrafficShapingUplinkSelectionRequestVpnTrafficUplinkPreferencesInner.md) | Array of uplink preference rules for VPN traffic | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
