# MessageThreadApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**document_type** | **int** | The document type to which the message thread is attached   None &#x3D; 0, CustomerInvoice &#x3D; 1, CustomerInvoiceDraft &#x3D; 2, SupplierInvoice &#x3D; 3, Voucher &#x3D; 4, Quotation &#x3D; 5, Order &#x3D; 6, SupplierInvoiceDraft &#x3D; 7, WebshopOrder &#x3D; 8, Customer &#x3D; 9, Receipt &#x3D; 10, Article &#x3D; 11, VatReport &#x3D; 12, Supplier &#x3D; 13, Inventory &#x3D; 14, Employee &#x3D; 15, Payslip &#x3D; 16 | [optional] 
**document_id** | **string** | Default: No attached document  Used in combination with DocumentType, represents the unique identifier of the document to which it is attached | [optional] 
**document_number** | **string** |  | [optional] 
**subject** | **string** |  | [optional] 
**modified_utc** | [**\DateTime**](\DateTime.md) |  | [optional] 
**is_closed** | **bool** |  | [optional] 
**message_receivers** | [**\Swagger\Client\Model\MessageReceiverApi[]**](MessageReceiverApi.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

