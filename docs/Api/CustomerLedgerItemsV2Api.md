# Swagger\Client\CustomerLedgerItemsV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerLedgerItemsV2Get**](CustomerLedgerItemsV2Api.md#customerledgeritemsv2get) | **GET** /v2/customerledgeritems | Get a list of customer ledger items.
[**customerLedgerItemsV2Get_0**](CustomerLedgerItemsV2Api.md#customerledgeritemsv2get_0) | **GET** /v2/customerledgeritems/{customerLedgerItemId} | Get a customer ledger item by id.
[**customerLedgerItemsV2Post**](CustomerLedgerItemsV2Api.md#customerledgeritemsv2post) | **POST** /v2/customerledgeritems | Create a customer ledger item.
[**customerLedgerItemsV2Post_0**](CustomerLedgerItemsV2Api.md#customerledgeritemsv2post_0) | **POST** /v2/customerledgeritems/customerledgeritemswithvoucher | Create a customer ledger item and a voucher included.

# **customerLedgerItemsV2Get**
> \Swagger\Client\Model\PaginatedResponseCustomerLedgerItemApi customerLedgerItemsV2Get()

Get a list of customer ledger items.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerLedgerItemsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->customerLedgerItemsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerLedgerItemsV2Api->customerLedgerItemsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaginatedResponseCustomerLedgerItemApi**](../Model/PaginatedResponseCustomerLedgerItemApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerLedgerItemsV2Get_0**
> \Swagger\Client\Model\CustomerLedgerItemApi customerLedgerItemsV2Get_0($customer_ledger_item_id)

Get a customer ledger item by id.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerLedgerItemsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_ledger_item_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerLedgerItemsV2Get_0($customer_ledger_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerLedgerItemsV2Api->customerLedgerItemsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_ledger_item_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\CustomerLedgerItemApi**](../Model/CustomerLedgerItemApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerLedgerItemsV2Post**
> \Swagger\Client\Model\CustomerLedgerItemApi customerLedgerItemsV2Post($body)

Create a customer ledger item.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerLedgerItemsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CustomerLedgerItemApi(); // \Swagger\Client\Model\CustomerLedgerItemApi | 

try {
    $result = $apiInstance->customerLedgerItemsV2Post($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerLedgerItemsV2Api->customerLedgerItemsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CustomerLedgerItemApi**](../Model/CustomerLedgerItemApi.md)|  |

### Return type

[**\Swagger\Client\Model\CustomerLedgerItemApi**](../Model/CustomerLedgerItemApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerLedgerItemsV2Post**
> \Swagger\Client\Model\CustomerLedgerItemApi customerLedgerItemsV2Post($currency_code, $currency_rate, $currency_rate_unit, $customer_id, $due_date, $id, $invoice_date, $invoice_number, $is_credit_invoice, $payment_reference_number, $remaining_amount_invoice_currency, $roundings_amount_invoice_currency, $total_amount_invoice_currency, $vat_amount_invoice_currency, $voucher_id, $modified_utc)

Create a customer ledger item.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerLedgerItemsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency_code = "currency_code_example"; // string | 
$currency_rate = 1.2; // double | 
$currency_rate_unit = 56; // int | 
$customer_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$due_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$invoice_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$invoice_number = 56; // int | 
$is_credit_invoice = true; // bool | 
$payment_reference_number = "payment_reference_number_example"; // string | 
$remaining_amount_invoice_currency = 1.2; // double | 
$roundings_amount_invoice_currency = 1.2; // double | 
$total_amount_invoice_currency = 1.2; // double | 
$vat_amount_invoice_currency = 1.2; // double | 
$voucher_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$modified_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->customerLedgerItemsV2Post($currency_code, $currency_rate, $currency_rate_unit, $customer_id, $due_date, $id, $invoice_date, $invoice_number, $is_credit_invoice, $payment_reference_number, $remaining_amount_invoice_currency, $roundings_amount_invoice_currency, $total_amount_invoice_currency, $vat_amount_invoice_currency, $voucher_id, $modified_utc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerLedgerItemsV2Api->customerLedgerItemsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_code** | **string**|  |
 **currency_rate** | **double**|  |
 **currency_rate_unit** | **int**|  |
 **customer_id** | [**string**](../Model/.md)|  |
 **due_date** | **\DateTime**|  |
 **id** | [**string**](../Model/.md)|  |
 **invoice_date** | **\DateTime**|  |
 **invoice_number** | **int**|  |
 **is_credit_invoice** | **bool**|  |
 **payment_reference_number** | **string**|  |
 **remaining_amount_invoice_currency** | **double**|  |
 **roundings_amount_invoice_currency** | **double**|  |
 **total_amount_invoice_currency** | **double**|  |
 **vat_amount_invoice_currency** | **double**|  |
 **voucher_id** | [**string**](../Model/.md)|  |
 **modified_utc** | **\DateTime**|  |

### Return type

[**\Swagger\Client\Model\CustomerLedgerItemApi**](../Model/CustomerLedgerItemApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerLedgerItemsV2Post_0**
> \Swagger\Client\Model\CustomerLedgerItemWithVoucherApi customerLedgerItemsV2Post_0($body, $use_automatic_vat_calculation, $use_default_vat_codes, $use_default_voucher_series)

Create a customer ledger item and a voucher included.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerLedgerItemsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CustomerLedgerItemWithVoucherApi(); // \Swagger\Client\Model\CustomerLedgerItemWithVoucherApi | 
$use_automatic_vat_calculation = true; // bool | Default value: false. Set to true and specify the sales or purchase gross amount and vat rows will be added automatically.
$use_default_vat_codes = true; // bool | Default value: True. Set to false and override default vatcodes on all rows in the request.
$use_default_voucher_series = true; // bool | Default value: True. Set to false and override default voucher series (alphabetic character before number).

try {
    $result = $apiInstance->customerLedgerItemsV2Post_0($body, $use_automatic_vat_calculation, $use_default_vat_codes, $use_default_voucher_series);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerLedgerItemsV2Api->customerLedgerItemsV2Post_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CustomerLedgerItemWithVoucherApi**](../Model/CustomerLedgerItemWithVoucherApi.md)|  |
 **use_automatic_vat_calculation** | **bool**| Default value: false. Set to true and specify the sales or purchase gross amount and vat rows will be added automatically. | [optional]
 **use_default_vat_codes** | **bool**| Default value: True. Set to false and override default vatcodes on all rows in the request. | [optional]
 **use_default_voucher_series** | **bool**| Default value: True. Set to false and override default voucher series (alphabetic character before number). | [optional]

### Return type

[**\Swagger\Client\Model\CustomerLedgerItemWithVoucherApi**](../Model/CustomerLedgerItemWithVoucherApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerLedgerItemsV2Post_0**
> \Swagger\Client\Model\CustomerLedgerItemWithVoucherApi customerLedgerItemsV2Post_0($currency_code, $currency_rate, $currency_rate_unit, $customer_id, $due_date, $id, $invoice_date, $invoice_number, $is_credit_invoice, $payment_reference_number, $remaining_amount_invoice_currency, $roundings_amount_invoice_currency, $total_amount_invoice_currency, $vat_amount_invoice_currency, $voucher, $modified_utc, $use_automatic_vat_calculation, $use_default_vat_codes, $use_default_voucher_series)

Create a customer ledger item and a voucher included.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerLedgerItemsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency_code = "currency_code_example"; // string | 
$currency_rate = 1.2; // double | 
$currency_rate_unit = 56; // int | 
$customer_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$due_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$invoice_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$invoice_number = 56; // int | 
$is_credit_invoice = true; // bool | 
$payment_reference_number = "payment_reference_number_example"; // string | 
$remaining_amount_invoice_currency = 1.2; // double | 
$roundings_amount_invoice_currency = 1.2; // double | 
$total_amount_invoice_currency = 1.2; // double | 
$vat_amount_invoice_currency = 1.2; // double | 
$voucher = new \Swagger\Client\Model\VoucherApi(); // \Swagger\Client\Model\VoucherApi | 
$modified_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$use_automatic_vat_calculation = true; // bool | Default value: false. Set to true and specify the sales or purchase gross amount and vat rows will be added automatically.
$use_default_vat_codes = true; // bool | Default value: True. Set to false and override default vatcodes on all rows in the request.
$use_default_voucher_series = true; // bool | Default value: True. Set to false and override default voucher series (alphabetic character before number).

try {
    $result = $apiInstance->customerLedgerItemsV2Post_0($currency_code, $currency_rate, $currency_rate_unit, $customer_id, $due_date, $id, $invoice_date, $invoice_number, $is_credit_invoice, $payment_reference_number, $remaining_amount_invoice_currency, $roundings_amount_invoice_currency, $total_amount_invoice_currency, $vat_amount_invoice_currency, $voucher, $modified_utc, $use_automatic_vat_calculation, $use_default_vat_codes, $use_default_voucher_series);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerLedgerItemsV2Api->customerLedgerItemsV2Post_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_code** | **string**|  |
 **currency_rate** | **double**|  |
 **currency_rate_unit** | **int**|  |
 **customer_id** | [**string**](../Model/.md)|  |
 **due_date** | **\DateTime**|  |
 **id** | [**string**](../Model/.md)|  |
 **invoice_date** | **\DateTime**|  |
 **invoice_number** | **int**|  |
 **is_credit_invoice** | **bool**|  |
 **payment_reference_number** | **string**|  |
 **remaining_amount_invoice_currency** | **double**|  |
 **roundings_amount_invoice_currency** | **double**|  |
 **total_amount_invoice_currency** | **double**|  |
 **vat_amount_invoice_currency** | **double**|  |
 **voucher** | [**\Swagger\Client\Model\VoucherApi**](../Model/.md)|  |
 **modified_utc** | **\DateTime**|  |
 **use_automatic_vat_calculation** | **bool**| Default value: false. Set to true and specify the sales or purchase gross amount and vat rows will be added automatically. | [optional]
 **use_default_vat_codes** | **bool**| Default value: True. Set to false and override default vatcodes on all rows in the request. | [optional]
 **use_default_voucher_series** | **bool**| Default value: True. Set to false and override default voucher series (alphabetic character before number). | [optional]

### Return type

[**\Swagger\Client\Model\CustomerLedgerItemWithVoucherApi**](../Model/CustomerLedgerItemWithVoucherApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

