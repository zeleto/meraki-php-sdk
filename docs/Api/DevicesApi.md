# Meraki\DevicesApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**batchNetworkFloorPlansDevicesUpdate()**](DevicesApi.md#batchNetworkFloorPlansDevicesUpdate) | **POST** /networks/{networkId}/floorPlans/devices/batchUpdate | Update floorplan assignments for a batch of devices |
| [**blinkDeviceLeds()**](DevicesApi.md#blinkDeviceLeds) | **POST** /devices/{serial}/blinkLeds | Blink the LEDs on a device |
| [**bulkUpdateOrganizationDevicesDetails()**](DevicesApi.md#bulkUpdateOrganizationDevicesDetails) | **POST** /organizations/{organizationId}/devices/details/bulkUpdate | Updating device details (currently only used for Catalyst devices) |
| [**checkinNetworkSmDevices()**](DevicesApi.md#checkinNetworkSmDevices) | **POST** /networks/{networkId}/sm/devices/checkin | Force check-in a set of devices |
| [**claimNetworkDevices()**](DevicesApi.md#claimNetworkDevices) | **POST** /networks/{networkId}/devices/claim | Claim devices into a network. (Note: for recently claimed devices, it may take a few minutes for API requests against that device to succeed) |
| [**cloneOrganizationSwitchDevices()**](DevicesApi.md#cloneOrganizationSwitchDevices) | **POST** /organizations/{organizationId}/switch/devices/clone | Clone port-level and some switch-level configuration settings from a source switch to one or more target switches |
| [**createDeviceLiveToolsArpTable()**](DevicesApi.md#createDeviceLiveToolsArpTable) | **POST** /devices/{serial}/liveTools/arpTable | Enqueue a job to perform a ARP table request for the device |
| [**createDeviceLiveToolsCableTest()**](DevicesApi.md#createDeviceLiveToolsCableTest) | **POST** /devices/{serial}/liveTools/cableTest | Enqueue a job to perform a cable test for the device on the specified ports |
| [**createDeviceLiveToolsLedsBlink()**](DevicesApi.md#createDeviceLiveToolsLedsBlink) | **POST** /devices/{serial}/liveTools/leds/blink | Enqueue a job to blink LEDs on a device |
| [**createDeviceLiveToolsPing()**](DevicesApi.md#createDeviceLiveToolsPing) | **POST** /devices/{serial}/liveTools/ping | Enqueue a job to ping a target host from the device |
| [**createDeviceLiveToolsPingDevice()**](DevicesApi.md#createDeviceLiveToolsPingDevice) | **POST** /devices/{serial}/liveTools/pingDevice | Enqueue a job to check connectivity status to the device |
| [**createDeviceLiveToolsThroughputTest()**](DevicesApi.md#createDeviceLiveToolsThroughputTest) | **POST** /devices/{serial}/liveTools/throughputTest | Enqueue a job to test a device throughput, the test will run for 10 secs to test throughput |
| [**createDeviceLiveToolsWakeOnLan()**](DevicesApi.md#createDeviceLiveToolsWakeOnLan) | **POST** /devices/{serial}/liveTools/wakeOnLan | Enqueue a job to send a Wake-on-LAN packet from the device |
| [**createOrganizationDevicesControllerMigration()**](DevicesApi.md#createOrganizationDevicesControllerMigration) | **POST** /organizations/{organizationId}/devices/controller/migrations | Migrate devices to another controller or management mode |
| [**createOrganizationInventoryDevicesSwapsBulk()**](DevicesApi.md#createOrganizationInventoryDevicesSwapsBulk) | **POST** /organizations/{organizationId}/inventory/devices/swaps/bulk | Swap the devices identified by devices.old with a devices.new, then perform the :afterAction on the devices.old. |
| [**getDevice()**](DevicesApi.md#getDevice) | **GET** /devices/{serial} | Return a single device |
| [**getDeviceCellularSims()**](DevicesApi.md#getDeviceCellularSims) | **GET** /devices/{serial}/cellular/sims | Return the SIM and APN configurations for a cellular device. |
| [**getDeviceClients()**](DevicesApi.md#getDeviceClients) | **GET** /devices/{serial}/clients | List the clients of a device, up to a maximum of a month ago |
| [**getDeviceLiveToolsArpTable()**](DevicesApi.md#getDeviceLiveToolsArpTable) | **GET** /devices/{serial}/liveTools/arpTable/{arpTableId} | Return an ARP table live tool job. |
| [**getDeviceLiveToolsCableTest()**](DevicesApi.md#getDeviceLiveToolsCableTest) | **GET** /devices/{serial}/liveTools/cableTest/{id} | Return a cable test live tool job. |
| [**getDeviceLiveToolsLedsBlink()**](DevicesApi.md#getDeviceLiveToolsLedsBlink) | **GET** /devices/{serial}/liveTools/leds/blink/{ledsBlinkId} | Return a blink LEDs job |
| [**getDeviceLiveToolsPing()**](DevicesApi.md#getDeviceLiveToolsPing) | **GET** /devices/{serial}/liveTools/ping/{id} | Return a ping job |
| [**getDeviceLiveToolsPingDevice()**](DevicesApi.md#getDeviceLiveToolsPingDevice) | **GET** /devices/{serial}/liveTools/pingDevice/{id} | Return a ping device job |
| [**getDeviceLiveToolsThroughputTest()**](DevicesApi.md#getDeviceLiveToolsThroughputTest) | **GET** /devices/{serial}/liveTools/throughputTest/{throughputTestId} | Return a throughput test job |
| [**getDeviceLiveToolsWakeOnLan()**](DevicesApi.md#getDeviceLiveToolsWakeOnLan) | **GET** /devices/{serial}/liveTools/wakeOnLan/{wakeOnLanId} | Return a Wake-on-LAN job |
| [**getDeviceLldpCdp()**](DevicesApi.md#getDeviceLldpCdp) | **GET** /devices/{serial}/lldpCdp | List LLDP and CDP information for a device |
| [**getDeviceLossAndLatencyHistory()**](DevicesApi.md#getDeviceLossAndLatencyHistory) | **GET** /devices/{serial}/lossAndLatencyHistory | Get the uplink loss percentage and latency in milliseconds, and goodput in kilobits per second for MX, MG and Z devices. |
| [**getDeviceManagementInterface()**](DevicesApi.md#getDeviceManagementInterface) | **GET** /devices/{serial}/managementInterface | Return the management interface settings for a device |
| [**getNetworkDevices()**](DevicesApi.md#getNetworkDevices) | **GET** /networks/{networkId}/devices | List the devices in a network |
| [**getNetworkSmDeviceCellularUsageHistory()**](DevicesApi.md#getNetworkSmDeviceCellularUsageHistory) | **GET** /networks/{networkId}/sm/devices/{deviceId}/cellularUsageHistory | Return the client&#39;s daily cellular data usage history |
| [**getNetworkSmDeviceCerts()**](DevicesApi.md#getNetworkSmDeviceCerts) | **GET** /networks/{networkId}/sm/devices/{deviceId}/certs | List the certs on a device |
| [**getNetworkSmDeviceConnectivity()**](DevicesApi.md#getNetworkSmDeviceConnectivity) | **GET** /networks/{networkId}/sm/devices/{deviceId}/connectivity | Returns historical connectivity data (whether a device is regularly checking in to Dashboard). |
| [**getNetworkSmDeviceDesktopLogs()**](DevicesApi.md#getNetworkSmDeviceDesktopLogs) | **GET** /networks/{networkId}/sm/devices/{deviceId}/desktopLogs | Return historical records of various Systems Manager network connection details for desktop devices. |
| [**getNetworkSmDeviceDeviceCommandLogs()**](DevicesApi.md#getNetworkSmDeviceDeviceCommandLogs) | **GET** /networks/{networkId}/sm/devices/{deviceId}/deviceCommandLogs | Return historical records of commands sent to Systems Manager devices |
| [**getNetworkSmDeviceDeviceProfiles()**](DevicesApi.md#getNetworkSmDeviceDeviceProfiles) | **GET** /networks/{networkId}/sm/devices/{deviceId}/deviceProfiles | Get the installed profiles associated with a device |
| [**getNetworkSmDeviceNetworkAdapters()**](DevicesApi.md#getNetworkSmDeviceNetworkAdapters) | **GET** /networks/{networkId}/sm/devices/{deviceId}/networkAdapters | List the network adapters of a device |
| [**getNetworkSmDevicePerformanceHistory()**](DevicesApi.md#getNetworkSmDevicePerformanceHistory) | **GET** /networks/{networkId}/sm/devices/{deviceId}/performanceHistory | Return historical records of various Systems Manager client metrics for desktop devices. |
| [**getNetworkSmDeviceRestrictions()**](DevicesApi.md#getNetworkSmDeviceRestrictions) | **GET** /networks/{networkId}/sm/devices/{deviceId}/restrictions | List the restrictions on a device |
| [**getNetworkSmDeviceSecurityCenters()**](DevicesApi.md#getNetworkSmDeviceSecurityCenters) | **GET** /networks/{networkId}/sm/devices/{deviceId}/securityCenters | List the security centers on a device |
| [**getNetworkSmDeviceSoftwares()**](DevicesApi.md#getNetworkSmDeviceSoftwares) | **GET** /networks/{networkId}/sm/devices/{deviceId}/softwares | Get a list of softwares associated with a device |
| [**getNetworkSmDeviceWlanLists()**](DevicesApi.md#getNetworkSmDeviceWlanLists) | **GET** /networks/{networkId}/sm/devices/{deviceId}/wlanLists | List the saved SSID names on a device |
| [**getNetworkSmDevices()**](DevicesApi.md#getNetworkSmDevices) | **GET** /networks/{networkId}/sm/devices | List the devices enrolled in an SM network with various specified fields and filters |
| [**getNetworkWirelessDevicesConnectionStats()**](DevicesApi.md#getNetworkWirelessDevicesConnectionStats) | **GET** /networks/{networkId}/wireless/devices/connectionStats | Aggregated connectivity info for this network, grouped by node |
| [**getNetworkWirelessDevicesLatencyStats()**](DevicesApi.md#getNetworkWirelessDevicesLatencyStats) | **GET** /networks/{networkId}/wireless/devices/latencyStats | Aggregated latency info for this network, grouped by node |
| [**getOrganizationDevices()**](DevicesApi.md#getOrganizationDevices) | **GET** /organizations/{organizationId}/devices | List the devices in an organization that have been assigned to a network. |
| [**getOrganizationDevicesAvailabilities()**](DevicesApi.md#getOrganizationDevicesAvailabilities) | **GET** /organizations/{organizationId}/devices/availabilities | List the availability information for devices in an organization |
| [**getOrganizationDevicesAvailabilitiesChangeHistory()**](DevicesApi.md#getOrganizationDevicesAvailabilitiesChangeHistory) | **GET** /organizations/{organizationId}/devices/availabilities/changeHistory | List the availability history information for devices in an organization. |
| [**getOrganizationDevicesControllerMigrations()**](DevicesApi.md#getOrganizationDevicesControllerMigrations) | **GET** /organizations/{organizationId}/devices/controller/migrations | Retrieve device migration statuses in an organization |
| [**getOrganizationDevicesOverviewByModel()**](DevicesApi.md#getOrganizationDevicesOverviewByModel) | **GET** /organizations/{organizationId}/devices/overview/byModel | Lists the count for each device model |
| [**getOrganizationDevicesPowerModulesStatusesByDevice()**](DevicesApi.md#getOrganizationDevicesPowerModulesStatusesByDevice) | **GET** /organizations/{organizationId}/devices/powerModules/statuses/byDevice | List the most recent status information for power modules in rackmount MX and MS devices that support them |
| [**getOrganizationDevicesProvisioningStatuses()**](DevicesApi.md#getOrganizationDevicesProvisioningStatuses) | **GET** /organizations/{organizationId}/devices/provisioning/statuses | List the provisioning statuses information for devices in an organization. |
| [**getOrganizationDevicesStatuses()**](DevicesApi.md#getOrganizationDevicesStatuses) | **GET** /organizations/{organizationId}/devices/statuses | List the status of every Meraki device in the organization |
| [**getOrganizationDevicesStatusesOverview()**](DevicesApi.md#getOrganizationDevicesStatusesOverview) | **GET** /organizations/{organizationId}/devices/statuses/overview | Return an overview of current device statuses |
| [**getOrganizationDevicesSystemMemoryUsageHistoryByInterval()**](DevicesApi.md#getOrganizationDevicesSystemMemoryUsageHistoryByInterval) | **GET** /organizations/{organizationId}/devices/system/memory/usage/history/byInterval | Return the memory utilization history in kB for devices in the organization. |
| [**getOrganizationDevicesUplinksAddressesByDevice()**](DevicesApi.md#getOrganizationDevicesUplinksAddressesByDevice) | **GET** /organizations/{organizationId}/devices/uplinks/addresses/byDevice | List the current uplink addresses for devices in an organization. |
| [**getOrganizationDevicesUplinksLossAndLatency()**](DevicesApi.md#getOrganizationDevicesUplinksLossAndLatency) | **GET** /organizations/{organizationId}/devices/uplinksLossAndLatency | Return the uplink loss and latency for every MX in the organization from at latest 2 minutes ago |
| [**getOrganizationFloorPlansAutoLocateDevices()**](DevicesApi.md#getOrganizationFloorPlansAutoLocateDevices) | **GET** /organizations/{organizationId}/floorPlans/autoLocate/devices | List auto locate details for each device in your organization |
| [**getOrganizationInventoryDevice()**](DevicesApi.md#getOrganizationInventoryDevice) | **GET** /organizations/{organizationId}/inventory/devices/{serial} | Return a single device from the inventory of an organization |
| [**getOrganizationInventoryDevices()**](DevicesApi.md#getOrganizationInventoryDevices) | **GET** /organizations/{organizationId}/inventory/devices | Return the device inventory for an organization |
| [**getOrganizationInventoryDevicesSwapsBulk()**](DevicesApi.md#getOrganizationInventoryDevicesSwapsBulk) | **GET** /organizations/{organizationId}/inventory/devices/swaps/bulk/{id} | List of device swaps for a given request ID ({id}). |
| [**getOrganizationSummaryTopDevicesByUsage()**](DevicesApi.md#getOrganizationSummaryTopDevicesByUsage) | **GET** /organizations/{organizationId}/summary/top/devices/byUsage | Return metrics for organization&#39;s top 10 devices sorted by data usage over given time range |
| [**getOrganizationSummaryTopDevicesModelsByUsage()**](DevicesApi.md#getOrganizationSummaryTopDevicesModelsByUsage) | **GET** /organizations/{organizationId}/summary/top/devices/models/byUsage | Return metrics for organization&#39;s top 10 device models sorted by data usage over given time range |
| [**getOrganizationWirelessControllerDevicesInterfacesL2ByDevice()**](DevicesApi.md#getOrganizationWirelessControllerDevicesInterfacesL2ByDevice) | **GET** /organizations/{organizationId}/wirelessController/devices/interfaces/l2/byDevice | List wireless LAN controller layer 2 interfaces in an organization |
| [**getOrganizationWirelessControllerDevicesInterfacesL2StatusesChangeHistoryByDevice()**](DevicesApi.md#getOrganizationWirelessControllerDevicesInterfacesL2StatusesChangeHistoryByDevice) | **GET** /organizations/{organizationId}/wirelessController/devices/interfaces/l2/statuses/changeHistory/byDevice | List wireless LAN controller layer 2 interfaces history status in an organization |
| [**getOrganizationWirelessControllerDevicesInterfacesL2UsageHistoryByInterval()**](DevicesApi.md#getOrganizationWirelessControllerDevicesInterfacesL2UsageHistoryByInterval) | **GET** /organizations/{organizationId}/wirelessController/devices/interfaces/l2/usage/history/byInterval | List wireless LAN controller layer 2 interfaces history usage in an organization |
| [**getOrganizationWirelessControllerDevicesInterfacesL3ByDevice()**](DevicesApi.md#getOrganizationWirelessControllerDevicesInterfacesL3ByDevice) | **GET** /organizations/{organizationId}/wirelessController/devices/interfaces/l3/byDevice | List wireless LAN controller layer 3 interfaces in an organization |
| [**getOrganizationWirelessControllerDevicesInterfacesL3StatusesChangeHistoryByDevice()**](DevicesApi.md#getOrganizationWirelessControllerDevicesInterfacesL3StatusesChangeHistoryByDevice) | **GET** /organizations/{organizationId}/wirelessController/devices/interfaces/l3/statuses/changeHistory/byDevice | List wireless LAN controller layer 3 interfaces history status in an organization |
| [**getOrganizationWirelessControllerDevicesInterfacesL3UsageHistoryByInterval()**](DevicesApi.md#getOrganizationWirelessControllerDevicesInterfacesL3UsageHistoryByInterval) | **GET** /organizations/{organizationId}/wirelessController/devices/interfaces/l3/usage/history/byInterval | List wireless LAN controller layer 3 interfaces history usage in an organization |
| [**getOrganizationWirelessControllerDevicesInterfacesPacketsOverviewByDevice()**](DevicesApi.md#getOrganizationWirelessControllerDevicesInterfacesPacketsOverviewByDevice) | **GET** /organizations/{organizationId}/wirelessController/devices/interfaces/packets/overview/byDevice | Retrieve the packet counters for the interfaces of a Wireless LAN controller |
| [**getOrganizationWirelessControllerDevicesInterfacesUsageHistoryByInterval()**](DevicesApi.md#getOrganizationWirelessControllerDevicesInterfacesUsageHistoryByInterval) | **GET** /organizations/{organizationId}/wirelessController/devices/interfaces/usage/history/byInterval | Retrieve the traffic for the interfaces of a Wireless LAN controller |
| [**getOrganizationWirelessControllerDevicesRedundancyFailoverHistory()**](DevicesApi.md#getOrganizationWirelessControllerDevicesRedundancyFailoverHistory) | **GET** /organizations/{organizationId}/wirelessController/devices/redundancy/failover/history | List the failover events of wireless LAN controllers in an organization |
| [**getOrganizationWirelessControllerDevicesRedundancyStatuses()**](DevicesApi.md#getOrganizationWirelessControllerDevicesRedundancyStatuses) | **GET** /organizations/{organizationId}/wirelessController/devices/redundancy/statuses | List redundancy details of wireless LAN controllers in an organization |
| [**getOrganizationWirelessControllerDevicesSystemUtilizationHistoryByInterval()**](DevicesApi.md#getOrganizationWirelessControllerDevicesSystemUtilizationHistoryByInterval) | **GET** /organizations/{organizationId}/wirelessController/devices/system/utilization/history/byInterval | List cpu utilization data of wireless LAN controllers in an organization |
| [**getOrganizationWirelessDevicesChannelUtilizationByDevice()**](DevicesApi.md#getOrganizationWirelessDevicesChannelUtilizationByDevice) | **GET** /organizations/{organizationId}/wireless/devices/channelUtilization/byDevice | Get average channel utilization for all bands in a network, split by AP |
| [**getOrganizationWirelessDevicesChannelUtilizationByNetwork()**](DevicesApi.md#getOrganizationWirelessDevicesChannelUtilizationByNetwork) | **GET** /organizations/{organizationId}/wireless/devices/channelUtilization/byNetwork | Get average channel utilization across all bands for all networks in the organization |
| [**getOrganizationWirelessDevicesChannelUtilizationHistoryByDeviceByInterval()**](DevicesApi.md#getOrganizationWirelessDevicesChannelUtilizationHistoryByDeviceByInterval) | **GET** /organizations/{organizationId}/wireless/devices/channelUtilization/history/byDevice/byInterval | Get a time-series of average channel utilization for all bands, segmented by device. |
| [**getOrganizationWirelessDevicesChannelUtilizationHistoryByNetworkByInterval()**](DevicesApi.md#getOrganizationWirelessDevicesChannelUtilizationHistoryByNetworkByInterval) | **GET** /organizations/{organizationId}/wireless/devices/channelUtilization/history/byNetwork/byInterval | Get a time-series of average channel utilization for all bands |
| [**getOrganizationWirelessDevicesEthernetStatuses()**](DevicesApi.md#getOrganizationWirelessDevicesEthernetStatuses) | **GET** /organizations/{organizationId}/wireless/devices/ethernet/statuses | List the most recent Ethernet link speed, duplex, aggregation and power mode and status information for wireless devices. |
| [**getOrganizationWirelessDevicesPacketLossByClient()**](DevicesApi.md#getOrganizationWirelessDevicesPacketLossByClient) | **GET** /organizations/{organizationId}/wireless/devices/packetLoss/byClient | Get average packet loss for the given timespan for all clients in the organization. |
| [**getOrganizationWirelessDevicesPacketLossByDevice()**](DevicesApi.md#getOrganizationWirelessDevicesPacketLossByDevice) | **GET** /organizations/{organizationId}/wireless/devices/packetLoss/byDevice | Get average packet loss for the given timespan for all devices in the organization |
| [**getOrganizationWirelessDevicesPacketLossByNetwork()**](DevicesApi.md#getOrganizationWirelessDevicesPacketLossByNetwork) | **GET** /organizations/{organizationId}/wireless/devices/packetLoss/byNetwork | Get average packet loss for the given timespan for all networks in the organization. |
| [**getOrganizationWirelessDevicesPowerModeHistory()**](DevicesApi.md#getOrganizationWirelessDevicesPowerModeHistory) | **GET** /organizations/{organizationId}/wireless/devices/power/mode/history | Return a record of power mode changes for wireless devices in the organization |
| [**getOrganizationWirelessDevicesSystemCpuLoadHistory()**](DevicesApi.md#getOrganizationWirelessDevicesSystemCpuLoadHistory) | **GET** /organizations/{organizationId}/wireless/devices/system/cpu/load/history | Return the CPU Load history for a list of wireless devices in the organization. |
| [**getOrganizationWirelessDevicesWirelessControllersByDevice()**](DevicesApi.md#getOrganizationWirelessDevicesWirelessControllersByDevice) | **GET** /organizations/{organizationId}/wireless/devices/wirelessControllers/byDevice | List of Catalyst access points information |
| [**installNetworkSmDeviceApps()**](DevicesApi.md#installNetworkSmDeviceApps) | **POST** /networks/{networkId}/sm/devices/{deviceId}/installApps | Install applications on a device |
| [**lockNetworkSmDevices()**](DevicesApi.md#lockNetworkSmDevices) | **POST** /networks/{networkId}/sm/devices/lock | Lock a set of devices |
| [**modifyNetworkSmDevicesTags()**](DevicesApi.md#modifyNetworkSmDevicesTags) | **POST** /networks/{networkId}/sm/devices/modifyTags | Add, delete, or update the tags of a set of devices |
| [**moveNetworkSmDevices()**](DevicesApi.md#moveNetworkSmDevices) | **POST** /networks/{networkId}/sm/devices/move | Move a set of devices to a new network |
| [**rebootDevice()**](DevicesApi.md#rebootDevice) | **POST** /devices/{serial}/reboot | Reboot a device |
| [**rebootNetworkSmDevices()**](DevicesApi.md#rebootNetworkSmDevices) | **POST** /networks/{networkId}/sm/devices/reboot | Reboot a set of endpoints |
| [**refreshNetworkSmDeviceDetails()**](DevicesApi.md#refreshNetworkSmDeviceDetails) | **POST** /networks/{networkId}/sm/devices/{deviceId}/refreshDetails | Refresh the details of a device |
| [**removeNetworkDevices()**](DevicesApi.md#removeNetworkDevices) | **POST** /networks/{networkId}/devices/remove | Remove a single device |
| [**shutdownNetworkSmDevices()**](DevicesApi.md#shutdownNetworkSmDevices) | **POST** /networks/{networkId}/sm/devices/shutdown | Shutdown a set of endpoints |
| [**unenrollNetworkSmDevice()**](DevicesApi.md#unenrollNetworkSmDevice) | **POST** /networks/{networkId}/sm/devices/{deviceId}/unenroll | Unenroll a device |
| [**uninstallNetworkSmDeviceApps()**](DevicesApi.md#uninstallNetworkSmDeviceApps) | **POST** /networks/{networkId}/sm/devices/{deviceId}/uninstallApps | Uninstall applications on a device |
| [**updateDevice()**](DevicesApi.md#updateDevice) | **PUT** /devices/{serial} | Update the attributes of a device |
| [**updateDeviceCellularSims()**](DevicesApi.md#updateDeviceCellularSims) | **PUT** /devices/{serial}/cellular/sims | Updates the SIM and APN configurations for a cellular device. |
| [**updateDeviceManagementInterface()**](DevicesApi.md#updateDeviceManagementInterface) | **PUT** /devices/{serial}/managementInterface | Update the management interface settings for a device |
| [**updateNetworkSmDevicesFields()**](DevicesApi.md#updateNetworkSmDevicesFields) | **PUT** /networks/{networkId}/sm/devices/fields | Modify the fields of a device |
| [**vmxNetworkDevicesClaim()**](DevicesApi.md#vmxNetworkDevicesClaim) | **POST** /networks/{networkId}/devices/claim/vmx | Claim a vMX into a network |
| [**wipeNetworkSmDevices()**](DevicesApi.md#wipeNetworkSmDevices) | **POST** /networks/{networkId}/sm/devices/wipe | Wipe a device |


## `batchNetworkFloorPlansDevicesUpdate()`

```php
batchNetworkFloorPlansDevicesUpdate($network_id, $batch_network_floor_plans_devices_update_request): \Meraki\Model\BatchNetworkFloorPlansDevicesUpdate200Response
```

Update floorplan assignments for a batch of devices

Update floorplan assignments for a batch of devices

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$batch_network_floor_plans_devices_update_request = new \Meraki\Model\BatchNetworkFloorPlansDevicesUpdateRequest(); // \Meraki\Model\BatchNetworkFloorPlansDevicesUpdateRequest

try {
    $result = $apiInstance->batchNetworkFloorPlansDevicesUpdate($network_id, $batch_network_floor_plans_devices_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->batchNetworkFloorPlansDevicesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **batch_network_floor_plans_devices_update_request** | [**\Meraki\Model\BatchNetworkFloorPlansDevicesUpdateRequest**](../Model/BatchNetworkFloorPlansDevicesUpdateRequest.md)|  | |

### Return type

[**\Meraki\Model\BatchNetworkFloorPlansDevicesUpdate200Response**](../Model/BatchNetworkFloorPlansDevicesUpdate200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blinkDeviceLeds()`

```php
blinkDeviceLeds($serial, $blink_device_leds_request): \Meraki\Model\BlinkDeviceLeds202Response
```

Blink the LEDs on a device

Blink the LEDs on a device.  This endpoint is deprecrated in favor of \"/devices/{serial}/liveTools/leds/blink\".

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$blink_device_leds_request = new \Meraki\Model\BlinkDeviceLedsRequest(); // \Meraki\Model\BlinkDeviceLedsRequest

try {
    $result = $apiInstance->blinkDeviceLeds($serial, $blink_device_leds_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->blinkDeviceLeds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **blink_device_leds_request** | [**\Meraki\Model\BlinkDeviceLedsRequest**](../Model/BlinkDeviceLedsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\BlinkDeviceLeds202Response**](../Model/BlinkDeviceLeds202Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdateOrganizationDevicesDetails()`

```php
bulkUpdateOrganizationDevicesDetails($organization_id, $bulk_update_organization_devices_details_request): \Meraki\Model\BulkUpdateOrganizationDevicesDetails200Response
```

Updating device details (currently only used for Catalyst devices)

Updating device details (currently only used for Catalyst devices)

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$bulk_update_organization_devices_details_request = new \Meraki\Model\BulkUpdateOrganizationDevicesDetailsRequest(); // \Meraki\Model\BulkUpdateOrganizationDevicesDetailsRequest

try {
    $result = $apiInstance->bulkUpdateOrganizationDevicesDetails($organization_id, $bulk_update_organization_devices_details_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->bulkUpdateOrganizationDevicesDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **bulk_update_organization_devices_details_request** | [**\Meraki\Model\BulkUpdateOrganizationDevicesDetailsRequest**](../Model/BulkUpdateOrganizationDevicesDetailsRequest.md)|  | |

### Return type

[**\Meraki\Model\BulkUpdateOrganizationDevicesDetails200Response**](../Model/BulkUpdateOrganizationDevicesDetails200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkinNetworkSmDevices()`

```php
checkinNetworkSmDevices($network_id, $checkin_network_sm_devices_request): \Meraki\Model\CheckinNetworkSmDevices200Response
```

Force check-in a set of devices

Force check-in a set of devices

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$checkin_network_sm_devices_request = new \Meraki\Model\CheckinNetworkSmDevicesRequest(); // \Meraki\Model\CheckinNetworkSmDevicesRequest

try {
    $result = $apiInstance->checkinNetworkSmDevices($network_id, $checkin_network_sm_devices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->checkinNetworkSmDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **checkin_network_sm_devices_request** | [**\Meraki\Model\CheckinNetworkSmDevicesRequest**](../Model/CheckinNetworkSmDevicesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\CheckinNetworkSmDevices200Response**](../Model/CheckinNetworkSmDevices200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `claimNetworkDevices()`

```php
claimNetworkDevices($network_id, $claim_network_devices_request, $add_atomically): \Meraki\Model\ClaimNetworkDevices200Response
```

Claim devices into a network. (Note: for recently claimed devices, it may take a few minutes for API requests against that device to succeed)

Claim devices into a network. (Note: for recently claimed devices, it may take a few minutes for API requests against that device to succeed). This operation can be used up to ten times within a single five minute window.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$claim_network_devices_request = new \Meraki\Model\ClaimNetworkDevicesRequest(); // \Meraki\Model\ClaimNetworkDevicesRequest
$add_atomically = True; // bool | Whether to claim devices atomically. If true, all devices will be claimed or none will be claimed. Default is true.

try {
    $result = $apiInstance->claimNetworkDevices($network_id, $claim_network_devices_request, $add_atomically);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->claimNetworkDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **claim_network_devices_request** | [**\Meraki\Model\ClaimNetworkDevicesRequest**](../Model/ClaimNetworkDevicesRequest.md)|  | |
| **add_atomically** | **bool**| Whether to claim devices atomically. If true, all devices will be claimed or none will be claimed. Default is true. | [optional] |

### Return type

[**\Meraki\Model\ClaimNetworkDevices200Response**](../Model/ClaimNetworkDevices200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloneOrganizationSwitchDevices()`

```php
cloneOrganizationSwitchDevices($organization_id, $clone_organization_switch_devices_request): \Meraki\Model\CloneOrganizationSwitchDevices200Response
```

Clone port-level and some switch-level configuration settings from a source switch to one or more target switches

Clone port-level and some switch-level configuration settings from a source switch to one or more target switches. Cloned settings include: Aggregation Groups, Power Settings, Multicast Settings, MTU Configuration, STP Bridge priority, Port Mirroring

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$clone_organization_switch_devices_request = new \Meraki\Model\CloneOrganizationSwitchDevicesRequest(); // \Meraki\Model\CloneOrganizationSwitchDevicesRequest

try {
    $result = $apiInstance->cloneOrganizationSwitchDevices($organization_id, $clone_organization_switch_devices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->cloneOrganizationSwitchDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **clone_organization_switch_devices_request** | [**\Meraki\Model\CloneOrganizationSwitchDevicesRequest**](../Model/CloneOrganizationSwitchDevicesRequest.md)|  | |

### Return type

[**\Meraki\Model\CloneOrganizationSwitchDevices200Response**](../Model/CloneOrganizationSwitchDevices200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDeviceLiveToolsArpTable()`

```php
createDeviceLiveToolsArpTable($serial, $create_device_live_tools_arp_table_request): \Meraki\Model\CreateDeviceLiveToolsArpTable201Response
```

Enqueue a job to perform a ARP table request for the device

Enqueue a job to perform a ARP table request for the device. This endpoint currently supports switches. This endpoint has a sustained rate limit of one request every five seconds per device, with an allowed burst of five requests.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$create_device_live_tools_arp_table_request = new \Meraki\Model\CreateDeviceLiveToolsArpTableRequest(); // \Meraki\Model\CreateDeviceLiveToolsArpTableRequest

try {
    $result = $apiInstance->createDeviceLiveToolsArpTable($serial, $create_device_live_tools_arp_table_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->createDeviceLiveToolsArpTable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **create_device_live_tools_arp_table_request** | [**\Meraki\Model\CreateDeviceLiveToolsArpTableRequest**](../Model/CreateDeviceLiveToolsArpTableRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\CreateDeviceLiveToolsArpTable201Response**](../Model/CreateDeviceLiveToolsArpTable201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDeviceLiveToolsCableTest()`

```php
createDeviceLiveToolsCableTest($serial, $create_device_live_tools_cable_test_request): \Meraki\Model\CreateDeviceLiveToolsCableTest201Response
```

Enqueue a job to perform a cable test for the device on the specified ports

Enqueue a job to perform a cable test for the device on the specified ports. This endpoint has a sustained rate limit of one request every five seconds per device, with an allowed burst of five requests.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$create_device_live_tools_cable_test_request = new \Meraki\Model\CreateDeviceLiveToolsCableTestRequest(); // \Meraki\Model\CreateDeviceLiveToolsCableTestRequest

try {
    $result = $apiInstance->createDeviceLiveToolsCableTest($serial, $create_device_live_tools_cable_test_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->createDeviceLiveToolsCableTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **create_device_live_tools_cable_test_request** | [**\Meraki\Model\CreateDeviceLiveToolsCableTestRequest**](../Model/CreateDeviceLiveToolsCableTestRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateDeviceLiveToolsCableTest201Response**](../Model/CreateDeviceLiveToolsCableTest201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDeviceLiveToolsLedsBlink()`

```php
createDeviceLiveToolsLedsBlink($serial, $create_device_live_tools_leds_blink_request): \Meraki\Model\CreateDeviceLiveToolsLedsBlink201Response
```

Enqueue a job to blink LEDs on a device

Enqueue a job to blink LEDs on a device. This endpoint has a rate limit of one request every 10 seconds.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$create_device_live_tools_leds_blink_request = new \Meraki\Model\CreateDeviceLiveToolsLedsBlinkRequest(); // \Meraki\Model\CreateDeviceLiveToolsLedsBlinkRequest

try {
    $result = $apiInstance->createDeviceLiveToolsLedsBlink($serial, $create_device_live_tools_leds_blink_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->createDeviceLiveToolsLedsBlink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **create_device_live_tools_leds_blink_request** | [**\Meraki\Model\CreateDeviceLiveToolsLedsBlinkRequest**](../Model/CreateDeviceLiveToolsLedsBlinkRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateDeviceLiveToolsLedsBlink201Response**](../Model/CreateDeviceLiveToolsLedsBlink201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDeviceLiveToolsPing()`

```php
createDeviceLiveToolsPing($serial, $create_device_live_tools_ping_request): \Meraki\Model\CreateDeviceLiveToolsPing201Response
```

Enqueue a job to ping a target host from the device

Enqueue a job to ping a target host from the device. This endpoint has a sustained rate limit of one request every five seconds per device, with an allowed burst of five requests.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$create_device_live_tools_ping_request = new \Meraki\Model\CreateDeviceLiveToolsPingRequest(); // \Meraki\Model\CreateDeviceLiveToolsPingRequest

try {
    $result = $apiInstance->createDeviceLiveToolsPing($serial, $create_device_live_tools_ping_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->createDeviceLiveToolsPing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **create_device_live_tools_ping_request** | [**\Meraki\Model\CreateDeviceLiveToolsPingRequest**](../Model/CreateDeviceLiveToolsPingRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateDeviceLiveToolsPing201Response**](../Model/CreateDeviceLiveToolsPing201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDeviceLiveToolsPingDevice()`

```php
createDeviceLiveToolsPingDevice($serial, $create_device_live_tools_ping_device_request): \Meraki\Model\CreateDeviceLiveToolsPingDevice201Response
```

Enqueue a job to check connectivity status to the device

Enqueue a job to check connectivity status to the device. This endpoint has a sustained rate limit of one request every five seconds per device, with an allowed burst of five requests.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$create_device_live_tools_ping_device_request = new \Meraki\Model\CreateDeviceLiveToolsPingDeviceRequest(); // \Meraki\Model\CreateDeviceLiveToolsPingDeviceRequest

try {
    $result = $apiInstance->createDeviceLiveToolsPingDevice($serial, $create_device_live_tools_ping_device_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->createDeviceLiveToolsPingDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **create_device_live_tools_ping_device_request** | [**\Meraki\Model\CreateDeviceLiveToolsPingDeviceRequest**](../Model/CreateDeviceLiveToolsPingDeviceRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\CreateDeviceLiveToolsPingDevice201Response**](../Model/CreateDeviceLiveToolsPingDevice201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDeviceLiveToolsThroughputTest()`

```php
createDeviceLiveToolsThroughputTest($serial, $create_device_live_tools_arp_table_request): \Meraki\Model\CreateDeviceLiveToolsThroughputTest201Response
```

Enqueue a job to test a device throughput, the test will run for 10 secs to test throughput

Enqueue a job to test a device throughput, the test will run for 10 secs to test throughput. This endpoint has a rate limit of one request every five seconds per device.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$create_device_live_tools_arp_table_request = new \Meraki\Model\CreateDeviceLiveToolsArpTableRequest(); // \Meraki\Model\CreateDeviceLiveToolsArpTableRequest

try {
    $result = $apiInstance->createDeviceLiveToolsThroughputTest($serial, $create_device_live_tools_arp_table_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->createDeviceLiveToolsThroughputTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **create_device_live_tools_arp_table_request** | [**\Meraki\Model\CreateDeviceLiveToolsArpTableRequest**](../Model/CreateDeviceLiveToolsArpTableRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\CreateDeviceLiveToolsThroughputTest201Response**](../Model/CreateDeviceLiveToolsThroughputTest201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDeviceLiveToolsWakeOnLan()`

```php
createDeviceLiveToolsWakeOnLan($serial, $create_device_live_tools_wake_on_lan_request): \Meraki\Model\CreateDeviceLiveToolsWakeOnLan201Response
```

Enqueue a job to send a Wake-on-LAN packet from the device

Enqueue a job to send a Wake-on-LAN packet from the device. This endpoint has a sustained rate limit of one request every five seconds per device, with an allowed burst of five requests.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$create_device_live_tools_wake_on_lan_request = new \Meraki\Model\CreateDeviceLiveToolsWakeOnLanRequest(); // \Meraki\Model\CreateDeviceLiveToolsWakeOnLanRequest

try {
    $result = $apiInstance->createDeviceLiveToolsWakeOnLan($serial, $create_device_live_tools_wake_on_lan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->createDeviceLiveToolsWakeOnLan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **create_device_live_tools_wake_on_lan_request** | [**\Meraki\Model\CreateDeviceLiveToolsWakeOnLanRequest**](../Model/CreateDeviceLiveToolsWakeOnLanRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateDeviceLiveToolsWakeOnLan201Response**](../Model/CreateDeviceLiveToolsWakeOnLan201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationDevicesControllerMigration()`

```php
createOrganizationDevicesControllerMigration($organization_id, $create_organization_devices_controller_migration_request): \Meraki\Model\GetOrganizationDevicesControllerMigrations200ResponseItemsInner[]
```

Migrate devices to another controller or management mode

Migrate devices to another controller or management mode

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_devices_controller_migration_request = new \Meraki\Model\CreateOrganizationDevicesControllerMigrationRequest(); // \Meraki\Model\CreateOrganizationDevicesControllerMigrationRequest

try {
    $result = $apiInstance->createOrganizationDevicesControllerMigration($organization_id, $create_organization_devices_controller_migration_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->createOrganizationDevicesControllerMigration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_devices_controller_migration_request** | [**\Meraki\Model\CreateOrganizationDevicesControllerMigrationRequest**](../Model/CreateOrganizationDevicesControllerMigrationRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationDevicesControllerMigrations200ResponseItemsInner[]**](../Model/GetOrganizationDevicesControllerMigrations200ResponseItemsInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationInventoryDevicesSwapsBulk()`

```php
createOrganizationInventoryDevicesSwapsBulk($organization_id, $create_organization_inventory_devices_swaps_bulk_request): \Meraki\Model\CreateOrganizationInventoryDevicesSwapsBulk207Response
```

Swap the devices identified by devices.old with a devices.new, then perform the :afterAction on the devices.old.

Swap the devices identified by devices.old with a devices.new, then perform the :afterAction on the devices.old.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_inventory_devices_swaps_bulk_request = new \Meraki\Model\CreateOrganizationInventoryDevicesSwapsBulkRequest(); // \Meraki\Model\CreateOrganizationInventoryDevicesSwapsBulkRequest

try {
    $result = $apiInstance->createOrganizationInventoryDevicesSwapsBulk($organization_id, $create_organization_inventory_devices_swaps_bulk_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->createOrganizationInventoryDevicesSwapsBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_inventory_devices_swaps_bulk_request** | [**\Meraki\Model\CreateOrganizationInventoryDevicesSwapsBulkRequest**](../Model/CreateOrganizationInventoryDevicesSwapsBulkRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateOrganizationInventoryDevicesSwapsBulk207Response**](../Model/CreateOrganizationInventoryDevicesSwapsBulk207Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDevice()`

```php
getDevice($serial): \Meraki\Model\GetDevice200Response
```

Return a single device

Return a single device

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDevice($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDevice200Response**](../Model/GetDevice200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceCellularSims()`

```php
getDeviceCellularSims($serial): \Meraki\Model\GetDeviceCellularSims200Response
```

Return the SIM and APN configurations for a cellular device.

Return the SIM and APN configurations for a cellular device.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceCellularSims($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getDeviceCellularSims: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceCellularSims200Response**](../Model/GetDeviceCellularSims200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceClients()`

```php
getDeviceClients($serial, $t0, $timespan): \Meraki\Model\GetDeviceClients200ResponseInner[]
```

List the clients of a device, up to a maximum of a month ago

List the clients of a device, up to a maximum of a month ago. The usage of each client is returned in kilobytes. If the device is a switch, the switchport is returned; otherwise the switchport field is null.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 31 days. The default is 1 day.

try {
    $result = $apiInstance->getDeviceClients($serial, $t0, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getDeviceClients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetDeviceClients200ResponseInner[]**](../Model/GetDeviceClients200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceLiveToolsArpTable()`

```php
getDeviceLiveToolsArpTable($serial, $arp_table_id): \Meraki\Model\DevicesSerialLiveToolsArpTablePostRequestMessage
```

Return an ARP table live tool job.

Return an ARP table live tool job.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$arp_table_id = 'arp_table_id_example'; // string | Arp table ID

try {
    $result = $apiInstance->getDeviceLiveToolsArpTable($serial, $arp_table_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getDeviceLiveToolsArpTable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **arp_table_id** | **string**| Arp table ID | |

### Return type

[**\Meraki\Model\DevicesSerialLiveToolsArpTablePostRequestMessage**](../Model/DevicesSerialLiveToolsArpTablePostRequestMessage.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceLiveToolsCableTest()`

```php
getDeviceLiveToolsCableTest($serial, $id): \Meraki\Model\DevicesSerialLiveToolsCableTestPostRequestMessage
```

Return a cable test live tool job.

Return a cable test live tool job.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$id = 'id_example'; // string | ID

try {
    $result = $apiInstance->getDeviceLiveToolsCableTest($serial, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getDeviceLiveToolsCableTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **id** | **string**| ID | |

### Return type

[**\Meraki\Model\DevicesSerialLiveToolsCableTestPostRequestMessage**](../Model/DevicesSerialLiveToolsCableTestPostRequestMessage.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceLiveToolsLedsBlink()`

```php
getDeviceLiveToolsLedsBlink($serial, $leds_blink_id): \Meraki\Model\DevicesSerialLiveToolsLedsBlinkPostRequestMessage
```

Return a blink LEDs job

Return a blink LEDs job

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$leds_blink_id = 'leds_blink_id_example'; // string | Leds blink ID

try {
    $result = $apiInstance->getDeviceLiveToolsLedsBlink($serial, $leds_blink_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getDeviceLiveToolsLedsBlink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **leds_blink_id** | **string**| Leds blink ID | |

### Return type

[**\Meraki\Model\DevicesSerialLiveToolsLedsBlinkPostRequestMessage**](../Model/DevicesSerialLiveToolsLedsBlinkPostRequestMessage.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceLiveToolsPing()`

```php
getDeviceLiveToolsPing($serial, $id): \Meraki\Model\DevicesSerialLiveToolsPingPostRequestMessage
```

Return a ping job

Return a ping job. Latency unit in response is in milliseconds. Size is in bytes.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$id = 'id_example'; // string | ID

try {
    $result = $apiInstance->getDeviceLiveToolsPing($serial, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getDeviceLiveToolsPing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **id** | **string**| ID | |

### Return type

[**\Meraki\Model\DevicesSerialLiveToolsPingPostRequestMessage**](../Model/DevicesSerialLiveToolsPingPostRequestMessage.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceLiveToolsPingDevice()`

```php
getDeviceLiveToolsPingDevice($serial, $id): \Meraki\Model\GetDeviceLiveToolsPingDevice200Response
```

Return a ping device job

Return a ping device job. Latency unit in response is in milliseconds. Size is in bytes.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$id = 'id_example'; // string | ID

try {
    $result = $apiInstance->getDeviceLiveToolsPingDevice($serial, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getDeviceLiveToolsPingDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **id** | **string**| ID | |

### Return type

[**\Meraki\Model\GetDeviceLiveToolsPingDevice200Response**](../Model/GetDeviceLiveToolsPingDevice200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceLiveToolsThroughputTest()`

```php
getDeviceLiveToolsThroughputTest($serial, $throughput_test_id): \Meraki\Model\DevicesSerialLiveToolsThroughputTestPostRequestMessage
```

Return a throughput test job

Return a throughput test job

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$throughput_test_id = 'throughput_test_id_example'; // string | Throughput test ID

try {
    $result = $apiInstance->getDeviceLiveToolsThroughputTest($serial, $throughput_test_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getDeviceLiveToolsThroughputTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **throughput_test_id** | **string**| Throughput test ID | |

### Return type

[**\Meraki\Model\DevicesSerialLiveToolsThroughputTestPostRequestMessage**](../Model/DevicesSerialLiveToolsThroughputTestPostRequestMessage.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceLiveToolsWakeOnLan()`

```php
getDeviceLiveToolsWakeOnLan($serial, $wake_on_lan_id): \Meraki\Model\DevicesSerialLiveToolsWakeOnLanPostRequestMessage
```

Return a Wake-on-LAN job

Return a Wake-on-LAN job

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$wake_on_lan_id = 'wake_on_lan_id_example'; // string | Wake on lan ID

try {
    $result = $apiInstance->getDeviceLiveToolsWakeOnLan($serial, $wake_on_lan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getDeviceLiveToolsWakeOnLan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **wake_on_lan_id** | **string**| Wake on lan ID | |

### Return type

[**\Meraki\Model\DevicesSerialLiveToolsWakeOnLanPostRequestMessage**](../Model/DevicesSerialLiveToolsWakeOnLanPostRequestMessage.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceLldpCdp()`

```php
getDeviceLldpCdp($serial): \Meraki\Model\GetDeviceLldpCdp200Response
```

List LLDP and CDP information for a device

List LLDP and CDP information for a device

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceLldpCdp($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getDeviceLldpCdp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceLldpCdp200Response**](../Model/GetDeviceLldpCdp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceLossAndLatencyHistory()`

```php
getDeviceLossAndLatencyHistory($serial, $ip, $t0, $t1, $timespan, $resolution, $uplink): \Meraki\Model\GetDeviceLossAndLatencyHistory200ResponseInner[]
```

Get the uplink loss percentage and latency in milliseconds, and goodput in kilobits per second for MX, MG and Z devices.

Get the uplink loss percentage and latency in milliseconds, and goodput in kilobits per second for MX, MG and Z devices.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$ip = 'ip_example'; // string | The destination IP used to obtain the requested stats. This is required.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 60 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day.
$resolution = 56; // int | The time resolution in seconds for returned data. The valid resolutions are: 60, 600, 3600, 86400. The default is 60.
$uplink = 'uplink_example'; // string | The WAN uplink used to obtain the requested stats. Valid uplinks are wan1, wan2, wan3, cellular. The default is wan1.

try {
    $result = $apiInstance->getDeviceLossAndLatencyHistory($serial, $ip, $t0, $t1, $timespan, $resolution, $uplink);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getDeviceLossAndLatencyHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **ip** | **string**| The destination IP used to obtain the requested stats. This is required. | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 60 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. | [optional] |
| **resolution** | **int**| The time resolution in seconds for returned data. The valid resolutions are: 60, 600, 3600, 86400. The default is 60. | [optional] |
| **uplink** | **string**| The WAN uplink used to obtain the requested stats. Valid uplinks are wan1, wan2, wan3, cellular. The default is wan1. | [optional] |

### Return type

[**\Meraki\Model\GetDeviceLossAndLatencyHistory200ResponseInner[]**](../Model/GetDeviceLossAndLatencyHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceManagementInterface()`

```php
getDeviceManagementInterface($serial): \Meraki\Model\GetDeviceManagementInterface200Response
```

Return the management interface settings for a device

Return the management interface settings for a device

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceManagementInterface($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getDeviceManagementInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceManagementInterface200Response**](../Model/GetDeviceManagementInterface200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkDevices()`

```php
getNetworkDevices($network_id): \Meraki\Model\GetDevice200Response[]
```

List the devices in a network

List the devices in a network

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkDevices($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getNetworkDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetDevice200Response[]**](../Model/GetDevice200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmDeviceCellularUsageHistory()`

```php
getNetworkSmDeviceCellularUsageHistory($network_id, $device_id): \Meraki\Model\GetNetworkSmDeviceCellularUsageHistory200ResponseInner[]
```

Return the client's daily cellular data usage history

Return the client's daily cellular data usage history. Usage data is in kilobytes.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID

try {
    $result = $apiInstance->getNetworkSmDeviceCellularUsageHistory($network_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getNetworkSmDeviceCellularUsageHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |

### Return type

[**\Meraki\Model\GetNetworkSmDeviceCellularUsageHistory200ResponseInner[]**](../Model/GetNetworkSmDeviceCellularUsageHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmDeviceCerts()`

```php
getNetworkSmDeviceCerts($network_id, $device_id): \Meraki\Model\GetNetworkSmDeviceCerts200ResponseInner[]
```

List the certs on a device

List the certs on a device

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID

try {
    $result = $apiInstance->getNetworkSmDeviceCerts($network_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getNetworkSmDeviceCerts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |

### Return type

[**\Meraki\Model\GetNetworkSmDeviceCerts200ResponseInner[]**](../Model/GetNetworkSmDeviceCerts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmDeviceConnectivity()`

```php
getNetworkSmDeviceConnectivity($network_id, $device_id, $per_page, $starting_after, $ending_before): \Meraki\Model\GetNetworkSmDeviceConnectivity200ResponseInner[]
```

Returns historical connectivity data (whether a device is regularly checking in to Dashboard).

Returns historical connectivity data (whether a device is regularly checking in to Dashboard).

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getNetworkSmDeviceConnectivity($network_id, $device_id, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getNetworkSmDeviceConnectivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSmDeviceConnectivity200ResponseInner[]**](../Model/GetNetworkSmDeviceConnectivity200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmDeviceDesktopLogs()`

```php
getNetworkSmDeviceDesktopLogs($network_id, $device_id, $per_page, $starting_after, $ending_before): \Meraki\Model\GetNetworkSmDeviceDesktopLogs200ResponseInner[]
```

Return historical records of various Systems Manager network connection details for desktop devices.

Return historical records of various Systems Manager network connection details for desktop devices.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getNetworkSmDeviceDesktopLogs($network_id, $device_id, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getNetworkSmDeviceDesktopLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSmDeviceDesktopLogs200ResponseInner[]**](../Model/GetNetworkSmDeviceDesktopLogs200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmDeviceDeviceCommandLogs()`

```php
getNetworkSmDeviceDeviceCommandLogs($network_id, $device_id, $per_page, $starting_after, $ending_before): \Meraki\Model\GetNetworkSmDeviceDeviceCommandLogs200ResponseInner[]
```

Return historical records of commands sent to Systems Manager devices

Return historical records of commands sent to Systems Manager devices. Note that this will include the name of the Dashboard user who initiated the command if it was generated by a Dashboard admin rather than the automatic behavior of the system; you may wish to filter this out of any reports.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getNetworkSmDeviceDeviceCommandLogs($network_id, $device_id, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getNetworkSmDeviceDeviceCommandLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSmDeviceDeviceCommandLogs200ResponseInner[]**](../Model/GetNetworkSmDeviceDeviceCommandLogs200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmDeviceDeviceProfiles()`

```php
getNetworkSmDeviceDeviceProfiles($network_id, $device_id): \Meraki\Model\GetNetworkSmDeviceDeviceProfiles200ResponseInner[]
```

Get the installed profiles associated with a device

Get the installed profiles associated with a device

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID

try {
    $result = $apiInstance->getNetworkSmDeviceDeviceProfiles($network_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getNetworkSmDeviceDeviceProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |

### Return type

[**\Meraki\Model\GetNetworkSmDeviceDeviceProfiles200ResponseInner[]**](../Model/GetNetworkSmDeviceDeviceProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmDeviceNetworkAdapters()`

```php
getNetworkSmDeviceNetworkAdapters($network_id, $device_id): \Meraki\Model\GetNetworkSmDeviceNetworkAdapters200ResponseInner[]
```

List the network adapters of a device

List the network adapters of a device

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID

try {
    $result = $apiInstance->getNetworkSmDeviceNetworkAdapters($network_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getNetworkSmDeviceNetworkAdapters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |

### Return type

[**\Meraki\Model\GetNetworkSmDeviceNetworkAdapters200ResponseInner[]**](../Model/GetNetworkSmDeviceNetworkAdapters200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmDevicePerformanceHistory()`

```php
getNetworkSmDevicePerformanceHistory($network_id, $device_id, $per_page, $starting_after, $ending_before): \Meraki\Model\GetNetworkSmDevicePerformanceHistory200ResponseInner[]
```

Return historical records of various Systems Manager client metrics for desktop devices.

Return historical records of various Systems Manager client metrics for desktop devices.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getNetworkSmDevicePerformanceHistory($network_id, $device_id, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getNetworkSmDevicePerformanceHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSmDevicePerformanceHistory200ResponseInner[]**](../Model/GetNetworkSmDevicePerformanceHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmDeviceRestrictions()`

```php
getNetworkSmDeviceRestrictions($network_id, $device_id): \Meraki\Model\GetNetworkSmDeviceRestrictions200Response
```

List the restrictions on a device

List the restrictions on a device

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID

try {
    $result = $apiInstance->getNetworkSmDeviceRestrictions($network_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getNetworkSmDeviceRestrictions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |

### Return type

[**\Meraki\Model\GetNetworkSmDeviceRestrictions200Response**](../Model/GetNetworkSmDeviceRestrictions200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmDeviceSecurityCenters()`

```php
getNetworkSmDeviceSecurityCenters($network_id, $device_id): \Meraki\Model\GetNetworkSmDeviceSecurityCenters200ResponseInner[]
```

List the security centers on a device

List the security centers on a device

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID

try {
    $result = $apiInstance->getNetworkSmDeviceSecurityCenters($network_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getNetworkSmDeviceSecurityCenters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |

### Return type

[**\Meraki\Model\GetNetworkSmDeviceSecurityCenters200ResponseInner[]**](../Model/GetNetworkSmDeviceSecurityCenters200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmDeviceSoftwares()`

```php
getNetworkSmDeviceSoftwares($network_id, $device_id): \Meraki\Model\GetNetworkSmDeviceSoftwares200ResponseInner[]
```

Get a list of softwares associated with a device

Get a list of softwares associated with a device

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID

try {
    $result = $apiInstance->getNetworkSmDeviceSoftwares($network_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getNetworkSmDeviceSoftwares: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |

### Return type

[**\Meraki\Model\GetNetworkSmDeviceSoftwares200ResponseInner[]**](../Model/GetNetworkSmDeviceSoftwares200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmDeviceWlanLists()`

```php
getNetworkSmDeviceWlanLists($network_id, $device_id): \Meraki\Model\GetNetworkSmDeviceWlanLists200ResponseInner[]
```

List the saved SSID names on a device

List the saved SSID names on a device

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID

try {
    $result = $apiInstance->getNetworkSmDeviceWlanLists($network_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getNetworkSmDeviceWlanLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |

### Return type

[**\Meraki\Model\GetNetworkSmDeviceWlanLists200ResponseInner[]**](../Model/GetNetworkSmDeviceWlanLists200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSmDevices()`

```php
getNetworkSmDevices($network_id, $fields, $wifi_macs, $serials, $ids, $uuids, $system_types, $scope, $per_page, $starting_after, $ending_before): \Meraki\Model\GetNetworkSmDevices200ResponseInner[]
```

List the devices enrolled in an SM network with various specified fields and filters

List the devices enrolled in an SM network with various specified fields and filters

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$fields = array('fields_example'); // string[] | Additional fields that will be displayed for each device.     The default fields are: id, name, tags, ssid, wifiMac, osName, systemModel, uuid, and serialNumber. The additional fields are: ip,     systemType, availableDeviceCapacity, kioskAppName, biosVersion, lastConnected, missingAppsCount, userSuppliedAddress, location, lastUser,     ownerEmail, ownerUsername, osBuild, publicIp, phoneNumber, diskInfoJson, deviceCapacity, isManaged, hadMdm, isSupervised, meid, imei, iccid,     simCarrierNetwork, cellularDataUsed, isHotspotEnabled, createdAt, batteryEstCharge, quarantined, avName, avRunning, asName, fwName,     isRooted, loginRequired, screenLockEnabled, screenLockDelay, autoLoginDisabled, autoTags, hasMdm, hasDesktopAgent, diskEncryptionEnabled,     hardwareEncryptionCaps, passCodeLock, usesHardwareKeystore, androidSecurityPatchVersion, cellular, and url.
$wifi_macs = array('wifi_macs_example'); // string[] | Filter devices by wifi mac(s).
$serials = array('serials_example'); // string[] | Filter devices by serial(s).
$ids = array('ids_example'); // string[] | Filter devices by id(s).
$uuids = array('uuids_example'); // string[] | Filter devices by uuid(s).
$system_types = array('system_types_example'); // string[] | Filter devices by system type(s).
$scope = array('scope_example'); // string[] | Specify a scope (one of all, none, withAny, withAll, withoutAny, or withoutAll) and a set of tags.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getNetworkSmDevices($network_id, $fields, $wifi_macs, $serials, $ids, $uuids, $system_types, $scope, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getNetworkSmDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **fields** | [**string[]**](../Model/string.md)| Additional fields that will be displayed for each device.     The default fields are: id, name, tags, ssid, wifiMac, osName, systemModel, uuid, and serialNumber. The additional fields are: ip,     systemType, availableDeviceCapacity, kioskAppName, biosVersion, lastConnected, missingAppsCount, userSuppliedAddress, location, lastUser,     ownerEmail, ownerUsername, osBuild, publicIp, phoneNumber, diskInfoJson, deviceCapacity, isManaged, hadMdm, isSupervised, meid, imei, iccid,     simCarrierNetwork, cellularDataUsed, isHotspotEnabled, createdAt, batteryEstCharge, quarantined, avName, avRunning, asName, fwName,     isRooted, loginRequired, screenLockEnabled, screenLockDelay, autoLoginDisabled, autoTags, hasMdm, hasDesktopAgent, diskEncryptionEnabled,     hardwareEncryptionCaps, passCodeLock, usesHardwareKeystore, androidSecurityPatchVersion, cellular, and url. | [optional] |
| **wifi_macs** | [**string[]**](../Model/string.md)| Filter devices by wifi mac(s). | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Filter devices by serial(s). | [optional] |
| **ids** | [**string[]**](../Model/string.md)| Filter devices by id(s). | [optional] |
| **uuids** | [**string[]**](../Model/string.md)| Filter devices by uuid(s). | [optional] |
| **system_types** | [**string[]**](../Model/string.md)| Filter devices by system type(s). | [optional] |
| **scope** | [**string[]**](../Model/string.md)| Specify a scope (one of all, none, withAny, withAll, withoutAny, or withoutAll) and a set of tags. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSmDevices200ResponseInner[]**](../Model/GetNetworkSmDevices200ResponseInner.md)

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


$apiInstance = new Meraki\Api\DevicesApi(
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
    echo 'Exception when calling DevicesApi->getNetworkWirelessDevicesConnectionStats: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\DevicesApi(
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
    echo 'Exception when calling DevicesApi->getNetworkWirelessDevicesLatencyStats: ', $e->getMessage(), PHP_EOL;
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

## `getOrganizationDevices()`

```php
getOrganizationDevices($organization_id, $per_page, $starting_after, $ending_before, $configuration_updated_after, $network_ids, $product_types, $tags, $tags_filter_type, $name, $mac, $serial, $model, $macs, $serials, $sensor_metrics, $sensor_alert_profile_ids, $models): \Meraki\Model\VmxNetworkDevicesClaim200Response[]
```

List the devices in an organization that have been assigned to a network.

List the devices in an organization that have been assigned to a network.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$configuration_updated_after = 'configuration_updated_after_example'; // string | Filter results by whether or not the device's configuration has been updated after the given timestamp
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter devices by network.
$product_types = array('product_types_example'); // string[] | Optional parameter to filter devices by product type. Valid types are wireless, appliance, switch, systemsManager, camera, cellularGateway, sensor, wirelessController, and secureConnect.
$tags = array('tags_example'); // string[] | Optional parameter to filter devices by tags.
$tags_filter_type = 'tags_filter_type_example'; // string | Optional parameter of value 'withAnyTags' or 'withAllTags' to indicate whether to return networks which contain ANY or ALL of the included tags. If no type is included, 'withAnyTags' will be selected.
$name = 'name_example'; // string | Optional parameter to filter devices by name. All returned devices will have a name that contains the search term or is an exact match.
$mac = 'mac_example'; // string | Optional parameter to filter devices by MAC address. All returned devices will have a MAC address that contains the search term or is an exact match.
$serial = 'serial_example'; // string | Optional parameter to filter devices by serial number. All returned devices will have a serial number that contains the search term or is an exact match.
$model = 'model_example'; // string | Optional parameter to filter devices by model. All returned devices will have a model that contains the search term or is an exact match.
$macs = array('macs_example'); // string[] | Optional parameter to filter devices by one or more MAC addresses. All returned devices will have a MAC address that is an exact match.
$serials = array('serials_example'); // string[] | Optional parameter to filter devices by one or more serial numbers. All returned devices will have a serial number that is an exact match.
$sensor_metrics = array('sensor_metrics_example'); // string[] | Optional parameter to filter devices by the metrics that they provide. Only applies to sensor devices.
$sensor_alert_profile_ids = array('sensor_alert_profile_ids_example'); // string[] | Optional parameter to filter devices by the alert profiles that are bound to them. Only applies to sensor devices.
$models = array('models_example'); // string[] | Optional parameter to filter devices by one or more models. All returned devices will have a model that is an exact match.

try {
    $result = $apiInstance->getOrganizationDevices($organization_id, $per_page, $starting_after, $ending_before, $configuration_updated_after, $network_ids, $product_types, $tags, $tags_filter_type, $name, $mac, $serial, $model, $macs, $serials, $sensor_metrics, $sensor_alert_profile_ids, $models);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getOrganizationDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **configuration_updated_after** | **string**| Filter results by whether or not the device&#39;s configuration has been updated after the given timestamp | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by network. | [optional] |
| **product_types** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by product type. Valid types are wireless, appliance, switch, systemsManager, camera, cellularGateway, sensor, wirelessController, and secureConnect. | [optional] |
| **tags** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by tags. | [optional] |
| **tags_filter_type** | **string**| Optional parameter of value &#39;withAnyTags&#39; or &#39;withAllTags&#39; to indicate whether to return networks which contain ANY or ALL of the included tags. If no type is included, &#39;withAnyTags&#39; will be selected. | [optional] |
| **name** | **string**| Optional parameter to filter devices by name. All returned devices will have a name that contains the search term or is an exact match. | [optional] |
| **mac** | **string**| Optional parameter to filter devices by MAC address. All returned devices will have a MAC address that contains the search term or is an exact match. | [optional] |
| **serial** | **string**| Optional parameter to filter devices by serial number. All returned devices will have a serial number that contains the search term or is an exact match. | [optional] |
| **model** | **string**| Optional parameter to filter devices by model. All returned devices will have a model that contains the search term or is an exact match. | [optional] |
| **macs** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by one or more MAC addresses. All returned devices will have a MAC address that is an exact match. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by one or more serial numbers. All returned devices will have a serial number that is an exact match. | [optional] |
| **sensor_metrics** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by the metrics that they provide. Only applies to sensor devices. | [optional] |
| **sensor_alert_profile_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by the alert profiles that are bound to them. Only applies to sensor devices. | [optional] |
| **models** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by one or more models. All returned devices will have a model that is an exact match. | [optional] |

### Return type

[**\Meraki\Model\VmxNetworkDevicesClaim200Response[]**](../Model/VmxNetworkDevicesClaim200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationDevicesAvailabilities()`

```php
getOrganizationDevicesAvailabilities($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $product_types, $serials, $tags, $tags_filter_type, $statuses): \Meraki\Model\GetOrganizationDevicesAvailabilities200ResponseInner[]
```

List the availability information for devices in an organization

List the availability information for devices in an organization. The data returned by this endpoint is updated every 5 minutes.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter device availabilities by network ID. This filter uses multiple exact matches.
$product_types = array('product_types_example'); // string[] | Optional parameter to filter device availabilities by device product types. This filter uses multiple exact matches. Valid types are wireless, appliance, switch, camera, cellularGateway, sensor, wirelessController, and campusGateway
$serials = array('serials_example'); // string[] | Optional parameter to filter device availabilities by device serial numbers. This filter uses multiple exact matches.
$tags = array('tags_example'); // string[] | An optional parameter to filter devices by tags. The filtering is case-sensitive. If tags are included, 'tagsFilterType' should also be included (see below). This filter uses multiple exact matches.
$tags_filter_type = 'tags_filter_type_example'; // string | An optional parameter of value 'withAnyTags' or 'withAllTags' to indicate whether to return devices which contain ANY or ALL of the included tags. If no type is included, 'withAnyTags' will be selected.
$statuses = array('statuses_example'); // string[] | Optional parameter to filter device availabilities by device status. This filter uses multiple exact matches.

try {
    $result = $apiInstance->getOrganizationDevicesAvailabilities($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $product_types, $serials, $tags, $tags_filter_type, $statuses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getOrganizationDevicesAvailabilities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter device availabilities by network ID. This filter uses multiple exact matches. | [optional] |
| **product_types** | [**string[]**](../Model/string.md)| Optional parameter to filter device availabilities by device product types. This filter uses multiple exact matches. Valid types are wireless, appliance, switch, camera, cellularGateway, sensor, wirelessController, and campusGateway | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter device availabilities by device serial numbers. This filter uses multiple exact matches. | [optional] |
| **tags** | [**string[]**](../Model/string.md)| An optional parameter to filter devices by tags. The filtering is case-sensitive. If tags are included, &#39;tagsFilterType&#39; should also be included (see below). This filter uses multiple exact matches. | [optional] |
| **tags_filter_type** | **string**| An optional parameter of value &#39;withAnyTags&#39; or &#39;withAllTags&#39; to indicate whether to return devices which contain ANY or ALL of the included tags. If no type is included, &#39;withAnyTags&#39; will be selected. | [optional] |
| **statuses** | [**string[]**](../Model/string.md)| Optional parameter to filter device availabilities by device status. This filter uses multiple exact matches. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationDevicesAvailabilities200ResponseInner[]**](../Model/GetOrganizationDevicesAvailabilities200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationDevicesAvailabilitiesChangeHistory()`

```php
getOrganizationDevicesAvailabilitiesChangeHistory($organization_id, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan, $serials, $product_types, $network_ids, $statuses): \Meraki\Model\GetOrganizationDevicesAvailabilitiesChangeHistory200ResponseInner[]
```

List the availability history information for devices in an organization.

List the availability history information for devices in an organization.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day.
$serials = array('serials_example'); // string[] | Optional parameter to filter device availabilities history by device serial numbers
$product_types = array('product_types_example'); // string[] | Optional parameter to filter device availabilities history by device product types
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter device availabilities history by network IDs
$statuses = array('statuses_example'); // string[] | Optional parameter to filter device availabilities history by device statuses

try {
    $result = $apiInstance->getOrganizationDevicesAvailabilitiesChangeHistory($organization_id, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan, $serials, $product_types, $network_ids, $statuses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getOrganizationDevicesAvailabilitiesChangeHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter device availabilities history by device serial numbers | [optional] |
| **product_types** | [**string[]**](../Model/string.md)| Optional parameter to filter device availabilities history by device product types | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter device availabilities history by network IDs | [optional] |
| **statuses** | [**string[]**](../Model/string.md)| Optional parameter to filter device availabilities history by device statuses | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationDevicesAvailabilitiesChangeHistory200ResponseInner[]**](../Model/GetOrganizationDevicesAvailabilitiesChangeHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationDevicesControllerMigrations()`

```php
getOrganizationDevicesControllerMigrations($organization_id, $serials, $network_ids, $target, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationDevicesControllerMigrations200Response
```

Retrieve device migration statuses in an organization

Retrieve device migration statuses in an organization

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$serials = array('serials_example'); // string[] | A list of Meraki Serials for which to retrieve migrations
$network_ids = array('network_ids_example'); // string[] | Filter device migrations by network IDs
$target = 'target_example'; // string | Filter device migrations by target destination
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationDevicesControllerMigrations($organization_id, $serials, $network_ids, $target, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getOrganizationDevicesControllerMigrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **serials** | [**string[]**](../Model/string.md)| A list of Meraki Serials for which to retrieve migrations | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Filter device migrations by network IDs | [optional] |
| **target** | **string**| Filter device migrations by target destination | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationDevicesControllerMigrations200Response**](../Model/GetOrganizationDevicesControllerMigrations200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationDevicesOverviewByModel()`

```php
getOrganizationDevicesOverviewByModel($organization_id, $models, $network_ids, $product_types): \Meraki\Model\GetOrganizationDevicesOverviewByModel200Response
```

Lists the count for each device model

Lists the count for each device model

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$models = array('models_example'); // string[] | Optional parameter to filter devices by one or more models. All returned devices will have a model that is an exact match.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter devices by networkId.
$product_types = array('product_types_example'); // string[] | Optional parameter to filter device by device product types. This filter uses multiple exact matches.

try {
    $result = $apiInstance->getOrganizationDevicesOverviewByModel($organization_id, $models, $network_ids, $product_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getOrganizationDevicesOverviewByModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **models** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by one or more models. All returned devices will have a model that is an exact match. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by networkId. | [optional] |
| **product_types** | [**string[]**](../Model/string.md)| Optional parameter to filter device by device product types. This filter uses multiple exact matches. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationDevicesOverviewByModel200Response**](../Model/GetOrganizationDevicesOverviewByModel200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationDevicesPowerModulesStatusesByDevice()`

```php
getOrganizationDevicesPowerModulesStatusesByDevice($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $product_types, $serials, $tags, $tags_filter_type): \Meraki\Model\GetOrganizationDevicesPowerModulesStatusesByDevice200ResponseInner[]
```

List the most recent status information for power modules in rackmount MX and MS devices that support them

List the most recent status information for power modules in rackmount MX and MS devices that support them. The data returned by this endpoint is updated every 5 minutes.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter device availabilities by network ID. This filter uses multiple exact matches.
$product_types = array('product_types_example'); // string[] | Optional parameter to filter device availabilities by device product types. This filter uses multiple exact matches.
$serials = array('serials_example'); // string[] | Optional parameter to filter device availabilities by device serial numbers. This filter uses multiple exact matches.
$tags = array('tags_example'); // string[] | An optional parameter to filter devices by tags. The filtering is case-sensitive. If tags are included, 'tagsFilterType' should also be included (see below). This filter uses multiple exact matches.
$tags_filter_type = 'tags_filter_type_example'; // string | An optional parameter of value 'withAnyTags' or 'withAllTags' to indicate whether to return devices which contain ANY or ALL of the included tags. If no type is included, 'withAnyTags' will be selected.

try {
    $result = $apiInstance->getOrganizationDevicesPowerModulesStatusesByDevice($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $product_types, $serials, $tags, $tags_filter_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getOrganizationDevicesPowerModulesStatusesByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter device availabilities by network ID. This filter uses multiple exact matches. | [optional] |
| **product_types** | [**string[]**](../Model/string.md)| Optional parameter to filter device availabilities by device product types. This filter uses multiple exact matches. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter device availabilities by device serial numbers. This filter uses multiple exact matches. | [optional] |
| **tags** | [**string[]**](../Model/string.md)| An optional parameter to filter devices by tags. The filtering is case-sensitive. If tags are included, &#39;tagsFilterType&#39; should also be included (see below). This filter uses multiple exact matches. | [optional] |
| **tags_filter_type** | **string**| An optional parameter of value &#39;withAnyTags&#39; or &#39;withAllTags&#39; to indicate whether to return devices which contain ANY or ALL of the included tags. If no type is included, &#39;withAnyTags&#39; will be selected. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationDevicesPowerModulesStatusesByDevice200ResponseInner[]**](../Model/GetOrganizationDevicesPowerModulesStatusesByDevice200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationDevicesProvisioningStatuses()`

```php
getOrganizationDevicesProvisioningStatuses($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $product_types, $serials, $status, $tags, $tags_filter_type): \Meraki\Model\GetOrganizationDevicesProvisioningStatuses200ResponseInner[]
```

List the provisioning statuses information for devices in an organization.

List the provisioning statuses information for devices in an organization.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter device by network ID. This filter uses multiple exact matches.
$product_types = array('product_types_example'); // string[] | Optional parameter to filter device by device product types. This filter uses multiple exact matches.
$serials = array('serials_example'); // string[] | Optional parameter to filter device by device serial numbers. This filter uses multiple exact matches.
$status = 'status_example'; // string | An optional parameter to filter devices by the provisioning status. Accepted statuses: unprovisioned, incomplete, complete.
$tags = array('tags_example'); // string[] | An optional parameter to filter devices by tags. The filtering is case-sensitive. If tags are included, 'tagsFilterType' should also be included (see below). This filter uses multiple exact matches.
$tags_filter_type = 'tags_filter_type_example'; // string | An optional parameter of value 'withAnyTags' or 'withAllTags' to indicate whether to return devices which contain ANY or ALL of the included tags. If no type is included, 'withAnyTags' will be selected.

try {
    $result = $apiInstance->getOrganizationDevicesProvisioningStatuses($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $product_types, $serials, $status, $tags, $tags_filter_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getOrganizationDevicesProvisioningStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter device by network ID. This filter uses multiple exact matches. | [optional] |
| **product_types** | [**string[]**](../Model/string.md)| Optional parameter to filter device by device product types. This filter uses multiple exact matches. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter device by device serial numbers. This filter uses multiple exact matches. | [optional] |
| **status** | **string**| An optional parameter to filter devices by the provisioning status. Accepted statuses: unprovisioned, incomplete, complete. | [optional] |
| **tags** | [**string[]**](../Model/string.md)| An optional parameter to filter devices by tags. The filtering is case-sensitive. If tags are included, &#39;tagsFilterType&#39; should also be included (see below). This filter uses multiple exact matches. | [optional] |
| **tags_filter_type** | **string**| An optional parameter of value &#39;withAnyTags&#39; or &#39;withAllTags&#39; to indicate whether to return devices which contain ANY or ALL of the included tags. If no type is included, &#39;withAnyTags&#39; will be selected. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationDevicesProvisioningStatuses200ResponseInner[]**](../Model/GetOrganizationDevicesProvisioningStatuses200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationDevicesStatuses()`

```php
getOrganizationDevicesStatuses($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $serials, $statuses, $product_types, $models, $tags, $tags_filter_type): \Meraki\Model\GetOrganizationDevicesStatuses200ResponseInner[]
```

List the status of every Meraki device in the organization

List the status of every Meraki device in the organization

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter devices by network ids.
$serials = array('serials_example'); // string[] | Optional parameter to filter devices by serials.
$statuses = array('statuses_example'); // string[] | Optional parameter to filter devices by statuses. Valid statuses are [\"online\", \"alerting\", \"offline\", \"dormant\"].
$product_types = array('product_types_example'); // string[] | An optional parameter to filter device statuses by product type. Valid types are wireless, appliance, switch, systemsManager, camera, cellularGateway, sensor, wirelessController, and secureConnect.
$models = array('models_example'); // string[] | Optional parameter to filter devices by models.
$tags = array('tags_example'); // string[] | An optional parameter to filter devices by tags. The filtering is case-sensitive. If tags are included, 'tagsFilterType' should also be included (see below).
$tags_filter_type = 'tags_filter_type_example'; // string | An optional parameter of value 'withAnyTags' or 'withAllTags' to indicate whether to return devices which contain ANY or ALL of the included tags. If no type is included, 'withAnyTags' will be selected.

try {
    $result = $apiInstance->getOrganizationDevicesStatuses($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $serials, $statuses, $product_types, $models, $tags, $tags_filter_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getOrganizationDevicesStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by network ids. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by serials. | [optional] |
| **statuses** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by statuses. Valid statuses are [\&quot;online\&quot;, \&quot;alerting\&quot;, \&quot;offline\&quot;, \&quot;dormant\&quot;]. | [optional] |
| **product_types** | [**string[]**](../Model/string.md)| An optional parameter to filter device statuses by product type. Valid types are wireless, appliance, switch, systemsManager, camera, cellularGateway, sensor, wirelessController, and secureConnect. | [optional] |
| **models** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by models. | [optional] |
| **tags** | [**string[]**](../Model/string.md)| An optional parameter to filter devices by tags. The filtering is case-sensitive. If tags are included, &#39;tagsFilterType&#39; should also be included (see below). | [optional] |
| **tags_filter_type** | **string**| An optional parameter of value &#39;withAnyTags&#39; or &#39;withAllTags&#39; to indicate whether to return devices which contain ANY or ALL of the included tags. If no type is included, &#39;withAnyTags&#39; will be selected. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationDevicesStatuses200ResponseInner[]**](../Model/GetOrganizationDevicesStatuses200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationDevicesStatusesOverview()`

```php
getOrganizationDevicesStatusesOverview($organization_id, $product_types, $network_ids): \Meraki\Model\GetOrganizationDevicesStatusesOverview200Response
```

Return an overview of current device statuses

Return an overview of current device statuses

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$product_types = array('product_types_example'); // string[] | An optional parameter to filter device statuses by product type. Valid types are wireless, appliance, switch, systemsManager, camera, cellularGateway, sensor, wirelessController, and secureConnect.
$network_ids = array('network_ids_example'); // string[] | An optional parameter to filter device statuses by network.

try {
    $result = $apiInstance->getOrganizationDevicesStatusesOverview($organization_id, $product_types, $network_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getOrganizationDevicesStatusesOverview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **product_types** | [**string[]**](../Model/string.md)| An optional parameter to filter device statuses by product type. Valid types are wireless, appliance, switch, systemsManager, camera, cellularGateway, sensor, wirelessController, and secureConnect. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| An optional parameter to filter device statuses by network. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationDevicesStatusesOverview200Response**](../Model/GetOrganizationDevicesStatusesOverview200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationDevicesSystemMemoryUsageHistoryByInterval()`

```php
getOrganizationDevicesSystemMemoryUsageHistoryByInterval($organization_id, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan, $interval, $network_ids, $serials, $product_types): \Meraki\Model\GetOrganizationDevicesSystemMemoryUsageHistoryByInterval200Response
```

Return the memory utilization history in kB for devices in the organization.

Return the memory utilization history in kB for devices in the organization.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 20. Default is 10.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 2 hours. If interval is provided, the timespan will be autocalculated.
$interval = 56; // int | The time interval in seconds for returned data. The valid intervals are: 300, 1200, 3600, 14400. The default is 300. Interval is calculated if time params are provided.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter the result set by the included set of network IDs
$serials = array('serials_example'); // string[] | Optional parameter to filter device availabilities history by device serial numbers
$product_types = array('product_types_example'); // string[] | Optional parameter to filter device statuses by product type. Valid types are wireless, appliance, switch, systemsManager, camera, cellularGateway, sensor, wirelessController, and secureConnect.

try {
    $result = $apiInstance->getOrganizationDevicesSystemMemoryUsageHistoryByInterval($organization_id, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan, $interval, $network_ids, $serials, $product_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getOrganizationDevicesSystemMemoryUsageHistoryByInterval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 20. Default is 10. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 2 hours. If interval is provided, the timespan will be autocalculated. | [optional] |
| **interval** | **int**| The time interval in seconds for returned data. The valid intervals are: 300, 1200, 3600, 14400. The default is 300. Interval is calculated if time params are provided. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the result set by the included set of network IDs | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter device availabilities history by device serial numbers | [optional] |
| **product_types** | [**string[]**](../Model/string.md)| Optional parameter to filter device statuses by product type. Valid types are wireless, appliance, switch, systemsManager, camera, cellularGateway, sensor, wirelessController, and secureConnect. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationDevicesSystemMemoryUsageHistoryByInterval200Response**](../Model/GetOrganizationDevicesSystemMemoryUsageHistoryByInterval200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationDevicesUplinksAddressesByDevice()`

```php
getOrganizationDevicesUplinksAddressesByDevice($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $product_types, $serials, $tags, $tags_filter_type): \Meraki\Model\GetOrganizationDevicesUplinksAddressesByDevice200ResponseInner[]
```

List the current uplink addresses for devices in an organization.

List the current uplink addresses for devices in an organization.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter device uplinks by network ID. This filter uses multiple exact matches.
$product_types = array('product_types_example'); // string[] | Optional parameter to filter device uplinks by device product types. This filter uses multiple exact matches.
$serials = array('serials_example'); // string[] | Optional parameter to filter device availabilities by device serial numbers. This filter uses multiple exact matches.
$tags = array('tags_example'); // string[] | An optional parameter to filter devices by tags. The filtering is case-sensitive. If tags are included, 'tagsFilterType' should also be included (see below). This filter uses multiple exact matches.
$tags_filter_type = 'tags_filter_type_example'; // string | An optional parameter of value 'withAnyTags' or 'withAllTags' to indicate whether to return devices which contain ANY or ALL of the included tags. If no type is included, 'withAnyTags' will be selected.

try {
    $result = $apiInstance->getOrganizationDevicesUplinksAddressesByDevice($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $product_types, $serials, $tags, $tags_filter_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getOrganizationDevicesUplinksAddressesByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter device uplinks by network ID. This filter uses multiple exact matches. | [optional] |
| **product_types** | [**string[]**](../Model/string.md)| Optional parameter to filter device uplinks by device product types. This filter uses multiple exact matches. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter device availabilities by device serial numbers. This filter uses multiple exact matches. | [optional] |
| **tags** | [**string[]**](../Model/string.md)| An optional parameter to filter devices by tags. The filtering is case-sensitive. If tags are included, &#39;tagsFilterType&#39; should also be included (see below). This filter uses multiple exact matches. | [optional] |
| **tags_filter_type** | **string**| An optional parameter of value &#39;withAnyTags&#39; or &#39;withAllTags&#39; to indicate whether to return devices which contain ANY or ALL of the included tags. If no type is included, &#39;withAnyTags&#39; will be selected. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationDevicesUplinksAddressesByDevice200ResponseInner[]**](../Model/GetOrganizationDevicesUplinksAddressesByDevice200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationDevicesUplinksLossAndLatency()`

```php
getOrganizationDevicesUplinksLossAndLatency($organization_id, $t0, $t1, $timespan, $uplink, $ip): \Meraki\Model\GetOrganizationDevicesUplinksLossAndLatency200ResponseInner[]
```

Return the uplink loss and latency for every MX in the organization from at latest 2 minutes ago

Return the uplink loss and latency for every MX in the organization from at latest 2 minutes ago

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 60 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 5 minutes after t0. The latest possible time that t1 can be is 2 minutes into the past.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 5 minutes. The default is 5 minutes.
$uplink = 'uplink_example'; // string | Optional filter for a specific WAN uplink. Valid uplinks are wan1, wan2, wan3, cellular. Default will return all uplinks.
$ip = 'ip_example'; // string | Optional filter for a specific destination IP. Default will return all destination IPs.

try {
    $result = $apiInstance->getOrganizationDevicesUplinksLossAndLatency($organization_id, $t0, $t1, $timespan, $uplink, $ip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getOrganizationDevicesUplinksLossAndLatency: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 60 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 5 minutes after t0. The latest possible time that t1 can be is 2 minutes into the past. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 5 minutes. The default is 5 minutes. | [optional] |
| **uplink** | **string**| Optional filter for a specific WAN uplink. Valid uplinks are wan1, wan2, wan3, cellular. Default will return all uplinks. | [optional] |
| **ip** | **string**| Optional filter for a specific destination IP. Default will return all destination IPs. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationDevicesUplinksLossAndLatency200ResponseInner[]**](../Model/GetOrganizationDevicesUplinksLossAndLatency200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationFloorPlansAutoLocateDevices()`

```php
getOrganizationFloorPlansAutoLocateDevices($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $floor_plan_ids): \Meraki\Model\GetOrganizationFloorPlansAutoLocateDevices200ResponseInner[]
```

List auto locate details for each device in your organization

List auto locate details for each device in your organization

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 10000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter devices by one or more network IDs
$floor_plan_ids = array('floor_plan_ids_example'); // string[] | Optional parameter to filter devices by one or more floorplan IDs

try {
    $result = $apiInstance->getOrganizationFloorPlansAutoLocateDevices($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $floor_plan_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getOrganizationFloorPlansAutoLocateDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 10000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by one or more network IDs | [optional] |
| **floor_plan_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by one or more floorplan IDs | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationFloorPlansAutoLocateDevices200ResponseInner[]**](../Model/GetOrganizationFloorPlansAutoLocateDevices200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationInventoryDevice()`

```php
getOrganizationInventoryDevice($organization_id, $serial): \Meraki\Model\GetOrganizationInventoryDevices200ResponseInner
```

Return a single device from the inventory of an organization

Return a single device from the inventory of an organization

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getOrganizationInventoryDevice($organization_id, $serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getOrganizationInventoryDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetOrganizationInventoryDevices200ResponseInner**](../Model/GetOrganizationInventoryDevices200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationInventoryDevices()`

```php
getOrganizationInventoryDevices($organization_id, $per_page, $starting_after, $ending_before, $used_state, $search, $macs, $network_ids, $serials, $models, $order_numbers, $tags, $tags_filter_type, $product_types): \Meraki\Model\GetOrganizationInventoryDevices200ResponseInner[]
```

Return the device inventory for an organization

Return the device inventory for an organization

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$used_state = 'used_state_example'; // string | Filter results by used or unused inventory. Accepted values are 'used' or 'unused'.
$search = 'search_example'; // string | Search for devices in inventory based on serial number, mac address, or model.
$macs = array('macs_example'); // string[] | Search for devices in inventory based on mac addresses.
$network_ids = array('network_ids_example'); // string[] | Search for devices in inventory based on network ids. Use explicit 'null' value to get available devices only.
$serials = array('serials_example'); // string[] | Search for devices in inventory based on serials.
$models = array('models_example'); // string[] | Search for devices in inventory based on model.
$order_numbers = array('order_numbers_example'); // string[] | Search for devices in inventory based on order numbers.
$tags = array('tags_example'); // string[] | Filter devices by tags. The filtering is case-sensitive. If tags are included, 'tagsFilterType' should also be included (see below).
$tags_filter_type = 'tags_filter_type_example'; // string | To use with 'tags' parameter, to filter devices which contain ANY or ALL given tags. Accepted values are 'withAnyTags' or 'withAllTags', default is 'withAnyTags'.
$product_types = array('product_types_example'); // string[] | Filter devices by product type. Accepted values are appliance, camera, cellularGateway, secureConnect, sensor, switch, systemsManager, wireless, and wirelessController.

try {
    $result = $apiInstance->getOrganizationInventoryDevices($organization_id, $per_page, $starting_after, $ending_before, $used_state, $search, $macs, $network_ids, $serials, $models, $order_numbers, $tags, $tags_filter_type, $product_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getOrganizationInventoryDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **used_state** | **string**| Filter results by used or unused inventory. Accepted values are &#39;used&#39; or &#39;unused&#39;. | [optional] |
| **search** | **string**| Search for devices in inventory based on serial number, mac address, or model. | [optional] |
| **macs** | [**string[]**](../Model/string.md)| Search for devices in inventory based on mac addresses. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Search for devices in inventory based on network ids. Use explicit &#39;null&#39; value to get available devices only. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Search for devices in inventory based on serials. | [optional] |
| **models** | [**string[]**](../Model/string.md)| Search for devices in inventory based on model. | [optional] |
| **order_numbers** | [**string[]**](../Model/string.md)| Search for devices in inventory based on order numbers. | [optional] |
| **tags** | [**string[]**](../Model/string.md)| Filter devices by tags. The filtering is case-sensitive. If tags are included, &#39;tagsFilterType&#39; should also be included (see below). | [optional] |
| **tags_filter_type** | **string**| To use with &#39;tags&#39; parameter, to filter devices which contain ANY or ALL given tags. Accepted values are &#39;withAnyTags&#39; or &#39;withAllTags&#39;, default is &#39;withAnyTags&#39;. | [optional] |
| **product_types** | [**string[]**](../Model/string.md)| Filter devices by product type. Accepted values are appliance, camera, cellularGateway, secureConnect, sensor, switch, systemsManager, wireless, and wirelessController. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationInventoryDevices200ResponseInner[]**](../Model/GetOrganizationInventoryDevices200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationInventoryDevicesSwapsBulk()`

```php
getOrganizationInventoryDevicesSwapsBulk($organization_id, $id): \Meraki\Model\CreateOrganizationInventoryDevicesSwapsBulk207Response
```

List of device swaps for a given request ID ({id}).

List of device swaps for a given request ID ({id}).

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$id = 'id_example'; // string | ID

try {
    $result = $apiInstance->getOrganizationInventoryDevicesSwapsBulk($organization_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getOrganizationInventoryDevicesSwapsBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **id** | **string**| ID | |

### Return type

[**\Meraki\Model\CreateOrganizationInventoryDevicesSwapsBulk207Response**](../Model/CreateOrganizationInventoryDevicesSwapsBulk207Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSummaryTopDevicesByUsage()`

```php
getOrganizationSummaryTopDevicesByUsage($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationSummaryTopDevicesByUsage200ResponseInner[]
```

Return metrics for organization's top 10 devices sorted by data usage over given time range

Return metrics for organization's top 10 devices sorted by data usage over given time range. Default unit is megabytes.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_tag = 'network_tag_example'; // string | Match result to an exact network tag
$device_tag = 'device_tag_example'; // string | Match result to an exact device tag
$quantity = 56; // int | Set number of desired results to return. Default is 10.
$ssid_name = 'ssid_name_example'; // string | Filter results by ssid name
$usage_uplink = 'usage_uplink_example'; // string | Filter results by usage uplink
$t0 = 't0_example'; // string | The beginning of the timespan for the data.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 186 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 8 hours and be less than or equal to 186 days. The default is 1 day.

try {
    $result = $apiInstance->getOrganizationSummaryTopDevicesByUsage($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getOrganizationSummaryTopDevicesByUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_tag** | **string**| Match result to an exact network tag | [optional] |
| **device_tag** | **string**| Match result to an exact device tag | [optional] |
| **quantity** | **int**| Set number of desired results to return. Default is 10. | [optional] |
| **ssid_name** | **string**| Filter results by ssid name | [optional] |
| **usage_uplink** | **string**| Filter results by usage uplink | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 186 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 8 hours and be less than or equal to 186 days. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSummaryTopDevicesByUsage200ResponseInner[]**](../Model/GetOrganizationSummaryTopDevicesByUsage200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSummaryTopDevicesModelsByUsage()`

```php
getOrganizationSummaryTopDevicesModelsByUsage($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationSummaryTopDevicesModelsByUsage200ResponseInner[]
```

Return metrics for organization's top 10 device models sorted by data usage over given time range

Return metrics for organization's top 10 device models sorted by data usage over given time range. Default unit is megabytes.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_tag = 'network_tag_example'; // string | Match result to an exact network tag
$device_tag = 'device_tag_example'; // string | Match result to an exact device tag
$quantity = 56; // int | Set number of desired results to return. Default is 10.
$ssid_name = 'ssid_name_example'; // string | Filter results by ssid name
$usage_uplink = 'usage_uplink_example'; // string | Filter results by usage uplink
$t0 = 't0_example'; // string | The beginning of the timespan for the data.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 186 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 8 hours and be less than or equal to 186 days. The default is 1 day.

try {
    $result = $apiInstance->getOrganizationSummaryTopDevicesModelsByUsage($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getOrganizationSummaryTopDevicesModelsByUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_tag** | **string**| Match result to an exact network tag | [optional] |
| **device_tag** | **string**| Match result to an exact device tag | [optional] |
| **quantity** | **int**| Set number of desired results to return. Default is 10. | [optional] |
| **ssid_name** | **string**| Filter results by ssid name | [optional] |
| **usage_uplink** | **string**| Filter results by usage uplink | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 186 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 8 hours and be less than or equal to 186 days. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSummaryTopDevicesModelsByUsage200ResponseInner[]**](../Model/GetOrganizationSummaryTopDevicesModelsByUsage200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessControllerDevicesInterfacesL2ByDevice()`

```php
getOrganizationWirelessControllerDevicesInterfacesL2ByDevice($organization_id, $serials, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesL2ByDevice200Response
```

List wireless LAN controller layer 2 interfaces in an organization

List wireless LAN controller layer 2 interfaces in an organization

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$serials = array('serials_example'); // string[] | Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessControllerDevicesInterfacesL2ByDevice($organization_id, $serials, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getOrganizationWirelessControllerDevicesInterfacesL2ByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesL2ByDevice200Response**](../Model/GetOrganizationWirelessControllerDevicesInterfacesL2ByDevice200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessControllerDevicesInterfacesL2StatusesChangeHistoryByDevice()`

```php
getOrganizationWirelessControllerDevicesInterfacesL2StatusesChangeHistoryByDevice($organization_id, $serials, $include_interfaces_without_changes, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesL2StatusesChangeHistoryByDevice200Response
```

List wireless LAN controller layer 2 interfaces history status in an organization

List wireless LAN controller layer 2 interfaces history status in an organization

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$serials = array('serials_example'); // string[] | Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches.
$include_interfaces_without_changes = True; // bool | By default, interfaces without changes are omitted from the response for brevity. If you want to include the interfaces even if they have no changes, set to true. (default: false)
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessControllerDevicesInterfacesL2StatusesChangeHistoryByDevice($organization_id, $serials, $include_interfaces_without_changes, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getOrganizationWirelessControllerDevicesInterfacesL2StatusesChangeHistoryByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches. | [optional] |
| **include_interfaces_without_changes** | **bool**| By default, interfaces without changes are omitted from the response for brevity. If you want to include the interfaces even if they have no changes, set to true. (default: false) | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesL2StatusesChangeHistoryByDevice200Response**](../Model/GetOrganizationWirelessControllerDevicesInterfacesL2StatusesChangeHistoryByDevice200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessControllerDevicesInterfacesL2UsageHistoryByInterval()`

```php
getOrganizationWirelessControllerDevicesInterfacesL2UsageHistoryByInterval($organization_id, $serials, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesL2UsageHistoryByInterval200Response
```

List wireless LAN controller layer 2 interfaces history usage in an organization

List wireless LAN controller layer 2 interfaces history usage in an organization

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$serials = array('serials_example'); // string[] | Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessControllerDevicesInterfacesL2UsageHistoryByInterval($organization_id, $serials, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getOrganizationWirelessControllerDevicesInterfacesL2UsageHistoryByInterval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesL2UsageHistoryByInterval200Response**](../Model/GetOrganizationWirelessControllerDevicesInterfacesL2UsageHistoryByInterval200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessControllerDevicesInterfacesL3ByDevice()`

```php
getOrganizationWirelessControllerDevicesInterfacesL3ByDevice($organization_id, $serials, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesL3ByDevice200Response
```

List wireless LAN controller layer 3 interfaces in an organization

List wireless LAN controller layer 3 interfaces in an organization

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$serials = array('serials_example'); // string[] | Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessControllerDevicesInterfacesL3ByDevice($organization_id, $serials, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getOrganizationWirelessControllerDevicesInterfacesL3ByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesL3ByDevice200Response**](../Model/GetOrganizationWirelessControllerDevicesInterfacesL3ByDevice200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessControllerDevicesInterfacesL3StatusesChangeHistoryByDevice()`

```php
getOrganizationWirelessControllerDevicesInterfacesL3StatusesChangeHistoryByDevice($organization_id, $serials, $include_interfaces_without_changes, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesL3StatusesChangeHistoryByDevice200Response
```

List wireless LAN controller layer 3 interfaces history status in an organization

List wireless LAN controller layer 3 interfaces history status in an organization

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$serials = array('serials_example'); // string[] | Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches.
$include_interfaces_without_changes = True; // bool | By default, interfaces without changes are omitted from the response for brevity. If you want to include the interfaces even if they have no changes, set to true. (default: false)
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessControllerDevicesInterfacesL3StatusesChangeHistoryByDevice($organization_id, $serials, $include_interfaces_without_changes, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getOrganizationWirelessControllerDevicesInterfacesL3StatusesChangeHistoryByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches. | [optional] |
| **include_interfaces_without_changes** | **bool**| By default, interfaces without changes are omitted from the response for brevity. If you want to include the interfaces even if they have no changes, set to true. (default: false) | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesL3StatusesChangeHistoryByDevice200Response**](../Model/GetOrganizationWirelessControllerDevicesInterfacesL3StatusesChangeHistoryByDevice200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessControllerDevicesInterfacesL3UsageHistoryByInterval()`

```php
getOrganizationWirelessControllerDevicesInterfacesL3UsageHistoryByInterval($organization_id, $serials, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesL3UsageHistoryByInterval200Response
```

List wireless LAN controller layer 3 interfaces history usage in an organization

List wireless LAN controller layer 3 interfaces history usage in an organization

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$serials = array('serials_example'); // string[] | Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessControllerDevicesInterfacesL3UsageHistoryByInterval($organization_id, $serials, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getOrganizationWirelessControllerDevicesInterfacesL3UsageHistoryByInterval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesL3UsageHistoryByInterval200Response**](../Model/GetOrganizationWirelessControllerDevicesInterfacesL3UsageHistoryByInterval200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessControllerDevicesInterfacesPacketsOverviewByDevice()`

```php
getOrganizationWirelessControllerDevicesInterfacesPacketsOverviewByDevice($organization_id, $serials, $names, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesPacketsOverviewByDevice200Response
```

Retrieve the packet counters for the interfaces of a Wireless LAN controller

Retrieve the packet counters for the interfaces of a Wireless LAN controller

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$serials = array('serials_example'); // string[] | Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches.
$names = array('names_example'); // string[] | Optional parameter to filter wireless LAN controller by its interface name. This filter uses multiple exact matches.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 1 day from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 1 day after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 1 day. The default is 1 hour.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessControllerDevicesInterfacesPacketsOverviewByDevice($organization_id, $serials, $names, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getOrganizationWirelessControllerDevicesInterfacesPacketsOverviewByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches. | [optional] |
| **names** | [**string[]**](../Model/string.md)| Optional parameter to filter wireless LAN controller by its interface name. This filter uses multiple exact matches. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 1 day from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 1 day after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 1 day. The default is 1 hour. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesPacketsOverviewByDevice200Response**](../Model/GetOrganizationWirelessControllerDevicesInterfacesPacketsOverviewByDevice200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessControllerDevicesInterfacesUsageHistoryByInterval()`

```php
getOrganizationWirelessControllerDevicesInterfacesUsageHistoryByInterval($organization_id, $serials, $names, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesUsageHistoryByInterval200Response
```

Retrieve the traffic for the interfaces of a Wireless LAN controller

Retrieve the traffic for the interfaces of a Wireless LAN controller

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$serials = array('serials_example'); // string[] | Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches.
$names = array('names_example'); // string[] | Optional parameter to filter wireless LAN controller by its interface name. This filter uses multiple exact matches.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessControllerDevicesInterfacesUsageHistoryByInterval($organization_id, $serials, $names, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getOrganizationWirelessControllerDevicesInterfacesUsageHistoryByInterval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches. | [optional] |
| **names** | [**string[]**](../Model/string.md)| Optional parameter to filter wireless LAN controller by its interface name. This filter uses multiple exact matches. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessControllerDevicesInterfacesUsageHistoryByInterval200Response**](../Model/GetOrganizationWirelessControllerDevicesInterfacesUsageHistoryByInterval200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessControllerDevicesRedundancyFailoverHistory()`

```php
getOrganizationWirelessControllerDevicesRedundancyFailoverHistory($organization_id, $serials, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessControllerDevicesRedundancyFailoverHistory200ResponseInner[]
```

List the failover events of wireless LAN controllers in an organization

List the failover events of wireless LAN controllers in an organization

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$serials = array('serials_example'); // string[] | Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessControllerDevicesRedundancyFailoverHistory($organization_id, $serials, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getOrganizationWirelessControllerDevicesRedundancyFailoverHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessControllerDevicesRedundancyFailoverHistory200ResponseInner[]**](../Model/GetOrganizationWirelessControllerDevicesRedundancyFailoverHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessControllerDevicesRedundancyStatuses()`

```php
getOrganizationWirelessControllerDevicesRedundancyStatuses($organization_id, $serials, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessControllerDevicesRedundancyStatuses200Response
```

List redundancy details of wireless LAN controllers in an organization

List redundancy details of wireless LAN controllers in an organization. The failover count refers to the total failovers system happens from the moment of this device onboarding to Dashboard

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$serials = array('serials_example'); // string[] | Optional parameter to filter wireless LAN controller by its cloud IDs. This filter uses multiple exact matches.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessControllerDevicesRedundancyStatuses($organization_id, $serials, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getOrganizationWirelessControllerDevicesRedundancyStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter wireless LAN controller by its cloud IDs. This filter uses multiple exact matches. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessControllerDevicesRedundancyStatuses200Response**](../Model/GetOrganizationWirelessControllerDevicesRedundancyStatuses200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWirelessControllerDevicesSystemUtilizationHistoryByInterval()`

```php
getOrganizationWirelessControllerDevicesSystemUtilizationHistoryByInterval($organization_id, $serials, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationWirelessControllerDevicesSystemUtilizationHistoryByInterval200Response
```

List cpu utilization data of wireless LAN controllers in an organization

List cpu utilization data of wireless LAN controllers in an organization

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$serials = array('serials_example'); // string[] | Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationWirelessControllerDevicesSystemUtilizationHistoryByInterval($organization_id, $serials, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getOrganizationWirelessControllerDevicesSystemUtilizationHistoryByInterval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter wireless LAN controller by its cloud ID. This filter uses multiple exact matches. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 7 days. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWirelessControllerDevicesSystemUtilizationHistoryByInterval200Response**](../Model/GetOrganizationWirelessControllerDevicesSystemUtilizationHistoryByInterval200Response.md)

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


$apiInstance = new Meraki\Api\DevicesApi(
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
    echo 'Exception when calling DevicesApi->getOrganizationWirelessDevicesChannelUtilizationByDevice: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\DevicesApi(
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
    echo 'Exception when calling DevicesApi->getOrganizationWirelessDevicesChannelUtilizationByNetwork: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\DevicesApi(
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
    echo 'Exception when calling DevicesApi->getOrganizationWirelessDevicesChannelUtilizationHistoryByDeviceByInterval: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\DevicesApi(
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
    echo 'Exception when calling DevicesApi->getOrganizationWirelessDevicesChannelUtilizationHistoryByNetworkByInterval: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\DevicesApi(
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
    echo 'Exception when calling DevicesApi->getOrganizationWirelessDevicesEthernetStatuses: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\DevicesApi(
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
    echo 'Exception when calling DevicesApi->getOrganizationWirelessDevicesPacketLossByClient: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\DevicesApi(
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
    echo 'Exception when calling DevicesApi->getOrganizationWirelessDevicesPacketLossByDevice: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\DevicesApi(
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
    echo 'Exception when calling DevicesApi->getOrganizationWirelessDevicesPacketLossByNetwork: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\DevicesApi(
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
    echo 'Exception when calling DevicesApi->getOrganizationWirelessDevicesPowerModeHistory: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\DevicesApi(
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
    echo 'Exception when calling DevicesApi->getOrganizationWirelessDevicesSystemCpuLoadHistory: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\DevicesApi(
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
    echo 'Exception when calling DevicesApi->getOrganizationWirelessDevicesWirelessControllersByDevice: ', $e->getMessage(), PHP_EOL;
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

## `installNetworkSmDeviceApps()`

```php
installNetworkSmDeviceApps($network_id, $device_id, $install_network_sm_device_apps_request): object
```

Install applications on a device

Install applications on a device

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID
$install_network_sm_device_apps_request = new \Meraki\Model\InstallNetworkSmDeviceAppsRequest(); // \Meraki\Model\InstallNetworkSmDeviceAppsRequest

try {
    $result = $apiInstance->installNetworkSmDeviceApps($network_id, $device_id, $install_network_sm_device_apps_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->installNetworkSmDeviceApps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |
| **install_network_sm_device_apps_request** | [**\Meraki\Model\InstallNetworkSmDeviceAppsRequest**](../Model/InstallNetworkSmDeviceAppsRequest.md)|  | |

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

## `lockNetworkSmDevices()`

```php
lockNetworkSmDevices($network_id, $lock_network_sm_devices_request): \Meraki\Model\CheckinNetworkSmDevices200Response
```

Lock a set of devices

Lock a set of devices

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$lock_network_sm_devices_request = new \Meraki\Model\LockNetworkSmDevicesRequest(); // \Meraki\Model\LockNetworkSmDevicesRequest

try {
    $result = $apiInstance->lockNetworkSmDevices($network_id, $lock_network_sm_devices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->lockNetworkSmDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **lock_network_sm_devices_request** | [**\Meraki\Model\LockNetworkSmDevicesRequest**](../Model/LockNetworkSmDevicesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\CheckinNetworkSmDevices200Response**](../Model/CheckinNetworkSmDevices200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyNetworkSmDevicesTags()`

```php
modifyNetworkSmDevicesTags($network_id, $modify_network_sm_devices_tags_request): \Meraki\Model\ModifyNetworkSmDevicesTags200ResponseInner[]
```

Add, delete, or update the tags of a set of devices

Add, delete, or update the tags of a set of devices

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$modify_network_sm_devices_tags_request = new \Meraki\Model\ModifyNetworkSmDevicesTagsRequest(); // \Meraki\Model\ModifyNetworkSmDevicesTagsRequest

try {
    $result = $apiInstance->modifyNetworkSmDevicesTags($network_id, $modify_network_sm_devices_tags_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->modifyNetworkSmDevicesTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **modify_network_sm_devices_tags_request** | [**\Meraki\Model\ModifyNetworkSmDevicesTagsRequest**](../Model/ModifyNetworkSmDevicesTagsRequest.md)|  | |

### Return type

[**\Meraki\Model\ModifyNetworkSmDevicesTags200ResponseInner[]**](../Model/ModifyNetworkSmDevicesTags200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `moveNetworkSmDevices()`

```php
moveNetworkSmDevices($network_id, $move_network_sm_devices_request): \Meraki\Model\MoveNetworkSmDevices200Response
```

Move a set of devices to a new network

Move a set of devices to a new network

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$move_network_sm_devices_request = new \Meraki\Model\MoveNetworkSmDevicesRequest(); // \Meraki\Model\MoveNetworkSmDevicesRequest

try {
    $result = $apiInstance->moveNetworkSmDevices($network_id, $move_network_sm_devices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->moveNetworkSmDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **move_network_sm_devices_request** | [**\Meraki\Model\MoveNetworkSmDevicesRequest**](../Model/MoveNetworkSmDevicesRequest.md)|  | |

### Return type

[**\Meraki\Model\MoveNetworkSmDevices200Response**](../Model/MoveNetworkSmDevices200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rebootDevice()`

```php
rebootDevice($serial): \Meraki\Model\RebootDevice202Response
```

Reboot a device

Reboot a device. This endpoint has a sustained rate limit of one request every 60 seconds.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->rebootDevice($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->rebootDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\RebootDevice202Response**](../Model/RebootDevice202Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rebootNetworkSmDevices()`

```php
rebootNetworkSmDevices($network_id, $reboot_network_sm_devices_request): \Meraki\Model\RebootNetworkSmDevices200Response
```

Reboot a set of endpoints

Reboot a set of endpoints

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$reboot_network_sm_devices_request = new \Meraki\Model\RebootNetworkSmDevicesRequest(); // \Meraki\Model\RebootNetworkSmDevicesRequest

try {
    $result = $apiInstance->rebootNetworkSmDevices($network_id, $reboot_network_sm_devices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->rebootNetworkSmDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **reboot_network_sm_devices_request** | [**\Meraki\Model\RebootNetworkSmDevicesRequest**](../Model/RebootNetworkSmDevicesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\RebootNetworkSmDevices200Response**](../Model/RebootNetworkSmDevices200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refreshNetworkSmDeviceDetails()`

```php
refreshNetworkSmDeviceDetails($network_id, $device_id): object
```

Refresh the details of a device

Refresh the details of a device

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID

try {
    $result = $apiInstance->refreshNetworkSmDeviceDetails($network_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->refreshNetworkSmDeviceDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |

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

## `removeNetworkDevices()`

```php
removeNetworkDevices($network_id, $remove_network_devices_request)
```

Remove a single device

Remove a single device

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$remove_network_devices_request = new \Meraki\Model\RemoveNetworkDevicesRequest(); // \Meraki\Model\RemoveNetworkDevicesRequest

try {
    $apiInstance->removeNetworkDevices($network_id, $remove_network_devices_request);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->removeNetworkDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **remove_network_devices_request** | [**\Meraki\Model\RemoveNetworkDevicesRequest**](../Model/RemoveNetworkDevicesRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shutdownNetworkSmDevices()`

```php
shutdownNetworkSmDevices($network_id, $shutdown_network_sm_devices_request): \Meraki\Model\RebootNetworkSmDevices200Response
```

Shutdown a set of endpoints

Shutdown a set of endpoints

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$shutdown_network_sm_devices_request = new \Meraki\Model\ShutdownNetworkSmDevicesRequest(); // \Meraki\Model\ShutdownNetworkSmDevicesRequest

try {
    $result = $apiInstance->shutdownNetworkSmDevices($network_id, $shutdown_network_sm_devices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->shutdownNetworkSmDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **shutdown_network_sm_devices_request** | [**\Meraki\Model\ShutdownNetworkSmDevicesRequest**](../Model/ShutdownNetworkSmDevicesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\RebootNetworkSmDevices200Response**](../Model/RebootNetworkSmDevices200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unenrollNetworkSmDevice()`

```php
unenrollNetworkSmDevice($network_id, $device_id): \Meraki\Model\UnenrollNetworkSmDevice200Response
```

Unenroll a device

Unenroll a device

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID

try {
    $result = $apiInstance->unenrollNetworkSmDevice($network_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->unenrollNetworkSmDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |

### Return type

[**\Meraki\Model\UnenrollNetworkSmDevice200Response**](../Model/UnenrollNetworkSmDevice200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uninstallNetworkSmDeviceApps()`

```php
uninstallNetworkSmDeviceApps($network_id, $device_id, $uninstall_network_sm_device_apps_request): object
```

Uninstall applications on a device

Uninstall applications on a device

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$device_id = 'device_id_example'; // string | Device ID
$uninstall_network_sm_device_apps_request = new \Meraki\Model\UninstallNetworkSmDeviceAppsRequest(); // \Meraki\Model\UninstallNetworkSmDeviceAppsRequest

try {
    $result = $apiInstance->uninstallNetworkSmDeviceApps($network_id, $device_id, $uninstall_network_sm_device_apps_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->uninstallNetworkSmDeviceApps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **device_id** | **string**| Device ID | |
| **uninstall_network_sm_device_apps_request** | [**\Meraki\Model\UninstallNetworkSmDeviceAppsRequest**](../Model/UninstallNetworkSmDeviceAppsRequest.md)|  | |

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

## `updateDevice()`

```php
updateDevice($serial, $update_device_request): \Meraki\Model\GetDevice200Response
```

Update the attributes of a device

Update the attributes of a device

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_request = new \Meraki\Model\UpdateDeviceRequest(); // \Meraki\Model\UpdateDeviceRequest

try {
    $result = $apiInstance->updateDevice($serial, $update_device_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->updateDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_request** | [**\Meraki\Model\UpdateDeviceRequest**](../Model/UpdateDeviceRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDevice200Response**](../Model/GetDevice200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceCellularSims()`

```php
updateDeviceCellularSims($serial, $update_device_cellular_sims_request): \Meraki\Model\GetDeviceCellularSims200Response
```

Updates the SIM and APN configurations for a cellular device.

Updates the SIM and APN configurations for a cellular device.

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_cellular_sims_request = new \Meraki\Model\UpdateDeviceCellularSimsRequest(); // \Meraki\Model\UpdateDeviceCellularSimsRequest

try {
    $result = $apiInstance->updateDeviceCellularSims($serial, $update_device_cellular_sims_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->updateDeviceCellularSims: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_cellular_sims_request** | [**\Meraki\Model\UpdateDeviceCellularSimsRequest**](../Model/UpdateDeviceCellularSimsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceCellularSims200Response**](../Model/GetDeviceCellularSims200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceManagementInterface()`

```php
updateDeviceManagementInterface($serial, $update_device_management_interface_request): \Meraki\Model\GetDeviceManagementInterface200Response
```

Update the management interface settings for a device

Update the management interface settings for a device

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_management_interface_request = new \Meraki\Model\UpdateDeviceManagementInterfaceRequest(); // \Meraki\Model\UpdateDeviceManagementInterfaceRequest

try {
    $result = $apiInstance->updateDeviceManagementInterface($serial, $update_device_management_interface_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->updateDeviceManagementInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_management_interface_request** | [**\Meraki\Model\UpdateDeviceManagementInterfaceRequest**](../Model/UpdateDeviceManagementInterfaceRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceManagementInterface200Response**](../Model/GetDeviceManagementInterface200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSmDevicesFields()`

```php
updateNetworkSmDevicesFields($network_id, $update_network_sm_devices_fields_request): \Meraki\Model\UpdateNetworkSmDevicesFields200ResponseInner[]
```

Modify the fields of a device

Modify the fields of a device

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_sm_devices_fields_request = new \Meraki\Model\UpdateNetworkSmDevicesFieldsRequest(); // \Meraki\Model\UpdateNetworkSmDevicesFieldsRequest

try {
    $result = $apiInstance->updateNetworkSmDevicesFields($network_id, $update_network_sm_devices_fields_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->updateNetworkSmDevicesFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_sm_devices_fields_request** | [**\Meraki\Model\UpdateNetworkSmDevicesFieldsRequest**](../Model/UpdateNetworkSmDevicesFieldsRequest.md)|  | |

### Return type

[**\Meraki\Model\UpdateNetworkSmDevicesFields200ResponseInner[]**](../Model/UpdateNetworkSmDevicesFields200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmxNetworkDevicesClaim()`

```php
vmxNetworkDevicesClaim($network_id, $vmx_network_devices_claim_request): \Meraki\Model\VmxNetworkDevicesClaim200Response
```

Claim a vMX into a network

Claim a vMX into a network

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$vmx_network_devices_claim_request = new \Meraki\Model\VmxNetworkDevicesClaimRequest(); // \Meraki\Model\VmxNetworkDevicesClaimRequest

try {
    $result = $apiInstance->vmxNetworkDevicesClaim($network_id, $vmx_network_devices_claim_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->vmxNetworkDevicesClaim: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **vmx_network_devices_claim_request** | [**\Meraki\Model\VmxNetworkDevicesClaimRequest**](../Model/VmxNetworkDevicesClaimRequest.md)|  | |

### Return type

[**\Meraki\Model\VmxNetworkDevicesClaim200Response**](../Model/VmxNetworkDevicesClaim200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wipeNetworkSmDevices()`

```php
wipeNetworkSmDevices($network_id, $wipe_network_sm_devices_request): \Meraki\Model\WipeNetworkSmDevices200Response
```

Wipe a device

Wipe a device

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


$apiInstance = new Meraki\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$wipe_network_sm_devices_request = new \Meraki\Model\WipeNetworkSmDevicesRequest(); // \Meraki\Model\WipeNetworkSmDevicesRequest

try {
    $result = $apiInstance->wipeNetworkSmDevices($network_id, $wipe_network_sm_devices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->wipeNetworkSmDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **wipe_network_sm_devices_request** | [**\Meraki\Model\WipeNetworkSmDevicesRequest**](../Model/WipeNetworkSmDevicesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\WipeNetworkSmDevices200Response**](../Model/WipeNetworkSmDevices200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
