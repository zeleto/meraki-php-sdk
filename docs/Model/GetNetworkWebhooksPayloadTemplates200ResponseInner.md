# # GetNetworkWebhooksPayloadTemplates200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payload_template_id** | **string** | Webhook payload template Id | [optional]
**type** | **string** | The type of the payload template | [optional]
**name** | **string** | The name of the payload template | [optional]
**headers** | [**\Meraki\Model\GetNetworkWebhooksPayloadTemplates200ResponseInnerHeadersInner[]**](GetNetworkWebhooksPayloadTemplates200ResponseInnerHeadersInner.md) | The payload template headers, will be rendered as a key-value pair in the webhook. | [optional]
**body** | **string** | The body of the payload template, in liquid template | [optional]
**sharing** | [**\Meraki\Model\GetNetworkWebhooksPayloadTemplates200ResponseInnerSharing**](GetNetworkWebhooksPayloadTemplates200ResponseInnerSharing.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
