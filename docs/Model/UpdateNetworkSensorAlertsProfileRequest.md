# # UpdateNetworkSensorAlertsProfileRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the sensor alert profile. | [optional]
**schedule** | [**\Meraki\Model\CreateNetworkSensorAlertsProfileRequestSchedule**](CreateNetworkSensorAlertsProfileRequestSchedule.md) |  | [optional]
**conditions** | [**\Meraki\Model\GetNetworkSensorAlertsProfiles200ResponseInnerConditionsInner[]**](GetNetworkSensorAlertsProfiles200ResponseInnerConditionsInner.md) | List of conditions that will cause the profile to send an alert. | [optional]
**recipients** | [**\Meraki\Model\GetNetworkSensorAlertsProfiles200ResponseInnerRecipients**](GetNetworkSensorAlertsProfiles200ResponseInnerRecipients.md) |  | [optional]
**serials** | **string[]** | List of device serials assigned to this sensor alert profile. | [optional]
**include_sensor_url** | **bool** | Include dashboard link to sensor in messages (default: true). | [optional]
**message** | **string** | A custom message that will appear in email and text message alerts. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
