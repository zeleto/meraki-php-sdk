# # UpdateNetworkApplianceVpnBgpRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | Boolean value to enable or disable the BGP configuration. When BGP is enabled, the asNumber (ASN) will be autopopulated with the preconfigured ASN at other Hubs or a default value if there is no ASN configured. |
**as_number** | **int** | An Autonomous System Number (ASN) is required if you are to run BGP and peer with another BGP Speaker outside of the Auto VPN domain. This ASN will be applied to the entire Auto VPN domain. The entire 4-byte ASN range is supported. So, the ASN must be an integer between 1 and 4294967295. When absent, this field is not updated. If no value exists then it defaults to 64512. | [optional]
**ibgp_hold_timer** | **int** | The iBGP holdtimer in seconds. The iBGP holdtimer must be an integer between 12 and 240. When absent, this field is not updated. If no value exists then it defaults to 240. | [optional]
**neighbors** | [**\Meraki\Model\UpdateNetworkApplianceVpnBgpRequestNeighborsInner[]**](UpdateNetworkApplianceVpnBgpRequestNeighborsInner.md) | List of BGP neighbors. This list replaces the existing set of neighbors. When absent, this field is not updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
