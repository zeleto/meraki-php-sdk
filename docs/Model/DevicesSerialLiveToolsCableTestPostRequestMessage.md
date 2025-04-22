# # DevicesSerialLiveToolsCableTestPostRequestMessage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cable_test_id** | **string** | Id of the cable test request. Used to check the status of the request. | [optional]
**url** | **string** | GET this url to check the status of your cable test request. | [optional]
**request** | [**\Meraki\Model\CreateDeviceLiveToolsCableTest201ResponseRequest**](CreateDeviceLiveToolsCableTest201ResponseRequest.md) |  | [optional]
**status** | **string** | Status of the cable test request. | [optional]
**results** | [**\Meraki\Model\DevicesSerialLiveToolsCableTestPostRequestMessageResultsInner[]**](DevicesSerialLiveToolsCableTestPostRequestMessageResultsInner.md) | Results of the cable test request, one for each requested port. | [optional]
**error** | **string** | An error message for a failed execution | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
