# Swagger\Client\AccountsV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountsV2Get**](AccountsV2Api.md#accountsv2get) | **GET** /v2/accounts | Get a list of accounts
[**accountsV2Get_0**](AccountsV2Api.md#accountsv2get_0) | **GET** /v2/accounts/standardaccounts | Get a list of the predefined standard accounts.
[**accountsV2Get_1**](AccountsV2Api.md#accountsv2get_1) | **GET** /v2/accounts/{fiscalyearId} | Get a list of accounts
[**accountsV2Get_2**](AccountsV2Api.md#accountsv2get_2) | **GET** /v2/accounts/{fiscalyearId}/{accountNumber} | Get a account
[**accountsV2Post**](AccountsV2Api.md#accountsv2post) | **POST** /v2/accounts | Add a account
[**accountsV2Put**](AccountsV2Api.md#accountsv2put) | **PUT** /v2/accounts/{fiscalyearId}/{accountNumber} | Replace a account

# **accountsV2Get**
> \Swagger\Client\Model\PaginatedResponseAccountApi accountsV2Get()

Get a list of accounts

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->accountsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsV2Api->accountsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaginatedResponseAccountApi**](../Model/PaginatedResponseAccountApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsV2Get_0**
> \Swagger\Client\Model\PaginatedResponseStandardAccountApi accountsV2Get_0()

Get a list of the predefined standard accounts.

Predefined standard accounts are for dutch companies only.<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->accountsV2Get_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsV2Api->accountsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaginatedResponseStandardAccountApi**](../Model/PaginatedResponseStandardAccountApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsV2Get_1**
> \Swagger\Client\Model\PaginatedResponseAccountApi accountsV2Get_1($fiscalyear_id)

Get a list of accounts

Get a list of accounts for a given fiscalyear.<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fiscalyear_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->accountsV2Get_1($fiscalyear_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsV2Api->accountsV2Get_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fiscalyear_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\PaginatedResponseAccountApi**](../Model/PaginatedResponseAccountApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsV2Get_2**
> \Swagger\Client\Model\AccountApi accountsV2Get_2($fiscalyear_id, $account_number)

Get a account

Get a account from a given fiscalyear by specifying the account number.<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fiscalyear_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$account_number = 56; // int | 

try {
    $result = $apiInstance->accountsV2Get_2($fiscalyear_id, $account_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsV2Api->accountsV2Get_2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fiscalyear_id** | [**string**](../Model/.md)|  |
 **account_number** | **int**|  |

### Return type

[**\Swagger\Client\Model\AccountApi**](../Model/AccountApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsV2Post**
> \Swagger\Client\Model\AccountApi accountsV2Post($body, $use_default_account_type)

Add a account

Add a account to a given fiscalyear. Use the required FiscalYearId property to specify the fiscal year.<p>Requires any of the following scopes: <br><b>ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\AccountApi(); // \Swagger\Client\Model\AccountApi | 
$use_default_account_type = true; // bool | If true, eAccounting will provide the standard account type.               If false, you have to provide your own, can be found at /v2/accounttypes.               Account types can only be set on dutch companies.

try {
    $result = $apiInstance->accountsV2Post($body, $use_default_account_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsV2Api->accountsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AccountApi**](../Model/AccountApi.md)|  |
 **use_default_account_type** | **bool**| If true, eAccounting will provide the standard account type.               If false, you have to provide your own, can be found at /v2/accounttypes.               Account types can only be set on dutch companies. | [optional]

### Return type

[**\Swagger\Client\Model\AccountApi**](../Model/AccountApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsV2Post**
> \Swagger\Client\Model\AccountApi accountsV2Post($name, $number, $vat_code_id, $vat_code_description, $fiscal_year_id, $reference_code, $type, $type_description, $modified_utc, $is_active, $is_project_allowed, $is_cost_center_allowed, $is_blocked_for_manual_booking, $use_default_account_type)

Add a account

Add a account to a given fiscalyear. Use the required FiscalYearId property to specify the fiscal year.<p>Requires any of the following scopes: <br><b>ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$number = "number_example"; // string | 
$vat_code_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$vat_code_description = "vat_code_description_example"; // string | 
$fiscal_year_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$reference_code = "reference_code_example"; // string | 
$type = 56; // int | 
$type_description = "type_description_example"; // string | 
$modified_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$is_active = true; // bool | 
$is_project_allowed = true; // bool | 
$is_cost_center_allowed = true; // bool | 
$is_blocked_for_manual_booking = true; // bool | 
$use_default_account_type = true; // bool | If true, eAccounting will provide the standard account type.               If false, you have to provide your own, can be found at /v2/accounttypes.               Account types can only be set on dutch companies.

try {
    $result = $apiInstance->accountsV2Post($name, $number, $vat_code_id, $vat_code_description, $fiscal_year_id, $reference_code, $type, $type_description, $modified_utc, $is_active, $is_project_allowed, $is_cost_center_allowed, $is_blocked_for_manual_booking, $use_default_account_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsV2Api->accountsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **number** | **string**|  |
 **vat_code_id** | [**string**](../Model/.md)|  |
 **vat_code_description** | **string**|  |
 **fiscal_year_id** | [**string**](../Model/.md)|  |
 **reference_code** | **string**|  |
 **type** | **int**|  |
 **type_description** | **string**|  |
 **modified_utc** | **\DateTime**|  |
 **is_active** | **bool**|  |
 **is_project_allowed** | **bool**|  |
 **is_cost_center_allowed** | **bool**|  |
 **is_blocked_for_manual_booking** | **bool**|  |
 **use_default_account_type** | **bool**| If true, eAccounting will provide the standard account type.               If false, you have to provide your own, can be found at /v2/accounttypes.               Account types can only be set on dutch companies. | [optional]

### Return type

[**\Swagger\Client\Model\AccountApi**](../Model/AccountApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsV2Put**
> \Swagger\Client\Model\AccountApi accountsV2Put($body, $fiscalyear_id, $account_number)

Replace a account

Replace a account in a given fiscal year. Will only replace the account in that fiscal year.<p>Requires any of the following scopes: <br><b>ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\AccountApi(); // \Swagger\Client\Model\AccountApi | 
$fiscalyear_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$account_number = 789; // int | 

try {
    $result = $apiInstance->accountsV2Put($body, $fiscalyear_id, $account_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsV2Api->accountsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AccountApi**](../Model/AccountApi.md)|  |
 **fiscalyear_id** | [**string**](../Model/.md)|  |
 **account_number** | **int**|  |

### Return type

[**\Swagger\Client\Model\AccountApi**](../Model/AccountApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsV2Put**
> \Swagger\Client\Model\AccountApi accountsV2Put($name, $number, $vat_code_id, $vat_code_description, $fiscal_year_id, $reference_code, $type, $type_description, $modified_utc, $is_active, $is_project_allowed, $is_cost_center_allowed, $is_blocked_for_manual_booking, $fiscalyear_id, $account_number)

Replace a account

Replace a account in a given fiscal year. Will only replace the account in that fiscal year.<p>Requires any of the following scopes: <br><b>ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$number = "number_example"; // string | 
$vat_code_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$vat_code_description = "vat_code_description_example"; // string | 
$fiscal_year_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$reference_code = "reference_code_example"; // string | 
$type = 56; // int | 
$type_description = "type_description_example"; // string | 
$modified_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$is_active = true; // bool | 
$is_project_allowed = true; // bool | 
$is_cost_center_allowed = true; // bool | 
$is_blocked_for_manual_booking = true; // bool | 
$fiscalyear_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$account_number = 789; // int | 

try {
    $result = $apiInstance->accountsV2Put($name, $number, $vat_code_id, $vat_code_description, $fiscal_year_id, $reference_code, $type, $type_description, $modified_utc, $is_active, $is_project_allowed, $is_cost_center_allowed, $is_blocked_for_manual_booking, $fiscalyear_id, $account_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsV2Api->accountsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **number** | **string**|  |
 **vat_code_id** | [**string**](../Model/.md)|  |
 **vat_code_description** | **string**|  |
 **fiscal_year_id** | [**string**](../Model/.md)|  |
 **reference_code** | **string**|  |
 **type** | **int**|  |
 **type_description** | **string**|  |
 **modified_utc** | **\DateTime**|  |
 **is_active** | **bool**|  |
 **is_project_allowed** | **bool**|  |
 **is_cost_center_allowed** | **bool**|  |
 **is_blocked_for_manual_booking** | **bool**|  |
 **fiscalyear_id** | [**string**](../Model/.md)|  |
 **account_number** | **int**|  |

### Return type

[**\Swagger\Client\Model\AccountApi**](../Model/AccountApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

