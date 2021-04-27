# Swagger\Client\MessageThreadsV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**messageThreadsV2Get**](MessageThreadsV2Api.md#messagethreadsv2get) | **GET** /v2/messagethreads/{messageThreadId} | Retrives a message thread.
[**messageThreadsV2GetMessages**](MessageThreadsV2Api.md#messagethreadsv2getmessages) | **GET** /v2/messagethreads/{messageThreadId}/messages | Retrives the messages of a message thread.
[**messageThreadsV2GetMessages_0**](MessageThreadsV2Api.md#messagethreadsv2getmessages_0) | **GET** /v2/messagethreads/messages | Gets all the messages of the threads.
[**messageThreadsV2Get_0**](MessageThreadsV2Api.md#messagethreadsv2get_0) | **GET** /v2/messagethreads | Gets all messages threads.
[**messageThreadsV2MarkThread**](MessageThreadsV2Api.md#messagethreadsv2markthread) | **PUT** /v2/messagethreads/{messageThreadId} | Marks a specific message thread.
[**messageThreadsV2Post**](MessageThreadsV2Api.md#messagethreadsv2post) | **POST** /v2/messagethreads | Create a new message thread.
[**messageThreadsV2ReplyToMessage**](MessageThreadsV2Api.md#messagethreadsv2replytomessage) | **POST** /v2/messagethreads/{messageThreadId} | Replies to a message thread.

# **messageThreadsV2Get**
> \Swagger\Client\Model\MessageThreadApi messageThreadsV2Get($message_thread_id)

Retrives a message thread.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MessageThreadsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$message_thread_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->messageThreadsV2Get($message_thread_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageThreadsV2Api->messageThreadsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_thread_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\MessageThreadApi**](../Model/MessageThreadApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageThreadsV2GetMessages**
> \Swagger\Client\Model\MessageApi messageThreadsV2GetMessages($message_thread_id)

Retrives the messages of a message thread.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MessageThreadsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$message_thread_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->messageThreadsV2GetMessages($message_thread_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageThreadsV2Api->messageThreadsV2GetMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_thread_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\MessageApi**](../Model/MessageApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageThreadsV2GetMessages_0**
> \Swagger\Client\Model\MessageApi messageThreadsV2GetMessages_0()

Gets all the messages of the threads.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MessageThreadsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->messageThreadsV2GetMessages_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageThreadsV2Api->messageThreadsV2GetMessages_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\MessageApi**](../Model/MessageApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageThreadsV2Get_0**
> \Swagger\Client\Model\MessageThreadApi messageThreadsV2Get_0($exclude_closed)

Gets all messages threads.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MessageThreadsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$exclude_closed = true; // bool | 

try {
    $result = $apiInstance->messageThreadsV2Get_0($exclude_closed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageThreadsV2Api->messageThreadsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exclude_closed** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\MessageThreadApi**](../Model/MessageThreadApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageThreadsV2MarkThread**
> \Swagger\Client\Model\MessageThreadApi messageThreadsV2MarkThread($body, $message_thread_id)

Marks a specific message thread.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MessageThreadsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MessageStatusApi(); // \Swagger\Client\Model\MessageStatusApi | 
$message_thread_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->messageThreadsV2MarkThread($body, $message_thread_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageThreadsV2Api->messageThreadsV2MarkThread: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MessageStatusApi**](../Model/MessageStatusApi.md)|  |
 **message_thread_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\MessageThreadApi**](../Model/MessageThreadApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageThreadsV2MarkThread**
> \Swagger\Client\Model\MessageThreadApi messageThreadsV2MarkThread($status, $message_thread_id)

Marks a specific message thread.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MessageThreadsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status = 56; // int | 
$message_thread_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->messageThreadsV2MarkThread($status, $message_thread_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageThreadsV2Api->messageThreadsV2MarkThread: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **int**|  |
 **message_thread_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\MessageThreadApi**](../Model/MessageThreadApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageThreadsV2Post**
> \Swagger\Client\Model\MessageThreadApi messageThreadsV2Post($body)

Create a new message thread.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MessageThreadsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MessageToPostApi(); // \Swagger\Client\Model\MessageToPostApi | 

try {
    $result = $apiInstance->messageThreadsV2Post($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageThreadsV2Api->messageThreadsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MessageToPostApi**](../Model/MessageToPostApi.md)|  |

### Return type

[**\Swagger\Client\Model\MessageThreadApi**](../Model/MessageThreadApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageThreadsV2Post**
> \Swagger\Client\Model\MessageThreadApi messageThreadsV2Post($message, $subject, $document_type, $document_id, $message_receivers)

Create a new message thread.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MessageThreadsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$message = "message_example"; // string | 
$subject = "subject_example"; // string | 
$document_type = 56; // int | 
$document_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$message_receivers = array(new \Swagger\Client\Model\MessageReceiverApi()); // \Swagger\Client\Model\MessageReceiverApi[] | 

try {
    $result = $apiInstance->messageThreadsV2Post($message, $subject, $document_type, $document_id, $message_receivers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageThreadsV2Api->messageThreadsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message** | **string**|  |
 **subject** | **string**|  |
 **document_type** | **int**|  |
 **document_id** | [**string**](../Model/.md)|  |
 **message_receivers** | [**\Swagger\Client\Model\MessageReceiverApi[]**](../Model/\Swagger\Client\Model\MessageReceiverApi.md)|  |

### Return type

[**\Swagger\Client\Model\MessageThreadApi**](../Model/MessageThreadApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageThreadsV2ReplyToMessage**
> \Swagger\Client\Model\MessageApi messageThreadsV2ReplyToMessage($body, $message_thread_id)

Replies to a message thread.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MessageThreadsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MessageApi(); // \Swagger\Client\Model\MessageApi | 
$message_thread_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->messageThreadsV2ReplyToMessage($body, $message_thread_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageThreadsV2Api->messageThreadsV2ReplyToMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MessageApi**](../Model/MessageApi.md)|  |
 **message_thread_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\MessageApi**](../Model/MessageApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageThreadsV2ReplyToMessage**
> \Swagger\Client\Model\MessageApi messageThreadsV2ReplyToMessage($id, $text, $modified_utc, $created_utc, $created_by_user_id, $modified_by_user_id, $message_thread_id2, $message_thread_id)

Replies to a message thread.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MessageThreadsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$text = "text_example"; // string | 
$modified_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$created_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$created_by_user_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$modified_by_user_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$message_thread_id2 = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$message_thread_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->messageThreadsV2ReplyToMessage($id, $text, $modified_utc, $created_utc, $created_by_user_id, $modified_by_user_id, $message_thread_id2, $message_thread_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageThreadsV2Api->messageThreadsV2ReplyToMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **text** | **string**|  |
 **modified_utc** | **\DateTime**|  |
 **created_utc** | **\DateTime**|  |
 **created_by_user_id** | [**string**](../Model/.md)|  |
 **modified_by_user_id** | [**string**](../Model/.md)|  |
 **message_thread_id2** | [**string**](../Model/.md)|  |
 **message_thread_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\MessageApi**](../Model/MessageApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

