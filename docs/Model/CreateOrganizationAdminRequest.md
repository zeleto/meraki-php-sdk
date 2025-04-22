# # CreateOrganizationAdminRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | The email of the dashboard administrator. This attribute can not be updated. |
**name** | **string** | The name of the dashboard administrator |
**org_access** | **string** | The privilege of the dashboard administrator on the organization. Can be one of &#39;full&#39;, &#39;read-only&#39;, &#39;enterprise&#39; or &#39;none&#39; |
**tags** | [**\Meraki\Model\CreateOrganizationAdminRequestTagsInner[]**](CreateOrganizationAdminRequestTagsInner.md) | The list of tags that the dashboard administrator has privileges on | [optional]
**networks** | [**\Meraki\Model\CreateOrganizationAdminRequestNetworksInner[]**](CreateOrganizationAdminRequestNetworksInner.md) | The list of networks that the dashboard administrator has privileges on | [optional]
**authentication_method** | **string** | No longer used as of Cisco SecureX end-of-life. Can be one of &#39;Email&#39;. The default is Email authentication. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
