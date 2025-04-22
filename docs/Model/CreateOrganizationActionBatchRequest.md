# # CreateOrganizationActionBatchRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**confirmed** | **bool** | Set to true for immediate execution. Set to false if the action should be previewed before executing. This property cannot be unset once it is true. Defaults to false. | [optional]
**synchronous** | **bool** | Set to true to force the batch to run synchronous. There can be at most 20 actions in synchronous batch. Defaults to false. | [optional]
**actions** | [**\Meraki\Model\CreateOrganizationActionBatchRequestActionsInner[]**](CreateOrganizationActionBatchRequestActionsInner.md) | A set of changes to make as part of this action (&lt;a href&#x3D;&#39;https://developer.cisco.com/meraki/api/#/rest/guides/action-batches/&#39;&gt;more details&lt;/a&gt;) |
**callback** | [**\Meraki\Model\CreateDeviceLiveToolsArpTableRequestCallback**](CreateDeviceLiveToolsArpTableRequestCallback.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
