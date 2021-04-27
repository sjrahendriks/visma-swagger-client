# Swagger\Client\FiscalYearsV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fiscalYearsV2Get**](FiscalYearsV2Api.md#fiscalyearsv2get) | **GET** /v2/fiscalyears | Get a list of fiscal years.
[**fiscalYearsV2Get_0**](FiscalYearsV2Api.md#fiscalyearsv2get_0) | **GET** /v2/fiscalyears/{id} | Get a single fiscal year.
[**fiscalYearsV2Get_1**](FiscalYearsV2Api.md#fiscalyearsv2get_1) | **GET** /v2/fiscalyears/openingbalances | Gets the opening balances of the first fiscal year. If you want balances of following years, use the GET /accountbalances instead.
[**fiscalYearsV2Post**](FiscalYearsV2Api.md#fiscalyearsv2post) | **POST** /v2/fiscalyears | Create a fiscal year.
[**fiscalYearsV2UpdateAccountOpeningBalance**](FiscalYearsV2Api.md#fiscalyearsv2updateaccountopeningbalance) | **PUT** /v2/fiscalyears/openingbalances | Updates the opening balance of the first fiscal year

# **fiscalYearsV2Get**
> \Swagger\Client\Model\PaginatedResponseFiscalYearApi fiscalYearsV2Get()

Get a list of fiscal years.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FiscalYearsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fiscalYearsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearsV2Api->fiscalYearsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaginatedResponseFiscalYearApi**](../Model/PaginatedResponseFiscalYearApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fiscalYearsV2Get_0**
> \Swagger\Client\Model\FiscalYearApi fiscalYearsV2Get_0($id)

Get a single fiscal year.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FiscalYearsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Id of requested fiscal year.

try {
    $result = $apiInstance->fiscalYearsV2Get_0($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearsV2Api->fiscalYearsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Id of requested fiscal year. |

### Return type

[**\Swagger\Client\Model\FiscalYearApi**](../Model/FiscalYearApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fiscalYearsV2Get_1**
> \Swagger\Client\Model\PaginatedResponseOpeningBalancesApi fiscalYearsV2Get_1()

Gets the opening balances of the first fiscal year. If you want balances of following years, use the GET /accountbalances instead.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FiscalYearsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fiscalYearsV2Get_1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearsV2Api->fiscalYearsV2Get_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaginatedResponseOpeningBalancesApi**](../Model/PaginatedResponseOpeningBalancesApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fiscalYearsV2Post**
> \Swagger\Client\Model\FiscalYearApi fiscalYearsV2Post($body)

Create a fiscal year.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FiscalYearsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\FiscalYearApi(); // \Swagger\Client\Model\FiscalYearApi | 

try {
    $result = $apiInstance->fiscalYearsV2Post($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearsV2Api->fiscalYearsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FiscalYearApi**](../Model/FiscalYearApi.md)|  |

### Return type

[**\Swagger\Client\Model\FiscalYearApi**](../Model/FiscalYearApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fiscalYearsV2Post**
> \Swagger\Client\Model\FiscalYearApi fiscalYearsV2Post($id, $start_date, $end_date, $is_locked_for_accounting, $bookkeeping_method)

Create a fiscal year.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FiscalYearsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$is_locked_for_accounting = true; // bool | 
$bookkeeping_method = 56; // int | 

try {
    $result = $apiInstance->fiscalYearsV2Post($id, $start_date, $end_date, $is_locked_for_accounting, $bookkeeping_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearsV2Api->fiscalYearsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **is_locked_for_accounting** | **bool**|  |
 **bookkeeping_method** | **int**|  |

### Return type

[**\Swagger\Client\Model\FiscalYearApi**](../Model/FiscalYearApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fiscalYearsV2UpdateAccountOpeningBalance**
> \Swagger\Client\Model\OpeningBalancesApi[] fiscalYearsV2UpdateAccountOpeningBalance($body, $enable_inactive_accounts)

Updates the opening balance of the first fiscal year

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FiscalYearsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array(new \Swagger\Client\Model\AccountOpeningBalanceApi()); // \Swagger\Client\Model\AccountOpeningBalanceApi[] | The account balances to update
$enable_inactive_accounts = true; // bool | If true, the selected inactive accounts will be enabled, therefore allowing editing of the balance. Default: true

try {
    $result = $apiInstance->fiscalYearsV2UpdateAccountOpeningBalance($body, $enable_inactive_accounts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearsV2Api->fiscalYearsV2UpdateAccountOpeningBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AccountOpeningBalanceApi[]**](../Model/AccountOpeningBalanceApi.md)| The account balances to update |
 **enable_inactive_accounts** | **bool**| If true, the selected inactive accounts will be enabled, therefore allowing editing of the balance. Default: true | [optional]

### Return type

[**\Swagger\Client\Model\OpeningBalancesApi[]**](../Model/OpeningBalancesApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

