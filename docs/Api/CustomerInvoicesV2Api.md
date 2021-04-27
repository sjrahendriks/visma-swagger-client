# Swagger\Client\CustomerInvoicesV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerInvoicesV2Get**](CustomerInvoicesV2Api.md#customerinvoicesv2get) | **GET** /v2/customerinvoices | Get all customer invoices.
[**customerInvoicesV2GetPdfReplacement**](CustomerInvoicesV2Api.md#customerinvoicesv2getpdfreplacement) | **GET** /v2/customerinvoices/{invoiceId}/pdf | Gets a customer invoice in Portable Document Format (PDF).
[**customerInvoicesV2Get_0**](CustomerInvoicesV2Api.md#customerinvoicesv2get_0) | **GET** /v2/customerinvoices/{invoiceId} | Gets a customer invoice with a specific id.
[**customerInvoicesV2Post**](CustomerInvoicesV2Api.md#customerinvoicesv2post) | **POST** /v2/customerinvoices | Create a single customer invoice.
[**customerInvoicesV2Post_0**](CustomerInvoicesV2Api.md#customerinvoicesv2post_0) | **POST** /v2/customerinvoices/{invoiceId}/payments | Post a payment towards a bookkept customer invoice. Use factoring fee and account number in order to pay with factoring
[**customerInvoicesV2Print**](CustomerInvoicesV2Api.md#customerinvoicesv2print) | **GET** /v2/customerinvoices/{invoiceId}/print | Gets a PDF-file of a customer invoice.
[**customerInvoicesV2SendEmail**](CustomerInvoicesV2Api.md#customerinvoicesv2sendemail) | **POST** /v2/customerinvoices/{invoiceId}/email | Send an invoice by email
[**customerInvoicesV2SendPaymentReminderEmail**](CustomerInvoicesV2Api.md#customerinvoicesv2sendpaymentreminderemail) | **POST** /v2/customerinvoices/{invoiceId}/paymentreminders | Sends a payment reminder email to an overdue invoice

# **customerInvoicesV2Get**
> \Swagger\Client\Model\PaginatedResponseCustomerInvoiceApi customerInvoicesV2Get($modified_since_utc)

Get all customer invoices.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoicesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modified_since_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Used to get the invoices which have been modified since a prompted date

try {
    $result = $apiInstance->customerInvoicesV2Get($modified_since_utc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesV2Api->customerInvoicesV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modified_since_utc** | **\DateTime**| Used to get the invoices which have been modified since a prompted date | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedResponseCustomerInvoiceApi**](../Model/PaginatedResponseCustomerInvoiceApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoicesV2GetPdfReplacement**
> \Swagger\Client\Model\InvoiceUrlApi customerInvoicesV2GetPdfReplacement($invoice_id)

Gets a customer invoice in Portable Document Format (PDF).

As invoices are generated at request time, if not generated before, this endpoint sometimes has higher than average response time.<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoicesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoice_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerInvoicesV2GetPdfReplacement($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesV2Api->customerInvoicesV2GetPdfReplacement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\InvoiceUrlApi**](../Model/InvoiceUrlApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoicesV2Get_0**
> \Swagger\Client\Model\CustomerInvoiceApi customerInvoicesV2Get_0($invoice_id)

Gets a customer invoice with a specific id.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoicesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoice_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerInvoicesV2Get_0($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesV2Api->customerInvoicesV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\CustomerInvoiceApi**](../Model/CustomerInvoiceApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoicesV2Post**
> \Swagger\Client\Model\CustomerInvoiceApi customerInvoicesV2Post($body, $rot_reduced_automatic_distribution)

Create a single customer invoice.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoicesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CustomerInvoiceApi(); // \Swagger\Client\Model\CustomerInvoiceApi | 
$rot_reduced_automatic_distribution = true; // bool | Used for the automatic distribution per person of the rot reduced invoicing amount.

try {
    $result = $apiInstance->customerInvoicesV2Post($body, $rot_reduced_automatic_distribution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesV2Api->customerInvoicesV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CustomerInvoiceApi**](../Model/CustomerInvoiceApi.md)|  |
 **rot_reduced_automatic_distribution** | **bool**| Used for the automatic distribution per person of the rot reduced invoicing amount. | [optional]

### Return type

[**\Swagger\Client\Model\CustomerInvoiceApi**](../Model/CustomerInvoiceApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoicesV2Post**
> \Swagger\Client\Model\CustomerInvoiceApi customerInvoicesV2Post($id, $eu_third_party, $is_credit_invoice, $currency_code, $currency_rate, $created_by_user_id, $total_amount, $total_vat_amount, $total_roundings, $total_amount_invoice_currency, $total_vat_amount_invoice_currency, $set_off_amount_invoice_currency, $customer_id, $rows, $vat_specification, $invoice_date, $due_date, $delivery_date, $rot_reduced_invoicing_type, $rot_reduced_invoicing_amount, $rot_reduced_invoicing_percent, $rot_reduced_invoicing_property_name, $rot_reduced_invoicing_org_number, $persons, $rot_reduced_invoicing_automatic_distribution, $electronic_reference, $electronic_address, $edi_service_deliverer_id, $our_reference, $your_reference, $buyers_order_reference, $invoice_customer_name, $invoice_address1, $invoice_address2, $invoice_postal_code, $invoice_city, $invoice_country_code, $delivery_customer_name, $delivery_address1, $delivery_address2, $delivery_postal_code, $delivery_city, $delivery_country_code, $delivery_method_name, $delivery_term_name, $delivery_method_code, $delivery_term_code, $customer_is_private_person, $terms_of_payment_id, $customer_email, $invoice_number, $customer_number, $payment_reference_number, $rot_property_type, $sales_document_attachments, $has_auto_invoice_error, $is_not_delivered, $reverse_charge_on_construction_services, $work_house_other_costs, $remaining_amount, $remaining_amount_invoice_currency, $referring_invoice_id, $created_from_order_id, $created_from_draft_id, $voucher_number, $voucher_id, $created_utc, $modified_utc, $reversed_construction_vat_invoicing, $includes_vat, $send_type, $payment_reminder_issued, $uses_green_technology, $rot_reduced_automatic_distribution)

Create a single customer invoice.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoicesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$eu_third_party = true; // bool | 
$is_credit_invoice = true; // bool | 
$currency_code = "currency_code_example"; // string | 
$currency_rate = 1.2; // double | 
$created_by_user_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$total_amount = 1.2; // double | 
$total_vat_amount = 1.2; // double | 
$total_roundings = 1.2; // double | 
$total_amount_invoice_currency = 1.2; // double | 
$total_vat_amount_invoice_currency = 1.2; // double | 
$set_off_amount_invoice_currency = 1.2; // double | 
$customer_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$rows = array(new \Swagger\Client\Model\CustomerInvoiceRowApi()); // \Swagger\Client\Model\CustomerInvoiceRowApi[] | 
$vat_specification = array(new \Swagger\Client\Model\CustomerInvoiceVatApi()); // \Swagger\Client\Model\CustomerInvoiceVatApi[] | 
$invoice_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$due_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$delivery_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$rot_reduced_invoicing_type = 56; // int | 
$rot_reduced_invoicing_amount = 1.2; // double | 
$rot_reduced_invoicing_percent = 1.2; // double | 
$rot_reduced_invoicing_property_name = "rot_reduced_invoicing_property_name_example"; // string | 
$rot_reduced_invoicing_org_number = "rot_reduced_invoicing_org_number_example"; // string | 
$persons = array(new \Swagger\Client\Model\SalesDocumentRotRutReductionPersonApi()); // \Swagger\Client\Model\SalesDocumentRotRutReductionPersonApi[] | 
$rot_reduced_invoicing_automatic_distribution = true; // bool | 
$electronic_reference = "electronic_reference_example"; // string | 
$electronic_address = "electronic_address_example"; // string | 
$edi_service_deliverer_id = "edi_service_deliverer_id_example"; // string | 
$our_reference = "our_reference_example"; // string | 
$your_reference = "your_reference_example"; // string | 
$buyers_order_reference = "buyers_order_reference_example"; // string | 
$invoice_customer_name = "invoice_customer_name_example"; // string | 
$invoice_address1 = "invoice_address1_example"; // string | 
$invoice_address2 = "invoice_address2_example"; // string | 
$invoice_postal_code = "invoice_postal_code_example"; // string | 
$invoice_city = "invoice_city_example"; // string | 
$invoice_country_code = "invoice_country_code_example"; // string | 
$delivery_customer_name = "delivery_customer_name_example"; // string | 
$delivery_address1 = "delivery_address1_example"; // string | 
$delivery_address2 = "delivery_address2_example"; // string | 
$delivery_postal_code = "delivery_postal_code_example"; // string | 
$delivery_city = "delivery_city_example"; // string | 
$delivery_country_code = "delivery_country_code_example"; // string | 
$delivery_method_name = "delivery_method_name_example"; // string | 
$delivery_term_name = "delivery_term_name_example"; // string | 
$delivery_method_code = "delivery_method_code_example"; // string | 
$delivery_term_code = "delivery_term_code_example"; // string | 
$customer_is_private_person = true; // bool | 
$terms_of_payment_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$customer_email = "customer_email_example"; // string | 
$invoice_number = 56; // int | 
$customer_number = "customer_number_example"; // string | 
$payment_reference_number = "payment_reference_number_example"; // string | 
$rot_property_type = 56; // int | 
$sales_document_attachments = array("sales_document_attachments_example"); // string[] | 
$has_auto_invoice_error = true; // bool | 
$is_not_delivered = true; // bool | 
$reverse_charge_on_construction_services = true; // bool | 
$work_house_other_costs = 1.2; // double | 
$remaining_amount = 1.2; // double | 
$remaining_amount_invoice_currency = 1.2; // double | 
$referring_invoice_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$created_from_order_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$created_from_draft_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$voucher_number = "voucher_number_example"; // string | 
$voucher_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$created_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$modified_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$reversed_construction_vat_invoicing = true; // bool | 
$includes_vat = true; // bool | 
$send_type = 56; // int | 
$payment_reminder_issued = true; // bool | 
$uses_green_technology = true; // bool | 
$rot_reduced_automatic_distribution = true; // bool | Used for the automatic distribution per person of the rot reduced invoicing amount.

try {
    $result = $apiInstance->customerInvoicesV2Post($id, $eu_third_party, $is_credit_invoice, $currency_code, $currency_rate, $created_by_user_id, $total_amount, $total_vat_amount, $total_roundings, $total_amount_invoice_currency, $total_vat_amount_invoice_currency, $set_off_amount_invoice_currency, $customer_id, $rows, $vat_specification, $invoice_date, $due_date, $delivery_date, $rot_reduced_invoicing_type, $rot_reduced_invoicing_amount, $rot_reduced_invoicing_percent, $rot_reduced_invoicing_property_name, $rot_reduced_invoicing_org_number, $persons, $rot_reduced_invoicing_automatic_distribution, $electronic_reference, $electronic_address, $edi_service_deliverer_id, $our_reference, $your_reference, $buyers_order_reference, $invoice_customer_name, $invoice_address1, $invoice_address2, $invoice_postal_code, $invoice_city, $invoice_country_code, $delivery_customer_name, $delivery_address1, $delivery_address2, $delivery_postal_code, $delivery_city, $delivery_country_code, $delivery_method_name, $delivery_term_name, $delivery_method_code, $delivery_term_code, $customer_is_private_person, $terms_of_payment_id, $customer_email, $invoice_number, $customer_number, $payment_reference_number, $rot_property_type, $sales_document_attachments, $has_auto_invoice_error, $is_not_delivered, $reverse_charge_on_construction_services, $work_house_other_costs, $remaining_amount, $remaining_amount_invoice_currency, $referring_invoice_id, $created_from_order_id, $created_from_draft_id, $voucher_number, $voucher_id, $created_utc, $modified_utc, $reversed_construction_vat_invoicing, $includes_vat, $send_type, $payment_reminder_issued, $uses_green_technology, $rot_reduced_automatic_distribution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesV2Api->customerInvoicesV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **eu_third_party** | **bool**|  |
 **is_credit_invoice** | **bool**|  |
 **currency_code** | **string**|  |
 **currency_rate** | **double**|  |
 **created_by_user_id** | [**string**](../Model/.md)|  |
 **total_amount** | **double**|  |
 **total_vat_amount** | **double**|  |
 **total_roundings** | **double**|  |
 **total_amount_invoice_currency** | **double**|  |
 **total_vat_amount_invoice_currency** | **double**|  |
 **set_off_amount_invoice_currency** | **double**|  |
 **customer_id** | [**string**](../Model/.md)|  |
 **rows** | [**\Swagger\Client\Model\CustomerInvoiceRowApi[]**](../Model/\Swagger\Client\Model\CustomerInvoiceRowApi.md)|  |
 **vat_specification** | [**\Swagger\Client\Model\CustomerInvoiceVatApi[]**](../Model/\Swagger\Client\Model\CustomerInvoiceVatApi.md)|  |
 **invoice_date** | **\DateTime**|  |
 **due_date** | **\DateTime**|  |
 **delivery_date** | **\DateTime**|  |
 **rot_reduced_invoicing_type** | **int**|  |
 **rot_reduced_invoicing_amount** | **double**|  |
 **rot_reduced_invoicing_percent** | **double**|  |
 **rot_reduced_invoicing_property_name** | **string**|  |
 **rot_reduced_invoicing_org_number** | **string**|  |
 **persons** | [**\Swagger\Client\Model\SalesDocumentRotRutReductionPersonApi[]**](../Model/\Swagger\Client\Model\SalesDocumentRotRutReductionPersonApi.md)|  |
 **rot_reduced_invoicing_automatic_distribution** | **bool**|  |
 **electronic_reference** | **string**|  |
 **electronic_address** | **string**|  |
 **edi_service_deliverer_id** | **string**|  |
 **our_reference** | **string**|  |
 **your_reference** | **string**|  |
 **buyers_order_reference** | **string**|  |
 **invoice_customer_name** | **string**|  |
 **invoice_address1** | **string**|  |
 **invoice_address2** | **string**|  |
 **invoice_postal_code** | **string**|  |
 **invoice_city** | **string**|  |
 **invoice_country_code** | **string**|  |
 **delivery_customer_name** | **string**|  |
 **delivery_address1** | **string**|  |
 **delivery_address2** | **string**|  |
 **delivery_postal_code** | **string**|  |
 **delivery_city** | **string**|  |
 **delivery_country_code** | **string**|  |
 **delivery_method_name** | **string**|  |
 **delivery_term_name** | **string**|  |
 **delivery_method_code** | **string**|  |
 **delivery_term_code** | **string**|  |
 **customer_is_private_person** | **bool**|  |
 **terms_of_payment_id** | [**string**](../Model/.md)|  |
 **customer_email** | **string**|  |
 **invoice_number** | **int**|  |
 **customer_number** | **string**|  |
 **payment_reference_number** | **string**|  |
 **rot_property_type** | **int**|  |
 **sales_document_attachments** | [**string[]**](../Model/string.md)|  |
 **has_auto_invoice_error** | **bool**|  |
 **is_not_delivered** | **bool**|  |
 **reverse_charge_on_construction_services** | **bool**|  |
 **work_house_other_costs** | **double**|  |
 **remaining_amount** | **double**|  |
 **remaining_amount_invoice_currency** | **double**|  |
 **referring_invoice_id** | [**string**](../Model/.md)|  |
 **created_from_order_id** | [**string**](../Model/.md)|  |
 **created_from_draft_id** | [**string**](../Model/.md)|  |
 **voucher_number** | **string**|  |
 **voucher_id** | [**string**](../Model/.md)|  |
 **created_utc** | **\DateTime**|  |
 **modified_utc** | **\DateTime**|  |
 **reversed_construction_vat_invoicing** | **bool**|  |
 **includes_vat** | **bool**|  |
 **send_type** | **int**|  |
 **payment_reminder_issued** | **bool**|  |
 **uses_green_technology** | **bool**|  |
 **rot_reduced_automatic_distribution** | **bool**| Used for the automatic distribution per person of the rot reduced invoicing amount. | [optional]

### Return type

[**\Swagger\Client\Model\CustomerInvoiceApi**](../Model/CustomerInvoiceApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoicesV2Post_0**
> \Swagger\Client\Model\InvoicePaymentApi customerInvoicesV2Post_0($body, $invoice_id)

Post a payment towards a bookkept customer invoice. Use factoring fee and account number in order to pay with factoring

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoicesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\InvoicePaymentApi(); // \Swagger\Client\Model\InvoicePaymentApi | 
$invoice_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerInvoicesV2Post_0($body, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesV2Api->customerInvoicesV2Post_0: ', $e->getMessage(), PHP_EOL;
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

# **customerInvoicesV2Post_0**
> \Swagger\Client\Model\InvoicePaymentApi customerInvoicesV2Post_0($company_bank_account_id, $payment_date, $reference, $payment_amount, $payment_currency, $domestic_payment_amount, $bank_fee_amount, $payment_type, $factoring_fee_amount, $factoring_fee_account_number, $bank_transaction_id, $invoice_id)

Post a payment towards a bookkept customer invoice. Use factoring fee and account number in order to pay with factoring

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoicesV2Api(
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
    $result = $apiInstance->customerInvoicesV2Post_0($company_bank_account_id, $payment_date, $reference, $payment_amount, $payment_currency, $domestic_payment_amount, $bank_fee_amount, $payment_type, $factoring_fee_amount, $factoring_fee_account_number, $bank_transaction_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesV2Api->customerInvoicesV2Post_0: ', $e->getMessage(), PHP_EOL;
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

# **customerInvoicesV2Print**
> object customerInvoicesV2Print($invoice_id)

Gets a PDF-file of a customer invoice.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoicesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoice_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The id of the customer invoice

try {
    $result = $apiInstance->customerInvoicesV2Print($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesV2Api->customerInvoicesV2Print: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | [**string**](../Model/.md)| The id of the customer invoice |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoicesV2SendEmail**
> \Swagger\Client\Model\CustomerInvoiceApi customerInvoicesV2SendEmail($body, $invoice_id)

Send an invoice by email

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoicesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EmailApi(); // \Swagger\Client\Model\EmailApi | 
$invoice_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerInvoicesV2SendEmail($body, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesV2Api->customerInvoicesV2SendEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EmailApi**](../Model/EmailApi.md)|  |
 **invoice_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\CustomerInvoiceApi**](../Model/CustomerInvoiceApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoicesV2SendEmail**
> \Swagger\Client\Model\CustomerInvoiceApi customerInvoicesV2SendEmail($email, $cc_recipients, $subject, $message, $invoice_id)

Send an invoice by email

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoicesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = "email_example"; // string | 
$cc_recipients = array("cc_recipients_example"); // string[] | 
$subject = "subject_example"; // string | 
$message = "message_example"; // string | 
$invoice_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerInvoicesV2SendEmail($email, $cc_recipients, $subject, $message, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesV2Api->customerInvoicesV2SendEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**|  |
 **cc_recipients** | [**string[]**](../Model/string.md)|  |
 **subject** | **string**|  |
 **message** | **string**|  |
 **invoice_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\CustomerInvoiceApi**](../Model/CustomerInvoiceApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoicesV2SendPaymentReminderEmail**
> object customerInvoicesV2SendPaymentReminderEmail($body, $invoice_id)

Sends a payment reminder email to an overdue invoice

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoicesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PaymentReminderEmailApi(); // \Swagger\Client\Model\PaymentReminderEmailApi | 
$invoice_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerInvoicesV2SendPaymentReminderEmail($body, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesV2Api->customerInvoicesV2SendPaymentReminderEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PaymentReminderEmailApi**](../Model/PaymentReminderEmailApi.md)|  |
 **invoice_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoicesV2SendPaymentReminderEmail**
> object customerInvoicesV2SendPaymentReminderEmail($late_payment_fee, $email_details, $invoice_id)

Sends a payment reminder email to an overdue invoice

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoicesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$late_payment_fee = 1.2; // double | 
$email_details = new \Swagger\Client\Model\EmailApi(); // \Swagger\Client\Model\EmailApi | 
$invoice_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerInvoicesV2SendPaymentReminderEmail($late_payment_fee, $email_details, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesV2Api->customerInvoicesV2SendPaymentReminderEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **late_payment_fee** | **double**|  |
 **email_details** | [**\Swagger\Client\Model\EmailApi**](../Model/.md)|  |
 **invoice_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

