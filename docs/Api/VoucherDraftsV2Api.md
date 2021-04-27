# Swagger\Client\VoucherDraftsV2Api

All URIs are relative to *https://eaccountingapi.vismaonline.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**voucherDraftsV2Convert**](VoucherDraftsV2Api.md#voucherdraftsv2convert) | **POST** /v2/voucherdrafts/{voucherDraftId}/convert | Converts a VoucherDraft to a Voucher.
[**voucherDraftsV2Delete**](VoucherDraftsV2Api.md#voucherdraftsv2delete) | **DELETE** /v2/voucherdrafts/{voucherDraftId} | Delete a voucher draft.
[**voucherDraftsV2Get**](VoucherDraftsV2Api.md#voucherdraftsv2get) | **GET** /v2/voucherdrafts | Get all vouchers drafts.
[**voucherDraftsV2Get_0**](VoucherDraftsV2Api.md#voucherdraftsv2get_0) | **GET** /v2/voucherdrafts/{voucherDraftId} | Gets a voucher draft by id.
[**voucherDraftsV2Post**](VoucherDraftsV2Api.md#voucherdraftsv2post) | **POST** /v2/voucherdrafts | Create a single voucher draft.
[**voucherDraftsV2Put**](VoucherDraftsV2Api.md#voucherdraftsv2put) | **PUT** /v2/voucherdrafts/{voucherDraftId} | Replace the data in a voucher draft.

# **voucherDraftsV2Convert**
> \Swagger\Client\Model\VoucherApi voucherDraftsV2Convert($voucher_draft_id)

Converts a VoucherDraft to a Voucher.

<p>Requires any of the following scopes: <br><b>ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VoucherDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$voucher_draft_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The Voucher Draft Id.

try {
    $result = $apiInstance->voucherDraftsV2Convert($voucher_draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherDraftsV2Api->voucherDraftsV2Convert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucher_draft_id** | [**string**](../Model/.md)| The Voucher Draft Id. |

### Return type

[**\Swagger\Client\Model\VoucherApi**](../Model/VoucherApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherDraftsV2Delete**
> object voucherDraftsV2Delete($voucher_draft_id)

Delete a voucher draft.

<p>Requires any of the following scopes: <br><b>ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VoucherDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$voucher_draft_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->voucherDraftsV2Delete($voucher_draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherDraftsV2Api->voucherDraftsV2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucher_draft_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherDraftsV2Get**
> \Swagger\Client\Model\PaginatedResponseVoucherDraftApi voucherDraftsV2Get()

Get all vouchers drafts.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VoucherDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->voucherDraftsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherDraftsV2Api->voucherDraftsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaginatedResponseVoucherDraftApi**](../Model/PaginatedResponseVoucherDraftApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherDraftsV2Get_0**
> \Swagger\Client\Model\VoucherDraftApi voucherDraftsV2Get_0($voucher_draft_id)

Gets a voucher draft by id.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VoucherDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$voucher_draft_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->voucherDraftsV2Get_0($voucher_draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherDraftsV2Api->voucherDraftsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucher_draft_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\VoucherDraftApi**](../Model/VoucherDraftApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherDraftsV2Post**
> \Swagger\Client\Model\VoucherDraftApi voucherDraftsV2Post($body, $amount_includes_vat)

Create a single voucher draft.

<p>Requires any of the following scopes: <br><b>ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VoucherDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\VoucherDraftApi(); // \Swagger\Client\Model\VoucherDraftApi | 
$amount_includes_vat = true; // bool | Default value: false. If true, the amounts are used as including VAT when draft is created.

try {
    $result = $apiInstance->voucherDraftsV2Post($body, $amount_includes_vat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherDraftsV2Api->voucherDraftsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\VoucherDraftApi**](../Model/VoucherDraftApi.md)|  |
 **amount_includes_vat** | **bool**| Default value: false. If true, the amounts are used as including VAT when draft is created. | [optional]

### Return type

[**\Swagger\Client\Model\VoucherDraftApi**](../Model/VoucherDraftApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherDraftsV2Post**
> \Swagger\Client\Model\VoucherDraftApi voucherDraftsV2Post($id, $voucher_date, $voucher_text, $number_series, $created_utc, $modified_utc, $rows, $amount_includes_vat)

Create a single voucher draft.

<p>Requires any of the following scopes: <br><b>ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VoucherDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$voucher_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$voucher_text = "voucher_text_example"; // string | 
$number_series = "number_series_example"; // string | 
$created_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$modified_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$rows = array(new \Swagger\Client\Model\VoucherDraftRowApi()); // \Swagger\Client\Model\VoucherDraftRowApi[] | 
$amount_includes_vat = true; // bool | Default value: false. If true, the amounts are used as including VAT when draft is created.

try {
    $result = $apiInstance->voucherDraftsV2Post($id, $voucher_date, $voucher_text, $number_series, $created_utc, $modified_utc, $rows, $amount_includes_vat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherDraftsV2Api->voucherDraftsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **voucher_date** | **\DateTime**|  |
 **voucher_text** | **string**|  |
 **number_series** | **string**|  |
 **created_utc** | **\DateTime**|  |
 **modified_utc** | **\DateTime**|  |
 **rows** | [**\Swagger\Client\Model\VoucherDraftRowApi[]**](../Model/\Swagger\Client\Model\VoucherDraftRowApi.md)|  |
 **amount_includes_vat** | **bool**| Default value: false. If true, the amounts are used as including VAT when draft is created. | [optional]

### Return type

[**\Swagger\Client\Model\VoucherDraftApi**](../Model/VoucherDraftApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherDraftsV2Put**
> \Swagger\Client\Model\VoucherDraftApi voucherDraftsV2Put($body, $voucher_draft_id)

Replace the data in a voucher draft.

<p>Requires any of the following scopes: <br><b>ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VoucherDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\VoucherDraftApi(); // \Swagger\Client\Model\VoucherDraftApi | 
$voucher_draft_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->voucherDraftsV2Put($body, $voucher_draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherDraftsV2Api->voucherDraftsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\VoucherDraftApi**](../Model/VoucherDraftApi.md)|  |
 **voucher_draft_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\VoucherDraftApi**](../Model/VoucherDraftApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherDraftsV2Put**
> \Swagger\Client\Model\VoucherDraftApi voucherDraftsV2Put($id, $voucher_date, $voucher_text, $number_series, $created_utc, $modified_utc, $rows, $voucher_draft_id)

Replace the data in a voucher draft.

<p>Requires any of the following scopes: <br><b>ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VoucherDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$voucher_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$voucher_text = "voucher_text_example"; // string | 
$number_series = "number_series_example"; // string | 
$created_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$modified_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$rows = array(new \Swagger\Client\Model\VoucherDraftRowApi()); // \Swagger\Client\Model\VoucherDraftRowApi[] | 
$voucher_draft_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->voucherDraftsV2Put($id, $voucher_date, $voucher_text, $number_series, $created_utc, $modified_utc, $rows, $voucher_draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherDraftsV2Api->voucherDraftsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **voucher_date** | **\DateTime**|  |
 **voucher_text** | **string**|  |
 **number_series** | **string**|  |
 **created_utc** | **\DateTime**|  |
 **modified_utc** | **\DateTime**|  |
 **rows** | [**\Swagger\Client\Model\VoucherDraftRowApi[]**](../Model/\Swagger\Client\Model\VoucherDraftRowApi.md)|  |
 **voucher_draft_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\VoucherDraftApi**](../Model/VoucherDraftApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

