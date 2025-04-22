# # UpdateNetworkApplianceSecurityIntrusionRequestProtectedNetworks

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**use_default** | **bool** | true/false whether to use special IPv4 addresses: https://tools.ietf.org/html/rfc5735 (required). Default value is true if none currently saved | [optional]
**included_cidr** | **string[]** | list of IP addresses or subnets being protected (required if &#39;useDefault&#39; is false) | [optional]
**excluded_cidr** | **string[]** | list of IP addresses or subnets being excluded from protection (required if &#39;useDefault&#39; is false) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
