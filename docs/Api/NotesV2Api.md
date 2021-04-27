# Swagger\Client\NotesV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**notesV2Get**](NotesV2Api.md#notesv2get) | **GET** /v2/notes | Get all notes.
[**notesV2Get_0**](NotesV2Api.md#notesv2get_0) | **GET** /v2/notes/{noteId} | Get a specific note.
[**notesV2Post**](NotesV2Api.md#notesv2post) | **POST** /v2/notes | Create a new note.
[**notesV2Put**](NotesV2Api.md#notesv2put) | **PUT** /v2/notes/{noteId} | Updates a note.

# **notesV2Get**
> \Swagger\Client\Model\NoteApi notesV2Get()

Get all notes.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->notesV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesV2Api->notesV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\NoteApi**](../Model/NoteApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notesV2Get_0**
> \Swagger\Client\Model\NoteApi notesV2Get_0($note_id)

Get a specific note.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$note_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->notesV2Get_0($note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesV2Api->notesV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **note_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\NoteApi**](../Model/NoteApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notesV2Post**
> \Swagger\Client\Model\NoteApi notesV2Post($body)

Create a new note.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NoteApi(); // \Swagger\Client\Model\NoteApi | 

try {
    $result = $apiInstance->notesV2Post($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesV2Api->notesV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NoteApi**](../Model/NoteApi.md)|  |

### Return type

[**\Swagger\Client\Model\NoteApi**](../Model/NoteApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notesV2Post**
> \Swagger\Client\Model\NoteApi notesV2Post($id, $user_id, $attached_to, $text, $subject, $document_type, $created_utc, $modified_utc, $is_done)

Create a new note.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$user_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$attached_to = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$text = "text_example"; // string | 
$subject = "subject_example"; // string | 
$document_type = 56; // int | 
$created_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$modified_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$is_done = true; // bool | 

try {
    $result = $apiInstance->notesV2Post($id, $user_id, $attached_to, $text, $subject, $document_type, $created_utc, $modified_utc, $is_done);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesV2Api->notesV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **user_id** | [**string**](../Model/.md)|  |
 **attached_to** | [**string**](../Model/.md)|  |
 **text** | **string**|  |
 **subject** | **string**|  |
 **document_type** | **int**|  |
 **created_utc** | **\DateTime**|  |
 **modified_utc** | **\DateTime**|  |
 **is_done** | **bool**|  |

### Return type

[**\Swagger\Client\Model\NoteApi**](../Model/NoteApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notesV2Put**
> \Swagger\Client\Model\NoteApi notesV2Put($body, $note_id)

Updates a note.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NoteApi(); // \Swagger\Client\Model\NoteApi | 
$note_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->notesV2Put($body, $note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesV2Api->notesV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NoteApi**](../Model/NoteApi.md)|  |
 **note_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\NoteApi**](../Model/NoteApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notesV2Put**
> \Swagger\Client\Model\NoteApi notesV2Put($id, $user_id, $attached_to, $text, $subject, $document_type, $created_utc, $modified_utc, $is_done, $note_id)

Updates a note.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$user_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$attached_to = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$text = "text_example"; // string | 
$subject = "subject_example"; // string | 
$document_type = 56; // int | 
$created_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$modified_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$is_done = true; // bool | 
$note_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->notesV2Put($id, $user_id, $attached_to, $text, $subject, $document_type, $created_utc, $modified_utc, $is_done, $note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesV2Api->notesV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **user_id** | [**string**](../Model/.md)|  |
 **attached_to** | [**string**](../Model/.md)|  |
 **text** | **string**|  |
 **subject** | **string**|  |
 **document_type** | **int**|  |
 **created_utc** | **\DateTime**|  |
 **modified_utc** | **\DateTime**|  |
 **is_done** | **bool**|  |
 **note_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\NoteApi**](../Model/NoteApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

