# # GetNetworkClients200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the client | [optional]
**mac** | **string** | The MAC address of the client | [optional]
**ip** | **string** | The IP address of the client | [optional]
**ip6** | **string** | The IPv6 address of the client | [optional]
**description** | **string** | Short description of the client | [optional]
**first_seen** | **int** | Timestamp client was first seen in the network | [optional]
**last_seen** | **int** | Timestamp client was last seen in the network | [optional]
**manufacturer** | **string** | Manufacturer of the client | [optional]
**os** | **string** | The operating system of the client | [optional]
**user** | **string** | The username of the user of the client | [optional]
**vlan** | **string** | The name of the VLAN that the client is connected to | [optional]
**ssid** | **string** | The name of the SSID that the client is connected to | [optional]
**switchport** | **string** | The switch port that the client is connected to | [optional]
**wireless_capabilities** | **string** | Wireless capabilities of the client | [optional]
**sm_installed** | **bool** | Status of SM for the client | [optional]
**recent_device_mac** | **string** | The MAC address of the node that the device was last connected to | [optional]
**status** | **string** | The connection status of the client | [optional]
**usage** | [**\Meraki\Model\GetNetworkClients200ResponseInnerUsage**](GetNetworkClients200ResponseInnerUsage.md) |  | [optional]
**named_vlan** | **string** | Named VLAN of the client | [optional]
**adaptive_policy_group** | **string** | The adaptive policy group of the client | [optional]
**device_type_prediction** | **string** | Prediction of the client&#39;s device type | [optional]
**recent_device_serial** | **string** | The serial of the node the device was last connected to | [optional]
**recent_device_name** | **string** | The name of the node the device was last connected to | [optional]
**recent_device_connection** | **string** | Client&#39;s most recent connection type | [optional]
**notes** | **string** | Notes on the client | [optional]
**ip6_local** | **string** | Local IPv6 address of the client | [optional]
**group_policy8021x** | **string** | 802.1x group policy of the client | [optional]
**psk_group** | **string** | iPSK name of the client | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
