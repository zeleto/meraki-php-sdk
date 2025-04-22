# # UpdateNetworkWirelessSettingsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meshing_enabled** | **bool** | Toggle for enabling or disabling meshing in a network | [optional]
**ipv6_bridge_enabled** | **bool** | Toggle for enabling or disabling IPv6 bridging in a network (Note: if enabled, SSIDs must also be configured to use bridge mode) | [optional]
**location_analytics_enabled** | **bool** | Toggle for enabling or disabling location analytics for your network | [optional]
**upgrade_strategy** | **string** | The default strategy that network devices will use to perform an upgrade. Requires firmware version MR 26.8 or higher. | [optional]
**led_lights_on** | **bool** | Toggle for enabling or disabling LED lights on all APs in the network (making them run dark) | [optional]
**named_vlans** | [**\Meraki\Model\UpdateNetworkWirelessSettingsRequestNamedVlans**](UpdateNetworkWirelessSettingsRequestNamedVlans.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
