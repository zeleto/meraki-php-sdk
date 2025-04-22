# # CreateOrganizationAdaptivePolicyAclRequestRulesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**policy** | **string** | &#39;allow&#39; or &#39;deny&#39; traffic specified by this rule. |
**protocol** | **string** | The type of protocol (must be &#39;tcp&#39;, &#39;udp&#39;, &#39;icmp&#39; or &#39;any&#39;). |
**src_port** | **string** | Source port. Must be in the format of single port: &#39;1&#39;, port list: &#39;1,2&#39; or port range: &#39;1-10&#39;, and in the range of 1-65535, or &#39;any&#39;. Default is &#39;any&#39;. | [optional]
**dst_port** | **string** | Destination port. Must be in the format of single port: &#39;1&#39;, port list: &#39;1,2&#39; or port range: &#39;1-10&#39;, and in the range of 1-65535, or &#39;any&#39;. Default is &#39;any&#39;. | [optional]
**log** | **bool** | If enabled, when this rule is hit an entry will be logged to the event log | [optional]
**tcp_established** | **bool** | If enabled, means TCP connection with this node must be established. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
