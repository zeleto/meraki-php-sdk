# # BindAdministeredLicensingSubscriptionSubscription200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subscription_id** | **string** | Subscription ID | [optional]
**networks** | [**\Meraki\Model\BindAdministeredLicensingSubscriptionSubscription200ResponseNetworksInner[]**](BindAdministeredLicensingSubscriptionSubscription200ResponseNetworksInner.md) | Unbound networks | [optional]
**errors** | **string[]** | Array of errors if failed | [optional]
**insufficient_entitlements** | [**\Meraki\Model\GetAdministeredLicensingSubscriptionSubscriptionsComplianceStatuses200ResponseInnerViolationsByProductClassInnerMissingEntitlementsInner[]**](GetAdministeredLicensingSubscriptionSubscriptionsComplianceStatuses200ResponseInnerViolationsByProductClassInnerMissingEntitlementsInner.md) | A list of entitlements required to successfully bind the networks to the subscription | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
