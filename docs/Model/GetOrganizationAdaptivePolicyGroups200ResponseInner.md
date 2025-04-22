# # GetOrganizationAdaptivePolicyGroups200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**group_id** | **string** | The ID of the adaptive policy group | [optional]
**name** | **string** | The name of the adaptive policy group | [optional]
**sgt** | **int** | The security group tag for the adaptive policy group | [optional]
**description** | **string** | The description for the adaptive policy group | [optional]
**policy_objects** | [**\Meraki\Model\GetOrganizationAdaptivePolicyGroups200ResponseInnerPolicyObjectsInner[]**](GetOrganizationAdaptivePolicyGroups200ResponseInnerPolicyObjectsInner.md) | The policy objects for the adaptive policy group | [optional]
**is_default_group** | **bool** | Whether the adaptive policy group is the default group | [optional]
**required_ip_mappings** | **string[]** | List of required IP mappings for the adaptive policy group | [optional]
**created_at** | **string** | Created at timestamp for the adaptive policy group | [optional]
**updated_at** | **string** | Updated at timestamp for the adaptive policy group | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
