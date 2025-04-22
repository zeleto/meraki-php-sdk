# # GetDeviceCellularSims200ResponseSimsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**slot** | **string** | SIM slot being configured. Must be &#39;sim1&#39; on single-sim devices. Use &#39;sim3&#39; for eSIM. | [optional]
**is_primary** | **bool** | If true, this SIM is activated on platform bootup. It must be true on single-SIM devices and is a required field for dual-SIM MGs unless it is being configured using &#39;simOrdering&#39;. | [optional] [default to false]
**apns** | [**\Meraki\Model\GetDeviceCellularSims200ResponseSimsInnerApnsInner[]**](GetDeviceCellularSims200ResponseSimsInnerApnsInner.md) | APN configurations. If empty, the default APN will be used. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
