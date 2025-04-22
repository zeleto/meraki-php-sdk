# # GetNetworkFloorPlans200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**floor_plan_id** | **string** | Floor plan ID | [optional]
**image_url** | **string** | The url link for the floor plan image. | [optional]
**image_url_expires_at** | **string** | The time the image url link will expire. | [optional]
**image_extension** | **string** | The format type of the image. | [optional]
**image_md5** | **string** | The file contents (a base 64 encoded string) of your new image. Supported formats are PNG, GIF, and JPG. Note that all images are saved as PNG files, regardless of the format they are uploaded in. If you upload a new image, and you do NOT specify any new geolocation fields (&#39;center, &#39;topLeftCorner&#39;, etc), the floor plan will be recentered with no rotation in order to maintain the aspect ratio of your new image. | [optional]
**name** | **string** | The name of your floor plan. | [optional]
**devices** | [**\Meraki\Model\VmxNetworkDevicesClaim200Response[]**](VmxNetworkDevicesClaim200Response.md) | List of devices for the floorplan | [optional]
**width** | **float** | The width of your floor plan. | [optional]
**height** | **float** | The height of your floor plan. | [optional]
**center** | [**\Meraki\Model\GetNetworkFloorPlans200ResponseInnerCenter**](GetNetworkFloorPlans200ResponseInnerCenter.md) |  | [optional]
**bottom_left_corner** | [**\Meraki\Model\GetNetworkFloorPlans200ResponseInnerBottomLeftCorner**](GetNetworkFloorPlans200ResponseInnerBottomLeftCorner.md) |  | [optional]
**bottom_right_corner** | [**\Meraki\Model\GetNetworkFloorPlans200ResponseInnerBottomRightCorner**](GetNetworkFloorPlans200ResponseInnerBottomRightCorner.md) |  | [optional]
**top_left_corner** | [**\Meraki\Model\GetNetworkFloorPlans200ResponseInnerTopLeftCorner**](GetNetworkFloorPlans200ResponseInnerTopLeftCorner.md) |  | [optional]
**top_right_corner** | [**\Meraki\Model\GetNetworkFloorPlans200ResponseInnerTopRightCorner**](GetNetworkFloorPlans200ResponseInnerTopRightCorner.md) |  | [optional]
**floor_number** | **float** | The floor number of the floor within the building. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
