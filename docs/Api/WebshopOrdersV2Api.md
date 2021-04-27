# Swagger\Client\WebshopOrdersV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**webshopOrdersV2ConvertToInvoice**](WebshopOrdersV2Api.md#webshopordersv2converttoinvoice) | **POST** /v2/webshoporders/{webshopOrderId}/convert | Converts a webshop order to a invoice. The resulted invoice will appear as paid in the sales invoice list.
[**webshopOrdersV2Get**](WebshopOrdersV2Api.md#webshopordersv2get) | **GET** /v2/webshoporders | Get webshop orders from Visma Webshop.
[**webshopOrdersV2Get_0**](WebshopOrdersV2Api.md#webshopordersv2get_0) | **GET** /v2/webshoporders/{webshopOrderId} | Get a single webshop order.  &lt;param name&#x3D;\&quot;options\&quot;&gt;&lt;/param&gt;&lt;param name&#x3D;\&quot;webshopOrderId\&quot;&gt;&lt;/param&gt;

# **webshopOrdersV2ConvertToInvoice**
> \Swagger\Client\Model\PaginatedResponseWebshopOrderApi webshopOrdersV2ConvertToInvoice($webshop_order_id)

Converts a webshop order to a invoice. The resulted invoice will appear as paid in the sales invoice list.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebshopOrdersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webshop_order_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->webshopOrdersV2ConvertToInvoice($webshop_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebshopOrdersV2Api->webshopOrdersV2ConvertToInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webshop_order_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\PaginatedResponseWebshopOrderApi**](../Model/PaginatedResponseWebshopOrderApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webshopOrdersV2Get**
> \Swagger\Client\Model\PaginatedResponseWebshopOrderApi webshopOrdersV2Get()

Get webshop orders from Visma Webshop.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebshopOrdersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->webshopOrdersV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebshopOrdersV2Api->webshopOrdersV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaginatedResponseWebshopOrderApi**](../Model/PaginatedResponseWebshopOrderApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webshopOrdersV2Get_0**
> \Swagger\Client\Model\WebshopOrderApi webshopOrdersV2Get_0($webshop_order_id)

Get a single webshop order.  <param name=\"options\"></param><param name=\"webshopOrderId\"></param>

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebshopOrdersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webshop_order_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->webshopOrdersV2Get_0($webshop_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebshopOrdersV2Api->webshopOrdersV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webshop_order_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\WebshopOrderApi**](../Model/WebshopOrderApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

