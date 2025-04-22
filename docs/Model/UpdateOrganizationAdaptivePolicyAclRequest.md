# # UpdateOrganizationAdaptivePolicyAclRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the adaptive policy ACL | [optional]
**description** | **string** | Description of the adaptive policy ACL | [optional]
**rules** | [**\Meraki\Model\CreateOrganizationAdaptivePolicyAclRequestRulesInner[]**](CreateOrganizationAdaptivePolicyAclRequestRulesInner.md) | An ordered array of the adaptive policy ACL rules. An empty array will clear the rules. | [optional]
**ip_version** | **string** | IP version of adpative policy ACL. One of: &#39;any&#39;, &#39;ipv4&#39; or &#39;ipv6&#39; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
