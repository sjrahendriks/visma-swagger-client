<?php
/**
 * IEdmPathExpression
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
 * IEdmPathExpression Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IEdmPathExpression implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IEdmPathExpression';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'path_segments' => 'string[]',
'path' => 'string',
'expression_kind' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'path_segments' => null,
'path' => null,
'expression_kind' => 'int32'    ];

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
        'path_segments' => 'PathSegments',
'path' => 'Path',
'expression_kind' => 'ExpressionKind'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'path_segments' => 'setPathSegments',
'path' => 'setPath',
'expression_kind' => 'setExpressionKind'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'path_segments' => 'getPathSegments',
'path' => 'getPath',
'expression_kind' => 'getExpressionKind'    ];

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

    const EXPRESSION_KIND_0 = 0;
const EXPRESSION_KIND_1 = 1;
const EXPRESSION_KIND_2 = 2;
const EXPRESSION_KIND_3 = 3;
const EXPRESSION_KIND_4 = 4;
const EXPRESSION_KIND_5 = 5;
const EXPRESSION_KIND_6 = 6;
const EXPRESSION_KIND_7 = 7;
const EXPRESSION_KIND_8 = 8;
const EXPRESSION_KIND_9 = 9;
const EXPRESSION_KIND_10 = 10;
const EXPRESSION_KIND_11 = 11;
const EXPRESSION_KIND_12 = 12;
const EXPRESSION_KIND_13 = 13;
const EXPRESSION_KIND_14 = 14;
const EXPRESSION_KIND_15 = 15;
const EXPRESSION_KIND_16 = 16;
const EXPRESSION_KIND_17 = 17;
const EXPRESSION_KIND_18 = 18;
const EXPRESSION_KIND_19 = 19;
const EXPRESSION_KIND_20 = 20;
const EXPRESSION_KIND_21 = 21;
const EXPRESSION_KIND_22 = 22;
const EXPRESSION_KIND_23 = 23;
const EXPRESSION_KIND_24 = 24;
const EXPRESSION_KIND_25 = 25;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getExpressionKindAllowableValues()
    {
        return [
            self::EXPRESSION_KIND_0,
self::EXPRESSION_KIND_1,
self::EXPRESSION_KIND_2,
self::EXPRESSION_KIND_3,
self::EXPRESSION_KIND_4,
self::EXPRESSION_KIND_5,
self::EXPRESSION_KIND_6,
self::EXPRESSION_KIND_7,
self::EXPRESSION_KIND_8,
self::EXPRESSION_KIND_9,
self::EXPRESSION_KIND_10,
self::EXPRESSION_KIND_11,
self::EXPRESSION_KIND_12,
self::EXPRESSION_KIND_13,
self::EXPRESSION_KIND_14,
self::EXPRESSION_KIND_15,
self::EXPRESSION_KIND_16,
self::EXPRESSION_KIND_17,
self::EXPRESSION_KIND_18,
self::EXPRESSION_KIND_19,
self::EXPRESSION_KIND_20,
self::EXPRESSION_KIND_21,
self::EXPRESSION_KIND_22,
self::EXPRESSION_KIND_23,
self::EXPRESSION_KIND_24,
self::EXPRESSION_KIND_25,        ];
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
        $this->container['path_segments'] = isset($data['path_segments']) ? $data['path_segments'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['expression_kind'] = isset($data['expression_kind']) ? $data['expression_kind'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getExpressionKindAllowableValues();
        if (!is_null($this->container['expression_kind']) && !in_array($this->container['expression_kind'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'expression_kind', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets path_segments
     *
     * @return string[]
     */
    public function getPathSegments()
    {
        return $this->container['path_segments'];
    }

    /**
     * Sets path_segments
     *
     * @param string[] $path_segments path_segments
     *
     * @return $this
     */
    public function setPathSegments($path_segments)
    {
        $this->container['path_segments'] = $path_segments;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets expression_kind
     *
     * @return int
     */
    public function getExpressionKind()
    {
        return $this->container['expression_kind'];
    }

    /**
     * Sets expression_kind
     *
     * @param int $expression_kind expression_kind
     *
     * @return $this
     */
    public function setExpressionKind($expression_kind)
    {
        $allowedValues = $this->getExpressionKindAllowableValues();
        if (!is_null($expression_kind) && !in_array($expression_kind, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'expression_kind', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['expression_kind'] = $expression_kind;

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
