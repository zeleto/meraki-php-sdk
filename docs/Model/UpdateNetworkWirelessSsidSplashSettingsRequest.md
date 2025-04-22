# # UpdateNetworkWirelessSsidSplashSettingsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**splash_url** | **string** | [optional] The custom splash URL of the click-through splash page. Note that the URL can be configured without necessarily being used. In order to enable the custom URL, see &#39;useSplashUrl&#39; | [optional]
**use_splash_url** | **bool** | [optional] Boolean indicating whether the users will be redirected to the custom splash url. A custom splash URL must be set if this is true. Note that depending on your SSID&#39;s access control settings, it may not be possible to use the custom splash URL. | [optional]
**splash_timeout** | **int** | Splash timeout in minutes. This will determine how often users will see the splash page. | [optional]
**redirect_url** | **string** | The custom redirect URL where the users will go after the splash page. | [optional]
**use_redirect_url** | **bool** | The Boolean indicating whether the the user will be redirected to the custom redirect URL after the splash page. A custom redirect URL must be set if this is true. | [optional]
**welcome_message** | **string** | The welcome message for the users on the splash page. | [optional]
**theme_id** | **string** | The id of the selected splash theme. | [optional]
**splash_logo** | [**\Meraki\Model\UpdateNetworkWirelessSsidSplashSettingsRequestSplashLogo**](UpdateNetworkWirelessSsidSplashSettingsRequestSplashLogo.md) |  | [optional]
**splash_image** | [**\Meraki\Model\UpdateNetworkWirelessSsidSplashSettingsRequestSplashImage**](UpdateNetworkWirelessSsidSplashSettingsRequestSplashImage.md) |  | [optional]
**splash_prepaid_front** | [**\Meraki\Model\UpdateNetworkWirelessSsidSplashSettingsRequestSplashPrepaidFront**](UpdateNetworkWirelessSsidSplashSettingsRequestSplashPrepaidFront.md) |  | [optional]
**block_all_traffic_before_sign_on** | **bool** | How restricted allowing traffic should be. If true, all traffic types are blocked until the splash page is acknowledged. If false, all non-HTTP traffic is allowed before the splash page is acknowledged. | [optional]
**controller_disconnection_behavior** | **string** | How login attempts should be handled when the controller is unreachable. Can be either &#39;open&#39;, &#39;restricted&#39;, or &#39;default&#39;. | [optional]
**allow_simultaneous_logins** | **bool** | Whether or not to allow simultaneous logins from different devices. | [optional]
**guest_sponsorship** | [**\Meraki\Model\UpdateNetworkWirelessSsidSplashSettingsRequestGuestSponsorship**](UpdateNetworkWirelessSsidSplashSettingsRequestGuestSponsorship.md) |  | [optional]
**billing** | [**\Meraki\Model\UpdateNetworkWirelessSsidSplashSettingsRequestBilling**](UpdateNetworkWirelessSsidSplashSettingsRequestBilling.md) |  | [optional]
**sentry_enrollment** | [**\Meraki\Model\UpdateNetworkWirelessSsidSplashSettingsRequestSentryEnrollment**](UpdateNetworkWirelessSsidSplashSettingsRequestSentryEnrollment.md) |  | [optional]
**self_registration** | [**\Meraki\Model\UpdateNetworkWirelessSsidSplashSettingsRequestSelfRegistration**](UpdateNetworkWirelessSsidSplashSettingsRequestSelfRegistration.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
