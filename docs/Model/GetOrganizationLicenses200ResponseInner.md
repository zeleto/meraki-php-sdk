# # GetOrganizationLicenses200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | License ID | [optional]
**license_type** | **string** | License type | [optional]
**license_key** | **string** | License key | [optional]
**order_number** | **string** | Order number | [optional]
**device_serial** | **string** | Serial number of the device the license is assigned to | [optional]
**network_id** | **string** | ID of the network the license is assigned to | [optional]
**state** | **string** | The state of the license. All queued licenses have a status of &#x60;recentlyQueued&#x60;. | [optional]
**seat_count** | **int** | The number of seats of the license. Only applicable to SM licenses. | [optional]
**total_duration_in_days** | **int** | The duration of the license plus all permanently queued licenses associated with it | [optional]
**duration_in_days** | **int** | The duration of the individual license | [optional]
**permanently_queued_licenses** | [**\Meraki\Model\GetOrganizationLicenses200ResponseInnerPermanentlyQueuedLicensesInner[]**](GetOrganizationLicenses200ResponseInnerPermanentlyQueuedLicensesInner.md) | DEPRECATED List of permanently queued licenses attached to the license. Instead, use /organizations/{organizationId}/licenses?deviceSerial&#x3D; to retrieved queued licenses for a given device. | [optional]
**claim_date** | **string** | The date the license was claimed into the organization | [optional]
**activation_date** | **string** | The date the license started burning | [optional]
**expiration_date** | **string** | The date the license will expire | [optional]
**head_license_id** | **string** | The id of the head license this license is queued behind. If there is no head license, it returns nil. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
