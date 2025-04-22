# # GetNetworkApplianceSsids200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **int** | The number of the SSID. | [optional]
**name** | **string** | The name of the SSID. | [optional]
**enabled** | **bool** | Whether or not the SSID is enabled. | [optional]
**default_vlan_id** | **int** | The VLAN ID of the VLAN associated to this SSID. | [optional]
**auth_mode** | **string** | The association control method for the SSID. | [optional]
**radius_servers** | [**\Meraki\Model\GetNetworkApplianceSsids200ResponseInnerRadiusServersInner[]**](GetNetworkApplianceSsids200ResponseInnerRadiusServersInner.md) | The RADIUS 802.1x servers to be used for authentication. | [optional]
**encryption_mode** | **string** | The psk encryption mode for the SSID. | [optional]
**wpa_encryption_mode** | **string** | WPA encryption mode for the SSID. | [optional]
**visible** | **bool** | Boolean indicating whether the MX should advertise or hide this SSID. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
