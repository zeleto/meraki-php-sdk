# # GetDeviceCellularSims200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sims** | [**\Meraki\Model\GetDeviceCellularSims200ResponseSimsInner[]**](GetDeviceCellularSims200ResponseSimsInner.md) | List of SIMs. If a SIM was previously configured and not specified in this request, it will remain unchanged. | [optional]
**sim_ordering** | **string[]** | Specifies the ordering of all SIMs for an MG: primary, secondary, and not-in-use (when applicable). It&#39;s required for devices with 3 or more SIMs and can be used in place of &#39;isPrimary&#39; for dual-SIM devices. To indicate eSIM, use &#39;sim3&#39;. Sim failover will occur only between primary and secondary sim slots. | [optional]
**sim_failover** | [**\Meraki\Model\GetDeviceCellularSims200ResponseSimFailover**](GetDeviceCellularSims200ResponseSimFailover.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
