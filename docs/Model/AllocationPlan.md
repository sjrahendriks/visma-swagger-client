# AllocationPlan

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**supplier_invoice_id** | **string** | If assigned, SupplierInvoiceRow must be set | [optional] 
**supplier_invoice_row** | **int** | Required if SupplierInvoiceId is assigned | [optional] 
**voucher_id** | **string** | If assigned, VoucherRow must be set | [optional] 
**voucher_row** | **int** | Required if VoucherId is assigned | [optional] 
**bookkeeping_start_date** | [**\DateTime**](\DateTime.md) |  | 
**amount_to_allocate** | **double** |  | 
**quantity_to_allocate** | **double** | Used for dutch companies that use agricultural settings | [optional] 
**weight_to_allocate** | **double** | Used for dutch companies that use agricultural settings | [optional] 
**allocation_account_number** | **int** |  | 
**number_of_allocation_periods** | **int** |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

