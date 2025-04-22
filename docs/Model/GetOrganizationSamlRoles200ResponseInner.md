# # GetOrganizationSamlRoles200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID associated with the SAML role | [optional]
**role** | **string** | The role of the SAML administrator | [optional]
**org_access** | **string** | The privilege of the SAML administrator on the organization | [optional]
**networks** | [**\Meraki\Model\GetOrganizationSamlRoles200ResponseInnerNetworksInner[]**](GetOrganizationSamlRoles200ResponseInnerNetworksInner.md) | The list of networks that the SAML administrator has privileges on | [optional]
**tags** | [**\Meraki\Model\GetOrganizationSamlRoles200ResponseInnerTagsInner[]**](GetOrganizationSamlRoles200ResponseInnerTagsInner.md) | The list of tags that the SAML administrator has privleges on | [optional]
**camera** | [**\Meraki\Model\GetOrganizationSamlRoles200ResponseInnerCameraInner[]**](GetOrganizationSamlRoles200ResponseInnerCameraInner.md) | The list of camera access privileges for SAML administrator | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
