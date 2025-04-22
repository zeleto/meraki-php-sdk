# # CreateNetworkWebhooksWebhookTestRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The URL where the test webhook will be sent |
**shared_secret** | **string** | The shared secret the test webhook will send. Optional. Defaults to an empty string. | [optional] [default to '']
**payload_template_id** | **string** | The ID of the payload template of the test webhook. Defaults to the HTTP server&#39;s template ID if one exists for the given URL, or Generic template ID otherwise | [optional]
**payload_template_name** | **string** | The name of the payload template. | [optional]
**alert_type_id** | **string** | The type of alert which the test webhook will send. Optional. Defaults to power_supply_down. | [optional] [default to 'power_supply_down']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
