# # GetOrganizationFloorPlansAutoLocateDevices200ResponseInnerItemsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Device Name | [optional]
**serial** | **string** | Device Serial Number | [optional]
**mac** | **string** | MAC Address | [optional]
**model** | **string** | Model | [optional]
**tags** | **string[]** | Tags | [optional]
**status** | **string** | Device Status | [optional]
**network** | [**\Meraki\Model\GetOrganizationFloorPlansAutoLocateDevices200ResponseInnerItemsInnerNetwork**](GetOrganizationFloorPlansAutoLocateDevices200ResponseInnerItemsInnerNetwork.md) |  | [optional]
**floor_plan** | [**\Meraki\Model\GetOrganizationFloorPlansAutoLocateDevices200ResponseInnerItemsInnerFloorPlan**](GetOrganizationFloorPlansAutoLocateDevices200ResponseInnerItemsInnerFloorPlan.md) |  | [optional]
**lat** | **float** | Latitude | [optional]
**lng** | **float** | Longitude | [optional]
**auto_locate** | [**\Meraki\Model\GetOrganizationFloorPlansAutoLocateDevices200ResponseInnerItemsInnerAutoLocate**](GetOrganizationFloorPlansAutoLocateDevices200ResponseInnerItemsInnerAutoLocate.md) |  | [optional]
**type** | **string** | The type of auto locate position. Possible values: &#39;user&#39;, &#39;gnss&#39;, and &#39;calculated&#39; | [optional]
**is_anchor** | **bool** | Whether or not this auto locate position is an anchor | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
