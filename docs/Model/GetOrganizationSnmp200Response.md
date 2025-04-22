# # GetOrganizationSnmp200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**v2c_enabled** | **bool** | Boolean indicating whether SNMP version 2c is enabled for the organization. | [optional]
**v2_community_string** | **string** | The community string for SNMP version 2c, if enabled. | [optional]
**v3_enabled** | **bool** | Boolean indicating whether SNMP version 3 is enabled for the organization. | [optional]
**v3_user** | **string** | The user for SNMP version 3, if enabled. | [optional]
**v3_auth_mode** | **string** | The SNMP version 3 authentication mode. Can be either &#39;MD5&#39; or &#39;SHA&#39;. | [optional]
**v3_priv_mode** | **string** | The SNMP version 3 privacy mode. Can be either &#39;DES&#39; or &#39;AES128&#39;. | [optional]
**peer_ips** | **string[]** | The list of IPv4 addresses that are allowed to access the SNMP server. | [optional]
**hostname** | **string** | The hostname of the SNMP server. | [optional]
**port** | **int** | The port of the SNMP server. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
