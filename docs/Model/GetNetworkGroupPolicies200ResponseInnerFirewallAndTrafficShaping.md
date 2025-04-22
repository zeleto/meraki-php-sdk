# # GetNetworkGroupPolicies200ResponseInnerFirewallAndTrafficShaping

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**settings** | **string** | How firewall and traffic shaping rules are enforced. Can be &#39;network default&#39;, &#39;ignore&#39; or &#39;custom&#39;. | [optional]
**traffic_shaping_rules** | [**\Meraki\Model\GetNetworkGroupPolicies200ResponseInnerFirewallAndTrafficShapingTrafficShapingRulesInner[]**](GetNetworkGroupPolicies200ResponseInnerFirewallAndTrafficShapingTrafficShapingRulesInner.md) | An array of traffic shaping rules. Rules are applied in the order that     they are specified in. An empty list (or null) means no rules. Note that     you are allowed a maximum of 8 rules. | [optional]
**l3_firewall_rules** | [**\Meraki\Model\GetNetworkGroupPolicies200ResponseInnerFirewallAndTrafficShapingL3FirewallRulesInner[]**](GetNetworkGroupPolicies200ResponseInnerFirewallAndTrafficShapingL3FirewallRulesInner.md) | An ordered array of the L3 firewall rules | [optional]
**l7_firewall_rules** | [**\Meraki\Model\GetNetworkGroupPolicies200ResponseInnerFirewallAndTrafficShapingL7FirewallRulesInner[]**](GetNetworkGroupPolicies200ResponseInnerFirewallAndTrafficShapingL7FirewallRulesInner.md) | An ordered array of L7 firewall rules | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
