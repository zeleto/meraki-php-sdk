# # GetNetworkInsightApplicationHealthByTime200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_ts** | **\DateTime** | The start time of the query range | [optional]
**end_ts** | **\DateTime** | The end time of the query range | [optional]
**wan_goodput** | **int** | WAN goodput (Number of useful information bits delivered over a WAN per unit of time) | [optional]
**lan_goodput** | **int** | LAN goodput (Number of useful information bits delivered over a LAN per unit of time) | [optional]
**wan_latency_ms** | **float** | WAN latency in milliseconds | [optional]
**lan_latency_ms** | **float** | LAN latency in milliseconds | [optional]
**wan_loss_percent** | **float** | WAN loss percentage | [optional]
**lan_loss_percent** | **float** | LAN loss percentage | [optional]
**response_duration** | **int** | Duration of the response, in milliseconds | [optional]
**sent** | **int** | Sent kilobytes-per-second | [optional]
**recv** | **int** | Received kilobytes-per-second | [optional]
**num_clients** | **int** | Number of clients | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
