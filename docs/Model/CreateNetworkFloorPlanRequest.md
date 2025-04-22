# # CreateNetworkFloorPlanRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of your floor plan. |
**center** | [**\Meraki\Model\GetNetworkFloorPlans200ResponseInnerCenter**](GetNetworkFloorPlans200ResponseInnerCenter.md) |  | [optional]
**bottom_left_corner** | [**\Meraki\Model\GetNetworkFloorPlans200ResponseInnerBottomLeftCorner**](GetNetworkFloorPlans200ResponseInnerBottomLeftCorner.md) |  | [optional]
**bottom_right_corner** | [**\Meraki\Model\GetNetworkFloorPlans200ResponseInnerBottomRightCorner**](GetNetworkFloorPlans200ResponseInnerBottomRightCorner.md) |  | [optional]
**top_left_corner** | [**\Meraki\Model\GetNetworkFloorPlans200ResponseInnerTopLeftCorner**](GetNetworkFloorPlans200ResponseInnerTopLeftCorner.md) |  | [optional]
**top_right_corner** | [**\Meraki\Model\GetNetworkFloorPlans200ResponseInnerTopRightCorner**](GetNetworkFloorPlans200ResponseInnerTopRightCorner.md) |  | [optional]
**floor_number** | **float** | The floor number of the floors within the building | [optional]
**image_contents** | **string** | The file contents (a base 64 encoded string) of your image. Supported formats are PNG, GIF, and JPG. Note that all images are saved as PNG files, regardless of the format they are uploaded in. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
