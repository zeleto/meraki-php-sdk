# # CreateNetworkWirelessRfProfileRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the new profile. Must be unique. This param is required on creation. |
**client_balancing_enabled** | **bool** | Steers client to best available access point. Can be either true or false. Defaults to true. | [optional]
**min_bitrate_type** | **string** | Minimum bitrate can be set to either &#39;band&#39; or &#39;ssid&#39;. Defaults to band. | [optional]
**band_selection_type** | **string** | Band selection can be set to either &#39;ssid&#39; or &#39;ap&#39;. This param is required on creation. |
**ap_band_settings** | [**\Meraki\Model\CreateNetworkWirelessRfProfileRequestApBandSettings**](CreateNetworkWirelessRfProfileRequestApBandSettings.md) |  | [optional]
**two_four_ghz_settings** | [**\Meraki\Model\GetNetworkWirelessRfProfiles200ResponseTwoFourGhzSettings**](GetNetworkWirelessRfProfiles200ResponseTwoFourGhzSettings.md) |  | [optional]
**five_ghz_settings** | [**\Meraki\Model\GetNetworkWirelessRfProfiles200ResponseFiveGhzSettings**](GetNetworkWirelessRfProfiles200ResponseFiveGhzSettings.md) |  | [optional]
**six_ghz_settings** | [**\Meraki\Model\CreateNetworkWirelessRfProfileRequestSixGhzSettings**](CreateNetworkWirelessRfProfileRequestSixGhzSettings.md) |  | [optional]
**transmission** | [**\Meraki\Model\GetNetworkWirelessRfProfiles200ResponseTransmission**](GetNetworkWirelessRfProfiles200ResponseTransmission.md) |  | [optional]
**per_ssid_settings** | [**\Meraki\Model\CreateNetworkWirelessRfProfileRequestPerSsidSettings**](CreateNetworkWirelessRfProfileRequestPerSsidSettings.md) |  | [optional]
**flex_radios** | [**\Meraki\Model\CreateNetworkWirelessRfProfileRequestFlexRadios**](CreateNetworkWirelessRfProfileRequestFlexRadios.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
