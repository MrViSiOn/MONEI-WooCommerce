<?php
/**
 * Card
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MONEI API v1
 *
 * <p>The MONEI API is organized around <a href=\"https://en.wikipedia.org/wiki/Representational_State_Transfer\">REST</a>. Our API has predictable resource-oriented URLs, accepts JSON-encoded request bodies, returns JSON-encoded responses, and uses standard HTTP response codes, authentication, and verbs.</p> <h4 id=\"base-url\">Base URL:</h4> <p><a href=\"https://api.monei.com/v1\">https://api.monei.com/v1</a></p> <h4 id=\"client-libraries\">Client libraries:</h4> <ul> <li><a href=\"https://github.com/MONEI/monei-php-sdk\">PHP SDK</a></li> <li><a href=\"https://github.com/MONEI/monei-python-sdk\">Python SDK</a></li> <li><a href=\"https://github.com/MONEI/monei-node-sdk\">Node.js SDK</a></li> <li><a href=\"https://postman.monei.com/\">Postman Collection</a></li> </ul>
 *
 * The version of the OpenAPI document: 1.1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * Card Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Card implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Card';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'number' => 'string',
        'cvc' => 'string',
        'exp_month' => 'string',
        'exp_year' => 'string',
        'cardholder_name' => 'string',
        'cardholder_email' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'number' => null,
        'cvc' => null,
        'exp_month' => null,
        'exp_year' => null,
        'cardholder_name' => null,
        'cardholder_email' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'number' => 'number',
        'cvc' => 'cvc',
        'exp_month' => 'expMonth',
        'exp_year' => 'expYear',
        'cardholder_name' => 'cardholderName',
        'cardholder_email' => 'cardholderEmail'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'number' => 'setNumber',
        'cvc' => 'setCvc',
        'exp_month' => 'setExpMonth',
        'exp_year' => 'setExpYear',
        'cardholder_name' => 'setCardholderName',
        'cardholder_email' => 'setCardholderEmail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'number' => 'getNumber',
        'cvc' => 'getCvc',
        'exp_month' => 'getExpMonth',
        'exp_year' => 'getExpYear',
        'cardholder_name' => 'getCardholderName',
        'cardholder_email' => 'getCardholderEmail'
    ];

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
        return self::$openAPIModelName;
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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['cvc'] = isset($data['cvc']) ? $data['cvc'] : null;
        $this->container['exp_month'] = isset($data['exp_month']) ? $data['exp_month'] : null;
        $this->container['exp_year'] = isset($data['exp_year']) ? $data['exp_year'] : null;
        $this->container['cardholder_name'] = isset($data['cardholder_name']) ? $data['cardholder_name'] : null;
        $this->container['cardholder_email'] = isset($data['cardholder_email']) ? $data['cardholder_email'] : null;
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
     * Gets number
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number The card number, as a string without any separators.
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets cvc
     *
     * @return string|null
     */
    public function getCvc()
    {
        return $this->container['cvc'];
    }

    /**
     * Sets cvc
     *
     * @param string|null $cvc Card security code.
     *
     * @return $this
     */
    public function setCvc($cvc)
    {
        $this->container['cvc'] = $cvc;

        return $this;
    }

    /**
     * Gets exp_month
     *
     * @return string|null
     */
    public function getExpMonth()
    {
        return $this->container['exp_month'];
    }

    /**
     * Sets exp_month
     *
     * @param string|null $exp_month Two-digit number representing the card’s expiration month.
     *
     * @return $this
     */
    public function setExpMonth($exp_month)
    {
        $this->container['exp_month'] = $exp_month;

        return $this;
    }

    /**
     * Gets exp_year
     *
     * @return string|null
     */
    public function getExpYear()
    {
        return $this->container['exp_year'];
    }

    /**
     * Sets exp_year
     *
     * @param string|null $exp_year Two-digit number representing the card’s expiration year.
     *
     * @return $this
     */
    public function setExpYear($exp_year)
    {
        $this->container['exp_year'] = $exp_year;

        return $this;
    }

    /**
     * Gets cardholder_name
     *
     * @return string|null
     */
    public function getCardholderName()
    {
        return $this->container['cardholder_name'];
    }

    /**
     * Sets cardholder_name
     *
     * @param string|null $cardholder_name The cardholder's name, as stated in the credit card.
     *
     * @return $this
     */
    public function setCardholderName($cardholder_name)
    {
        $this->container['cardholder_name'] = $cardholder_name;

        return $this;
    }

    /**
     * Gets cardholder_email
     *
     * @return string|null
     */
    public function getCardholderEmail()
    {
        return $this->container['cardholder_email'];
    }

    /**
     * Sets cardholder_email
     *
     * @param string|null $cardholder_email The cardholder's email address.
     *
     * @return $this
     */
    public function setCardholderEmail($cardholder_email)
    {
        $this->container['cardholder_email'] = $cardholder_email;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


