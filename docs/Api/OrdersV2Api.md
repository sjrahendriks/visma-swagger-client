# Swagger\Client\OrdersV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ordersV2BackOrder**](OrdersV2Api.md#ordersv2backorder) | **POST** /v2/orders/{id}/backorder | 
[**ordersV2Convert**](OrdersV2Api.md#ordersv2convert) | **POST** /v2/orders/{id}/convert | Converts an order to an invoice
[**ordersV2Delete**](OrdersV2Api.md#ordersv2delete) | **DELETE** /v2/orders/{id} | Delete an order.
[**ordersV2DeliveryNotePrint**](OrdersV2Api.md#ordersv2deliverynoteprint) | **GET** /v2/orders/{id}/deliverynote/print | Get a pdf-file of a delivery note for an order.
[**ordersV2Get**](OrdersV2Api.md#ordersv2get) | **GET** /v2/orders | Get orders.
[**ordersV2Get_0**](OrdersV2Api.md#ordersv2get_0) | **GET** /v2/orders/{id} | Get order
[**ordersV2Post**](OrdersV2Api.md#ordersv2post) | **POST** /v2/orders | Create order.
[**ordersV2Print**](OrdersV2Api.md#ordersv2print) | **GET** /v2/orders/{id}/print | Get a pdf-file of an order.
[**ordersV2Put**](OrdersV2Api.md#ordersv2put) | **PUT** /v2/orders/{id} | Replace content in an order.

# **ordersV2BackOrder**
> \Swagger\Client\Model\OrderApi ordersV2BackOrder($id)



<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>order_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrdersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->ordersV2BackOrder($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV2Api->ordersV2BackOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\OrderApi**](../Model/OrderApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersV2Convert**
> \Swagger\Client\Model\CustomerInvoiceApi ordersV2Convert($id)

Converts an order to an invoice

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>order_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrdersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->ordersV2Convert($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV2Api->ordersV2Convert: ', $e->getMessage(), PHP_EOL;
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

# **ordersV2Delete**
> object ordersV2Delete($id)

Delete an order.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>order_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrdersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->ordersV2Delete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV2Api->ordersV2Delete: ', $e->getMessage(), PHP_EOL;
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

# **ordersV2DeliveryNotePrint**
> object ordersV2DeliveryNotePrint($id)

Get a pdf-file of a delivery note for an order.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Requires any of the following modules: <br><b>order_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrdersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The id of the order

try {
    $result = $apiInstance->ordersV2DeliveryNotePrint($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV2Api->ordersV2DeliveryNotePrint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The id of the order |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersV2Get**
> \Swagger\Client\Model\PaginatedResponseOrderApi ordersV2Get()

Get orders.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Requires any of the following modules: <br><b>order_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrdersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->ordersV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV2Api->ordersV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaginatedResponseOrderApi**](../Model/PaginatedResponseOrderApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersV2Get_0**
> \Swagger\Client\Model\OrderApi ordersV2Get_0($id)

Get order

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Requires any of the following modules: <br><b>order_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrdersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->ordersV2Get_0($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV2Api->ordersV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\OrderApi**](../Model/OrderApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersV2Post**
> \Swagger\Client\Model\OrderApi ordersV2Post($body)

Create order.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>order_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrdersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\OrderApi(); // \Swagger\Client\Model\OrderApi | 

try {
    $result = $apiInstance->ordersV2Post($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV2Api->ordersV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OrderApi**](../Model/OrderApi.md)|  |

### Return type

[**\Swagger\Client\Model\OrderApi**](../Model/OrderApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersV2Post**
> \Swagger\Client\Model\OrderApi ordersV2Post($id, $amount, $customer_id, $currency_code, $created_utc, $vat_amount, $roundings_amount, $delivered_amount, $delivered_vat_amount, $delivered_roundings_amount, $delivery_customer_name, $delivery_address1, $delivery_address2, $delivery_postal_code, $delivery_city, $delivery_country_code, $your_reference, $our_reference, $invoice_address1, $invoice_address2, $invoice_city, $invoice_country_code, $invoice_customer_name, $invoice_postal_code, $delivery_method_name, $delivery_method_code, $delivery_term_name, $delivery_term_code, $eu_third_party, $customer_is_private_person, $order_date, $status, $number, $modified_utc, $delivery_date, $house_work_amount, $house_work_automatic_distribution, $house_work_corporate_identity_number, $house_work_property_name, $rows, $shipped_date_time, $rot_reduced_invoicing_type, $rot_property_type, $persons, $reverse_charge_on_construction_services, $uses_green_technology)

Create order.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>order_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrdersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$amount = 1.2; // double | 
$customer_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$currency_code = "currency_code_example"; // string | 
$created_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$vat_amount = 1.2; // double | 
$roundings_amount = 1.2; // double | 
$delivered_amount = 1.2; // double | 
$delivered_vat_amount = 1.2; // double | 
$delivered_roundings_amount = 1.2; // double | 
$delivery_customer_name = "delivery_customer_name_example"; // string | 
$delivery_address1 = "delivery_address1_example"; // string | 
$delivery_address2 = "delivery_address2_example"; // string | 
$delivery_postal_code = "delivery_postal_code_example"; // string | 
$delivery_city = "delivery_city_example"; // string | 
$delivery_country_code = "delivery_country_code_example"; // string | 
$your_reference = "your_reference_example"; // string | 
$our_reference = "our_reference_example"; // string | 
$invoice_address1 = "invoice_address1_example"; // string | 
$invoice_address2 = "invoice_address2_example"; // string | 
$invoice_city = "invoice_city_example"; // string | 
$invoice_country_code = "invoice_country_code_example"; // string | 
$invoice_customer_name = "invoice_customer_name_example"; // string | 
$invoice_postal_code = "invoice_postal_code_example"; // string | 
$delivery_method_name = "delivery_method_name_example"; // string | 
$delivery_method_code = "delivery_method_code_example"; // string | 
$delivery_term_name = "delivery_term_name_example"; // string | 
$delivery_term_code = "delivery_term_code_example"; // string | 
$eu_third_party = true; // bool | 
$customer_is_private_person = true; // bool | 
$order_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$status = 56; // int | 
$number = 56; // int | 
$modified_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$delivery_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$house_work_amount = 1.2; // double | 
$house_work_automatic_distribution = true; // bool | 
$house_work_corporate_identity_number = "house_work_corporate_identity_number_example"; // string | 
$house_work_property_name = "house_work_property_name_example"; // string | 
$rows = array(new \Swagger\Client\Model\OrderRowApi()); // \Swagger\Client\Model\OrderRowApi[] | 
$shipped_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$rot_reduced_invoicing_type = 56; // int | 
$rot_property_type = 56; // int | 
$persons = array(new \Swagger\Client\Model\SalesDocumentRotRutReductionPersonApi()); // \Swagger\Client\Model\SalesDocumentRotRutReductionPersonApi[] | 
$reverse_charge_on_construction_services = true; // bool | 
$uses_green_technology = true; // bool | 

try {
    $result = $apiInstance->ordersV2Post($id, $amount, $customer_id, $currency_code, $created_utc, $vat_amount, $roundings_amount, $delivered_amount, $delivered_vat_amount, $delivered_roundings_amount, $delivery_customer_name, $delivery_address1, $delivery_address2, $delivery_postal_code, $delivery_city, $delivery_country_code, $your_reference, $our_reference, $invoice_address1, $invoice_address2, $invoice_city, $invoice_country_code, $invoice_customer_name, $invoice_postal_code, $delivery_method_name, $delivery_method_code, $delivery_term_name, $delivery_term_code, $eu_third_party, $customer_is_private_person, $order_date, $status, $number, $modified_utc, $delivery_date, $house_work_amount, $house_work_automatic_distribution, $house_work_corporate_identity_number, $house_work_property_name, $rows, $shipped_date_time, $rot_reduced_invoicing_type, $rot_property_type, $persons, $reverse_charge_on_construction_services, $uses_green_technology);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV2Api->ordersV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **amount** | **double**|  |
 **customer_id** | [**string**](../Model/.md)|  |
 **currency_code** | **string**|  |
 **created_utc** | **\DateTime**|  |
 **vat_amount** | **double**|  |
 **roundings_amount** | **double**|  |
 **delivered_amount** | **double**|  |
 **delivered_vat_amount** | **double**|  |
 **delivered_roundings_amount** | **double**|  |
 **delivery_customer_name** | **string**|  |
 **delivery_address1** | **string**|  |
 **delivery_address2** | **string**|  |
 **delivery_postal_code** | **string**|  |
 **delivery_city** | **string**|  |
 **delivery_country_code** | **string**|  |
 **your_reference** | **string**|  |
 **our_reference** | **string**|  |
 **invoice_address1** | **string**|  |
 **invoice_address2** | **string**|  |
 **invoice_city** | **string**|  |
 **invoice_country_code** | **string**|  |
 **invoice_customer_name** | **string**|  |
 **invoice_postal_code** | **string**|  |
 **delivery_method_name** | **string**|  |
 **delivery_method_code** | **string**|  |
 **delivery_term_name** | **string**|  |
 **delivery_term_code** | **string**|  |
 **eu_third_party** | **bool**|  |
 **customer_is_private_person** | **bool**|  |
 **order_date** | **\DateTime**|  |
 **status** | **int**|  |
 **number** | **int**|  |
 **modified_utc** | **\DateTime**|  |
 **delivery_date** | **\DateTime**|  |
 **house_work_amount** | **double**|  |
 **house_work_automatic_distribution** | **bool**|  |
 **house_work_corporate_identity_number** | **string**|  |
 **house_work_property_name** | **string**|  |
 **rows** | [**\Swagger\Client\Model\OrderRowApi[]**](../Model/\Swagger\Client\Model\OrderRowApi.md)|  |
 **shipped_date_time** | **\DateTime**|  |
 **rot_reduced_invoicing_type** | **int**|  |
 **rot_property_type** | **int**|  |
 **persons** | [**\Swagger\Client\Model\SalesDocumentRotRutReductionPersonApi[]**](../Model/\Swagger\Client\Model\SalesDocumentRotRutReductionPersonApi.md)|  |
 **reverse_charge_on_construction_services** | **bool**|  |
 **uses_green_technology** | **bool**|  |

### Return type

[**\Swagger\Client\Model\OrderApi**](../Model/OrderApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersV2Print**
> object ordersV2Print($id)

Get a pdf-file of an order.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Requires any of the following modules: <br><b>order_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrdersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The id of the order

try {
    $result = $apiInstance->ordersV2Print($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV2Api->ordersV2Print: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The id of the order |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersV2Put**
> object ordersV2Put($body, $id)

Replace content in an order.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>order_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrdersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\OrderApi(); // \Swagger\Client\Model\OrderApi | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->ordersV2Put($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV2Api->ordersV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OrderApi**](../Model/OrderApi.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersV2Put**
> object ordersV2Put($id2, $amount, $customer_id, $currency_code, $created_utc, $vat_amount, $roundings_amount, $delivered_amount, $delivered_vat_amount, $delivered_roundings_amount, $delivery_customer_name, $delivery_address1, $delivery_address2, $delivery_postal_code, $delivery_city, $delivery_country_code, $your_reference, $our_reference, $invoice_address1, $invoice_address2, $invoice_city, $invoice_country_code, $invoice_customer_name, $invoice_postal_code, $delivery_method_name, $delivery_method_code, $delivery_term_name, $delivery_term_code, $eu_third_party, $customer_is_private_person, $order_date, $status, $number, $modified_utc, $delivery_date, $house_work_amount, $house_work_automatic_distribution, $house_work_corporate_identity_number, $house_work_property_name, $rows, $shipped_date_time, $rot_reduced_invoicing_type, $rot_property_type, $persons, $reverse_charge_on_construction_services, $uses_green_technology, $id)

Replace content in an order.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>order_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrdersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id2 = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$amount = 1.2; // double | 
$customer_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$currency_code = "currency_code_example"; // string | 
$created_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$vat_amount = 1.2; // double | 
$roundings_amount = 1.2; // double | 
$delivered_amount = 1.2; // double | 
$delivered_vat_amount = 1.2; // double | 
$delivered_roundings_amount = 1.2; // double | 
$delivery_customer_name = "delivery_customer_name_example"; // string | 
$delivery_address1 = "delivery_address1_example"; // string | 
$delivery_address2 = "delivery_address2_example"; // string | 
$delivery_postal_code = "delivery_postal_code_example"; // string | 
$delivery_city = "delivery_city_example"; // string | 
$delivery_country_code = "delivery_country_code_example"; // string | 
$your_reference = "your_reference_example"; // string | 
$our_reference = "our_reference_example"; // string | 
$invoice_address1 = "invoice_address1_example"; // string | 
$invoice_address2 = "invoice_address2_example"; // string | 
$invoice_city = "invoice_city_example"; // string | 
$invoice_country_code = "invoice_country_code_example"; // string | 
$invoice_customer_name = "invoice_customer_name_example"; // string | 
$invoice_postal_code = "invoice_postal_code_example"; // string | 
$delivery_method_name = "delivery_method_name_example"; // string | 
$delivery_method_code = "delivery_method_code_example"; // string | 
$delivery_term_name = "delivery_term_name_example"; // string | 
$delivery_term_code = "delivery_term_code_example"; // string | 
$eu_third_party = true; // bool | 
$customer_is_private_person = true; // bool | 
$order_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$status = 56; // int | 
$number = 56; // int | 
$modified_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$delivery_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$house_work_amount = 1.2; // double | 
$house_work_automatic_distribution = true; // bool | 
$house_work_corporate_identity_number = "house_work_corporate_identity_number_example"; // string | 
$house_work_property_name = "house_work_property_name_example"; // string | 
$rows = array(new \Swagger\Client\Model\OrderRowApi()); // \Swagger\Client\Model\OrderRowApi[] | 
$shipped_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$rot_reduced_invoicing_type = 56; // int | 
$rot_property_type = 56; // int | 
$persons = array(new \Swagger\Client\Model\SalesDocumentRotRutReductionPersonApi()); // \Swagger\Client\Model\SalesDocumentRotRutReductionPersonApi[] | 
$reverse_charge_on_construction_services = true; // bool | 
$uses_green_technology = true; // bool | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->ordersV2Put($id2, $amount, $customer_id, $currency_code, $created_utc, $vat_amount, $roundings_amount, $delivered_amount, $delivered_vat_amount, $delivered_roundings_amount, $delivery_customer_name, $delivery_address1, $delivery_address2, $delivery_postal_code, $delivery_city, $delivery_country_code, $your_reference, $our_reference, $invoice_address1, $invoice_address2, $invoice_city, $invoice_country_code, $invoice_customer_name, $invoice_postal_code, $delivery_method_name, $delivery_method_code, $delivery_term_name, $delivery_term_code, $eu_third_party, $customer_is_private_person, $order_date, $status, $number, $modified_utc, $delivery_date, $house_work_amount, $house_work_automatic_distribution, $house_work_corporate_identity_number, $house_work_property_name, $rows, $shipped_date_time, $rot_reduced_invoicing_type, $rot_property_type, $persons, $reverse_charge_on_construction_services, $uses_green_technology, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV2Api->ordersV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id2** | [**string**](../Model/.md)|  |
 **amount** | **double**|  |
 **customer_id** | [**string**](../Model/.md)|  |
 **currency_code** | **string**|  |
 **created_utc** | **\DateTime**|  |
 **vat_amount** | **double**|  |
 **roundings_amount** | **double**|  |
 **delivered_amount** | **double**|  |
 **delivered_vat_amount** | **double**|  |
 **delivered_roundings_amount** | **double**|  |
 **delivery_customer_name** | **string**|  |
 **delivery_address1** | **string**|  |
 **delivery_address2** | **string**|  |
 **delivery_postal_code** | **string**|  |
 **delivery_city** | **string**|  |
 **delivery_country_code** | **string**|  |
 **your_reference** | **string**|  |
 **our_reference** | **string**|  |
 **invoice_address1** | **string**|  |
 **invoice_address2** | **string**|  |
 **invoice_city** | **string**|  |
 **invoice_country_code** | **string**|  |
 **invoice_customer_name** | **string**|  |
 **invoice_postal_code** | **string**|  |
 **delivery_method_name** | **string**|  |
 **delivery_method_code** | **string**|  |
 **delivery_term_name** | **string**|  |
 **delivery_term_code** | **string**|  |
 **eu_third_party** | **bool**|  |
 **customer_is_private_person** | **bool**|  |
 **order_date** | **\DateTime**|  |
 **status** | **int**|  |
 **number** | **int**|  |
 **modified_utc** | **\DateTime**|  |
 **delivery_date** | **\DateTime**|  |
 **house_work_amount** | **double**|  |
 **house_work_automatic_distribution** | **bool**|  |
 **house_work_corporate_identity_number** | **string**|  |
 **house_work_property_name** | **string**|  |
 **rows** | [**\Swagger\Client\Model\OrderRowApi[]**](../Model/\Swagger\Client\Model\OrderRowApi.md)|  |
 **shipped_date_time** | **\DateTime**|  |
 **rot_reduced_invoicing_type** | **int**|  |
 **rot_property_type** | **int**|  |
 **persons** | [**\Swagger\Client\Model\SalesDocumentRotRutReductionPersonApi[]**](../Model/\Swagger\Client\Model\SalesDocumentRotRutReductionPersonApi.md)|  |
 **reverse_charge_on_construction_services** | **bool**|  |
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

