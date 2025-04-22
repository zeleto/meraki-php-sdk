# # UpdateNetworkWirelessSsidRequestRadiusAccountingServersInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**host** | **string** | IP address (or FQDN) to which the APs will send RADIUS accounting messages |
**port** | **int** | Port on the RADIUS server that is listening for accounting messages | [optional]
**secret** | **string** | Shared key used to authenticate messages between the APs and RADIUS server | [optional]
**radsec_enabled** | **bool** | Use RADSEC (TLS over TCP) to connect to this RADIUS accounting server. Requires radiusProxyEnabled. | [optional]
**ca_certificate** | **string** | Certificate used for authorization for the RADSEC Server | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
