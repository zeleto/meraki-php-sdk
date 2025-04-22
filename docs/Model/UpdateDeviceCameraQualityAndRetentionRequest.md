# # UpdateDeviceCameraQualityAndRetentionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** | The ID of a quality and retention profile to assign to the camera. The profile&#39;s settings will override all of the per-camera quality and retention settings. If the value of this parameter is null, any existing profile will be unassigned from the camera. | [optional]
**motion_based_retention_enabled** | **bool** | Boolean indicating if motion-based retention is enabled(true) or disabled(false) on the camera. | [optional]
**audio_recording_enabled** | **bool** | Boolean indicating if audio recording is enabled(true) or disabled(false) on the camera | [optional]
**restricted_bandwidth_mode_enabled** | **bool** | Boolean indicating if restricted bandwidth is enabled(true) or disabled(false) on the camera. This setting does not apply to MV2 cameras. | [optional]
**quality** | **string** | Quality of the camera. Can be one of &#39;Standard&#39;, &#39;High&#39;, &#39;Enhanced&#39; or &#39;Ultra&#39;. Not all qualities are supported by every camera model. | [optional]
**resolution** | **string** | Resolution of the camera. Can be one of &#39;1280x720&#39;, &#39;1920x1080&#39;, &#39;1080x1080&#39;, &#39;2112x2112&#39;, &#39;2880x2880&#39;, &#39;2688x1512&#39; or &#39;3840x2160&#39;.Not all resolutions are supported by every camera model. | [optional]
**motion_detector_version** | **int** | The version of the motion detector that will be used by the camera. Only applies to Gen 2 cameras. Defaults to v2. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
