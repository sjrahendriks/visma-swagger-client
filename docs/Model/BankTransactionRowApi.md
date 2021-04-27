# BankTransactionRowApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_voucher_id** | **string** | Source: Get from /v2/vouchers | [optional] 
**payment_voucher_number** | **string** |  | [optional] 
**amount_transaction_currency** | **double** |  | [optional] 
**number** | **string** | Depending on the Source property, it displays the number of the document associated to it | [optional] 
**name** | **string** | Depending on the Source property, displays information like invoice customer or supplier name, or document description | [optional] 
**reference** | **string** | If the source is a customer or supplier invoice, it represents the OCR number of the specific invoice | [optional] 
**source** | **string** | The origin of the bank transaction | [optional] 
**source_id** | **string** | Represents the unique identifier of the Source property | [optional] 
**voucher_id** | **string** | Source: Get from /v2/vouchers | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

