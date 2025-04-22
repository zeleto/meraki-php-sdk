# # UpdateNetworkWirelessSsidRequestRadiusServersInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**host** | **string** | IP address (or FQDN) of your RADIUS server |
**port** | **int** | UDP port the RADIUS server listens on for Access-requests | [optional]
**secret** | **string** | RADIUS client shared secret | [optional]
**radsec_enabled** | **bool** | Use RADSEC (TLS over TCP) to connect to this RADIUS server. Requires radiusProxyEnabled. | [optional]
**open_roaming_certificate_id** | **int** | The ID of the Openroaming Certificate attached to radius server. | [optional]
**ca_certificate** | **string** | Certificate used for authorization for the RADSEC Server | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
