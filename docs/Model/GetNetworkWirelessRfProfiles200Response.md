# # GetNetworkWirelessRfProfiles200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The name of the new profile. Must be unique. | [optional]
**network_id** | **string** | The network ID of the RF Profile | [optional]
**name** | **string** | The name of the new profile. Must be unique. This param is required on creation. | [optional]
**client_balancing_enabled** | **bool** | Steers client to best available access point. Can be either true or false. Defaults to true. | [optional]
**min_bitrate_type** | **string** | Minimum bitrate can be set to either &#39;band&#39; or &#39;ssid&#39;. Defaults to band. | [optional]
**band_selection_type** | **string** | Band selection can be set to either &#39;ssid&#39; or &#39;ap&#39;. This param is required on creation. | [optional]
**ap_band_settings** | [**\Meraki\Model\GetNetworkWirelessRfProfiles200ResponseApBandSettings**](GetNetworkWirelessRfProfiles200ResponseApBandSettings.md) |  | [optional]
**two_four_ghz_settings** | [**\Meraki\Model\GetNetworkWirelessRfProfiles200ResponseTwoFourGhzSettings**](GetNetworkWirelessRfProfiles200ResponseTwoFourGhzSettings.md) |  | [optional]
**five_ghz_settings** | [**\Meraki\Model\GetNetworkWirelessRfProfiles200ResponseFiveGhzSettings**](GetNetworkWirelessRfProfiles200ResponseFiveGhzSettings.md) |  | [optional]
**six_ghz_settings** | [**\Meraki\Model\GetNetworkWirelessRfProfiles200ResponseSixGhzSettings**](GetNetworkWirelessRfProfiles200ResponseSixGhzSettings.md) |  | [optional]
**transmission** | [**\Meraki\Model\GetNetworkWirelessRfProfiles200ResponseTransmission**](GetNetworkWirelessRfProfiles200ResponseTransmission.md) |  | [optional]
**per_ssid_settings** | [**\Meraki\Model\GetNetworkWirelessRfProfiles200ResponsePerSsidSettings**](GetNetworkWirelessRfProfiles200ResponsePerSsidSettings.md) |  | [optional]
**is_indoor_default** | **bool** | Set this profile as the default indoor rf profile. If the profile ID is one of &#39;indoor&#39; or &#39;outdoor&#39;,   then a new profile will be created from the respective ID and set as the default | [optional]
**is_outdoor_default** | **bool** | Set this profile as the default outdoor rf profile. If the profile ID is one of &#39;indoor&#39; or &#39;outdoor&#39;,   then a new profile will be created from the respective ID and set as the default | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
