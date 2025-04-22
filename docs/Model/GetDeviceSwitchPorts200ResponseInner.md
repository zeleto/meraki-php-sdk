# # GetDeviceSwitchPorts200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**port_id** | **string** | The identifier of the switch port. | [optional]
**name** | **string** | The name of the switch port. | [optional]
**tags** | **string[]** | The list of tags of the switch port. | [optional]
**enabled** | **bool** | The status of the switch port. | [optional]
**poe_enabled** | **bool** | The PoE status of the switch port. | [optional]
**type** | **string** | The type of the switch port (&#39;trunk&#39;, &#39;access&#39;, &#39;stack&#39; or &#39;routed&#39;). | [optional]
**vlan** | **int** | The VLAN of the switch port. For a trunk port, this is the native VLAN. A null value will clear the value set for trunk ports. | [optional]
**voice_vlan** | **int** | The voice VLAN of the switch port. Only applicable to access ports. | [optional]
**allowed_vlans** | **string** | The VLANs allowed on the switch port. Only applicable to trunk ports. | [optional]
**isolation_enabled** | **bool** | The isolation status of the switch port. | [optional]
**rstp_enabled** | **bool** | The rapid spanning tree protocol status. | [optional]
**stp_guard** | **string** | The state of the STP guard (&#39;disabled&#39;, &#39;root guard&#39;, &#39;bpdu guard&#39; or &#39;loop guard&#39;). | [optional]
**link_negotiation** | **string** | The link speed for the switch port. | [optional]
**link_negotiation_capabilities** | **string[]** | Available link speeds for the switch port. | [optional]
**port_schedule_id** | **string** | The ID of the port schedule. A value of null will clear the port schedule. | [optional]
**schedule** | [**\Meraki\Model\GetDeviceSwitchPorts200ResponseInnerSchedule**](GetDeviceSwitchPorts200ResponseInnerSchedule.md) |  | [optional]
**udld** | **string** | The action to take when Unidirectional Link is detected (Alert only, Enforce). Default configuration is Alert only. | [optional]
**access_policy_type** | **string** | The type of the access policy of the switch port. Only applicable to access ports. Can be one of &#39;Open&#39;, &#39;Custom access policy&#39;, &#39;MAC allow list&#39; or &#39;Sticky MAC allow list&#39;. | [optional]
**access_policy_number** | **int** | The number of a custom access policy to configure on the switch port. Only applicable when &#39;accessPolicyType&#39; is &#39;Custom access policy&#39;. | [optional]
**mac_allow_list** | **string[]** | Only devices with MAC addresses specified in this list will have access to this port. Up to 20 MAC addresses can be defined. Only applicable when &#39;accessPolicyType&#39; is &#39;MAC allow list&#39;. | [optional]
**sticky_mac_allow_list** | **string[]** | The initial list of MAC addresses for sticky Mac allow list. Only applicable when &#39;accessPolicyType&#39; is &#39;Sticky MAC allow list&#39;. | [optional]
**sticky_mac_allow_list_limit** | **int** | The maximum number of MAC addresses for sticky MAC allow list. Only applicable when &#39;accessPolicyType&#39; is &#39;Sticky MAC allow list&#39;. | [optional]
**storm_control_enabled** | **bool** | The storm control status of the switch port. | [optional]
**adaptive_policy_group_id** | **string** | The adaptive policy group ID that will be used to tag traffic through this switch port. This ID must pre-exist during the configuration, else needs to be created using adaptivePolicy/groups API. Cannot be applied to a port on a switch bound to profile. | [optional]
**adaptive_policy_group** | [**\Meraki\Model\GetDeviceSwitchPorts200ResponseInnerAdaptivePolicyGroup**](GetDeviceSwitchPorts200ResponseInnerAdaptivePolicyGroup.md) |  | [optional]
**peer_sgt_capable** | **bool** | If true, Peer SGT is enabled for traffic through this switch port. Applicable to trunk port only, not access port. Cannot be applied to a port on a switch bound to profile. | [optional]
**flexible_stacking_enabled** | **bool** | For supported switches (e.g. MS420/MS425), whether or not the port has flexible stacking enabled. | [optional]
**dai_trusted** | **bool** | If true, ARP packets for this port will be considered trusted, and Dynamic ARP Inspection will allow the traffic. | [optional]
**profile** | [**\Meraki\Model\GetDeviceSwitchPorts200ResponseInnerProfile**](GetDeviceSwitchPorts200ResponseInnerProfile.md) |  | [optional]
**module** | [**\Meraki\Model\GetDeviceSwitchPorts200ResponseInnerModule**](GetDeviceSwitchPorts200ResponseInnerModule.md) |  | [optional]
**mirror** | [**\Meraki\Model\GetDeviceSwitchPorts200ResponseInnerMirror**](GetDeviceSwitchPorts200ResponseInnerMirror.md) |  | [optional]
**dot3az** | [**\Meraki\Model\GetDeviceSwitchPorts200ResponseInnerDot3az**](GetDeviceSwitchPorts200ResponseInnerDot3az.md) |  | [optional]
**stackwise_virtual** | [**\Meraki\Model\GetDeviceSwitchPorts200ResponseInnerStackwiseVirtual**](GetDeviceSwitchPorts200ResponseInnerStackwiseVirtual.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
