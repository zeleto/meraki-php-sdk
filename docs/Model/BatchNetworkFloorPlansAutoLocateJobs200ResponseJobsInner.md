# # BatchNetworkFloorPlansAutoLocateJobs200ResponseJobsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Auto locate job ID | [optional]
**network_id** | **string** | Network ID | [optional]
**floor_plan_id** | **string** | Floor plan ID | [optional]
**status** | **string** | Auto locate job status. Possible values: &#39;scheduled&#39;, &#39;in progress&#39;, &#39;canceling&#39;, &#39;error&#39;, &#39;finished&#39;, &#39;published&#39;, &#39;canceled&#39; | [optional]
**scheduled_at** | **\DateTime** | Scheduled start time for auto locate job | [optional]
**completed** | [**\Meraki\Model\BatchNetworkFloorPlansAutoLocateJobs200ResponseJobsInnerCompleted**](BatchNetworkFloorPlansAutoLocateJobs200ResponseJobsInnerCompleted.md) |  | [optional]
**ranging** | [**\Meraki\Model\BatchNetworkFloorPlansAutoLocateJobs200ResponseJobsInnerRanging**](BatchNetworkFloorPlansAutoLocateJobs200ResponseJobsInnerRanging.md) |  | [optional]
**gnss** | [**\Meraki\Model\BatchNetworkFloorPlansAutoLocateJobs200ResponseJobsInnerGnss**](BatchNetworkFloorPlansAutoLocateJobs200ResponseJobsInnerGnss.md) |  | [optional]
**errors** | [**\Meraki\Model\BatchNetworkFloorPlansAutoLocateJobs200ResponseJobsInnerErrorsInner[]**](BatchNetworkFloorPlansAutoLocateJobs200ResponseJobsInnerErrorsInner.md) | List of errors that occurred during a failed run of auto locate | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
