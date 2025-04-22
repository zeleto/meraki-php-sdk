# # GetNetworkSwitchDhcpV4ServersSeen200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mac** | **string** | Mac address of the server. | [optional]
**vlan** | **int** | Vlan id of the server. | [optional]
**client_id** | **string** | Client id of the server if available. | [optional]
**is_allowed** | **bool** | Whether the server is allowed or blocked. Always true for configured servers. | [optional]
**last_seen_at** | **\DateTime** | Last time the server was seen. | [optional]
**seen_by** | [**\Meraki\Model\GetNetworkSwitchDhcpV4ServersSeen200ResponseInnerSeenByInner[]**](GetNetworkSwitchDhcpV4ServersSeen200ResponseInnerSeenByInner.md) | Devices that saw the server. | [optional]
**type** | **string** | server type. Can be a &#39;device&#39;, &#39;stack&#39;, or &#39;discovered&#39; (i.e client). | [optional]
**device** | [**\Meraki\Model\GetNetworkSwitchDhcpV4ServersSeen200ResponseInnerDevice**](GetNetworkSwitchDhcpV4ServersSeen200ResponseInnerDevice.md) |  | [optional]
**ipv4** | [**\Meraki\Model\GetNetworkSwitchDhcpV4ServersSeen200ResponseInnerIpv4**](GetNetworkSwitchDhcpV4ServersSeen200ResponseInnerIpv4.md) |  | [optional]
**is_configured** | **bool** | Whether the server is configured. | [optional]
**last_ack** | [**\Meraki\Model\GetNetworkSwitchDhcpV4ServersSeen200ResponseInnerLastAck**](GetNetworkSwitchDhcpV4ServersSeen200ResponseInnerLastAck.md) |  | [optional]
**last_packet** | [**\Meraki\Model\GetNetworkSwitchDhcpV4ServersSeen200ResponseInnerLastPacket**](GetNetworkSwitchDhcpV4ServersSeen200ResponseInnerLastPacket.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
