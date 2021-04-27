# BankAccountApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bank** | **string** | Not required for dutch companies and bank accounts of cash or tax account type. Source: Get from /v2/banks | [optional] 
**bank_account_type** | **int** | 1 &#x3D; ChequeAccount, 2 &#x3D; CashAccount, 3 &#x3D; SavingsAccount, 4 &#x3D; CurrencyAccount, 5 &#x3D; DigitalWalletAccount, 6 &#x3D; CashCreditAccount, 7 &#x3D; TaxAccount | 
**bank_account_type_description** | **string** | Purpose: Description of Bank Account type | [optional] 
**bban** | **string** | Max length: 35 characters. Also known as Bank Account number. Not required for bank accounts of cash or tax account type | [optional] 
**iban** | **string** | Max length: 35 characters | [optional] 
**name** | **string** | Max length: 200 characters | 
**id** | **string** | Purpose: Unique Id provided by eAccounting | [optional] 
**is_active** | **bool** |  | [optional] 
**ledger_account_number** | **int** | The general ledger account number | 
**has_active_bank_agreement** | **bool** |  | [optional] 
**is_default_cheque_account** | **bool** | Purpose: Only used when having several cheque accounts | [optional] 
**currency_code** | **string** | Purpose: Default value: Base currency of the company | [optional] 
**modified_utc** | [**\DateTime**](\DateTime.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

