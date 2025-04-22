# # CreateOrganizationAlertsProfileRequestAlertCondition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**duration** | **int** | The total duration in seconds that the threshold should be crossed before alerting | [optional]
**window** | **int** | The look back period in seconds for sensing the alert | [optional]
**bit_rate_bps** | **int** | The threshold the metric must cross to be valid for alerting. Used only for WAN Utilization alerts. | [optional]
**loss_ratio** | **float** | The threshold the metric must cross to be valid for alerting. Used only for Packet Loss alerts. | [optional]
**latency_ms** | **int** | The threshold the metric must cross to be valid for alerting. Used only for WAN Latency alerts. | [optional]
**jitter_ms** | **int** | The threshold the metric must cross to be valid for alerting. Used only for VoIP Jitter alerts. | [optional]
**mos** | **float** | The threshold the metric must drop below to be valid for alerting. Used only for VoIP MOS alerts. | [optional]
**interface** | **string** | The uplink observed for the alert.  interface must be one of the following: wan1, wan2, wan3, cellular | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
