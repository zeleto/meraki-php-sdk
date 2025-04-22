# # GetNetworkWirelessClientConnectivityEvents200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**occurred_at** | **\DateTime** | Timestamp at which the event occurred | [optional]
**band** | **string** | Wireless band the event occurred on | [optional]
**ssid_number** | **int** | Number of the SSID the event occurred in | [optional]
**type** | **string** | Event type | [optional]
**subtype** | **string** | Event subtype | [optional]
**severity** | **string** | Event severity | [optional]
**duration_ms** | **int** | Duration of the event in milliseconds | [optional]
**channel** | **int** | Wireless channel the event occurred over | [optional]
**rssi** | **int** | RSSI recorded at the time of the event | [optional]
**event_data** | **array<string,mixed>** | Additional information relevant to the given event. Properties vary based on event type. | [optional]
**device_serial** | **string** | Serial number of the device the event occurred for | [optional]
**capture_id** | **string** | Id of the packet capture triggered for the event, if any | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
