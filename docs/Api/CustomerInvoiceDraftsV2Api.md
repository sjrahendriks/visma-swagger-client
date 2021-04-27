# Swagger\Client\CustomerInvoiceDraftsV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerInvoiceDraftsV2ConvertToInvoice**](CustomerInvoiceDraftsV2Api.md#customerinvoicedraftsv2converttoinvoice) | **POST** /v2/customerinvoicedrafts/{customerInvoiceDraftId}/convert | Converts a CustomerInvoiceDraft to a CustomerInvoice.
[**customerInvoiceDraftsV2Delete**](CustomerInvoiceDraftsV2Api.md#customerinvoicedraftsv2delete) | **DELETE** /v2/customerinvoicedrafts/{customerInvoiceDraftId} | Delete a customer invoice draft.
[**customerInvoiceDraftsV2Get**](CustomerInvoiceDraftsV2Api.md#customerinvoicedraftsv2get) | **GET** /v2/customerinvoicedrafts | Get all customer invoice drafts.
[**customerInvoiceDraftsV2Get_0**](CustomerInvoiceDraftsV2Api.md#customerinvoicedraftsv2get_0) | **GET** /v2/customerinvoicedrafts/{invoiceDraftId} | Gets a customer invoice draft by id.
[**customerInvoiceDraftsV2Post**](CustomerInvoiceDraftsV2Api.md#customerinvoicedraftsv2post) | **POST** /v2/customerinvoicedrafts | Create a single customer invoice draft.
[**customerInvoiceDraftsV2Put**](CustomerInvoiceDraftsV2Api.md#customerinvoicedraftsv2put) | **PUT** /v2/customerinvoicedrafts/{customerInvoiceDraftId} | Replace the data in a customer invoice draft.

# **customerInvoiceDraftsV2ConvertToInvoice**
> \Swagger\Client\Model\CustomerInvoiceApi customerInvoiceDraftsV2ConvertToInvoice($body, $customer_invoice_draft_id, $keep_original_draft_date, $override_company_keep_original_draft_date)

Converts a CustomerInvoiceDraft to a CustomerInvoice.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoiceDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CustomerInvoiceDraftValidationApi(); // \Swagger\Client\Model\CustomerInvoiceDraftValidationApi | Optional set of properties to validate. Ignore the properties you do not wish to validate.
$customer_invoice_draft_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The customer Invoice Draft Id.
$keep_original_draft_date = true; // bool | Optional, false by default.  If this parameter is set to true, or if the same parameter from company settings is set to true, then the draft's invoice date is used (past or future), or if date misses, the draft's creation date is used  If this parameter is omitted, and the same parameter from company settings is not set or is set to false, then the draft's invoice date is used if it's in future, or if that date misses or is in past, today date is used
$override_company_keep_original_draft_date = true; // bool | Optional, false by default.  If this parameter is set to true, use keepOriginalDraftDate parameter value to decide whether to use draft's invoice date or not regardless of company settings value.

try {
    $result = $apiInstance->customerInvoiceDraftsV2ConvertToInvoice($body, $customer_invoice_draft_id, $keep_original_draft_date, $override_company_keep_original_draft_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceDraftsV2Api->customerInvoiceDraftsV2ConvertToInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CustomerInvoiceDraftValidationApi**](../Model/CustomerInvoiceDraftValidationApi.md)| Optional set of properties to validate. Ignore the properties you do not wish to validate. |
 **customer_invoice_draft_id** | [**string**](../Model/.md)| The customer Invoice Draft Id. |
 **keep_original_draft_date** | **bool**| Optional, false by default.  If this parameter is set to true, or if the same parameter from company settings is set to true, then the draft&#x27;s invoice date is used (past or future), or if date misses, the draft&#x27;s creation date is used  If this parameter is omitted, and the same parameter from company settings is not set or is set to false, then the draft&#x27;s invoice date is used if it&#x27;s in future, or if that date misses or is in past, today date is used | [optional]
 **override_company_keep_original_draft_date** | **bool**| Optional, false by default.  If this parameter is set to true, use keepOriginalDraftDate parameter value to decide whether to use draft&#x27;s invoice date or not regardless of company settings value. | [optional]

### Return type

[**\Swagger\Client\Model\CustomerInvoiceApi**](../Model/CustomerInvoiceApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoiceDraftsV2ConvertToInvoice**
> \Swagger\Client\Model\CustomerInvoiceApi customerInvoiceDraftsV2ConvertToInvoice($total_amount_invoice_currency, $total_vat_amount_invoice_currency, $total_roundings_invoice_currency, $rows, $customer_invoice_draft_id, $keep_original_draft_date, $override_company_keep_original_draft_date)

Converts a CustomerInvoiceDraft to a CustomerInvoice.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoiceDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$total_amount_invoice_currency = 1.2; // double | 
$total_vat_amount_invoice_currency = 1.2; // double | 
$total_roundings_invoice_currency = 1.2; // double | 
$rows = array(new \Swagger\Client\Model\CustomerInvoiceDraftValidationRowApi()); // \Swagger\Client\Model\CustomerInvoiceDraftValidationRowApi[] | 
$customer_invoice_draft_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The customer Invoice Draft Id.
$keep_original_draft_date = true; // bool | Optional, false by default.  If this parameter is set to true, or if the same parameter from company settings is set to true, then the draft's invoice date is used (past or future), or if date misses, the draft's creation date is used  If this parameter is omitted, and the same parameter from company settings is not set or is set to false, then the draft's invoice date is used if it's in future, or if that date misses or is in past, today date is used
$override_company_keep_original_draft_date = true; // bool | Optional, false by default.  If this parameter is set to true, use keepOriginalDraftDate parameter value to decide whether to use draft's invoice date or not regardless of company settings value.

try {
    $result = $apiInstance->customerInvoiceDraftsV2ConvertToInvoice($total_amount_invoice_currency, $total_vat_amount_invoice_currency, $total_roundings_invoice_currency, $rows, $customer_invoice_draft_id, $keep_original_draft_date, $override_company_keep_original_draft_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceDraftsV2Api->customerInvoiceDraftsV2ConvertToInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **total_amount_invoice_currency** | **double**|  |
 **total_vat_amount_invoice_currency** | **double**|  |
 **total_roundings_invoice_currency** | **double**|  |
 **rows** | [**\Swagger\Client\Model\CustomerInvoiceDraftValidationRowApi[]**](../Model/\Swagger\Client\Model\CustomerInvoiceDraftValidationRowApi.md)|  |
 **customer_invoice_draft_id** | [**string**](../Model/.md)| The customer Invoice Draft Id. |
 **keep_original_draft_date** | **bool**| Optional, false by default.  If this parameter is set to true, or if the same parameter from company settings is set to true, then the draft&#x27;s invoice date is used (past or future), or if date misses, the draft&#x27;s creation date is used  If this parameter is omitted, and the same parameter from company settings is not set or is set to false, then the draft&#x27;s invoice date is used if it&#x27;s in future, or if that date misses or is in past, today date is used | [optional]
 **override_company_keep_original_draft_date** | **bool**| Optional, false by default.  If this parameter is set to true, use keepOriginalDraftDate parameter value to decide whether to use draft&#x27;s invoice date or not regardless of company settings value. | [optional]

### Return type

[**\Swagger\Client\Model\CustomerInvoiceApi**](../Model/CustomerInvoiceApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoiceDraftsV2Delete**
> object customerInvoiceDraftsV2Delete($customer_invoice_draft_id)

Delete a customer invoice draft.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoiceDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_invoice_draft_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerInvoiceDraftsV2Delete($customer_invoice_draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceDraftsV2Api->customerInvoiceDraftsV2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_invoice_draft_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoiceDraftsV2Get**
> \Swagger\Client\Model\PaginatedResponseCustomerInvoiceDraftApi customerInvoiceDraftsV2Get()

Get all customer invoice drafts.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoiceDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->customerInvoiceDraftsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceDraftsV2Api->customerInvoiceDraftsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaginatedResponseCustomerInvoiceDraftApi**](../Model/PaginatedResponseCustomerInvoiceDraftApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoiceDraftsV2Get_0**
> \Swagger\Client\Model\CustomerInvoiceDraftApi customerInvoiceDraftsV2Get_0($invoice_draft_id)

Gets a customer invoice draft by id.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoiceDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoice_draft_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerInvoiceDraftsV2Get_0($invoice_draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceDraftsV2Api->customerInvoiceDraftsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_draft_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\CustomerInvoiceDraftApi**](../Model/CustomerInvoiceDraftApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoiceDraftsV2Post**
> \Swagger\Client\Model\CustomerInvoiceDraftApi customerInvoiceDraftsV2Post($body)

Create a single customer invoice draft.

ReversedConstructionServicesVatFree attribute on a CustomerInvoiceDraftRow shall only be used for articels with reverse VAT charge.  For other VAT free articles ReversedConstructionServicesVatFree shall be set to 'false'.<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoiceDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CustomerInvoiceDraftApi(); // \Swagger\Client\Model\CustomerInvoiceDraftApi | 

try {
    $result = $apiInstance->customerInvoiceDraftsV2Post($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceDraftsV2Api->customerInvoiceDraftsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CustomerInvoiceDraftApi**](../Model/CustomerInvoiceDraftApi.md)|  |

### Return type

[**\Swagger\Client\Model\CustomerInvoiceDraftApi**](../Model/CustomerInvoiceDraftApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoiceDraftsV2Post**
> \Swagger\Client\Model\CustomerInvoiceDraftApi customerInvoiceDraftsV2Post($id, $customer_id, $created_utc, $is_credit_invoice, $rot_reduced_invoicing_type, $rot_reduced_invoicing_property_name, $rot_reduced_invoicing_org_number, $rot_reduced_invoicing_amount, $rot_reduced_invoicing_automatic_distribution, $rot_property_type, $house_work_other_costs, $rows, $persons, $your_reference, $our_reference, $buyers_order_reference, $electronic_reference, $invoice_customer_name, $invoice_address1, $invoice_address2, $invoice_postal_code, $invoice_city, $invoice_country_code, $invoice_currency_code, $delivery_customer_name, $delivery_address1, $delivery_address2, $delivery_postal_code, $delivery_city, $delivery_country_code, $delivery_method_name, $delivery_term_name, $delivery_method_code, $delivery_term_code, $eu_third_party, $customer_is_private_person, $reverse_charge_on_construction_services, $sales_document_attachments, $invoice_date, $delivery_date, $total_amount, $total_vat_amount, $total_roundings, $total_amount_base_currency, $total_vat_amount_base_currency, $customer_number, $includes_vat, $replace_unit_price_when_zero, $uses_green_technology)

Create a single customer invoice draft.

ReversedConstructionServicesVatFree attribute on a CustomerInvoiceDraftRow shall only be used for articels with reverse VAT charge.  For other VAT free articles ReversedConstructionServicesVatFree shall be set to 'false'.<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoiceDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$customer_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$created_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$is_credit_invoice = true; // bool | 
$rot_reduced_invoicing_type = 56; // int | 
$rot_reduced_invoicing_property_name = "rot_reduced_invoicing_property_name_example"; // string | 
$rot_reduced_invoicing_org_number = "rot_reduced_invoicing_org_number_example"; // string | 
$rot_reduced_invoicing_amount = 1.2; // double | 
$rot_reduced_invoicing_automatic_distribution = true; // bool | 
$rot_property_type = 56; // int | 
$house_work_other_costs = 1.2; // double | 
$rows = array(new \Swagger\Client\Model\CustomerInvoiceDraftRowApi()); // \Swagger\Client\Model\CustomerInvoiceDraftRowApi[] | 
$persons = array(new \Swagger\Client\Model\SalesDocumentRotRutReductionPersonApi()); // \Swagger\Client\Model\SalesDocumentRotRutReductionPersonApi[] | 
$your_reference = "your_reference_example"; // string | 
$our_reference = "our_reference_example"; // string | 
$buyers_order_reference = "buyers_order_reference_example"; // string | 
$electronic_reference = "electronic_reference_example"; // string | 
$invoice_customer_name = "invoice_customer_name_example"; // string | 
$invoice_address1 = "invoice_address1_example"; // string | 
$invoice_address2 = "invoice_address2_example"; // string | 
$invoice_postal_code = "invoice_postal_code_example"; // string | 
$invoice_city = "invoice_city_example"; // string | 
$invoice_country_code = "invoice_country_code_example"; // string | 
$invoice_currency_code = "invoice_currency_code_example"; // string | 
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
$eu_third_party = true; // bool | 
$customer_is_private_person = true; // bool | 
$reverse_charge_on_construction_services = true; // bool | 
$sales_document_attachments = array("sales_document_attachments_example"); // string[] | 
$invoice_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$delivery_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$total_amount = 1.2; // double | 
$total_vat_amount = 1.2; // double | 
$total_roundings = 1.2; // double | 
$total_amount_base_currency = 1.2; // double | 
$total_vat_amount_base_currency = 1.2; // double | 
$customer_number = "customer_number_example"; // string | 
$includes_vat = true; // bool | 
$replace_unit_price_when_zero = true; // bool | 
$uses_green_technology = true; // bool | 

try {
    $result = $apiInstance->customerInvoiceDraftsV2Post($id, $customer_id, $created_utc, $is_credit_invoice, $rot_reduced_invoicing_type, $rot_reduced_invoicing_property_name, $rot_reduced_invoicing_org_number, $rot_reduced_invoicing_amount, $rot_reduced_invoicing_automatic_distribution, $rot_property_type, $house_work_other_costs, $rows, $persons, $your_reference, $our_reference, $buyers_order_reference, $electronic_reference, $invoice_customer_name, $invoice_address1, $invoice_address2, $invoice_postal_code, $invoice_city, $invoice_country_code, $invoice_currency_code, $delivery_customer_name, $delivery_address1, $delivery_address2, $delivery_postal_code, $delivery_city, $delivery_country_code, $delivery_method_name, $delivery_term_name, $delivery_method_code, $delivery_term_code, $eu_third_party, $customer_is_private_person, $reverse_charge_on_construction_services, $sales_document_attachments, $invoice_date, $delivery_date, $total_amount, $total_vat_amount, $total_roundings, $total_amount_base_currency, $total_vat_amount_base_currency, $customer_number, $includes_vat, $replace_unit_price_when_zero, $uses_green_technology);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceDraftsV2Api->customerInvoiceDraftsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **customer_id** | [**string**](../Model/.md)|  |
 **created_utc** | **\DateTime**|  |
 **is_credit_invoice** | **bool**|  |
 **rot_reduced_invoicing_type** | **int**|  |
 **rot_reduced_invoicing_property_name** | **string**|  |
 **rot_reduced_invoicing_org_number** | **string**|  |
 **rot_reduced_invoicing_amount** | **double**|  |
 **rot_reduced_invoicing_automatic_distribution** | **bool**|  |
 **rot_property_type** | **int**|  |
 **house_work_other_costs** | **double**|  |
 **rows** | [**\Swagger\Client\Model\CustomerInvoiceDraftRowApi[]**](../Model/\Swagger\Client\Model\CustomerInvoiceDraftRowApi.md)|  |
 **persons** | [**\Swagger\Client\Model\SalesDocumentRotRutReductionPersonApi[]**](../Model/\Swagger\Client\Model\SalesDocumentRotRutReductionPersonApi.md)|  |
 **your_reference** | **string**|  |
 **our_reference** | **string**|  |
 **buyers_order_reference** | **string**|  |
 **electronic_reference** | **string**|  |
 **invoice_customer_name** | **string**|  |
 **invoice_address1** | **string**|  |
 **invoice_address2** | **string**|  |
 **invoice_postal_code** | **string**|  |
 **invoice_city** | **string**|  |
 **invoice_country_code** | **string**|  |
 **invoice_currency_code** | **string**|  |
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
 **eu_third_party** | **bool**|  |
 **customer_is_private_person** | **bool**|  |
 **reverse_charge_on_construction_services** | **bool**|  |
 **sales_document_attachments** | [**string[]**](../Model/string.md)|  |
 **invoice_date** | **\DateTime**|  |
 **delivery_date** | **\DateTime**|  |
 **total_amount** | **double**|  |
 **total_vat_amount** | **double**|  |
 **total_roundings** | **double**|  |
 **total_amount_base_currency** | **double**|  |
 **total_vat_amount_base_currency** | **double**|  |
 **customer_number** | **string**|  |
 **includes_vat** | **bool**|  |
 **replace_unit_price_when_zero** | **bool**|  |
 **uses_green_technology** | **bool**|  |

### Return type

[**\Swagger\Client\Model\CustomerInvoiceDraftApi**](../Model/CustomerInvoiceDraftApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoiceDraftsV2Put**
> \Swagger\Client\Model\CustomerInvoiceDraftApi customerInvoiceDraftsV2Put($body, $customer_invoice_draft_id)

Replace the data in a customer invoice draft.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoiceDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CustomerInvoiceDraftApi(); // \Swagger\Client\Model\CustomerInvoiceDraftApi | 
$customer_invoice_draft_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerInvoiceDraftsV2Put($body, $customer_invoice_draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceDraftsV2Api->customerInvoiceDraftsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CustomerInvoiceDraftApi**](../Model/CustomerInvoiceDraftApi.md)|  |
 **customer_invoice_draft_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\CustomerInvoiceDraftApi**](../Model/CustomerInvoiceDraftApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoiceDraftsV2Put**
> \Swagger\Client\Model\CustomerInvoiceDraftApi customerInvoiceDraftsV2Put($id, $customer_id, $created_utc, $is_credit_invoice, $rot_reduced_invoicing_type, $rot_reduced_invoicing_property_name, $rot_reduced_invoicing_org_number, $rot_reduced_invoicing_amount, $rot_reduced_invoicing_automatic_distribution, $rot_property_type, $house_work_other_costs, $rows, $persons, $your_reference, $our_reference, $buyers_order_reference, $electronic_reference, $invoice_customer_name, $invoice_address1, $invoice_address2, $invoice_postal_code, $invoice_city, $invoice_country_code, $invoice_currency_code, $delivery_customer_name, $delivery_address1, $delivery_address2, $delivery_postal_code, $delivery_city, $delivery_country_code, $delivery_method_name, $delivery_term_name, $delivery_method_code, $delivery_term_code, $eu_third_party, $customer_is_private_person, $reverse_charge_on_construction_services, $sales_document_attachments, $invoice_date, $delivery_date, $total_amount, $total_vat_amount, $total_roundings, $total_amount_base_currency, $total_vat_amount_base_currency, $customer_number, $includes_vat, $replace_unit_price_when_zero, $uses_green_technology, $customer_invoice_draft_id)

Replace the data in a customer invoice draft.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoiceDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$customer_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$created_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$is_credit_invoice = true; // bool | 
$rot_reduced_invoicing_type = 56; // int | 
$rot_reduced_invoicing_property_name = "rot_reduced_invoicing_property_name_example"; // string | 
$rot_reduced_invoicing_org_number = "rot_reduced_invoicing_org_number_example"; // string | 
$rot_reduced_invoicing_amount = 1.2; // double | 
$rot_reduced_invoicing_automatic_distribution = true; // bool | 
$rot_property_type = 56; // int | 
$house_work_other_costs = 1.2; // double | 
$rows = array(new \Swagger\Client\Model\CustomerInvoiceDraftRowApi()); // \Swagger\Client\Model\CustomerInvoiceDraftRowApi[] | 
$persons = array(new \Swagger\Client\Model\SalesDocumentRotRutReductionPersonApi()); // \Swagger\Client\Model\SalesDocumentRotRutReductionPersonApi[] | 
$your_reference = "your_reference_example"; // string | 
$our_reference = "our_reference_example"; // string | 
$buyers_order_reference = "buyers_order_reference_example"; // string | 
$electronic_reference = "electronic_reference_example"; // string | 
$invoice_customer_name = "invoice_customer_name_example"; // string | 
$invoice_address1 = "invoice_address1_example"; // string | 
$invoice_address2 = "invoice_address2_example"; // string | 
$invoice_postal_code = "invoice_postal_code_example"; // string | 
$invoice_city = "invoice_city_example"; // string | 
$invoice_country_code = "invoice_country_code_example"; // string | 
$invoice_currency_code = "invoice_currency_code_example"; // string | 
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
$eu_third_party = true; // bool | 
$customer_is_private_person = true; // bool | 
$reverse_charge_on_construction_services = true; // bool | 
$sales_document_attachments = array("sales_document_attachments_example"); // string[] | 
$invoice_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$delivery_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$total_amount = 1.2; // double | 
$total_vat_amount = 1.2; // double | 
$total_roundings = 1.2; // double | 
$total_amount_base_currency = 1.2; // double | 
$total_vat_amount_base_currency = 1.2; // double | 
$customer_number = "customer_number_example"; // string | 
$includes_vat = true; // bool | 
$replace_unit_price_when_zero = true; // bool | 
$uses_green_technology = true; // bool | 
$customer_invoice_draft_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerInvoiceDraftsV2Put($id, $customer_id, $created_utc, $is_credit_invoice, $rot_reduced_invoicing_type, $rot_reduced_invoicing_property_name, $rot_reduced_invoicing_org_number, $rot_reduced_invoicing_amount, $rot_reduced_invoicing_automatic_distribution, $rot_property_type, $house_work_other_costs, $rows, $persons, $your_reference, $our_reference, $buyers_order_reference, $electronic_reference, $invoice_customer_name, $invoice_address1, $invoice_address2, $invoice_postal_code, $invoice_city, $invoice_country_code, $invoice_currency_code, $delivery_customer_name, $delivery_address1, $delivery_address2, $delivery_postal_code, $delivery_city, $delivery_country_code, $delivery_method_name, $delivery_term_name, $delivery_method_code, $delivery_term_code, $eu_third_party, $customer_is_private_person, $reverse_charge_on_construction_services, $sales_document_attachments, $invoice_date, $delivery_date, $total_amount, $total_vat_amount, $total_roundings, $total_amount_base_currency, $total_vat_amount_base_currency, $customer_number, $includes_vat, $replace_unit_price_when_zero, $uses_green_technology, $customer_invoice_draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceDraftsV2Api->customerInvoiceDraftsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **customer_id** | [**string**](../Model/.md)|  |
 **created_utc** | **\DateTime**|  |
 **is_credit_invoice** | **bool**|  |
 **rot_reduced_invoicing_type** | **int**|  |
 **rot_reduced_invoicing_property_name** | **string**|  |
 **rot_reduced_invoicing_org_number** | **string**|  |
 **rot_reduced_invoicing_amount** | **double**|  |
 **rot_reduced_invoicing_automatic_distribution** | **bool**|  |
 **rot_property_type** | **int**|  |
 **house_work_other_costs** | **double**|  |
 **rows** | [**\Swagger\Client\Model\CustomerInvoiceDraftRowApi[]**](../Model/\Swagger\Client\Model\CustomerInvoiceDraftRowApi.md)|  |
 **persons** | [**\Swagger\Client\Model\SalesDocumentRotRutReductionPersonApi[]**](../Model/\Swagger\Client\Model\SalesDocumentRotRutReductionPersonApi.md)|  |
 **your_reference** | **string**|  |
 **our_reference** | **string**|  |
 **buyers_order_reference** | **string**|  |
 **electronic_reference** | **string**|  |
 **invoice_customer_name** | **string**|  |
 **invoice_address1** | **string**|  |
 **invoice_address2** | **string**|  |
 **invoice_postal_code** | **string**|  |
 **invoice_city** | **string**|  |
 **invoice_country_code** | **string**|  |
 **invoice_currency_code** | **string**|  |
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
 **eu_third_party** | **bool**|  |
 **customer_is_private_person** | **bool**|  |
 **reverse_charge_on_construction_services** | **bool**|  |
 **sales_document_attachments** | [**string[]**](../Model/string.md)|  |
 **invoice_date** | **\DateTime**|  |
 **delivery_date** | **\DateTime**|  |
 **total_amount** | **double**|  |
 **total_vat_amount** | **double**|  |
 **total_roundings** | **double**|  |
 **total_amount_base_currency** | **double**|  |
 **total_vat_amount_base_currency** | **double**|  |
 **customer_number** | **string**|  |
 **includes_vat** | **bool**|  |
 **replace_unit_price_when_zero** | **bool**|  |
 **uses_green_technology** | **bool**|  |
 **customer_invoice_draft_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\CustomerInvoiceDraftApi**](../Model/CustomerInvoiceDraftApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

