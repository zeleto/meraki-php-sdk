# # CreateNetworkGroupPolicyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name for your group policy. Required. |
**scheduling** | [**\Meraki\Model\GetNetworkGroupPolicies200ResponseInnerScheduling**](GetNetworkGroupPolicies200ResponseInnerScheduling.md) |  | [optional]
**bandwidth** | [**\Meraki\Model\GetNetworkGroupPolicies200ResponseInnerBandwidth**](GetNetworkGroupPolicies200ResponseInnerBandwidth.md) |  | [optional]
**firewall_and_traffic_shaping** | [**\Meraki\Model\GetNetworkGroupPolicies200ResponseInnerFirewallAndTrafficShaping**](GetNetworkGroupPolicies200ResponseInnerFirewallAndTrafficShaping.md) |  | [optional]
**content_filtering** | [**\Meraki\Model\GetNetworkGroupPolicies200ResponseInnerContentFiltering**](GetNetworkGroupPolicies200ResponseInnerContentFiltering.md) |  | [optional]
**splash_auth_settings** | **string** | Whether clients bound to your policy will bypass splash authorization or behave according to the network&#39;s rules. Can be one of &#39;network default&#39; or &#39;bypass&#39;. Only available if your network has a wireless configuration. | [optional]
**vlan_tagging** | [**\Meraki\Model\GetNetworkGroupPolicies200ResponseInnerVlanTagging**](GetNetworkGroupPolicies200ResponseInnerVlanTagging.md) |  | [optional]
**bonjour_forwarding** | [**\Meraki\Model\GetNetworkGroupPolicies200ResponseInnerBonjourForwarding**](GetNetworkGroupPolicies200ResponseInnerBonjourForwarding.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
