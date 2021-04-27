# Swagger\Client\AllocationPeriodsV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**allocationPeriodsV2Get**](AllocationPeriodsV2Api.md#allocationperiodsv2get) | **GET** /v2/allocationperiods | Get allocation periods.
[**allocationPeriodsV2Get_0**](AllocationPeriodsV2Api.md#allocationperiodsv2get_0) | **GET** /v2/allocationperiods/{allocationPeriodId} | Get single allocation period.
[**allocationPeriodsV2Post**](AllocationPeriodsV2Api.md#allocationperiodsv2post) | **POST** /v2/allocationperiods | Add allocation periods for voucher or supplier invoice.

# **allocationPeriodsV2Get**
> \Swagger\Client\Model\PaginatedResponseAllocationPeriodApi allocationPeriodsV2Get()

Get allocation periods.

<p>Requires any of the following scopes: <br><b>ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllocationPeriodsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->allocationPeriodsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllocationPeriodsV2Api->allocationPeriodsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaginatedResponseAllocationPeriodApi**](../Model/PaginatedResponseAllocationPeriodApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allocationPeriodsV2Get_0**
> \Swagger\Client\Model\AllocationPeriodApi allocationPeriodsV2Get_0($allocation_period_id)

Get single allocation period.

<p>Requires any of the following scopes: <br><b>ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllocationPeriodsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$allocation_period_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Id of the requsted allocation period.

try {
    $result = $apiInstance->allocationPeriodsV2Get_0($allocation_period_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllocationPeriodsV2Api->allocationPeriodsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **allocation_period_id** | [**string**](../Model/.md)| Id of the requsted allocation period. |

### Return type

[**\Swagger\Client\Model\AllocationPeriodApi**](../Model/AllocationPeriodApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allocationPeriodsV2Post**
> \Swagger\Client\Model\AllocationPeriodApi allocationPeriodsV2Post($body)

Add allocation periods for voucher or supplier invoice.

<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllocationPeriodsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array(new \Swagger\Client\Model\AllocationPlan()); // \Swagger\Client\Model\AllocationPlan[] | 

try {
    $result = $apiInstance->allocationPeriodsV2Post($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllocationPeriodsV2Api->allocationPeriodsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AllocationPlan[]**](../Model/AllocationPlan.md)|  |

### Return type

[**\Swagger\Client\Model\AllocationPeriodApi**](../Model/AllocationPeriodApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

