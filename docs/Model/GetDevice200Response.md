# # GetDevice200Response

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
**mac** | **string** | MAC address of the device | [optional]
**lan_ip** | **string** | LAN IP address of the device | [optional]
**firmware** | **string** | Firmware version of the device | [optional]
**floor_plan_id** | **string** | The floor plan to associate to this device. null disassociates the device from the floorplan. | [optional]
**details** | [**\Meraki\Model\GetDevice200ResponseDetailsInner[]**](GetDevice200ResponseDetailsInner.md) | Additional device information | [optional]
**beacon_id_params** | [**\Meraki\Model\GetDevice200ResponseBeaconIdParams**](GetDevice200ResponseBeaconIdParams.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
