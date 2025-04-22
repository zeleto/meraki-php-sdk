# # GetOrganizationLicensesOverview200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | License status (Co-termination licensing only) | [optional]
**expiration_date** | **string** | License expiration date (Co-termination licensing only) | [optional]
**licensed_device_counts** | **array<string,int>** | License counts (Co-termination licensing only) | [optional]
**license_count** | **int** | Total number of licenses (Per-device licensing only) | [optional]
**states** | [**\Meraki\Model\GetOrganizationLicensesOverview200ResponseStates**](GetOrganizationLicensesOverview200ResponseStates.md) |  | [optional]
**license_types** | [**\Meraki\Model\GetOrganizationLicensesOverview200ResponseLicenseTypesInner[]**](GetOrganizationLicensesOverview200ResponseLicenseTypesInner.md) | Data by license type (Per-device licensing only) | [optional]
**systems_manager** | [**\Meraki\Model\GetOrganizationLicensesOverview200ResponseSystemsManager**](GetOrganizationLicensesOverview200ResponseSystemsManager.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
