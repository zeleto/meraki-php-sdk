# # GetOrganizationApplianceVpnThirdPartyVPNPeers200ResponsePeersInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the VPN peer | [optional]
**public_ip** | **string** | [optional] The public IP of the VPN peer | [optional]
**remote_id** | **string** | [optional] The remote ID is used to identify the connecting VPN peer. This can either be a valid IPv4 Address, FQDN or User FQDN. | [optional]
**local_id** | **string** | [optional] The local ID is used to identify the MX to the peer. This will apply to all MXs this peer applies to. | [optional]
**secret** | **string** | The shared secret with the VPN peer | [optional]
**private_subnets** | **string[]** | The list of the private subnets of the VPN peer | [optional]
**ipsec_policies** | [**\Meraki\Model\GetOrganizationApplianceVpnThirdPartyVPNPeers200ResponsePeersInnerIpsecPolicies**](GetOrganizationApplianceVpnThirdPartyVPNPeers200ResponsePeersInnerIpsecPolicies.md) |  | [optional]
**ipsec_policies_preset** | **string** | One of the following available presets: &#39;default&#39;, &#39;aws&#39;, &#39;azure&#39;, &#39;umbrella&#39;, &#39;zscaler&#39;. If this is provided, the &#39;ipsecPolicies&#39; parameter is ignored. | [optional]
**ike_version** | **string** | [optional] The IKE version to be used for the IPsec VPN peer configuration. Defaults to &#39;1&#39; when omitted. | [optional] [default to '1']
**network_tags** | **string[]** | A list of network tags that will connect with this peer. Use [&#39;all&#39;] for all networks. Use [&#39;none&#39;] for no networks. If not included, the default is [&#39;all&#39;]. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
