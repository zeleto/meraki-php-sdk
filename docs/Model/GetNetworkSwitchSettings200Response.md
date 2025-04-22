# # GetNetworkSwitchSettings200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vlan** | **int** | Management VLAN | [optional]
**use_combined_power** | **bool** | The use Combined Power as the default behavior of secondary power supplies on supported devices. | [optional]
**power_exceptions** | [**\Meraki\Model\GetNetworkSwitchSettings200ResponsePowerExceptionsInner[]**](GetNetworkSwitchSettings200ResponsePowerExceptionsInner.md) | Exceptions on a per switch basis to \&quot;useCombinedPower\&quot; | [optional]
**uplink_client_sampling** | [**\Meraki\Model\GetNetworkSwitchSettings200ResponseUplinkClientSampling**](GetNetworkSwitchSettings200ResponseUplinkClientSampling.md) |  | [optional]
**mac_blocklist** | [**\Meraki\Model\GetNetworkSwitchSettings200ResponseMacBlocklist**](GetNetworkSwitchSettings200ResponseMacBlocklist.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
