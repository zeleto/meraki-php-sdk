# # GetOrganizationWebhooksAlertTypes200ResponseExample

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**version** | **string** | Version of the alert | [optional]
**shared_secret** | **string** | Shared secret for the alert | [optional]
**sent_at** | **\DateTime** | When the alert notification was sent, in ISO8601 format | [optional]
**alert_id** | **string** | ID for the alert instance | [optional]
**alert_level** | **string** | Severity level of the alert | [optional]
**occurred_at** | **\DateTime** | When the alert occurred, in ISO8601 format | [optional]
**alert_data** | **array<string,mixed>** | Data for the specific alert. Contents depend on the type of the alert | [optional]
**organization_id** | **string** | ID of the organization associated with the alert | [optional]
**organization_name** | **string** | Name of the organization associated with the alert | [optional]
**organization_url** | **string** | URL of the organization associated with the alert | [optional]
**device_serial** | **string** | Serial for the device associated with the alert | [optional]
**device_mac** | **string** | Mac address for the device associated with the alert | [optional]
**device_name** | **string** | Name of the device associated with the alert | [optional]
**device_url** | **string** | URL of the device associated with the alert | [optional]
**device_tags** | **string[]** | List of tags for the device associated with the alert | [optional]
**device_model** | **string** | Model of the device associated with the alert | [optional]
**network_id** | **string** | ID of the network associated with the alert | [optional]
**network_name** | **string** | Name of the network associated with the alert | [optional]
**network_url** | **string** | URL of the network associated with the alert | [optional]
**enrollment_string** | **string** | Enrollment string of the network associated with the alert | [optional]
**notes** | **string** | Notes for the network associated with the alert | [optional]
**product_types** | **string[]** | List of product types that are part of the network associated with the alert | [optional]
**encrypted_id** | **string** | Encrypted ID of the network associated with the alert | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
