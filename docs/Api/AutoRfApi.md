# Meraki\AutoRfApi

All URIs are relative to https://api.meraki.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**recalculateOrganizationWirelessRadioAutoRfChannels()**](AutoRfApi.md#recalculateOrganizationWirelessRadioAutoRfChannels) | **POST** /organizations/{organizationId}/wireless/radio/autoRf/channels/recalculate | Recalculates automatically assigned channels for every AP within specified the specified network(s) |


## `recalculateOrganizationWirelessRadioAutoRfChannels()`

```php
recalculateOrganizationWirelessRadioAutoRfChannels($organization_id, $recalculate_organization_wireless_radio_auto_rf_channels_request): \Meraki\Model\RecalculateOrganizationWirelessRadioAutoRfChannels200Response
```

Recalculates automatically assigned channels for every AP within specified the specified network(s)

Recalculates automatically assigned channels for every AP within specified the specified network(s). Note: This could cause a brief loss in connectivity for wireless clients.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: meraki_api_key
$config = Meraki\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Meraki\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

// Configure Bearer (API Key) authorization: bearerAuth
$config = Meraki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Meraki\Api\AutoRfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization ID
$recalculate_organization_wireless_radio_auto_rf_channels_request = new \Meraki\Model\RecalculateOrganizationWirelessRadioAutoRfChannelsRequest(); // \Meraki\Model\RecalculateOrganizationWirelessRadioAutoRfChannelsRequest

try {
    $result = $apiInstance->recalculateOrganizationWirelessRadioAutoRfChannels($organization_id, $recalculate_organization_wireless_radio_auto_rf_channels_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoRfApi->recalculateOrganizationWirelessRadioAutoRfChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization ID | |
| **recalculate_organization_wireless_radio_auto_rf_channels_request** | [**\Meraki\Model\RecalculateOrganizationWirelessRadioAutoRfChannelsRequest**](../Model/RecalculateOrganizationWirelessRadioAutoRfChannelsRequest.md)|  | |

### Return type

[**\Meraki\Model\RecalculateOrganizationWirelessRadioAutoRfChannels200Response**](../Model/RecalculateOrganizationWirelessRadioAutoRfChannels200Response.md)

### Authorization

[meraki_api_key](../../README.md#meraki_api_key), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
