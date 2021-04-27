# CustomerInvoiceDraftValidationApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total_amount_invoice_currency** | **double** | Invoice total amount. Should be negative when credit invoice | [optional] 
**total_vat_amount_invoice_currency** | **double** | Invoice VAT amount. Should be negative when credit invoice | [optional] 
**total_roundings_invoice_currency** | **double** | Invoice Roundings amount. Can be both positive and negative depending on the rounding. | [optional] 
**rows** | [**\Swagger\Client\Model\CustomerInvoiceDraftValidationRowApi[]**](CustomerInvoiceDraftValidationRowApi.md) | A set of invoice rows to validate. We match upon the line number. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

