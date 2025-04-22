# # CreateOrganizationAlertsProfileRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The alert type |
**alert_condition** | [**\Meraki\Model\CreateOrganizationAlertsProfileRequestAlertCondition**](CreateOrganizationAlertsProfileRequestAlertCondition.md) |  |
**recipients** | [**\Meraki\Model\GetOrganizationAlertsProfiles200ResponseInnerRecipients**](GetOrganizationAlertsProfiles200ResponseInnerRecipients.md) |  |
**network_tags** | **string[]** | Networks with these tags will be monitored for the alert |
**description** | **string** | User supplied description of the alert | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
