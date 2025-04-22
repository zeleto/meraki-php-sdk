# # UpdateNetworkWirelessRfProfileRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the new profile. Must be unique. | [optional]
**is_indoor_default** | **bool** | Set this profile as the default indoor rf profile. If the profile ID is one of &#39;indoor&#39; or &#39;outdoor&#39;,   then a new profile will be created from the respective ID and set as the default | [optional]
**is_outdoor_default** | **bool** | Set this profile as the default outdoor rf profile. If the profile ID is one of &#39;indoor&#39; or &#39;outdoor&#39;,   then a new profile will be created from the respective ID and set as the default | [optional]
**client_balancing_enabled** | **bool** | Steers client to best available access point. Can be either true or false. | [optional]
**min_bitrate_type** | **string** | Minimum bitrate can be set to either &#39;band&#39; or &#39;ssid&#39;. | [optional]
**band_selection_type** | **string** | Band selection can be set to either &#39;ssid&#39; or &#39;ap&#39;. | [optional]
**ap_band_settings** | [**\Meraki\Model\UpdateNetworkWirelessRfProfileRequestApBandSettings**](UpdateNetworkWirelessRfProfileRequestApBandSettings.md) |  | [optional]
**two_four_ghz_settings** | [**\Meraki\Model\UpdateNetworkWirelessRfProfileRequestTwoFourGhzSettings**](UpdateNetworkWirelessRfProfileRequestTwoFourGhzSettings.md) |  | [optional]
**five_ghz_settings** | [**\Meraki\Model\UpdateNetworkWirelessRfProfileRequestFiveGhzSettings**](UpdateNetworkWirelessRfProfileRequestFiveGhzSettings.md) |  | [optional]
**six_ghz_settings** | [**\Meraki\Model\UpdateNetworkWirelessRfProfileRequestSixGhzSettings**](UpdateNetworkWirelessRfProfileRequestSixGhzSettings.md) |  | [optional]
**transmission** | [**\Meraki\Model\GetNetworkWirelessRfProfiles200ResponseTransmission**](GetNetworkWirelessRfProfiles200ResponseTransmission.md) |  | [optional]
**per_ssid_settings** | [**\Meraki\Model\CreateNetworkWirelessRfProfileRequestPerSsidSettings**](CreateNetworkWirelessRfProfileRequestPerSsidSettings.md) |  | [optional]
**flex_radios** | [**\Meraki\Model\CreateNetworkWirelessRfProfileRequestFlexRadios**](CreateNetworkWirelessRfProfileRequestFlexRadios.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
