# # UpdateNetworkApplianceFirewallOneToOneNatRulesRequestRulesInnerAllowedInboundInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**protocol** | **string** | Either of the following: &#39;tcp&#39;, &#39;udp&#39;, &#39;icmp-ping&#39; or &#39;any&#39; | [optional]
**destination_ports** | **string[]** | An array of ports or port ranges that will be forwarded to the host on the LAN | [optional]
**allowed_ips** | **string[]** | An array of ranges of WAN IP addresses that are allowed to make inbound connections on the specified ports or port ranges, or &#39;any&#39; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
