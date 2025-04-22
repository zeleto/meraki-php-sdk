# # UpdateDeviceCameraSenseRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sense_enabled** | **bool** | Boolean indicating if sense(license) is enabled(true) or disabled(false) on the camera | [optional]
**mqtt_broker_id** | **string** | The ID of the MQTT broker to be enabled on the camera. A value of null will disable MQTT on the camera | [optional]
**audio_detection** | [**\Meraki\Model\UpdateDeviceCameraSenseRequestAudioDetection**](UpdateDeviceCameraSenseRequestAudioDetection.md) |  | [optional]
**detection_model_id** | **string** | The ID of the object detection model | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
