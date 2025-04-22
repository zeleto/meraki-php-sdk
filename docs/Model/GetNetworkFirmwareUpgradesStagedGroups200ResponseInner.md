# # GetNetworkFirmwareUpgradesStagedGroups200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**group_id** | **string** | Id of staged upgrade group | [optional]
**name** | **string** | Name of the Staged Upgrade Group | [optional]
**description** | **string** | Description of the Staged Upgrade Group | [optional]
**is_default** | **bool** | Boolean indicating the default Group. Any device that does not have a group explicitly assigned will upgrade with this group | [optional]
**assigned_devices** | [**\Meraki\Model\GetNetworkFirmwareUpgradesStagedGroups200ResponseInnerAssignedDevices**](GetNetworkFirmwareUpgradesStagedGroups200ResponseInnerAssignedDevices.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
