# Meraki\OrganizationsApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assignOrganizationLicensesSeats()**](OrganizationsApi.md#assignOrganizationLicensesSeats) | **POST** /organizations/{organizationId}/licenses/assignSeats | Assign SM seats to a network |
| [**bulkUpdateOrganizationDevicesDetails()**](OrganizationsApi.md#bulkUpdateOrganizationDevicesDetails) | **POST** /organizations/{organizationId}/devices/details/bulkUpdate | Updating device details (currently only used for Catalyst devices) |
| [**claimIntoOrganization()**](OrganizationsApi.md#claimIntoOrganization) | **POST** /organizations/{organizationId}/claim | Claim a list of devices, licenses, and/or orders into an organization inventory |
| [**claimIntoOrganizationInventory()**](OrganizationsApi.md#claimIntoOrganizationInventory) | **POST** /organizations/{organizationId}/inventory/claim | Claim a list of devices, licenses, and/or orders into an organization inventory |
| [**cloneOrganization()**](OrganizationsApi.md#cloneOrganization) | **POST** /organizations/{organizationId}/clone | Create a new organization by cloning the addressed organization |
| [**combineOrganizationNetworks()**](OrganizationsApi.md#combineOrganizationNetworks) | **POST** /organizations/{organizationId}/networks/combine | Combine multiple networks into a single network |
| [**createOrganization()**](OrganizationsApi.md#createOrganization) | **POST** /organizations | Create a new organization |
| [**createOrganizationActionBatch()**](OrganizationsApi.md#createOrganizationActionBatch) | **POST** /organizations/{organizationId}/actionBatches | Create an action batch |
| [**createOrganizationAdaptivePolicyAcl()**](OrganizationsApi.md#createOrganizationAdaptivePolicyAcl) | **POST** /organizations/{organizationId}/adaptivePolicy/acls | Creates new adaptive policy ACL |
| [**createOrganizationAdaptivePolicyGroup()**](OrganizationsApi.md#createOrganizationAdaptivePolicyGroup) | **POST** /organizations/{organizationId}/adaptivePolicy/groups | Creates a new adaptive policy group |
| [**createOrganizationAdaptivePolicyPolicy()**](OrganizationsApi.md#createOrganizationAdaptivePolicyPolicy) | **POST** /organizations/{organizationId}/adaptivePolicy/policies | Add an Adaptive Policy |
| [**createOrganizationAdmin()**](OrganizationsApi.md#createOrganizationAdmin) | **POST** /organizations/{organizationId}/admins | Create a new dashboard administrator |
| [**createOrganizationAlertsProfile()**](OrganizationsApi.md#createOrganizationAlertsProfile) | **POST** /organizations/{organizationId}/alerts/profiles | Create an organization-wide alert configuration |
| [**createOrganizationBrandingPolicy()**](OrganizationsApi.md#createOrganizationBrandingPolicy) | **POST** /organizations/{organizationId}/brandingPolicies | Add a new branding policy to an organization |
| [**createOrganizationConfigTemplate()**](OrganizationsApi.md#createOrganizationConfigTemplate) | **POST** /organizations/{organizationId}/configTemplates | Create a new configuration template |
| [**createOrganizationDevicesControllerMigration()**](OrganizationsApi.md#createOrganizationDevicesControllerMigration) | **POST** /organizations/{organizationId}/devices/controller/migrations | Migrate devices to another controller or management mode |
| [**createOrganizationEarlyAccessFeaturesOptIn()**](OrganizationsApi.md#createOrganizationEarlyAccessFeaturesOptIn) | **POST** /organizations/{organizationId}/earlyAccess/features/optIns | Create a new early access feature opt-in for an organization |
| [**createOrganizationInventoryDevicesSwapsBulk()**](OrganizationsApi.md#createOrganizationInventoryDevicesSwapsBulk) | **POST** /organizations/{organizationId}/inventory/devices/swaps/bulk | Swap the devices identified by devices.old with a devices.new, then perform the :afterAction on the devices.old. |
| [**createOrganizationInventoryOnboardingCloudMonitoringExportEvent()**](OrganizationsApi.md#createOrganizationInventoryOnboardingCloudMonitoringExportEvent) | **POST** /organizations/{organizationId}/inventory/onboarding/cloudMonitoring/exportEvents | Imports event logs related to the onboarding app into elastisearch |
| [**createOrganizationInventoryOnboardingCloudMonitoringImport()**](OrganizationsApi.md#createOrganizationInventoryOnboardingCloudMonitoringImport) | **POST** /organizations/{organizationId}/inventory/onboarding/cloudMonitoring/imports | Commits the import operation to complete the onboarding of a device into Dashboard for monitoring. |
| [**createOrganizationInventoryOnboardingCloudMonitoringPrepare()**](OrganizationsApi.md#createOrganizationInventoryOnboardingCloudMonitoringPrepare) | **POST** /organizations/{organizationId}/inventory/onboarding/cloudMonitoring/prepare | Initiates or updates an import session |
| [**createOrganizationNetwork()**](OrganizationsApi.md#createOrganizationNetwork) | **POST** /organizations/{organizationId}/networks | Create a network |
| [**createOrganizationPolicyObject()**](OrganizationsApi.md#createOrganizationPolicyObject) | **POST** /organizations/{organizationId}/policyObjects | Creates a new Policy Object. |
| [**createOrganizationPolicyObjectsGroup()**](OrganizationsApi.md#createOrganizationPolicyObjectsGroup) | **POST** /organizations/{organizationId}/policyObjects/groups | Creates a new Policy Object Group. |
| [**createOrganizationSamlIdp()**](OrganizationsApi.md#createOrganizationSamlIdp) | **POST** /organizations/{organizationId}/saml/idps | Create a SAML IdP for your organization. |
| [**createOrganizationSamlRole()**](OrganizationsApi.md#createOrganizationSamlRole) | **POST** /organizations/{organizationId}/samlRoles | Create a SAML role |
| [**createOrganizationSplashTheme()**](OrganizationsApi.md#createOrganizationSplashTheme) | **POST** /organizations/{organizationId}/splash/themes | Create a Splash Theme |
| [**createOrganizationSplashThemeAsset()**](OrganizationsApi.md#createOrganizationSplashThemeAsset) | **POST** /organizations/{organizationId}/splash/themes/{themeIdentifier}/assets | Create a Splash Theme Asset |
| [**deleteOrganization()**](OrganizationsApi.md#deleteOrganization) | **DELETE** /organizations/{organizationId} | Delete an organization |
| [**deleteOrganizationActionBatch()**](OrganizationsApi.md#deleteOrganizationActionBatch) | **DELETE** /organizations/{organizationId}/actionBatches/{actionBatchId} | Delete an action batch |
| [**deleteOrganizationAdaptivePolicyAcl()**](OrganizationsApi.md#deleteOrganizationAdaptivePolicyAcl) | **DELETE** /organizations/{organizationId}/adaptivePolicy/acls/{aclId} | Deletes the specified adaptive policy ACL |
| [**deleteOrganizationAdaptivePolicyGroup()**](OrganizationsApi.md#deleteOrganizationAdaptivePolicyGroup) | **DELETE** /organizations/{organizationId}/adaptivePolicy/groups/{id} | Deletes the specified adaptive policy group and any associated policies and references |
| [**deleteOrganizationAdaptivePolicyPolicy()**](OrganizationsApi.md#deleteOrganizationAdaptivePolicyPolicy) | **DELETE** /organizations/{organizationId}/adaptivePolicy/policies/{id} | Delete an Adaptive Policy |
| [**deleteOrganizationAdmin()**](OrganizationsApi.md#deleteOrganizationAdmin) | **DELETE** /organizations/{organizationId}/admins/{adminId} | Revoke all access for a dashboard administrator within this organization |
| [**deleteOrganizationAlertsProfile()**](OrganizationsApi.md#deleteOrganizationAlertsProfile) | **DELETE** /organizations/{organizationId}/alerts/profiles/{alertConfigId} | Removes an organization-wide alert config |
| [**deleteOrganizationBrandingPolicy()**](OrganizationsApi.md#deleteOrganizationBrandingPolicy) | **DELETE** /organizations/{organizationId}/brandingPolicies/{brandingPolicyId} | Delete a branding policy |
| [**deleteOrganizationConfigTemplate()**](OrganizationsApi.md#deleteOrganizationConfigTemplate) | **DELETE** /organizations/{organizationId}/configTemplates/{configTemplateId} | Remove a configuration template |
| [**deleteOrganizationEarlyAccessFeaturesOptIn()**](OrganizationsApi.md#deleteOrganizationEarlyAccessFeaturesOptIn) | **DELETE** /organizations/{organizationId}/earlyAccess/features/optIns/{optInId} | Delete an early access feature opt-in |
| [**deleteOrganizationPolicyObject()**](OrganizationsApi.md#deleteOrganizationPolicyObject) | **DELETE** /organizations/{organizationId}/policyObjects/{policyObjectId} | Deletes a Policy Object. |
| [**deleteOrganizationPolicyObjectsGroup()**](OrganizationsApi.md#deleteOrganizationPolicyObjectsGroup) | **DELETE** /organizations/{organizationId}/policyObjects/groups/{policyObjectGroupId} | Deletes a Policy Object Group. |
| [**deleteOrganizationSamlIdp()**](OrganizationsApi.md#deleteOrganizationSamlIdp) | **DELETE** /organizations/{organizationId}/saml/idps/{idpId} | Remove a SAML IdP in your organization. |
| [**deleteOrganizationSamlRole()**](OrganizationsApi.md#deleteOrganizationSamlRole) | **DELETE** /organizations/{organizationId}/samlRoles/{samlRoleId} | Remove a SAML role |
| [**deleteOrganizationSplashAsset()**](OrganizationsApi.md#deleteOrganizationSplashAsset) | **DELETE** /organizations/{organizationId}/splash/assets/{id} | Delete a Splash Theme Asset |
| [**deleteOrganizationSplashTheme()**](OrganizationsApi.md#deleteOrganizationSplashTheme) | **DELETE** /organizations/{organizationId}/splash/themes/{id} | Delete a Splash Theme |
| [**disableOrganizationIntegrationsXdrNetworks()**](OrganizationsApi.md#disableOrganizationIntegrationsXdrNetworks) | **POST** /organizations/{organizationId}/integrations/xdr/networks/disable | Disable XDR on networks |
| [**dismissOrganizationAssuranceAlerts()**](OrganizationsApi.md#dismissOrganizationAssuranceAlerts) | **POST** /organizations/{organizationId}/assurance/alerts/dismiss | Dismiss health alerts |
| [**enableOrganizationIntegrationsXdrNetworks()**](OrganizationsApi.md#enableOrganizationIntegrationsXdrNetworks) | **POST** /organizations/{organizationId}/integrations/xdr/networks/enable | Enable XDR on networks |
| [**getOrganization()**](OrganizationsApi.md#getOrganization) | **GET** /organizations/{organizationId} | Return an organization |
| [**getOrganizationActionBatch()**](OrganizationsApi.md#getOrganizationActionBatch) | **GET** /organizations/{organizationId}/actionBatches/{actionBatchId} | Return an action batch |
| [**getOrganizationActionBatches()**](OrganizationsApi.md#getOrganizationActionBatches) | **GET** /organizations/{organizationId}/actionBatches | Return the list of action batches in the organization |
| [**getOrganizationAdaptivePolicyAcl()**](OrganizationsApi.md#getOrganizationAdaptivePolicyAcl) | **GET** /organizations/{organizationId}/adaptivePolicy/acls/{aclId} | Returns the adaptive policy ACL information |
| [**getOrganizationAdaptivePolicyAcls()**](OrganizationsApi.md#getOrganizationAdaptivePolicyAcls) | **GET** /organizations/{organizationId}/adaptivePolicy/acls | List adaptive policy ACLs in a organization |
| [**getOrganizationAdaptivePolicyGroup()**](OrganizationsApi.md#getOrganizationAdaptivePolicyGroup) | **GET** /organizations/{organizationId}/adaptivePolicy/groups/{id} | Returns an adaptive policy group |
| [**getOrganizationAdaptivePolicyGroups()**](OrganizationsApi.md#getOrganizationAdaptivePolicyGroups) | **GET** /organizations/{organizationId}/adaptivePolicy/groups | List adaptive policy groups in a organization |
| [**getOrganizationAdaptivePolicyOverview()**](OrganizationsApi.md#getOrganizationAdaptivePolicyOverview) | **GET** /organizations/{organizationId}/adaptivePolicy/overview | Returns adaptive policy aggregate statistics for an organization |
| [**getOrganizationAdaptivePolicyPolicies()**](OrganizationsApi.md#getOrganizationAdaptivePolicyPolicies) | **GET** /organizations/{organizationId}/adaptivePolicy/policies | List adaptive policies in an organization |
| [**getOrganizationAdaptivePolicyPolicy()**](OrganizationsApi.md#getOrganizationAdaptivePolicyPolicy) | **GET** /organizations/{organizationId}/adaptivePolicy/policies/{id} | Return an adaptive policy |
| [**getOrganizationAdaptivePolicySettings()**](OrganizationsApi.md#getOrganizationAdaptivePolicySettings) | **GET** /organizations/{organizationId}/adaptivePolicy/settings | Returns global adaptive policy settings in an organization |
| [**getOrganizationAdmins()**](OrganizationsApi.md#getOrganizationAdmins) | **GET** /organizations/{organizationId}/admins | List the dashboard administrators in this organization |
| [**getOrganizationAlertsProfiles()**](OrganizationsApi.md#getOrganizationAlertsProfiles) | **GET** /organizations/{organizationId}/alerts/profiles | List all organization-wide alert configurations |
| [**getOrganizationApiRequests()**](OrganizationsApi.md#getOrganizationApiRequests) | **GET** /organizations/{organizationId}/apiRequests | List the API requests made by an organization |
| [**getOrganizationApiRequestsOverview()**](OrganizationsApi.md#getOrganizationApiRequestsOverview) | **GET** /organizations/{organizationId}/apiRequests/overview | Return an aggregated overview of API requests data |
| [**getOrganizationApiRequestsOverviewResponseCodesByInterval()**](OrganizationsApi.md#getOrganizationApiRequestsOverviewResponseCodesByInterval) | **GET** /organizations/{organizationId}/apiRequests/overview/responseCodes/byInterval | Tracks organizations&#39; API requests by response code across a given time period |
| [**getOrganizationAssuranceAlert()**](OrganizationsApi.md#getOrganizationAssuranceAlert) | **GET** /organizations/{organizationId}/assurance/alerts/{id} | Return a singular Health Alert by its id |
| [**getOrganizationAssuranceAlerts()**](OrganizationsApi.md#getOrganizationAssuranceAlerts) | **GET** /organizations/{organizationId}/assurance/alerts | Return all health alerts for an organization |
| [**getOrganizationAssuranceAlertsOverview()**](OrganizationsApi.md#getOrganizationAssuranceAlertsOverview) | **GET** /organizations/{organizationId}/assurance/alerts/overview | Return overview of active health alerts for an organization |
| [**getOrganizationAssuranceAlertsOverviewByNetwork()**](OrganizationsApi.md#getOrganizationAssuranceAlertsOverviewByNetwork) | **GET** /organizations/{organizationId}/assurance/alerts/overview/byNetwork | Return a Summary of Alerts grouped by network and severity |
| [**getOrganizationAssuranceAlertsOverviewByType()**](OrganizationsApi.md#getOrganizationAssuranceAlertsOverviewByType) | **GET** /organizations/{organizationId}/assurance/alerts/overview/byType | Return a Summary of Alerts grouped by type and severity |
| [**getOrganizationAssuranceAlertsOverviewHistorical()**](OrganizationsApi.md#getOrganizationAssuranceAlertsOverviewHistorical) | **GET** /organizations/{organizationId}/assurance/alerts/overview/historical | Returns historical health alert overviews |
| [**getOrganizationBrandingPolicies()**](OrganizationsApi.md#getOrganizationBrandingPolicies) | **GET** /organizations/{organizationId}/brandingPolicies | List the branding policies of an organization |
| [**getOrganizationBrandingPoliciesPriorities()**](OrganizationsApi.md#getOrganizationBrandingPoliciesPriorities) | **GET** /organizations/{organizationId}/brandingPolicies/priorities | Return the branding policy IDs of an organization in priority order |
| [**getOrganizationBrandingPolicy()**](OrganizationsApi.md#getOrganizationBrandingPolicy) | **GET** /organizations/{organizationId}/brandingPolicies/{brandingPolicyId} | Return a branding policy |
| [**getOrganizationClientsBandwidthUsageHistory()**](OrganizationsApi.md#getOrganizationClientsBandwidthUsageHistory) | **GET** /organizations/{organizationId}/clients/bandwidthUsageHistory | Return data usage (in megabits per second) over time for all clients in the given organization within a given time range. |
| [**getOrganizationClientsOverview()**](OrganizationsApi.md#getOrganizationClientsOverview) | **GET** /organizations/{organizationId}/clients/overview | Return summary information around client data usage (in kb) across the given organization. |
| [**getOrganizationClientsSearch()**](OrganizationsApi.md#getOrganizationClientsSearch) | **GET** /organizations/{organizationId}/clients/search | Return the client details in an organization |
| [**getOrganizationConfigTemplate()**](OrganizationsApi.md#getOrganizationConfigTemplate) | **GET** /organizations/{organizationId}/configTemplates/{configTemplateId} | Return a single configuration template |
| [**getOrganizationConfigTemplates()**](OrganizationsApi.md#getOrganizationConfigTemplates) | **GET** /organizations/{organizationId}/configTemplates | List the configuration templates for this organization |
| [**getOrganizationConfigurationChanges()**](OrganizationsApi.md#getOrganizationConfigurationChanges) | **GET** /organizations/{organizationId}/configurationChanges | View the Change Log for your organization |
| [**getOrganizationDevices()**](OrganizationsApi.md#getOrganizationDevices) | **GET** /organizations/{organizationId}/devices | List the devices in an organization that have been assigned to a network. |
| [**getOrganizationDevicesAvailabilities()**](OrganizationsApi.md#getOrganizationDevicesAvailabilities) | **GET** /organizations/{organizationId}/devices/availabilities | List the availability information for devices in an organization |
| [**getOrganizationDevicesAvailabilitiesChangeHistory()**](OrganizationsApi.md#getOrganizationDevicesAvailabilitiesChangeHistory) | **GET** /organizations/{organizationId}/devices/availabilities/changeHistory | List the availability history information for devices in an organization. |
| [**getOrganizationDevicesControllerMigrations()**](OrganizationsApi.md#getOrganizationDevicesControllerMigrations) | **GET** /organizations/{organizationId}/devices/controller/migrations | Retrieve device migration statuses in an organization |
| [**getOrganizationDevicesOverviewByModel()**](OrganizationsApi.md#getOrganizationDevicesOverviewByModel) | **GET** /organizations/{organizationId}/devices/overview/byModel | Lists the count for each device model |
| [**getOrganizationDevicesPowerModulesStatusesByDevice()**](OrganizationsApi.md#getOrganizationDevicesPowerModulesStatusesByDevice) | **GET** /organizations/{organizationId}/devices/powerModules/statuses/byDevice | List the most recent status information for power modules in rackmount MX and MS devices that support them |
| [**getOrganizationDevicesProvisioningStatuses()**](OrganizationsApi.md#getOrganizationDevicesProvisioningStatuses) | **GET** /organizations/{organizationId}/devices/provisioning/statuses | List the provisioning statuses information for devices in an organization. |
| [**getOrganizationDevicesStatuses()**](OrganizationsApi.md#getOrganizationDevicesStatuses) | **GET** /organizations/{organizationId}/devices/statuses | List the status of every Meraki device in the organization |
| [**getOrganizationDevicesStatusesOverview()**](OrganizationsApi.md#getOrganizationDevicesStatusesOverview) | **GET** /organizations/{organizationId}/devices/statuses/overview | Return an overview of current device statuses |
| [**getOrganizationDevicesSystemMemoryUsageHistoryByInterval()**](OrganizationsApi.md#getOrganizationDevicesSystemMemoryUsageHistoryByInterval) | **GET** /organizations/{organizationId}/devices/system/memory/usage/history/byInterval | Return the memory utilization history in kB for devices in the organization. |
| [**getOrganizationDevicesUplinksAddressesByDevice()**](OrganizationsApi.md#getOrganizationDevicesUplinksAddressesByDevice) | **GET** /organizations/{organizationId}/devices/uplinks/addresses/byDevice | List the current uplink addresses for devices in an organization. |
| [**getOrganizationDevicesUplinksLossAndLatency()**](OrganizationsApi.md#getOrganizationDevicesUplinksLossAndLatency) | **GET** /organizations/{organizationId}/devices/uplinksLossAndLatency | Return the uplink loss and latency for every MX in the organization from at latest 2 minutes ago |
| [**getOrganizationEarlyAccessFeatures()**](OrganizationsApi.md#getOrganizationEarlyAccessFeatures) | **GET** /organizations/{organizationId}/earlyAccess/features | List the available early access features for organization |
| [**getOrganizationEarlyAccessFeaturesOptIn()**](OrganizationsApi.md#getOrganizationEarlyAccessFeaturesOptIn) | **GET** /organizations/{organizationId}/earlyAccess/features/optIns/{optInId} | Show an early access feature opt-in for an organization |
| [**getOrganizationEarlyAccessFeaturesOptIns()**](OrganizationsApi.md#getOrganizationEarlyAccessFeaturesOptIns) | **GET** /organizations/{organizationId}/earlyAccess/features/optIns | List the early access feature opt-ins for an organization |
| [**getOrganizationFirmwareUpgrades()**](OrganizationsApi.md#getOrganizationFirmwareUpgrades) | **GET** /organizations/{organizationId}/firmware/upgrades | Get firmware upgrade information for an organization |
| [**getOrganizationFirmwareUpgradesByDevice()**](OrganizationsApi.md#getOrganizationFirmwareUpgradesByDevice) | **GET** /organizations/{organizationId}/firmware/upgrades/byDevice | Get firmware upgrade status for the filtered devices |
| [**getOrganizationFloorPlansAutoLocateDevices()**](OrganizationsApi.md#getOrganizationFloorPlansAutoLocateDevices) | **GET** /organizations/{organizationId}/floorPlans/autoLocate/devices | List auto locate details for each device in your organization |
| [**getOrganizationFloorPlansAutoLocateStatuses()**](OrganizationsApi.md#getOrganizationFloorPlansAutoLocateStatuses) | **GET** /organizations/{organizationId}/floorPlans/autoLocate/statuses | List the status of auto locate for each floorplan in your organization |
| [**getOrganizationIntegrationsXdrNetworks()**](OrganizationsApi.md#getOrganizationIntegrationsXdrNetworks) | **GET** /organizations/{organizationId}/integrations/xdr/networks | Returns the networks in the organization that have XDR enabled |
| [**getOrganizationInventoryDevice()**](OrganizationsApi.md#getOrganizationInventoryDevice) | **GET** /organizations/{organizationId}/inventory/devices/{serial} | Return a single device from the inventory of an organization |
| [**getOrganizationInventoryDevices()**](OrganizationsApi.md#getOrganizationInventoryDevices) | **GET** /organizations/{organizationId}/inventory/devices | Return the device inventory for an organization |
| [**getOrganizationInventoryDevicesSwapsBulk()**](OrganizationsApi.md#getOrganizationInventoryDevicesSwapsBulk) | **GET** /organizations/{organizationId}/inventory/devices/swaps/bulk/{id} | List of device swaps for a given request ID ({id}). |
| [**getOrganizationInventoryOnboardingCloudMonitoringImports()**](OrganizationsApi.md#getOrganizationInventoryOnboardingCloudMonitoringImports) | **GET** /organizations/{organizationId}/inventory/onboarding/cloudMonitoring/imports | Check the status of a committed Import operation |
| [**getOrganizationInventoryOnboardingCloudMonitoringNetworks()**](OrganizationsApi.md#getOrganizationInventoryOnboardingCloudMonitoringNetworks) | **GET** /organizations/{organizationId}/inventory/onboarding/cloudMonitoring/networks | Returns list of networks eligible for adding cloud monitored device |
| [**getOrganizationLicense()**](OrganizationsApi.md#getOrganizationLicense) | **GET** /organizations/{organizationId}/licenses/{licenseId} | Display a license |
| [**getOrganizationLicenses()**](OrganizationsApi.md#getOrganizationLicenses) | **GET** /organizations/{organizationId}/licenses | List the licenses for an organization |
| [**getOrganizationLicensesOverview()**](OrganizationsApi.md#getOrganizationLicensesOverview) | **GET** /organizations/{organizationId}/licenses/overview | Return an overview of the license state for an organization |
| [**getOrganizationLoginSecurity()**](OrganizationsApi.md#getOrganizationLoginSecurity) | **GET** /organizations/{organizationId}/loginSecurity | Returns the login security settings for an organization. |
| [**getOrganizationNetworks()**](OrganizationsApi.md#getOrganizationNetworks) | **GET** /organizations/{organizationId}/networks | List the networks that the user has privileges on in an organization |
| [**getOrganizationOpenapiSpec()**](OrganizationsApi.md#getOrganizationOpenapiSpec) | **GET** /organizations/{organizationId}/openapiSpec | Return the OpenAPI Specification of the organization&#39;s API documentation in JSON |
| [**getOrganizationPolicyObject()**](OrganizationsApi.md#getOrganizationPolicyObject) | **GET** /organizations/{organizationId}/policyObjects/{policyObjectId} | Shows details of a Policy Object. |
| [**getOrganizationPolicyObjects()**](OrganizationsApi.md#getOrganizationPolicyObjects) | **GET** /organizations/{organizationId}/policyObjects | Lists Policy Objects belonging to the organization. |
| [**getOrganizationPolicyObjectsGroup()**](OrganizationsApi.md#getOrganizationPolicyObjectsGroup) | **GET** /organizations/{organizationId}/policyObjects/groups/{policyObjectGroupId} | Shows details of a Policy Object Group. |
| [**getOrganizationPolicyObjectsGroups()**](OrganizationsApi.md#getOrganizationPolicyObjectsGroups) | **GET** /organizations/{organizationId}/policyObjects/groups | Lists Policy Object Groups belonging to the organization. |
| [**getOrganizationSaml()**](OrganizationsApi.md#getOrganizationSaml) | **GET** /organizations/{organizationId}/saml | Returns the SAML SSO enabled settings for an organization. |
| [**getOrganizationSamlIdp()**](OrganizationsApi.md#getOrganizationSamlIdp) | **GET** /organizations/{organizationId}/saml/idps/{idpId} | Get a SAML IdP from your organization. |
| [**getOrganizationSamlIdps()**](OrganizationsApi.md#getOrganizationSamlIdps) | **GET** /organizations/{organizationId}/saml/idps | List the SAML IdPs in your organization. |
| [**getOrganizationSamlRole()**](OrganizationsApi.md#getOrganizationSamlRole) | **GET** /organizations/{organizationId}/samlRoles/{samlRoleId} | Return a SAML role |
| [**getOrganizationSamlRoles()**](OrganizationsApi.md#getOrganizationSamlRoles) | **GET** /organizations/{organizationId}/samlRoles | List the SAML roles for this organization |
| [**getOrganizationSnmp()**](OrganizationsApi.md#getOrganizationSnmp) | **GET** /organizations/{organizationId}/snmp | Return the SNMP settings for an organization |
| [**getOrganizationSplashAsset()**](OrganizationsApi.md#getOrganizationSplashAsset) | **GET** /organizations/{organizationId}/splash/assets/{id} | Get a Splash Theme Asset |
| [**getOrganizationSplashThemes()**](OrganizationsApi.md#getOrganizationSplashThemes) | **GET** /organizations/{organizationId}/splash/themes | List Splash Themes |
| [**getOrganizationSummaryTopAppliancesByUtilization()**](OrganizationsApi.md#getOrganizationSummaryTopAppliancesByUtilization) | **GET** /organizations/{organizationId}/summary/top/appliances/byUtilization | Return the top 10 appliances sorted by utilization over given time range. |
| [**getOrganizationSummaryTopApplicationsByUsage()**](OrganizationsApi.md#getOrganizationSummaryTopApplicationsByUsage) | **GET** /organizations/{organizationId}/summary/top/applications/byUsage | Return the top applications sorted by data usage over given time range |
| [**getOrganizationSummaryTopApplicationsCategoriesByUsage()**](OrganizationsApi.md#getOrganizationSummaryTopApplicationsCategoriesByUsage) | **GET** /organizations/{organizationId}/summary/top/applications/categories/byUsage | Return the top application categories sorted by data usage over given time range |
| [**getOrganizationSummaryTopClientsByUsage()**](OrganizationsApi.md#getOrganizationSummaryTopClientsByUsage) | **GET** /organizations/{organizationId}/summary/top/clients/byUsage | Return metrics for organization&#39;s top 10 clients by data usage (in mb) over given time range. |
| [**getOrganizationSummaryTopClientsManufacturersByUsage()**](OrganizationsApi.md#getOrganizationSummaryTopClientsManufacturersByUsage) | **GET** /organizations/{organizationId}/summary/top/clients/manufacturers/byUsage | Return metrics for organization&#39;s top clients by data usage (in mb) over given time range, grouped by manufacturer. |
| [**getOrganizationSummaryTopDevicesByUsage()**](OrganizationsApi.md#getOrganizationSummaryTopDevicesByUsage) | **GET** /organizations/{organizationId}/summary/top/devices/byUsage | Return metrics for organization&#39;s top 10 devices sorted by data usage over given time range |
| [**getOrganizationSummaryTopDevicesModelsByUsage()**](OrganizationsApi.md#getOrganizationSummaryTopDevicesModelsByUsage) | **GET** /organizations/{organizationId}/summary/top/devices/models/byUsage | Return metrics for organization&#39;s top 10 device models sorted by data usage over given time range |
| [**getOrganizationSummaryTopNetworksByStatus()**](OrganizationsApi.md#getOrganizationSummaryTopNetworksByStatus) | **GET** /organizations/{organizationId}/summary/top/networks/byStatus | List the client and status overview information for the networks in an organization |
| [**getOrganizationSummaryTopSsidsByUsage()**](OrganizationsApi.md#getOrganizationSummaryTopSsidsByUsage) | **GET** /organizations/{organizationId}/summary/top/ssids/byUsage | Return metrics for organization&#39;s top 10 ssids by data usage over given time range |
| [**getOrganizationSummaryTopSwitchesByEnergyUsage()**](OrganizationsApi.md#getOrganizationSummaryTopSwitchesByEnergyUsage) | **GET** /organizations/{organizationId}/summary/top/switches/byEnergyUsage | Return metrics for organization&#39;s top 10 switches by energy usage over given time range |
| [**getOrganizationUplinksStatuses()**](OrganizationsApi.md#getOrganizationUplinksStatuses) | **GET** /organizations/{organizationId}/uplinks/statuses | List the uplink status of every Meraki MX, MG and Z series devices in the organization |
| [**getOrganizationWebhooksAlertTypes()**](OrganizationsApi.md#getOrganizationWebhooksAlertTypes) | **GET** /organizations/{organizationId}/webhooks/alertTypes | Return a list of alert types to be used with managing webhook alerts |
| [**getOrganizationWebhooksCallbacksStatus()**](OrganizationsApi.md#getOrganizationWebhooksCallbacksStatus) | **GET** /organizations/{organizationId}/webhooks/callbacks/statuses/{callbackId} | Return the status of an API callback |
| [**getOrganizationWebhooksLogs()**](OrganizationsApi.md#getOrganizationWebhooksLogs) | **GET** /organizations/{organizationId}/webhooks/logs | Return the log of webhook POSTs sent |
| [**getOrganizations()**](OrganizationsApi.md#getOrganizations) | **GET** /organizations | List the organizations that the user has privileges on |
| [**moveOrganizationLicenses()**](OrganizationsApi.md#moveOrganizationLicenses) | **POST** /organizations/{organizationId}/licenses/move | Move licenses to another organization |
| [**moveOrganizationLicensesSeats()**](OrganizationsApi.md#moveOrganizationLicensesSeats) | **POST** /organizations/{organizationId}/licenses/moveSeats | Move SM seats to another organization |
| [**releaseFromOrganizationInventory()**](OrganizationsApi.md#releaseFromOrganizationInventory) | **POST** /organizations/{organizationId}/inventory/release | Release a list of claimed devices from an organization. |
| [**renewOrganizationLicensesSeats()**](OrganizationsApi.md#renewOrganizationLicensesSeats) | **POST** /organizations/{organizationId}/licenses/renewSeats | Renew SM seats of a license |
| [**restoreOrganizationAssuranceAlerts()**](OrganizationsApi.md#restoreOrganizationAssuranceAlerts) | **POST** /organizations/{organizationId}/assurance/alerts/restore | Restore health alerts from dismissed |
| [**updateOrganization()**](OrganizationsApi.md#updateOrganization) | **PUT** /organizations/{organizationId} | Update an organization |
| [**updateOrganizationActionBatch()**](OrganizationsApi.md#updateOrganizationActionBatch) | **PUT** /organizations/{organizationId}/actionBatches/{actionBatchId} | Update an action batch |
| [**updateOrganizationAdaptivePolicyAcl()**](OrganizationsApi.md#updateOrganizationAdaptivePolicyAcl) | **PUT** /organizations/{organizationId}/adaptivePolicy/acls/{aclId} | Updates an adaptive policy ACL |
| [**updateOrganizationAdaptivePolicyGroup()**](OrganizationsApi.md#updateOrganizationAdaptivePolicyGroup) | **PUT** /organizations/{organizationId}/adaptivePolicy/groups/{id} | Updates an adaptive policy group |
| [**updateOrganizationAdaptivePolicyPolicy()**](OrganizationsApi.md#updateOrganizationAdaptivePolicyPolicy) | **PUT** /organizations/{organizationId}/adaptivePolicy/policies/{id} | Update an Adaptive Policy |
| [**updateOrganizationAdaptivePolicySettings()**](OrganizationsApi.md#updateOrganizationAdaptivePolicySettings) | **PUT** /organizations/{organizationId}/adaptivePolicy/settings | Update global adaptive policy settings |
| [**updateOrganizationAdmin()**](OrganizationsApi.md#updateOrganizationAdmin) | **PUT** /organizations/{organizationId}/admins/{adminId} | Update an administrator |
| [**updateOrganizationAlertsProfile()**](OrganizationsApi.md#updateOrganizationAlertsProfile) | **PUT** /organizations/{organizationId}/alerts/profiles/{alertConfigId} | Update an organization-wide alert config |
| [**updateOrganizationBrandingPoliciesPriorities()**](OrganizationsApi.md#updateOrganizationBrandingPoliciesPriorities) | **PUT** /organizations/{organizationId}/brandingPolicies/priorities | Update the priority ordering of an organization&#39;s branding policies. |
| [**updateOrganizationBrandingPolicy()**](OrganizationsApi.md#updateOrganizationBrandingPolicy) | **PUT** /organizations/{organizationId}/brandingPolicies/{brandingPolicyId} | Update a branding policy |
| [**updateOrganizationConfigTemplate()**](OrganizationsApi.md#updateOrganizationConfigTemplate) | **PUT** /organizations/{organizationId}/configTemplates/{configTemplateId} | Update a configuration template |
| [**updateOrganizationEarlyAccessFeaturesOptIn()**](OrganizationsApi.md#updateOrganizationEarlyAccessFeaturesOptIn) | **PUT** /organizations/{organizationId}/earlyAccess/features/optIns/{optInId} | Update an early access feature opt-in for an organization |
| [**updateOrganizationLicense()**](OrganizationsApi.md#updateOrganizationLicense) | **PUT** /organizations/{organizationId}/licenses/{licenseId} | Update a license |
| [**updateOrganizationLoginSecurity()**](OrganizationsApi.md#updateOrganizationLoginSecurity) | **PUT** /organizations/{organizationId}/loginSecurity | Update the login security settings for an organization |
| [**updateOrganizationPolicyObject()**](OrganizationsApi.md#updateOrganizationPolicyObject) | **PUT** /organizations/{organizationId}/policyObjects/{policyObjectId} | Updates a Policy Object. |
| [**updateOrganizationPolicyObjectsGroup()**](OrganizationsApi.md#updateOrganizationPolicyObjectsGroup) | **PUT** /organizations/{organizationId}/policyObjects/groups/{policyObjectGroupId} | Updates a Policy Object Group. |
| [**updateOrganizationSaml()**](OrganizationsApi.md#updateOrganizationSaml) | **PUT** /organizations/{organizationId}/saml | Updates the SAML SSO enabled settings for an organization. |
| [**updateOrganizationSamlIdp()**](OrganizationsApi.md#updateOrganizationSamlIdp) | **PUT** /organizations/{organizationId}/saml/idps/{idpId} | Update a SAML IdP in your organization |
| [**updateOrganizationSamlRole()**](OrganizationsApi.md#updateOrganizationSamlRole) | **PUT** /organizations/{organizationId}/samlRoles/{samlRoleId} | Update a SAML role |
| [**updateOrganizationSnmp()**](OrganizationsApi.md#updateOrganizationSnmp) | **PUT** /organizations/{organizationId}/snmp | Update the SNMP settings for an organization |


## `assignOrganizationLicensesSeats()`

```php
assignOrganizationLicensesSeats($organization_id, $assign_organization_licenses_seats_request): \Meraki\Model\AssignOrganizationLicensesSeats200Response
```

Assign SM seats to a network

Assign SM seats to a network. This will increase the managed SM device limit of the network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$assign_organization_licenses_seats_request = new \Meraki\Model\AssignOrganizationLicensesSeatsRequest(); // \Meraki\Model\AssignOrganizationLicensesSeatsRequest

try {
    $result = $apiInstance->assignOrganizationLicensesSeats($organization_id, $assign_organization_licenses_seats_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->assignOrganizationLicensesSeats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **assign_organization_licenses_seats_request** | [**\Meraki\Model\AssignOrganizationLicensesSeatsRequest**](../Model/AssignOrganizationLicensesSeatsRequest.md)|  | |

### Return type

[**\Meraki\Model\AssignOrganizationLicensesSeats200Response**](../Model/AssignOrganizationLicensesSeats200Response.md)

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


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->bulkUpdateOrganizationDevicesDetails: ', $e->getMessage(), PHP_EOL;
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

## `claimIntoOrganization()`

```php
claimIntoOrganization($organization_id, $claim_into_organization_request): \Meraki\Model\ClaimIntoOrganization200Response
```

Claim a list of devices, licenses, and/or orders into an organization inventory

Claim a list of devices, licenses, and/or orders into an organization inventory. When claiming by order, all devices and licenses in the order will be claimed; licenses will be added to the organization and devices will be placed in the organization's inventory. This operation can be used up to ten times within a single five minute window.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$claim_into_organization_request = new \Meraki\Model\ClaimIntoOrganizationRequest(); // \Meraki\Model\ClaimIntoOrganizationRequest

try {
    $result = $apiInstance->claimIntoOrganization($organization_id, $claim_into_organization_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->claimIntoOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **claim_into_organization_request** | [**\Meraki\Model\ClaimIntoOrganizationRequest**](../Model/ClaimIntoOrganizationRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\ClaimIntoOrganization200Response**](../Model/ClaimIntoOrganization200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `claimIntoOrganizationInventory()`

```php
claimIntoOrganizationInventory($organization_id, $claim_into_organization_inventory_request): \Meraki\Model\ClaimIntoOrganization200Response
```

Claim a list of devices, licenses, and/or orders into an organization inventory

Claim a list of devices, licenses, and/or orders into an organization inventory. When claiming by order, all devices and licenses in the order will be claimed; licenses will be added to the organization and devices will be placed in the organization's inventory. This operation can be used up to ten times within a single five minute window.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$claim_into_organization_inventory_request = new \Meraki\Model\ClaimIntoOrganizationInventoryRequest(); // \Meraki\Model\ClaimIntoOrganizationInventoryRequest

try {
    $result = $apiInstance->claimIntoOrganizationInventory($organization_id, $claim_into_organization_inventory_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->claimIntoOrganizationInventory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **claim_into_organization_inventory_request** | [**\Meraki\Model\ClaimIntoOrganizationInventoryRequest**](../Model/ClaimIntoOrganizationInventoryRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\ClaimIntoOrganization200Response**](../Model/ClaimIntoOrganization200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloneOrganization()`

```php
cloneOrganization($organization_id, $clone_organization_request): \Meraki\Model\GetOrganizations200ResponseInner
```

Create a new organization by cloning the addressed organization

Create a new organization by cloning the addressed organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$clone_organization_request = new \Meraki\Model\CloneOrganizationRequest(); // \Meraki\Model\CloneOrganizationRequest

try {
    $result = $apiInstance->cloneOrganization($organization_id, $clone_organization_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->cloneOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **clone_organization_request** | [**\Meraki\Model\CloneOrganizationRequest**](../Model/CloneOrganizationRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizations200ResponseInner**](../Model/GetOrganizations200ResponseInner.md)

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


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->combineOrganizationNetworks: ', $e->getMessage(), PHP_EOL;
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

## `createOrganization()`

```php
createOrganization($create_organization_request): \Meraki\Model\GetOrganizations200ResponseInner
```

Create a new organization

Create a new organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_organization_request = new \Meraki\Model\CreateOrganizationRequest(); // \Meraki\Model\CreateOrganizationRequest

try {
    $result = $apiInstance->createOrganization($create_organization_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->createOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_organization_request** | [**\Meraki\Model\CreateOrganizationRequest**](../Model/CreateOrganizationRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizations200ResponseInner**](../Model/GetOrganizations200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationActionBatch()`

```php
createOrganizationActionBatch($organization_id, $create_organization_action_batch_request): \Meraki\Model\CreateOrganizationActionBatch201Response
```

Create an action batch

Create an action batch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_action_batch_request = new \Meraki\Model\CreateOrganizationActionBatchRequest(); // \Meraki\Model\CreateOrganizationActionBatchRequest

try {
    $result = $apiInstance->createOrganizationActionBatch($organization_id, $create_organization_action_batch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->createOrganizationActionBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_action_batch_request** | [**\Meraki\Model\CreateOrganizationActionBatchRequest**](../Model/CreateOrganizationActionBatchRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateOrganizationActionBatch201Response**](../Model/CreateOrganizationActionBatch201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationAdaptivePolicyAcl()`

```php
createOrganizationAdaptivePolicyAcl($organization_id, $create_organization_adaptive_policy_acl_request): \Meraki\Model\GetOrganizationAdaptivePolicyAcls200ResponseInner
```

Creates new adaptive policy ACL

Creates new adaptive policy ACL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_adaptive_policy_acl_request = new \Meraki\Model\CreateOrganizationAdaptivePolicyAclRequest(); // \Meraki\Model\CreateOrganizationAdaptivePolicyAclRequest

try {
    $result = $apiInstance->createOrganizationAdaptivePolicyAcl($organization_id, $create_organization_adaptive_policy_acl_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->createOrganizationAdaptivePolicyAcl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_adaptive_policy_acl_request** | [**\Meraki\Model\CreateOrganizationAdaptivePolicyAclRequest**](../Model/CreateOrganizationAdaptivePolicyAclRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicyAcls200ResponseInner**](../Model/GetOrganizationAdaptivePolicyAcls200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationAdaptivePolicyGroup()`

```php
createOrganizationAdaptivePolicyGroup($organization_id, $create_organization_adaptive_policy_group_request): \Meraki\Model\GetOrganizationAdaptivePolicyGroups200ResponseInner
```

Creates a new adaptive policy group

Creates a new adaptive policy group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_adaptive_policy_group_request = new \Meraki\Model\CreateOrganizationAdaptivePolicyGroupRequest(); // \Meraki\Model\CreateOrganizationAdaptivePolicyGroupRequest

try {
    $result = $apiInstance->createOrganizationAdaptivePolicyGroup($organization_id, $create_organization_adaptive_policy_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->createOrganizationAdaptivePolicyGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_adaptive_policy_group_request** | [**\Meraki\Model\CreateOrganizationAdaptivePolicyGroupRequest**](../Model/CreateOrganizationAdaptivePolicyGroupRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicyGroups200ResponseInner**](../Model/GetOrganizationAdaptivePolicyGroups200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationAdaptivePolicyPolicy()`

```php
createOrganizationAdaptivePolicyPolicy($organization_id, $create_organization_adaptive_policy_policy_request): \Meraki\Model\GetOrganizationAdaptivePolicyPolicies200ResponseInner
```

Add an Adaptive Policy

Add an Adaptive Policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_adaptive_policy_policy_request = new \Meraki\Model\CreateOrganizationAdaptivePolicyPolicyRequest(); // \Meraki\Model\CreateOrganizationAdaptivePolicyPolicyRequest

try {
    $result = $apiInstance->createOrganizationAdaptivePolicyPolicy($organization_id, $create_organization_adaptive_policy_policy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->createOrganizationAdaptivePolicyPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_adaptive_policy_policy_request** | [**\Meraki\Model\CreateOrganizationAdaptivePolicyPolicyRequest**](../Model/CreateOrganizationAdaptivePolicyPolicyRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicyPolicies200ResponseInner**](../Model/GetOrganizationAdaptivePolicyPolicies200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationAdmin()`

```php
createOrganizationAdmin($organization_id, $create_organization_admin_request): \Meraki\Model\GetOrganizationAdmins200ResponseInner
```

Create a new dashboard administrator

Create a new dashboard administrator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_admin_request = new \Meraki\Model\CreateOrganizationAdminRequest(); // \Meraki\Model\CreateOrganizationAdminRequest

try {
    $result = $apiInstance->createOrganizationAdmin($organization_id, $create_organization_admin_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->createOrganizationAdmin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_admin_request** | [**\Meraki\Model\CreateOrganizationAdminRequest**](../Model/CreateOrganizationAdminRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationAdmins200ResponseInner**](../Model/GetOrganizationAdmins200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationAlertsProfile()`

```php
createOrganizationAlertsProfile($organization_id, $create_organization_alerts_profile_request): \Meraki\Model\GetOrganizationAlertsProfiles200ResponseInner
```

Create an organization-wide alert configuration

Create an organization-wide alert configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_alerts_profile_request = new \Meraki\Model\CreateOrganizationAlertsProfileRequest(); // \Meraki\Model\CreateOrganizationAlertsProfileRequest

try {
    $result = $apiInstance->createOrganizationAlertsProfile($organization_id, $create_organization_alerts_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->createOrganizationAlertsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_alerts_profile_request** | [**\Meraki\Model\CreateOrganizationAlertsProfileRequest**](../Model/CreateOrganizationAlertsProfileRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationAlertsProfiles200ResponseInner**](../Model/GetOrganizationAlertsProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationBrandingPolicy()`

```php
createOrganizationBrandingPolicy($organization_id, $create_organization_branding_policy_request): \Meraki\Model\CreateOrganizationBrandingPolicy201Response
```

Add a new branding policy to an organization

Add a new branding policy to an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_branding_policy_request = new \Meraki\Model\CreateOrganizationBrandingPolicyRequest(); // \Meraki\Model\CreateOrganizationBrandingPolicyRequest

try {
    $result = $apiInstance->createOrganizationBrandingPolicy($organization_id, $create_organization_branding_policy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->createOrganizationBrandingPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_branding_policy_request** | [**\Meraki\Model\CreateOrganizationBrandingPolicyRequest**](../Model/CreateOrganizationBrandingPolicyRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\CreateOrganizationBrandingPolicy201Response**](../Model/CreateOrganizationBrandingPolicy201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationConfigTemplate()`

```php
createOrganizationConfigTemplate($organization_id, $create_organization_config_template_request): \Meraki\Model\GetOrganizationConfigTemplates200ResponseInner
```

Create a new configuration template

Create a new configuration template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_config_template_request = new \Meraki\Model\CreateOrganizationConfigTemplateRequest(); // \Meraki\Model\CreateOrganizationConfigTemplateRequest

try {
    $result = $apiInstance->createOrganizationConfigTemplate($organization_id, $create_organization_config_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->createOrganizationConfigTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_config_template_request** | [**\Meraki\Model\CreateOrganizationConfigTemplateRequest**](../Model/CreateOrganizationConfigTemplateRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationConfigTemplates200ResponseInner**](../Model/GetOrganizationConfigTemplates200ResponseInner.md)

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


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->createOrganizationDevicesControllerMigration: ', $e->getMessage(), PHP_EOL;
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

## `createOrganizationEarlyAccessFeaturesOptIn()`

```php
createOrganizationEarlyAccessFeaturesOptIn($organization_id, $create_organization_early_access_features_opt_in_request): \Meraki\Model\GetOrganizationEarlyAccessFeaturesOptIns200Response
```

Create a new early access feature opt-in for an organization

Create a new early access feature opt-in for an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_early_access_features_opt_in_request = new \Meraki\Model\CreateOrganizationEarlyAccessFeaturesOptInRequest(); // \Meraki\Model\CreateOrganizationEarlyAccessFeaturesOptInRequest

try {
    $result = $apiInstance->createOrganizationEarlyAccessFeaturesOptIn($organization_id, $create_organization_early_access_features_opt_in_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->createOrganizationEarlyAccessFeaturesOptIn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_early_access_features_opt_in_request** | [**\Meraki\Model\CreateOrganizationEarlyAccessFeaturesOptInRequest**](../Model/CreateOrganizationEarlyAccessFeaturesOptInRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationEarlyAccessFeaturesOptIns200Response**](../Model/GetOrganizationEarlyAccessFeaturesOptIns200Response.md)

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


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->createOrganizationInventoryDevicesSwapsBulk: ', $e->getMessage(), PHP_EOL;
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

## `createOrganizationInventoryOnboardingCloudMonitoringExportEvent()`

```php
createOrganizationInventoryOnboardingCloudMonitoringExportEvent($organization_id, $create_organization_inventory_onboarding_cloud_monitoring_export_event_request): object
```

Imports event logs related to the onboarding app into elastisearch

Imports event logs related to the onboarding app into elastisearch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_inventory_onboarding_cloud_monitoring_export_event_request = new \Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringExportEventRequest(); // \Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringExportEventRequest

try {
    $result = $apiInstance->createOrganizationInventoryOnboardingCloudMonitoringExportEvent($organization_id, $create_organization_inventory_onboarding_cloud_monitoring_export_event_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->createOrganizationInventoryOnboardingCloudMonitoringExportEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_inventory_onboarding_cloud_monitoring_export_event_request** | [**\Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringExportEventRequest**](../Model/CreateOrganizationInventoryOnboardingCloudMonitoringExportEventRequest.md)|  | |

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

## `createOrganizationInventoryOnboardingCloudMonitoringImport()`

```php
createOrganizationInventoryOnboardingCloudMonitoringImport($organization_id, $create_organization_inventory_onboarding_cloud_monitoring_import_request): \Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringImport201ResponseInner[]
```

Commits the import operation to complete the onboarding of a device into Dashboard for monitoring.

Commits the import operation to complete the onboarding of a device into Dashboard for monitoring.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_inventory_onboarding_cloud_monitoring_import_request = new \Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringImportRequest(); // \Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringImportRequest

try {
    $result = $apiInstance->createOrganizationInventoryOnboardingCloudMonitoringImport($organization_id, $create_organization_inventory_onboarding_cloud_monitoring_import_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->createOrganizationInventoryOnboardingCloudMonitoringImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_inventory_onboarding_cloud_monitoring_import_request** | [**\Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringImportRequest**](../Model/CreateOrganizationInventoryOnboardingCloudMonitoringImportRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringImport201ResponseInner[]**](../Model/CreateOrganizationInventoryOnboardingCloudMonitoringImport201ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationInventoryOnboardingCloudMonitoringPrepare()`

```php
createOrganizationInventoryOnboardingCloudMonitoringPrepare($organization_id, $create_organization_inventory_onboarding_cloud_monitoring_prepare_request): \Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringPrepare201ResponseInner[]
```

Initiates or updates an import session

Initiates or updates an import session. An import ID will be generated and used when you are ready to commit the import.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_inventory_onboarding_cloud_monitoring_prepare_request = new \Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringPrepareRequest(); // \Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringPrepareRequest

try {
    $result = $apiInstance->createOrganizationInventoryOnboardingCloudMonitoringPrepare($organization_id, $create_organization_inventory_onboarding_cloud_monitoring_prepare_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->createOrganizationInventoryOnboardingCloudMonitoringPrepare: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_inventory_onboarding_cloud_monitoring_prepare_request** | [**\Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringPrepareRequest**](../Model/CreateOrganizationInventoryOnboardingCloudMonitoringPrepareRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateOrganizationInventoryOnboardingCloudMonitoringPrepare201ResponseInner[]**](../Model/CreateOrganizationInventoryOnboardingCloudMonitoringPrepare201ResponseInner.md)

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


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->createOrganizationNetwork: ', $e->getMessage(), PHP_EOL;
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

## `createOrganizationPolicyObject()`

```php
createOrganizationPolicyObject($organization_id, $create_organization_policy_object_request): \Meraki\Model\GetOrganizationPolicyObjects200Response
```

Creates a new Policy Object.

Creates a new Policy Object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_policy_object_request = new \Meraki\Model\CreateOrganizationPolicyObjectRequest(); // \Meraki\Model\CreateOrganizationPolicyObjectRequest

try {
    $result = $apiInstance->createOrganizationPolicyObject($organization_id, $create_organization_policy_object_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->createOrganizationPolicyObject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_policy_object_request** | [**\Meraki\Model\CreateOrganizationPolicyObjectRequest**](../Model/CreateOrganizationPolicyObjectRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationPolicyObjects200Response**](../Model/GetOrganizationPolicyObjects200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationPolicyObjectsGroup()`

```php
createOrganizationPolicyObjectsGroup($organization_id, $create_organization_policy_objects_group_request): \Meraki\Model\GetOrganizationPolicyObjectsGroups200Response
```

Creates a new Policy Object Group.

Creates a new Policy Object Group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_policy_objects_group_request = new \Meraki\Model\CreateOrganizationPolicyObjectsGroupRequest(); // \Meraki\Model\CreateOrganizationPolicyObjectsGroupRequest

try {
    $result = $apiInstance->createOrganizationPolicyObjectsGroup($organization_id, $create_organization_policy_objects_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->createOrganizationPolicyObjectsGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_policy_objects_group_request** | [**\Meraki\Model\CreateOrganizationPolicyObjectsGroupRequest**](../Model/CreateOrganizationPolicyObjectsGroupRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationPolicyObjectsGroups200Response**](../Model/GetOrganizationPolicyObjectsGroups200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationSamlIdp()`

```php
createOrganizationSamlIdp($organization_id, $create_organization_saml_idp_request): \Meraki\Model\GetOrganizationSamlIdps200ResponseInner[]
```

Create a SAML IdP for your organization.

Create a SAML IdP for your organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_saml_idp_request = new \Meraki\Model\CreateOrganizationSamlIdpRequest(); // \Meraki\Model\CreateOrganizationSamlIdpRequest

try {
    $result = $apiInstance->createOrganizationSamlIdp($organization_id, $create_organization_saml_idp_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->createOrganizationSamlIdp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_saml_idp_request** | [**\Meraki\Model\CreateOrganizationSamlIdpRequest**](../Model/CreateOrganizationSamlIdpRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationSamlIdps200ResponseInner[]**](../Model/GetOrganizationSamlIdps200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationSamlRole()`

```php
createOrganizationSamlRole($organization_id, $create_organization_saml_role_request): \Meraki\Model\GetOrganizationSamlRoles200ResponseInner
```

Create a SAML role

Create a SAML role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_saml_role_request = new \Meraki\Model\CreateOrganizationSamlRoleRequest(); // \Meraki\Model\CreateOrganizationSamlRoleRequest

try {
    $result = $apiInstance->createOrganizationSamlRole($organization_id, $create_organization_saml_role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->createOrganizationSamlRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_saml_role_request** | [**\Meraki\Model\CreateOrganizationSamlRoleRequest**](../Model/CreateOrganizationSamlRoleRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationSamlRoles200ResponseInner**](../Model/GetOrganizationSamlRoles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationSplashTheme()`

```php
createOrganizationSplashTheme($organization_id, $create_organization_splash_theme_request): \Meraki\Model\GetOrganizationSplashThemes200ResponseInner
```

Create a Splash Theme

Create a Splash Theme

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_splash_theme_request = new \Meraki\Model\CreateOrganizationSplashThemeRequest(); // \Meraki\Model\CreateOrganizationSplashThemeRequest

try {
    $result = $apiInstance->createOrganizationSplashTheme($organization_id, $create_organization_splash_theme_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->createOrganizationSplashTheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_splash_theme_request** | [**\Meraki\Model\CreateOrganizationSplashThemeRequest**](../Model/CreateOrganizationSplashThemeRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSplashThemes200ResponseInner**](../Model/GetOrganizationSplashThemes200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationSplashThemeAsset()`

```php
createOrganizationSplashThemeAsset($organization_id, $theme_identifier, $create_organization_splash_theme_asset_request): \Meraki\Model\GetOrganizationSplashAsset200Response
```

Create a Splash Theme Asset

Create a Splash Theme Asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$theme_identifier = 'theme_identifier_example'; // string | Theme identifier
$create_organization_splash_theme_asset_request = new \Meraki\Model\CreateOrganizationSplashThemeAssetRequest(); // \Meraki\Model\CreateOrganizationSplashThemeAssetRequest

try {
    $result = $apiInstance->createOrganizationSplashThemeAsset($organization_id, $theme_identifier, $create_organization_splash_theme_asset_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->createOrganizationSplashThemeAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **theme_identifier** | **string**| Theme identifier | |
| **create_organization_splash_theme_asset_request** | [**\Meraki\Model\CreateOrganizationSplashThemeAssetRequest**](../Model/CreateOrganizationSplashThemeAssetRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSplashAsset200Response**](../Model/GetOrganizationSplashAsset200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrganization()`

```php
deleteOrganization($organization_id)
```

Delete an organization

Delete an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $apiInstance->deleteOrganization($organization_id);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->deleteOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

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

## `deleteOrganizationActionBatch()`

```php
deleteOrganizationActionBatch($organization_id, $action_batch_id)
```

Delete an action batch

Delete an action batch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$action_batch_id = 'action_batch_id_example'; // string | Action batch ID

try {
    $apiInstance->deleteOrganizationActionBatch($organization_id, $action_batch_id);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->deleteOrganizationActionBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **action_batch_id** | **string**| Action batch ID | |

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

## `deleteOrganizationAdaptivePolicyAcl()`

```php
deleteOrganizationAdaptivePolicyAcl($organization_id, $acl_id)
```

Deletes the specified adaptive policy ACL

Deletes the specified adaptive policy ACL. Note this adaptive policy ACL will also be removed from policies using it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$acl_id = 'acl_id_example'; // string | Acl ID

try {
    $apiInstance->deleteOrganizationAdaptivePolicyAcl($organization_id, $acl_id);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->deleteOrganizationAdaptivePolicyAcl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **acl_id** | **string**| Acl ID | |

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

## `deleteOrganizationAdaptivePolicyGroup()`

```php
deleteOrganizationAdaptivePolicyGroup($organization_id, $id)
```

Deletes the specified adaptive policy group and any associated policies and references

Deletes the specified adaptive policy group and any associated policies and references

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$id = 'id_example'; // string | ID

try {
    $apiInstance->deleteOrganizationAdaptivePolicyGroup($organization_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->deleteOrganizationAdaptivePolicyGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **id** | **string**| ID | |

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

## `deleteOrganizationAdaptivePolicyPolicy()`

```php
deleteOrganizationAdaptivePolicyPolicy($organization_id, $id)
```

Delete an Adaptive Policy

Delete an Adaptive Policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$id = 'id_example'; // string | ID

try {
    $apiInstance->deleteOrganizationAdaptivePolicyPolicy($organization_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->deleteOrganizationAdaptivePolicyPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **id** | **string**| ID | |

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

## `deleteOrganizationAdmin()`

```php
deleteOrganizationAdmin($organization_id, $admin_id)
```

Revoke all access for a dashboard administrator within this organization

Revoke all access for a dashboard administrator within this organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$admin_id = 'admin_id_example'; // string | Admin ID

try {
    $apiInstance->deleteOrganizationAdmin($organization_id, $admin_id);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->deleteOrganizationAdmin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **admin_id** | **string**| Admin ID | |

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

## `deleteOrganizationAlertsProfile()`

```php
deleteOrganizationAlertsProfile($organization_id, $alert_config_id)
```

Removes an organization-wide alert config

Removes an organization-wide alert config

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$alert_config_id = 'alert_config_id_example'; // string | Alert config ID

try {
    $apiInstance->deleteOrganizationAlertsProfile($organization_id, $alert_config_id);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->deleteOrganizationAlertsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **alert_config_id** | **string**| Alert config ID | |

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

## `deleteOrganizationBrandingPolicy()`

```php
deleteOrganizationBrandingPolicy($organization_id, $branding_policy_id)
```

Delete a branding policy

Delete a branding policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$branding_policy_id = 'branding_policy_id_example'; // string | Branding policy ID

try {
    $apiInstance->deleteOrganizationBrandingPolicy($organization_id, $branding_policy_id);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->deleteOrganizationBrandingPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **branding_policy_id** | **string**| Branding policy ID | |

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

## `deleteOrganizationConfigTemplate()`

```php
deleteOrganizationConfigTemplate($organization_id, $config_template_id)
```

Remove a configuration template

Remove a configuration template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$config_template_id = 'config_template_id_example'; // string | Config template ID

try {
    $apiInstance->deleteOrganizationConfigTemplate($organization_id, $config_template_id);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->deleteOrganizationConfigTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **config_template_id** | **string**| Config template ID | |

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

## `deleteOrganizationEarlyAccessFeaturesOptIn()`

```php
deleteOrganizationEarlyAccessFeaturesOptIn($organization_id, $opt_in_id)
```

Delete an early access feature opt-in

Delete an early access feature opt-in

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$opt_in_id = 'opt_in_id_example'; // string | Opt in ID

try {
    $apiInstance->deleteOrganizationEarlyAccessFeaturesOptIn($organization_id, $opt_in_id);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->deleteOrganizationEarlyAccessFeaturesOptIn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **opt_in_id** | **string**| Opt in ID | |

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

## `deleteOrganizationPolicyObject()`

```php
deleteOrganizationPolicyObject($organization_id, $policy_object_id)
```

Deletes a Policy Object.

Deletes a Policy Object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$policy_object_id = 'policy_object_id_example'; // string | Policy object ID

try {
    $apiInstance->deleteOrganizationPolicyObject($organization_id, $policy_object_id);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->deleteOrganizationPolicyObject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **policy_object_id** | **string**| Policy object ID | |

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

## `deleteOrganizationPolicyObjectsGroup()`

```php
deleteOrganizationPolicyObjectsGroup($organization_id, $policy_object_group_id)
```

Deletes a Policy Object Group.

Deletes a Policy Object Group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$policy_object_group_id = 'policy_object_group_id_example'; // string | Policy object group ID

try {
    $apiInstance->deleteOrganizationPolicyObjectsGroup($organization_id, $policy_object_group_id);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->deleteOrganizationPolicyObjectsGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **policy_object_group_id** | **string**| Policy object group ID | |

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

## `deleteOrganizationSamlIdp()`

```php
deleteOrganizationSamlIdp($organization_id, $idp_id)
```

Remove a SAML IdP in your organization.

Remove a SAML IdP in your organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$idp_id = 'idp_id_example'; // string | Idp ID

try {
    $apiInstance->deleteOrganizationSamlIdp($organization_id, $idp_id);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->deleteOrganizationSamlIdp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **idp_id** | **string**| Idp ID | |

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

## `deleteOrganizationSamlRole()`

```php
deleteOrganizationSamlRole($organization_id, $saml_role_id)
```

Remove a SAML role

Remove a SAML role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$saml_role_id = 'saml_role_id_example'; // string | Saml role ID

try {
    $apiInstance->deleteOrganizationSamlRole($organization_id, $saml_role_id);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->deleteOrganizationSamlRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **saml_role_id** | **string**| Saml role ID | |

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

## `deleteOrganizationSplashAsset()`

```php
deleteOrganizationSplashAsset($organization_id, $id)
```

Delete a Splash Theme Asset

Delete a Splash Theme Asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$id = 'id_example'; // string | ID

try {
    $apiInstance->deleteOrganizationSplashAsset($organization_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->deleteOrganizationSplashAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **id** | **string**| ID | |

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

## `deleteOrganizationSplashTheme()`

```php
deleteOrganizationSplashTheme($organization_id, $id)
```

Delete a Splash Theme

Delete a Splash Theme

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$id = 'id_example'; // string | ID

try {
    $apiInstance->deleteOrganizationSplashTheme($organization_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->deleteOrganizationSplashTheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **id** | **string**| ID | |

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


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->disableOrganizationIntegrationsXdrNetworks: ', $e->getMessage(), PHP_EOL;
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

## `dismissOrganizationAssuranceAlerts()`

```php
dismissOrganizationAssuranceAlerts($organization_id, $dismiss_organization_assurance_alerts_request)
```

Dismiss health alerts

Dismiss health alerts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$dismiss_organization_assurance_alerts_request = new \Meraki\Model\DismissOrganizationAssuranceAlertsRequest(); // \Meraki\Model\DismissOrganizationAssuranceAlertsRequest

try {
    $apiInstance->dismissOrganizationAssuranceAlerts($organization_id, $dismiss_organization_assurance_alerts_request);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->dismissOrganizationAssuranceAlerts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **dismiss_organization_assurance_alerts_request** | [**\Meraki\Model\DismissOrganizationAssuranceAlertsRequest**](../Model/DismissOrganizationAssuranceAlertsRequest.md)|  | |

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


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->enableOrganizationIntegrationsXdrNetworks: ', $e->getMessage(), PHP_EOL;
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

## `getOrganization()`

```php
getOrganization($organization_id): \Meraki\Model\GetOrganizations200ResponseInner
```

Return an organization

Return an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganization($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizations200ResponseInner**](../Model/GetOrganizations200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationActionBatch()`

```php
getOrganizationActionBatch($organization_id, $action_batch_id): \Meraki\Model\CreateOrganizationActionBatch201Response
```

Return an action batch

Return an action batch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$action_batch_id = 'action_batch_id_example'; // string | Action batch ID

try {
    $result = $apiInstance->getOrganizationActionBatch($organization_id, $action_batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationActionBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **action_batch_id** | **string**| Action batch ID | |

### Return type

[**\Meraki\Model\CreateOrganizationActionBatch201Response**](../Model/CreateOrganizationActionBatch201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationActionBatches()`

```php
getOrganizationActionBatches($organization_id, $status): \Meraki\Model\GetOrganizationActionBatches200ResponseInner[]
```

Return the list of action batches in the organization

Return the list of action batches in the organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$status = 'status_example'; // string | Filter batches by status. Valid types are pending, completed, and failed.

try {
    $result = $apiInstance->getOrganizationActionBatches($organization_id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationActionBatches: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **status** | **string**| Filter batches by status. Valid types are pending, completed, and failed. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationActionBatches200ResponseInner[]**](../Model/GetOrganizationActionBatches200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAdaptivePolicyAcl()`

```php
getOrganizationAdaptivePolicyAcl($organization_id, $acl_id): \Meraki\Model\GetOrganizationAdaptivePolicyAcls200ResponseInner
```

Returns the adaptive policy ACL information

Returns the adaptive policy ACL information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$acl_id = 'acl_id_example'; // string | Acl ID

try {
    $result = $apiInstance->getOrganizationAdaptivePolicyAcl($organization_id, $acl_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationAdaptivePolicyAcl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **acl_id** | **string**| Acl ID | |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicyAcls200ResponseInner**](../Model/GetOrganizationAdaptivePolicyAcls200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAdaptivePolicyAcls()`

```php
getOrganizationAdaptivePolicyAcls($organization_id): \Meraki\Model\GetOrganizationAdaptivePolicyAcls200ResponseInner[]
```

List adaptive policy ACLs in a organization

List adaptive policy ACLs in a organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationAdaptivePolicyAcls($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationAdaptivePolicyAcls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicyAcls200ResponseInner[]**](../Model/GetOrganizationAdaptivePolicyAcls200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAdaptivePolicyGroup()`

```php
getOrganizationAdaptivePolicyGroup($organization_id, $id): \Meraki\Model\GetOrganizationAdaptivePolicyGroups200ResponseInner
```

Returns an adaptive policy group

Returns an adaptive policy group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$id = 'id_example'; // string | ID

try {
    $result = $apiInstance->getOrganizationAdaptivePolicyGroup($organization_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationAdaptivePolicyGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **id** | **string**| ID | |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicyGroups200ResponseInner**](../Model/GetOrganizationAdaptivePolicyGroups200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAdaptivePolicyGroups()`

```php
getOrganizationAdaptivePolicyGroups($organization_id): \Meraki\Model\GetOrganizationAdaptivePolicyGroups200ResponseInner[]
```

List adaptive policy groups in a organization

List adaptive policy groups in a organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationAdaptivePolicyGroups($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationAdaptivePolicyGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicyGroups200ResponseInner[]**](../Model/GetOrganizationAdaptivePolicyGroups200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAdaptivePolicyOverview()`

```php
getOrganizationAdaptivePolicyOverview($organization_id): \Meraki\Model\GetOrganizationAdaptivePolicyOverview200Response
```

Returns adaptive policy aggregate statistics for an organization

Returns adaptive policy aggregate statistics for an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationAdaptivePolicyOverview($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationAdaptivePolicyOverview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicyOverview200Response**](../Model/GetOrganizationAdaptivePolicyOverview200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAdaptivePolicyPolicies()`

```php
getOrganizationAdaptivePolicyPolicies($organization_id): \Meraki\Model\GetOrganizationAdaptivePolicyPolicies200ResponseInner[]
```

List adaptive policies in an organization

List adaptive policies in an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationAdaptivePolicyPolicies($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationAdaptivePolicyPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicyPolicies200ResponseInner[]**](../Model/GetOrganizationAdaptivePolicyPolicies200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAdaptivePolicyPolicy()`

```php
getOrganizationAdaptivePolicyPolicy($organization_id, $id): \Meraki\Model\GetOrganizationAdaptivePolicyPolicies200ResponseInner
```

Return an adaptive policy

Return an adaptive policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$id = 'id_example'; // string | ID

try {
    $result = $apiInstance->getOrganizationAdaptivePolicyPolicy($organization_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationAdaptivePolicyPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **id** | **string**| ID | |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicyPolicies200ResponseInner**](../Model/GetOrganizationAdaptivePolicyPolicies200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAdaptivePolicySettings()`

```php
getOrganizationAdaptivePolicySettings($organization_id): \Meraki\Model\GetOrganizationAdaptivePolicySettings200Response
```

Returns global adaptive policy settings in an organization

Returns global adaptive policy settings in an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationAdaptivePolicySettings($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationAdaptivePolicySettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicySettings200Response**](../Model/GetOrganizationAdaptivePolicySettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAdmins()`

```php
getOrganizationAdmins($organization_id, $network_ids): \Meraki\Model\GetOrganizationAdmins200ResponseInner[]
```

List the dashboard administrators in this organization

List the dashboard administrators in this organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter the result set by the included set of network IDs

try {
    $result = $apiInstance->getOrganizationAdmins($organization_id, $network_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationAdmins: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the result set by the included set of network IDs | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationAdmins200ResponseInner[]**](../Model/GetOrganizationAdmins200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAlertsProfiles()`

```php
getOrganizationAlertsProfiles($organization_id): \Meraki\Model\GetOrganizationAlertsProfiles200ResponseInner[]
```

List all organization-wide alert configurations

List all organization-wide alert configurations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationAlertsProfiles($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationAlertsProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationAlertsProfiles200ResponseInner[]**](../Model/GetOrganizationAlertsProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationApiRequests()`

```php
getOrganizationApiRequests($organization_id, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before, $admin_id, $path, $method, $response_code, $source_ip, $user_agent, $version, $operation_ids): \Meraki\Model\GetOrganizationApiRequests200ResponseInner[]
```

List the API requests made by an organization

List the API requests made by an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 31 days.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 50.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$admin_id = 'admin_id_example'; // string | Filter the results by the ID of the admin who made the API requests
$path = 'path_example'; // string | Filter the results by the path of the API requests
$method = 'method_example'; // string | Filter the results by the method of the API requests (must be 'GET', 'PUT', 'POST' or 'DELETE')
$response_code = 56; // int | Filter the results by the response code of the API requests
$source_ip = 'source_ip_example'; // string | Filter the results by the IP address of the originating API request
$user_agent = 'user_agent_example'; // string | Filter the results by the user agent string of the API request
$version = 56; // int | Filter the results by the API version of the API request
$operation_ids = array('operation_ids_example'); // string[] | Filter the results by one or more operation IDs for the API request

try {
    $result = $apiInstance->getOrganizationApiRequests($organization_id, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before, $admin_id, $path, $method, $response_code, $source_ip, $user_agent, $version, $operation_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationApiRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 31 days. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 50. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **admin_id** | **string**| Filter the results by the ID of the admin who made the API requests | [optional] |
| **path** | **string**| Filter the results by the path of the API requests | [optional] |
| **method** | **string**| Filter the results by the method of the API requests (must be &#39;GET&#39;, &#39;PUT&#39;, &#39;POST&#39; or &#39;DELETE&#39;) | [optional] |
| **response_code** | **int**| Filter the results by the response code of the API requests | [optional] |
| **source_ip** | **string**| Filter the results by the IP address of the originating API request | [optional] |
| **user_agent** | **string**| Filter the results by the user agent string of the API request | [optional] |
| **version** | **int**| Filter the results by the API version of the API request | [optional] |
| **operation_ids** | [**string[]**](../Model/string.md)| Filter the results by one or more operation IDs for the API request | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApiRequests200ResponseInner[]**](../Model/GetOrganizationApiRequests200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationApiRequestsOverview()`

```php
getOrganizationApiRequestsOverview($organization_id, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationApiRequestsOverview200Response
```

Return an aggregated overview of API requests data

Return an aggregated overview of API requests data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 31 days.

try {
    $result = $apiInstance->getOrganizationApiRequestsOverview($organization_id, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationApiRequestsOverview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 31 days. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApiRequestsOverview200Response**](../Model/GetOrganizationApiRequestsOverview200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationApiRequestsOverviewResponseCodesByInterval()`

```php
getOrganizationApiRequestsOverviewResponseCodesByInterval($organization_id, $t0, $t1, $timespan, $interval, $version, $operation_ids, $source_ips, $admin_ids, $user_agent): \Meraki\Model\GetOrganizationApiRequestsOverviewResponseCodesByInterval200ResponseInner[]
```

Tracks organizations' API requests by response code across a given time period

Tracks organizations' API requests by response code across a given time period

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 31 days. If interval is provided, the timespan will be autocalculated.
$interval = 56; // int | The time interval in seconds for returned data. The valid intervals are: 120, 3600, 14400, 21600. The default is 21600. Interval is calculated if time params are provided.
$version = 56; // int | Filter by API version of the endpoint. Allowable values are: [0, 1]
$operation_ids = array('operation_ids_example'); // string[] | Filter by operation ID of the endpoint
$source_ips = array('source_ips_example'); // string[] | Filter by source IP that made the API request
$admin_ids = array('admin_ids_example'); // string[] | Filter by admin ID of user that made the API request
$user_agent = 'user_agent_example'; // string | Filter by user agent string for API request. This will filter by a complete or partial match.

try {
    $result = $apiInstance->getOrganizationApiRequestsOverviewResponseCodesByInterval($organization_id, $t0, $t1, $timespan, $interval, $version, $operation_ids, $source_ips, $admin_ids, $user_agent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationApiRequestsOverviewResponseCodesByInterval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 31 days. If interval is provided, the timespan will be autocalculated. | [optional] |
| **interval** | **int**| The time interval in seconds for returned data. The valid intervals are: 120, 3600, 14400, 21600. The default is 21600. Interval is calculated if time params are provided. | [optional] |
| **version** | **int**| Filter by API version of the endpoint. Allowable values are: [0, 1] | [optional] |
| **operation_ids** | [**string[]**](../Model/string.md)| Filter by operation ID of the endpoint | [optional] |
| **source_ips** | [**string[]**](../Model/string.md)| Filter by source IP that made the API request | [optional] |
| **admin_ids** | [**string[]**](../Model/string.md)| Filter by admin ID of user that made the API request | [optional] |
| **user_agent** | **string**| Filter by user agent string for API request. This will filter by a complete or partial match. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApiRequestsOverviewResponseCodesByInterval200ResponseInner[]**](../Model/GetOrganizationApiRequestsOverviewResponseCodesByInterval200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAssuranceAlert()`

```php
getOrganizationAssuranceAlert($organization_id, $id): \Meraki\Model\GetOrganizationAssuranceAlerts200ResponseInner
```

Return a singular Health Alert by its id

Return a singular Health Alert by its id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$id = 'id_example'; // string | ID

try {
    $result = $apiInstance->getOrganizationAssuranceAlert($organization_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationAssuranceAlert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **id** | **string**| ID | |

### Return type

[**\Meraki\Model\GetOrganizationAssuranceAlerts200ResponseInner**](../Model/GetOrganizationAssuranceAlerts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAssuranceAlerts()`

```php
getOrganizationAssuranceAlerts($organization_id, $per_page, $starting_after, $ending_before, $sort_order, $network_id, $severity, $types, $ts_start, $ts_end, $category, $sort_by, $serials, $device_types, $device_tags, $active, $dismissed, $resolved, $suppress_alerts_for_offline_nodes): \Meraki\Model\GetOrganizationAssuranceAlerts200ResponseInner[]
```

Return all health alerts for an organization

Return all health alerts for an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 4 - 300. Default is 30.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$sort_order = 'sort_order_example'; // string | Sorted order of entries. Order options are 'ascending' and 'descending'. Default is 'ascending'.
$network_id = 'network_id_example'; // string | Optional parameter to filter alerts by network ids.
$severity = 'severity_example'; // string | Optional parameter to filter by severity type.
$types = array('types_example'); // string[] | Optional parameter to filter by alert type.
$ts_start = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter by starting timestamp
$ts_end = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter by end timestamp
$category = 'category_example'; // string | Optional parameter to filter by category.
$sort_by = 'sort_by_example'; // string | Optional parameter to set column to sort by.
$serials = array('serials_example'); // string[] | Optional parameter to filter by primary device serial
$device_types = array('device_types_example'); // string[] | Optional parameter to filter by device types
$device_tags = array('device_tags_example'); // string[] | Optional parameter to filter by device tags
$active = True; // bool | Optional parameter to filter by active alerts defaults to true
$dismissed = True; // bool | Optional parameter to filter by dismissed alerts defaults to false
$resolved = True; // bool | Optional parameter to filter by resolved alerts defaults to false
$suppress_alerts_for_offline_nodes = True; // bool | When set to true the api will only return connectivity alerts for a given device if that device is in an offline state. This only applies to devices. This is ignored when resolved is true. Example:  If a Switch has a VLan Mismatch and is Unreachable. only the Unreachable alert will be returned. Defaults to false.

try {
    $result = $apiInstance->getOrganizationAssuranceAlerts($organization_id, $per_page, $starting_after, $ending_before, $sort_order, $network_id, $severity, $types, $ts_start, $ts_end, $category, $sort_by, $serials, $device_types, $device_tags, $active, $dismissed, $resolved, $suppress_alerts_for_offline_nodes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationAssuranceAlerts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 4 - 300. Default is 30. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **sort_order** | **string**| Sorted order of entries. Order options are &#39;ascending&#39; and &#39;descending&#39;. Default is &#39;ascending&#39;. | [optional] |
| **network_id** | **string**| Optional parameter to filter alerts by network ids. | [optional] |
| **severity** | **string**| Optional parameter to filter by severity type. | [optional] |
| **types** | [**string[]**](../Model/string.md)| Optional parameter to filter by alert type. | [optional] |
| **ts_start** | **\DateTime**| Optional parameter to filter by starting timestamp | [optional] |
| **ts_end** | **\DateTime**| Optional parameter to filter by end timestamp | [optional] |
| **category** | **string**| Optional parameter to filter by category. | [optional] |
| **sort_by** | **string**| Optional parameter to set column to sort by. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter by primary device serial | [optional] |
| **device_types** | [**string[]**](../Model/string.md)| Optional parameter to filter by device types | [optional] |
| **device_tags** | [**string[]**](../Model/string.md)| Optional parameter to filter by device tags | [optional] |
| **active** | **bool**| Optional parameter to filter by active alerts defaults to true | [optional] |
| **dismissed** | **bool**| Optional parameter to filter by dismissed alerts defaults to false | [optional] |
| **resolved** | **bool**| Optional parameter to filter by resolved alerts defaults to false | [optional] |
| **suppress_alerts_for_offline_nodes** | **bool**| When set to true the api will only return connectivity alerts for a given device if that device is in an offline state. This only applies to devices. This is ignored when resolved is true. Example:  If a Switch has a VLan Mismatch and is Unreachable. only the Unreachable alert will be returned. Defaults to false. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationAssuranceAlerts200ResponseInner[]**](../Model/GetOrganizationAssuranceAlerts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAssuranceAlertsOverview()`

```php
getOrganizationAssuranceAlertsOverview($organization_id, $network_id, $severity, $types, $ts_start, $ts_end, $category, $serials, $device_types, $device_tags, $active, $dismissed, $resolved, $suppress_alerts_for_offline_nodes): \Meraki\Model\GetOrganizationAssuranceAlertsOverview200Response
```

Return overview of active health alerts for an organization

Return overview of active health alerts for an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_id = 'network_id_example'; // string | Optional parameter to filter alerts overview by network ids.
$severity = 'severity_example'; // string | Optional parameter to filter alerts overview by severity type.
$types = array('types_example'); // string[] | Optional parameter to filter by alert type.
$ts_start = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter by starting timestamp
$ts_end = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter by end timestamp
$category = 'category_example'; // string | Optional parameter to filter by category.
$serials = array('serials_example'); // string[] | Optional parameter to filter by primary device serial
$device_types = array('device_types_example'); // string[] | Optional parameter to filter by device types
$device_tags = array('device_tags_example'); // string[] | Optional parameter to filter by device tags
$active = True; // bool | Optional parameter to filter by active alerts defaults to true
$dismissed = True; // bool | Optional parameter to filter by dismissed alerts defaults to false
$resolved = True; // bool | Optional parameter to filter by resolved alerts defaults to false
$suppress_alerts_for_offline_nodes = True; // bool | When set to true the api will only return connectivity alerts for a given device if that device is in an offline state. This only applies to devices. This is ignored when resolved is true. Example:  If a Switch has a VLan Mismatch and is Unreachable. only the Unreachable alert will be returned. Defaults to false.

try {
    $result = $apiInstance->getOrganizationAssuranceAlertsOverview($organization_id, $network_id, $severity, $types, $ts_start, $ts_end, $category, $serials, $device_types, $device_tags, $active, $dismissed, $resolved, $suppress_alerts_for_offline_nodes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationAssuranceAlertsOverview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_id** | **string**| Optional parameter to filter alerts overview by network ids. | [optional] |
| **severity** | **string**| Optional parameter to filter alerts overview by severity type. | [optional] |
| **types** | [**string[]**](../Model/string.md)| Optional parameter to filter by alert type. | [optional] |
| **ts_start** | **\DateTime**| Optional parameter to filter by starting timestamp | [optional] |
| **ts_end** | **\DateTime**| Optional parameter to filter by end timestamp | [optional] |
| **category** | **string**| Optional parameter to filter by category. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter by primary device serial | [optional] |
| **device_types** | [**string[]**](../Model/string.md)| Optional parameter to filter by device types | [optional] |
| **device_tags** | [**string[]**](../Model/string.md)| Optional parameter to filter by device tags | [optional] |
| **active** | **bool**| Optional parameter to filter by active alerts defaults to true | [optional] |
| **dismissed** | **bool**| Optional parameter to filter by dismissed alerts defaults to false | [optional] |
| **resolved** | **bool**| Optional parameter to filter by resolved alerts defaults to false | [optional] |
| **suppress_alerts_for_offline_nodes** | **bool**| When set to true the api will only return connectivity alerts for a given device if that device is in an offline state. This only applies to devices. This is ignored when resolved is true. Example:  If a Switch has a VLan Mismatch and is Unreachable. only the Unreachable alert will be returned. Defaults to false. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationAssuranceAlertsOverview200Response**](../Model/GetOrganizationAssuranceAlertsOverview200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAssuranceAlertsOverviewByNetwork()`

```php
getOrganizationAssuranceAlertsOverviewByNetwork($organization_id, $per_page, $starting_after, $ending_before, $sort_order, $network_id, $severity, $types, $ts_start, $ts_end, $category, $serials, $device_types, $device_tags, $active, $dismissed, $resolved, $suppress_alerts_for_offline_nodes): \Meraki\Model\GetOrganizationAssuranceAlertsOverviewByNetwork200Response
```

Return a Summary of Alerts grouped by network and severity

Return a Summary of Alerts grouped by network and severity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$sort_order = 'sort_order_example'; // string | Sorted order of entries. Order options are 'ascending' and 'descending'. Default is 'ascending'.
$network_id = 'network_id_example'; // string | Optional parameter to filter alerts overview by network id.
$severity = 'severity_example'; // string | Optional parameter to filter alerts overview by severity type.
$types = array('types_example'); // string[] | Optional parameter to filter by alert type.
$ts_start = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter by starting timestamp
$ts_end = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter by end timestamp
$category = 'category_example'; // string | Optional parameter to filter by category.
$serials = array('serials_example'); // string[] | Optional parameter to filter by primary device serial
$device_types = array('device_types_example'); // string[] | Optional parameter to filter by device types
$device_tags = array('device_tags_example'); // string[] | Optional parameter to filter by device tags
$active = True; // bool | Optional parameter to filter by active alerts defaults to true
$dismissed = True; // bool | Optional parameter to filter by dismissed alerts defaults to false
$resolved = True; // bool | Optional parameter to filter by resolved alerts defaults to false
$suppress_alerts_for_offline_nodes = True; // bool | When set to true the api will only return connectivity alerts for a given device if that device is in an offline state. This only applies to devices. This is ignored when resolved is true. Example:  If a Switch has a VLan Mismatch and is Unreachable. only the Unreachable alert will be returned. Defaults to false.

try {
    $result = $apiInstance->getOrganizationAssuranceAlertsOverviewByNetwork($organization_id, $per_page, $starting_after, $ending_before, $sort_order, $network_id, $severity, $types, $ts_start, $ts_end, $category, $serials, $device_types, $device_tags, $active, $dismissed, $resolved, $suppress_alerts_for_offline_nodes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationAssuranceAlertsOverviewByNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **sort_order** | **string**| Sorted order of entries. Order options are &#39;ascending&#39; and &#39;descending&#39;. Default is &#39;ascending&#39;. | [optional] |
| **network_id** | **string**| Optional parameter to filter alerts overview by network id. | [optional] |
| **severity** | **string**| Optional parameter to filter alerts overview by severity type. | [optional] |
| **types** | [**string[]**](../Model/string.md)| Optional parameter to filter by alert type. | [optional] |
| **ts_start** | **\DateTime**| Optional parameter to filter by starting timestamp | [optional] |
| **ts_end** | **\DateTime**| Optional parameter to filter by end timestamp | [optional] |
| **category** | **string**| Optional parameter to filter by category. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter by primary device serial | [optional] |
| **device_types** | [**string[]**](../Model/string.md)| Optional parameter to filter by device types | [optional] |
| **device_tags** | [**string[]**](../Model/string.md)| Optional parameter to filter by device tags | [optional] |
| **active** | **bool**| Optional parameter to filter by active alerts defaults to true | [optional] |
| **dismissed** | **bool**| Optional parameter to filter by dismissed alerts defaults to false | [optional] |
| **resolved** | **bool**| Optional parameter to filter by resolved alerts defaults to false | [optional] |
| **suppress_alerts_for_offline_nodes** | **bool**| When set to true the api will only return connectivity alerts for a given device if that device is in an offline state. This only applies to devices. This is ignored when resolved is true. Example:  If a Switch has a VLan Mismatch and is Unreachable. only the Unreachable alert will be returned. Defaults to false. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationAssuranceAlertsOverviewByNetwork200Response**](../Model/GetOrganizationAssuranceAlertsOverviewByNetwork200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAssuranceAlertsOverviewByType()`

```php
getOrganizationAssuranceAlertsOverviewByType($organization_id, $per_page, $starting_after, $ending_before, $sort_order, $network_id, $severity, $types, $ts_start, $ts_end, $category, $sort_by, $serials, $device_types, $device_tags, $active, $dismissed, $resolved, $suppress_alerts_for_offline_nodes): \Meraki\Model\GetOrganizationAssuranceAlertsOverviewByType200Response
```

Return a Summary of Alerts grouped by type and severity

Return a Summary of Alerts grouped by type and severity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$sort_order = 'sort_order_example'; // string | Sorted order of entries. Order options are 'ascending' and 'descending'. Default is 'ascending'.
$network_id = 'network_id_example'; // string | Optional parameter to filter alerts overview by network ids.
$severity = 'severity_example'; // string | Optional parameter to filter alerts overview by severity type.
$types = array('types_example'); // string[] | Optional parameter to filter by alert type.
$ts_start = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter by starting timestamp
$ts_end = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter by end timestamp
$category = 'category_example'; // string | Optional parameter to filter by category.
$sort_by = 'sort_by_example'; // string | Optional parameter to set column to sort by.
$serials = array('serials_example'); // string[] | Optional parameter to filter by primary device serial
$device_types = array('device_types_example'); // string[] | Optional parameter to filter by device types
$device_tags = array('device_tags_example'); // string[] | Optional parameter to filter by device tags
$active = True; // bool | Optional parameter to filter by active alerts defaults to true
$dismissed = True; // bool | Optional parameter to filter by dismissed alerts defaults to false
$resolved = True; // bool | Optional parameter to filter by resolved alerts defaults to false
$suppress_alerts_for_offline_nodes = True; // bool | When set to true the api will only return connectivity alerts for a given device if that device is in an offline state. This only applies to devices. This is ignored when resolved is true. Example:  If a Switch has a VLan Mismatch and is Unreachable. only the Unreachable alert will be returned. Defaults to false.

try {
    $result = $apiInstance->getOrganizationAssuranceAlertsOverviewByType($organization_id, $per_page, $starting_after, $ending_before, $sort_order, $network_id, $severity, $types, $ts_start, $ts_end, $category, $sort_by, $serials, $device_types, $device_tags, $active, $dismissed, $resolved, $suppress_alerts_for_offline_nodes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationAssuranceAlertsOverviewByType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **sort_order** | **string**| Sorted order of entries. Order options are &#39;ascending&#39; and &#39;descending&#39;. Default is &#39;ascending&#39;. | [optional] |
| **network_id** | **string**| Optional parameter to filter alerts overview by network ids. | [optional] |
| **severity** | **string**| Optional parameter to filter alerts overview by severity type. | [optional] |
| **types** | [**string[]**](../Model/string.md)| Optional parameter to filter by alert type. | [optional] |
| **ts_start** | **\DateTime**| Optional parameter to filter by starting timestamp | [optional] |
| **ts_end** | **\DateTime**| Optional parameter to filter by end timestamp | [optional] |
| **category** | **string**| Optional parameter to filter by category. | [optional] |
| **sort_by** | **string**| Optional parameter to set column to sort by. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter by primary device serial | [optional] |
| **device_types** | [**string[]**](../Model/string.md)| Optional parameter to filter by device types | [optional] |
| **device_tags** | [**string[]**](../Model/string.md)| Optional parameter to filter by device tags | [optional] |
| **active** | **bool**| Optional parameter to filter by active alerts defaults to true | [optional] |
| **dismissed** | **bool**| Optional parameter to filter by dismissed alerts defaults to false | [optional] |
| **resolved** | **bool**| Optional parameter to filter by resolved alerts defaults to false | [optional] |
| **suppress_alerts_for_offline_nodes** | **bool**| When set to true the api will only return connectivity alerts for a given device if that device is in an offline state. This only applies to devices. This is ignored when resolved is true. Example:  If a Switch has a VLan Mismatch and is Unreachable. only the Unreachable alert will be returned. Defaults to false. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationAssuranceAlertsOverviewByType200Response**](../Model/GetOrganizationAssuranceAlertsOverviewByType200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAssuranceAlertsOverviewHistorical()`

```php
getOrganizationAssuranceAlertsOverviewHistorical($organization_id, $segment_duration, $ts_start, $network_id, $severity, $types, $ts_end, $category, $serials, $device_types): \Meraki\Model\GetOrganizationAssuranceAlertsOverviewHistorical200Response
```

Returns historical health alert overviews

Returns historical health alert overviews

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$segment_duration = 56; // int | Amount of time in seconds for each segment in the returned dataset
$ts_start = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Parameter to define starting timestamp of historical totals
$network_id = 'network_id_example'; // string | Optional parameter to filter alerts overview by network ids.
$severity = 'severity_example'; // string | Optional parameter to filter alerts overview by severity type.
$types = array('types_example'); // string[] | Optional parameter to filter by alert type.
$ts_end = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional parameter to filter by end timestamp defaults to the current time
$category = 'category_example'; // string | Optional parameter to filter by category.
$serials = array('serials_example'); // string[] | Optional parameter to filter by primary device serial
$device_types = array('device_types_example'); // string[] | Optional parameter to filter by device types

try {
    $result = $apiInstance->getOrganizationAssuranceAlertsOverviewHistorical($organization_id, $segment_duration, $ts_start, $network_id, $severity, $types, $ts_end, $category, $serials, $device_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationAssuranceAlertsOverviewHistorical: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **segment_duration** | **int**| Amount of time in seconds for each segment in the returned dataset | |
| **ts_start** | **\DateTime**| Parameter to define starting timestamp of historical totals | |
| **network_id** | **string**| Optional parameter to filter alerts overview by network ids. | [optional] |
| **severity** | **string**| Optional parameter to filter alerts overview by severity type. | [optional] |
| **types** | [**string[]**](../Model/string.md)| Optional parameter to filter by alert type. | [optional] |
| **ts_end** | **\DateTime**| Optional parameter to filter by end timestamp defaults to the current time | [optional] |
| **category** | **string**| Optional parameter to filter by category. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter by primary device serial | [optional] |
| **device_types** | [**string[]**](../Model/string.md)| Optional parameter to filter by device types | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationAssuranceAlertsOverviewHistorical200Response**](../Model/GetOrganizationAssuranceAlertsOverviewHistorical200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationBrandingPolicies()`

```php
getOrganizationBrandingPolicies($organization_id): \Meraki\Model\GetOrganizationBrandingPolicies200ResponseInner[]
```

List the branding policies of an organization

List the branding policies of an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationBrandingPolicies($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationBrandingPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationBrandingPolicies200ResponseInner[]**](../Model/GetOrganizationBrandingPolicies200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationBrandingPoliciesPriorities()`

```php
getOrganizationBrandingPoliciesPriorities($organization_id): \Meraki\Model\GetOrganizationBrandingPoliciesPriorities200Response
```

Return the branding policy IDs of an organization in priority order

Return the branding policy IDs of an organization in priority order. IDs are ordered in ascending order of priority (IDs later in the array have higher priority).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationBrandingPoliciesPriorities($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationBrandingPoliciesPriorities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationBrandingPoliciesPriorities200Response**](../Model/GetOrganizationBrandingPoliciesPriorities200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationBrandingPolicy()`

```php
getOrganizationBrandingPolicy($organization_id, $branding_policy_id): \Meraki\Model\GetOrganizationBrandingPolicies200ResponseInner
```

Return a branding policy

Return a branding policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$branding_policy_id = 'branding_policy_id_example'; // string | Branding policy ID

try {
    $result = $apiInstance->getOrganizationBrandingPolicy($organization_id, $branding_policy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationBrandingPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **branding_policy_id** | **string**| Branding policy ID | |

### Return type

[**\Meraki\Model\GetOrganizationBrandingPolicies200ResponseInner**](../Model/GetOrganizationBrandingPolicies200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationClientsBandwidthUsageHistory()`

```php
getOrganizationClientsBandwidthUsageHistory($organization_id, $network_tag, $device_tag, $ssid_name, $usage_uplink, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationClientsBandwidthUsageHistory200ResponseInner[]
```

Return data usage (in megabits per second) over time for all clients in the given organization within a given time range.

Return data usage (in megabits per second) over time for all clients in the given organization within a given time range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_tag = 'network_tag_example'; // string | Match result to an exact network tag
$device_tag = 'device_tag_example'; // string | Match result to an exact device tag
$ssid_name = 'ssid_name_example'; // string | Filter results by ssid name
$usage_uplink = 'usage_uplink_example'; // string | Filter results by usage uplink
$t0 = 't0_example'; // string | The beginning of the timespan for the data.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 186 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 186 days. The default is 1 day.

try {
    $result = $apiInstance->getOrganizationClientsBandwidthUsageHistory($organization_id, $network_tag, $device_tag, $ssid_name, $usage_uplink, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationClientsBandwidthUsageHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_tag** | **string**| Match result to an exact network tag | [optional] |
| **device_tag** | **string**| Match result to an exact device tag | [optional] |
| **ssid_name** | **string**| Filter results by ssid name | [optional] |
| **usage_uplink** | **string**| Filter results by usage uplink | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 186 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 186 days. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationClientsBandwidthUsageHistory200ResponseInner[]**](../Model/GetOrganizationClientsBandwidthUsageHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationClientsOverview()`

```php
getOrganizationClientsOverview($organization_id, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationClientsOverview200Response
```

Return summary information around client data usage (in kb) across the given organization.

Return summary information around client data usage (in kb) across the given organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day.

try {
    $result = $apiInstance->getOrganizationClientsOverview($organization_id, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationClientsOverview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **t0** | **string**| The beginning of the timespan for the data. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationClientsOverview200Response**](../Model/GetOrganizationClientsOverview200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationClientsSearch()`

```php
getOrganizationClientsSearch($organization_id, $mac, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationClientsSearch200Response
```

Return the client details in an organization

Return the client details in an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$mac = 'mac_example'; // string | The MAC address of the client. Required.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 5. Default is 5.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationClientsSearch($organization_id, $mac, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationClientsSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **mac** | **string**| The MAC address of the client. Required. | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 5. Default is 5. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationClientsSearch200Response**](../Model/GetOrganizationClientsSearch200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationConfigTemplate()`

```php
getOrganizationConfigTemplate($organization_id, $config_template_id): \Meraki\Model\GetOrganizationConfigTemplates200ResponseInner
```

Return a single configuration template

Return a single configuration template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$config_template_id = 'config_template_id_example'; // string | Config template ID

try {
    $result = $apiInstance->getOrganizationConfigTemplate($organization_id, $config_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationConfigTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **config_template_id** | **string**| Config template ID | |

### Return type

[**\Meraki\Model\GetOrganizationConfigTemplates200ResponseInner**](../Model/GetOrganizationConfigTemplates200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationConfigTemplates()`

```php
getOrganizationConfigTemplates($organization_id): \Meraki\Model\GetOrganizationConfigTemplates200ResponseInner[]
```

List the configuration templates for this organization

List the configuration templates for this organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationConfigTemplates($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationConfigTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationConfigTemplates200ResponseInner[]**](../Model/GetOrganizationConfigTemplates200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationConfigurationChanges()`

```php
getOrganizationConfigurationChanges($organization_id, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before, $network_id, $admin_id): \Meraki\Model\GetOrganizationConfigurationChanges200ResponseInner[]
```

View the Change Log for your organization

View the Change Log for your organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 365 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 365 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 365 days. The default is 365 days.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 5000. Default is 5000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_id = 'network_id_example'; // string | Filters on the given network
$admin_id = 'admin_id_example'; // string | Filters on the given Admin

try {
    $result = $apiInstance->getOrganizationConfigurationChanges($organization_id, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before, $network_id, $admin_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationConfigurationChanges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 365 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 365 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 365 days. The default is 365 days. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 5000. Default is 5000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_id** | **string**| Filters on the given network | [optional] |
| **admin_id** | **string**| Filters on the given Admin | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationConfigurationChanges200ResponseInner[]**](../Model/GetOrganizationConfigurationChanges200ResponseInner.md)

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


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->getOrganizationDevices: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->getOrganizationDevicesAvailabilities: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->getOrganizationDevicesAvailabilitiesChangeHistory: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->getOrganizationDevicesControllerMigrations: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->getOrganizationDevicesOverviewByModel: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->getOrganizationDevicesPowerModulesStatusesByDevice: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->getOrganizationDevicesProvisioningStatuses: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->getOrganizationDevicesStatuses: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->getOrganizationDevicesStatusesOverview: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->getOrganizationDevicesSystemMemoryUsageHistoryByInterval: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->getOrganizationDevicesUplinksAddressesByDevice: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->getOrganizationDevicesUplinksLossAndLatency: ', $e->getMessage(), PHP_EOL;
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

## `getOrganizationEarlyAccessFeatures()`

```php
getOrganizationEarlyAccessFeatures($organization_id): \Meraki\Model\GetOrganizationEarlyAccessFeatures200ResponseInner[]
```

List the available early access features for organization

List the available early access features for organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationEarlyAccessFeatures($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationEarlyAccessFeatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationEarlyAccessFeatures200ResponseInner[]**](../Model/GetOrganizationEarlyAccessFeatures200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationEarlyAccessFeaturesOptIn()`

```php
getOrganizationEarlyAccessFeaturesOptIn($organization_id, $opt_in_id): \Meraki\Model\GetOrganizationEarlyAccessFeaturesOptIns200Response
```

Show an early access feature opt-in for an organization

Show an early access feature opt-in for an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$opt_in_id = 'opt_in_id_example'; // string | Opt in ID

try {
    $result = $apiInstance->getOrganizationEarlyAccessFeaturesOptIn($organization_id, $opt_in_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationEarlyAccessFeaturesOptIn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **opt_in_id** | **string**| Opt in ID | |

### Return type

[**\Meraki\Model\GetOrganizationEarlyAccessFeaturesOptIns200Response**](../Model/GetOrganizationEarlyAccessFeaturesOptIns200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationEarlyAccessFeaturesOptIns()`

```php
getOrganizationEarlyAccessFeaturesOptIns($organization_id): \Meraki\Model\GetOrganizationEarlyAccessFeaturesOptIns200Response
```

List the early access feature opt-ins for an organization

List the early access feature opt-ins for an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationEarlyAccessFeaturesOptIns($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationEarlyAccessFeaturesOptIns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationEarlyAccessFeaturesOptIns200Response**](../Model/GetOrganizationEarlyAccessFeaturesOptIns200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationFirmwareUpgrades()`

```php
getOrganizationFirmwareUpgrades($organization_id, $per_page, $starting_after, $ending_before, $status, $product_types): \Meraki\Model\GetOrganizationFirmwareUpgrades200ResponseInner[]
```

Get firmware upgrade information for an organization

Get firmware upgrade information for an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$status = array('status_example'); // string[] | Optional parameter to filter the upgrade by status.
$product_types = array('product_types_example'); // string[] | Optional parameter to filter the upgrade by product type.

try {
    $result = $apiInstance->getOrganizationFirmwareUpgrades($organization_id, $per_page, $starting_after, $ending_before, $status, $product_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationFirmwareUpgrades: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **status** | [**string[]**](../Model/string.md)| Optional parameter to filter the upgrade by status. | [optional] |
| **product_types** | [**string[]**](../Model/string.md)| Optional parameter to filter the upgrade by product type. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationFirmwareUpgrades200ResponseInner[]**](../Model/GetOrganizationFirmwareUpgrades200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationFirmwareUpgradesByDevice()`

```php
getOrganizationFirmwareUpgradesByDevice($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $serials, $macs, $firmware_upgrade_batch_ids, $upgrade_statuses, $current_upgrades_only): \Meraki\Model\GetOrganizationFirmwareUpgradesByDevice200ResponseInner[]
```

Get firmware upgrade status for the filtered devices

Get firmware upgrade status for the filtered devices. This endpoint currently only supports Meraki switches.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 50.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter by network
$serials = array('serials_example'); // string[] | Optional parameter to filter by serial number.  All returned devices will have a serial number that is an exact match.
$macs = array('macs_example'); // string[] | Optional parameter to filter by one or more MAC addresses belonging to devices. All devices returned belong to MAC addresses that are an exact match.
$firmware_upgrade_batch_ids = array('firmware_upgrade_batch_ids_example'); // string[] | Optional parameter to filter by firmware upgrade batch ids.
$upgrade_statuses = array('upgrade_statuses_example'); // string[] | Optional parameter to filter by firmware upgrade statuses.
$current_upgrades_only = True; // bool | Optional parameter to filter to only current or pending upgrade statuses

try {
    $result = $apiInstance->getOrganizationFirmwareUpgradesByDevice($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $serials, $macs, $firmware_upgrade_batch_ids, $upgrade_statuses, $current_upgrades_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationFirmwareUpgradesByDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 50. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter by network | [optional] |
| **serials** | [**string[]**](../Model/string.md)| Optional parameter to filter by serial number.  All returned devices will have a serial number that is an exact match. | [optional] |
| **macs** | [**string[]**](../Model/string.md)| Optional parameter to filter by one or more MAC addresses belonging to devices. All devices returned belong to MAC addresses that are an exact match. | [optional] |
| **firmware_upgrade_batch_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter by firmware upgrade batch ids. | [optional] |
| **upgrade_statuses** | [**string[]**](../Model/string.md)| Optional parameter to filter by firmware upgrade statuses. | [optional] |
| **current_upgrades_only** | **bool**| Optional parameter to filter to only current or pending upgrade statuses | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationFirmwareUpgradesByDevice200ResponseInner[]**](../Model/GetOrganizationFirmwareUpgradesByDevice200ResponseInner.md)

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


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->getOrganizationFloorPlansAutoLocateDevices: ', $e->getMessage(), PHP_EOL;
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

## `getOrganizationFloorPlansAutoLocateStatuses()`

```php
getOrganizationFloorPlansAutoLocateStatuses($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $floor_plan_ids): \Meraki\Model\GetOrganizationFloorPlansAutoLocateStatuses200ResponseInner[]
```

List the status of auto locate for each floorplan in your organization

List the status of auto locate for each floorplan in your organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 10000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter floorplans by one or more network IDs
$floor_plan_ids = array('floor_plan_ids_example'); // string[] | Optional parameter to filter floorplans by one or more floorplan IDs

try {
    $result = $apiInstance->getOrganizationFloorPlansAutoLocateStatuses($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $floor_plan_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationFloorPlansAutoLocateStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 10000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter floorplans by one or more network IDs | [optional] |
| **floor_plan_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter floorplans by one or more floorplan IDs | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationFloorPlansAutoLocateStatuses200ResponseInner[]**](../Model/GetOrganizationFloorPlansAutoLocateStatuses200ResponseInner.md)

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


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->getOrganizationIntegrationsXdrNetworks: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->getOrganizationInventoryDevice: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->getOrganizationInventoryDevices: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->getOrganizationInventoryDevicesSwapsBulk: ', $e->getMessage(), PHP_EOL;
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

## `getOrganizationInventoryOnboardingCloudMonitoringImports()`

```php
getOrganizationInventoryOnboardingCloudMonitoringImports($organization_id, $import_ids): \Meraki\Model\GetOrganizationInventoryOnboardingCloudMonitoringImports200ResponseInner[]
```

Check the status of a committed Import operation

Check the status of a committed Import operation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$import_ids = array('import_ids_example'); // string[] | import ids from an imports

try {
    $result = $apiInstance->getOrganizationInventoryOnboardingCloudMonitoringImports($organization_id, $import_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationInventoryOnboardingCloudMonitoringImports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **import_ids** | [**string[]**](../Model/string.md)| import ids from an imports | |

### Return type

[**\Meraki\Model\GetOrganizationInventoryOnboardingCloudMonitoringImports200ResponseInner[]**](../Model/GetOrganizationInventoryOnboardingCloudMonitoringImports200ResponseInner.md)

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


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->getOrganizationInventoryOnboardingCloudMonitoringNetworks: ', $e->getMessage(), PHP_EOL;
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

## `getOrganizationLicense()`

```php
getOrganizationLicense($organization_id, $license_id): \Meraki\Model\GetOrganizationLicenses200ResponseInner
```

Display a license

Display a license

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$license_id = 'license_id_example'; // string | License ID

try {
    $result = $apiInstance->getOrganizationLicense($organization_id, $license_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationLicense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **license_id** | **string**| License ID | |

### Return type

[**\Meraki\Model\GetOrganizationLicenses200ResponseInner**](../Model/GetOrganizationLicenses200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationLicenses()`

```php
getOrganizationLicenses($organization_id, $per_page, $starting_after, $ending_before, $device_serial, $network_id, $state): \Meraki\Model\GetOrganizationLicenses200ResponseInner[]
```

List the licenses for an organization

List the licenses for an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$device_serial = 'device_serial_example'; // string | Filter the licenses to those assigned to a particular device. Returned in the same order that they are queued to the device.
$network_id = 'network_id_example'; // string | Filter the licenses to those assigned in a particular network
$state = 'state_example'; // string | Filter the licenses to those in a particular state. Can be one of 'active', 'expired', 'expiring', 'recentlyQueued', 'unused' or 'unusedActive'

try {
    $result = $apiInstance->getOrganizationLicenses($organization_id, $per_page, $starting_after, $ending_before, $device_serial, $network_id, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationLicenses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **device_serial** | **string**| Filter the licenses to those assigned to a particular device. Returned in the same order that they are queued to the device. | [optional] |
| **network_id** | **string**| Filter the licenses to those assigned in a particular network | [optional] |
| **state** | **string**| Filter the licenses to those in a particular state. Can be one of &#39;active&#39;, &#39;expired&#39;, &#39;expiring&#39;, &#39;recentlyQueued&#39;, &#39;unused&#39; or &#39;unusedActive&#39; | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationLicenses200ResponseInner[]**](../Model/GetOrganizationLicenses200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationLicensesOverview()`

```php
getOrganizationLicensesOverview($organization_id): \Meraki\Model\GetOrganizationLicensesOverview200Response
```

Return an overview of the license state for an organization

Return an overview of the license state for an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationLicensesOverview($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationLicensesOverview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationLicensesOverview200Response**](../Model/GetOrganizationLicensesOverview200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationLoginSecurity()`

```php
getOrganizationLoginSecurity($organization_id): \Meraki\Model\GetOrganizationLoginSecurity200Response
```

Returns the login security settings for an organization.

Returns the login security settings for an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationLoginSecurity($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationLoginSecurity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationLoginSecurity200Response**](../Model/GetOrganizationLoginSecurity200Response.md)

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


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->getOrganizationNetworks: ', $e->getMessage(), PHP_EOL;
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

## `getOrganizationOpenapiSpec()`

```php
getOrganizationOpenapiSpec($organization_id, $version): object
```

Return the OpenAPI Specification of the organization's API documentation in JSON

Return the OpenAPI Specification of the organization's API documentation in JSON

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$version = 56; // int | OpenAPI Specification version to return. Default is 2

try {
    $result = $apiInstance->getOrganizationOpenapiSpec($organization_id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationOpenapiSpec: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **version** | **int**| OpenAPI Specification version to return. Default is 2 | [optional] |

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

## `getOrganizationPolicyObject()`

```php
getOrganizationPolicyObject($organization_id, $policy_object_id): \Meraki\Model\GetOrganizationPolicyObjects200Response
```

Shows details of a Policy Object.

Shows details of a Policy Object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$policy_object_id = 'policy_object_id_example'; // string | Policy object ID

try {
    $result = $apiInstance->getOrganizationPolicyObject($organization_id, $policy_object_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationPolicyObject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **policy_object_id** | **string**| Policy object ID | |

### Return type

[**\Meraki\Model\GetOrganizationPolicyObjects200Response**](../Model/GetOrganizationPolicyObjects200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationPolicyObjects()`

```php
getOrganizationPolicyObjects($organization_id, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationPolicyObjects200Response
```

Lists Policy Objects belonging to the organization.

Lists Policy Objects belonging to the organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 10 - 5000. Default is 5000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationPolicyObjects($organization_id, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationPolicyObjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 10 - 5000. Default is 5000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationPolicyObjects200Response**](../Model/GetOrganizationPolicyObjects200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationPolicyObjectsGroup()`

```php
getOrganizationPolicyObjectsGroup($organization_id, $policy_object_group_id): \Meraki\Model\GetOrganizationPolicyObjectsGroups200Response
```

Shows details of a Policy Object Group.

Shows details of a Policy Object Group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$policy_object_group_id = 'policy_object_group_id_example'; // string | Policy object group ID

try {
    $result = $apiInstance->getOrganizationPolicyObjectsGroup($organization_id, $policy_object_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationPolicyObjectsGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **policy_object_group_id** | **string**| Policy object group ID | |

### Return type

[**\Meraki\Model\GetOrganizationPolicyObjectsGroups200Response**](../Model/GetOrganizationPolicyObjectsGroups200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationPolicyObjectsGroups()`

```php
getOrganizationPolicyObjectsGroups($organization_id, $per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizationPolicyObjectsGroups200Response
```

Lists Policy Object Groups belonging to the organization.

Lists Policy Object Groups belonging to the organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 10 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizationPolicyObjectsGroups($organization_id, $per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationPolicyObjectsGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 10 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationPolicyObjectsGroups200Response**](../Model/GetOrganizationPolicyObjectsGroups200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSaml()`

```php
getOrganizationSaml($organization_id): \Meraki\Model\GetOrganizationSaml200Response
```

Returns the SAML SSO enabled settings for an organization.

Returns the SAML SSO enabled settings for an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationSaml($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationSaml: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationSaml200Response**](../Model/GetOrganizationSaml200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSamlIdp()`

```php
getOrganizationSamlIdp($organization_id, $idp_id): \Meraki\Model\GetOrganizationSamlIdps200ResponseInner
```

Get a SAML IdP from your organization.

Get a SAML IdP from your organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$idp_id = 'idp_id_example'; // string | Idp ID

try {
    $result = $apiInstance->getOrganizationSamlIdp($organization_id, $idp_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationSamlIdp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **idp_id** | **string**| Idp ID | |

### Return type

[**\Meraki\Model\GetOrganizationSamlIdps200ResponseInner**](../Model/GetOrganizationSamlIdps200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSamlIdps()`

```php
getOrganizationSamlIdps($organization_id): \Meraki\Model\GetOrganizationSamlIdps200ResponseInner[]
```

List the SAML IdPs in your organization.

List the SAML IdPs in your organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationSamlIdps($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationSamlIdps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationSamlIdps200ResponseInner[]**](../Model/GetOrganizationSamlIdps200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSamlRole()`

```php
getOrganizationSamlRole($organization_id, $saml_role_id): \Meraki\Model\GetOrganizationSamlRoles200ResponseInner
```

Return a SAML role

Return a SAML role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$saml_role_id = 'saml_role_id_example'; // string | Saml role ID

try {
    $result = $apiInstance->getOrganizationSamlRole($organization_id, $saml_role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationSamlRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **saml_role_id** | **string**| Saml role ID | |

### Return type

[**\Meraki\Model\GetOrganizationSamlRoles200ResponseInner**](../Model/GetOrganizationSamlRoles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSamlRoles()`

```php
getOrganizationSamlRoles($organization_id): \Meraki\Model\GetOrganizationSamlRoles200ResponseInner[]
```

List the SAML roles for this organization

List the SAML roles for this organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationSamlRoles($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationSamlRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationSamlRoles200ResponseInner[]**](../Model/GetOrganizationSamlRoles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSnmp()`

```php
getOrganizationSnmp($organization_id): \Meraki\Model\GetOrganizationSnmp200Response
```

Return the SNMP settings for an organization

Return the SNMP settings for an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationSnmp($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationSnmp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationSnmp200Response**](../Model/GetOrganizationSnmp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSplashAsset()`

```php
getOrganizationSplashAsset($organization_id, $id): \Meraki\Model\GetOrganizationSplashAsset200Response
```

Get a Splash Theme Asset

Get a Splash Theme Asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$id = 'id_example'; // string | ID

try {
    $result = $apiInstance->getOrganizationSplashAsset($organization_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationSplashAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **id** | **string**| ID | |

### Return type

[**\Meraki\Model\GetOrganizationSplashAsset200Response**](../Model/GetOrganizationSplashAsset200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSplashThemes()`

```php
getOrganizationSplashThemes($organization_id): \Meraki\Model\GetOrganizationSplashThemes200ResponseInner[]
```

List Splash Themes

List Splash Themes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationSplashThemes($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationSplashThemes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationSplashThemes200ResponseInner[]**](../Model/GetOrganizationSplashThemes200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSummaryTopAppliancesByUtilization()`

```php
getOrganizationSummaryTopAppliancesByUtilization($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationSummaryTopAppliancesByUtilization200ResponseInner[]
```

Return the top 10 appliances sorted by utilization over given time range.

Return the top 10 appliances sorted by utilization over given time range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
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
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 25 minutes and be less than or equal to 186 days. The default is 1 day.

try {
    $result = $apiInstance->getOrganizationSummaryTopAppliancesByUtilization($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationSummaryTopAppliancesByUtilization: ', $e->getMessage(), PHP_EOL;
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
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 25 minutes and be less than or equal to 186 days. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSummaryTopAppliancesByUtilization200ResponseInner[]**](../Model/GetOrganizationSummaryTopAppliancesByUtilization200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSummaryTopApplicationsByUsage()`

```php
getOrganizationSummaryTopApplicationsByUsage($organization_id, $network_tag, $device, $network_id, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationSummaryTopApplicationsByUsage200ResponseInner[]
```

Return the top applications sorted by data usage over given time range

Return the top applications sorted by data usage over given time range. Default unit is megabytes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_tag = 'network_tag_example'; // string | Match result to an exact network tag
$device = 'device_example'; // string | Match result to an exact device tag
$network_id = 'network_id_example'; // string | Match result to an exact network id
$quantity = 56; // int | Set number of desired results to return. Default is 10.
$ssid_name = 'ssid_name_example'; // string | Filter results by ssid name
$usage_uplink = 'usage_uplink_example'; // string | Filter results by usage uplink
$t0 = 't0_example'; // string | The beginning of the timespan for the data.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 186 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 25 minutes and be less than or equal to 186 days. The default is 1 day.

try {
    $result = $apiInstance->getOrganizationSummaryTopApplicationsByUsage($organization_id, $network_tag, $device, $network_id, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationSummaryTopApplicationsByUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_tag** | **string**| Match result to an exact network tag | [optional] |
| **device** | **string**| Match result to an exact device tag | [optional] |
| **network_id** | **string**| Match result to an exact network id | [optional] |
| **quantity** | **int**| Set number of desired results to return. Default is 10. | [optional] |
| **ssid_name** | **string**| Filter results by ssid name | [optional] |
| **usage_uplink** | **string**| Filter results by usage uplink | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 186 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 25 minutes and be less than or equal to 186 days. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSummaryTopApplicationsByUsage200ResponseInner[]**](../Model/GetOrganizationSummaryTopApplicationsByUsage200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSummaryTopApplicationsCategoriesByUsage()`

```php
getOrganizationSummaryTopApplicationsCategoriesByUsage($organization_id, $network_tag, $device_tag, $network_id, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationSummaryTopApplicationsCategoriesByUsage200ResponseInner[]
```

Return the top application categories sorted by data usage over given time range

Return the top application categories sorted by data usage over given time range. Default unit is megabytes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$network_tag = 'network_tag_example'; // string | Match result to an exact network tag
$device_tag = 'device_tag_example'; // string | Match result to an exact device tag
$network_id = 'network_id_example'; // string | Match result to an exact network id
$quantity = 56; // int | Set number of desired results to return. Default is 10.
$ssid_name = 'ssid_name_example'; // string | Filter results by ssid name
$usage_uplink = 'usage_uplink_example'; // string | Filter results by usage uplink
$t0 = 't0_example'; // string | The beginning of the timespan for the data.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 186 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 25 minutes and be less than or equal to 186 days. The default is 1 day.

try {
    $result = $apiInstance->getOrganizationSummaryTopApplicationsCategoriesByUsage($organization_id, $network_tag, $device_tag, $network_id, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationSummaryTopApplicationsCategoriesByUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **network_tag** | **string**| Match result to an exact network tag | [optional] |
| **device_tag** | **string**| Match result to an exact device tag | [optional] |
| **network_id** | **string**| Match result to an exact network id | [optional] |
| **quantity** | **int**| Set number of desired results to return. Default is 10. | [optional] |
| **ssid_name** | **string**| Filter results by ssid name | [optional] |
| **usage_uplink** | **string**| Filter results by usage uplink | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 186 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 25 minutes and be less than or equal to 186 days. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSummaryTopApplicationsCategoriesByUsage200ResponseInner[]**](../Model/GetOrganizationSummaryTopApplicationsCategoriesByUsage200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSummaryTopClientsByUsage()`

```php
getOrganizationSummaryTopClientsByUsage($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationSummaryTopClientsByUsage200ResponseInner[]
```

Return metrics for organization's top 10 clients by data usage (in mb) over given time range.

Return metrics for organization's top 10 clients by data usage (in mb) over given time range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    $result = $apiInstance->getOrganizationSummaryTopClientsByUsage($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationSummaryTopClientsByUsage: ', $e->getMessage(), PHP_EOL;
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

[**\Meraki\Model\GetOrganizationSummaryTopClientsByUsage200ResponseInner[]**](../Model/GetOrganizationSummaryTopClientsByUsage200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSummaryTopClientsManufacturersByUsage()`

```php
getOrganizationSummaryTopClientsManufacturersByUsage($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationSummaryTopClientsManufacturersByUsage200ResponseInner[]
```

Return metrics for organization's top clients by data usage (in mb) over given time range, grouped by manufacturer.

Return metrics for organization's top clients by data usage (in mb) over given time range, grouped by manufacturer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
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
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 186 days. The default is 1 day.

try {
    $result = $apiInstance->getOrganizationSummaryTopClientsManufacturersByUsage($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationSummaryTopClientsManufacturersByUsage: ', $e->getMessage(), PHP_EOL;
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
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 186 days. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSummaryTopClientsManufacturersByUsage200ResponseInner[]**](../Model/GetOrganizationSummaryTopClientsManufacturersByUsage200ResponseInner.md)

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


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->getOrganizationSummaryTopDevicesByUsage: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->getOrganizationSummaryTopDevicesModelsByUsage: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->getOrganizationSummaryTopNetworksByStatus: ', $e->getMessage(), PHP_EOL;
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

## `getOrganizationSummaryTopSsidsByUsage()`

```php
getOrganizationSummaryTopSsidsByUsage($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationSummaryTopSsidsByUsage200ResponseInner[]
```

Return metrics for organization's top 10 ssids by data usage over given time range

Return metrics for organization's top 10 ssids by data usage over given time range. Default unit is megabytes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
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
    $result = $apiInstance->getOrganizationSummaryTopSsidsByUsage($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationSummaryTopSsidsByUsage: ', $e->getMessage(), PHP_EOL;
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

[**\Meraki\Model\GetOrganizationSummaryTopSsidsByUsage200ResponseInner[]**](../Model/GetOrganizationSummaryTopSsidsByUsage200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSummaryTopSwitchesByEnergyUsage()`

```php
getOrganizationSummaryTopSwitchesByEnergyUsage($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationSummaryTopSwitchesByEnergyUsage200ResponseInner[]
```

Return metrics for organization's top 10 switches by energy usage over given time range

Return metrics for organization's top 10 switches by energy usage over given time range. Default unit is joules.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
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
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 25 minutes and be less than or equal to 186 days. The default is 1 day.

try {
    $result = $apiInstance->getOrganizationSummaryTopSwitchesByEnergyUsage($organization_id, $network_tag, $device_tag, $quantity, $ssid_name, $usage_uplink, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationSummaryTopSwitchesByEnergyUsage: ', $e->getMessage(), PHP_EOL;
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
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 25 minutes and be less than or equal to 186 days. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSummaryTopSwitchesByEnergyUsage200ResponseInner[]**](../Model/GetOrganizationSummaryTopSwitchesByEnergyUsage200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationUplinksStatuses()`

```php
getOrganizationUplinksStatuses($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $serials, $iccids): \Meraki\Model\GetOrganizationUplinksStatuses200ResponseInner[]
```

List the uplink status of every Meraki MX, MG and Z series devices in the organization

List the uplink status of every Meraki MX, MG and Z series devices in the organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | A list of network IDs. The returned devices will be filtered to only include these networks.
$serials = array('serials_example'); // string[] | A list of serial numbers. The returned devices will be filtered to only include these serials.
$iccids = array('iccids_example'); // string[] | A list of ICCIDs. The returned devices will be filtered to only include these ICCIDs.

try {
    $result = $apiInstance->getOrganizationUplinksStatuses($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $serials, $iccids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationUplinksStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| A list of network IDs. The returned devices will be filtered to only include these networks. | [optional] |
| **serials** | [**string[]**](../Model/string.md)| A list of serial numbers. The returned devices will be filtered to only include these serials. | [optional] |
| **iccids** | [**string[]**](../Model/string.md)| A list of ICCIDs. The returned devices will be filtered to only include these ICCIDs. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationUplinksStatuses200ResponseInner[]**](../Model/GetOrganizationUplinksStatuses200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWebhooksAlertTypes()`

```php
getOrganizationWebhooksAlertTypes($organization_id, $product_type): \Meraki\Model\GetOrganizationWebhooksAlertTypes200Response
```

Return a list of alert types to be used with managing webhook alerts

Return a list of alert types to be used with managing webhook alerts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$product_type = 'product_type_example'; // string | Filter sample alerts to a specific product type

try {
    $result = $apiInstance->getOrganizationWebhooksAlertTypes($organization_id, $product_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationWebhooksAlertTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **product_type** | **string**| Filter sample alerts to a specific product type | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWebhooksAlertTypes200Response**](../Model/GetOrganizationWebhooksAlertTypes200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWebhooksCallbacksStatus()`

```php
getOrganizationWebhooksCallbacksStatus($organization_id, $callback_id): \Meraki\Model\GetOrganizationWebhooksCallbacksStatus200Response
```

Return the status of an API callback

Return the status of an API callback

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$callback_id = 'callback_id_example'; // string | Callback ID

try {
    $result = $apiInstance->getOrganizationWebhooksCallbacksStatus($organization_id, $callback_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationWebhooksCallbacksStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **callback_id** | **string**| Callback ID | |

### Return type

[**\Meraki\Model\GetOrganizationWebhooksCallbacksStatus200Response**](../Model/GetOrganizationWebhooksCallbacksStatus200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationWebhooksLogs()`

```php
getOrganizationWebhooksLogs($organization_id, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before, $url): \Meraki\Model\GetOrganizationWebhooksLogs200ResponseInner[]
```

Return the log of webhook POSTs sent

Return the log of webhook POSTs sent

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 90 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 50.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$url = 'url_example'; // string | The URL the webhook was sent to

try {
    $result = $apiInstance->getOrganizationWebhooksLogs($organization_id, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationWebhooksLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 90 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 50. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **url** | **string**| The URL the webhook was sent to | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationWebhooksLogs200ResponseInner[]**](../Model/GetOrganizationWebhooksLogs200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizations()`

```php
getOrganizations($per_page, $starting_after, $ending_before): \Meraki\Model\GetOrganizations200ResponseInner[]
```

List the organizations that the user has privileges on

List the organizations that the user has privileges on

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 9000. Default is 9000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.

try {
    $result = $apiInstance->getOrganizations($per_page, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 9000. Default is 9000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizations200ResponseInner[]**](../Model/GetOrganizations200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `moveOrganizationLicenses()`

```php
moveOrganizationLicenses($organization_id, $move_organization_licenses_request): \Meraki\Model\MoveOrganizationLicenses200Response
```

Move licenses to another organization

Move licenses to another organization. This will also move any devices that the licenses are assigned to

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$move_organization_licenses_request = new \Meraki\Model\MoveOrganizationLicensesRequest(); // \Meraki\Model\MoveOrganizationLicensesRequest

try {
    $result = $apiInstance->moveOrganizationLicenses($organization_id, $move_organization_licenses_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->moveOrganizationLicenses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **move_organization_licenses_request** | [**\Meraki\Model\MoveOrganizationLicensesRequest**](../Model/MoveOrganizationLicensesRequest.md)|  | |

### Return type

[**\Meraki\Model\MoveOrganizationLicenses200Response**](../Model/MoveOrganizationLicenses200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `moveOrganizationLicensesSeats()`

```php
moveOrganizationLicensesSeats($organization_id, $move_organization_licenses_seats_request): \Meraki\Model\MoveOrganizationLicensesSeats200Response
```

Move SM seats to another organization

Move SM seats to another organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$move_organization_licenses_seats_request = new \Meraki\Model\MoveOrganizationLicensesSeatsRequest(); // \Meraki\Model\MoveOrganizationLicensesSeatsRequest

try {
    $result = $apiInstance->moveOrganizationLicensesSeats($organization_id, $move_organization_licenses_seats_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->moveOrganizationLicensesSeats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **move_organization_licenses_seats_request** | [**\Meraki\Model\MoveOrganizationLicensesSeatsRequest**](../Model/MoveOrganizationLicensesSeatsRequest.md)|  | |

### Return type

[**\Meraki\Model\MoveOrganizationLicensesSeats200Response**](../Model/MoveOrganizationLicensesSeats200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `releaseFromOrganizationInventory()`

```php
releaseFromOrganizationInventory($organization_id, $release_from_organization_inventory_request): \Meraki\Model\ReleaseFromOrganizationInventory200Response
```

Release a list of claimed devices from an organization.

Release a list of claimed devices from an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$release_from_organization_inventory_request = new \Meraki\Model\ReleaseFromOrganizationInventoryRequest(); // \Meraki\Model\ReleaseFromOrganizationInventoryRequest

try {
    $result = $apiInstance->releaseFromOrganizationInventory($organization_id, $release_from_organization_inventory_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->releaseFromOrganizationInventory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **release_from_organization_inventory_request** | [**\Meraki\Model\ReleaseFromOrganizationInventoryRequest**](../Model/ReleaseFromOrganizationInventoryRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\ReleaseFromOrganizationInventory200Response**](../Model/ReleaseFromOrganizationInventory200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `renewOrganizationLicensesSeats()`

```php
renewOrganizationLicensesSeats($organization_id, $renew_organization_licenses_seats_request): \Meraki\Model\AssignOrganizationLicensesSeats200Response
```

Renew SM seats of a license

Renew SM seats of a license. This will extend the license expiration date of managed SM devices covered by this license

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$renew_organization_licenses_seats_request = new \Meraki\Model\RenewOrganizationLicensesSeatsRequest(); // \Meraki\Model\RenewOrganizationLicensesSeatsRequest

try {
    $result = $apiInstance->renewOrganizationLicensesSeats($organization_id, $renew_organization_licenses_seats_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->renewOrganizationLicensesSeats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **renew_organization_licenses_seats_request** | [**\Meraki\Model\RenewOrganizationLicensesSeatsRequest**](../Model/RenewOrganizationLicensesSeatsRequest.md)|  | |

### Return type

[**\Meraki\Model\AssignOrganizationLicensesSeats200Response**](../Model/AssignOrganizationLicensesSeats200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreOrganizationAssuranceAlerts()`

```php
restoreOrganizationAssuranceAlerts($organization_id, $restore_organization_assurance_alerts_request)
```

Restore health alerts from dismissed

Restore health alerts from dismissed

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$restore_organization_assurance_alerts_request = new \Meraki\Model\RestoreOrganizationAssuranceAlertsRequest(); // \Meraki\Model\RestoreOrganizationAssuranceAlertsRequest

try {
    $apiInstance->restoreOrganizationAssuranceAlerts($organization_id, $restore_organization_assurance_alerts_request);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->restoreOrganizationAssuranceAlerts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **restore_organization_assurance_alerts_request** | [**\Meraki\Model\RestoreOrganizationAssuranceAlertsRequest**](../Model/RestoreOrganizationAssuranceAlertsRequest.md)|  | |

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

## `updateOrganization()`

```php
updateOrganization($organization_id, $update_organization_request): \Meraki\Model\GetOrganizations200ResponseInner
```

Update an organization

Update an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$update_organization_request = new \Meraki\Model\UpdateOrganizationRequest(); // \Meraki\Model\UpdateOrganizationRequest

try {
    $result = $apiInstance->updateOrganization($organization_id, $update_organization_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->updateOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **update_organization_request** | [**\Meraki\Model\UpdateOrganizationRequest**](../Model/UpdateOrganizationRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizations200ResponseInner**](../Model/GetOrganizations200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationActionBatch()`

```php
updateOrganizationActionBatch($organization_id, $action_batch_id, $update_organization_action_batch_request): \Meraki\Model\GetOrganizationActionBatches200ResponseInner
```

Update an action batch

Update an action batch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$action_batch_id = 'action_batch_id_example'; // string | Action batch ID
$update_organization_action_batch_request = new \Meraki\Model\UpdateOrganizationActionBatchRequest(); // \Meraki\Model\UpdateOrganizationActionBatchRequest

try {
    $result = $apiInstance->updateOrganizationActionBatch($organization_id, $action_batch_id, $update_organization_action_batch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->updateOrganizationActionBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **action_batch_id** | **string**| Action batch ID | |
| **update_organization_action_batch_request** | [**\Meraki\Model\UpdateOrganizationActionBatchRequest**](../Model/UpdateOrganizationActionBatchRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationActionBatches200ResponseInner**](../Model/GetOrganizationActionBatches200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationAdaptivePolicyAcl()`

```php
updateOrganizationAdaptivePolicyAcl($organization_id, $acl_id, $update_organization_adaptive_policy_acl_request): \Meraki\Model\GetOrganizationAdaptivePolicyAcls200ResponseInner
```

Updates an adaptive policy ACL

Updates an adaptive policy ACL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$acl_id = 'acl_id_example'; // string | Acl ID
$update_organization_adaptive_policy_acl_request = new \Meraki\Model\UpdateOrganizationAdaptivePolicyAclRequest(); // \Meraki\Model\UpdateOrganizationAdaptivePolicyAclRequest

try {
    $result = $apiInstance->updateOrganizationAdaptivePolicyAcl($organization_id, $acl_id, $update_organization_adaptive_policy_acl_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->updateOrganizationAdaptivePolicyAcl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **acl_id** | **string**| Acl ID | |
| **update_organization_adaptive_policy_acl_request** | [**\Meraki\Model\UpdateOrganizationAdaptivePolicyAclRequest**](../Model/UpdateOrganizationAdaptivePolicyAclRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicyAcls200ResponseInner**](../Model/GetOrganizationAdaptivePolicyAcls200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationAdaptivePolicyGroup()`

```php
updateOrganizationAdaptivePolicyGroup($organization_id, $id, $update_organization_adaptive_policy_group_request): \Meraki\Model\GetOrganizationAdaptivePolicyGroups200ResponseInner
```

Updates an adaptive policy group

Updates an adaptive policy group. If updating \"Infrastructure\", only the SGT is allowed. Cannot update \"Unknown\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$id = 'id_example'; // string | ID
$update_organization_adaptive_policy_group_request = new \Meraki\Model\UpdateOrganizationAdaptivePolicyGroupRequest(); // \Meraki\Model\UpdateOrganizationAdaptivePolicyGroupRequest

try {
    $result = $apiInstance->updateOrganizationAdaptivePolicyGroup($organization_id, $id, $update_organization_adaptive_policy_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->updateOrganizationAdaptivePolicyGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **id** | **string**| ID | |
| **update_organization_adaptive_policy_group_request** | [**\Meraki\Model\UpdateOrganizationAdaptivePolicyGroupRequest**](../Model/UpdateOrganizationAdaptivePolicyGroupRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicyGroups200ResponseInner**](../Model/GetOrganizationAdaptivePolicyGroups200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationAdaptivePolicyPolicy()`

```php
updateOrganizationAdaptivePolicyPolicy($organization_id, $id, $update_organization_adaptive_policy_policy_request): \Meraki\Model\GetOrganizationAdaptivePolicyPolicies200ResponseInner
```

Update an Adaptive Policy

Update an Adaptive Policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$id = 'id_example'; // string | ID
$update_organization_adaptive_policy_policy_request = new \Meraki\Model\UpdateOrganizationAdaptivePolicyPolicyRequest(); // \Meraki\Model\UpdateOrganizationAdaptivePolicyPolicyRequest

try {
    $result = $apiInstance->updateOrganizationAdaptivePolicyPolicy($organization_id, $id, $update_organization_adaptive_policy_policy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->updateOrganizationAdaptivePolicyPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **id** | **string**| ID | |
| **update_organization_adaptive_policy_policy_request** | [**\Meraki\Model\UpdateOrganizationAdaptivePolicyPolicyRequest**](../Model/UpdateOrganizationAdaptivePolicyPolicyRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicyPolicies200ResponseInner**](../Model/GetOrganizationAdaptivePolicyPolicies200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationAdaptivePolicySettings()`

```php
updateOrganizationAdaptivePolicySettings($organization_id, $update_organization_adaptive_policy_settings_request): \Meraki\Model\GetOrganizationAdaptivePolicySettings200Response
```

Update global adaptive policy settings

Update global adaptive policy settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$update_organization_adaptive_policy_settings_request = new \Meraki\Model\UpdateOrganizationAdaptivePolicySettingsRequest(); // \Meraki\Model\UpdateOrganizationAdaptivePolicySettingsRequest

try {
    $result = $apiInstance->updateOrganizationAdaptivePolicySettings($organization_id, $update_organization_adaptive_policy_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->updateOrganizationAdaptivePolicySettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **update_organization_adaptive_policy_settings_request** | [**\Meraki\Model\UpdateOrganizationAdaptivePolicySettingsRequest**](../Model/UpdateOrganizationAdaptivePolicySettingsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationAdaptivePolicySettings200Response**](../Model/GetOrganizationAdaptivePolicySettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationAdmin()`

```php
updateOrganizationAdmin($organization_id, $admin_id, $update_organization_admin_request): \Meraki\Model\GetOrganizationAdmins200ResponseInner
```

Update an administrator

Update an administrator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$admin_id = 'admin_id_example'; // string | Admin ID
$update_organization_admin_request = new \Meraki\Model\UpdateOrganizationAdminRequest(); // \Meraki\Model\UpdateOrganizationAdminRequest

try {
    $result = $apiInstance->updateOrganizationAdmin($organization_id, $admin_id, $update_organization_admin_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->updateOrganizationAdmin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **admin_id** | **string**| Admin ID | |
| **update_organization_admin_request** | [**\Meraki\Model\UpdateOrganizationAdminRequest**](../Model/UpdateOrganizationAdminRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationAdmins200ResponseInner**](../Model/GetOrganizationAdmins200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationAlertsProfile()`

```php
updateOrganizationAlertsProfile($organization_id, $alert_config_id, $update_organization_alerts_profile_request): \Meraki\Model\GetOrganizationAlertsProfiles200ResponseInner
```

Update an organization-wide alert config

Update an organization-wide alert config

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$alert_config_id = 'alert_config_id_example'; // string | Alert config ID
$update_organization_alerts_profile_request = new \Meraki\Model\UpdateOrganizationAlertsProfileRequest(); // \Meraki\Model\UpdateOrganizationAlertsProfileRequest

try {
    $result = $apiInstance->updateOrganizationAlertsProfile($organization_id, $alert_config_id, $update_organization_alerts_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->updateOrganizationAlertsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **alert_config_id** | **string**| Alert config ID | |
| **update_organization_alerts_profile_request** | [**\Meraki\Model\UpdateOrganizationAlertsProfileRequest**](../Model/UpdateOrganizationAlertsProfileRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationAlertsProfiles200ResponseInner**](../Model/GetOrganizationAlertsProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationBrandingPoliciesPriorities()`

```php
updateOrganizationBrandingPoliciesPriorities($organization_id, $update_organization_branding_policies_priorities_request): \Meraki\Model\GetOrganizationBrandingPoliciesPriorities200Response
```

Update the priority ordering of an organization's branding policies.

Update the priority ordering of an organization's branding policies.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$update_organization_branding_policies_priorities_request = new \Meraki\Model\UpdateOrganizationBrandingPoliciesPrioritiesRequest(); // \Meraki\Model\UpdateOrganizationBrandingPoliciesPrioritiesRequest

try {
    $result = $apiInstance->updateOrganizationBrandingPoliciesPriorities($organization_id, $update_organization_branding_policies_priorities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->updateOrganizationBrandingPoliciesPriorities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **update_organization_branding_policies_priorities_request** | [**\Meraki\Model\UpdateOrganizationBrandingPoliciesPrioritiesRequest**](../Model/UpdateOrganizationBrandingPoliciesPrioritiesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationBrandingPoliciesPriorities200Response**](../Model/GetOrganizationBrandingPoliciesPriorities200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationBrandingPolicy()`

```php
updateOrganizationBrandingPolicy($organization_id, $branding_policy_id, $update_organization_branding_policy_request): \Meraki\Model\GetOrganizationBrandingPolicies200ResponseInner
```

Update a branding policy

Update a branding policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$branding_policy_id = 'branding_policy_id_example'; // string | Branding policy ID
$update_organization_branding_policy_request = new \Meraki\Model\UpdateOrganizationBrandingPolicyRequest(); // \Meraki\Model\UpdateOrganizationBrandingPolicyRequest

try {
    $result = $apiInstance->updateOrganizationBrandingPolicy($organization_id, $branding_policy_id, $update_organization_branding_policy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->updateOrganizationBrandingPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **branding_policy_id** | **string**| Branding policy ID | |
| **update_organization_branding_policy_request** | [**\Meraki\Model\UpdateOrganizationBrandingPolicyRequest**](../Model/UpdateOrganizationBrandingPolicyRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationBrandingPolicies200ResponseInner**](../Model/GetOrganizationBrandingPolicies200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationConfigTemplate()`

```php
updateOrganizationConfigTemplate($organization_id, $config_template_id, $update_organization_config_template_request): \Meraki\Model\GetOrganizationConfigTemplates200ResponseInner
```

Update a configuration template

Update a configuration template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$config_template_id = 'config_template_id_example'; // string | Config template ID
$update_organization_config_template_request = new \Meraki\Model\UpdateOrganizationConfigTemplateRequest(); // \Meraki\Model\UpdateOrganizationConfigTemplateRequest

try {
    $result = $apiInstance->updateOrganizationConfigTemplate($organization_id, $config_template_id, $update_organization_config_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->updateOrganizationConfigTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **config_template_id** | **string**| Config template ID | |
| **update_organization_config_template_request** | [**\Meraki\Model\UpdateOrganizationConfigTemplateRequest**](../Model/UpdateOrganizationConfigTemplateRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationConfigTemplates200ResponseInner**](../Model/GetOrganizationConfigTemplates200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationEarlyAccessFeaturesOptIn()`

```php
updateOrganizationEarlyAccessFeaturesOptIn($organization_id, $opt_in_id, $update_organization_early_access_features_opt_in_request): \Meraki\Model\GetOrganizationEarlyAccessFeaturesOptIns200Response
```

Update an early access feature opt-in for an organization

Update an early access feature opt-in for an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$opt_in_id = 'opt_in_id_example'; // string | Opt in ID
$update_organization_early_access_features_opt_in_request = new \Meraki\Model\UpdateOrganizationEarlyAccessFeaturesOptInRequest(); // \Meraki\Model\UpdateOrganizationEarlyAccessFeaturesOptInRequest

try {
    $result = $apiInstance->updateOrganizationEarlyAccessFeaturesOptIn($organization_id, $opt_in_id, $update_organization_early_access_features_opt_in_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->updateOrganizationEarlyAccessFeaturesOptIn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **opt_in_id** | **string**| Opt in ID | |
| **update_organization_early_access_features_opt_in_request** | [**\Meraki\Model\UpdateOrganizationEarlyAccessFeaturesOptInRequest**](../Model/UpdateOrganizationEarlyAccessFeaturesOptInRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationEarlyAccessFeaturesOptIns200Response**](../Model/GetOrganizationEarlyAccessFeaturesOptIns200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationLicense()`

```php
updateOrganizationLicense($organization_id, $license_id, $update_organization_license_request): \Meraki\Model\GetOrganizationLicenses200ResponseInner
```

Update a license

Update a license

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$license_id = 'license_id_example'; // string | License ID
$update_organization_license_request = new \Meraki\Model\UpdateOrganizationLicenseRequest(); // \Meraki\Model\UpdateOrganizationLicenseRequest

try {
    $result = $apiInstance->updateOrganizationLicense($organization_id, $license_id, $update_organization_license_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->updateOrganizationLicense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **license_id** | **string**| License ID | |
| **update_organization_license_request** | [**\Meraki\Model\UpdateOrganizationLicenseRequest**](../Model/UpdateOrganizationLicenseRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationLicenses200ResponseInner**](../Model/GetOrganizationLicenses200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationLoginSecurity()`

```php
updateOrganizationLoginSecurity($organization_id, $update_organization_login_security_request): \Meraki\Model\GetOrganizationLoginSecurity200Response
```

Update the login security settings for an organization

Update the login security settings for an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$update_organization_login_security_request = new \Meraki\Model\UpdateOrganizationLoginSecurityRequest(); // \Meraki\Model\UpdateOrganizationLoginSecurityRequest

try {
    $result = $apiInstance->updateOrganizationLoginSecurity($organization_id, $update_organization_login_security_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->updateOrganizationLoginSecurity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **update_organization_login_security_request** | [**\Meraki\Model\UpdateOrganizationLoginSecurityRequest**](../Model/UpdateOrganizationLoginSecurityRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationLoginSecurity200Response**](../Model/GetOrganizationLoginSecurity200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationPolicyObject()`

```php
updateOrganizationPolicyObject($organization_id, $policy_object_id, $update_organization_policy_object_request): \Meraki\Model\GetOrganizationPolicyObjects200Response
```

Updates a Policy Object.

Updates a Policy Object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$policy_object_id = 'policy_object_id_example'; // string | Policy object ID
$update_organization_policy_object_request = new \Meraki\Model\UpdateOrganizationPolicyObjectRequest(); // \Meraki\Model\UpdateOrganizationPolicyObjectRequest

try {
    $result = $apiInstance->updateOrganizationPolicyObject($organization_id, $policy_object_id, $update_organization_policy_object_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->updateOrganizationPolicyObject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **policy_object_id** | **string**| Policy object ID | |
| **update_organization_policy_object_request** | [**\Meraki\Model\UpdateOrganizationPolicyObjectRequest**](../Model/UpdateOrganizationPolicyObjectRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationPolicyObjects200Response**](../Model/GetOrganizationPolicyObjects200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationPolicyObjectsGroup()`

```php
updateOrganizationPolicyObjectsGroup($organization_id, $policy_object_group_id, $update_organization_policy_objects_group_request): \Meraki\Model\GetOrganizationPolicyObjectsGroups200Response
```

Updates a Policy Object Group.

Updates a Policy Object Group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$policy_object_group_id = 'policy_object_group_id_example'; // string | Policy object group ID
$update_organization_policy_objects_group_request = new \Meraki\Model\UpdateOrganizationPolicyObjectsGroupRequest(); // \Meraki\Model\UpdateOrganizationPolicyObjectsGroupRequest

try {
    $result = $apiInstance->updateOrganizationPolicyObjectsGroup($organization_id, $policy_object_group_id, $update_organization_policy_objects_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->updateOrganizationPolicyObjectsGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **policy_object_group_id** | **string**| Policy object group ID | |
| **update_organization_policy_objects_group_request** | [**\Meraki\Model\UpdateOrganizationPolicyObjectsGroupRequest**](../Model/UpdateOrganizationPolicyObjectsGroupRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationPolicyObjectsGroups200Response**](../Model/GetOrganizationPolicyObjectsGroups200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationSaml()`

```php
updateOrganizationSaml($organization_id, $update_organization_saml_request): \Meraki\Model\GetOrganizationSaml200Response
```

Updates the SAML SSO enabled settings for an organization.

Updates the SAML SSO enabled settings for an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$update_organization_saml_request = new \Meraki\Model\UpdateOrganizationSamlRequest(); // \Meraki\Model\UpdateOrganizationSamlRequest

try {
    $result = $apiInstance->updateOrganizationSaml($organization_id, $update_organization_saml_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->updateOrganizationSaml: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **update_organization_saml_request** | [**\Meraki\Model\UpdateOrganizationSamlRequest**](../Model/UpdateOrganizationSamlRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSaml200Response**](../Model/GetOrganizationSaml200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationSamlIdp()`

```php
updateOrganizationSamlIdp($organization_id, $idp_id, $update_organization_saml_idp_request): \Meraki\Model\GetOrganizationSamlIdps200ResponseInner[]
```

Update a SAML IdP in your organization

Update a SAML IdP in your organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$idp_id = 'idp_id_example'; // string | Idp ID
$update_organization_saml_idp_request = new \Meraki\Model\UpdateOrganizationSamlIdpRequest(); // \Meraki\Model\UpdateOrganizationSamlIdpRequest

try {
    $result = $apiInstance->updateOrganizationSamlIdp($organization_id, $idp_id, $update_organization_saml_idp_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->updateOrganizationSamlIdp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **idp_id** | **string**| Idp ID | |
| **update_organization_saml_idp_request** | [**\Meraki\Model\UpdateOrganizationSamlIdpRequest**](../Model/UpdateOrganizationSamlIdpRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSamlIdps200ResponseInner[]**](../Model/GetOrganizationSamlIdps200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationSamlRole()`

```php
updateOrganizationSamlRole($organization_id, $saml_role_id, $update_organization_saml_role_request): \Meraki\Model\GetOrganizationSamlRoles200ResponseInner
```

Update a SAML role

Update a SAML role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$saml_role_id = 'saml_role_id_example'; // string | Saml role ID
$update_organization_saml_role_request = new \Meraki\Model\UpdateOrganizationSamlRoleRequest(); // \Meraki\Model\UpdateOrganizationSamlRoleRequest

try {
    $result = $apiInstance->updateOrganizationSamlRole($organization_id, $saml_role_id, $update_organization_saml_role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->updateOrganizationSamlRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **saml_role_id** | **string**| Saml role ID | |
| **update_organization_saml_role_request** | [**\Meraki\Model\UpdateOrganizationSamlRoleRequest**](../Model/UpdateOrganizationSamlRoleRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSamlRoles200ResponseInner**](../Model/GetOrganizationSamlRoles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationSnmp()`

```php
updateOrganizationSnmp($organization_id, $update_organization_snmp_request): \Meraki\Model\GetOrganizationSnmp200Response
```

Update the SNMP settings for an organization

Update the SNMP settings for an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$update_organization_snmp_request = new \Meraki\Model\UpdateOrganizationSnmpRequest(); // \Meraki\Model\UpdateOrganizationSnmpRequest

try {
    $result = $apiInstance->updateOrganizationSnmp($organization_id, $update_organization_snmp_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->updateOrganizationSnmp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **update_organization_snmp_request** | [**\Meraki\Model\UpdateOrganizationSnmpRequest**](../Model/UpdateOrganizationSnmpRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationSnmp200Response**](../Model/GetOrganizationSnmp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
