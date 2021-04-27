# Swagger\Client\AccountBalanceV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountBalanceV2Get**](AccountBalanceV2Api.md#accountbalancev2get) | **GET** /v2/accountbalances/{date} | Get Account balance on a specific date (yyyy-MM-dd). Filter to include accounts where balance is 0.
[**accountBalanceV2Get_0**](AccountBalanceV2Api.md#accountbalancev2get_0) | **GET** /v2/accountbalances/{accountNumber}/{date} | Get Account Balance on a specific account and date.

# **accountBalanceV2Get**
> \Swagger\Client\Model\PaginatedResponseAccountBalanceAPI accountBalanceV2Get($date)

Get Account balance on a specific date (yyyy-MM-dd). Filter to include accounts where balance is 0.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountBalanceV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format: yyyy-MM-dd

try {
    $result = $apiInstance->accountBalanceV2Get($date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountBalanceV2Api->accountBalanceV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **\DateTime**| Format: yyyy-MM-dd |

### Return type

[**\Swagger\Client\Model\PaginatedResponseAccountBalanceAPI**](../Model/PaginatedResponseAccountBalanceAPI.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountBalanceV2Get_0**
> \Swagger\Client\Model\AccountBalanceAPI accountBalanceV2Get_0($account_number, $date)

Get Account Balance on a specific account and date.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountBalanceV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_number = 56; // int | 
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format: yyyy-MM-dd

try {
    $result = $apiInstance->accountBalanceV2Get_0($account_number, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountBalanceV2Api->accountBalanceV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_number** | **int**|  |
 **date** | **\DateTime**| Format: yyyy-MM-dd |

### Return type

[**\Swagger\Client\Model\AccountBalanceAPI**](../Model/AccountBalanceAPI.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

