# # UpdateNetworkApplianceFirewallOneToOneNatRulesRequestRulesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | A descriptive name for the rule | [optional]
**public_ip** | **string** | The IP address that will be used to access the internal resource from the WAN | [optional]
**lan_ip** | **string** | The IP address of the server or device that hosts the internal resource that you wish to make available on the WAN |
**uplink** | **string** | The physical WAN interface on which the traffic will arrive, formatted as &#39;internetN&#39; where N is an integer representing a valid uplink for the network&#39;s appliance | [optional]
**allowed_inbound** | [**\Meraki\Model\UpdateNetworkApplianceFirewallOneToOneNatRulesRequestRulesInnerAllowedInboundInner[]**](UpdateNetworkApplianceFirewallOneToOneNatRulesRequestRulesInnerAllowedInboundInner.md) | The ports this mapping will provide access on, and the remote IPs that will be allowed access to the resource | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
