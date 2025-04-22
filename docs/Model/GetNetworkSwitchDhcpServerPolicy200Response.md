# # GetNetworkSwitchDhcpServerPolicy200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**alerts** | [**\Meraki\Model\GetNetworkSwitchDhcpServerPolicy200ResponseAlerts**](GetNetworkSwitchDhcpServerPolicy200ResponseAlerts.md) |  | [optional]
**default_policy** | **string** | &#39;allow&#39; or &#39;block&#39; new DHCP servers. Default value is &#39;allow&#39;. | [optional]
**blocked_servers** | **string[]** | List the MAC addresses of DHCP servers to block on the network when defaultPolicy is set       to allow.An empty array will clear the entries. | [optional]
**allowed_servers** | **string[]** | List the MAC addresses of DHCP servers to permit on the network when defaultPolicy is set       to block.An empty array will clear the entries. | [optional]
**arp_inspection** | [**\Meraki\Model\GetNetworkSwitchDhcpServerPolicy200ResponseArpInspection**](GetNetworkSwitchDhcpServerPolicy200ResponseArpInspection.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
