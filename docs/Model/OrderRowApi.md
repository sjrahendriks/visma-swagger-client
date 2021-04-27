# OrderRowApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line_number** | **int** |  | 
**delivered_quantity** | **double** | Format: 2 decimals | [optional] 
**article_id** | **string** | Can be null if the row is a text row | [optional] 
**article_number** | **string** | Max length: 40 characters | [optional] 
**is_text_row** | **bool** |  | 
**text** | **string** | Max length: 2000 characters  Default: For non text rows, default value will be the article&#x27;s name | [optional] 
**unit_price** | **double** | Format: 2 decimals | [optional] 
**discount_percentage** | **double** | Format: 4 decimals | [optional] 
**quantity** | **double** | Format: 4 decimals | [optional] 
**work_cost_type** | **int** | None &#x3D; 0, RotConstructionWork &#x3D; 1, RotElectricalWork &#x3D; 2, RotGlassSheetMetalWork &#x3D; 3, RotGroundWork &#x3D; 4, RotBrickWork &#x3D; 5, RotPaintDecorateWork &#x3D; 6, RotPlumbWork &#x3D; 7  RutCleanJobWork &#x3D; 9, RutCareClothTextile &#x3D; 10, RutCook &#x3D; 11, RutSnowRemove &#x3D; 12, RutGarden &#x3D; 13, RutBabySitt &#x3D; 14, RutOtherCare &#x3D; 15, RutHouseWorkHelp &#x3D; 17  RutRemovalServices &#x3D; 18, RutITServices &#x3D; 19, RotHeatPump &#x3D; 20, RotHeatPump2 &#x3D; 21, RutHomeAppliances &#x3D; 22 | [optional] 
**is_work_cost** | **bool** |  | 
**eligible_for_reverse_charge_on_vat** | **bool** |  | 
**cost_center_item_id1** | **string** | Source: Get from /v2/costcenters | [optional] 
**cost_center_item_id2** | **string** | Source: Get from /v2/costcenters | [optional] 
**cost_center_item_id3** | **string** | Source: Get from /v2/costcenters | [optional] 
**id** | **string** |  | [optional] 
**project_id** | **string** |  | [optional] 
**green_technology_type** | **int** | Type of green technology on the order row, can be:   None &#x3D; 0,  SolarCellInstallation &#x3D; 1,  ElectricEnergyStorageInstallation &#x3D; 2,  ElectricVehicleChargingPointInstallation &#x3D; 3,  Default value is 0. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

