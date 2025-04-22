# # GetNetworkSmDevicePerformanceHistory200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cpu_percent_used** | **float** | The percentage of CPU used as a decimal format. | [optional]
**mem_free** | **int** | Memory that is not yet in use by the system. | [optional]
**mem_wired** | **int** | Memory used for core OS functions on the device. | [optional]
**mem_active** | **int** | The active RAM on the device. | [optional]
**mem_inactive** | **int** | The inactive RAM on the device. | [optional]
**network_sent** | **int** | Network bandwith transmitted. | [optional]
**network_received** | **int** | Network bandwith received. | [optional]
**swap_used** | **int** | The amount of space being used on the startup disk to swap unused files to and from RAM. | [optional]
**disk_usage** | [**\Meraki\Model\GetNetworkSmDevicePerformanceHistory200ResponseInnerDiskUsage**](GetNetworkSmDevicePerformanceHistory200ResponseInnerDiskUsage.md) |  | [optional]
**ts** | **string** | The time at which the performance was measured. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
