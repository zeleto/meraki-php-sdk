# # CreateOrganizationActionBatch201Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the action batch. Can be used to check the status of the action batch at /organizations/{organizationId}/actionBatches/{actionBatchId} | [optional]
**organization_id** | **string** | ID of the organization this action batch belongs to | [optional]
**confirmed** | **bool** | Flag describing whether the action should be previewed before executing or not | [optional]
**synchronous** | **bool** | Flag describing whether actions should run synchronously or asynchronously | [optional]
**status** | [**\Meraki\Model\GetOrganizationActionBatches200ResponseInnerStatus**](GetOrganizationActionBatches200ResponseInnerStatus.md) |  | [optional]
**actions** | [**\Meraki\Model\GetOrganizationActionBatches200ResponseInnerActionsInner[]**](GetOrganizationActionBatches200ResponseInnerActionsInner.md) | A set of changes made as part of this action (&lt;a href&#x3D;&#39;https://developer.cisco.com/meraki/api/#/rest/guides/action-batches/&#39;&gt;more details&lt;/a&gt;) |
**callback** | [**\Meraki\Model\CreateDeviceLiveToolsArpTable201ResponseCallback**](CreateDeviceLiveToolsArpTable201ResponseCallback.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
