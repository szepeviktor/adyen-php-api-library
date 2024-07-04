<?php

/**
 * Adyen Payout API
 *
 * The version of the OpenAPI document: 68
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\Payout;

use \ArrayAccess;
use Adyen\Model\Payout\ObjectSerializer;

/**
 * ResponseAdditionalDataCard Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ResponseAdditionalDataCard implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResponseAdditionalDataCard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cardBin' => 'string',
        'cardHolderName' => 'string',
        'cardIssuingBank' => 'string',
        'cardIssuingCountry' => 'string',
        'cardIssuingCurrency' => 'string',
        'cardPaymentMethod' => 'string',
        'cardSummary' => 'string',
        'issuerBin' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cardBin' => null,
        'cardHolderName' => null,
        'cardIssuingBank' => null,
        'cardIssuingCountry' => null,
        'cardIssuingCurrency' => null,
        'cardPaymentMethod' => null,
        'cardSummary' => null,
        'issuerBin' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'cardBin' => false,
        'cardHolderName' => false,
        'cardIssuingBank' => false,
        'cardIssuingCountry' => false,
        'cardIssuingCurrency' => false,
        'cardPaymentMethod' => false,
        'cardSummary' => false,
        'issuerBin' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'cardBin' => 'cardBin',
        'cardHolderName' => 'cardHolderName',
        'cardIssuingBank' => 'cardIssuingBank',
        'cardIssuingCountry' => 'cardIssuingCountry',
        'cardIssuingCurrency' => 'cardIssuingCurrency',
        'cardPaymentMethod' => 'cardPaymentMethod',
        'cardSummary' => 'cardSummary',
        'issuerBin' => 'issuerBin'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cardBin' => 'setCardBin',
        'cardHolderName' => 'setCardHolderName',
        'cardIssuingBank' => 'setCardIssuingBank',
        'cardIssuingCountry' => 'setCardIssuingCountry',
        'cardIssuingCurrency' => 'setCardIssuingCurrency',
        'cardPaymentMethod' => 'setCardPaymentMethod',
        'cardSummary' => 'setCardSummary',
        'issuerBin' => 'setIssuerBin'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cardBin' => 'getCardBin',
        'cardHolderName' => 'getCardHolderName',
        'cardIssuingBank' => 'getCardIssuingBank',
        'cardIssuingCountry' => 'getCardIssuingCountry',
        'cardIssuingCurrency' => 'getCardIssuingCurrency',
        'cardPaymentMethod' => 'getCardPaymentMethod',
        'cardSummary' => 'getCardSummary',
        'issuerBin' => 'getIssuerBin'
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
        $this->setIfExists('cardBin', $data ?? [], null);
        $this->setIfExists('cardHolderName', $data ?? [], null);
        $this->setIfExists('cardIssuingBank', $data ?? [], null);
        $this->setIfExists('cardIssuingCountry', $data ?? [], null);
        $this->setIfExists('cardIssuingCurrency', $data ?? [], null);
        $this->setIfExists('cardPaymentMethod', $data ?? [], null);
        $this->setIfExists('cardSummary', $data ?? [], null);
        $this->setIfExists('issuerBin', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets cardBin
     *
     * @return string|null
     */
    public function getCardBin()
    {
        return $this->container['cardBin'];
    }

    /**
     * Sets cardBin
     *
     * @param string|null $cardBin The first six digits of the card number.  This is the [Bank Identification Number (BIN)](https://docs.adyen.com/get-started-with-adyen/payment-glossary#bank-identification-number-bin) for card numbers with a six-digit BIN.  Example: 521234
     *
     * @return self
     */
    public function setCardBin($cardBin)
    {
        $this->container['cardBin'] = $cardBin;

        return $this;
    }

    /**
     * Gets cardHolderName
     *
     * @return string|null
     */
    public function getCardHolderName()
    {
        return $this->container['cardHolderName'];
    }

    /**
     * Sets cardHolderName
     *
     * @param string|null $cardHolderName The cardholder name passed in the payment request.
     *
     * @return self
     */
    public function setCardHolderName($cardHolderName)
    {
        $this->container['cardHolderName'] = $cardHolderName;

        return $this;
    }

    /**
     * Gets cardIssuingBank
     *
     * @return string|null
     */
    public function getCardIssuingBank()
    {
        return $this->container['cardIssuingBank'];
    }

    /**
     * Sets cardIssuingBank
     *
     * @param string|null $cardIssuingBank The bank or the financial institution granting lines of credit through card association branded payment cards. This information can be included when available.
     *
     * @return self
     */
    public function setCardIssuingBank($cardIssuingBank)
    {
        $this->container['cardIssuingBank'] = $cardIssuingBank;

        return $this;
    }

    /**
     * Gets cardIssuingCountry
     *
     * @return string|null
     */
    public function getCardIssuingCountry()
    {
        return $this->container['cardIssuingCountry'];
    }

    /**
     * Sets cardIssuingCountry
     *
     * @param string|null $cardIssuingCountry The country where the card was issued.  Example: US
     *
     * @return self
     */
    public function setCardIssuingCountry($cardIssuingCountry)
    {
        $this->container['cardIssuingCountry'] = $cardIssuingCountry;

        return $this;
    }

    /**
     * Gets cardIssuingCurrency
     *
     * @return string|null
     */
    public function getCardIssuingCurrency()
    {
        return $this->container['cardIssuingCurrency'];
    }

    /**
     * Sets cardIssuingCurrency
     *
     * @param string|null $cardIssuingCurrency The currency in which the card is issued, if this information is available. Provided as the currency code or currency number from the ISO-4217 standard.   Example: USD
     *
     * @return self
     */
    public function setCardIssuingCurrency($cardIssuingCurrency)
    {
        $this->container['cardIssuingCurrency'] = $cardIssuingCurrency;

        return $this;
    }

    /**
     * Gets cardPaymentMethod
     *
     * @return string|null
     */
    public function getCardPaymentMethod()
    {
        return $this->container['cardPaymentMethod'];
    }

    /**
     * Sets cardPaymentMethod
     *
     * @param string|null $cardPaymentMethod The card payment method used for the transaction.  Example: amex
     *
     * @return self
     */
    public function setCardPaymentMethod($cardPaymentMethod)
    {
        $this->container['cardPaymentMethod'] = $cardPaymentMethod;

        return $this;
    }

    /**
     * Gets cardSummary
     *
     * @return string|null
     */
    public function getCardSummary()
    {
        return $this->container['cardSummary'];
    }

    /**
     * Sets cardSummary
     *
     * @param string|null $cardSummary The last four digits of a card number.  > Returned only in case of a card payment.
     *
     * @return self
     */
    public function setCardSummary($cardSummary)
    {
        $this->container['cardSummary'] = $cardSummary;

        return $this;
    }

    /**
     * Gets issuerBin
     *
     * @return string|null
     */
    public function getIssuerBin()
    {
        return $this->container['issuerBin'];
    }

    /**
     * Sets issuerBin
     *
     * @param string|null $issuerBin The first eight digits of the card number. Only returned if the card number is 16 digits or more.  This is the [Bank Identification Number (BIN)](https://docs.adyen.com/get-started-with-adyen/payment-glossary#bank-identification-number-bin) for card numbers with an eight-digit BIN.  Example: 52123423
     *
     * @return self
     */
    public function setIssuerBin($issuerBin)
    {
        $this->container['issuerBin'] = $issuerBin;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    public function toArray(): array
    {
        $array = [];
        foreach (self::$openAPITypes as $propertyName => $propertyType) {
            $propertyValue = $this[$propertyName];
            if ($propertyValue !== null) {
                // Check if the property value is an object and has a toArray() method
                if (is_object($propertyValue) && method_exists($propertyValue, 'toArray')) {
                    $array[$propertyName] = $propertyValue->toArray();
                // Check if it's type datetime
                } elseif ($propertyValue instanceof \DateTime) {
                    $array[$propertyName] = $propertyValue->format(DATE_ATOM);
                // If it's an array type we should check whether it contains objects and if so call toArray method
                } elseif (is_array($propertyValue)) {
                    $array[$propertyName] = array_map(function ($item) {
                        return $item instanceof ModelInterface ? $item->toArray() : $item;
                    }, $propertyValue);
                } else {
                    // Otherwise, directly assign the property value to the array
                    $array[$propertyName] = $propertyValue;
                }
            }
        }
        return $array;
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
}
