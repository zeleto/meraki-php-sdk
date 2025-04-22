# # GetNetworkClientTrafficHistory200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ts** | **\DateTime** | The start time from which daily traffic data was collected | [optional]
**application** | **string** | The name of the application the client is connected to | [optional]
**destination** | **string** | The IP or web address the client is connected to | [optional]
**protocol** | **string** | The client protocol | [optional]
**port** | **int** | The port the client is connected to | [optional]
**recv** | **float** | Usage received by the client | [optional]
**sent** | **float** | Usage sent by the client | [optional]
**num_flows** | **int** | The number of flows the client has | [optional]
**active_seconds** | **int** | The amount of seconds the client was active | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
