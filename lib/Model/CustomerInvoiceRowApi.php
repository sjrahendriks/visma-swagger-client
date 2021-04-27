<?php
/**
 * CustomerInvoiceRowApi
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Visma eAccounting API V2
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * CustomerInvoiceRowApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerInvoiceRowApi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerInvoiceRowApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'article_number' => 'string',
'article_id' => 'string',
'amount_no_vat' => 'double',
'percent_vat' => 'double',
'line_number' => 'int',
'is_text_row' => 'bool',
'text' => 'string',
'unit_price' => 'double',
'unit_abbreviation' => 'string',
'unit_abbreviation_english' => 'string',
'discount_percentage' => 'double',
'quantity' => 'double',
'is_work_cost' => 'bool',
'is_vat_free' => 'bool',
'cost_center_item_id1' => 'string',
'cost_center_item_id2' => 'string',
'cost_center_item_id3' => 'string',
'unit_id' => 'string',
'project_id' => 'string',
'work_cost_type' => 'int',
'work_hours' => 'double',
'material_costs' => 'double',
'green_technology_type' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'article_number' => null,
'article_id' => 'uuid',
'amount_no_vat' => 'double',
'percent_vat' => 'double',
'line_number' => 'int32',
'is_text_row' => null,
'text' => null,
'unit_price' => 'double',
'unit_abbreviation' => null,
'unit_abbreviation_english' => null,
'discount_percentage' => 'double',
'quantity' => 'double',
'is_work_cost' => null,
'is_vat_free' => null,
'cost_center_item_id1' => 'uuid',
'cost_center_item_id2' => 'uuid',
'cost_center_item_id3' => 'uuid',
'unit_id' => 'uuid',
'project_id' => 'uuid',
'work_cost_type' => 'int32',
'work_hours' => 'double',
'material_costs' => 'double',
'green_technology_type' => 'int32'    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'Id',
'article_number' => 'ArticleNumber',
'article_id' => 'ArticleId',
'amount_no_vat' => 'AmountNoVat',
'percent_vat' => 'PercentVat',
'line_number' => 'LineNumber',
'is_text_row' => 'IsTextRow',
'text' => 'Text',
'unit_price' => 'UnitPrice',
'unit_abbreviation' => 'UnitAbbreviation',
'unit_abbreviation_english' => 'UnitAbbreviationEnglish',
'discount_percentage' => 'DiscountPercentage',
'quantity' => 'Quantity',
'is_work_cost' => 'IsWorkCost',
'is_vat_free' => 'IsVatFree',
'cost_center_item_id1' => 'CostCenterItemId1',
'cost_center_item_id2' => 'CostCenterItemId2',
'cost_center_item_id3' => 'CostCenterItemId3',
'unit_id' => 'UnitId',
'project_id' => 'ProjectId',
'work_cost_type' => 'WorkCostType',
'work_hours' => 'WorkHours',
'material_costs' => 'MaterialCosts',
'green_technology_type' => 'GreenTechnologyType'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'article_number' => 'setArticleNumber',
'article_id' => 'setArticleId',
'amount_no_vat' => 'setAmountNoVat',
'percent_vat' => 'setPercentVat',
'line_number' => 'setLineNumber',
'is_text_row' => 'setIsTextRow',
'text' => 'setText',
'unit_price' => 'setUnitPrice',
'unit_abbreviation' => 'setUnitAbbreviation',
'unit_abbreviation_english' => 'setUnitAbbreviationEnglish',
'discount_percentage' => 'setDiscountPercentage',
'quantity' => 'setQuantity',
'is_work_cost' => 'setIsWorkCost',
'is_vat_free' => 'setIsVatFree',
'cost_center_item_id1' => 'setCostCenterItemId1',
'cost_center_item_id2' => 'setCostCenterItemId2',
'cost_center_item_id3' => 'setCostCenterItemId3',
'unit_id' => 'setUnitId',
'project_id' => 'setProjectId',
'work_cost_type' => 'setWorkCostType',
'work_hours' => 'setWorkHours',
'material_costs' => 'setMaterialCosts',
'green_technology_type' => 'setGreenTechnologyType'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'article_number' => 'getArticleNumber',
'article_id' => 'getArticleId',
'amount_no_vat' => 'getAmountNoVat',
'percent_vat' => 'getPercentVat',
'line_number' => 'getLineNumber',
'is_text_row' => 'getIsTextRow',
'text' => 'getText',
'unit_price' => 'getUnitPrice',
'unit_abbreviation' => 'getUnitAbbreviation',
'unit_abbreviation_english' => 'getUnitAbbreviationEnglish',
'discount_percentage' => 'getDiscountPercentage',
'quantity' => 'getQuantity',
'is_work_cost' => 'getIsWorkCost',
'is_vat_free' => 'getIsVatFree',
'cost_center_item_id1' => 'getCostCenterItemId1',
'cost_center_item_id2' => 'getCostCenterItemId2',
'cost_center_item_id3' => 'getCostCenterItemId3',
'unit_id' => 'getUnitId',
'project_id' => 'getProjectId',
'work_cost_type' => 'getWorkCostType',
'work_hours' => 'getWorkHours',
'material_costs' => 'getMaterialCosts',
'green_technology_type' => 'getGreenTechnologyType'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['article_number'] = isset($data['article_number']) ? $data['article_number'] : null;
        $this->container['article_id'] = isset($data['article_id']) ? $data['article_id'] : null;
        $this->container['amount_no_vat'] = isset($data['amount_no_vat']) ? $data['amount_no_vat'] : null;
        $this->container['percent_vat'] = isset($data['percent_vat']) ? $data['percent_vat'] : null;
        $this->container['line_number'] = isset($data['line_number']) ? $data['line_number'] : null;
        $this->container['is_text_row'] = isset($data['is_text_row']) ? $data['is_text_row'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
        $this->container['unit_abbreviation'] = isset($data['unit_abbreviation']) ? $data['unit_abbreviation'] : null;
        $this->container['unit_abbreviation_english'] = isset($data['unit_abbreviation_english']) ? $data['unit_abbreviation_english'] : null;
        $this->container['discount_percentage'] = isset($data['discount_percentage']) ? $data['discount_percentage'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['is_work_cost'] = isset($data['is_work_cost']) ? $data['is_work_cost'] : null;
        $this->container['is_vat_free'] = isset($data['is_vat_free']) ? $data['is_vat_free'] : null;
        $this->container['cost_center_item_id1'] = isset($data['cost_center_item_id1']) ? $data['cost_center_item_id1'] : null;
        $this->container['cost_center_item_id2'] = isset($data['cost_center_item_id2']) ? $data['cost_center_item_id2'] : null;
        $this->container['cost_center_item_id3'] = isset($data['cost_center_item_id3']) ? $data['cost_center_item_id3'] : null;
        $this->container['unit_id'] = isset($data['unit_id']) ? $data['unit_id'] : null;
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['work_cost_type'] = isset($data['work_cost_type']) ? $data['work_cost_type'] : null;
        $this->container['work_hours'] = isset($data['work_hours']) ? $data['work_hours'] : null;
        $this->container['material_costs'] = isset($data['material_costs']) ? $data['material_costs'] : null;
        $this->container['green_technology_type'] = isset($data['green_technology_type']) ? $data['green_technology_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets article_number
     *
     * @return string
     */
    public function getArticleNumber()
    {
        return $this->container['article_number'];
    }

    /**
     * Sets article_number
     *
     * @param string $article_number article_number
     *
     * @return $this
     */
    public function setArticleNumber($article_number)
    {
        $this->container['article_number'] = $article_number;

        return $this;
    }

    /**
     * Gets article_id
     *
     * @return string
     */
    public function getArticleId()
    {
        return $this->container['article_id'];
    }

    /**
     * Sets article_id
     *
     * @param string $article_id Purpose: Null if text row
     *
     * @return $this
     */
    public function setArticleId($article_id)
    {
        $this->container['article_id'] = $article_id;

        return $this;
    }

    /**
     * Gets amount_no_vat
     *
     * @return double
     */
    public function getAmountNoVat()
    {
        return $this->container['amount_no_vat'];
    }

    /**
     * Sets amount_no_vat
     *
     * @param double $amount_no_vat amount_no_vat
     *
     * @return $this
     */
    public function setAmountNoVat($amount_no_vat)
    {
        $this->container['amount_no_vat'] = $amount_no_vat;

        return $this;
    }

    /**
     * Gets percent_vat
     *
     * @return double
     */
    public function getPercentVat()
    {
        return $this->container['percent_vat'];
    }

    /**
     * Sets percent_vat
     *
     * @param double $percent_vat percent_vat
     *
     * @return $this
     */
    public function setPercentVat($percent_vat)
    {
        $this->container['percent_vat'] = $percent_vat;

        return $this;
    }

    /**
     * Gets line_number
     *
     * @return int
     */
    public function getLineNumber()
    {
        return $this->container['line_number'];
    }

    /**
     * Sets line_number
     *
     * @param int $line_number line_number
     *
     * @return $this
     */
    public function setLineNumber($line_number)
    {
        $this->container['line_number'] = $line_number;

        return $this;
    }

    /**
     * Gets is_text_row
     *
     * @return bool
     */
    public function getIsTextRow()
    {
        return $this->container['is_text_row'];
    }

    /**
     * Sets is_text_row
     *
     * @param bool $is_text_row is_text_row
     *
     * @return $this
     */
    public function setIsTextRow($is_text_row)
    {
        $this->container['is_text_row'] = $is_text_row;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text Default: The article's name
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return double
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param double $unit_price Format: 2 decimals allowed if the customer is domestic or 4 decimals if foreign
     *
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets unit_abbreviation
     *
     * @return string
     */
    public function getUnitAbbreviation()
    {
        return $this->container['unit_abbreviation'];
    }

    /**
     * Sets unit_abbreviation
     *
     * @param string $unit_abbreviation unit_abbreviation
     *
     * @return $this
     */
    public function setUnitAbbreviation($unit_abbreviation)
    {
        $this->container['unit_abbreviation'] = $unit_abbreviation;

        return $this;
    }

    /**
     * Gets unit_abbreviation_english
     *
     * @return string
     */
    public function getUnitAbbreviationEnglish()
    {
        return $this->container['unit_abbreviation_english'];
    }

    /**
     * Sets unit_abbreviation_english
     *
     * @param string $unit_abbreviation_english unit_abbreviation_english
     *
     * @return $this
     */
    public function setUnitAbbreviationEnglish($unit_abbreviation_english)
    {
        $this->container['unit_abbreviation_english'] = $unit_abbreviation_english;

        return $this;
    }

    /**
     * Gets discount_percentage
     *
     * @return double
     */
    public function getDiscountPercentage()
    {
        return $this->container['discount_percentage'];
    }

    /**
     * Sets discount_percentage
     *
     * @param double $discount_percentage Format: 4 decimals
     *
     * @return $this
     */
    public function setDiscountPercentage($discount_percentage)
    {
        $this->container['discount_percentage'] = $discount_percentage;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return double
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param double $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets is_work_cost
     *
     * @return bool
     */
    public function getIsWorkCost()
    {
        return $this->container['is_work_cost'];
    }

    /**
     * Sets is_work_cost
     *
     * @param bool $is_work_cost is_work_cost
     *
     * @return $this
     */
    public function setIsWorkCost($is_work_cost)
    {
        $this->container['is_work_cost'] = $is_work_cost;

        return $this;
    }

    /**
     * Gets is_vat_free
     *
     * @return bool
     */
    public function getIsVatFree()
    {
        return $this->container['is_vat_free'];
    }

    /**
     * Sets is_vat_free
     *
     * @param bool $is_vat_free is_vat_free
     *
     * @return $this
     */
    public function setIsVatFree($is_vat_free)
    {
        $this->container['is_vat_free'] = $is_vat_free;

        return $this;
    }

    /**
     * Gets cost_center_item_id1
     *
     * @return string
     */
    public function getCostCenterItemId1()
    {
        return $this->container['cost_center_item_id1'];
    }

    /**
     * Sets cost_center_item_id1
     *
     * @param string $cost_center_item_id1 cost_center_item_id1
     *
     * @return $this
     */
    public function setCostCenterItemId1($cost_center_item_id1)
    {
        $this->container['cost_center_item_id1'] = $cost_center_item_id1;

        return $this;
    }

    /**
     * Gets cost_center_item_id2
     *
     * @return string
     */
    public function getCostCenterItemId2()
    {
        return $this->container['cost_center_item_id2'];
    }

    /**
     * Sets cost_center_item_id2
     *
     * @param string $cost_center_item_id2 cost_center_item_id2
     *
     * @return $this
     */
    public function setCostCenterItemId2($cost_center_item_id2)
    {
        $this->container['cost_center_item_id2'] = $cost_center_item_id2;

        return $this;
    }

    /**
     * Gets cost_center_item_id3
     *
     * @return string
     */
    public function getCostCenterItemId3()
    {
        return $this->container['cost_center_item_id3'];
    }

    /**
     * Sets cost_center_item_id3
     *
     * @param string $cost_center_item_id3 cost_center_item_id3
     *
     * @return $this
     */
    public function setCostCenterItemId3($cost_center_item_id3)
    {
        $this->container['cost_center_item_id3'] = $cost_center_item_id3;

        return $this;
    }

    /**
     * Gets unit_id
     *
     * @return string
     */
    public function getUnitId()
    {
        return $this->container['unit_id'];
    }

    /**
     * Sets unit_id
     *
     * @param string $unit_id unit_id
     *
     * @return $this
     */
    public function setUnitId($unit_id)
    {
        $this->container['unit_id'] = $unit_id;

        return $this;
    }

    /**
     * Gets project_id
     *
     * @return string
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param string $project_id project_id
     *
     * @return $this
     */
    public function setProjectId($project_id)
    {
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets work_cost_type
     *
     * @return int
     */
    public function getWorkCostType()
    {
        return $this->container['work_cost_type'];
    }

    /**
     * Sets work_cost_type
     *
     * @param int $work_cost_type Only used for ROT/RUT invoices
     *
     * @return $this
     */
    public function setWorkCostType($work_cost_type)
    {
        $this->container['work_cost_type'] = $work_cost_type;

        return $this;
    }

    /**
     * Gets work_hours
     *
     * @return double
     */
    public function getWorkHours()
    {
        return $this->container['work_hours'];
    }

    /**
     * Sets work_hours
     *
     * @param double $work_hours Only used for ROT/RUT invoices
     *
     * @return $this
     */
    public function setWorkHours($work_hours)
    {
        $this->container['work_hours'] = $work_hours;

        return $this;
    }

    /**
     * Gets material_costs
     *
     * @return double
     */
    public function getMaterialCosts()
    {
        return $this->container['material_costs'];
    }

    /**
     * Sets material_costs
     *
     * @param double $material_costs Only used for ROT/RUT invoices
     *
     * @return $this
     */
    public function setMaterialCosts($material_costs)
    {
        $this->container['material_costs'] = $material_costs;

        return $this;
    }

    /**
     * Gets green_technology_type
     *
     * @return int
     */
    public function getGreenTechnologyType()
    {
        return $this->container['green_technology_type'];
    }

    /**
     * Sets green_technology_type
     *
     * @param int $green_technology_type Type of green technology on the quote row, can be :   None = 0,  SolarCellInstallation = 1,  ElectricEnergyStorageInstallation = 2,  ElectricVehicleChargingPointInstallation = 3,  Default value is 0.
     *
     * @return $this
     */
    public function setGreenTechnologyType($green_technology_type)
    {
        $this->container['green_technology_type'] = $green_technology_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
