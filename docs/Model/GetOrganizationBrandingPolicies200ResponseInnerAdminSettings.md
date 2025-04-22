# # GetOrganizationBrandingPolicies200ResponseInnerAdminSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**applies_to** | **string** | Which kinds of admins this policy applies to. Can be one of &#39;All organization admins&#39;, &#39;All enterprise admins&#39;, &#39;All network admins&#39;, &#39;All admins of networks...&#39;, &#39;All admins of networks tagged...&#39;, &#39;Specific admins...&#39;, &#39;All admins&#39; or &#39;All SAML admins&#39;. | [optional]
**values** | **string[]** | If &#39;appliesTo&#39; is set to one of &#39;Specific admins...&#39;, &#39;All admins of networks...&#39; or &#39;All admins of networks tagged...&#39;, then you must specify this &#39;values&#39; property to provide the set of       entities to apply the branding policy to. For &#39;Specific admins...&#39;, specify an array of admin IDs. For &#39;All admins of       networks...&#39;, specify an array of network IDs and/or configuration template IDs. For &#39;All admins of networks tagged...&#39;,       specify an array of tag names. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
