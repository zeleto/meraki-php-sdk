# # GetNetworkApplianceStaticRoutes200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Route ID | [optional]
**ip_version** | **int** | IP protocol version | [optional]
**network_id** | **string** | Network ID | [optional]
**enabled** | **bool** | Whether the route is enabled or not | [optional]
**name** | **string** | Name of the route | [optional]
**subnet** | **string** | Subnet of the route | [optional]
**gateway_ip** | **string** | Gateway IP address (next hop) | [optional]
**fixed_ip_assignments** | [**array<string,\Meraki\Model\GetNetworkApplianceStaticRoutes200ResponseInnerFixedIpAssignmentsValue>**](GetNetworkApplianceStaticRoutes200ResponseInnerFixedIpAssignmentsValue.md) | Fixed DHCP IP assignments on the route | [optional]
**reserved_ip_ranges** | [**\Meraki\Model\GetNetworkApplianceStaticRoutes200ResponseInnerReservedIpRangesInner[]**](GetNetworkApplianceStaticRoutes200ResponseInnerReservedIpRangesInner.md) | DHCP reserved IP ranges | [optional]
**gateway_vlan_id** | **int** | Gateway VLAN ID | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
