# # GetNetworkApplianceFirewallPortForwardingRules200ResponseRulesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lan_ip** | **string** | IP address of the device subject to port forwarding | [optional]
**allowed_ips** | **string[]** | An array of ranges of WAN IP addresses that are allowed to make inbound connections on the specified ports or port ranges (or any) | [optional]
**name** | **string** | Name of the rule | [optional]
**protocol** | **string** | Protocol the rule applies to | [optional]
**public_port** | **string** | The port or port range forwarded to the host on the LAN | [optional]
**local_port** | **string** | The port or port range that receives forwarded traffic from the WAN | [optional]
**uplink** | **string** | The physical WAN interface on which the traffic arrives; allowed values vary by appliance model and configuration | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
