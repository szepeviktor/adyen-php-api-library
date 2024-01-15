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
 * ThreeDS2ResponseData Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ThreeDS2ResponseData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ThreeDS2ResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'acsChallengeMandated' => 'string',
        'acsOperatorID' => 'string',
        'acsReferenceNumber' => 'string',
        'acsSignedContent' => 'string',
        'acsTransID' => 'string',
        'acsURL' => 'string',
        'authenticationType' => 'string',
        'cardHolderInfo' => 'string',
        'cavvAlgorithm' => 'string',
        'challengeIndicator' => 'string',
        'dsReferenceNumber' => 'string',
        'dsTransID' => 'string',
        'exemptionIndicator' => 'string',
        'messageVersion' => 'string',
        'riskScore' => 'string',
        'sdkEphemPubKey' => 'string',
        'threeDSServerTransID' => 'string',
        'transStatus' => 'string',
        'transStatusReason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'acsChallengeMandated' => null,
        'acsOperatorID' => null,
        'acsReferenceNumber' => null,
        'acsSignedContent' => null,
        'acsTransID' => null,
        'acsURL' => null,
        'authenticationType' => null,
        'cardHolderInfo' => null,
        'cavvAlgorithm' => null,
        'challengeIndicator' => null,
        'dsReferenceNumber' => null,
        'dsTransID' => null,
        'exemptionIndicator' => null,
        'messageVersion' => null,
        'riskScore' => null,
        'sdkEphemPubKey' => null,
        'threeDSServerTransID' => null,
        'transStatus' => null,
        'transStatusReason' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'acsChallengeMandated' => false,
        'acsOperatorID' => false,
        'acsReferenceNumber' => false,
        'acsSignedContent' => false,
        'acsTransID' => false,
        'acsURL' => false,
        'authenticationType' => false,
        'cardHolderInfo' => false,
        'cavvAlgorithm' => false,
        'challengeIndicator' => false,
        'dsReferenceNumber' => false,
        'dsTransID' => false,
        'exemptionIndicator' => false,
        'messageVersion' => false,
        'riskScore' => false,
        'sdkEphemPubKey' => false,
        'threeDSServerTransID' => false,
        'transStatus' => false,
        'transStatusReason' => false
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
        'acsChallengeMandated' => 'acsChallengeMandated',
        'acsOperatorID' => 'acsOperatorID',
        'acsReferenceNumber' => 'acsReferenceNumber',
        'acsSignedContent' => 'acsSignedContent',
        'acsTransID' => 'acsTransID',
        'acsURL' => 'acsURL',
        'authenticationType' => 'authenticationType',
        'cardHolderInfo' => 'cardHolderInfo',
        'cavvAlgorithm' => 'cavvAlgorithm',
        'challengeIndicator' => 'challengeIndicator',
        'dsReferenceNumber' => 'dsReferenceNumber',
        'dsTransID' => 'dsTransID',
        'exemptionIndicator' => 'exemptionIndicator',
        'messageVersion' => 'messageVersion',
        'riskScore' => 'riskScore',
        'sdkEphemPubKey' => 'sdkEphemPubKey',
        'threeDSServerTransID' => 'threeDSServerTransID',
        'transStatus' => 'transStatus',
        'transStatusReason' => 'transStatusReason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'acsChallengeMandated' => 'setAcsChallengeMandated',
        'acsOperatorID' => 'setAcsOperatorID',
        'acsReferenceNumber' => 'setAcsReferenceNumber',
        'acsSignedContent' => 'setAcsSignedContent',
        'acsTransID' => 'setAcsTransID',
        'acsURL' => 'setAcsURL',
        'authenticationType' => 'setAuthenticationType',
        'cardHolderInfo' => 'setCardHolderInfo',
        'cavvAlgorithm' => 'setCavvAlgorithm',
        'challengeIndicator' => 'setChallengeIndicator',
        'dsReferenceNumber' => 'setDsReferenceNumber',
        'dsTransID' => 'setDsTransID',
        'exemptionIndicator' => 'setExemptionIndicator',
        'messageVersion' => 'setMessageVersion',
        'riskScore' => 'setRiskScore',
        'sdkEphemPubKey' => 'setSdkEphemPubKey',
        'threeDSServerTransID' => 'setThreeDSServerTransID',
        'transStatus' => 'setTransStatus',
        'transStatusReason' => 'setTransStatusReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'acsChallengeMandated' => 'getAcsChallengeMandated',
        'acsOperatorID' => 'getAcsOperatorID',
        'acsReferenceNumber' => 'getAcsReferenceNumber',
        'acsSignedContent' => 'getAcsSignedContent',
        'acsTransID' => 'getAcsTransID',
        'acsURL' => 'getAcsURL',
        'authenticationType' => 'getAuthenticationType',
        'cardHolderInfo' => 'getCardHolderInfo',
        'cavvAlgorithm' => 'getCavvAlgorithm',
        'challengeIndicator' => 'getChallengeIndicator',
        'dsReferenceNumber' => 'getDsReferenceNumber',
        'dsTransID' => 'getDsTransID',
        'exemptionIndicator' => 'getExemptionIndicator',
        'messageVersion' => 'getMessageVersion',
        'riskScore' => 'getRiskScore',
        'sdkEphemPubKey' => 'getSdkEphemPubKey',
        'threeDSServerTransID' => 'getThreeDSServerTransID',
        'transStatus' => 'getTransStatus',
        'transStatusReason' => 'getTransStatusReason'
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
        $this->setIfExists('acsChallengeMandated', $data ?? [], null);
        $this->setIfExists('acsOperatorID', $data ?? [], null);
        $this->setIfExists('acsReferenceNumber', $data ?? [], null);
        $this->setIfExists('acsSignedContent', $data ?? [], null);
        $this->setIfExists('acsTransID', $data ?? [], null);
        $this->setIfExists('acsURL', $data ?? [], null);
        $this->setIfExists('authenticationType', $data ?? [], null);
        $this->setIfExists('cardHolderInfo', $data ?? [], null);
        $this->setIfExists('cavvAlgorithm', $data ?? [], null);
        $this->setIfExists('challengeIndicator', $data ?? [], null);
        $this->setIfExists('dsReferenceNumber', $data ?? [], null);
        $this->setIfExists('dsTransID', $data ?? [], null);
        $this->setIfExists('exemptionIndicator', $data ?? [], null);
        $this->setIfExists('messageVersion', $data ?? [], null);
        $this->setIfExists('riskScore', $data ?? [], null);
        $this->setIfExists('sdkEphemPubKey', $data ?? [], null);
        $this->setIfExists('threeDSServerTransID', $data ?? [], null);
        $this->setIfExists('transStatus', $data ?? [], null);
        $this->setIfExists('transStatusReason', $data ?? [], null);
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
     * Gets acsChallengeMandated
     *
     * @return string|null
     */
    public function getAcsChallengeMandated()
    {
        return $this->container['acsChallengeMandated'];
    }

    /**
     * Sets acsChallengeMandated
     *
     * @param string|null $acsChallengeMandated acsChallengeMandated
     *
     * @return self
     */
    public function setAcsChallengeMandated($acsChallengeMandated)
    {
        if (is_null($acsChallengeMandated)) {
            throw new \InvalidArgumentException('non-nullable acsChallengeMandated cannot be null');
        }
        $this->container['acsChallengeMandated'] = $acsChallengeMandated;

        return $this;
    }

    /**
     * Gets acsOperatorID
     *
     * @return string|null
     */
    public function getAcsOperatorID()
    {
        return $this->container['acsOperatorID'];
    }

    /**
     * Sets acsOperatorID
     *
     * @param string|null $acsOperatorID acsOperatorID
     *
     * @return self
     */
    public function setAcsOperatorID($acsOperatorID)
    {
        if (is_null($acsOperatorID)) {
            throw new \InvalidArgumentException('non-nullable acsOperatorID cannot be null');
        }
        $this->container['acsOperatorID'] = $acsOperatorID;

        return $this;
    }

    /**
     * Gets acsReferenceNumber
     *
     * @return string|null
     */
    public function getAcsReferenceNumber()
    {
        return $this->container['acsReferenceNumber'];
    }

    /**
     * Sets acsReferenceNumber
     *
     * @param string|null $acsReferenceNumber acsReferenceNumber
     *
     * @return self
     */
    public function setAcsReferenceNumber($acsReferenceNumber)
    {
        if (is_null($acsReferenceNumber)) {
            throw new \InvalidArgumentException('non-nullable acsReferenceNumber cannot be null');
        }
        $this->container['acsReferenceNumber'] = $acsReferenceNumber;

        return $this;
    }

    /**
     * Gets acsSignedContent
     *
     * @return string|null
     */
    public function getAcsSignedContent()
    {
        return $this->container['acsSignedContent'];
    }

    /**
     * Sets acsSignedContent
     *
     * @param string|null $acsSignedContent acsSignedContent
     *
     * @return self
     */
    public function setAcsSignedContent($acsSignedContent)
    {
        if (is_null($acsSignedContent)) {
            throw new \InvalidArgumentException('non-nullable acsSignedContent cannot be null');
        }
        $this->container['acsSignedContent'] = $acsSignedContent;

        return $this;
    }

    /**
     * Gets acsTransID
     *
     * @return string|null
     */
    public function getAcsTransID()
    {
        return $this->container['acsTransID'];
    }

    /**
     * Sets acsTransID
     *
     * @param string|null $acsTransID acsTransID
     *
     * @return self
     */
    public function setAcsTransID($acsTransID)
    {
        if (is_null($acsTransID)) {
            throw new \InvalidArgumentException('non-nullable acsTransID cannot be null');
        }
        $this->container['acsTransID'] = $acsTransID;

        return $this;
    }

    /**
     * Gets acsURL
     *
     * @return string|null
     */
    public function getAcsURL()
    {
        return $this->container['acsURL'];
    }

    /**
     * Sets acsURL
     *
     * @param string|null $acsURL acsURL
     *
     * @return self
     */
    public function setAcsURL($acsURL)
    {
        if (is_null($acsURL)) {
            throw new \InvalidArgumentException('non-nullable acsURL cannot be null');
        }
        $this->container['acsURL'] = $acsURL;

        return $this;
    }

    /**
     * Gets authenticationType
     *
     * @return string|null
     */
    public function getAuthenticationType()
    {
        return $this->container['authenticationType'];
    }

    /**
     * Sets authenticationType
     *
     * @param string|null $authenticationType authenticationType
     *
     * @return self
     */
    public function setAuthenticationType($authenticationType)
    {
        if (is_null($authenticationType)) {
            throw new \InvalidArgumentException('non-nullable authenticationType cannot be null');
        }
        $this->container['authenticationType'] = $authenticationType;

        return $this;
    }

    /**
     * Gets cardHolderInfo
     *
     * @return string|null
     */
    public function getCardHolderInfo()
    {
        return $this->container['cardHolderInfo'];
    }

    /**
     * Sets cardHolderInfo
     *
     * @param string|null $cardHolderInfo cardHolderInfo
     *
     * @return self
     */
    public function setCardHolderInfo($cardHolderInfo)
    {
        if (is_null($cardHolderInfo)) {
            throw new \InvalidArgumentException('non-nullable cardHolderInfo cannot be null');
        }
        $this->container['cardHolderInfo'] = $cardHolderInfo;

        return $this;
    }

    /**
     * Gets cavvAlgorithm
     *
     * @return string|null
     */
    public function getCavvAlgorithm()
    {
        return $this->container['cavvAlgorithm'];
    }

    /**
     * Sets cavvAlgorithm
     *
     * @param string|null $cavvAlgorithm cavvAlgorithm
     *
     * @return self
     */
    public function setCavvAlgorithm($cavvAlgorithm)
    {
        if (is_null($cavvAlgorithm)) {
            throw new \InvalidArgumentException('non-nullable cavvAlgorithm cannot be null');
        }
        $this->container['cavvAlgorithm'] = $cavvAlgorithm;

        return $this;
    }

    /**
     * Gets challengeIndicator
     *
     * @return string|null
     */
    public function getChallengeIndicator()
    {
        return $this->container['challengeIndicator'];
    }

    /**
     * Sets challengeIndicator
     *
     * @param string|null $challengeIndicator challengeIndicator
     *
     * @return self
     */
    public function setChallengeIndicator($challengeIndicator)
    {
        if (is_null($challengeIndicator)) {
            throw new \InvalidArgumentException('non-nullable challengeIndicator cannot be null');
        }
        $this->container['challengeIndicator'] = $challengeIndicator;

        return $this;
    }

    /**
     * Gets dsReferenceNumber
     *
     * @return string|null
     */
    public function getDsReferenceNumber()
    {
        return $this->container['dsReferenceNumber'];
    }

    /**
     * Sets dsReferenceNumber
     *
     * @param string|null $dsReferenceNumber dsReferenceNumber
     *
     * @return self
     */
    public function setDsReferenceNumber($dsReferenceNumber)
    {
        if (is_null($dsReferenceNumber)) {
            throw new \InvalidArgumentException('non-nullable dsReferenceNumber cannot be null');
        }
        $this->container['dsReferenceNumber'] = $dsReferenceNumber;

        return $this;
    }

    /**
     * Gets dsTransID
     *
     * @return string|null
     */
    public function getDsTransID()
    {
        return $this->container['dsTransID'];
    }

    /**
     * Sets dsTransID
     *
     * @param string|null $dsTransID dsTransID
     *
     * @return self
     */
    public function setDsTransID($dsTransID)
    {
        if (is_null($dsTransID)) {
            throw new \InvalidArgumentException('non-nullable dsTransID cannot be null');
        }
        $this->container['dsTransID'] = $dsTransID;

        return $this;
    }

    /**
     * Gets exemptionIndicator
     *
     * @return string|null
     */
    public function getExemptionIndicator()
    {
        return $this->container['exemptionIndicator'];
    }

    /**
     * Sets exemptionIndicator
     *
     * @param string|null $exemptionIndicator exemptionIndicator
     *
     * @return self
     */
    public function setExemptionIndicator($exemptionIndicator)
    {
        if (is_null($exemptionIndicator)) {
            throw new \InvalidArgumentException('non-nullable exemptionIndicator cannot be null');
        }
        $this->container['exemptionIndicator'] = $exemptionIndicator;

        return $this;
    }

    /**
     * Gets messageVersion
     *
     * @return string|null
     */
    public function getMessageVersion()
    {
        return $this->container['messageVersion'];
    }

    /**
     * Sets messageVersion
     *
     * @param string|null $messageVersion messageVersion
     *
     * @return self
     */
    public function setMessageVersion($messageVersion)
    {
        if (is_null($messageVersion)) {
            throw new \InvalidArgumentException('non-nullable messageVersion cannot be null');
        }
        $this->container['messageVersion'] = $messageVersion;

        return $this;
    }

    /**
     * Gets riskScore
     *
     * @return string|null
     */
    public function getRiskScore()
    {
        return $this->container['riskScore'];
    }

    /**
     * Sets riskScore
     *
     * @param string|null $riskScore riskScore
     *
     * @return self
     */
    public function setRiskScore($riskScore)
    {
        if (is_null($riskScore)) {
            throw new \InvalidArgumentException('non-nullable riskScore cannot be null');
        }
        $this->container['riskScore'] = $riskScore;

        return $this;
    }

    /**
     * Gets sdkEphemPubKey
     *
     * @return string|null
     */
    public function getSdkEphemPubKey()
    {
        return $this->container['sdkEphemPubKey'];
    }

    /**
     * Sets sdkEphemPubKey
     *
     * @param string|null $sdkEphemPubKey sdkEphemPubKey
     *
     * @return self
     */
    public function setSdkEphemPubKey($sdkEphemPubKey)
    {
        if (is_null($sdkEphemPubKey)) {
            throw new \InvalidArgumentException('non-nullable sdkEphemPubKey cannot be null');
        }
        $this->container['sdkEphemPubKey'] = $sdkEphemPubKey;

        return $this;
    }

    /**
     * Gets threeDSServerTransID
     *
     * @return string|null
     */
    public function getThreeDSServerTransID()
    {
        return $this->container['threeDSServerTransID'];
    }

    /**
     * Sets threeDSServerTransID
     *
     * @param string|null $threeDSServerTransID threeDSServerTransID
     *
     * @return self
     */
    public function setThreeDSServerTransID($threeDSServerTransID)
    {
        if (is_null($threeDSServerTransID)) {
            throw new \InvalidArgumentException('non-nullable threeDSServerTransID cannot be null');
        }
        $this->container['threeDSServerTransID'] = $threeDSServerTransID;

        return $this;
    }

    /**
     * Gets transStatus
     *
     * @return string|null
     */
    public function getTransStatus()
    {
        return $this->container['transStatus'];
    }

    /**
     * Sets transStatus
     *
     * @param string|null $transStatus transStatus
     *
     * @return self
     */
    public function setTransStatus($transStatus)
    {
        if (is_null($transStatus)) {
            throw new \InvalidArgumentException('non-nullable transStatus cannot be null');
        }
        $this->container['transStatus'] = $transStatus;

        return $this;
    }

    /**
     * Gets transStatusReason
     *
     * @return string|null
     */
    public function getTransStatusReason()
    {
        return $this->container['transStatusReason'];
    }

    /**
     * Sets transStatusReason
     *
     * @param string|null $transStatusReason transStatusReason
     *
     * @return self
     */
    public function setTransStatusReason($transStatusReason)
    {
        if (is_null($transStatusReason)) {
            throw new \InvalidArgumentException('non-nullable transStatusReason cannot be null');
        }
        $this->container['transStatusReason'] = $transStatusReason;

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
