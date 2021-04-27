# Swagger\Client\ArticleLabelsV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**articleLabelsV2Delete**](ArticleLabelsV2Api.md#articlelabelsv2delete) | **DELETE** /v2/articlelabels/{articleLabelId} | Deletes an article label.
[**articleLabelsV2Get**](ArticleLabelsV2Api.md#articlelabelsv2get) | **GET** /v2/articlelabels | Gets all article labels.
[**articleLabelsV2Get_0**](ArticleLabelsV2Api.md#articlelabelsv2get_0) | **GET** /v2/articlelabels/{articleLabelId} | Gets an article label by id.
[**articleLabelsV2Post**](ArticleLabelsV2Api.md#articlelabelsv2post) | **POST** /v2/articlelabels | Create an article label.
[**articleLabelsV2Put**](ArticleLabelsV2Api.md#articlelabelsv2put) | **PUT** /v2/articlelabels/{articleLabelId} | Replace the content of an article label.

# **articleLabelsV2Delete**
> \Swagger\Client\Model\ArticleLabelApi articleLabelsV2Delete($article_label_id)

Deletes an article label.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ArticleLabelsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$article_label_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->articleLabelsV2Delete($article_label_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleLabelsV2Api->articleLabelsV2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **article_label_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ArticleLabelApi**](../Model/ArticleLabelApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **articleLabelsV2Get**
> \Swagger\Client\Model\PaginatedResponseArticleLabelApi articleLabelsV2Get()

Gets all article labels.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ArticleLabelsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->articleLabelsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleLabelsV2Api->articleLabelsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaginatedResponseArticleLabelApi**](../Model/PaginatedResponseArticleLabelApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **articleLabelsV2Get_0**
> \Swagger\Client\Model\ArticleLabelApi articleLabelsV2Get_0($article_label_id)

Gets an article label by id.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ArticleLabelsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$article_label_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->articleLabelsV2Get_0($article_label_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleLabelsV2Api->articleLabelsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **article_label_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ArticleLabelApi**](../Model/ArticleLabelApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **articleLabelsV2Post**
> \Swagger\Client\Model\ArticleLabelApi articleLabelsV2Post($body)

Create an article label.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ArticleLabelsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ArticleLabelApi(); // \Swagger\Client\Model\ArticleLabelApi | 

try {
    $result = $apiInstance->articleLabelsV2Post($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleLabelsV2Api->articleLabelsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ArticleLabelApi**](../Model/ArticleLabelApi.md)|  |

### Return type

[**\Swagger\Client\Model\ArticleLabelApi**](../Model/ArticleLabelApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **articleLabelsV2Post**
> \Swagger\Client\Model\ArticleLabelApi articleLabelsV2Post($id, $name, $description)

Create an article label.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ArticleLabelsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$name = "name_example"; // string | 
$description = "description_example"; // string | 

try {
    $result = $apiInstance->articleLabelsV2Post($id, $name, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleLabelsV2Api->articleLabelsV2Post: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ArticleLabelApi**](../Model/ArticleLabelApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **articleLabelsV2Put**
> \Swagger\Client\Model\ArticleLabelApi articleLabelsV2Put($body, $article_label_id)

Replace the content of an article label.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ArticleLabelsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ArticleLabelApi(); // \Swagger\Client\Model\ArticleLabelApi | 
$article_label_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->articleLabelsV2Put($body, $article_label_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleLabelsV2Api->articleLabelsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ArticleLabelApi**](../Model/ArticleLabelApi.md)|  |
 **article_label_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ArticleLabelApi**](../Model/ArticleLabelApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **articleLabelsV2Put**
> \Swagger\Client\Model\ArticleLabelApi articleLabelsV2Put($id, $name, $description, $article_label_id)

Replace the content of an article label.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ArticleLabelsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$name = "name_example"; // string | 
$description = "description_example"; // string | 
$article_label_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->articleLabelsV2Put($id, $name, $description, $article_label_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleLabelsV2Api->articleLabelsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **name** | **string**|  |
 **description** | **string**|  |
 **article_label_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ArticleLabelApi**](../Model/ArticleLabelApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

