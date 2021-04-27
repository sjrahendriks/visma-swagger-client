# Swagger\Client\BankAccountsV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bankAccountsV2Delete**](BankAccountsV2Api.md#bankaccountsv2delete) | **DELETE** /v2/bankaccounts/{bankAccountId} | Delete a bank account.
[**bankAccountsV2Get**](BankAccountsV2Api.md#bankaccountsv2get) | **GET** /v2/bankaccounts | Get a list of bank accounts.
[**bankAccountsV2Get_0**](BankAccountsV2Api.md#bankaccountsv2get_0) | **GET** /v2/bankaccounts/{bankAccountId} | Get a specific bank account.
[**bankAccountsV2Post**](BankAccountsV2Api.md#bankaccountsv2post) | **POST** /v2/bankaccounts | Create a bank account.
[**bankAccountsV2Put**](BankAccountsV2Api.md#bankaccountsv2put) | **PUT** /v2/bankaccounts/{bankAccountId} | Replace a bank account.

# **bankAccountsV2Delete**
> object bankAccountsV2Delete($bank_account_id)

Delete a bank account.

<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BankAccountsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bank_account_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->bankAccountsV2Delete($bank_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsV2Api->bankAccountsV2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_account_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bankAccountsV2Get**
> \Swagger\Client\Model\PaginatedResponseBankAccountApi bankAccountsV2Get()

Get a list of bank accounts.

<p>Requires any of the following scopes: <br><b>ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BankAccountsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->bankAccountsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsV2Api->bankAccountsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaginatedResponseBankAccountApi**](../Model/PaginatedResponseBankAccountApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bankAccountsV2Get_0**
> \Swagger\Client\Model\BankAccountApi bankAccountsV2Get_0($bank_account_id)

Get a specific bank account.

<p>Requires any of the following scopes: <br><b>ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BankAccountsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bank_account_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Id of the requested bank account.

try {
    $result = $apiInstance->bankAccountsV2Get_0($bank_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsV2Api->bankAccountsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_account_id** | [**string**](../Model/.md)| Id of the requested bank account. |

### Return type

[**\Swagger\Client\Model\BankAccountApi**](../Model/BankAccountApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bankAccountsV2Post**
> \Swagger\Client\Model\BankAccountApi bankAccountsV2Post($body)

Create a bank account.

<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BankAccountsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\BankAccountApi(); // \Swagger\Client\Model\BankAccountApi | 

try {
    $result = $apiInstance->bankAccountsV2Post($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsV2Api->bankAccountsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BankAccountApi**](../Model/BankAccountApi.md)|  |

### Return type

[**\Swagger\Client\Model\BankAccountApi**](../Model/BankAccountApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bankAccountsV2Post**
> \Swagger\Client\Model\BankAccountApi bankAccountsV2Post($bank, $bank_account_type, $bank_account_type_description, $bban, $iban, $name, $id, $is_active, $ledger_account_number, $has_active_bank_agreement, $is_default_cheque_account, $currency_code, $modified_utc)

Create a bank account.

<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BankAccountsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bank = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$bank_account_type = 56; // int | 
$bank_account_type_description = "bank_account_type_description_example"; // string | 
$bban = "bban_example"; // string | 
$iban = "iban_example"; // string | 
$name = "name_example"; // string | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$is_active = true; // bool | 
$ledger_account_number = 789; // int | 
$has_active_bank_agreement = true; // bool | 
$is_default_cheque_account = true; // bool | 
$currency_code = "currency_code_example"; // string | 
$modified_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->bankAccountsV2Post($bank, $bank_account_type, $bank_account_type_description, $bban, $iban, $name, $id, $is_active, $ledger_account_number, $has_active_bank_agreement, $is_default_cheque_account, $currency_code, $modified_utc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsV2Api->bankAccountsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank** | [**string**](../Model/.md)|  |
 **bank_account_type** | **int**|  |
 **bank_account_type_description** | **string**|  |
 **bban** | **string**|  |
 **iban** | **string**|  |
 **name** | **string**|  |
 **id** | [**string**](../Model/.md)|  |
 **is_active** | **bool**|  |
 **ledger_account_number** | **int**|  |
 **has_active_bank_agreement** | **bool**|  |
 **is_default_cheque_account** | **bool**|  |
 **currency_code** | **string**|  |
 **modified_utc** | **\DateTime**|  |

### Return type

[**\Swagger\Client\Model\BankAccountApi**](../Model/BankAccountApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bankAccountsV2Put**
> \Swagger\Client\Model\BankAccountApi bankAccountsV2Put($body, $bank_account_id)

Replace a bank account.

<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BankAccountsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\BankAccountApi(); // \Swagger\Client\Model\BankAccountApi | 
$bank_account_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->bankAccountsV2Put($body, $bank_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsV2Api->bankAccountsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BankAccountApi**](../Model/BankAccountApi.md)|  |
 **bank_account_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\BankAccountApi**](../Model/BankAccountApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bankAccountsV2Put**
> \Swagger\Client\Model\BankAccountApi bankAccountsV2Put($bank, $bank_account_type, $bank_account_type_description, $bban, $iban, $name, $id, $is_active, $ledger_account_number, $has_active_bank_agreement, $is_default_cheque_account, $currency_code, $modified_utc, $bank_account_id)

Replace a bank account.

<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BankAccountsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bank = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$bank_account_type = 56; // int | 
$bank_account_type_description = "bank_account_type_description_example"; // string | 
$bban = "bban_example"; // string | 
$iban = "iban_example"; // string | 
$name = "name_example"; // string | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$is_active = true; // bool | 
$ledger_account_number = 789; // int | 
$has_active_bank_agreement = true; // bool | 
$is_default_cheque_account = true; // bool | 
$currency_code = "currency_code_example"; // string | 
$modified_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$bank_account_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->bankAccountsV2Put($bank, $bank_account_type, $bank_account_type_description, $bban, $iban, $name, $id, $is_active, $ledger_account_number, $has_active_bank_agreement, $is_default_cheque_account, $currency_code, $modified_utc, $bank_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsV2Api->bankAccountsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank** | [**string**](../Model/.md)|  |
 **bank_account_type** | **int**|  |
 **bank_account_type_description** | **string**|  |
 **bban** | **string**|  |
 **iban** | **string**|  |
 **name** | **string**|  |
 **id** | [**string**](../Model/.md)|  |
 **is_active** | **bool**|  |
 **ledger_account_number** | **int**|  |
 **has_active_bank_agreement** | **bool**|  |
 **is_default_cheque_account** | **bool**|  |
 **currency_code** | **string**|  |
 **modified_utc** | **\DateTime**|  |
 **bank_account_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\BankAccountApi**](../Model/BankAccountApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

