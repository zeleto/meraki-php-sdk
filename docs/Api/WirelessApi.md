# Meraki\WirelessApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assignNetworkWirelessEthernetPortsProfiles()**](WirelessApi.md#assignNetworkWirelessEthernetPortsProfiles) | **POST** /networks/{networkId}/wireless/ethernet/ports/profiles/assign | Assign AP port profile to list of APs |
| [**createNetworkWirelessAirMarshalRule()**](WirelessApi.md#createNetworkWirelessAirMarshalRule) | **POST** /networks/{networkId}/wireless/airMarshal/rules | Creates a new rule |
| [**createNetworkWirelessEthernetPortsProfile()**](WirelessApi.md#createNetworkWirelessEthernetPortsProfile) | **POST** /networks/{networkId}/wireless/ethernet/ports/profiles | Create an AP port profile |
| [**createNetworkWirelessRfProfile()**](WirelessApi.md#createNetworkWirelessRfProfile) | **POST** /networks/{networkId}/wireless/rfProfiles | Creates new RF profile for this network |
| [**createNetworkWirelessSsidIdentityPsk()**](WirelessApi.md#createNetworkWirelessSsidIdentityPsk) | **POST** /networks/{networkId}/wireless/ssids/{number}/identityPsks | Create an Identity PSK |
| [**createOrganizationWirelessSsidsFirewallIsolationAllowlistEntry()**](WirelessApi.md#createOrganizationWirelessSsidsFirewallIsolationAllowlistEntry) | **POST** /organizations/{organizationId}/wireless/ssids/firewall/isolation/allowlist/entries | Create isolation allow list MAC entry for this organization |
| [**deleteNetworkWirelessAirMarshalRule()**](WirelessApi.md#deleteNetworkWirelessAirMarshalRule) | **DELETE** /networks/{networkId}/wireless/airMarshal/rules/{ruleId} | Delete an Air Marshal rule. |
| [**deleteNetworkWirelessEthernetPortsProfile()**](WirelessApi.md#deleteNetworkWirelessEthernetPortsProfile) | **DELETE** /networks/{networkId}/wireless/ethernet/ports/profiles/{profileId} | Delete an AP port profile |
| [**deleteNetworkWirelessRfProfile()**](WirelessApi.md#deleteNetworkWirelessRfProfile) | **DELETE** /networks/{networkId}/wireless/rfProfiles/{rfProfileId} | Delete a RF Profile |
| [**deleteNetworkWirelessSsidIdentityPsk()**](WirelessApi.md#deleteNetworkWirelessSsidIdentityPsk) | **DELETE** /networks/{networkId}/wireless/ssids/{number}/identityPsks/{identityPskId} | Delete an Identity PSK |
| [**deleteOrganizationWirelessSsidsFirewallIsolationAllowlistEntry()**](WirelessApi.md#deleteOrganizationWirelessSsidsFirewallIsolationAllowlistEntry) | **DELETE** /organizations/{organizationId}/wireless/ssids/firewall/isolation/allowlist/entries/{entryId} | Destroy isolation allow list MAC entry for this organization |
| [**getDeviceWirelessBluetoothSettings()**](WirelessApi.md#getDeviceWirelessBluetoothSettings) | **GET** /devices/{serial}/wireless/bluetooth/settings | Return the bluetooth settings for a wireless device |
| [**getDeviceWirelessConnectionStats()**](WirelessApi.md#getDeviceWirelessConnectionStats) | **GET** /devices/{serial}/wireless/connectionStats | Aggregated connectivity info for a given AP on this network |
| [**getDeviceWirelessElectronicShelfLabel()**](WirelessApi.md#getDeviceWirelessElectronicShelfLabel) | **GET** /devices/{serial}/wireless/electronicShelfLabel | Return the ESL settings of a device |
| [**getDeviceWirelessLatencyStats()**](WirelessApi.md#getDeviceWirelessLatencyStats) | **GET** /devices/{serial}/wireless/latencyStats | Aggregated latency info for a given AP on this network |
| [**getDeviceWirelessRadioSettings()**](WirelessApi.md#getDeviceWirelessRadioSettings) | **GET** /devices/{serial}/wireless/radio/settings | Return the manually configured radio settings overrides of a device, which take precedence over RF profiles. |
| [**getDeviceWirelessStatus()**](WirelessApi.md#getDeviceWirelessStatus) | **GET** /devices/{serial}/wireless/status | Return the SSID statuses of an access point |
| [**getNetworkWirelessAirMarshal()**](WirelessApi.md#getNetworkWirelessAirMarshal) | **GET** /networks/{networkId}/wireless/airMarshal | List Air Marshal scan results from a network |
| [**getNetworkWirelessAlternateManagementInterface()**](WirelessApi.md#getNetworkWirelessAlternateManagementInterface) | **GET** /networks/{networkId}/wireless/alternateManagementInterface | Return alternate management interface and devices with IP assigned |
| [**getNetworkWirelessBilling()**](WirelessApi.md#getNetworkWirelessBilling) | **GET** /networks/{networkId}/wireless/billing | Return the billing settings of this network |
| [**getNetworkWirelessBluetoothSettings()**](WirelessApi.md#getNetworkWirelessBluetoothSettings) | **GET** /networks/{networkId}/wireless/bluetooth/settings | Return the Bluetooth settings for a network. &lt;a href&#x3D;\&quot;https://documentation.meraki.com/MR/Bluetooth/Bluetooth_Low_Energy_(BLE)\&quot;&gt;Bluetooth settings&lt;/a&gt; must be enabled on the network. |
| [**getNetworkWirelessChannelUtilizationHistory()**](WirelessApi.md#getNetworkWirelessChannelUtilizationHistory) | **GET** /networks/{networkId}/wireless/channelUtilizationHistory | Return AP channel utilization over time for a device or network client |
| [**getNetworkWirelessClientConnectionStats()**](WirelessApi.md#getNetworkWirelessClientConnectionStats) | **GET** /networks/{networkId}/wireless/clients/{clientId}/connectionStats | Aggregated connectivity info for a given client on this network |
| [**getNetworkWirelessClientConnectivityEvents()**](WirelessApi.md#getNetworkWirelessClientConnectivityEvents) | **GET** /networks/{networkId}/wireless/clients/{clientId}/connectivityEvents | List the wireless connectivity events for a client within a network in the timespan. |
| [**getNetworkWirelessClientCountHistory()**](WirelessApi.md#getNetworkWirelessClientCountHistory) | **GET** /networks/{networkId}/wireless/clientCountHistory | Return wireless client counts over time for a network, device, or network client |
| [**getNetworkWirelessClientLatencyHistory()**](WirelessApi.md#getNetworkWirelessClientLatencyHistory) | **GET** /networks/{networkId}/wireless/clients/{clientId}/latencyHistory | Return the latency history for a client |
| [**getNetworkWirelessClientLatencyStats()**](WirelessApi.md#getNetworkWirelessClientLatencyStats) | **GET** /networks/{networkId}/wireless/clients/{clientId}/latencyStats | Aggregated latency info for a given client on this network |
| [**getNetworkWirelessClientsConnectionStats()**](WirelessApi.md#getNetworkWirelessClientsConnectionStats) | **GET** /networks/{networkId}/wireless/clients/connectionStats | Aggregated connectivity info for this network, grouped by clients |
| [**getNetworkWirelessClientsLatencyStats()**](WirelessApi.md#getNetworkWirelessClientsLatencyStats) | **GET** /networks/{networkId}/wireless/clients/latencyStats | Aggregated latency info for this network, grouped by clients |
| [**getNetworkWirelessConnectionStats()**](WirelessApi.md#getNetworkWirelessConnectionStats) | **GET** /networks/{networkId}/wireless/connectionStats | Aggregated connectivity info for this network |
| [**getNetworkWirelessDataRateHistory()**](WirelessApi.md#getNetworkWirelessDataRateHistory) | **GET** /networks/{networkId}/wireless/dataRateHistory | Return PHY data rates over time for a network, device, or network client |
| [**getNetworkWirelessDevicesConnectionStats()**](WirelessApi.md#getNetworkWirelessDevicesConnectionStats) | **GET** /networks/{networkId}/wireless/devices/connectionStats | Aggregated connectivity info for this network, grouped by node |
| [**getNetworkWirelessDevicesLatencyStats()**](WirelessApi.md#getNetworkWirelessDevicesLatencyStats) | **GET** /networks/{networkId}/wireless/devices/latencyStats | Aggregated latency info for this network, grouped by node |
| [**getNetworkWirelessElectronicShelfLabel()**](WirelessApi.md#getNetworkWirelessElectronicShelfLabel) | **GET** /networks/{networkId}/wireless/electronicShelfLabel | Return the ESL settings of a wireless network |
| [**getNetworkWirelessElectronicShelfLabelConfiguredDevices()**](WirelessApi.md#getNetworkWirelessElectronicShelfLabelConfiguredDevices) | **GET** /networks/{networkId}/wireless/electronicShelfLabel/configuredDevices | Get a list of all ESL eligible devices of a network |
| [**getNetworkWirelessEthernetPortsProfile()**](WirelessApi.md#getNetworkWirelessEthernetPortsProfile) | **GET** /networks/{networkId}/wireless/ethernet/ports/profiles/{profileId} | Show the AP port profile by ID for this network |
| [**getNetworkWirelessEthernetPortsProfiles()**](WirelessApi.md#getNetworkWirelessEthernetPortsProfiles) | **GET** /networks/{networkId}/wireless/ethernet/ports/profiles | List the AP port profiles for this network |
| [**getNetworkWirelessFailedConnections()**](WirelessApi.md#getNetworkWirelessFailedConnections) | **GET** /networks/{networkId}/wireless/failedConnections | List of all failed client connection events on this network in a given time range |
| [**getNetworkWirelessLatencyHistory()**](WirelessApi.md#getNetworkWirelessLatencyHistory) | **GET** /networks/{networkId}/wireless/latencyHistory | Return average wireless latency over time for a network, device, or network client |
| [**getNetworkWirelessLatencyStats()**](WirelessApi.md#getNetworkWirelessLatencyStats) | **GET** /networks/{networkId}/wireless/latencyStats | Aggregated latency info for this network |
| [**getNetworkWirelessMeshStatuses()**](WirelessApi.md#getNetworkWirelessMeshStatuses) | **GET** /networks/{networkId}/wireless/meshStatuses | List wireless mesh statuses for repeaters |
| [**getNetworkWirelessRfProfile()**](WirelessApi.md#getNetworkWirelessRfProfile) | **GET** /networks/{networkId}/wireless/rfProfiles/{rfProfileId} | Return a RF profile |
| [**getNetworkWirelessRfProfiles()**](WirelessApi.md#getNetworkWirelessRfProfiles) | **GET** /networks/{networkId}/wireless/rfProfiles | List RF profiles for this network |
| [**getNetworkWirelessSettings()**](WirelessApi.md#getNetworkWirelessSettings) | **GET** /networks/{networkId}/wireless/settings | Return the wireless settings for a network |
| [**getNetworkWirelessSignalQualityHistory()**](WirelessApi.md#getNetworkWirelessSignalQualityHistory) | **GET** /networks/{networkId}/wireless/signalQualityHistory | Return signal quality (SNR/RSSI) over time for a device or network client |
| [**getNetworkWirelessSsid()**](WirelessApi.md#getNetworkWirelessSsid) | **GET** /networks/{networkId}/wireless/ssids/{number} | Return a single MR SSID |
| [**getNetworkWirelessSsidBonjourForwarding()**](WirelessApi.md#getNetworkWirelessSsidBonjourForwarding) | **GET** /networks/{networkId}/wireless/ssids/{number}/bonjourForwarding | List the Bonjour forwarding setting and rules for the SSID |
| [**getNetworkWirelessSsidDeviceTypeGroupPolicies()**](WirelessApi.md#getNetworkWirelessSsidDeviceTypeGroupPolicies) | **GET** /networks/{networkId}/wireless/ssids/{number}/deviceTypeGroupPolicies | List the device type group policies for the SSID |
| [**getNetworkWirelessSsidEapOverride()**](WirelessApi.md#getNetworkWirelessSsidEapOverride) | **GET** /networks/{networkId}/wireless/ssids/{number}/eapOverride | Return the EAP overridden parameters for an SSID |
| [**getNetworkWirelessSsidFirewallL3FirewallRules()**](WirelessApi.md#getNetworkWirelessSsidFirewallL3FirewallRules) | **GET** /networks/{networkId}/wireless/ssids/{number}/firewall/l3FirewallRules | Return the L3 firewall rules for an SSID on an MR network |
| [**getNetworkWirelessSsidFirewallL7FirewallRules()**](WirelessApi.md#getNetworkWirelessSsidFirewallL7FirewallRules) | **GET** /networks/{networkId}/wireless/ssids/{number}/firewall/l7FirewallRules | Return the L7 firewall rules for an SSID on an MR network |
| [**getNetworkWirelessSsidHotspot20()**](WirelessApi.md#getNetworkWirelessSsidHotspot20) | **GET** /networks/{networkId}/wireless/ssids/{number}/hotspot20 | Return the Hotspot 2.0 settings for an SSID |
| [**getNetworkWirelessSsidIdentityPsk()**](WirelessApi.md#getNetworkWirelessSsidIdentityPsk) | **GET** /networks/{networkId}/wireless/ssids/{number}/identityPsks/{identityPskId} | Return an Identity PSK |
| [**getNetworkWirelessSsidIdentityPsks()**](WirelessApi.md#getNetworkWirelessSsidIdentityPsks) | **GET** /networks/{networkId}/wireless/ssids/{number}/identityPsks | List all Identity PSKs in a wireless network |
| [**getNetworkWirelessSsidSchedules()**](WirelessApi.md#getNetworkWirelessSsidSchedules) | **GET** /networks/{networkId}/wireless/ssids/{number}/schedules | List the outage schedule for the SSID |
| [**getNetworkWirelessSsidSplashSettings()**](WirelessApi.md#getNetworkWirelessSsidSplashSettings) | **GET** /networks/{networkId}/wireless/ssids/{number}/splash/settings | Display the splash page settings for the given SSID |
| [**getNetworkWirelessSsidTrafficShapingRules()**](WirelessApi.md#getNetworkWirelessSsidTrafficShapingRules) | **GET** /networks/{networkId}/wireless/ssids/{number}/trafficShaping/rules | Display the traffic shaping settings for a SSID on an MR network |
| [**getNetworkWirelessSsidVpn()**](WirelessApi.md#getNetworkWirelessSsidVpn) | **GET** /networks/{networkId}/wireless/ssids/{number}/vpn | List the VPN settings for the SSID. |
| [**getNetworkWirelessSsids()**](WirelessApi.md#getNetworkWirelessSsids) | **GET** /networks/{networkId}/wireless/ssids | List the MR SSIDs in a network |
| [**getNetworkWirelessUsageHistory()**](WirelessApi.md#getNetworkWirelessUsageHistory) | **GET** /networks/{networkId}/wireless/usageHistory | Return AP usage over time for a device or network client |
| [**getOrganizationWirelessAirMarshalRules()**](WirelessApi.md#getOrganizationWirelessAirMarshalRules) | **GET** /organizations/{organizationId}/wireless/airMarshal/rules | Returns the current Air Marshal rules for this organization |
| [**getOrganizationWirelessAirMarshalSettingsByNetwork()**](WirelessApi.md#getOrganizationWirelessAirMarshalSettingsByNetwork) | **GET** /organizations/{organizationId}/wireless/airMarshal/settings/byNetwork | Returns the current Air Marshal settings for this network |
| [**getOrganizationWirelessClientsOverviewByDevice()**](WirelessApi.md#getOrganizationWirelessClientsOverviewByDevice) | **GET** /organizations/{organizationId}/wireless/clients/overview/byDevice | List access point client count at the moment in an organization |
| [**getOrganizationWirelessDevicesChannelUtilizationByDevice()**](WirelessApi.md#getOrganizationWirelessDevicesChannelUtilizationByDevice) | **GET** /organizations/{organizationId}/wireless/devices/channelUtilization/byDevice | Get average channel utilization for all bands in a network, split by AP |
| [**getOrganizationWirelessDevicesChannelUtilizationByNetwork()**](WirelessApi.md#getOrganizationWirelessDevicesChannelUtilizationByNetwork) | **GET** /organizations/{organizationId}/wireless/devices/channelUtilization/byNetwork | Get average channel utilization across all bands for all networks in the organization |
| [**getOrganizationWirelessDevicesChannelUtilizationHistoryByDeviceByInterval()**](WirelessApi.md#getOrganizationWirelessDevicesChannelUtilizationHistoryByDeviceByInterval) | **GET** /organizations/{organizationId}/wireless/devices/channelUtilization/history/byDevice/byInterval | Get a time-series of average channel utilization for all bands, segmented by device. |
| [**getOrganizationWirelessDevicesChannelUtilizationHistoryByNetworkByInterval()**](WirelessApi.md#getOrganizationWirelessDevicesChannelUtilizationHistoryByNetworkByInterval) | **GET** /organizations/{organizationId}/wireless/devices/channelUtilization/history/byNetwork/byInterval | Get a time-series of average channel utilization for all bands |
| [**getOrganizationWirelessDevicesEthernetStatuses()**](WirelessApi.md#getOrganizationWirelessDevicesEthernetStatuses) | **GET** /organizations/{organizationId}/wireless/devices/ethernet/statuses | List the most recent Ethernet link speed, duplex, aggregation and power mode and status information for wireless devices. |
| [**getOrganizationWirelessDevicesPacketLossByClient()**](WirelessApi.md#getOrganizationWirelessDevicesPacketLossByClient) | **GET** /organizations/{organizationId}/wireless/devices/packetLoss/byClient | Get average packet loss for the given timespan for all clients in the organization. |
| [**getOrganizationWirelessDevicesPacketLossByDevice()**](WirelessApi.md#getOrganizationWirelessDevicesPacketLossByDevice) | **GET** /organizations/{organizationId}/wireless/devices/packetLoss/byDevice | Get average packet loss for the given timespan for all devices in the organization |
| [**getOrganizationWirelessDevicesPacketLossByNetwork()**](WirelessApi.md#getOrganizationWirelessDevicesPacketLossByNetwork) | **GET** /organizations/{organizationId}/wireless/devices/packetLoss/byNetwork | Get average packet loss for the given timespan for all networks in the organization. |
| [**getOrganizationWirelessDevicesPowerModeHistory()**](WirelessApi.md#getOrganizationWirelessDevicesPowerModeHistory) | **GET** /organizations/{organizationId}/wireless/devices/power/mode/history | Return a record of power mode changes for wireless devices in the organization |
| [**getOrganizationWirelessDevicesSystemCpuLoadHistory()**](WirelessApi.md#getOrganizationWirelessDevicesSystemCpuLoadHistory) | **GET** /organizations/{organizationId}/wireless/devices/system/cpu/load/history | Return the CPU Load history for a list of wireless devices in the organization. |
| [**getOrganizationWirelessDevicesWirelessControllersByDevice()**](WirelessApi.md#getOrganizationWirelessDevicesWirelessControllersByDevice) | **GET** /organizations/{organizationId}/wireless/devices/wirelessControllers/byDevice | List of Catalyst access points information |
| [**getOrganizationWirelessRfProfilesAssignmentsByDevice()**](WirelessApi.md#getOrganizationWirelessRfProfilesAssignmentsByDevice) | **GET** /organizations/{organizationId}/wireless/rfProfiles/assignments/byDevice | List the RF profiles of an organization by device |
| [**getOrganizationWirelessSsidsFirewallIsolationAllowlistEntries()**](WirelessApi.md#getOrganizationWirelessSsidsFirewallIsolationAllowlistEntries) | **GET** /organizations/{organizationId}/wireless/ssids/firewall/isolation/allowlist/entries | List the L2 isolation allow list MAC entry in an organization |
| [**getOrganizationWirelessSsidsStatusesByDevice()**](WirelessApi.md#getOrganizationWirelessSsidsStatusesByDevice) | **GET** /organizations/{organizationId}/wireless/ssids/statuses/byDevice | List status information of all BSSIDs in your organization |
| [**recalculateOrganizationWirelessRadioAutoRfChannels()**](WirelessApi.md#recalculateOrganizationWirelessRadioAutoRfChannels) | **POST** /organizations/{organizationId}/wireless/radio/autoRf/channels/recalculate | Recalculates automatically assigned channels for every AP within specified the specified network(s) |
| [**setNetworkWirelessEthernetPortsProfilesDefault()**](WirelessApi.md#setNetworkWirelessEthernetPortsProfilesDefault) | **POST** /networks/{networkId}/wireless/ethernet/ports/profiles/setDefault | Set the AP port profile to be default for this network |
| [**updateDeviceWirelessAlternateManagementInterfaceIpv6()**](WirelessApi.md#updateDeviceWirelessAlternateManagementInterfaceIpv6) | **PUT** /devices/{serial}/wireless/alternateManagementInterface/ipv6 | Update alternate management interface IPv6 address |
| [**updateDeviceWirelessBluetoothSettings()**](WirelessApi.md#updateDeviceWirelessBluetoothSettings) | **PUT** /devices/{serial}/wireless/bluetooth/settings | Update the bluetooth settings for a wireless device |
| [**updateDeviceWirelessElectronicShelfLabel()**](WirelessApi.md#updateDeviceWirelessElectronicShelfLabel) | **PUT** /devices/{serial}/wireless/electronicShelfLabel | Update the ESL settings of a device |
| [**updateDeviceWirelessRadioSettings()**](WirelessApi.md#updateDeviceWirelessRadioSettings) | **PUT** /devices/{serial}/wireless/radio/settings | Update the radio settings overrides of a device, which take precedence over RF profiles. |
| [**updateNetworkWirelessAirMarshalRule()**](WirelessApi.md#updateNetworkWirelessAirMarshalRule) | **PUT** /networks/{networkId}/wireless/airMarshal/rules/{ruleId} | Update a rule |
| [**updateNetworkWirelessAirMarshalSettings()**](WirelessApi.md#updateNetworkWirelessAirMarshalSettings) | **PUT** /networks/{networkId}/wireless/airMarshal/settings | Updates Air Marshal settings. |
| [**updateNetworkWirelessAlternateManagementInterface()**](WirelessApi.md#updateNetworkWirelessAlternateManagementInterface) | **PUT** /networks/{networkId}/wireless/alternateManagementInterface | Update alternate management interface and device static IP |
| [**updateNetworkWirelessBilling()**](WirelessApi.md#updateNetworkWirelessBilling) | **PUT** /networks/{networkId}/wireless/billing | Update the billing settings |
| [**updateNetworkWirelessBluetoothSettings()**](WirelessApi.md#updateNetworkWirelessBluetoothSettings) | **PUT** /networks/{networkId}/wireless/bluetooth/settings | Update the Bluetooth settings for a network |
| [**updateNetworkWirelessElectronicShelfLabel()**](WirelessApi.md#updateNetworkWirelessElectronicShelfLabel) | **PUT** /networks/{networkId}/wireless/electronicShelfLabel | Update the ESL settings of a wireless network |
| [**updateNetworkWirelessEthernetPortsProfile()**](WirelessApi.md#updateNetworkWirelessEthernetPortsProfile) | **PUT** /networks/{networkId}/wireless/ethernet/ports/profiles/{profileId} | Update the AP port profile by ID for this network |
| [**updateNetworkWirelessRfProfile()**](WirelessApi.md#updateNetworkWirelessRfProfile) | **PUT** /networks/{networkId}/wireless/rfProfiles/{rfProfileId} | Updates specified RF profile for this network |
| [**updateNetworkWirelessSettings()**](WirelessApi.md#updateNetworkWirelessSettings) | **PUT** /networks/{networkId}/wireless/settings | Update the wireless settings for a network |
| [**updateNetworkWirelessSsid()**](WirelessApi.md#updateNetworkWirelessSsid) | **PUT** /networks/{networkId}/wireless/ssids/{number} | Update the attributes of an MR SSID |
| [**updateNetworkWirelessSsidBonjourForwarding()**](WirelessApi.md#updateNetworkWirelessSsidBonjourForwarding) | **PUT** /networks/{networkId}/wireless/ssids/{number}/bonjourForwarding | Update the bonjour forwarding setting and rules for the SSID |
| [**updateNetworkWirelessSsidDeviceTypeGroupPolicies()**](WirelessApi.md#updateNetworkWirelessSsidDeviceTypeGroupPolicies) | **PUT** /networks/{networkId}/wireless/ssids/{number}/deviceTypeGroupPolicies | Update the device type group policies for the SSID |
| [**updateNetworkWirelessSsidEapOverride()**](WirelessApi.md#updateNetworkWirelessSsidEapOverride) | **PUT** /networks/{networkId}/wireless/ssids/{number}/eapOverride | Update the EAP overridden parameters for an SSID. |
| [**updateNetworkWirelessSsidFirewallL3FirewallRules()**](WirelessApi.md#updateNetworkWirelessSsidFirewallL3FirewallRules) | **PUT** /networks/{networkId}/wireless/ssids/{number}/firewall/l3FirewallRules | Update the L3 firewall rules of an SSID on an MR network |
| [**updateNetworkWirelessSsidFirewallL7FirewallRules()**](WirelessApi.md#updateNetworkWirelessSsidFirewallL7FirewallRules) | **PUT** /networks/{networkId}/wireless/ssids/{number}/firewall/l7FirewallRules | Update the L7 firewall rules of an SSID on an MR network |
| [**updateNetworkWirelessSsidHotspot20()**](WirelessApi.md#updateNetworkWirelessSsidHotspot20) | **PUT** /networks/{networkId}/wireless/ssids/{number}/hotspot20 | Update the Hotspot 2.0 settings of an SSID |
| [**updateNetworkWirelessSsidIdentityPsk()**](WirelessApi.md#updateNetworkWirelessSsidIdentityPsk) | **PUT** /networks/{networkId}/wireless/ssids/{number}/identityPsks/{identityPskId} | Update an Identity PSK |
| [**updateNetworkWirelessSsidSchedules()**](WirelessApi.md#updateNetworkWirelessSsidSchedules) | **PUT** /networks/{networkId}/wireless/ssids/{number}/schedules | Update the outage schedule for the SSID |
| [**updateNetworkWirelessSsidSplashSettings()**](WirelessApi.md#updateNetworkWirelessSsidSplashSettings) | **PUT** /networks/{networkId}/wireless/ssids/{number}/splash/settings | Modify the splash page settings for the given SSID |
| [**updateNetworkWirelessSsidTrafficShapingRules()**](WirelessApi.md#updateNetworkWirelessSsidTrafficShapingRules) | **PUT** /networks/{networkId}/wireless/ssids/{number}/trafficShaping/rules | Update the traffic shaping rules for an SSID on an MR network. |
| [**updateNetworkWirelessSsidVpn()**](WirelessApi.md#updateNetworkWirelessSsidVpn) | **PUT** /networks/{networkId}/wireless/ssids/{number}/vpn | Update the VPN settings for the SSID |
| [**updateOrganizationWirelessSsidsFirewallIsolationAllowlistEntry()**](WirelessApi.md#updateOrganizationWirelessSsidsFirewallIsolationAllowlistEntry) | **PUT** /organizations/{organizationId}/wireless/ssids/firewall/isolation/allowlist/entries/{entryId} | Update isolation allow list MAC entry info |


## `assignNetworkWirelessEthernetPortsProfiles()`

```php
assignNetworkWirelessEthernetPortsProfiles($network_id, $assign_network_wireless_ethernet_ports_profiles_request): \Meraki\Model\AssignNetworkWirelessEthernetPortsProfiles201Response
```

Assign AP port profile to list of APs

Assign AP port profile to list of APs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$assign_network_wireless_ethernet_ports_profiles_request = new \Meraki\Model\AssignNetworkWirelessEthernetPortsProfilesRequest(); // \Meraki\Model\AssignNetworkWirelessEthernetPortsProfilesRequest

try {
    $result = $apiInstance->assignNetworkWirelessEthernetPortsProfiles($network_id, $assign_network_wireless_ethernet_ports_profiles_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->assignNetworkWirelessEthernetPortsProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **assign_network_wireless_ethernet_ports_profiles_request** | [**\Meraki\Model\AssignNetworkWirelessEthernetPortsProfilesRequest**](../Model/AssignNetworkWirelessEthernetPortsProfilesRequest.md)|  | |

### Return type

[**\Meraki\Model\AssignNetworkWirelessEthernetPortsProfiles201Response**](../Model/AssignNetworkWirelessEthernetPortsProfiles201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkWirelessAirMarshalRule()`

```php
createNetworkWirelessAirMarshalRule($network_id, $create_network_wireless_air_marshal_rule_request): \Meraki\Model\CreateNetworkWirelessAirMarshalRule201Response
```

Creates a new rule

Creates a new rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_wireless_air_marshal_rule_request = new \Meraki\Model\CreateNetworkWirelessAirMarshalRuleRequest(); // \Meraki\Model\CreateNetworkWirelessAirMarshalRuleRequest

try {
    $result = $apiInstance->createNetworkWirelessAirMarshalRule($network_id, $create_network_wireless_air_marshal_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->createNetworkWirelessAirMarshalRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_wireless_air_marshal_rule_request** | [**\Meraki\Model\CreateNetworkWirelessAirMarshalRuleRequest**](../Model/CreateNetworkWirelessAirMarshalRuleRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateNetworkWirelessAirMarshalRule201Response**](../Model/CreateNetworkWirelessAirMarshalRule201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkWirelessEthernetPortsProfile()`

```php
createNetworkWirelessEthernetPortsProfile($network_id, $create_network_wireless_ethernet_ports_profile_request): \Meraki\Model\GetNetworkWirelessEthernetPortsProfiles200ResponseInner
```

Create an AP port profile

Create an AP port profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_wireless_ethernet_ports_profile_request = new \Meraki\Model\CreateNetworkWirelessEthernetPortsProfileRequest(); // \Meraki\Model\CreateNetworkWirelessEthernetPortsProfileRequest

try {
    $result = $apiInstance->createNetworkWirelessEthernetPortsProfile($network_id, $create_network_wireless_ethernet_ports_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->createNetworkWirelessEthernetPortsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_wireless_ethernet_ports_profile_request** | [**\Meraki\Model\CreateNetworkWirelessEthernetPortsProfileRequest**](../Model/CreateNetworkWirelessEthernetPortsProfileRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkWirelessEthernetPortsProfiles200ResponseInner**](../Model/GetNetworkWirelessEthernetPortsProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkWirelessRfProfile()`

```php
createNetworkWirelessRfProfile($network_id, $create_network_wireless_rf_profile_request): \Meraki\Model\GetNetworkWirelessRfProfiles200Response
```

Creates new RF profile for this network

Creates new RF profile for this network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_wireless_rf_profile_request = new \Meraki\Model\CreateNetworkWirelessRfProfileRequest(); // \Meraki\Model\CreateNetworkWirelessRfProfileRequest

try {
    $result = $apiInstance->createNetworkWirelessRfProfile($network_id, $create_network_wireless_rf_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->createNetworkWirelessRfProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_wireless_rf_profile_request** | [**\Meraki\Model\CreateNetworkWirelessRfProfileRequest**](../Model/CreateNetworkWirelessRfProfileRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkWirelessRfProfiles200Response**](../Model/GetNetworkWirelessRfProfiles200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkWirelessSsidIdentityPsk()`

```php
createNetworkWirelessSsidIdentityPsk($network_id, $number, $create_network_wireless_ssid_identity_psk_request): \Meraki\Model\GetNetworkWirelessSsidIdentityPsks200ResponseInner
```

Create an Identity PSK

Create an Identity PSK

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$create_network_wireless_ssid_identity_psk_request = new \Meraki\Model\CreateNetworkWirelessSsidIdentityPskRequest(); // \Meraki\Model\CreateNetworkWirelessSsidIdentityPskRequest

try {
    $result = $apiInstance->createNetworkWirelessSsidIdentityPsk($network_id, $number, $create_network_wireless_ssid_identity_psk_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->createNetworkWirelessSsidIdentityPsk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **create_network_wireless_ssid_identity_psk_request** | [**\Meraki\Model\CreateNetworkWirelessSsidIdentityPskRequest**](../Model/CreateNetworkWirelessSsidIdentityPskRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidIdentityPsks200ResponseInner**](../Model/GetNetworkWirelessSsidIdentityPsks200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationWirelessSsidsFirewallIsolationAllowlistEntry()`

```php
createOrganizationWirelessSsidsFirewallIsolationAllowlistEntry($organization_id, $create_organization_wireless_ssids_firewall_isolation_allowlist_entry_request): \Meraki\Model\GetOrganizationWirelessSsidsFirewallIsolationAllowlistEntries200ResponseItemsInner
```

Create isolation allow list MAC entry for this organization

Create isolation allow list MAC entry for this organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_wireless_ssids_firewall_isolation_allowlist_entry_request = new \Meraki\Model\CreateOrganizationWirelessSsidsFirewallIsolationAllowlistEntryRequest(); // \Meraki\Model\CreateOrganizationWirelessSsidsFirewallIsolationAllowlistEntryRequest

try {
    $result = $apiInstance->createOrganizationWirelessSsidsFirewallIsolationAllowlistEntry($organization_id, $create_organization_wireless_ssids_firewall_isolation_allowlist_entry_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->createOrganizationWirelessSsidsFirewallIsolationAllowlistEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_wireless_ssids_firewall_isolation_allowlist_entry_request** | [**\Meraki\Model\CreateOrganizationWirelessSsidsFirewallIsolationAllowlistEntryRequest**](../Model/CreateOrganizationWirelessSsidsFirewallIsolationAllowlistEntryRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationWirelessSsidsFirewallIsolationAllowlistEntries200ResponseItemsInner**](../Model/GetOrganizationWirelessSsidsFirewallIsolationAllowlistEntries200ResponseItemsInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkWirelessAirMarshalRule()`

```php
deleteNetworkWirelessAirMarshalRule($network_id, $rule_id)
```

Delete an Air Marshal rule.

Delete an Air Marshal rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$rule_id = 'rule_id_example'; // string | Rule ID

try {
    $apiInstance->deleteNetworkWirelessAirMarshalRule($network_id, $rule_id);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->deleteNetworkWirelessAirMarshalRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **rule_id** | **string**| Rule ID | |

### Return type

void (empty response body)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkWirelessEthernetPortsProfile()`

```php
deleteNetworkWirelessEthernetPortsProfile($network_id, $profile_id)
```

Delete an AP port profile

Delete an AP port profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$profile_id = 'profile_id_example'; // string | Profile ID

try {
    $apiInstance->deleteNetworkWirelessEthernetPortsProfile($network_id, $profile_id);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->deleteNetworkWirelessEthernetPortsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **profile_id** | **string**| Profile ID | |

### Return type

void (empty response body)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkWirelessRfProfile()`

```php
deleteNetworkWirelessRfProfile($network_id, $rf_profile_id)
```

Delete a RF Profile

Delete a RF Profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$rf_profile_id = 'rf_profile_id_example'; // string | Rf profile ID

try {
    $apiInstance->deleteNetworkWirelessRfProfile($network_id, $rf_profile_id);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->deleteNetworkWirelessRfProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **rf_profile_id** | **string**| Rf profile ID | |

### Return type

void (empty response body)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkWirelessSsidIdentityPsk()`

```php
deleteNetworkWirelessSsidIdentityPsk($network_id, $number, $identity_psk_id)
```

Delete an Identity PSK

Delete an Identity PSK

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$identity_psk_id = 'identity_psk_id_example'; // string | Identity psk ID

try {
    $apiInstance->deleteNetworkWirelessSsidIdentityPsk($network_id, $number, $identity_psk_id);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->deleteNetworkWirelessSsidIdentityPsk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **identity_psk_id** | **string**| Identity psk ID | |

### Return type

void (empty response body)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrganizationWirelessSsidsFirewallIsolationAllowlistEntry()`

```php
deleteOrganizationWirelessSsidsFirewallIsolationAllowlistEntry($organization_id, $entry_id)
```

Destroy isolation allow list MAC entry for this organization

Destroy isolation allow list MAC entry for this organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$entry_id = 'entry_id_example'; // string | Entry ID

try {
    $apiInstance->deleteOrganizationWirelessSsidsFirewallIsolationAllowlistEntry($organization_id, $entry_id);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->deleteOrganizationWirelessSsidsFirewallIsolationAllowlistEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **entry_id** | **string**| Entry ID | |

### Return type

void (empty response body)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceWirelessBluetoothSettings()`

```php
getDeviceWirelessBluetoothSettings($serial): \Meraki\Model\GetDeviceWirelessBluetoothSettings200Response
```

Return the bluetooth settings for a wireless device

Return the bluetooth settings for a wireless device

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceWirelessBluetoothSettings($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getDeviceWirelessBluetoothSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceWirelessBluetoothSettings200Response**](../Model/GetDeviceWirelessBluetoothSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceWirelessConnectionStats()`

```php
getDeviceWirelessConnectionStats($serial, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag): \Meraki\Model\GetDeviceWirelessConnectionStats200Response
```

Aggregated connectivity info for a given AP on this network

Aggregated connectivity info for a given AP on this network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 180 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 7 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days.
$band = 'band_example'; // string | Filter results by band (either '2.4', '5' or '6'). Note that data prior to February 2020 will not have band information.
$ssid = 56; // int | Filter results by SSID
$vlan = 56; // int | Filter results by VLAN
$ap_tag = 'ap_tag_example'; // string | Filter results by AP Tag

try {
    $result = $apiInstance->getDeviceWirelessConnectionStats($serial, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getDeviceWirelessConnectionStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 180 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 7 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days. | [optional] |
| **band** | **string**| Filter results by band (either &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;). Note that data prior to February 2020 will not have band information. | [optional] |
| **ssid** | **int**| Filter results by SSID | [optional] |
| **vlan** | **int**| Filter results by VLAN | [optional] |
| **ap_tag** | **string**| Filter results by AP Tag | [optional] |

### Return type

[**\Meraki\Model\GetDeviceWirelessConnectionStats200Response**](../Model/GetDeviceWirelessConnectionStats200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceWirelessElectronicShelfLabel()`

```php
getDeviceWirelessElectronicShelfLabel($serial): \Meraki\Model\GetDeviceWirelessElectronicShelfLabel200Response
```

Return the ESL settings of a device

Return the ESL settings of a device

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceWirelessElectronicShelfLabel($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getDeviceWirelessElectronicShelfLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceWirelessElectronicShelfLabel200Response**](../Model/GetDeviceWirelessElectronicShelfLabel200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceWirelessLatencyStats()`

```php
getDeviceWirelessLatencyStats($serial, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag, $fields): object
```

Aggregated latency info for a given AP on this network

Aggregated latency info for a given AP on this network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 180 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 7 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days.
$band = 'band_example'; // string | Filter results by band (either '2.4', '5' or '6'). Note that data prior to February 2020 will not have band information.
$ssid = 56; // int | Filter results by SSID
$vlan = 56; // int | Filter results by VLAN
$ap_tag = 'ap_tag_example'; // string | Filter results by AP Tag
$fields = 'fields_example'; // string | Partial selection: If present, this call will return only the selected fields of [\"rawDistribution\", \"avg\"]. All fields will be returned by default. Selected fields must be entered as a comma separated string.

try {
    $result = $apiInstance->getDeviceWirelessLatencyStats($serial, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getDeviceWirelessLatencyStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 180 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 7 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days. | [optional] |
| **band** | **string**| Filter results by band (either &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;). Note that data prior to February 2020 will not have band information. | [optional] |
| **ssid** | **int**| Filter results by SSID | [optional] |
| **vlan** | **int**| Filter results by VLAN | [optional] |
| **ap_tag** | **string**| Filter results by AP Tag | [optional] |
| **fields** | **string**| Partial selection: If present, this call will return only the selected fields of [\&quot;rawDistribution\&quot;, \&quot;avg\&quot;]. All fields will be returned by default. Selected fields must be entered as a comma separated string. | [optional] |

### Return type

**object**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceWirelessRadioSettings()`

```php
getDeviceWirelessRadioSettings($serial): object
```

Return the manually configured radio settings overrides of a device, which take precedence over RF profiles.

Return the manually configured radio settings overrides of a device, which take precedence over RF profiles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceWirelessRadioSettings($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getDeviceWirelessRadioSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

**object**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceWirelessStatus()`

```php
getDeviceWirelessStatus($serial): \Meraki\Model\GetDeviceWirelessStatus200Response
```

Return the SSID statuses of an access point

Return the SSID statuses of an access point

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceWirelessStatus($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getDeviceWirelessStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceWirelessStatus200Response**](../Model/GetDeviceWirelessStatus200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessAirMarshal()`

```php
getNetworkWirelessAirMarshal($network_id, $t0, $timespan): object[]
```

List Air Marshal scan results from a network

List Air Marshal scan results from a network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 31 days. The default is 7 days.

try {
    $result = $apiInstance->getNetworkWirelessAirMarshal($network_id, $t0, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessAirMarshal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 31 days. The default is 7 days. | [optional] |

### Return type

**object[]**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessAlternateManagementInterface()`

```php
getNetworkWirelessAlternateManagementInterface($network_id): object
```

Return alternate management interface and devices with IP assigned

Return alternate management interface and devices with IP assigned

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkWirelessAlternateManagementInterface($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessAlternateManagementInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

**object**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessBilling()`

```php
getNetworkWirelessBilling($network_id): \Meraki\Model\GetNetworkWirelessBilling200Response
```

Return the billing settings of this network

Return the billing settings of this network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkWirelessBilling($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessBilling: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkWirelessBilling200Response**](../Model/GetNetworkWirelessBilling200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessBluetoothSettings()`

```php
getNetworkWirelessBluetoothSettings($network_id): \Meraki\Model\GetNetworkWirelessBluetoothSettings200Response
```

Return the Bluetooth settings for a network. <a href=\"https://documentation.meraki.com/MR/Bluetooth/Bluetooth_Low_Energy_(BLE)\">Bluetooth settings</a> must be enabled on the network.

Return the Bluetooth settings for a network. <a href=\"https://documentation.meraki.com/MR/Bluetooth/Bluetooth_Low_Energy_(BLE)\">Bluetooth settings</a> must be enabled on the network.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkWirelessBluetoothSettings($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessBluetoothSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkWirelessBluetoothSettings200Response**](../Model/GetNetworkWirelessBluetoothSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessChannelUtilizationHistory()`

```php
getNetworkWirelessChannelUtilizationHistory($network_id, $t0, $t1, $timespan, $resolution, $auto_resolution, $client_id, $device_serial, $ap_tag, $band): \Meraki\Model\GetNetworkWirelessChannelUtilizationHistory200ResponseInner[]
```

Return AP channel utilization over time for a device or network client

Return AP channel utilization over time for a device or network client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days.
$resolution = 56; // int | The time resolution in seconds for returned data. The valid resolutions are: 600, 1200, 3600, 14400, 86400. The default is 86400.
$auto_resolution = True; // bool | Automatically select a data resolution based on the given timespan; this overrides the value specified by the 'resolution' parameter. The default setting is false.
$client_id = 'client_id_example'; // string | Filter results by network client to return per-device, per-band AP channel utilization metrics inner joined by the queried client's connection history.
$device_serial = 'device_serial_example'; // string | Filter results by device to return AP channel utilization metrics for the queried device; either :band or :clientId must be jointly specified.
$ap_tag = 'ap_tag_example'; // string | Filter results by AP tag to return AP channel utilization metrics for devices labeled with the given tag; either :clientId or :deviceSerial must be jointly specified.
$band = 'band_example'; // string | Filter results by band (either '2.4', '5' or '6').

try {
    $result = $apiInstance->getNetworkWirelessChannelUtilizationHistory($network_id, $t0, $t1, $timespan, $resolution, $auto_resolution, $client_id, $device_serial, $ap_tag, $band);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessChannelUtilizationHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days. | [optional] |
| **resolution** | **int**| The time resolution in seconds for returned data. The valid resolutions are: 600, 1200, 3600, 14400, 86400. The default is 86400. | [optional] |
| **auto_resolution** | **bool**| Automatically select a data resolution based on the given timespan; this overrides the value specified by the &#39;resolution&#39; parameter. The default setting is false. | [optional] |
| **client_id** | **string**| Filter results by network client to return per-device, per-band AP channel utilization metrics inner joined by the queried client&#39;s connection history. | [optional] |
| **device_serial** | **string**| Filter results by device to return AP channel utilization metrics for the queried device; either :band or :clientId must be jointly specified. | [optional] |
| **ap_tag** | **string**| Filter results by AP tag to return AP channel utilization metrics for devices labeled with the given tag; either :clientId or :deviceSerial must be jointly specified. | [optional] |
| **band** | **string**| Filter results by band (either &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;). | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessChannelUtilizationHistory200ResponseInner[]**](../Model/GetNetworkWirelessChannelUtilizationHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessClientConnectionStats()`

```php
getNetworkWirelessClientConnectionStats($network_id, $client_id, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag): \Meraki\Model\GetNetworkWirelessClientConnectionStats200Response
```

Aggregated connectivity info for a given client on this network

Aggregated connectivity info for a given client on this network. Clients are identified by their MAC.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$client_id = 'client_id_example'; // string | Client ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 180 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 7 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days.
$band = 'band_example'; // string | Filter results by band (either '2.4', '5' or '6'). Note that data prior to February 2020 will not have band information.
$ssid = 56; // int | Filter results by SSID
$vlan = 56; // int | Filter results by VLAN
$ap_tag = 'ap_tag_example'; // string | Filter results by AP Tag

try {
    $result = $apiInstance->getNetworkWirelessClientConnectionStats($network_id, $client_id, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessClientConnectionStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **client_id** | **string**| Client ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 180 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 7 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days. | [optional] |
| **band** | **string**| Filter results by band (either &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;). Note that data prior to February 2020 will not have band information. | [optional] |
| **ssid** | **int**| Filter results by SSID | [optional] |
| **vlan** | **int**| Filter results by VLAN | [optional] |
| **ap_tag** | **string**| Filter results by AP Tag | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessClientConnectionStats200Response**](../Model/GetNetworkWirelessClientConnectionStats200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessClientConnectivityEvents()`

```php
getNetworkWirelessClientConnectivityEvents($network_id, $client_id, $per_page, $starting_after, $ending_before, $sort_order, $t0, $t1, $timespan, $types, $band, $ssid_number, $included_severities, $device_serial): \Meraki\Model\GetNetworkWirelessClientConnectivityEvents200ResponseInner[]
```

List the wireless connectivity events for a client within a network in the timespan.

List the wireless connectivity events for a client within a network in the timespan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$client_id = 'client_id_example'; // string | Client ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$sort_order = 'sort_order_example'; // string | Sorted order of entries. Order options are 'ascending' and 'descending'. Default is 'ascending'.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day.
$types = array('types_example'); // string[] | A list of event types to include. If not specified, events of all types will be returned. Valid types are 'assoc', 'disassoc', 'auth', 'deauth', 'dns', 'dhcp', 'roam', 'connection' and/or 'sticky'.
$band = 'band_example'; // string | Filter results by band. Valid bands are '2.4', '5' or '6'.
$ssid_number = 56; // int | Filter results by SSID. If not specified, events for all SSIDs will be returned.
$included_severities = array('included_severities_example'); // string[] | A list of severities to include. If not specified, events of all severities will be returned. Valid severities are 'good', 'info', 'warn' and/or 'bad'.
$device_serial = 'device_serial_example'; // string | Filter results by an AP's serial number.

try {
    $result = $apiInstance->getNetworkWirelessClientConnectivityEvents($network_id, $client_id, $per_page, $starting_after, $ending_before, $sort_order, $t0, $t1, $timespan, $types, $band, $ssid_number, $included_severities, $device_serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessClientConnectivityEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **client_id** | **string**| Client ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **sort_order** | **string**| Sorted order of entries. Order options are &#39;ascending&#39; and &#39;descending&#39;. Default is &#39;ascending&#39;. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. | [optional] |
| **types** | [**string[]**](../Model/string.md)| A list of event types to include. If not specified, events of all types will be returned. Valid types are &#39;assoc&#39;, &#39;disassoc&#39;, &#39;auth&#39;, &#39;deauth&#39;, &#39;dns&#39;, &#39;dhcp&#39;, &#39;roam&#39;, &#39;connection&#39; and/or &#39;sticky&#39;. | [optional] |
| **band** | **string**| Filter results by band. Valid bands are &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;. | [optional] |
| **ssid_number** | **int**| Filter results by SSID. If not specified, events for all SSIDs will be returned. | [optional] |
| **included_severities** | [**string[]**](../Model/string.md)| A list of severities to include. If not specified, events of all severities will be returned. Valid severities are &#39;good&#39;, &#39;info&#39;, &#39;warn&#39; and/or &#39;bad&#39;. | [optional] |
| **device_serial** | **string**| Filter results by an AP&#39;s serial number. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessClientConnectivityEvents200ResponseInner[]**](../Model/GetNetworkWirelessClientConnectivityEvents200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessClientCountHistory()`

```php
getNetworkWirelessClientCountHistory($network_id, $t0, $t1, $timespan, $resolution, $auto_resolution, $client_id, $device_serial, $ap_tag, $band, $ssid): \Meraki\Model\GetNetworkWirelessClientCountHistory200ResponseInner[]
```

Return wireless client counts over time for a network, device, or network client

Return wireless client counts over time for a network, device, or network client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days.
$resolution = 56; // int | The time resolution in seconds for returned data. The valid resolutions are: 300, 600, 1200, 3600, 14400, 86400. The default is 86400.
$auto_resolution = True; // bool | Automatically select a data resolution based on the given timespan; this overrides the value specified by the 'resolution' parameter. The default setting is false.
$client_id = 'client_id_example'; // string | Filter results by network client to return per-device client counts over time inner joined by the queried client's connection history.
$device_serial = 'device_serial_example'; // string | Filter results by device.
$ap_tag = 'ap_tag_example'; // string | Filter results by AP tag.
$band = 'band_example'; // string | Filter results by band (either '2.4', '5' or '6').
$ssid = 56; // int | Filter results by SSID number.

try {
    $result = $apiInstance->getNetworkWirelessClientCountHistory($network_id, $t0, $t1, $timespan, $resolution, $auto_resolution, $client_id, $device_serial, $ap_tag, $band, $ssid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessClientCountHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days. | [optional] |
| **resolution** | **int**| The time resolution in seconds for returned data. The valid resolutions are: 300, 600, 1200, 3600, 14400, 86400. The default is 86400. | [optional] |
| **auto_resolution** | **bool**| Automatically select a data resolution based on the given timespan; this overrides the value specified by the &#39;resolution&#39; parameter. The default setting is false. | [optional] |
| **client_id** | **string**| Filter results by network client to return per-device client counts over time inner joined by the queried client&#39;s connection history. | [optional] |
| **device_serial** | **string**| Filter results by device. | [optional] |
| **ap_tag** | **string**| Filter results by AP tag. | [optional] |
| **band** | **string**| Filter results by band (either &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;). | [optional] |
| **ssid** | **int**| Filter results by SSID number. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessClientCountHistory200ResponseInner[]**](../Model/GetNetworkWirelessClientCountHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessClientLatencyHistory()`

```php
getNetworkWirelessClientLatencyHistory($network_id, $client_id, $t0, $t1, $timespan, $resolution): \Meraki\Model\GetNetworkWirelessClientLatencyHistory200ResponseInner[]
```

Return the latency history for a client

Return the latency history for a client. Clients can be identified by a client key or either the MAC or IP depending on whether the network uses Track-by-IP. The latency data is from a sample of 2% of packets and is grouped into 4 traffic categories: background, best effort, video, voice. Within these categories the sampled packet counters are bucketed by latency in milliseconds.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$client_id = 'client_id_example'; // string | Client ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 791 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 791 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 791 days. The default is 1 day.
$resolution = 56; // int | The time resolution in seconds for returned data. The valid resolutions are: 86400. The default is 86400.

try {
    $result = $apiInstance->getNetworkWirelessClientLatencyHistory($network_id, $client_id, $t0, $t1, $timespan, $resolution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessClientLatencyHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **client_id** | **string**| Client ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 791 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 791 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 791 days. The default is 1 day. | [optional] |
| **resolution** | **int**| The time resolution in seconds for returned data. The valid resolutions are: 86400. The default is 86400. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessClientLatencyHistory200ResponseInner[]**](../Model/GetNetworkWirelessClientLatencyHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessClientLatencyStats()`

```php
getNetworkWirelessClientLatencyStats($network_id, $client_id, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag, $fields): object
```

Aggregated latency info for a given client on this network

Aggregated latency info for a given client on this network. Clients are identified by their MAC.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$client_id = 'client_id_example'; // string | Client ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 180 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 7 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days.
$band = 'band_example'; // string | Filter results by band (either '2.4', '5' or '6'). Note that data prior to February 2020 will not have band information.
$ssid = 56; // int | Filter results by SSID
$vlan = 56; // int | Filter results by VLAN
$ap_tag = 'ap_tag_example'; // string | Filter results by AP Tag
$fields = 'fields_example'; // string | Partial selection: If present, this call will return only the selected fields of [\"rawDistribution\", \"avg\"]. All fields will be returned by default. Selected fields must be entered as a comma separated string.

try {
    $result = $apiInstance->getNetworkWirelessClientLatencyStats($network_id, $client_id, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessClientLatencyStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **client_id** | **string**| Client ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 180 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 7 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days. | [optional] |
| **band** | **string**| Filter results by band (either &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;). Note that data prior to February 2020 will not have band information. | [optional] |
| **ssid** | **int**| Filter results by SSID | [optional] |
| **vlan** | **int**| Filter results by VLAN | [optional] |
| **ap_tag** | **string**| Filter results by AP Tag | [optional] |
| **fields** | **string**| Partial selection: If present, this call will return only the selected fields of [\&quot;rawDistribution\&quot;, \&quot;avg\&quot;]. All fields will be returned by default. Selected fields must be entered as a comma separated string. | [optional] |

### Return type

**object**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessClientsConnectionStats()`

```php
getNetworkWirelessClientsConnectionStats($network_id, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag): object[]
```

Aggregated connectivity info for this network, grouped by clients

Aggregated connectivity info for this network, grouped by clients

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 180 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 7 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days.
$band = 'band_example'; // string | Filter results by band (either '2.4', '5' or '6'). Note that data prior to February 2020 will not have band information.
$ssid = 56; // int | Filter results by SSID
$vlan = 56; // int | Filter results by VLAN
$ap_tag = 'ap_tag_example'; // string | Filter results by AP Tag

try {
    $result = $apiInstance->getNetworkWirelessClientsConnectionStats($network_id, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessClientsConnectionStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 180 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 7 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days. | [optional] |
| **band** | **string**| Filter results by band (either &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;). Note that data prior to February 2020 will not have band information. | [optional] |
| **ssid** | **int**| Filter results by SSID | [optional] |
| **vlan** | **int**| Filter results by VLAN | [optional] |
| **ap_tag** | **string**| Filter results by AP Tag | [optional] |

### Return type

**object[]**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessClientsLatencyStats()`

```php
getNetworkWirelessClientsLatencyStats($network_id, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag, $fields): object[]
```

Aggregated latency info for this network, grouped by clients

Aggregated latency info for this network, grouped by clients

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 180 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 7 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days.
$band = 'band_example'; // string | Filter results by band (either '2.4', '5' or '6'). Note that data prior to February 2020 will not have band information.
$ssid = 56; // int | Filter results by SSID
$vlan = 56; // int | Filter results by VLAN
$ap_tag = 'ap_tag_example'; // string | Filter results by AP Tag
$fields = 'fields_example'; // string | Partial selection: If present, this call will return only the selected fields of [\"rawDistribution\", \"avg\"]. All fields will be returned by default. Selected fields must be entered as a comma separated string.

try {
    $result = $apiInstance->getNetworkWirelessClientsLatencyStats($network_id, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessClientsLatencyStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 180 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 7 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days. | [optional] |
| **band** | **string**| Filter results by band (either &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;). Note that data prior to February 2020 will not have band information. | [optional] |
| **ssid** | **int**| Filter results by SSID | [optional] |
| **vlan** | **int**| Filter results by VLAN | [optional] |
| **ap_tag** | **string**| Filter results by AP Tag | [optional] |
| **fields** | **string**| Partial selection: If present, this call will return only the selected fields of [\&quot;rawDistribution\&quot;, \&quot;avg\&quot;]. All fields will be returned by default. Selected fields must be entered as a comma separated string. | [optional] |

### Return type

**object[]**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessConnectionStats()`

```php
getNetworkWirelessConnectionStats($network_id, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag): \Meraki\Model\GetNetworkWirelessConnectionStats200Response
```

Aggregated connectivity info for this network

Aggregated connectivity info for this network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 180 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 7 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days.
$band = 'band_example'; // string | Filter results by band (either '2.4', '5' or '6'). Note that data prior to February 2020 will not have band information.
$ssid = 56; // int | Filter results by SSID
$vlan = 56; // int | Filter results by VLAN
$ap_tag = 'ap_tag_example'; // string | Filter results by AP Tag

try {
    $result = $apiInstance->getNetworkWirelessConnectionStats($network_id, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessConnectionStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 180 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 7 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days. | [optional] |
| **band** | **string**| Filter results by band (either &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;). Note that data prior to February 2020 will not have band information. | [optional] |
| **ssid** | **int**| Filter results by SSID | [optional] |
| **vlan** | **int**| Filter results by VLAN | [optional] |
| **ap_tag** | **string**| Filter results by AP Tag | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessConnectionStats200Response**](../Model/GetNetworkWirelessConnectionStats200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessDataRateHistory()`

```php
getNetworkWirelessDataRateHistory($network_id, $t0, $t1, $timespan, $resolution, $auto_resolution, $client_id, $device_serial, $ap_tag, $band, $ssid): \Meraki\Model\GetNetworkWirelessDataRateHistory200ResponseInner[]
```

Return PHY data rates over time for a network, device, or network client

Return PHY data rates over time for a network, device, or network client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days.
$resolution = 56; // int | The time resolution in seconds for returned data. The valid resolutions are: 300, 600, 1200, 3600, 14400, 86400. The default is 86400.
$auto_resolution = True; // bool | Automatically select a data resolution based on the given timespan; this overrides the value specified by the 'resolution' parameter. The default setting is false.
$client_id = 'client_id_example'; // string | Filter results by network client.
$device_serial = 'device_serial_example'; // string | Filter results by device.
$ap_tag = 'ap_tag_example'; // string | Filter results by AP tag.
$band = 'band_example'; // string | Filter results by band (either '2.4', '5' or '6').
$ssid = 56; // int | Filter results by SSID number.

try {
    $result = $apiInstance->getNetworkWirelessDataRateHistory($network_id, $t0, $t1, $timespan, $resolution, $auto_resolution, $client_id, $device_serial, $ap_tag, $band, $ssid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessDataRateHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days. | [optional] |
| **resolution** | **int**| The time resolution in seconds for returned data. The valid resolutions are: 300, 600, 1200, 3600, 14400, 86400. The default is 86400. | [optional] |
| **auto_resolution** | **bool**| Automatically select a data resolution based on the given timespan; this overrides the value specified by the &#39;resolution&#39; parameter. The default setting is false. | [optional] |
| **client_id** | **string**| Filter results by network client. | [optional] |
| **device_serial** | **string**| Filter results by device. | [optional] |
| **ap_tag** | **string**| Filter results by AP tag. | [optional] |
| **band** | **string**| Filter results by band (either &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;). | [optional] |
| **ssid** | **int**| Filter results by SSID number. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessDataRateHistory200ResponseInner[]**](../Model/GetNetworkWirelessDataRateHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessDevicesConnectionStats()`

```php
getNetworkWirelessDevicesConnectionStats($network_id, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag): \Meraki\Model\GetDeviceWirelessConnectionStats200Response[]
```

Aggregated connectivity info for this network, grouped by node

Aggregated connectivity info for this network, grouped by node

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 180 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 7 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days.
$band = 'band_example'; // string | Filter results by band (either '2.4', '5' or '6'). Note that data prior to February 2020 will not have band information.
$ssid = 56; // int | Filter results by SSID
$vlan = 56; // int | Filter results by VLAN
$ap_tag = 'ap_tag_example'; // string | Filter results by AP Tag

try {
    $result = $apiInstance->getNetworkWirelessDevicesConnectionStats($network_id, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessDevicesConnectionStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 180 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 7 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days. | [optional] |
| **band** | **string**| Filter results by band (either &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;). Note that data prior to February 2020 will not have band information. | [optional] |
| **ssid** | **int**| Filter results by SSID | [optional] |
| **vlan** | **int**| Filter results by VLAN | [optional] |
| **ap_tag** | **string**| Filter results by AP Tag | [optional] |

### Return type

[**\Meraki\Model\GetDeviceWirelessConnectionStats200Response[]**](../Model/GetDeviceWirelessConnectionStats200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessDevicesLatencyStats()`

```php
getNetworkWirelessDevicesLatencyStats($network_id, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag, $fields): object[]
```

Aggregated latency info for this network, grouped by node

Aggregated latency info for this network, grouped by node

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 180 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 7 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days.
$band = 'band_example'; // string | Filter results by band (either '2.4', '5' or '6'). Note that data prior to February 2020 will not have band information.
$ssid = 56; // int | Filter results by SSID
$vlan = 56; // int | Filter results by VLAN
$ap_tag = 'ap_tag_example'; // string | Filter results by AP Tag
$fields = 'fields_example'; // string | Partial selection: If present, this call will return only the selected fields of [\"rawDistribution\", \"avg\"]. All fields will be returned by default. Selected fields must be entered as a comma separated string.

try {
    $result = $apiInstance->getNetworkWirelessDevicesLatencyStats($network_id, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessDevicesLatencyStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 180 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 7 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days. | [optional] |
| **band** | **string**| Filter results by band (either &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;). Note that data prior to February 2020 will not have band information. | [optional] |
| **ssid** | **int**| Filter results by SSID | [optional] |
| **vlan** | **int**| Filter results by VLAN | [optional] |
| **ap_tag** | **string**| Filter results by AP Tag | [optional] |
| **fields** | **string**| Partial selection: If present, this call will return only the selected fields of [\&quot;rawDistribution\&quot;, \&quot;avg\&quot;]. All fields will be returned by default. Selected fields must be entered as a comma separated string. | [optional] |

### Return type

**object[]**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessElectronicShelfLabel()`

```php
getNetworkWirelessElectronicShelfLabel($network_id): \Meraki\Model\GetNetworkWirelessElectronicShelfLabel200Response
```

Return the ESL settings of a wireless network

Return the ESL settings of a wireless network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkWirelessElectronicShelfLabel($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessElectronicShelfLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkWirelessElectronicShelfLabel200Response**](../Model/GetNetworkWirelessElectronicShelfLabel200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessElectronicShelfLabelConfiguredDevices()`

```php
getNetworkWirelessElectronicShelfLabelConfiguredDevices($network_id): \Meraki\Model\GetNetworkWirelessElectronicShelfLabel200Response[]
```

Get a list of all ESL eligible devices of a network

Get a list of all ESL eligible devices of a network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkWirelessElectronicShelfLabelConfiguredDevices($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessElectronicShelfLabelConfiguredDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkWirelessElectronicShelfLabel200Response[]**](../Model/GetNetworkWirelessElectronicShelfLabel200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessEthernetPortsProfile()`

```php
getNetworkWirelessEthernetPortsProfile($network_id, $profile_id): \Meraki\Model\GetNetworkWirelessEthernetPortsProfiles200ResponseInner
```

Show the AP port profile by ID for this network

Show the AP port profile by ID for this network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$profile_id = 'profile_id_example'; // string | Profile ID

try {
    $result = $apiInstance->getNetworkWirelessEthernetPortsProfile($network_id, $profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessEthernetPortsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **profile_id** | **string**| Profile ID | |

### Return type

[**\Meraki\Model\GetNetworkWirelessEthernetPortsProfiles200ResponseInner**](../Model/GetNetworkWirelessEthernetPortsProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessEthernetPortsProfiles()`

```php
getNetworkWirelessEthernetPortsProfiles($network_id): \Meraki\Model\GetNetworkWirelessEthernetPortsProfiles200ResponseInner[]
```

List the AP port profiles for this network

List the AP port profiles for this network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkWirelessEthernetPortsProfiles($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessEthernetPortsProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkWirelessEthernetPortsProfiles200ResponseInner[]**](../Model/GetNetworkWirelessEthernetPortsProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessFailedConnections()`

```php
getNetworkWirelessFailedConnections($network_id, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag, $serial, $client_id): \Meraki\Model\GetNetworkWirelessFailedConnections200ResponseInner[]
```

List of all failed client connection events on this network in a given time range

List of all failed client connection events on this network in a given time range

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 180 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 7 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days.
$band = 'band_example'; // string | Filter results by band (either '2.4', '5' or '6'). Note that data prior to February 2020 will not have band information.
$ssid = 56; // int | Filter results by SSID
$vlan = 56; // int | Filter results by VLAN
$ap_tag = 'ap_tag_example'; // string | Filter results by AP Tag
$serial = 'serial_example'; // string | Filter by AP
$client_id = 'client_id_example'; // string | Filter by client MAC

try {
    $result = $apiInstance->getNetworkWirelessFailedConnections($network_id, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag, $serial, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessFailedConnections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 180 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 7 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days. | [optional] |
| **band** | **string**| Filter results by band (either &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;). Note that data prior to February 2020 will not have band information. | [optional] |
| **ssid** | **int**| Filter results by SSID | [optional] |
| **vlan** | **int**| Filter results by VLAN | [optional] |
| **ap_tag** | **string**| Filter results by AP Tag | [optional] |
| **serial** | **string**| Filter by AP | [optional] |
| **client_id** | **string**| Filter by client MAC | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessFailedConnections200ResponseInner[]**](../Model/GetNetworkWirelessFailedConnections200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessLatencyHistory()`

```php
getNetworkWirelessLatencyHistory($network_id, $t0, $t1, $timespan, $resolution, $auto_resolution, $client_id, $device_serial, $ap_tag, $band, $ssid, $access_category): \Meraki\Model\GetNetworkWirelessLatencyHistory200ResponseInner[]
```

Return average wireless latency over time for a network, device, or network client

Return average wireless latency over time for a network, device, or network client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days.
$resolution = 56; // int | The time resolution in seconds for returned data. The valid resolutions are: 300, 600, 1200, 3600, 14400, 86400. The default is 86400.
$auto_resolution = True; // bool | Automatically select a data resolution based on the given timespan; this overrides the value specified by the 'resolution' parameter. The default setting is false.
$client_id = 'client_id_example'; // string | Filter results by network client.
$device_serial = 'device_serial_example'; // string | Filter results by device.
$ap_tag = 'ap_tag_example'; // string | Filter results by AP tag.
$band = 'band_example'; // string | Filter results by band (either '2.4', '5' or '6').
$ssid = 56; // int | Filter results by SSID number.
$access_category = 'access_category_example'; // string | Filter by access category.

try {
    $result = $apiInstance->getNetworkWirelessLatencyHistory($network_id, $t0, $t1, $timespan, $resolution, $auto_resolution, $client_id, $device_serial, $ap_tag, $band, $ssid, $access_category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessLatencyHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days. | [optional] |
| **resolution** | **int**| The time resolution in seconds for returned data. The valid resolutions are: 300, 600, 1200, 3600, 14400, 86400. The default is 86400. | [optional] |
| **auto_resolution** | **bool**| Automatically select a data resolution based on the given timespan; this overrides the value specified by the &#39;resolution&#39; parameter. The default setting is false. | [optional] |
| **client_id** | **string**| Filter results by network client. | [optional] |
| **device_serial** | **string**| Filter results by device. | [optional] |
| **ap_tag** | **string**| Filter results by AP tag. | [optional] |
| **band** | **string**| Filter results by band (either &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;). | [optional] |
| **ssid** | **int**| Filter results by SSID number. | [optional] |
| **access_category** | **string**| Filter by access category. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessLatencyHistory200ResponseInner[]**](../Model/GetNetworkWirelessLatencyHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessLatencyStats()`

```php
getNetworkWirelessLatencyStats($network_id, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag, $fields): object
```

Aggregated latency info for this network

Aggregated latency info for this network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 180 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 7 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days.
$band = 'band_example'; // string | Filter results by band (either '2.4', '5' or '6'). Note that data prior to February 2020 will not have band information.
$ssid = 56; // int | Filter results by SSID
$vlan = 56; // int | Filter results by VLAN
$ap_tag = 'ap_tag_example'; // string | Filter results by AP Tag
$fields = 'fields_example'; // string | Partial selection: If present, this call will return only the selected fields of [\"rawDistribution\", \"avg\"]. All fields will be returned by default. Selected fields must be entered as a comma separated string.

try {
    $result = $apiInstance->getNetworkWirelessLatencyStats($network_id, $t0, $t1, $timespan, $band, $ssid, $vlan, $ap_tag, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessLatencyStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 180 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 7 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 7 days. | [optional] |
| **band** | **string**| Filter results by band (either &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;). Note that data prior to February 2020 will not have band information. | [optional] |
| **ssid** | **int**| Filter results by SSID | [optional] |
| **vlan** | **int**| Filter results by VLAN | [optional] |
| **ap_tag** | **string**| Filter results by AP Tag | [optional] |
| **fields** | **string**| Partial selection: If present, this call will return only the selected fields of [\&quot;rawDistribution\&quot;, \&quot;avg\&quot;]. All fields will be returned by default. Selected fields must be entered as a comma separated string. | [optional] |

### Return type

**object**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessMeshStatuses()`

```php
getNetworkWirelessMeshStatuses($network_id, $per_page, $starting_after, $ending_before): \Meraki\Model\GetNetworkWirelessMeshStatuses200ResponseInner[]
```

List wireless mesh statuses for repeaters

List wireless mesh statuses for repeaters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 500. Default is 50.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getNetworkWirelessMeshStatuses($network_id, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessMeshStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 500. Default is 50. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessMeshStatuses200ResponseInner[]**](../Model/GetNetworkWirelessMeshStatuses200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessRfProfile()`

```php
getNetworkWirelessRfProfile($network_id, $rf_profile_id): \Meraki\Model\GetNetworkWirelessRfProfiles200Response
```

Return a RF profile

Return a RF profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$rf_profile_id = 'rf_profile_id_example'; // string | Rf profile ID

try {
    $result = $apiInstance->getNetworkWirelessRfProfile($network_id, $rf_profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessRfProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **rf_profile_id** | **string**| Rf profile ID | |

### Return type

[**\Meraki\Model\GetNetworkWirelessRfProfiles200Response**](../Model/GetNetworkWirelessRfProfiles200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessRfProfiles()`

```php
getNetworkWirelessRfProfiles($network_id, $include_template_profiles): \Meraki\Model\GetNetworkWirelessRfProfiles200Response
```

List RF profiles for this network

List RF profiles for this network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$include_template_profiles = True; // bool | If the network is bound to a template, this parameter controls whether or not the non-basic RF profiles defined on the template should be included in the response alongside the non-basic profiles defined on the bound network. Defaults to false.

try {
    $result = $apiInstance->getNetworkWirelessRfProfiles($network_id, $include_template_profiles);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessRfProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **include_template_profiles** | **bool**| If the network is bound to a template, this parameter controls whether or not the non-basic RF profiles defined on the template should be included in the response alongside the non-basic profiles defined on the bound network. Defaults to false. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessRfProfiles200Response**](../Model/GetNetworkWirelessRfProfiles200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSettings()`

```php
getNetworkWirelessSettings($network_id): \Meraki\Model\GetNetworkWirelessSettings200Response
```

Return the wireless settings for a network

Return the wireless settings for a network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkWirelessSettings($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSettings200Response**](../Model/GetNetworkWirelessSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSignalQualityHistory()`

```php
getNetworkWirelessSignalQualityHistory($network_id, $t0, $t1, $timespan, $resolution, $auto_resolution, $client_id, $device_serial, $ap_tag, $band, $ssid): \Meraki\Model\GetNetworkWirelessSignalQualityHistory200ResponseInner[]
```

Return signal quality (SNR/RSSI) over time for a device or network client

Return signal quality (SNR/RSSI) over time for a device or network client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days.
$resolution = 56; // int | The time resolution in seconds for returned data. The valid resolutions are: 300, 600, 1200, 3600, 14400, 86400. The default is 86400.
$auto_resolution = True; // bool | Automatically select a data resolution based on the given timespan; this overrides the value specified by the 'resolution' parameter. The default setting is false.
$client_id = 'client_id_example'; // string | Filter results by network client.
$device_serial = 'device_serial_example'; // string | Filter results by device.
$ap_tag = 'ap_tag_example'; // string | Filter results by AP tag; either :clientId or :deviceSerial must be jointly specified.
$band = 'band_example'; // string | Filter results by band (either '2.4', '5' or '6').
$ssid = 56; // int | Filter results by SSID number.

try {
    $result = $apiInstance->getNetworkWirelessSignalQualityHistory($network_id, $t0, $t1, $timespan, $resolution, $auto_resolution, $client_id, $device_serial, $ap_tag, $band, $ssid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessSignalQualityHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days. | [optional] |
| **resolution** | **int**| The time resolution in seconds for returned data. The valid resolutions are: 300, 600, 1200, 3600, 14400, 86400. The default is 86400. | [optional] |
| **auto_resolution** | **bool**| Automatically select a data resolution based on the given timespan; this overrides the value specified by the &#39;resolution&#39; parameter. The default setting is false. | [optional] |
| **client_id** | **string**| Filter results by network client. | [optional] |
| **device_serial** | **string**| Filter results by device. | [optional] |
| **ap_tag** | **string**| Filter results by AP tag; either :clientId or :deviceSerial must be jointly specified. | [optional] |
| **band** | **string**| Filter results by band (either &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;). | [optional] |
| **ssid** | **int**| Filter results by SSID number. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessSignalQualityHistory200ResponseInner[]**](../Model/GetNetworkWirelessSignalQualityHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSsid()`

```php
getNetworkWirelessSsid($network_id, $number): \Meraki\Model\GetNetworkWirelessSsids200ResponseInner
```

Return a single MR SSID

Return a single MR SSID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsid($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessSsid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsids200ResponseInner**](../Model/GetNetworkWirelessSsids200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSsidBonjourForwarding()`

```php
getNetworkWirelessSsidBonjourForwarding($network_id, $number): \Meraki\Model\GetNetworkWirelessSsidBonjourForwarding200Response
```

List the Bonjour forwarding setting and rules for the SSID

List the Bonjour forwarding setting and rules for the SSID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidBonjourForwarding($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessSsidBonjourForwarding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidBonjourForwarding200Response**](../Model/GetNetworkWirelessSsidBonjourForwarding200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSsidDeviceTypeGroupPolicies()`

```php
getNetworkWirelessSsidDeviceTypeGroupPolicies($network_id, $number): object
```

List the device type group policies for the SSID

List the device type group policies for the SSID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidDeviceTypeGroupPolicies($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessSsidDeviceTypeGroupPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

**object**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSsidEapOverride()`

```php
getNetworkWirelessSsidEapOverride($network_id, $number): \Meraki\Model\GetNetworkWirelessSsidEapOverride200Response
```

Return the EAP overridden parameters for an SSID

Return the EAP overridden parameters for an SSID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidEapOverride($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessSsidEapOverride: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidEapOverride200Response**](../Model/GetNetworkWirelessSsidEapOverride200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSsidFirewallL3FirewallRules()`

```php
getNetworkWirelessSsidFirewallL3FirewallRules($network_id, $number): \Meraki\Model\GetNetworkWirelessSsidFirewallL3FirewallRules200Response
```

Return the L3 firewall rules for an SSID on an MR network

Return the L3 firewall rules for an SSID on an MR network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidFirewallL3FirewallRules($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessSsidFirewallL3FirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidFirewallL3FirewallRules200Response**](../Model/GetNetworkWirelessSsidFirewallL3FirewallRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSsidFirewallL7FirewallRules()`

```php
getNetworkWirelessSsidFirewallL7FirewallRules($network_id, $number): \Meraki\Model\GetNetworkWirelessSsidFirewallL7FirewallRules200Response
```

Return the L7 firewall rules for an SSID on an MR network

Return the L7 firewall rules for an SSID on an MR network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidFirewallL7FirewallRules($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessSsidFirewallL7FirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidFirewallL7FirewallRules200Response**](../Model/GetNetworkWirelessSsidFirewallL7FirewallRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSsidHotspot20()`

```php
getNetworkWirelessSsidHotspot20($network_id, $number): object
```

Return the Hotspot 2.0 settings for an SSID

Return the Hotspot 2.0 settings for an SSID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidHotspot20($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessSsidHotspot20: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

**object**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSsidIdentityPsk()`

```php
getNetworkWirelessSsidIdentityPsk($network_id, $number, $identity_psk_id): \Meraki\Model\GetNetworkWirelessSsidIdentityPsks200ResponseInner
```

Return an Identity PSK

Return an Identity PSK

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$identity_psk_id = 'identity_psk_id_example'; // string | Identity psk ID

try {
    $result = $apiInstance->getNetworkWirelessSsidIdentityPsk($network_id, $number, $identity_psk_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessSsidIdentityPsk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **identity_psk_id** | **string**| Identity psk ID | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidIdentityPsks200ResponseInner**](../Model/GetNetworkWirelessSsidIdentityPsks200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSsidIdentityPsks()`

```php
getNetworkWirelessSsidIdentityPsks($network_id, $number): \Meraki\Model\GetNetworkWirelessSsidIdentityPsks200ResponseInner[]
```

List all Identity PSKs in a wireless network

List all Identity PSKs in a wireless network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidIdentityPsks($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessSsidIdentityPsks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidIdentityPsks200ResponseInner[]**](../Model/GetNetworkWirelessSsidIdentityPsks200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSsidSchedules()`

```php
getNetworkWirelessSsidSchedules($network_id, $number): \Meraki\Model\GetNetworkWirelessSsidSchedules200Response
```

List the outage schedule for the SSID

List the outage schedule for the SSID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidSchedules($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessSsidSchedules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidSchedules200Response**](../Model/GetNetworkWirelessSsidSchedules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSsidSplashSettings()`

```php
getNetworkWirelessSsidSplashSettings($network_id, $number): \Meraki\Model\GetNetworkWirelessSsidSplashSettings200Response
```

Display the splash page settings for the given SSID

Display the splash page settings for the given SSID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidSplashSettings($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessSsidSplashSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidSplashSettings200Response**](../Model/GetNetworkWirelessSsidSplashSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSsidTrafficShapingRules()`

```php
getNetworkWirelessSsidTrafficShapingRules($network_id, $number): \Meraki\Model\GetNetworkWirelessSsidTrafficShapingRules200Response
```

Display the traffic shaping settings for a SSID on an MR network

Display the traffic shaping settings for a SSID on an MR network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidTrafficShapingRules($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessSsidTrafficShapingRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidTrafficShapingRules200Response**](../Model/GetNetworkWirelessSsidTrafficShapingRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSsidVpn()`

```php
getNetworkWirelessSsidVpn($network_id, $number): object
```

List the VPN settings for the SSID.

List the VPN settings for the SSID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkWirelessSsidVpn($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessSsidVpn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

**object**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessSsids()`

```php
getNetworkWirelessSsids($network_id): \Meraki\Model\GetNetworkWirelessSsids200ResponseInner[]
```

List the MR SSIDs in a network

List the MR SSIDs in a network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkWirelessSsids($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessSsids: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsids200ResponseInner[]**](../Model/GetNetworkWirelessSsids200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWirelessUsageHistory()`

```php
getNetworkWirelessUsageHistory($network_id, $t0, $t1, $timespan, $resolution, $auto_resolution, $client_id, $device_serial, $ap_tag, $band, $ssid): \Meraki\Model\GetNetworkWirelessUsageHistory200ResponseInner[]
```

Return AP usage over time for a device or network client

Return AP usage over time for a device or network client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days.
$resolution = 56; // int | The time resolution in seconds for returned data. The valid resolutions are: 300, 600, 1200, 3600, 14400, 86400. The default is 86400.
$auto_resolution = True; // bool | Automatically select a data resolution based on the given timespan; this overrides the value specified by the 'resolution' parameter. The default setting is false.
$client_id = 'client_id_example'; // string | Filter results by network client to return per-device AP usage over time inner joined by the queried client's connection history.
$device_serial = 'device_serial_example'; // string | Filter results by device. Requires :band.
$ap_tag = 'ap_tag_example'; // string | Filter results by AP tag; either :clientId or :deviceSerial must be jointly specified.
$band = 'band_example'; // string | Filter results by band (either '2.4', '5' or '6').
$ssid = 56; // int | Filter results by SSID number.

try {
    $result = $apiInstance->getNetworkWirelessUsageHistory($network_id, $t0, $t1, $timespan, $resolution, $auto_resolution, $client_id, $device_serial, $ap_tag, $band, $ssid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getNetworkWirelessUsageHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days. | [optional] |
| **resolution** | **int**| The time resolution in seconds for returned data. The valid resolutions are: 300, 600, 1200, 3600, 14400, 86400. The default is 86400. | [optional] |
| **auto_resolution** | **bool**| Automatically select a data resolution based on the given timespan; this overrides the value specified by the &#39;resolution&#39; parameter. The default setting is false. | [optional] |
| **client_id** | **string**| Filter results by network client to return per-device AP usage over time inner joined by the queried client&#39;s connection history. | [optional] |
| **device_serial** | **string**| Filter results by device. Requires :band. | [optional] |
| **ap_tag** | **string**| Filter results by AP tag; either :clientId or :deviceSerial must be jointly specified. | [optional] |
| **band** | **string**| Filter results by band (either &#39;2.4&#39;, &#39;5&#39; or &#39;6&#39;). | [optional] |
| **ssid** | **int**| Filter results by SSID number. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessUsageHistory200ResponseInner[]**](../Model/GetNetworkWirelessUsageHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessAirMarshalRules()`

```php
getOrganizationWirelessAirMarshalRules($organization_id, $network_ids, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessAirMarshalRules200Response
```

Returns the current Air Marshal rules for this organization

Returns the current Air Marshal rules for this organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_ids = array('network_ids_example'); // string[] | (optional) The set of network IDs to include.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessAirMarshalRules($organization_id, $network_ids, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getOrganizationWirelessAirMarshalRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_ids** | [**string[]**](../Model/string.md)| (optional) The set of network IDs to include. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessAirMarshalRules200Response**](../Model/GetOrganizationWirelessAirMarshalRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessAirMarshalSettingsByNetwork()`

```php
getOrganizationWirelessAirMarshalSettingsByNetwork($organization_id, $network_ids, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessAirMarshalSettingsByNetwork200Response
```

Returns the current Air Marshal settings for this network

Returns the current Air Marshal settings for this network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_ids = array('network_ids_example'); // string[] | The network IDs to include in the result set.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessAirMarshalSettingsByNetwork($organization_id, $network_ids, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getOrganizationWirelessAirMarshalSettingsByNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_ids** | [**string[]**](../Model/string.md)| The network IDs to include in the result set. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessAirMarshalSettingsByNetwork200Response**](../Model/GetOrganizationWirelessAirMarshalSettingsByNetwork200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessClientsOverviewByDevice()`

```php
getOrganizationWirelessClientsOverviewByDevice($organization_id, $network_ids, $serials, $campus_gateway_cluster_ids, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessClientsOverviewByDevice200Response
```

List access point client count at the moment in an organization

List access point client count at the moment in an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter access points client counts by network ID. This filter uses multiple exact matches.
$serials = array('serials_example'); // string[] | Optional parameter to filter access points client counts by its serial numbers. This filter uses multiple exact matches.
$campus_gateway_cluster_ids = array('campus_gateway_cluster_ids_example'); // string[] | Optional parameter to filter access points client counts by MCG cluster IDs. This filter uses multiple exact matches.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessClientsOverviewByDevice($organization_id, $network_ids, $serials, $campus_gateway_cluster_ids, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getOrganizationWirelessClientsOverviewByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter access points client counts by network ID. This filter uses multiple exact matches. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter access points client counts by its serial numbers. This filter uses multiple exact matches. | [optional] |
| **campus_gateway_cluster_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter access points client counts by MCG cluster IDs. This filter uses multiple exact matches. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessClientsOverviewByDevice200Response**](../Model/GetOrganizationWirelessClientsOverviewByDevice200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessDevicesChannelUtilizationByDevice()`

```php
getOrganizationWirelessDevicesChannelUtilizationByDevice($organization_id, $network_ids, $serials, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan, $interval): \Meraki\Model\GetOrganizationWirelessDevicesChannelUtilizationByDevice200ResponseInner[]
```

Get average channel utilization for all bands in a network, split by AP

Get average channel utilization for all bands in a network, split by AP

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_ids = array('network_ids_example'); // string[] | Filter results by network.
$serials = array('serials_example'); // string[] | Filter results by device.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 90 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 90 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 90 days. The default is 7 days.
$interval = 56; // int | The time interval in seconds for returned data. The valid intervals are: 300, 600, 3600, 7200, 14400, 21600. The default is 3600.

try {
    $result = $apiInstance->getOrganizationWirelessDevicesChannelUtilizationByDevice($organization_id, $network_ids, $serials, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan, $interval);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getOrganizationWirelessDevicesChannelUtilizationByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_ids** | [**string[]**](../Model/string.md)| Filter results by network. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Filter results by device. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 90 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 90 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 90 days. The default is 7 days. | [optional] |
| **interval** | **int**| The time interval in seconds for returned data. The valid intervals are: 300, 600, 3600, 7200, 14400, 21600. The default is 3600. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessDevicesChannelUtilizationByDevice200ResponseInner[]**](../Model/GetOrganizationWirelessDevicesChannelUtilizationByDevice200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessDevicesChannelUtilizationByNetwork()`

```php
getOrganizationWirelessDevicesChannelUtilizationByNetwork($organization_id, $network_ids, $serials, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan, $interval): \Meraki\Model\GetOrganizationWirelessDevicesChannelUtilizationByNetwork200ResponseInner[]
```

Get average channel utilization across all bands for all networks in the organization

Get average channel utilization across all bands for all networks in the organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_ids = array('network_ids_example'); // string[] | Filter results by network.
$serials = array('serials_example'); // string[] | Filter results by device.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 90 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 90 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 90 days. The default is 7 days.
$interval = 56; // int | The time interval in seconds for returned data. The valid intervals are: 300, 600, 3600, 7200, 14400, 21600. The default is 3600.

try {
    $result = $apiInstance->getOrganizationWirelessDevicesChannelUtilizationByNetwork($organization_id, $network_ids, $serials, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan, $interval);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getOrganizationWirelessDevicesChannelUtilizationByNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_ids** | [**string[]**](../Model/string.md)| Filter results by network. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Filter results by device. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 90 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 90 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 90 days. The default is 7 days. | [optional] |
| **interval** | **int**| The time interval in seconds for returned data. The valid intervals are: 300, 600, 3600, 7200, 14400, 21600. The default is 3600. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessDevicesChannelUtilizationByNetwork200ResponseInner[]**](../Model/GetOrganizationWirelessDevicesChannelUtilizationByNetwork200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessDevicesChannelUtilizationHistoryByDeviceByInterval()`

```php
getOrganizationWirelessDevicesChannelUtilizationHistoryByDeviceByInterval($organization_id, $network_ids, $serials, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan, $interval): \Meraki\Model\GetOrganizationWirelessDevicesChannelUtilizationHistoryByDeviceByInterval200ResponseInner[]
```

Get a time-series of average channel utilization for all bands, segmented by device.

Get a time-series of average channel utilization for all bands, segmented by device.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_ids = array('network_ids_example'); // string[] | Filter results by network.
$serials = array('serials_example'); // string[] | Filter results by device.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days.
$interval = 56; // int | The time interval in seconds for returned data. The valid intervals are: 300, 600, 3600, 7200, 14400, 21600. The default is 3600.

try {
    $result = $apiInstance->getOrganizationWirelessDevicesChannelUtilizationHistoryByDeviceByInterval($organization_id, $network_ids, $serials, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan, $interval);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getOrganizationWirelessDevicesChannelUtilizationHistoryByDeviceByInterval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_ids** | [**string[]**](../Model/string.md)| Filter results by network. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Filter results by device. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days. | [optional] |
| **interval** | **int**| The time interval in seconds for returned data. The valid intervals are: 300, 600, 3600, 7200, 14400, 21600. The default is 3600. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessDevicesChannelUtilizationHistoryByDeviceByInterval200ResponseInner[]**](../Model/GetOrganizationWirelessDevicesChannelUtilizationHistoryByDeviceByInterval200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessDevicesChannelUtilizationHistoryByNetworkByInterval()`

```php
getOrganizationWirelessDevicesChannelUtilizationHistoryByNetworkByInterval($organization_id, $network_ids, $serials, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan, $interval): \Meraki\Model\GetOrganizationWirelessDevicesChannelUtilizationHistoryByNetworkByInterval200ResponseInner[]
```

Get a time-series of average channel utilization for all bands

Get a time-series of average channel utilization for all bands

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_ids = array('network_ids_example'); // string[] | Filter results by network.
$serials = array('serials_example'); // string[] | Filter results by device.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days.
$interval = 56; // int | The time interval in seconds for returned data. The valid intervals are: 300, 600, 3600, 7200, 14400, 21600. The default is 3600.

try {
    $result = $apiInstance->getOrganizationWirelessDevicesChannelUtilizationHistoryByNetworkByInterval($organization_id, $network_ids, $serials, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan, $interval);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getOrganizationWirelessDevicesChannelUtilizationHistoryByNetworkByInterval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_ids** | [**string[]**](../Model/string.md)| Filter results by network. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Filter results by device. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days. | [optional] |
| **interval** | **int**| The time interval in seconds for returned data. The valid intervals are: 300, 600, 3600, 7200, 14400, 21600. The default is 3600. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessDevicesChannelUtilizationHistoryByNetworkByInterval200ResponseInner[]**](../Model/GetOrganizationWirelessDevicesChannelUtilizationHistoryByNetworkByInterval200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessDevicesEthernetStatuses()`

```php
getOrganizationWirelessDevicesEthernetStatuses($organization_id, $per_page, $starting_after, $ending_before, $network_ids): \Meraki\Model\GetOrganizationWirelessDevicesEthernetStatuses200ResponseInner[]
```

List the most recent Ethernet link speed, duplex, aggregation and power mode and status information for wireless devices.

List the most recent Ethernet link speed, duplex, aggregation and power mode and status information for wireless devices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | A list of Meraki network IDs to filter results to contain only specified networks. E.g.: networkIds[]=N_12345678&networkIds[]=L_3456

try {
    $result = $apiInstance->getOrganizationWirelessDevicesEthernetStatuses($organization_id, $per_page, $starting_after, $ending_before, $network_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getOrganizationWirelessDevicesEthernetStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| A list of Meraki network IDs to filter results to contain only specified networks. E.g.: networkIds[]&#x3D;N_12345678&amp;networkIds[]&#x3D;L_3456 | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessDevicesEthernetStatuses200ResponseInner[]**](../Model/GetOrganizationWirelessDevicesEthernetStatuses200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessDevicesPacketLossByClient()`

```php
getOrganizationWirelessDevicesPacketLossByClient($organization_id, $network_ids, $ssids, $bands, $macs, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationWirelessDevicesPacketLossByClient200ResponseInner[]
```

Get average packet loss for the given timespan for all clients in the organization.

Get average packet loss for the given timespan for all clients in the organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_ids = array('network_ids_example'); // string[] | Filter results by network.
$ssids = array(56); // int[] | Filter results by SSID number.
$bands = array('bands_example'); // string[] | Filter results by band. Valid bands are: 2.4, 5, and 6.
$macs = array('macs_example'); // string[] | Filter results by client mac address(es).
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 90 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 90 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 5 minutes and be less than or equal to 90 days. The default is 7 days.

try {
    $result = $apiInstance->getOrganizationWirelessDevicesPacketLossByClient($organization_id, $network_ids, $ssids, $bands, $macs, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getOrganizationWirelessDevicesPacketLossByClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_ids** | [**string[]**](../Model/string.md)| Filter results by network. | [optional] |
| **ssids** | [**int[]**](../Model/int.md)| Filter results by SSID number. | [optional] |
| **bands** | [**string[]**](../Model/string.md)| Filter results by band. Valid bands are: 2.4, 5, and 6. | [optional] |
| **macs** | [**string[]**](../Model/string.md)| Filter results by client mac address(es). | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 90 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 90 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 5 minutes and be less than or equal to 90 days. The default is 7 days. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessDevicesPacketLossByClient200ResponseInner[]**](../Model/GetOrganizationWirelessDevicesPacketLossByClient200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessDevicesPacketLossByDevice()`

```php
getOrganizationWirelessDevicesPacketLossByDevice($organization_id, $network_ids, $serials, $ssids, $bands, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationWirelessDevicesPacketLossByDevice200ResponseInner[]
```

Get average packet loss for the given timespan for all devices in the organization

Get average packet loss for the given timespan for all devices in the organization. Does not include device's own traffic.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_ids = array('network_ids_example'); // string[] | Filter results by network.
$serials = array('serials_example'); // string[] | Filter results by device.
$ssids = array(56); // int[] | Filter results by SSID number.
$bands = array('bands_example'); // string[] | Filter results by band. Valid bands are: 2.4, 5, and 6.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 90 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 90 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 5 minutes and be less than or equal to 90 days. The default is 7 days.

try {
    $result = $apiInstance->getOrganizationWirelessDevicesPacketLossByDevice($organization_id, $network_ids, $serials, $ssids, $bands, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getOrganizationWirelessDevicesPacketLossByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_ids** | [**string[]**](../Model/string.md)| Filter results by network. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Filter results by device. | [optional] |
| **ssids** | [**int[]**](../Model/int.md)| Filter results by SSID number. | [optional] |
| **bands** | [**string[]**](../Model/string.md)| Filter results by band. Valid bands are: 2.4, 5, and 6. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 90 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 90 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 5 minutes and be less than or equal to 90 days. The default is 7 days. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessDevicesPacketLossByDevice200ResponseInner[]**](../Model/GetOrganizationWirelessDevicesPacketLossByDevice200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessDevicesPacketLossByNetwork()`

```php
getOrganizationWirelessDevicesPacketLossByNetwork($organization_id, $network_ids, $serials, $ssids, $bands, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationWirelessDevicesPacketLossByNetwork200ResponseInner[]
```

Get average packet loss for the given timespan for all networks in the organization.

Get average packet loss for the given timespan for all networks in the organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_ids = array('network_ids_example'); // string[] | Filter results by network.
$serials = array('serials_example'); // string[] | Filter results by device.
$ssids = array(56); // int[] | Filter results by SSID number.
$bands = array('bands_example'); // string[] | Filter results by band. Valid bands are: 2.4, 5, and 6.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 90 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 90 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 5 minutes and be less than or equal to 90 days. The default is 7 days.

try {
    $result = $apiInstance->getOrganizationWirelessDevicesPacketLossByNetwork($organization_id, $network_ids, $serials, $ssids, $bands, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getOrganizationWirelessDevicesPacketLossByNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_ids** | [**string[]**](../Model/string.md)| Filter results by network. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Filter results by device. | [optional] |
| **ssids** | [**int[]**](../Model/int.md)| Filter results by SSID number. | [optional] |
| **bands** | [**string[]**](../Model/string.md)| Filter results by band. Valid bands are: 2.4, 5, and 6. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 90 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 90 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 5 minutes and be less than or equal to 90 days. The default is 7 days. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessDevicesPacketLossByNetwork200ResponseInner[]**](../Model/GetOrganizationWirelessDevicesPacketLossByNetwork200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessDevicesPowerModeHistory()`

```php
getOrganizationWirelessDevicesPowerModeHistory($organization_id, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before, $network_ids, $serials): \Meraki\Model\GetOrganizationWirelessDevicesPowerModeHistory200Response
```

Return a record of power mode changes for wireless devices in the organization

Return a record of power mode changes for wireless devices in the organization. For each device, it provides a series of events with timestamps indicating when a power mode change occurred and the new mode. The events are ordered by timestamp.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 1 day from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 1 day after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 1 day. The default is 1 day.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 20. Default is 10.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter the result set by the included set of network IDs
$serials = array('serials_example'); // string[] | Optional parameter to filter device availabilities history by device serial numbers

try {
    $result = $apiInstance->getOrganizationWirelessDevicesPowerModeHistory($organization_id, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before, $network_ids, $serials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getOrganizationWirelessDevicesPowerModeHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 1 day from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 1 day after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 1 day. The default is 1 day. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 20. Default is 10. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the result set by the included set of network IDs | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter device availabilities history by device serial numbers | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessDevicesPowerModeHistory200Response**](../Model/GetOrganizationWirelessDevicesPowerModeHistory200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessDevicesSystemCpuLoadHistory()`

```php
getOrganizationWirelessDevicesSystemCpuLoadHistory($organization_id, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before, $network_ids, $serials): \Meraki\Model\GetOrganizationWirelessDevicesSystemCpuLoadHistory200Response
```

Return the CPU Load history for a list of wireless devices in the organization.

Return the CPU Load history for a list of wireless devices in the organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 1 day from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 1 day after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 1 day. The default is 1 day.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 20. Default is 10.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter the result set by the included set of network IDs
$serials = array('serials_example'); // string[] | Optional parameter to filter device availabilities history by device serial numbers

try {
    $result = $apiInstance->getOrganizationWirelessDevicesSystemCpuLoadHistory($organization_id, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before, $network_ids, $serials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getOrganizationWirelessDevicesSystemCpuLoadHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 1 day from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 1 day after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 1 day. The default is 1 day. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 20. Default is 10. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the result set by the included set of network IDs | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter device availabilities history by device serial numbers | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessDevicesSystemCpuLoadHistory200Response**](../Model/GetOrganizationWirelessDevicesSystemCpuLoadHistory200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessDevicesWirelessControllersByDevice()`

```php
getOrganizationWirelessDevicesWirelessControllersByDevice($organization_id, $network_ids, $serials, $controller_serials, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessDevicesWirelessControllersByDevice200Response
```

List of Catalyst access points information

List of Catalyst access points information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter access points by network ID. This filter uses multiple exact matches.
$serials = array('serials_example'); // string[] | Optional parameter to filter access points by its cloud ID. This filter uses multiple exact matches.
$controller_serials = array('controller_serials_example'); // string[] | Optional parameter to filter access points by its wireless LAN controller cloud ID. This filter uses multiple exact matches.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessDevicesWirelessControllersByDevice($organization_id, $network_ids, $serials, $controller_serials, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getOrganizationWirelessDevicesWirelessControllersByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter access points by network ID. This filter uses multiple exact matches. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter access points by its cloud ID. This filter uses multiple exact matches. | [optional] |
| **controller_serials** | [**string[]**](../Model/string.md)| Optional parameter to filter access points by its wireless LAN controller cloud ID. This filter uses multiple exact matches. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessDevicesWirelessControllersByDevice200Response**](../Model/GetOrganizationWirelessDevicesWirelessControllersByDevice200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessRfProfilesAssignmentsByDevice()`

```php
getOrganizationWirelessRfProfilesAssignmentsByDevice($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $product_types, $name, $mac, $serial, $model, $macs, $serials, $models): \Meraki\Model\GetOrganizationWirelessRfProfilesAssignmentsByDevice200ResponseInner[]
```

List the RF profiles of an organization by device

List the RF profiles of an organization by device

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter devices by network.
$product_types = array('product_types_example'); // string[] | Optional parameter to filter devices by product type. Valid types are wireless, appliance, switch, systemsManager, camera, cellularGateway, sensor, wirelessController, and secureConnect.
$name = 'name_example'; // string | Optional parameter to filter RF profiles by device name. All returned devices will have a name that contains the search term or is an exact match.
$mac = 'mac_example'; // string | Optional parameter to filter RF profiles by device MAC address. All returned devices will have a MAC address that contains the search term or is an exact match.
$serial = 'serial_example'; // string | Optional parameter to filter RF profiles by device serial number. All returned devices will have a serial number that contains the search term or is an exact match.
$model = 'model_example'; // string | Optional parameter to filter RF profiles by device model. All returned devices will have a model that contains the search term or is an exact match.
$macs = array('macs_example'); // string[] | Optional parameter to filter RF profiles by one or more device MAC addresses. All returned devices will have a MAC address that is an exact match.
$serials = array('serials_example'); // string[] | Optional parameter to filter RF profiles by one or more device serial numbers. All returned devices will have a serial number that is an exact match.
$models = array('models_example'); // string[] | Optional parameter to filter RF profiles by one or more device models. All returned devices will have a model that is an exact match.

try {
    $result = $apiInstance->getOrganizationWirelessRfProfilesAssignmentsByDevice($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $product_types, $name, $mac, $serial, $model, $macs, $serials, $models);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getOrganizationWirelessRfProfilesAssignmentsByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by network. | [optional] |
| **product_types** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by product type. Valid types are wireless, appliance, switch, systemsManager, camera, cellularGateway, sensor, wirelessController, and secureConnect. | [optional] |
| **name** | **string**| Optional parameter to filter RF profiles by device name. All returned devices will have a name that contains the search term or is an exact match. | [optional] |
| **mac** | **string**| Optional parameter to filter RF profiles by device MAC address. All returned devices will have a MAC address that contains the search term or is an exact match. | [optional] |
| **serial** | **string**| Optional parameter to filter RF profiles by device serial number. All returned devices will have a serial number that contains the search term or is an exact match. | [optional] |
| **model** | **string**| Optional parameter to filter RF profiles by device model. All returned devices will have a model that contains the search term or is an exact match. | [optional] |
| **macs** | [**string[]**](../Model/string.md)| Optional parameter to filter RF profiles by one or more device MAC addresses. All returned devices will have a MAC address that is an exact match. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter RF profiles by one or more device serial numbers. All returned devices will have a serial number that is an exact match. | [optional] |
| **models** | [**string[]**](../Model/string.md)| Optional parameter to filter RF profiles by one or more device models. All returned devices will have a model that is an exact match. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessRfProfilesAssignmentsByDevice200ResponseInner[]**](../Model/GetOrganizationWirelessRfProfilesAssignmentsByDevice200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessSsidsFirewallIsolationAllowlistEntries()`

```php
getOrganizationWirelessSsidsFirewallIsolationAllowlistEntries($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $ssids): \Meraki\Model\GetOrganizationWirelessSsidsFirewallIsolationAllowlistEntries200Response
```

List the L2 isolation allow list MAC entry in an organization

List the L2 isolation allow list MAC entry in an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | networkIds array to filter out results
$ssids = array(56); // int[] | ssids number array to filter out results

try {
    $result = $apiInstance->getOrganizationWirelessSsidsFirewallIsolationAllowlistEntries($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $ssids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getOrganizationWirelessSsidsFirewallIsolationAllowlistEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| networkIds array to filter out results | [optional] |
| **ssids** | [**int[]**](../Model/int.md)| ssids number array to filter out results | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessSsidsFirewallIsolationAllowlistEntries200Response**](../Model/GetOrganizationWirelessSsidsFirewallIsolationAllowlistEntries200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessSsidsStatusesByDevice()`

```php
getOrganizationWirelessSsidsStatusesByDevice($organization_id, $network_ids, $serials, $bssids, $hide_disabled, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessSsidsStatusesByDevice200Response
```

List status information of all BSSIDs in your organization

List status information of all BSSIDs in your organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter the result set by the included set of network IDs
$serials = array('serials_example'); // string[] | A list of serial numbers. The returned devices will be filtered to only include these serials.
$bssids = array('bssids_example'); // string[] | A list of BSSIDs. The returned devices will be filtered to only include these BSSIDs.
$hide_disabled = True; // bool | If true, the returned devices will not include disabled SSIDs. (default: true)
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 500. Default is 100.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessSsidsStatusesByDevice($organization_id, $network_ids, $serials, $bssids, $hide_disabled, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->getOrganizationWirelessSsidsStatusesByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the result set by the included set of network IDs | [optional] |
| **serials** | [**string[]**](../Model/string.md)| A list of serial numbers. The returned devices will be filtered to only include these serials. | [optional] |
| **bssids** | [**string[]**](../Model/string.md)| A list of BSSIDs. The returned devices will be filtered to only include these BSSIDs. | [optional] |
| **hide_disabled** | **bool**| If true, the returned devices will not include disabled SSIDs. (default: true) | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 500. Default is 100. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessSsidsStatusesByDevice200Response**](../Model/GetOrganizationWirelessSsidsStatusesByDevice200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recalculateOrganizationWirelessRadioAutoRfChannels()`

```php
recalculateOrganizationWirelessRadioAutoRfChannels($organization_id, $recalculate_organization_wireless_radio_auto_rf_channels_request): \Meraki\Model\RecalculateOrganizationWirelessRadioAutoRfChannels200Response
```

Recalculates automatically assigned channels for every AP within specified the specified network(s)

Recalculates automatically assigned channels for every AP within specified the specified network(s). Note: This could cause a brief loss in connectivity for wireless clients.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$recalculate_organization_wireless_radio_auto_rf_channels_request = new \Meraki\Model\RecalculateOrganizationWirelessRadioAutoRfChannelsRequest(); // \Meraki\Model\RecalculateOrganizationWirelessRadioAutoRfChannelsRequest

try {
    $result = $apiInstance->recalculateOrganizationWirelessRadioAutoRfChannels($organization_id, $recalculate_organization_wireless_radio_auto_rf_channels_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->recalculateOrganizationWirelessRadioAutoRfChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **recalculate_organization_wireless_radio_auto_rf_channels_request** | [**\Meraki\Model\RecalculateOrganizationWirelessRadioAutoRfChannelsRequest**](../Model/RecalculateOrganizationWirelessRadioAutoRfChannelsRequest.md)|  | |

### Return type

[**\Meraki\Model\RecalculateOrganizationWirelessRadioAutoRfChannels200Response**](../Model/RecalculateOrganizationWirelessRadioAutoRfChannels200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setNetworkWirelessEthernetPortsProfilesDefault()`

```php
setNetworkWirelessEthernetPortsProfilesDefault($network_id, $set_network_wireless_ethernet_ports_profiles_default_request): \Meraki\Model\SetNetworkWirelessEthernetPortsProfilesDefault200Response
```

Set the AP port profile to be default for this network

Set the AP port profile to be default for this network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$set_network_wireless_ethernet_ports_profiles_default_request = new \Meraki\Model\SetNetworkWirelessEthernetPortsProfilesDefaultRequest(); // \Meraki\Model\SetNetworkWirelessEthernetPortsProfilesDefaultRequest

try {
    $result = $apiInstance->setNetworkWirelessEthernetPortsProfilesDefault($network_id, $set_network_wireless_ethernet_ports_profiles_default_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->setNetworkWirelessEthernetPortsProfilesDefault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **set_network_wireless_ethernet_ports_profiles_default_request** | [**\Meraki\Model\SetNetworkWirelessEthernetPortsProfilesDefaultRequest**](../Model/SetNetworkWirelessEthernetPortsProfilesDefaultRequest.md)|  | |

### Return type

[**\Meraki\Model\SetNetworkWirelessEthernetPortsProfilesDefault200Response**](../Model/SetNetworkWirelessEthernetPortsProfilesDefault200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceWirelessAlternateManagementInterfaceIpv6()`

```php
updateDeviceWirelessAlternateManagementInterfaceIpv6($serial, $update_device_wireless_alternate_management_interface_ipv6_request): \Meraki\Model\UpdateDeviceWirelessAlternateManagementInterfaceIpv6200Response
```

Update alternate management interface IPv6 address

Update alternate management interface IPv6 address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_wireless_alternate_management_interface_ipv6_request = new \Meraki\Model\UpdateDeviceWirelessAlternateManagementInterfaceIpv6Request(); // \Meraki\Model\UpdateDeviceWirelessAlternateManagementInterfaceIpv6Request

try {
    $result = $apiInstance->updateDeviceWirelessAlternateManagementInterfaceIpv6($serial, $update_device_wireless_alternate_management_interface_ipv6_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->updateDeviceWirelessAlternateManagementInterfaceIpv6: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_wireless_alternate_management_interface_ipv6_request** | [**\Meraki\Model\UpdateDeviceWirelessAlternateManagementInterfaceIpv6Request**](../Model/UpdateDeviceWirelessAlternateManagementInterfaceIpv6Request.md)|  | [optional] |

### Return type

[**\Meraki\Model\UpdateDeviceWirelessAlternateManagementInterfaceIpv6200Response**](../Model/UpdateDeviceWirelessAlternateManagementInterfaceIpv6200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceWirelessBluetoothSettings()`

```php
updateDeviceWirelessBluetoothSettings($serial, $update_device_wireless_bluetooth_settings_request): \Meraki\Model\GetDeviceWirelessBluetoothSettings200Response
```

Update the bluetooth settings for a wireless device

Update the bluetooth settings for a wireless device

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_wireless_bluetooth_settings_request = new \Meraki\Model\UpdateDeviceWirelessBluetoothSettingsRequest(); // \Meraki\Model\UpdateDeviceWirelessBluetoothSettingsRequest

try {
    $result = $apiInstance->updateDeviceWirelessBluetoothSettings($serial, $update_device_wireless_bluetooth_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->updateDeviceWirelessBluetoothSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_wireless_bluetooth_settings_request** | [**\Meraki\Model\UpdateDeviceWirelessBluetoothSettingsRequest**](../Model/UpdateDeviceWirelessBluetoothSettingsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceWirelessBluetoothSettings200Response**](../Model/GetDeviceWirelessBluetoothSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceWirelessElectronicShelfLabel()`

```php
updateDeviceWirelessElectronicShelfLabel($serial, $update_device_wireless_electronic_shelf_label_request): \Meraki\Model\GetDeviceWirelessElectronicShelfLabel200Response
```

Update the ESL settings of a device

Update the ESL settings of a device

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_wireless_electronic_shelf_label_request = new \Meraki\Model\UpdateDeviceWirelessElectronicShelfLabelRequest(); // \Meraki\Model\UpdateDeviceWirelessElectronicShelfLabelRequest

try {
    $result = $apiInstance->updateDeviceWirelessElectronicShelfLabel($serial, $update_device_wireless_electronic_shelf_label_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->updateDeviceWirelessElectronicShelfLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_wireless_electronic_shelf_label_request** | [**\Meraki\Model\UpdateDeviceWirelessElectronicShelfLabelRequest**](../Model/UpdateDeviceWirelessElectronicShelfLabelRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceWirelessElectronicShelfLabel200Response**](../Model/GetDeviceWirelessElectronicShelfLabel200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceWirelessRadioSettings()`

```php
updateDeviceWirelessRadioSettings($serial, $update_device_appliance_radio_settings_request): object
```

Update the radio settings overrides of a device, which take precedence over RF profiles.

Update the radio settings overrides of a device, which take precedence over RF profiles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_appliance_radio_settings_request = new \Meraki\Model\UpdateDeviceApplianceRadioSettingsRequest(); // \Meraki\Model\UpdateDeviceApplianceRadioSettingsRequest

try {
    $result = $apiInstance->updateDeviceWirelessRadioSettings($serial, $update_device_appliance_radio_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->updateDeviceWirelessRadioSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_appliance_radio_settings_request** | [**\Meraki\Model\UpdateDeviceApplianceRadioSettingsRequest**](../Model/UpdateDeviceApplianceRadioSettingsRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessAirMarshalRule()`

```php
updateNetworkWirelessAirMarshalRule($network_id, $rule_id, $update_network_wireless_air_marshal_rule_request): \Meraki\Model\CreateNetworkWirelessAirMarshalRule201Response
```

Update a rule

Update a rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$rule_id = 'rule_id_example'; // string | Rule ID
$update_network_wireless_air_marshal_rule_request = new \Meraki\Model\UpdateNetworkWirelessAirMarshalRuleRequest(); // \Meraki\Model\UpdateNetworkWirelessAirMarshalRuleRequest

try {
    $result = $apiInstance->updateNetworkWirelessAirMarshalRule($network_id, $rule_id, $update_network_wireless_air_marshal_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->updateNetworkWirelessAirMarshalRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **rule_id** | **string**| Rule ID | |
| **update_network_wireless_air_marshal_rule_request** | [**\Meraki\Model\UpdateNetworkWirelessAirMarshalRuleRequest**](../Model/UpdateNetworkWirelessAirMarshalRuleRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\CreateNetworkWirelessAirMarshalRule201Response**](../Model/CreateNetworkWirelessAirMarshalRule201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessAirMarshalSettings()`

```php
updateNetworkWirelessAirMarshalSettings($network_id, $update_network_wireless_air_marshal_settings_request): \Meraki\Model\UpdateNetworkWirelessAirMarshalSettings200Response
```

Updates Air Marshal settings.

Updates Air Marshal settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_wireless_air_marshal_settings_request = new \Meraki\Model\UpdateNetworkWirelessAirMarshalSettingsRequest(); // \Meraki\Model\UpdateNetworkWirelessAirMarshalSettingsRequest

try {
    $result = $apiInstance->updateNetworkWirelessAirMarshalSettings($network_id, $update_network_wireless_air_marshal_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->updateNetworkWirelessAirMarshalSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_wireless_air_marshal_settings_request** | [**\Meraki\Model\UpdateNetworkWirelessAirMarshalSettingsRequest**](../Model/UpdateNetworkWirelessAirMarshalSettingsRequest.md)|  | |

### Return type

[**\Meraki\Model\UpdateNetworkWirelessAirMarshalSettings200Response**](../Model/UpdateNetworkWirelessAirMarshalSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessAlternateManagementInterface()`

```php
updateNetworkWirelessAlternateManagementInterface($network_id, $update_network_wireless_alternate_management_interface_request): object
```

Update alternate management interface and device static IP

Update alternate management interface and device static IP

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_wireless_alternate_management_interface_request = new \Meraki\Model\UpdateNetworkWirelessAlternateManagementInterfaceRequest(); // \Meraki\Model\UpdateNetworkWirelessAlternateManagementInterfaceRequest

try {
    $result = $apiInstance->updateNetworkWirelessAlternateManagementInterface($network_id, $update_network_wireless_alternate_management_interface_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->updateNetworkWirelessAlternateManagementInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_wireless_alternate_management_interface_request** | [**\Meraki\Model\UpdateNetworkWirelessAlternateManagementInterfaceRequest**](../Model/UpdateNetworkWirelessAlternateManagementInterfaceRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessBilling()`

```php
updateNetworkWirelessBilling($network_id, $update_network_wireless_billing_request): \Meraki\Model\GetNetworkWirelessBilling200Response
```

Update the billing settings

Update the billing settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_wireless_billing_request = new \Meraki\Model\UpdateNetworkWirelessBillingRequest(); // \Meraki\Model\UpdateNetworkWirelessBillingRequest

try {
    $result = $apiInstance->updateNetworkWirelessBilling($network_id, $update_network_wireless_billing_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->updateNetworkWirelessBilling: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_wireless_billing_request** | [**\Meraki\Model\UpdateNetworkWirelessBillingRequest**](../Model/UpdateNetworkWirelessBillingRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessBilling200Response**](../Model/GetNetworkWirelessBilling200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessBluetoothSettings()`

```php
updateNetworkWirelessBluetoothSettings($network_id, $update_network_wireless_bluetooth_settings_request): \Meraki\Model\GetNetworkWirelessBluetoothSettings200Response
```

Update the Bluetooth settings for a network

Update the Bluetooth settings for a network. See the docs page for <a href=\"https://documentation.meraki.com/MR/Bluetooth/Bluetooth_Low_Energy_(BLE)\">Bluetooth settings</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_wireless_bluetooth_settings_request = new \Meraki\Model\UpdateNetworkWirelessBluetoothSettingsRequest(); // \Meraki\Model\UpdateNetworkWirelessBluetoothSettingsRequest

try {
    $result = $apiInstance->updateNetworkWirelessBluetoothSettings($network_id, $update_network_wireless_bluetooth_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->updateNetworkWirelessBluetoothSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_wireless_bluetooth_settings_request** | [**\Meraki\Model\UpdateNetworkWirelessBluetoothSettingsRequest**](../Model/UpdateNetworkWirelessBluetoothSettingsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessBluetoothSettings200Response**](../Model/GetNetworkWirelessBluetoothSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessElectronicShelfLabel()`

```php
updateNetworkWirelessElectronicShelfLabel($network_id, $update_network_wireless_electronic_shelf_label_request): \Meraki\Model\GetNetworkWirelessElectronicShelfLabel200Response
```

Update the ESL settings of a wireless network

Update the ESL settings of a wireless network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_wireless_electronic_shelf_label_request = new \Meraki\Model\UpdateNetworkWirelessElectronicShelfLabelRequest(); // \Meraki\Model\UpdateNetworkWirelessElectronicShelfLabelRequest

try {
    $result = $apiInstance->updateNetworkWirelessElectronicShelfLabel($network_id, $update_network_wireless_electronic_shelf_label_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->updateNetworkWirelessElectronicShelfLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_wireless_electronic_shelf_label_request** | [**\Meraki\Model\UpdateNetworkWirelessElectronicShelfLabelRequest**](../Model/UpdateNetworkWirelessElectronicShelfLabelRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessElectronicShelfLabel200Response**](../Model/GetNetworkWirelessElectronicShelfLabel200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessEthernetPortsProfile()`

```php
updateNetworkWirelessEthernetPortsProfile($network_id, $profile_id, $update_network_wireless_ethernet_ports_profile_request): \Meraki\Model\GetNetworkWirelessEthernetPortsProfiles200ResponseInner
```

Update the AP port profile by ID for this network

Update the AP port profile by ID for this network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$profile_id = 'profile_id_example'; // string | Profile ID
$update_network_wireless_ethernet_ports_profile_request = new \Meraki\Model\UpdateNetworkWirelessEthernetPortsProfileRequest(); // \Meraki\Model\UpdateNetworkWirelessEthernetPortsProfileRequest

try {
    $result = $apiInstance->updateNetworkWirelessEthernetPortsProfile($network_id, $profile_id, $update_network_wireless_ethernet_ports_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->updateNetworkWirelessEthernetPortsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **profile_id** | **string**| Profile ID | |
| **update_network_wireless_ethernet_ports_profile_request** | [**\Meraki\Model\UpdateNetworkWirelessEthernetPortsProfileRequest**](../Model/UpdateNetworkWirelessEthernetPortsProfileRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessEthernetPortsProfiles200ResponseInner**](../Model/GetNetworkWirelessEthernetPortsProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessRfProfile()`

```php
updateNetworkWirelessRfProfile($network_id, $rf_profile_id, $update_network_wireless_rf_profile_request): \Meraki\Model\GetNetworkWirelessRfProfiles200Response
```

Updates specified RF profile for this network

Updates specified RF profile for this network. Note: built-in RF profiles can only be assigned as a default, and its attributes are immutable

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$rf_profile_id = 'rf_profile_id_example'; // string | Rf profile ID
$update_network_wireless_rf_profile_request = new \Meraki\Model\UpdateNetworkWirelessRfProfileRequest(); // \Meraki\Model\UpdateNetworkWirelessRfProfileRequest

try {
    $result = $apiInstance->updateNetworkWirelessRfProfile($network_id, $rf_profile_id, $update_network_wireless_rf_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->updateNetworkWirelessRfProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **rf_profile_id** | **string**| Rf profile ID | |
| **update_network_wireless_rf_profile_request** | [**\Meraki\Model\UpdateNetworkWirelessRfProfileRequest**](../Model/UpdateNetworkWirelessRfProfileRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessRfProfiles200Response**](../Model/GetNetworkWirelessRfProfiles200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessSettings()`

```php
updateNetworkWirelessSettings($network_id, $update_network_wireless_settings_request): \Meraki\Model\GetNetworkWirelessSettings200Response
```

Update the wireless settings for a network

Update the wireless settings for a network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_wireless_settings_request = new \Meraki\Model\UpdateNetworkWirelessSettingsRequest(); // \Meraki\Model\UpdateNetworkWirelessSettingsRequest

try {
    $result = $apiInstance->updateNetworkWirelessSettings($network_id, $update_network_wireless_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->updateNetworkWirelessSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_wireless_settings_request** | [**\Meraki\Model\UpdateNetworkWirelessSettingsRequest**](../Model/UpdateNetworkWirelessSettingsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessSettings200Response**](../Model/GetNetworkWirelessSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessSsid()`

```php
updateNetworkWirelessSsid($network_id, $number, $update_network_wireless_ssid_request): \Meraki\Model\GetNetworkWirelessSsids200ResponseInner
```

Update the attributes of an MR SSID

Update the attributes of an MR SSID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_request = new \Meraki\Model\UpdateNetworkWirelessSsidRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsid($network_id, $number, $update_network_wireless_ssid_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->updateNetworkWirelessSsid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidRequest**](../Model/UpdateNetworkWirelessSsidRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsids200ResponseInner**](../Model/GetNetworkWirelessSsids200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessSsidBonjourForwarding()`

```php
updateNetworkWirelessSsidBonjourForwarding($network_id, $number, $update_network_wireless_ssid_bonjour_forwarding_request): \Meraki\Model\GetNetworkWirelessSsidBonjourForwarding200Response
```

Update the bonjour forwarding setting and rules for the SSID

Update the bonjour forwarding setting and rules for the SSID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_bonjour_forwarding_request = new \Meraki\Model\UpdateNetworkWirelessSsidBonjourForwardingRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidBonjourForwardingRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsidBonjourForwarding($network_id, $number, $update_network_wireless_ssid_bonjour_forwarding_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->updateNetworkWirelessSsidBonjourForwarding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_bonjour_forwarding_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidBonjourForwardingRequest**](../Model/UpdateNetworkWirelessSsidBonjourForwardingRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidBonjourForwarding200Response**](../Model/GetNetworkWirelessSsidBonjourForwarding200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessSsidDeviceTypeGroupPolicies()`

```php
updateNetworkWirelessSsidDeviceTypeGroupPolicies($network_id, $number, $update_network_wireless_ssid_device_type_group_policies_request): object
```

Update the device type group policies for the SSID

Update the device type group policies for the SSID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_device_type_group_policies_request = new \Meraki\Model\UpdateNetworkWirelessSsidDeviceTypeGroupPoliciesRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidDeviceTypeGroupPoliciesRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsidDeviceTypeGroupPolicies($network_id, $number, $update_network_wireless_ssid_device_type_group_policies_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->updateNetworkWirelessSsidDeviceTypeGroupPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_device_type_group_policies_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidDeviceTypeGroupPoliciesRequest**](../Model/UpdateNetworkWirelessSsidDeviceTypeGroupPoliciesRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessSsidEapOverride()`

```php
updateNetworkWirelessSsidEapOverride($network_id, $number, $update_network_wireless_ssid_eap_override_request): \Meraki\Model\GetNetworkWirelessSsidEapOverride200Response
```

Update the EAP overridden parameters for an SSID.

Update the EAP overridden parameters for an SSID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_eap_override_request = new \Meraki\Model\UpdateNetworkWirelessSsidEapOverrideRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidEapOverrideRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsidEapOverride($network_id, $number, $update_network_wireless_ssid_eap_override_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->updateNetworkWirelessSsidEapOverride: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_eap_override_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidEapOverrideRequest**](../Model/UpdateNetworkWirelessSsidEapOverrideRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidEapOverride200Response**](../Model/GetNetworkWirelessSsidEapOverride200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessSsidFirewallL3FirewallRules()`

```php
updateNetworkWirelessSsidFirewallL3FirewallRules($network_id, $number, $update_network_wireless_ssid_firewall_l3_firewall_rules_request): \Meraki\Model\GetNetworkWirelessSsidFirewallL3FirewallRules200Response
```

Update the L3 firewall rules of an SSID on an MR network

Update the L3 firewall rules of an SSID on an MR network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_firewall_l3_firewall_rules_request = new \Meraki\Model\UpdateNetworkWirelessSsidFirewallL3FirewallRulesRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidFirewallL3FirewallRulesRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsidFirewallL3FirewallRules($network_id, $number, $update_network_wireless_ssid_firewall_l3_firewall_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->updateNetworkWirelessSsidFirewallL3FirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_firewall_l3_firewall_rules_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidFirewallL3FirewallRulesRequest**](../Model/UpdateNetworkWirelessSsidFirewallL3FirewallRulesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidFirewallL3FirewallRules200Response**](../Model/GetNetworkWirelessSsidFirewallL3FirewallRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessSsidFirewallL7FirewallRules()`

```php
updateNetworkWirelessSsidFirewallL7FirewallRules($network_id, $number, $update_network_wireless_ssid_firewall_l7_firewall_rules_request): \Meraki\Model\GetNetworkWirelessSsidFirewallL7FirewallRules200Response
```

Update the L7 firewall rules of an SSID on an MR network

Update the L7 firewall rules of an SSID on an MR network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_firewall_l7_firewall_rules_request = new \Meraki\Model\UpdateNetworkWirelessSsidFirewallL7FirewallRulesRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidFirewallL7FirewallRulesRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsidFirewallL7FirewallRules($network_id, $number, $update_network_wireless_ssid_firewall_l7_firewall_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->updateNetworkWirelessSsidFirewallL7FirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_firewall_l7_firewall_rules_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidFirewallL7FirewallRulesRequest**](../Model/UpdateNetworkWirelessSsidFirewallL7FirewallRulesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidFirewallL7FirewallRules200Response**](../Model/GetNetworkWirelessSsidFirewallL7FirewallRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessSsidHotspot20()`

```php
updateNetworkWirelessSsidHotspot20($network_id, $number, $update_network_wireless_ssid_hotspot20_request): object
```

Update the Hotspot 2.0 settings of an SSID

Update the Hotspot 2.0 settings of an SSID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_hotspot20_request = new \Meraki\Model\UpdateNetworkWirelessSsidHotspot20Request(); // \Meraki\Model\UpdateNetworkWirelessSsidHotspot20Request

try {
    $result = $apiInstance->updateNetworkWirelessSsidHotspot20($network_id, $number, $update_network_wireless_ssid_hotspot20_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->updateNetworkWirelessSsidHotspot20: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_hotspot20_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidHotspot20Request**](../Model/UpdateNetworkWirelessSsidHotspot20Request.md)|  | [optional] |

### Return type

**object**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessSsidIdentityPsk()`

```php
updateNetworkWirelessSsidIdentityPsk($network_id, $number, $identity_psk_id, $update_network_wireless_ssid_identity_psk_request): \Meraki\Model\GetNetworkWirelessSsidIdentityPsks200ResponseInner
```

Update an Identity PSK

Update an Identity PSK

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$identity_psk_id = 'identity_psk_id_example'; // string | Identity psk ID
$update_network_wireless_ssid_identity_psk_request = new \Meraki\Model\UpdateNetworkWirelessSsidIdentityPskRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidIdentityPskRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsidIdentityPsk($network_id, $number, $identity_psk_id, $update_network_wireless_ssid_identity_psk_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->updateNetworkWirelessSsidIdentityPsk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **identity_psk_id** | **string**| Identity psk ID | |
| **update_network_wireless_ssid_identity_psk_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidIdentityPskRequest**](../Model/UpdateNetworkWirelessSsidIdentityPskRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidIdentityPsks200ResponseInner**](../Model/GetNetworkWirelessSsidIdentityPsks200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessSsidSchedules()`

```php
updateNetworkWirelessSsidSchedules($network_id, $number, $update_network_wireless_ssid_schedules_request): \Meraki\Model\GetNetworkWirelessSsidSchedules200Response
```

Update the outage schedule for the SSID

Update the outage schedule for the SSID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_schedules_request = new \Meraki\Model\UpdateNetworkWirelessSsidSchedulesRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidSchedulesRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsidSchedules($network_id, $number, $update_network_wireless_ssid_schedules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->updateNetworkWirelessSsidSchedules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_schedules_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidSchedulesRequest**](../Model/UpdateNetworkWirelessSsidSchedulesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidSchedules200Response**](../Model/GetNetworkWirelessSsidSchedules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessSsidSplashSettings()`

```php
updateNetworkWirelessSsidSplashSettings($network_id, $number, $update_network_wireless_ssid_splash_settings_request): \Meraki\Model\GetNetworkWirelessSsidSplashSettings200Response
```

Modify the splash page settings for the given SSID

Modify the splash page settings for the given SSID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_splash_settings_request = new \Meraki\Model\UpdateNetworkWirelessSsidSplashSettingsRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidSplashSettingsRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsidSplashSettings($network_id, $number, $update_network_wireless_ssid_splash_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->updateNetworkWirelessSsidSplashSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_splash_settings_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidSplashSettingsRequest**](../Model/UpdateNetworkWirelessSsidSplashSettingsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidSplashSettings200Response**](../Model/GetNetworkWirelessSsidSplashSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessSsidTrafficShapingRules()`

```php
updateNetworkWirelessSsidTrafficShapingRules($network_id, $number, $update_network_wireless_ssid_traffic_shaping_rules_request): \Meraki\Model\GetNetworkWirelessSsidTrafficShapingRules200Response
```

Update the traffic shaping rules for an SSID on an MR network.

Update the traffic shaping rules for an SSID on an MR network.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_traffic_shaping_rules_request = new \Meraki\Model\UpdateNetworkWirelessSsidTrafficShapingRulesRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidTrafficShapingRulesRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsidTrafficShapingRules($network_id, $number, $update_network_wireless_ssid_traffic_shaping_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->updateNetworkWirelessSsidTrafficShapingRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_traffic_shaping_rules_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidTrafficShapingRulesRequest**](../Model/UpdateNetworkWirelessSsidTrafficShapingRulesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWirelessSsidTrafficShapingRules200Response**](../Model/GetNetworkWirelessSsidTrafficShapingRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWirelessSsidVpn()`

```php
updateNetworkWirelessSsidVpn($network_id, $number, $update_network_wireless_ssid_vpn_request): object
```

Update the VPN settings for the SSID

Update the VPN settings for the SSID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_wireless_ssid_vpn_request = new \Meraki\Model\UpdateNetworkWirelessSsidVpnRequest(); // \Meraki\Model\UpdateNetworkWirelessSsidVpnRequest

try {
    $result = $apiInstance->updateNetworkWirelessSsidVpn($network_id, $number, $update_network_wireless_ssid_vpn_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->updateNetworkWirelessSsidVpn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_wireless_ssid_vpn_request** | [**\Meraki\Model\UpdateNetworkWirelessSsidVpnRequest**](../Model/UpdateNetworkWirelessSsidVpnRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationWirelessSsidsFirewallIsolationAllowlistEntry()`

```php
updateOrganizationWirelessSsidsFirewallIsolationAllowlistEntry($organization_id, $entry_id, $update_organization_wireless_ssids_firewall_isolation_allowlist_entry_request): \Meraki\Model\GetOrganizationWirelessSsidsFirewallIsolationAllowlistEntries200ResponseItemsInner
```

Update isolation allow list MAC entry info

Update isolation allow list MAC entry info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$entry_id = 'entry_id_example'; // string | Entry ID
$update_organization_wireless_ssids_firewall_isolation_allowlist_entry_request = new \Meraki\Model\UpdateOrganizationWirelessSsidsFirewallIsolationAllowlistEntryRequest(); // \Meraki\Model\UpdateOrganizationWirelessSsidsFirewallIsolationAllowlistEntryRequest

try {
    $result = $apiInstance->updateOrganizationWirelessSsidsFirewallIsolationAllowlistEntry($organization_id, $entry_id, $update_organization_wireless_ssids_firewall_isolation_allowlist_entry_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->updateOrganizationWirelessSsidsFirewallIsolationAllowlistEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **entry_id** | **string**| Entry ID | |
| **update_organization_wireless_ssids_firewall_isolation_allowlist_entry_request** | [**\Meraki\Model\UpdateOrganizationWirelessSsidsFirewallIsolationAllowlistEntryRequest**](../Model/UpdateOrganizationWirelessSsidsFirewallIsolationAllowlistEntryRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessSsidsFirewallIsolationAllowlistEntries200ResponseItemsInner**](../Model/GetOrganizationWirelessSsidsFirewallIsolationAllowlistEntries200ResponseItemsInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
