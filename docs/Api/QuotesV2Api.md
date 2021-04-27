# Swagger\Client\QuotesV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quotesV2ConvertToInvoice**](QuotesV2Api.md#quotesv2converttoinvoice) | **POST** /v2/quotes/{id}/converttocustomerinvoice | Converts an existing quote to a customer invoice
[**quotesV2ConvertToOrder**](QuotesV2Api.md#quotesv2converttoorder) | **POST** /v2/quotes/{id}/converttoorder | Converts an existing quote to a order type
[**quotesV2Delete**](QuotesV2Api.md#quotesv2delete) | **DELETE** /v2/quotes/{id} | Delete an quote.
[**quotesV2Get**](QuotesV2Api.md#quotesv2get) | **GET** /v2/quotes | Get sent and converted quotes.
[**quotesV2Get_0**](QuotesV2Api.md#quotesv2get_0) | **GET** /v2/quotes/{id} | Get a sent and converted quote
[**quotesV2Post**](QuotesV2Api.md#quotesv2post) | **POST** /v2/quotes | Create a quote.
[**quotesV2Print**](QuotesV2Api.md#quotesv2print) | **GET** /v2/quotes/{id}/print | Get a pdf-file of a quote.
[**quotesV2Put**](QuotesV2Api.md#quotesv2put) | **PUT** /v2/quotes/{id} | Replace the contents of an ongoing quote.
[**quotesV2Put_0**](QuotesV2Api.md#quotesv2put_0) | **PUT** /v2/quotes/{id}/accept | Accepts an ongoing quote

# **quotesV2ConvertToInvoice**
> \Swagger\Client\Model\CustomerInvoiceApi quotesV2ConvertToInvoice($id)

Converts an existing quote to a customer invoice

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuotesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->quotesV2ConvertToInvoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesV2Api->quotesV2ConvertToInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\CustomerInvoiceApi**](../Model/CustomerInvoiceApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quotesV2ConvertToOrder**
> \Swagger\Client\Model\OrderApi quotesV2ConvertToOrder($body, $id)

Converts an existing quote to a order type

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuotesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\QuoteConversionApi(); // \Swagger\Client\Model\QuoteConversionApi | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->quotesV2ConvertToOrder($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesV2Api->quotesV2ConvertToOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\QuoteConversionApi**](../Model/QuoteConversionApi.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\OrderApi**](../Model/OrderApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quotesV2ConvertToOrder**
> \Swagger\Client\Model\OrderApi quotesV2ConvertToOrder($type, $id)

Converts an existing quote to a order type

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuotesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 56; // int | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->quotesV2ConvertToOrder($type, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesV2Api->quotesV2ConvertToOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **int**|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\OrderApi**](../Model/OrderApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quotesV2Delete**
> object quotesV2Delete($id)

Delete an quote.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuotesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->quotesV2Delete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesV2Api->quotesV2Delete: ', $e->getMessage(), PHP_EOL;
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

# **quotesV2Get**
> \Swagger\Client\Model\PaginatedResponseQuoteApi quotesV2Get()

Get sent and converted quotes.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuotesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->quotesV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesV2Api->quotesV2Get: ', $e->getMessage(), PHP_EOL;
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

# **quotesV2Get_0**
> \Swagger\Client\Model\QuoteApi quotesV2Get_0($id)

Get a sent and converted quote

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuotesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->quotesV2Get_0($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesV2Api->quotesV2Get_0: ', $e->getMessage(), PHP_EOL;
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

# **quotesV2Post**
> \Swagger\Client\Model\QuoteApi quotesV2Post($body)

Create a quote.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuotesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\QuoteApi(); // \Swagger\Client\Model\QuoteApi | 

try {
    $result = $apiInstance->quotesV2Post($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesV2Api->quotesV2Post: ', $e->getMessage(), PHP_EOL;
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

# **quotesV2Post**
> \Swagger\Client\Model\QuoteApi quotesV2Post($id, $number, $customer_id, $due_date, $quote_date, $created_utc, $approved_date, $currency_code, $status, $currency_rate, $company_reference, $eu_third_party, $customer_reference, $invoice_customer_name, $invoice_address1, $invoice_address2, $invoice_postal_code, $invoice_city, $invoice_country_code, $delivery_customer_name, $delivery_address1, $delivery_address2, $delivery_postal_code, $delivery_city, $delivery_country_code, $delivery_method_name, $delivery_method_code, $delivery_term_code, $delivery_term_name, $customer_is_private_person, $includes_vat, $is_domestic, $rot_reduced_invoicing_type, $rot_property_type, $rot_reduced_invoicing_property_name, $rot_reduced_invoicing_org_number, $rot_reduced_invoicing_amount, $rot_reduced_invoicing_automatic_distribution, $persons, $terms_of_payment, $sales_document_attachments, $rows, $total_amount, $vat_amount, $roundings_amount, $uses_green_technology)

Create a quote.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuotesV2Api(
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
    $result = $apiInstance->quotesV2Post($id, $number, $customer_id, $due_date, $quote_date, $created_utc, $approved_date, $currency_code, $status, $currency_rate, $company_reference, $eu_third_party, $customer_reference, $invoice_customer_name, $invoice_address1, $invoice_address2, $invoice_postal_code, $invoice_city, $invoice_country_code, $delivery_customer_name, $delivery_address1, $delivery_address2, $delivery_postal_code, $delivery_city, $delivery_country_code, $delivery_method_name, $delivery_method_code, $delivery_term_code, $delivery_term_name, $customer_is_private_person, $includes_vat, $is_domestic, $rot_reduced_invoicing_type, $rot_property_type, $rot_reduced_invoicing_property_name, $rot_reduced_invoicing_org_number, $rot_reduced_invoicing_amount, $rot_reduced_invoicing_automatic_distribution, $persons, $terms_of_payment, $sales_document_attachments, $rows, $total_amount, $vat_amount, $roundings_amount, $uses_green_technology);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesV2Api->quotesV2Post: ', $e->getMessage(), PHP_EOL;
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

# **quotesV2Print**
> object quotesV2Print($id)

Get a pdf-file of a quote.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuotesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The id of the quote

try {
    $result = $apiInstance->quotesV2Print($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesV2Api->quotesV2Print: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The id of the quote |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quotesV2Put**
> object quotesV2Put($body, $id)

Replace the contents of an ongoing quote.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuotesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\QuoteApi(); // \Swagger\Client\Model\QuoteApi | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->quotesV2Put($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesV2Api->quotesV2Put: ', $e->getMessage(), PHP_EOL;
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

# **quotesV2Put**
> object quotesV2Put($id2, $number, $customer_id, $due_date, $quote_date, $created_utc, $approved_date, $currency_code, $status, $currency_rate, $company_reference, $eu_third_party, $customer_reference, $invoice_customer_name, $invoice_address1, $invoice_address2, $invoice_postal_code, $invoice_city, $invoice_country_code, $delivery_customer_name, $delivery_address1, $delivery_address2, $delivery_postal_code, $delivery_city, $delivery_country_code, $delivery_method_name, $delivery_method_code, $delivery_term_code, $delivery_term_name, $customer_is_private_person, $includes_vat, $is_domestic, $rot_reduced_invoicing_type, $rot_property_type, $rot_reduced_invoicing_property_name, $rot_reduced_invoicing_org_number, $rot_reduced_invoicing_amount, $rot_reduced_invoicing_automatic_distribution, $persons, $terms_of_payment, $sales_document_attachments, $rows, $total_amount, $vat_amount, $roundings_amount, $uses_green_technology, $id)

Replace the contents of an ongoing quote.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuotesV2Api(
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
    $result = $apiInstance->quotesV2Put($id2, $number, $customer_id, $due_date, $quote_date, $created_utc, $approved_date, $currency_code, $status, $currency_rate, $company_reference, $eu_third_party, $customer_reference, $invoice_customer_name, $invoice_address1, $invoice_address2, $invoice_postal_code, $invoice_city, $invoice_country_code, $delivery_customer_name, $delivery_address1, $delivery_address2, $delivery_postal_code, $delivery_city, $delivery_country_code, $delivery_method_name, $delivery_method_code, $delivery_term_code, $delivery_term_name, $customer_is_private_person, $includes_vat, $is_domestic, $rot_reduced_invoicing_type, $rot_property_type, $rot_reduced_invoicing_property_name, $rot_reduced_invoicing_org_number, $rot_reduced_invoicing_amount, $rot_reduced_invoicing_automatic_distribution, $persons, $terms_of_payment, $sales_document_attachments, $rows, $total_amount, $vat_amount, $roundings_amount, $uses_green_technology, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesV2Api->quotesV2Put: ', $e->getMessage(), PHP_EOL;
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

# **quotesV2Put_0**
> object quotesV2Put_0($id)

Accepts an ongoing quote

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuotesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->quotesV2Put_0($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesV2Api->quotesV2Put_0: ', $e->getMessage(), PHP_EOL;
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

