# # GetNetworkWirelessSsids200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **int** | Unique identifier of the SSID | [optional]
**name** | **string** | The name of the SSID | [optional]
**enabled** | **bool** | Whether or not the SSID is enabled | [optional]
**splash_page** | **string** | The type of splash page for the SSID | [optional]
**ssid_admin_accessible** | **bool** | SSID Administrator access status | [optional]
**local_auth** | **bool** | Extended local auth flag for Enterprise NAC | [optional]
**auth_mode** | **string** | The association control method for the SSID | [optional]
**encryption_mode** | **string** | The psk encryption mode for the SSID | [optional]
**wpa_encryption_mode** | **string** | The types of WPA encryption | [optional]
**radius_servers** | [**\Meraki\Model\GetNetworkWirelessSsids200ResponseInnerRadiusServersInner[]**](GetNetworkWirelessSsids200ResponseInnerRadiusServersInner.md) | List of RADIUS 802.1X servers to be used for authentication | [optional]
**radius_accounting_servers** | [**\Meraki\Model\GetNetworkWirelessSsids200ResponseInnerRadiusAccountingServersInner[]**](GetNetworkWirelessSsids200ResponseInnerRadiusAccountingServersInner.md) | List of RADIUS accounting 802.1X servers to be used for authentication | [optional]
**radius_accounting_enabled** | **bool** | Whether or not RADIUS accounting is enabled | [optional]
**radius_enabled** | **bool** | Whether RADIUS authentication is enabled | [optional]
**radius_attribute_for_group_policies** | **string** | RADIUS attribute used to look up group policies | [optional]
**radius_failover_policy** | **string** | Policy which determines how authentication requests should be handled in the event that all of the configured RADIUS servers are unreachable | [optional]
**radius_load_balancing_policy** | **string** | Policy which determines which RADIUS server will be contacted first in an authentication attempt, and the ordering of any necessary retry attempts | [optional]
**ip_assignment_mode** | **string** | The client IP assignment mode | [optional]
**admin_splash_url** | **string** | URL for the admin splash page | [optional]
**splash_timeout** | **string** | Splash page timeout | [optional]
**walled_garden_enabled** | **bool** | Allow users to access a configurable list of IP ranges prior to sign-on | [optional]
**walled_garden_ranges** | **string[]** | Domain names and IP address ranges available in Walled Garden mode | [optional]
**min_bitrate** | **int** | The minimum bitrate in Mbps of this SSID in the default indoor RF profile | [optional]
**band_selection** | **string** | The client-serving radio frequencies of this SSID in the default indoor RF profile | [optional]
**per_client_bandwidth_limit_up** | **int** | The upload bandwidth limit in Kbps. (0 represents no limit.) | [optional]
**per_client_bandwidth_limit_down** | **int** | The download bandwidth limit in Kbps. (0 represents no limit.) | [optional]
**visible** | **bool** | Whether the SSID is advertised or hidden by the AP | [optional]
**available_on_all_aps** | **bool** | Whether all APs broadcast the SSID or if it&#39;s restricted to APs matching any availability tags | [optional]
**availability_tags** | **string[]** | List of tags for this SSID. If availableOnAllAps is false, then the SSID is only broadcast by APs with tags matching any of the tags in this list | [optional]
**per_ssid_bandwidth_limit_up** | **int** | The total upload bandwidth limit in Kbps (0 represents no limit) | [optional]
**per_ssid_bandwidth_limit_down** | **int** | The total download bandwidth limit in Kbps (0 represents no limit) | [optional]
**mandatory_dhcp_enabled** | **bool** | Whether clients connecting to this SSID must use the IP address assigned by the DHCP server | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
