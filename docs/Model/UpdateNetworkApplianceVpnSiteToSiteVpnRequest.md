# # UpdateNetworkApplianceVpnSiteToSiteVpnRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mode** | **string** | The site-to-site VPN mode. Can be one of &#39;none&#39;, &#39;spoke&#39; or &#39;hub&#39; |
**hubs** | [**\Meraki\Model\UpdateNetworkApplianceVpnSiteToSiteVpnRequestHubsInner[]**](UpdateNetworkApplianceVpnSiteToSiteVpnRequestHubsInner.md) | The list of VPN hubs, in order of preference. In spoke mode, at least 1 hub is required. | [optional]
**subnets** | [**\Meraki\Model\UpdateNetworkApplianceVpnSiteToSiteVpnRequestSubnetsInner[]**](UpdateNetworkApplianceVpnSiteToSiteVpnRequestSubnetsInner.md) | The list of subnets and their VPN presence. | [optional]
**subnet** | [**\Meraki\Model\GetNetworkApplianceVpnSiteToSiteVpn200ResponseSubnet**](GetNetworkApplianceVpnSiteToSiteVpn200ResponseSubnet.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
