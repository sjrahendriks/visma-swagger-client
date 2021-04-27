# Swagger\Client\SupplierInvoiceDraftsV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**supplierInvoiceDraftsV2Convert**](SupplierInvoiceDraftsV2Api.md#supplierinvoicedraftsv2convert) | **POST** /v2/supplierinvoicedrafts/{supplierInvoiceDraftId}/convert | Converts a supplier invoice draft to a supplier invoice
[**supplierInvoiceDraftsV2Delete**](SupplierInvoiceDraftsV2Api.md#supplierinvoicedraftsv2delete) | **DELETE** /v2/supplierinvoicedrafts/{supplierInvoiceDraftId} | Deletes a supplier invoice draft
[**supplierInvoiceDraftsV2Get**](SupplierInvoiceDraftsV2Api.md#supplierinvoicedraftsv2get) | **GET** /v2/supplierinvoicedrafts | Get a paginated list of all supplier invoice drafts.
[**supplierInvoiceDraftsV2Get_0**](SupplierInvoiceDraftsV2Api.md#supplierinvoicedraftsv2get_0) | **GET** /v2/supplierinvoicedrafts/{supplierInvoiceDraftId} | Get a single supplier invoice draft.
[**supplierInvoiceDraftsV2Post**](SupplierInvoiceDraftsV2Api.md#supplierinvoicedraftsv2post) | **POST** /v2/supplierinvoicedrafts | Create a supplier invoice draft.
[**supplierInvoiceDraftsV2Put**](SupplierInvoiceDraftsV2Api.md#supplierinvoicedraftsv2put) | **PUT** /v2/supplierinvoicedrafts/{supplierInvoiceDraftId} | Replace content in a supplier invoice draft.

# **supplierInvoiceDraftsV2Convert**
> \Swagger\Client\Model\SupplierInvoiceApi supplierInvoiceDraftsV2Convert($supplier_invoice_draft_id)

Converts a supplier invoice draft to a supplier invoice

<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SupplierInvoiceDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$supplier_invoice_draft_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->supplierInvoiceDraftsV2Convert($supplier_invoice_draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceDraftsV2Api->supplierInvoiceDraftsV2Convert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_invoice_draft_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\SupplierInvoiceApi**](../Model/SupplierInvoiceApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoiceDraftsV2Delete**
> object supplierInvoiceDraftsV2Delete($supplier_invoice_draft_id)

Deletes a supplier invoice draft

<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SupplierInvoiceDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$supplier_invoice_draft_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->supplierInvoiceDraftsV2Delete($supplier_invoice_draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceDraftsV2Api->supplierInvoiceDraftsV2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_invoice_draft_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoiceDraftsV2Get**
> \Swagger\Client\Model\PaginatedResponseSupplierInvoiceDraftApi supplierInvoiceDraftsV2Get()

Get a paginated list of all supplier invoice drafts.

<p>Requires any of the following scopes: <br><b>ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SupplierInvoiceDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->supplierInvoiceDraftsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceDraftsV2Api->supplierInvoiceDraftsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaginatedResponseSupplierInvoiceDraftApi**](../Model/PaginatedResponseSupplierInvoiceDraftApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoiceDraftsV2Get_0**
> \Swagger\Client\Model\SupplierInvoiceDraftApi supplierInvoiceDraftsV2Get_0($supplier_invoice_draft_id)

Get a single supplier invoice draft.

<p>Requires any of the following scopes: <br><b>ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SupplierInvoiceDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$supplier_invoice_draft_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->supplierInvoiceDraftsV2Get_0($supplier_invoice_draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceDraftsV2Api->supplierInvoiceDraftsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_invoice_draft_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\SupplierInvoiceDraftApi**](../Model/SupplierInvoiceDraftApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoiceDraftsV2Post**
> \Swagger\Client\Model\SupplierInvoiceDraftApi supplierInvoiceDraftsV2Post($body, $use_default_vat_codes, $calculate_vat_on_cost_accounts, $batch_process_extended_validation, $duplicate_check_extended_validation)

Create a supplier invoice draft.

<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SupplierInvoiceDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SupplierInvoiceDraftApi(); // \Swagger\Client\Model\SupplierInvoiceDraftApi | 
$use_default_vat_codes = true; // bool | 
$calculate_vat_on_cost_accounts = true; // bool | Automatic calculation of VAT based on vat code. DK, NL and SE only. If this is set to true, then vat rows will be added based on the vat code of the accounts which can be default or custom based on the \"useDefaultVatCodes\" parameter.
$batch_process_extended_validation = true; // bool | Validate for batch process and fiscal year.
$duplicate_check_extended_validation = true; // bool | Check if the invoice is duplicate.

try {
    $result = $apiInstance->supplierInvoiceDraftsV2Post($body, $use_default_vat_codes, $calculate_vat_on_cost_accounts, $batch_process_extended_validation, $duplicate_check_extended_validation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceDraftsV2Api->supplierInvoiceDraftsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SupplierInvoiceDraftApi**](../Model/SupplierInvoiceDraftApi.md)|  |
 **use_default_vat_codes** | **bool**|  | [optional]
 **calculate_vat_on_cost_accounts** | **bool**| Automatic calculation of VAT based on vat code. DK, NL and SE only. If this is set to true, then vat rows will be added based on the vat code of the accounts which can be default or custom based on the \&quot;useDefaultVatCodes\&quot; parameter. | [optional]
 **batch_process_extended_validation** | **bool**| Validate for batch process and fiscal year. | [optional]
 **duplicate_check_extended_validation** | **bool**| Check if the invoice is duplicate. | [optional]

### Return type

[**\Swagger\Client\Model\SupplierInvoiceDraftApi**](../Model/SupplierInvoiceDraftApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoiceDraftsV2Post**
> \Swagger\Client\Model\SupplierInvoiceDraftApi supplierInvoiceDraftsV2Post($id, $supplier_id, $bank_account_id, $invoice_date, $payment_date, $due_date, $invoice_number, $total_amount, $vat, $vat_high, $vat_medium, $vat_low, $is_credit_invoice, $currency_code, $currency_rate, $ocr_number, $message, $created_utc, $modified_utc, $rows, $supplier_name, $supplier_number, $self_employed_without_fixed_address, $is_quick_invoice, $is_domestic, $approval_status, $skip_send_to_bank, $allocation_periods, $attachments, $use_default_vat_codes, $calculate_vat_on_cost_accounts, $batch_process_extended_validation, $duplicate_check_extended_validation)

Create a supplier invoice draft.

<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SupplierInvoiceDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$supplier_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$bank_account_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$invoice_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$payment_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$due_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$invoice_number = "invoice_number_example"; // string | 
$total_amount = 1.2; // double | 
$vat = 1.2; // double | 
$vat_high = 1.2; // double | 
$vat_medium = 1.2; // double | 
$vat_low = 1.2; // double | 
$is_credit_invoice = true; // bool | 
$currency_code = "currency_code_example"; // string | 
$currency_rate = 1.2; // double | 
$ocr_number = "ocr_number_example"; // string | 
$message = "message_example"; // string | 
$created_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$modified_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$rows = array(new \Swagger\Client\Model\SupplierInvoiceDraftRowApi()); // \Swagger\Client\Model\SupplierInvoiceDraftRowApi[] | 
$supplier_name = "supplier_name_example"; // string | 
$supplier_number = "supplier_number_example"; // string | 
$self_employed_without_fixed_address = true; // bool | 
$is_quick_invoice = true; // bool | 
$is_domestic = true; // bool | 
$approval_status = 56; // int | 
$skip_send_to_bank = true; // bool | 
$allocation_periods = array(new \Swagger\Client\Model\AllocationPeriodApi()); // \Swagger\Client\Model\AllocationPeriodApi[] | 
$attachments = new \Swagger\Client\Model\AttachmentLinkApi(); // \Swagger\Client\Model\AttachmentLinkApi | 
$use_default_vat_codes = true; // bool | 
$calculate_vat_on_cost_accounts = true; // bool | Automatic calculation of VAT based on vat code. DK, NL and SE only. If this is set to true, then vat rows will be added based on the vat code of the accounts which can be default or custom based on the \"useDefaultVatCodes\" parameter.
$batch_process_extended_validation = true; // bool | Validate for batch process and fiscal year.
$duplicate_check_extended_validation = true; // bool | Check if the invoice is duplicate.

try {
    $result = $apiInstance->supplierInvoiceDraftsV2Post($id, $supplier_id, $bank_account_id, $invoice_date, $payment_date, $due_date, $invoice_number, $total_amount, $vat, $vat_high, $vat_medium, $vat_low, $is_credit_invoice, $currency_code, $currency_rate, $ocr_number, $message, $created_utc, $modified_utc, $rows, $supplier_name, $supplier_number, $self_employed_without_fixed_address, $is_quick_invoice, $is_domestic, $approval_status, $skip_send_to_bank, $allocation_periods, $attachments, $use_default_vat_codes, $calculate_vat_on_cost_accounts, $batch_process_extended_validation, $duplicate_check_extended_validation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceDraftsV2Api->supplierInvoiceDraftsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **supplier_id** | [**string**](../Model/.md)|  |
 **bank_account_id** | [**string**](../Model/.md)|  |
 **invoice_date** | **\DateTime**|  |
 **payment_date** | **\DateTime**|  |
 **due_date** | **\DateTime**|  |
 **invoice_number** | **string**|  |
 **total_amount** | **double**|  |
 **vat** | **double**|  |
 **vat_high** | **double**|  |
 **vat_medium** | **double**|  |
 **vat_low** | **double**|  |
 **is_credit_invoice** | **bool**|  |
 **currency_code** | **string**|  |
 **currency_rate** | **double**|  |
 **ocr_number** | **string**|  |
 **message** | **string**|  |
 **created_utc** | **\DateTime**|  |
 **modified_utc** | **\DateTime**|  |
 **rows** | [**\Swagger\Client\Model\SupplierInvoiceDraftRowApi[]**](../Model/\Swagger\Client\Model\SupplierInvoiceDraftRowApi.md)|  |
 **supplier_name** | **string**|  |
 **supplier_number** | **string**|  |
 **self_employed_without_fixed_address** | **bool**|  |
 **is_quick_invoice** | **bool**|  |
 **is_domestic** | **bool**|  |
 **approval_status** | **int**|  |
 **skip_send_to_bank** | **bool**|  |
 **allocation_periods** | [**\Swagger\Client\Model\AllocationPeriodApi[]**](../Model/\Swagger\Client\Model\AllocationPeriodApi.md)|  |
 **attachments** | [**\Swagger\Client\Model\AttachmentLinkApi**](../Model/.md)|  |
 **use_default_vat_codes** | **bool**|  | [optional]
 **calculate_vat_on_cost_accounts** | **bool**| Automatic calculation of VAT based on vat code. DK, NL and SE only. If this is set to true, then vat rows will be added based on the vat code of the accounts which can be default or custom based on the \&quot;useDefaultVatCodes\&quot; parameter. | [optional]
 **batch_process_extended_validation** | **bool**| Validate for batch process and fiscal year. | [optional]
 **duplicate_check_extended_validation** | **bool**| Check if the invoice is duplicate. | [optional]

### Return type

[**\Swagger\Client\Model\SupplierInvoiceDraftApi**](../Model/SupplierInvoiceDraftApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoiceDraftsV2Put**
> \Swagger\Client\Model\SupplierInvoiceDraftApi supplierInvoiceDraftsV2Put($body, $supplier_invoice_draft_id)

Replace content in a supplier invoice draft.

To update attachments us the attachment endpoint.<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SupplierInvoiceDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SupplierInvoiceDraftApi(); // \Swagger\Client\Model\SupplierInvoiceDraftApi | 
$supplier_invoice_draft_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->supplierInvoiceDraftsV2Put($body, $supplier_invoice_draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceDraftsV2Api->supplierInvoiceDraftsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SupplierInvoiceDraftApi**](../Model/SupplierInvoiceDraftApi.md)|  |
 **supplier_invoice_draft_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\SupplierInvoiceDraftApi**](../Model/SupplierInvoiceDraftApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoiceDraftsV2Put**
> \Swagger\Client\Model\SupplierInvoiceDraftApi supplierInvoiceDraftsV2Put($id, $supplier_id, $bank_account_id, $invoice_date, $payment_date, $due_date, $invoice_number, $total_amount, $vat, $vat_high, $vat_medium, $vat_low, $is_credit_invoice, $currency_code, $currency_rate, $ocr_number, $message, $created_utc, $modified_utc, $rows, $supplier_name, $supplier_number, $self_employed_without_fixed_address, $is_quick_invoice, $is_domestic, $approval_status, $skip_send_to_bank, $allocation_periods, $attachments, $supplier_invoice_draft_id)

Replace content in a supplier invoice draft.

To update attachments us the attachment endpoint.<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SupplierInvoiceDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$supplier_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$bank_account_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$invoice_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$payment_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$due_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$invoice_number = "invoice_number_example"; // string | 
$total_amount = 1.2; // double | 
$vat = 1.2; // double | 
$vat_high = 1.2; // double | 
$vat_medium = 1.2; // double | 
$vat_low = 1.2; // double | 
$is_credit_invoice = true; // bool | 
$currency_code = "currency_code_example"; // string | 
$currency_rate = 1.2; // double | 
$ocr_number = "ocr_number_example"; // string | 
$message = "message_example"; // string | 
$created_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$modified_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$rows = array(new \Swagger\Client\Model\SupplierInvoiceDraftRowApi()); // \Swagger\Client\Model\SupplierInvoiceDraftRowApi[] | 
$supplier_name = "supplier_name_example"; // string | 
$supplier_number = "supplier_number_example"; // string | 
$self_employed_without_fixed_address = true; // bool | 
$is_quick_invoice = true; // bool | 
$is_domestic = true; // bool | 
$approval_status = 56; // int | 
$skip_send_to_bank = true; // bool | 
$allocation_periods = array(new \Swagger\Client\Model\AllocationPeriodApi()); // \Swagger\Client\Model\AllocationPeriodApi[] | 
$attachments = new \Swagger\Client\Model\AttachmentLinkApi(); // \Swagger\Client\Model\AttachmentLinkApi | 
$supplier_invoice_draft_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->supplierInvoiceDraftsV2Put($id, $supplier_id, $bank_account_id, $invoice_date, $payment_date, $due_date, $invoice_number, $total_amount, $vat, $vat_high, $vat_medium, $vat_low, $is_credit_invoice, $currency_code, $currency_rate, $ocr_number, $message, $created_utc, $modified_utc, $rows, $supplier_name, $supplier_number, $self_employed_without_fixed_address, $is_quick_invoice, $is_domestic, $approval_status, $skip_send_to_bank, $allocation_periods, $attachments, $supplier_invoice_draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceDraftsV2Api->supplierInvoiceDraftsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **supplier_id** | [**string**](../Model/.md)|  |
 **bank_account_id** | [**string**](../Model/.md)|  |
 **invoice_date** | **\DateTime**|  |
 **payment_date** | **\DateTime**|  |
 **due_date** | **\DateTime**|  |
 **invoice_number** | **string**|  |
 **total_amount** | **double**|  |
 **vat** | **double**|  |
 **vat_high** | **double**|  |
 **vat_medium** | **double**|  |
 **vat_low** | **double**|  |
 **is_credit_invoice** | **bool**|  |
 **currency_code** | **string**|  |
 **currency_rate** | **double**|  |
 **ocr_number** | **string**|  |
 **message** | **string**|  |
 **created_utc** | **\DateTime**|  |
 **modified_utc** | **\DateTime**|  |
 **rows** | [**\Swagger\Client\Model\SupplierInvoiceDraftRowApi[]**](../Model/\Swagger\Client\Model\SupplierInvoiceDraftRowApi.md)|  |
 **supplier_name** | **string**|  |
 **supplier_number** | **string**|  |
 **self_employed_without_fixed_address** | **bool**|  |
 **is_quick_invoice** | **bool**|  |
 **is_domestic** | **bool**|  |
 **approval_status** | **int**|  |
 **skip_send_to_bank** | **bool**|  |
 **allocation_periods** | [**\Swagger\Client\Model\AllocationPeriodApi[]**](../Model/\Swagger\Client\Model\AllocationPeriodApi.md)|  |
 **attachments** | [**\Swagger\Client\Model\AttachmentLinkApi**](../Model/.md)|  |
 **supplier_invoice_draft_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\SupplierInvoiceDraftApi**](../Model/SupplierInvoiceDraftApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

