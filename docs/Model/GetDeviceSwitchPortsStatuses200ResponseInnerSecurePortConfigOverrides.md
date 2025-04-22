# # GetDeviceSwitchPortsStatuses200ResponseInnerSecurePortConfigOverrides

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of the  (&#39;trunk&#39;, &#39;access&#39;, &#39;stack&#39; or &#39;routed&#39;). | [optional]
**vlan** | **int** | The VLAN of the . For a trunk port, this is the native VLAN. A null value will clear the value set for trunk ports. | [optional]
**voice_vlan** | **int** | The voice VLAN of the . Only applicable to access ports. | [optional]
**allowed_vlans** | **string** | The VLANs allowed on the . Only applicable to trunk ports. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
