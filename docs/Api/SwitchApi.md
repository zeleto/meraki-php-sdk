# Meraki\SwitchApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addNetworkSwitchStack()**](SwitchApi.md#addNetworkSwitchStack) | **POST** /networks/{networkId}/switch/stacks/{switchStackId}/add | Add a switch to a stack |
| [**cloneOrganizationSwitchDevices()**](SwitchApi.md#cloneOrganizationSwitchDevices) | **POST** /organizations/{organizationId}/switch/devices/clone | Clone port-level and some switch-level configuration settings from a source switch to one or more target switches |
| [**createDeviceSwitchRoutingInterface()**](SwitchApi.md#createDeviceSwitchRoutingInterface) | **POST** /devices/{serial}/switch/routing/interfaces | Create a layer 3 interface for a switch |
| [**createDeviceSwitchRoutingStaticRoute()**](SwitchApi.md#createDeviceSwitchRoutingStaticRoute) | **POST** /devices/{serial}/switch/routing/staticRoutes | Create a layer 3 static route for a switch |
| [**createNetworkSwitchAccessPolicy()**](SwitchApi.md#createNetworkSwitchAccessPolicy) | **POST** /networks/{networkId}/switch/accessPolicies | Create an access policy for a switch network |
| [**createNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer()**](SwitchApi.md#createNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer) | **POST** /networks/{networkId}/switch/dhcpServerPolicy/arpInspection/trustedServers | Add a server to be trusted by Dynamic ARP Inspection on this network |
| [**createNetworkSwitchLinkAggregation()**](SwitchApi.md#createNetworkSwitchLinkAggregation) | **POST** /networks/{networkId}/switch/linkAggregations | Create a link aggregation group |
| [**createNetworkSwitchPortSchedule()**](SwitchApi.md#createNetworkSwitchPortSchedule) | **POST** /networks/{networkId}/switch/portSchedules | Add a switch port schedule |
| [**createNetworkSwitchQosRule()**](SwitchApi.md#createNetworkSwitchQosRule) | **POST** /networks/{networkId}/switch/qosRules | Add a quality of service rule |
| [**createNetworkSwitchRoutingMulticastRendezvousPoint()**](SwitchApi.md#createNetworkSwitchRoutingMulticastRendezvousPoint) | **POST** /networks/{networkId}/switch/routing/multicast/rendezvousPoints | Create a multicast rendezvous point |
| [**createNetworkSwitchStack()**](SwitchApi.md#createNetworkSwitchStack) | **POST** /networks/{networkId}/switch/stacks | Create a switch stack |
| [**createNetworkSwitchStackRoutingInterface()**](SwitchApi.md#createNetworkSwitchStackRoutingInterface) | **POST** /networks/{networkId}/switch/stacks/{switchStackId}/routing/interfaces | Create a layer 3 interface for a switch stack |
| [**createNetworkSwitchStackRoutingStaticRoute()**](SwitchApi.md#createNetworkSwitchStackRoutingStaticRoute) | **POST** /networks/{networkId}/switch/stacks/{switchStackId}/routing/staticRoutes | Create a layer 3 static route for a switch stack |
| [**cycleDeviceSwitchPorts()**](SwitchApi.md#cycleDeviceSwitchPorts) | **POST** /devices/{serial}/switch/ports/cycle | Cycle a set of switch ports |
| [**deleteDeviceSwitchRoutingInterface()**](SwitchApi.md#deleteDeviceSwitchRoutingInterface) | **DELETE** /devices/{serial}/switch/routing/interfaces/{interfaceId} | Delete a layer 3 interface from the switch |
| [**deleteDeviceSwitchRoutingStaticRoute()**](SwitchApi.md#deleteDeviceSwitchRoutingStaticRoute) | **DELETE** /devices/{serial}/switch/routing/staticRoutes/{staticRouteId} | Delete a layer 3 static route for a switch |
| [**deleteNetworkSwitchAccessPolicy()**](SwitchApi.md#deleteNetworkSwitchAccessPolicy) | **DELETE** /networks/{networkId}/switch/accessPolicies/{accessPolicyNumber} | Delete an access policy for a switch network |
| [**deleteNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer()**](SwitchApi.md#deleteNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer) | **DELETE** /networks/{networkId}/switch/dhcpServerPolicy/arpInspection/trustedServers/{trustedServerId} | Remove a server from being trusted by Dynamic ARP Inspection on this network |
| [**deleteNetworkSwitchLinkAggregation()**](SwitchApi.md#deleteNetworkSwitchLinkAggregation) | **DELETE** /networks/{networkId}/switch/linkAggregations/{linkAggregationId} | Split a link aggregation group into separate ports |
| [**deleteNetworkSwitchPortSchedule()**](SwitchApi.md#deleteNetworkSwitchPortSchedule) | **DELETE** /networks/{networkId}/switch/portSchedules/{portScheduleId} | Delete a switch port schedule |
| [**deleteNetworkSwitchQosRule()**](SwitchApi.md#deleteNetworkSwitchQosRule) | **DELETE** /networks/{networkId}/switch/qosRules/{qosRuleId} | Delete a quality of service rule |
| [**deleteNetworkSwitchRoutingMulticastRendezvousPoint()**](SwitchApi.md#deleteNetworkSwitchRoutingMulticastRendezvousPoint) | **DELETE** /networks/{networkId}/switch/routing/multicast/rendezvousPoints/{rendezvousPointId} | Delete a multicast rendezvous point |
| [**deleteNetworkSwitchStack()**](SwitchApi.md#deleteNetworkSwitchStack) | **DELETE** /networks/{networkId}/switch/stacks/{switchStackId} | Delete a stack |
| [**deleteNetworkSwitchStackRoutingInterface()**](SwitchApi.md#deleteNetworkSwitchStackRoutingInterface) | **DELETE** /networks/{networkId}/switch/stacks/{switchStackId}/routing/interfaces/{interfaceId} | Delete a layer 3 interface from a switch stack |
| [**deleteNetworkSwitchStackRoutingStaticRoute()**](SwitchApi.md#deleteNetworkSwitchStackRoutingStaticRoute) | **DELETE** /networks/{networkId}/switch/stacks/{switchStackId}/routing/staticRoutes/{staticRouteId} | Delete a layer 3 static route for a switch stack |
| [**getDeviceSwitchPort()**](SwitchApi.md#getDeviceSwitchPort) | **GET** /devices/{serial}/switch/ports/{portId} | Return a switch port |
| [**getDeviceSwitchPorts()**](SwitchApi.md#getDeviceSwitchPorts) | **GET** /devices/{serial}/switch/ports | List the switch ports for a switch |
| [**getDeviceSwitchPortsStatuses()**](SwitchApi.md#getDeviceSwitchPortsStatuses) | **GET** /devices/{serial}/switch/ports/statuses | Return the status for all the ports of a switch |
| [**getDeviceSwitchPortsStatusesPackets()**](SwitchApi.md#getDeviceSwitchPortsStatusesPackets) | **GET** /devices/{serial}/switch/ports/statuses/packets | Return the packet counters for all the ports of a switch |
| [**getDeviceSwitchRoutingInterface()**](SwitchApi.md#getDeviceSwitchRoutingInterface) | **GET** /devices/{serial}/switch/routing/interfaces/{interfaceId} | Return a layer 3 interface for a switch |
| [**getDeviceSwitchRoutingInterfaceDhcp()**](SwitchApi.md#getDeviceSwitchRoutingInterfaceDhcp) | **GET** /devices/{serial}/switch/routing/interfaces/{interfaceId}/dhcp | Return a layer 3 interface DHCP configuration for a switch |
| [**getDeviceSwitchRoutingInterfaces()**](SwitchApi.md#getDeviceSwitchRoutingInterfaces) | **GET** /devices/{serial}/switch/routing/interfaces | List layer 3 interfaces for a switch |
| [**getDeviceSwitchRoutingStaticRoute()**](SwitchApi.md#getDeviceSwitchRoutingStaticRoute) | **GET** /devices/{serial}/switch/routing/staticRoutes/{staticRouteId} | Return a layer 3 static route for a switch |
| [**getDeviceSwitchRoutingStaticRoutes()**](SwitchApi.md#getDeviceSwitchRoutingStaticRoutes) | **GET** /devices/{serial}/switch/routing/staticRoutes | List layer 3 static routes for a switch |
| [**getDeviceSwitchWarmSpare()**](SwitchApi.md#getDeviceSwitchWarmSpare) | **GET** /devices/{serial}/switch/warmSpare | Return warm spare configuration for a switch |
| [**getNetworkSwitchAccessControlLists()**](SwitchApi.md#getNetworkSwitchAccessControlLists) | **GET** /networks/{networkId}/switch/accessControlLists | Return the access control lists for a MS network |
| [**getNetworkSwitchAccessPolicies()**](SwitchApi.md#getNetworkSwitchAccessPolicies) | **GET** /networks/{networkId}/switch/accessPolicies | List the access policies for a switch network |
| [**getNetworkSwitchAccessPolicy()**](SwitchApi.md#getNetworkSwitchAccessPolicy) | **GET** /networks/{networkId}/switch/accessPolicies/{accessPolicyNumber} | Return a specific access policy for a switch network |
| [**getNetworkSwitchAlternateManagementInterface()**](SwitchApi.md#getNetworkSwitchAlternateManagementInterface) | **GET** /networks/{networkId}/switch/alternateManagementInterface | Return the switch alternate management interface for the network |
| [**getNetworkSwitchDhcpServerPolicy()**](SwitchApi.md#getNetworkSwitchDhcpServerPolicy) | **GET** /networks/{networkId}/switch/dhcpServerPolicy | Return the DHCP server settings |
| [**getNetworkSwitchDhcpServerPolicyArpInspectionTrustedServers()**](SwitchApi.md#getNetworkSwitchDhcpServerPolicyArpInspectionTrustedServers) | **GET** /networks/{networkId}/switch/dhcpServerPolicy/arpInspection/trustedServers | Return the list of servers trusted by Dynamic ARP Inspection on this network |
| [**getNetworkSwitchDhcpServerPolicyArpInspectionWarningsByDevice()**](SwitchApi.md#getNetworkSwitchDhcpServerPolicyArpInspectionWarningsByDevice) | **GET** /networks/{networkId}/switch/dhcpServerPolicy/arpInspection/warnings/byDevice | Return the devices that have a Dynamic ARP Inspection warning and their warnings |
| [**getNetworkSwitchDhcpV4ServersSeen()**](SwitchApi.md#getNetworkSwitchDhcpV4ServersSeen) | **GET** /networks/{networkId}/switch/dhcp/v4/servers/seen | Return the network&#39;s DHCPv4 servers seen within the selected timeframe (default 1 day) |
| [**getNetworkSwitchDscpToCosMappings()**](SwitchApi.md#getNetworkSwitchDscpToCosMappings) | **GET** /networks/{networkId}/switch/dscpToCosMappings | Return the DSCP to CoS mappings |
| [**getNetworkSwitchLinkAggregations()**](SwitchApi.md#getNetworkSwitchLinkAggregations) | **GET** /networks/{networkId}/switch/linkAggregations | List link aggregation groups |
| [**getNetworkSwitchMtu()**](SwitchApi.md#getNetworkSwitchMtu) | **GET** /networks/{networkId}/switch/mtu | Return the MTU configuration |
| [**getNetworkSwitchPortSchedules()**](SwitchApi.md#getNetworkSwitchPortSchedules) | **GET** /networks/{networkId}/switch/portSchedules | List switch port schedules |
| [**getNetworkSwitchQosRule()**](SwitchApi.md#getNetworkSwitchQosRule) | **GET** /networks/{networkId}/switch/qosRules/{qosRuleId} | Return a quality of service rule |
| [**getNetworkSwitchQosRules()**](SwitchApi.md#getNetworkSwitchQosRules) | **GET** /networks/{networkId}/switch/qosRules | List quality of service rules |
| [**getNetworkSwitchQosRulesOrder()**](SwitchApi.md#getNetworkSwitchQosRulesOrder) | **GET** /networks/{networkId}/switch/qosRules/order | Return the quality of service rule IDs by order in which they will be processed by the switch |
| [**getNetworkSwitchRoutingMulticast()**](SwitchApi.md#getNetworkSwitchRoutingMulticast) | **GET** /networks/{networkId}/switch/routing/multicast | Return multicast settings for a network |
| [**getNetworkSwitchRoutingMulticastRendezvousPoint()**](SwitchApi.md#getNetworkSwitchRoutingMulticastRendezvousPoint) | **GET** /networks/{networkId}/switch/routing/multicast/rendezvousPoints/{rendezvousPointId} | Return a multicast rendezvous point |
| [**getNetworkSwitchRoutingMulticastRendezvousPoints()**](SwitchApi.md#getNetworkSwitchRoutingMulticastRendezvousPoints) | **GET** /networks/{networkId}/switch/routing/multicast/rendezvousPoints | List multicast rendezvous points |
| [**getNetworkSwitchRoutingOspf()**](SwitchApi.md#getNetworkSwitchRoutingOspf) | **GET** /networks/{networkId}/switch/routing/ospf | Return layer 3 OSPF routing configuration |
| [**getNetworkSwitchSettings()**](SwitchApi.md#getNetworkSwitchSettings) | **GET** /networks/{networkId}/switch/settings | Returns the switch network settings |
| [**getNetworkSwitchStack()**](SwitchApi.md#getNetworkSwitchStack) | **GET** /networks/{networkId}/switch/stacks/{switchStackId} | Show a switch stack |
| [**getNetworkSwitchStackRoutingInterface()**](SwitchApi.md#getNetworkSwitchStackRoutingInterface) | **GET** /networks/{networkId}/switch/stacks/{switchStackId}/routing/interfaces/{interfaceId} | Return a layer 3 interface from a switch stack |
| [**getNetworkSwitchStackRoutingInterfaceDhcp()**](SwitchApi.md#getNetworkSwitchStackRoutingInterfaceDhcp) | **GET** /networks/{networkId}/switch/stacks/{switchStackId}/routing/interfaces/{interfaceId}/dhcp | Return a layer 3 interface DHCP configuration for a switch stack |
| [**getNetworkSwitchStackRoutingInterfaces()**](SwitchApi.md#getNetworkSwitchStackRoutingInterfaces) | **GET** /networks/{networkId}/switch/stacks/{switchStackId}/routing/interfaces | List layer 3 interfaces for a switch stack |
| [**getNetworkSwitchStackRoutingStaticRoute()**](SwitchApi.md#getNetworkSwitchStackRoutingStaticRoute) | **GET** /networks/{networkId}/switch/stacks/{switchStackId}/routing/staticRoutes/{staticRouteId} | Return a layer 3 static route for a switch stack |
| [**getNetworkSwitchStackRoutingStaticRoutes()**](SwitchApi.md#getNetworkSwitchStackRoutingStaticRoutes) | **GET** /networks/{networkId}/switch/stacks/{switchStackId}/routing/staticRoutes | List layer 3 static routes for a switch stack |
| [**getNetworkSwitchStacks()**](SwitchApi.md#getNetworkSwitchStacks) | **GET** /networks/{networkId}/switch/stacks | List the switch stacks in a network |
| [**getNetworkSwitchStormControl()**](SwitchApi.md#getNetworkSwitchStormControl) | **GET** /networks/{networkId}/switch/stormControl | Return the storm control configuration for a switch network |
| [**getNetworkSwitchStp()**](SwitchApi.md#getNetworkSwitchStp) | **GET** /networks/{networkId}/switch/stp | Returns STP settings |
| [**getOrganizationConfigTemplateSwitchProfilePort()**](SwitchApi.md#getOrganizationConfigTemplateSwitchProfilePort) | **GET** /organizations/{organizationId}/configTemplates/{configTemplateId}/switch/profiles/{profileId}/ports/{portId} | Return a switch template port |
| [**getOrganizationConfigTemplateSwitchProfilePorts()**](SwitchApi.md#getOrganizationConfigTemplateSwitchProfilePorts) | **GET** /organizations/{organizationId}/configTemplates/{configTemplateId}/switch/profiles/{profileId}/ports | Return all the ports of a switch template |
| [**getOrganizationConfigTemplateSwitchProfiles()**](SwitchApi.md#getOrganizationConfigTemplateSwitchProfiles) | **GET** /organizations/{organizationId}/configTemplates/{configTemplateId}/switch/profiles | List the switch templates for your switch template configuration |
| [**getOrganizationSummarySwitchPowerHistory()**](SwitchApi.md#getOrganizationSummarySwitchPowerHistory) | **GET** /organizations/{organizationId}/summary/switch/power/history | Returns the total PoE power draw for all switch ports in the organization over the requested timespan (by default the last 24 hours) |
| [**getOrganizationSwitchPortsBySwitch()**](SwitchApi.md#getOrganizationSwitchPortsBySwitch) | **GET** /organizations/{organizationId}/switch/ports/bySwitch | List the switchports in an organization by switch |
| [**getOrganizationSwitchPortsClientsOverviewByDevice()**](SwitchApi.md#getOrganizationSwitchPortsClientsOverviewByDevice) | **GET** /organizations/{organizationId}/switch/ports/clients/overview/byDevice | List the number of clients for all switchports with at least one online client in an organization. |
| [**getOrganizationSwitchPortsOverview()**](SwitchApi.md#getOrganizationSwitchPortsOverview) | **GET** /organizations/{organizationId}/switch/ports/overview | Returns the counts of all active ports for the requested timespan, grouped by speed |
| [**getOrganizationSwitchPortsStatusesBySwitch()**](SwitchApi.md#getOrganizationSwitchPortsStatusesBySwitch) | **GET** /organizations/{organizationId}/switch/ports/statuses/bySwitch | List the switchports in an organization |
| [**getOrganizationSwitchPortsTopologyDiscoveryByDevice()**](SwitchApi.md#getOrganizationSwitchPortsTopologyDiscoveryByDevice) | **GET** /organizations/{organizationId}/switch/ports/topology/discovery/byDevice | List most recently seen LLDP/CDP discovery and topology information per switch port in an organization. |
| [**getOrganizationSwitchPortsUsageHistoryByDeviceByInterval()**](SwitchApi.md#getOrganizationSwitchPortsUsageHistoryByDeviceByInterval) | **GET** /organizations/{organizationId}/switch/ports/usage/history/byDevice/byInterval | List the historical usage and traffic data of switchports in an organization. |
| [**removeNetworkSwitchStack()**](SwitchApi.md#removeNetworkSwitchStack) | **POST** /networks/{networkId}/switch/stacks/{switchStackId}/remove | Remove a switch from a stack |
| [**updateDeviceSwitchPort()**](SwitchApi.md#updateDeviceSwitchPort) | **PUT** /devices/{serial}/switch/ports/{portId} | Update a switch port |
| [**updateDeviceSwitchRoutingInterface()**](SwitchApi.md#updateDeviceSwitchRoutingInterface) | **PUT** /devices/{serial}/switch/routing/interfaces/{interfaceId} | Update a layer 3 interface for a switch |
| [**updateDeviceSwitchRoutingInterfaceDhcp()**](SwitchApi.md#updateDeviceSwitchRoutingInterfaceDhcp) | **PUT** /devices/{serial}/switch/routing/interfaces/{interfaceId}/dhcp | Update a layer 3 interface DHCP configuration for a switch |
| [**updateDeviceSwitchRoutingStaticRoute()**](SwitchApi.md#updateDeviceSwitchRoutingStaticRoute) | **PUT** /devices/{serial}/switch/routing/staticRoutes/{staticRouteId} | Update a layer 3 static route for a switch |
| [**updateDeviceSwitchWarmSpare()**](SwitchApi.md#updateDeviceSwitchWarmSpare) | **PUT** /devices/{serial}/switch/warmSpare | Update warm spare configuration for a switch |
| [**updateNetworkSwitchAccessControlLists()**](SwitchApi.md#updateNetworkSwitchAccessControlLists) | **PUT** /networks/{networkId}/switch/accessControlLists | Update the access control lists for a MS network |
| [**updateNetworkSwitchAccessPolicy()**](SwitchApi.md#updateNetworkSwitchAccessPolicy) | **PUT** /networks/{networkId}/switch/accessPolicies/{accessPolicyNumber} | Update an access policy for a switch network |
| [**updateNetworkSwitchAlternateManagementInterface()**](SwitchApi.md#updateNetworkSwitchAlternateManagementInterface) | **PUT** /networks/{networkId}/switch/alternateManagementInterface | Update the switch alternate management interface for the network |
| [**updateNetworkSwitchDhcpServerPolicy()**](SwitchApi.md#updateNetworkSwitchDhcpServerPolicy) | **PUT** /networks/{networkId}/switch/dhcpServerPolicy | Update the DHCP server settings |
| [**updateNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer()**](SwitchApi.md#updateNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer) | **PUT** /networks/{networkId}/switch/dhcpServerPolicy/arpInspection/trustedServers/{trustedServerId} | Update a server that is trusted by Dynamic ARP Inspection on this network |
| [**updateNetworkSwitchDscpToCosMappings()**](SwitchApi.md#updateNetworkSwitchDscpToCosMappings) | **PUT** /networks/{networkId}/switch/dscpToCosMappings | Update the DSCP to CoS mappings |
| [**updateNetworkSwitchLinkAggregation()**](SwitchApi.md#updateNetworkSwitchLinkAggregation) | **PUT** /networks/{networkId}/switch/linkAggregations/{linkAggregationId} | Update a link aggregation group |
| [**updateNetworkSwitchMtu()**](SwitchApi.md#updateNetworkSwitchMtu) | **PUT** /networks/{networkId}/switch/mtu | Update the MTU configuration |
| [**updateNetworkSwitchPortSchedule()**](SwitchApi.md#updateNetworkSwitchPortSchedule) | **PUT** /networks/{networkId}/switch/portSchedules/{portScheduleId} | Update a switch port schedule |
| [**updateNetworkSwitchQosRule()**](SwitchApi.md#updateNetworkSwitchQosRule) | **PUT** /networks/{networkId}/switch/qosRules/{qosRuleId} | Update a quality of service rule |
| [**updateNetworkSwitchQosRulesOrder()**](SwitchApi.md#updateNetworkSwitchQosRulesOrder) | **PUT** /networks/{networkId}/switch/qosRules/order | Update the order in which the rules should be processed by the switch |
| [**updateNetworkSwitchRoutingMulticast()**](SwitchApi.md#updateNetworkSwitchRoutingMulticast) | **PUT** /networks/{networkId}/switch/routing/multicast | Update multicast settings for a network |
| [**updateNetworkSwitchRoutingMulticastRendezvousPoint()**](SwitchApi.md#updateNetworkSwitchRoutingMulticastRendezvousPoint) | **PUT** /networks/{networkId}/switch/routing/multicast/rendezvousPoints/{rendezvousPointId} | Update a multicast rendezvous point |
| [**updateNetworkSwitchRoutingOspf()**](SwitchApi.md#updateNetworkSwitchRoutingOspf) | **PUT** /networks/{networkId}/switch/routing/ospf | Update layer 3 OSPF routing configuration |
| [**updateNetworkSwitchSettings()**](SwitchApi.md#updateNetworkSwitchSettings) | **PUT** /networks/{networkId}/switch/settings | Update switch network settings |
| [**updateNetworkSwitchStackRoutingInterface()**](SwitchApi.md#updateNetworkSwitchStackRoutingInterface) | **PUT** /networks/{networkId}/switch/stacks/{switchStackId}/routing/interfaces/{interfaceId} | Update a layer 3 interface for a switch stack |
| [**updateNetworkSwitchStackRoutingInterfaceDhcp()**](SwitchApi.md#updateNetworkSwitchStackRoutingInterfaceDhcp) | **PUT** /networks/{networkId}/switch/stacks/{switchStackId}/routing/interfaces/{interfaceId}/dhcp | Update a layer 3 interface DHCP configuration for a switch stack |
| [**updateNetworkSwitchStackRoutingStaticRoute()**](SwitchApi.md#updateNetworkSwitchStackRoutingStaticRoute) | **PUT** /networks/{networkId}/switch/stacks/{switchStackId}/routing/staticRoutes/{staticRouteId} | Update a layer 3 static route for a switch stack |
| [**updateNetworkSwitchStormControl()**](SwitchApi.md#updateNetworkSwitchStormControl) | **PUT** /networks/{networkId}/switch/stormControl | Update the storm control configuration for a switch network |
| [**updateNetworkSwitchStp()**](SwitchApi.md#updateNetworkSwitchStp) | **PUT** /networks/{networkId}/switch/stp | Updates STP settings |
| [**updateOrganizationConfigTemplateSwitchProfilePort()**](SwitchApi.md#updateOrganizationConfigTemplateSwitchProfilePort) | **PUT** /organizations/{organizationId}/configTemplates/{configTemplateId}/switch/profiles/{profileId}/ports/{portId} | Update a switch template port |


## `addNetworkSwitchStack()`

```php
addNetworkSwitchStack($network_id, $switch_stack_id, $add_network_switch_stack_request): \Meraki\Model\GetNetworkSwitchStacks200ResponseInner
```

Add a switch to a stack

Add a switch to a stack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$switch_stack_id = 'switch_stack_id_example'; // string | Switch stack ID
$add_network_switch_stack_request = new \Meraki\Model\AddNetworkSwitchStackRequest(); // \Meraki\Model\AddNetworkSwitchStackRequest

try {
    $result = $apiInstance->addNetworkSwitchStack($network_id, $switch_stack_id, $add_network_switch_stack_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->addNetworkSwitchStack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **switch_stack_id** | **string**| Switch stack ID | |
| **add_network_switch_stack_request** | [**\Meraki\Model\AddNetworkSwitchStackRequest**](../Model/AddNetworkSwitchStackRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkSwitchStacks200ResponseInner**](../Model/GetNetworkSwitchStacks200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloneOrganizationSwitchDevices()`

```php
cloneOrganizationSwitchDevices($organization_id, $clone_organization_switch_devices_request): \Meraki\Model\CloneOrganizationSwitchDevices200Response
```

Clone port-level and some switch-level configuration settings from a source switch to one or more target switches

Clone port-level and some switch-level configuration settings from a source switch to one or more target switches. Cloned settings include: Aggregation Groups, Power Settings, Multicast Settings, MTU Configuration, STP Bridge priority, Port Mirroring

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$clone_organization_switch_devices_request = new \Meraki\Model\CloneOrganizationSwitchDevicesRequest(); // \Meraki\Model\CloneOrganizationSwitchDevicesRequest

try {
    $result = $apiInstance->cloneOrganizationSwitchDevices($organization_id, $clone_organization_switch_devices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->cloneOrganizationSwitchDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **clone_organization_switch_devices_request** | [**\Meraki\Model\CloneOrganizationSwitchDevicesRequest**](../Model/CloneOrganizationSwitchDevicesRequest.md)|  | |

### Return type

[**\Meraki\Model\CloneOrganizationSwitchDevices200Response**](../Model/CloneOrganizationSwitchDevices200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDeviceSwitchRoutingInterface()`

```php
createDeviceSwitchRoutingInterface($serial, $create_device_switch_routing_interface_request): \Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInner
```

Create a layer 3 interface for a switch

Create a layer 3 interface for a switch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$create_device_switch_routing_interface_request = new \Meraki\Model\CreateDeviceSwitchRoutingInterfaceRequest(); // \Meraki\Model\CreateDeviceSwitchRoutingInterfaceRequest

try {
    $result = $apiInstance->createDeviceSwitchRoutingInterface($serial, $create_device_switch_routing_interface_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->createDeviceSwitchRoutingInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **create_device_switch_routing_interface_request** | [**\Meraki\Model\CreateDeviceSwitchRoutingInterfaceRequest**](../Model/CreateDeviceSwitchRoutingInterfaceRequest.md)|  | |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInner**](../Model/GetDeviceSwitchRoutingInterfaces200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDeviceSwitchRoutingStaticRoute()`

```php
createDeviceSwitchRoutingStaticRoute($serial, $create_device_switch_routing_static_route_request): \Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner
```

Create a layer 3 static route for a switch

Create a layer 3 static route for a switch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$create_device_switch_routing_static_route_request = new \Meraki\Model\CreateDeviceSwitchRoutingStaticRouteRequest(); // \Meraki\Model\CreateDeviceSwitchRoutingStaticRouteRequest

try {
    $result = $apiInstance->createDeviceSwitchRoutingStaticRoute($serial, $create_device_switch_routing_static_route_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->createDeviceSwitchRoutingStaticRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **create_device_switch_routing_static_route_request** | [**\Meraki\Model\CreateDeviceSwitchRoutingStaticRouteRequest**](../Model/CreateDeviceSwitchRoutingStaticRouteRequest.md)|  | |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner**](../Model/GetDeviceSwitchRoutingStaticRoutes200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkSwitchAccessPolicy()`

```php
createNetworkSwitchAccessPolicy($network_id, $create_network_switch_access_policy_request): \Meraki\Model\GetNetworkSwitchAccessPolicies200ResponseInner
```

Create an access policy for a switch network

Create an access policy for a switch network. If you would like to enable Meraki Authentication, set radiusServers to empty array.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_switch_access_policy_request = new \Meraki\Model\CreateNetworkSwitchAccessPolicyRequest(); // \Meraki\Model\CreateNetworkSwitchAccessPolicyRequest

try {
    $result = $apiInstance->createNetworkSwitchAccessPolicy($network_id, $create_network_switch_access_policy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->createNetworkSwitchAccessPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_switch_access_policy_request** | [**\Meraki\Model\CreateNetworkSwitchAccessPolicyRequest**](../Model/CreateNetworkSwitchAccessPolicyRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkSwitchAccessPolicies200ResponseInner**](../Model/GetNetworkSwitchAccessPolicies200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer()`

```php
createNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer($network_id, $create_network_switch_dhcp_server_policy_arp_inspection_trusted_server_request): \Meraki\Model\GetNetworkSwitchDhcpServerPolicyArpInspectionTrustedServers200ResponseInner
```

Add a server to be trusted by Dynamic ARP Inspection on this network

Add a server to be trusted by Dynamic ARP Inspection on this network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_switch_dhcp_server_policy_arp_inspection_trusted_server_request = new \Meraki\Model\CreateNetworkSwitchDhcpServerPolicyArpInspectionTrustedServerRequest(); // \Meraki\Model\CreateNetworkSwitchDhcpServerPolicyArpInspectionTrustedServerRequest

try {
    $result = $apiInstance->createNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer($network_id, $create_network_switch_dhcp_server_policy_arp_inspection_trusted_server_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->createNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_switch_dhcp_server_policy_arp_inspection_trusted_server_request** | [**\Meraki\Model\CreateNetworkSwitchDhcpServerPolicyArpInspectionTrustedServerRequest**](../Model/CreateNetworkSwitchDhcpServerPolicyArpInspectionTrustedServerRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkSwitchDhcpServerPolicyArpInspectionTrustedServers200ResponseInner**](../Model/GetNetworkSwitchDhcpServerPolicyArpInspectionTrustedServers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkSwitchLinkAggregation()`

```php
createNetworkSwitchLinkAggregation($network_id, $create_network_switch_link_aggregation_request): \Meraki\Model\GetNetworkSwitchLinkAggregations200ResponseInner
```

Create a link aggregation group

Create a link aggregation group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_switch_link_aggregation_request = new \Meraki\Model\CreateNetworkSwitchLinkAggregationRequest(); // \Meraki\Model\CreateNetworkSwitchLinkAggregationRequest

try {
    $result = $apiInstance->createNetworkSwitchLinkAggregation($network_id, $create_network_switch_link_aggregation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->createNetworkSwitchLinkAggregation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_switch_link_aggregation_request** | [**\Meraki\Model\CreateNetworkSwitchLinkAggregationRequest**](../Model/CreateNetworkSwitchLinkAggregationRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchLinkAggregations200ResponseInner**](../Model/GetNetworkSwitchLinkAggregations200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkSwitchPortSchedule()`

```php
createNetworkSwitchPortSchedule($network_id, $create_network_switch_port_schedule_request): \Meraki\Model\GetNetworkSwitchPortSchedules200ResponseInner
```

Add a switch port schedule

Add a switch port schedule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_switch_port_schedule_request = new \Meraki\Model\CreateNetworkSwitchPortScheduleRequest(); // \Meraki\Model\CreateNetworkSwitchPortScheduleRequest

try {
    $result = $apiInstance->createNetworkSwitchPortSchedule($network_id, $create_network_switch_port_schedule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->createNetworkSwitchPortSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_switch_port_schedule_request** | [**\Meraki\Model\CreateNetworkSwitchPortScheduleRequest**](../Model/CreateNetworkSwitchPortScheduleRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkSwitchPortSchedules200ResponseInner**](../Model/GetNetworkSwitchPortSchedules200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkSwitchQosRule()`

```php
createNetworkSwitchQosRule($network_id, $create_network_switch_qos_rule_request): \Meraki\Model\GetNetworkSwitchQosRules200ResponseInner
```

Add a quality of service rule

Add a quality of service rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_switch_qos_rule_request = new \Meraki\Model\CreateNetworkSwitchQosRuleRequest(); // \Meraki\Model\CreateNetworkSwitchQosRuleRequest

try {
    $result = $apiInstance->createNetworkSwitchQosRule($network_id, $create_network_switch_qos_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->createNetworkSwitchQosRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_switch_qos_rule_request** | [**\Meraki\Model\CreateNetworkSwitchQosRuleRequest**](../Model/CreateNetworkSwitchQosRuleRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkSwitchQosRules200ResponseInner**](../Model/GetNetworkSwitchQosRules200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkSwitchRoutingMulticastRendezvousPoint()`

```php
createNetworkSwitchRoutingMulticastRendezvousPoint($network_id, $create_network_switch_routing_multicast_rendezvous_point_request): \Meraki\Model\GetNetworkSwitchRoutingMulticastRendezvousPoints200ResponseInner
```

Create a multicast rendezvous point

Create a multicast rendezvous point

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_switch_routing_multicast_rendezvous_point_request = new \Meraki\Model\CreateNetworkSwitchRoutingMulticastRendezvousPointRequest(); // \Meraki\Model\CreateNetworkSwitchRoutingMulticastRendezvousPointRequest

try {
    $result = $apiInstance->createNetworkSwitchRoutingMulticastRendezvousPoint($network_id, $create_network_switch_routing_multicast_rendezvous_point_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->createNetworkSwitchRoutingMulticastRendezvousPoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_switch_routing_multicast_rendezvous_point_request** | [**\Meraki\Model\CreateNetworkSwitchRoutingMulticastRendezvousPointRequest**](../Model/CreateNetworkSwitchRoutingMulticastRendezvousPointRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkSwitchRoutingMulticastRendezvousPoints200ResponseInner**](../Model/GetNetworkSwitchRoutingMulticastRendezvousPoints200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkSwitchStack()`

```php
createNetworkSwitchStack($network_id, $create_network_switch_stack_request): \Meraki\Model\GetNetworkSwitchStacks200ResponseInner
```

Create a switch stack

Create a switch stack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_switch_stack_request = new \Meraki\Model\CreateNetworkSwitchStackRequest(); // \Meraki\Model\CreateNetworkSwitchStackRequest

try {
    $result = $apiInstance->createNetworkSwitchStack($network_id, $create_network_switch_stack_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->createNetworkSwitchStack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_switch_stack_request** | [**\Meraki\Model\CreateNetworkSwitchStackRequest**](../Model/CreateNetworkSwitchStackRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkSwitchStacks200ResponseInner**](../Model/GetNetworkSwitchStacks200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkSwitchStackRoutingInterface()`

```php
createNetworkSwitchStackRoutingInterface($network_id, $switch_stack_id, $create_device_switch_routing_interface_request): \Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInner
```

Create a layer 3 interface for a switch stack

Create a layer 3 interface for a switch stack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$switch_stack_id = 'switch_stack_id_example'; // string | Switch stack ID
$create_device_switch_routing_interface_request = new \Meraki\Model\CreateDeviceSwitchRoutingInterfaceRequest(); // \Meraki\Model\CreateDeviceSwitchRoutingInterfaceRequest

try {
    $result = $apiInstance->createNetworkSwitchStackRoutingInterface($network_id, $switch_stack_id, $create_device_switch_routing_interface_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->createNetworkSwitchStackRoutingInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **switch_stack_id** | **string**| Switch stack ID | |
| **create_device_switch_routing_interface_request** | [**\Meraki\Model\CreateDeviceSwitchRoutingInterfaceRequest**](../Model/CreateDeviceSwitchRoutingInterfaceRequest.md)|  | |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInner**](../Model/GetDeviceSwitchRoutingInterfaces200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkSwitchStackRoutingStaticRoute()`

```php
createNetworkSwitchStackRoutingStaticRoute($network_id, $switch_stack_id, $create_device_switch_routing_static_route_request): \Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner
```

Create a layer 3 static route for a switch stack

Create a layer 3 static route for a switch stack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$switch_stack_id = 'switch_stack_id_example'; // string | Switch stack ID
$create_device_switch_routing_static_route_request = new \Meraki\Model\CreateDeviceSwitchRoutingStaticRouteRequest(); // \Meraki\Model\CreateDeviceSwitchRoutingStaticRouteRequest

try {
    $result = $apiInstance->createNetworkSwitchStackRoutingStaticRoute($network_id, $switch_stack_id, $create_device_switch_routing_static_route_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->createNetworkSwitchStackRoutingStaticRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **switch_stack_id** | **string**| Switch stack ID | |
| **create_device_switch_routing_static_route_request** | [**\Meraki\Model\CreateDeviceSwitchRoutingStaticRouteRequest**](../Model/CreateDeviceSwitchRoutingStaticRouteRequest.md)|  | |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner**](../Model/GetDeviceSwitchRoutingStaticRoutes200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cycleDeviceSwitchPorts()`

```php
cycleDeviceSwitchPorts($serial, $cycle_device_switch_ports_request): \Meraki\Model\CycleDeviceSwitchPorts200Response
```

Cycle a set of switch ports

Cycle a set of switch ports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$cycle_device_switch_ports_request = new \Meraki\Model\CycleDeviceSwitchPortsRequest(); // \Meraki\Model\CycleDeviceSwitchPortsRequest

try {
    $result = $apiInstance->cycleDeviceSwitchPorts($serial, $cycle_device_switch_ports_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->cycleDeviceSwitchPorts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **cycle_device_switch_ports_request** | [**\Meraki\Model\CycleDeviceSwitchPortsRequest**](../Model/CycleDeviceSwitchPortsRequest.md)|  | |

### Return type

[**\Meraki\Model\CycleDeviceSwitchPorts200Response**](../Model/CycleDeviceSwitchPorts200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDeviceSwitchRoutingInterface()`

```php
deleteDeviceSwitchRoutingInterface($serial, $interface_id)
```

Delete a layer 3 interface from the switch

Delete a layer 3 interface from the switch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$interface_id = 'interface_id_example'; // string | Interface ID

try {
    $apiInstance->deleteDeviceSwitchRoutingInterface($serial, $interface_id);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->deleteDeviceSwitchRoutingInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **interface_id** | **string**| Interface ID | |

### Return type

void (empty response body)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDeviceSwitchRoutingStaticRoute()`

```php
deleteDeviceSwitchRoutingStaticRoute($serial, $static_route_id)
```

Delete a layer 3 static route for a switch

Delete a layer 3 static route for a switch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$static_route_id = 'static_route_id_example'; // string | Static route ID

try {
    $apiInstance->deleteDeviceSwitchRoutingStaticRoute($serial, $static_route_id);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->deleteDeviceSwitchRoutingStaticRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **static_route_id** | **string**| Static route ID | |

### Return type

void (empty response body)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkSwitchAccessPolicy()`

```php
deleteNetworkSwitchAccessPolicy($network_id, $access_policy_number)
```

Delete an access policy for a switch network

Delete an access policy for a switch network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$access_policy_number = 'access_policy_number_example'; // string | Access policy number

try {
    $apiInstance->deleteNetworkSwitchAccessPolicy($network_id, $access_policy_number);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->deleteNetworkSwitchAccessPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **access_policy_number** | **string**| Access policy number | |

### Return type

void (empty response body)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer()`

```php
deleteNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer($network_id, $trusted_server_id)
```

Remove a server from being trusted by Dynamic ARP Inspection on this network

Remove a server from being trusted by Dynamic ARP Inspection on this network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$trusted_server_id = 'trusted_server_id_example'; // string | Trusted server ID

try {
    $apiInstance->deleteNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer($network_id, $trusted_server_id);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->deleteNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **trusted_server_id** | **string**| Trusted server ID | |

### Return type

void (empty response body)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkSwitchLinkAggregation()`

```php
deleteNetworkSwitchLinkAggregation($network_id, $link_aggregation_id)
```

Split a link aggregation group into separate ports

Split a link aggregation group into separate ports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$link_aggregation_id = 'link_aggregation_id_example'; // string | Link aggregation ID

try {
    $apiInstance->deleteNetworkSwitchLinkAggregation($network_id, $link_aggregation_id);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->deleteNetworkSwitchLinkAggregation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **link_aggregation_id** | **string**| Link aggregation ID | |

### Return type

void (empty response body)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkSwitchPortSchedule()`

```php
deleteNetworkSwitchPortSchedule($network_id, $port_schedule_id)
```

Delete a switch port schedule

Delete a switch port schedule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$port_schedule_id = 'port_schedule_id_example'; // string | Port schedule ID

try {
    $apiInstance->deleteNetworkSwitchPortSchedule($network_id, $port_schedule_id);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->deleteNetworkSwitchPortSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **port_schedule_id** | **string**| Port schedule ID | |

### Return type

void (empty response body)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkSwitchQosRule()`

```php
deleteNetworkSwitchQosRule($network_id, $qos_rule_id)
```

Delete a quality of service rule

Delete a quality of service rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$qos_rule_id = 'qos_rule_id_example'; // string | Qos rule ID

try {
    $apiInstance->deleteNetworkSwitchQosRule($network_id, $qos_rule_id);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->deleteNetworkSwitchQosRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **qos_rule_id** | **string**| Qos rule ID | |

### Return type

void (empty response body)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkSwitchRoutingMulticastRendezvousPoint()`

```php
deleteNetworkSwitchRoutingMulticastRendezvousPoint($network_id, $rendezvous_point_id)
```

Delete a multicast rendezvous point

Delete a multicast rendezvous point

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$rendezvous_point_id = 'rendezvous_point_id_example'; // string | Rendezvous point ID

try {
    $apiInstance->deleteNetworkSwitchRoutingMulticastRendezvousPoint($network_id, $rendezvous_point_id);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->deleteNetworkSwitchRoutingMulticastRendezvousPoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **rendezvous_point_id** | **string**| Rendezvous point ID | |

### Return type

void (empty response body)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkSwitchStack()`

```php
deleteNetworkSwitchStack($network_id, $switch_stack_id)
```

Delete a stack

Delete a stack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$switch_stack_id = 'switch_stack_id_example'; // string | Switch stack ID

try {
    $apiInstance->deleteNetworkSwitchStack($network_id, $switch_stack_id);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->deleteNetworkSwitchStack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **switch_stack_id** | **string**| Switch stack ID | |

### Return type

void (empty response body)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkSwitchStackRoutingInterface()`

```php
deleteNetworkSwitchStackRoutingInterface($network_id, $switch_stack_id, $interface_id)
```

Delete a layer 3 interface from a switch stack

Delete a layer 3 interface from a switch stack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$switch_stack_id = 'switch_stack_id_example'; // string | Switch stack ID
$interface_id = 'interface_id_example'; // string | Interface ID

try {
    $apiInstance->deleteNetworkSwitchStackRoutingInterface($network_id, $switch_stack_id, $interface_id);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->deleteNetworkSwitchStackRoutingInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **switch_stack_id** | **string**| Switch stack ID | |
| **interface_id** | **string**| Interface ID | |

### Return type

void (empty response body)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkSwitchStackRoutingStaticRoute()`

```php
deleteNetworkSwitchStackRoutingStaticRoute($network_id, $switch_stack_id, $static_route_id)
```

Delete a layer 3 static route for a switch stack

Delete a layer 3 static route for a switch stack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$switch_stack_id = 'switch_stack_id_example'; // string | Switch stack ID
$static_route_id = 'static_route_id_example'; // string | Static route ID

try {
    $apiInstance->deleteNetworkSwitchStackRoutingStaticRoute($network_id, $switch_stack_id, $static_route_id);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->deleteNetworkSwitchStackRoutingStaticRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **switch_stack_id** | **string**| Switch stack ID | |
| **static_route_id** | **string**| Static route ID | |

### Return type

void (empty response body)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceSwitchPort()`

```php
getDeviceSwitchPort($serial, $port_id): \Meraki\Model\GetDeviceSwitchPorts200ResponseInner
```

Return a switch port

Return a switch port

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$port_id = 'port_id_example'; // string | Port ID

try {
    $result = $apiInstance->getDeviceSwitchPort($serial, $port_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getDeviceSwitchPort: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **port_id** | **string**| Port ID | |

### Return type

[**\Meraki\Model\GetDeviceSwitchPorts200ResponseInner**](../Model/GetDeviceSwitchPorts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceSwitchPorts()`

```php
getDeviceSwitchPorts($serial): \Meraki\Model\GetDeviceSwitchPorts200ResponseInner[]
```

List the switch ports for a switch

List the switch ports for a switch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceSwitchPorts($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getDeviceSwitchPorts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceSwitchPorts200ResponseInner[]**](../Model/GetDeviceSwitchPorts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceSwitchPortsStatuses()`

```php
getDeviceSwitchPortsStatuses($serial, $t0, $timespan): \Meraki\Model\GetDeviceSwitchPortsStatuses200ResponseInner[]
```

Return the status for all the ports of a switch

Return the status for all the ports of a switch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 31 days. The default is 1 day.

try {
    $result = $apiInstance->getDeviceSwitchPortsStatuses($serial, $t0, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getDeviceSwitchPortsStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetDeviceSwitchPortsStatuses200ResponseInner[]**](../Model/GetDeviceSwitchPortsStatuses200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceSwitchPortsStatusesPackets()`

```php
getDeviceSwitchPortsStatusesPackets($serial, $t0, $timespan): \Meraki\Model\GetDeviceSwitchPortsStatusesPackets200ResponseInner[]
```

Return the packet counters for all the ports of a switch

Return the packet counters for all the ports of a switch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 1 day from today.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 1 day. The default is 1 day.

try {
    $result = $apiInstance->getDeviceSwitchPortsStatusesPackets($serial, $t0, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getDeviceSwitchPortsStatusesPackets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 1 day from today. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 1 day. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetDeviceSwitchPortsStatusesPackets200ResponseInner[]**](../Model/GetDeviceSwitchPortsStatusesPackets200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceSwitchRoutingInterface()`

```php
getDeviceSwitchRoutingInterface($serial, $interface_id): \Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInner
```

Return a layer 3 interface for a switch

Return a layer 3 interface for a switch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$interface_id = 'interface_id_example'; // string | Interface ID

try {
    $result = $apiInstance->getDeviceSwitchRoutingInterface($serial, $interface_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getDeviceSwitchRoutingInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **interface_id** | **string**| Interface ID | |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInner**](../Model/GetDeviceSwitchRoutingInterfaces200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceSwitchRoutingInterfaceDhcp()`

```php
getDeviceSwitchRoutingInterfaceDhcp($serial, $interface_id): \Meraki\Model\GetDeviceSwitchRoutingInterfaceDhcp200Response
```

Return a layer 3 interface DHCP configuration for a switch

Return a layer 3 interface DHCP configuration for a switch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$interface_id = 'interface_id_example'; // string | Interface ID

try {
    $result = $apiInstance->getDeviceSwitchRoutingInterfaceDhcp($serial, $interface_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getDeviceSwitchRoutingInterfaceDhcp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **interface_id** | **string**| Interface ID | |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingInterfaceDhcp200Response**](../Model/GetDeviceSwitchRoutingInterfaceDhcp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceSwitchRoutingInterfaces()`

```php
getDeviceSwitchRoutingInterfaces($serial, $protocol): \Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInner[]
```

List layer 3 interfaces for a switch

List layer 3 interfaces for a switch. Those for a stack may be found under switch stack routing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$protocol = 'protocol_example'; // string | Optional parameter to filter L3 interfaces by protocol.

try {
    $result = $apiInstance->getDeviceSwitchRoutingInterfaces($serial, $protocol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getDeviceSwitchRoutingInterfaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **protocol** | **string**| Optional parameter to filter L3 interfaces by protocol. | [optional] |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInner[]**](../Model/GetDeviceSwitchRoutingInterfaces200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceSwitchRoutingStaticRoute()`

```php
getDeviceSwitchRoutingStaticRoute($serial, $static_route_id): \Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner
```

Return a layer 3 static route for a switch

Return a layer 3 static route for a switch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$static_route_id = 'static_route_id_example'; // string | Static route ID

try {
    $result = $apiInstance->getDeviceSwitchRoutingStaticRoute($serial, $static_route_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getDeviceSwitchRoutingStaticRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **static_route_id** | **string**| Static route ID | |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner**](../Model/GetDeviceSwitchRoutingStaticRoutes200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceSwitchRoutingStaticRoutes()`

```php
getDeviceSwitchRoutingStaticRoutes($serial): \Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner[]
```

List layer 3 static routes for a switch

List layer 3 static routes for a switch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceSwitchRoutingStaticRoutes($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getDeviceSwitchRoutingStaticRoutes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner[]**](../Model/GetDeviceSwitchRoutingStaticRoutes200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceSwitchWarmSpare()`

```php
getDeviceSwitchWarmSpare($serial): \Meraki\Model\GetDeviceSwitchWarmSpare200Response
```

Return warm spare configuration for a switch

Return warm spare configuration for a switch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceSwitchWarmSpare($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getDeviceSwitchWarmSpare: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceSwitchWarmSpare200Response**](../Model/GetDeviceSwitchWarmSpare200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchAccessControlLists()`

```php
getNetworkSwitchAccessControlLists($network_id): \Meraki\Model\GetNetworkSwitchAccessControlLists200Response
```

Return the access control lists for a MS network

Return the access control lists for a MS network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSwitchAccessControlLists($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getNetworkSwitchAccessControlLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchAccessControlLists200Response**](../Model/GetNetworkSwitchAccessControlLists200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchAccessPolicies()`

```php
getNetworkSwitchAccessPolicies($network_id): \Meraki\Model\GetNetworkSwitchAccessPolicies200ResponseInner[]
```

List the access policies for a switch network

List the access policies for a switch network. Only returns access policies with 'my RADIUS server' as authentication method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSwitchAccessPolicies($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getNetworkSwitchAccessPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchAccessPolicies200ResponseInner[]**](../Model/GetNetworkSwitchAccessPolicies200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchAccessPolicy()`

```php
getNetworkSwitchAccessPolicy($network_id, $access_policy_number): \Meraki\Model\GetNetworkSwitchAccessPolicies200ResponseInner
```

Return a specific access policy for a switch network

Return a specific access policy for a switch network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$access_policy_number = 'access_policy_number_example'; // string | Access policy number

try {
    $result = $apiInstance->getNetworkSwitchAccessPolicy($network_id, $access_policy_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getNetworkSwitchAccessPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **access_policy_number** | **string**| Access policy number | |

### Return type

[**\Meraki\Model\GetNetworkSwitchAccessPolicies200ResponseInner**](../Model/GetNetworkSwitchAccessPolicies200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchAlternateManagementInterface()`

```php
getNetworkSwitchAlternateManagementInterface($network_id): \Meraki\Model\GetNetworkSwitchAlternateManagementInterface200Response
```

Return the switch alternate management interface for the network

Return the switch alternate management interface for the network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSwitchAlternateManagementInterface($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getNetworkSwitchAlternateManagementInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchAlternateManagementInterface200Response**](../Model/GetNetworkSwitchAlternateManagementInterface200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchDhcpServerPolicy()`

```php
getNetworkSwitchDhcpServerPolicy($network_id): \Meraki\Model\GetNetworkSwitchDhcpServerPolicy200Response
```

Return the DHCP server settings

Return the DHCP server settings. Blocked/allowed servers are only applied when default policy is allow/block, respectively

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSwitchDhcpServerPolicy($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getNetworkSwitchDhcpServerPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchDhcpServerPolicy200Response**](../Model/GetNetworkSwitchDhcpServerPolicy200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchDhcpServerPolicyArpInspectionTrustedServers()`

```php
getNetworkSwitchDhcpServerPolicyArpInspectionTrustedServers($network_id, $per_page, $starting_after, $ending_before): \Meraki\Model\GetNetworkSwitchDhcpServerPolicyArpInspectionTrustedServers200ResponseInner[]
```

Return the list of servers trusted by Dynamic ARP Inspection on this network

Return the list of servers trusted by Dynamic ARP Inspection on this network. These are also known as allow listed snoop entries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getNetworkSwitchDhcpServerPolicyArpInspectionTrustedServers($network_id, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getNetworkSwitchDhcpServerPolicyArpInspectionTrustedServers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchDhcpServerPolicyArpInspectionTrustedServers200ResponseInner[]**](../Model/GetNetworkSwitchDhcpServerPolicyArpInspectionTrustedServers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchDhcpServerPolicyArpInspectionWarningsByDevice()`

```php
getNetworkSwitchDhcpServerPolicyArpInspectionWarningsByDevice($network_id, $per_page, $starting_after, $ending_before): \Meraki\Model\GetNetworkSwitchDhcpServerPolicyArpInspectionWarningsByDevice200ResponseInner[]
```

Return the devices that have a Dynamic ARP Inspection warning and their warnings

Return the devices that have a Dynamic ARP Inspection warning and their warnings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getNetworkSwitchDhcpServerPolicyArpInspectionWarningsByDevice($network_id, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getNetworkSwitchDhcpServerPolicyArpInspectionWarningsByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchDhcpServerPolicyArpInspectionWarningsByDevice200ResponseInner[]**](../Model/GetNetworkSwitchDhcpServerPolicyArpInspectionWarningsByDevice200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchDhcpV4ServersSeen()`

```php
getNetworkSwitchDhcpV4ServersSeen($network_id, $t0, $timespan, $per_page, $starting_after, $ending_before): \Meraki\Model\GetNetworkSwitchDhcpV4ServersSeen200ResponseInner[]
```

Return the network's DHCPv4 servers seen within the selected timeframe (default 1 day)

Return the network's DHCPv4 servers seen within the selected timeframe (default 1 day)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 31 days. The default is 1 day.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getNetworkSwitchDhcpV4ServersSeen($network_id, $t0, $timespan, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getNetworkSwitchDhcpV4ServersSeen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchDhcpV4ServersSeen200ResponseInner[]**](../Model/GetNetworkSwitchDhcpV4ServersSeen200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchDscpToCosMappings()`

```php
getNetworkSwitchDscpToCosMappings($network_id): \Meraki\Model\GetNetworkSwitchDscpToCosMappings200Response
```

Return the DSCP to CoS mappings

Return the DSCP to CoS mappings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSwitchDscpToCosMappings($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getNetworkSwitchDscpToCosMappings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchDscpToCosMappings200Response**](../Model/GetNetworkSwitchDscpToCosMappings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchLinkAggregations()`

```php
getNetworkSwitchLinkAggregations($network_id): \Meraki\Model\GetNetworkSwitchLinkAggregations200ResponseInner[]
```

List link aggregation groups

List link aggregation groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSwitchLinkAggregations($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getNetworkSwitchLinkAggregations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchLinkAggregations200ResponseInner[]**](../Model/GetNetworkSwitchLinkAggregations200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchMtu()`

```php
getNetworkSwitchMtu($network_id): \Meraki\Model\GetNetworkSwitchMtu200Response
```

Return the MTU configuration

Return the MTU configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSwitchMtu($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getNetworkSwitchMtu: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchMtu200Response**](../Model/GetNetworkSwitchMtu200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchPortSchedules()`

```php
getNetworkSwitchPortSchedules($network_id): \Meraki\Model\GetNetworkSwitchPortSchedules200ResponseInner[]
```

List switch port schedules

List switch port schedules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSwitchPortSchedules($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getNetworkSwitchPortSchedules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchPortSchedules200ResponseInner[]**](../Model/GetNetworkSwitchPortSchedules200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchQosRule()`

```php
getNetworkSwitchQosRule($network_id, $qos_rule_id): \Meraki\Model\GetNetworkSwitchQosRules200ResponseInner
```

Return a quality of service rule

Return a quality of service rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$qos_rule_id = 'qos_rule_id_example'; // string | Qos rule ID

try {
    $result = $apiInstance->getNetworkSwitchQosRule($network_id, $qos_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getNetworkSwitchQosRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **qos_rule_id** | **string**| Qos rule ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchQosRules200ResponseInner**](../Model/GetNetworkSwitchQosRules200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchQosRules()`

```php
getNetworkSwitchQosRules($network_id): \Meraki\Model\GetNetworkSwitchQosRules200ResponseInner[]
```

List quality of service rules

List quality of service rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSwitchQosRules($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getNetworkSwitchQosRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchQosRules200ResponseInner[]**](../Model/GetNetworkSwitchQosRules200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchQosRulesOrder()`

```php
getNetworkSwitchQosRulesOrder($network_id): \Meraki\Model\GetNetworkSwitchQosRulesOrder200Response
```

Return the quality of service rule IDs by order in which they will be processed by the switch

Return the quality of service rule IDs by order in which they will be processed by the switch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSwitchQosRulesOrder($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getNetworkSwitchQosRulesOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchQosRulesOrder200Response**](../Model/GetNetworkSwitchQosRulesOrder200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchRoutingMulticast()`

```php
getNetworkSwitchRoutingMulticast($network_id): \Meraki\Model\GetNetworkSwitchRoutingMulticast200Response
```

Return multicast settings for a network

Return multicast settings for a network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSwitchRoutingMulticast($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getNetworkSwitchRoutingMulticast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchRoutingMulticast200Response**](../Model/GetNetworkSwitchRoutingMulticast200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchRoutingMulticastRendezvousPoint()`

```php
getNetworkSwitchRoutingMulticastRendezvousPoint($network_id, $rendezvous_point_id): \Meraki\Model\GetNetworkSwitchRoutingMulticastRendezvousPoints200ResponseInner
```

Return a multicast rendezvous point

Return a multicast rendezvous point

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$rendezvous_point_id = 'rendezvous_point_id_example'; // string | Rendezvous point ID

try {
    $result = $apiInstance->getNetworkSwitchRoutingMulticastRendezvousPoint($network_id, $rendezvous_point_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getNetworkSwitchRoutingMulticastRendezvousPoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **rendezvous_point_id** | **string**| Rendezvous point ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchRoutingMulticastRendezvousPoints200ResponseInner**](../Model/GetNetworkSwitchRoutingMulticastRendezvousPoints200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchRoutingMulticastRendezvousPoints()`

```php
getNetworkSwitchRoutingMulticastRendezvousPoints($network_id): \Meraki\Model\GetNetworkSwitchRoutingMulticastRendezvousPoints200ResponseInner[]
```

List multicast rendezvous points

List multicast rendezvous points

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSwitchRoutingMulticastRendezvousPoints($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getNetworkSwitchRoutingMulticastRendezvousPoints: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchRoutingMulticastRendezvousPoints200ResponseInner[]**](../Model/GetNetworkSwitchRoutingMulticastRendezvousPoints200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchRoutingOspf()`

```php
getNetworkSwitchRoutingOspf($network_id): \Meraki\Model\GetNetworkSwitchRoutingOspf200Response
```

Return layer 3 OSPF routing configuration

Return layer 3 OSPF routing configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSwitchRoutingOspf($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getNetworkSwitchRoutingOspf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchRoutingOspf200Response**](../Model/GetNetworkSwitchRoutingOspf200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchSettings()`

```php
getNetworkSwitchSettings($network_id): \Meraki\Model\GetNetworkSwitchSettings200Response
```

Returns the switch network settings

Returns the switch network settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSwitchSettings($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getNetworkSwitchSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchSettings200Response**](../Model/GetNetworkSwitchSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchStack()`

```php
getNetworkSwitchStack($network_id, $switch_stack_id): \Meraki\Model\GetNetworkSwitchStacks200ResponseInner
```

Show a switch stack

Show a switch stack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$switch_stack_id = 'switch_stack_id_example'; // string | Switch stack ID

try {
    $result = $apiInstance->getNetworkSwitchStack($network_id, $switch_stack_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getNetworkSwitchStack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **switch_stack_id** | **string**| Switch stack ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchStacks200ResponseInner**](../Model/GetNetworkSwitchStacks200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchStackRoutingInterface()`

```php
getNetworkSwitchStackRoutingInterface($network_id, $switch_stack_id, $interface_id): \Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInner
```

Return a layer 3 interface from a switch stack

Return a layer 3 interface from a switch stack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$switch_stack_id = 'switch_stack_id_example'; // string | Switch stack ID
$interface_id = 'interface_id_example'; // string | Interface ID

try {
    $result = $apiInstance->getNetworkSwitchStackRoutingInterface($network_id, $switch_stack_id, $interface_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getNetworkSwitchStackRoutingInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **switch_stack_id** | **string**| Switch stack ID | |
| **interface_id** | **string**| Interface ID | |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInner**](../Model/GetDeviceSwitchRoutingInterfaces200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchStackRoutingInterfaceDhcp()`

```php
getNetworkSwitchStackRoutingInterfaceDhcp($network_id, $switch_stack_id, $interface_id): \Meraki\Model\GetDeviceSwitchRoutingInterfaceDhcp200Response
```

Return a layer 3 interface DHCP configuration for a switch stack

Return a layer 3 interface DHCP configuration for a switch stack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$switch_stack_id = 'switch_stack_id_example'; // string | Switch stack ID
$interface_id = 'interface_id_example'; // string | Interface ID

try {
    $result = $apiInstance->getNetworkSwitchStackRoutingInterfaceDhcp($network_id, $switch_stack_id, $interface_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getNetworkSwitchStackRoutingInterfaceDhcp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **switch_stack_id** | **string**| Switch stack ID | |
| **interface_id** | **string**| Interface ID | |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingInterfaceDhcp200Response**](../Model/GetDeviceSwitchRoutingInterfaceDhcp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchStackRoutingInterfaces()`

```php
getNetworkSwitchStackRoutingInterfaces($network_id, $switch_stack_id, $protocol): \Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInner[]
```

List layer 3 interfaces for a switch stack

List layer 3 interfaces for a switch stack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$switch_stack_id = 'switch_stack_id_example'; // string | Switch stack ID
$protocol = 'protocol_example'; // string | Optional parameter to filter L3 interfaces by protocol.

try {
    $result = $apiInstance->getNetworkSwitchStackRoutingInterfaces($network_id, $switch_stack_id, $protocol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getNetworkSwitchStackRoutingInterfaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **switch_stack_id** | **string**| Switch stack ID | |
| **protocol** | **string**| Optional parameter to filter L3 interfaces by protocol. | [optional] |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInner[]**](../Model/GetDeviceSwitchRoutingInterfaces200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchStackRoutingStaticRoute()`

```php
getNetworkSwitchStackRoutingStaticRoute($network_id, $switch_stack_id, $static_route_id): \Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner
```

Return a layer 3 static route for a switch stack

Return a layer 3 static route for a switch stack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$switch_stack_id = 'switch_stack_id_example'; // string | Switch stack ID
$static_route_id = 'static_route_id_example'; // string | Static route ID

try {
    $result = $apiInstance->getNetworkSwitchStackRoutingStaticRoute($network_id, $switch_stack_id, $static_route_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getNetworkSwitchStackRoutingStaticRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **switch_stack_id** | **string**| Switch stack ID | |
| **static_route_id** | **string**| Static route ID | |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner**](../Model/GetDeviceSwitchRoutingStaticRoutes200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchStackRoutingStaticRoutes()`

```php
getNetworkSwitchStackRoutingStaticRoutes($network_id, $switch_stack_id): \Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner[]
```

List layer 3 static routes for a switch stack

List layer 3 static routes for a switch stack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$switch_stack_id = 'switch_stack_id_example'; // string | Switch stack ID

try {
    $result = $apiInstance->getNetworkSwitchStackRoutingStaticRoutes($network_id, $switch_stack_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getNetworkSwitchStackRoutingStaticRoutes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **switch_stack_id** | **string**| Switch stack ID | |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner[]**](../Model/GetDeviceSwitchRoutingStaticRoutes200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchStacks()`

```php
getNetworkSwitchStacks($network_id): \Meraki\Model\GetNetworkSwitchStacks200ResponseInner[]
```

List the switch stacks in a network

List the switch stacks in a network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSwitchStacks($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getNetworkSwitchStacks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchStacks200ResponseInner[]**](../Model/GetNetworkSwitchStacks200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchStormControl()`

```php
getNetworkSwitchStormControl($network_id): \Meraki\Model\GetNetworkSwitchStormControl200Response
```

Return the storm control configuration for a switch network

Return the storm control configuration for a switch network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSwitchStormControl($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getNetworkSwitchStormControl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchStormControl200Response**](../Model/GetNetworkSwitchStormControl200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSwitchStp()`

```php
getNetworkSwitchStp($network_id): \Meraki\Model\GetNetworkSwitchStp200Response
```

Returns STP settings

Returns STP settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSwitchStp($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getNetworkSwitchStp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSwitchStp200Response**](../Model/GetNetworkSwitchStp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationConfigTemplateSwitchProfilePort()`

```php
getOrganizationConfigTemplateSwitchProfilePort($organization_id, $config_template_id, $profile_id, $port_id): \Meraki\Model\GetOrganizationConfigTemplateSwitchProfilePorts200ResponseInner
```

Return a switch template port

Return a switch template port

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$config_template_id = 'config_template_id_example'; // string | Config template ID
$profile_id = 'profile_id_example'; // string | Profile ID
$port_id = 'port_id_example'; // string | Port ID

try {
    $result = $apiInstance->getOrganizationConfigTemplateSwitchProfilePort($organization_id, $config_template_id, $profile_id, $port_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getOrganizationConfigTemplateSwitchProfilePort: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **config_template_id** | **string**| Config template ID | |
| **profile_id** | **string**| Profile ID | |
| **port_id** | **string**| Port ID | |

### Return type

[**\Meraki\Model\GetOrganizationConfigTemplateSwitchProfilePorts200ResponseInner**](../Model/GetOrganizationConfigTemplateSwitchProfilePorts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationConfigTemplateSwitchProfilePorts()`

```php
getOrganizationConfigTemplateSwitchProfilePorts($organization_id, $config_template_id, $profile_id): \Meraki\Model\GetOrganizationConfigTemplateSwitchProfilePorts200ResponseInner[]
```

Return all the ports of a switch template

Return all the ports of a switch template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$config_template_id = 'config_template_id_example'; // string | Config template ID
$profile_id = 'profile_id_example'; // string | Profile ID

try {
    $result = $apiInstance->getOrganizationConfigTemplateSwitchProfilePorts($organization_id, $config_template_id, $profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getOrganizationConfigTemplateSwitchProfilePorts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **config_template_id** | **string**| Config template ID | |
| **profile_id** | **string**| Profile ID | |

### Return type

[**\Meraki\Model\GetOrganizationConfigTemplateSwitchProfilePorts200ResponseInner[]**](../Model/GetOrganizationConfigTemplateSwitchProfilePorts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationConfigTemplateSwitchProfiles()`

```php
getOrganizationConfigTemplateSwitchProfiles($organization_id, $config_template_id): \Meraki\Model\GetOrganizationConfigTemplateSwitchProfiles200ResponseInner[]
```

List the switch templates for your switch template configuration

List the switch templates for your switch template configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$config_template_id = 'config_template_id_example'; // string | Config template ID

try {
    $result = $apiInstance->getOrganizationConfigTemplateSwitchProfiles($organization_id, $config_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getOrganizationConfigTemplateSwitchProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **config_template_id** | **string**| Config template ID | |

### Return type

[**\Meraki\Model\GetOrganizationConfigTemplateSwitchProfiles200ResponseInner[]**](../Model/GetOrganizationConfigTemplateSwitchProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSummarySwitchPowerHistory()`

```php
getOrganizationSummarySwitchPowerHistory($organization_id, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationSummarySwitchPowerHistory200ResponseInner[]
```

Returns the total PoE power draw for all switch ports in the organization over the requested timespan (by default the last 24 hours)

Returns the total PoE power draw for all switch ports in the organization over the requested timespan (by default the last 24 hours). The returned array is a newest-first list of intervals. The time between intervals depends on the requested timespan with 20 minute intervals used for timespans up to 1 day, 4 hour intervals used for timespans up to 2 weeks, and 1 day intervals for timespans larger than 2 weeks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 186 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 186 days. The default is 1 day.

try {
    $result = $apiInstance->getOrganizationSummarySwitchPowerHistory($organization_id, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getOrganizationSummarySwitchPowerHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **t0** | **string**| The beginning of the timespan for the data. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 186 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 186 days. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSummarySwitchPowerHistory200ResponseInner[]**](../Model/GetOrganizationSummarySwitchPowerHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSwitchPortsBySwitch()`

```php
getOrganizationSwitchPortsBySwitch($organization_id, $per_page, $starting_after, $ending_before, $configuration_updated_after, $mac, $macs, $name, $network_ids, $port_profile_ids, $serial, $serials): \Meraki\Model\GetOrganizationSwitchPortsBySwitch200Response
```

List the switchports in an organization by switch

List the switchports in an organization by switch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 50. Default is 50.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$configuration_updated_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter items to switches where the configuration has been updated after the given timestamp.
$mac = 'mac_example'; // string | Optional parameter to filter items to switches with MAC addresses that contain the search term or are an exact match.
$macs = array('macs_example'); // string[] | Optional parameter to filter items to switches that have one of the provided MAC addresses.
$name = 'name_example'; // string | Optional parameter to filter items to switches with names that contain the search term or are an exact match.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter items to switches in one of the provided networks.
$port_profile_ids = array('port_profile_ids_example'); // string[] | Optional parameter to filter items to switches that contain switchports belonging to one of the specified port profiles.
$serial = 'serial_example'; // string | Optional parameter to filter items to switches with serial number that contains the search term or are an exact match.
$serials = array('serials_example'); // string[] | Optional parameter to filter items to switches that have one of the provided serials.

try {
    $result = $apiInstance->getOrganizationSwitchPortsBySwitch($organization_id, $per_page, $starting_after, $ending_before, $configuration_updated_after, $mac, $macs, $name, $network_ids, $port_profile_ids, $serial, $serials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getOrganizationSwitchPortsBySwitch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 50. Default is 50. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **configuration_updated_after** | **\DateTime**| Optional parameter to filter items to switches where the configuration has been updated after the given timestamp. | [optional] |
| **mac** | **string**| Optional parameter to filter items to switches with MAC addresses that contain the search term or are an exact match. | [optional] |
| **macs** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches that have one of the provided MAC addresses. | [optional] |
| **name** | **string**| Optional parameter to filter items to switches with names that contain the search term or are an exact match. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches in one of the provided networks. | [optional] |
| **port_profile_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches that contain switchports belonging to one of the specified port profiles. | [optional] |
| **serial** | **string**| Optional parameter to filter items to switches with serial number that contains the search term or are an exact match. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches that have one of the provided serials. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSwitchPortsBySwitch200Response**](../Model/GetOrganizationSwitchPortsBySwitch200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSwitchPortsClientsOverviewByDevice()`

```php
getOrganizationSwitchPortsClientsOverviewByDevice($organization_id, $t0, $timespan, $per_page, $starting_after, $ending_before, $configuration_updated_after, $mac, $macs, $name, $network_ids, $port_profile_ids, $serial, $serials): \Meraki\Model\GetOrganizationSwitchPortsClientsOverviewByDevice200Response
```

List the number of clients for all switchports with at least one online client in an organization.

List the number of clients for all switchports with at least one online client in an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 31 days. The default is 1 day.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 20. Default is 20.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$configuration_updated_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter items to switches where the configuration has been updated after the given timestamp.
$mac = 'mac_example'; // string | Optional parameter to filter items to switches with MAC addresses that contain the search term or are an exact match.
$macs = array('macs_example'); // string[] | Optional parameter to filter items to switches that have one of the provided MAC addresses.
$name = 'name_example'; // string | Optional parameter to filter items to switches with names that contain the search term or are an exact match.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter items to switches in one of the provided networks.
$port_profile_ids = array('port_profile_ids_example'); // string[] | Optional parameter to filter items to switches that contain switchports belonging to one of the specified port profiles.
$serial = 'serial_example'; // string | Optional parameter to filter items to switches with serial number that contains the search term or are an exact match.
$serials = array('serials_example'); // string[] | Optional parameter to filter items to switches that have one of the provided serials.

try {
    $result = $apiInstance->getOrganizationSwitchPortsClientsOverviewByDevice($organization_id, $t0, $timespan, $per_page, $starting_after, $ending_before, $configuration_updated_after, $mac, $macs, $name, $network_ids, $port_profile_ids, $serial, $serials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getOrganizationSwitchPortsClientsOverviewByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 20. Default is 20. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **configuration_updated_after** | **\DateTime**| Optional parameter to filter items to switches where the configuration has been updated after the given timestamp. | [optional] |
| **mac** | **string**| Optional parameter to filter items to switches with MAC addresses that contain the search term or are an exact match. | [optional] |
| **macs** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches that have one of the provided MAC addresses. | [optional] |
| **name** | **string**| Optional parameter to filter items to switches with names that contain the search term or are an exact match. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches in one of the provided networks. | [optional] |
| **port_profile_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches that contain switchports belonging to one of the specified port profiles. | [optional] |
| **serial** | **string**| Optional parameter to filter items to switches with serial number that contains the search term or are an exact match. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches that have one of the provided serials. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSwitchPortsClientsOverviewByDevice200Response**](../Model/GetOrganizationSwitchPortsClientsOverviewByDevice200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSwitchPortsOverview()`

```php
getOrganizationSwitchPortsOverview($organization_id, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationSwitchPortsOverview200Response
```

Returns the counts of all active ports for the requested timespan, grouped by speed

Returns the counts of all active ports for the requested timespan, grouped by speed. An active port is a port that at any point during the timeframe is observed to be connected to a responsive device and isn't configured to be disabled. For a port that is observed at multiple speeds during the timeframe, it will be counted at the highest speed observed. The number of inactive ports, and the total number of ports are also provided. Only ports on switches online during the timeframe will be represented and a port is only guaranteed to be present if its switch was online for at least 6 hours of the timeframe.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 186 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 12 hours and be less than or equal to 186 days. The default is 1 day.

try {
    $result = $apiInstance->getOrganizationSwitchPortsOverview($organization_id, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getOrganizationSwitchPortsOverview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **t0** | **string**| The beginning of the timespan for the data. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 186 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 12 hours and be less than or equal to 186 days. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSwitchPortsOverview200Response**](../Model/GetOrganizationSwitchPortsOverview200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSwitchPortsStatusesBySwitch()`

```php
getOrganizationSwitchPortsStatusesBySwitch($organization_id, $per_page, $starting_after, $ending_before, $configuration_updated_after, $mac, $macs, $name, $network_ids, $port_profile_ids, $serial, $serials): \Meraki\Model\GetOrganizationSwitchPortsStatusesBySwitch200Response
```

List the switchports in an organization

List the switchports in an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 20. Default is 10.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$configuration_updated_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter items to switches where the configuration has been updated after the given timestamp.
$mac = 'mac_example'; // string | Optional parameter to filter items to switches with MAC addresses that contain the search term or are an exact match.
$macs = array('macs_example'); // string[] | Optional parameter to filter items to switches that have one of the provided MAC addresses.
$name = 'name_example'; // string | Optional parameter to filter items to switches with names that contain the search term or are an exact match.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter items to switches in one of the provided networks.
$port_profile_ids = array('port_profile_ids_example'); // string[] | Optional parameter to filter items to switches that contain switchports belonging to one of the specified port profiles.
$serial = 'serial_example'; // string | Optional parameter to filter items to switches with serial number that contains the search term or are an exact match.
$serials = array('serials_example'); // string[] | Optional parameter to filter items to switches that have one of the provided serials.

try {
    $result = $apiInstance->getOrganizationSwitchPortsStatusesBySwitch($organization_id, $per_page, $starting_after, $ending_before, $configuration_updated_after, $mac, $macs, $name, $network_ids, $port_profile_ids, $serial, $serials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getOrganizationSwitchPortsStatusesBySwitch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 20. Default is 10. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **configuration_updated_after** | **\DateTime**| Optional parameter to filter items to switches where the configuration has been updated after the given timestamp. | [optional] |
| **mac** | **string**| Optional parameter to filter items to switches with MAC addresses that contain the search term or are an exact match. | [optional] |
| **macs** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches that have one of the provided MAC addresses. | [optional] |
| **name** | **string**| Optional parameter to filter items to switches with names that contain the search term or are an exact match. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches in one of the provided networks. | [optional] |
| **port_profile_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches that contain switchports belonging to one of the specified port profiles. | [optional] |
| **serial** | **string**| Optional parameter to filter items to switches with serial number that contains the search term or are an exact match. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches that have one of the provided serials. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSwitchPortsStatusesBySwitch200Response**](../Model/GetOrganizationSwitchPortsStatusesBySwitch200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSwitchPortsTopologyDiscoveryByDevice()`

```php
getOrganizationSwitchPortsTopologyDiscoveryByDevice($organization_id, $t0, $timespan, $per_page, $starting_after, $ending_before, $configuration_updated_after, $mac, $macs, $name, $network_ids, $port_profile_ids, $serial, $serials): \Meraki\Model\GetOrganizationSwitchPortsTopologyDiscoveryByDevice200Response
```

List most recently seen LLDP/CDP discovery and topology information per switch port in an organization.

List most recently seen LLDP/CDP discovery and topology information per switch port in an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 31 days. The default is 1 day.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 20. Default is 10.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$configuration_updated_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter items to switches where the configuration has been updated after the given timestamp.
$mac = 'mac_example'; // string | Optional parameter to filter items to switches with MAC addresses that contain the search term or are an exact match.
$macs = array('macs_example'); // string[] | Optional parameter to filter items to switches that have one of the provided MAC addresses.
$name = 'name_example'; // string | Optional parameter to filter items to switches with names that contain the search term or are an exact match.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter items to switches in one of the provided networks.
$port_profile_ids = array('port_profile_ids_example'); // string[] | Optional parameter to filter items to switches that contain switchports belonging to one of the specified port profiles.
$serial = 'serial_example'; // string | Optional parameter to filter items to switches with serial number that contains the search term or are an exact match.
$serials = array('serials_example'); // string[] | Optional parameter to filter items to switches that have one of the provided serials.

try {
    $result = $apiInstance->getOrganizationSwitchPortsTopologyDiscoveryByDevice($organization_id, $t0, $timespan, $per_page, $starting_after, $ending_before, $configuration_updated_after, $mac, $macs, $name, $network_ids, $port_profile_ids, $serial, $serials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getOrganizationSwitchPortsTopologyDiscoveryByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 20. Default is 10. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **configuration_updated_after** | **\DateTime**| Optional parameter to filter items to switches where the configuration has been updated after the given timestamp. | [optional] |
| **mac** | **string**| Optional parameter to filter items to switches with MAC addresses that contain the search term or are an exact match. | [optional] |
| **macs** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches that have one of the provided MAC addresses. | [optional] |
| **name** | **string**| Optional parameter to filter items to switches with names that contain the search term or are an exact match. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches in one of the provided networks. | [optional] |
| **port_profile_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches that contain switchports belonging to one of the specified port profiles. | [optional] |
| **serial** | **string**| Optional parameter to filter items to switches with serial number that contains the search term or are an exact match. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches that have one of the provided serials. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSwitchPortsTopologyDiscoveryByDevice200Response**](../Model/GetOrganizationSwitchPortsTopologyDiscoveryByDevice200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSwitchPortsUsageHistoryByDeviceByInterval()`

```php
getOrganizationSwitchPortsUsageHistoryByDeviceByInterval($organization_id, $t0, $t1, $timespan, $interval, $per_page, $starting_after, $ending_before, $configuration_updated_after, $mac, $macs, $name, $network_ids, $port_profile_ids, $serial, $serials): \Meraki\Model\GetOrganizationSwitchPortsUsageHistoryByDeviceByInterval200Response
```

List the historical usage and traffic data of switchports in an organization.

List the historical usage and traffic data of switchports in an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. If interval is provided, the timespan will be autocalculated.
$interval = 56; // int | The time interval in seconds for returned data. The valid intervals are: 300, 1200, 14400, 86400. The default is 1200. Interval is calculated if time params are provided.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 50. Default is 10.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$configuration_updated_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter items to switches where the configuration has been updated after the given timestamp.
$mac = 'mac_example'; // string | Optional parameter to filter items to switches with MAC addresses that contain the search term or are an exact match.
$macs = array('macs_example'); // string[] | Optional parameter to filter items to switches that have one of the provided MAC addresses.
$name = 'name_example'; // string | Optional parameter to filter items to switches with names that contain the search term or are an exact match.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter items to switches in one of the provided networks.
$port_profile_ids = array('port_profile_ids_example'); // string[] | Optional parameter to filter items to switches that contain switchports belonging to one of the specified port profiles.
$serial = 'serial_example'; // string | Optional parameter to filter items to switches with serial number that contains the search term or are an exact match.
$serials = array('serials_example'); // string[] | Optional parameter to filter items to switches that have one of the provided serials.

try {
    $result = $apiInstance->getOrganizationSwitchPortsUsageHistoryByDeviceByInterval($organization_id, $t0, $t1, $timespan, $interval, $per_page, $starting_after, $ending_before, $configuration_updated_after, $mac, $macs, $name, $network_ids, $port_profile_ids, $serial, $serials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->getOrganizationSwitchPortsUsageHistoryByDeviceByInterval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. If interval is provided, the timespan will be autocalculated. | [optional] |
| **interval** | **int**| The time interval in seconds for returned data. The valid intervals are: 300, 1200, 14400, 86400. The default is 1200. Interval is calculated if time params are provided. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 50. Default is 10. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **configuration_updated_after** | **\DateTime**| Optional parameter to filter items to switches where the configuration has been updated after the given timestamp. | [optional] |
| **mac** | **string**| Optional parameter to filter items to switches with MAC addresses that contain the search term or are an exact match. | [optional] |
| **macs** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches that have one of the provided MAC addresses. | [optional] |
| **name** | **string**| Optional parameter to filter items to switches with names that contain the search term or are an exact match. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches in one of the provided networks. | [optional] |
| **port_profile_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches that contain switchports belonging to one of the specified port profiles. | [optional] |
| **serial** | **string**| Optional parameter to filter items to switches with serial number that contains the search term or are an exact match. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter items to switches that have one of the provided serials. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSwitchPortsUsageHistoryByDeviceByInterval200Response**](../Model/GetOrganizationSwitchPortsUsageHistoryByDeviceByInterval200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeNetworkSwitchStack()`

```php
removeNetworkSwitchStack($network_id, $switch_stack_id, $remove_network_switch_stack_request): \Meraki\Model\GetNetworkSwitchStacks200ResponseInner
```

Remove a switch from a stack

Remove a switch from a stack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$switch_stack_id = 'switch_stack_id_example'; // string | Switch stack ID
$remove_network_switch_stack_request = new \Meraki\Model\RemoveNetworkSwitchStackRequest(); // \Meraki\Model\RemoveNetworkSwitchStackRequest

try {
    $result = $apiInstance->removeNetworkSwitchStack($network_id, $switch_stack_id, $remove_network_switch_stack_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->removeNetworkSwitchStack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **switch_stack_id** | **string**| Switch stack ID | |
| **remove_network_switch_stack_request** | [**\Meraki\Model\RemoveNetworkSwitchStackRequest**](../Model/RemoveNetworkSwitchStackRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkSwitchStacks200ResponseInner**](../Model/GetNetworkSwitchStacks200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceSwitchPort()`

```php
updateDeviceSwitchPort($serial, $port_id, $update_device_switch_port_request): \Meraki\Model\GetDeviceSwitchPorts200ResponseInner
```

Update a switch port

Update a switch port

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$port_id = 'port_id_example'; // string | Port ID
$update_device_switch_port_request = new \Meraki\Model\UpdateDeviceSwitchPortRequest(); // \Meraki\Model\UpdateDeviceSwitchPortRequest

try {
    $result = $apiInstance->updateDeviceSwitchPort($serial, $port_id, $update_device_switch_port_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->updateDeviceSwitchPort: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **port_id** | **string**| Port ID | |
| **update_device_switch_port_request** | [**\Meraki\Model\UpdateDeviceSwitchPortRequest**](../Model/UpdateDeviceSwitchPortRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceSwitchPorts200ResponseInner**](../Model/GetDeviceSwitchPorts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceSwitchRoutingInterface()`

```php
updateDeviceSwitchRoutingInterface($serial, $interface_id, $update_device_switch_routing_interface_request): \Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInner
```

Update a layer 3 interface for a switch

Update a layer 3 interface for a switch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$interface_id = 'interface_id_example'; // string | Interface ID
$update_device_switch_routing_interface_request = new \Meraki\Model\UpdateDeviceSwitchRoutingInterfaceRequest(); // \Meraki\Model\UpdateDeviceSwitchRoutingInterfaceRequest

try {
    $result = $apiInstance->updateDeviceSwitchRoutingInterface($serial, $interface_id, $update_device_switch_routing_interface_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->updateDeviceSwitchRoutingInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **interface_id** | **string**| Interface ID | |
| **update_device_switch_routing_interface_request** | [**\Meraki\Model\UpdateDeviceSwitchRoutingInterfaceRequest**](../Model/UpdateDeviceSwitchRoutingInterfaceRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingInterfaces200ResponseInner**](../Model/GetDeviceSwitchRoutingInterfaces200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceSwitchRoutingInterfaceDhcp()`

```php
updateDeviceSwitchRoutingInterfaceDhcp($serial, $interface_id, $update_device_switch_routing_interface_dhcp_request): \Meraki\Model\GetDeviceSwitchRoutingInterfaceDhcp200Response
```

Update a layer 3 interface DHCP configuration for a switch

Update a layer 3 interface DHCP configuration for a switch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$interface_id = 'interface_id_example'; // string | Interface ID
$update_device_switch_routing_interface_dhcp_request = new \Meraki\Model\UpdateDeviceSwitchRoutingInterfaceDhcpRequest(); // \Meraki\Model\UpdateDeviceSwitchRoutingInterfaceDhcpRequest

try {
    $result = $apiInstance->updateDeviceSwitchRoutingInterfaceDhcp($serial, $interface_id, $update_device_switch_routing_interface_dhcp_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->updateDeviceSwitchRoutingInterfaceDhcp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **interface_id** | **string**| Interface ID | |
| **update_device_switch_routing_interface_dhcp_request** | [**\Meraki\Model\UpdateDeviceSwitchRoutingInterfaceDhcpRequest**](../Model/UpdateDeviceSwitchRoutingInterfaceDhcpRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingInterfaceDhcp200Response**](../Model/GetDeviceSwitchRoutingInterfaceDhcp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceSwitchRoutingStaticRoute()`

```php
updateDeviceSwitchRoutingStaticRoute($serial, $static_route_id, $update_device_switch_routing_static_route_request): \Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner
```

Update a layer 3 static route for a switch

Update a layer 3 static route for a switch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$static_route_id = 'static_route_id_example'; // string | Static route ID
$update_device_switch_routing_static_route_request = new \Meraki\Model\UpdateDeviceSwitchRoutingStaticRouteRequest(); // \Meraki\Model\UpdateDeviceSwitchRoutingStaticRouteRequest

try {
    $result = $apiInstance->updateDeviceSwitchRoutingStaticRoute($serial, $static_route_id, $update_device_switch_routing_static_route_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->updateDeviceSwitchRoutingStaticRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **static_route_id** | **string**| Static route ID | |
| **update_device_switch_routing_static_route_request** | [**\Meraki\Model\UpdateDeviceSwitchRoutingStaticRouteRequest**](../Model/UpdateDeviceSwitchRoutingStaticRouteRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner**](../Model/GetDeviceSwitchRoutingStaticRoutes200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceSwitchWarmSpare()`

```php
updateDeviceSwitchWarmSpare($serial, $update_device_switch_warm_spare_request): \Meraki\Model\GetDeviceSwitchWarmSpare200Response
```

Update warm spare configuration for a switch

Update warm spare configuration for a switch. The spare will use the same L3 configuration as the primary. Note that this will irreversibly destroy any existing L3 configuration on the spare.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_switch_warm_spare_request = new \Meraki\Model\UpdateDeviceSwitchWarmSpareRequest(); // \Meraki\Model\UpdateDeviceSwitchWarmSpareRequest

try {
    $result = $apiInstance->updateDeviceSwitchWarmSpare($serial, $update_device_switch_warm_spare_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->updateDeviceSwitchWarmSpare: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_switch_warm_spare_request** | [**\Meraki\Model\UpdateDeviceSwitchWarmSpareRequest**](../Model/UpdateDeviceSwitchWarmSpareRequest.md)|  | |

### Return type

[**\Meraki\Model\GetDeviceSwitchWarmSpare200Response**](../Model/GetDeviceSwitchWarmSpare200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchAccessControlLists()`

```php
updateNetworkSwitchAccessControlLists($network_id, $update_network_switch_access_control_lists_request): \Meraki\Model\GetNetworkSwitchAccessControlLists200Response
```

Update the access control lists for a MS network

Update the access control lists for a MS network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_switch_access_control_lists_request = new \Meraki\Model\UpdateNetworkSwitchAccessControlListsRequest(); // \Meraki\Model\UpdateNetworkSwitchAccessControlListsRequest

try {
    $result = $apiInstance->updateNetworkSwitchAccessControlLists($network_id, $update_network_switch_access_control_lists_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->updateNetworkSwitchAccessControlLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_switch_access_control_lists_request** | [**\Meraki\Model\UpdateNetworkSwitchAccessControlListsRequest**](../Model/UpdateNetworkSwitchAccessControlListsRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkSwitchAccessControlLists200Response**](../Model/GetNetworkSwitchAccessControlLists200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchAccessPolicy()`

```php
updateNetworkSwitchAccessPolicy($network_id, $access_policy_number, $update_network_switch_access_policy_request): \Meraki\Model\GetNetworkSwitchAccessPolicies200ResponseInner
```

Update an access policy for a switch network

Update an access policy for a switch network. If you would like to enable Meraki Authentication, set radiusServers to empty array.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$access_policy_number = 'access_policy_number_example'; // string | Access policy number
$update_network_switch_access_policy_request = new \Meraki\Model\UpdateNetworkSwitchAccessPolicyRequest(); // \Meraki\Model\UpdateNetworkSwitchAccessPolicyRequest

try {
    $result = $apiInstance->updateNetworkSwitchAccessPolicy($network_id, $access_policy_number, $update_network_switch_access_policy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->updateNetworkSwitchAccessPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **access_policy_number** | **string**| Access policy number | |
| **update_network_switch_access_policy_request** | [**\Meraki\Model\UpdateNetworkSwitchAccessPolicyRequest**](../Model/UpdateNetworkSwitchAccessPolicyRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchAccessPolicies200ResponseInner**](../Model/GetNetworkSwitchAccessPolicies200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchAlternateManagementInterface()`

```php
updateNetworkSwitchAlternateManagementInterface($network_id, $update_network_switch_alternate_management_interface_request): \Meraki\Model\GetNetworkSwitchAlternateManagementInterface200Response
```

Update the switch alternate management interface for the network

Update the switch alternate management interface for the network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_switch_alternate_management_interface_request = new \Meraki\Model\UpdateNetworkSwitchAlternateManagementInterfaceRequest(); // \Meraki\Model\UpdateNetworkSwitchAlternateManagementInterfaceRequest

try {
    $result = $apiInstance->updateNetworkSwitchAlternateManagementInterface($network_id, $update_network_switch_alternate_management_interface_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->updateNetworkSwitchAlternateManagementInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_switch_alternate_management_interface_request** | [**\Meraki\Model\UpdateNetworkSwitchAlternateManagementInterfaceRequest**](../Model/UpdateNetworkSwitchAlternateManagementInterfaceRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchAlternateManagementInterface200Response**](../Model/GetNetworkSwitchAlternateManagementInterface200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchDhcpServerPolicy()`

```php
updateNetworkSwitchDhcpServerPolicy($network_id, $update_network_switch_dhcp_server_policy_request): \Meraki\Model\GetNetworkSwitchDhcpServerPolicy200Response
```

Update the DHCP server settings

Update the DHCP server settings. Blocked/allowed servers are only applied when default policy is allow/block, respectively

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_switch_dhcp_server_policy_request = new \Meraki\Model\UpdateNetworkSwitchDhcpServerPolicyRequest(); // \Meraki\Model\UpdateNetworkSwitchDhcpServerPolicyRequest

try {
    $result = $apiInstance->updateNetworkSwitchDhcpServerPolicy($network_id, $update_network_switch_dhcp_server_policy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->updateNetworkSwitchDhcpServerPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_switch_dhcp_server_policy_request** | [**\Meraki\Model\UpdateNetworkSwitchDhcpServerPolicyRequest**](../Model/UpdateNetworkSwitchDhcpServerPolicyRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchDhcpServerPolicy200Response**](../Model/GetNetworkSwitchDhcpServerPolicy200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer()`

```php
updateNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer($network_id, $trusted_server_id, $update_network_switch_dhcp_server_policy_arp_inspection_trusted_server_request): \Meraki\Model\GetNetworkSwitchDhcpServerPolicyArpInspectionTrustedServers200ResponseInner
```

Update a server that is trusted by Dynamic ARP Inspection on this network

Update a server that is trusted by Dynamic ARP Inspection on this network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$trusted_server_id = 'trusted_server_id_example'; // string | Trusted server ID
$update_network_switch_dhcp_server_policy_arp_inspection_trusted_server_request = new \Meraki\Model\UpdateNetworkSwitchDhcpServerPolicyArpInspectionTrustedServerRequest(); // \Meraki\Model\UpdateNetworkSwitchDhcpServerPolicyArpInspectionTrustedServerRequest

try {
    $result = $apiInstance->updateNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer($network_id, $trusted_server_id, $update_network_switch_dhcp_server_policy_arp_inspection_trusted_server_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->updateNetworkSwitchDhcpServerPolicyArpInspectionTrustedServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **trusted_server_id** | **string**| Trusted server ID | |
| **update_network_switch_dhcp_server_policy_arp_inspection_trusted_server_request** | [**\Meraki\Model\UpdateNetworkSwitchDhcpServerPolicyArpInspectionTrustedServerRequest**](../Model/UpdateNetworkSwitchDhcpServerPolicyArpInspectionTrustedServerRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchDhcpServerPolicyArpInspectionTrustedServers200ResponseInner**](../Model/GetNetworkSwitchDhcpServerPolicyArpInspectionTrustedServers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchDscpToCosMappings()`

```php
updateNetworkSwitchDscpToCosMappings($network_id, $update_network_switch_dscp_to_cos_mappings_request): \Meraki\Model\GetNetworkSwitchDscpToCosMappings200Response
```

Update the DSCP to CoS mappings

Update the DSCP to CoS mappings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_switch_dscp_to_cos_mappings_request = new \Meraki\Model\UpdateNetworkSwitchDscpToCosMappingsRequest(); // \Meraki\Model\UpdateNetworkSwitchDscpToCosMappingsRequest

try {
    $result = $apiInstance->updateNetworkSwitchDscpToCosMappings($network_id, $update_network_switch_dscp_to_cos_mappings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->updateNetworkSwitchDscpToCosMappings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_switch_dscp_to_cos_mappings_request** | [**\Meraki\Model\UpdateNetworkSwitchDscpToCosMappingsRequest**](../Model/UpdateNetworkSwitchDscpToCosMappingsRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkSwitchDscpToCosMappings200Response**](../Model/GetNetworkSwitchDscpToCosMappings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchLinkAggregation()`

```php
updateNetworkSwitchLinkAggregation($network_id, $link_aggregation_id, $update_network_switch_link_aggregation_request): \Meraki\Model\GetNetworkSwitchLinkAggregations200ResponseInner
```

Update a link aggregation group

Update a link aggregation group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$link_aggregation_id = 'link_aggregation_id_example'; // string | Link aggregation ID
$update_network_switch_link_aggregation_request = new \Meraki\Model\UpdateNetworkSwitchLinkAggregationRequest(); // \Meraki\Model\UpdateNetworkSwitchLinkAggregationRequest

try {
    $result = $apiInstance->updateNetworkSwitchLinkAggregation($network_id, $link_aggregation_id, $update_network_switch_link_aggregation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->updateNetworkSwitchLinkAggregation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **link_aggregation_id** | **string**| Link aggregation ID | |
| **update_network_switch_link_aggregation_request** | [**\Meraki\Model\UpdateNetworkSwitchLinkAggregationRequest**](../Model/UpdateNetworkSwitchLinkAggregationRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchLinkAggregations200ResponseInner**](../Model/GetNetworkSwitchLinkAggregations200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchMtu()`

```php
updateNetworkSwitchMtu($network_id, $update_network_switch_mtu_request): \Meraki\Model\GetNetworkSwitchMtu200Response
```

Update the MTU configuration

Update the MTU configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_switch_mtu_request = new \Meraki\Model\UpdateNetworkSwitchMtuRequest(); // \Meraki\Model\UpdateNetworkSwitchMtuRequest

try {
    $result = $apiInstance->updateNetworkSwitchMtu($network_id, $update_network_switch_mtu_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->updateNetworkSwitchMtu: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_switch_mtu_request** | [**\Meraki\Model\UpdateNetworkSwitchMtuRequest**](../Model/UpdateNetworkSwitchMtuRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchMtu200Response**](../Model/GetNetworkSwitchMtu200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchPortSchedule()`

```php
updateNetworkSwitchPortSchedule($network_id, $port_schedule_id, $update_network_switch_port_schedule_request): \Meraki\Model\GetNetworkSwitchPortSchedules200ResponseInner
```

Update a switch port schedule

Update a switch port schedule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$port_schedule_id = 'port_schedule_id_example'; // string | Port schedule ID
$update_network_switch_port_schedule_request = new \Meraki\Model\UpdateNetworkSwitchPortScheduleRequest(); // \Meraki\Model\UpdateNetworkSwitchPortScheduleRequest

try {
    $result = $apiInstance->updateNetworkSwitchPortSchedule($network_id, $port_schedule_id, $update_network_switch_port_schedule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->updateNetworkSwitchPortSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **port_schedule_id** | **string**| Port schedule ID | |
| **update_network_switch_port_schedule_request** | [**\Meraki\Model\UpdateNetworkSwitchPortScheduleRequest**](../Model/UpdateNetworkSwitchPortScheduleRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchPortSchedules200ResponseInner**](../Model/GetNetworkSwitchPortSchedules200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchQosRule()`

```php
updateNetworkSwitchQosRule($network_id, $qos_rule_id, $update_network_switch_qos_rule_request): \Meraki\Model\GetNetworkSwitchQosRules200ResponseInner
```

Update a quality of service rule

Update a quality of service rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$qos_rule_id = 'qos_rule_id_example'; // string | Qos rule ID
$update_network_switch_qos_rule_request = new \Meraki\Model\UpdateNetworkSwitchQosRuleRequest(); // \Meraki\Model\UpdateNetworkSwitchQosRuleRequest

try {
    $result = $apiInstance->updateNetworkSwitchQosRule($network_id, $qos_rule_id, $update_network_switch_qos_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->updateNetworkSwitchQosRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **qos_rule_id** | **string**| Qos rule ID | |
| **update_network_switch_qos_rule_request** | [**\Meraki\Model\UpdateNetworkSwitchQosRuleRequest**](../Model/UpdateNetworkSwitchQosRuleRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchQosRules200ResponseInner**](../Model/GetNetworkSwitchQosRules200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchQosRulesOrder()`

```php
updateNetworkSwitchQosRulesOrder($network_id, $update_network_switch_qos_rules_order_request): \Meraki\Model\GetNetworkSwitchQosRulesOrder200Response
```

Update the order in which the rules should be processed by the switch

Update the order in which the rules should be processed by the switch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_switch_qos_rules_order_request = new \Meraki\Model\UpdateNetworkSwitchQosRulesOrderRequest(); // \Meraki\Model\UpdateNetworkSwitchQosRulesOrderRequest

try {
    $result = $apiInstance->updateNetworkSwitchQosRulesOrder($network_id, $update_network_switch_qos_rules_order_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->updateNetworkSwitchQosRulesOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_switch_qos_rules_order_request** | [**\Meraki\Model\UpdateNetworkSwitchQosRulesOrderRequest**](../Model/UpdateNetworkSwitchQosRulesOrderRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkSwitchQosRulesOrder200Response**](../Model/GetNetworkSwitchQosRulesOrder200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchRoutingMulticast()`

```php
updateNetworkSwitchRoutingMulticast($network_id, $update_network_switch_routing_multicast_request): \Meraki\Model\GetNetworkSwitchRoutingMulticast200Response
```

Update multicast settings for a network

Update multicast settings for a network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_switch_routing_multicast_request = new \Meraki\Model\UpdateNetworkSwitchRoutingMulticastRequest(); // \Meraki\Model\UpdateNetworkSwitchRoutingMulticastRequest

try {
    $result = $apiInstance->updateNetworkSwitchRoutingMulticast($network_id, $update_network_switch_routing_multicast_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->updateNetworkSwitchRoutingMulticast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_switch_routing_multicast_request** | [**\Meraki\Model\UpdateNetworkSwitchRoutingMulticastRequest**](../Model/UpdateNetworkSwitchRoutingMulticastRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchRoutingMulticast200Response**](../Model/GetNetworkSwitchRoutingMulticast200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchRoutingMulticastRendezvousPoint()`

```php
updateNetworkSwitchRoutingMulticastRendezvousPoint($network_id, $rendezvous_point_id, $create_network_switch_routing_multicast_rendezvous_point_request): \Meraki\Model\GetNetworkSwitchRoutingMulticastRendezvousPoints200ResponseInner
```

Update a multicast rendezvous point

Update a multicast rendezvous point

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$rendezvous_point_id = 'rendezvous_point_id_example'; // string | Rendezvous point ID
$create_network_switch_routing_multicast_rendezvous_point_request = new \Meraki\Model\CreateNetworkSwitchRoutingMulticastRendezvousPointRequest(); // \Meraki\Model\CreateNetworkSwitchRoutingMulticastRendezvousPointRequest

try {
    $result = $apiInstance->updateNetworkSwitchRoutingMulticastRendezvousPoint($network_id, $rendezvous_point_id, $create_network_switch_routing_multicast_rendezvous_point_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->updateNetworkSwitchRoutingMulticastRendezvousPoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **rendezvous_point_id** | **string**| Rendezvous point ID | |
| **create_network_switch_routing_multicast_rendezvous_point_request** | [**\Meraki\Model\CreateNetworkSwitchRoutingMulticastRendezvousPointRequest**](../Model/CreateNetworkSwitchRoutingMulticastRendezvousPointRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkSwitchRoutingMulticastRendezvousPoints200ResponseInner**](../Model/GetNetworkSwitchRoutingMulticastRendezvousPoints200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchRoutingOspf()`

```php
updateNetworkSwitchRoutingOspf($network_id, $update_network_switch_routing_ospf_request): \Meraki\Model\GetNetworkSwitchRoutingOspf200Response
```

Update layer 3 OSPF routing configuration

Update layer 3 OSPF routing configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_switch_routing_ospf_request = new \Meraki\Model\UpdateNetworkSwitchRoutingOspfRequest(); // \Meraki\Model\UpdateNetworkSwitchRoutingOspfRequest

try {
    $result = $apiInstance->updateNetworkSwitchRoutingOspf($network_id, $update_network_switch_routing_ospf_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->updateNetworkSwitchRoutingOspf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_switch_routing_ospf_request** | [**\Meraki\Model\UpdateNetworkSwitchRoutingOspfRequest**](../Model/UpdateNetworkSwitchRoutingOspfRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchRoutingOspf200Response**](../Model/GetNetworkSwitchRoutingOspf200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchSettings()`

```php
updateNetworkSwitchSettings($network_id, $update_network_switch_settings_request): \Meraki\Model\GetNetworkSwitchSettings200Response
```

Update switch network settings

Update switch network settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_switch_settings_request = new \Meraki\Model\UpdateNetworkSwitchSettingsRequest(); // \Meraki\Model\UpdateNetworkSwitchSettingsRequest

try {
    $result = $apiInstance->updateNetworkSwitchSettings($network_id, $update_network_switch_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->updateNetworkSwitchSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_switch_settings_request** | [**\Meraki\Model\UpdateNetworkSwitchSettingsRequest**](../Model/UpdateNetworkSwitchSettingsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchSettings200Response**](../Model/GetNetworkSwitchSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchStackRoutingInterface()`

```php
updateNetworkSwitchStackRoutingInterface($network_id, $switch_stack_id, $interface_id, $update_device_switch_routing_interface_request): \Meraki\Model\UpdateNetworkSwitchStackRoutingInterface200Response
```

Update a layer 3 interface for a switch stack

Update a layer 3 interface for a switch stack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$switch_stack_id = 'switch_stack_id_example'; // string | Switch stack ID
$interface_id = 'interface_id_example'; // string | Interface ID
$update_device_switch_routing_interface_request = new \Meraki\Model\UpdateDeviceSwitchRoutingInterfaceRequest(); // \Meraki\Model\UpdateDeviceSwitchRoutingInterfaceRequest

try {
    $result = $apiInstance->updateNetworkSwitchStackRoutingInterface($network_id, $switch_stack_id, $interface_id, $update_device_switch_routing_interface_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->updateNetworkSwitchStackRoutingInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **switch_stack_id** | **string**| Switch stack ID | |
| **interface_id** | **string**| Interface ID | |
| **update_device_switch_routing_interface_request** | [**\Meraki\Model\UpdateDeviceSwitchRoutingInterfaceRequest**](../Model/UpdateDeviceSwitchRoutingInterfaceRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\UpdateNetworkSwitchStackRoutingInterface200Response**](../Model/UpdateNetworkSwitchStackRoutingInterface200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchStackRoutingInterfaceDhcp()`

```php
updateNetworkSwitchStackRoutingInterfaceDhcp($network_id, $switch_stack_id, $interface_id, $update_network_switch_stack_routing_interface_dhcp_request): \Meraki\Model\GetDeviceSwitchRoutingInterfaceDhcp200Response
```

Update a layer 3 interface DHCP configuration for a switch stack

Update a layer 3 interface DHCP configuration for a switch stack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$switch_stack_id = 'switch_stack_id_example'; // string | Switch stack ID
$interface_id = 'interface_id_example'; // string | Interface ID
$update_network_switch_stack_routing_interface_dhcp_request = new \Meraki\Model\UpdateNetworkSwitchStackRoutingInterfaceDhcpRequest(); // \Meraki\Model\UpdateNetworkSwitchStackRoutingInterfaceDhcpRequest

try {
    $result = $apiInstance->updateNetworkSwitchStackRoutingInterfaceDhcp($network_id, $switch_stack_id, $interface_id, $update_network_switch_stack_routing_interface_dhcp_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->updateNetworkSwitchStackRoutingInterfaceDhcp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **switch_stack_id** | **string**| Switch stack ID | |
| **interface_id** | **string**| Interface ID | |
| **update_network_switch_stack_routing_interface_dhcp_request** | [**\Meraki\Model\UpdateNetworkSwitchStackRoutingInterfaceDhcpRequest**](../Model/UpdateNetworkSwitchStackRoutingInterfaceDhcpRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingInterfaceDhcp200Response**](../Model/GetDeviceSwitchRoutingInterfaceDhcp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchStackRoutingStaticRoute()`

```php
updateNetworkSwitchStackRoutingStaticRoute($network_id, $switch_stack_id, $static_route_id, $update_device_switch_routing_static_route_request): \Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner
```

Update a layer 3 static route for a switch stack

Update a layer 3 static route for a switch stack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$switch_stack_id = 'switch_stack_id_example'; // string | Switch stack ID
$static_route_id = 'static_route_id_example'; // string | Static route ID
$update_device_switch_routing_static_route_request = new \Meraki\Model\UpdateDeviceSwitchRoutingStaticRouteRequest(); // \Meraki\Model\UpdateDeviceSwitchRoutingStaticRouteRequest

try {
    $result = $apiInstance->updateNetworkSwitchStackRoutingStaticRoute($network_id, $switch_stack_id, $static_route_id, $update_device_switch_routing_static_route_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->updateNetworkSwitchStackRoutingStaticRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **switch_stack_id** | **string**| Switch stack ID | |
| **static_route_id** | **string**| Static route ID | |
| **update_device_switch_routing_static_route_request** | [**\Meraki\Model\UpdateDeviceSwitchRoutingStaticRouteRequest**](../Model/UpdateDeviceSwitchRoutingStaticRouteRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceSwitchRoutingStaticRoutes200ResponseInner**](../Model/GetDeviceSwitchRoutingStaticRoutes200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchStormControl()`

```php
updateNetworkSwitchStormControl($network_id, $update_network_switch_storm_control_request): \Meraki\Model\GetNetworkSwitchStormControl200Response
```

Update the storm control configuration for a switch network

Update the storm control configuration for a switch network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_switch_storm_control_request = new \Meraki\Model\UpdateNetworkSwitchStormControlRequest(); // \Meraki\Model\UpdateNetworkSwitchStormControlRequest

try {
    $result = $apiInstance->updateNetworkSwitchStormControl($network_id, $update_network_switch_storm_control_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->updateNetworkSwitchStormControl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_switch_storm_control_request** | [**\Meraki\Model\UpdateNetworkSwitchStormControlRequest**](../Model/UpdateNetworkSwitchStormControlRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchStormControl200Response**](../Model/GetNetworkSwitchStormControl200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSwitchStp()`

```php
updateNetworkSwitchStp($network_id, $update_network_switch_stp_request): \Meraki\Model\GetNetworkSwitchStp200Response
```

Updates STP settings

Updates STP settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_switch_stp_request = new \Meraki\Model\UpdateNetworkSwitchStpRequest(); // \Meraki\Model\UpdateNetworkSwitchStpRequest

try {
    $result = $apiInstance->updateNetworkSwitchStp($network_id, $update_network_switch_stp_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->updateNetworkSwitchStp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_switch_stp_request** | [**\Meraki\Model\UpdateNetworkSwitchStpRequest**](../Model/UpdateNetworkSwitchStpRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSwitchStp200Response**](../Model/GetNetworkSwitchStp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationConfigTemplateSwitchProfilePort()`

```php
updateOrganizationConfigTemplateSwitchProfilePort($organization_id, $config_template_id, $profile_id, $port_id, $update_organization_config_template_switch_profile_port_request): \Meraki\Model\GetOrganizationConfigTemplateSwitchProfilePorts200ResponseInner
```

Update a switch template port

Update a switch template port

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\SwitchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$config_template_id = 'config_template_id_example'; // string | Config template ID
$profile_id = 'profile_id_example'; // string | Profile ID
$port_id = 'port_id_example'; // string | Port ID
$update_organization_config_template_switch_profile_port_request = new \Meraki\Model\UpdateOrganizationConfigTemplateSwitchProfilePortRequest(); // \Meraki\Model\UpdateOrganizationConfigTemplateSwitchProfilePortRequest

try {
    $result = $apiInstance->updateOrganizationConfigTemplateSwitchProfilePort($organization_id, $config_template_id, $profile_id, $port_id, $update_organization_config_template_switch_profile_port_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchApi->updateOrganizationConfigTemplateSwitchProfilePort: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **config_template_id** | **string**| Config template ID | |
| **profile_id** | **string**| Profile ID | |
| **port_id** | **string**| Port ID | |
| **update_organization_config_template_switch_profile_port_request** | [**\Meraki\Model\UpdateOrganizationConfigTemplateSwitchProfilePortRequest**](../Model/UpdateOrganizationConfigTemplateSwitchProfilePortRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationConfigTemplateSwitchProfilePorts200ResponseInner**](../Model/GetOrganizationConfigTemplateSwitchProfilePorts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
