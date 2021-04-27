# Swagger\Client\VouchersV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vouchersV2Get**](VouchersV2Api.md#vouchersv2get) | **GET** /v2/vouchers | Get all vouchers from all fiscal years.
[**vouchersV2Get_0**](VouchersV2Api.md#vouchersv2get_0) | **GET** /v2/vouchers/{fiscalyearId} | Get all vouchers in a given fiscal year.
[**vouchersV2Get_1**](VouchersV2Api.md#vouchersv2get_1) | **GET** /v2/vouchers/{fiscalyearId}/{voucherId} | Get a single voucher from a given fiscal year
[**vouchersV2Post**](VouchersV2Api.md#vouchersv2post) | **POST** /v2/vouchers | Create a voucher.

# **vouchersV2Get**
> \Swagger\Client\Model\PaginatedResponseVoucherApi vouchersV2Get()

Get all vouchers from all fiscal years.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Solo, Pro, Standard, Bookkeeping, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VouchersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->vouchersV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersV2Api->vouchersV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaginatedResponseVoucherApi**](../Model/PaginatedResponseVoucherApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vouchersV2Get_0**
> \Swagger\Client\Model\PaginatedResponseVoucherApi vouchersV2Get_0($fiscalyear_id)

Get all vouchers in a given fiscal year.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Solo, Pro, Standard, Bookkeeping, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VouchersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fiscalyear_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->vouchersV2Get_0($fiscalyear_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersV2Api->vouchersV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fiscalyear_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\PaginatedResponseVoucherApi**](../Model/PaginatedResponseVoucherApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vouchersV2Get_1**
> \Swagger\Client\Model\VoucherApi vouchersV2Get_1($fiscalyear_id, $voucher_id)

Get a single voucher from a given fiscal year

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Solo, Pro, Standard, Bookkeeping, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VouchersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fiscalyear_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$voucher_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->vouchersV2Get_1($fiscalyear_id, $voucher_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersV2Api->vouchersV2Get_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fiscalyear_id** | [**string**](../Model/.md)|  |
 **voucher_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\VoucherApi**](../Model/VoucherApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vouchersV2Post**
> \Swagger\Client\Model\VoucherApi vouchersV2Post($body, $use_automatic_vat_calculation, $use_default_vat_codes, $use_default_voucher_series)

Create a voucher.

<p>Requires any of the following scopes: <br><b>ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Solo, Pro, Standard, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VouchersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\VoucherApi(); // \Swagger\Client\Model\VoucherApi | 
$use_automatic_vat_calculation = true; // bool | Default value: false. Set to true and specify the sales or purchase gross amount and vat rows will be added automatically.
$use_default_vat_codes = true; // bool | Default value: True. Set to false and override default vatcodes on all rows in the request.
$use_default_voucher_series = true; // bool | Default value: True. Set to false and override default voucher series (alphabetic character before number).

try {
    $result = $apiInstance->vouchersV2Post($body, $use_automatic_vat_calculation, $use_default_vat_codes, $use_default_voucher_series);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersV2Api->vouchersV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\VoucherApi**](../Model/VoucherApi.md)|  |
 **use_automatic_vat_calculation** | **bool**| Default value: false. Set to true and specify the sales or purchase gross amount and vat rows will be added automatically. | [optional]
 **use_default_vat_codes** | **bool**| Default value: True. Set to false and override default vatcodes on all rows in the request. | [optional]
 **use_default_voucher_series** | **bool**| Default value: True. Set to false and override default voucher series (alphabetic character before number). | [optional]

### Return type

[**\Swagger\Client\Model\VoucherApi**](../Model/VoucherApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vouchersV2Post**
> \Swagger\Client\Model\VoucherApi vouchersV2Post($id, $voucher_date, $voucher_text, $rows, $number_and_number_series, $number_series, $attachments, $modified_utc, $voucher_type, $source_id, $created_utc, $use_automatic_vat_calculation, $use_default_vat_codes, $use_default_voucher_series)

Create a voucher.

<p>Requires any of the following scopes: <br><b>ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Solo, Pro, Standard, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VouchersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$voucher_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$voucher_text = "voucher_text_example"; // string | 
$rows = array(new \Swagger\Client\Model\VoucherRowApi()); // \Swagger\Client\Model\VoucherRowApi[] | 
$number_and_number_series = "number_and_number_series_example"; // string | 
$number_series = "number_series_example"; // string | 
$attachments = new \Swagger\Client\Model\AttachmentLinkApi(); // \Swagger\Client\Model\AttachmentLinkApi | 
$modified_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$voucher_type = 56; // int | 
$source_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$created_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$use_automatic_vat_calculation = true; // bool | Default value: false. Set to true and specify the sales or purchase gross amount and vat rows will be added automatically.
$use_default_vat_codes = true; // bool | Default value: True. Set to false and override default vatcodes on all rows in the request.
$use_default_voucher_series = true; // bool | Default value: True. Set to false and override default voucher series (alphabetic character before number).

try {
    $result = $apiInstance->vouchersV2Post($id, $voucher_date, $voucher_text, $rows, $number_and_number_series, $number_series, $attachments, $modified_utc, $voucher_type, $source_id, $created_utc, $use_automatic_vat_calculation, $use_default_vat_codes, $use_default_voucher_series);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersV2Api->vouchersV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **voucher_date** | **\DateTime**|  |
 **voucher_text** | **string**|  |
 **rows** | [**\Swagger\Client\Model\VoucherRowApi[]**](../Model/\Swagger\Client\Model\VoucherRowApi.md)|  |
 **number_and_number_series** | **string**|  |
 **number_series** | **string**|  |
 **attachments** | [**\Swagger\Client\Model\AttachmentLinkApi**](../Model/.md)|  |
 **modified_utc** | **\DateTime**|  |
 **voucher_type** | **int**|  |
 **source_id** | [**string**](../Model/.md)|  |
 **created_utc** | **\DateTime**|  |
 **use_automatic_vat_calculation** | **bool**| Default value: false. Set to true and specify the sales or purchase gross amount and vat rows will be added automatically. | [optional]
 **use_default_vat_codes** | **bool**| Default value: True. Set to false and override default vatcodes on all rows in the request. | [optional]
 **use_default_voucher_series** | **bool**| Default value: True. Set to false and override default voucher series (alphabetic character before number). | [optional]

### Return type

[**\Swagger\Client\Model\VoucherApi**](../Model/VoucherApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

