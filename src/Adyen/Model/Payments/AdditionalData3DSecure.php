<?php

/**
 * Adyen Payment API
 *
 * The version of the OpenAPI document: 68
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\Payments;

use \ArrayAccess;
use Adyen\Model\Payments\ObjectSerializer;

/**
 * AdditionalData3DSecure Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AdditionalData3DSecure implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdditionalData3DSecure';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allow3DS2' => 'string',
        'challengeWindowSize' => 'string',
        'executeThreeD' => 'string',
        'mpiImplementationType' => 'string',
        'scaExemption' => 'string',
        'threeDSVersion' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'allow3DS2' => null,
        'challengeWindowSize' => null,
        'executeThreeD' => null,
        'mpiImplementationType' => null,
        'scaExemption' => null,
        'threeDSVersion' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'allow3DS2' => false,
        'challengeWindowSize' => false,
        'executeThreeD' => false,
        'mpiImplementationType' => false,
        'scaExemption' => false,
        'threeDSVersion' => false
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
        'allow3DS2' => 'allow3DS2',
        'challengeWindowSize' => 'challengeWindowSize',
        'executeThreeD' => 'executeThreeD',
        'mpiImplementationType' => 'mpiImplementationType',
        'scaExemption' => 'scaExemption',
        'threeDSVersion' => 'threeDSVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow3DS2' => 'setAllow3DS2',
        'challengeWindowSize' => 'setChallengeWindowSize',
        'executeThreeD' => 'setExecuteThreeD',
        'mpiImplementationType' => 'setMpiImplementationType',
        'scaExemption' => 'setScaExemption',
        'threeDSVersion' => 'setThreeDSVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow3DS2' => 'getAllow3DS2',
        'challengeWindowSize' => 'getChallengeWindowSize',
        'executeThreeD' => 'getExecuteThreeD',
        'mpiImplementationType' => 'getMpiImplementationType',
        'scaExemption' => 'getScaExemption',
        'threeDSVersion' => 'getThreeDSVersion'
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

    public const CHALLENGE_WINDOW_SIZE__01 = '01';
    public const CHALLENGE_WINDOW_SIZE__02 = '02';
    public const CHALLENGE_WINDOW_SIZE__03 = '03';
    public const CHALLENGE_WINDOW_SIZE__04 = '04';
    public const CHALLENGE_WINDOW_SIZE__05 = '05';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChallengeWindowSizeAllowableValues()
    {
        return [
            self::CHALLENGE_WINDOW_SIZE__01,
            self::CHALLENGE_WINDOW_SIZE__02,
            self::CHALLENGE_WINDOW_SIZE__03,
            self::CHALLENGE_WINDOW_SIZE__04,
            self::CHALLENGE_WINDOW_SIZE__05,
        ];
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
        $this->setIfExists('allow3DS2', $data ?? [], null);
        $this->setIfExists('challengeWindowSize', $data ?? [], null);
        $this->setIfExists('executeThreeD', $data ?? [], null);
        $this->setIfExists('mpiImplementationType', $data ?? [], null);
        $this->setIfExists('scaExemption', $data ?? [], null);
        $this->setIfExists('threeDSVersion', $data ?? [], null);
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

        $allowedValues = $this->getChallengeWindowSizeAllowableValues();
        if (!is_null($this->container['challengeWindowSize']) && !in_array($this->container['challengeWindowSize'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'challengeWindowSize', must be one of '%s'",
                $this->container['challengeWindowSize'],
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
     * Gets allow3DS2
     *
     * @return string|null
     */
    public function getAllow3DS2()
    {
        return $this->container['allow3DS2'];
    }

    /**
     * Sets allow3DS2
     *
     * @param string|null $allow3DS2 Indicates if you are able to process 3D Secure 2 transactions natively on your payment page. Send this parameter when you are using `/payments` endpoint with any of our [native 3D Secure 2 solutions](https://docs.adyen.com/online-payments/3d-secure/native-3ds2).   > This parameter only indicates readiness to support native 3D Secure 2 authentication. To specify if you _want_ to perform 3D Secure, use [Dynamic 3D Secure](/risk-management/dynamic-3d-secure) or send the `executeThreeD` parameter.  Possible values: * **true** - Ready to support native 3D Secure 2 authentication. Setting this to true does not mean always applying 3D Secure 2. Adyen still selects the version of 3D Secure based on configuration to optimize authorisation rates and improve the shopper's experience. * **false** – Not ready to support native 3D Secure 2 authentication. Adyen will not offer 3D Secure 2 to your shopper regardless of your configuration.
     *
     * @return self
     */
    public function setAllow3DS2($allow3DS2)
    {
        $this->container['allow3DS2'] = $allow3DS2;

        return $this;
    }

    /**
     * Gets challengeWindowSize
     *
     * @return string|null
     */
    public function getChallengeWindowSize()
    {
        return $this->container['challengeWindowSize'];
    }

    /**
     * Sets challengeWindowSize
     *
     * @param string|null $challengeWindowSize Dimensions of the 3DS2 challenge window to be displayed to the cardholder.  Possible values:  * **01** - size of 250x400  * **02** - size of 390x400 * **03** - size of 500x600 * **04** - size of 600x400 * **05** - Fullscreen
     *
     * @return self
     */
    public function setChallengeWindowSize($challengeWindowSize)
    {
        $allowedValues = $this->getChallengeWindowSizeAllowableValues();
        if (!in_array($challengeWindowSize, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'challengeWindowSize', must be one of '%s'",
                    $challengeWindowSize,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['challengeWindowSize'] = $challengeWindowSize;

        return $this;
    }

    /**
     * Gets executeThreeD
     *
     * @return string|null
     */
    public function getExecuteThreeD()
    {
        return $this->container['executeThreeD'];
    }

    /**
     * Sets executeThreeD
     *
     * @param string|null $executeThreeD Indicates if you want to perform 3D Secure authentication on a transaction.   > Alternatively, you can use [Dynamic 3D Secure](/risk-management/dynamic-3d-secure) to configure rules for applying 3D Secure.  Possible values: * **true** – Perform 3D Secure authentication. * **false** – Don't perform 3D Secure authentication. Note that this setting results in refusals if the issuer mandates 3D Secure because of the PSD2 directive  or other, national regulations.
     *
     * @return self
     */
    public function setExecuteThreeD($executeThreeD)
    {
        $this->container['executeThreeD'] = $executeThreeD;

        return $this;
    }

    /**
     * Gets mpiImplementationType
     *
     * @return string|null
     */
    public function getMpiImplementationType()
    {
        return $this->container['mpiImplementationType'];
    }

    /**
     * Sets mpiImplementationType
     *
     * @param string|null $mpiImplementationType In case of Secure+, this field must be set to **CUPSecurePlus**.
     *
     * @return self
     */
    public function setMpiImplementationType($mpiImplementationType)
    {
        $this->container['mpiImplementationType'] = $mpiImplementationType;

        return $this;
    }

    /**
     * Gets scaExemption
     *
     * @return string|null
     */
    public function getScaExemption()
    {
        return $this->container['scaExemption'];
    }

    /**
     * Sets scaExemption
     *
     * @param string|null $scaExemption Indicates the [exemption type](https://docs.adyen.com/payments-fundamentals/psd2-sca-compliance-and-implementation-guide#specifypreferenceinyourapirequest) that you want to request for the transaction.   Possible values: * **lowValue**  * **secureCorporate**  * **trustedBeneficiary**  * **transactionRiskAnalysis**
     *
     * @return self
     */
    public function setScaExemption($scaExemption)
    {
        $this->container['scaExemption'] = $scaExemption;

        return $this;
    }

    /**
     * Gets threeDSVersion
     *
     * @return string|null
     */
    public function getThreeDSVersion()
    {
        return $this->container['threeDSVersion'];
    }

    /**
     * Sets threeDSVersion
     *
     * @param string|null $threeDSVersion Indicates your preference for the 3D Secure version.  > If you use this parameter, you override the checks from Adyen's Authentication Engine. We recommend to use this field only if you have an extensive knowledge of 3D Secure.  Possible values: * **1.0.2**: Apply 3D Secure version 1.0.2.  * **2.1.0**: Apply 3D Secure version 2.1.0.  * **2.2.0**: Apply 3D Secure version 2.2.0. If the issuer does not support version 2.2.0, we will fall back to 2.1.0.  The following rules apply: * If you prefer 2.1.0 or 2.2.0 but we receive a negative `transStatus` in the `ARes`, we will apply the fallback policy configured in your account. For example, if the configuration is to fall back to 3D Secure 1, we will apply version 1.0.2. * If you prefer 2.1.0 or 2.2.0 but the BIN is not enrolled, you will receive an error.
     *
     * @return self
     */
    public function setThreeDSVersion($threeDSVersion)
    {
        $this->container['threeDSVersion'] = $threeDSVersion;

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
