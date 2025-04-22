# # GetOrganizationConfigurationChanges200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ts** | **\DateTime** | Time, in ISO8601 format, when the configuration change was made. | [optional]
**admin_name** | **string** | The name of the admin who made the configuration change. | [optional]
**admin_email** | **string** | The email address of the admin who made the configuration change. This attribute may be null. | [optional]
**admin_id** | **string** | The ID of the admin who made the configuration change. This attribute may be null. | [optional]
**network_name** | **string** | The name of the network that the configuration change was applied to. This attribute may be null. | [optional]
**network_id** | **string** | The ID of the network that the configuration change was applied to. This attribute may be null. | [optional]
**network_url** | **string** | The url of the network that the configuration change was applied to. This attribute may be null. | [optional]
**ssid_name** | **string** | The name of the ssid that the configuration change was applied to, if applicable. This attribute may be null. | [optional]
**ssid_number** | **int** | The ssid number that the configuration change was applied to, if applicable. This attribute may be null. | [optional]
**page** | **string** | The name of the Meraki Dashboard page on which the configuration change was made. | [optional]
**label** | **string** | Description of the configuration change. | [optional]
**old_value** | **string** | The value of the configuration, before the change was applied. | [optional]
**new_value** | **string** | The value of the configuration, after the change was applied. | [optional]
**client** | [**\Meraki\Model\GetOrganizationConfigurationChanges200ResponseInnerClient**](GetOrganizationConfigurationChanges200ResponseInnerClient.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
