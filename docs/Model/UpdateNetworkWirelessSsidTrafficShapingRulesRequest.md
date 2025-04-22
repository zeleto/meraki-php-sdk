# # UpdateNetworkWirelessSsidTrafficShapingRulesRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**traffic_shaping_enabled** | **bool** | Whether traffic shaping rules are applied to clients on your SSID. | [optional]
**default_rules_enabled** | **bool** | Whether default traffic shaping rules are enabled (true) or disabled (false). There are 4 default rules, which can be seen on your network&#39;s traffic shaping page. Note that default rules count against the rule limit of 8. | [optional]
**rules** | [**\Meraki\Model\GetNetworkWirelessSsidTrafficShapingRules200ResponseRulesInner[]**](GetNetworkWirelessSsidTrafficShapingRules200ResponseRulesInner.md) | An array of traffic shaping rules. Rules are applied in the order that     they are specified in. An empty list (or null) means no rules. Note that     you are allowed a maximum of 8 rules. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
