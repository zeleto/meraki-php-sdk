# # GetOrganizationPolicyObjects200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Policy object ID | [optional]
**name** | **string** | Name of policy object (alphanumeric, space, dash, or underscore characters only). | [optional]
**category** | **string** | Category of a policy object (one of: adaptivePolicy, network) | [optional]
**type** | **string** | Type of a policy object (one of: adaptivePolicyIpv4Cidr, cidr, fqdn, ipAndMask) | [optional]
**cidr** | **string** | CIDR Value of a policy object | [optional]
**created_at** | **\DateTime** | Time Stamp of policy object creation. | [optional]
**updated_at** | **\DateTime** | Time Stamp of policy object updation. | [optional]
**group_ids** | **string[]** | The IDs of policy object groups the policy object belongs to. | [optional]
**network_ids** | **string[]** | The IDs of the networks that use the policy object. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
