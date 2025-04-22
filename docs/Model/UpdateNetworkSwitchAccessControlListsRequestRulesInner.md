# # UpdateNetworkSwitchAccessControlListsRequestRulesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**comment** | **string** | Description of the rule (optional). | [optional]
**policy** | **string** | &#39;allow&#39; or &#39;deny&#39; traffic specified by this rule. |
**ip_version** | **string** | IP address version (must be &#39;any&#39;, &#39;ipv4&#39; or &#39;ipv6&#39;). Applicable only if network supports IPv6. Default value is &#39;ipv4&#39;. | [optional]
**protocol** | **string** | The type of protocol (must be &#39;tcp&#39;, &#39;udp&#39;, or &#39;any&#39;). |
**src_cidr** | **string** | Source IP address (in IP or CIDR notation) or &#39;any&#39;. |
**src_port** | **string** | Source port. Must be in the range  of 1-65535 or &#39;any&#39;. Default is &#39;any&#39;. | [optional]
**dst_cidr** | **string** | Destination IP address (in IP or CIDR notation) or &#39;any&#39;. |
**dst_port** | **string** | Destination port. Must be in the range of 1-65535 or &#39;any&#39;. Default is &#39;any&#39;. | [optional]
**vlan** | **string** | Incoming traffic VLAN. Must be in the range of 1-4095 or &#39;any&#39;. Default is &#39;any&#39;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
