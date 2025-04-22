# # RebootNetworkSmDevicesRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**wifi_macs** | **string[]** | The wifiMacs of the endpoints to be rebooted. | [optional]
**ids** | **string[]** | The ids of the endpoints to be rebooted. | [optional]
**serials** | **string[]** | The serials of the endpoints to be rebooted. | [optional]
**scope** | **string[]** | The scope (one of all, none, withAny, withAll, withoutAny, or withoutAll) and a set of tags of the endpoints to be rebooted. | [optional]
**kext_paths** | **string[]** | The KextPaths of the endpoints to be rebooted. Available for macOS 11+ | [optional]
**notify_user** | **bool** | Whether or not to notify the user before rebooting the endpoint. Available for macOS 11.3+ | [optional]
**rebuild_kernel_cache** | **bool** | Whether or not to rebuild the kernel cache when rebooting the endpoint. Available for macOS 11+ | [optional]
**request_requires_network_tether** | **bool** | Whether or not the request requires network tethering. Available for macOS and supervised iOS or tvOS | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
