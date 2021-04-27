# Swagger\Client\CostCentersV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**costCentersV2Get**](CostCentersV2Api.md#costcentersv2get) | **GET** /v2/costcenters | Get a list of cost centers
[**costCentersV2Get_0**](CostCentersV2Api.md#costcentersv2get_0) | **PUT** /v2/costcenters/{id} | Replace content in a cost center.

# **costCentersV2Get**
> \Swagger\Client\Model\PaginatedResponseCostCenterApi costCentersV2Get()

Get a list of cost centers

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly, ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CostCentersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->costCentersV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCentersV2Api->costCentersV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaginatedResponseCostCenterApi**](../Model/PaginatedResponseCostCenterApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **costCentersV2Get_0**
> \Swagger\Client\Model\CostCenterApi costCentersV2Get_0($body, $id)

Replace content in a cost center.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CostCentersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CostCenterApi(); // \Swagger\Client\Model\CostCenterApi | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->costCentersV2Get_0($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCentersV2Api->costCentersV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CostCenterApi**](../Model/CostCenterApi.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\CostCenterApi**](../Model/CostCenterApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **costCentersV2Get_0**
> \Swagger\Client\Model\CostCenterApi costCentersV2Get_0($name, $number, $is_active, $items, $id2, $id)

Replace content in a cost center.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CostCentersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$number = 56; // int | 
$is_active = true; // bool | 
$items = array(new \Swagger\Client\Model\CostCenterItemApi()); // \Swagger\Client\Model\CostCenterItemApi[] | 
$id2 = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->costCentersV2Get_0($name, $number, $is_active, $items, $id2, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCentersV2Api->costCentersV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **number** | **int**|  |
 **is_active** | **bool**|  |
 **items** | [**\Swagger\Client\Model\CostCenterItemApi[]**](../Model/\Swagger\Client\Model\CostCenterItemApi.md)|  |
 **id2** | [**string**](../Model/.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\CostCenterApi**](../Model/CostCenterApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

