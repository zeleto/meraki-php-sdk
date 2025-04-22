# # GetNetworkEvents200ResponseEventsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**occurred_at** | **string** | An UTC ISO8601 string of the time the event occurred at. | [optional]
**network_id** | **string** | The ID of the network. | [optional]
**type** | **string** | The type of event being listed. | [optional]
**description** | **string** | A description of the event the happened. | [optional]
**category** | **string** | The category that the event type belongs to | [optional]
**client_id** | **string** | A string identifying the client. This could be a client&#39;s MAC or IP address | [optional]
**client_description** | **string** | A description of the client. This is usually the client&#39;s device name. | [optional]
**client_mac** | **string** | The client&#39;s MAC address. | [optional]
**device_serial** | **string** | The serial number of the device. Only shown if the device is an access point. | [optional]
**device_name** | **string** | The name of the device. Only shown if the device is an access point. | [optional]
**ssid_number** | **int** | The SSID number of the device. | [optional]
**event_data** | [**\Meraki\Model\GetNetworkEvents200ResponseEventsInnerEventData**](GetNetworkEvents200ResponseEventsInnerEventData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
