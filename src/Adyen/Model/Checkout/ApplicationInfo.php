<?php

/**
 * Adyen Checkout API
 *
 * The version of the OpenAPI document: 71
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\Checkout;

use \ArrayAccess;
use Adyen\Model\Checkout\ObjectSerializer;

/**
 * ApplicationInfo Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApplicationInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApplicationInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'adyenLibrary' => '\Adyen\Model\Checkout\CommonField',
        'adyenPaymentSource' => '\Adyen\Model\Checkout\CommonField',
        'externalPlatform' => '\Adyen\Model\Checkout\ExternalPlatform',
        'merchantApplication' => '\Adyen\Model\Checkout\CommonField',
        'merchantDevice' => '\Adyen\Model\Checkout\MerchantDevice',
        'shopperInteractionDevice' => '\Adyen\Model\Checkout\ShopperInteractionDevice'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'adyenLibrary' => null,
        'adyenPaymentSource' => null,
        'externalPlatform' => null,
        'merchantApplication' => null,
        'merchantDevice' => null,
        'shopperInteractionDevice' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'adyenLibrary' => false,
        'adyenPaymentSource' => false,
        'externalPlatform' => false,
        'merchantApplication' => false,
        'merchantDevice' => false,
        'shopperInteractionDevice' => false
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
        'adyenLibrary' => 'adyenLibrary',
        'adyenPaymentSource' => 'adyenPaymentSource',
        'externalPlatform' => 'externalPlatform',
        'merchantApplication' => 'merchantApplication',
        'merchantDevice' => 'merchantDevice',
        'shopperInteractionDevice' => 'shopperInteractionDevice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adyenLibrary' => 'setAdyenLibrary',
        'adyenPaymentSource' => 'setAdyenPaymentSource',
        'externalPlatform' => 'setExternalPlatform',
        'merchantApplication' => 'setMerchantApplication',
        'merchantDevice' => 'setMerchantDevice',
        'shopperInteractionDevice' => 'setShopperInteractionDevice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adyenLibrary' => 'getAdyenLibrary',
        'adyenPaymentSource' => 'getAdyenPaymentSource',
        'externalPlatform' => 'getExternalPlatform',
        'merchantApplication' => 'getMerchantApplication',
        'merchantDevice' => 'getMerchantDevice',
        'shopperInteractionDevice' => 'getShopperInteractionDevice'
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
        $this->setIfExists('adyenLibrary', $data ?? [], null);
        $this->setIfExists('adyenPaymentSource', $data ?? [], null);
        $this->setIfExists('externalPlatform', $data ?? [], null);
        $this->setIfExists('merchantApplication', $data ?? [], null);
        $this->setIfExists('merchantDevice', $data ?? [], null);
        $this->setIfExists('shopperInteractionDevice', $data ?? [], null);
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
     * Gets adyenLibrary
     *
     * @return \Adyen\Model\Checkout\CommonField|null
     */
    public function getAdyenLibrary()
    {
        return $this->container['adyenLibrary'];
    }

    /**
     * Sets adyenLibrary
     *
     * @param \Adyen\Model\Checkout\CommonField|null $adyenLibrary adyenLibrary
     *
     * @return self
     */
    public function setAdyenLibrary($adyenLibrary)
    {
        if (is_null($adyenLibrary)) {
            throw new \InvalidArgumentException('non-nullable adyenLibrary cannot be null');
        }
        $this->container['adyenLibrary'] = $adyenLibrary;

        return $this;
    }

    /**
     * Gets adyenPaymentSource
     *
     * @return \Adyen\Model\Checkout\CommonField|null
     */
    public function getAdyenPaymentSource()
    {
        return $this->container['adyenPaymentSource'];
    }

    /**
     * Sets adyenPaymentSource
     *
     * @param \Adyen\Model\Checkout\CommonField|null $adyenPaymentSource adyenPaymentSource
     *
     * @return self
     */
    public function setAdyenPaymentSource($adyenPaymentSource)
    {
        if (is_null($adyenPaymentSource)) {
            throw new \InvalidArgumentException('non-nullable adyenPaymentSource cannot be null');
        }
        $this->container['adyenPaymentSource'] = $adyenPaymentSource;

        return $this;
    }

    /**
     * Gets externalPlatform
     *
     * @return \Adyen\Model\Checkout\ExternalPlatform|null
     */
    public function getExternalPlatform()
    {
        return $this->container['externalPlatform'];
    }

    /**
     * Sets externalPlatform
     *
     * @param \Adyen\Model\Checkout\ExternalPlatform|null $externalPlatform externalPlatform
     *
     * @return self
     */
    public function setExternalPlatform($externalPlatform)
    {
        if (is_null($externalPlatform)) {
            throw new \InvalidArgumentException('non-nullable externalPlatform cannot be null');
        }
        $this->container['externalPlatform'] = $externalPlatform;

        return $this;
    }

    /**
     * Gets merchantApplication
     *
     * @return \Adyen\Model\Checkout\CommonField|null
     */
    public function getMerchantApplication()
    {
        return $this->container['merchantApplication'];
    }

    /**
     * Sets merchantApplication
     *
     * @param \Adyen\Model\Checkout\CommonField|null $merchantApplication merchantApplication
     *
     * @return self
     */
    public function setMerchantApplication($merchantApplication)
    {
        if (is_null($merchantApplication)) {
            throw new \InvalidArgumentException('non-nullable merchantApplication cannot be null');
        }
        $this->container['merchantApplication'] = $merchantApplication;

        return $this;
    }

    /**
     * Gets merchantDevice
     *
     * @return \Adyen\Model\Checkout\MerchantDevice|null
     */
    public function getMerchantDevice()
    {
        return $this->container['merchantDevice'];
    }

    /**
     * Sets merchantDevice
     *
     * @param \Adyen\Model\Checkout\MerchantDevice|null $merchantDevice merchantDevice
     *
     * @return self
     */
    public function setMerchantDevice($merchantDevice)
    {
        if (is_null($merchantDevice)) {
            throw new \InvalidArgumentException('non-nullable merchantDevice cannot be null');
        }
        $this->container['merchantDevice'] = $merchantDevice;

        return $this;
    }

    /**
     * Gets shopperInteractionDevice
     *
     * @return \Adyen\Model\Checkout\ShopperInteractionDevice|null
     */
    public function getShopperInteractionDevice()
    {
        return $this->container['shopperInteractionDevice'];
    }

    /**
     * Sets shopperInteractionDevice
     *
     * @param \Adyen\Model\Checkout\ShopperInteractionDevice|null $shopperInteractionDevice shopperInteractionDevice
     *
     * @return self
     */
    public function setShopperInteractionDevice($shopperInteractionDevice)
    {
        if (is_null($shopperInteractionDevice)) {
            throw new \InvalidArgumentException('non-nullable shopperInteractionDevice cannot be null');
        }
        $this->container['shopperInteractionDevice'] = $shopperInteractionDevice;

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
