# # CreateDeviceSwitchRoutingInterfaceRequestOspfSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**area** | **string** | The OSPF area to which this interface should belong. Can be either &#39;disabled&#39; or the identifier of an           existing OSPF area. Defaults to &#39;disabled&#39;. | [optional]
**cost** | **int** | The path cost for this interface. Defaults to 1, but can be increased up to 65535           to give lower priority. | [optional]
**is_passive_enabled** | **bool** | When enabled, OSPF will not run on the interface, but the subnet will still be advertised. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
