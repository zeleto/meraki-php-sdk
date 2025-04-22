# # GetNetworkWirelessRfProfiles200ResponseSixGhzSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**max_power** | **int** | Sets max power (dBm) of 6Ghz band. Can be integer between 2 and 30. Defaults to 30. | [optional]
**min_power** | **int** | Sets min power (dBm) of 6Ghz band. Can be integer between 2 and 30. Defaults to 8. | [optional]
**min_bitrate** | **int** | Sets min bitrate (Mbps) of 6Ghz band. Can be one of &#39;6&#39;, &#39;9&#39;, &#39;12&#39;, &#39;18&#39;, &#39;24&#39;, &#39;36&#39;, &#39;48&#39; or &#39;54&#39;. Defaults to 12. | [optional]
**valid_auto_channels** | **int[]** | Sets valid auto channels for 6Ghz band. Can be one of &#39;1&#39;, &#39;5&#39;, &#39;9&#39;, &#39;13&#39;, &#39;17&#39;, &#39;21&#39;, &#39;25&#39;, &#39;29&#39;, &#39;33&#39;, &#39;37&#39;, &#39;41&#39;, &#39;45&#39;, &#39;49&#39;, &#39;53&#39;, &#39;57&#39;, &#39;61&#39;, &#39;65&#39;, &#39;69&#39;, &#39;73&#39;, &#39;77&#39;, &#39;81&#39;, &#39;85&#39;, &#39;89&#39;, &#39;93&#39;, &#39;97&#39;, &#39;101&#39;, &#39;105&#39;, &#39;109&#39;, &#39;113&#39;, &#39;117&#39;, &#39;121&#39;, &#39;125&#39;, &#39;129&#39;, &#39;133&#39;, &#39;137&#39;, &#39;141&#39;, &#39;145&#39;, &#39;149&#39;, &#39;153&#39;, &#39;157&#39;, &#39;161&#39;, &#39;165&#39;, &#39;169&#39;, &#39;173&#39;, &#39;177&#39;, &#39;181&#39;, &#39;185&#39;, &#39;189&#39;, &#39;193&#39;, &#39;197&#39;, &#39;201&#39;, &#39;205&#39;, &#39;209&#39;, &#39;213&#39;, &#39;217&#39;, &#39;221&#39;, &#39;225&#39;, &#39;229&#39; or &#39;233&#39;. Defaults to auto. | [optional]
**channel_width** | **string** | Sets channel width (MHz) for 6Ghz band. Can be one of &#39;0&#39;, &#39;20&#39;, &#39;40&#39;, &#39;80&#39; or &#39;160&#39;. Defaults to auto. | [optional]
**rxsop** | **int** | The RX-SOP level controls the sensitivity of the radio. It is strongly recommended to use RX-SOP only after consulting a wireless expert. RX-SOP can be configured in the range of -65 to -95 (dBm). A value of null will reset this to the default. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
