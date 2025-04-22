# # GetNetworkVlanProfiles200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**iname** | **string** | IName of the VLAN profile | [optional]
**name** | **string** | Name of the profile, string length must be from 1 to 255 characters | [optional]
**is_default** | **bool** | Boolean indicating the default VLAN Profile for any device that does not have a profile explicitly assigned | [optional]
**vlan_names** | [**\Meraki\Model\GetNetworkVlanProfiles200ResponseInnerVlanNamesInner[]**](GetNetworkVlanProfiles200ResponseInnerVlanNamesInner.md) | An array of named VLANs | [optional]
**vlan_groups** | [**\Meraki\Model\GetNetworkVlanProfiles200ResponseInnerVlanGroupsInner[]**](GetNetworkVlanProfiles200ResponseInnerVlanGroupsInner.md) | An array of named VLANs | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
