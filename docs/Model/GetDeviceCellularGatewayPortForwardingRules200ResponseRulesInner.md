# # GetDeviceCellularGatewayPortForwardingRules200ResponseRulesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | A descriptive name for the rule | [optional]
**lan_ip** | **string** | The IP address of the server or device that hosts the internal resource that you wish to make available on the WAN | [optional]
**public_port** | **string** | A port or port ranges that will be forwarded to the host on the LAN | [optional]
**local_port** | **string** | A port or port ranges that will receive the forwarded traffic from the WAN | [optional]
**allowed_ips** | **string[]** | An array of ranges of WAN IP addresses that are allowed to make inbound connections on the specified ports or port ranges. | [optional]
**protocol** | **string** | TCP or UDP | [optional]
**access** | **string** | &#x60;any&#x60; or &#x60;restricted&#x60;. Specify the right to make inbound connections on the specified ports or port ranges. If &#x60;restricted&#x60;, a list of allowed IPs is mandatory. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
