# # GetDeviceSwitchPortsStatuses200ResponseInnerCdp

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**system_name** | **string** | The system name. | [optional]
**platform** | **string** | Identifies the hardware platform of the device. | [optional]
**device_id** | **string** | Identifies the device name. | [optional]
**port_id** | **string** | Identifies the port from which the CDP packet was sent. | [optional]
**native_vlan** | **int** | Indicates, per interface, the assumed VLAN for untagged packets on the interface. | [optional]
**address** | **string** | Contains network addresses of both receiving and sending devices. | [optional]
**management_address** | **string** | The device&#39;s management IP. | [optional]
**version** | **string** | Contains the device software release information. | [optional]
**vtp_management_domain** | **string** | Advertises the configured VLAN Trunking Protocl (VTP)-management-domain name of the system. | [optional]
**capabilities** | **string** | Identifies the device type, which indicates the functional capabilities of the device. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
