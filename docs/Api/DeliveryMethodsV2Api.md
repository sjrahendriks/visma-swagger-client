# Swagger\Client\DeliveryMethodsV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deliveryMethodsV2Get**](DeliveryMethodsV2Api.md#deliverymethodsv2get) | **GET** /v2/deliverymethods | Get delivery methods.
[**deliveryMethodsV2Get_0**](DeliveryMethodsV2Api.md#deliverymethodsv2get_0) | **GET** /v2/deliverymethods/{deliveryMethodId} | Get a delivery method.

# **deliveryMethodsV2Get**
> \Swagger\Client\Model\PaginatedResponseDeliveryMethodApi deliveryMethodsV2Get()

Get delivery methods.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DeliveryMethodsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->deliveryMethodsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryMethodsV2Api->deliveryMethodsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaginatedResponseDeliveryMethodApi**](../Model/PaginatedResponseDeliveryMethodApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deliveryMethodsV2Get_0**
> \Swagger\Client\Model\DeliveryMethodApi deliveryMethodsV2Get_0($delivery_method_id)

Get a delivery method.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DeliveryMethodsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delivery_method_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->deliveryMethodsV2Get_0($delivery_method_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryMethodsV2Api->deliveryMethodsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delivery_method_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\DeliveryMethodApi**](../Model/DeliveryMethodApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

