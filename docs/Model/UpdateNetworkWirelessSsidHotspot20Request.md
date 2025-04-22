# # UpdateNetworkWirelessSsidHotspot20Request

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | Whether or not Hotspot 2.0 for this SSID is enabled | [optional]
**operator** | [**\Meraki\Model\UpdateNetworkWirelessSsidHotspot20RequestOperator**](UpdateNetworkWirelessSsidHotspot20RequestOperator.md) |  | [optional]
**venue** | [**\Meraki\Model\UpdateNetworkWirelessSsidHotspot20RequestVenue**](UpdateNetworkWirelessSsidHotspot20RequestVenue.md) |  | [optional]
**network_access_type** | **string** | The network type of this SSID (&#39;Private network&#39;, &#39;Private network with guest access&#39;, &#39;Chargeable public network&#39;, &#39;Free public network&#39;, &#39;Personal device network&#39;, &#39;Emergency services only network&#39;, &#39;Test or experimental&#39;, &#39;Wildcard&#39;) | [optional]
**domains** | **string[]** | An array of domain names | [optional]
**roam_consort_ois** | **string[]** | An array of roaming consortium OIs (hexadecimal number 3-5 octets in length) | [optional]
**mcc_mncs** | [**\Meraki\Model\UpdateNetworkWirelessSsidHotspot20RequestMccMncsInner[]**](UpdateNetworkWirelessSsidHotspot20RequestMccMncsInner.md) | An array of MCC/MNC pairs | [optional]
**nai_realms** | [**\Meraki\Model\UpdateNetworkWirelessSsidHotspot20RequestNaiRealmsInner[]**](UpdateNetworkWirelessSsidHotspot20RequestNaiRealmsInner.md) | An array of NAI realms | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
