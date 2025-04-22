# # CreateNetworkWirelessRfProfileRequestPerSsidSettings1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**min_bitrate** | **float** | Sets min bitrate (Mbps) of this SSID. Can be one of &#39;1&#39;, &#39;2&#39;, &#39;5.5&#39;, &#39;6&#39;, &#39;9&#39;, &#39;11&#39;, &#39;12&#39;, &#39;18&#39;, &#39;24&#39;, &#39;36&#39;, &#39;48&#39; or &#39;54&#39;. | [optional]
**band_operation_mode** | **string** | Choice between &#39;dual&#39;, &#39;2.4ghz&#39;, &#39;5ghz&#39;, &#39;6ghz&#39; or &#39;multi&#39;. | [optional]
**bands** | [**\Meraki\Model\CreateNetworkWirelessRfProfileRequestApBandSettingsBands**](CreateNetworkWirelessRfProfileRequestApBandSettingsBands.md) |  | [optional]
**band_steering_enabled** | **bool** | Steers client to most open band between 2.4 GHz and 5 GHz. Can be either true or false. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
