# # GetOrganizationSwitchPortsStatusesBySwitch200ResponseItemsInnerPortsInner

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
**secure_port** | [**\Meraki\Model\GetOrganizationSwitchPortsStatusesBySwitch200ResponseItemsInnerPortsInnerSecurePort**](GetOrganizationSwitchPortsStatusesBySwitch200ResponseItemsInnerPortsInnerSecurePort.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
