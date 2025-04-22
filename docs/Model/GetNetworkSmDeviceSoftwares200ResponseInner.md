# # GetNetworkSmDeviceSoftwares200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_id** | **string** | The Meraki managed application Id for this record on a particular device. | [optional]
**bundle_size** | **int** | The size of the software bundle. | [optional]
**created_at** | **string** | When the Meraki record for the software was created. | [optional]
**device_id** | **string** | The Meraki managed device Id. | [optional]
**dynamic_size** | **int** | The size of the data stored in the application. | [optional]
**id** | **string** | The Meraki software Id. | [optional]
**identifier** | **string** | Software bundle identifier. | [optional]
**installed_at** | **string** | When the Software was installed on the device. | [optional]
**to_install** | **bool** | A boolean indicating this software record should be installed on the associated device. | [optional]
**ios_redemption_code** | **bool** | A boolean indicating whether or not an iOS redemption code was used. | [optional]
**is_managed** | **bool** | A boolean indicating whether or not the software is managed by Meraki. | [optional]
**itunes_id** | **string** | The itunes numerical identifier. | [optional]
**license_key** | **string** | The license key associated with this software installation. | [optional]
**name** | **string** | The name of the software. | [optional]
**path** | **string** | The path on the device where the software record is located. | [optional]
**redemption_code** | **int** | The redemption code used for this software. | [optional]
**short_version** | **string** | Short version notation for the software. | [optional]
**status** | **string** | The management status of the software. | [optional]
**to_uninstall** | **bool** | A boolean indicating this software record should be uninstalled on the associated device. | [optional]
**uninstalled_at** | **string** | When the record was uninstalled from the device. | [optional]
**updated_at** | **string** | When the record was last updated by Meraki. | [optional]
**vendor** | **string** | The vendor of the software. | [optional]
**version** | **string** | Full version notation for the software. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
