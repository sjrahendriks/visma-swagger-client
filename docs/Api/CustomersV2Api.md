# Swagger\Client\CustomersV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customersV2Delete**](CustomersV2Api.md#customersv2delete) | **DELETE** /v2/customers/{customerId} | Delete a customer.
[**customersV2Get**](CustomersV2Api.md#customersv2get) | **GET** /v2/customers | Get all customers.
[**customersV2GetAutoInvoiceRecipients**](CustomersV2Api.md#customersv2getautoinvoicerecipients) | **GET** /v2/customers/{customerId}/autoinvoicerecipients | Check this list if the provided customer can receive e-invoices. An empty list is retrieved if the customer   is a private person or is not found in the network.
[**customersV2Get_0**](CustomersV2Api.md#customersv2get_0) | **GET** /v2/customers/{customerId} | Get a specific customer.
[**customersV2Post**](CustomersV2Api.md#customersv2post) | **POST** /v2/customers | Creates a customer.
[**customersV2Put**](CustomersV2Api.md#customersv2put) | **PUT** /v2/customers/{customerId} | Replace the data in a customer.

# **customersV2Delete**
> object customersV2Delete($customer_id)

Delete a customer.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customersV2Delete($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersV2Api->customersV2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersV2Get**
> \Swagger\Client\Model\PaginatedResponseCustomerApi customersV2Get()

Get all customers.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->customersV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersV2Api->customersV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaginatedResponseCustomerApi**](../Model/PaginatedResponseCustomerApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersV2GetAutoInvoiceRecipients**
> \Swagger\Client\Model\PaginatedResponseAutoInvoiceAddressApi customersV2GetAutoInvoiceRecipients($customer_id)

Check this list if the provided customer can receive e-invoices. An empty list is retrieved if the customer   is a private person or is not found in the network.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Id of the customer.

try {
    $result = $apiInstance->customersV2GetAutoInvoiceRecipients($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersV2Api->customersV2GetAutoInvoiceRecipients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | [**string**](../Model/.md)| Id of the customer. |

### Return type

[**\Swagger\Client\Model\PaginatedResponseAutoInvoiceAddressApi**](../Model/PaginatedResponseAutoInvoiceAddressApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersV2Get_0**
> object customersV2Get_0($customer_id)

Get a specific customer.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Id of the requested customer.

try {
    $result = $apiInstance->customersV2Get_0($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersV2Api->customersV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | [**string**](../Model/.md)| Id of the requested customer. |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersV2Post**
> \Swagger\Client\Model\CustomerApi customersV2Post($body)

Creates a customer.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CustomerApi(); // \Swagger\Client\Model\CustomerApi | 

try {
    $result = $apiInstance->customersV2Post($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersV2Api->customersV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CustomerApi**](../Model/CustomerApi.md)|  |

### Return type

[**\Swagger\Client\Model\CustomerApi**](../Model/CustomerApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersV2Post**
> \Swagger\Client\Model\CustomerApi customersV2Post($id, $customer_number, $corporate_identity_number, $contact_person_email, $contact_person_mobile, $contact_person_name, $contact_person_phone, $currency_code, $gln, $email_address, $invoice_address1, $invoice_address2, $invoice_city, $invoice_country_code, $invoice_postal_code, $delivery_customer_name, $delivery_address1, $delivery_address2, $delivery_city, $delivery_country_code, $delivery_postal_code, $delivery_method_id, $delivery_term_id, $pay_to_account_id, $name, $note, $reverse_charge_on_construction_services, $webshop_customer_number, $mobile_phone, $telephone, $terms_of_payment_id, $terms_of_payment, $vat_number, $www_address, $last_invoice_date, $is_private_person, $is_northern_ireland, $discount_percentage, $changed_utc, $is_active, $force_bookkeep_vat, $edi_gln_number, $sales_document_language, $electronic_address, $electronic_reference, $edi_service_deliverer_id, $auto_invoice_activation_email_sent_date, $auto_invoice_registration_request_sent_date, $email_addresses, $customer_labels, $is_future_invoice_date_allowed)

Creates a customer.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$customer_number = "customer_number_example"; // string | 
$corporate_identity_number = "corporate_identity_number_example"; // string | 
$contact_person_email = "contact_person_email_example"; // string | 
$contact_person_mobile = "contact_person_mobile_example"; // string | 
$contact_person_name = "contact_person_name_example"; // string | 
$contact_person_phone = "contact_person_phone_example"; // string | 
$currency_code = "currency_code_example"; // string | 
$gln = "gln_example"; // string | 
$email_address = "email_address_example"; // string | 
$invoice_address1 = "invoice_address1_example"; // string | 
$invoice_address2 = "invoice_address2_example"; // string | 
$invoice_city = "invoice_city_example"; // string | 
$invoice_country_code = "invoice_country_code_example"; // string | 
$invoice_postal_code = "invoice_postal_code_example"; // string | 
$delivery_customer_name = "delivery_customer_name_example"; // string | 
$delivery_address1 = "delivery_address1_example"; // string | 
$delivery_address2 = "delivery_address2_example"; // string | 
$delivery_city = "delivery_city_example"; // string | 
$delivery_country_code = "delivery_country_code_example"; // string | 
$delivery_postal_code = "delivery_postal_code_example"; // string | 
$delivery_method_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$delivery_term_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$pay_to_account_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$name = "name_example"; // string | 
$note = "note_example"; // string | 
$reverse_charge_on_construction_services = true; // bool | 
$webshop_customer_number = 56; // int | 
$mobile_phone = "mobile_phone_example"; // string | 
$telephone = "telephone_example"; // string | 
$terms_of_payment_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$terms_of_payment = new \Swagger\Client\Model\TermsOfPaymentApi(); // \Swagger\Client\Model\TermsOfPaymentApi | 
$vat_number = "vat_number_example"; // string | 
$www_address = "www_address_example"; // string | 
$last_invoice_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$is_private_person = true; // bool | 
$is_northern_ireland = true; // bool | 
$discount_percentage = 1.2; // double | 
$changed_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$is_active = true; // bool | 
$force_bookkeep_vat = true; // bool | 
$edi_gln_number = "edi_gln_number_example"; // string | 
$sales_document_language = "sales_document_language_example"; // string | 
$electronic_address = "electronic_address_example"; // string | 
$electronic_reference = "electronic_reference_example"; // string | 
$edi_service_deliverer_id = "edi_service_deliverer_id_example"; // string | 
$auto_invoice_activation_email_sent_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$auto_invoice_registration_request_sent_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$email_addresses = array("email_addresses_example"); // string[] | 
$customer_labels = array(new \Swagger\Client\Model\CustomerLabelApi()); // \Swagger\Client\Model\CustomerLabelApi[] | 
$is_future_invoice_date_allowed = true; // bool | 

try {
    $result = $apiInstance->customersV2Post($id, $customer_number, $corporate_identity_number, $contact_person_email, $contact_person_mobile, $contact_person_name, $contact_person_phone, $currency_code, $gln, $email_address, $invoice_address1, $invoice_address2, $invoice_city, $invoice_country_code, $invoice_postal_code, $delivery_customer_name, $delivery_address1, $delivery_address2, $delivery_city, $delivery_country_code, $delivery_postal_code, $delivery_method_id, $delivery_term_id, $pay_to_account_id, $name, $note, $reverse_charge_on_construction_services, $webshop_customer_number, $mobile_phone, $telephone, $terms_of_payment_id, $terms_of_payment, $vat_number, $www_address, $last_invoice_date, $is_private_person, $is_northern_ireland, $discount_percentage, $changed_utc, $is_active, $force_bookkeep_vat, $edi_gln_number, $sales_document_language, $electronic_address, $electronic_reference, $edi_service_deliverer_id, $auto_invoice_activation_email_sent_date, $auto_invoice_registration_request_sent_date, $email_addresses, $customer_labels, $is_future_invoice_date_allowed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersV2Api->customersV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **customer_number** | **string**|  |
 **corporate_identity_number** | **string**|  |
 **contact_person_email** | **string**|  |
 **contact_person_mobile** | **string**|  |
 **contact_person_name** | **string**|  |
 **contact_person_phone** | **string**|  |
 **currency_code** | **string**|  |
 **gln** | **string**|  |
 **email_address** | **string**|  |
 **invoice_address1** | **string**|  |
 **invoice_address2** | **string**|  |
 **invoice_city** | **string**|  |
 **invoice_country_code** | **string**|  |
 **invoice_postal_code** | **string**|  |
 **delivery_customer_name** | **string**|  |
 **delivery_address1** | **string**|  |
 **delivery_address2** | **string**|  |
 **delivery_city** | **string**|  |
 **delivery_country_code** | **string**|  |
 **delivery_postal_code** | **string**|  |
 **delivery_method_id** | [**string**](../Model/.md)|  |
 **delivery_term_id** | [**string**](../Model/.md)|  |
 **pay_to_account_id** | [**string**](../Model/.md)|  |
 **name** | **string**|  |
 **note** | **string**|  |
 **reverse_charge_on_construction_services** | **bool**|  |
 **webshop_customer_number** | **int**|  |
 **mobile_phone** | **string**|  |
 **telephone** | **string**|  |
 **terms_of_payment_id** | [**string**](../Model/.md)|  |
 **terms_of_payment** | [**\Swagger\Client\Model\TermsOfPaymentApi**](../Model/.md)|  |
 **vat_number** | **string**|  |
 **www_address** | **string**|  |
 **last_invoice_date** | **\DateTime**|  |
 **is_private_person** | **bool**|  |
 **is_northern_ireland** | **bool**|  |
 **discount_percentage** | **double**|  |
 **changed_utc** | **\DateTime**|  |
 **is_active** | **bool**|  |
 **force_bookkeep_vat** | **bool**|  |
 **edi_gln_number** | **string**|  |
 **sales_document_language** | **string**|  |
 **electronic_address** | **string**|  |
 **electronic_reference** | **string**|  |
 **edi_service_deliverer_id** | **string**|  |
 **auto_invoice_activation_email_sent_date** | **\DateTime**|  |
 **auto_invoice_registration_request_sent_date** | **\DateTime**|  |
 **email_addresses** | [**string[]**](../Model/string.md)|  |
 **customer_labels** | [**\Swagger\Client\Model\CustomerLabelApi[]**](../Model/\Swagger\Client\Model\CustomerLabelApi.md)|  |
 **is_future_invoice_date_allowed** | **bool**|  |

### Return type

[**\Swagger\Client\Model\CustomerApi**](../Model/CustomerApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersV2Put**
> \Swagger\Client\Model\CustomerApi customersV2Put($body, $customer_id)

Replace the data in a customer.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CustomerApi(); // \Swagger\Client\Model\CustomerApi | 
$customer_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customersV2Put($body, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersV2Api->customersV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CustomerApi**](../Model/CustomerApi.md)|  |
 **customer_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\CustomerApi**](../Model/CustomerApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersV2Put**
> \Swagger\Client\Model\CustomerApi customersV2Put($id, $customer_number, $corporate_identity_number, $contact_person_email, $contact_person_mobile, $contact_person_name, $contact_person_phone, $currency_code, $gln, $email_address, $invoice_address1, $invoice_address2, $invoice_city, $invoice_country_code, $invoice_postal_code, $delivery_customer_name, $delivery_address1, $delivery_address2, $delivery_city, $delivery_country_code, $delivery_postal_code, $delivery_method_id, $delivery_term_id, $pay_to_account_id, $name, $note, $reverse_charge_on_construction_services, $webshop_customer_number, $mobile_phone, $telephone, $terms_of_payment_id, $terms_of_payment, $vat_number, $www_address, $last_invoice_date, $is_private_person, $is_northern_ireland, $discount_percentage, $changed_utc, $is_active, $force_bookkeep_vat, $edi_gln_number, $sales_document_language, $electronic_address, $electronic_reference, $edi_service_deliverer_id, $auto_invoice_activation_email_sent_date, $auto_invoice_registration_request_sent_date, $email_addresses, $customer_labels, $is_future_invoice_date_allowed, $customer_id)

Replace the data in a customer.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$customer_number = "customer_number_example"; // string | 
$corporate_identity_number = "corporate_identity_number_example"; // string | 
$contact_person_email = "contact_person_email_example"; // string | 
$contact_person_mobile = "contact_person_mobile_example"; // string | 
$contact_person_name = "contact_person_name_example"; // string | 
$contact_person_phone = "contact_person_phone_example"; // string | 
$currency_code = "currency_code_example"; // string | 
$gln = "gln_example"; // string | 
$email_address = "email_address_example"; // string | 
$invoice_address1 = "invoice_address1_example"; // string | 
$invoice_address2 = "invoice_address2_example"; // string | 
$invoice_city = "invoice_city_example"; // string | 
$invoice_country_code = "invoice_country_code_example"; // string | 
$invoice_postal_code = "invoice_postal_code_example"; // string | 
$delivery_customer_name = "delivery_customer_name_example"; // string | 
$delivery_address1 = "delivery_address1_example"; // string | 
$delivery_address2 = "delivery_address2_example"; // string | 
$delivery_city = "delivery_city_example"; // string | 
$delivery_country_code = "delivery_country_code_example"; // string | 
$delivery_postal_code = "delivery_postal_code_example"; // string | 
$delivery_method_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$delivery_term_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$pay_to_account_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$name = "name_example"; // string | 
$note = "note_example"; // string | 
$reverse_charge_on_construction_services = true; // bool | 
$webshop_customer_number = 56; // int | 
$mobile_phone = "mobile_phone_example"; // string | 
$telephone = "telephone_example"; // string | 
$terms_of_payment_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$terms_of_payment = new \Swagger\Client\Model\TermsOfPaymentApi(); // \Swagger\Client\Model\TermsOfPaymentApi | 
$vat_number = "vat_number_example"; // string | 
$www_address = "www_address_example"; // string | 
$last_invoice_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$is_private_person = true; // bool | 
$is_northern_ireland = true; // bool | 
$discount_percentage = 1.2; // double | 
$changed_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$is_active = true; // bool | 
$force_bookkeep_vat = true; // bool | 
$edi_gln_number = "edi_gln_number_example"; // string | 
$sales_document_language = "sales_document_language_example"; // string | 
$electronic_address = "electronic_address_example"; // string | 
$electronic_reference = "electronic_reference_example"; // string | 
$edi_service_deliverer_id = "edi_service_deliverer_id_example"; // string | 
$auto_invoice_activation_email_sent_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$auto_invoice_registration_request_sent_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$email_addresses = array("email_addresses_example"); // string[] | 
$customer_labels = array(new \Swagger\Client\Model\CustomerLabelApi()); // \Swagger\Client\Model\CustomerLabelApi[] | 
$is_future_invoice_date_allowed = true; // bool | 
$customer_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customersV2Put($id, $customer_number, $corporate_identity_number, $contact_person_email, $contact_person_mobile, $contact_person_name, $contact_person_phone, $currency_code, $gln, $email_address, $invoice_address1, $invoice_address2, $invoice_city, $invoice_country_code, $invoice_postal_code, $delivery_customer_name, $delivery_address1, $delivery_address2, $delivery_city, $delivery_country_code, $delivery_postal_code, $delivery_method_id, $delivery_term_id, $pay_to_account_id, $name, $note, $reverse_charge_on_construction_services, $webshop_customer_number, $mobile_phone, $telephone, $terms_of_payment_id, $terms_of_payment, $vat_number, $www_address, $last_invoice_date, $is_private_person, $is_northern_ireland, $discount_percentage, $changed_utc, $is_active, $force_bookkeep_vat, $edi_gln_number, $sales_document_language, $electronic_address, $electronic_reference, $edi_service_deliverer_id, $auto_invoice_activation_email_sent_date, $auto_invoice_registration_request_sent_date, $email_addresses, $customer_labels, $is_future_invoice_date_allowed, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersV2Api->customersV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **customer_number** | **string**|  |
 **corporate_identity_number** | **string**|  |
 **contact_person_email** | **string**|  |
 **contact_person_mobile** | **string**|  |
 **contact_person_name** | **string**|  |
 **contact_person_phone** | **string**|  |
 **currency_code** | **string**|  |
 **gln** | **string**|  |
 **email_address** | **string**|  |
 **invoice_address1** | **string**|  |
 **invoice_address2** | **string**|  |
 **invoice_city** | **string**|  |
 **invoice_country_code** | **string**|  |
 **invoice_postal_code** | **string**|  |
 **delivery_customer_name** | **string**|  |
 **delivery_address1** | **string**|  |
 **delivery_address2** | **string**|  |
 **delivery_city** | **string**|  |
 **delivery_country_code** | **string**|  |
 **delivery_postal_code** | **string**|  |
 **delivery_method_id** | [**string**](../Model/.md)|  |
 **delivery_term_id** | [**string**](../Model/.md)|  |
 **pay_to_account_id** | [**string**](../Model/.md)|  |
 **name** | **string**|  |
 **note** | **string**|  |
 **reverse_charge_on_construction_services** | **bool**|  |
 **webshop_customer_number** | **int**|  |
 **mobile_phone** | **string**|  |
 **telephone** | **string**|  |
 **terms_of_payment_id** | [**string**](../Model/.md)|  |
 **terms_of_payment** | [**\Swagger\Client\Model\TermsOfPaymentApi**](../Model/.md)|  |
 **vat_number** | **string**|  |
 **www_address** | **string**|  |
 **last_invoice_date** | **\DateTime**|  |
 **is_private_person** | **bool**|  |
 **is_northern_ireland** | **bool**|  |
 **discount_percentage** | **double**|  |
 **changed_utc** | **\DateTime**|  |
 **is_active** | **bool**|  |
 **force_bookkeep_vat** | **bool**|  |
 **edi_gln_number** | **string**|  |
 **sales_document_language** | **string**|  |
 **electronic_address** | **string**|  |
 **electronic_reference** | **string**|  |
 **edi_service_deliverer_id** | **string**|  |
 **auto_invoice_activation_email_sent_date** | **\DateTime**|  |
 **auto_invoice_registration_request_sent_date** | **\DateTime**|  |
 **email_addresses** | [**string[]**](../Model/string.md)|  |
 **customer_labels** | [**\Swagger\Client\Model\CustomerLabelApi[]**](../Model/\Swagger\Client\Model\CustomerLabelApi.md)|  |
 **is_future_invoice_date_allowed** | **bool**|  |
 **customer_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\CustomerApi**](../Model/CustomerApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

