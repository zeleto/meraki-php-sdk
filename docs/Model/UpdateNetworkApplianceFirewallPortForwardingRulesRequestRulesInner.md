# # UpdateNetworkApplianceFirewallPortForwardingRulesRequestRulesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | A descriptive name for the rule | [optional]
**lan_ip** | **string** | The IP address of the server or device that hosts the internal resource that you wish to make available on the WAN |
**uplink** | **string** | The physical WAN interface on which the traffic will arrive (&#39;internet1&#39; or, if available, &#39;internet2&#39; or &#39;both&#39;) | [optional]
**public_port** | **string** | A port or port ranges that will be forwarded to the host on the LAN |
**local_port** | **string** | A port or port ranges that will receive the forwarded traffic from the WAN |
**allowed_ips** | **string[]** | An array of ranges of WAN IP addresses that are allowed to make inbound connections on the specified ports or port ranges (or any) |
**protocol** | **string** | TCP or UDP |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
