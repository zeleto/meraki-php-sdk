# # CreateNetworkFirmwareUpgradesRollback200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product** | **string** | Product type to rollback (if the network is a combined network) | [optional]
**status** | **string** | Status of the rollback | [optional]
**upgrade_batch_id** | **string** | Batch ID of the firmware rollback | [optional]
**time** | **\DateTime** | Scheduled time for the rollback | [optional]
**to_version** | [**\Meraki\Model\CreateNetworkFirmwareUpgradesRollback200ResponseToVersion**](CreateNetworkFirmwareUpgradesRollback200ResponseToVersion.md) |  | [optional]
**reasons** | [**\Meraki\Model\CreateNetworkFirmwareUpgradesRollback200ResponseReasonsInner[]**](CreateNetworkFirmwareUpgradesRollback200ResponseReasonsInner.md) | Reasons for the rollback | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
