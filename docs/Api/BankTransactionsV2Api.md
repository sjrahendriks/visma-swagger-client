# Swagger\Client\BankTransactionsV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bankTransactionsV2Get**](BankTransactionsV2Api.md#banktransactionsv2get) | **GET** /v2/banktransactions/{bankAccountId}/matched | Get a list of matched bank transactions.
[**bankTransactionsV2GetMatchedById**](BankTransactionsV2Api.md#banktransactionsv2getmatchedbyid) | **GET** /v2/banktransactions/{bankAccountId}/{bankTransactionId} | Get a specific bank transaction.
[**bankTransactionsV2GetUnmatched**](BankTransactionsV2Api.md#banktransactionsv2getunmatched) | **GET** /v2/banktransactions/{bankAccountId}/unmatched | Get a list of unmatched bank transactions.

# **bankTransactionsV2Get**
> \Swagger\Client\Model\PaginatedResponseBankTransactionApi bankTransactionsV2Get($bank_account_id, $from_date, $to_date)

Get a list of matched bank transactions.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly, ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BankTransactionsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bank_account_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The company bank account to which the requested transactions correspond
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Default: First day of the current month.
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Default: Last day of the current month.

try {
    $result = $apiInstance->bankTransactionsV2Get($bank_account_id, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankTransactionsV2Api->bankTransactionsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_account_id** | [**string**](../Model/.md)| The company bank account to which the requested transactions correspond |
 **from_date** | **\DateTime**| Default: First day of the current month. | [optional]
 **to_date** | **\DateTime**| Default: Last day of the current month. | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedResponseBankTransactionApi**](../Model/PaginatedResponseBankTransactionApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bankTransactionsV2GetMatchedById**
> \Swagger\Client\Model\BankTransactionApi bankTransactionsV2GetMatchedById($bank_account_id, $bank_transaction_id)

Get a specific bank transaction.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly, ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BankTransactionsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bank_account_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The company bank account of the request transaction
$bank_transaction_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The requested transaction id

try {
    $result = $apiInstance->bankTransactionsV2GetMatchedById($bank_account_id, $bank_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankTransactionsV2Api->bankTransactionsV2GetMatchedById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_account_id** | [**string**](../Model/.md)| The company bank account of the request transaction |
 **bank_transaction_id** | [**string**](../Model/.md)| The requested transaction id |

### Return type

[**\Swagger\Client\Model\BankTransactionApi**](../Model/BankTransactionApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bankTransactionsV2GetUnmatched**
> \Swagger\Client\Model\PaginatedResponseBankTransactionApi bankTransactionsV2GetUnmatched($bank_account_id, $from_date, $to_date)

Get a list of unmatched bank transactions.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly, ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BankTransactionsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bank_account_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The company bank account to which the requested transactions correspond
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Default: First day of the current month.
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Default: Last day of the current month.

try {
    $result = $apiInstance->bankTransactionsV2GetUnmatched($bank_account_id, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankTransactionsV2Api->bankTransactionsV2GetUnmatched: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_account_id** | [**string**](../Model/.md)| The company bank account to which the requested transactions correspond |
 **from_date** | **\DateTime**| Default: First day of the current month. | [optional]
 **to_date** | **\DateTime**| Default: Last day of the current month. | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedResponseBankTransactionApi**](../Model/PaginatedResponseBankTransactionApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

