# # UpdateNetworkWirelessSettingsRequestNamedVlansPoolDhcpMonitoring

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | Whether or not devices using named VLAN pools should remove dirty VLANs from the pool, thereby preventing clients from being assigned to VLANs where they would be unable to obtain an IP address via DHCP. | [optional]
**duration** | **int** | The duration in minutes that devices will refrain from using dirty VLANs before adding them back to the pool. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
