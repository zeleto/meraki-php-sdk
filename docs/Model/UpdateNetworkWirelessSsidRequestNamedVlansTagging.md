# # UpdateNetworkWirelessSsidRequestNamedVlansTagging

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | Whether or not traffic should be directed to use specific VLAN names. | [optional]
**default_vlan_name** | **string** | The default VLAN name used to tag traffic in the absence of a matching AP tag. | [optional]
**by_ap_tags** | [**\Meraki\Model\UpdateNetworkWirelessSsidRequestNamedVlansTaggingByApTagsInner[]**](UpdateNetworkWirelessSsidRequestNamedVlansTaggingByApTagsInner.md) | The list of AP tags and VLAN names used for named VLAN tagging. If an AP has a tag matching one in the list, then traffic on this SSID will be directed to use the VLAN name associated to the tag. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
