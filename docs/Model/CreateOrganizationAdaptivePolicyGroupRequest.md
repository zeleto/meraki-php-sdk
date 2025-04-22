# # CreateOrganizationAdaptivePolicyGroupRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the group |
**sgt** | **int** | SGT value of the group |
**description** | **string** | Description of the group (default: \&quot;\&quot;) | [optional]
**policy_objects** | [**\Meraki\Model\GetOrganizationAdaptivePolicyGroups200ResponseInnerPolicyObjectsInner[]**](GetOrganizationAdaptivePolicyGroups200ResponseInnerPolicyObjectsInner.md) | The policy objects that belong to this group; traffic from addresses specified by these policy objects will be tagged with this group&#39;s SGT value if no other tagging scheme is being used (each requires one unique attribute) (default: []) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
