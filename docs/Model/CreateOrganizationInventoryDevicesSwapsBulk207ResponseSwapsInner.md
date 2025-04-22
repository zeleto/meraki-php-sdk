# # CreateOrganizationInventoryDevicesSwapsBulk207ResponseSwapsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Swap Request ID |
**devices** | [**\Meraki\Model\CreateOrganizationInventoryDevicesSwapsBulk207ResponseSwapsInnerDevices**](CreateOrganizationInventoryDevicesSwapsBulk207ResponseSwapsInnerDevices.md) |  |
**status** | **string** | The current status of the swap job. |
**after_action** | **string** | An action to perform on the devices.old object after swap is complete. |
**created_at** | **string** | An iso8601 timestamp for the creation of the swap request. |
**completed_at** | **string** | An iso8601 timestamp for when the swap completed or failed. | [optional]
**errors** | **string[]** | A list of error messages for why a swap failed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
