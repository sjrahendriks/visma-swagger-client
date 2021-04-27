# Swagger\Client\ProjectsV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectsV2Get**](ProjectsV2Api.md#projectsv2get) | **GET** /v2/projects | Get a list of projects.
[**projectsV2Get_0**](ProjectsV2Api.md#projectsv2get_0) | **GET** /v2/projects/{id} | Get a specific project.
[**projectsV2Post**](ProjectsV2Api.md#projectsv2post) | **POST** /v2/projects | Create a new project.
[**projectsV2Put**](ProjectsV2Api.md#projectsv2put) | **PUT** /v2/projects/{id} | Replace content in a project.

# **projectsV2Get**
> \Swagger\Client\Model\PaginatedResponseProjectApi projectsV2Get()

Get a list of projects.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly, ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->projectsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsV2Api->projectsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaginatedResponseProjectApi**](../Model/PaginatedResponseProjectApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsV2Get_0**
> \Swagger\Client\Model\ProjectApi projectsV2Get_0($id)

Get a specific project.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly, ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Project Id

try {
    $result = $apiInstance->projectsV2Get_0($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsV2Api->projectsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Project Id |

### Return type

[**\Swagger\Client\Model\ProjectApi**](../Model/ProjectApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsV2Post**
> \Swagger\Client\Model\ProjectApi projectsV2Post($body)

Create a new project.

<p>Requires any of the following scopes: <br><b>ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ProjectApi(); // \Swagger\Client\Model\ProjectApi | 

try {
    $result = $apiInstance->projectsV2Post($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsV2Api->projectsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProjectApi**](../Model/ProjectApi.md)|  |

### Return type

[**\Swagger\Client\Model\ProjectApi**](../Model/ProjectApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsV2Post**
> \Swagger\Client\Model\ProjectApi projectsV2Post($id, $number, $name, $start_date, $end_date, $customer_id, $customer_name, $notes, $status, $modified_utc)

Create a new project.

<p>Requires any of the following scopes: <br><b>ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$number = "number_example"; // string | 
$name = "name_example"; // string | 
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$customer_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$customer_name = "customer_name_example"; // string | 
$notes = "notes_example"; // string | 
$status = 56; // int | 
$modified_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->projectsV2Post($id, $number, $name, $start_date, $end_date, $customer_id, $customer_name, $notes, $status, $modified_utc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsV2Api->projectsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **number** | **string**|  |
 **name** | **string**|  |
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **customer_id** | [**string**](../Model/.md)|  |
 **customer_name** | **string**|  |
 **notes** | **string**|  |
 **status** | **int**|  |
 **modified_utc** | **\DateTime**|  |

### Return type

[**\Swagger\Client\Model\ProjectApi**](../Model/ProjectApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsV2Put**
> \Swagger\Client\Model\ProjectApi projectsV2Put($body, $id)

Replace content in a project.

<p>Requires any of the following scopes: <br><b>ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ProjectApi(); // \Swagger\Client\Model\ProjectApi | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->projectsV2Put($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsV2Api->projectsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProjectApi**](../Model/ProjectApi.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ProjectApi**](../Model/ProjectApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsV2Put**
> \Swagger\Client\Model\ProjectApi projectsV2Put($id2, $number, $name, $start_date, $end_date, $customer_id, $customer_name, $notes, $status, $modified_utc, $id)

Replace content in a project.

<p>Requires any of the following scopes: <br><b>ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id2 = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$number = "number_example"; // string | 
$name = "name_example"; // string | 
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$customer_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$customer_name = "customer_name_example"; // string | 
$notes = "notes_example"; // string | 
$status = 56; // int | 
$modified_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->projectsV2Put($id2, $number, $name, $start_date, $end_date, $customer_id, $customer_name, $notes, $status, $modified_utc, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsV2Api->projectsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id2** | [**string**](../Model/.md)|  |
 **number** | **string**|  |
 **name** | **string**|  |
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **customer_id** | [**string**](../Model/.md)|  |
 **customer_name** | **string**|  |
 **notes** | **string**|  |
 **status** | **int**|  |
 **modified_utc** | **\DateTime**|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ProjectApi**](../Model/ProjectApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

