# # UpdateNetworkApplianceFirewallOneToManyNatRulesRequestRulesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**public_ip** | **string** | The IP address that will be used to access the internal resource from the WAN |
**uplink** | **string** | The physical WAN interface on which the traffic will arrive, formatted as &#39;internetN&#39; where N is an integer representing a valid uplink for the network&#39;s appliance |
**port_rules** | [**\Meraki\Model\UpdateNetworkApplianceFirewallOneToManyNatRulesRequestRulesInnerPortRulesInner[]**](UpdateNetworkApplianceFirewallOneToManyNatRulesRequestRulesInnerPortRulesInner.md) | An array of associated forwarding rules |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
