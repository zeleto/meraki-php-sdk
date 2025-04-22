# # GetDeviceSwitchPortsStatuses200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**port_id** | **string** | The string identifier of this port on the switch. This is commonly just the port number but may contain additional identifying information such as the slot and module-type if the port is located on a port module. | [optional]
**enabled** | **bool** | Whether the port is configured to be enabled. | [optional]
**status** | **string** | The current connection status of the port. | [optional]
**is_uplink** | **bool** | Whether the port is the switch&#39;s uplink. | [optional]
**errors** | **string[]** | All errors present on the port. | [optional]
**warnings** | **string[]** | All warnings present on the port. | [optional]
**speed** | **string** | The current data transfer rate which the port is operating at. | [optional]
**duplex** | **string** | The current duplex of a connected port. | [optional]
**spanning_tree** | [**\Meraki\Model\GetDeviceSwitchPortsStatuses200ResponseInnerSpanningTree**](GetDeviceSwitchPortsStatuses200ResponseInnerSpanningTree.md) |  | [optional]
**poe** | [**\Meraki\Model\GetDeviceSwitchPortsStatuses200ResponseInnerPoe**](GetDeviceSwitchPortsStatuses200ResponseInnerPoe.md) |  | [optional]
**usage_in_kb** | [**\Meraki\Model\GetDeviceSwitchPortsStatuses200ResponseInnerUsageInKb**](GetDeviceSwitchPortsStatuses200ResponseInnerUsageInKb.md) |  | [optional]
**cdp** | [**\Meraki\Model\GetDeviceSwitchPortsStatuses200ResponseInnerCdp**](GetDeviceSwitchPortsStatuses200ResponseInnerCdp.md) |  | [optional]
**lldp** | [**\Meraki\Model\GetDeviceSwitchPortsStatuses200ResponseInnerLldp**](GetDeviceSwitchPortsStatuses200ResponseInnerLldp.md) |  | [optional]
**client_count** | **int** | The number of clients connected through this port. | [optional]
**power_usage_in_wh** | **float** | How much power (in watt-hours) has been delivered by this port during the timespan. | [optional]
**traffic_in_kbps** | [**\Meraki\Model\GetDeviceSwitchPortsStatuses200ResponseInnerTrafficInKbps**](GetDeviceSwitchPortsStatuses200ResponseInnerTrafficInKbps.md) |  | [optional]
**secure_port** | [**\Meraki\Model\GetDeviceSwitchPortsStatuses200ResponseInnerSecurePort**](GetDeviceSwitchPortsStatuses200ResponseInnerSecurePort.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
