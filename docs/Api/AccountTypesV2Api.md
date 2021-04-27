# Swagger\Client\AccountTypesV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountTypesV2GetDefaultAccountTypes**](AccountTypesV2Api.md#accounttypesv2getdefaultaccounttypes) | **GET** /v2/accountTypes | Gets the default account types. This is applicable on all countries but most relevant for the Netherlands.

# **accountTypesV2GetDefaultAccountTypes**
> \Swagger\Client\Model\PaginatedResponseAccountTypesAPI accountTypesV2GetDefaultAccountTypes()

Gets the default account types. This is applicable on all countries but most relevant for the Netherlands.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountTypesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->accountTypesV2GetDefaultAccountTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountTypesV2Api->accountTypesV2GetDefaultAccountTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaginatedResponseAccountTypesAPI**](../Model/PaginatedResponseAccountTypesAPI.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

