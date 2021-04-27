# Swagger\Client\VatReportV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vatReportV2Get**](VatReportV2Api.md#vatreportv2get) | **GET** /v2/vatreports | Get a list of vat reports
[**vatReportV2Get_0**](VatReportV2Api.md#vatreportv2get_0) | **GET** /v2/vatreports/{id} | Get a vat report item by id.

# **vatReportV2Get**
> \Swagger\Client\Model\PaginatedResponseVatReportApi vatReportV2Get()

Get a list of vat reports

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VatReportV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->vatReportV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VatReportV2Api->vatReportV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaginatedResponseVatReportApi**](../Model/PaginatedResponseVatReportApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vatReportV2Get_0**
> \Swagger\Client\Model\VatReportApi vatReportV2Get_0($id)

Get a vat report item by id.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VatReportV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->vatReportV2Get_0($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VatReportV2Api->vatReportV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\VatReportApi**](../Model/VatReportApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

