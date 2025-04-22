# # GetNetworkSwitchQosRules200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Qos Rule id | [optional]
**vlan** | **int** | The VLAN of the incoming packet. A null value will match any VLAN. | [optional]
**protocol** | **string** | The protocol of the incoming packet. Can be one of \&quot;ANY\&quot;, \&quot;TCP\&quot; or \&quot;UDP\&quot;. Default value is \&quot;ANY\&quot; | [optional]
**src_port** | **int** | The source port of the incoming packet. Applicable only if protocol is TCP or UDP. | [optional]
**src_port_range** | **string** | The source port range of the incoming packet. Applicable only if protocol is set to TCP or UDP. Example: 70-80 | [optional]
**dst_port** | **int** | The destination port of the incoming packet. Applicable only if protocol is TCP or UDP. | [optional]
**dst_port_range** | **string** | The destination port range of the incoming packet. Applicable only if protocol is set to TCP or UDP. Example: 70-80 | [optional]
**dscp** | **int** | DSCP tag for the incoming packet. Set this to -1 to trust incoming DSCP. Default value is 0 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
