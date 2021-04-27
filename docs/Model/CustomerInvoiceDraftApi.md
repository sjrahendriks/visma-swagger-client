# CustomerInvoiceDraftApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Purpose: Unique Id provided by eAccounting | [optional] 
**customer_id** | **string** | Source: Get from /v2/customers | 
**created_utc** | [**\DateTime**](\DateTime.md) | Purpose: Is automatically set | [optional] 
**is_credit_invoice** | **bool** |  | [optional] 
**rot_reduced_invoicing_type** | **int** | 0 &#x3D; Normal, 1 &#x3D; Rot, 2 &#x3D; Rut | 
**rot_reduced_invoicing_property_name** | **string** | Max length: 40 characters | [optional] 
**rot_reduced_invoicing_org_number** | **string** | Max length: 11 characters | [optional] 
**rot_reduced_invoicing_amount** | **double** | Format: 2 decimals | [optional] 
**rot_reduced_invoicing_automatic_distribution** | **bool** | Default: False | [optional] 
**rot_property_type** | **int** |  | [optional] 
**house_work_other_costs** | **double** |  | [optional] 
**rows** | [**\Swagger\Client\Model\CustomerInvoiceDraftRowApi[]**](CustomerInvoiceDraftRowApi.md) |  | [optional] 
**persons** | [**\Swagger\Client\Model\SalesDocumentRotRutReductionPersonApi[]**](SalesDocumentRotRutReductionPersonApi.md) |  | [optional] 
**your_reference** | **string** | Max length: 100 characters | [optional] 
**our_reference** | **string** | Max length: 100 characters | [optional] 
**buyers_order_reference** | **string** | Purpose: Used when sending electronic invoices. Max length: 35 characters. Can be null or empty | [optional] 
**electronic_reference** | **string** | Set this if you later intend to send the invoice electronically. Can only be set for non-private individuals | [optional] 
**invoice_customer_name** | **string** | Purpose: Value is automatically set up depending on the selected customer&#x27;s properties | [optional] 
**invoice_address1** | **string** | Max length: 50 characters  Set a value if you want to override the existing property value taken from the customer | [optional] 
**invoice_address2** | **string** | Max length: 50 characters  Set a value if you want to override the existing property value taken from the customer | [optional] 
**invoice_postal_code** | **string** | Purpose: Value is automatically set up depending on the selected customer&#x27;s properties | [optional] 
**invoice_city** | **string** | Purpose: Value is automatically set up depending on the selected customer&#x27;s properties | [optional] 
**invoice_country_code** | **string** | Purpose: Value is automatically set up depending on the selected customer&#x27;s properties | [optional] 
**invoice_currency_code** | **string** |  | [optional] 
**delivery_customer_name** | **string** | Max length: 50 characters  Set a value if you want to override the existing property value taken from the customer | [optional] 
**delivery_address1** | **string** | Max length: 50 characters  Set a value if you want to override the existing property value taken from the customer | [optional] 
**delivery_address2** | **string** | Max length: 50 characters  Set a value if you want to override the existing property value taken from the customer | [optional] 
**delivery_postal_code** | **string** | Max length: 10 characters  Set a value if you want to override the existing property value taken from the customer | [optional] 
**delivery_city** | **string** | Max length: 50 characters  Set a value if you want to override the existing property value taken from the customer | [optional] 
**delivery_country_code** | **string** | Max length: 2 characters  Set a value if you want to override the existing property value taken from the customer | [optional] 
**delivery_method_name** | **string** | Max length: 50 characters | [optional] 
**delivery_term_name** | **string** | Max length: 50 characters | [optional] 
**delivery_method_code** | **string** | Max length: 20 characters | [optional] 
**delivery_term_code** | **string** | Max length: 20 characters | [optional] 
**eu_third_party** | **bool** |  | 
**customer_is_private_person** | **bool** | Purpose: Value is automatically set up depending on the selected customer&#x27;s properties | [optional] 
**reverse_charge_on_construction_services** | **bool** |  | [optional] 
**sales_document_attachments** | **string[]** |  | [optional] 
**invoice_date** | [**\DateTime**](\DateTime.md) | Optional invoice date. | [optional] 
**delivery_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**total_amount** | **double** |  | [optional] 
**total_vat_amount** | **double** |  | [optional] 
**total_roundings** | **double** |  | [optional] 
**total_amount_base_currency** | **double** |  | [optional] 
**total_vat_amount_base_currency** | **double** |  | [optional] 
**customer_number** | **string** | Max length: 16 characters | [optional] 
**includes_vat** | **bool** | Purpose: If true the unit prices on rows include VAT. The value is set upon creation depending whether \&quot;Show prices excl. VAT for private individuals\&quot; in company settings is marked or not | [optional] 
**replace_unit_price_when_zero** | **bool** | When set to true an unit price of zero will be replaced with the unit price on the article register. When set to false it allows creation of drafts with unit price 0 on one or more rows.  Rows with an unit price other than 0 are not affected by this setting. The default value is false. | [optional] 
**uses_green_technology** | **bool** | Set to true if this customer invoice draft benefits from deduction on Green Technology.  If set to true the customer invoice draft must have RotReducedInvoicingType set to normal and contain at least one row with applicable deduction. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

