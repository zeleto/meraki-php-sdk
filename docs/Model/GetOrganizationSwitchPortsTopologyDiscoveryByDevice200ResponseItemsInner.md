# # GetOrganizationSwitchPortsTopologyDiscoveryByDevice200ResponseItemsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the switch. | [optional]
**serial** | **string** | The serial number of the switch. | [optional]
**mac** | **string** | The MAC address of the switch. | [optional]
**network** | [**\Meraki\Model\GetOrganizationSwitchPortsBySwitch200ResponseNetwork**](GetOrganizationSwitchPortsBySwitch200ResponseNetwork.md) |  | [optional]
**model** | **string** | The model of the switch. | [optional]
**ports** | [**\Meraki\Model\GetOrganizationSwitchPortsTopologyDiscoveryByDevice200ResponseItemsInnerPortsInner[]**](GetOrganizationSwitchPortsTopologyDiscoveryByDevice200ResponseItemsInnerPortsInner.md) | Ports belonging to the switch with LLDP/CDP discovery info. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
