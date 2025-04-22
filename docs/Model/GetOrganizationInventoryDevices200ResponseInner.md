# # GetOrganizationInventoryDevices200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mac** | **string** | MAC address of the device | [optional]
**serial** | **string** | Serial number of the device | [optional]
**name** | **string** | Name of the device | [optional]
**model** | **string** | Model type of the device | [optional]
**network_id** | **string** | Network Id of the device | [optional]
**order_number** | **string** | Order number of the device | [optional]
**claimed_at** | **\DateTime** | Claimed time of the device | [optional]
**license_expiration_date** | **\DateTime** | License expiration date of the device | [optional]
**tags** | **string[]** | Device tags | [optional]
**product_type** | **string** | Product type of the device | [optional]
**country_code** | **string** | Country/region code from device, network, or store order | [optional]
**details** | [**\Meraki\Model\GetDevice200ResponseDetailsInner[]**](GetDevice200ResponseDetailsInner.md) | Additional device information | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
