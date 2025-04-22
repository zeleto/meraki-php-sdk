# # UpdateDeviceWirelessAlternateManagementInterfaceIpv6RequestAddressesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**protocol** | **string** | The IP protocol used for the address | [optional]
**assignment_mode** | **string** | The type of address assignment. Either static or dynamic. | [optional]
**address** | **string** | The IP address configured for the alternate management interface | [optional]
**gateway** | **string** | The gateway address configured for the alternate managment interface | [optional]
**prefix** | **string** | The IPv6 prefix length of the IPv6 interface. Required if IPv6 object is included. | [optional]
**nameservers** | [**\Meraki\Model\UpdateDeviceWirelessAlternateManagementInterfaceIpv6RequestAddressesInnerNameservers**](UpdateDeviceWirelessAlternateManagementInterfaceIpv6RequestAddressesInnerNameservers.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
