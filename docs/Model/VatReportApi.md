# VatReportApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**name** | **string** |  | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**document_approval_status** | **int** | 0 &#x3D; None, 1 &#x3D; Approved, 2 &#x3D; Rejected, 3 &#x3D; ReadyForApproval | [optional] 
**document_id** | **string** | Purpose: Fetch the associated document. Can be null if the vat report does not have an associated file created. Use GET /v2/documents/{id} | [optional] 
**created_utc** | [**\DateTime**](\DateTime.md) |  | [optional] 
**is_regretted** | **bool** | Indicates whether the vat report was undone | [optional] 
**regretted_by_user_id** | **string** | Purpose: If the vat report was undone this indicates the user id that did the action. Can be null if not undone. Use GET /v2/users | [optional] 
**regretted_date** | [**\DateTime**](\DateTime.md) | Purpose: If the vat report was undone this indicates the date of the action. Can be null if not undone | [optional] 
**modified_utc** | [**\DateTime**](\DateTime.md) |  | [optional] 
**sent_for_approval_by_user_id** | **string** | Purpose: If the vat report was sent for approval this indicates the user id that did the action. Can be null if not sent for approval. Use GET /v2/users | [optional] 
**voucher_id** | **string** | Purpose: Fetch the associated voucher. Can be null if there is no associated voucher. Use GET /v2/vouchers/{fiscalyearId}/{voucherId} | [optional] 
**total_amount** | **double** | Predicted vat amount to pay or be refunded | [optional] 
**approval_events_history** | [**\Swagger\Client\Model\DocumentApprovalEventApi[]**](DocumentApprovalEventApi.md) | The history of approval events of the vat report. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

