# Swagger\Client\UsersV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**usersV2Get**](UsersV2Api.md#usersv2get) | **GET** /v2/users | Get a list of users

# **usersV2Get**
> \Swagger\Client\Model\PaginatedResponseUserApi usersV2Get()

Get a list of users

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Invoicing, Standard, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->usersV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersV2Api->usersV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaginatedResponseUserApi**](../Model/PaginatedResponseUserApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

