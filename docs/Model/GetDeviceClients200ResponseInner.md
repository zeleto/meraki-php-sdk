# # GetDeviceClients200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the client | [optional]
**mac** | **string** | The MAC address of the client | [optional]
**description** | **string** | Short description of the client | [optional]
**mdns_name** | **string** | The client&#39;s MDNS name | [optional]
**dhcp_hostname** | **string** | The client&#39;s DHCP hostname | [optional]
**user** | **string** | The client user&#39;s name | [optional]
**ip** | **string** | The IP address of the client | [optional]
**vlan** | **string** | The client-assigned name of the VLAN the client is connected to | [optional]
**named_vlan** | **string** | The owner-assigned name of the VLAN the client is connected to | [optional]
**switchport** | **string** | The name of the switchport with clients on it, if the device is a switch | [optional]
**adaptive_policy_group** | **string** | A description of the adaptive policy group | [optional]
**usage** | [**\Meraki\Model\GetDeviceClients200ResponseInnerUsage**](GetDeviceClients200ResponseInnerUsage.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
