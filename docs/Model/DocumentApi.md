# DocumentApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**content_type** | **string** |  | [optional] 
**created_utc** | [**\DateTime**](\DateTime.md) |  | [optional] 
**name** | **string** |  | [optional] 
**name_without_extension** | **string** |  | [optional] 
**size** | **int** | Calculated in bytes | [optional] 
**type** | **int** | 0 &#x3D; SupplierInvoiceDraftAttachment, 1 &#x3D; SupplierInvoiceAttachment, 2 &#x3D; SupplierInvoiceXml,  10 &#x3D; CustomerInvoiceXml, 11 &#x3D; CustomerInvoicePdf, 12 &#x3D; CustomerInvoicePaymentReminderPdf,  13 &#x3D; CompanyLogo, 14 &#x3D; DocumentBackgroundPdf, 20 &#x3D; PhotoReceipt, 21 &#x3D; PhotoSupplierInvoice,  30 &#x3D; AutoInvoiceAssembly, 40 &#x3D; FinvoiceReceiverInfoXml, 41 &#x3D; VatReportPdf | [optional] 
**temporary_url** | **string** | This is a temporary url that will expire and should not be stored. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

