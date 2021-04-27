# ArticleApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Purpose: Unique Id provided by eAccounting | [optional] 
**is_active** | **bool** |  | 
**number** | **string** | Max length: 40 characters | 
**name** | **string** | Max length: 50 characters | 
**name_english** | **string** | Max length: 50 characters | [optional] 
**net_price** | **double** | Format: Max 2 decimals | [optional] 
**gross_price** | **double** | Format: Max 2 decimals | [optional] 
**coding_id** | **string** | Source: Get from /v2/articleaccountcodings | 
**coding_name** | **string** |  | [optional] 
**unit_id** | **string** | Source: Get from /v2/units | 
**unit_name** | **string** | Purpose: Returns the unit name entered from UnitId | [optional] 
**unit_abbreviation** | **string** | Purpose: Returns the unit abbreviation entered from UnitId | [optional] 
**stock_balance** | **double** | Default: 0.   Purpose: Sets the stock balance for this article  When stock module is active, this is read only | [optional] 
**stock_balance_manually_changed_utc** | [**\DateTime**](\DateTime.md) | Purpose: Set when the stock balance is changed manually | [optional] 
**stock_balance_reserved** | **double** | Purpose: Returns the reserved stock balance for this article | [optional] 
**stock_balance_available** | **double** | Purpose: Returns the available stock balance for this article | [optional] 
**created_utc** | [**\DateTime**](\DateTime.md) | Purpose: Returns the date and time when the article was created | [optional] 
**changed_utc** | [**\DateTime**](\DateTime.md) | Purpose: Returns the last date and time from when a change was made on the article | [optional] 
**house_work_type** | **int** | 0 &#x3D; None, 1 &#x3D; RotConstructionWork , 2 &#x3D; RotElectricalWork , 3 &#x3D; RotGlassSheetMetalWork , 4 &#x3D; RotGroundWork , 5 &#x3D; RotBrickWork , 6 &#x3D; RotPaintDecorateWork , 7 &#x3D; RotPlumbWork   9 &#x3D; RutCleanJobWork , 10 &#x3D; RutCareClothTextile , 11 &#x3D; RutCook , 12 &#x3D; RutSnowRemove , 13 &#x3D; RutGarden , 14 &#x3D; RutBabySitt , 15 &#x3D; RutOtherCare , 17 &#x3D; RutHouseWorkHelp     18 &#x3D; RutRemovalServices , 19 &#x3D; RutITServices , 20 &#x3D; RotHeatPump , 21 &#x3D; RotHeatPump2 , 22 &#x3D; RutHomeAppliances | [optional] 
**purchase_price** | **double** |  | [optional] 
**purchase_price_manually_changed_utc** | [**\DateTime**](\DateTime.md) | Purpose: Set when the purchase price is changed manually | [optional] 
**send_to_webshop** | **bool** | Purpose: If true, will send article to VismaWebShop (If company has the integration).  Default: True | [optional] 
**uses_moss** | **bool** | This property can be set to true if the moss setting is checked in company settings and the sales category for the article is Service | [optional] 
**article_labels** | [**\Swagger\Client\Model\ArticleLabelApi[]**](ArticleLabelApi.md) |  | [optional] 
**is_stock** | **bool** | Article can be stock article if stock module is activated and sales category for the article Goods type | [optional] 
**stock_location_reference** | **string** | Article stock location reference | [optional] 
**freight_costs** | **double** | Freight costs per article unit | [optional] 
**freight_costs_manually_changed_utc** | [**\DateTime**](\DateTime.md) | Purpose: Set when the freight costs is changed manually | [optional] 
**update_stock_prices** | **bool** | Purpose: Update article purchase price and freight costs when creating manual stock adjustment | [optional] 
**barcodes** | [**\Swagger\Client\Model\ArticleBarcodeApi[]**](ArticleBarcodeApi.md) | Article barcode (currently only one BarcodeType&#x3D;Default) | [optional] 
**stock_value** | **double** | Total value of articles currently in stock | [optional] 
**green_technology_type** | **int** | Type of green technology on the article, can be :   None &#x3D; 0,  SolarCellInstallation &#x3D; 1,  ElectricEnergyStorageInstallation &#x3D; 2,  ElectricVehicleChargingPointInstallation &#x3D; 3,  Default value is 0. Not setting it has the same behavior as setting it to None | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

