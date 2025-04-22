# # GetNetworkClient200Response

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
**recent_device_name** | **string** | The name of the node that the device was last connected to | [optional]
**recent_device_serial** | **string** | The serial of the node that the device was last connected to | [optional]
**recent_device_connection** | **string** | Client&#39;s most recent connection type | [optional]
**client_vpn_connections** | [**\Meraki\Model\GetNetworkClient200ResponseClientVpnConnectionsInner[]**](GetNetworkClient200ResponseClientVpnConnectionsInner.md) | VPN connections associated with the client | [optional]
**lldp** | **string[][]** | The link layer discover protocol settings for the client | [optional]
**cdp** | **string[][]** | The Cisco discover protocol settings for the client | [optional]
**status** | **string** | The connection status of the client | [optional]
**notes** | **string** | The notes associated with the client | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
