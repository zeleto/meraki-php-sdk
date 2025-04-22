# # GetNetworkSwitchAlternateManagementInterface200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | Boolean value to enable or disable AMI configuration. If enabled, VLAN and protocols must be set | [optional]
**vlan_id** | **int** | Alternate management VLAN, must be between 1 and 4094 | [optional]
**protocols** | **string[]** | Can be one or more of the following values: &#39;radius&#39;, &#39;snmp&#39; or &#39;syslog&#39; | [optional]
**switches** | [**\Meraki\Model\GetNetworkSwitchAlternateManagementInterface200ResponseSwitchesInner[]**](GetNetworkSwitchAlternateManagementInterface200ResponseSwitchesInner.md) | Array of switch serial number and IP assignment. If parameter is present, it cannot have empty body. Note: switches parameter is not applicable for template networks, in other words, do not put &#39;switches&#39; in the body when updating template networks. Also, an empty &#39;switches&#39; array will remove all previous assignments | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
