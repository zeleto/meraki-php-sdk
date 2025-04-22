# # UpdateOrganizationAdminRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the dashboard administrator | [optional]
**org_access** | **string** | The privilege of the dashboard administrator on the organization. Can be one of &#39;full&#39;, &#39;read-only&#39;, &#39;enterprise&#39; or &#39;none&#39; | [optional]
**tags** | [**\Meraki\Model\CreateOrganizationAdminRequestTagsInner[]**](CreateOrganizationAdminRequestTagsInner.md) | The list of tags that the dashboard administrator has privileges on | [optional]
**networks** | [**\Meraki\Model\CreateOrganizationAdminRequestNetworksInner[]**](CreateOrganizationAdminRequestNetworksInner.md) | The list of networks that the dashboard administrator has privileges on | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
