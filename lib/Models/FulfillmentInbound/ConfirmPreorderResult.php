<?php
/**
 * ConfirmPreorderResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  ClouSale\AmazonSellingPartnerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * OpenAPI spec version: v0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound;

use \ArrayAccess;
use \ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;
use \ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;

/**
 * ConfirmPreorderResult Class Doc Comment
 *
 * @category Class
 * @package  ClouSale\AmazonSellingPartnerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConfirmPreorderResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConfirmPreorderResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'confirmed_need_by_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\DateStringType',
'confirmed_fulfillable_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\DateStringType'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'confirmed_need_by_date' => null,
'confirmed_fulfillable_date' => null    ];

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
        'confirmed_need_by_date' => 'ConfirmedNeedByDate',
'confirmed_fulfillable_date' => 'ConfirmedFulfillableDate'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'confirmed_need_by_date' => 'setConfirmedNeedByDate',
'confirmed_fulfillable_date' => 'setConfirmedFulfillableDate'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'confirmed_need_by_date' => 'getConfirmedNeedByDate',
'confirmed_fulfillable_date' => 'getConfirmedFulfillableDate'    ];

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
        $this->container['confirmed_need_by_date'] = isset($data['confirmed_need_by_date']) ? $data['confirmed_need_by_date'] : null;
        $this->container['confirmed_fulfillable_date'] = isset($data['confirmed_fulfillable_date']) ? $data['confirmed_fulfillable_date'] : null;
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
     * Gets confirmed_need_by_date
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\DateStringType
     */
    public function getConfirmedNeedByDate()
    {
        return $this->container['confirmed_need_by_date'];
    }

    /**
     * Sets confirmed_need_by_date
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\DateStringType $confirmed_need_by_date confirmed_need_by_date
     *
     * @return $this
     */
    public function setConfirmedNeedByDate($confirmed_need_by_date)
    {
        $this->container['confirmed_need_by_date'] = $confirmed_need_by_date;

        return $this;
    }

    /**
     * Gets confirmed_fulfillable_date
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\DateStringType
     */
    public function getConfirmedFulfillableDate()
    {
        return $this->container['confirmed_fulfillable_date'];
    }

    /**
     * Sets confirmed_fulfillable_date
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\DateStringType $confirmed_fulfillable_date confirmed_fulfillable_date
     *
     * @return $this
     */
    public function setConfirmedFulfillableDate($confirmed_fulfillable_date)
    {
        $this->container['confirmed_fulfillable_date'] = $confirmed_fulfillable_date;

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