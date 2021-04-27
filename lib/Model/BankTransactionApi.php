<?php
/**
 * BankTransactionApi
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
 * BankTransactionApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BankTransactionApi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BankTransactionApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'transaction_date' => '\DateTime',
'is_reconciled' => 'bool',
'reference' => 'string',
'original_amount' => 'double',
'charge_amount' => 'double',
'charge_currency' => 'string',
'transaction_amount' => 'double',
'transaction_amount_currency' => 'string',
'original_currency' => 'string',
'rows' => '\Swagger\Client\Model\BankTransactionRowApi[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'transaction_date' => 'date-time',
'is_reconciled' => null,
'reference' => null,
'original_amount' => 'double',
'charge_amount' => 'double',
'charge_currency' => null,
'transaction_amount' => 'double',
'transaction_amount_currency' => null,
'original_currency' => null,
'rows' => null    ];

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
'transaction_date' => 'TransactionDate',
'is_reconciled' => 'IsReconciled',
'reference' => 'Reference',
'original_amount' => 'OriginalAmount',
'charge_amount' => 'ChargeAmount',
'charge_currency' => 'ChargeCurrency',
'transaction_amount' => 'TransactionAmount',
'transaction_amount_currency' => 'TransactionAmountCurrency',
'original_currency' => 'OriginalCurrency',
'rows' => 'Rows'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'transaction_date' => 'setTransactionDate',
'is_reconciled' => 'setIsReconciled',
'reference' => 'setReference',
'original_amount' => 'setOriginalAmount',
'charge_amount' => 'setChargeAmount',
'charge_currency' => 'setChargeCurrency',
'transaction_amount' => 'setTransactionAmount',
'transaction_amount_currency' => 'setTransactionAmountCurrency',
'original_currency' => 'setOriginalCurrency',
'rows' => 'setRows'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'transaction_date' => 'getTransactionDate',
'is_reconciled' => 'getIsReconciled',
'reference' => 'getReference',
'original_amount' => 'getOriginalAmount',
'charge_amount' => 'getChargeAmount',
'charge_currency' => 'getChargeCurrency',
'transaction_amount' => 'getTransactionAmount',
'transaction_amount_currency' => 'getTransactionAmountCurrency',
'original_currency' => 'getOriginalCurrency',
'rows' => 'getRows'    ];

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
        $this->container['transaction_date'] = isset($data['transaction_date']) ? $data['transaction_date'] : null;
        $this->container['is_reconciled'] = isset($data['is_reconciled']) ? $data['is_reconciled'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['original_amount'] = isset($data['original_amount']) ? $data['original_amount'] : null;
        $this->container['charge_amount'] = isset($data['charge_amount']) ? $data['charge_amount'] : null;
        $this->container['charge_currency'] = isset($data['charge_currency']) ? $data['charge_currency'] : null;
        $this->container['transaction_amount'] = isset($data['transaction_amount']) ? $data['transaction_amount'] : null;
        $this->container['transaction_amount_currency'] = isset($data['transaction_amount_currency']) ? $data['transaction_amount_currency'] : null;
        $this->container['original_currency'] = isset($data['original_currency']) ? $data['original_currency'] : null;
        $this->container['rows'] = isset($data['rows']) ? $data['rows'] : null;
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
     * Gets transaction_date
     *
     * @return \DateTime
     */
    public function getTransactionDate()
    {
        return $this->container['transaction_date'];
    }

    /**
     * Sets transaction_date
     *
     * @param \DateTime $transaction_date transaction_date
     *
     * @return $this
     */
    public function setTransactionDate($transaction_date)
    {
        $this->container['transaction_date'] = $transaction_date;

        return $this;
    }

    /**
     * Gets is_reconciled
     *
     * @return bool
     */
    public function getIsReconciled()
    {
        return $this->container['is_reconciled'];
    }

    /**
     * Sets is_reconciled
     *
     * @param bool $is_reconciled True if the transaction has been matched
     *
     * @return $this
     */
    public function setIsReconciled($is_reconciled)
    {
        $this->container['is_reconciled'] = $is_reconciled;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference Represents the invoice reference of the bank transaction
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets original_amount
     *
     * @return double
     */
    public function getOriginalAmount()
    {
        return $this->container['original_amount'];
    }

    /**
     * Sets original_amount
     *
     * @param double $original_amount The amount which represents the original amount of the bank transaction
     *
     * @return $this
     */
    public function setOriginalAmount($original_amount)
    {
        $this->container['original_amount'] = $original_amount;

        return $this;
    }

    /**
     * Gets charge_amount
     *
     * @return double
     */
    public function getChargeAmount()
    {
        return $this->container['charge_amount'];
    }

    /**
     * Sets charge_amount
     *
     * @param double $charge_amount The amount which represents bank charges
     *
     * @return $this
     */
    public function setChargeAmount($charge_amount)
    {
        $this->container['charge_amount'] = $charge_amount;

        return $this;
    }

    /**
     * Gets charge_currency
     *
     * @return string
     */
    public function getChargeCurrency()
    {
        return $this->container['charge_currency'];
    }

    /**
     * Sets charge_currency
     *
     * @param string $charge_currency The currency of the bank charges amount
     *
     * @return $this
     */
    public function setChargeCurrency($charge_currency)
    {
        $this->container['charge_currency'] = $charge_currency;

        return $this;
    }

    /**
     * Gets transaction_amount
     *
     * @return double
     */
    public function getTransactionAmount()
    {
        return $this->container['transaction_amount'];
    }

    /**
     * Sets transaction_amount
     *
     * @param double $transaction_amount The total amount of the bank transaction, including bank charges
     *
     * @return $this
     */
    public function setTransactionAmount($transaction_amount)
    {
        $this->container['transaction_amount'] = $transaction_amount;

        return $this;
    }

    /**
     * Gets transaction_amount_currency
     *
     * @return string
     */
    public function getTransactionAmountCurrency()
    {
        return $this->container['transaction_amount_currency'];
    }

    /**
     * Sets transaction_amount_currency
     *
     * @param string $transaction_amount_currency The currency corresponding to the transaction amount
     *
     * @return $this
     */
    public function setTransactionAmountCurrency($transaction_amount_currency)
    {
        $this->container['transaction_amount_currency'] = $transaction_amount_currency;

        return $this;
    }

    /**
     * Gets original_currency
     *
     * @return string
     */
    public function getOriginalCurrency()
    {
        return $this->container['original_currency'];
    }

    /**
     * Sets original_currency
     *
     * @param string $original_currency The currency corresponding to the original amount
     *
     * @return $this
     */
    public function setOriginalCurrency($original_currency)
    {
        $this->container['original_currency'] = $original_currency;

        return $this;
    }

    /**
     * Gets rows
     *
     * @return \Swagger\Client\Model\BankTransactionRowApi[]
     */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
     * Sets rows
     *
     * @param \Swagger\Client\Model\BankTransactionRowApi[] $rows Represents the accounting transactions related to the bank transaction
     *
     * @return $this
     */
    public function setRows($rows)
    {
        $this->container['rows'] = $rows;

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
