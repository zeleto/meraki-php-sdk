# # GetOrganizationAssuranceAlerts200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the health alert |
**category_type** | **string** | Category type that the health alert belongs to |
**network** | [**\Meraki\Model\GetOrganizationAssuranceAlerts200ResponseInnerNetwork**](GetOrganizationAssuranceAlerts200ResponseInnerNetwork.md) |  |
**started_at** | **\DateTime** | Time when the alert started |
**resolved_at** | **\DateTime** | Time when the alert was resolved | [optional]
**dismissed_at** | **\DateTime** | Time when the alert was dismissed | [optional]
**device_type** | **string** | Device Type that the alert occurred on | [optional]
**type** | **string** | Alert Type |
**title** | **string** | Human Readable Title for Alert type |
**description** | **string** | Description of the alert | [optional]
**severity** | **string** | Alert severity |
**scope** | [**\Meraki\Model\GetOrganizationAssuranceAlerts200ResponseInnerScope**](GetOrganizationAssuranceAlerts200ResponseInnerScope.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
