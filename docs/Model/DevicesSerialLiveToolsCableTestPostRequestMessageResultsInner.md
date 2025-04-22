# # DevicesSerialLiveToolsCableTestPostRequestMessageResultsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**port** | **string** | The port for which the test was performed. | [optional]
**status** | **string** | The current status of the port. If the cable test is still being performed on the port, \&quot;in-progress\&quot; is used. If an error occurred during the cable test, \&quot;error\&quot; is used and the error property will be populated. | [optional]
**speed_mbps** | **int** | Speed in Mbps.  A speed of 0 indicates the port is down or the port speed is automatic. | [optional]
**error** | **string** | If an error occurred during the cable test, the error message will be populated here. | [optional]
**pairs** | [**\Meraki\Model\DevicesSerialLiveToolsCableTestPostRequestMessageResultsInnerPairsInner[]**](DevicesSerialLiveToolsCableTestPostRequestMessageResultsInnerPairsInner.md) | Results for each twisted pair within the cable. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
