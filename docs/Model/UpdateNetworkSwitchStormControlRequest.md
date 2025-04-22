# # UpdateNetworkSwitchStormControlRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**broadcast_threshold** | **int** | Percentage (1 to 99) of total available port bandwidth for broadcast traffic type. Default value 100 percent rate is to clear the configuration. | [optional]
**multicast_threshold** | **int** | Percentage (1 to 99) of total available port bandwidth for multicast traffic type. Default value 100 percent rate is to clear the configuration. | [optional]
**unknown_unicast_threshold** | **int** | Percentage (1 to 99) of total available port bandwidth for unknown unicast (dlf-destination lookup failure) traffic type. Default value 100 percent rate is to clear the configuration. | [optional]
**treat_these_traffic_types_as_one_threshold** | **string[]** | Grouped traffic types | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
