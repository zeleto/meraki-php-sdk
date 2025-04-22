# # CreateNetworkFirmwareUpgradesStagedGroupRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the Staged Upgrade Group. Length must be 1 to 255 characters |
**description** | **string** | Description of the Staged Upgrade Group. Length must be 1 to 255 characters | [optional]
**is_default** | **bool** | Boolean indicating the default Group. Any device that does not have a group explicitly assigned will upgrade with this group |
**assigned_devices** | [**\Meraki\Model\CreateNetworkFirmwareUpgradesStagedGroupRequestAssignedDevices**](CreateNetworkFirmwareUpgradesStagedGroupRequestAssignedDevices.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
