# # UpdateNetworkWirelessSsidRequestLocalRadiusCertificateAuthentication

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | Whether or not to use EAP-TLS certificate-based authentication to validate wireless clients. | [optional]
**use_ldap** | **bool** | Whether or not to verify the certificate with LDAP. | [optional]
**use_ocsp** | **bool** | Whether or not to verify the certificate with OCSP. | [optional]
**ocsp_responder_url** | **string** | (Optional) The URL of the OCSP responder to verify client certificate status. | [optional]
**client_root_ca_certificate** | [**\Meraki\Model\UpdateNetworkWirelessSsidRequestLocalRadiusCertificateAuthenticationClientRootCaCertificate**](UpdateNetworkWirelessSsidRequestLocalRadiusCertificateAuthenticationClientRootCaCertificate.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
