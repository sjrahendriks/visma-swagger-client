# ApprovalApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**document_approval_status** | **int** | 1 &#x3D; Approved, 2 &#x3D; Rejected, 3 &#x3D; ReadyForApproval | 
**rejection_message** | **string** | Max length: 200 characters. Purpose: The message sent to users when rejecting a document. Empty if DocumentApprovalStatus is not 2 &#x3D; Rejected | [optional] 
**rejection_message_receivers** | **string[]** | Purpose: The recipients of the rejection message. Empty if DocumentApprovalStatus is not 2 &#x3D; Rejected. List of user ids. Use GET /v2/users | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

