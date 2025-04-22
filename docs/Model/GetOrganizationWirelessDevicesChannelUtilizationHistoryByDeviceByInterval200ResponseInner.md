# # GetOrganizationWirelessDevicesChannelUtilizationHistoryByDeviceByInterval200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_ts** | **\DateTime** | The start time of the channel utilization interval. | [optional]
**end_ts** | **\DateTime** | The end time of the channel utilization interval. | [optional]
**serial** | **string** | The serial number for the device. | [optional]
**mac** | **string** | The MAC address of the device. | [optional]
**network** | [**\Meraki\Model\GetOrganizationWirelessDevicesChannelUtilizationByDevice200ResponseInnerNetwork**](GetOrganizationWirelessDevicesChannelUtilizationByDevice200ResponseInnerNetwork.md) |  | [optional]
**by_band** | [**\Meraki\Model\GetOrganizationWirelessDevicesChannelUtilizationByDevice200ResponseInnerByBandInner[]**](GetOrganizationWirelessDevicesChannelUtilizationByDevice200ResponseInnerByBandInner.md) | Channel utilization broken down by band. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
