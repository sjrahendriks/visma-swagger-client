# Swagger\Client\CompanySettingsV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companySettingsV2Get**](CompanySettingsV2Api.md#companysettingsv2get) | **GET** /v2/companysettings | Get company settings.
[**companySettingsV2Put**](CompanySettingsV2Api.md#companysettingsv2put) | **PUT** /v2/companysettings | Replace company settings.
[**companySettingsV2UpdateAccountingLockSettings**](CompanySettingsV2Api.md#companysettingsv2updateaccountinglocksettings) | **PUT** /v2/companysettings/accountinglocksettings | Update accounting lock interval settings.
[**companySettingsV2UpdateRotRutSettings**](CompanySettingsV2Api.md#companysettingsv2updaterotrutsettings) | **PUT** /v2/companysettings/rotrut | Update ROT/RUT settings.

# **companySettingsV2Get**
> \Swagger\Client\Model\CompanySettingsApi companySettingsV2Get()

Get company settings.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CompanySettingsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->companySettingsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanySettingsV2Api->companySettingsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\CompanySettingsApi**](../Model/CompanySettingsApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companySettingsV2Put**
> \Swagger\Client\Model\CompanySettingsApi companySettingsV2Put($body)

Replace company settings.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CompanySettingsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CompanySettingsApi(); // \Swagger\Client\Model\CompanySettingsApi | 

try {
    $result = $apiInstance->companySettingsV2Put($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanySettingsV2Api->companySettingsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CompanySettingsApi**](../Model/CompanySettingsApi.md)|  |

### Return type

[**\Swagger\Client\Model\CompanySettingsApi**](../Model/CompanySettingsApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companySettingsV2Put**
> \Swagger\Client\Model\CompanySettingsApi companySettingsV2Put($name, $email, $phone, $mobile_phone, $address1, $address2, $country_code, $postal_code, $city, $website, $currency_code, $terms_of_payment_id, $corporate_identity_number, $vat_code, $bank_giro, $plus_giro, $bank_account, $iban, $accounting_locked_to, $accounting_lock_interval, $tax_declaration_date, $gln, $product_variant, $type_of_business, $vat_period, $activated_modules, $company_text, $next_customer_number, $next_supplier_number, $next_customer_invoice_number, $next_quote_number, $show_prices_excl_vat_pc, $is_payslip_activated, $uses_moss, $uses_payment_reference_number, $domestic_currency_rounding, $auto_invoice, $approval_settings, $uses_reverse_construction_vat, $uses_rot_reduced_invoicing, $company_rot_rut_settings, $company_status, $company_identifier, $bankgiro_number_print, $keep_original_draft_date, $use_automatic_vat_calculation, $show_cost_center_reminder, $show_project_reminder)

Replace company settings.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CompanySettingsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$email = "email_example"; // string | 
$phone = "phone_example"; // string | 
$mobile_phone = "mobile_phone_example"; // string | 
$address1 = "address1_example"; // string | 
$address2 = "address2_example"; // string | 
$country_code = "country_code_example"; // string | 
$postal_code = "postal_code_example"; // string | 
$city = "city_example"; // string | 
$website = "website_example"; // string | 
$currency_code = "currency_code_example"; // string | 
$terms_of_payment_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$corporate_identity_number = "corporate_identity_number_example"; // string | 
$vat_code = "vat_code_example"; // string | 
$bank_giro = "bank_giro_example"; // string | 
$plus_giro = "plus_giro_example"; // string | 
$bank_account = "bank_account_example"; // string | 
$iban = "iban_example"; // string | 
$accounting_locked_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$accounting_lock_interval = 56; // int | 
$tax_declaration_date = new \Swagger\Client\Model\TaxDeclarationDateApi(); // \Swagger\Client\Model\TaxDeclarationDateApi | 
$gln = "gln_example"; // string | 
$product_variant = 56; // int | 
$type_of_business = 56; // int | 
$vat_period = 56; // int | 
$activated_modules = array("activated_modules_example"); // string[] | 
$company_text = new \Swagger\Client\Model\CompanyTextsApi(); // \Swagger\Client\Model\CompanyTextsApi | 
$next_customer_number = 56; // int | 
$next_supplier_number = 56; // int | 
$next_customer_invoice_number = 56; // int | 
$next_quote_number = 56; // int | 
$show_prices_excl_vat_pc = true; // bool | 
$is_payslip_activated = true; // bool | 
$uses_moss = true; // bool | 
$uses_payment_reference_number = true; // bool | 
$domestic_currency_rounding = 56; // int | 
$auto_invoice = new \Swagger\Client\Model\AutoInvoiceApi(); // \Swagger\Client\Model\AutoInvoiceApi | 
$approval_settings = new \Swagger\Client\Model\ApprovalSettingsApi(); // \Swagger\Client\Model\ApprovalSettingsApi | 
$uses_reverse_construction_vat = true; // bool | 
$uses_rot_reduced_invoicing = true; // bool | 
$company_rot_rut_settings = new \Swagger\Client\Model\CompanyRotRutSettingsApi(); // \Swagger\Client\Model\CompanyRotRutSettingsApi | 
$company_status = 56; // int | 
$company_identifier = "company_identifier_example"; // string | 
$bankgiro_number_print = "bankgiro_number_print_example"; // string | 
$keep_original_draft_date = true; // bool | 
$use_automatic_vat_calculation = true; // bool | 
$show_cost_center_reminder = true; // bool | 
$show_project_reminder = true; // bool | 

try {
    $result = $apiInstance->companySettingsV2Put($name, $email, $phone, $mobile_phone, $address1, $address2, $country_code, $postal_code, $city, $website, $currency_code, $terms_of_payment_id, $corporate_identity_number, $vat_code, $bank_giro, $plus_giro, $bank_account, $iban, $accounting_locked_to, $accounting_lock_interval, $tax_declaration_date, $gln, $product_variant, $type_of_business, $vat_period, $activated_modules, $company_text, $next_customer_number, $next_supplier_number, $next_customer_invoice_number, $next_quote_number, $show_prices_excl_vat_pc, $is_payslip_activated, $uses_moss, $uses_payment_reference_number, $domestic_currency_rounding, $auto_invoice, $approval_settings, $uses_reverse_construction_vat, $uses_rot_reduced_invoicing, $company_rot_rut_settings, $company_status, $company_identifier, $bankgiro_number_print, $keep_original_draft_date, $use_automatic_vat_calculation, $show_cost_center_reminder, $show_project_reminder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanySettingsV2Api->companySettingsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **email** | **string**|  |
 **phone** | **string**|  |
 **mobile_phone** | **string**|  |
 **address1** | **string**|  |
 **address2** | **string**|  |
 **country_code** | **string**|  |
 **postal_code** | **string**|  |
 **city** | **string**|  |
 **website** | **string**|  |
 **currency_code** | **string**|  |
 **terms_of_payment_id** | [**string**](../Model/.md)|  |
 **corporate_identity_number** | **string**|  |
 **vat_code** | **string**|  |
 **bank_giro** | **string**|  |
 **plus_giro** | **string**|  |
 **bank_account** | **string**|  |
 **iban** | **string**|  |
 **accounting_locked_to** | **\DateTime**|  |
 **accounting_lock_interval** | **int**|  |
 **tax_declaration_date** | [**\Swagger\Client\Model\TaxDeclarationDateApi**](../Model/.md)|  |
 **gln** | **string**|  |
 **product_variant** | **int**|  |
 **type_of_business** | **int**|  |
 **vat_period** | **int**|  |
 **activated_modules** | [**string[]**](../Model/string.md)|  |
 **company_text** | [**\Swagger\Client\Model\CompanyTextsApi**](../Model/.md)|  |
 **next_customer_number** | **int**|  |
 **next_supplier_number** | **int**|  |
 **next_customer_invoice_number** | **int**|  |
 **next_quote_number** | **int**|  |
 **show_prices_excl_vat_pc** | **bool**|  |
 **is_payslip_activated** | **bool**|  |
 **uses_moss** | **bool**|  |
 **uses_payment_reference_number** | **bool**|  |
 **domestic_currency_rounding** | **int**|  |
 **auto_invoice** | [**\Swagger\Client\Model\AutoInvoiceApi**](../Model/.md)|  |
 **approval_settings** | [**\Swagger\Client\Model\ApprovalSettingsApi**](../Model/.md)|  |
 **uses_reverse_construction_vat** | **bool**|  |
 **uses_rot_reduced_invoicing** | **bool**|  |
 **company_rot_rut_settings** | [**\Swagger\Client\Model\CompanyRotRutSettingsApi**](../Model/.md)|  |
 **company_status** | **int**|  |
 **company_identifier** | **string**|  |
 **bankgiro_number_print** | **string**|  |
 **keep_original_draft_date** | **bool**|  |
 **use_automatic_vat_calculation** | **bool**|  |
 **show_cost_center_reminder** | **bool**|  |
 **show_project_reminder** | **bool**|  |

### Return type

[**\Swagger\Client\Model\CompanySettingsApi**](../Model/CompanySettingsApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companySettingsV2UpdateAccountingLockSettings**
> \Swagger\Client\Model\CompanySettingsApi companySettingsV2UpdateAccountingLockSettings($body)

Update accounting lock interval settings.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CompanySettingsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\AccountingLockSettingsApi(); // \Swagger\Client\Model\AccountingLockSettingsApi | 

try {
    $result = $apiInstance->companySettingsV2UpdateAccountingLockSettings($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanySettingsV2Api->companySettingsV2UpdateAccountingLockSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AccountingLockSettingsApi**](../Model/AccountingLockSettingsApi.md)|  |

### Return type

[**\Swagger\Client\Model\CompanySettingsApi**](../Model/CompanySettingsApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companySettingsV2UpdateAccountingLockSettings**
> \Swagger\Client\Model\CompanySettingsApi companySettingsV2UpdateAccountingLockSettings($accounting_locked_as_of, $accounting_lock_interval, $tax_declaration_date)

Update accounting lock interval settings.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CompanySettingsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accounting_locked_as_of = new \Swagger\Client\Model\AccountingLockDateApi(); // \Swagger\Client\Model\AccountingLockDateApi | 
$accounting_lock_interval = 56; // int | 
$tax_declaration_date = new \Swagger\Client\Model\TaxDeclarationDateApi(); // \Swagger\Client\Model\TaxDeclarationDateApi | 

try {
    $result = $apiInstance->companySettingsV2UpdateAccountingLockSettings($accounting_locked_as_of, $accounting_lock_interval, $tax_declaration_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanySettingsV2Api->companySettingsV2UpdateAccountingLockSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accounting_locked_as_of** | [**\Swagger\Client\Model\AccountingLockDateApi**](../Model/.md)|  |
 **accounting_lock_interval** | **int**|  |
 **tax_declaration_date** | [**\Swagger\Client\Model\TaxDeclarationDateApi**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\CompanySettingsApi**](../Model/CompanySettingsApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companySettingsV2UpdateRotRutSettings**
> \Swagger\Client\Model\CompanySettingsApi companySettingsV2UpdateRotRutSettings($body)

Update ROT/RUT settings.

Only for swedish companies and if the company uses rot reduced invoicing. Use PUT v2/companysettings to change that.<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CompanySettingsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CompanyRotRutSettingsApi(); // \Swagger\Client\Model\CompanyRotRutSettingsApi | 

try {
    $result = $apiInstance->companySettingsV2UpdateRotRutSettings($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanySettingsV2Api->companySettingsV2UpdateRotRutSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CompanyRotRutSettingsApi**](../Model/CompanyRotRutSettingsApi.md)|  |

### Return type

[**\Swagger\Client\Model\CompanySettingsApi**](../Model/CompanySettingsApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companySettingsV2UpdateRotRutSettings**
> \Swagger\Client\Model\CompanySettingsApi companySettingsV2UpdateRotRutSettings($rut_max_amount_for_pers_below65_year, $rut_max_amount_for_pers_over65_year, $rut_reduced_invoicing_percent, $rot_reduced_invoicing_max_amount, $rot_reduced_invoicing_percent)

Update ROT/RUT settings.

Only for swedish companies and if the company uses rot reduced invoicing. Use PUT v2/companysettings to change that.<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CompanySettingsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$rut_max_amount_for_pers_below65_year = 1.2; // double | 
$rut_max_amount_for_pers_over65_year = 1.2; // double | 
$rut_reduced_invoicing_percent = 1.2; // double | 
$rot_reduced_invoicing_max_amount = 1.2; // double | 
$rot_reduced_invoicing_percent = 1.2; // double | 

try {
    $result = $apiInstance->companySettingsV2UpdateRotRutSettings($rut_max_amount_for_pers_below65_year, $rut_max_amount_for_pers_over65_year, $rut_reduced_invoicing_percent, $rot_reduced_invoicing_max_amount, $rot_reduced_invoicing_percent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanySettingsV2Api->companySettingsV2UpdateRotRutSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rut_max_amount_for_pers_below65_year** | **double**|  |
 **rut_max_amount_for_pers_over65_year** | **double**|  |
 **rut_reduced_invoicing_percent** | **double**|  |
 **rot_reduced_invoicing_max_amount** | **double**|  |
 **rot_reduced_invoicing_percent** | **double**|  |

### Return type

[**\Swagger\Client\Model\CompanySettingsApi**](../Model/CompanySettingsApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

