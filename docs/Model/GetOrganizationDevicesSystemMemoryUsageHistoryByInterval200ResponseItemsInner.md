# # GetOrganizationDevicesSystemMemoryUsageHistoryByInterval200ResponseItemsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**serial** | **string** | Unique serial number for the device | [optional]
**model** | **string** | Model of the device | [optional]
**name** | **string** | Name of the device | [optional]
**mac** | **string** | MAC address of the device | [optional]
**tags** | **string[]** | List of custom tags for the device | [optional]
**provisioned** | **int** | The total RAM size provisioned on the device, in kB | [optional]
**used** | [**\Meraki\Model\GetOrganizationDevicesSystemMemoryUsageHistoryByInterval200ResponseItemsInnerUsed**](GetOrganizationDevicesSystemMemoryUsageHistoryByInterval200ResponseItemsInnerUsed.md) |  | [optional]
**free** | [**\Meraki\Model\GetOrganizationDevicesSystemMemoryUsageHistoryByInterval200ResponseItemsInnerFree**](GetOrganizationDevicesSystemMemoryUsageHistoryByInterval200ResponseItemsInnerFree.md) |  | [optional]
**network** | [**\Meraki\Model\GetOrganizationDevicesSystemMemoryUsageHistoryByInterval200ResponseItemsInnerNetwork**](GetOrganizationDevicesSystemMemoryUsageHistoryByInterval200ResponseItemsInnerNetwork.md) |  | [optional]
**intervals** | [**\Meraki\Model\GetOrganizationDevicesSystemMemoryUsageHistoryByInterval200ResponseItemsInnerIntervalsInner[]**](GetOrganizationDevicesSystemMemoryUsageHistoryByInterval200ResponseItemsInnerIntervalsInner.md) | Time interval snapshots of system memory utilization on the device with the most recent snapshot first | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
