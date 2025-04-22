# # GetNetworkWirelessSsidSchedules200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | If true, the SSID outage schedule is enabled. | [optional]
**ranges** | [**\Meraki\Model\GetNetworkWirelessSsidSchedules200ResponseRangesInner[]**](GetNetworkWirelessSsidSchedules200ResponseRangesInner.md) | List of outage ranges. Has a start date and time, and end date and time. If this parameter is passed in along with rangesInSeconds parameter, this will take precedence. | [optional]
**ranges_in_seconds** | [**\Meraki\Model\GetNetworkWirelessSsidSchedules200ResponseRangesInSecondsInner[]**](GetNetworkWirelessSsidSchedules200ResponseRangesInSecondsInner.md) | List of outage ranges in seconds since Sunday at Midnight. Has a start and end. If this parameter is passed in along with the ranges parameter, ranges will take precedence. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
