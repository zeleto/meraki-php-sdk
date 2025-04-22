# # UpdateNetworkSwitchRoutingOspfRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | Boolean value to enable or disable OSPF routing. OSPF routing is disabled by default. | [optional]
**hello_timer_in_seconds** | **int** | Time interval in seconds at which hello packet will be sent to OSPF neighbors to maintain connectivity. Value must be between 1 and 255. Default is 10 seconds. | [optional]
**dead_timer_in_seconds** | **int** | Time interval to determine when the peer will be declared inactive/dead. Value must be between 1 and 65535 | [optional]
**areas** | [**\Meraki\Model\UpdateNetworkSwitchRoutingOspfRequestAreasInner[]**](UpdateNetworkSwitchRoutingOspfRequestAreasInner.md) | OSPF areas | [optional]
**v3** | [**\Meraki\Model\UpdateNetworkSwitchRoutingOspfRequestV3**](UpdateNetworkSwitchRoutingOspfRequestV3.md) |  | [optional]
**md5_authentication_enabled** | **bool** | Boolean value to enable or disable MD5 authentication. MD5 authentication is disabled by default. | [optional]
**md5_authentication_key** | [**\Meraki\Model\GetNetworkSwitchRoutingOspf200ResponseMd5AuthenticationKey**](GetNetworkSwitchRoutingOspf200ResponseMd5AuthenticationKey.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
