# # UpdateNetworkApplianceSsidRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the SSID. | [optional]
**enabled** | **bool** | Whether or not the SSID is enabled. | [optional]
**default_vlan_id** | **int** | The VLAN ID of the VLAN associated to this SSID. This parameter is only valid if the network is in routed mode. | [optional]
**auth_mode** | **string** | The association control method for the SSID (&#39;open&#39;, &#39;psk&#39;, &#39;8021x-meraki&#39; or &#39;8021x-radius&#39;). | [optional]
**psk** | **string** | The passkey for the SSID. This param is only valid if the authMode is &#39;psk&#39;. | [optional]
**radius_servers** | [**\Meraki\Model\UpdateNetworkApplianceSsidRequestRadiusServersInner[]**](UpdateNetworkApplianceSsidRequestRadiusServersInner.md) | The RADIUS 802.1x servers to be used for authentication. This param is only valid if the authMode is &#39;8021x-radius&#39;. | [optional]
**encryption_mode** | **string** | The psk encryption mode for the SSID (&#39;wep&#39; or &#39;wpa&#39;). This param is only valid if the authMode is &#39;psk&#39;. | [optional]
**wpa_encryption_mode** | **string** | The types of WPA encryption. (&#39;WPA1 and WPA2&#39;, &#39;WPA2 only&#39;, &#39;WPA3 Transition Mode&#39; or &#39;WPA3 only&#39;). This param is only valid if (1) the authMode is &#39;psk&#39; &amp; the encryptionMode is &#39;wpa&#39; OR (2) the authMode is &#39;8021x-meraki&#39; OR (3) the authMode is &#39;8021x-radius&#39; | [optional]
**visible** | **bool** | Boolean indicating whether the MX should advertise or hide this SSID. | [optional]
**dhcp_enforced_deauthentication** | [**\Meraki\Model\UpdateNetworkApplianceSsidRequestDhcpEnforcedDeauthentication**](UpdateNetworkApplianceSsidRequestDhcpEnforcedDeauthentication.md) |  | [optional]
**dot11w** | [**\Meraki\Model\UpdateNetworkApplianceSsidRequestDot11w**](UpdateNetworkApplianceSsidRequestDot11w.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
