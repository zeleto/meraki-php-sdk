# # UpdateNetworkApplianceSecurityIntrusionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mode** | **string** | Set mode to &#39;disabled&#39;/&#39;detection&#39;/&#39;prevention&#39; (optional - omitting will leave current config unchanged) | [optional]
**ids_rulesets** | **string** | Set the detection ruleset &#39;connectivity&#39;/&#39;balanced&#39;/&#39;security&#39; (optional - omitting will leave current config unchanged). Default value is &#39;balanced&#39; if none currently saved | [optional]
**protected_networks** | [**\Meraki\Model\UpdateNetworkApplianceSecurityIntrusionRequestProtectedNetworks**](UpdateNetworkApplianceSecurityIntrusionRequestProtectedNetworks.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
