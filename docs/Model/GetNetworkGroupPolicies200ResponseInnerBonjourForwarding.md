# # GetNetworkGroupPolicies200ResponseInnerBonjourForwarding

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**settings** | **string** | How Bonjour rules are applied. Can be &#39;network default&#39;, &#39;ignore&#39; or &#39;custom&#39;. | [optional]
**rules** | [**\Meraki\Model\GetNetworkGroupPolicies200ResponseInnerBonjourForwardingRulesInner[]**](GetNetworkGroupPolicies200ResponseInnerBonjourForwardingRulesInner.md) | A list of the Bonjour forwarding rules for your group policy. If &#39;settings&#39; is set to &#39;custom&#39;, at least one rule must be specified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
