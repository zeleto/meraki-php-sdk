# # GetOrganizationActionBatches200ResponseInnerStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**completed** | **bool** | Flag describing whether all actions in the action batch have completed | [optional]
**failed** | **bool** | Flag describing whether any actions in the action batch failed | [optional]
**errors** | **string[]** | List of errors encountered when running actions in the action batch | [optional]
**created_resources** | [**\Meraki\Model\GetOrganizationActionBatches200ResponseInnerStatusCreatedResourcesInner[]**](GetOrganizationActionBatches200ResponseInnerStatusCreatedResourcesInner.md) | Resources created as a result of this action batch |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
