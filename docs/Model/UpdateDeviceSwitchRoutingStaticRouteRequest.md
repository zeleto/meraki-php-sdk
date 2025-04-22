# # UpdateDeviceSwitchRoutingStaticRouteRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name or description for layer 3 static route | [optional]
**subnet** | **string** | The subnet which is routed via this static route and should be specified in CIDR notation (ex. 1.2.3.0/24) | [optional]
**next_hop_ip** | **string** | IP address of the next hop device to which the device sends its traffic for the subnet | [optional]
**management_next_hop** | **string** | Optional fallback IP address for management traffic | [optional]
**advertise_via_ospf_enabled** | **bool** | Option to advertise static route via OSPF | [optional]
**prefer_over_ospf_routes_enabled** | **bool** | Option to prefer static route over OSPF routes | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
