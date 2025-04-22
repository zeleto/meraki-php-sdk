# # GetOrganizationWirelessControllerDevicesInterfacesL2ByDevice200ResponseItemsInnerInterfacesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the wireless LAN controller interface | [optional]
**description** | **string** | The description of the wireless LAN controller interface | [optional]
**enabled** | **bool** | The status of the wireless LAN controller interface | [optional]
**mac** | **string** | The MAC address of the wireless LAN controller interface | [optional]
**status** | **string** | The status of the wireless LAN controller interface | [optional]
**speed** | **string** | The current data transfer rate which the interface is operating at. enum &#x3D; [1 Gbps, 2 Gbps, 5 Gbps, 10 Gbps, 20 Gbps, 40 Gbps, 100 Gbps] | [optional]
**is_uplink** | **bool** | Indicate whether the interface is uplink | [optional]
**vlan** | **int** | The VLAN of the switch port. For a trunk port, this is the native VLAN. A null value will clear the value set for trunk ports. | [optional]
**is_redundancy_port** | **bool** | Indicate whether the interface is a redundancy port used to perform HA role negotiation | [optional]
**link_negotiation** | **string** | The interface negotiation mode | [optional]
**channel_group** | [**\Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesL2ByDevice200ResponseItemsInnerInterfacesInnerChannelGroup**](GetOrganizationWirelessControllerDevicesInterfacesL2ByDevice200ResponseItemsInnerInterfacesInnerChannelGroup.md) |  | [optional]
**module** | [**\Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesL2ByDevice200ResponseItemsInnerInterfacesInnerModule**](GetOrganizationWirelessControllerDevicesInterfacesL2ByDevice200ResponseItemsInnerInterfacesInnerModule.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
