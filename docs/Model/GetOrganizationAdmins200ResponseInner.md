# # GetOrganizationAdmins200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Admin&#39;s ID | [optional]
**name** | **string** | Admin&#39;s username | [optional]
**email** | **string** | Admin&#39;s email address | [optional]
**org_access** | **string** | Admin&#39;s level of access to the organization | [optional]
**account_status** | **string** | Status of the admin&#39;s account | [optional]
**two_factor_auth_enabled** | **bool** | Indicates whether two-factor authentication is enabled | [optional]
**has_api_key** | **bool** | Indicates whether the admin has an API key | [optional]
**last_active** | **\DateTime** | Time when the admin was last active | [optional]
**tags** | [**\Meraki\Model\GetOrganizationAdmins200ResponseInnerTagsInner[]**](GetOrganizationAdmins200ResponseInnerTagsInner.md) | Admin tag information | [optional]
**networks** | [**\Meraki\Model\GetOrganizationAdmins200ResponseInnerNetworksInner[]**](GetOrganizationAdmins200ResponseInnerNetworksInner.md) | Admin network access information | [optional]
**authentication_method** | **string** | Admin&#39;s authentication method | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
