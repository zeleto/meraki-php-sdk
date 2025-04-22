# # UpdateOrganizationAlertsProfileRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | Is the alert config enabled | [optional]
**type** | **string** | The alert type | [optional]
**alert_condition** | [**\Meraki\Model\CreateOrganizationAlertsProfileRequestAlertCondition**](CreateOrganizationAlertsProfileRequestAlertCondition.md) |  | [optional]
**recipients** | [**\Meraki\Model\GetOrganizationAlertsProfiles200ResponseInnerRecipients**](GetOrganizationAlertsProfiles200ResponseInnerRecipients.md) |  | [optional]
**network_tags** | **string[]** | Networks with these tags will be monitored for the alert | [optional]
**description** | **string** | User supplied description of the alert | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
