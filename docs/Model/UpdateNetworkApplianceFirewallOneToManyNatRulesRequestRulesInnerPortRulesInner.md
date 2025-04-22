# # UpdateNetworkApplianceFirewallOneToManyNatRulesRequestRulesInnerPortRulesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | A description of the rule | [optional]
**protocol** | **string** | &#39;tcp&#39; or &#39;udp&#39; | [optional]
**public_port** | **string** | Destination port of the traffic that is arriving on the WAN | [optional]
**local_ip** | **string** | Local IP address to which traffic will be forwarded | [optional]
**local_port** | **string** | Destination port of the forwarded traffic that will be sent from the MX to the specified host on the LAN. If you simply wish to forward the traffic without translating the port, this should be the same as the Public port | [optional]
**allowed_ips** | **string[]** | Remote IP addresses or ranges that are permitted to access the internal resource via this port forwarding rule, or &#39;any&#39; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
