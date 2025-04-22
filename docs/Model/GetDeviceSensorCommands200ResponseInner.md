# # GetDeviceSensorCommands200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**command_id** | **string** | ID to check the status of the command request | [optional]
**created_at** | **\DateTime** | Time when the command was triggered | [optional]
**completed_at** | **\DateTime** | Time when the command was completed | [optional]
**created_by** | [**\Meraki\Model\GetDeviceSensorCommands200ResponseInnerCreatedBy**](GetDeviceSensorCommands200ResponseInnerCreatedBy.md) |  | [optional]
**operation** | **string** | Operation run on the sensor | [optional]
**status** | **string** | Status of the command request | [optional]
**errors** | **string[]** | Array of errors if failed | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
