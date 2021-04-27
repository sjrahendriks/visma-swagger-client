# SupplierInvoiceDraftRowApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Purpose: Unique Id provided by eAccounting. This property will be updated on every change on the supplier invoice draft | [optional] 
**account_number** | **int** |  | [optional] 
**account_name** | **string** |  | [optional] 
**vat_code_id** | **string** | Purpose: Returns the Vat code id from the provided account number | [optional] 
**cost_center_item_id1** | **string** | Source: Get from /v2/costcenters | [optional] 
**cost_center_item_id2** | **string** | Source: Get from /v2/costcenters | [optional] 
**cost_center_item_id3** | **string** | Source: Get from /v2/costcenters | [optional] 
**project_id** | **string** | Source: Get from /v2/projects | [optional] 
**debit_amount** | **double** | Format: Max 2 decimals | [optional] 
**credit_amount** | **double** | Format: Max 2 decimals | [optional] 
**transaction_text** | **string** |  | [optional] 
**line_number** | **int** | Default: 1 | [optional] 
**quantity** | **double** | Format: Max 2 decimals  Purpose: This feature is for dutch companies only which enabled agriculture support | [optional] 
**weight** | **double** | Format: Max 2 decimals  Purpose: This feature is for dutch companies only which enabled agriculture support | [optional] 
**delivery_date** | [**\DateTime**](\DateTime.md) | Format: YYYY-MM-DD  Purpose: This feature is for dutch companies only which enabled agriculture support | [optional] 
**harvest_year** | **int** | Purpose: This feature is for dutch companies only which enabled agriculture support | [optional] 
**vat_amount** | **double** | Only for Denmark and Netherlands | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

