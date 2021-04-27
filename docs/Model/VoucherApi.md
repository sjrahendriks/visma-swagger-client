# VoucherApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Purpose: Unique Id provided by eAccounting | [optional] 
**voucher_date** | [**\DateTime**](\DateTime.md) | Format: yyyy-mm-dd | 
**voucher_text** | **string** | Max length: 1000 characters | 
**rows** | [**\Swagger\Client\Model\VoucherRowApi[]**](VoucherRowApi.md) |  | 
**number_and_number_series** | **string** | Purpose: Returns the voucher number. | [optional] 
**number_series** | **string** | Purpose: Returns the number series. Use parameter useDefaultVoucherSeries with false value to set Series. | [optional] 
**attachments** | [**\Swagger\Client\Model\AttachmentLinkApi**](AttachmentLinkApi.md) |  | [optional] 
**modified_utc** | [**\DateTime**](\DateTime.md) |  | [optional] 
**voucher_type** | **int** | 2 &#x3D; ManualVoucher, 5 &#x3D; BankAccountTransferDeposit, 6 &#x3D; BankAccountTransferWithDrawal,   7 &#x3D; PurchaseReceipt, 8 &#x3D; VatReport, 9 &#x3D; SieImport, 10 &#x3D; BankTransactionDeposit, 11 &#x3D; BankTransactionWithdrawal,  12 &#x3D; SupplierInvoiceDebit, 13 &#x3D; SupplierInvoiceCredit, 14 &#x3D; CustomerInvoiceDebit, 15 &#x3D; CustomerInvoiceCredit,  16 &#x3D; ClaimOnCardAcquirer, 17 &#x3D; TaxReturn, 18 &#x3D; AllocationPeriod, 19 &#x3D; AllocationPeriodCorrection,   20 &#x3D; InventoryEvent, 21 &#x3D; EmployerReport, 22 &#x3D; Payslip, 23 &#x3D; CustomerQuickInvoiceDebit,  24 &#x3D; CustomerQuickInvoiceCredit, 25 &#x3D; SupplierQuickInvoiceDebit, 26 &#x3D; SupplierQuickInvoiceCredit,   27 &#x3D; IZettleVoucher | [optional] 
**source_id** | **string** |  | [optional] 
**created_utc** | [**\DateTime**](\DateTime.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

