# # UpdateNetworkApplianceSdwanInternetPoliciesRequestWanTrafficUplinkPreferencesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**preferred_uplink** | **string** | Preferred uplink for uplink preference rule. Must be one of: &#39;wan1&#39;, &#39;wan2&#39;, &#39;bestForVoIP&#39;, &#39;loadBalancing&#39; or &#39;defaultUplink&#39; |
**fail_over_criterion** | **string** | WAN failover and failback behavior | [optional]
**performance_class** | [**\Meraki\Model\UpdateNetworkApplianceSdwanInternetPoliciesRequestWanTrafficUplinkPreferencesInnerPerformanceClass**](UpdateNetworkApplianceSdwanInternetPoliciesRequestWanTrafficUplinkPreferencesInnerPerformanceClass.md) |  | [optional]
**traffic_filters** | [**\Meraki\Model\UpdateNetworkApplianceSdwanInternetPoliciesRequestWanTrafficUplinkPreferencesInnerTrafficFiltersInner[]**](UpdateNetworkApplianceSdwanInternetPoliciesRequestWanTrafficUplinkPreferencesInnerTrafficFiltersInner.md) | Traffic filters |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
