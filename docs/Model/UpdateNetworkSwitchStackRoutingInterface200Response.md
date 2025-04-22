# # UpdateNetworkSwitchStackRoutingInterface200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**interface_id** | **string** | The ID | [optional]
**name** | **string** | The name | [optional]
**subnet** | **string** | IPv4 subnet | [optional]
**interface_ip** | **string** | IPv4 address | [optional]
**multicast_routing** | **string** | Multicast routing status | [optional]
**vlan_id** | **int** | VLAN ID | [optional]
**uplink_v4** | **bool** | When true, this interface is used as static IPv4 uplink | [optional]
**uplink_v6** | **bool** | When true, this interface is used as static IPv6 uplink | [optional]
**ospf_settings** | [**\Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInnerOspfSettings**](GetDeviceSwitchRoutingInterfaces200ResponseInnerOspfSettings.md) |  | [optional]
**ospf_v3** | [**\Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInnerOspfV3**](GetDeviceSwitchRoutingInterfaces200ResponseInnerOspfV3.md) |  | [optional]
**ipv6** | [**\Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInnerIpv6**](GetDeviceSwitchRoutingInterfaces200ResponseInnerIpv6.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
