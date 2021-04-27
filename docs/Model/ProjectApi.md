# ProjectApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Purpose: Unique Id provided by eAccounting | [optional] 
**number** | **string** | Max length: 9 characters | 
**name** | **string** | Max length: 50 characters | 
**start_date** | [**\DateTime**](\DateTime.md) |  | 
**end_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**customer_id** | **string** | Source: Get from /v2/customers | [optional] 
**customer_name** | **string** | Purpose: CustomerName depending on CustomerId | [optional] 
**notes** | **string** | Max length: 500 characters | [optional] 
**status** | **int** | 1 &#x3D; Ongoing, 2 &#x3D; Finished | [optional] 
**modified_utc** | [**\DateTime**](\DateTime.md) | Purpose: Is automatically set | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

