# # LockNetworkSmDevicesRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**wifi_macs** | **string[]** | The wifiMacs of the devices to be locked. | [optional]
**ids** | **string[]** | The ids of the devices to be locked. | [optional]
**serials** | **string[]** | The serials of the devices to be locked. | [optional]
**scope** | **string[]** | The scope (one of all, none, withAny, withAll, withoutAny, or withoutAll) and a set of tags of the devices to be locked. | [optional]
**pin** | **int** | The pin number for locking macOS devices (a six digit number). Required only for macOS devices. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
