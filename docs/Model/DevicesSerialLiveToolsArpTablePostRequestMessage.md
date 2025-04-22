# # DevicesSerialLiveToolsArpTablePostRequestMessage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**arp_table_id** | **string** | Id of the ARP table request. Used to check the status of the request. | [optional]
**url** | **string** | GET this url to check the status of your ARP table request. | [optional]
**request** | [**\Meraki\Model\CreateDeviceLiveToolsArpTable201ResponseRequest**](CreateDeviceLiveToolsArpTable201ResponseRequest.md) |  | [optional]
**status** | **string** | Status of the ARP table request. | [optional]
**entries** | [**\Meraki\Model\DevicesSerialLiveToolsArpTablePostRequestMessageEntriesInner[]**](DevicesSerialLiveToolsArpTablePostRequestMessageEntriesInner.md) | The ARP table entries | [optional]
**error** | **string** | An error message for a failed execution | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
