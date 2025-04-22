# # GetOrganizationSwitchPortsBySwitch200ResponsePortsInner

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
**rstp_enabled** | **bool** | The rapid spanning tree protocol status. | [optional]
**stp_guard** | **string** | The state of the STP guard (&#39;disabled&#39;, &#39;root guard&#39;, &#39;bpdu guard&#39; or &#39;loop guard&#39;). | [optional]
**link_negotiation** | **string** | The link speed for the switch port. | [optional]
**access_policy_type** | **string** | The type of the access policy of the switch port. Only applicable to access ports. Can be one of &#39;Open&#39;, &#39;Custom access policy&#39;, &#39;MAC allow list&#39; or &#39;Sticky MAC allow list&#39;. | [optional]
**sticky_mac_allow_list** | **string[]** | The initial list of MAC addresses for sticky Mac allow list. Only applicable when &#39;accessPolicyType&#39; is &#39;Sticky MAC allow list&#39;. | [optional]
**sticky_mac_allow_list_limit** | **int** | The maximum number of MAC addresses for sticky MAC allow list. Only applicable when &#39;accessPolicyType&#39; is &#39;Sticky MAC allow list&#39;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
