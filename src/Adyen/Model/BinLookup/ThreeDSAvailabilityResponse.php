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
 * ThreeDSAvailabilityResponse Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ThreeDSAvailabilityResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ThreeDSAvailabilityResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'binDetails' => '\Adyen\Model\BinLookup\BinDetail',
        'dsPublicKeys' => '\Adyen\Model\BinLookup\DSPublicKeyDetail[]',
        'threeDS1Supported' => 'bool',
        'threeDS2CardRangeDetails' => '\Adyen\Model\BinLookup\ThreeDS2CardRangeDetail[]',
        'threeDS2supported' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'binDetails' => null,
        'dsPublicKeys' => null,
        'threeDS1Supported' => null,
        'threeDS2CardRangeDetails' => null,
        'threeDS2supported' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'binDetails' => false,
        'dsPublicKeys' => false,
        'threeDS1Supported' => false,
        'threeDS2CardRangeDetails' => false,
        'threeDS2supported' => false
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
        'binDetails' => 'binDetails',
        'dsPublicKeys' => 'dsPublicKeys',
        'threeDS1Supported' => 'threeDS1Supported',
        'threeDS2CardRangeDetails' => 'threeDS2CardRangeDetails',
        'threeDS2supported' => 'threeDS2supported'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'binDetails' => 'setBinDetails',
        'dsPublicKeys' => 'setDsPublicKeys',
        'threeDS1Supported' => 'setThreeDS1Supported',
        'threeDS2CardRangeDetails' => 'setThreeDS2CardRangeDetails',
        'threeDS2supported' => 'setThreeDS2supported'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'binDetails' => 'getBinDetails',
        'dsPublicKeys' => 'getDsPublicKeys',
        'threeDS1Supported' => 'getThreeDS1Supported',
        'threeDS2CardRangeDetails' => 'getThreeDS2CardRangeDetails',
        'threeDS2supported' => 'getThreeDS2supported'
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
        $this->setIfExists('binDetails', $data ?? [], null);
        $this->setIfExists('dsPublicKeys', $data ?? [], null);
        $this->setIfExists('threeDS1Supported', $data ?? [], null);
        $this->setIfExists('threeDS2CardRangeDetails', $data ?? [], null);
        $this->setIfExists('threeDS2supported', $data ?? [], null);
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
     * Gets binDetails
     *
     * @return \Adyen\Model\BinLookup\BinDetail|null
     */
    public function getBinDetails()
    {
        return $this->container['binDetails'];
    }

    /**
     * Sets binDetails
     *
     * @param \Adyen\Model\BinLookup\BinDetail|null $binDetails binDetails
     *
     * @return self
     */
    public function setBinDetails($binDetails)
    {
        if (is_null($binDetails)) {
            throw new \InvalidArgumentException('non-nullable binDetails cannot be null');
        }
        $this->container['binDetails'] = $binDetails;

        return $this;
    }

    /**
     * Gets dsPublicKeys
     *
     * @return \Adyen\Model\BinLookup\DSPublicKeyDetail[]|null
     */
    public function getDsPublicKeys()
    {
        return $this->container['dsPublicKeys'];
    }

    /**
     * Sets dsPublicKeys
     *
     * @param \Adyen\Model\BinLookup\DSPublicKeyDetail[]|null $dsPublicKeys List of Directory Server (DS) public keys.
     *
     * @return self
     */
    public function setDsPublicKeys($dsPublicKeys)
    {
        if (is_null($dsPublicKeys)) {
            throw new \InvalidArgumentException('non-nullable dsPublicKeys cannot be null');
        }
        $this->container['dsPublicKeys'] = $dsPublicKeys;

        return $this;
    }

    /**
     * Gets threeDS1Supported
     *
     * @return bool|null
     */
    public function getThreeDS1Supported()
    {
        return $this->container['threeDS1Supported'];
    }

    /**
     * Sets threeDS1Supported
     *
     * @param bool|null $threeDS1Supported Indicator if 3D Secure 1 is supported.
     *
     * @return self
     */
    public function setThreeDS1Supported($threeDS1Supported)
    {
        if (is_null($threeDS1Supported)) {
            throw new \InvalidArgumentException('non-nullable threeDS1Supported cannot be null');
        }
        $this->container['threeDS1Supported'] = $threeDS1Supported;

        return $this;
    }

    /**
     * Gets threeDS2CardRangeDetails
     *
     * @return \Adyen\Model\BinLookup\ThreeDS2CardRangeDetail[]|null
     */
    public function getThreeDS2CardRangeDetails()
    {
        return $this->container['threeDS2CardRangeDetails'];
    }

    /**
     * Sets threeDS2CardRangeDetails
     *
     * @param \Adyen\Model\BinLookup\ThreeDS2CardRangeDetail[]|null $threeDS2CardRangeDetails List of brand and card range pairs.
     *
     * @return self
     */
    public function setThreeDS2CardRangeDetails($threeDS2CardRangeDetails)
    {
        if (is_null($threeDS2CardRangeDetails)) {
            throw new \InvalidArgumentException('non-nullable threeDS2CardRangeDetails cannot be null');
        }
        $this->container['threeDS2CardRangeDetails'] = $threeDS2CardRangeDetails;

        return $this;
    }

    /**
     * Gets threeDS2supported
     *
     * @return bool|null
     */
    public function getThreeDS2supported()
    {
        return $this->container['threeDS2supported'];
    }

    /**
     * Sets threeDS2supported
     *
     * @param bool|null $threeDS2supported Indicator if 3D Secure 2 is supported.
     *
     * @return self
     */
    public function setThreeDS2supported($threeDS2supported)
    {
        if (is_null($threeDS2supported)) {
            throw new \InvalidArgumentException('non-nullable threeDS2supported cannot be null');
        }
        $this->container['threeDS2supported'] = $threeDS2supported;

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
