# Swagger\Client\CostCenterItemsV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**costCenterItemsV2Get**](CostCenterItemsV2Api.md#costcenteritemsv2get) | **GET** /v2/costcenteritems/{itemId} | Get a specific cost center item.
[**costCenterItemsV2Post**](CostCenterItemsV2Api.md#costcenteritemsv2post) | **POST** /v2/costcenteritems | Create a single cost center item.
[**costCenterItemsV2Put**](CostCenterItemsV2Api.md#costcenteritemsv2put) | **PUT** /v2/costcenteritems/{costCenterItemId} | Replace the data in a cost center item.

# **costCenterItemsV2Get**
> \Swagger\Client\Model\CostCenterItemApi costCenterItemsV2Get($item_id)

Get a specific cost center item.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly, ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CostCenterItemsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->costCenterItemsV2Get($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCenterItemsV2Api->costCenterItemsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\CostCenterItemApi**](../Model/CostCenterItemApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **costCenterItemsV2Post**
> \Swagger\Client\Model\CostCenterItemApi costCenterItemsV2Post($body)

Create a single cost center item.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CostCenterItemsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CostCenterItemApi(); // \Swagger\Client\Model\CostCenterItemApi | 

try {
    $result = $apiInstance->costCenterItemsV2Post($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCenterItemsV2Api->costCenterItemsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CostCenterItemApi**](../Model/CostCenterItemApi.md)|  |

### Return type

[**\Swagger\Client\Model\CostCenterItemApi**](../Model/CostCenterItemApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **costCenterItemsV2Post**
> \Swagger\Client\Model\CostCenterItemApi costCenterItemsV2Post($cost_center_id, $id, $name, $short_name, $is_active, $created_utc)

Create a single cost center item.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CostCenterItemsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cost_center_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$name = "name_example"; // string | 
$short_name = "short_name_example"; // string | 
$is_active = true; // bool | 
$created_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->costCenterItemsV2Post($cost_center_id, $id, $name, $short_name, $is_active, $created_utc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCenterItemsV2Api->costCenterItemsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cost_center_id** | [**string**](../Model/.md)|  |
 **id** | [**string**](../Model/.md)|  |
 **name** | **string**|  |
 **short_name** | **string**|  |
 **is_active** | **bool**|  |
 **created_utc** | **\DateTime**|  |

### Return type

[**\Swagger\Client\Model\CostCenterItemApi**](../Model/CostCenterItemApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **costCenterItemsV2Put**
> \Swagger\Client\Model\CostCenterItemApi costCenterItemsV2Put($body, $cost_center_item_id)

Replace the data in a cost center item.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CostCenterItemsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CostCenterItemApi(); // \Swagger\Client\Model\CostCenterItemApi | 
$cost_center_item_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->costCenterItemsV2Put($body, $cost_center_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCenterItemsV2Api->costCenterItemsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CostCenterItemApi**](../Model/CostCenterItemApi.md)|  |
 **cost_center_item_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\CostCenterItemApi**](../Model/CostCenterItemApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **costCenterItemsV2Put**
> \Swagger\Client\Model\CostCenterItemApi costCenterItemsV2Put($cost_center_id, $id, $name, $short_name, $is_active, $created_utc, $cost_center_item_id)

Replace the data in a cost center item.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CostCenterItemsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cost_center_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$name = "name_example"; // string | 
$short_name = "short_name_example"; // string | 
$is_active = true; // bool | 
$created_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$cost_center_item_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->costCenterItemsV2Put($cost_center_id, $id, $name, $short_name, $is_active, $created_utc, $cost_center_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCenterItemsV2Api->costCenterItemsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cost_center_id** | [**string**](../Model/.md)|  |
 **id** | [**string**](../Model/.md)|  |
 **name** | **string**|  |
 **short_name** | **string**|  |
 **is_active** | **bool**|  |
 **created_utc** | **\DateTime**|  |
 **cost_center_item_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\CostCenterItemApi**](../Model/CostCenterItemApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

