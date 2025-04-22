# # UpdateNetworkWirelessAlternateManagementInterfaceRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | Boolean value to enable or disable alternate management interface | [optional]
**vlan_id** | **int** | Alternate management interface VLAN, must be between 1 and 4094 | [optional]
**protocols** | **string[]** | Can be one or more of the following values: &#39;radius&#39;, &#39;snmp&#39;, &#39;syslog&#39; or &#39;ldap&#39; | [optional]
**access_points** | [**\Meraki\Model\UpdateNetworkWirelessAlternateManagementInterfaceRequestAccessPointsInner[]**](UpdateNetworkWirelessAlternateManagementInterfaceRequestAccessPointsInner.md) | Array of access point serial number and IP assignment. Note: accessPoints IP assignment is not applicable for template networks, in other words, do not put &#39;accessPoints&#39; in the body when updating template networks. Also, an empty &#39;accessPoints&#39; array will remove all previous static IP assignments | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
