# Swagger\Client\SalesDocumentAttachmentsV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesDocumentAttachmentsV2Delete**](SalesDocumentAttachmentsV2Api.md#salesdocumentattachmentsv2delete) | **DELETE** /v2/salesdocumentattachments/{customerInvoiceDraftId}/{attachmentId} | Delete a customer invoice draft attachment.
[**salesDocumentAttachmentsV2DeleteCustomerInvoice**](SalesDocumentAttachmentsV2Api.md#salesdocumentattachmentsv2deletecustomerinvoice) | **DELETE** /v2/salesdocumentattachments/customerinvoice/{customerInvoiceId}/{attachmentId} | Delete a document attached to a customer invoice (including customer ledger items).
[**salesDocumentAttachmentsV2DeleteCustomerInvoiceDraft**](SalesDocumentAttachmentsV2Api.md#salesdocumentattachmentsv2deletecustomerinvoicedraft) | **DELETE** /v2/salesdocumentattachments/customerinvoicedraft/{customerInvoiceDraftId}/{attachmentId} | Delete a document attached to a customer invoice draft.
[**salesDocumentAttachmentsV2Get**](SalesDocumentAttachmentsV2Api.md#salesdocumentattachmentsv2get) | **GET** /v2/salesdocumentattachments/{attachmentId}.pdf | Download a specific sales document attachment using the attachmentId.
[**salesDocumentAttachmentsV2Post**](SalesDocumentAttachmentsV2Api.md#salesdocumentattachmentsv2post) | **POST** /v2/salesdocumentattachments | Create a sales document attachment.
[**salesDocumentAttachmentsV2PostCustomerInvoice**](SalesDocumentAttachmentsV2Api.md#salesdocumentattachmentsv2postcustomerinvoice) | **POST** /v2/salesdocumentattachments/customerinvoice | Create a sales document attached to a customer invoice (including customer ledger items).
[**salesDocumentAttachmentsV2PostCustomerInvoiceDraft**](SalesDocumentAttachmentsV2Api.md#salesdocumentattachmentsv2postcustomerinvoicedraft) | **POST** /v2/salesdocumentattachments/customerinvoicedraft | Create a sales document attached to a customer invoice draft.

# **salesDocumentAttachmentsV2Delete**
> object salesDocumentAttachmentsV2Delete($customer_invoice_draft_id, $attachment_id)

Delete a customer invoice draft attachment.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesDocumentAttachmentsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_invoice_draft_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$attachment_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->salesDocumentAttachmentsV2Delete($customer_invoice_draft_id, $attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesDocumentAttachmentsV2Api->salesDocumentAttachmentsV2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_invoice_draft_id** | [**string**](../Model/.md)|  |
 **attachment_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesDocumentAttachmentsV2DeleteCustomerInvoice**
> object salesDocumentAttachmentsV2DeleteCustomerInvoice($customer_invoice_id, $attachment_id)

Delete a document attached to a customer invoice (including customer ledger items).

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesDocumentAttachmentsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_invoice_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$attachment_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->salesDocumentAttachmentsV2DeleteCustomerInvoice($customer_invoice_id, $attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesDocumentAttachmentsV2Api->salesDocumentAttachmentsV2DeleteCustomerInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_invoice_id** | [**string**](../Model/.md)|  |
 **attachment_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesDocumentAttachmentsV2DeleteCustomerInvoiceDraft**
> object salesDocumentAttachmentsV2DeleteCustomerInvoiceDraft($customer_invoice_draft_id, $attachment_id)

Delete a document attached to a customer invoice draft.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesDocumentAttachmentsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_invoice_draft_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$attachment_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->salesDocumentAttachmentsV2DeleteCustomerInvoiceDraft($customer_invoice_draft_id, $attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesDocumentAttachmentsV2Api->salesDocumentAttachmentsV2DeleteCustomerInvoiceDraft: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_invoice_draft_id** | [**string**](../Model/.md)|  |
 **attachment_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesDocumentAttachmentsV2Get**
> object salesDocumentAttachmentsV2Get($attachment_id)

Download a specific sales document attachment using the attachmentId.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesDocumentAttachmentsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attachment_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->salesDocumentAttachmentsV2Get($attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesDocumentAttachmentsV2Api->salesDocumentAttachmentsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesDocumentAttachmentsV2Post**
> \Swagger\Client\Model\SalesDocumentAttachmentApi salesDocumentAttachmentsV2Post($body)

Create a sales document attachment.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesDocumentAttachmentsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SalesDocumentAttachmentUploadApi(); // \Swagger\Client\Model\SalesDocumentAttachmentUploadApi | 

try {
    $result = $apiInstance->salesDocumentAttachmentsV2Post($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesDocumentAttachmentsV2Api->salesDocumentAttachmentsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SalesDocumentAttachmentUploadApi**](../Model/SalesDocumentAttachmentUploadApi.md)|  |

### Return type

[**\Swagger\Client\Model\SalesDocumentAttachmentApi**](../Model/SalesDocumentAttachmentApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesDocumentAttachmentsV2Post**
> \Swagger\Client\Model\SalesDocumentAttachmentApi salesDocumentAttachmentsV2Post($content_type, $file_name, $dockument_id, $data, $url)

Create a sales document attachment.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesDocumentAttachmentsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = "content_type_example"; // string | 
$file_name = "file_name_example"; // string | 
$dockument_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$data = "data_example"; // string | 
$url = "url_example"; // string | 

try {
    $result = $apiInstance->salesDocumentAttachmentsV2Post($content_type, $file_name, $dockument_id, $data, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesDocumentAttachmentsV2Api->salesDocumentAttachmentsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  |
 **file_name** | **string**|  |
 **dockument_id** | [**string**](../Model/.md)|  |
 **data** | **string**|  |
 **url** | **string**|  |

### Return type

[**\Swagger\Client\Model\SalesDocumentAttachmentApi**](../Model/SalesDocumentAttachmentApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesDocumentAttachmentsV2PostCustomerInvoice**
> \Swagger\Client\Model\SalesDocumentAttachmentApi salesDocumentAttachmentsV2PostCustomerInvoice($body)

Create a sales document attached to a customer invoice (including customer ledger items).

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesDocumentAttachmentsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SalesDocumentAttachmentUploadApi(); // \Swagger\Client\Model\SalesDocumentAttachmentUploadApi | 

try {
    $result = $apiInstance->salesDocumentAttachmentsV2PostCustomerInvoice($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesDocumentAttachmentsV2Api->salesDocumentAttachmentsV2PostCustomerInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SalesDocumentAttachmentUploadApi**](../Model/SalesDocumentAttachmentUploadApi.md)|  |

### Return type

[**\Swagger\Client\Model\SalesDocumentAttachmentApi**](../Model/SalesDocumentAttachmentApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesDocumentAttachmentsV2PostCustomerInvoice**
> \Swagger\Client\Model\SalesDocumentAttachmentApi salesDocumentAttachmentsV2PostCustomerInvoice($content_type, $file_name, $dockument_id, $data, $url)

Create a sales document attached to a customer invoice (including customer ledger items).

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesDocumentAttachmentsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = "content_type_example"; // string | 
$file_name = "file_name_example"; // string | 
$dockument_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$data = "data_example"; // string | 
$url = "url_example"; // string | 

try {
    $result = $apiInstance->salesDocumentAttachmentsV2PostCustomerInvoice($content_type, $file_name, $dockument_id, $data, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesDocumentAttachmentsV2Api->salesDocumentAttachmentsV2PostCustomerInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  |
 **file_name** | **string**|  |
 **dockument_id** | [**string**](../Model/.md)|  |
 **data** | **string**|  |
 **url** | **string**|  |

### Return type

[**\Swagger\Client\Model\SalesDocumentAttachmentApi**](../Model/SalesDocumentAttachmentApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesDocumentAttachmentsV2PostCustomerInvoiceDraft**
> \Swagger\Client\Model\SalesDocumentAttachmentApi salesDocumentAttachmentsV2PostCustomerInvoiceDraft($body)

Create a sales document attached to a customer invoice draft.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesDocumentAttachmentsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SalesDocumentAttachmentUploadApi(); // \Swagger\Client\Model\SalesDocumentAttachmentUploadApi | 

try {
    $result = $apiInstance->salesDocumentAttachmentsV2PostCustomerInvoiceDraft($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesDocumentAttachmentsV2Api->salesDocumentAttachmentsV2PostCustomerInvoiceDraft: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SalesDocumentAttachmentUploadApi**](../Model/SalesDocumentAttachmentUploadApi.md)|  |

### Return type

[**\Swagger\Client\Model\SalesDocumentAttachmentApi**](../Model/SalesDocumentAttachmentApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesDocumentAttachmentsV2PostCustomerInvoiceDraft**
> \Swagger\Client\Model\SalesDocumentAttachmentApi salesDocumentAttachmentsV2PostCustomerInvoiceDraft($content_type, $file_name, $dockument_id, $data, $url)

Create a sales document attached to a customer invoice draft.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesDocumentAttachmentsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = "content_type_example"; // string | 
$file_name = "file_name_example"; // string | 
$dockument_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$data = "data_example"; // string | 
$url = "url_example"; // string | 

try {
    $result = $apiInstance->salesDocumentAttachmentsV2PostCustomerInvoiceDraft($content_type, $file_name, $dockument_id, $data, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesDocumentAttachmentsV2Api->salesDocumentAttachmentsV2PostCustomerInvoiceDraft: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  |
 **file_name** | **string**|  |
 **dockument_id** | [**string**](../Model/.md)|  |
 **data** | **string**|  |
 **url** | **string**|  |

### Return type

[**\Swagger\Client\Model\SalesDocumentAttachmentApi**](../Model/SalesDocumentAttachmentApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

