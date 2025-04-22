# # CreateDeviceLiveToolsArpTableRequestCallback

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The callback URL for the webhook target. If using this field, please also specify a sharedSecret. | [optional]
**shared_secret** | **string** | A shared secret that will be included in the requests sent to the callback URL. It can be used to verify that the request was sent by Meraki. If using this field, please also specify an url. | [optional]
**http_server** | [**\Meraki\Model\CreateDeviceLiveToolsArpTableRequestCallbackHttpServer**](CreateDeviceLiveToolsArpTableRequestCallbackHttpServer.md) |  | [optional]
**payload_template** | [**\Meraki\Model\CreateDeviceLiveToolsArpTableRequestCallbackPayloadTemplate**](CreateDeviceLiveToolsArpTableRequestCallbackPayloadTemplate.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
