<?php
/**
 * ODataRawQueryOptions
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
 * ODataRawQueryOptions Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ODataRawQueryOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ODataRawQueryOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'filter' => 'string',
'apply' => 'string',
'order_by' => 'string',
'top' => 'string',
'skip' => 'string',
'select' => 'string',
'expand' => 'string',
'count' => 'string',
'format' => 'string',
'skip_token' => 'string',
'delta_token' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'filter' => null,
'apply' => null,
'order_by' => null,
'top' => null,
'skip' => null,
'select' => null,
'expand' => null,
'count' => null,
'format' => null,
'skip_token' => null,
'delta_token' => null    ];

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
        'filter' => 'Filter',
'apply' => 'Apply',
'order_by' => 'OrderBy',
'top' => 'Top',
'skip' => 'Skip',
'select' => 'Select',
'expand' => 'Expand',
'count' => 'Count',
'format' => 'Format',
'skip_token' => 'SkipToken',
'delta_token' => 'DeltaToken'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'filter' => 'setFilter',
'apply' => 'setApply',
'order_by' => 'setOrderBy',
'top' => 'setTop',
'skip' => 'setSkip',
'select' => 'setSelect',
'expand' => 'setExpand',
'count' => 'setCount',
'format' => 'setFormat',
'skip_token' => 'setSkipToken',
'delta_token' => 'setDeltaToken'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'filter' => 'getFilter',
'apply' => 'getApply',
'order_by' => 'getOrderBy',
'top' => 'getTop',
'skip' => 'getSkip',
'select' => 'getSelect',
'expand' => 'getExpand',
'count' => 'getCount',
'format' => 'getFormat',
'skip_token' => 'getSkipToken',
'delta_token' => 'getDeltaToken'    ];

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
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['apply'] = isset($data['apply']) ? $data['apply'] : null;
        $this->container['order_by'] = isset($data['order_by']) ? $data['order_by'] : null;
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
        $this->container['skip'] = isset($data['skip']) ? $data['skip'] : null;
        $this->container['select'] = isset($data['select']) ? $data['select'] : null;
        $this->container['expand'] = isset($data['expand']) ? $data['expand'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['skip_token'] = isset($data['skip_token']) ? $data['skip_token'] : null;
        $this->container['delta_token'] = isset($data['delta_token']) ? $data['delta_token'] : null;
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
     * Gets filter
     *
     * @return string
     */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter
     *
     * @param string $filter filter
     *
     * @return $this
     */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;

        return $this;
    }

    /**
     * Gets apply
     *
     * @return string
     */
    public function getApply()
    {
        return $this->container['apply'];
    }

    /**
     * Sets apply
     *
     * @param string $apply apply
     *
     * @return $this
     */
    public function setApply($apply)
    {
        $this->container['apply'] = $apply;

        return $this;
    }

    /**
     * Gets order_by
     *
     * @return string
     */
    public function getOrderBy()
    {
        return $this->container['order_by'];
    }

    /**
     * Sets order_by
     *
     * @param string $order_by order_by
     *
     * @return $this
     */
    public function setOrderBy($order_by)
    {
        $this->container['order_by'] = $order_by;

        return $this;
    }

    /**
     * Gets top
     *
     * @return string
     */
    public function getTop()
    {
        return $this->container['top'];
    }

    /**
     * Sets top
     *
     * @param string $top top
     *
     * @return $this
     */
    public function setTop($top)
    {
        $this->container['top'] = $top;

        return $this;
    }

    /**
     * Gets skip
     *
     * @return string
     */
    public function getSkip()
    {
        return $this->container['skip'];
    }

    /**
     * Sets skip
     *
     * @param string $skip skip
     *
     * @return $this
     */
    public function setSkip($skip)
    {
        $this->container['skip'] = $skip;

        return $this;
    }

    /**
     * Gets select
     *
     * @return string
     */
    public function getSelect()
    {
        return $this->container['select'];
    }

    /**
     * Sets select
     *
     * @param string $select select
     *
     * @return $this
     */
    public function setSelect($select)
    {
        $this->container['select'] = $select;

        return $this;
    }

    /**
     * Gets expand
     *
     * @return string
     */
    public function getExpand()
    {
        return $this->container['expand'];
    }

    /**
     * Sets expand
     *
     * @param string $expand expand
     *
     * @return $this
     */
    public function setExpand($expand)
    {
        $this->container['expand'] = $expand;

        return $this;
    }

    /**
     * Gets count
     *
     * @return string
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param string $count count
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string $format format
     *
     * @return $this
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets skip_token
     *
     * @return string
     */
    public function getSkipToken()
    {
        return $this->container['skip_token'];
    }

    /**
     * Sets skip_token
     *
     * @param string $skip_token skip_token
     *
     * @return $this
     */
    public function setSkipToken($skip_token)
    {
        $this->container['skip_token'] = $skip_token;

        return $this;
    }

    /**
     * Gets delta_token
     *
     * @return string
     */
    public function getDeltaToken()
    {
        return $this->container['delta_token'];
    }

    /**
     * Sets delta_token
     *
     * @param string $delta_token delta_token
     *
     * @return $this
     */
    public function setDeltaToken($delta_token)
    {
        $this->container['delta_token'] = $delta_token;

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
