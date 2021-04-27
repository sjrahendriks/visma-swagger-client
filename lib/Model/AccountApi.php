<?php
/**
 * AccountApi
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
 * AccountApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountApi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'number' => 'string',
'vat_code_id' => 'string',
'vat_code_description' => 'string',
'fiscal_year_id' => 'string',
'reference_code' => 'string',
'type' => 'int',
'type_description' => 'string',
'modified_utc' => '\DateTime',
'is_active' => 'bool',
'is_project_allowed' => 'bool',
'is_cost_center_allowed' => 'bool',
'is_blocked_for_manual_booking' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'number' => null,
'vat_code_id' => 'uuid',
'vat_code_description' => null,
'fiscal_year_id' => 'uuid',
'reference_code' => null,
'type' => 'int32',
'type_description' => null,
'modified_utc' => 'date-time',
'is_active' => null,
'is_project_allowed' => null,
'is_cost_center_allowed' => null,
'is_blocked_for_manual_booking' => null    ];

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
        'name' => 'Name',
'number' => 'Number',
'vat_code_id' => 'VatCodeId',
'vat_code_description' => 'VatCodeDescription',
'fiscal_year_id' => 'FiscalYearId',
'reference_code' => 'ReferenceCode',
'type' => 'Type',
'type_description' => 'TypeDescription',
'modified_utc' => 'ModifiedUtc',
'is_active' => 'IsActive',
'is_project_allowed' => 'IsProjectAllowed',
'is_cost_center_allowed' => 'IsCostCenterAllowed',
'is_blocked_for_manual_booking' => 'IsBlockedForManualBooking'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'number' => 'setNumber',
'vat_code_id' => 'setVatCodeId',
'vat_code_description' => 'setVatCodeDescription',
'fiscal_year_id' => 'setFiscalYearId',
'reference_code' => 'setReferenceCode',
'type' => 'setType',
'type_description' => 'setTypeDescription',
'modified_utc' => 'setModifiedUtc',
'is_active' => 'setIsActive',
'is_project_allowed' => 'setIsProjectAllowed',
'is_cost_center_allowed' => 'setIsCostCenterAllowed',
'is_blocked_for_manual_booking' => 'setIsBlockedForManualBooking'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'number' => 'getNumber',
'vat_code_id' => 'getVatCodeId',
'vat_code_description' => 'getVatCodeDescription',
'fiscal_year_id' => 'getFiscalYearId',
'reference_code' => 'getReferenceCode',
'type' => 'getType',
'type_description' => 'getTypeDescription',
'modified_utc' => 'getModifiedUtc',
'is_active' => 'getIsActive',
'is_project_allowed' => 'getIsProjectAllowed',
'is_cost_center_allowed' => 'getIsCostCenterAllowed',
'is_blocked_for_manual_booking' => 'getIsBlockedForManualBooking'    ];

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['vat_code_id'] = isset($data['vat_code_id']) ? $data['vat_code_id'] : null;
        $this->container['vat_code_description'] = isset($data['vat_code_description']) ? $data['vat_code_description'] : null;
        $this->container['fiscal_year_id'] = isset($data['fiscal_year_id']) ? $data['fiscal_year_id'] : null;
        $this->container['reference_code'] = isset($data['reference_code']) ? $data['reference_code'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['type_description'] = isset($data['type_description']) ? $data['type_description'] : null;
        $this->container['modified_utc'] = isset($data['modified_utc']) ? $data['modified_utc'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['is_project_allowed'] = isset($data['is_project_allowed']) ? $data['is_project_allowed'] : null;
        $this->container['is_cost_center_allowed'] = isset($data['is_cost_center_allowed']) ? $data['is_cost_center_allowed'] : null;
        $this->container['is_blocked_for_manual_booking'] = isset($data['is_blocked_for_manual_booking']) ? $data['is_blocked_for_manual_booking'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if ($this->container['fiscal_year_id'] === null) {
            $invalidProperties[] = "'fiscal_year_id' can't be null";
        }
        if ($this->container['is_active'] === null) {
            $invalidProperties[] = "'is_active' can't be null";
        }
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Max length: 100 characters. The name of the account
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number The account number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets vat_code_id
     *
     * @return string
     */
    public function getVatCodeId()
    {
        return $this->container['vat_code_id'];
    }

    /**
     * Sets vat_code_id
     *
     * @param string $vat_code_id Source: Get from /v2/vatcodes. The Id of the VAT code that is associated with the account. Can be null if account does not have a vat code
     *
     * @return $this
     */
    public function setVatCodeId($vat_code_id)
    {
        $this->container['vat_code_id'] = $vat_code_id;

        return $this;
    }

    /**
     * Gets vat_code_description
     *
     * @return string
     */
    public function getVatCodeDescription()
    {
        return $this->container['vat_code_description'];
    }

    /**
     * Sets vat_code_description
     *
     * @param string $vat_code_description Purpose: Describes what kind of VAT that is associated with the account
     *
     * @return $this
     */
    public function setVatCodeDescription($vat_code_description)
    {
        $this->container['vat_code_description'] = $vat_code_description;

        return $this;
    }

    /**
     * Gets fiscal_year_id
     *
     * @return string
     */
    public function getFiscalYearId()
    {
        return $this->container['fiscal_year_id'];
    }

    /**
     * Sets fiscal_year_id
     *
     * @param string $fiscal_year_id Source: Get from /v2/fiscalyears. The Id of the Fiscal year that the account belongs to
     *
     * @return $this
     */
    public function setFiscalYearId($fiscal_year_id)
    {
        $this->container['fiscal_year_id'] = $fiscal_year_id;

        return $this;
    }

    /**
     * Gets reference_code
     *
     * @return string
     */
    public function getReferenceCode()
    {
        return $this->container['reference_code'];
    }

    /**
     * Sets reference_code
     *
     * @param string $reference_code Purpose: Returns the reference code on the account. This feature is for dutch companies only
     *
     * @return $this
     */
    public function setReferenceCode($reference_code)
    {
        $this->container['reference_code'] = $reference_code;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int $type Purpose: Returns account type number. This feature is for dutch companies only
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets type_description
     *
     * @return string
     */
    public function getTypeDescription()
    {
        return $this->container['type_description'];
    }

    /**
     * Sets type_description
     *
     * @param string $type_description Purpose: Returns account type descripion
     *
     * @return $this
     */
    public function setTypeDescription($type_description)
    {
        $this->container['type_description'] = $type_description;

        return $this;
    }

    /**
     * Gets modified_utc
     *
     * @return \DateTime
     */
    public function getModifiedUtc()
    {
        return $this->container['modified_utc'];
    }

    /**
     * Sets modified_utc
     *
     * @param \DateTime $modified_utc modified_utc
     *
     * @return $this
     */
    public function setModifiedUtc($modified_utc)
    {
        $this->container['modified_utc'] = $modified_utc;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active Purpose: If the account is active or not
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets is_project_allowed
     *
     * @return bool
     */
    public function getIsProjectAllowed()
    {
        return $this->container['is_project_allowed'];
    }

    /**
     * Sets is_project_allowed
     *
     * @param bool $is_project_allowed Purpose: If the account is allowed to have projects connected to it
     *
     * @return $this
     */
    public function setIsProjectAllowed($is_project_allowed)
    {
        $this->container['is_project_allowed'] = $is_project_allowed;

        return $this;
    }

    /**
     * Gets is_cost_center_allowed
     *
     * @return bool
     */
    public function getIsCostCenterAllowed()
    {
        return $this->container['is_cost_center_allowed'];
    }

    /**
     * Sets is_cost_center_allowed
     *
     * @param bool $is_cost_center_allowed Purpose: If the account is allowed to have cost centers connected to it
     *
     * @return $this
     */
    public function setIsCostCenterAllowed($is_cost_center_allowed)
    {
        $this->container['is_cost_center_allowed'] = $is_cost_center_allowed;

        return $this;
    }

    /**
     * Gets is_blocked_for_manual_booking
     *
     * @return bool
     */
    public function getIsBlockedForManualBooking()
    {
        return $this->container['is_blocked_for_manual_booking'];
    }

    /**
     * Sets is_blocked_for_manual_booking
     *
     * @param bool $is_blocked_for_manual_booking Purpose: If the account is blocked for manual bookkeeping. Automatic bookkeeping will always be available, no matter the setting on this property
     *
     * @return $this
     */
    public function setIsBlockedForManualBooking($is_blocked_for_manual_booking)
    {
        $this->container['is_blocked_for_manual_booking'] = $is_blocked_for_manual_booking;

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
