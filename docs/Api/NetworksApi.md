# Meraki\NetworksApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**batchNetworkFloorPlansAutoLocateJobs()**](NetworksApi.md#batchNetworkFloorPlansAutoLocateJobs) | **POST** /networks/{networkId}/floorPlans/autoLocate/jobs/batch | Schedule auto locate jobs for one or more floor plans in a network |
| [**batchNetworkFloorPlansDevicesUpdate()**](NetworksApi.md#batchNetworkFloorPlansDevicesUpdate) | **POST** /networks/{networkId}/floorPlans/devices/batchUpdate | Update floorplan assignments for a batch of devices |
| [**bindNetwork()**](NetworksApi.md#bindNetwork) | **POST** /networks/{networkId}/bind | Bind a network to a template. |
| [**cancelNetworkFloorPlansAutoLocateJob()**](NetworksApi.md#cancelNetworkFloorPlansAutoLocateJob) | **POST** /networks/{networkId}/floorPlans/autoLocate/jobs/{jobId}/cancel | Cancel a scheduled or running auto locate job |
| [**claimNetworkDevices()**](NetworksApi.md#claimNetworkDevices) | **POST** /networks/{networkId}/devices/claim | Claim devices into a network. (Note: for recently claimed devices, it may take a few minutes for API requests against that device to succeed) |
| [**combineOrganizationNetworks()**](NetworksApi.md#combineOrganizationNetworks) | **POST** /organizations/{organizationId}/networks/combine | Combine multiple networks into a single network |
| [**createNetworkFirmwareUpgradesRollback()**](NetworksApi.md#createNetworkFirmwareUpgradesRollback) | **POST** /networks/{networkId}/firmwareUpgrades/rollbacks | Rollback a Firmware Upgrade For A Network |
| [**createNetworkFirmwareUpgradesStagedEvent()**](NetworksApi.md#createNetworkFirmwareUpgradesStagedEvent) | **POST** /networks/{networkId}/firmwareUpgrades/staged/events | Create a Staged Upgrade Event for a network |
| [**createNetworkFirmwareUpgradesStagedGroup()**](NetworksApi.md#createNetworkFirmwareUpgradesStagedGroup) | **POST** /networks/{networkId}/firmwareUpgrades/staged/groups | Create a Staged Upgrade Group for a network |
| [**createNetworkFloorPlan()**](NetworksApi.md#createNetworkFloorPlan) | **POST** /networks/{networkId}/floorPlans | Upload a floor plan |
| [**createNetworkGroupPolicy()**](NetworksApi.md#createNetworkGroupPolicy) | **POST** /networks/{networkId}/groupPolicies | Create a group policy |
| [**createNetworkMerakiAuthUser()**](NetworksApi.md#createNetworkMerakiAuthUser) | **POST** /networks/{networkId}/merakiAuthUsers | Authorize a user configured with Meraki Authentication for a network (currently supports 802.1X, splash guest, and client VPN users, and currently, organizations have a 50,000 user cap) |
| [**createNetworkMqttBroker()**](NetworksApi.md#createNetworkMqttBroker) | **POST** /networks/{networkId}/mqttBrokers | Add an MQTT broker |
| [**createNetworkPiiRequest()**](NetworksApi.md#createNetworkPiiRequest) | **POST** /networks/{networkId}/pii/requests | Submit a new delete or restrict processing PII request |
| [**createNetworkVlanProfile()**](NetworksApi.md#createNetworkVlanProfile) | **POST** /networks/{networkId}/vlanProfiles | Create a VLAN profile for a network |
| [**createNetworkWebhooksHttpServer()**](NetworksApi.md#createNetworkWebhooksHttpServer) | **POST** /networks/{networkId}/webhooks/httpServers | Add an HTTP server to a network |
| [**createNetworkWebhooksPayloadTemplate()**](NetworksApi.md#createNetworkWebhooksPayloadTemplate) | **POST** /networks/{networkId}/webhooks/payloadTemplates | Create a webhook payload template for a network |
| [**createNetworkWebhooksWebhookTest()**](NetworksApi.md#createNetworkWebhooksWebhookTest) | **POST** /networks/{networkId}/webhooks/webhookTests | Send a test webhook for a network |
| [**createOrganizationNetwork()**](NetworksApi.md#createOrganizationNetwork) | **POST** /organizations/{organizationId}/networks | Create a network |
| [**deferNetworkFirmwareUpgradesStagedEvents()**](NetworksApi.md#deferNetworkFirmwareUpgradesStagedEvents) | **POST** /networks/{networkId}/firmwareUpgrades/staged/events/defer | Postpone by 1 week all pending staged upgrade stages for a network |
| [**deleteNetwork()**](NetworksApi.md#deleteNetwork) | **DELETE** /networks/{networkId} | Delete a network |
| [**deleteNetworkFirmwareUpgradesStagedGroup()**](NetworksApi.md#deleteNetworkFirmwareUpgradesStagedGroup) | **DELETE** /networks/{networkId}/firmwareUpgrades/staged/groups/{groupId} | Delete a Staged Upgrade Group |
| [**deleteNetworkFloorPlan()**](NetworksApi.md#deleteNetworkFloorPlan) | **DELETE** /networks/{networkId}/floorPlans/{floorPlanId} | Destroy a floor plan |
| [**deleteNetworkGroupPolicy()**](NetworksApi.md#deleteNetworkGroupPolicy) | **DELETE** /networks/{networkId}/groupPolicies/{groupPolicyId} | Delete a group policy |
| [**deleteNetworkMerakiAuthUser()**](NetworksApi.md#deleteNetworkMerakiAuthUser) | **DELETE** /networks/{networkId}/merakiAuthUsers/{merakiAuthUserId} | Delete an 802.1X RADIUS user, or deauthorize and optionally delete a splash guest or client VPN user. |
| [**deleteNetworkMqttBroker()**](NetworksApi.md#deleteNetworkMqttBroker) | **DELETE** /networks/{networkId}/mqttBrokers/{mqttBrokerId} | Delete an MQTT broker |
| [**deleteNetworkPiiRequest()**](NetworksApi.md#deleteNetworkPiiRequest) | **DELETE** /networks/{networkId}/pii/requests/{requestId} | Delete a restrict processing PII request |
| [**deleteNetworkVlanProfile()**](NetworksApi.md#deleteNetworkVlanProfile) | **DELETE** /networks/{networkId}/vlanProfiles/{iname} | Delete a VLAN profile of a network |
| [**deleteNetworkWebhooksHttpServer()**](NetworksApi.md#deleteNetworkWebhooksHttpServer) | **DELETE** /networks/{networkId}/webhooks/httpServers/{httpServerId} | Delete an HTTP server from a network |
| [**deleteNetworkWebhooksPayloadTemplate()**](NetworksApi.md#deleteNetworkWebhooksPayloadTemplate) | **DELETE** /networks/{networkId}/webhooks/payloadTemplates/{payloadTemplateId} | Destroy a webhook payload template for a network |
| [**disableOrganizationIntegrationsXdrNetworks()**](NetworksApi.md#disableOrganizationIntegrationsXdrNetworks) | **POST** /organizations/{organizationId}/integrations/xdr/networks/disable | Disable XDR on networks |
| [**enableOrganizationIntegrationsXdrNetworks()**](NetworksApi.md#enableOrganizationIntegrationsXdrNetworks) | **POST** /organizations/{organizationId}/integrations/xdr/networks/enable | Enable XDR on networks |
| [**getNetwork()**](NetworksApi.md#getNetwork) | **GET** /networks/{networkId} | Return a network |
| [**getNetworkAlertsHistory()**](NetworksApi.md#getNetworkAlertsHistory) | **GET** /networks/{networkId}/alerts/history | Return the alert history for this network |
| [**getNetworkAlertsSettings()**](NetworksApi.md#getNetworkAlertsSettings) | **GET** /networks/{networkId}/alerts/settings | Return the alert configuration for this network |
| [**getNetworkBluetoothClient()**](NetworksApi.md#getNetworkBluetoothClient) | **GET** /networks/{networkId}/bluetoothClients/{bluetoothClientId} | Return a Bluetooth client |
| [**getNetworkBluetoothClients()**](NetworksApi.md#getNetworkBluetoothClients) | **GET** /networks/{networkId}/bluetoothClients | List the Bluetooth clients seen by APs in this network |
| [**getNetworkClient()**](NetworksApi.md#getNetworkClient) | **GET** /networks/{networkId}/clients/{clientId} | Return the client associated with the given identifier |
| [**getNetworkClientPolicy()**](NetworksApi.md#getNetworkClientPolicy) | **GET** /networks/{networkId}/clients/{clientId}/policy | Return the policy assigned to a client on the network |
| [**getNetworkClientSplashAuthorizationStatus()**](NetworksApi.md#getNetworkClientSplashAuthorizationStatus) | **GET** /networks/{networkId}/clients/{clientId}/splashAuthorizationStatus | Return the splash authorization for a client, for each SSID they&#39;ve associated with through splash |
| [**getNetworkClientTrafficHistory()**](NetworksApi.md#getNetworkClientTrafficHistory) | **GET** /networks/{networkId}/clients/{clientId}/trafficHistory | Return the client&#39;s network traffic data over time |
| [**getNetworkClientUsageHistory()**](NetworksApi.md#getNetworkClientUsageHistory) | **GET** /networks/{networkId}/clients/{clientId}/usageHistory | Return the client&#39;s daily usage history |
| [**getNetworkClients()**](NetworksApi.md#getNetworkClients) | **GET** /networks/{networkId}/clients | List the clients that have used this network in the timespan |
| [**getNetworkClientsApplicationUsage()**](NetworksApi.md#getNetworkClientsApplicationUsage) | **GET** /networks/{networkId}/clients/applicationUsage | Return the application usage data for clients |
| [**getNetworkClientsBandwidthUsageHistory()**](NetworksApi.md#getNetworkClientsBandwidthUsageHistory) | **GET** /networks/{networkId}/clients/bandwidthUsageHistory | Returns a timeseries of total traffic consumption rates for all clients on a network within a given timespan, in megabits per second. |
| [**getNetworkClientsOverview()**](NetworksApi.md#getNetworkClientsOverview) | **GET** /networks/{networkId}/clients/overview | Return overview statistics for network clients |
| [**getNetworkClientsUsageHistories()**](NetworksApi.md#getNetworkClientsUsageHistories) | **GET** /networks/{networkId}/clients/usageHistories | Return the usage histories for clients |
| [**getNetworkDevices()**](NetworksApi.md#getNetworkDevices) | **GET** /networks/{networkId}/devices | List the devices in a network |
| [**getNetworkEvents()**](NetworksApi.md#getNetworkEvents) | **GET** /networks/{networkId}/events | List the events for the network |
| [**getNetworkEventsEventTypes()**](NetworksApi.md#getNetworkEventsEventTypes) | **GET** /networks/{networkId}/events/eventTypes | List the event type to human-readable description |
| [**getNetworkFirmwareUpgrades()**](NetworksApi.md#getNetworkFirmwareUpgrades) | **GET** /networks/{networkId}/firmwareUpgrades | Get firmware upgrade information for a network |
| [**getNetworkFirmwareUpgradesStagedEvents()**](NetworksApi.md#getNetworkFirmwareUpgradesStagedEvents) | **GET** /networks/{networkId}/firmwareUpgrades/staged/events | Get the Staged Upgrade Event from a network |
| [**getNetworkFirmwareUpgradesStagedGroup()**](NetworksApi.md#getNetworkFirmwareUpgradesStagedGroup) | **GET** /networks/{networkId}/firmwareUpgrades/staged/groups/{groupId} | Get a Staged Upgrade Group from a network |
| [**getNetworkFirmwareUpgradesStagedGroups()**](NetworksApi.md#getNetworkFirmwareUpgradesStagedGroups) | **GET** /networks/{networkId}/firmwareUpgrades/staged/groups | List of Staged Upgrade Groups in a network |
| [**getNetworkFirmwareUpgradesStagedStages()**](NetworksApi.md#getNetworkFirmwareUpgradesStagedStages) | **GET** /networks/{networkId}/firmwareUpgrades/staged/stages | Order of Staged Upgrade Groups in a network |
| [**getNetworkFloorPlan()**](NetworksApi.md#getNetworkFloorPlan) | **GET** /networks/{networkId}/floorPlans/{floorPlanId} | Find a floor plan by ID |
| [**getNetworkFloorPlans()**](NetworksApi.md#getNetworkFloorPlans) | **GET** /networks/{networkId}/floorPlans | List the floor plans that belong to your network |
| [**getNetworkGroupPolicies()**](NetworksApi.md#getNetworkGroupPolicies) | **GET** /networks/{networkId}/groupPolicies | List the group policies in a network |
| [**getNetworkGroupPolicy()**](NetworksApi.md#getNetworkGroupPolicy) | **GET** /networks/{networkId}/groupPolicies/{groupPolicyId} | Display a group policy |
| [**getNetworkHealthAlerts()**](NetworksApi.md#getNetworkHealthAlerts) | **GET** /networks/{networkId}/health/alerts | Return all global alerts on this network |
| [**getNetworkMerakiAuthUser()**](NetworksApi.md#getNetworkMerakiAuthUser) | **GET** /networks/{networkId}/merakiAuthUsers/{merakiAuthUserId} | Return the Meraki Auth splash guest, RADIUS, or client VPN user |
| [**getNetworkMerakiAuthUsers()**](NetworksApi.md#getNetworkMerakiAuthUsers) | **GET** /networks/{networkId}/merakiAuthUsers | List the authorized users configured under Meraki Authentication for a network (splash guest or RADIUS users for a wireless network, or client VPN users for a MX network) |
| [**getNetworkMqttBroker()**](NetworksApi.md#getNetworkMqttBroker) | **GET** /networks/{networkId}/mqttBrokers/{mqttBrokerId} | Return an MQTT broker |
| [**getNetworkMqttBrokers()**](NetworksApi.md#getNetworkMqttBrokers) | **GET** /networks/{networkId}/mqttBrokers | List the MQTT brokers for this network |
| [**getNetworkNetflow()**](NetworksApi.md#getNetworkNetflow) | **GET** /networks/{networkId}/netflow | Return the NetFlow traffic reporting settings for a network |
| [**getNetworkNetworkHealthChannelUtilization()**](NetworksApi.md#getNetworkNetworkHealthChannelUtilization) | **GET** /networks/{networkId}/networkHealth/channelUtilization | Get the channel utilization over each radio for all APs in a network. |
| [**getNetworkPiiPiiKeys()**](NetworksApi.md#getNetworkPiiPiiKeys) | **GET** /networks/{networkId}/pii/piiKeys | List the keys required to access Personally Identifiable Information (PII) for a given identifier |
| [**getNetworkPiiRequest()**](NetworksApi.md#getNetworkPiiRequest) | **GET** /networks/{networkId}/pii/requests/{requestId} | Return a PII request |
| [**getNetworkPiiRequests()**](NetworksApi.md#getNetworkPiiRequests) | **GET** /networks/{networkId}/pii/requests | List the PII requests for this network or organization |
| [**getNetworkPiiSmDevicesForKey()**](NetworksApi.md#getNetworkPiiSmDevicesForKey) | **GET** /networks/{networkId}/pii/smDevicesForKey | Given a piece of Personally Identifiable Information (PII), return the Systems Manager device ID(s) associated with that identifier |
| [**getNetworkPiiSmOwnersForKey()**](NetworksApi.md#getNetworkPiiSmOwnersForKey) | **GET** /networks/{networkId}/pii/smOwnersForKey | Given a piece of Personally Identifiable Information (PII), return the Systems Manager owner ID(s) associated with that identifier |
| [**getNetworkPoliciesByClient()**](NetworksApi.md#getNetworkPoliciesByClient) | **GET** /networks/{networkId}/policies/byClient | Get policies for all clients with policies |
| [**getNetworkSettings()**](NetworksApi.md#getNetworkSettings) | **GET** /networks/{networkId}/settings | Return the settings for a network |
| [**getNetworkSnmp()**](NetworksApi.md#getNetworkSnmp) | **GET** /networks/{networkId}/snmp | Return the SNMP settings for a network |
| [**getNetworkSplashLoginAttempts()**](NetworksApi.md#getNetworkSplashLoginAttempts) | **GET** /networks/{networkId}/splashLoginAttempts | List the splash login attempts for a network |
| [**getNetworkSyslogServers()**](NetworksApi.md#getNetworkSyslogServers) | **GET** /networks/{networkId}/syslogServers | List the syslog servers for a network |
| [**getNetworkTopologyLinkLayer()**](NetworksApi.md#getNetworkTopologyLinkLayer) | **GET** /networks/{networkId}/topology/linkLayer | List the LLDP and CDP information for all discovered devices and connections in a network |
| [**getNetworkTraffic()**](NetworksApi.md#getNetworkTraffic) | **GET** /networks/{networkId}/traffic | Return the traffic analysis data for this network |
| [**getNetworkTrafficAnalysis()**](NetworksApi.md#getNetworkTrafficAnalysis) | **GET** /networks/{networkId}/trafficAnalysis | Return the traffic analysis settings for a network |
| [**getNetworkTrafficShapingApplicationCategories()**](NetworksApi.md#getNetworkTrafficShapingApplicationCategories) | **GET** /networks/{networkId}/trafficShaping/applicationCategories | Returns the application categories for traffic shaping rules |
| [**getNetworkTrafficShapingDscpTaggingOptions()**](NetworksApi.md#getNetworkTrafficShapingDscpTaggingOptions) | **GET** /networks/{networkId}/trafficShaping/dscpTaggingOptions | Returns the available DSCP tagging options for your traffic shaping rules. |
| [**getNetworkVlanProfile()**](NetworksApi.md#getNetworkVlanProfile) | **GET** /networks/{networkId}/vlanProfiles/{iname} | Get an existing VLAN profile of a network |
| [**getNetworkVlanProfiles()**](NetworksApi.md#getNetworkVlanProfiles) | **GET** /networks/{networkId}/vlanProfiles | List VLAN profiles for a network |
| [**getNetworkVlanProfilesAssignmentsByDevice()**](NetworksApi.md#getNetworkVlanProfilesAssignmentsByDevice) | **GET** /networks/{networkId}/vlanProfiles/assignments/byDevice | Get the assigned VLAN Profiles for devices in a network |
| [**getNetworkWebhooksHttpServer()**](NetworksApi.md#getNetworkWebhooksHttpServer) | **GET** /networks/{networkId}/webhooks/httpServers/{httpServerId} | Return an HTTP server for a network |
| [**getNetworkWebhooksHttpServers()**](NetworksApi.md#getNetworkWebhooksHttpServers) | **GET** /networks/{networkId}/webhooks/httpServers | List the HTTP servers for a network |
| [**getNetworkWebhooksPayloadTemplate()**](NetworksApi.md#getNetworkWebhooksPayloadTemplate) | **GET** /networks/{networkId}/webhooks/payloadTemplates/{payloadTemplateId} | Get the webhook payload template for a network |
| [**getNetworkWebhooksPayloadTemplates()**](NetworksApi.md#getNetworkWebhooksPayloadTemplates) | **GET** /networks/{networkId}/webhooks/payloadTemplates | List the webhook payload templates for a network |
| [**getNetworkWebhooksWebhookTest()**](NetworksApi.md#getNetworkWebhooksWebhookTest) | **GET** /networks/{networkId}/webhooks/webhookTests/{webhookTestId} | Return the status of a webhook test for a network |
| [**getOrganizationIntegrationsXdrNetworks()**](NetworksApi.md#getOrganizationIntegrationsXdrNetworks) | **GET** /organizations/{organizationId}/integrations/xdr/networks | Returns the networks in the organization that have XDR enabled |
| [**getOrganizationInventoryOnboardingCloudMonitoringNetworks()**](NetworksApi.md#getOrganizationInventoryOnboardingCloudMonitoringNetworks) | **GET** /organizations/{organizationId}/inventory/onboarding/cloudMonitoring/networks | Returns list of networks eligible for adding cloud monitored device |
| [**getOrganizationNetworks()**](NetworksApi.md#getOrganizationNetworks) | **GET** /organizations/{organizationId}/networks | List the networks that the user has privileges on in an organization |
| [**getOrganizationSummaryTopNetworksByStatus()**](NetworksApi.md#getOrganizationSummaryTopNetworksByStatus) | **GET** /organizations/{organizationId}/summary/top/networks/byStatus | List the client and status overview information for the networks in an organization |
| [**provisionNetworkClients()**](NetworksApi.md#provisionNetworkClients) | **POST** /networks/{networkId}/clients/provision | Provisions a client with a name and policy |
| [**publishNetworkFloorPlansAutoLocateJob()**](NetworksApi.md#publishNetworkFloorPlansAutoLocateJob) | **POST** /networks/{networkId}/floorPlans/autoLocate/jobs/{jobId}/publish | Update the status of a finished auto locate job to be published, and update device locations |
| [**reassignNetworkVlanProfilesAssignments()**](NetworksApi.md#reassignNetworkVlanProfilesAssignments) | **POST** /networks/{networkId}/vlanProfiles/assignments/reassign | Update the assigned VLAN Profile for devices in a network |
| [**recalculateNetworkFloorPlansAutoLocateJob()**](NetworksApi.md#recalculateNetworkFloorPlansAutoLocateJob) | **POST** /networks/{networkId}/floorPlans/autoLocate/jobs/{jobId}/recalculate | Trigger auto locate recalculation for a job, and optionally set anchors |
| [**removeNetworkDevices()**](NetworksApi.md#removeNetworkDevices) | **POST** /networks/{networkId}/devices/remove | Remove a single device |
| [**rollbacksNetworkFirmwareUpgradesStagedEvents()**](NetworksApi.md#rollbacksNetworkFirmwareUpgradesStagedEvents) | **POST** /networks/{networkId}/firmwareUpgrades/staged/events/rollbacks | Rollback a Staged Upgrade Event for a network |
| [**splitNetwork()**](NetworksApi.md#splitNetwork) | **POST** /networks/{networkId}/split | Split a combined network into individual networks for each type of device |
| [**unbindNetwork()**](NetworksApi.md#unbindNetwork) | **POST** /networks/{networkId}/unbind | Unbind a network from a template. |
| [**updateNetwork()**](NetworksApi.md#updateNetwork) | **PUT** /networks/{networkId} | Update a network |
| [**updateNetworkAlertsSettings()**](NetworksApi.md#updateNetworkAlertsSettings) | **PUT** /networks/{networkId}/alerts/settings | Update the alert configuration for this network |
| [**updateNetworkClientPolicy()**](NetworksApi.md#updateNetworkClientPolicy) | **PUT** /networks/{networkId}/clients/{clientId}/policy | Update the policy assigned to a client on the network |
| [**updateNetworkClientSplashAuthorizationStatus()**](NetworksApi.md#updateNetworkClientSplashAuthorizationStatus) | **PUT** /networks/{networkId}/clients/{clientId}/splashAuthorizationStatus | Update a client&#39;s splash authorization |
| [**updateNetworkFirmwareUpgrades()**](NetworksApi.md#updateNetworkFirmwareUpgrades) | **PUT** /networks/{networkId}/firmwareUpgrades | Update firmware upgrade information for a network |
| [**updateNetworkFirmwareUpgradesStagedEvents()**](NetworksApi.md#updateNetworkFirmwareUpgradesStagedEvents) | **PUT** /networks/{networkId}/firmwareUpgrades/staged/events | Update the Staged Upgrade Event for a network |
| [**updateNetworkFirmwareUpgradesStagedGroup()**](NetworksApi.md#updateNetworkFirmwareUpgradesStagedGroup) | **PUT** /networks/{networkId}/firmwareUpgrades/staged/groups/{groupId} | Update a Staged Upgrade Group for a network |
| [**updateNetworkFirmwareUpgradesStagedStages()**](NetworksApi.md#updateNetworkFirmwareUpgradesStagedStages) | **PUT** /networks/{networkId}/firmwareUpgrades/staged/stages | Assign Staged Upgrade Group order in the sequence. |
| [**updateNetworkFloorPlan()**](NetworksApi.md#updateNetworkFloorPlan) | **PUT** /networks/{networkId}/floorPlans/{floorPlanId} | Update a floor plan&#39;s geolocation and other meta data |
| [**updateNetworkGroupPolicy()**](NetworksApi.md#updateNetworkGroupPolicy) | **PUT** /networks/{networkId}/groupPolicies/{groupPolicyId} | Update a group policy |
| [**updateNetworkMerakiAuthUser()**](NetworksApi.md#updateNetworkMerakiAuthUser) | **PUT** /networks/{networkId}/merakiAuthUsers/{merakiAuthUserId} | Update a user configured with Meraki Authentication (currently, 802.1X RADIUS, splash guest, and client VPN users can be updated) |
| [**updateNetworkMqttBroker()**](NetworksApi.md#updateNetworkMqttBroker) | **PUT** /networks/{networkId}/mqttBrokers/{mqttBrokerId} | Update an MQTT broker |
| [**updateNetworkNetflow()**](NetworksApi.md#updateNetworkNetflow) | **PUT** /networks/{networkId}/netflow | Update the NetFlow traffic reporting settings for a network |
| [**updateNetworkSettings()**](NetworksApi.md#updateNetworkSettings) | **PUT** /networks/{networkId}/settings | Update the settings for a network |
| [**updateNetworkSnmp()**](NetworksApi.md#updateNetworkSnmp) | **PUT** /networks/{networkId}/snmp | Update the SNMP settings for a network |
| [**updateNetworkSyslogServers()**](NetworksApi.md#updateNetworkSyslogServers) | **PUT** /networks/{networkId}/syslogServers | Update the syslog servers for a network |
| [**updateNetworkTrafficAnalysis()**](NetworksApi.md#updateNetworkTrafficAnalysis) | **PUT** /networks/{networkId}/trafficAnalysis | Update the traffic analysis settings for a network |
| [**updateNetworkVlanProfile()**](NetworksApi.md#updateNetworkVlanProfile) | **PUT** /networks/{networkId}/vlanProfiles/{iname} | Update an existing VLAN profile of a network |
| [**updateNetworkWebhooksHttpServer()**](NetworksApi.md#updateNetworkWebhooksHttpServer) | **PUT** /networks/{networkId}/webhooks/httpServers/{httpServerId} | Update an HTTP server |
| [**updateNetworkWebhooksPayloadTemplate()**](NetworksApi.md#updateNetworkWebhooksPayloadTemplate) | **PUT** /networks/{networkId}/webhooks/payloadTemplates/{payloadTemplateId} | Update a webhook payload template for a network |
| [**vmxNetworkDevicesClaim()**](NetworksApi.md#vmxNetworkDevicesClaim) | **POST** /networks/{networkId}/devices/claim/vmx | Claim a vMX into a network |


## `batchNetworkFloorPlansAutoLocateJobs()`

```php
batchNetworkFloorPlansAutoLocateJobs($network_id, $batch_network_floor_plans_auto_locate_jobs_request): \Meraki\Model\BatchNetworkFloorPlansAutoLocateJobs200Response
```

Schedule auto locate jobs for one or more floor plans in a network

Schedule auto locate jobs for one or more floor plans in a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$batch_network_floor_plans_auto_locate_jobs_request = new \Meraki\Model\BatchNetworkFloorPlansAutoLocateJobsRequest(); // \Meraki\Model\BatchNetworkFloorPlansAutoLocateJobsRequest

try {
    $result = $apiInstance->batchNetworkFloorPlansAutoLocateJobs($network_id, $batch_network_floor_plans_auto_locate_jobs_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->batchNetworkFloorPlansAutoLocateJobs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **batch_network_floor_plans_auto_locate_jobs_request** | [**\Meraki\Model\BatchNetworkFloorPlansAutoLocateJobsRequest**](../Model/BatchNetworkFloorPlansAutoLocateJobsRequest.md)|  | |

### Return type

[**\Meraki\Model\BatchNetworkFloorPlansAutoLocateJobs200Response**](../Model/BatchNetworkFloorPlansAutoLocateJobs200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new Meraki\Api\NetworksApi(
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
    echo 'Exception when calling NetworksApi->batchNetworkFloorPlansDevicesUpdate: ', $e->getMessage(), PHP_EOL;
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

## `bindNetwork()`

```php
bindNetwork($network_id, $bind_network_request): \Meraki\Model\BindNetwork200Response
```

Bind a network to a template.

Bind a network to a template.

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$bind_network_request = new \Meraki\Model\BindNetworkRequest(); // \Meraki\Model\BindNetworkRequest

try {
    $result = $apiInstance->bindNetwork($network_id, $bind_network_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->bindNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **bind_network_request** | [**\Meraki\Model\BindNetworkRequest**](../Model/BindNetworkRequest.md)|  | |

### Return type

[**\Meraki\Model\BindNetwork200Response**](../Model/BindNetwork200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelNetworkFloorPlansAutoLocateJob()`

```php
cancelNetworkFloorPlansAutoLocateJob($network_id, $job_id)
```

Cancel a scheduled or running auto locate job

Cancel a scheduled or running auto locate job

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$job_id = 'job_id_example'; // string | Job ID

try {
    $apiInstance->cancelNetworkFloorPlansAutoLocateJob($network_id, $job_id);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->cancelNetworkFloorPlansAutoLocateJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **job_id** | **string**| Job ID | |

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


$apiInstance = new Meraki\Api\NetworksApi(
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
    echo 'Exception when calling NetworksApi->claimNetworkDevices: ', $e->getMessage(), PHP_EOL;
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

## `combineOrganizationNetworks()`

```php
combineOrganizationNetworks($organization_id, $combine_organization_networks_request): \Meraki\Model\CombineOrganizationNetworks200Response
```

Combine multiple networks into a single network

Combine multiple networks into a single network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$combine_organization_networks_request = new \Meraki\Model\CombineOrganizationNetworksRequest(); // \Meraki\Model\CombineOrganizationNetworksRequest

try {
    $result = $apiInstance->combineOrganizationNetworks($organization_id, $combine_organization_networks_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->combineOrganizationNetworks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **combine_organization_networks_request** | [**\Meraki\Model\CombineOrganizationNetworksRequest**](../Model/CombineOrganizationNetworksRequest.md)|  | |

### Return type

[**\Meraki\Model\CombineOrganizationNetworks200Response**](../Model/CombineOrganizationNetworks200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkFirmwareUpgradesRollback()`

```php
createNetworkFirmwareUpgradesRollback($network_id, $create_network_firmware_upgrades_rollback_request): \Meraki\Model\CreateNetworkFirmwareUpgradesRollback200Response
```

Rollback a Firmware Upgrade For A Network

Rollback a Firmware Upgrade For A Network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_firmware_upgrades_rollback_request = new \Meraki\Model\CreateNetworkFirmwareUpgradesRollbackRequest(); // \Meraki\Model\CreateNetworkFirmwareUpgradesRollbackRequest

try {
    $result = $apiInstance->createNetworkFirmwareUpgradesRollback($network_id, $create_network_firmware_upgrades_rollback_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->createNetworkFirmwareUpgradesRollback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_firmware_upgrades_rollback_request** | [**\Meraki\Model\CreateNetworkFirmwareUpgradesRollbackRequest**](../Model/CreateNetworkFirmwareUpgradesRollbackRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateNetworkFirmwareUpgradesRollback200Response**](../Model/CreateNetworkFirmwareUpgradesRollback200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkFirmwareUpgradesStagedEvent()`

```php
createNetworkFirmwareUpgradesStagedEvent($network_id, $create_network_firmware_upgrades_staged_event_request): \Meraki\Model\GetNetworkFirmwareUpgradesStagedEvents200Response
```

Create a Staged Upgrade Event for a network

Create a Staged Upgrade Event for a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_firmware_upgrades_staged_event_request = new \Meraki\Model\CreateNetworkFirmwareUpgradesStagedEventRequest(); // \Meraki\Model\CreateNetworkFirmwareUpgradesStagedEventRequest

try {
    $result = $apiInstance->createNetworkFirmwareUpgradesStagedEvent($network_id, $create_network_firmware_upgrades_staged_event_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->createNetworkFirmwareUpgradesStagedEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_firmware_upgrades_staged_event_request** | [**\Meraki\Model\CreateNetworkFirmwareUpgradesStagedEventRequest**](../Model/CreateNetworkFirmwareUpgradesStagedEventRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgradesStagedEvents200Response**](../Model/GetNetworkFirmwareUpgradesStagedEvents200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkFirmwareUpgradesStagedGroup()`

```php
createNetworkFirmwareUpgradesStagedGroup($network_id, $create_network_firmware_upgrades_staged_group_request): \Meraki\Model\GetNetworkFirmwareUpgradesStagedGroups200ResponseInner
```

Create a Staged Upgrade Group for a network

Create a Staged Upgrade Group for a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_firmware_upgrades_staged_group_request = new \Meraki\Model\CreateNetworkFirmwareUpgradesStagedGroupRequest(); // \Meraki\Model\CreateNetworkFirmwareUpgradesStagedGroupRequest

try {
    $result = $apiInstance->createNetworkFirmwareUpgradesStagedGroup($network_id, $create_network_firmware_upgrades_staged_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->createNetworkFirmwareUpgradesStagedGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_firmware_upgrades_staged_group_request** | [**\Meraki\Model\CreateNetworkFirmwareUpgradesStagedGroupRequest**](../Model/CreateNetworkFirmwareUpgradesStagedGroupRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgradesStagedGroups200ResponseInner**](../Model/GetNetworkFirmwareUpgradesStagedGroups200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkFloorPlan()`

```php
createNetworkFloorPlan($network_id, $create_network_floor_plan_request): \Meraki\Model\GetNetworkFloorPlans200ResponseInner
```

Upload a floor plan

Upload a floor plan

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_floor_plan_request = new \Meraki\Model\CreateNetworkFloorPlanRequest(); // \Meraki\Model\CreateNetworkFloorPlanRequest

try {
    $result = $apiInstance->createNetworkFloorPlan($network_id, $create_network_floor_plan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->createNetworkFloorPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_floor_plan_request** | [**\Meraki\Model\CreateNetworkFloorPlanRequest**](../Model/CreateNetworkFloorPlanRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkFloorPlans200ResponseInner**](../Model/GetNetworkFloorPlans200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkGroupPolicy()`

```php
createNetworkGroupPolicy($network_id, $create_network_group_policy_request): \Meraki\Model\GetNetworkGroupPolicies200ResponseInner
```

Create a group policy

Create a group policy

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_group_policy_request = new \Meraki\Model\CreateNetworkGroupPolicyRequest(); // \Meraki\Model\CreateNetworkGroupPolicyRequest

try {
    $result = $apiInstance->createNetworkGroupPolicy($network_id, $create_network_group_policy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->createNetworkGroupPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_group_policy_request** | [**\Meraki\Model\CreateNetworkGroupPolicyRequest**](../Model/CreateNetworkGroupPolicyRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkGroupPolicies200ResponseInner**](../Model/GetNetworkGroupPolicies200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkMerakiAuthUser()`

```php
createNetworkMerakiAuthUser($network_id, $create_network_meraki_auth_user_request): \Meraki\Model\GetNetworkMerakiAuthUsers200ResponseInner
```

Authorize a user configured with Meraki Authentication for a network (currently supports 802.1X, splash guest, and client VPN users, and currently, organizations have a 50,000 user cap)

Authorize a user configured with Meraki Authentication for a network (currently supports 802.1X, splash guest, and client VPN users, and currently, organizations have a 50,000 user cap)

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_meraki_auth_user_request = new \Meraki\Model\CreateNetworkMerakiAuthUserRequest(); // \Meraki\Model\CreateNetworkMerakiAuthUserRequest

try {
    $result = $apiInstance->createNetworkMerakiAuthUser($network_id, $create_network_meraki_auth_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->createNetworkMerakiAuthUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_meraki_auth_user_request** | [**\Meraki\Model\CreateNetworkMerakiAuthUserRequest**](../Model/CreateNetworkMerakiAuthUserRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkMerakiAuthUsers200ResponseInner**](../Model/GetNetworkMerakiAuthUsers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkMqttBroker()`

```php
createNetworkMqttBroker($network_id, $create_network_mqtt_broker_request): \Meraki\Model\GetNetworkMqttBrokers200ResponseInner
```

Add an MQTT broker

Add an MQTT broker

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_mqtt_broker_request = new \Meraki\Model\CreateNetworkMqttBrokerRequest(); // \Meraki\Model\CreateNetworkMqttBrokerRequest

try {
    $result = $apiInstance->createNetworkMqttBroker($network_id, $create_network_mqtt_broker_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->createNetworkMqttBroker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_mqtt_broker_request** | [**\Meraki\Model\CreateNetworkMqttBrokerRequest**](../Model/CreateNetworkMqttBrokerRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkMqttBrokers200ResponseInner**](../Model/GetNetworkMqttBrokers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkPiiRequest()`

```php
createNetworkPiiRequest($network_id, $create_network_pii_request_request): \Meraki\Model\GetNetworkPiiRequests200ResponseInner
```

Submit a new delete or restrict processing PII request

Submit a new delete or restrict processing PII request  ## ALTERNATE PATH  ``` /organizations/{organizationId}/pii/requests ```

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_pii_request_request = new \Meraki\Model\CreateNetworkPiiRequestRequest(); // \Meraki\Model\CreateNetworkPiiRequestRequest

try {
    $result = $apiInstance->createNetworkPiiRequest($network_id, $create_network_pii_request_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->createNetworkPiiRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_pii_request_request** | [**\Meraki\Model\CreateNetworkPiiRequestRequest**](../Model/CreateNetworkPiiRequestRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkPiiRequests200ResponseInner**](../Model/GetNetworkPiiRequests200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkVlanProfile()`

```php
createNetworkVlanProfile($network_id, $create_network_vlan_profile_request): \Meraki\Model\GetNetworkVlanProfiles200ResponseInner
```

Create a VLAN profile for a network

Create a VLAN profile for a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_vlan_profile_request = new \Meraki\Model\CreateNetworkVlanProfileRequest(); // \Meraki\Model\CreateNetworkVlanProfileRequest

try {
    $result = $apiInstance->createNetworkVlanProfile($network_id, $create_network_vlan_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->createNetworkVlanProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_vlan_profile_request** | [**\Meraki\Model\CreateNetworkVlanProfileRequest**](../Model/CreateNetworkVlanProfileRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkVlanProfiles200ResponseInner**](../Model/GetNetworkVlanProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkWebhooksHttpServer()`

```php
createNetworkWebhooksHttpServer($network_id, $create_network_webhooks_http_server_request): \Meraki\Model\GetNetworkWebhooksHttpServers200ResponseInner
```

Add an HTTP server to a network

Add an HTTP server to a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_webhooks_http_server_request = new \Meraki\Model\CreateNetworkWebhooksHttpServerRequest(); // \Meraki\Model\CreateNetworkWebhooksHttpServerRequest

try {
    $result = $apiInstance->createNetworkWebhooksHttpServer($network_id, $create_network_webhooks_http_server_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->createNetworkWebhooksHttpServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_webhooks_http_server_request** | [**\Meraki\Model\CreateNetworkWebhooksHttpServerRequest**](../Model/CreateNetworkWebhooksHttpServerRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkWebhooksHttpServers200ResponseInner**](../Model/GetNetworkWebhooksHttpServers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkWebhooksPayloadTemplate()`

```php
createNetworkWebhooksPayloadTemplate($network_id, $create_network_webhooks_payload_template_request): \Meraki\Model\GetNetworkWebhooksPayloadTemplates200ResponseInner
```

Create a webhook payload template for a network

Create a webhook payload template for a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_webhooks_payload_template_request = new \Meraki\Model\CreateNetworkWebhooksPayloadTemplateRequest(); // \Meraki\Model\CreateNetworkWebhooksPayloadTemplateRequest

try {
    $result = $apiInstance->createNetworkWebhooksPayloadTemplate($network_id, $create_network_webhooks_payload_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->createNetworkWebhooksPayloadTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_webhooks_payload_template_request** | [**\Meraki\Model\CreateNetworkWebhooksPayloadTemplateRequest**](../Model/CreateNetworkWebhooksPayloadTemplateRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkWebhooksPayloadTemplates200ResponseInner**](../Model/GetNetworkWebhooksPayloadTemplates200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkWebhooksWebhookTest()`

```php
createNetworkWebhooksWebhookTest($network_id, $create_network_webhooks_webhook_test_request): \Meraki\Model\CreateNetworkWebhooksWebhookTest201Response
```

Send a test webhook for a network

Send a test webhook for a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_webhooks_webhook_test_request = new \Meraki\Model\CreateNetworkWebhooksWebhookTestRequest(); // \Meraki\Model\CreateNetworkWebhooksWebhookTestRequest

try {
    $result = $apiInstance->createNetworkWebhooksWebhookTest($network_id, $create_network_webhooks_webhook_test_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->createNetworkWebhooksWebhookTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_webhooks_webhook_test_request** | [**\Meraki\Model\CreateNetworkWebhooksWebhookTestRequest**](../Model/CreateNetworkWebhooksWebhookTestRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateNetworkWebhooksWebhookTest201Response**](../Model/CreateNetworkWebhooksWebhookTest201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationNetwork()`

```php
createOrganizationNetwork($organization_id, $create_organization_network_request): \Meraki\Model\GetNetwork200Response
```

Create a network

Create a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_network_request = new \Meraki\Model\CreateOrganizationNetworkRequest(); // \Meraki\Model\CreateOrganizationNetworkRequest

try {
    $result = $apiInstance->createOrganizationNetwork($organization_id, $create_organization_network_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->createOrganizationNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_network_request** | [**\Meraki\Model\CreateOrganizationNetworkRequest**](../Model/CreateOrganizationNetworkRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetwork200Response**](../Model/GetNetwork200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deferNetworkFirmwareUpgradesStagedEvents()`

```php
deferNetworkFirmwareUpgradesStagedEvents($network_id): \Meraki\Model\GetNetworkFirmwareUpgradesStagedEvents200Response
```

Postpone by 1 week all pending staged upgrade stages for a network

Postpone by 1 week all pending staged upgrade stages for a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->deferNetworkFirmwareUpgradesStagedEvents($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->deferNetworkFirmwareUpgradesStagedEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgradesStagedEvents200Response**](../Model/GetNetworkFirmwareUpgradesStagedEvents200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetwork()`

```php
deleteNetwork($network_id)
```

Delete a network

Delete a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $apiInstance->deleteNetwork($network_id);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->deleteNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

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

## `deleteNetworkFirmwareUpgradesStagedGroup()`

```php
deleteNetworkFirmwareUpgradesStagedGroup($network_id, $group_id)
```

Delete a Staged Upgrade Group

Delete a Staged Upgrade Group

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$group_id = 'group_id_example'; // string | Group ID

try {
    $apiInstance->deleteNetworkFirmwareUpgradesStagedGroup($network_id, $group_id);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->deleteNetworkFirmwareUpgradesStagedGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **group_id** | **string**| Group ID | |

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

## `deleteNetworkFloorPlan()`

```php
deleteNetworkFloorPlan($network_id, $floor_plan_id): \Meraki\Model\GetNetworkFloorPlans200ResponseInner
```

Destroy a floor plan

Destroy a floor plan

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$floor_plan_id = 'floor_plan_id_example'; // string | Floor plan ID

try {
    $result = $apiInstance->deleteNetworkFloorPlan($network_id, $floor_plan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->deleteNetworkFloorPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **floor_plan_id** | **string**| Floor plan ID | |

### Return type

[**\Meraki\Model\GetNetworkFloorPlans200ResponseInner**](../Model/GetNetworkFloorPlans200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkGroupPolicy()`

```php
deleteNetworkGroupPolicy($network_id, $group_policy_id, $force)
```

Delete a group policy

Delete a group policy

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$group_policy_id = 'group_policy_id_example'; // string | Group policy ID
$force = True; // bool | If true, the system deletes the GP even if there are active clients using the GP. After deletion, active clients that were assigned to that Group Policy will be left without any policy applied. Default is false.

try {
    $apiInstance->deleteNetworkGroupPolicy($network_id, $group_policy_id, $force);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->deleteNetworkGroupPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **group_policy_id** | **string**| Group policy ID | |
| **force** | **bool**| If true, the system deletes the GP even if there are active clients using the GP. After deletion, active clients that were assigned to that Group Policy will be left without any policy applied. Default is false. | [optional] |

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

## `deleteNetworkMerakiAuthUser()`

```php
deleteNetworkMerakiAuthUser($network_id, $meraki_auth_user_id, $delete)
```

Delete an 802.1X RADIUS user, or deauthorize and optionally delete a splash guest or client VPN user.

Delete an 802.1X RADIUS user, or deauthorize and optionally delete a splash guest or client VPN user.

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$meraki_auth_user_id = 'meraki_auth_user_id_example'; // string | Meraki auth user ID
$delete = True; // bool | If the ID supplied is for a splash guest or client VPN user, and that user is not authorized for any other networks in the organization, then also delete the user. 802.1X RADIUS users are always deleted regardless of this optional attribute.

try {
    $apiInstance->deleteNetworkMerakiAuthUser($network_id, $meraki_auth_user_id, $delete);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->deleteNetworkMerakiAuthUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **meraki_auth_user_id** | **string**| Meraki auth user ID | |
| **delete** | **bool**| If the ID supplied is for a splash guest or client VPN user, and that user is not authorized for any other networks in the organization, then also delete the user. 802.1X RADIUS users are always deleted regardless of this optional attribute. | [optional] |

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

## `deleteNetworkMqttBroker()`

```php
deleteNetworkMqttBroker($network_id, $mqtt_broker_id)
```

Delete an MQTT broker

Delete an MQTT broker

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$mqtt_broker_id = 'mqtt_broker_id_example'; // string | Mqtt broker ID

try {
    $apiInstance->deleteNetworkMqttBroker($network_id, $mqtt_broker_id);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->deleteNetworkMqttBroker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **mqtt_broker_id** | **string**| Mqtt broker ID | |

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

## `deleteNetworkPiiRequest()`

```php
deleteNetworkPiiRequest($network_id, $request_id)
```

Delete a restrict processing PII request

Delete a restrict processing PII request  ## ALTERNATE PATH  ``` /organizations/{organizationId}/pii/requests/{requestId} ```

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$request_id = 'request_id_example'; // string | Request ID

try {
    $apiInstance->deleteNetworkPiiRequest($network_id, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->deleteNetworkPiiRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **request_id** | **string**| Request ID | |

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

## `deleteNetworkVlanProfile()`

```php
deleteNetworkVlanProfile($network_id, $iname)
```

Delete a VLAN profile of a network

Delete a VLAN profile of a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$iname = 'iname_example'; // string | Iname

try {
    $apiInstance->deleteNetworkVlanProfile($network_id, $iname);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->deleteNetworkVlanProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **iname** | **string**| Iname | |

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

## `deleteNetworkWebhooksHttpServer()`

```php
deleteNetworkWebhooksHttpServer($network_id, $http_server_id)
```

Delete an HTTP server from a network

Delete an HTTP server from a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$http_server_id = 'http_server_id_example'; // string | Http server ID

try {
    $apiInstance->deleteNetworkWebhooksHttpServer($network_id, $http_server_id);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->deleteNetworkWebhooksHttpServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **http_server_id** | **string**| Http server ID | |

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

## `deleteNetworkWebhooksPayloadTemplate()`

```php
deleteNetworkWebhooksPayloadTemplate($network_id, $payload_template_id)
```

Destroy a webhook payload template for a network

Destroy a webhook payload template for a network. Does not work for included templates ('wpt_00001', 'wpt_00002', 'wpt_00003', 'wpt_00004', 'wpt_00005' or 'wpt_00006')

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$payload_template_id = 'payload_template_id_example'; // string | Payload template ID

try {
    $apiInstance->deleteNetworkWebhooksPayloadTemplate($network_id, $payload_template_id);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->deleteNetworkWebhooksPayloadTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **payload_template_id** | **string**| Payload template ID | |

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

## `disableOrganizationIntegrationsXdrNetworks()`

```php
disableOrganizationIntegrationsXdrNetworks($organization_id, $disable_organization_integrations_xdr_networks_request): \Meraki\Model\DisableOrganizationIntegrationsXdrNetworks200Response
```

Disable XDR on networks

Disable XDR on networks

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$disable_organization_integrations_xdr_networks_request = new \Meraki\Model\DisableOrganizationIntegrationsXdrNetworksRequest(); // \Meraki\Model\DisableOrganizationIntegrationsXdrNetworksRequest

try {
    $result = $apiInstance->disableOrganizationIntegrationsXdrNetworks($organization_id, $disable_organization_integrations_xdr_networks_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->disableOrganizationIntegrationsXdrNetworks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **disable_organization_integrations_xdr_networks_request** | [**\Meraki\Model\DisableOrganizationIntegrationsXdrNetworksRequest**](../Model/DisableOrganizationIntegrationsXdrNetworksRequest.md)|  | |

### Return type

[**\Meraki\Model\DisableOrganizationIntegrationsXdrNetworks200Response**](../Model/DisableOrganizationIntegrationsXdrNetworks200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableOrganizationIntegrationsXdrNetworks()`

```php
enableOrganizationIntegrationsXdrNetworks($organization_id, $enable_organization_integrations_xdr_networks_request): \Meraki\Model\EnableOrganizationIntegrationsXdrNetworks200Response
```

Enable XDR on networks

Enable XDR on networks

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$enable_organization_integrations_xdr_networks_request = new \Meraki\Model\EnableOrganizationIntegrationsXdrNetworksRequest(); // \Meraki\Model\EnableOrganizationIntegrationsXdrNetworksRequest

try {
    $result = $apiInstance->enableOrganizationIntegrationsXdrNetworks($organization_id, $enable_organization_integrations_xdr_networks_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->enableOrganizationIntegrationsXdrNetworks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **enable_organization_integrations_xdr_networks_request** | [**\Meraki\Model\EnableOrganizationIntegrationsXdrNetworksRequest**](../Model/EnableOrganizationIntegrationsXdrNetworksRequest.md)|  | |

### Return type

[**\Meraki\Model\EnableOrganizationIntegrationsXdrNetworks200Response**](../Model/EnableOrganizationIntegrationsXdrNetworks200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetwork()`

```php
getNetwork($network_id): \Meraki\Model\GetNetwork200Response
```

Return a network

Return a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetwork($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetwork200Response**](../Model/GetNetwork200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkAlertsHistory()`

```php
getNetworkAlertsHistory($network_id, $per_page, $starting_after, $ending_before): \Meraki\Model\GetNetworkAlertsHistory200ResponseInner[]
```

Return the alert history for this network

Return the alert history for this network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getNetworkAlertsHistory($network_id, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkAlertsHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkAlertsHistory200ResponseInner[]**](../Model/GetNetworkAlertsHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkAlertsSettings()`

```php
getNetworkAlertsSettings($network_id): \Meraki\Model\GetNetworkAlertsSettings200Response
```

Return the alert configuration for this network

Return the alert configuration for this network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkAlertsSettings($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkAlertsSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkAlertsSettings200Response**](../Model/GetNetworkAlertsSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkBluetoothClient()`

```php
getNetworkBluetoothClient($network_id, $bluetooth_client_id, $include_connectivity_history, $connectivity_history_timespan): \Meraki\Model\GetNetworkBluetoothClients200ResponseInner
```

Return a Bluetooth client

Return a Bluetooth client. Bluetooth clients can be identified by their ID or their MAC.

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$bluetooth_client_id = 'bluetooth_client_id_example'; // string | Bluetooth client ID
$include_connectivity_history = True; // bool | Include the connectivity history for this client
$connectivity_history_timespan = 56; // int | The timespan, in seconds, for the connectivityHistory data. By default 1 day, 86400, will be used.

try {
    $result = $apiInstance->getNetworkBluetoothClient($network_id, $bluetooth_client_id, $include_connectivity_history, $connectivity_history_timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkBluetoothClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **bluetooth_client_id** | **string**| Bluetooth client ID | |
| **include_connectivity_history** | **bool**| Include the connectivity history for this client | [optional] |
| **connectivity_history_timespan** | **int**| The timespan, in seconds, for the connectivityHistory data. By default 1 day, 86400, will be used. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkBluetoothClients200ResponseInner**](../Model/GetNetworkBluetoothClients200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkBluetoothClients()`

```php
getNetworkBluetoothClients($network_id, $t0, $timespan, $per_page, $starting_after, $ending_before, $include_connectivity_history): \Meraki\Model\GetNetworkBluetoothClients200ResponseInner[]
```

List the Bluetooth clients seen by APs in this network

List the Bluetooth clients seen by APs in this network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 7 days from today.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 7 days. The default is 1 day.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 5 - 1000. Default is 10.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$include_connectivity_history = True; // bool | Include the connectivity history for this client

try {
    $result = $apiInstance->getNetworkBluetoothClients($network_id, $t0, $timespan, $per_page, $starting_after, $ending_before, $include_connectivity_history);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkBluetoothClients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 7 days from today. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 7 days. The default is 1 day. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 5 - 1000. Default is 10. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **include_connectivity_history** | **bool**| Include the connectivity history for this client | [optional] |

### Return type

[**\Meraki\Model\GetNetworkBluetoothClients200ResponseInner[]**](../Model/GetNetworkBluetoothClients200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkClient()`

```php
getNetworkClient($network_id, $client_id): \Meraki\Model\GetNetworkClient200Response
```

Return the client associated with the given identifier

Return the client associated with the given identifier. Clients can be identified by a client key or either the MAC or IP depending on whether the network uses Track-by-IP.

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$client_id = 'client_id_example'; // string | Client ID

try {
    $result = $apiInstance->getNetworkClient($network_id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **client_id** | **string**| Client ID | |

### Return type

[**\Meraki\Model\GetNetworkClient200Response**](../Model/GetNetworkClient200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkClientPolicy()`

```php
getNetworkClientPolicy($network_id, $client_id): \Meraki\Model\GetNetworkClientPolicy200Response
```

Return the policy assigned to a client on the network

Return the policy assigned to a client on the network. Clients can be identified by a client key or either the MAC or IP depending on whether the network uses Track-by-IP.

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$client_id = 'client_id_example'; // string | Client ID

try {
    $result = $apiInstance->getNetworkClientPolicy($network_id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkClientPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **client_id** | **string**| Client ID | |

### Return type

[**\Meraki\Model\GetNetworkClientPolicy200Response**](../Model/GetNetworkClientPolicy200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkClientSplashAuthorizationStatus()`

```php
getNetworkClientSplashAuthorizationStatus($network_id, $client_id): object
```

Return the splash authorization for a client, for each SSID they've associated with through splash

Return the splash authorization for a client, for each SSID they've associated with through splash. Only enabled SSIDs with Click-through splash enabled will be included. Clients can be identified by a client key or either the MAC or IP depending on whether the network uses Track-by-IP.

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$client_id = 'client_id_example'; // string | Client ID

try {
    $result = $apiInstance->getNetworkClientSplashAuthorizationStatus($network_id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkClientSplashAuthorizationStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **client_id** | **string**| Client ID | |

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

## `getNetworkClientTrafficHistory()`

```php
getNetworkClientTrafficHistory($network_id, $client_id, $per_page, $starting_after, $ending_before): \Meraki\Model\GetNetworkClientTrafficHistory200ResponseInner[]
```

Return the client's network traffic data over time

Return the client's network traffic data over time. Usage data is in kilobytes. This endpoint requires detailed traffic analysis to be enabled on the Network-wide > General page. Clients can be identified by a client key or either the MAC or IP depending on whether the network uses Track-by-IP.

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


$apiInstance = new Meraki\Api\NetworksApi(
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

try {
    $result = $apiInstance->getNetworkClientTrafficHistory($network_id, $client_id, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkClientTrafficHistory: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\Meraki\Model\GetNetworkClientTrafficHistory200ResponseInner[]**](../Model/GetNetworkClientTrafficHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkClientUsageHistory()`

```php
getNetworkClientUsageHistory($network_id, $client_id): \Meraki\Model\GetNetworkClientUsageHistory200ResponseInner[]
```

Return the client's daily usage history

Return the client's daily usage history. Usage data is in kilobytes. Clients can be identified by a client key or either the MAC or IP depending on whether the network uses Track-by-IP.

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$client_id = 'client_id_example'; // string | Client ID

try {
    $result = $apiInstance->getNetworkClientUsageHistory($network_id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkClientUsageHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **client_id** | **string**| Client ID | |

### Return type

[**\Meraki\Model\GetNetworkClientUsageHistory200ResponseInner[]**](../Model/GetNetworkClientUsageHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkClients()`

```php
getNetworkClients($network_id, $t0, $timespan, $per_page, $starting_after, $ending_before, $statuses, $ip, $ip6, $ip6_local, $mac, $os, $psk_group, $description, $vlan, $named_vlan, $recent_device_connections): \Meraki\Model\GetNetworkClients200ResponseInner[]
```

List the clients that have used this network in the timespan

List the clients that have used this network in the timespan. The data is updated at most once every five minutes.

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 31 days. The default is 1 day.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 5000. Default is 10.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$statuses = array('statuses_example'); // string[] | Filters clients based on status. Can be one of 'Online' or 'Offline'.
$ip = 'ip_example'; // string | Filters clients based on a partial or full match for the ip address field.
$ip6 = 'ip6_example'; // string | Filters clients based on a partial or full match for the ip6 address field.
$ip6_local = 'ip6_local_example'; // string | Filters clients based on a partial or full match for the ip6Local address field.
$mac = 'mac_example'; // string | Filters clients based on a partial or full match for the mac address field.
$os = 'os_example'; // string | Filters clients based on a partial or full match for the os (operating system) field.
$psk_group = 'psk_group_example'; // string | Filters clients based on partial or full match for the iPSK name field.
$description = 'description_example'; // string | Filters clients based on a partial or full match for the description field.
$vlan = 'vlan_example'; // string | Filters clients based on the full match for the VLAN field.
$named_vlan = 'named_vlan_example'; // string | Filters clients based on the partial or full match for the named VLAN field.
$recent_device_connections = array('recent_device_connections_example'); // string[] | Filters clients based on recent connection type. Can be one of 'Wired' or 'Wireless'.

try {
    $result = $apiInstance->getNetworkClients($network_id, $t0, $timespan, $per_page, $starting_after, $ending_before, $statuses, $ip, $ip6, $ip6_local, $mac, $os, $psk_group, $description, $vlan, $named_vlan, $recent_device_connections);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkClients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 5000. Default is 10. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **statuses** | [**string[]**](../Model/string.md)| Filters clients based on status. Can be one of &#39;Online&#39; or &#39;Offline&#39;. | [optional] |
| **ip** | **string**| Filters clients based on a partial or full match for the ip address field. | [optional] |
| **ip6** | **string**| Filters clients based on a partial or full match for the ip6 address field. | [optional] |
| **ip6_local** | **string**| Filters clients based on a partial or full match for the ip6Local address field. | [optional] |
| **mac** | **string**| Filters clients based on a partial or full match for the mac address field. | [optional] |
| **os** | **string**| Filters clients based on a partial or full match for the os (operating system) field. | [optional] |
| **psk_group** | **string**| Filters clients based on partial or full match for the iPSK name field. | [optional] |
| **description** | **string**| Filters clients based on a partial or full match for the description field. | [optional] |
| **vlan** | **string**| Filters clients based on the full match for the VLAN field. | [optional] |
| **named_vlan** | **string**| Filters clients based on the partial or full match for the named VLAN field. | [optional] |
| **recent_device_connections** | [**string[]**](../Model/string.md)| Filters clients based on recent connection type. Can be one of &#39;Wired&#39; or &#39;Wireless&#39;. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkClients200ResponseInner[]**](../Model/GetNetworkClients200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkClientsApplicationUsage()`

```php
getNetworkClientsApplicationUsage($network_id, $clients, $ssid_number, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan): object[]
```

Return the application usage data for clients

Return the application usage data for clients. Usage data is in kilobytes. Clients can be identified by client keys or either the MACs or IPs depending on whether the network uses Track-by-IP.

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$clients = 'clients_example'; // string | A list of client keys, MACs or IPs separated by comma.
$ssid_number = 56; // int | An SSID number to include. If not specified, eveusage histories application usagents for all SSIDs will be returned.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day.

try {
    $result = $apiInstance->getNetworkClientsApplicationUsage($network_id, $clients, $ssid_number, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkClientsApplicationUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **clients** | **string**| A list of client keys, MACs or IPs separated by comma. | |
| **ssid_number** | **int**| An SSID number to include. If not specified, eveusage histories application usagents for all SSIDs will be returned. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. | [optional] |

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

## `getNetworkClientsBandwidthUsageHistory()`

```php
getNetworkClientsBandwidthUsageHistory($network_id, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before): \Meraki\Model\GetNetworkClientsBandwidthUsageHistory200ResponseInner[]
```

Returns a timeseries of total traffic consumption rates for all clients on a network within a given timespan, in megabits per second.

Returns a timeseries of total traffic consumption rates for all clients on a network within a given timespan, in megabits per second.

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 30 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getNetworkClientsBandwidthUsageHistory($network_id, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkClientsBandwidthUsageHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 30 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkClientsBandwidthUsageHistory200ResponseInner[]**](../Model/GetNetworkClientsBandwidthUsageHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkClientsOverview()`

```php
getNetworkClientsOverview($network_id, $t0, $t1, $timespan, $resolution): \Meraki\Model\GetNetworkClientsOverview200Response
```

Return overview statistics for network clients

Return overview statistics for network clients

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day.
$resolution = 56; // int | The time resolution in seconds for returned data. The valid resolutions are: 7200, 86400, 604800, 2592000. The default is 604800.

try {
    $result = $apiInstance->getNetworkClientsOverview($network_id, $t0, $t1, $timespan, $resolution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkClientsOverview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. | [optional] |
| **resolution** | **int**| The time resolution in seconds for returned data. The valid resolutions are: 7200, 86400, 604800, 2592000. The default is 604800. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkClientsOverview200Response**](../Model/GetNetworkClientsOverview200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkClientsUsageHistories()`

```php
getNetworkClientsUsageHistories($network_id, $clients, $ssid_number, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan): object[]
```

Return the usage histories for clients

Return the usage histories for clients. Usage data is in kilobytes. Clients can be identified by client keys or either the MACs or IPs depending on whether the network uses Track-by-IP.

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$clients = 'clients_example'; // string | A list of client keys, MACs or IPs separated by comma.
$ssid_number = 56; // int | An SSID number to include. If not specified, events for all SSIDs will be returned.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day.

try {
    $result = $apiInstance->getNetworkClientsUsageHistories($network_id, $clients, $ssid_number, $per_page, $starting_after, $ending_before, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkClientsUsageHistories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **clients** | **string**| A list of client keys, MACs or IPs separated by comma. | |
| **ssid_number** | **int**| An SSID number to include. If not specified, events for all SSIDs will be returned. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. | [optional] |

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


$apiInstance = new Meraki\Api\NetworksApi(
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
    echo 'Exception when calling NetworksApi->getNetworkDevices: ', $e->getMessage(), PHP_EOL;
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

## `getNetworkEvents()`

```php
getNetworkEvents($network_id, $product_type, $included_event_types, $excluded_event_types, $device_mac, $device_serial, $device_name, $client_ip, $client_mac, $client_name, $sm_device_mac, $sm_device_name, $event_details, $event_severity, $is_catalyst, $per_page, $starting_after, $ending_before): \Meraki\Model\GetNetworkEvents200Response
```

List the events for the network

List the events for the network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$product_type = 'product_type_example'; // string | The product type to fetch events for. This parameter is required for networks with multiple device types. Valid types are wireless, appliance, switch, systemsManager, camera, cellularGateway, wirelessController, and secureConnect
$included_event_types = array('included_event_types_example'); // string[] | A list of event types. The returned events will be filtered to only include events with these types.
$excluded_event_types = array('excluded_event_types_example'); // string[] | A list of event types. The returned events will be filtered to exclude events with these types.
$device_mac = 'device_mac_example'; // string | The MAC address of the Meraki device which the list of events will be filtered with
$device_serial = 'device_serial_example'; // string | The serial of the Meraki device which the list of events will be filtered with
$device_name = 'device_name_example'; // string | The name of the Meraki device which the list of events will be filtered with
$client_ip = 'client_ip_example'; // string | The IP of the client which the list of events will be filtered with. Only supported for track-by-IP networks.
$client_mac = 'client_mac_example'; // string | The MAC address of the client which the list of events will be filtered with. Only supported for track-by-MAC networks.
$client_name = 'client_name_example'; // string | The name, or partial name, of the client which the list of events will be filtered with
$sm_device_mac = 'sm_device_mac_example'; // string | The MAC address of the Systems Manager device which the list of events will be filtered with
$sm_device_name = 'sm_device_name_example'; // string | The name of the Systems Manager device which the list of events will be filtered with
$event_details = 'event_details_example'; // string | The details of the event(Catalyst device only) which the list of events will be filtered with
$event_severity = 'event_severity_example'; // string | The severity of the event(Catalyst device only) which the list of events will be filtered with
$is_catalyst = True; // bool | Boolean indicating that whether it is a Catalyst device. For Catalyst device, eventDetails and eventSeverity can be used to filter events.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 10.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getNetworkEvents($network_id, $product_type, $included_event_types, $excluded_event_types, $device_mac, $device_serial, $device_name, $client_ip, $client_mac, $client_name, $sm_device_mac, $sm_device_name, $event_details, $event_severity, $is_catalyst, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **product_type** | **string**| The product type to fetch events for. This parameter is required for networks with multiple device types. Valid types are wireless, appliance, switch, systemsManager, camera, cellularGateway, wirelessController, and secureConnect | [optional] |
| **included_event_types** | [**string[]**](../Model/string.md)| A list of event types. The returned events will be filtered to only include events with these types. | [optional] |
| **excluded_event_types** | [**string[]**](../Model/string.md)| A list of event types. The returned events will be filtered to exclude events with these types. | [optional] |
| **device_mac** | **string**| The MAC address of the Meraki device which the list of events will be filtered with | [optional] |
| **device_serial** | **string**| The serial of the Meraki device which the list of events will be filtered with | [optional] |
| **device_name** | **string**| The name of the Meraki device which the list of events will be filtered with | [optional] |
| **client_ip** | **string**| The IP of the client which the list of events will be filtered with. Only supported for track-by-IP networks. | [optional] |
| **client_mac** | **string**| The MAC address of the client which the list of events will be filtered with. Only supported for track-by-MAC networks. | [optional] |
| **client_name** | **string**| The name, or partial name, of the client which the list of events will be filtered with | [optional] |
| **sm_device_mac** | **string**| The MAC address of the Systems Manager device which the list of events will be filtered with | [optional] |
| **sm_device_name** | **string**| The name of the Systems Manager device which the list of events will be filtered with | [optional] |
| **event_details** | **string**| The details of the event(Catalyst device only) which the list of events will be filtered with | [optional] |
| **event_severity** | **string**| The severity of the event(Catalyst device only) which the list of events will be filtered with | [optional] |
| **is_catalyst** | **bool**| Boolean indicating that whether it is a Catalyst device. For Catalyst device, eventDetails and eventSeverity can be used to filter events. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 10. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkEvents200Response**](../Model/GetNetworkEvents200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkEventsEventTypes()`

```php
getNetworkEventsEventTypes($network_id): \Meraki\Model\GetNetworkEventsEventTypes200ResponseInner[]
```

List the event type to human-readable description

List the event type to human-readable description

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkEventsEventTypes($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkEventsEventTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkEventsEventTypes200ResponseInner[]**](../Model/GetNetworkEventsEventTypes200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkFirmwareUpgrades()`

```php
getNetworkFirmwareUpgrades($network_id): \Meraki\Model\GetNetworkFirmwareUpgrades200Response
```

Get firmware upgrade information for a network

Get firmware upgrade information for a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkFirmwareUpgrades($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkFirmwareUpgrades: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgrades200Response**](../Model/GetNetworkFirmwareUpgrades200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkFirmwareUpgradesStagedEvents()`

```php
getNetworkFirmwareUpgradesStagedEvents($network_id): \Meraki\Model\GetNetworkFirmwareUpgradesStagedEvents200Response
```

Get the Staged Upgrade Event from a network

Get the Staged Upgrade Event from a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkFirmwareUpgradesStagedEvents($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkFirmwareUpgradesStagedEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgradesStagedEvents200Response**](../Model/GetNetworkFirmwareUpgradesStagedEvents200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkFirmwareUpgradesStagedGroup()`

```php
getNetworkFirmwareUpgradesStagedGroup($network_id, $group_id): \Meraki\Model\GetNetworkFirmwareUpgradesStagedGroups200ResponseInner
```

Get a Staged Upgrade Group from a network

Get a Staged Upgrade Group from a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$group_id = 'group_id_example'; // string | Group ID

try {
    $result = $apiInstance->getNetworkFirmwareUpgradesStagedGroup($network_id, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkFirmwareUpgradesStagedGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **group_id** | **string**| Group ID | |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgradesStagedGroups200ResponseInner**](../Model/GetNetworkFirmwareUpgradesStagedGroups200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkFirmwareUpgradesStagedGroups()`

```php
getNetworkFirmwareUpgradesStagedGroups($network_id): \Meraki\Model\GetNetworkFirmwareUpgradesStagedGroups200ResponseInner[]
```

List of Staged Upgrade Groups in a network

List of Staged Upgrade Groups in a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkFirmwareUpgradesStagedGroups($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkFirmwareUpgradesStagedGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgradesStagedGroups200ResponseInner[]**](../Model/GetNetworkFirmwareUpgradesStagedGroups200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkFirmwareUpgradesStagedStages()`

```php
getNetworkFirmwareUpgradesStagedStages($network_id): \Meraki\Model\GetNetworkFirmwareUpgradesStagedStages200ResponseInner[]
```

Order of Staged Upgrade Groups in a network

Order of Staged Upgrade Groups in a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkFirmwareUpgradesStagedStages($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkFirmwareUpgradesStagedStages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgradesStagedStages200ResponseInner[]**](../Model/GetNetworkFirmwareUpgradesStagedStages200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkFloorPlan()`

```php
getNetworkFloorPlan($network_id, $floor_plan_id): \Meraki\Model\GetNetworkFloorPlans200ResponseInner
```

Find a floor plan by ID

Find a floor plan by ID

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$floor_plan_id = 'floor_plan_id_example'; // string | Floor plan ID

try {
    $result = $apiInstance->getNetworkFloorPlan($network_id, $floor_plan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkFloorPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **floor_plan_id** | **string**| Floor plan ID | |

### Return type

[**\Meraki\Model\GetNetworkFloorPlans200ResponseInner**](../Model/GetNetworkFloorPlans200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkFloorPlans()`

```php
getNetworkFloorPlans($network_id): \Meraki\Model\GetNetworkFloorPlans200ResponseInner[]
```

List the floor plans that belong to your network

List the floor plans that belong to your network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkFloorPlans($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkFloorPlans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkFloorPlans200ResponseInner[]**](../Model/GetNetworkFloorPlans200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkGroupPolicies()`

```php
getNetworkGroupPolicies($network_id): \Meraki\Model\GetNetworkGroupPolicies200ResponseInner[]
```

List the group policies in a network

List the group policies in a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkGroupPolicies($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkGroupPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkGroupPolicies200ResponseInner[]**](../Model/GetNetworkGroupPolicies200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkGroupPolicy()`

```php
getNetworkGroupPolicy($network_id, $group_policy_id): \Meraki\Model\GetNetworkGroupPolicies200ResponseInner
```

Display a group policy

Display a group policy

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$group_policy_id = 'group_policy_id_example'; // string | Group policy ID

try {
    $result = $apiInstance->getNetworkGroupPolicy($network_id, $group_policy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkGroupPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **group_policy_id** | **string**| Group policy ID | |

### Return type

[**\Meraki\Model\GetNetworkGroupPolicies200ResponseInner**](../Model/GetNetworkGroupPolicies200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkHealthAlerts()`

```php
getNetworkHealthAlerts($network_id): \Meraki\Model\GetNetworkHealthAlerts200ResponseInner[]
```

Return all global alerts on this network

Return all global alerts on this network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkHealthAlerts($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkHealthAlerts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkHealthAlerts200ResponseInner[]**](../Model/GetNetworkHealthAlerts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkMerakiAuthUser()`

```php
getNetworkMerakiAuthUser($network_id, $meraki_auth_user_id): \Meraki\Model\GetNetworkMerakiAuthUsers200ResponseInner
```

Return the Meraki Auth splash guest, RADIUS, or client VPN user

Return the Meraki Auth splash guest, RADIUS, or client VPN user

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$meraki_auth_user_id = 'meraki_auth_user_id_example'; // string | Meraki auth user ID

try {
    $result = $apiInstance->getNetworkMerakiAuthUser($network_id, $meraki_auth_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkMerakiAuthUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **meraki_auth_user_id** | **string**| Meraki auth user ID | |

### Return type

[**\Meraki\Model\GetNetworkMerakiAuthUsers200ResponseInner**](../Model/GetNetworkMerakiAuthUsers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkMerakiAuthUsers()`

```php
getNetworkMerakiAuthUsers($network_id): \Meraki\Model\GetNetworkMerakiAuthUsers200ResponseInner[]
```

List the authorized users configured under Meraki Authentication for a network (splash guest or RADIUS users for a wireless network, or client VPN users for a MX network)

List the authorized users configured under Meraki Authentication for a network (splash guest or RADIUS users for a wireless network, or client VPN users for a MX network)

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkMerakiAuthUsers($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkMerakiAuthUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkMerakiAuthUsers200ResponseInner[]**](../Model/GetNetworkMerakiAuthUsers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkMqttBroker()`

```php
getNetworkMqttBroker($network_id, $mqtt_broker_id): \Meraki\Model\GetNetworkMqttBrokers200ResponseInner
```

Return an MQTT broker

Return an MQTT broker

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$mqtt_broker_id = 'mqtt_broker_id_example'; // string | Mqtt broker ID

try {
    $result = $apiInstance->getNetworkMqttBroker($network_id, $mqtt_broker_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkMqttBroker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **mqtt_broker_id** | **string**| Mqtt broker ID | |

### Return type

[**\Meraki\Model\GetNetworkMqttBrokers200ResponseInner**](../Model/GetNetworkMqttBrokers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkMqttBrokers()`

```php
getNetworkMqttBrokers($network_id): \Meraki\Model\GetNetworkMqttBrokers200ResponseInner[]
```

List the MQTT brokers for this network

List the MQTT brokers for this network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkMqttBrokers($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkMqttBrokers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkMqttBrokers200ResponseInner[]**](../Model/GetNetworkMqttBrokers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkNetflow()`

```php
getNetworkNetflow($network_id): \Meraki\Model\GetNetworkNetflow200Response
```

Return the NetFlow traffic reporting settings for a network

Return the NetFlow traffic reporting settings for a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkNetflow($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkNetflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkNetflow200Response**](../Model/GetNetworkNetflow200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkNetworkHealthChannelUtilization()`

```php
getNetworkNetworkHealthChannelUtilization($network_id, $t0, $t1, $timespan, $resolution, $per_page, $starting_after, $ending_before): \Meraki\Model\GetNetworkNetworkHealthChannelUtilization200ResponseInner[]
```

Get the channel utilization over each radio for all APs in a network.

Get the channel utilization over each radio for all APs in a network.

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day.
$resolution = 56; // int | The time resolution in seconds for returned data. The valid resolutions are: 600. The default is 600.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 100. Default is 10.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getNetworkNetworkHealthChannelUtilization($network_id, $t0, $t1, $timespan, $resolution, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkNetworkHealthChannelUtilization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. | [optional] |
| **resolution** | **int**| The time resolution in seconds for returned data. The valid resolutions are: 600. The default is 600. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 100. Default is 10. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkNetworkHealthChannelUtilization200ResponseInner[]**](../Model/GetNetworkNetworkHealthChannelUtilization200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkPiiPiiKeys()`

```php
getNetworkPiiPiiKeys($network_id, $username, $email, $mac, $serial, $imei, $bluetooth_mac): array<string,\Meraki\Model\GetNetworkPiiPiiKeys200ResponseValue>
```

List the keys required to access Personally Identifiable Information (PII) for a given identifier

List the keys required to access Personally Identifiable Information (PII) for a given identifier. Exactly one identifier will be accepted. If the organization contains org-wide Systems Manager users matching the key provided then there will be an entry with the key \"0\" containing the applicable keys.  ## ALTERNATE PATH  ``` /organizations/{organizationId}/pii/piiKeys ```

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$username = 'username_example'; // string | The username of a Systems Manager user
$email = 'email_example'; // string | The email of a network user account or a Systems Manager device
$mac = 'mac_example'; // string | The MAC of a network client device or a Systems Manager device
$serial = 'serial_example'; // string | The serial of a Systems Manager device
$imei = 'imei_example'; // string | The IMEI of a Systems Manager device
$bluetooth_mac = 'bluetooth_mac_example'; // string | The MAC of a Bluetooth client

try {
    $result = $apiInstance->getNetworkPiiPiiKeys($network_id, $username, $email, $mac, $serial, $imei, $bluetooth_mac);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkPiiPiiKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **username** | **string**| The username of a Systems Manager user | [optional] |
| **email** | **string**| The email of a network user account or a Systems Manager device | [optional] |
| **mac** | **string**| The MAC of a network client device or a Systems Manager device | [optional] |
| **serial** | **string**| The serial of a Systems Manager device | [optional] |
| **imei** | **string**| The IMEI of a Systems Manager device | [optional] |
| **bluetooth_mac** | **string**| The MAC of a Bluetooth client | [optional] |

### Return type

[**array<string,\Meraki\Model\GetNetworkPiiPiiKeys200ResponseValue>**](../Model/GetNetworkPiiPiiKeys200ResponseValue.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkPiiRequest()`

```php
getNetworkPiiRequest($network_id, $request_id): \Meraki\Model\GetNetworkPiiRequests200ResponseInner
```

Return a PII request

Return a PII request  ## ALTERNATE PATH  ``` /organizations/{organizationId}/pii/requests/{requestId} ```

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$request_id = 'request_id_example'; // string | Request ID

try {
    $result = $apiInstance->getNetworkPiiRequest($network_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkPiiRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **request_id** | **string**| Request ID | |

### Return type

[**\Meraki\Model\GetNetworkPiiRequests200ResponseInner**](../Model/GetNetworkPiiRequests200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkPiiRequests()`

```php
getNetworkPiiRequests($network_id): \Meraki\Model\GetNetworkPiiRequests200ResponseInner[]
```

List the PII requests for this network or organization

List the PII requests for this network or organization  ## ALTERNATE PATH  ``` /organizations/{organizationId}/pii/requests ```

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkPiiRequests($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkPiiRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkPiiRequests200ResponseInner[]**](../Model/GetNetworkPiiRequests200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkPiiSmDevicesForKey()`

```php
getNetworkPiiSmDevicesForKey($network_id, $username, $email, $mac, $serial, $imei, $bluetooth_mac): array<string,string[]>
```

Given a piece of Personally Identifiable Information (PII), return the Systems Manager device ID(s) associated with that identifier

Given a piece of Personally Identifiable Information (PII), return the Systems Manager device ID(s) associated with that identifier. These device IDs can be used with the Systems Manager API endpoints to retrieve device details. Exactly one identifier will be accepted.  ## ALTERNATE PATH  ``` /organizations/{organizationId}/pii/smDevicesForKey ```

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$username = 'username_example'; // string | The username of a Systems Manager user
$email = 'email_example'; // string | The email of a network user account or a Systems Manager device
$mac = 'mac_example'; // string | The MAC of a network client device or a Systems Manager device
$serial = 'serial_example'; // string | The serial of a Systems Manager device
$imei = 'imei_example'; // string | The IMEI of a Systems Manager device
$bluetooth_mac = 'bluetooth_mac_example'; // string | The MAC of a Bluetooth client

try {
    $result = $apiInstance->getNetworkPiiSmDevicesForKey($network_id, $username, $email, $mac, $serial, $imei, $bluetooth_mac);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkPiiSmDevicesForKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **username** | **string**| The username of a Systems Manager user | [optional] |
| **email** | **string**| The email of a network user account or a Systems Manager device | [optional] |
| **mac** | **string**| The MAC of a network client device or a Systems Manager device | [optional] |
| **serial** | **string**| The serial of a Systems Manager device | [optional] |
| **imei** | **string**| The IMEI of a Systems Manager device | [optional] |
| **bluetooth_mac** | **string**| The MAC of a Bluetooth client | [optional] |

### Return type

**array<string,string[]>**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkPiiSmOwnersForKey()`

```php
getNetworkPiiSmOwnersForKey($network_id, $username, $email, $mac, $serial, $imei, $bluetooth_mac): array<string,string[]>
```

Given a piece of Personally Identifiable Information (PII), return the Systems Manager owner ID(s) associated with that identifier

Given a piece of Personally Identifiable Information (PII), return the Systems Manager owner ID(s) associated with that identifier. These owner IDs can be used with the Systems Manager API endpoints to retrieve owner details. Exactly one identifier will be accepted.  ## ALTERNATE PATH  ``` /organizations/{organizationId}/pii/smOwnersForKey ```

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$username = 'username_example'; // string | The username of a Systems Manager user
$email = 'email_example'; // string | The email of a network user account or a Systems Manager device
$mac = 'mac_example'; // string | The MAC of a network client device or a Systems Manager device
$serial = 'serial_example'; // string | The serial of a Systems Manager device
$imei = 'imei_example'; // string | The IMEI of a Systems Manager device
$bluetooth_mac = 'bluetooth_mac_example'; // string | The MAC of a Bluetooth client

try {
    $result = $apiInstance->getNetworkPiiSmOwnersForKey($network_id, $username, $email, $mac, $serial, $imei, $bluetooth_mac);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkPiiSmOwnersForKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **username** | **string**| The username of a Systems Manager user | [optional] |
| **email** | **string**| The email of a network user account or a Systems Manager device | [optional] |
| **mac** | **string**| The MAC of a network client device or a Systems Manager device | [optional] |
| **serial** | **string**| The serial of a Systems Manager device | [optional] |
| **imei** | **string**| The IMEI of a Systems Manager device | [optional] |
| **bluetooth_mac** | **string**| The MAC of a Bluetooth client | [optional] |

### Return type

**array<string,string[]>**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkPoliciesByClient()`

```php
getNetworkPoliciesByClient($network_id, $per_page, $starting_after, $ending_before, $t0, $timespan): \Meraki\Model\GetNetworkPoliciesByClient200ResponseInner[]
```

Get policies for all clients with policies

Get policies for all clients with policies

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 50.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 31 days. The default is 1 day.

try {
    $result = $apiInstance->getNetworkPoliciesByClient($network_id, $per_page, $starting_after, $ending_before, $t0, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkPoliciesByClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 50. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkPoliciesByClient200ResponseInner[]**](../Model/GetNetworkPoliciesByClient200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSettings()`

```php
getNetworkSettings($network_id): \Meraki\Model\GetNetworkSettings200Response
```

Return the settings for a network

Return the settings for a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSettings($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSettings200Response**](../Model/GetNetworkSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSnmp()`

```php
getNetworkSnmp($network_id): \Meraki\Model\GetNetworkSnmp200Response
```

Return the SNMP settings for a network

Return the SNMP settings for a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSnmp($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkSnmp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSnmp200Response**](../Model/GetNetworkSnmp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSplashLoginAttempts()`

```php
getNetworkSplashLoginAttempts($network_id, $ssid_number, $login_identifier, $timespan): \Meraki\Model\GetNetworkSplashLoginAttempts200ResponseInner[]
```

List the splash login attempts for a network

List the splash login attempts for a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$ssid_number = 56; // int | Only return the login attempts for the specified SSID
$login_identifier = 'login_identifier_example'; // string | The username, email, or phone number used during login
$timespan = 56; // int | The timespan, in seconds, for the login attempts. The period will be from [timespan] seconds ago until now. The maximum timespan is 3 months

try {
    $result = $apiInstance->getNetworkSplashLoginAttempts($network_id, $ssid_number, $login_identifier, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkSplashLoginAttempts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **ssid_number** | **int**| Only return the login attempts for the specified SSID | [optional] |
| **login_identifier** | **string**| The username, email, or phone number used during login | [optional] |
| **timespan** | **int**| The timespan, in seconds, for the login attempts. The period will be from [timespan] seconds ago until now. The maximum timespan is 3 months | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSplashLoginAttempts200ResponseInner[]**](../Model/GetNetworkSplashLoginAttempts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkSyslogServers()`

```php
getNetworkSyslogServers($network_id): \Meraki\Model\GetNetworkSyslogServers200Response
```

List the syslog servers for a network

List the syslog servers for a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkSyslogServers($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkSyslogServers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkSyslogServers200Response**](../Model/GetNetworkSyslogServers200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkTopologyLinkLayer()`

```php
getNetworkTopologyLinkLayer($network_id): object
```

List the LLDP and CDP information for all discovered devices and connections in a network

List the LLDP and CDP information for all discovered devices and connections in a network. At least one MX or MS device must be in the network in order to build the topology.

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkTopologyLinkLayer($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkTopologyLinkLayer: ', $e->getMessage(), PHP_EOL;
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

## `getNetworkTraffic()`

```php
getNetworkTraffic($network_id, $t0, $timespan, $device_type): \Meraki\Model\GetNetworkTraffic200ResponseInner[]
```

Return the traffic analysis data for this network

Return the traffic analysis data for this network. Traffic analysis with hostname visibility must be enabled on the network.

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 30 days from today.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 30 days.
$device_type = 'device_type_example'; // string | Filter the data by device type: 'combined', 'wireless', 'switch' or 'appliance'. Defaults to 'combined'. When using 'combined', for each rule the data will come from the device type with the most usage.

try {
    $result = $apiInstance->getNetworkTraffic($network_id, $t0, $timespan, $device_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkTraffic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 30 days from today. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameter t0. The value must be in seconds and be less than or equal to 30 days. | [optional] |
| **device_type** | **string**| Filter the data by device type: &#39;combined&#39;, &#39;wireless&#39;, &#39;switch&#39; or &#39;appliance&#39;. Defaults to &#39;combined&#39;. When using &#39;combined&#39;, for each rule the data will come from the device type with the most usage. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkTraffic200ResponseInner[]**](../Model/GetNetworkTraffic200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkTrafficAnalysis()`

```php
getNetworkTrafficAnalysis($network_id): \Meraki\Model\GetNetworkTrafficAnalysis200Response
```

Return the traffic analysis settings for a network

Return the traffic analysis settings for a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkTrafficAnalysis($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkTrafficAnalysis: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkTrafficAnalysis200Response**](../Model/GetNetworkTrafficAnalysis200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkTrafficShapingApplicationCategories()`

```php
getNetworkTrafficShapingApplicationCategories($network_id): object
```

Returns the application categories for traffic shaping rules

Returns the application categories for traffic shaping rules. Only applicable on networks with a security applicance.

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkTrafficShapingApplicationCategories($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkTrafficShapingApplicationCategories: ', $e->getMessage(), PHP_EOL;
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

## `getNetworkTrafficShapingDscpTaggingOptions()`

```php
getNetworkTrafficShapingDscpTaggingOptions($network_id): object[]
```

Returns the available DSCP tagging options for your traffic shaping rules.

Returns the available DSCP tagging options for your traffic shaping rules.

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkTrafficShapingDscpTaggingOptions($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkTrafficShapingDscpTaggingOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

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

## `getNetworkVlanProfile()`

```php
getNetworkVlanProfile($network_id, $iname): \Meraki\Model\GetNetworkVlanProfiles200ResponseInner
```

Get an existing VLAN profile of a network

Get an existing VLAN profile of a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$iname = 'iname_example'; // string | Iname

try {
    $result = $apiInstance->getNetworkVlanProfile($network_id, $iname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkVlanProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **iname** | **string**| Iname | |

### Return type

[**\Meraki\Model\GetNetworkVlanProfiles200ResponseInner**](../Model/GetNetworkVlanProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkVlanProfiles()`

```php
getNetworkVlanProfiles($network_id): \Meraki\Model\GetNetworkVlanProfiles200ResponseInner[]
```

List VLAN profiles for a network

List VLAN profiles for a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkVlanProfiles($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkVlanProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkVlanProfiles200ResponseInner[]**](../Model/GetNetworkVlanProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkVlanProfilesAssignmentsByDevice()`

```php
getNetworkVlanProfilesAssignmentsByDevice($network_id, $per_page, $starting_after, $ending_before, $serials, $product_types, $stack_ids): \Meraki\Model\GetNetworkVlanProfilesAssignmentsByDevice200ResponseInner[]
```

Get the assigned VLAN Profiles for devices in a network

Get the assigned VLAN Profiles for devices in a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$serials = array('serials_example'); // string[] | Optional parameter to filter devices by serials. All devices returned belong to serial numbers that are an exact match.
$product_types = array('product_types_example'); // string[] | Optional parameter to filter devices by product types.
$stack_ids = array('stack_ids_example'); // string[] | Optional parameter to filter devices by Switch Stack ids.

try {
    $result = $apiInstance->getNetworkVlanProfilesAssignmentsByDevice($network_id, $per_page, $starting_after, $ending_before, $serials, $product_types, $stack_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkVlanProfilesAssignmentsByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by serials. All devices returned belong to serial numbers that are an exact match. | [optional] |
| **product_types** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by product types. | [optional] |
| **stack_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter devices by Switch Stack ids. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkVlanProfilesAssignmentsByDevice200ResponseInner[]**](../Model/GetNetworkVlanProfilesAssignmentsByDevice200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWebhooksHttpServer()`

```php
getNetworkWebhooksHttpServer($network_id, $http_server_id): \Meraki\Model\GetNetworkWebhooksHttpServers200ResponseInner
```

Return an HTTP server for a network

Return an HTTP server for a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$http_server_id = 'http_server_id_example'; // string | Http server ID

try {
    $result = $apiInstance->getNetworkWebhooksHttpServer($network_id, $http_server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkWebhooksHttpServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **http_server_id** | **string**| Http server ID | |

### Return type

[**\Meraki\Model\GetNetworkWebhooksHttpServers200ResponseInner**](../Model/GetNetworkWebhooksHttpServers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWebhooksHttpServers()`

```php
getNetworkWebhooksHttpServers($network_id): \Meraki\Model\GetNetworkWebhooksHttpServers200ResponseInner[]
```

List the HTTP servers for a network

List the HTTP servers for a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkWebhooksHttpServers($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkWebhooksHttpServers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkWebhooksHttpServers200ResponseInner[]**](../Model/GetNetworkWebhooksHttpServers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWebhooksPayloadTemplate()`

```php
getNetworkWebhooksPayloadTemplate($network_id, $payload_template_id): \Meraki\Model\GetNetworkWebhooksPayloadTemplates200ResponseInner
```

Get the webhook payload template for a network

Get the webhook payload template for a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$payload_template_id = 'payload_template_id_example'; // string | Payload template ID

try {
    $result = $apiInstance->getNetworkWebhooksPayloadTemplate($network_id, $payload_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkWebhooksPayloadTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **payload_template_id** | **string**| Payload template ID | |

### Return type

[**\Meraki\Model\GetNetworkWebhooksPayloadTemplates200ResponseInner**](../Model/GetNetworkWebhooksPayloadTemplates200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWebhooksPayloadTemplates()`

```php
getNetworkWebhooksPayloadTemplates($network_id): \Meraki\Model\GetNetworkWebhooksPayloadTemplates200ResponseInner[]
```

List the webhook payload templates for a network

List the webhook payload templates for a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkWebhooksPayloadTemplates($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkWebhooksPayloadTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkWebhooksPayloadTemplates200ResponseInner[]**](../Model/GetNetworkWebhooksPayloadTemplates200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkWebhooksWebhookTest()`

```php
getNetworkWebhooksWebhookTest($network_id, $webhook_test_id): \Meraki\Model\CreateNetworkWebhooksWebhookTest201Response
```

Return the status of a webhook test for a network

Return the status of a webhook test for a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$webhook_test_id = 'webhook_test_id_example'; // string | Webhook test ID

try {
    $result = $apiInstance->getNetworkWebhooksWebhookTest($network_id, $webhook_test_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetworkWebhooksWebhookTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **webhook_test_id** | **string**| Webhook test ID | |

### Return type

[**\Meraki\Model\CreateNetworkWebhooksWebhookTest201Response**](../Model/CreateNetworkWebhooksWebhookTest201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationIntegrationsXdrNetworks()`

```php
getOrganizationIntegrationsXdrNetworks($organization_id, $network_ids, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationIntegrationsXdrNetworks200Response
```

Returns the networks in the organization that have XDR enabled

Returns the networks in the organization that have XDR enabled

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter the results by network IDs
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 100. Default is 20.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationIntegrationsXdrNetworks($organization_id, $network_ids, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getOrganizationIntegrationsXdrNetworks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the results by network IDs | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 100. Default is 20. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationIntegrationsXdrNetworks200Response**](../Model/GetOrganizationIntegrationsXdrNetworks200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationInventoryOnboardingCloudMonitoringNetworks()`

```php
getOrganizationInventoryOnboardingCloudMonitoringNetworks($organization_id, $device_type, $search, $per_page, $starting_after, $ending_before): \Meraki\Model\GetNetwork200Response[]
```

Returns list of networks eligible for adding cloud monitored device

Returns list of networks eligible for adding cloud monitored device

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$device_type = 'device_type_example'; // string | Device Type switch or wireless controller
$search = 'search_example'; // string | Optional parameter to search on network name
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 100000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationInventoryOnboardingCloudMonitoringNetworks($organization_id, $device_type, $search, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getOrganizationInventoryOnboardingCloudMonitoringNetworks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **device_type** | **string**| Device Type switch or wireless controller | |
| **search** | **string**| Optional parameter to search on network name | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 100000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetNetwork200Response[]**](../Model/GetNetwork200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationNetworks()`

```php
getOrganizationNetworks($organization_id, $config_template_id, $is_bound_to_config_template, $tags, $tags_filter_type, $product_types, $per_page, $starting_after, $ending_before): \Meraki\Model\GetNetwork200Response[]
```

List the networks that the user has privileges on in an organization

List the networks that the user has privileges on in an organization

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$config_template_id = 'config_template_id_example'; // string | An optional parameter that is the ID of a config template. Will return all networks bound to that template.
$is_bound_to_config_template = True; // bool | An optional parameter to filter config template bound networks. If configTemplateId is set, this cannot be false.
$tags = array('tags_example'); // string[] | An optional parameter to filter networks by tags. The filtering is case-sensitive. If tags are included, 'tagsFilterType' should also be included (see below).
$tags_filter_type = 'tags_filter_type_example'; // string | An optional parameter of value 'withAnyTags' or 'withAllTags' to indicate whether to return networks which contain ANY or ALL of the included tags. If no type is included, 'withAnyTags' will be selected.
$product_types = array('product_types_example'); // string[] | An optional parameter to filter networks by product type. Results will have at least one of the included product types.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 100000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationNetworks($organization_id, $config_template_id, $is_bound_to_config_template, $tags, $tags_filter_type, $product_types, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getOrganizationNetworks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **config_template_id** | **string**| An optional parameter that is the ID of a config template. Will return all networks bound to that template. | [optional] |
| **is_bound_to_config_template** | **bool**| An optional parameter to filter config template bound networks. If configTemplateId is set, this cannot be false. | [optional] |
| **tags** | [**string[]**](../Model/string.md)| An optional parameter to filter networks by tags. The filtering is case-sensitive. If tags are included, &#39;tagsFilterType&#39; should also be included (see below). | [optional] |
| **tags_filter_type** | **string**| An optional parameter of value &#39;withAnyTags&#39; or &#39;withAllTags&#39; to indicate whether to return networks which contain ANY or ALL of the included tags. If no type is included, &#39;withAnyTags&#39; will be selected. | [optional] |
| **product_types** | [**string[]**](../Model/string.md)| An optional parameter to filter networks by product type. Results will have at least one of the included product types. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 100000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetNetwork200Response[]**](../Model/GetNetwork200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSummaryTopNetworksByStatus()`

```php
getOrganizationSummaryTopNetworksByStatus($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationSummaryTopNetworksByStatus200ResponseInner[]
```

List the client and status overview information for the networks in an organization

List the client and status overview information for the networks in an organization. Usage is measured in kilobytes and from the last seven days.

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


$apiInstance = new Meraki\Api\NetworksApi(
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
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 5000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationSummaryTopNetworksByStatus($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getOrganizationSummaryTopNetworksByStatus: ', $e->getMessage(), PHP_EOL;
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
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 5000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSummaryTopNetworksByStatus200ResponseInner[]**](../Model/GetOrganizationSummaryTopNetworksByStatus200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `provisionNetworkClients()`

```php
provisionNetworkClients($network_id, $provision_network_clients_request): \Meraki\Model\ProvisionNetworkClients201Response
```

Provisions a client with a name and policy

Provisions a client with a name and policy. Clients can be provisioned before they associate to the network.

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$provision_network_clients_request = new \Meraki\Model\ProvisionNetworkClientsRequest(); // \Meraki\Model\ProvisionNetworkClientsRequest

try {
    $result = $apiInstance->provisionNetworkClients($network_id, $provision_network_clients_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->provisionNetworkClients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **provision_network_clients_request** | [**\Meraki\Model\ProvisionNetworkClientsRequest**](../Model/ProvisionNetworkClientsRequest.md)|  | |

### Return type

[**\Meraki\Model\ProvisionNetworkClients201Response**](../Model/ProvisionNetworkClients201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `publishNetworkFloorPlansAutoLocateJob()`

```php
publishNetworkFloorPlansAutoLocateJob($network_id, $job_id, $publish_network_floor_plans_auto_locate_job_request): \Meraki\Model\PublishNetworkFloorPlansAutoLocateJob200Response
```

Update the status of a finished auto locate job to be published, and update device locations

Update the status of a finished auto locate job to be published, and update device locations

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$job_id = 'job_id_example'; // string | Job ID
$publish_network_floor_plans_auto_locate_job_request = new \Meraki\Model\PublishNetworkFloorPlansAutoLocateJobRequest(); // \Meraki\Model\PublishNetworkFloorPlansAutoLocateJobRequest

try {
    $result = $apiInstance->publishNetworkFloorPlansAutoLocateJob($network_id, $job_id, $publish_network_floor_plans_auto_locate_job_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->publishNetworkFloorPlansAutoLocateJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **job_id** | **string**| Job ID | |
| **publish_network_floor_plans_auto_locate_job_request** | [**\Meraki\Model\PublishNetworkFloorPlansAutoLocateJobRequest**](../Model/PublishNetworkFloorPlansAutoLocateJobRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\PublishNetworkFloorPlansAutoLocateJob200Response**](../Model/PublishNetworkFloorPlansAutoLocateJob200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reassignNetworkVlanProfilesAssignments()`

```php
reassignNetworkVlanProfilesAssignments($network_id, $reassign_network_vlan_profiles_assignments_request): \Meraki\Model\ReassignNetworkVlanProfilesAssignments200Response
```

Update the assigned VLAN Profile for devices in a network

Update the assigned VLAN Profile for devices in a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$reassign_network_vlan_profiles_assignments_request = new \Meraki\Model\ReassignNetworkVlanProfilesAssignmentsRequest(); // \Meraki\Model\ReassignNetworkVlanProfilesAssignmentsRequest

try {
    $result = $apiInstance->reassignNetworkVlanProfilesAssignments($network_id, $reassign_network_vlan_profiles_assignments_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->reassignNetworkVlanProfilesAssignments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **reassign_network_vlan_profiles_assignments_request** | [**\Meraki\Model\ReassignNetworkVlanProfilesAssignmentsRequest**](../Model/ReassignNetworkVlanProfilesAssignmentsRequest.md)|  | |

### Return type

[**\Meraki\Model\ReassignNetworkVlanProfilesAssignments200Response**](../Model/ReassignNetworkVlanProfilesAssignments200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recalculateNetworkFloorPlansAutoLocateJob()`

```php
recalculateNetworkFloorPlansAutoLocateJob($network_id, $job_id, $recalculate_network_floor_plans_auto_locate_job_request): \Meraki\Model\RecalculateNetworkFloorPlansAutoLocateJob200Response
```

Trigger auto locate recalculation for a job, and optionally set anchors

Trigger auto locate recalculation for a job, and optionally set anchors

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$job_id = 'job_id_example'; // string | Job ID
$recalculate_network_floor_plans_auto_locate_job_request = new \Meraki\Model\RecalculateNetworkFloorPlansAutoLocateJobRequest(); // \Meraki\Model\RecalculateNetworkFloorPlansAutoLocateJobRequest

try {
    $result = $apiInstance->recalculateNetworkFloorPlansAutoLocateJob($network_id, $job_id, $recalculate_network_floor_plans_auto_locate_job_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->recalculateNetworkFloorPlansAutoLocateJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **job_id** | **string**| Job ID | |
| **recalculate_network_floor_plans_auto_locate_job_request** | [**\Meraki\Model\RecalculateNetworkFloorPlansAutoLocateJobRequest**](../Model/RecalculateNetworkFloorPlansAutoLocateJobRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\RecalculateNetworkFloorPlansAutoLocateJob200Response**](../Model/RecalculateNetworkFloorPlansAutoLocateJob200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
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


$apiInstance = new Meraki\Api\NetworksApi(
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
    echo 'Exception when calling NetworksApi->removeNetworkDevices: ', $e->getMessage(), PHP_EOL;
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

## `rollbacksNetworkFirmwareUpgradesStagedEvents()`

```php
rollbacksNetworkFirmwareUpgradesStagedEvents($network_id, $rollbacks_network_firmware_upgrades_staged_events_request): \Meraki\Model\GetNetworkFirmwareUpgradesStagedEvents200Response
```

Rollback a Staged Upgrade Event for a network

Rollback a Staged Upgrade Event for a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$rollbacks_network_firmware_upgrades_staged_events_request = new \Meraki\Model\RollbacksNetworkFirmwareUpgradesStagedEventsRequest(); // \Meraki\Model\RollbacksNetworkFirmwareUpgradesStagedEventsRequest

try {
    $result = $apiInstance->rollbacksNetworkFirmwareUpgradesStagedEvents($network_id, $rollbacks_network_firmware_upgrades_staged_events_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->rollbacksNetworkFirmwareUpgradesStagedEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **rollbacks_network_firmware_upgrades_staged_events_request** | [**\Meraki\Model\RollbacksNetworkFirmwareUpgradesStagedEventsRequest**](../Model/RollbacksNetworkFirmwareUpgradesStagedEventsRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgradesStagedEvents200Response**](../Model/GetNetworkFirmwareUpgradesStagedEvents200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `splitNetwork()`

```php
splitNetwork($network_id): \Meraki\Model\SplitNetwork200Response
```

Split a combined network into individual networks for each type of device

Split a combined network into individual networks for each type of device

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->splitNetwork($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->splitNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\SplitNetwork200Response**](../Model/SplitNetwork200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unbindNetwork()`

```php
unbindNetwork($network_id, $unbind_network_request): \Meraki\Model\GetNetwork200Response
```

Unbind a network from a template.

Unbind a network from a template.

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$unbind_network_request = new \Meraki\Model\UnbindNetworkRequest(); // \Meraki\Model\UnbindNetworkRequest

try {
    $result = $apiInstance->unbindNetwork($network_id, $unbind_network_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->unbindNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **unbind_network_request** | [**\Meraki\Model\UnbindNetworkRequest**](../Model/UnbindNetworkRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetwork200Response**](../Model/GetNetwork200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetwork()`

```php
updateNetwork($network_id, $update_network_request): \Meraki\Model\GetNetwork200Response
```

Update a network

Update a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_request = new \Meraki\Model\UpdateNetworkRequest(); // \Meraki\Model\UpdateNetworkRequest

try {
    $result = $apiInstance->updateNetwork($network_id, $update_network_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->updateNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_request** | [**\Meraki\Model\UpdateNetworkRequest**](../Model/UpdateNetworkRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetwork200Response**](../Model/GetNetwork200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkAlertsSettings()`

```php
updateNetworkAlertsSettings($network_id, $update_network_alerts_settings_request): \Meraki\Model\GetNetworkAlertsSettings200Response
```

Update the alert configuration for this network

Update the alert configuration for this network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_alerts_settings_request = new \Meraki\Model\UpdateNetworkAlertsSettingsRequest(); // \Meraki\Model\UpdateNetworkAlertsSettingsRequest

try {
    $result = $apiInstance->updateNetworkAlertsSettings($network_id, $update_network_alerts_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->updateNetworkAlertsSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_alerts_settings_request** | [**\Meraki\Model\UpdateNetworkAlertsSettingsRequest**](../Model/UpdateNetworkAlertsSettingsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkAlertsSettings200Response**](../Model/GetNetworkAlertsSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkClientPolicy()`

```php
updateNetworkClientPolicy($network_id, $client_id, $update_network_client_policy_request): \Meraki\Model\GetNetworkClientPolicy200Response
```

Update the policy assigned to a client on the network

Update the policy assigned to a client on the network. Clients can be identified by a client key or either the MAC or IP depending on whether the network uses Track-by-IP.

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$client_id = 'client_id_example'; // string | Client ID
$update_network_client_policy_request = new \Meraki\Model\UpdateNetworkClientPolicyRequest(); // \Meraki\Model\UpdateNetworkClientPolicyRequest

try {
    $result = $apiInstance->updateNetworkClientPolicy($network_id, $client_id, $update_network_client_policy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->updateNetworkClientPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **client_id** | **string**| Client ID | |
| **update_network_client_policy_request** | [**\Meraki\Model\UpdateNetworkClientPolicyRequest**](../Model/UpdateNetworkClientPolicyRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkClientPolicy200Response**](../Model/GetNetworkClientPolicy200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkClientSplashAuthorizationStatus()`

```php
updateNetworkClientSplashAuthorizationStatus($network_id, $client_id, $update_network_client_splash_authorization_status_request): object
```

Update a client's splash authorization

Update a client's splash authorization. Clients can be identified by a client key or either the MAC or IP depending on whether the network uses Track-by-IP.

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$client_id = 'client_id_example'; // string | Client ID
$update_network_client_splash_authorization_status_request = new \Meraki\Model\UpdateNetworkClientSplashAuthorizationStatusRequest(); // \Meraki\Model\UpdateNetworkClientSplashAuthorizationStatusRequest

try {
    $result = $apiInstance->updateNetworkClientSplashAuthorizationStatus($network_id, $client_id, $update_network_client_splash_authorization_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->updateNetworkClientSplashAuthorizationStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **client_id** | **string**| Client ID | |
| **update_network_client_splash_authorization_status_request** | [**\Meraki\Model\UpdateNetworkClientSplashAuthorizationStatusRequest**](../Model/UpdateNetworkClientSplashAuthorizationStatusRequest.md)|  | |

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

## `updateNetworkFirmwareUpgrades()`

```php
updateNetworkFirmwareUpgrades($network_id, $update_network_firmware_upgrades_request): \Meraki\Model\GetNetworkFirmwareUpgrades200Response
```

Update firmware upgrade information for a network

Update firmware upgrade information for a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_firmware_upgrades_request = new \Meraki\Model\UpdateNetworkFirmwareUpgradesRequest(); // \Meraki\Model\UpdateNetworkFirmwareUpgradesRequest

try {
    $result = $apiInstance->updateNetworkFirmwareUpgrades($network_id, $update_network_firmware_upgrades_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->updateNetworkFirmwareUpgrades: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_firmware_upgrades_request** | [**\Meraki\Model\UpdateNetworkFirmwareUpgradesRequest**](../Model/UpdateNetworkFirmwareUpgradesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgrades200Response**](../Model/GetNetworkFirmwareUpgrades200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkFirmwareUpgradesStagedEvents()`

```php
updateNetworkFirmwareUpgradesStagedEvents($network_id, $update_network_firmware_upgrades_staged_events_request): \Meraki\Model\GetNetworkFirmwareUpgradesStagedEvents200Response
```

Update the Staged Upgrade Event for a network

Update the Staged Upgrade Event for a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_firmware_upgrades_staged_events_request = new \Meraki\Model\UpdateNetworkFirmwareUpgradesStagedEventsRequest(); // \Meraki\Model\UpdateNetworkFirmwareUpgradesStagedEventsRequest

try {
    $result = $apiInstance->updateNetworkFirmwareUpgradesStagedEvents($network_id, $update_network_firmware_upgrades_staged_events_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->updateNetworkFirmwareUpgradesStagedEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_firmware_upgrades_staged_events_request** | [**\Meraki\Model\UpdateNetworkFirmwareUpgradesStagedEventsRequest**](../Model/UpdateNetworkFirmwareUpgradesStagedEventsRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgradesStagedEvents200Response**](../Model/GetNetworkFirmwareUpgradesStagedEvents200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkFirmwareUpgradesStagedGroup()`

```php
updateNetworkFirmwareUpgradesStagedGroup($network_id, $group_id, $create_network_firmware_upgrades_staged_group_request): \Meraki\Model\GetNetworkFirmwareUpgradesStagedGroups200ResponseInner
```

Update a Staged Upgrade Group for a network

Update a Staged Upgrade Group for a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$group_id = 'group_id_example'; // string | Group ID
$create_network_firmware_upgrades_staged_group_request = new \Meraki\Model\CreateNetworkFirmwareUpgradesStagedGroupRequest(); // \Meraki\Model\CreateNetworkFirmwareUpgradesStagedGroupRequest

try {
    $result = $apiInstance->updateNetworkFirmwareUpgradesStagedGroup($network_id, $group_id, $create_network_firmware_upgrades_staged_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->updateNetworkFirmwareUpgradesStagedGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **group_id** | **string**| Group ID | |
| **create_network_firmware_upgrades_staged_group_request** | [**\Meraki\Model\CreateNetworkFirmwareUpgradesStagedGroupRequest**](../Model/CreateNetworkFirmwareUpgradesStagedGroupRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgradesStagedGroups200ResponseInner**](../Model/GetNetworkFirmwareUpgradesStagedGroups200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkFirmwareUpgradesStagedStages()`

```php
updateNetworkFirmwareUpgradesStagedStages($network_id, $update_network_firmware_upgrades_staged_stages_request): \Meraki\Model\GetNetworkFirmwareUpgradesStagedStages200ResponseInner[]
```

Assign Staged Upgrade Group order in the sequence.

Assign Staged Upgrade Group order in the sequence.

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_firmware_upgrades_staged_stages_request = new \Meraki\Model\UpdateNetworkFirmwareUpgradesStagedStagesRequest(); // \Meraki\Model\UpdateNetworkFirmwareUpgradesStagedStagesRequest

try {
    $result = $apiInstance->updateNetworkFirmwareUpgradesStagedStages($network_id, $update_network_firmware_upgrades_staged_stages_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->updateNetworkFirmwareUpgradesStagedStages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_firmware_upgrades_staged_stages_request** | [**\Meraki\Model\UpdateNetworkFirmwareUpgradesStagedStagesRequest**](../Model/UpdateNetworkFirmwareUpgradesStagedStagesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkFirmwareUpgradesStagedStages200ResponseInner[]**](../Model/GetNetworkFirmwareUpgradesStagedStages200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkFloorPlan()`

```php
updateNetworkFloorPlan($network_id, $floor_plan_id, $update_network_floor_plan_request): \Meraki\Model\GetNetworkFloorPlans200ResponseInner
```

Update a floor plan's geolocation and other meta data

Update a floor plan's geolocation and other meta data

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$floor_plan_id = 'floor_plan_id_example'; // string | Floor plan ID
$update_network_floor_plan_request = new \Meraki\Model\UpdateNetworkFloorPlanRequest(); // \Meraki\Model\UpdateNetworkFloorPlanRequest

try {
    $result = $apiInstance->updateNetworkFloorPlan($network_id, $floor_plan_id, $update_network_floor_plan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->updateNetworkFloorPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **floor_plan_id** | **string**| Floor plan ID | |
| **update_network_floor_plan_request** | [**\Meraki\Model\UpdateNetworkFloorPlanRequest**](../Model/UpdateNetworkFloorPlanRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkFloorPlans200ResponseInner**](../Model/GetNetworkFloorPlans200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkGroupPolicy()`

```php
updateNetworkGroupPolicy($network_id, $group_policy_id, $update_network_group_policy_request): \Meraki\Model\GetNetworkGroupPolicies200ResponseInner
```

Update a group policy

Update a group policy

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$group_policy_id = 'group_policy_id_example'; // string | Group policy ID
$update_network_group_policy_request = new \Meraki\Model\UpdateNetworkGroupPolicyRequest(); // \Meraki\Model\UpdateNetworkGroupPolicyRequest

try {
    $result = $apiInstance->updateNetworkGroupPolicy($network_id, $group_policy_id, $update_network_group_policy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->updateNetworkGroupPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **group_policy_id** | **string**| Group policy ID | |
| **update_network_group_policy_request** | [**\Meraki\Model\UpdateNetworkGroupPolicyRequest**](../Model/UpdateNetworkGroupPolicyRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkGroupPolicies200ResponseInner**](../Model/GetNetworkGroupPolicies200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkMerakiAuthUser()`

```php
updateNetworkMerakiAuthUser($network_id, $meraki_auth_user_id, $update_network_meraki_auth_user_request): \Meraki\Model\GetNetworkMerakiAuthUsers200ResponseInner
```

Update a user configured with Meraki Authentication (currently, 802.1X RADIUS, splash guest, and client VPN users can be updated)

Update a user configured with Meraki Authentication (currently, 802.1X RADIUS, splash guest, and client VPN users can be updated)

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$meraki_auth_user_id = 'meraki_auth_user_id_example'; // string | Meraki auth user ID
$update_network_meraki_auth_user_request = new \Meraki\Model\UpdateNetworkMerakiAuthUserRequest(); // \Meraki\Model\UpdateNetworkMerakiAuthUserRequest

try {
    $result = $apiInstance->updateNetworkMerakiAuthUser($network_id, $meraki_auth_user_id, $update_network_meraki_auth_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->updateNetworkMerakiAuthUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **meraki_auth_user_id** | **string**| Meraki auth user ID | |
| **update_network_meraki_auth_user_request** | [**\Meraki\Model\UpdateNetworkMerakiAuthUserRequest**](../Model/UpdateNetworkMerakiAuthUserRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkMerakiAuthUsers200ResponseInner**](../Model/GetNetworkMerakiAuthUsers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkMqttBroker()`

```php
updateNetworkMqttBroker($network_id, $mqtt_broker_id, $update_network_mqtt_broker_request): \Meraki\Model\GetNetworkMqttBrokers200ResponseInner
```

Update an MQTT broker

Update an MQTT broker

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$mqtt_broker_id = 'mqtt_broker_id_example'; // string | Mqtt broker ID
$update_network_mqtt_broker_request = new \Meraki\Model\UpdateNetworkMqttBrokerRequest(); // \Meraki\Model\UpdateNetworkMqttBrokerRequest

try {
    $result = $apiInstance->updateNetworkMqttBroker($network_id, $mqtt_broker_id, $update_network_mqtt_broker_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->updateNetworkMqttBroker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **mqtt_broker_id** | **string**| Mqtt broker ID | |
| **update_network_mqtt_broker_request** | [**\Meraki\Model\UpdateNetworkMqttBrokerRequest**](../Model/UpdateNetworkMqttBrokerRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkMqttBrokers200ResponseInner**](../Model/GetNetworkMqttBrokers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkNetflow()`

```php
updateNetworkNetflow($network_id, $update_network_netflow_request): \Meraki\Model\GetNetworkNetflow200Response
```

Update the NetFlow traffic reporting settings for a network

Update the NetFlow traffic reporting settings for a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_netflow_request = new \Meraki\Model\UpdateNetworkNetflowRequest(); // \Meraki\Model\UpdateNetworkNetflowRequest

try {
    $result = $apiInstance->updateNetworkNetflow($network_id, $update_network_netflow_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->updateNetworkNetflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_netflow_request** | [**\Meraki\Model\UpdateNetworkNetflowRequest**](../Model/UpdateNetworkNetflowRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkNetflow200Response**](../Model/GetNetworkNetflow200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSettings()`

```php
updateNetworkSettings($network_id, $update_network_settings_request): \Meraki\Model\GetNetworkSettings200Response
```

Update the settings for a network

Update the settings for a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_settings_request = new \Meraki\Model\UpdateNetworkSettingsRequest(); // \Meraki\Model\UpdateNetworkSettingsRequest

try {
    $result = $apiInstance->updateNetworkSettings($network_id, $update_network_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->updateNetworkSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_settings_request** | [**\Meraki\Model\UpdateNetworkSettingsRequest**](../Model/UpdateNetworkSettingsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSettings200Response**](../Model/GetNetworkSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSnmp()`

```php
updateNetworkSnmp($network_id, $update_network_snmp_request): \Meraki\Model\GetNetworkSnmp200Response
```

Update the SNMP settings for a network

Update the SNMP settings for a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_snmp_request = new \Meraki\Model\UpdateNetworkSnmpRequest(); // \Meraki\Model\UpdateNetworkSnmpRequest

try {
    $result = $apiInstance->updateNetworkSnmp($network_id, $update_network_snmp_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->updateNetworkSnmp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_snmp_request** | [**\Meraki\Model\UpdateNetworkSnmpRequest**](../Model/UpdateNetworkSnmpRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkSnmp200Response**](../Model/GetNetworkSnmp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkSyslogServers()`

```php
updateNetworkSyslogServers($network_id, $update_network_syslog_servers_request): \Meraki\Model\GetNetworkSyslogServers200Response
```

Update the syslog servers for a network

Update the syslog servers for a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_syslog_servers_request = new \Meraki\Model\UpdateNetworkSyslogServersRequest(); // \Meraki\Model\UpdateNetworkSyslogServersRequest

try {
    $result = $apiInstance->updateNetworkSyslogServers($network_id, $update_network_syslog_servers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->updateNetworkSyslogServers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_syslog_servers_request** | [**\Meraki\Model\UpdateNetworkSyslogServersRequest**](../Model/UpdateNetworkSyslogServersRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkSyslogServers200Response**](../Model/GetNetworkSyslogServers200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkTrafficAnalysis()`

```php
updateNetworkTrafficAnalysis($network_id, $update_network_traffic_analysis_request): \Meraki\Model\GetNetworkTrafficAnalysis200Response
```

Update the traffic analysis settings for a network

Update the traffic analysis settings for a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_traffic_analysis_request = new \Meraki\Model\UpdateNetworkTrafficAnalysisRequest(); // \Meraki\Model\UpdateNetworkTrafficAnalysisRequest

try {
    $result = $apiInstance->updateNetworkTrafficAnalysis($network_id, $update_network_traffic_analysis_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->updateNetworkTrafficAnalysis: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_traffic_analysis_request** | [**\Meraki\Model\UpdateNetworkTrafficAnalysisRequest**](../Model/UpdateNetworkTrafficAnalysisRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkTrafficAnalysis200Response**](../Model/GetNetworkTrafficAnalysis200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkVlanProfile()`

```php
updateNetworkVlanProfile($network_id, $iname, $update_network_vlan_profile_request): \Meraki\Model\GetNetworkVlanProfiles200ResponseInner
```

Update an existing VLAN profile of a network

Update an existing VLAN profile of a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$iname = 'iname_example'; // string | Iname
$update_network_vlan_profile_request = new \Meraki\Model\UpdateNetworkVlanProfileRequest(); // \Meraki\Model\UpdateNetworkVlanProfileRequest

try {
    $result = $apiInstance->updateNetworkVlanProfile($network_id, $iname, $update_network_vlan_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->updateNetworkVlanProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **iname** | **string**| Iname | |
| **update_network_vlan_profile_request** | [**\Meraki\Model\UpdateNetworkVlanProfileRequest**](../Model/UpdateNetworkVlanProfileRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkVlanProfiles200ResponseInner**](../Model/GetNetworkVlanProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWebhooksHttpServer()`

```php
updateNetworkWebhooksHttpServer($network_id, $http_server_id, $update_network_webhooks_http_server_request): \Meraki\Model\GetNetworkWebhooksHttpServers200ResponseInner
```

Update an HTTP server

Update an HTTP server. To change a URL, create a new HTTP server.

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$http_server_id = 'http_server_id_example'; // string | Http server ID
$update_network_webhooks_http_server_request = new \Meraki\Model\UpdateNetworkWebhooksHttpServerRequest(); // \Meraki\Model\UpdateNetworkWebhooksHttpServerRequest

try {
    $result = $apiInstance->updateNetworkWebhooksHttpServer($network_id, $http_server_id, $update_network_webhooks_http_server_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->updateNetworkWebhooksHttpServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **http_server_id** | **string**| Http server ID | |
| **update_network_webhooks_http_server_request** | [**\Meraki\Model\UpdateNetworkWebhooksHttpServerRequest**](../Model/UpdateNetworkWebhooksHttpServerRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWebhooksHttpServers200ResponseInner**](../Model/GetNetworkWebhooksHttpServers200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkWebhooksPayloadTemplate()`

```php
updateNetworkWebhooksPayloadTemplate($network_id, $payload_template_id, $update_network_webhooks_payload_template_request): \Meraki\Model\GetNetworkWebhooksPayloadTemplates200ResponseInner
```

Update a webhook payload template for a network

Update a webhook payload template for a network

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


$apiInstance = new Meraki\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$payload_template_id = 'payload_template_id_example'; // string | Payload template ID
$update_network_webhooks_payload_template_request = new \Meraki\Model\UpdateNetworkWebhooksPayloadTemplateRequest(); // \Meraki\Model\UpdateNetworkWebhooksPayloadTemplateRequest

try {
    $result = $apiInstance->updateNetworkWebhooksPayloadTemplate($network_id, $payload_template_id, $update_network_webhooks_payload_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->updateNetworkWebhooksPayloadTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **payload_template_id** | **string**| Payload template ID | |
| **update_network_webhooks_payload_template_request** | [**\Meraki\Model\UpdateNetworkWebhooksPayloadTemplateRequest**](../Model/UpdateNetworkWebhooksPayloadTemplateRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkWebhooksPayloadTemplates200ResponseInner**](../Model/GetNetworkWebhooksPayloadTemplates200ResponseInner.md)

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


$apiInstance = new Meraki\Api\NetworksApi(
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
    echo 'Exception when calling NetworksApi->vmxNetworkDevicesClaim: ', $e->getMessage(), PHP_EOL;
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
