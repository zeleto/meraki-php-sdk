# # VmxNetworkDevicesClaim200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the device | [optional]
**lat** | **float** | Latitude of the device | [optional]
**lng** | **float** | Longitude of the device | [optional]
**address** | **string** | Physical address of the device | [optional]
**notes** | **string** | Notes for the device, limited to 255 characters | [optional]
**tags** | **string[]** | List of tags assigned to the device | [optional]
**network_id** | **string** | ID of the network the device belongs to | [optional]
**serial** | **string** | Serial number of the device | [optional]
**model** | **string** | Model of the device | [optional]
**imei** | **string** | IMEI of the device, if applicable | [optional]
**mac** | **string** | MAC address of the device | [optional]
**lan_ip** | **string** | LAN IP address of the device | [optional]
**firmware** | **string** | Firmware version of the device | [optional]
**product_type** | **string** | Product type of the device | [optional]
**details** | [**\Meraki\Model\GetDevice200ResponseDetailsInner[]**](GetDevice200ResponseDetailsInner.md) | Additional device information | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
