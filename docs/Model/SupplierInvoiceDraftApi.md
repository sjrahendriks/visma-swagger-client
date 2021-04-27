# SupplierInvoiceDraftApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Purpose: Unique Id provided by eAccounting | [optional] 
**supplier_id** | **string** | Source: Get from /v2/suppliers | 
**bank_account_id** | **string** | Source: Get from /v2/bankaccounts, if not provided the supplier bank account will be used. | [optional] 
**invoice_date** | [**\DateTime**](\DateTime.md) | Format: YYYY-MM-DD. Default: Today&#x27;s date | [optional] 
**payment_date** | [**\DateTime**](\DateTime.md) | Format: YYYY-MM-DD | [optional] 
**due_date** | [**\DateTime**](\DateTime.md) | Format: YYYY-MM-DD. Default: Date based on the suppliers Terms of payment | [optional] 
**invoice_number** | **string** | Max length: 50 characters | [optional] 
**total_amount** | **double** | Format: Max 2 decimals | [optional] 
**vat** | **double** | Format: Max 2 decimals | [optional] 
**vat_high** | **double** | Format: Max 2 decimals | [optional] 
**vat_medium** | **double** | Format: Max 2 decimals | [optional] 
**vat_low** | **double** | Format: Max 2 decimals | [optional] 
**is_credit_invoice** | **bool** |  | 
**currency_code** | **string** | Max length: 3 characters | [optional] 
**currency_rate** | **double** | Purpose: If currency code is domestic and currency rate isn&#x27;t included it will be fetched from eAccounting | [optional] 
**ocr_number** | **string** | Max length: 25 characters | [optional] 
**message** | **string** | Max length: 25 characters | [optional] 
**created_utc** | [**\DateTime**](\DateTime.md) |  | [optional] 
**modified_utc** | [**\DateTime**](\DateTime.md) |  | [optional] 
**rows** | [**\Swagger\Client\Model\SupplierInvoiceDraftRowApi[]**](SupplierInvoiceDraftRowApi.md) |  | 
**supplier_name** | **string** | Max length: 50 characters | [optional] 
**supplier_number** | **string** | Max length: 50 characters | [optional] 
**self_employed_without_fixed_address** | **bool** |  | [optional] 
**is_quick_invoice** | **bool** |  | [optional] 
**is_domestic** | **bool** |  | [optional] 
**approval_status** | **int** | Purpose: Use /v2/approval/supplierinvoice/{id}. 0 &#x3D; None, 1 &#x3D; Approved, 2 &#x3D; Rejected, 3 &#x3D; ReadyForApproval | [optional] 
**skip_send_to_bank** | **bool** | Invoice paid manually, won&#x27;t be sent to the bank. Requires active bank integration. | [optional] 
**allocation_periods** | [**\Swagger\Client\Model\AllocationPeriodApi[]**](AllocationPeriodApi.md) | Purpose: For create use POST /v2/allocationperiods. | [optional] 
**attachments** | [**\Swagger\Client\Model\AttachmentLinkApi**](AttachmentLinkApi.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

