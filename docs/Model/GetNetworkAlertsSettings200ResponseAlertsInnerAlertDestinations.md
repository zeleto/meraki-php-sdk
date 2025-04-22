# # GetNetworkAlertsSettings200ResponseAlertsInnerAlertDestinations

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**emails** | **string[]** | A list of emails that will receive information about the alert | [optional]
**sms_numbers** | **string[]** | A list of phone numbers that will receive text messages about the alert. Only available for sensors status alerts. | [optional]
**all_admins** | **bool** | If true, then all network admins will receive emails for this alert | [optional]
**snmp** | **bool** | If true, then an SNMP trap will be sent for this alert if there is an SNMP trap server configured for this network | [optional]
**http_server_ids** | **string[]** | A list of HTTP server IDs to send a Webhook to for this alert | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
