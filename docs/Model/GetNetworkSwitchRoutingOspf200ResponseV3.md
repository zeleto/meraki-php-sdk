# # GetNetworkSwitchRoutingOspf200ResponseV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | Boolean value to enable or disable V3 OSPF routing. OSPF V3 routing is disabled by default. | [optional]
**hello_timer_in_seconds** | **int** | Time interval in seconds at which hello packet will be sent to OSPF neighbors to maintain connectivity. Value must be between 1 and 255. Default is 10 seconds. | [optional]
**dead_timer_in_seconds** | **int** | Time interval to determine when the peer will be declared inactive/dead. Value must be between 1 and 65535 | [optional]
**areas** | [**\Meraki\Model\GetNetworkSwitchRoutingOspf200ResponseAreasInner[]**](GetNetworkSwitchRoutingOspf200ResponseAreasInner.md) | OSPF v3 areas | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
