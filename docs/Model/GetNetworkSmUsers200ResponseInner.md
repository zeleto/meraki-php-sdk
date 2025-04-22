# # GetNetworkSmUsers200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The Meraki managed Id of the user record. | [optional]
**email** | **string** | User email. | [optional]
**full_name** | **string** | User full name. | [optional]
**username** | **string** | The users username. | [optional]
**has_password** | **bool** | A boolean denoting if the user has a password associated with the record. | [optional]
**tags** | **string** | The set of tags the user is scoped to. | [optional]
**ad_groups** | **string[]** | Active Directory Groups the user belongs to. | [optional]
**azure_ad_groups** | **string[]** | Azure Active Directory Groups the user belongs to. | [optional]
**saml_groups** | **string[]** | SAML Groups the user belongs to. | [optional]
**asm_groups** | **string[]** | Apple School Manager Groups the user belongs to. | [optional]
**is_external** | **bool** | Whether the user was created using an external integration, or via the Meraki Dashboard. | [optional]
**display_name** | **string** | The user display name. | [optional]
**has_identity_certificate** | **bool** | A boolean indicating if the user has an associated identity certificate.. | [optional]
**user_thumbnail** | **string** | The url where the users thumbnail is hosted. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
