# # GetNetworkSnmp200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access** | **string** | The type of SNMP access. Can be one of &#39;none&#39; (disabled), &#39;community&#39; (V1/V2c), or &#39;users&#39; (V3). | [optional]
**community_string** | **string** | SNMP community string if access is &#39;community&#39;. | [optional]
**users** | [**\Meraki\Model\GetNetworkSnmp200ResponseUsersInner[]**](GetNetworkSnmp200ResponseUsersInner.md) | SNMP settings if access is &#39;users&#39;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
