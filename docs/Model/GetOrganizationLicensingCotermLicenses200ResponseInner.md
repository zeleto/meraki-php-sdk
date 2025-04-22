# # GetOrganizationLicensingCotermLicenses200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | The key of the license | [optional]
**organization_id** | **string** | The ID of the organization that the license is claimed in | [optional]
**duration** | **int** | The duration (term length) of the license, measured in days | [optional]
**mode** | **string** | The operation mode of the license when it was claimed | [optional]
**started_at** | **\DateTime** | When the license&#39;s term began (approximately the date when the license was created) | [optional]
**claimed_at** | **\DateTime** | When the license was claimed into the organization | [optional]
**invalidated** | **bool** | Flag to indicated that the license is invalidated | [optional]
**invalidated_at** | **\DateTime** | When the license was invalidated. Will be null for active licenses | [optional]
**expired** | **bool** | Flag to indicate if the license is expired | [optional]
**editions** | [**\Meraki\Model\GetOrganizationLicensingCotermLicenses200ResponseInnerEditionsInner[]**](GetOrganizationLicensingCotermLicenses200ResponseInnerEditionsInner.md) | The editions of the license for each relevant product type | [optional]
**counts** | [**\Meraki\Model\GetOrganizationLicensingCotermLicenses200ResponseInnerCountsInner[]**](GetOrganizationLicensingCotermLicenses200ResponseInnerCountsInner.md) | The counts of the license by model type | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
