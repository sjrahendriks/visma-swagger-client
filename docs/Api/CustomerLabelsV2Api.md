# Swagger\Client\CustomerLabelsV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerLabelsV2Delete**](CustomerLabelsV2Api.md#customerlabelsv2delete) | **DELETE** /v2/customerlabels/{customerLabelId} | Deletes a customer label.
[**customerLabelsV2Get**](CustomerLabelsV2Api.md#customerlabelsv2get) | **GET** /v2/customerlabels | Gets all customer labels.
[**customerLabelsV2Get_0**](CustomerLabelsV2Api.md#customerlabelsv2get_0) | **GET** /v2/customerlabels/{customerLabelId} | Gets an customer label by id.
[**customerLabelsV2Post**](CustomerLabelsV2Api.md#customerlabelsv2post) | **POST** /v2/customerlabels | Create a customer label.
[**customerLabelsV2Put**](CustomerLabelsV2Api.md#customerlabelsv2put) | **PUT** /v2/customerlabels/{customerLabelId} | Replace content of a customer label.

# **customerLabelsV2Delete**
> \Swagger\Client\Model\CustomerLabelApi customerLabelsV2Delete($customer_label_id)

Deletes a customer label.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerLabelsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_label_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerLabelsV2Delete($customer_label_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerLabelsV2Api->customerLabelsV2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_label_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\CustomerLabelApi**](../Model/CustomerLabelApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerLabelsV2Get**
> \Swagger\Client\Model\PaginatedResponseCustomerLabelApi customerLabelsV2Get()

Gets all customer labels.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerLabelsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->customerLabelsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerLabelsV2Api->customerLabelsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaginatedResponseCustomerLabelApi**](../Model/PaginatedResponseCustomerLabelApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerLabelsV2Get_0**
> \Swagger\Client\Model\CustomerLabelApi customerLabelsV2Get_0($customer_label_id)

Gets an customer label by id.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerLabelsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_label_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerLabelsV2Get_0($customer_label_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerLabelsV2Api->customerLabelsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_label_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\CustomerLabelApi**](../Model/CustomerLabelApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerLabelsV2Post**
> \Swagger\Client\Model\CustomerLabelApi customerLabelsV2Post($body)

Create a customer label.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerLabelsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CustomerLabelApi(); // \Swagger\Client\Model\CustomerLabelApi | 

try {
    $result = $apiInstance->customerLabelsV2Post($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerLabelsV2Api->customerLabelsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CustomerLabelApi**](../Model/CustomerLabelApi.md)|  |

### Return type

[**\Swagger\Client\Model\CustomerLabelApi**](../Model/CustomerLabelApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerLabelsV2Post**
> \Swagger\Client\Model\CustomerLabelApi customerLabelsV2Post($id, $name, $description)

Create a customer label.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerLabelsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$name = "name_example"; // string | 
$description = "description_example"; // string | 

try {
    $result = $apiInstance->customerLabelsV2Post($id, $name, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerLabelsV2Api->customerLabelsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **name** | **string**|  |
 **description** | **string**|  |

### Return type

[**\Swagger\Client\Model\CustomerLabelApi**](../Model/CustomerLabelApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerLabelsV2Put**
> \Swagger\Client\Model\CustomerLabelApi customerLabelsV2Put($body, $customer_label_id)

Replace content of a customer label.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerLabelsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CustomerLabelApi(); // \Swagger\Client\Model\CustomerLabelApi | 
$customer_label_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerLabelsV2Put($body, $customer_label_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerLabelsV2Api->customerLabelsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CustomerLabelApi**](../Model/CustomerLabelApi.md)|  |
 **customer_label_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\CustomerLabelApi**](../Model/CustomerLabelApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerLabelsV2Put**
> \Swagger\Client\Model\CustomerLabelApi customerLabelsV2Put($id, $name, $description, $customer_label_id)

Replace content of a customer label.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerLabelsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$name = "name_example"; // string | 
$description = "description_example"; // string | 
$customer_label_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerLabelsV2Put($id, $name, $description, $customer_label_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerLabelsV2Api->customerLabelsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **name** | **string**|  |
 **description** | **string**|  |
 **customer_label_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\CustomerLabelApi**](../Model/CustomerLabelApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

