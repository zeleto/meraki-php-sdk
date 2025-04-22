# # GetOrganizationSwitchPortsTopologyDiscoveryByDevice200ResponseItemsInnerPortsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**port_id** | **string** | The string identifier of this port on the switch. This is commonly just the port number but may contain additional identifying information such as the slot and module-type if the port is located on a port module. | [optional]
**last_updated_at** | **string** | Timestamp for most recent discovery info on this port. | [optional]
**cdp** | [**\Meraki\Model\GetOrganizationSwitchPortsTopologyDiscoveryByDevice200ResponseItemsInnerPortsInnerCdpInner[]**](GetOrganizationSwitchPortsTopologyDiscoveryByDevice200ResponseItemsInnerPortsInnerCdpInner.md) | The Cisco Discovery Protocol (CDP) information of the connected device. | [optional]
**lldp** | [**\Meraki\Model\GetOrganizationSwitchPortsTopologyDiscoveryByDevice200ResponseItemsInnerPortsInnerLldpInner[]**](GetOrganizationSwitchPortsTopologyDiscoveryByDevice200ResponseItemsInnerPortsInnerLldpInner.md) | The Link Layer Discovery Protocol (LLDP) information of the connected device. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
