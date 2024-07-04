<?php

/**
 * Adyen BinLookup API
 *
 * The version of the OpenAPI document: 54
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\BinLookup;

use \ArrayAccess;
use Adyen\Model\BinLookup\ObjectSerializer;

/**
 * CardBin Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CardBin implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CardBin';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bin' => 'string',
        'commercial' => 'bool',
        'fundingSource' => 'string',
        'fundsAvailability' => 'string',
        'issuerBin' => 'string',
        'issuingBank' => 'string',
        'issuingCountry' => 'string',
        'issuingCurrency' => 'string',
        'paymentMethod' => 'string',
        'payoutEligible' => 'string',
        'summary' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bin' => null,
        'commercial' => null,
        'fundingSource' => null,
        'fundsAvailability' => null,
        'issuerBin' => null,
        'issuingBank' => null,
        'issuingCountry' => null,
        'issuingCurrency' => null,
        'paymentMethod' => null,
        'payoutEligible' => null,
        'summary' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'bin' => false,
        'commercial' => false,
        'fundingSource' => false,
        'fundsAvailability' => false,
        'issuerBin' => false,
        'issuingBank' => false,
        'issuingCountry' => false,
        'issuingCurrency' => false,
        'paymentMethod' => false,
        'payoutEligible' => false,
        'summary' => false
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
        'bin' => 'bin',
        'commercial' => 'commercial',
        'fundingSource' => 'fundingSource',
        'fundsAvailability' => 'fundsAvailability',
        'issuerBin' => 'issuerBin',
        'issuingBank' => 'issuingBank',
        'issuingCountry' => 'issuingCountry',
        'issuingCurrency' => 'issuingCurrency',
        'paymentMethod' => 'paymentMethod',
        'payoutEligible' => 'payoutEligible',
        'summary' => 'summary'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bin' => 'setBin',
        'commercial' => 'setCommercial',
        'fundingSource' => 'setFundingSource',
        'fundsAvailability' => 'setFundsAvailability',
        'issuerBin' => 'setIssuerBin',
        'issuingBank' => 'setIssuingBank',
        'issuingCountry' => 'setIssuingCountry',
        'issuingCurrency' => 'setIssuingCurrency',
        'paymentMethod' => 'setPaymentMethod',
        'payoutEligible' => 'setPayoutEligible',
        'summary' => 'setSummary'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bin' => 'getBin',
        'commercial' => 'getCommercial',
        'fundingSource' => 'getFundingSource',
        'fundsAvailability' => 'getFundsAvailability',
        'issuerBin' => 'getIssuerBin',
        'issuingBank' => 'getIssuingBank',
        'issuingCountry' => 'getIssuingCountry',
        'issuingCurrency' => 'getIssuingCurrency',
        'paymentMethod' => 'getPaymentMethod',
        'payoutEligible' => 'getPayoutEligible',
        'summary' => 'getSummary'
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
        $this->setIfExists('bin', $data ?? [], null);
        $this->setIfExists('commercial', $data ?? [], null);
        $this->setIfExists('fundingSource', $data ?? [], null);
        $this->setIfExists('fundsAvailability', $data ?? [], null);
        $this->setIfExists('issuerBin', $data ?? [], null);
        $this->setIfExists('issuingBank', $data ?? [], null);
        $this->setIfExists('issuingCountry', $data ?? [], null);
        $this->setIfExists('issuingCurrency', $data ?? [], null);
        $this->setIfExists('paymentMethod', $data ?? [], null);
        $this->setIfExists('payoutEligible', $data ?? [], null);
        $this->setIfExists('summary', $data ?? [], null);
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
     * Gets bin
     *
     * @return string|null
     */
    public function getBin()
    {
        return $this->container['bin'];
    }

    /**
     * Sets bin
     *
     * @param string|null $bin The first 6 digit of the card number. Enable this field via merchant account settings.
     *
     * @return self
     */
    public function setBin($bin)
    {
        $this->container['bin'] = $bin;

        return $this;
    }

    /**
     * Gets commercial
     *
     * @return bool|null
     */
    public function getCommercial()
    {
        return $this->container['commercial'];
    }

    /**
     * Sets commercial
     *
     * @param bool|null $commercial If true, it indicates a commercial card. Enable this field via merchant account settings.
     *
     * @return self
     */
    public function setCommercial($commercial)
    {
        $this->container['commercial'] = $commercial;

        return $this;
    }

    /**
     * Gets fundingSource
     *
     * @return string|null
     */
    public function getFundingSource()
    {
        return $this->container['fundingSource'];
    }

    /**
     * Sets fundingSource
     *
     * @param string|null $fundingSource The card funding source. Valid values are: * CHARGE * CREDIT * DEBIT * DEFERRED_DEBIT * PREPAID * PREPAID_RELOADABLE * PREPAID_NONRELOADABLE > Enable this field via merchant account settings.
     *
     * @return self
     */
    public function setFundingSource($fundingSource)
    {
        $this->container['fundingSource'] = $fundingSource;

        return $this;
    }

    /**
     * Gets fundsAvailability
     *
     * @return string|null
     */
    public function getFundsAvailability()
    {
        return $this->container['fundsAvailability'];
    }

    /**
     * Sets fundsAvailability
     *
     * @param string|null $fundsAvailability Indicates availability of funds.  Visa: * \"I\" (fast funds are supported) * \"N\" (otherwise)  Mastercard: * \"I\" (product type is Prepaid or Debit, or issuing country is in CEE/HGEM list) * \"N\" (otherwise) > Returned when you verify a card BIN or estimate costs, and only if `payoutEligible` is different from \"N\" or \"U\".
     *
     * @return self
     */
    public function setFundsAvailability($fundsAvailability)
    {
        $this->container['fundsAvailability'] = $fundsAvailability;

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
     * @param string|null $issuerBin The first 8 digit of the card number. Enable this field via merchant account settings.
     *
     * @return self
     */
    public function setIssuerBin($issuerBin)
    {
        $this->container['issuerBin'] = $issuerBin;

        return $this;
    }

    /**
     * Gets issuingBank
     *
     * @return string|null
     */
    public function getIssuingBank()
    {
        return $this->container['issuingBank'];
    }

    /**
     * Sets issuingBank
     *
     * @param string|null $issuingBank The issuing bank of the card.
     *
     * @return self
     */
    public function setIssuingBank($issuingBank)
    {
        $this->container['issuingBank'] = $issuingBank;

        return $this;
    }

    /**
     * Gets issuingCountry
     *
     * @return string|null
     */
    public function getIssuingCountry()
    {
        return $this->container['issuingCountry'];
    }

    /**
     * Sets issuingCountry
     *
     * @param string|null $issuingCountry The country where the card was issued from.
     *
     * @return self
     */
    public function setIssuingCountry($issuingCountry)
    {
        $this->container['issuingCountry'] = $issuingCountry;

        return $this;
    }

    /**
     * Gets issuingCurrency
     *
     * @return string|null
     */
    public function getIssuingCurrency()
    {
        return $this->container['issuingCurrency'];
    }

    /**
     * Sets issuingCurrency
     *
     * @param string|null $issuingCurrency The currency of the card.
     *
     * @return self
     */
    public function setIssuingCurrency($issuingCurrency)
    {
        $this->container['issuingCurrency'] = $issuingCurrency;

        return $this;
    }

    /**
     * Gets paymentMethod
     *
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->container['paymentMethod'];
    }

    /**
     * Sets paymentMethod
     *
     * @param string|null $paymentMethod The payment method associated with the card (e.g. visa, mc, or amex).
     *
     * @return self
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->container['paymentMethod'] = $paymentMethod;

        return $this;
    }

    /**
     * Gets payoutEligible
     *
     * @return string|null
     */
    public function getPayoutEligible()
    {
        return $this->container['payoutEligible'];
    }

    /**
     * Sets payoutEligible
     *
     * @param string|null $payoutEligible Indicates whether a payout is eligible or not for this card.  Visa: * \"Y\" * \"N\"  Mastercard: * \"Y\" (domestic and cross-border) * \"D\" (only domestic) * \"N\" (no MoneySend) * \"U\" (unknown) > Returned when you verify a card BIN or estimate costs, and only if `payoutEligible` is different from \"N\" or \"U\".
     *
     * @return self
     */
    public function setPayoutEligible($payoutEligible)
    {
        $this->container['payoutEligible'] = $payoutEligible;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return string|null
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param string|null $summary The last four digits of the card number.
     *
     * @return self
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

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
