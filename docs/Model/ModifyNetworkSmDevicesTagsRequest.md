# # ModifyNetworkSmDevicesTagsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**wifi_macs** | **string[]** | The wifiMacs of the devices to be modified. | [optional]
**ids** | **string[]** | The ids of the devices to be modified. | [optional]
**serials** | **string[]** | The serials of the devices to be modified. | [optional]
**scope** | **string[]** | The scope (one of all, none, withAny, withAll, withoutAny, or withoutAll) and a set of tags of the devices to be modified. | [optional]
**tags** | **string[]** | The tags to be added, deleted, or updated. |
**update_action** | **string** | One of add, delete, or update. Only devices that have been modified will be returned. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
