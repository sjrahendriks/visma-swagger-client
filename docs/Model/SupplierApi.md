# SupplierApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Purpose: Unique Id provided by eAccounting | [optional] 
**supplier_number** | **string** | Max length: 16 characters. Purpose: Unique identifier. If not provided, eAccounting will provide one | [optional] 
**address1** | **string** | Max length: 50 characters | [optional] 
**address2** | **string** | Max length: 50 characters | [optional] 
**automatic_payment_service** | **bool** | Purpose: Indicates if the supplier is paid by an automatic payment service. Supplier invoices to such suppliers will not be sent to the bank via the bank integration  Default value: false | [optional] 
**bank_account_number** | **string** | Max length: 50 characters. Purpose: Only used in norwegian, dutch and danish eAccounting for domestic payments | [optional] 
**bank_bban** | **string** | Purpose: Used on foreign payments to identify a bankaccount together with Bank Code (SupplierBankCode)  Format NO: 11 characters, Format DK: 11-14 characters | [optional] 
**bank_bic** | **string** | Purpose: Used on foreign payments to identify a bankaccount together with IBAN (SupplierBankIban)  Format: 6 letters followed by 2 or 5 characters (total length 8 or 11) | [optional] 
**bank_code** | **string** | Purpose: Used on foreign payments to identify a bankaccount together with BBAN (SupplierBankBban)  Format: 2 letters followed by at least 3 characters | [optional] 
**bank_country_code** | **string** | Max length: 2 characters. Default value: Country of the supplier | [optional] 
**bankgiro_number** | **string** | Max length: 10 characters. Purpose: Only used in swedish eAccounting, for swedish suppliers | [optional] 
**bank_iban** | **string** | Purpose: Used on foreign payments to identify a bankaccount together with BIC (SupplierBankBic)  Format: 2 letters for country code, 2 control digits, 3 characters for bank identification | [optional] 
**bank_name** | **string** | Max length: 50 characters | [optional] 
**city** | **string** | Max length: 50 characters | [optional] 
**contact_person_email** | **string** | Max length: 225 characters | [optional] 
**contact_person_mobile** | **string** | Max length: 50 characters | [optional] 
**contact_person_name** | **string** | Max length: 50 characters | [optional] 
**contact_person_phone** | **string** | Max length: 50 characters | [optional] 
**corporate_identity_number** | **string** | Max length: 20 characters | [optional] 
**country_code** | **string** |  | [optional] 
**created_utc** | [**\DateTime**](\DateTime.md) |  | [optional] 
**currency_code** | **string** | Max length: 3 characters. Default value: Currency of the user company | [optional] 
**email_address** | **string** | Max length: 225 characters | [optional] 
**mobile_phone** | **string** | Max length: 50 characters | [optional] 
**modified_utc** | [**\DateTime**](\DateTime.md) |  | [optional] 
**name** | **string** | Max length: 50 characters | 
**note** | **string** | Max length: 400 characters | [optional] 
**plusgiro_number** | **string** | Max length: 10 characters. Purpose: Only used in swedish eAccounting, for swedish suppliers | [optional] 
**postal_code** | **string** | Max length: 10 characters | [optional] 
**telephone** | **string** | Max length: 50 characters | [optional] 
**terms_of_payment_id** | **string** | Source: Get from /v2/termsofpayment | 
**vat_number** | **string** | Max length: 20 characters. Purpose: Only used in dutch eAccounting, used to check the VAT number before deducting the VAT (legislation) or for 3rd parties to validate supplier invoice information | [optional] 
**www_address** | **string** | Max length: 255 characters | [optional] 
**bank_fee_code** | **int** | Purpose: Used for foreign payments to determine which party that pays for aditional bank fees. 0 &#x3D; None, 1 &#x3D; SenderPaysAllBankCharges, 2 &#x3D; ReceiverPaysAllBankCharges, 3 &#x3D; ReceiverPaysForeignCosts | [optional] 
**pay_from_bank_account_id** | **string** | Source: Get from /v2/bankaccounts. Purpose: Used for foreign payments to determine which bankaccount the payment will be from | [optional] 
**foreign_payment_code_id** | **string** | Source: Get from /v2/foreignpaymentcodes. Purpose: Used for categorization of foreign purchases (NO and SE only). | [optional] 
**uses_payment_reference_numbers** | **bool** | Purpose: Used if the supplier uses payment reference numbers, OCR, KID etc. NO and SE only. Default: false | [optional] 
**is_active** | **bool** | Default: true | [optional] 
**self_employed_without_fixed_address** | **bool** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

