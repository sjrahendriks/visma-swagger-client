# Swagger\Client\TermsOfPaymentV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**termsOfPaymentV2Get**](TermsOfPaymentV2Api.md#termsofpaymentv2get) | **GET** /v2/termsofpayments | Get a list of terms of payment items
[**termsOfPaymentV2Get_0**](TermsOfPaymentV2Api.md#termsofpaymentv2get_0) | **GET** /v2/termsofpayments/{id} | Get a terms of payment item by id

# **termsOfPaymentV2Get**
> \Swagger\Client\Model\PaginatedResponseTermsOfPaymentApi termsOfPaymentV2Get()

Get a list of terms of payment items

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TermsOfPaymentV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->termsOfPaymentV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermsOfPaymentV2Api->termsOfPaymentV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaginatedResponseTermsOfPaymentApi**](../Model/PaginatedResponseTermsOfPaymentApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **termsOfPaymentV2Get_0**
> \Swagger\Client\Model\TermsOfPaymentApi termsOfPaymentV2Get_0($id)

Get a terms of payment item by id

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TermsOfPaymentV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->termsOfPaymentV2Get_0($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermsOfPaymentV2Api->termsOfPaymentV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\TermsOfPaymentApi**](../Model/TermsOfPaymentApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

