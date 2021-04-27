# CustomerInvoiceDraftRowApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Purpose: This property will be updated on every change on the customer invoice draft | [optional] 
**line_number** | **int** | Default: Automatic calculation based on the order of the row in the JSON. | [optional] 
**article_id** | **string** | Source: Get from /v2/articles. Required if IsTextRow is false | [optional] 
**article_number** | **string** | Purpose: Returns the article number from the entered ArticleId | [optional] 
**is_text_row** | **bool** |  | 
**text** | **string** | Max length: 2000. Sets the article name | [optional] 
**unit_price** | **double** | Format: 2 decimals allowed if the customer is domestic or 4 decimals if foreign.  The default behavior when unit price is zero is specified by setting ReplaceUnitPriceWhenZero on the customer invoice draft. | [optional] 
**discount_percentage** | **double** | Format: 4 decimals allowed | [optional] 
**quantity** | **double** | Format: 2 decimals | [optional] 
**work_cost_type** | **int** |  | [optional] 
**is_work_cost** | **bool** |  | [optional] 
**work_hours** | **double** |  | [optional] 
**material_costs** | **double** |  | [optional] 
**reversed_construction_services_vat_free** | **bool** |  | 
**cost_center_item_id1** | **string** | Source: Get from /v2/costcenteritems | [optional] 
**cost_center_item_id2** | **string** | Source: Get from /v2/costcenteritems | [optional] 
**cost_center_item_id3** | **string** | Source: Get from /v2/costcenteritems | [optional] 
**unit_abbreviation** | **string** |  | [optional] 
**vat_rate_id** | **string** | Source: Get from /v2/articleaccountcodings | [optional] 
**unit_name** | **string** |  | [optional] 
**project_id** | **string** |  | [optional] 
**green_technology_type** | **int** | Type of green technology on the quote row, can be :   None &#x3D; 0,  SolarCellInstallation &#x3D; 1,  ElectricEnergyStorageInstallation &#x3D; 2,  ElectricVehicleChargingPointInstallation &#x3D; 3,  Default value is 0. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

