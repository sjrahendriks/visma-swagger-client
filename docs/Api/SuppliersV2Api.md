# Swagger\Client\SuppliersV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**suppliersV2Delete**](SuppliersV2Api.md#suppliersv2delete) | **DELETE** /v2/suppliers/{supplierId} | Deletes a supplier
[**suppliersV2Get**](SuppliersV2Api.md#suppliersv2get) | **GET** /v2/suppliers | Get a list of suppliers.
[**suppliersV2Get_0**](SuppliersV2Api.md#suppliersv2get_0) | **GET** /v2/suppliers/{supplierId} | Get a specific supplier.
[**suppliersV2Post**](SuppliersV2Api.md#suppliersv2post) | **POST** /v2/suppliers | Post a supplier
[**suppliersV2Put**](SuppliersV2Api.md#suppliersv2put) | **PUT** /v2/suppliers/{supplierId} | Replace a supplier

# **suppliersV2Delete**
> object suppliersV2Delete($supplier_id)

Deletes a supplier

<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SuppliersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$supplier_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->suppliersV2Delete($supplier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersV2Api->suppliersV2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **suppliersV2Get**
> \Swagger\Client\Model\PaginatedResponseSupplierApi suppliersV2Get()

Get a list of suppliers.

<p>Requires any of the following scopes: <br><b>ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SuppliersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->suppliersV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersV2Api->suppliersV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaginatedResponseSupplierApi**](../Model/PaginatedResponseSupplierApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **suppliersV2Get_0**
> \Swagger\Client\Model\SupplierApi suppliersV2Get_0($supplier_id)

Get a specific supplier.

<p>Requires any of the following scopes: <br><b>ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SuppliersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$supplier_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->suppliersV2Get_0($supplier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersV2Api->suppliersV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\SupplierApi**](../Model/SupplierApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **suppliersV2Post**
> \Swagger\Client\Model\SupplierApi suppliersV2Post($body)

Post a supplier

<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SuppliersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SupplierApi(); // \Swagger\Client\Model\SupplierApi | 

try {
    $result = $apiInstance->suppliersV2Post($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersV2Api->suppliersV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SupplierApi**](../Model/SupplierApi.md)|  |

### Return type

[**\Swagger\Client\Model\SupplierApi**](../Model/SupplierApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **suppliersV2Post**
> \Swagger\Client\Model\SupplierApi suppliersV2Post($id, $supplier_number, $address1, $address2, $automatic_payment_service, $bank_account_number, $bank_bban, $bank_bic, $bank_code, $bank_country_code, $bankgiro_number, $bank_iban, $bank_name, $city, $contact_person_email, $contact_person_mobile, $contact_person_name, $contact_person_phone, $corporate_identity_number, $country_code, $created_utc, $currency_code, $email_address, $mobile_phone, $modified_utc, $name, $note, $plusgiro_number, $postal_code, $telephone, $terms_of_payment_id, $vat_number, $www_address, $bank_fee_code, $pay_from_bank_account_id, $foreign_payment_code_id, $uses_payment_reference_numbers, $is_active, $self_employed_without_fixed_address)

Post a supplier

<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SuppliersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$supplier_number = "supplier_number_example"; // string | 
$address1 = "address1_example"; // string | 
$address2 = "address2_example"; // string | 
$automatic_payment_service = true; // bool | 
$bank_account_number = "bank_account_number_example"; // string | 
$bank_bban = "bank_bban_example"; // string | 
$bank_bic = "bank_bic_example"; // string | 
$bank_code = "bank_code_example"; // string | 
$bank_country_code = "bank_country_code_example"; // string | 
$bankgiro_number = "bankgiro_number_example"; // string | 
$bank_iban = "bank_iban_example"; // string | 
$bank_name = "bank_name_example"; // string | 
$city = "city_example"; // string | 
$contact_person_email = "contact_person_email_example"; // string | 
$contact_person_mobile = "contact_person_mobile_example"; // string | 
$contact_person_name = "contact_person_name_example"; // string | 
$contact_person_phone = "contact_person_phone_example"; // string | 
$corporate_identity_number = "corporate_identity_number_example"; // string | 
$country_code = "country_code_example"; // string | 
$created_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$currency_code = "currency_code_example"; // string | 
$email_address = "email_address_example"; // string | 
$mobile_phone = "mobile_phone_example"; // string | 
$modified_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$name = "name_example"; // string | 
$note = "note_example"; // string | 
$plusgiro_number = "plusgiro_number_example"; // string | 
$postal_code = "postal_code_example"; // string | 
$telephone = "telephone_example"; // string | 
$terms_of_payment_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$vat_number = "vat_number_example"; // string | 
$www_address = "www_address_example"; // string | 
$bank_fee_code = 56; // int | 
$pay_from_bank_account_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$foreign_payment_code_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$uses_payment_reference_numbers = true; // bool | 
$is_active = true; // bool | 
$self_employed_without_fixed_address = true; // bool | 

try {
    $result = $apiInstance->suppliersV2Post($id, $supplier_number, $address1, $address2, $automatic_payment_service, $bank_account_number, $bank_bban, $bank_bic, $bank_code, $bank_country_code, $bankgiro_number, $bank_iban, $bank_name, $city, $contact_person_email, $contact_person_mobile, $contact_person_name, $contact_person_phone, $corporate_identity_number, $country_code, $created_utc, $currency_code, $email_address, $mobile_phone, $modified_utc, $name, $note, $plusgiro_number, $postal_code, $telephone, $terms_of_payment_id, $vat_number, $www_address, $bank_fee_code, $pay_from_bank_account_id, $foreign_payment_code_id, $uses_payment_reference_numbers, $is_active, $self_employed_without_fixed_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersV2Api->suppliersV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **supplier_number** | **string**|  |
 **address1** | **string**|  |
 **address2** | **string**|  |
 **automatic_payment_service** | **bool**|  |
 **bank_account_number** | **string**|  |
 **bank_bban** | **string**|  |
 **bank_bic** | **string**|  |
 **bank_code** | **string**|  |
 **bank_country_code** | **string**|  |
 **bankgiro_number** | **string**|  |
 **bank_iban** | **string**|  |
 **bank_name** | **string**|  |
 **city** | **string**|  |
 **contact_person_email** | **string**|  |
 **contact_person_mobile** | **string**|  |
 **contact_person_name** | **string**|  |
 **contact_person_phone** | **string**|  |
 **corporate_identity_number** | **string**|  |
 **country_code** | **string**|  |
 **created_utc** | **\DateTime**|  |
 **currency_code** | **string**|  |
 **email_address** | **string**|  |
 **mobile_phone** | **string**|  |
 **modified_utc** | **\DateTime**|  |
 **name** | **string**|  |
 **note** | **string**|  |
 **plusgiro_number** | **string**|  |
 **postal_code** | **string**|  |
 **telephone** | **string**|  |
 **terms_of_payment_id** | [**string**](../Model/.md)|  |
 **vat_number** | **string**|  |
 **www_address** | **string**|  |
 **bank_fee_code** | **int**|  |
 **pay_from_bank_account_id** | [**string**](../Model/.md)|  |
 **foreign_payment_code_id** | [**string**](../Model/.md)|  |
 **uses_payment_reference_numbers** | **bool**|  |
 **is_active** | **bool**|  |
 **self_employed_without_fixed_address** | **bool**|  |

### Return type

[**\Swagger\Client\Model\SupplierApi**](../Model/SupplierApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **suppliersV2Put**
> \Swagger\Client\Model\SupplierApi suppliersV2Put($body, $supplier_id)

Replace a supplier

<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SuppliersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SupplierApi(); // \Swagger\Client\Model\SupplierApi | 
$supplier_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->suppliersV2Put($body, $supplier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersV2Api->suppliersV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SupplierApi**](../Model/SupplierApi.md)|  |
 **supplier_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\SupplierApi**](../Model/SupplierApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **suppliersV2Put**
> \Swagger\Client\Model\SupplierApi suppliersV2Put($id, $supplier_number, $address1, $address2, $automatic_payment_service, $bank_account_number, $bank_bban, $bank_bic, $bank_code, $bank_country_code, $bankgiro_number, $bank_iban, $bank_name, $city, $contact_person_email, $contact_person_mobile, $contact_person_name, $contact_person_phone, $corporate_identity_number, $country_code, $created_utc, $currency_code, $email_address, $mobile_phone, $modified_utc, $name, $note, $plusgiro_number, $postal_code, $telephone, $terms_of_payment_id, $vat_number, $www_address, $bank_fee_code, $pay_from_bank_account_id, $foreign_payment_code_id, $uses_payment_reference_numbers, $is_active, $self_employed_without_fixed_address, $supplier_id)

Replace a supplier

<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SuppliersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$supplier_number = "supplier_number_example"; // string | 
$address1 = "address1_example"; // string | 
$address2 = "address2_example"; // string | 
$automatic_payment_service = true; // bool | 
$bank_account_number = "bank_account_number_example"; // string | 
$bank_bban = "bank_bban_example"; // string | 
$bank_bic = "bank_bic_example"; // string | 
$bank_code = "bank_code_example"; // string | 
$bank_country_code = "bank_country_code_example"; // string | 
$bankgiro_number = "bankgiro_number_example"; // string | 
$bank_iban = "bank_iban_example"; // string | 
$bank_name = "bank_name_example"; // string | 
$city = "city_example"; // string | 
$contact_person_email = "contact_person_email_example"; // string | 
$contact_person_mobile = "contact_person_mobile_example"; // string | 
$contact_person_name = "contact_person_name_example"; // string | 
$contact_person_phone = "contact_person_phone_example"; // string | 
$corporate_identity_number = "corporate_identity_number_example"; // string | 
$country_code = "country_code_example"; // string | 
$created_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$currency_code = "currency_code_example"; // string | 
$email_address = "email_address_example"; // string | 
$mobile_phone = "mobile_phone_example"; // string | 
$modified_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$name = "name_example"; // string | 
$note = "note_example"; // string | 
$plusgiro_number = "plusgiro_number_example"; // string | 
$postal_code = "postal_code_example"; // string | 
$telephone = "telephone_example"; // string | 
$terms_of_payment_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$vat_number = "vat_number_example"; // string | 
$www_address = "www_address_example"; // string | 
$bank_fee_code = 56; // int | 
$pay_from_bank_account_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$foreign_payment_code_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$uses_payment_reference_numbers = true; // bool | 
$is_active = true; // bool | 
$self_employed_without_fixed_address = true; // bool | 
$supplier_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->suppliersV2Put($id, $supplier_number, $address1, $address2, $automatic_payment_service, $bank_account_number, $bank_bban, $bank_bic, $bank_code, $bank_country_code, $bankgiro_number, $bank_iban, $bank_name, $city, $contact_person_email, $contact_person_mobile, $contact_person_name, $contact_person_phone, $corporate_identity_number, $country_code, $created_utc, $currency_code, $email_address, $mobile_phone, $modified_utc, $name, $note, $plusgiro_number, $postal_code, $telephone, $terms_of_payment_id, $vat_number, $www_address, $bank_fee_code, $pay_from_bank_account_id, $foreign_payment_code_id, $uses_payment_reference_numbers, $is_active, $self_employed_without_fixed_address, $supplier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersV2Api->suppliersV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **supplier_number** | **string**|  |
 **address1** | **string**|  |
 **address2** | **string**|  |
 **automatic_payment_service** | **bool**|  |
 **bank_account_number** | **string**|  |
 **bank_bban** | **string**|  |
 **bank_bic** | **string**|  |
 **bank_code** | **string**|  |
 **bank_country_code** | **string**|  |
 **bankgiro_number** | **string**|  |
 **bank_iban** | **string**|  |
 **bank_name** | **string**|  |
 **city** | **string**|  |
 **contact_person_email** | **string**|  |
 **contact_person_mobile** | **string**|  |
 **contact_person_name** | **string**|  |
 **contact_person_phone** | **string**|  |
 **corporate_identity_number** | **string**|  |
 **country_code** | **string**|  |
 **created_utc** | **\DateTime**|  |
 **currency_code** | **string**|  |
 **email_address** | **string**|  |
 **mobile_phone** | **string**|  |
 **modified_utc** | **\DateTime**|  |
 **name** | **string**|  |
 **note** | **string**|  |
 **plusgiro_number** | **string**|  |
 **postal_code** | **string**|  |
 **telephone** | **string**|  |
 **terms_of_payment_id** | [**string**](../Model/.md)|  |
 **vat_number** | **string**|  |
 **www_address** | **string**|  |
 **bank_fee_code** | **int**|  |
 **pay_from_bank_account_id** | [**string**](../Model/.md)|  |
 **foreign_payment_code_id** | [**string**](../Model/.md)|  |
 **uses_payment_reference_numbers** | **bool**|  |
 **is_active** | **bool**|  |
 **self_employed_without_fixed_address** | **bool**|  |
 **supplier_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\SupplierApi**](../Model/SupplierApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

