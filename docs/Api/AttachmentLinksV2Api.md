# Swagger\Client\AttachmentLinksV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachmentLinksV2Delete**](AttachmentLinksV2Api.md#attachmentlinksv2delete) | **DELETE** /v2/attachmentlinks/{attachmentId} | Delete the link between an existing document and its attachment.
[**attachmentLinksV2Post**](AttachmentLinksV2Api.md#attachmentlinksv2post) | **POST** /v2/attachmentlinks | Create new links between an existing document and a set of attachments.

# **attachmentLinksV2Delete**
> object attachmentLinksV2Delete($attachment_id)

Delete the link between an existing document and its attachment.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AttachmentLinksV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attachment_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->attachmentLinksV2Delete($attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentLinksV2Api->attachmentLinksV2Delete: ', $e->getMessage(), PHP_EOL;
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

# **attachmentLinksV2Post**
> \Swagger\Client\Model\AttachmentLinkApi attachmentLinksV2Post($body)

Create new links between an existing document and a set of attachments.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AttachmentLinksV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\AttachmentLinkApi(); // \Swagger\Client\Model\AttachmentLinkApi | 

try {
    $result = $apiInstance->attachmentLinksV2Post($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentLinksV2Api->attachmentLinksV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AttachmentLinkApi**](../Model/AttachmentLinkApi.md)|  |

### Return type

[**\Swagger\Client\Model\AttachmentLinkApi**](../Model/AttachmentLinkApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachmentLinksV2Post**
> \Swagger\Client\Model\AttachmentLinkApi attachmentLinksV2Post($document_id, $document_type, $attachment_ids)

Create new links between an existing document and a set of attachments.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AttachmentLinksV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$document_type = 56; // int | 
$attachment_ids = array("attachment_ids_example"); // string[] | 

try {
    $result = $apiInstance->attachmentLinksV2Post($document_id, $document_type, $attachment_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentLinksV2Api->attachmentLinksV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_id** | [**string**](../Model/.md)|  |
 **document_type** | **int**|  |
 **attachment_ids** | [**string[]**](../Model/string.md)|  |

### Return type

[**\Swagger\Client\Model\AttachmentLinkApi**](../Model/AttachmentLinkApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

