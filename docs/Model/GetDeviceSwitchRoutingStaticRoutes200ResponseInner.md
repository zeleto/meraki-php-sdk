# # GetDeviceSwitchRoutingStaticRoutes200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**static_route_id** | **string** | The identifier of a layer 3 static route |
**name** | **string** | The name or description of the layer 3 static route | [optional]
**subnet** | **string** | The IP address of the subnetwork specified in CIDR notation (ex. 1.2.3.0/24) |
**next_hop_ip** | **string** | The IP address of the router to which traffic for this destination network should be sent |
**management_next_hop** | **string** | Optional fallback IP address for management traffic | [optional]
**advertise_via_ospf_enabled** | **bool** | Option to advertise static routes via OSPF | [optional]
**prefer_over_ospf_routes_enabled** | **bool** | Option to prefer static routes over OSPF routes | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
