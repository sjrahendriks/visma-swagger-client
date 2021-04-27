# Swagger\Client\ArticlesV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**articlesV2Get**](ArticlesV2Api.md#articlesv2get) | **GET** /v2/articles | Gets articles.
[**articlesV2Get_0**](ArticlesV2Api.md#articlesv2get_0) | **GET** /v2/articles/{articleId} | Gets an article by id.
[**articlesV2Post**](ArticlesV2Api.md#articlesv2post) | **POST** /v2/articles | Create a single article.
[**articlesV2Put**](ArticlesV2Api.md#articlesv2put) | **PUT** /v2/articles/{articleId} | Replace the data in an article.

# **articlesV2Get**
> \Swagger\Client\Model\PaginatedResponseArticleApi articlesV2Get($show_prices_with_two_decimals)

Gets articles.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ArticlesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$show_prices_with_two_decimals = true; // bool | 

try {
    $result = $apiInstance->articlesV2Get($show_prices_with_two_decimals);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesV2Api->articlesV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **show_prices_with_two_decimals** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedResponseArticleApi**](../Model/PaginatedResponseArticleApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **articlesV2Get_0**
> \Swagger\Client\Model\ArticleApi articlesV2Get_0($article_id, $show_prices_with_two_decimals)

Gets an article by id.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ArticlesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$article_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$show_prices_with_two_decimals = true; // bool | 

try {
    $result = $apiInstance->articlesV2Get_0($article_id, $show_prices_with_two_decimals);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesV2Api->articlesV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **article_id** | [**string**](../Model/.md)|  |
 **show_prices_with_two_decimals** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ArticleApi**](../Model/ArticleApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **articlesV2Post**
> \Swagger\Client\Model\ArticleApi articlesV2Post($body)

Create a single article.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ArticlesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ArticleApi(); // \Swagger\Client\Model\ArticleApi | 

try {
    $result = $apiInstance->articlesV2Post($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesV2Api->articlesV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ArticleApi**](../Model/ArticleApi.md)|  |

### Return type

[**\Swagger\Client\Model\ArticleApi**](../Model/ArticleApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **articlesV2Post**
> \Swagger\Client\Model\ArticleApi articlesV2Post($id, $is_active, $number, $name, $name_english, $net_price, $gross_price, $coding_id, $coding_name, $unit_id, $unit_name, $unit_abbreviation, $stock_balance, $stock_balance_manually_changed_utc, $stock_balance_reserved, $stock_balance_available, $created_utc, $changed_utc, $house_work_type, $purchase_price, $purchase_price_manually_changed_utc, $send_to_webshop, $uses_moss, $article_labels, $is_stock, $stock_location_reference, $freight_costs, $freight_costs_manually_changed_utc, $update_stock_prices, $barcodes, $stock_value, $green_technology_type)

Create a single article.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ArticlesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$is_active = true; // bool | 
$number = "number_example"; // string | 
$name = "name_example"; // string | 
$name_english = "name_english_example"; // string | 
$net_price = 1.2; // double | 
$gross_price = 1.2; // double | 
$coding_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$coding_name = "coding_name_example"; // string | 
$unit_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$unit_name = "unit_name_example"; // string | 
$unit_abbreviation = "unit_abbreviation_example"; // string | 
$stock_balance = 1.2; // double | 
$stock_balance_manually_changed_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$stock_balance_reserved = 1.2; // double | 
$stock_balance_available = 1.2; // double | 
$created_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$changed_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$house_work_type = 56; // int | 
$purchase_price = 1.2; // double | 
$purchase_price_manually_changed_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$send_to_webshop = true; // bool | 
$uses_moss = true; // bool | 
$article_labels = array(new \Swagger\Client\Model\ArticleLabelApi()); // \Swagger\Client\Model\ArticleLabelApi[] | 
$is_stock = true; // bool | 
$stock_location_reference = "stock_location_reference_example"; // string | 
$freight_costs = 1.2; // double | 
$freight_costs_manually_changed_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$update_stock_prices = true; // bool | 
$barcodes = array(new \Swagger\Client\Model\ArticleBarcodeApi()); // \Swagger\Client\Model\ArticleBarcodeApi[] | 
$stock_value = 1.2; // double | 
$green_technology_type = 56; // int | 

try {
    $result = $apiInstance->articlesV2Post($id, $is_active, $number, $name, $name_english, $net_price, $gross_price, $coding_id, $coding_name, $unit_id, $unit_name, $unit_abbreviation, $stock_balance, $stock_balance_manually_changed_utc, $stock_balance_reserved, $stock_balance_available, $created_utc, $changed_utc, $house_work_type, $purchase_price, $purchase_price_manually_changed_utc, $send_to_webshop, $uses_moss, $article_labels, $is_stock, $stock_location_reference, $freight_costs, $freight_costs_manually_changed_utc, $update_stock_prices, $barcodes, $stock_value, $green_technology_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesV2Api->articlesV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **is_active** | **bool**|  |
 **number** | **string**|  |
 **name** | **string**|  |
 **name_english** | **string**|  |
 **net_price** | **double**|  |
 **gross_price** | **double**|  |
 **coding_id** | [**string**](../Model/.md)|  |
 **coding_name** | **string**|  |
 **unit_id** | [**string**](../Model/.md)|  |
 **unit_name** | **string**|  |
 **unit_abbreviation** | **string**|  |
 **stock_balance** | **double**|  |
 **stock_balance_manually_changed_utc** | **\DateTime**|  |
 **stock_balance_reserved** | **double**|  |
 **stock_balance_available** | **double**|  |
 **created_utc** | **\DateTime**|  |
 **changed_utc** | **\DateTime**|  |
 **house_work_type** | **int**|  |
 **purchase_price** | **double**|  |
 **purchase_price_manually_changed_utc** | **\DateTime**|  |
 **send_to_webshop** | **bool**|  |
 **uses_moss** | **bool**|  |
 **article_labels** | [**\Swagger\Client\Model\ArticleLabelApi[]**](../Model/\Swagger\Client\Model\ArticleLabelApi.md)|  |
 **is_stock** | **bool**|  |
 **stock_location_reference** | **string**|  |
 **freight_costs** | **double**|  |
 **freight_costs_manually_changed_utc** | **\DateTime**|  |
 **update_stock_prices** | **bool**|  |
 **barcodes** | [**\Swagger\Client\Model\ArticleBarcodeApi[]**](../Model/\Swagger\Client\Model\ArticleBarcodeApi.md)|  |
 **stock_value** | **double**|  |
 **green_technology_type** | **int**|  |

### Return type

[**\Swagger\Client\Model\ArticleApi**](../Model/ArticleApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **articlesV2Put**
> \Swagger\Client\Model\ArticleApi articlesV2Put($body, $article_id)

Replace the data in an article.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ArticlesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ArticleApi(); // \Swagger\Client\Model\ArticleApi | 
$article_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->articlesV2Put($body, $article_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesV2Api->articlesV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ArticleApi**](../Model/ArticleApi.md)|  |
 **article_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ArticleApi**](../Model/ArticleApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **articlesV2Put**
> \Swagger\Client\Model\ArticleApi articlesV2Put($id, $is_active, $number, $name, $name_english, $net_price, $gross_price, $coding_id, $coding_name, $unit_id, $unit_name, $unit_abbreviation, $stock_balance, $stock_balance_manually_changed_utc, $stock_balance_reserved, $stock_balance_available, $created_utc, $changed_utc, $house_work_type, $purchase_price, $purchase_price_manually_changed_utc, $send_to_webshop, $uses_moss, $article_labels, $is_stock, $stock_location_reference, $freight_costs, $freight_costs_manually_changed_utc, $update_stock_prices, $barcodes, $stock_value, $green_technology_type, $article_id)

Replace the data in an article.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ArticlesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$is_active = true; // bool | 
$number = "number_example"; // string | 
$name = "name_example"; // string | 
$name_english = "name_english_example"; // string | 
$net_price = 1.2; // double | 
$gross_price = 1.2; // double | 
$coding_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$coding_name = "coding_name_example"; // string | 
$unit_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$unit_name = "unit_name_example"; // string | 
$unit_abbreviation = "unit_abbreviation_example"; // string | 
$stock_balance = 1.2; // double | 
$stock_balance_manually_changed_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$stock_balance_reserved = 1.2; // double | 
$stock_balance_available = 1.2; // double | 
$created_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$changed_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$house_work_type = 56; // int | 
$purchase_price = 1.2; // double | 
$purchase_price_manually_changed_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$send_to_webshop = true; // bool | 
$uses_moss = true; // bool | 
$article_labels = array(new \Swagger\Client\Model\ArticleLabelApi()); // \Swagger\Client\Model\ArticleLabelApi[] | 
$is_stock = true; // bool | 
$stock_location_reference = "stock_location_reference_example"; // string | 
$freight_costs = 1.2; // double | 
$freight_costs_manually_changed_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$update_stock_prices = true; // bool | 
$barcodes = array(new \Swagger\Client\Model\ArticleBarcodeApi()); // \Swagger\Client\Model\ArticleBarcodeApi[] | 
$stock_value = 1.2; // double | 
$green_technology_type = 56; // int | 
$article_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->articlesV2Put($id, $is_active, $number, $name, $name_english, $net_price, $gross_price, $coding_id, $coding_name, $unit_id, $unit_name, $unit_abbreviation, $stock_balance, $stock_balance_manually_changed_utc, $stock_balance_reserved, $stock_balance_available, $created_utc, $changed_utc, $house_work_type, $purchase_price, $purchase_price_manually_changed_utc, $send_to_webshop, $uses_moss, $article_labels, $is_stock, $stock_location_reference, $freight_costs, $freight_costs_manually_changed_utc, $update_stock_prices, $barcodes, $stock_value, $green_technology_type, $article_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesV2Api->articlesV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **is_active** | **bool**|  |
 **number** | **string**|  |
 **name** | **string**|  |
 **name_english** | **string**|  |
 **net_price** | **double**|  |
 **gross_price** | **double**|  |
 **coding_id** | [**string**](../Model/.md)|  |
 **coding_name** | **string**|  |
 **unit_id** | [**string**](../Model/.md)|  |
 **unit_name** | **string**|  |
 **unit_abbreviation** | **string**|  |
 **stock_balance** | **double**|  |
 **stock_balance_manually_changed_utc** | **\DateTime**|  |
 **stock_balance_reserved** | **double**|  |
 **stock_balance_available** | **double**|  |
 **created_utc** | **\DateTime**|  |
 **changed_utc** | **\DateTime**|  |
 **house_work_type** | **int**|  |
 **purchase_price** | **double**|  |
 **purchase_price_manually_changed_utc** | **\DateTime**|  |
 **send_to_webshop** | **bool**|  |
 **uses_moss** | **bool**|  |
 **article_labels** | [**\Swagger\Client\Model\ArticleLabelApi[]**](../Model/\Swagger\Client\Model\ArticleLabelApi.md)|  |
 **is_stock** | **bool**|  |
 **stock_location_reference** | **string**|  |
 **freight_costs** | **double**|  |
 **freight_costs_manually_changed_utc** | **\DateTime**|  |
 **update_stock_prices** | **bool**|  |
 **barcodes** | [**\Swagger\Client\Model\ArticleBarcodeApi[]**](../Model/\Swagger\Client\Model\ArticleBarcodeApi.md)|  |
 **stock_value** | **double**|  |
 **green_technology_type** | **int**|  |
 **article_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ArticleApi**](../Model/ArticleApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

