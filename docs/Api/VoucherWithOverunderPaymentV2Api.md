# Swagger\Client\VoucherWithOverunderPaymentV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**voucherWithOverunderPaymentV2Get**](VoucherWithOverunderPaymentV2Api.md#voucherwithoverunderpaymentv2get) | **GET** /v2/voucherwithoverunderpayment/{voucherId} | Get all customer or supplier references for a specific voucher Id
[**voucherWithOverunderPaymentV2Post**](VoucherWithOverunderPaymentV2Api.md#voucherwithoverunderpaymentv2post) | **POST** /v2/voucherwithoverunderpayment | Create an over or underpayment voucher

# **voucherWithOverunderPaymentV2Get**
> \Swagger\Client\Model\PaginatedResponseLedgerVoucherRelationApi voucherWithOverunderPaymentV2Get($voucher_id)

Get all customer or supplier references for a specific voucher Id

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Solo, Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VoucherWithOverunderPaymentV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$voucher_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->voucherWithOverunderPaymentV2Get($voucher_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherWithOverunderPaymentV2Api->voucherWithOverunderPaymentV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucher_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\PaginatedResponseLedgerVoucherRelationApi**](../Model/PaginatedResponseLedgerVoucherRelationApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherWithOverunderPaymentV2Post**
> string voucherWithOverunderPaymentV2Post($body)

Create an over or underpayment voucher

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Solo, Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VoucherWithOverunderPaymentV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\VoucherWithOverunderPaymentApi(); // \Swagger\Client\Model\VoucherWithOverunderPaymentApi | 

try {
    $result = $apiInstance->voucherWithOverunderPaymentV2Post($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherWithOverunderPaymentV2Api->voucherWithOverunderPaymentV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\VoucherWithOverunderPaymentApi**](../Model/VoucherWithOverunderPaymentApi.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherWithOverunderPaymentV2Post**
> string voucherWithOverunderPaymentV2Post($voucher_date, $voucher_text, $rows, $attachments)

Create an over or underpayment voucher

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Solo, Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VoucherWithOverunderPaymentV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$voucher_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$voucher_text = "voucher_text_example"; // string | 
$rows = array(new \Swagger\Client\Model\VoucherWithOverunderPaymentRowApi()); // \Swagger\Client\Model\VoucherWithOverunderPaymentRowApi[] | 
$attachments = new \Swagger\Client\Model\AttachmentLinkApi(); // \Swagger\Client\Model\AttachmentLinkApi | 

try {
    $result = $apiInstance->voucherWithOverunderPaymentV2Post($voucher_date, $voucher_text, $rows, $attachments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherWithOverunderPaymentV2Api->voucherWithOverunderPaymentV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucher_date** | **\DateTime**|  |
 **voucher_text** | **string**|  |
 **rows** | [**\Swagger\Client\Model\VoucherWithOverunderPaymentRowApi[]**](../Model/\Swagger\Client\Model\VoucherWithOverunderPaymentRowApi.md)|  |
 **attachments** | [**\Swagger\Client\Model\AttachmentLinkApi**](../Model/.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

