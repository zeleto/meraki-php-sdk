# # UpdateNetworkMerakiAuthUserRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the user. Only allowed If the user is not Dashboard administrator. | [optional]
**password** | **string** | The password for this user account. Only allowed If the user is not Dashboard administrator. | [optional]
**email_password_to_user** | **bool** | Whether or not Meraki should email the password to user. Default is false. | [optional]
**authorizations** | [**\Meraki\Model\UpdateNetworkMerakiAuthUserRequestAuthorizationsInner[]**](UpdateNetworkMerakiAuthUserRequestAuthorizationsInner.md) | Authorization zones and expiration dates for the user. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
