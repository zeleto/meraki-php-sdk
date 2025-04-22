# # UpdateOrganizationApplianceVpnVpnFirewallRulesRequestRulesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**comment** | **string** | Description of the rule (optional) | [optional]
**policy** | **string** | &#39;allow&#39; or &#39;deny&#39; traffic specified by this rule |
**protocol** | **string** | The type of protocol (must be &#39;tcp&#39;, &#39;udp&#39;, &#39;icmp&#39;, &#39;icmp6&#39; or &#39;any&#39;) |
**src_port** | **string** | Comma-separated list of source port(s) (integer in the range 1-65535), or &#39;any&#39; | [optional]
**src_cidr** | **string** | Comma-separated list of source IP address(es) (in IP or CIDR notation), or &#39;any&#39; (FQDN not supported) |
**dest_port** | **string** | Comma-separated list of destination port(s) (integer in the range 1-65535), or &#39;any&#39; | [optional]
**dest_cidr** | **string** | Comma-separated list of destination IP address(es) (in IP or CIDR notation) or &#39;any&#39; (FQDN not supported) |
**syslog_enabled** | **bool** | Log this rule to syslog (true or false, boolean value) - only applicable if a syslog has been configured (optional) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
