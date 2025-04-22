# # CreateNetworkMerakiAuthUserRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Email address of the user |
**name** | **string** | Name of the user. Only required If the user is not a Dashboard administrator. | [optional]
**password** | **string** | The password for this user account. Only required If the user is not a Dashboard administrator. | [optional]
**account_type** | **string** | Authorization type for user. Can be &#39;Guest&#39; or &#39;802.1X&#39; for wireless networks, or &#39;Client VPN&#39; for MX networks. Defaults to &#39;802.1X&#39;. | [optional] [default to '802.1X']
**email_password_to_user** | **bool** | Whether or not Meraki should email the password to user. Default is false. | [optional]
**is_admin** | **bool** | Whether or not the user is a Dashboard administrator. | [optional]
**authorizations** | [**\Meraki\Model\CreateNetworkMerakiAuthUserRequestAuthorizationsInner[]**](CreateNetworkMerakiAuthUserRequestAuthorizationsInner.md) | Authorization zones and expiration dates for the user. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
