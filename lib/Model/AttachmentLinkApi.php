<?php
/**
 * AttachmentLinkApi
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
 * AttachmentLinkApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AttachmentLinkApi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AttachmentLinkApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'document_id' => 'string',
'document_type' => 'int',
'attachment_ids' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'document_id' => 'uuid',
'document_type' => 'int32',
'attachment_ids' => 'uuid'    ];

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
        'document_id' => 'DocumentId',
'document_type' => 'DocumentType',
'attachment_ids' => 'AttachmentIds'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'document_id' => 'setDocumentId',
'document_type' => 'setDocumentType',
'attachment_ids' => 'setAttachmentIds'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'document_id' => 'getDocumentId',
'document_type' => 'getDocumentType',
'attachment_ids' => 'getAttachmentIds'    ];

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

    const DOCUMENT_TYPE_0 = 0;
const DOCUMENT_TYPE_1 = 1;
const DOCUMENT_TYPE_2 = 2;
const DOCUMENT_TYPE_3 = 3;
const DOCUMENT_TYPE_4 = 4;
const DOCUMENT_TYPE_5 = 5;
const DOCUMENT_TYPE_6 = 6;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDocumentTypeAllowableValues()
    {
        return [
            self::DOCUMENT_TYPE_0,
self::DOCUMENT_TYPE_1,
self::DOCUMENT_TYPE_2,
self::DOCUMENT_TYPE_3,
self::DOCUMENT_TYPE_4,
self::DOCUMENT_TYPE_5,
self::DOCUMENT_TYPE_6,        ];
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
        $this->container['document_id'] = isset($data['document_id']) ? $data['document_id'] : null;
        $this->container['document_type'] = isset($data['document_type']) ? $data['document_type'] : null;
        $this->container['attachment_ids'] = isset($data['attachment_ids']) ? $data['attachment_ids'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['document_type'] === null) {
            $invalidProperties[] = "'document_type' can't be null";
        }
        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!is_null($this->container['document_type']) && !in_array($this->container['document_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'document_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['attachment_ids'] === null) {
            $invalidProperties[] = "'attachment_ids' can't be null";
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
     * Gets document_id
     *
     * @return string
     */
    public function getDocumentId()
    {
        return $this->container['document_id'];
    }

    /**
     * Sets document_id
     *
     * @param string $document_id The id inside eAccounting of the corresponding linked document. Source: Get from endpoints corresponding to your document type
     *
     * @return $this
     */
    public function setDocumentId($document_id)
    {
        $this->container['document_id'] = $document_id;

        return $this;
    }

    /**
     * Gets document_type
     *
     * @return int
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     *
     * @param int $document_type 0 = None, 1 = SupplierInvoice, 2 = Receipt, 3 = Voucher, 4 = SupplierInvoiceDraft, 5 = AllocationPeriod, 6 = Transfer
     *
     * @return $this
     */
    public function setDocumentType($document_type)
    {
        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!in_array($document_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'document_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['document_type'] = $document_type;

        return $this;
    }

    /**
     * Gets attachment_ids
     *
     * @return string[]
     */
    public function getAttachmentIds()
    {
        return $this->container['attachment_ids'];
    }

    /**
     * Sets attachment_ids
     *
     * @param string[] $attachment_ids attachment_ids
     *
     * @return $this
     */
    public function setAttachmentIds($attachment_ids)
    {
        $this->container['attachment_ids'] = $attachment_ids;

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