# # GetNetworkSettings200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**local_status_page_enabled** | **bool** | Enables / disables the local device status pages (&lt;a target&#x3D;&#39;_blank&#39; href&#x3D;&#39;http://my.meraki.com/&#39;&gt;my.meraki.com, &lt;/a&gt;&lt;a target&#x3D;&#39;_blank&#39; href&#x3D;&#39;http://ap.meraki.com/&#39;&gt;ap.meraki.com, &lt;/a&gt;&lt;a target&#x3D;&#39;_blank&#39; href&#x3D;&#39;http://switch.meraki.com/&#39;&gt;switch.meraki.com, &lt;/a&gt;&lt;a target&#x3D;&#39;_blank&#39; href&#x3D;&#39;http://wired.meraki.com/&#39;&gt;wired.meraki.com&lt;/a&gt;). Optional (defaults to false) | [optional]
**remote_status_page_enabled** | **bool** | Enables / disables access to the device status page (&lt;a target&#x3D;&#39;_blank&#39;&gt;http://[device&#39;s LAN IP])&lt;/a&gt;. Optional. Can only be set if localStatusPageEnabled is set to true | [optional]
**local_status_page** | [**\Meraki\Model\GetNetworkSettings200ResponseLocalStatusPage**](GetNetworkSettings200ResponseLocalStatusPage.md) |  | [optional]
**secure_port** | [**\Meraki\Model\GetNetworkSettings200ResponseSecurePort**](GetNetworkSettings200ResponseSecurePort.md) |  | [optional]
**fips** | [**\Meraki\Model\GetNetworkSettings200ResponseFips**](GetNetworkSettings200ResponseFips.md) |  | [optional]
**named_vlans** | [**\Meraki\Model\GetNetworkSettings200ResponseNamedVlans**](GetNetworkSettings200ResponseNamedVlans.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
