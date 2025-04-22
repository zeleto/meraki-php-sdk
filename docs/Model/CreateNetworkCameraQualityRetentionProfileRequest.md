# # CreateNetworkCameraQualityRetentionProfileRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the new profile. Must be unique. This parameter is required. |
**motion_based_retention_enabled** | **bool** | Deletes footage older than 3 days in which no motion was detected. Can be either true or false. Defaults to false. This setting does not apply to MV2 cameras. | [optional]
**restricted_bandwidth_mode_enabled** | **bool** | Disable features that require additional bandwidth such as Motion Recap. Can be either true or false. Defaults to false. This setting does not apply to MV2 cameras. | [optional]
**audio_recording_enabled** | **bool** | Whether or not to record audio. Can be either true or false. Defaults to false. | [optional]
**cloud_archive_enabled** | **bool** | Create redundant video backup using Cloud Archive. Can be either true or false. Defaults to false. | [optional]
**motion_detector_version** | **int** | The version of the motion detector that will be used by the camera. Only applies to Gen 2 cameras. Defaults to v2. | [optional]
**smart_retention** | [**\Meraki\Model\CreateNetworkCameraQualityRetentionProfileRequestSmartRetention**](CreateNetworkCameraQualityRetentionProfileRequestSmartRetention.md) |  | [optional]
**schedule_id** | **string** | Schedule for which this camera will record video, or &#39;null&#39; to always record. | [optional]
**max_retention_days** | **int** | The maximum number of days for which the data will be stored, or &#39;null&#39; to keep data until storage space runs out. If the former, it can be in the range of one to ninety days. | [optional]
**video_settings** | [**\Meraki\Model\CreateNetworkCameraQualityRetentionProfileRequestVideoSettings**](CreateNetworkCameraQualityRetentionProfileRequestVideoSettings.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
