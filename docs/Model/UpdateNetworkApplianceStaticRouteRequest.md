# # UpdateNetworkApplianceStaticRouteRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the route | [optional]
**subnet** | **string** | Subnet of the route | [optional]
**gateway_ip** | **string** | Gateway IP address (next hop) | [optional]
**gateway_vlan_id** | **string** | Gateway VLAN ID | [optional]
**enabled** | **bool** | Whether the route should be enabled or not | [optional]
**fixed_ip_assignments** | [**array<string,\Meraki\Model\GetNetworkApplianceStaticRoutes200ResponseInnerFixedIpAssignmentsValue>**](GetNetworkApplianceStaticRoutes200ResponseInnerFixedIpAssignmentsValue.md) | Fixed DHCP IP assignments on the route | [optional]
**reserved_ip_ranges** | [**\Meraki\Model\UpdateNetworkApplianceStaticRouteRequestReservedIpRangesInner[]**](UpdateNetworkApplianceStaticRouteRequestReservedIpRangesInner.md) | DHCP reserved IP ranges | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
