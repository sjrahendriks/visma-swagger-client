# Swagger\Client\AppStoreActivationStatusV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appStoreActivationStatusV2Get**](AppStoreActivationStatusV2Api.md#appstoreactivationstatusv2get) | **GET** /v2/appstore/status | 
[**appStoreActivationStatusV2Put**](AppStoreActivationStatusV2Api.md#appstoreactivationstatusv2put) | **PUT** /v2/appstore/status | 

# **appStoreActivationStatusV2Get**
> \Swagger\Client\Model\PaginatedResponseAppStoreActivationStatusApi appStoreActivationStatusV2Get()



<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly, ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AppStoreActivationStatusV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->appStoreActivationStatusV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreActivationStatusV2Api->appStoreActivationStatusV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaginatedResponseAppStoreActivationStatusApi**](../Model/PaginatedResponseAppStoreActivationStatusApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appStoreActivationStatusV2Put**
> \Swagger\Client\Model\AppStoreActivationStatusApi appStoreActivationStatusV2Put($body)



<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly, ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AppStoreActivationStatusV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\AppStoreActivationStatusApi(); // \Swagger\Client\Model\AppStoreActivationStatusApi | 

try {
    $result = $apiInstance->appStoreActivationStatusV2Put($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreActivationStatusV2Api->appStoreActivationStatusV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AppStoreActivationStatusApi**](../Model/AppStoreActivationStatusApi.md)|  |

### Return type

[**\Swagger\Client\Model\AppStoreActivationStatusApi**](../Model/AppStoreActivationStatusApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appStoreActivationStatusV2Put**
> \Swagger\Client\Model\AppStoreActivationStatusApi appStoreActivationStatusV2Put($id, $activation_status, $modified_utc)



<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly, ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AppStoreActivationStatusV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$activation_status = 56; // int | 
$modified_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->appStoreActivationStatusV2Put($id, $activation_status, $modified_utc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreActivationStatusV2Api->appStoreActivationStatusV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **activation_status** | **int**|  |
 **modified_utc** | **\DateTime**|  |

### Return type

[**\Swagger\Client\Model\AppStoreActivationStatusApi**](../Model/AppStoreActivationStatusApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

