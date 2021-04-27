# VoucherDraftApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Purpose: Unique Id provided by eAccounting | [optional] 
**voucher_date** | [**\DateTime**](\DateTime.md) | Format: yyyy-mm-dd | 
**voucher_text** | **string** | Description. Max length: 1000 characters | [optional] 
**number_series** | **string** | Purpose: Returns the number series. If not set, will be used the default number series. | [optional] 
**created_utc** | [**\DateTime**](\DateTime.md) |  | [optional] 
**modified_utc** | [**\DateTime**](\DateTime.md) |  | [optional] 
**rows** | [**\Swagger\Client\Model\VoucherDraftRowApi[]**](VoucherDraftRowApi.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

