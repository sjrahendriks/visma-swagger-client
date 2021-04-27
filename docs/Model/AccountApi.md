# AccountApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Max length: 100 characters. The name of the account | 
**number** | **string** | The account number | 
**vat_code_id** | **string** | Source: Get from /v2/vatcodes. The Id of the VAT code that is associated with the account. Can be null if account does not have a vat code | [optional] 
**vat_code_description** | **string** | Purpose: Describes what kind of VAT that is associated with the account | [optional] 
**fiscal_year_id** | **string** | Source: Get from /v2/fiscalyears. The Id of the Fiscal year that the account belongs to | 
**reference_code** | **string** | Purpose: Returns the reference code on the account. This feature is for dutch companies only | [optional] 
**type** | **int** | Purpose: Returns account type number. This feature is for dutch companies only | [optional] 
**type_description** | **string** | Purpose: Returns account type descripion | [optional] 
**modified_utc** | [**\DateTime**](\DateTime.md) |  | [optional] 
**is_active** | **bool** | Purpose: If the account is active or not | 
**is_project_allowed** | **bool** | Purpose: If the account is allowed to have projects connected to it | [optional] 
**is_cost_center_allowed** | **bool** | Purpose: If the account is allowed to have cost centers connected to it | [optional] 
**is_blocked_for_manual_booking** | **bool** | Purpose: If the account is blocked for manual bookkeeping. Automatic bookkeeping will always be available, no matter the setting on this property | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

