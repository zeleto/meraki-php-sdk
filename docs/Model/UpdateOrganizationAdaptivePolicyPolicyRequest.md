# # UpdateOrganizationAdaptivePolicyPolicyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**source_group** | [**\Meraki\Model\CreateOrganizationAdaptivePolicyPolicyRequestSourceGroup**](CreateOrganizationAdaptivePolicyPolicyRequestSourceGroup.md) |  | [optional]
**destination_group** | [**\Meraki\Model\CreateOrganizationAdaptivePolicyPolicyRequestDestinationGroup**](CreateOrganizationAdaptivePolicyPolicyRequestDestinationGroup.md) |  | [optional]
**acls** | [**\Meraki\Model\CreateOrganizationAdaptivePolicyPolicyRequestAclsInner[]**](CreateOrganizationAdaptivePolicyPolicyRequestAclsInner.md) | An ordered array of adaptive policy ACLs (each requires one unique attribute) that apply to this policy | [optional]
**last_entry_rule** | **string** | The rule to apply if there is no matching ACL | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
