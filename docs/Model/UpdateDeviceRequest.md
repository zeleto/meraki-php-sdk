# # UpdateDeviceRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of a device | [optional]
**tags** | **string[]** | The list of tags of a device | [optional]
**lat** | **float** | The latitude of a device | [optional]
**lng** | **float** | The longitude of a device | [optional]
**address** | **string** | The address of a device | [optional]
**notes** | **string** | The notes for the device. String. Limited to 255 characters. | [optional]
**move_map_marker** | **bool** | Whether or not to set the latitude and longitude of a device based on the new address. Only applies when lat and lng are not specified. | [optional]
**switch_profile_id** | **string** | The ID of a switch template to bind to the device (for available switch templates, see the &#39;Switch Templates&#39; endpoint). Use null to unbind the switch device from the current profile. For a device to be bindable to a switch template, it must (1) be a switch, and (2) belong to a network that is bound to a configuration template. | [optional]
**floor_plan_id** | **string** | The floor plan to associate to this device. null disassociates the device from the floorplan. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
