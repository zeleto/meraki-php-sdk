# # GetNetworkEvents200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** | A message regarding the events sent. Usually &#39;null&#39; unless there are no events | [optional]
**page_start_at** | **string** | An UTC ISO8601 string of the earliest occured at time of the listed events of the page. | [optional]
**page_end_at** | **string** | An UTC ISO8601 string of the latest occured at time of the listed events of the page. | [optional]
**events** | [**\Meraki\Model\GetNetworkEvents200ResponseEventsInner[]**](GetNetworkEvents200ResponseEventsInner.md) | An array of events that took place in the network. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
