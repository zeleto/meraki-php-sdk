# # GetNetworkWirelessSsidSplashSettings200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ssid_number** | **int** | SSID number | [optional]
**splash_page** | **string** | The type of splash page for this SSID | [optional]
**use_splash_url** | **bool** | Boolean indicating whether the users will be redirected to the custom splash url | [optional]
**splash_url** | **string** | The custom splash URL of the click-through splash page. | [optional]
**splash_timeout** | **int** | Splash timeout in minutes. | [optional]
**redirect_url** | **string** | The custom redirect URL where the users will go after the splash page. | [optional]
**use_redirect_url** | **bool** | The Boolean indicating whether the the user will be redirected to the custom redirect URL after the splash page. | [optional]
**welcome_message** | **string** | The welcome message for the users on the splash page. | [optional]
**theme_id** | **string** | The id of the selected splash theme. | [optional]
**splash_logo** | [**\Meraki\Model\GetNetworkWirelessSsidSplashSettings200ResponseSplashLogo**](GetNetworkWirelessSsidSplashSettings200ResponseSplashLogo.md) |  | [optional]
**splash_image** | [**\Meraki\Model\GetNetworkWirelessSsidSplashSettings200ResponseSplashImage**](GetNetworkWirelessSsidSplashSettings200ResponseSplashImage.md) |  | [optional]
**splash_prepaid_front** | [**\Meraki\Model\GetNetworkWirelessSsidSplashSettings200ResponseSplashPrepaidFront**](GetNetworkWirelessSsidSplashSettings200ResponseSplashPrepaidFront.md) |  | [optional]
**guest_sponsorship** | [**\Meraki\Model\GetNetworkWirelessSsidSplashSettings200ResponseGuestSponsorship**](GetNetworkWirelessSsidSplashSettings200ResponseGuestSponsorship.md) |  | [optional]
**block_all_traffic_before_sign_on** | **bool** | How restricted allowing traffic should be. If true, all traffic types are blocked until the splash page is acknowledged. If false, all non-HTTP traffic is allowed before the splash page is acknowledged. | [optional]
**controller_disconnection_behavior** | **string** | How login attempts should be handled when the controller is unreachable. | [optional]
**allow_simultaneous_logins** | **bool** | Whether or not to allow simultaneous logins from different devices. | [optional]
**billing** | [**\Meraki\Model\GetNetworkWirelessSsidSplashSettings200ResponseBilling**](GetNetworkWirelessSsidSplashSettings200ResponseBilling.md) |  | [optional]
**sentry_enrollment** | [**\Meraki\Model\GetNetworkWirelessSsidSplashSettings200ResponseSentryEnrollment**](GetNetworkWirelessSsidSplashSettings200ResponseSentryEnrollment.md) |  | [optional]
**self_registration** | [**\Meraki\Model\GetNetworkWirelessSsidSplashSettings200ResponseSelfRegistration**](GetNetworkWirelessSsidSplashSettings200ResponseSelfRegistration.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
