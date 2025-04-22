# # GetNetworkSwitchAccessPolicies200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the access policy | [optional]
**radius_servers** | [**\Meraki\Model\GetNetworkSwitchAccessPolicies200ResponseInnerRadiusServersInner[]**](GetNetworkSwitchAccessPolicies200ResponseInnerRadiusServersInner.md) | List of RADIUS servers to require connecting devices to authenticate against before granting network access | [optional]
**radius** | [**\Meraki\Model\GetNetworkSwitchAccessPolicies200ResponseInnerRadius**](GetNetworkSwitchAccessPolicies200ResponseInnerRadius.md) |  | [optional]
**guest_port_bouncing** | **bool** | If enabled, Meraki devices will periodically send access-request messages to these RADIUS servers | [optional]
**radius_testing_enabled** | **bool** | If enabled, Meraki devices will periodically send access-request messages to these RADIUS servers | [optional]
**radius_coa_support_enabled** | **bool** | Change of authentication for RADIUS re-authentication and disconnection | [optional]
**radius_accounting_enabled** | **bool** | Enable to send start, interim-update and stop messages to a configured RADIUS accounting server for tracking connected clients | [optional]
**radius_accounting_servers** | [**\Meraki\Model\GetNetworkSwitchAccessPolicies200ResponseInnerRadiusAccountingServersInner[]**](GetNetworkSwitchAccessPolicies200ResponseInnerRadiusAccountingServersInner.md) | List of RADIUS accounting servers to require connecting devices to authenticate against before granting network access | [optional]
**radius_group_attribute** | **string** | Acceptable values are &#x60;\&quot;\&quot;&#x60; for None, or &#x60;\&quot;11\&quot;&#x60; for Group Policies ACL | [optional]
**host_mode** | **string** | Choose the Host Mode for the access policy. | [optional]
**access_policy_type** | **string** | Access Type of the policy. Automatically &#39;Hybrid authentication&#39; when hostMode is &#39;Multi-Domain&#39;. | [optional]
**increase_access_speed** | **bool** | Enabling this option will make switches execute 802.1X and MAC-bypass authentication simultaneously so that clients authenticate faster. Only required when accessPolicyType is &#39;Hybrid Authentication. | [optional]
**guest_vlan_id** | **int** | ID for the guest VLAN allow unauthorized devices access to limited network resources | [optional]
**dot1x** | [**\Meraki\Model\GetNetworkSwitchAccessPolicies200ResponseInnerDot1x**](GetNetworkSwitchAccessPolicies200ResponseInnerDot1x.md) |  | [optional]
**voice_vlan_clients** | **bool** | CDP/LLDP capable voice clients will be able to use this VLAN. Automatically true when hostMode is &#39;Multi-Domain&#39;. | [optional]
**url_redirect_walled_garden_enabled** | **bool** | Enable to restrict access for clients to a response_objectific set of IP addresses or hostnames prior to authentication | [optional]
**url_redirect_walled_garden_ranges** | **string[]** | IP address ranges, in CIDR notation, to restrict access for clients to a specific set of IP addresses or hostnames prior to authentication | [optional]
**counts** | [**\Meraki\Model\GetNetworkSwitchAccessPolicies200ResponseInnerCounts**](GetNetworkSwitchAccessPolicies200ResponseInnerCounts.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
