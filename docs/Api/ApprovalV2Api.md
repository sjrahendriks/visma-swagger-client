# Swagger\Client\ApprovalV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**approvalV2ApproveInvoice**](ApprovalV2Api.md#approvalv2approveinvoice) | **PUT** /v2/approval/supplierinvoice/{id} | Replace the approval status of a invoice draft.
[**approvalV2ApproveVatReport**](ApprovalV2Api.md#approvalv2approvevatreport) | **PUT** /v2/approval/vatreport/{id} | Replace the approval status of a vat report.

# **approvalV2ApproveInvoice**
> string approvalV2ApproveInvoice($body, $id)

Replace the approval status of a invoice draft.

Make sure you have the correct approval settings in company settings and permissions on user level.<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApprovalV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ApprovalApi(); // \Swagger\Client\Model\ApprovalApi | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The id of the invoice draft

try {
    $result = $apiInstance->approvalV2ApproveInvoice($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalV2Api->approvalV2ApproveInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApprovalApi**](../Model/ApprovalApi.md)|  |
 **id** | [**string**](../Model/.md)| The id of the invoice draft |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **approvalV2ApproveInvoice**
> string approvalV2ApproveInvoice($document_approval_status, $rejection_message, $rejection_message_receivers, $id)

Replace the approval status of a invoice draft.

Make sure you have the correct approval settings in company settings and permissions on user level.<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApprovalV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_approval_status = 56; // int | 
$rejection_message = "rejection_message_example"; // string | 
$rejection_message_receivers = array("rejection_message_receivers_example"); // string[] | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The id of the invoice draft

try {
    $result = $apiInstance->approvalV2ApproveInvoice($document_approval_status, $rejection_message, $rejection_message_receivers, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalV2Api->approvalV2ApproveInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_approval_status** | **int**|  |
 **rejection_message** | **string**|  |
 **rejection_message_receivers** | [**string[]**](../Model/string.md)|  |
 **id** | [**string**](../Model/.md)| The id of the invoice draft |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **approvalV2ApproveVatReport**
> \Swagger\Client\Model\VatReportApi approvalV2ApproveVatReport($body, $id)

Replace the approval status of a vat report.

Make sure you have the correct approval settings in company settings and permissions on user level.<p>Requires any of the following scopes: <br><b>ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApprovalV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ApprovalApi(); // \Swagger\Client\Model\ApprovalApi | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The id of the vat report

try {
    $result = $apiInstance->approvalV2ApproveVatReport($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalV2Api->approvalV2ApproveVatReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApprovalApi**](../Model/ApprovalApi.md)|  |
 **id** | [**string**](../Model/.md)| The id of the vat report |

### Return type

[**\Swagger\Client\Model\VatReportApi**](../Model/VatReportApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **approvalV2ApproveVatReport**
> \Swagger\Client\Model\VatReportApi approvalV2ApproveVatReport($document_approval_status, $rejection_message, $rejection_message_receivers, $id)

Replace the approval status of a vat report.

Make sure you have the correct approval settings in company settings and permissions on user level.<p>Requires any of the following scopes: <br><b>ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApprovalV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_approval_status = 56; // int | 
$rejection_message = "rejection_message_example"; // string | 
$rejection_message_receivers = array("rejection_message_receivers_example"); // string[] | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The id of the vat report

try {
    $result = $apiInstance->approvalV2ApproveVatReport($document_approval_status, $rejection_message, $rejection_message_receivers, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalV2Api->approvalV2ApproveVatReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_approval_status** | **int**|  |
 **rejection_message** | **string**|  |
 **rejection_message_receivers** | [**string[]**](../Model/string.md)|  |
 **id** | [**string**](../Model/.md)| The id of the vat report |

### Return type

[**\Swagger\Client\Model\VatReportApi**](../Model/VatReportApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

