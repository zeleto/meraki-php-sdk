# # CreateOrganizationCameraRoleRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the new role. Must be unique. This parameter is required. |
**applied_on_devices** | [**\Meraki\Model\CreateOrganizationCameraRoleRequestAppliedOnDevicesInner[]**](CreateOrganizationCameraRoleRequestAppliedOnDevicesInner.md) | Device tag on which this specified permission is applied. | [optional]
**applied_on_networks** | [**\Meraki\Model\CreateOrganizationCameraRoleRequestAppliedOnNetworksInner[]**](CreateOrganizationCameraRoleRequestAppliedOnNetworksInner.md) | Network tag on which this specified permission is applied. | [optional]
**applied_org_wide** | [**\Meraki\Model\CreateOrganizationCameraRoleRequestAppliedOrgWideInner[]**](CreateOrganizationCameraRoleRequestAppliedOrgWideInner.md) | Permissions to be applied org wide. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
