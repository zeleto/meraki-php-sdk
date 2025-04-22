# # GetOrganizationAdaptivePolicyPolicies200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**adaptive_policy_id** | **string** | The ID for the adaptive policy | [optional]
**source_group** | [**\Meraki\Model\GetOrganizationAdaptivePolicyPolicies200ResponseInnerSourceGroup**](GetOrganizationAdaptivePolicyPolicies200ResponseInnerSourceGroup.md) |  | [optional]
**destination_group** | [**\Meraki\Model\GetOrganizationAdaptivePolicyPolicies200ResponseInnerDestinationGroup**](GetOrganizationAdaptivePolicyPolicies200ResponseInnerDestinationGroup.md) |  | [optional]
**acls** | [**\Meraki\Model\GetOrganizationAdaptivePolicyPolicies200ResponseInnerAclsInner[]**](GetOrganizationAdaptivePolicyPolicies200ResponseInnerAclsInner.md) | The access control lists for the adaptive policy | [optional]
**last_entry_rule** | **string** | The rule to apply if there is no matching ACL | [optional]
**created_at** | **string** | The created at timestamp for the adaptive policy | [optional]
**updated_at** | **string** | The updated at timestamp for the adaptive policy | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
