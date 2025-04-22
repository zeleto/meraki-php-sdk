# # UpdateDeviceApplianceRadioSettingsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rf_profile_id** | **string** | The ID of an RF profile to assign to the device. If the value of this parameter is null, the appropriate basic RF profile (indoor or outdoor) will be assigned to the device. Assigning an RF profile will clear ALL manually configured overrides on the device (channel width, channel, power). | [optional]
**two_four_ghz_settings** | [**\Meraki\Model\UpdateDeviceApplianceRadioSettingsRequestTwoFourGhzSettings**](UpdateDeviceApplianceRadioSettingsRequestTwoFourGhzSettings.md) |  | [optional]
**five_ghz_settings** | [**\Meraki\Model\UpdateDeviceApplianceRadioSettingsRequestFiveGhzSettings**](UpdateDeviceApplianceRadioSettingsRequestFiveGhzSettings.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
