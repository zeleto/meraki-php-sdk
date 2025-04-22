# Meraki\ApplianceApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate()**](ApplianceApi.md#bulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate) | **POST** /organizations/{organizationId}/appliance/dns/local/profiles/assignments/bulkCreate | Assign the local DNS profile to networks in the organization |
| [**createDeviceApplianceVmxAuthenticationToken()**](ApplianceApi.md#createDeviceApplianceVmxAuthenticationToken) | **POST** /devices/{serial}/appliance/vmx/authenticationToken | Generate a new vMX authentication token |
| [**createNetworkAppliancePrefixesDelegatedStatic()**](ApplianceApi.md#createNetworkAppliancePrefixesDelegatedStatic) | **POST** /networks/{networkId}/appliance/prefixes/delegated/statics | Add a static delegated prefix from a network |
| [**createNetworkApplianceRfProfile()**](ApplianceApi.md#createNetworkApplianceRfProfile) | **POST** /networks/{networkId}/appliance/rfProfiles | Creates new RF profile for this network |
| [**createNetworkApplianceStaticRoute()**](ApplianceApi.md#createNetworkApplianceStaticRoute) | **POST** /networks/{networkId}/appliance/staticRoutes | Add a static route for an MX or teleworker network |
| [**createNetworkApplianceTrafficShapingCustomPerformanceClass()**](ApplianceApi.md#createNetworkApplianceTrafficShapingCustomPerformanceClass) | **POST** /networks/{networkId}/appliance/trafficShaping/customPerformanceClasses | Add a custom performance class for an MX network |
| [**createNetworkApplianceVlan()**](ApplianceApi.md#createNetworkApplianceVlan) | **POST** /networks/{networkId}/appliance/vlans | Add a VLAN |
| [**createOrganizationApplianceDnsLocalProfile()**](ApplianceApi.md#createOrganizationApplianceDnsLocalProfile) | **POST** /organizations/{organizationId}/appliance/dns/local/profiles | Create a new local DNS profile |
| [**createOrganizationApplianceDnsLocalProfilesAssignmentsBulkDelete()**](ApplianceApi.md#createOrganizationApplianceDnsLocalProfilesAssignmentsBulkDelete) | **POST** /organizations/{organizationId}/appliance/dns/local/profiles/assignments/bulkDelete | Unassign the local DNS profile to networks in the organization |
| [**createOrganizationApplianceDnsLocalRecord()**](ApplianceApi.md#createOrganizationApplianceDnsLocalRecord) | **POST** /organizations/{organizationId}/appliance/dns/local/records | Create a new local DNS record |
| [**createOrganizationApplianceDnsSplitProfile()**](ApplianceApi.md#createOrganizationApplianceDnsSplitProfile) | **POST** /organizations/{organizationId}/appliance/dns/split/profiles | Create a new split DNS profile |
| [**createOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate()**](ApplianceApi.md#createOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate) | **POST** /organizations/{organizationId}/appliance/dns/split/profiles/assignments/bulkCreate | Assign the split DNS profile to networks in the organization |
| [**createOrganizationApplianceDnsSplitProfilesAssignmentsBulkDelete()**](ApplianceApi.md#createOrganizationApplianceDnsSplitProfilesAssignmentsBulkDelete) | **POST** /organizations/{organizationId}/appliance/dns/split/profiles/assignments/bulkDelete | Unassign the split DNS profile to networks in the organization |
| [**deleteNetworkAppliancePrefixesDelegatedStatic()**](ApplianceApi.md#deleteNetworkAppliancePrefixesDelegatedStatic) | **DELETE** /networks/{networkId}/appliance/prefixes/delegated/statics/{staticDelegatedPrefixId} | Delete a static delegated prefix from a network |
| [**deleteNetworkApplianceRfProfile()**](ApplianceApi.md#deleteNetworkApplianceRfProfile) | **DELETE** /networks/{networkId}/appliance/rfProfiles/{rfProfileId} | Delete a RF Profile |
| [**deleteNetworkApplianceStaticRoute()**](ApplianceApi.md#deleteNetworkApplianceStaticRoute) | **DELETE** /networks/{networkId}/appliance/staticRoutes/{staticRouteId} | Delete a static route from an MX or teleworker network |
| [**deleteNetworkApplianceTrafficShapingCustomPerformanceClass()**](ApplianceApi.md#deleteNetworkApplianceTrafficShapingCustomPerformanceClass) | **DELETE** /networks/{networkId}/appliance/trafficShaping/customPerformanceClasses/{customPerformanceClassId} | Delete a custom performance class from an MX network |
| [**deleteNetworkApplianceVlan()**](ApplianceApi.md#deleteNetworkApplianceVlan) | **DELETE** /networks/{networkId}/appliance/vlans/{vlanId} | Delete a VLAN from a network |
| [**deleteOrganizationApplianceDnsLocalProfile()**](ApplianceApi.md#deleteOrganizationApplianceDnsLocalProfile) | **DELETE** /organizations/{organizationId}/appliance/dns/local/profiles/{profileId} | Deletes a local DNS profile |
| [**deleteOrganizationApplianceDnsLocalRecord()**](ApplianceApi.md#deleteOrganizationApplianceDnsLocalRecord) | **DELETE** /organizations/{organizationId}/appliance/dns/local/records/{recordId} | Deletes a local DNS record |
| [**deleteOrganizationApplianceDnsSplitProfile()**](ApplianceApi.md#deleteOrganizationApplianceDnsSplitProfile) | **DELETE** /organizations/{organizationId}/appliance/dns/split/profiles/{profileId} | Deletes a split DNS profile |
| [**getDeviceApplianceDhcpSubnets()**](ApplianceApi.md#getDeviceApplianceDhcpSubnets) | **GET** /devices/{serial}/appliance/dhcp/subnets | Return the DHCP subnet information for an appliance |
| [**getDeviceAppliancePerformance()**](ApplianceApi.md#getDeviceAppliancePerformance) | **GET** /devices/{serial}/appliance/performance | Return the performance score for a single MX |
| [**getDeviceAppliancePrefixesDelegated()**](ApplianceApi.md#getDeviceAppliancePrefixesDelegated) | **GET** /devices/{serial}/appliance/prefixes/delegated | Return current delegated IPv6 prefixes on an appliance. |
| [**getDeviceAppliancePrefixesDelegatedVlanAssignments()**](ApplianceApi.md#getDeviceAppliancePrefixesDelegatedVlanAssignments) | **GET** /devices/{serial}/appliance/prefixes/delegated/vlanAssignments | Return prefixes assigned to all IPv6 enabled VLANs on an appliance. |
| [**getDeviceApplianceRadioSettings()**](ApplianceApi.md#getDeviceApplianceRadioSettings) | **GET** /devices/{serial}/appliance/radio/settings | Return the radio settings of an appliance |
| [**getDeviceApplianceUplinksSettings()**](ApplianceApi.md#getDeviceApplianceUplinksSettings) | **GET** /devices/{serial}/appliance/uplinks/settings | Return the uplink settings for an MX appliance |
| [**getNetworkApplianceClientSecurityEvents()**](ApplianceApi.md#getNetworkApplianceClientSecurityEvents) | **GET** /networks/{networkId}/appliance/clients/{clientId}/security/events | List the security events for a client |
| [**getNetworkApplianceConnectivityMonitoringDestinations()**](ApplianceApi.md#getNetworkApplianceConnectivityMonitoringDestinations) | **GET** /networks/{networkId}/appliance/connectivityMonitoringDestinations | Return the connectivity testing destinations for an MX network |
| [**getNetworkApplianceContentFiltering()**](ApplianceApi.md#getNetworkApplianceContentFiltering) | **GET** /networks/{networkId}/appliance/contentFiltering | Return the content filtering settings for an MX network |
| [**getNetworkApplianceContentFilteringCategories()**](ApplianceApi.md#getNetworkApplianceContentFilteringCategories) | **GET** /networks/{networkId}/appliance/contentFiltering/categories | List all available content filtering categories for an MX network |
| [**getNetworkApplianceFirewallCellularFirewallRules()**](ApplianceApi.md#getNetworkApplianceFirewallCellularFirewallRules) | **GET** /networks/{networkId}/appliance/firewall/cellularFirewallRules | Return the cellular firewall rules for an MX network |
| [**getNetworkApplianceFirewallFirewalledService()**](ApplianceApi.md#getNetworkApplianceFirewallFirewalledService) | **GET** /networks/{networkId}/appliance/firewall/firewalledServices/{service} | Return the accessibility settings of the given service (&#39;ICMP&#39;, &#39;web&#39;, or &#39;SNMP&#39;) |
| [**getNetworkApplianceFirewallFirewalledServices()**](ApplianceApi.md#getNetworkApplianceFirewallFirewalledServices) | **GET** /networks/{networkId}/appliance/firewall/firewalledServices | List the appliance services and their accessibility rules |
| [**getNetworkApplianceFirewallInboundCellularFirewallRules()**](ApplianceApi.md#getNetworkApplianceFirewallInboundCellularFirewallRules) | **GET** /networks/{networkId}/appliance/firewall/inboundCellularFirewallRules | Return the inbound cellular firewall rules for an MX network |
| [**getNetworkApplianceFirewallInboundFirewallRules()**](ApplianceApi.md#getNetworkApplianceFirewallInboundFirewallRules) | **GET** /networks/{networkId}/appliance/firewall/inboundFirewallRules | Return the inbound firewall rules for an MX network |
| [**getNetworkApplianceFirewallL3FirewallRules()**](ApplianceApi.md#getNetworkApplianceFirewallL3FirewallRules) | **GET** /networks/{networkId}/appliance/firewall/l3FirewallRules | Return the L3 firewall rules for an MX network |
| [**getNetworkApplianceFirewallL7FirewallRules()**](ApplianceApi.md#getNetworkApplianceFirewallL7FirewallRules) | **GET** /networks/{networkId}/appliance/firewall/l7FirewallRules | List the MX L7 firewall rules for an MX network |
| [**getNetworkApplianceFirewallL7FirewallRulesApplicationCategories()**](ApplianceApi.md#getNetworkApplianceFirewallL7FirewallRulesApplicationCategories) | **GET** /networks/{networkId}/appliance/firewall/l7FirewallRules/applicationCategories | Return the L7 firewall application categories and their associated applications for an MX network |
| [**getNetworkApplianceFirewallOneToManyNatRules()**](ApplianceApi.md#getNetworkApplianceFirewallOneToManyNatRules) | **GET** /networks/{networkId}/appliance/firewall/oneToManyNatRules | Return the 1:Many NAT mapping rules for an MX network |
| [**getNetworkApplianceFirewallOneToOneNatRules()**](ApplianceApi.md#getNetworkApplianceFirewallOneToOneNatRules) | **GET** /networks/{networkId}/appliance/firewall/oneToOneNatRules | Return the 1:1 NAT mapping rules for an MX network |
| [**getNetworkApplianceFirewallPortForwardingRules()**](ApplianceApi.md#getNetworkApplianceFirewallPortForwardingRules) | **GET** /networks/{networkId}/appliance/firewall/portForwardingRules | Return the port forwarding rules for an MX network |
| [**getNetworkApplianceFirewallSettings()**](ApplianceApi.md#getNetworkApplianceFirewallSettings) | **GET** /networks/{networkId}/appliance/firewall/settings | Return the firewall settings for this network |
| [**getNetworkAppliancePort()**](ApplianceApi.md#getNetworkAppliancePort) | **GET** /networks/{networkId}/appliance/ports/{portId} | Return per-port VLAN settings for a single MX port. |
| [**getNetworkAppliancePorts()**](ApplianceApi.md#getNetworkAppliancePorts) | **GET** /networks/{networkId}/appliance/ports | List per-port VLAN settings for all ports of a MX. |
| [**getNetworkAppliancePrefixesDelegatedStatic()**](ApplianceApi.md#getNetworkAppliancePrefixesDelegatedStatic) | **GET** /networks/{networkId}/appliance/prefixes/delegated/statics/{staticDelegatedPrefixId} | Return a static delegated prefix from a network |
| [**getNetworkAppliancePrefixesDelegatedStatics()**](ApplianceApi.md#getNetworkAppliancePrefixesDelegatedStatics) | **GET** /networks/{networkId}/appliance/prefixes/delegated/statics | List static delegated prefixes for a network |
| [**getNetworkApplianceRfProfile()**](ApplianceApi.md#getNetworkApplianceRfProfile) | **GET** /networks/{networkId}/appliance/rfProfiles/{rfProfileId} | Return a RF profile |
| [**getNetworkApplianceRfProfiles()**](ApplianceApi.md#getNetworkApplianceRfProfiles) | **GET** /networks/{networkId}/appliance/rfProfiles | List the RF profiles for this network |
| [**getNetworkApplianceSecurityEvents()**](ApplianceApi.md#getNetworkApplianceSecurityEvents) | **GET** /networks/{networkId}/appliance/security/events | List the security events for a network |
| [**getNetworkApplianceSecurityIntrusion()**](ApplianceApi.md#getNetworkApplianceSecurityIntrusion) | **GET** /networks/{networkId}/appliance/security/intrusion | Returns all supported intrusion settings for an MX network |
| [**getNetworkApplianceSecurityMalware()**](ApplianceApi.md#getNetworkApplianceSecurityMalware) | **GET** /networks/{networkId}/appliance/security/malware | Returns all supported malware settings for an MX network |
| [**getNetworkApplianceSettings()**](ApplianceApi.md#getNetworkApplianceSettings) | **GET** /networks/{networkId}/appliance/settings | Return the appliance settings for a network |
| [**getNetworkApplianceSingleLan()**](ApplianceApi.md#getNetworkApplianceSingleLan) | **GET** /networks/{networkId}/appliance/singleLan | Return single LAN configuration |
| [**getNetworkApplianceSsid()**](ApplianceApi.md#getNetworkApplianceSsid) | **GET** /networks/{networkId}/appliance/ssids/{number} | Return a single MX SSID |
| [**getNetworkApplianceSsids()**](ApplianceApi.md#getNetworkApplianceSsids) | **GET** /networks/{networkId}/appliance/ssids | List the MX SSIDs in a network |
| [**getNetworkApplianceStaticRoute()**](ApplianceApi.md#getNetworkApplianceStaticRoute) | **GET** /networks/{networkId}/appliance/staticRoutes/{staticRouteId} | Return a static route for an MX or teleworker network |
| [**getNetworkApplianceStaticRoutes()**](ApplianceApi.md#getNetworkApplianceStaticRoutes) | **GET** /networks/{networkId}/appliance/staticRoutes | List the static routes for an MX or teleworker network |
| [**getNetworkApplianceTrafficShaping()**](ApplianceApi.md#getNetworkApplianceTrafficShaping) | **GET** /networks/{networkId}/appliance/trafficShaping | Display the traffic shaping settings for an MX network |
| [**getNetworkApplianceTrafficShapingCustomPerformanceClass()**](ApplianceApi.md#getNetworkApplianceTrafficShapingCustomPerformanceClass) | **GET** /networks/{networkId}/appliance/trafficShaping/customPerformanceClasses/{customPerformanceClassId} | Return a custom performance class for an MX network |
| [**getNetworkApplianceTrafficShapingCustomPerformanceClasses()**](ApplianceApi.md#getNetworkApplianceTrafficShapingCustomPerformanceClasses) | **GET** /networks/{networkId}/appliance/trafficShaping/customPerformanceClasses | List all custom performance classes for an MX network |
| [**getNetworkApplianceTrafficShapingRules()**](ApplianceApi.md#getNetworkApplianceTrafficShapingRules) | **GET** /networks/{networkId}/appliance/trafficShaping/rules | Display the traffic shaping settings rules for an MX network |
| [**getNetworkApplianceTrafficShapingUplinkBandwidth()**](ApplianceApi.md#getNetworkApplianceTrafficShapingUplinkBandwidth) | **GET** /networks/{networkId}/appliance/trafficShaping/uplinkBandwidth | Returns the uplink bandwidth limits for your MX network |
| [**getNetworkApplianceTrafficShapingUplinkSelection()**](ApplianceApi.md#getNetworkApplianceTrafficShapingUplinkSelection) | **GET** /networks/{networkId}/appliance/trafficShaping/uplinkSelection | Show uplink selection settings for an MX network |
| [**getNetworkApplianceUplinksUsageHistory()**](ApplianceApi.md#getNetworkApplianceUplinksUsageHistory) | **GET** /networks/{networkId}/appliance/uplinks/usageHistory | Get the sent and received bytes for each uplink of a network. |
| [**getNetworkApplianceVlan()**](ApplianceApi.md#getNetworkApplianceVlan) | **GET** /networks/{networkId}/appliance/vlans/{vlanId} | Return a VLAN |
| [**getNetworkApplianceVlans()**](ApplianceApi.md#getNetworkApplianceVlans) | **GET** /networks/{networkId}/appliance/vlans | List the VLANs for an MX network |
| [**getNetworkApplianceVlansSettings()**](ApplianceApi.md#getNetworkApplianceVlansSettings) | **GET** /networks/{networkId}/appliance/vlans/settings | Returns the enabled status of VLANs for the network |
| [**getNetworkApplianceVpnBgp()**](ApplianceApi.md#getNetworkApplianceVpnBgp) | **GET** /networks/{networkId}/appliance/vpn/bgp | Return a Hub BGP Configuration |
| [**getNetworkApplianceVpnSiteToSiteVpn()**](ApplianceApi.md#getNetworkApplianceVpnSiteToSiteVpn) | **GET** /networks/{networkId}/appliance/vpn/siteToSiteVpn | Return the site-to-site VPN settings of a network |
| [**getNetworkApplianceWarmSpare()**](ApplianceApi.md#getNetworkApplianceWarmSpare) | **GET** /networks/{networkId}/appliance/warmSpare | Return MX warm spare settings |
| [**getOrganizationApplianceDnsLocalProfiles()**](ApplianceApi.md#getOrganizationApplianceDnsLocalProfiles) | **GET** /organizations/{organizationId}/appliance/dns/local/profiles | Fetch the local DNS profiles used in the organization |
| [**getOrganizationApplianceDnsLocalProfilesAssignments()**](ApplianceApi.md#getOrganizationApplianceDnsLocalProfilesAssignments) | **GET** /organizations/{organizationId}/appliance/dns/local/profiles/assignments | Fetch the local DNS profile assignments in the organization |
| [**getOrganizationApplianceDnsLocalRecords()**](ApplianceApi.md#getOrganizationApplianceDnsLocalRecords) | **GET** /organizations/{organizationId}/appliance/dns/local/records | Fetch the DNS records used in local DNS profiles |
| [**getOrganizationApplianceDnsSplitProfiles()**](ApplianceApi.md#getOrganizationApplianceDnsSplitProfiles) | **GET** /organizations/{organizationId}/appliance/dns/split/profiles | Fetch the split DNS profiles used in the organization |
| [**getOrganizationApplianceDnsSplitProfilesAssignments()**](ApplianceApi.md#getOrganizationApplianceDnsSplitProfilesAssignments) | **GET** /organizations/{organizationId}/appliance/dns/split/profiles/assignments | Fetch the split DNS profile assignments in the organization |
| [**getOrganizationApplianceFirewallMulticastForwardingByNetwork()**](ApplianceApi.md#getOrganizationApplianceFirewallMulticastForwardingByNetwork) | **GET** /organizations/{organizationId}/appliance/firewall/multicastForwarding/byNetwork | List Static Multicasting forwarding settings for MX networks |
| [**getOrganizationApplianceSecurityEvents()**](ApplianceApi.md#getOrganizationApplianceSecurityEvents) | **GET** /organizations/{organizationId}/appliance/security/events | List the security events for an organization |
| [**getOrganizationApplianceSecurityIntrusion()**](ApplianceApi.md#getOrganizationApplianceSecurityIntrusion) | **GET** /organizations/{organizationId}/appliance/security/intrusion | Returns all supported intrusion settings for an organization |
| [**getOrganizationApplianceTrafficShapingVpnExclusionsByNetwork()**](ApplianceApi.md#getOrganizationApplianceTrafficShapingVpnExclusionsByNetwork) | **GET** /organizations/{organizationId}/appliance/trafficShaping/vpnExclusions/byNetwork | Display VPN exclusion rules for MX networks. |
| [**getOrganizationApplianceUplinkStatuses()**](ApplianceApi.md#getOrganizationApplianceUplinkStatuses) | **GET** /organizations/{organizationId}/appliance/uplink/statuses | List the uplink status of every Meraki MX and Z series appliances in the organization |
| [**getOrganizationApplianceUplinksStatusesOverview()**](ApplianceApi.md#getOrganizationApplianceUplinksStatusesOverview) | **GET** /organizations/{organizationId}/appliance/uplinks/statuses/overview | Returns an overview of uplink statuses |
| [**getOrganizationApplianceUplinksUsageByNetwork()**](ApplianceApi.md#getOrganizationApplianceUplinksUsageByNetwork) | **GET** /organizations/{organizationId}/appliance/uplinks/usage/byNetwork | Get the sent and received bytes for each uplink of all MX and Z networks within an organization |
| [**getOrganizationApplianceVpnStats()**](ApplianceApi.md#getOrganizationApplianceVpnStats) | **GET** /organizations/{organizationId}/appliance/vpn/stats | Show VPN history stat for networks in an organization |
| [**getOrganizationApplianceVpnStatuses()**](ApplianceApi.md#getOrganizationApplianceVpnStatuses) | **GET** /organizations/{organizationId}/appliance/vpn/statuses | Show VPN status for networks in an organization |
| [**getOrganizationApplianceVpnThirdPartyVPNPeers()**](ApplianceApi.md#getOrganizationApplianceVpnThirdPartyVPNPeers) | **GET** /organizations/{organizationId}/appliance/vpn/thirdPartyVPNPeers | Return the third party VPN peers for an organization |
| [**getOrganizationApplianceVpnVpnFirewallRules()**](ApplianceApi.md#getOrganizationApplianceVpnVpnFirewallRules) | **GET** /organizations/{organizationId}/appliance/vpn/vpnFirewallRules | Return the firewall rules for an organization&#39;s site-to-site VPN |
| [**swapNetworkApplianceWarmSpare()**](ApplianceApi.md#swapNetworkApplianceWarmSpare) | **POST** /networks/{networkId}/appliance/warmSpare/swap | Swap MX primary and warm spare appliances |
| [**updateDeviceApplianceRadioSettings()**](ApplianceApi.md#updateDeviceApplianceRadioSettings) | **PUT** /devices/{serial}/appliance/radio/settings | Update the radio settings of an appliance |
| [**updateDeviceApplianceUplinksSettings()**](ApplianceApi.md#updateDeviceApplianceUplinksSettings) | **PUT** /devices/{serial}/appliance/uplinks/settings | Update the uplink settings for an MX appliance |
| [**updateNetworkApplianceConnectivityMonitoringDestinations()**](ApplianceApi.md#updateNetworkApplianceConnectivityMonitoringDestinations) | **PUT** /networks/{networkId}/appliance/connectivityMonitoringDestinations | Update the connectivity testing destinations for an MX network |
| [**updateNetworkApplianceContentFiltering()**](ApplianceApi.md#updateNetworkApplianceContentFiltering) | **PUT** /networks/{networkId}/appliance/contentFiltering | Update the content filtering settings for an MX network |
| [**updateNetworkApplianceFirewallCellularFirewallRules()**](ApplianceApi.md#updateNetworkApplianceFirewallCellularFirewallRules) | **PUT** /networks/{networkId}/appliance/firewall/cellularFirewallRules | Update the cellular firewall rules of an MX network |
| [**updateNetworkApplianceFirewallFirewalledService()**](ApplianceApi.md#updateNetworkApplianceFirewallFirewalledService) | **PUT** /networks/{networkId}/appliance/firewall/firewalledServices/{service} | Updates the accessibility settings for the given service (&#39;ICMP&#39;, &#39;web&#39;, or &#39;SNMP&#39;) |
| [**updateNetworkApplianceFirewallInboundCellularFirewallRules()**](ApplianceApi.md#updateNetworkApplianceFirewallInboundCellularFirewallRules) | **PUT** /networks/{networkId}/appliance/firewall/inboundCellularFirewallRules | Update the inbound cellular firewall rules of an MX network |
| [**updateNetworkApplianceFirewallInboundFirewallRules()**](ApplianceApi.md#updateNetworkApplianceFirewallInboundFirewallRules) | **PUT** /networks/{networkId}/appliance/firewall/inboundFirewallRules | Update the inbound firewall rules of an MX network |
| [**updateNetworkApplianceFirewallL3FirewallRules()**](ApplianceApi.md#updateNetworkApplianceFirewallL3FirewallRules) | **PUT** /networks/{networkId}/appliance/firewall/l3FirewallRules | Update the L3 firewall rules of an MX network |
| [**updateNetworkApplianceFirewallL7FirewallRules()**](ApplianceApi.md#updateNetworkApplianceFirewallL7FirewallRules) | **PUT** /networks/{networkId}/appliance/firewall/l7FirewallRules | Update the MX L7 firewall rules for an MX network |
| [**updateNetworkApplianceFirewallMulticastForwarding()**](ApplianceApi.md#updateNetworkApplianceFirewallMulticastForwarding) | **PUT** /networks/{networkId}/appliance/firewall/multicastForwarding | Update static multicast forward rules for a network |
| [**updateNetworkApplianceFirewallOneToManyNatRules()**](ApplianceApi.md#updateNetworkApplianceFirewallOneToManyNatRules) | **PUT** /networks/{networkId}/appliance/firewall/oneToManyNatRules | Set the 1:Many NAT mapping rules for an MX network |
| [**updateNetworkApplianceFirewallOneToOneNatRules()**](ApplianceApi.md#updateNetworkApplianceFirewallOneToOneNatRules) | **PUT** /networks/{networkId}/appliance/firewall/oneToOneNatRules | Set the 1:1 NAT mapping rules for an MX network |
| [**updateNetworkApplianceFirewallPortForwardingRules()**](ApplianceApi.md#updateNetworkApplianceFirewallPortForwardingRules) | **PUT** /networks/{networkId}/appliance/firewall/portForwardingRules | Update the port forwarding rules for an MX network |
| [**updateNetworkApplianceFirewallSettings()**](ApplianceApi.md#updateNetworkApplianceFirewallSettings) | **PUT** /networks/{networkId}/appliance/firewall/settings | Update the firewall settings for this network |
| [**updateNetworkAppliancePort()**](ApplianceApi.md#updateNetworkAppliancePort) | **PUT** /networks/{networkId}/appliance/ports/{portId} | Update the per-port VLAN settings for a single MX port. |
| [**updateNetworkAppliancePrefixesDelegatedStatic()**](ApplianceApi.md#updateNetworkAppliancePrefixesDelegatedStatic) | **PUT** /networks/{networkId}/appliance/prefixes/delegated/statics/{staticDelegatedPrefixId} | Update a static delegated prefix from a network |
| [**updateNetworkApplianceRfProfile()**](ApplianceApi.md#updateNetworkApplianceRfProfile) | **PUT** /networks/{networkId}/appliance/rfProfiles/{rfProfileId} | Updates specified RF profile for this network |
| [**updateNetworkApplianceSdwanInternetPolicies()**](ApplianceApi.md#updateNetworkApplianceSdwanInternetPolicies) | **PUT** /networks/{networkId}/appliance/sdwan/internetPolicies | Update SDWAN internet traffic preferences for an MX network |
| [**updateNetworkApplianceSecurityIntrusion()**](ApplianceApi.md#updateNetworkApplianceSecurityIntrusion) | **PUT** /networks/{networkId}/appliance/security/intrusion | Set the supported intrusion settings for an MX network |
| [**updateNetworkApplianceSecurityMalware()**](ApplianceApi.md#updateNetworkApplianceSecurityMalware) | **PUT** /networks/{networkId}/appliance/security/malware | Set the supported malware settings for an MX network |
| [**updateNetworkApplianceSettings()**](ApplianceApi.md#updateNetworkApplianceSettings) | **PUT** /networks/{networkId}/appliance/settings | Update the appliance settings for a network |
| [**updateNetworkApplianceSingleLan()**](ApplianceApi.md#updateNetworkApplianceSingleLan) | **PUT** /networks/{networkId}/appliance/singleLan | Update single LAN configuration |
| [**updateNetworkApplianceSsid()**](ApplianceApi.md#updateNetworkApplianceSsid) | **PUT** /networks/{networkId}/appliance/ssids/{number} | Update the attributes of an MX SSID |
| [**updateNetworkApplianceStaticRoute()**](ApplianceApi.md#updateNetworkApplianceStaticRoute) | **PUT** /networks/{networkId}/appliance/staticRoutes/{staticRouteId} | Update a static route for an MX or teleworker network |
| [**updateNetworkApplianceTrafficShaping()**](ApplianceApi.md#updateNetworkApplianceTrafficShaping) | **PUT** /networks/{networkId}/appliance/trafficShaping | Update the traffic shaping settings for an MX network |
| [**updateNetworkApplianceTrafficShapingCustomPerformanceClass()**](ApplianceApi.md#updateNetworkApplianceTrafficShapingCustomPerformanceClass) | **PUT** /networks/{networkId}/appliance/trafficShaping/customPerformanceClasses/{customPerformanceClassId} | Update a custom performance class for an MX network |
| [**updateNetworkApplianceTrafficShapingRules()**](ApplianceApi.md#updateNetworkApplianceTrafficShapingRules) | **PUT** /networks/{networkId}/appliance/trafficShaping/rules | Update the traffic shaping settings rules for an MX network |
| [**updateNetworkApplianceTrafficShapingUplinkBandwidth()**](ApplianceApi.md#updateNetworkApplianceTrafficShapingUplinkBandwidth) | **PUT** /networks/{networkId}/appliance/trafficShaping/uplinkBandwidth | Updates the uplink bandwidth settings for your MX network. |
| [**updateNetworkApplianceTrafficShapingUplinkSelection()**](ApplianceApi.md#updateNetworkApplianceTrafficShapingUplinkSelection) | **PUT** /networks/{networkId}/appliance/trafficShaping/uplinkSelection | Update uplink selection settings for an MX network |
| [**updateNetworkApplianceTrafficShapingVpnExclusions()**](ApplianceApi.md#updateNetworkApplianceTrafficShapingVpnExclusions) | **PUT** /networks/{networkId}/appliance/trafficShaping/vpnExclusions | Update VPN exclusion rules for an MX network. |
| [**updateNetworkApplianceVlan()**](ApplianceApi.md#updateNetworkApplianceVlan) | **PUT** /networks/{networkId}/appliance/vlans/{vlanId} | Update a VLAN |
| [**updateNetworkApplianceVlansSettings()**](ApplianceApi.md#updateNetworkApplianceVlansSettings) | **PUT** /networks/{networkId}/appliance/vlans/settings | Enable/Disable VLANs for the given network |
| [**updateNetworkApplianceVpnBgp()**](ApplianceApi.md#updateNetworkApplianceVpnBgp) | **PUT** /networks/{networkId}/appliance/vpn/bgp | Update a Hub BGP Configuration |
| [**updateNetworkApplianceVpnSiteToSiteVpn()**](ApplianceApi.md#updateNetworkApplianceVpnSiteToSiteVpn) | **PUT** /networks/{networkId}/appliance/vpn/siteToSiteVpn | Update the site-to-site VPN settings of a network |
| [**updateNetworkApplianceWarmSpare()**](ApplianceApi.md#updateNetworkApplianceWarmSpare) | **PUT** /networks/{networkId}/appliance/warmSpare | Update MX warm spare settings |
| [**updateOrganizationApplianceDnsLocalProfile()**](ApplianceApi.md#updateOrganizationApplianceDnsLocalProfile) | **PUT** /organizations/{organizationId}/appliance/dns/local/profiles/{profileId} | Update a local DNS profile |
| [**updateOrganizationApplianceDnsLocalRecord()**](ApplianceApi.md#updateOrganizationApplianceDnsLocalRecord) | **PUT** /organizations/{organizationId}/appliance/dns/local/records/{recordId} | Updates a local DNS record |
| [**updateOrganizationApplianceDnsSplitProfile()**](ApplianceApi.md#updateOrganizationApplianceDnsSplitProfile) | **PUT** /organizations/{organizationId}/appliance/dns/split/profiles/{profileId} | Update a split DNS profile |
| [**updateOrganizationApplianceSecurityIntrusion()**](ApplianceApi.md#updateOrganizationApplianceSecurityIntrusion) | **PUT** /organizations/{organizationId}/appliance/security/intrusion | Sets supported intrusion settings for an organization |
| [**updateOrganizationApplianceVpnThirdPartyVPNPeers()**](ApplianceApi.md#updateOrganizationApplianceVpnThirdPartyVPNPeers) | **PUT** /organizations/{organizationId}/appliance/vpn/thirdPartyVPNPeers | Update the third party VPN peers for an organization |
| [**updateOrganizationApplianceVpnVpnFirewallRules()**](ApplianceApi.md#updateOrganizationApplianceVpnVpnFirewallRules) | **PUT** /organizations/{organizationId}/appliance/vpn/vpnFirewallRules | Update the firewall rules of an organization&#39;s site-to-site VPN |


## `bulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate()`

```php
bulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate($organization_id, $bulk_organization_appliance_dns_local_profiles_assignments_create_request): \Meraki\Model\BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate200Response
```

Assign the local DNS profile to networks in the organization

Assign the local DNS profile to networks in the organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$bulk_organization_appliance_dns_local_profiles_assignments_create_request = new \Meraki\Model\BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreateRequest(); // \Meraki\Model\BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreateRequest

try {
    $result = $apiInstance->bulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate($organization_id, $bulk_organization_appliance_dns_local_profiles_assignments_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->bulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **bulk_organization_appliance_dns_local_profiles_assignments_create_request** | [**\Meraki\Model\BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreateRequest**](../Model/BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreateRequest.md)|  | |

### Return type

[**\Meraki\Model\BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate200Response**](../Model/BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDeviceApplianceVmxAuthenticationToken()`

```php
createDeviceApplianceVmxAuthenticationToken($serial): \Meraki\Model\CreateDeviceApplianceVmxAuthenticationToken201Response
```

Generate a new vMX authentication token

Generate a new vMX authentication token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->createDeviceApplianceVmxAuthenticationToken($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->createDeviceApplianceVmxAuthenticationToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\CreateDeviceApplianceVmxAuthenticationToken201Response**](../Model/CreateDeviceApplianceVmxAuthenticationToken201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkAppliancePrefixesDelegatedStatic()`

```php
createNetworkAppliancePrefixesDelegatedStatic($network_id, $create_network_appliance_prefixes_delegated_static_request): object
```

Add a static delegated prefix from a network

Add a static delegated prefix from a network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_appliance_prefixes_delegated_static_request = new \Meraki\Model\CreateNetworkAppliancePrefixesDelegatedStaticRequest(); // \Meraki\Model\CreateNetworkAppliancePrefixesDelegatedStaticRequest

try {
    $result = $apiInstance->createNetworkAppliancePrefixesDelegatedStatic($network_id, $create_network_appliance_prefixes_delegated_static_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->createNetworkAppliancePrefixesDelegatedStatic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_appliance_prefixes_delegated_static_request** | [**\Meraki\Model\CreateNetworkAppliancePrefixesDelegatedStaticRequest**](../Model/CreateNetworkAppliancePrefixesDelegatedStaticRequest.md)|  | |

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

## `createNetworkApplianceRfProfile()`

```php
createNetworkApplianceRfProfile($network_id, $create_network_appliance_rf_profile_request): \Meraki\Model\GetNetworkApplianceRfProfiles200ResponseAssignedInner
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


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_appliance_rf_profile_request = new \Meraki\Model\CreateNetworkApplianceRfProfileRequest(); // \Meraki\Model\CreateNetworkApplianceRfProfileRequest

try {
    $result = $apiInstance->createNetworkApplianceRfProfile($network_id, $create_network_appliance_rf_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->createNetworkApplianceRfProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_appliance_rf_profile_request** | [**\Meraki\Model\CreateNetworkApplianceRfProfileRequest**](../Model/CreateNetworkApplianceRfProfileRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkApplianceRfProfiles200ResponseAssignedInner**](../Model/GetNetworkApplianceRfProfiles200ResponseAssignedInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkApplianceStaticRoute()`

```php
createNetworkApplianceStaticRoute($network_id, $create_network_appliance_static_route_request): \Meraki\Model\GetNetworkApplianceStaticRoutes200ResponseInner
```

Add a static route for an MX or teleworker network

Add a static route for an MX or teleworker network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_appliance_static_route_request = new \Meraki\Model\CreateNetworkApplianceStaticRouteRequest(); // \Meraki\Model\CreateNetworkApplianceStaticRouteRequest

try {
    $result = $apiInstance->createNetworkApplianceStaticRoute($network_id, $create_network_appliance_static_route_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->createNetworkApplianceStaticRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_appliance_static_route_request** | [**\Meraki\Model\CreateNetworkApplianceStaticRouteRequest**](../Model/CreateNetworkApplianceStaticRouteRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkApplianceStaticRoutes200ResponseInner**](../Model/GetNetworkApplianceStaticRoutes200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkApplianceTrafficShapingCustomPerformanceClass()`

```php
createNetworkApplianceTrafficShapingCustomPerformanceClass($network_id, $create_network_appliance_traffic_shaping_custom_performance_class_request): \Meraki\Model\GetNetworkApplianceTrafficShapingCustomPerformanceClasses200ResponseInner
```

Add a custom performance class for an MX network

Add a custom performance class for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_appliance_traffic_shaping_custom_performance_class_request = new \Meraki\Model\CreateNetworkApplianceTrafficShapingCustomPerformanceClassRequest(); // \Meraki\Model\CreateNetworkApplianceTrafficShapingCustomPerformanceClassRequest

try {
    $result = $apiInstance->createNetworkApplianceTrafficShapingCustomPerformanceClass($network_id, $create_network_appliance_traffic_shaping_custom_performance_class_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->createNetworkApplianceTrafficShapingCustomPerformanceClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_appliance_traffic_shaping_custom_performance_class_request** | [**\Meraki\Model\CreateNetworkApplianceTrafficShapingCustomPerformanceClassRequest**](../Model/CreateNetworkApplianceTrafficShapingCustomPerformanceClassRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkApplianceTrafficShapingCustomPerformanceClasses200ResponseInner**](../Model/GetNetworkApplianceTrafficShapingCustomPerformanceClasses200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetworkApplianceVlan()`

```php
createNetworkApplianceVlan($network_id, $create_network_appliance_vlan_request): \Meraki\Model\CreateNetworkApplianceVlan201Response
```

Add a VLAN

Add a VLAN

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$create_network_appliance_vlan_request = new \Meraki\Model\CreateNetworkApplianceVlanRequest(); // \Meraki\Model\CreateNetworkApplianceVlanRequest

try {
    $result = $apiInstance->createNetworkApplianceVlan($network_id, $create_network_appliance_vlan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->createNetworkApplianceVlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **create_network_appliance_vlan_request** | [**\Meraki\Model\CreateNetworkApplianceVlanRequest**](../Model/CreateNetworkApplianceVlanRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateNetworkApplianceVlan201Response**](../Model/CreateNetworkApplianceVlan201Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationApplianceDnsLocalProfile()`

```php
createOrganizationApplianceDnsLocalProfile($organization_id, $create_organization_appliance_dns_local_profile_request): \Meraki\Model\GetOrganizationApplianceDnsLocalProfiles200ResponseInner
```

Create a new local DNS profile

Create a new local DNS profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_appliance_dns_local_profile_request = new \Meraki\Model\CreateOrganizationApplianceDnsLocalProfileRequest(); // \Meraki\Model\CreateOrganizationApplianceDnsLocalProfileRequest

try {
    $result = $apiInstance->createOrganizationApplianceDnsLocalProfile($organization_id, $create_organization_appliance_dns_local_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->createOrganizationApplianceDnsLocalProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_appliance_dns_local_profile_request** | [**\Meraki\Model\CreateOrganizationApplianceDnsLocalProfileRequest**](../Model/CreateOrganizationApplianceDnsLocalProfileRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationApplianceDnsLocalProfiles200ResponseInner**](../Model/GetOrganizationApplianceDnsLocalProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationApplianceDnsLocalProfilesAssignmentsBulkDelete()`

```php
createOrganizationApplianceDnsLocalProfilesAssignmentsBulkDelete($organization_id, $create_organization_appliance_dns_local_profiles_assignments_bulk_delete_request): \Meraki\Model\BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate200Response
```

Unassign the local DNS profile to networks in the organization

Unassign the local DNS profile to networks in the organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_appliance_dns_local_profiles_assignments_bulk_delete_request = new \Meraki\Model\CreateOrganizationApplianceDnsLocalProfilesAssignmentsBulkDeleteRequest(); // \Meraki\Model\CreateOrganizationApplianceDnsLocalProfilesAssignmentsBulkDeleteRequest

try {
    $result = $apiInstance->createOrganizationApplianceDnsLocalProfilesAssignmentsBulkDelete($organization_id, $create_organization_appliance_dns_local_profiles_assignments_bulk_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->createOrganizationApplianceDnsLocalProfilesAssignmentsBulkDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_appliance_dns_local_profiles_assignments_bulk_delete_request** | [**\Meraki\Model\CreateOrganizationApplianceDnsLocalProfilesAssignmentsBulkDeleteRequest**](../Model/CreateOrganizationApplianceDnsLocalProfilesAssignmentsBulkDeleteRequest.md)|  | |

### Return type

[**\Meraki\Model\BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate200Response**](../Model/BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreate200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationApplianceDnsLocalRecord()`

```php
createOrganizationApplianceDnsLocalRecord($organization_id, $create_organization_appliance_dns_local_record_request): \Meraki\Model\GetOrganizationApplianceDnsLocalRecords200ResponseInner[]
```

Create a new local DNS record

Create a new local DNS record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_appliance_dns_local_record_request = new \Meraki\Model\CreateOrganizationApplianceDnsLocalRecordRequest(); // \Meraki\Model\CreateOrganizationApplianceDnsLocalRecordRequest

try {
    $result = $apiInstance->createOrganizationApplianceDnsLocalRecord($organization_id, $create_organization_appliance_dns_local_record_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->createOrganizationApplianceDnsLocalRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_appliance_dns_local_record_request** | [**\Meraki\Model\CreateOrganizationApplianceDnsLocalRecordRequest**](../Model/CreateOrganizationApplianceDnsLocalRecordRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationApplianceDnsLocalRecords200ResponseInner[]**](../Model/GetOrganizationApplianceDnsLocalRecords200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationApplianceDnsSplitProfile()`

```php
createOrganizationApplianceDnsSplitProfile($organization_id, $create_organization_appliance_dns_split_profile_request): \Meraki\Model\GetOrganizationApplianceDnsSplitProfiles200ResponseInner
```

Create a new split DNS profile

Create a new split DNS profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_appliance_dns_split_profile_request = new \Meraki\Model\CreateOrganizationApplianceDnsSplitProfileRequest(); // \Meraki\Model\CreateOrganizationApplianceDnsSplitProfileRequest

try {
    $result = $apiInstance->createOrganizationApplianceDnsSplitProfile($organization_id, $create_organization_appliance_dns_split_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->createOrganizationApplianceDnsSplitProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_appliance_dns_split_profile_request** | [**\Meraki\Model\CreateOrganizationApplianceDnsSplitProfileRequest**](../Model/CreateOrganizationApplianceDnsSplitProfileRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationApplianceDnsSplitProfiles200ResponseInner**](../Model/GetOrganizationApplianceDnsSplitProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate()`

```php
createOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate($organization_id, $bulk_organization_appliance_dns_local_profiles_assignments_create_request): \Meraki\Model\CreateOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate200Response
```

Assign the split DNS profile to networks in the organization

Assign the split DNS profile to networks in the organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$bulk_organization_appliance_dns_local_profiles_assignments_create_request = new \Meraki\Model\BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreateRequest(); // \Meraki\Model\BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreateRequest

try {
    $result = $apiInstance->createOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate($organization_id, $bulk_organization_appliance_dns_local_profiles_assignments_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->createOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **bulk_organization_appliance_dns_local_profiles_assignments_create_request** | [**\Meraki\Model\BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreateRequest**](../Model/BulkOrganizationApplianceDnsLocalProfilesAssignmentsCreateRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate200Response**](../Model/CreateOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationApplianceDnsSplitProfilesAssignmentsBulkDelete()`

```php
createOrganizationApplianceDnsSplitProfilesAssignmentsBulkDelete($organization_id, $create_organization_appliance_dns_local_profiles_assignments_bulk_delete_request): \Meraki\Model\CreateOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate200Response
```

Unassign the split DNS profile to networks in the organization

Unassign the split DNS profile to networks in the organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$create_organization_appliance_dns_local_profiles_assignments_bulk_delete_request = new \Meraki\Model\CreateOrganizationApplianceDnsLocalProfilesAssignmentsBulkDeleteRequest(); // \Meraki\Model\CreateOrganizationApplianceDnsLocalProfilesAssignmentsBulkDeleteRequest

try {
    $result = $apiInstance->createOrganizationApplianceDnsSplitProfilesAssignmentsBulkDelete($organization_id, $create_organization_appliance_dns_local_profiles_assignments_bulk_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->createOrganizationApplianceDnsSplitProfilesAssignmentsBulkDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **create_organization_appliance_dns_local_profiles_assignments_bulk_delete_request** | [**\Meraki\Model\CreateOrganizationApplianceDnsLocalProfilesAssignmentsBulkDeleteRequest**](../Model/CreateOrganizationApplianceDnsLocalProfilesAssignmentsBulkDeleteRequest.md)|  | |

### Return type

[**\Meraki\Model\CreateOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate200Response**](../Model/CreateOrganizationApplianceDnsSplitProfilesAssignmentsBulkCreate200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetworkAppliancePrefixesDelegatedStatic()`

```php
deleteNetworkAppliancePrefixesDelegatedStatic($network_id, $static_delegated_prefix_id)
```

Delete a static delegated prefix from a network

Delete a static delegated prefix from a network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$static_delegated_prefix_id = 'static_delegated_prefix_id_example'; // string | Static delegated prefix ID

try {
    $apiInstance->deleteNetworkAppliancePrefixesDelegatedStatic($network_id, $static_delegated_prefix_id);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->deleteNetworkAppliancePrefixesDelegatedStatic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **static_delegated_prefix_id** | **string**| Static delegated prefix ID | |

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

## `deleteNetworkApplianceRfProfile()`

```php
deleteNetworkApplianceRfProfile($network_id, $rf_profile_id)
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


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$rf_profile_id = 'rf_profile_id_example'; // string | Rf profile ID

try {
    $apiInstance->deleteNetworkApplianceRfProfile($network_id, $rf_profile_id);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->deleteNetworkApplianceRfProfile: ', $e->getMessage(), PHP_EOL;
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

## `deleteNetworkApplianceStaticRoute()`

```php
deleteNetworkApplianceStaticRoute($network_id, $static_route_id)
```

Delete a static route from an MX or teleworker network

Delete a static route from an MX or teleworker network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$static_route_id = 'static_route_id_example'; // string | Static route ID

try {
    $apiInstance->deleteNetworkApplianceStaticRoute($network_id, $static_route_id);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->deleteNetworkApplianceStaticRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **static_route_id** | **string**| Static route ID | |

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

## `deleteNetworkApplianceTrafficShapingCustomPerformanceClass()`

```php
deleteNetworkApplianceTrafficShapingCustomPerformanceClass($network_id, $custom_performance_class_id)
```

Delete a custom performance class from an MX network

Delete a custom performance class from an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$custom_performance_class_id = 'custom_performance_class_id_example'; // string | Custom performance class ID

try {
    $apiInstance->deleteNetworkApplianceTrafficShapingCustomPerformanceClass($network_id, $custom_performance_class_id);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->deleteNetworkApplianceTrafficShapingCustomPerformanceClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **custom_performance_class_id** | **string**| Custom performance class ID | |

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

## `deleteNetworkApplianceVlan()`

```php
deleteNetworkApplianceVlan($network_id, $vlan_id)
```

Delete a VLAN from a network

Delete a VLAN from a network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$vlan_id = 'vlan_id_example'; // string | Vlan ID

try {
    $apiInstance->deleteNetworkApplianceVlan($network_id, $vlan_id);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->deleteNetworkApplianceVlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **vlan_id** | **string**| Vlan ID | |

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

## `deleteOrganizationApplianceDnsLocalProfile()`

```php
deleteOrganizationApplianceDnsLocalProfile($organization_id, $profile_id)
```

Deletes a local DNS profile

Deletes a local DNS profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$profile_id = 'profile_id_example'; // string | Profile ID

try {
    $apiInstance->deleteOrganizationApplianceDnsLocalProfile($organization_id, $profile_id);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->deleteOrganizationApplianceDnsLocalProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
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

## `deleteOrganizationApplianceDnsLocalRecord()`

```php
deleteOrganizationApplianceDnsLocalRecord($organization_id, $record_id)
```

Deletes a local DNS record

Deletes a local DNS record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$record_id = 'record_id_example'; // string | Record ID

try {
    $apiInstance->deleteOrganizationApplianceDnsLocalRecord($organization_id, $record_id);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->deleteOrganizationApplianceDnsLocalRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **record_id** | **string**| Record ID | |

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

## `deleteOrganizationApplianceDnsSplitProfile()`

```php
deleteOrganizationApplianceDnsSplitProfile($organization_id, $profile_id)
```

Deletes a split DNS profile

Deletes a split DNS profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$profile_id = 'profile_id_example'; // string | Profile ID

try {
    $apiInstance->deleteOrganizationApplianceDnsSplitProfile($organization_id, $profile_id);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->deleteOrganizationApplianceDnsSplitProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
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

## `getDeviceApplianceDhcpSubnets()`

```php
getDeviceApplianceDhcpSubnets($serial): \Meraki\Model\GetDeviceApplianceDhcpSubnets200ResponseInner[]
```

Return the DHCP subnet information for an appliance

Return the DHCP subnet information for an appliance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceApplianceDhcpSubnets($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getDeviceApplianceDhcpSubnets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceApplianceDhcpSubnets200ResponseInner[]**](../Model/GetDeviceApplianceDhcpSubnets200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceAppliancePerformance()`

```php
getDeviceAppliancePerformance($serial, $t0, $t1, $timespan): \Meraki\Model\GetDeviceAppliancePerformance200Response
```

Return the performance score for a single MX

Return the performance score for a single MX. Only primary MX devices supported. If no data is available, a 204 error code is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 30 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 14 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 30 minutes and be less than or equal to 14 days. The default is 30 minutes.

try {
    $result = $apiInstance->getDeviceAppliancePerformance($serial, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getDeviceAppliancePerformance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 30 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 14 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be greater than or equal to 30 minutes and be less than or equal to 14 days. The default is 30 minutes. | [optional] |

### Return type

[**\Meraki\Model\GetDeviceAppliancePerformance200Response**](../Model/GetDeviceAppliancePerformance200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceAppliancePrefixesDelegated()`

```php
getDeviceAppliancePrefixesDelegated($serial): object[]
```

Return current delegated IPv6 prefixes on an appliance.

Return current delegated IPv6 prefixes on an appliance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceAppliancePrefixesDelegated($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getDeviceAppliancePrefixesDelegated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

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

## `getDeviceAppliancePrefixesDelegatedVlanAssignments()`

```php
getDeviceAppliancePrefixesDelegatedVlanAssignments($serial): object[]
```

Return prefixes assigned to all IPv6 enabled VLANs on an appliance.

Return prefixes assigned to all IPv6 enabled VLANs on an appliance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceAppliancePrefixesDelegatedVlanAssignments($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getDeviceAppliancePrefixesDelegatedVlanAssignments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

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

## `getDeviceApplianceRadioSettings()`

```php
getDeviceApplianceRadioSettings($serial): \Meraki\Model\GetDeviceApplianceRadioSettings200Response
```

Return the radio settings of an appliance

Return the radio settings of an appliance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceApplianceRadioSettings($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getDeviceApplianceRadioSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceApplianceRadioSettings200Response**](../Model/GetDeviceApplianceRadioSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceApplianceUplinksSettings()`

```php
getDeviceApplianceUplinksSettings($serial): \Meraki\Model\GetDeviceApplianceUplinksSettings200Response
```

Return the uplink settings for an MX appliance

Return the uplink settings for an MX appliance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial

try {
    $result = $apiInstance->getDeviceApplianceUplinksSettings($serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getDeviceApplianceUplinksSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |

### Return type

[**\Meraki\Model\GetDeviceApplianceUplinksSettings200Response**](../Model/GetDeviceApplianceUplinksSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceClientSecurityEvents()`

```php
getNetworkApplianceClientSecurityEvents($network_id, $client_id, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before, $sort_order): array<string,mixed>[]
```

List the security events for a client

List the security events for a client. Clients can be identified by a client key or either the MAC or IP depending on whether the network uses Track-by-IP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$client_id = 'client_id_example'; // string | Client ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. Data is gathered after the specified t0 value. The maximum lookback period is 791 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 791 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 791 days. The default is 31 days.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$sort_order = 'sort_order_example'; // string | Sorted order of security events based on event detection time. Order options are 'ascending' or 'descending'. Default is ascending order.

try {
    $result = $apiInstance->getNetworkApplianceClientSecurityEvents($network_id, $client_id, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before, $sort_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceClientSecurityEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **client_id** | **string**| Client ID | |
| **t0** | **string**| The beginning of the timespan for the data. Data is gathered after the specified t0 value. The maximum lookback period is 791 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 791 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 791 days. The default is 31 days. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **sort_order** | **string**| Sorted order of security events based on event detection time. Order options are &#39;ascending&#39; or &#39;descending&#39;. Default is ascending order. | [optional] |

### Return type

**array<string,mixed>[]**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceConnectivityMonitoringDestinations()`

```php
getNetworkApplianceConnectivityMonitoringDestinations($network_id): \Meraki\Model\GetNetworkApplianceConnectivityMonitoringDestinations200Response
```

Return the connectivity testing destinations for an MX network

Return the connectivity testing destinations for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceConnectivityMonitoringDestinations($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceConnectivityMonitoringDestinations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceConnectivityMonitoringDestinations200Response**](../Model/GetNetworkApplianceConnectivityMonitoringDestinations200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceContentFiltering()`

```php
getNetworkApplianceContentFiltering($network_id): object
```

Return the content filtering settings for an MX network

Return the content filtering settings for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceContentFiltering($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceContentFiltering: ', $e->getMessage(), PHP_EOL;
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

## `getNetworkApplianceContentFilteringCategories()`

```php
getNetworkApplianceContentFilteringCategories($network_id): object
```

List all available content filtering categories for an MX network

List all available content filtering categories for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceContentFilteringCategories($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceContentFilteringCategories: ', $e->getMessage(), PHP_EOL;
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

## `getNetworkApplianceFirewallCellularFirewallRules()`

```php
getNetworkApplianceFirewallCellularFirewallRules($network_id): object
```

Return the cellular firewall rules for an MX network

Return the cellular firewall rules for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceFirewallCellularFirewallRules($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceFirewallCellularFirewallRules: ', $e->getMessage(), PHP_EOL;
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

## `getNetworkApplianceFirewallFirewalledService()`

```php
getNetworkApplianceFirewallFirewalledService($network_id, $service): \Meraki\Model\GetNetworkApplianceFirewallFirewalledServices200ResponseInner
```

Return the accessibility settings of the given service ('ICMP', 'web', or 'SNMP')

Return the accessibility settings of the given service ('ICMP', 'web', or 'SNMP')

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$service = 'service_example'; // string | Service

try {
    $result = $apiInstance->getNetworkApplianceFirewallFirewalledService($network_id, $service);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceFirewallFirewalledService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **service** | **string**| Service | |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallFirewalledServices200ResponseInner**](../Model/GetNetworkApplianceFirewallFirewalledServices200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceFirewallFirewalledServices()`

```php
getNetworkApplianceFirewallFirewalledServices($network_id): \Meraki\Model\GetNetworkApplianceFirewallFirewalledServices200ResponseInner[]
```

List the appliance services and their accessibility rules

List the appliance services and their accessibility rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceFirewallFirewalledServices($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceFirewallFirewalledServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallFirewalledServices200ResponseInner[]**](../Model/GetNetworkApplianceFirewallFirewalledServices200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceFirewallInboundCellularFirewallRules()`

```php
getNetworkApplianceFirewallInboundCellularFirewallRules($network_id): \Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response
```

Return the inbound cellular firewall rules for an MX network

Return the inbound cellular firewall rules for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceFirewallInboundCellularFirewallRules($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceFirewallInboundCellularFirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response**](../Model/GetNetworkApplianceFirewallInboundCellularFirewallRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceFirewallInboundFirewallRules()`

```php
getNetworkApplianceFirewallInboundFirewallRules($network_id): \Meraki\Model\GetNetworkApplianceFirewallInboundFirewallRules200Response
```

Return the inbound firewall rules for an MX network

Return the inbound firewall rules for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceFirewallInboundFirewallRules($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceFirewallInboundFirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallInboundFirewallRules200Response**](../Model/GetNetworkApplianceFirewallInboundFirewallRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceFirewallL3FirewallRules()`

```php
getNetworkApplianceFirewallL3FirewallRules($network_id): object
```

Return the L3 firewall rules for an MX network

Return the L3 firewall rules for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceFirewallL3FirewallRules($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceFirewallL3FirewallRules: ', $e->getMessage(), PHP_EOL;
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

## `getNetworkApplianceFirewallL7FirewallRules()`

```php
getNetworkApplianceFirewallL7FirewallRules($network_id): object
```

List the MX L7 firewall rules for an MX network

List the MX L7 firewall rules for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceFirewallL7FirewallRules($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceFirewallL7FirewallRules: ', $e->getMessage(), PHP_EOL;
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

## `getNetworkApplianceFirewallL7FirewallRulesApplicationCategories()`

```php
getNetworkApplianceFirewallL7FirewallRulesApplicationCategories($network_id): \Meraki\Model\GetNetworkApplianceFirewallL7FirewallRulesApplicationCategories200Response
```

Return the L7 firewall application categories and their associated applications for an MX network

Return the L7 firewall application categories and their associated applications for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceFirewallL7FirewallRulesApplicationCategories($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceFirewallL7FirewallRulesApplicationCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallL7FirewallRulesApplicationCategories200Response**](../Model/GetNetworkApplianceFirewallL7FirewallRulesApplicationCategories200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceFirewallOneToManyNatRules()`

```php
getNetworkApplianceFirewallOneToManyNatRules($network_id): object
```

Return the 1:Many NAT mapping rules for an MX network

Return the 1:Many NAT mapping rules for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceFirewallOneToManyNatRules($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceFirewallOneToManyNatRules: ', $e->getMessage(), PHP_EOL;
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

## `getNetworkApplianceFirewallOneToOneNatRules()`

```php
getNetworkApplianceFirewallOneToOneNatRules($network_id): object
```

Return the 1:1 NAT mapping rules for an MX network

Return the 1:1 NAT mapping rules for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceFirewallOneToOneNatRules($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceFirewallOneToOneNatRules: ', $e->getMessage(), PHP_EOL;
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

## `getNetworkApplianceFirewallPortForwardingRules()`

```php
getNetworkApplianceFirewallPortForwardingRules($network_id): \Meraki\Model\GetNetworkApplianceFirewallPortForwardingRules200Response
```

Return the port forwarding rules for an MX network

Return the port forwarding rules for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceFirewallPortForwardingRules($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceFirewallPortForwardingRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallPortForwardingRules200Response**](../Model/GetNetworkApplianceFirewallPortForwardingRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceFirewallSettings()`

```php
getNetworkApplianceFirewallSettings($network_id): object
```

Return the firewall settings for this network

Return the firewall settings for this network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceFirewallSettings($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceFirewallSettings: ', $e->getMessage(), PHP_EOL;
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

## `getNetworkAppliancePort()`

```php
getNetworkAppliancePort($network_id, $port_id): \Meraki\Model\GetNetworkAppliancePorts200ResponseInner
```

Return per-port VLAN settings for a single MX port.

Return per-port VLAN settings for a single MX port.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$port_id = 'port_id_example'; // string | Port ID

try {
    $result = $apiInstance->getNetworkAppliancePort($network_id, $port_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkAppliancePort: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **port_id** | **string**| Port ID | |

### Return type

[**\Meraki\Model\GetNetworkAppliancePorts200ResponseInner**](../Model/GetNetworkAppliancePorts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkAppliancePorts()`

```php
getNetworkAppliancePorts($network_id): \Meraki\Model\GetNetworkAppliancePorts200ResponseInner[]
```

List per-port VLAN settings for all ports of a MX.

List per-port VLAN settings for all ports of a MX.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkAppliancePorts($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkAppliancePorts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkAppliancePorts200ResponseInner[]**](../Model/GetNetworkAppliancePorts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkAppliancePrefixesDelegatedStatic()`

```php
getNetworkAppliancePrefixesDelegatedStatic($network_id, $static_delegated_prefix_id): \Meraki\Model\GetNetworkAppliancePrefixesDelegatedStatics200ResponseInner
```

Return a static delegated prefix from a network

Return a static delegated prefix from a network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$static_delegated_prefix_id = 'static_delegated_prefix_id_example'; // string | Static delegated prefix ID

try {
    $result = $apiInstance->getNetworkAppliancePrefixesDelegatedStatic($network_id, $static_delegated_prefix_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkAppliancePrefixesDelegatedStatic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **static_delegated_prefix_id** | **string**| Static delegated prefix ID | |

### Return type

[**\Meraki\Model\GetNetworkAppliancePrefixesDelegatedStatics200ResponseInner**](../Model/GetNetworkAppliancePrefixesDelegatedStatics200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkAppliancePrefixesDelegatedStatics()`

```php
getNetworkAppliancePrefixesDelegatedStatics($network_id): \Meraki\Model\GetNetworkAppliancePrefixesDelegatedStatics200ResponseInner[]
```

List static delegated prefixes for a network

List static delegated prefixes for a network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkAppliancePrefixesDelegatedStatics($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkAppliancePrefixesDelegatedStatics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkAppliancePrefixesDelegatedStatics200ResponseInner[]**](../Model/GetNetworkAppliancePrefixesDelegatedStatics200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceRfProfile()`

```php
getNetworkApplianceRfProfile($network_id, $rf_profile_id): \Meraki\Model\GetNetworkApplianceRfProfiles200ResponseAssignedInner
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


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$rf_profile_id = 'rf_profile_id_example'; // string | Rf profile ID

try {
    $result = $apiInstance->getNetworkApplianceRfProfile($network_id, $rf_profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceRfProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **rf_profile_id** | **string**| Rf profile ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceRfProfiles200ResponseAssignedInner**](../Model/GetNetworkApplianceRfProfiles200ResponseAssignedInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceRfProfiles()`

```php
getNetworkApplianceRfProfiles($network_id): \Meraki\Model\GetNetworkApplianceRfProfiles200Response
```

List the RF profiles for this network

List the RF profiles for this network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceRfProfiles($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceRfProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceRfProfiles200Response**](../Model/GetNetworkApplianceRfProfiles200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceSecurityEvents()`

```php
getNetworkApplianceSecurityEvents($network_id, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before, $sort_order): array<string,mixed>[]
```

List the security events for a network

List the security events for a network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. Data is gathered after the specified t0 value. The maximum lookback period is 365 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 365 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 365 days. The default is 31 days.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$sort_order = 'sort_order_example'; // string | Sorted order of security events based on event detection time. Order options are 'ascending' or 'descending'. Default is ascending order.

try {
    $result = $apiInstance->getNetworkApplianceSecurityEvents($network_id, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before, $sort_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceSecurityEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. Data is gathered after the specified t0 value. The maximum lookback period is 365 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 365 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 365 days. The default is 31 days. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **sort_order** | **string**| Sorted order of security events based on event detection time. Order options are &#39;ascending&#39; or &#39;descending&#39;. Default is ascending order. | [optional] |

### Return type

**array<string,mixed>[]**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceSecurityIntrusion()`

```php
getNetworkApplianceSecurityIntrusion($network_id): \Meraki\Model\GetNetworkApplianceSecurityIntrusion200Response
```

Returns all supported intrusion settings for an MX network

Returns all supported intrusion settings for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceSecurityIntrusion($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceSecurityIntrusion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceSecurityIntrusion200Response**](../Model/GetNetworkApplianceSecurityIntrusion200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceSecurityMalware()`

```php
getNetworkApplianceSecurityMalware($network_id): \Meraki\Model\GetNetworkApplianceSecurityMalware200Response
```

Returns all supported malware settings for an MX network

Returns all supported malware settings for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceSecurityMalware($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceSecurityMalware: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceSecurityMalware200Response**](../Model/GetNetworkApplianceSecurityMalware200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceSettings()`

```php
getNetworkApplianceSettings($network_id): \Meraki\Model\GetNetworkApplianceSettings200Response
```

Return the appliance settings for a network

Return the appliance settings for a network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceSettings($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceSettings200Response**](../Model/GetNetworkApplianceSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceSingleLan()`

```php
getNetworkApplianceSingleLan($network_id): \Meraki\Model\GetNetworkApplianceSingleLan200Response
```

Return single LAN configuration

Return single LAN configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceSingleLan($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceSingleLan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceSingleLan200Response**](../Model/GetNetworkApplianceSingleLan200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceSsid()`

```php
getNetworkApplianceSsid($network_id, $number): \Meraki\Model\GetNetworkApplianceSsids200ResponseInner
```

Return a single MX SSID

Return a single MX SSID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number

try {
    $result = $apiInstance->getNetworkApplianceSsid($network_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceSsid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |

### Return type

[**\Meraki\Model\GetNetworkApplianceSsids200ResponseInner**](../Model/GetNetworkApplianceSsids200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceSsids()`

```php
getNetworkApplianceSsids($network_id): \Meraki\Model\GetNetworkApplianceSsids200ResponseInner[]
```

List the MX SSIDs in a network

List the MX SSIDs in a network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceSsids($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceSsids: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceSsids200ResponseInner[]**](../Model/GetNetworkApplianceSsids200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceStaticRoute()`

```php
getNetworkApplianceStaticRoute($network_id, $static_route_id): \Meraki\Model\GetNetworkApplianceStaticRoutes200ResponseInner
```

Return a static route for an MX or teleworker network

Return a static route for an MX or teleworker network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$static_route_id = 'static_route_id_example'; // string | Static route ID

try {
    $result = $apiInstance->getNetworkApplianceStaticRoute($network_id, $static_route_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceStaticRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **static_route_id** | **string**| Static route ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceStaticRoutes200ResponseInner**](../Model/GetNetworkApplianceStaticRoutes200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceStaticRoutes()`

```php
getNetworkApplianceStaticRoutes($network_id): \Meraki\Model\GetNetworkApplianceStaticRoutes200ResponseInner[]
```

List the static routes for an MX or teleworker network

List the static routes for an MX or teleworker network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceStaticRoutes($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceStaticRoutes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceStaticRoutes200ResponseInner[]**](../Model/GetNetworkApplianceStaticRoutes200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceTrafficShaping()`

```php
getNetworkApplianceTrafficShaping($network_id): object
```

Display the traffic shaping settings for an MX network

Display the traffic shaping settings for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceTrafficShaping($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceTrafficShaping: ', $e->getMessage(), PHP_EOL;
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

## `getNetworkApplianceTrafficShapingCustomPerformanceClass()`

```php
getNetworkApplianceTrafficShapingCustomPerformanceClass($network_id, $custom_performance_class_id): \Meraki\Model\GetNetworkApplianceTrafficShapingCustomPerformanceClasses200ResponseInner
```

Return a custom performance class for an MX network

Return a custom performance class for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$custom_performance_class_id = 'custom_performance_class_id_example'; // string | Custom performance class ID

try {
    $result = $apiInstance->getNetworkApplianceTrafficShapingCustomPerformanceClass($network_id, $custom_performance_class_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceTrafficShapingCustomPerformanceClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **custom_performance_class_id** | **string**| Custom performance class ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceTrafficShapingCustomPerformanceClasses200ResponseInner**](../Model/GetNetworkApplianceTrafficShapingCustomPerformanceClasses200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceTrafficShapingCustomPerformanceClasses()`

```php
getNetworkApplianceTrafficShapingCustomPerformanceClasses($network_id): \Meraki\Model\GetNetworkApplianceTrafficShapingCustomPerformanceClasses200ResponseInner[]
```

List all custom performance classes for an MX network

List all custom performance classes for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceTrafficShapingCustomPerformanceClasses($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceTrafficShapingCustomPerformanceClasses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceTrafficShapingCustomPerformanceClasses200ResponseInner[]**](../Model/GetNetworkApplianceTrafficShapingCustomPerformanceClasses200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceTrafficShapingRules()`

```php
getNetworkApplianceTrafficShapingRules($network_id): object
```

Display the traffic shaping settings rules for an MX network

Display the traffic shaping settings rules for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceTrafficShapingRules($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceTrafficShapingRules: ', $e->getMessage(), PHP_EOL;
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

## `getNetworkApplianceTrafficShapingUplinkBandwidth()`

```php
getNetworkApplianceTrafficShapingUplinkBandwidth($network_id): \Meraki\Model\GetNetworkApplianceTrafficShapingUplinkBandwidth200Response
```

Returns the uplink bandwidth limits for your MX network

Returns the uplink bandwidth limits for your MX network. This may not reflect the affected device's hardware capabilities.  For more information on your device's hardware capabilities, please consult our MX Family Datasheet - [https://meraki.cisco.com/product-collateral/mx-family-datasheet/?file]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceTrafficShapingUplinkBandwidth($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceTrafficShapingUplinkBandwidth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceTrafficShapingUplinkBandwidth200Response**](../Model/GetNetworkApplianceTrafficShapingUplinkBandwidth200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceTrafficShapingUplinkSelection()`

```php
getNetworkApplianceTrafficShapingUplinkSelection($network_id): \Meraki\Model\GetNetworkApplianceTrafficShapingUplinkSelection200Response
```

Show uplink selection settings for an MX network

Show uplink selection settings for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceTrafficShapingUplinkSelection($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceTrafficShapingUplinkSelection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceTrafficShapingUplinkSelection200Response**](../Model/GetNetworkApplianceTrafficShapingUplinkSelection200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceUplinksUsageHistory()`

```php
getNetworkApplianceUplinksUsageHistory($network_id, $t0, $t1, $timespan, $resolution): \Meraki\Model\GetNetworkApplianceUplinksUsageHistory200ResponseInner[]
```

Get the sent and received bytes for each uplink of a network.

Get the sent and received bytes for each uplink of a network.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 365 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 10 minutes.
$resolution = 56; // int | The time resolution in seconds for returned data. The valid resolutions are: 60, 300, 600, 1800, 3600, 86400. The default is 60.

try {
    $result = $apiInstance->getNetworkApplianceUplinksUsageHistory($network_id, $t0, $t1, $timespan, $resolution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceUplinksUsageHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 365 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 10 minutes. | [optional] |
| **resolution** | **int**| The time resolution in seconds for returned data. The valid resolutions are: 60, 300, 600, 1800, 3600, 86400. The default is 60. | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceUplinksUsageHistory200ResponseInner[]**](../Model/GetNetworkApplianceUplinksUsageHistory200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceVlan()`

```php
getNetworkApplianceVlan($network_id, $vlan_id): \Meraki\Model\GetNetworkApplianceVlans200ResponseInner
```

Return a VLAN

Return a VLAN

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$vlan_id = 'vlan_id_example'; // string | Vlan ID

try {
    $result = $apiInstance->getNetworkApplianceVlan($network_id, $vlan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceVlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **vlan_id** | **string**| Vlan ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceVlans200ResponseInner**](../Model/GetNetworkApplianceVlans200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceVlans()`

```php
getNetworkApplianceVlans($network_id): \Meraki\Model\GetNetworkApplianceVlans200ResponseInner[]
```

List the VLANs for an MX network

List the VLANs for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceVlans($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceVlans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceVlans200ResponseInner[]**](../Model/GetNetworkApplianceVlans200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceVlansSettings()`

```php
getNetworkApplianceVlansSettings($network_id): \Meraki\Model\GetNetworkApplianceVlansSettings200Response
```

Returns the enabled status of VLANs for the network

Returns the enabled status of VLANs for the network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceVlansSettings($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceVlansSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceVlansSettings200Response**](../Model/GetNetworkApplianceVlansSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceVpnBgp()`

```php
getNetworkApplianceVpnBgp($network_id): \Meraki\Model\GetNetworkApplianceVpnBgp200Response
```

Return a Hub BGP Configuration

Return a Hub BGP Configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceVpnBgp($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceVpnBgp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceVpnBgp200Response**](../Model/GetNetworkApplianceVpnBgp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceVpnSiteToSiteVpn()`

```php
getNetworkApplianceVpnSiteToSiteVpn($network_id): \Meraki\Model\GetNetworkApplianceVpnSiteToSiteVpn200Response
```

Return the site-to-site VPN settings of a network

Return the site-to-site VPN settings of a network. Only valid for MX networks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceVpnSiteToSiteVpn($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceVpnSiteToSiteVpn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceVpnSiteToSiteVpn200Response**](../Model/GetNetworkApplianceVpnSiteToSiteVpn200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkApplianceWarmSpare()`

```php
getNetworkApplianceWarmSpare($network_id): \Meraki\Model\GetNetworkApplianceWarmSpare200Response
```

Return MX warm spare settings

Return MX warm spare settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->getNetworkApplianceWarmSpare($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getNetworkApplianceWarmSpare: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceWarmSpare200Response**](../Model/GetNetworkApplianceWarmSpare200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationApplianceDnsLocalProfiles()`

```php
getOrganizationApplianceDnsLocalProfiles($organization_id, $profile_ids): \Meraki\Model\GetOrganizationApplianceDnsLocalProfiles200ResponseInner[]
```

Fetch the local DNS profiles used in the organization

Fetch the local DNS profiles used in the organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$profile_ids = array('profile_ids_example'); // string[] | Optional parameter to filter the results by profile IDs

try {
    $result = $apiInstance->getOrganizationApplianceDnsLocalProfiles($organization_id, $profile_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getOrganizationApplianceDnsLocalProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **profile_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the results by profile IDs | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApplianceDnsLocalProfiles200ResponseInner[]**](../Model/GetOrganizationApplianceDnsLocalProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationApplianceDnsLocalProfilesAssignments()`

```php
getOrganizationApplianceDnsLocalProfilesAssignments($organization_id, $profile_ids, $network_ids): \Meraki\Model\GetOrganizationApplianceDnsLocalProfilesAssignments200Response
```

Fetch the local DNS profile assignments in the organization

Fetch the local DNS profile assignments in the organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$profile_ids = array('profile_ids_example'); // string[] | Optional parameter to filter the results by profile IDs
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter the results by network IDs

try {
    $result = $apiInstance->getOrganizationApplianceDnsLocalProfilesAssignments($organization_id, $profile_ids, $network_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getOrganizationApplianceDnsLocalProfilesAssignments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **profile_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the results by profile IDs | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the results by network IDs | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApplianceDnsLocalProfilesAssignments200Response**](../Model/GetOrganizationApplianceDnsLocalProfilesAssignments200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationApplianceDnsLocalRecords()`

```php
getOrganizationApplianceDnsLocalRecords($organization_id, $profile_ids): \Meraki\Model\GetOrganizationApplianceDnsLocalRecords200ResponseInner[]
```

Fetch the DNS records used in local DNS profiles

Fetch the DNS records used in local DNS profiles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$profile_ids = array('profile_ids_example'); // string[] | Optional parameter to filter the results by profile IDs

try {
    $result = $apiInstance->getOrganizationApplianceDnsLocalRecords($organization_id, $profile_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getOrganizationApplianceDnsLocalRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **profile_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the results by profile IDs | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApplianceDnsLocalRecords200ResponseInner[]**](../Model/GetOrganizationApplianceDnsLocalRecords200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationApplianceDnsSplitProfiles()`

```php
getOrganizationApplianceDnsSplitProfiles($organization_id, $profile_ids): \Meraki\Model\GetOrganizationApplianceDnsSplitProfiles200ResponseInner[]
```

Fetch the split DNS profiles used in the organization

Fetch the split DNS profiles used in the organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$profile_ids = array('profile_ids_example'); // string[] | Optional parameter to filter the results by profile IDs

try {
    $result = $apiInstance->getOrganizationApplianceDnsSplitProfiles($organization_id, $profile_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getOrganizationApplianceDnsSplitProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **profile_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the results by profile IDs | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApplianceDnsSplitProfiles200ResponseInner[]**](../Model/GetOrganizationApplianceDnsSplitProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationApplianceDnsSplitProfilesAssignments()`

```php
getOrganizationApplianceDnsSplitProfilesAssignments($organization_id, $profile_ids, $network_ids): \Meraki\Model\GetOrganizationApplianceDnsSplitProfilesAssignments200Response
```

Fetch the split DNS profile assignments in the organization

Fetch the split DNS profile assignments in the organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$profile_ids = array('profile_ids_example'); // string[] | Optional parameter to filter the results by profile IDs
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter the results by network IDs

try {
    $result = $apiInstance->getOrganizationApplianceDnsSplitProfilesAssignments($organization_id, $profile_ids, $network_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getOrganizationApplianceDnsSplitProfilesAssignments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **profile_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the results by profile IDs | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the results by network IDs | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApplianceDnsSplitProfilesAssignments200Response**](../Model/GetOrganizationApplianceDnsSplitProfilesAssignments200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationApplianceFirewallMulticastForwardingByNetwork()`

```php
getOrganizationApplianceFirewallMulticastForwardingByNetwork($organization_id, $per_page, $starting_after, $ending_before, $network_ids): \Meraki\Model\GetOrganizationApplianceFirewallMulticastForwardingByNetwork200Response
```

List Static Multicasting forwarding settings for MX networks

List Static Multicasting forwarding settings for MX networks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter the results by network IDs

try {
    $result = $apiInstance->getOrganizationApplianceFirewallMulticastForwardingByNetwork($organization_id, $per_page, $starting_after, $ending_before, $network_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getOrganizationApplianceFirewallMulticastForwardingByNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 1000. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the results by network IDs | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApplianceFirewallMulticastForwardingByNetwork200Response**](../Model/GetOrganizationApplianceFirewallMulticastForwardingByNetwork200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationApplianceSecurityEvents()`

```php
getOrganizationApplianceSecurityEvents($organization_id, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before, $sort_order): array<string,mixed>[]
```

List the security events for an organization

List the security events for an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. Data is gathered after the specified t0 value. The maximum lookback period is 365 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 365 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 365 days. The default is 31 days.
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$sort_order = 'sort_order_example'; // string | Sorted order of security events based on event detection time. Order options are 'ascending' or 'descending'. Default is ascending order.

try {
    $result = $apiInstance->getOrganizationApplianceSecurityEvents($organization_id, $t0, $t1, $timespan, $per_page, $starting_after, $ending_before, $sort_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getOrganizationApplianceSecurityEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **t0** | **string**| The beginning of the timespan for the data. Data is gathered after the specified t0 value. The maximum lookback period is 365 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 365 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 365 days. The default is 31 days. | [optional] |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 100. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **sort_order** | **string**| Sorted order of security events based on event detection time. Order options are &#39;ascending&#39; or &#39;descending&#39;. Default is ascending order. | [optional] |

### Return type

**array<string,mixed>[]**

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationApplianceSecurityIntrusion()`

```php
getOrganizationApplianceSecurityIntrusion($organization_id): object
```

Returns all supported intrusion settings for an organization

Returns all supported intrusion settings for an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationApplianceSecurityIntrusion($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getOrganizationApplianceSecurityIntrusion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

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

## `getOrganizationApplianceTrafficShapingVpnExclusionsByNetwork()`

```php
getOrganizationApplianceTrafficShapingVpnExclusionsByNetwork($organization_id, $per_page, $starting_after, $ending_before, $network_ids): \Meraki\Model\GetOrganizationApplianceTrafficShapingVpnExclusionsByNetwork200Response
```

Display VPN exclusion rules for MX networks.

Display VPN exclusion rules for MX networks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 1000. Default is 50.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | Optional parameter to filter the results by network IDs

try {
    $result = $apiInstance->getOrganizationApplianceTrafficShapingVpnExclusionsByNetwork($organization_id, $per_page, $starting_after, $ending_before, $network_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getOrganizationApplianceTrafficShapingVpnExclusionsByNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 1000. Default is 50. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| Optional parameter to filter the results by network IDs | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApplianceTrafficShapingVpnExclusionsByNetwork200Response**](../Model/GetOrganizationApplianceTrafficShapingVpnExclusionsByNetwork200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationApplianceUplinkStatuses()`

```php
getOrganizationApplianceUplinkStatuses($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $serials, $iccids): \Meraki\Model\GetOrganizationApplianceUplinkStatuses200ResponseInner[]
```

List the uplink status of every Meraki MX and Z series appliances in the organization

List the uplink status of every Meraki MX and Z series appliances in the organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
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
    $result = $apiInstance->getOrganizationApplianceUplinkStatuses($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $serials, $iccids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getOrganizationApplianceUplinkStatuses: ', $e->getMessage(), PHP_EOL;
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

[**\Meraki\Model\GetOrganizationApplianceUplinkStatuses200ResponseInner[]**](../Model/GetOrganizationApplianceUplinkStatuses200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationApplianceUplinksStatusesOverview()`

```php
getOrganizationApplianceUplinksStatusesOverview($organization_id): \Meraki\Model\GetOrganizationApplianceUplinksStatusesOverview200Response
```

Returns an overview of uplink statuses

Returns an overview of uplink statuses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationApplianceUplinksStatusesOverview($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getOrganizationApplianceUplinksStatusesOverview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationApplianceUplinksStatusesOverview200Response**](../Model/GetOrganizationApplianceUplinksStatusesOverview200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationApplianceUplinksUsageByNetwork()`

```php
getOrganizationApplianceUplinksUsageByNetwork($organization_id, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationApplianceUplinksUsageByNetwork200ResponseInner[]
```

Get the sent and received bytes for each uplink of all MX and Z networks within an organization

Get the sent and received bytes for each uplink of all MX and Z networks within an organization. If more than one device was active during the specified timespan, then the sent and received bytes will be aggregated by interface.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 365 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 14 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 14 days. The default is 1 day.

try {
    $result = $apiInstance->getOrganizationApplianceUplinksUsageByNetwork($organization_id, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getOrganizationApplianceUplinksUsageByNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 365 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 14 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 14 days. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApplianceUplinksUsageByNetwork200ResponseInner[]**](../Model/GetOrganizationApplianceUplinksUsageByNetwork200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationApplianceVpnStats()`

```php
getOrganizationApplianceVpnStats($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $t0, $t1, $timespan): \Meraki\Model\GetOrganizationApplianceVpnStats200ResponseInner[]
```

Show VPN history stat for networks in an organization

Show VPN history stat for networks in an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 300. Default is 300.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | A list of Meraki network IDs to filter results to contain only specified networks. E.g.: networkIds[]=N_12345678&networkIds[]=L_3456
$t0 = 't0_example'; // string | The beginning of the timespan for the data. The maximum lookback period is 31 days from today.
$t1 = 't1_example'; // string | The end of the timespan for the data. t1 can be a maximum of 31 days after t0.
$timespan = 3.4; // float | The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day.

try {
    $result = $apiInstance->getOrganizationApplianceVpnStats($organization_id, $per_page, $starting_after, $ending_before, $network_ids, $t0, $t1, $timespan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getOrganizationApplianceVpnStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 300. Default is 300. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| A list of Meraki network IDs to filter results to contain only specified networks. E.g.: networkIds[]&#x3D;N_12345678&amp;networkIds[]&#x3D;L_3456 | [optional] |
| **t0** | **string**| The beginning of the timespan for the data. The maximum lookback period is 31 days from today. | [optional] |
| **t1** | **string**| The end of the timespan for the data. t1 can be a maximum of 31 days after t0. | [optional] |
| **timespan** | **float**| The timespan for which the information will be fetched. If specifying timespan, do not specify parameters t0 and t1. The value must be in seconds and be less than or equal to 31 days. The default is 1 day. | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApplianceVpnStats200ResponseInner[]**](../Model/GetOrganizationApplianceVpnStats200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationApplianceVpnStatuses()`

```php
getOrganizationApplianceVpnStatuses($organization_id, $per_page, $starting_after, $ending_before, $network_ids): \Meraki\Model\GetOrganizationApplianceVpnStatuses200Response
```

Show VPN status for networks in an organization

Show VPN status for networks in an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$per_page = 56; // int | The number of entries per page returned. Acceptable range is 3 - 300. Default is 300.
$starting_after = 'starting_after_example'; // string | A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$ending_before = 'ending_before_example'; // string | A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it.
$network_ids = array('network_ids_example'); // string[] | A list of Meraki network IDs to filter results to contain only specified networks. E.g.: networkIds[]=N_12345678&networkIds[]=L_3456

try {
    $result = $apiInstance->getOrganizationApplianceVpnStatuses($organization_id, $per_page, $starting_after, $ending_before, $network_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getOrganizationApplianceVpnStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **per_page** | **int**| The number of entries per page returned. Acceptable range is 3 - 300. Default is 300. | [optional] |
| **starting_after** | **string**| A token used by the server to indicate the start of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **ending_before** | **string**| A token used by the server to indicate the end of the page. Often this is a timestamp or an ID but it is not limited to those. This parameter should not be defined by client applications. The link for the first, last, prev, or next page in the HTTP Link header should define it. | [optional] |
| **network_ids** | [**string[]**](../Model/string.md)| A list of Meraki network IDs to filter results to contain only specified networks. E.g.: networkIds[]&#x3D;N_12345678&amp;networkIds[]&#x3D;L_3456 | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApplianceVpnStatuses200Response**](../Model/GetOrganizationApplianceVpnStatuses200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationApplianceVpnThirdPartyVPNPeers()`

```php
getOrganizationApplianceVpnThirdPartyVPNPeers($organization_id): \Meraki\Model\GetOrganizationApplianceVpnThirdPartyVPNPeers200Response
```

Return the third party VPN peers for an organization

Return the third party VPN peers for an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationApplianceVpnThirdPartyVPNPeers($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getOrganizationApplianceVpnThirdPartyVPNPeers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetOrganizationApplianceVpnThirdPartyVPNPeers200Response**](../Model/GetOrganizationApplianceVpnThirdPartyVPNPeers200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationApplianceVpnVpnFirewallRules()`

```php
getOrganizationApplianceVpnVpnFirewallRules($organization_id): \Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response
```

Return the firewall rules for an organization's site-to-site VPN

Return the firewall rules for an organization's site-to-site VPN

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID

try {
    $result = $apiInstance->getOrganizationApplianceVpnVpnFirewallRules($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->getOrganizationApplianceVpnVpnFirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response**](../Model/GetNetworkApplianceFirewallInboundCellularFirewallRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `swapNetworkApplianceWarmSpare()`

```php
swapNetworkApplianceWarmSpare($network_id): \Meraki\Model\GetNetworkApplianceWarmSpare200Response
```

Swap MX primary and warm spare appliances

Swap MX primary and warm spare appliances

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID

try {
    $result = $apiInstance->swapNetworkApplianceWarmSpare($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->swapNetworkApplianceWarmSpare: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |

### Return type

[**\Meraki\Model\GetNetworkApplianceWarmSpare200Response**](../Model/GetNetworkApplianceWarmSpare200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceApplianceRadioSettings()`

```php
updateDeviceApplianceRadioSettings($serial, $update_device_appliance_radio_settings_request): \Meraki\Model\GetDeviceApplianceRadioSettings200Response
```

Update the radio settings of an appliance

Update the radio settings of an appliance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_appliance_radio_settings_request = new \Meraki\Model\UpdateDeviceApplianceRadioSettingsRequest(); // \Meraki\Model\UpdateDeviceApplianceRadioSettingsRequest

try {
    $result = $apiInstance->updateDeviceApplianceRadioSettings($serial, $update_device_appliance_radio_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateDeviceApplianceRadioSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_appliance_radio_settings_request** | [**\Meraki\Model\UpdateDeviceApplianceRadioSettingsRequest**](../Model/UpdateDeviceApplianceRadioSettingsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetDeviceApplianceRadioSettings200Response**](../Model/GetDeviceApplianceRadioSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceApplianceUplinksSettings()`

```php
updateDeviceApplianceUplinksSettings($serial, $update_device_appliance_uplinks_settings_request): \Meraki\Model\GetDeviceApplianceUplinksSettings200Response
```

Update the uplink settings for an MX appliance

Update the uplink settings for an MX appliance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial = 'serial_example'; // string | Serial
$update_device_appliance_uplinks_settings_request = new \Meraki\Model\UpdateDeviceApplianceUplinksSettingsRequest(); // \Meraki\Model\UpdateDeviceApplianceUplinksSettingsRequest

try {
    $result = $apiInstance->updateDeviceApplianceUplinksSettings($serial, $update_device_appliance_uplinks_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateDeviceApplianceUplinksSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serial** | **string**| Serial | |
| **update_device_appliance_uplinks_settings_request** | [**\Meraki\Model\UpdateDeviceApplianceUplinksSettingsRequest**](../Model/UpdateDeviceApplianceUplinksSettingsRequest.md)|  | |

### Return type

[**\Meraki\Model\GetDeviceApplianceUplinksSettings200Response**](../Model/GetDeviceApplianceUplinksSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceConnectivityMonitoringDestinations()`

```php
updateNetworkApplianceConnectivityMonitoringDestinations($network_id, $update_network_appliance_connectivity_monitoring_destinations_request): \Meraki\Model\GetNetworkApplianceConnectivityMonitoringDestinations200Response
```

Update the connectivity testing destinations for an MX network

Update the connectivity testing destinations for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_connectivity_monitoring_destinations_request = new \Meraki\Model\UpdateNetworkApplianceConnectivityMonitoringDestinationsRequest(); // \Meraki\Model\UpdateNetworkApplianceConnectivityMonitoringDestinationsRequest

try {
    $result = $apiInstance->updateNetworkApplianceConnectivityMonitoringDestinations($network_id, $update_network_appliance_connectivity_monitoring_destinations_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceConnectivityMonitoringDestinations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_connectivity_monitoring_destinations_request** | [**\Meraki\Model\UpdateNetworkApplianceConnectivityMonitoringDestinationsRequest**](../Model/UpdateNetworkApplianceConnectivityMonitoringDestinationsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceConnectivityMonitoringDestinations200Response**](../Model/GetNetworkApplianceConnectivityMonitoringDestinations200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceContentFiltering()`

```php
updateNetworkApplianceContentFiltering($network_id, $update_network_appliance_content_filtering_request): object
```

Update the content filtering settings for an MX network

Update the content filtering settings for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_content_filtering_request = new \Meraki\Model\UpdateNetworkApplianceContentFilteringRequest(); // \Meraki\Model\UpdateNetworkApplianceContentFilteringRequest

try {
    $result = $apiInstance->updateNetworkApplianceContentFiltering($network_id, $update_network_appliance_content_filtering_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceContentFiltering: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_content_filtering_request** | [**\Meraki\Model\UpdateNetworkApplianceContentFilteringRequest**](../Model/UpdateNetworkApplianceContentFilteringRequest.md)|  | [optional] |

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

## `updateNetworkApplianceFirewallCellularFirewallRules()`

```php
updateNetworkApplianceFirewallCellularFirewallRules($network_id, $update_network_appliance_firewall_cellular_firewall_rules_request): object
```

Update the cellular firewall rules of an MX network

Update the cellular firewall rules of an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_firewall_cellular_firewall_rules_request = new \Meraki\Model\UpdateNetworkApplianceFirewallCellularFirewallRulesRequest(); // \Meraki\Model\UpdateNetworkApplianceFirewallCellularFirewallRulesRequest

try {
    $result = $apiInstance->updateNetworkApplianceFirewallCellularFirewallRules($network_id, $update_network_appliance_firewall_cellular_firewall_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceFirewallCellularFirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_firewall_cellular_firewall_rules_request** | [**\Meraki\Model\UpdateNetworkApplianceFirewallCellularFirewallRulesRequest**](../Model/UpdateNetworkApplianceFirewallCellularFirewallRulesRequest.md)|  | [optional] |

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

## `updateNetworkApplianceFirewallFirewalledService()`

```php
updateNetworkApplianceFirewallFirewalledService($network_id, $service, $update_network_appliance_firewall_firewalled_service_request): \Meraki\Model\GetNetworkApplianceFirewallFirewalledServices200ResponseInner
```

Updates the accessibility settings for the given service ('ICMP', 'web', or 'SNMP')

Updates the accessibility settings for the given service ('ICMP', 'web', or 'SNMP')

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$service = 'service_example'; // string | Service
$update_network_appliance_firewall_firewalled_service_request = new \Meraki\Model\UpdateNetworkApplianceFirewallFirewalledServiceRequest(); // \Meraki\Model\UpdateNetworkApplianceFirewallFirewalledServiceRequest

try {
    $result = $apiInstance->updateNetworkApplianceFirewallFirewalledService($network_id, $service, $update_network_appliance_firewall_firewalled_service_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceFirewallFirewalledService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **service** | **string**| Service | |
| **update_network_appliance_firewall_firewalled_service_request** | [**\Meraki\Model\UpdateNetworkApplianceFirewallFirewalledServiceRequest**](../Model/UpdateNetworkApplianceFirewallFirewalledServiceRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallFirewalledServices200ResponseInner**](../Model/GetNetworkApplianceFirewallFirewalledServices200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceFirewallInboundCellularFirewallRules()`

```php
updateNetworkApplianceFirewallInboundCellularFirewallRules($network_id, $update_network_appliance_firewall_inbound_cellular_firewall_rules_request): \Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response
```

Update the inbound cellular firewall rules of an MX network

Update the inbound cellular firewall rules of an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_firewall_inbound_cellular_firewall_rules_request = new \Meraki\Model\UpdateNetworkApplianceFirewallInboundCellularFirewallRulesRequest(); // \Meraki\Model\UpdateNetworkApplianceFirewallInboundCellularFirewallRulesRequest

try {
    $result = $apiInstance->updateNetworkApplianceFirewallInboundCellularFirewallRules($network_id, $update_network_appliance_firewall_inbound_cellular_firewall_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceFirewallInboundCellularFirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_firewall_inbound_cellular_firewall_rules_request** | [**\Meraki\Model\UpdateNetworkApplianceFirewallInboundCellularFirewallRulesRequest**](../Model/UpdateNetworkApplianceFirewallInboundCellularFirewallRulesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response**](../Model/GetNetworkApplianceFirewallInboundCellularFirewallRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceFirewallInboundFirewallRules()`

```php
updateNetworkApplianceFirewallInboundFirewallRules($network_id, $update_network_appliance_firewall_inbound_firewall_rules_request): \Meraki\Model\GetNetworkApplianceFirewallInboundFirewallRules200Response
```

Update the inbound firewall rules of an MX network

Update the inbound firewall rules of an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_firewall_inbound_firewall_rules_request = new \Meraki\Model\UpdateNetworkApplianceFirewallInboundFirewallRulesRequest(); // \Meraki\Model\UpdateNetworkApplianceFirewallInboundFirewallRulesRequest

try {
    $result = $apiInstance->updateNetworkApplianceFirewallInboundFirewallRules($network_id, $update_network_appliance_firewall_inbound_firewall_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceFirewallInboundFirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_firewall_inbound_firewall_rules_request** | [**\Meraki\Model\UpdateNetworkApplianceFirewallInboundFirewallRulesRequest**](../Model/UpdateNetworkApplianceFirewallInboundFirewallRulesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallInboundFirewallRules200Response**](../Model/GetNetworkApplianceFirewallInboundFirewallRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceFirewallL3FirewallRules()`

```php
updateNetworkApplianceFirewallL3FirewallRules($network_id, $update_network_appliance_firewall_l3_firewall_rules_request): object
```

Update the L3 firewall rules of an MX network

Update the L3 firewall rules of an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_firewall_l3_firewall_rules_request = new \Meraki\Model\UpdateNetworkApplianceFirewallL3FirewallRulesRequest(); // \Meraki\Model\UpdateNetworkApplianceFirewallL3FirewallRulesRequest

try {
    $result = $apiInstance->updateNetworkApplianceFirewallL3FirewallRules($network_id, $update_network_appliance_firewall_l3_firewall_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceFirewallL3FirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_firewall_l3_firewall_rules_request** | [**\Meraki\Model\UpdateNetworkApplianceFirewallL3FirewallRulesRequest**](../Model/UpdateNetworkApplianceFirewallL3FirewallRulesRequest.md)|  | [optional] |

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

## `updateNetworkApplianceFirewallL7FirewallRules()`

```php
updateNetworkApplianceFirewallL7FirewallRules($network_id, $update_network_appliance_firewall_l7_firewall_rules_request): object
```

Update the MX L7 firewall rules for an MX network

Update the MX L7 firewall rules for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_firewall_l7_firewall_rules_request = new \Meraki\Model\UpdateNetworkApplianceFirewallL7FirewallRulesRequest(); // \Meraki\Model\UpdateNetworkApplianceFirewallL7FirewallRulesRequest

try {
    $result = $apiInstance->updateNetworkApplianceFirewallL7FirewallRules($network_id, $update_network_appliance_firewall_l7_firewall_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceFirewallL7FirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_firewall_l7_firewall_rules_request** | [**\Meraki\Model\UpdateNetworkApplianceFirewallL7FirewallRulesRequest**](../Model/UpdateNetworkApplianceFirewallL7FirewallRulesRequest.md)|  | [optional] |

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

## `updateNetworkApplianceFirewallMulticastForwarding()`

```php
updateNetworkApplianceFirewallMulticastForwarding($network_id, $update_network_appliance_firewall_multicast_forwarding_request): \Meraki\Model\UpdateNetworkApplianceFirewallMulticastForwarding200Response
```

Update static multicast forward rules for a network

Update static multicast forward rules for a network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_firewall_multicast_forwarding_request = new \Meraki\Model\UpdateNetworkApplianceFirewallMulticastForwardingRequest(); // \Meraki\Model\UpdateNetworkApplianceFirewallMulticastForwardingRequest

try {
    $result = $apiInstance->updateNetworkApplianceFirewallMulticastForwarding($network_id, $update_network_appliance_firewall_multicast_forwarding_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceFirewallMulticastForwarding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_firewall_multicast_forwarding_request** | [**\Meraki\Model\UpdateNetworkApplianceFirewallMulticastForwardingRequest**](../Model/UpdateNetworkApplianceFirewallMulticastForwardingRequest.md)|  | |

### Return type

[**\Meraki\Model\UpdateNetworkApplianceFirewallMulticastForwarding200Response**](../Model/UpdateNetworkApplianceFirewallMulticastForwarding200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceFirewallOneToManyNatRules()`

```php
updateNetworkApplianceFirewallOneToManyNatRules($network_id, $update_network_appliance_firewall_one_to_many_nat_rules_request): object
```

Set the 1:Many NAT mapping rules for an MX network

Set the 1:Many NAT mapping rules for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_firewall_one_to_many_nat_rules_request = new \Meraki\Model\UpdateNetworkApplianceFirewallOneToManyNatRulesRequest(); // \Meraki\Model\UpdateNetworkApplianceFirewallOneToManyNatRulesRequest

try {
    $result = $apiInstance->updateNetworkApplianceFirewallOneToManyNatRules($network_id, $update_network_appliance_firewall_one_to_many_nat_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceFirewallOneToManyNatRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_firewall_one_to_many_nat_rules_request** | [**\Meraki\Model\UpdateNetworkApplianceFirewallOneToManyNatRulesRequest**](../Model/UpdateNetworkApplianceFirewallOneToManyNatRulesRequest.md)|  | |

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

## `updateNetworkApplianceFirewallOneToOneNatRules()`

```php
updateNetworkApplianceFirewallOneToOneNatRules($network_id, $update_network_appliance_firewall_one_to_one_nat_rules_request): object
```

Set the 1:1 NAT mapping rules for an MX network

Set the 1:1 NAT mapping rules for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_firewall_one_to_one_nat_rules_request = new \Meraki\Model\UpdateNetworkApplianceFirewallOneToOneNatRulesRequest(); // \Meraki\Model\UpdateNetworkApplianceFirewallOneToOneNatRulesRequest

try {
    $result = $apiInstance->updateNetworkApplianceFirewallOneToOneNatRules($network_id, $update_network_appliance_firewall_one_to_one_nat_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceFirewallOneToOneNatRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_firewall_one_to_one_nat_rules_request** | [**\Meraki\Model\UpdateNetworkApplianceFirewallOneToOneNatRulesRequest**](../Model/UpdateNetworkApplianceFirewallOneToOneNatRulesRequest.md)|  | |

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

## `updateNetworkApplianceFirewallPortForwardingRules()`

```php
updateNetworkApplianceFirewallPortForwardingRules($network_id, $update_network_appliance_firewall_port_forwarding_rules_request): \Meraki\Model\GetNetworkApplianceFirewallPortForwardingRules200Response
```

Update the port forwarding rules for an MX network

Update the port forwarding rules for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_firewall_port_forwarding_rules_request = new \Meraki\Model\UpdateNetworkApplianceFirewallPortForwardingRulesRequest(); // \Meraki\Model\UpdateNetworkApplianceFirewallPortForwardingRulesRequest

try {
    $result = $apiInstance->updateNetworkApplianceFirewallPortForwardingRules($network_id, $update_network_appliance_firewall_port_forwarding_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceFirewallPortForwardingRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_firewall_port_forwarding_rules_request** | [**\Meraki\Model\UpdateNetworkApplianceFirewallPortForwardingRulesRequest**](../Model/UpdateNetworkApplianceFirewallPortForwardingRulesRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallPortForwardingRules200Response**](../Model/GetNetworkApplianceFirewallPortForwardingRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceFirewallSettings()`

```php
updateNetworkApplianceFirewallSettings($network_id, $update_network_appliance_firewall_settings_request): object
```

Update the firewall settings for this network

Update the firewall settings for this network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_firewall_settings_request = new \Meraki\Model\UpdateNetworkApplianceFirewallSettingsRequest(); // \Meraki\Model\UpdateNetworkApplianceFirewallSettingsRequest

try {
    $result = $apiInstance->updateNetworkApplianceFirewallSettings($network_id, $update_network_appliance_firewall_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceFirewallSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_firewall_settings_request** | [**\Meraki\Model\UpdateNetworkApplianceFirewallSettingsRequest**](../Model/UpdateNetworkApplianceFirewallSettingsRequest.md)|  | [optional] |

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

## `updateNetworkAppliancePort()`

```php
updateNetworkAppliancePort($network_id, $port_id, $update_network_appliance_port_request): \Meraki\Model\GetNetworkAppliancePorts200ResponseInner
```

Update the per-port VLAN settings for a single MX port.

Update the per-port VLAN settings for a single MX port.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$port_id = 'port_id_example'; // string | Port ID
$update_network_appliance_port_request = new \Meraki\Model\UpdateNetworkAppliancePortRequest(); // \Meraki\Model\UpdateNetworkAppliancePortRequest

try {
    $result = $apiInstance->updateNetworkAppliancePort($network_id, $port_id, $update_network_appliance_port_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkAppliancePort: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **port_id** | **string**| Port ID | |
| **update_network_appliance_port_request** | [**\Meraki\Model\UpdateNetworkAppliancePortRequest**](../Model/UpdateNetworkAppliancePortRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkAppliancePorts200ResponseInner**](../Model/GetNetworkAppliancePorts200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkAppliancePrefixesDelegatedStatic()`

```php
updateNetworkAppliancePrefixesDelegatedStatic($network_id, $static_delegated_prefix_id, $update_network_appliance_prefixes_delegated_static_request): object
```

Update a static delegated prefix from a network

Update a static delegated prefix from a network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$static_delegated_prefix_id = 'static_delegated_prefix_id_example'; // string | Static delegated prefix ID
$update_network_appliance_prefixes_delegated_static_request = new \Meraki\Model\UpdateNetworkAppliancePrefixesDelegatedStaticRequest(); // \Meraki\Model\UpdateNetworkAppliancePrefixesDelegatedStaticRequest

try {
    $result = $apiInstance->updateNetworkAppliancePrefixesDelegatedStatic($network_id, $static_delegated_prefix_id, $update_network_appliance_prefixes_delegated_static_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkAppliancePrefixesDelegatedStatic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **static_delegated_prefix_id** | **string**| Static delegated prefix ID | |
| **update_network_appliance_prefixes_delegated_static_request** | [**\Meraki\Model\UpdateNetworkAppliancePrefixesDelegatedStaticRequest**](../Model/UpdateNetworkAppliancePrefixesDelegatedStaticRequest.md)|  | [optional] |

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

## `updateNetworkApplianceRfProfile()`

```php
updateNetworkApplianceRfProfile($network_id, $rf_profile_id, $update_network_appliance_rf_profile_request): \Meraki\Model\GetNetworkApplianceRfProfiles200ResponseAssignedInner
```

Updates specified RF profile for this network

Updates specified RF profile for this network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$rf_profile_id = 'rf_profile_id_example'; // string | Rf profile ID
$update_network_appliance_rf_profile_request = new \Meraki\Model\UpdateNetworkApplianceRfProfileRequest(); // \Meraki\Model\UpdateNetworkApplianceRfProfileRequest

try {
    $result = $apiInstance->updateNetworkApplianceRfProfile($network_id, $rf_profile_id, $update_network_appliance_rf_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceRfProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **rf_profile_id** | **string**| Rf profile ID | |
| **update_network_appliance_rf_profile_request** | [**\Meraki\Model\UpdateNetworkApplianceRfProfileRequest**](../Model/UpdateNetworkApplianceRfProfileRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceRfProfiles200ResponseAssignedInner**](../Model/GetNetworkApplianceRfProfiles200ResponseAssignedInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceSdwanInternetPolicies()`

```php
updateNetworkApplianceSdwanInternetPolicies($network_id, $update_network_appliance_sdwan_internet_policies_request): \Meraki\Model\UpdateNetworkApplianceSdwanInternetPolicies200Response
```

Update SDWAN internet traffic preferences for an MX network

Update SDWAN internet traffic preferences for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_sdwan_internet_policies_request = new \Meraki\Model\UpdateNetworkApplianceSdwanInternetPoliciesRequest(); // \Meraki\Model\UpdateNetworkApplianceSdwanInternetPoliciesRequest

try {
    $result = $apiInstance->updateNetworkApplianceSdwanInternetPolicies($network_id, $update_network_appliance_sdwan_internet_policies_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceSdwanInternetPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_sdwan_internet_policies_request** | [**\Meraki\Model\UpdateNetworkApplianceSdwanInternetPoliciesRequest**](../Model/UpdateNetworkApplianceSdwanInternetPoliciesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\UpdateNetworkApplianceSdwanInternetPolicies200Response**](../Model/UpdateNetworkApplianceSdwanInternetPolicies200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceSecurityIntrusion()`

```php
updateNetworkApplianceSecurityIntrusion($network_id, $update_network_appliance_security_intrusion_request): \Meraki\Model\GetNetworkApplianceSecurityIntrusion200Response
```

Set the supported intrusion settings for an MX network

Set the supported intrusion settings for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_security_intrusion_request = new \Meraki\Model\UpdateNetworkApplianceSecurityIntrusionRequest(); // \Meraki\Model\UpdateNetworkApplianceSecurityIntrusionRequest

try {
    $result = $apiInstance->updateNetworkApplianceSecurityIntrusion($network_id, $update_network_appliance_security_intrusion_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceSecurityIntrusion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_security_intrusion_request** | [**\Meraki\Model\UpdateNetworkApplianceSecurityIntrusionRequest**](../Model/UpdateNetworkApplianceSecurityIntrusionRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceSecurityIntrusion200Response**](../Model/GetNetworkApplianceSecurityIntrusion200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceSecurityMalware()`

```php
updateNetworkApplianceSecurityMalware($network_id, $update_network_appliance_security_malware_request): \Meraki\Model\GetNetworkApplianceSecurityMalware200Response
```

Set the supported malware settings for an MX network

Set the supported malware settings for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_security_malware_request = new \Meraki\Model\UpdateNetworkApplianceSecurityMalwareRequest(); // \Meraki\Model\UpdateNetworkApplianceSecurityMalwareRequest

try {
    $result = $apiInstance->updateNetworkApplianceSecurityMalware($network_id, $update_network_appliance_security_malware_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceSecurityMalware: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_security_malware_request** | [**\Meraki\Model\UpdateNetworkApplianceSecurityMalwareRequest**](../Model/UpdateNetworkApplianceSecurityMalwareRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkApplianceSecurityMalware200Response**](../Model/GetNetworkApplianceSecurityMalware200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceSettings()`

```php
updateNetworkApplianceSettings($network_id, $update_network_appliance_settings_request): \Meraki\Model\GetNetworkApplianceSettings200Response
```

Update the appliance settings for a network

Update the appliance settings for a network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_settings_request = new \Meraki\Model\UpdateNetworkApplianceSettingsRequest(); // \Meraki\Model\UpdateNetworkApplianceSettingsRequest

try {
    $result = $apiInstance->updateNetworkApplianceSettings($network_id, $update_network_appliance_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_settings_request** | [**\Meraki\Model\UpdateNetworkApplianceSettingsRequest**](../Model/UpdateNetworkApplianceSettingsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceSettings200Response**](../Model/GetNetworkApplianceSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceSingleLan()`

```php
updateNetworkApplianceSingleLan($network_id, $update_network_appliance_single_lan_request): \Meraki\Model\GetNetworkApplianceSingleLan200Response
```

Update single LAN configuration

Update single LAN configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_single_lan_request = new \Meraki\Model\UpdateNetworkApplianceSingleLanRequest(); // \Meraki\Model\UpdateNetworkApplianceSingleLanRequest

try {
    $result = $apiInstance->updateNetworkApplianceSingleLan($network_id, $update_network_appliance_single_lan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceSingleLan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_single_lan_request** | [**\Meraki\Model\UpdateNetworkApplianceSingleLanRequest**](../Model/UpdateNetworkApplianceSingleLanRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceSingleLan200Response**](../Model/GetNetworkApplianceSingleLan200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceSsid()`

```php
updateNetworkApplianceSsid($network_id, $number, $update_network_appliance_ssid_request): \Meraki\Model\GetNetworkApplianceSsids200ResponseInner
```

Update the attributes of an MX SSID

Update the attributes of an MX SSID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$number = 'number_example'; // string | Number
$update_network_appliance_ssid_request = new \Meraki\Model\UpdateNetworkApplianceSsidRequest(); // \Meraki\Model\UpdateNetworkApplianceSsidRequest

try {
    $result = $apiInstance->updateNetworkApplianceSsid($network_id, $number, $update_network_appliance_ssid_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceSsid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **number** | **string**| Number | |
| **update_network_appliance_ssid_request** | [**\Meraki\Model\UpdateNetworkApplianceSsidRequest**](../Model/UpdateNetworkApplianceSsidRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceSsids200ResponseInner**](../Model/GetNetworkApplianceSsids200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceStaticRoute()`

```php
updateNetworkApplianceStaticRoute($network_id, $static_route_id, $update_network_appliance_static_route_request): \Meraki\Model\GetNetworkApplianceStaticRoutes200ResponseInner
```

Update a static route for an MX or teleworker network

Update a static route for an MX or teleworker network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$static_route_id = 'static_route_id_example'; // string | Static route ID
$update_network_appliance_static_route_request = new \Meraki\Model\UpdateNetworkApplianceStaticRouteRequest(); // \Meraki\Model\UpdateNetworkApplianceStaticRouteRequest

try {
    $result = $apiInstance->updateNetworkApplianceStaticRoute($network_id, $static_route_id, $update_network_appliance_static_route_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceStaticRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **static_route_id** | **string**| Static route ID | |
| **update_network_appliance_static_route_request** | [**\Meraki\Model\UpdateNetworkApplianceStaticRouteRequest**](../Model/UpdateNetworkApplianceStaticRouteRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceStaticRoutes200ResponseInner**](../Model/GetNetworkApplianceStaticRoutes200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceTrafficShaping()`

```php
updateNetworkApplianceTrafficShaping($network_id, $update_network_appliance_traffic_shaping_request): object
```

Update the traffic shaping settings for an MX network

Update the traffic shaping settings for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_traffic_shaping_request = new \Meraki\Model\UpdateNetworkApplianceTrafficShapingRequest(); // \Meraki\Model\UpdateNetworkApplianceTrafficShapingRequest

try {
    $result = $apiInstance->updateNetworkApplianceTrafficShaping($network_id, $update_network_appliance_traffic_shaping_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceTrafficShaping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_traffic_shaping_request** | [**\Meraki\Model\UpdateNetworkApplianceTrafficShapingRequest**](../Model/UpdateNetworkApplianceTrafficShapingRequest.md)|  | [optional] |

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

## `updateNetworkApplianceTrafficShapingCustomPerformanceClass()`

```php
updateNetworkApplianceTrafficShapingCustomPerformanceClass($network_id, $custom_performance_class_id, $update_network_appliance_traffic_shaping_custom_performance_class_request): \Meraki\Model\GetNetworkApplianceTrafficShapingCustomPerformanceClasses200ResponseInner
```

Update a custom performance class for an MX network

Update a custom performance class for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$custom_performance_class_id = 'custom_performance_class_id_example'; // string | Custom performance class ID
$update_network_appliance_traffic_shaping_custom_performance_class_request = new \Meraki\Model\UpdateNetworkApplianceTrafficShapingCustomPerformanceClassRequest(); // \Meraki\Model\UpdateNetworkApplianceTrafficShapingCustomPerformanceClassRequest

try {
    $result = $apiInstance->updateNetworkApplianceTrafficShapingCustomPerformanceClass($network_id, $custom_performance_class_id, $update_network_appliance_traffic_shaping_custom_performance_class_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceTrafficShapingCustomPerformanceClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **custom_performance_class_id** | **string**| Custom performance class ID | |
| **update_network_appliance_traffic_shaping_custom_performance_class_request** | [**\Meraki\Model\UpdateNetworkApplianceTrafficShapingCustomPerformanceClassRequest**](../Model/UpdateNetworkApplianceTrafficShapingCustomPerformanceClassRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceTrafficShapingCustomPerformanceClasses200ResponseInner**](../Model/GetNetworkApplianceTrafficShapingCustomPerformanceClasses200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceTrafficShapingRules()`

```php
updateNetworkApplianceTrafficShapingRules($network_id, $update_network_appliance_traffic_shaping_rules_request): object
```

Update the traffic shaping settings rules for an MX network

Update the traffic shaping settings rules for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_traffic_shaping_rules_request = new \Meraki\Model\UpdateNetworkApplianceTrafficShapingRulesRequest(); // \Meraki\Model\UpdateNetworkApplianceTrafficShapingRulesRequest

try {
    $result = $apiInstance->updateNetworkApplianceTrafficShapingRules($network_id, $update_network_appliance_traffic_shaping_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceTrafficShapingRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_traffic_shaping_rules_request** | [**\Meraki\Model\UpdateNetworkApplianceTrafficShapingRulesRequest**](../Model/UpdateNetworkApplianceTrafficShapingRulesRequest.md)|  | [optional] |

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

## `updateNetworkApplianceTrafficShapingUplinkBandwidth()`

```php
updateNetworkApplianceTrafficShapingUplinkBandwidth($network_id, $update_network_appliance_traffic_shaping_uplink_bandwidth_request): object
```

Updates the uplink bandwidth settings for your MX network.

Updates the uplink bandwidth settings for your MX network.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_traffic_shaping_uplink_bandwidth_request = new \Meraki\Model\UpdateNetworkApplianceTrafficShapingUplinkBandwidthRequest(); // \Meraki\Model\UpdateNetworkApplianceTrafficShapingUplinkBandwidthRequest

try {
    $result = $apiInstance->updateNetworkApplianceTrafficShapingUplinkBandwidth($network_id, $update_network_appliance_traffic_shaping_uplink_bandwidth_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceTrafficShapingUplinkBandwidth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_traffic_shaping_uplink_bandwidth_request** | [**\Meraki\Model\UpdateNetworkApplianceTrafficShapingUplinkBandwidthRequest**](../Model/UpdateNetworkApplianceTrafficShapingUplinkBandwidthRequest.md)|  | [optional] |

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

## `updateNetworkApplianceTrafficShapingUplinkSelection()`

```php
updateNetworkApplianceTrafficShapingUplinkSelection($network_id, $update_network_appliance_traffic_shaping_uplink_selection_request): \Meraki\Model\GetNetworkApplianceTrafficShapingUplinkSelection200Response
```

Update uplink selection settings for an MX network

Update uplink selection settings for an MX network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_traffic_shaping_uplink_selection_request = new \Meraki\Model\UpdateNetworkApplianceTrafficShapingUplinkSelectionRequest(); // \Meraki\Model\UpdateNetworkApplianceTrafficShapingUplinkSelectionRequest

try {
    $result = $apiInstance->updateNetworkApplianceTrafficShapingUplinkSelection($network_id, $update_network_appliance_traffic_shaping_uplink_selection_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceTrafficShapingUplinkSelection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_traffic_shaping_uplink_selection_request** | [**\Meraki\Model\UpdateNetworkApplianceTrafficShapingUplinkSelectionRequest**](../Model/UpdateNetworkApplianceTrafficShapingUplinkSelectionRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceTrafficShapingUplinkSelection200Response**](../Model/GetNetworkApplianceTrafficShapingUplinkSelection200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceTrafficShapingVpnExclusions()`

```php
updateNetworkApplianceTrafficShapingVpnExclusions($network_id, $update_network_appliance_traffic_shaping_vpn_exclusions_request): \Meraki\Model\UpdateNetworkApplianceTrafficShapingVpnExclusions200Response
```

Update VPN exclusion rules for an MX network.

Update VPN exclusion rules for an MX network.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_traffic_shaping_vpn_exclusions_request = new \Meraki\Model\UpdateNetworkApplianceTrafficShapingVpnExclusionsRequest(); // \Meraki\Model\UpdateNetworkApplianceTrafficShapingVpnExclusionsRequest

try {
    $result = $apiInstance->updateNetworkApplianceTrafficShapingVpnExclusions($network_id, $update_network_appliance_traffic_shaping_vpn_exclusions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceTrafficShapingVpnExclusions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_traffic_shaping_vpn_exclusions_request** | [**\Meraki\Model\UpdateNetworkApplianceTrafficShapingVpnExclusionsRequest**](../Model/UpdateNetworkApplianceTrafficShapingVpnExclusionsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\UpdateNetworkApplianceTrafficShapingVpnExclusions200Response**](../Model/UpdateNetworkApplianceTrafficShapingVpnExclusions200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceVlan()`

```php
updateNetworkApplianceVlan($network_id, $vlan_id, $update_network_appliance_vlan_request): \Meraki\Model\GetNetworkApplianceVlans200ResponseInner
```

Update a VLAN

Update a VLAN

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$vlan_id = 'vlan_id_example'; // string | Vlan ID
$update_network_appliance_vlan_request = new \Meraki\Model\UpdateNetworkApplianceVlanRequest(); // \Meraki\Model\UpdateNetworkApplianceVlanRequest

try {
    $result = $apiInstance->updateNetworkApplianceVlan($network_id, $vlan_id, $update_network_appliance_vlan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceVlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **vlan_id** | **string**| Vlan ID | |
| **update_network_appliance_vlan_request** | [**\Meraki\Model\UpdateNetworkApplianceVlanRequest**](../Model/UpdateNetworkApplianceVlanRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceVlans200ResponseInner**](../Model/GetNetworkApplianceVlans200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceVlansSettings()`

```php
updateNetworkApplianceVlansSettings($network_id, $update_network_appliance_vlans_settings_request): \Meraki\Model\GetNetworkApplianceVlansSettings200Response
```

Enable/Disable VLANs for the given network

Enable/Disable VLANs for the given network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_vlans_settings_request = new \Meraki\Model\UpdateNetworkApplianceVlansSettingsRequest(); // \Meraki\Model\UpdateNetworkApplianceVlansSettingsRequest

try {
    $result = $apiInstance->updateNetworkApplianceVlansSettings($network_id, $update_network_appliance_vlans_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceVlansSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_vlans_settings_request** | [**\Meraki\Model\UpdateNetworkApplianceVlansSettingsRequest**](../Model/UpdateNetworkApplianceVlansSettingsRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceVlansSettings200Response**](../Model/GetNetworkApplianceVlansSettings200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceVpnBgp()`

```php
updateNetworkApplianceVpnBgp($network_id, $update_network_appliance_vpn_bgp_request): \Meraki\Model\GetNetworkApplianceVpnBgp200Response
```

Update a Hub BGP Configuration

Update a Hub BGP Configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_vpn_bgp_request = new \Meraki\Model\UpdateNetworkApplianceVpnBgpRequest(); // \Meraki\Model\UpdateNetworkApplianceVpnBgpRequest

try {
    $result = $apiInstance->updateNetworkApplianceVpnBgp($network_id, $update_network_appliance_vpn_bgp_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceVpnBgp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_vpn_bgp_request** | [**\Meraki\Model\UpdateNetworkApplianceVpnBgpRequest**](../Model/UpdateNetworkApplianceVpnBgpRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkApplianceVpnBgp200Response**](../Model/GetNetworkApplianceVpnBgp200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceVpnSiteToSiteVpn()`

```php
updateNetworkApplianceVpnSiteToSiteVpn($network_id, $update_network_appliance_vpn_site_to_site_vpn_request): \Meraki\Model\GetNetworkApplianceVpnSiteToSiteVpn200Response
```

Update the site-to-site VPN settings of a network

Update the site-to-site VPN settings of a network. Only valid for MX networks in NAT mode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_vpn_site_to_site_vpn_request = new \Meraki\Model\UpdateNetworkApplianceVpnSiteToSiteVpnRequest(); // \Meraki\Model\UpdateNetworkApplianceVpnSiteToSiteVpnRequest

try {
    $result = $apiInstance->updateNetworkApplianceVpnSiteToSiteVpn($network_id, $update_network_appliance_vpn_site_to_site_vpn_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceVpnSiteToSiteVpn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_vpn_site_to_site_vpn_request** | [**\Meraki\Model\UpdateNetworkApplianceVpnSiteToSiteVpnRequest**](../Model/UpdateNetworkApplianceVpnSiteToSiteVpnRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkApplianceVpnSiteToSiteVpn200Response**](../Model/GetNetworkApplianceVpnSiteToSiteVpn200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNetworkApplianceWarmSpare()`

```php
updateNetworkApplianceWarmSpare($network_id, $update_network_appliance_warm_spare_request): \Meraki\Model\GetNetworkApplianceWarmSpare200Response
```

Update MX warm spare settings

Update MX warm spare settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string | Network ID
$update_network_appliance_warm_spare_request = new \Meraki\Model\UpdateNetworkApplianceWarmSpareRequest(); // \Meraki\Model\UpdateNetworkApplianceWarmSpareRequest

try {
    $result = $apiInstance->updateNetworkApplianceWarmSpare($network_id, $update_network_appliance_warm_spare_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateNetworkApplianceWarmSpare: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**| Network ID | |
| **update_network_appliance_warm_spare_request** | [**\Meraki\Model\UpdateNetworkApplianceWarmSpareRequest**](../Model/UpdateNetworkApplianceWarmSpareRequest.md)|  | |

### Return type

[**\Meraki\Model\GetNetworkApplianceWarmSpare200Response**](../Model/GetNetworkApplianceWarmSpare200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationApplianceDnsLocalProfile()`

```php
updateOrganizationApplianceDnsLocalProfile($organization_id, $profile_id, $create_organization_appliance_dns_local_profile_request): \Meraki\Model\GetOrganizationApplianceDnsLocalProfiles200ResponseInner
```

Update a local DNS profile

Update a local DNS profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$profile_id = 'profile_id_example'; // string | Profile ID
$create_organization_appliance_dns_local_profile_request = new \Meraki\Model\CreateOrganizationApplianceDnsLocalProfileRequest(); // \Meraki\Model\CreateOrganizationApplianceDnsLocalProfileRequest

try {
    $result = $apiInstance->updateOrganizationApplianceDnsLocalProfile($organization_id, $profile_id, $create_organization_appliance_dns_local_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateOrganizationApplianceDnsLocalProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **profile_id** | **string**| Profile ID | |
| **create_organization_appliance_dns_local_profile_request** | [**\Meraki\Model\CreateOrganizationApplianceDnsLocalProfileRequest**](../Model/CreateOrganizationApplianceDnsLocalProfileRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationApplianceDnsLocalProfiles200ResponseInner**](../Model/GetOrganizationApplianceDnsLocalProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationApplianceDnsLocalRecord()`

```php
updateOrganizationApplianceDnsLocalRecord($organization_id, $record_id, $update_organization_appliance_dns_local_record_request): \Meraki\Model\GetOrganizationApplianceDnsLocalRecords200ResponseInner
```

Updates a local DNS record

Updates a local DNS record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$record_id = 'record_id_example'; // string | Record ID
$update_organization_appliance_dns_local_record_request = new \Meraki\Model\UpdateOrganizationApplianceDnsLocalRecordRequest(); // \Meraki\Model\UpdateOrganizationApplianceDnsLocalRecordRequest

try {
    $result = $apiInstance->updateOrganizationApplianceDnsLocalRecord($organization_id, $record_id, $update_organization_appliance_dns_local_record_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateOrganizationApplianceDnsLocalRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **record_id** | **string**| Record ID | |
| **update_organization_appliance_dns_local_record_request** | [**\Meraki\Model\UpdateOrganizationApplianceDnsLocalRecordRequest**](../Model/UpdateOrganizationApplianceDnsLocalRecordRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApplianceDnsLocalRecords200ResponseInner**](../Model/GetOrganizationApplianceDnsLocalRecords200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationApplianceDnsSplitProfile()`

```php
updateOrganizationApplianceDnsSplitProfile($organization_id, $profile_id, $update_organization_appliance_dns_split_profile_request): \Meraki\Model\GetOrganizationApplianceDnsSplitProfiles200ResponseInner
```

Update a split DNS profile

Update a split DNS profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$profile_id = 'profile_id_example'; // string | Profile ID
$update_organization_appliance_dns_split_profile_request = new \Meraki\Model\UpdateOrganizationApplianceDnsSplitProfileRequest(); // \Meraki\Model\UpdateOrganizationApplianceDnsSplitProfileRequest

try {
    $result = $apiInstance->updateOrganizationApplianceDnsSplitProfile($organization_id, $profile_id, $update_organization_appliance_dns_split_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateOrganizationApplianceDnsSplitProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **profile_id** | **string**| Profile ID | |
| **update_organization_appliance_dns_split_profile_request** | [**\Meraki\Model\UpdateOrganizationApplianceDnsSplitProfileRequest**](../Model/UpdateOrganizationApplianceDnsSplitProfileRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetOrganizationApplianceDnsSplitProfiles200ResponseInner**](../Model/GetOrganizationApplianceDnsSplitProfiles200ResponseInner.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationApplianceSecurityIntrusion()`

```php
updateOrganizationApplianceSecurityIntrusion($organization_id, $update_organization_appliance_security_intrusion_request): object
```

Sets supported intrusion settings for an organization

Sets supported intrusion settings for an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$update_organization_appliance_security_intrusion_request = new \Meraki\Model\UpdateOrganizationApplianceSecurityIntrusionRequest(); // \Meraki\Model\UpdateOrganizationApplianceSecurityIntrusionRequest

try {
    $result = $apiInstance->updateOrganizationApplianceSecurityIntrusion($organization_id, $update_organization_appliance_security_intrusion_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateOrganizationApplianceSecurityIntrusion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **update_organization_appliance_security_intrusion_request** | [**\Meraki\Model\UpdateOrganizationApplianceSecurityIntrusionRequest**](../Model/UpdateOrganizationApplianceSecurityIntrusionRequest.md)|  | |

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

## `updateOrganizationApplianceVpnThirdPartyVPNPeers()`

```php
updateOrganizationApplianceVpnThirdPartyVPNPeers($organization_id, $update_organization_appliance_vpn_third_party_vpn_peers_request): \Meraki\Model\GetOrganizationApplianceVpnThirdPartyVPNPeers200Response
```

Update the third party VPN peers for an organization

Update the third party VPN peers for an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$update_organization_appliance_vpn_third_party_vpn_peers_request = new \Meraki\Model\UpdateOrganizationApplianceVpnThirdPartyVPNPeersRequest(); // \Meraki\Model\UpdateOrganizationApplianceVpnThirdPartyVPNPeersRequest

try {
    $result = $apiInstance->updateOrganizationApplianceVpnThirdPartyVPNPeers($organization_id, $update_organization_appliance_vpn_third_party_vpn_peers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateOrganizationApplianceVpnThirdPartyVPNPeers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **update_organization_appliance_vpn_third_party_vpn_peers_request** | [**\Meraki\Model\UpdateOrganizationApplianceVpnThirdPartyVPNPeersRequest**](../Model/UpdateOrganizationApplianceVpnThirdPartyVPNPeersRequest.md)|  | |

### Return type

[**\Meraki\Model\GetOrganizationApplianceVpnThirdPartyVPNPeers200Response**](../Model/GetOrganizationApplianceVpnThirdPartyVPNPeers200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationApplianceVpnVpnFirewallRules()`

```php
updateOrganizationApplianceVpnVpnFirewallRules($organization_id, $update_organization_appliance_vpn_vpn_firewall_rules_request): \Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response
```

Update the firewall rules of an organization's site-to-site VPN

Update the firewall rules of an organization's site-to-site VPN

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\ApplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$update_organization_appliance_vpn_vpn_firewall_rules_request = new \Meraki\Model\UpdateOrganizationApplianceVpnVpnFirewallRulesRequest(); // \Meraki\Model\UpdateOrganizationApplianceVpnVpnFirewallRulesRequest

try {
    $result = $apiInstance->updateOrganizationApplianceVpnVpnFirewallRules($organization_id, $update_organization_appliance_vpn_vpn_firewall_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplianceApi->updateOrganizationApplianceVpnVpnFirewallRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **update_organization_appliance_vpn_vpn_firewall_rules_request** | [**\Meraki\Model\UpdateOrganizationApplianceVpnVpnFirewallRulesRequest**](../Model/UpdateOrganizationApplianceVpnVpnFirewallRulesRequest.md)|  | [optional] |

### Return type

[**\Meraki\Model\GetNetworkApplianceFirewallInboundCellularFirewallRules200Response**](../Model/GetNetworkApplianceFirewallInboundCellularFirewallRules200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
