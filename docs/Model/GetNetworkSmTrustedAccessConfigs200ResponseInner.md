# # GetNetworkSmTrustedAccessConfigs200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | device ID | [optional]
**ssid_name** | **string** | SSID name | [optional]
**name** | **string** | device name | [optional]
**scope** | **string** | scope | [optional]
**tags** | **string[]** | device tags | [optional]
**timebound_type** | **string** | type of access period, either a static range or a dynamic period | [optional]
**send_expiration_emails** | **bool** | Send Email Notifications | [optional]
**notify_time_before_access_ends** | **int** | Time before access expiration reminder email sends | [optional]
**additional_email_text** | **string** | Optional email text | [optional]
**access_start_at** | **\DateTime** | time that access starts | [optional]
**access_end_at** | **\DateTime** | time that access ends | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
