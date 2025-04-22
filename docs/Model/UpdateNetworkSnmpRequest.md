# # UpdateNetworkSnmpRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access** | **string** | The type of SNMP access. Can be one of &#39;none&#39; (disabled), &#39;community&#39; (V1/V2c), or &#39;users&#39; (V3). | [optional]
**community_string** | **string** | The SNMP community string. Only relevant if &#39;access&#39; is set to &#39;community&#39;. | [optional]
**users** | [**\Meraki\Model\UpdateNetworkSnmpRequestUsersInner[]**](UpdateNetworkSnmpRequestUsersInner.md) | The list of SNMP users. Only relevant if &#39;access&#39; is set to &#39;users&#39;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
