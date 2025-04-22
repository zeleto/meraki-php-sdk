# # GetNetworkAlertsSettings200ResponseDefaultDestinations

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**emails** | **string[]** | A list of emails that will receive the alert(s). | [optional]
**all_admins** | **bool** | If true, then all network admins will receive emails. | [optional]
**snmp** | **bool** | If true, then an SNMP trap will be sent if there is an SNMP trap server configured for this network. | [optional]
**http_server_ids** | **string[]** | A list of HTTP server IDs to send a Webhook to | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
