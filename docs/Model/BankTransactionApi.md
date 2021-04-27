# BankTransactionApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**transaction_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**is_reconciled** | **bool** | True if the transaction has been matched | [optional] 
**reference** | **string** | Represents the invoice reference of the bank transaction | [optional] 
**original_amount** | **double** | The amount which represents the original amount of the bank transaction | [optional] 
**charge_amount** | **double** | The amount which represents bank charges | [optional] 
**charge_currency** | **string** | The currency of the bank charges amount | [optional] 
**transaction_amount** | **double** | The total amount of the bank transaction, including bank charges | [optional] 
**transaction_amount_currency** | **string** | The currency corresponding to the transaction amount | [optional] 
**original_currency** | **string** | The currency corresponding to the original amount | [optional] 
**rows** | [**\Swagger\Client\Model\BankTransactionRowApi[]**](BankTransactionRowApi.md) | Represents the accounting transactions related to the bank transaction | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

