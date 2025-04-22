# # GetNetworkSensorAlertsProfiles200ResponseInnerConditionsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**metric** | **string** | The type of sensor metric that will be monitored for changes. |
**threshold** | [**\Meraki\Model\GetNetworkSensorAlertsProfiles200ResponseInnerConditionsInnerThreshold**](GetNetworkSensorAlertsProfiles200ResponseInnerConditionsInnerThreshold.md) |  |
**direction** | **string** | If &#39;above&#39;, an alert will be sent when a sensor reads above the threshold. If &#39;below&#39;, an alert will be sent when a sensor reads below the threshold. Only applicable for temperature, humidity, realPower, apparentPower, powerFactor, voltage, current, and frequency thresholds. | [optional]
**duration** | **int** | Length of time in seconds that the triggering state must persist before an alert is sent. Available options are 0 seconds, 1 minute, 2 minutes, 3 minutes, 4 minutes, 5 minutes, 10 minutes, 15 minutes, 30 minutes, 1 hour, 2 hours, 4 hours, and 8 hours. Default is 0. | [optional] [default to self::DURATION_NUMBER_0]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
