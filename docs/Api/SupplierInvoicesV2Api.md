# Swagger\Client\SupplierInvoicesV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**supplierInvoicesV2Get**](SupplierInvoicesV2Api.md#supplierinvoicesv2get) | **GET** /v2/supplierinvoices | Get a list of supplier invoices
[**supplierInvoicesV2Get_0**](SupplierInvoicesV2Api.md#supplierinvoicesv2get_0) | **GET** /v2/supplierinvoices/{supplierInvoiceId} | Get a supplier
[**supplierInvoicesV2Post**](SupplierInvoicesV2Api.md#supplierinvoicesv2post) | **POST** /v2/supplierinvoices | Create a supplier invoice.
[**supplierInvoicesV2Post_0**](SupplierInvoicesV2Api.md#supplierinvoicesv2post_0) | **POST** /v2/supplierinvoices/{invoiceId}/payments | Post a payment towards a bookkept supplier invoice

# **supplierInvoicesV2Get**
> \Swagger\Client\Model\PaginatedResponseSupplierInvoiceApi supplierInvoicesV2Get()

Get a list of supplier invoices

<p>Requires any of the following scopes: <br><b>ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SupplierInvoicesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->supplierInvoicesV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesV2Api->supplierInvoicesV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaginatedResponseSupplierInvoiceApi**](../Model/PaginatedResponseSupplierInvoiceApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoicesV2Get_0**
> \Swagger\Client\Model\SupplierInvoiceApi supplierInvoicesV2Get_0($supplier_invoice_id)

Get a supplier

<p>Requires any of the following scopes: <br><b>ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SupplierInvoicesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$supplier_invoice_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->supplierInvoicesV2Get_0($supplier_invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesV2Api->supplierInvoicesV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_invoice_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\SupplierInvoiceApi**](../Model/SupplierInvoiceApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoicesV2Post**
> \Swagger\Client\Model\SupplierInvoiceApi supplierInvoicesV2Post($body, $use_default_vat_codes, $calculate_vat_on_cost_accounts, $duplicate_check_extended_validation)

Create a supplier invoice.

<p>Requires any of the following scopes: <br><b>ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SupplierInvoicesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SupplierInvoiceApi(); // \Swagger\Client\Model\SupplierInvoiceApi | 
$use_default_vat_codes = true; // bool | 
$calculate_vat_on_cost_accounts = true; // bool | Automatic calculation of VAT based on vat code. DK and NL only
$duplicate_check_extended_validation = true; // bool | Check if the invoice is duplicate.

try {
    $result = $apiInstance->supplierInvoicesV2Post($body, $use_default_vat_codes, $calculate_vat_on_cost_accounts, $duplicate_check_extended_validation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesV2Api->supplierInvoicesV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SupplierInvoiceApi**](../Model/SupplierInvoiceApi.md)|  |
 **use_default_vat_codes** | **bool**|  | [optional]
 **calculate_vat_on_cost_accounts** | **bool**| Automatic calculation of VAT based on vat code. DK and NL only | [optional]
 **duplicate_check_extended_validation** | **bool**| Check if the invoice is duplicate. | [optional]

### Return type

[**\Swagger\Client\Model\SupplierInvoiceApi**](../Model/SupplierInvoiceApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoicesV2Post**
> \Swagger\Client\Model\SupplierInvoiceApi supplierInvoicesV2Post($id, $supplier_id, $bank_account_id, $invoice_date, $payment_date, $due_date, $invoice_number, $total_amount, $vat, $vat_high, $vat_medium, $vat_low, $is_credit_invoice, $currency_code, $currency_rate, $ocr_number, $message, $created_utc, $modified_utc, $plus_giro_number, $bank_giro_number, $rows, $supplier_name, $supplier_number, $is_quick_invoice, $is_domestic, $remaining_amount, $remaining_amount_invoice_currency, $voucher_number, $voucher_id, $created_from_draft_id, $self_employed_without_fixed_address, $allocation_periods, $auto_credit_debit_pairing, $attachments, $set_off_amount_invoice_currency, $status, $skip_send_to_bank, $use_default_vat_codes, $calculate_vat_on_cost_accounts, $duplicate_check_extended_validation)

Create a supplier invoice.

<p>Requires any of the following scopes: <br><b>ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SupplierInvoicesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$supplier_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$bank_account_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$invoice_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$payment_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$due_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$invoice_number = "invoice_number_example"; // string | 
$total_amount = 1.2; // double | 
$vat = 1.2; // double | 
$vat_high = 1.2; // double | 
$vat_medium = 1.2; // double | 
$vat_low = 1.2; // double | 
$is_credit_invoice = true; // bool | 
$currency_code = "currency_code_example"; // string | 
$currency_rate = 1.2; // double | 
$ocr_number = "ocr_number_example"; // string | 
$message = "message_example"; // string | 
$created_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$modified_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$plus_giro_number = "plus_giro_number_example"; // string | 
$bank_giro_number = "bank_giro_number_example"; // string | 
$rows = array(new \Swagger\Client\Model\SupplierInvoiceRowApi()); // \Swagger\Client\Model\SupplierInvoiceRowApi[] | 
$supplier_name = "supplier_name_example"; // string | 
$supplier_number = "supplier_number_example"; // string | 
$is_quick_invoice = true; // bool | 
$is_domestic = true; // bool | 
$remaining_amount = 1.2; // double | 
$remaining_amount_invoice_currency = 1.2; // double | 
$voucher_number = "voucher_number_example"; // string | 
$voucher_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$created_from_draft_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$self_employed_without_fixed_address = true; // bool | 
$allocation_periods = array(new \Swagger\Client\Model\AllocationPeriodApi()); // \Swagger\Client\Model\AllocationPeriodApi[] | 
$auto_credit_debit_pairing = true; // bool | 
$attachments = array("attachments_example"); // string[] | 
$set_off_amount_invoice_currency = 1.2; // double | 
$status = 56; // int | 
$skip_send_to_bank = true; // bool | 
$use_default_vat_codes = true; // bool | 
$calculate_vat_on_cost_accounts = true; // bool | Automatic calculation of VAT based on vat code. DK and NL only
$duplicate_check_extended_validation = true; // bool | Check if the invoice is duplicate.

try {
    $result = $apiInstance->supplierInvoicesV2Post($id, $supplier_id, $bank_account_id, $invoice_date, $payment_date, $due_date, $invoice_number, $total_amount, $vat, $vat_high, $vat_medium, $vat_low, $is_credit_invoice, $currency_code, $currency_rate, $ocr_number, $message, $created_utc, $modified_utc, $plus_giro_number, $bank_giro_number, $rows, $supplier_name, $supplier_number, $is_quick_invoice, $is_domestic, $remaining_amount, $remaining_amount_invoice_currency, $voucher_number, $voucher_id, $created_from_draft_id, $self_employed_without_fixed_address, $allocation_periods, $auto_credit_debit_pairing, $attachments, $set_off_amount_invoice_currency, $status, $skip_send_to_bank, $use_default_vat_codes, $calculate_vat_on_cost_accounts, $duplicate_check_extended_validation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesV2Api->supplierInvoicesV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **supplier_id** | [**string**](../Model/.md)|  |
 **bank_account_id** | [**string**](../Model/.md)|  |
 **invoice_date** | **\DateTime**|  |
 **payment_date** | **\DateTime**|  |
 **due_date** | **\DateTime**|  |
 **invoice_number** | **string**|  |
 **total_amount** | **double**|  |
 **vat** | **double**|  |
 **vat_high** | **double**|  |
 **vat_medium** | **double**|  |
 **vat_low** | **double**|  |
 **is_credit_invoice** | **bool**|  |
 **currency_code** | **string**|  |
 **currency_rate** | **double**|  |
 **ocr_number** | **string**|  |
 **message** | **string**|  |
 **created_utc** | **\DateTime**|  |
 **modified_utc** | **\DateTime**|  |
 **plus_giro_number** | **string**|  |
 **bank_giro_number** | **string**|  |
 **rows** | [**\Swagger\Client\Model\SupplierInvoiceRowApi[]**](../Model/\Swagger\Client\Model\SupplierInvoiceRowApi.md)|  |
 **supplier_name** | **string**|  |
 **supplier_number** | **string**|  |
 **is_quick_invoice** | **bool**|  |
 **is_domestic** | **bool**|  |
 **remaining_amount** | **double**|  |
 **remaining_amount_invoice_currency** | **double**|  |
 **voucher_number** | **string**|  |
 **voucher_id** | [**string**](../Model/.md)|  |
 **created_from_draft_id** | [**string**](../Model/.md)|  |
 **self_employed_without_fixed_address** | **bool**|  |
 **allocation_periods** | [**\Swagger\Client\Model\AllocationPeriodApi[]**](../Model/\Swagger\Client\Model\AllocationPeriodApi.md)|  |
 **auto_credit_debit_pairing** | **bool**|  |
 **attachments** | [**string[]**](../Model/string.md)|  |
 **set_off_amount_invoice_currency** | **double**|  |
 **status** | **int**|  |
 **skip_send_to_bank** | **bool**|  |
 **use_default_vat_codes** | **bool**|  | [optional]
 **calculate_vat_on_cost_accounts** | **bool**| Automatic calculation of VAT based on vat code. DK and NL only | [optional]
 **duplicate_check_extended_validation** | **bool**| Check if the invoice is duplicate. | [optional]

### Return type

[**\Swagger\Client\Model\SupplierInvoiceApi**](../Model/SupplierInvoiceApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoicesV2Post_0**
> \Swagger\Client\Model\InvoicePaymentApi supplierInvoicesV2Post_0($body, $invoice_id)

Post a payment towards a bookkept supplier invoice

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SupplierInvoicesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\InvoicePaymentApi(); // \Swagger\Client\Model\InvoicePaymentApi | 
$invoice_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->supplierInvoicesV2Post_0($body, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesV2Api->supplierInvoicesV2Post_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\InvoicePaymentApi**](../Model/InvoicePaymentApi.md)|  |
 **invoice_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\InvoicePaymentApi**](../Model/InvoicePaymentApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoicesV2Post_0**
> \Swagger\Client\Model\InvoicePaymentApi supplierInvoicesV2Post_0($company_bank_account_id, $payment_date, $reference, $payment_amount, $payment_currency, $domestic_payment_amount, $bank_fee_amount, $payment_type, $factoring_fee_amount, $factoring_fee_account_number, $bank_transaction_id, $invoice_id)

Post a payment towards a bookkept supplier invoice

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SupplierInvoicesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_bank_account_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$payment_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$reference = "reference_example"; // string | 
$payment_amount = 1.2; // double | 
$payment_currency = "payment_currency_example"; // string | 
$domestic_payment_amount = 1.2; // double | 
$bank_fee_amount = 1.2; // double | 
$payment_type = 56; // int | 
$factoring_fee_amount = 1.2; // double | 
$factoring_fee_account_number = 789; // int | 
$bank_transaction_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$invoice_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->supplierInvoicesV2Post_0($company_bank_account_id, $payment_date, $reference, $payment_amount, $payment_currency, $domestic_payment_amount, $bank_fee_amount, $payment_type, $factoring_fee_amount, $factoring_fee_account_number, $bank_transaction_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesV2Api->supplierInvoicesV2Post_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_bank_account_id** | [**string**](../Model/.md)|  |
 **payment_date** | **\DateTime**|  |
 **reference** | **string**|  |
 **payment_amount** | **double**|  |
 **payment_currency** | **string**|  |
 **domestic_payment_amount** | **double**|  |
 **bank_fee_amount** | **double**|  |
 **payment_type** | **int**|  |
 **factoring_fee_amount** | **double**|  |
 **factoring_fee_account_number** | **int**|  |
 **bank_transaction_id** | [**string**](../Model/.md)|  |
 **invoice_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\InvoicePaymentApi**](../Model/InvoicePaymentApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

