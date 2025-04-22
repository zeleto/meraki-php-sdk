# # CreateOrganizationSamlRoleRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**role** | **string** | The role of the SAML administrator |
**org_access** | **string** | The privilege of the SAML administrator on the organization. Can be one of &#39;none&#39;, &#39;read-only&#39;, &#39;full&#39; or &#39;enterprise&#39; |
**tags** | [**\Meraki\Model\CreateOrganizationSamlRoleRequestTagsInner[]**](CreateOrganizationSamlRoleRequestTagsInner.md) | The list of tags that the SAML administrator has privileges on | [optional]
**networks** | [**\Meraki\Model\CreateOrganizationSamlRoleRequestNetworksInner[]**](CreateOrganizationSamlRoleRequestNetworksInner.md) | The list of networks that the SAML administrator has privileges on | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
