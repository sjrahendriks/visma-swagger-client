# CustomerLedgerItemApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency_code** | **string** | Max length: 3 characters | 
**currency_rate** | **double** |  | [optional] 
**currency_rate_unit** | **int** |  | [optional] 
**customer_id** | **string** | Source: Get from /v2/customers. | 
**due_date** | [**\DateTime**](\DateTime.md) | Format: YYYY-MM-DD | 
**id** | **string** | Purpose: Unique Id provided by eAccounting | [optional] 
**invoice_date** | [**\DateTime**](\DateTime.md) | Format: YYYY-MM-DD | 
**invoice_number** | **int** |  | 
**is_credit_invoice** | **bool** |  | 
**payment_reference_number** | **string** | Purpose: Empty if UsesPaymentReferenceNumber not activated on the company. Use /v2/companysettings. | [optional] 
**remaining_amount_invoice_currency** | **double** |  | 
**roundings_amount_invoice_currency** | **double** |  | 
**total_amount_invoice_currency** | **double** |  | 
**vat_amount_invoice_currency** | **double** |  | 
**voucher_id** | **string** | Source: Get from /v2/vouchers/{fiscalyearid}. | 
**modified_utc** | [**\DateTime**](\DateTime.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

