# # UpdateNetworkWirelessBluetoothSettingsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**scanning_enabled** | **bool** | Whether APs will scan for Bluetooth enabled clients. | [optional]
**advertising_enabled** | **bool** | Whether APs will advertise beacons. | [optional]
**uuid** | **string** | The UUID to be used in the beacon identifier. | [optional]
**major_minor_assignment_mode** | **string** | The way major and minor number should be assigned to nodes in the network. (&#39;Unique&#39;, &#39;Non-unique&#39;) | [optional]
**major** | **int** | The major number to be used in the beacon identifier. Only valid in &#39;Non-unique&#39; mode. | [optional]
**minor** | **int** | The minor number to be used in the beacon identifier. Only valid in &#39;Non-unique&#39; mode. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
