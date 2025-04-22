# # GetOrganizationFirmwareUpgrades200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**upgrade_id** | **string** | The upgrade | [optional]
**upgrade_batch_id** | **string** | The upgrade batch | [optional]
**network** | [**\Meraki\Model\GetOrganizationFirmwareUpgrades200ResponseInnerNetwork**](GetOrganizationFirmwareUpgrades200ResponseInnerNetwork.md) |  | [optional]
**status** | **string** | Status of upgrade event: [Cancelled, Completed] | [optional]
**time** | **\DateTime** | Scheduled start time | [optional]
**completed_at** | **string** | Timestamp when upgrade completed. Null if status pending. | [optional]
**product_types** | **string** | product upgraded [wireless, appliance, switch, systemsManager, camera, cellularGateway, sensor] | [optional]
**to_version** | [**\Meraki\Model\GetOrganizationFirmwareUpgrades200ResponseInnerToVersion**](GetOrganizationFirmwareUpgrades200ResponseInnerToVersion.md) |  | [optional]
**from_version** | [**\Meraki\Model\GetOrganizationFirmwareUpgrades200ResponseInnerFromVersion**](GetOrganizationFirmwareUpgrades200ResponseInnerFromVersion.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
