# Swagger\Client\PartnerResourceLinksV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**partnerResourceLinksV2Delete**](PartnerResourceLinksV2Api.md#partnerresourcelinksv2delete) | **DELETE** /v2/partnerresourcelinks/{partnerResourceLinkId} | Delete a partner resource link
[**partnerResourceLinksV2Get**](PartnerResourceLinksV2Api.md#partnerresourcelinksv2get) | **GET** /v2/partnerresourcelinks | Get a list of partner resource links.
[**partnerResourceLinksV2Get_0**](PartnerResourceLinksV2Api.md#partnerresourcelinksv2get_0) | **GET** /v2/partnerresourcelinks/{partnerResourceLinkId} | Get a partner resource link by id.
[**partnerResourceLinksV2Post**](PartnerResourceLinksV2Api.md#partnerresourcelinksv2post) | **POST** /v2/partnerresourcelinks | Create a partner resource link
[**partnerResourceLinksV2Put**](PartnerResourceLinksV2Api.md#partnerresourcelinksv2put) | **PUT** /v2/partnerresourcelinks/{partnerResourceLinkId} | Update a partner resource link

# **partnerResourceLinksV2Delete**
> object partnerResourceLinksV2Delete($partner_resource_link_id)

Delete a partner resource link

<p>Requires any of the following scopes: <br><b>ea:sales, ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PartnerResourceLinksV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$partner_resource_link_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->partnerResourceLinksV2Delete($partner_resource_link_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnerResourceLinksV2Api->partnerResourceLinksV2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_resource_link_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnerResourceLinksV2Get**
> \Swagger\Client\Model\PaginatedResponsePartnerResourceLinkApi partnerResourceLinksV2Get()

Get a list of partner resource links.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PartnerResourceLinksV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->partnerResourceLinksV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnerResourceLinksV2Api->partnerResourceLinksV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaginatedResponsePartnerResourceLinkApi**](../Model/PaginatedResponsePartnerResourceLinkApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnerResourceLinksV2Get_0**
> \Swagger\Client\Model\PartnerResourceLinkApi partnerResourceLinksV2Get_0($partner_resource_link_id)

Get a partner resource link by id.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PartnerResourceLinksV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$partner_resource_link_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->partnerResourceLinksV2Get_0($partner_resource_link_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnerResourceLinksV2Api->partnerResourceLinksV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_resource_link_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerResourceLinkApi**](../Model/PartnerResourceLinkApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnerResourceLinksV2Post**
> \Swagger\Client\Model\PartnerResourceLinkApi partnerResourceLinksV2Post($body)

Create a partner resource link

<p>Requires any of the following scopes: <br><b>ea:sales, ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PartnerResourceLinksV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PartnerResourceLinkApi(); // \Swagger\Client\Model\PartnerResourceLinkApi | 

try {
    $result = $apiInstance->partnerResourceLinksV2Post($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnerResourceLinksV2Api->partnerResourceLinksV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PartnerResourceLinkApi**](../Model/PartnerResourceLinkApi.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerResourceLinkApi**](../Model/PartnerResourceLinkApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnerResourceLinksV2Post**
> \Swagger\Client\Model\PartnerResourceLinkApi partnerResourceLinksV2Post($id, $resource_id, $resource_type, $href, $partner_company_name, $partner_system_name)

Create a partner resource link

<p>Requires any of the following scopes: <br><b>ea:sales, ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PartnerResourceLinksV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$resource_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$resource_type = 56; // int | 
$href = "href_example"; // string | 
$partner_company_name = "partner_company_name_example"; // string | 
$partner_system_name = "partner_system_name_example"; // string | 

try {
    $result = $apiInstance->partnerResourceLinksV2Post($id, $resource_id, $resource_type, $href, $partner_company_name, $partner_system_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnerResourceLinksV2Api->partnerResourceLinksV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **resource_id** | [**string**](../Model/.md)|  |
 **resource_type** | **int**|  |
 **href** | **string**|  |
 **partner_company_name** | **string**|  |
 **partner_system_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\PartnerResourceLinkApi**](../Model/PartnerResourceLinkApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnerResourceLinksV2Put**
> \Swagger\Client\Model\PartnerResourceLinkApi partnerResourceLinksV2Put($body, $partner_resource_link_id)

Update a partner resource link

<p>Requires any of the following scopes: <br><b>ea:sales, ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PartnerResourceLinksV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PartnerResourceLinkApi(); // \Swagger\Client\Model\PartnerResourceLinkApi | 
$partner_resource_link_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->partnerResourceLinksV2Put($body, $partner_resource_link_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnerResourceLinksV2Api->partnerResourceLinksV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PartnerResourceLinkApi**](../Model/PartnerResourceLinkApi.md)|  |
 **partner_resource_link_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerResourceLinkApi**](../Model/PartnerResourceLinkApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnerResourceLinksV2Put**
> \Swagger\Client\Model\PartnerResourceLinkApi partnerResourceLinksV2Put($id, $resource_id, $resource_type, $href, $partner_company_name, $partner_system_name, $partner_resource_link_id)

Update a partner resource link

<p>Requires any of the following scopes: <br><b>ea:sales, ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PartnerResourceLinksV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$resource_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$resource_type = 56; // int | 
$href = "href_example"; // string | 
$partner_company_name = "partner_company_name_example"; // string | 
$partner_system_name = "partner_system_name_example"; // string | 
$partner_resource_link_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->partnerResourceLinksV2Put($id, $resource_id, $resource_type, $href, $partner_company_name, $partner_system_name, $partner_resource_link_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnerResourceLinksV2Api->partnerResourceLinksV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **resource_id** | [**string**](../Model/.md)|  |
 **resource_type** | **int**|  |
 **href** | **string**|  |
 **partner_company_name** | **string**|  |
 **partner_system_name** | **string**|  |
 **partner_resource_link_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerResourceLinkApi**](../Model/PartnerResourceLinkApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

