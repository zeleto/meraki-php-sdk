# # GetNetworkGroupPolicies200ResponseInnerFirewallAndTrafficShapingL7FirewallRulesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**policy** | **string** | The policy applied to matching traffic. Must be &#39;deny&#39;. | [optional]
**type** | **string** | Type of the L7 Rule. Must be &#39;application&#39;, &#39;applicationCategory&#39;, &#39;host&#39;, &#39;port&#39; or &#39;ipRange&#39; | [optional]
**value** | **string** | The &#39;value&#39; of what you want to block. If &#39;type&#39; is &#39;host&#39;, &#39;port&#39; or &#39;ipRange&#39;, &#39;value&#39; must be a string matching either a hostname (e.g. somewhere.com), a port (e.g. 8080), or an IP range (e.g. 192.1.0.0/16). If &#39;type&#39; is &#39;application&#39; or &#39;applicationCategory&#39;, then &#39;value&#39; must be an object with an ID for the application. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
