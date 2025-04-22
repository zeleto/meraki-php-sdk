# # UpdateNetworkWebhooksPayloadTemplateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the template | [optional]
**body** | **string** | The liquid template used for the body of the webhook message. | [optional]
**headers** | [**\Meraki\Model\CreateNetworkWebhooksPayloadTemplateRequestHeadersInner[]**](CreateNetworkWebhooksPayloadTemplateRequestHeadersInner.md) | The liquid template used with the webhook headers. | [optional]
**body_file** | **string** | A file containing liquid template used for the body of the webhook message. | [optional]
**headers_file** | **string** | A file containing the liquid template used with the webhook headers. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
