# # GetAdministeredLicensingSubscriptionSubscriptions200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subscription_id** | **string** | Subscription&#39;s ID | [optional]
**name** | **string** | Subscription name | [optional]
**description** | **string** | Subscription description | [optional]
**status** | **string** | Subscription status | [optional]
**start_date** | **\DateTime** | Subscription start date | [optional]
**end_date** | **\DateTime** | Subscription expiration date | [optional]
**last_updated_at** | **\DateTime** | When the subscription was last changed | [optional]
**web_order_id** | **string** | Web order id | [optional]
**type** | **string** | Subscription type | [optional]
**smart_account** | [**\Meraki\Model\GetAdministeredLicensingSubscriptionSubscriptions200ResponseInnerSmartAccount**](GetAdministeredLicensingSubscriptionSubscriptions200ResponseInnerSmartAccount.md) |  | [optional]
**renewal_requested** | **bool** | Whether a renewal has been requested for the subscription | [optional]
**product_types** | **string[]** | Products the subscription has entitlements for | [optional]
**entitlements** | [**\Meraki\Model\GetAdministeredLicensingSubscriptionSubscriptions200ResponseInnerEntitlementsInner[]**](GetAdministeredLicensingSubscriptionSubscriptions200ResponseInnerEntitlementsInner.md) | Entitlement info | [optional]
**counts** | [**\Meraki\Model\GetAdministeredLicensingSubscriptionSubscriptions200ResponseInnerCounts**](GetAdministeredLicensingSubscriptionSubscriptions200ResponseInnerCounts.md) |  | [optional]
**enterprise_agreement** | [**\Meraki\Model\GetAdministeredLicensingSubscriptionSubscriptions200ResponseInnerEnterpriseAgreement**](GetAdministeredLicensingSubscriptionSubscriptions200ResponseInnerEnterpriseAgreement.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
