# # UpdateOrganizationPolicyObjectRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of a policy object, unique within the organization (alphanumeric, space, dash, or underscore characters only) | [optional]
**cidr** | **string** | CIDR Value of a policy object (e.g. 10.11.12.1/24\&quot;) | [optional]
**fqdn** | **string** | Fully qualified domain name of policy object (e.g. \&quot;example.com\&quot;) | [optional]
**mask** | **string** | Mask of a policy object (e.g. \&quot;255.255.0.0\&quot;) | [optional]
**ip** | **string** | IP Address of a policy object (e.g. \&quot;1.2.3.4\&quot;) | [optional]
**group_ids** | **string[]** | The IDs of policy object groups the policy object belongs to | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
