# # BatchNetworkFloorPlansAutoLocateJobsRequestJobsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**floor_plan_id** | **string** | The ID of the floor plan to run auto locate for |
**refresh** | **string[]** | The types of location data that should be refreshed for this job. The list must either contain both &#39;gnss&#39; and &#39;ranging&#39; or be empty, as we currently only support refreshing both &#39;gnss&#39; and &#39;ranging&#39;, or neither. | [optional]
**scheduled_at** | **\DateTime** | Timestamp in ISO8601 format which indicates when the auto locate job should be run. If omitted, the auto locate job will start immediately. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
