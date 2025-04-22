# # ProvisionNetworkClientsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clients** | [**\Meraki\Model\ProvisionNetworkClientsRequestClientsInner[]**](ProvisionNetworkClientsRequestClientsInner.md) | The array of clients to provision |
**device_policy** | **string** | The policy to apply to the specified client. Can be &#39;Group policy&#39;, &#39;Allowed&#39;, &#39;Blocked&#39;, &#39;Per connection&#39; or &#39;Normal&#39;. Required. |
**group_policy_id** | **string** | The ID of the desired group policy to apply to the client. Required if &#39;devicePolicy&#39; is set to \&quot;Group policy\&quot;. Otherwise this is ignored. | [optional]
**policies_by_security_appliance** | [**\Meraki\Model\ProvisionNetworkClientsRequestPoliciesBySecurityAppliance**](ProvisionNetworkClientsRequestPoliciesBySecurityAppliance.md) |  | [optional]
**policies_by_ssid** | [**\Meraki\Model\ProvisionNetworkClientsRequestPoliciesBySsid**](ProvisionNetworkClientsRequestPoliciesBySsid.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
