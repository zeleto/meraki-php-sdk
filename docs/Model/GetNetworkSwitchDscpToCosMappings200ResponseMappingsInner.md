# # GetNetworkSwitchDscpToCosMappings200ResponseMappingsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dscp** | **int** | The Differentiated Services Code Point (DSCP) tag in the IP header that will be mapped to a particular Class-of-Service (CoS) queue. Value can be in the range of 0 to 63 inclusive. | [optional]
**cos** | **int** | The actual layer-2 CoS queue the DSCP value is mapped to. These are not bits set on outgoing frames. Value can be in the range of 0 to 5 inclusive. | [optional]
**title** | **string** | Label for the mapping (optional). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
