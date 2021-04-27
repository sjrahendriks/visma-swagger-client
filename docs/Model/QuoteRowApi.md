# QuoteRowApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**article_id** | **string** | Source: Get from /v2/articles | [optional] 
**text** | **string** | Max length: 2000 characters  Default: The selected article&#x27;s name | [optional] 
**unit_price** | **double** | Format: 2 decimals | [optional] 
**discount_percentage** | **double** | Format: 4 decimals | [optional] 
**quantity** | **double** | Format: 4 decimals | [optional] 
**work_cost_type** | **int** | 0 &#x3D; None, 1 &#x3D; RotConstructionWork , 2 &#x3D; RotElectricalWork , 3 &#x3D; RotGlassSheetMetalWork , 4 &#x3D; RotGroundWork , 5 &#x3D; RotBrickWork , 6 &#x3D; RotPaintDecorateWork , 7 &#x3D; RotPlumbWork   9 &#x3D; RutCleanJobWork , 10 &#x3D; RutCareClothTextile , 11 &#x3D; RutCook , 12 &#x3D; RutSnowRemove , 13 &#x3D; RutGarden , 14 &#x3D; RutBabySitt , 15 &#x3D; RutOtherCare , 17 &#x3D; RutHouseWorkHelp     18 &#x3D; RutRemovalServices , 19 &#x3D; RutITServices , 20 &#x3D; RotHeatPump , 21 &#x3D; RotHeatPump2 , 22 &#x3D; RutHomeAppliances | [optional] 
**is_work_cost** | **bool** |  | [optional] 
**work_hours** | **double** |  | [optional] 
**material_costs** | **double** |  | [optional] 
**is_vat_free** | **bool** |  | [optional] 
**line_number** | **int** |  | [optional] 
**cost_center_item_id1** | **string** | Source: Get from /v2/costcenters | [optional] 
**cost_center_item_id2** | **string** | Source: Get from /v2/costcenters | [optional] 
**cost_center_item_id3** | **string** | Source: Get from /v2/costcenters | [optional] 
**project_id** | **string** | Source: Get from /v2/projects | [optional] 
**is_text_row** | **bool** |  | [optional] 
**article_number** | **string** |  | [optional] 
**green_technology_type** | **int** | Type of green technology on the quote row, can be :   None &#x3D; 0,  SolarCellInstallation &#x3D; 1,  ElectricEnergyStorageInstallation &#x3D; 2,  ElectricVehicleChargingPointInstallation &#x3D; 3,  Default value is 0. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

