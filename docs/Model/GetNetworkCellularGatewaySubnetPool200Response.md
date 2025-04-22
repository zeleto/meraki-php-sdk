# # GetNetworkCellularGatewaySubnetPool200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**deployment_mode** | **string** | Deployment mode for the cellular gateways in the network. (Passthrough/Routed) | [optional]
**cidr** | **string** | CIDR of the pool of subnets. Each MG in this network will automatically pick a subnet from this pool. | [optional]
**mask** | **int** | Mask used for the subnet of all MGs in  this network. | [optional]
**subnets** | [**\Meraki\Model\GetNetworkCellularGatewaySubnetPool200ResponseSubnetsInner[]**](GetNetworkCellularGatewaySubnetPool200ResponseSubnetsInner.md) | List of subnets of all MGs in this network. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
