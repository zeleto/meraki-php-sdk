# # GetNetworkGroupPolicies200ResponseInnerFirewallAndTrafficShapingL3FirewallRulesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**comment** | **string** | Description of the rule (optional) | [optional]
**policy** | **string** | &#39;allow&#39; or &#39;deny&#39; traffic specified by this rule |
**protocol** | **string** | The type of protocol (must be &#39;tcp&#39;, &#39;udp&#39;, &#39;icmp&#39;, &#39;icmp6&#39; or &#39;any&#39;) |
**dest_port** | **string** | Destination port (integer in the range 1-65535), a port range (e.g. 8080-9090), or &#39;any&#39; | [optional]
**dest_cidr** | **string** | Destination IP address (in IP or CIDR notation), a fully-qualified domain name (FQDN, if your network supports it) or &#39;any&#39;. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
