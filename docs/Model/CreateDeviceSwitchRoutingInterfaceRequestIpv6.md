# # CreateDeviceSwitchRoutingInterfaceRequestIpv6

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**assignment_mode** | **string** | The IPv6 assignment mode for the interface. Can be either &#39;eui-64&#39; or &#39;static&#39;. | [optional]
**prefix** | **string** | The IPv6 prefix of the interface. Required if IPv6 object is included. | [optional]
**address** | **string** | The IPv6 address of the interface. Required if assignmentMode is &#39;static&#39;. Must not be included if           assignmentMode is &#39;eui-64&#39;. | [optional]
**gateway** | **string** | The IPv6 default gateway of the interface. Required if prefix is defined and this is the first           interface with IPv6 configured. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
