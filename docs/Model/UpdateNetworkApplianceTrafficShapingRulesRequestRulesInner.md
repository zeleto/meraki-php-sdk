# # UpdateNetworkApplianceTrafficShapingRulesRequestRulesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**definitions** | [**\Meraki\Model\UpdateNetworkApplianceTrafficShapingRulesRequestRulesInnerDefinitionsInner[]**](UpdateNetworkApplianceTrafficShapingRulesRequestRulesInnerDefinitionsInner.md) | A list of objects describing the definitions of your traffic shaping rule. At least one definition is required. |
**per_client_bandwidth_limits** | [**\Meraki\Model\UpdateNetworkApplianceTrafficShapingRulesRequestRulesInnerPerClientBandwidthLimits**](UpdateNetworkApplianceTrafficShapingRulesRequestRulesInnerPerClientBandwidthLimits.md) |  | [optional]
**dscp_tag_value** | **int** | The DSCP tag applied by your rule. null means &#39;Do not change DSCP tag&#39;.     For a list of possible tag values, use the trafficShaping/dscpTaggingOptions endpoint. | [optional]
**priority** | **string** | A string, indicating the priority level for packets bound to your rule.     Can be &#39;low&#39;, &#39;normal&#39; or &#39;high&#39;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
