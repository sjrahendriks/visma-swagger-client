# Swagger\Client\QuoteDraftsV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteDraftsV2ConvertToQuote**](QuoteDraftsV2Api.md#quotedraftsv2converttoquote) | **PUT** /v2/quotedrafts/{id}/convert | Converts a quote draft to a quote
[**quoteDraftsV2Delete**](QuoteDraftsV2Api.md#quotedraftsv2delete) | **DELETE** /v2/quotedrafts/{id} | Delete an quote.
[**quoteDraftsV2Get**](QuoteDraftsV2Api.md#quotedraftsv2get) | **GET** /v2/quotedrafts | Get all quote drafts.
[**quoteDraftsV2Get_0**](QuoteDraftsV2Api.md#quotedraftsv2get_0) | **GET** /v2/quotedrafts/{id} | Get a quote draft
[**quoteDraftsV2Post**](QuoteDraftsV2Api.md#quotedraftsv2post) | **POST** /v2/quotedrafts | Create quote draft.
[**quoteDraftsV2Put**](QuoteDraftsV2Api.md#quotedraftsv2put) | **PUT** /v2/quotedrafts/{id} | Replace content in an quote.

# **quoteDraftsV2ConvertToQuote**
> \Swagger\Client\Model\QuoteApi quoteDraftsV2ConvertToQuote($id)

Converts a quote draft to a quote

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuoteDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->quoteDraftsV2ConvertToQuote($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteDraftsV2Api->quoteDraftsV2ConvertToQuote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\QuoteApi**](../Model/QuoteApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteDraftsV2Delete**
> object quoteDraftsV2Delete($id)

Delete an quote.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuoteDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->quoteDraftsV2Delete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteDraftsV2Api->quoteDraftsV2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteDraftsV2Get**
> \Swagger\Client\Model\PaginatedResponseQuoteApi quoteDraftsV2Get()

Get all quote drafts.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuoteDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->quoteDraftsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteDraftsV2Api->quoteDraftsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaginatedResponseQuoteApi**](../Model/PaginatedResponseQuoteApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteDraftsV2Get_0**
> \Swagger\Client\Model\QuoteApi quoteDraftsV2Get_0($id)

Get a quote draft

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuoteDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->quoteDraftsV2Get_0($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteDraftsV2Api->quoteDraftsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\QuoteApi**](../Model/QuoteApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteDraftsV2Post**
> \Swagger\Client\Model\QuoteApi quoteDraftsV2Post($body)

Create quote draft.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuoteDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\QuoteApi(); // \Swagger\Client\Model\QuoteApi | 

try {
    $result = $apiInstance->quoteDraftsV2Post($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteDraftsV2Api->quoteDraftsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\QuoteApi**](../Model/QuoteApi.md)|  |

### Return type

[**\Swagger\Client\Model\QuoteApi**](../Model/QuoteApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteDraftsV2Post**
> \Swagger\Client\Model\QuoteApi quoteDraftsV2Post($id, $number, $customer_id, $due_date, $quote_date, $created_utc, $approved_date, $currency_code, $status, $currency_rate, $company_reference, $eu_third_party, $customer_reference, $invoice_customer_name, $invoice_address1, $invoice_address2, $invoice_postal_code, $invoice_city, $invoice_country_code, $delivery_customer_name, $delivery_address1, $delivery_address2, $delivery_postal_code, $delivery_city, $delivery_country_code, $delivery_method_name, $delivery_method_code, $delivery_term_code, $delivery_term_name, $customer_is_private_person, $includes_vat, $is_domestic, $rot_reduced_invoicing_type, $rot_property_type, $rot_reduced_invoicing_property_name, $rot_reduced_invoicing_org_number, $rot_reduced_invoicing_amount, $rot_reduced_invoicing_automatic_distribution, $persons, $terms_of_payment, $sales_document_attachments, $rows, $total_amount, $vat_amount, $roundings_amount, $uses_green_technology)

Create quote draft.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuoteDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$number = 56; // int | 
$customer_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$due_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$quote_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$created_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$approved_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$currency_code = "currency_code_example"; // string | 
$status = 56; // int | 
$currency_rate = 1.2; // double | 
$company_reference = "company_reference_example"; // string | 
$eu_third_party = true; // bool | 
$customer_reference = "customer_reference_example"; // string | 
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
$delivery_method_code = "delivery_method_code_example"; // string | 
$delivery_term_code = "delivery_term_code_example"; // string | 
$delivery_term_name = "delivery_term_name_example"; // string | 
$customer_is_private_person = true; // bool | 
$includes_vat = true; // bool | 
$is_domestic = true; // bool | 
$rot_reduced_invoicing_type = 56; // int | 
$rot_property_type = 56; // int | 
$rot_reduced_invoicing_property_name = "rot_reduced_invoicing_property_name_example"; // string | 
$rot_reduced_invoicing_org_number = "rot_reduced_invoicing_org_number_example"; // string | 
$rot_reduced_invoicing_amount = 1.2; // double | 
$rot_reduced_invoicing_automatic_distribution = true; // bool | 
$persons = array(new \Swagger\Client\Model\SalesDocumentRotRutReductionPersonApi()); // \Swagger\Client\Model\SalesDocumentRotRutReductionPersonApi[] | 
$terms_of_payment = new \Swagger\Client\Model\TermsOfPaymentApi(); // \Swagger\Client\Model\TermsOfPaymentApi | 
$sales_document_attachments = array("sales_document_attachments_example"); // string[] | 
$rows = array(new \Swagger\Client\Model\QuoteRowApi()); // \Swagger\Client\Model\QuoteRowApi[] | 
$total_amount = 1.2; // double | 
$vat_amount = 1.2; // double | 
$roundings_amount = 1.2; // double | 
$uses_green_technology = true; // bool | 

try {
    $result = $apiInstance->quoteDraftsV2Post($id, $number, $customer_id, $due_date, $quote_date, $created_utc, $approved_date, $currency_code, $status, $currency_rate, $company_reference, $eu_third_party, $customer_reference, $invoice_customer_name, $invoice_address1, $invoice_address2, $invoice_postal_code, $invoice_city, $invoice_country_code, $delivery_customer_name, $delivery_address1, $delivery_address2, $delivery_postal_code, $delivery_city, $delivery_country_code, $delivery_method_name, $delivery_method_code, $delivery_term_code, $delivery_term_name, $customer_is_private_person, $includes_vat, $is_domestic, $rot_reduced_invoicing_type, $rot_property_type, $rot_reduced_invoicing_property_name, $rot_reduced_invoicing_org_number, $rot_reduced_invoicing_amount, $rot_reduced_invoicing_automatic_distribution, $persons, $terms_of_payment, $sales_document_attachments, $rows, $total_amount, $vat_amount, $roundings_amount, $uses_green_technology);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteDraftsV2Api->quoteDraftsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **number** | **int**|  |
 **customer_id** | [**string**](../Model/.md)|  |
 **due_date** | **\DateTime**|  |
 **quote_date** | **\DateTime**|  |
 **created_utc** | **\DateTime**|  |
 **approved_date** | **\DateTime**|  |
 **currency_code** | **string**|  |
 **status** | **int**|  |
 **currency_rate** | **double**|  |
 **company_reference** | **string**|  |
 **eu_third_party** | **bool**|  |
 **customer_reference** | **string**|  |
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
 **delivery_method_code** | **string**|  |
 **delivery_term_code** | **string**|  |
 **delivery_term_name** | **string**|  |
 **customer_is_private_person** | **bool**|  |
 **includes_vat** | **bool**|  |
 **is_domestic** | **bool**|  |
 **rot_reduced_invoicing_type** | **int**|  |
 **rot_property_type** | **int**|  |
 **rot_reduced_invoicing_property_name** | **string**|  |
 **rot_reduced_invoicing_org_number** | **string**|  |
 **rot_reduced_invoicing_amount** | **double**|  |
 **rot_reduced_invoicing_automatic_distribution** | **bool**|  |
 **persons** | [**\Swagger\Client\Model\SalesDocumentRotRutReductionPersonApi[]**](../Model/\Swagger\Client\Model\SalesDocumentRotRutReductionPersonApi.md)|  |
 **terms_of_payment** | [**\Swagger\Client\Model\TermsOfPaymentApi**](../Model/.md)|  |
 **sales_document_attachments** | [**string[]**](../Model/string.md)|  |
 **rows** | [**\Swagger\Client\Model\QuoteRowApi[]**](../Model/\Swagger\Client\Model\QuoteRowApi.md)|  |
 **total_amount** | **double**|  |
 **vat_amount** | **double**|  |
 **roundings_amount** | **double**|  |
 **uses_green_technology** | **bool**|  |

### Return type

[**\Swagger\Client\Model\QuoteApi**](../Model/QuoteApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteDraftsV2Put**
> object quoteDraftsV2Put($body, $id)

Replace content in an quote.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuoteDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\QuoteApi(); // \Swagger\Client\Model\QuoteApi | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->quoteDraftsV2Put($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteDraftsV2Api->quoteDraftsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\QuoteApi**](../Model/QuoteApi.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteDraftsV2Put**
> object quoteDraftsV2Put($id2, $number, $customer_id, $due_date, $quote_date, $created_utc, $approved_date, $currency_code, $status, $currency_rate, $company_reference, $eu_third_party, $customer_reference, $invoice_customer_name, $invoice_address1, $invoice_address2, $invoice_postal_code, $invoice_city, $invoice_country_code, $delivery_customer_name, $delivery_address1, $delivery_address2, $delivery_postal_code, $delivery_city, $delivery_country_code, $delivery_method_name, $delivery_method_code, $delivery_term_code, $delivery_term_name, $customer_is_private_person, $includes_vat, $is_domestic, $rot_reduced_invoicing_type, $rot_property_type, $rot_reduced_invoicing_property_name, $rot_reduced_invoicing_org_number, $rot_reduced_invoicing_amount, $rot_reduced_invoicing_automatic_distribution, $persons, $terms_of_payment, $sales_document_attachments, $rows, $total_amount, $vat_amount, $roundings_amount, $uses_green_technology, $id)

Replace content in an quote.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuoteDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id2 = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$number = 56; // int | 
$customer_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$due_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$quote_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$created_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$approved_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$currency_code = "currency_code_example"; // string | 
$status = 56; // int | 
$currency_rate = 1.2; // double | 
$company_reference = "company_reference_example"; // string | 
$eu_third_party = true; // bool | 
$customer_reference = "customer_reference_example"; // string | 
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
$delivery_method_code = "delivery_method_code_example"; // string | 
$delivery_term_code = "delivery_term_code_example"; // string | 
$delivery_term_name = "delivery_term_name_example"; // string | 
$customer_is_private_person = true; // bool | 
$includes_vat = true; // bool | 
$is_domestic = true; // bool | 
$rot_reduced_invoicing_type = 56; // int | 
$rot_property_type = 56; // int | 
$rot_reduced_invoicing_property_name = "rot_reduced_invoicing_property_name_example"; // string | 
$rot_reduced_invoicing_org_number = "rot_reduced_invoicing_org_number_example"; // string | 
$rot_reduced_invoicing_amount = 1.2; // double | 
$rot_reduced_invoicing_automatic_distribution = true; // bool | 
$persons = array(new \Swagger\Client\Model\SalesDocumentRotRutReductionPersonApi()); // \Swagger\Client\Model\SalesDocumentRotRutReductionPersonApi[] | 
$terms_of_payment = new \Swagger\Client\Model\TermsOfPaymentApi(); // \Swagger\Client\Model\TermsOfPaymentApi | 
$sales_document_attachments = array("sales_document_attachments_example"); // string[] | 
$rows = array(new \Swagger\Client\Model\QuoteRowApi()); // \Swagger\Client\Model\QuoteRowApi[] | 
$total_amount = 1.2; // double | 
$vat_amount = 1.2; // double | 
$roundings_amount = 1.2; // double | 
$uses_green_technology = true; // bool | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->quoteDraftsV2Put($id2, $number, $customer_id, $due_date, $quote_date, $created_utc, $approved_date, $currency_code, $status, $currency_rate, $company_reference, $eu_third_party, $customer_reference, $invoice_customer_name, $invoice_address1, $invoice_address2, $invoice_postal_code, $invoice_city, $invoice_country_code, $delivery_customer_name, $delivery_address1, $delivery_address2, $delivery_postal_code, $delivery_city, $delivery_country_code, $delivery_method_name, $delivery_method_code, $delivery_term_code, $delivery_term_name, $customer_is_private_person, $includes_vat, $is_domestic, $rot_reduced_invoicing_type, $rot_property_type, $rot_reduced_invoicing_property_name, $rot_reduced_invoicing_org_number, $rot_reduced_invoicing_amount, $rot_reduced_invoicing_automatic_distribution, $persons, $terms_of_payment, $sales_document_attachments, $rows, $total_amount, $vat_amount, $roundings_amount, $uses_green_technology, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteDraftsV2Api->quoteDraftsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id2** | [**string**](../Model/.md)|  |
 **number** | **int**|  |
 **customer_id** | [**string**](../Model/.md)|  |
 **due_date** | **\DateTime**|  |
 **quote_date** | **\DateTime**|  |
 **created_utc** | **\DateTime**|  |
 **approved_date** | **\DateTime**|  |
 **currency_code** | **string**|  |
 **status** | **int**|  |
 **currency_rate** | **double**|  |
 **company_reference** | **string**|  |
 **eu_third_party** | **bool**|  |
 **customer_reference** | **string**|  |
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
 **delivery_method_code** | **string**|  |
 **delivery_term_code** | **string**|  |
 **delivery_term_name** | **string**|  |
 **customer_is_private_person** | **bool**|  |
 **includes_vat** | **bool**|  |
 **is_domestic** | **bool**|  |
 **rot_reduced_invoicing_type** | **int**|  |
 **rot_property_type** | **int**|  |
 **rot_reduced_invoicing_property_name** | **string**|  |
 **rot_reduced_invoicing_org_number** | **string**|  |
 **rot_reduced_invoicing_amount** | **double**|  |
 **rot_reduced_invoicing_automatic_distribution** | **bool**|  |
 **persons** | [**\Swagger\Client\Model\SalesDocumentRotRutReductionPersonApi[]**](../Model/\Swagger\Client\Model\SalesDocumentRotRutReductionPersonApi.md)|  |
 **terms_of_payment** | [**\Swagger\Client\Model\TermsOfPaymentApi**](../Model/.md)|  |
 **sales_document_attachments** | [**string[]**](../Model/string.md)|  |
 **rows** | [**\Swagger\Client\Model\QuoteRowApi[]**](../Model/\Swagger\Client\Model\QuoteRowApi.md)|  |
 **total_amount** | **double**|  |
 **vat_amount** | **double**|  |
 **roundings_amount** | **double**|  |
 **uses_green_technology** | **bool**|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

