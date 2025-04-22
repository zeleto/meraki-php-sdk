# # CreateNetworkWebhooksPayloadTemplateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the new template |
**body** | **string** | The liquid template used for the body of the webhook message. Either &#x60;body&#x60; or &#x60;bodyFile&#x60; must be specified. | [optional]
**headers** | [**\Meraki\Model\CreateNetworkWebhooksPayloadTemplateRequestHeadersInner[]**](CreateNetworkWebhooksPayloadTemplateRequestHeadersInner.md) | The liquid template used with the webhook headers. | [optional]
**body_file** | **string** | A Base64 encoded file containing liquid template used for the body of the webhook message. Either &#x60;body&#x60; or &#x60;bodyFile&#x60; must be specified. | [optional]
**headers_file** | **string** | A Base64 encoded file containing the liquid template used with the webhook headers. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
