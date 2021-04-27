# InvoicePaymentApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_bank_account_id** | **string** | The bank account to which the payment is recorded | 
**payment_date** | [**\DateTime**](\DateTime.md) |  | 
**reference** | **string** |  | [optional] 
**payment_amount** | **double** | Amount in invoice currency. If bank fee: for customer invoices, extract that amount here. For supplier invoices, do not extract bank fee amount here. | 
**payment_currency** | **string** |  | 
**domestic_payment_amount** | **double** | Only for non domestic invoices paid with cheque account. If bank fee: for customer invoices, extract that amount here. For supplier invoices, do not extract bank fee amount here. | [optional] 
**bank_fee_amount** | **double** |  | [optional] 
**payment_type** | **int** | 1 &#x3D; PartialPayment, 2 &#x3D; CompletePayment, 3 &#x3D; Rounding | 
**factoring_fee_amount** | **double** | Factoring fee amount for the current invoice, supported only for customer invoice payments | [optional] 
**factoring_fee_account_number** | **int** | Factoring account number, supported only for customer invoice payments | [optional] 
**bank_transaction_id** | **string** | Purpose: The id inside eAccounting of the bank transaction corresponding to the payment | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

