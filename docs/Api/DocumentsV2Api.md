# Swagger\Client\DocumentsV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**documentsV2Get**](DocumentsV2Api.md#documentsv2get) | **GET** /v2/documents/{id} | Get a vat report pdf by document id.

# **documentsV2Get**
> \Swagger\Client\Model\DocumentApi documentsV2Get($id)

Get a vat report pdf by document id.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DocumentsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Document id

try {
    $result = $apiInstance->documentsV2Get($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsV2Api->documentsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Document id |

### Return type

[**\Swagger\Client\Model\DocumentApi**](../Model/DocumentApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

