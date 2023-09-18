<?php

/**
 * Management API
 *
 * The version of the OpenAPI document: 1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\Management;

use \ArrayAccess;
use Adyen\Model\Management\ObjectSerializer;

/**
 * PaymentMethod Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentMethod implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentMethod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'afterpayTouch' => '\Adyen\Model\Management\AfterpayTouchInfo',
        'allowed' => 'bool',
        'applePay' => '\Adyen\Model\Management\ApplePayInfo',
        'bcmc' => '\Adyen\Model\Management\BcmcInfo',
        'businessLineId' => 'string',
        'cartesBancaires' => '\Adyen\Model\Management\CartesBancairesInfo',
        'clearpay' => '\Adyen\Model\Management\ClearpayInfo',
        'countries' => 'string[]',
        'currencies' => 'string[]',
        'customRoutingFlags' => 'string[]',
        'enabled' => 'bool',
        'giroPay' => '\Adyen\Model\Management\GiroPayInfo',
        'googlePay' => '\Adyen\Model\Management\GooglePayInfo',
        'id' => 'string',
        'klarna' => '\Adyen\Model\Management\KlarnaInfo',
        'mealVoucherFR' => '\Adyen\Model\Management\MealVoucherFRInfo',
        'paypal' => '\Adyen\Model\Management\PayPalInfo',
        'reference' => 'string',
        'shopperInteraction' => 'string',
        'sofort' => '\Adyen\Model\Management\SofortInfo',
        'storeId' => 'string',
        'swish' => '\Adyen\Model\Management\SwishInfo',
        'twint' => '\Adyen\Model\Management\TwintInfo',
        'type' => 'string',
        'verificationStatus' => 'string',
        'vipps' => '\Adyen\Model\Management\VippsInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'afterpayTouch' => null,
        'allowed' => null,
        'applePay' => null,
        'bcmc' => null,
        'businessLineId' => null,
        'cartesBancaires' => null,
        'clearpay' => null,
        'countries' => null,
        'currencies' => null,
        'customRoutingFlags' => null,
        'enabled' => null,
        'giroPay' => null,
        'googlePay' => null,
        'id' => null,
        'klarna' => null,
        'mealVoucherFR' => null,
        'paypal' => null,
        'reference' => null,
        'shopperInteraction' => null,
        'sofort' => null,
        'storeId' => null,
        'swish' => null,
        'twint' => null,
        'type' => null,
        'verificationStatus' => null,
        'vipps' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'afterpayTouch' => false,
        'allowed' => false,
        'applePay' => false,
        'bcmc' => false,
        'businessLineId' => false,
        'cartesBancaires' => false,
        'clearpay' => false,
        'countries' => false,
        'currencies' => false,
        'customRoutingFlags' => false,
        'enabled' => false,
        'giroPay' => false,
        'googlePay' => false,
        'id' => false,
        'klarna' => false,
        'mealVoucherFR' => false,
        'paypal' => false,
        'reference' => false,
        'shopperInteraction' => false,
        'sofort' => false,
        'storeId' => false,
        'swish' => false,
        'twint' => false,
        'type' => false,
        'verificationStatus' => false,
        'vipps' => false
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
        'afterpayTouch' => 'afterpayTouch',
        'allowed' => 'allowed',
        'applePay' => 'applePay',
        'bcmc' => 'bcmc',
        'businessLineId' => 'businessLineId',
        'cartesBancaires' => 'cartesBancaires',
        'clearpay' => 'clearpay',
        'countries' => 'countries',
        'currencies' => 'currencies',
        'customRoutingFlags' => 'customRoutingFlags',
        'enabled' => 'enabled',
        'giroPay' => 'giroPay',
        'googlePay' => 'googlePay',
        'id' => 'id',
        'klarna' => 'klarna',
        'mealVoucherFR' => 'mealVoucher_FR',
        'paypal' => 'paypal',
        'reference' => 'reference',
        'shopperInteraction' => 'shopperInteraction',
        'sofort' => 'sofort',
        'storeId' => 'storeId',
        'swish' => 'swish',
        'twint' => 'twint',
        'type' => 'type',
        'verificationStatus' => 'verificationStatus',
        'vipps' => 'vipps'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'afterpayTouch' => 'setAfterpayTouch',
        'allowed' => 'setAllowed',
        'applePay' => 'setApplePay',
        'bcmc' => 'setBcmc',
        'businessLineId' => 'setBusinessLineId',
        'cartesBancaires' => 'setCartesBancaires',
        'clearpay' => 'setClearpay',
        'countries' => 'setCountries',
        'currencies' => 'setCurrencies',
        'customRoutingFlags' => 'setCustomRoutingFlags',
        'enabled' => 'setEnabled',
        'giroPay' => 'setGiroPay',
        'googlePay' => 'setGooglePay',
        'id' => 'setId',
        'klarna' => 'setKlarna',
        'mealVoucherFR' => 'setMealVoucherFR',
        'paypal' => 'setPaypal',
        'reference' => 'setReference',
        'shopperInteraction' => 'setShopperInteraction',
        'sofort' => 'setSofort',
        'storeId' => 'setStoreId',
        'swish' => 'setSwish',
        'twint' => 'setTwint',
        'type' => 'setType',
        'verificationStatus' => 'setVerificationStatus',
        'vipps' => 'setVipps'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'afterpayTouch' => 'getAfterpayTouch',
        'allowed' => 'getAllowed',
        'applePay' => 'getApplePay',
        'bcmc' => 'getBcmc',
        'businessLineId' => 'getBusinessLineId',
        'cartesBancaires' => 'getCartesBancaires',
        'clearpay' => 'getClearpay',
        'countries' => 'getCountries',
        'currencies' => 'getCurrencies',
        'customRoutingFlags' => 'getCustomRoutingFlags',
        'enabled' => 'getEnabled',
        'giroPay' => 'getGiroPay',
        'googlePay' => 'getGooglePay',
        'id' => 'getId',
        'klarna' => 'getKlarna',
        'mealVoucherFR' => 'getMealVoucherFR',
        'paypal' => 'getPaypal',
        'reference' => 'getReference',
        'shopperInteraction' => 'getShopperInteraction',
        'sofort' => 'getSofort',
        'storeId' => 'getStoreId',
        'swish' => 'getSwish',
        'twint' => 'getTwint',
        'type' => 'getType',
        'verificationStatus' => 'getVerificationStatus',
        'vipps' => 'getVipps'
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

    public const VERIFICATION_STATUS_VALID = 'valid';
    public const VERIFICATION_STATUS_PENDING = 'pending';
    public const VERIFICATION_STATUS_INVALID = 'invalid';
    public const VERIFICATION_STATUS_REJECTED = 'rejected';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVerificationStatusAllowableValues()
    {
        return [
            self::VERIFICATION_STATUS_VALID,
            self::VERIFICATION_STATUS_PENDING,
            self::VERIFICATION_STATUS_INVALID,
            self::VERIFICATION_STATUS_REJECTED,
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
        $this->setIfExists('afterpayTouch', $data ?? [], null);
        $this->setIfExists('allowed', $data ?? [], null);
        $this->setIfExists('applePay', $data ?? [], null);
        $this->setIfExists('bcmc', $data ?? [], null);
        $this->setIfExists('businessLineId', $data ?? [], null);
        $this->setIfExists('cartesBancaires', $data ?? [], null);
        $this->setIfExists('clearpay', $data ?? [], null);
        $this->setIfExists('countries', $data ?? [], null);
        $this->setIfExists('currencies', $data ?? [], null);
        $this->setIfExists('customRoutingFlags', $data ?? [], null);
        $this->setIfExists('enabled', $data ?? [], null);
        $this->setIfExists('giroPay', $data ?? [], null);
        $this->setIfExists('googlePay', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('klarna', $data ?? [], null);
        $this->setIfExists('mealVoucherFR', $data ?? [], null);
        $this->setIfExists('paypal', $data ?? [], null);
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('shopperInteraction', $data ?? [], null);
        $this->setIfExists('sofort', $data ?? [], null);
        $this->setIfExists('storeId', $data ?? [], null);
        $this->setIfExists('swish', $data ?? [], null);
        $this->setIfExists('twint', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('verificationStatus', $data ?? [], null);
        $this->setIfExists('vipps', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        $allowedValues = $this->getVerificationStatusAllowableValues();
        if (!is_null($this->container['verificationStatus']) && !in_array($this->container['verificationStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'verificationStatus', must be one of '%s'",
                $this->container['verificationStatus'],
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
     * Gets afterpayTouch
     *
     * @return \Adyen\Model\Management\AfterpayTouchInfo|null
     */
    public function getAfterpayTouch()
    {
        return $this->container['afterpayTouch'];
    }

    /**
     * Sets afterpayTouch
     *
     * @param \Adyen\Model\Management\AfterpayTouchInfo|null $afterpayTouch afterpayTouch
     *
     * @return self
     */
    public function setAfterpayTouch($afterpayTouch)
    {
        if (is_null($afterpayTouch)) {
            throw new \InvalidArgumentException('non-nullable afterpayTouch cannot be null');
        }
        $this->container['afterpayTouch'] = $afterpayTouch;

        return $this;
    }

    /**
     * Gets allowed
     *
     * @return bool|null
     */
    public function getAllowed()
    {
        return $this->container['allowed'];
    }

    /**
     * Sets allowed
     *
     * @param bool|null $allowed Indicates whether receiving payments is allowed. This value is set to **true** by Adyen after screening your merchant account.
     *
     * @return self
     */
    public function setAllowed($allowed)
    {
        if (is_null($allowed)) {
            throw new \InvalidArgumentException('non-nullable allowed cannot be null');
        }
        $this->container['allowed'] = $allowed;

        return $this;
    }

    /**
     * Gets applePay
     *
     * @return \Adyen\Model\Management\ApplePayInfo|null
     */
    public function getApplePay()
    {
        return $this->container['applePay'];
    }

    /**
     * Sets applePay
     *
     * @param \Adyen\Model\Management\ApplePayInfo|null $applePay applePay
     *
     * @return self
     */
    public function setApplePay($applePay)
    {
        if (is_null($applePay)) {
            throw new \InvalidArgumentException('non-nullable applePay cannot be null');
        }
        $this->container['applePay'] = $applePay;

        return $this;
    }

    /**
     * Gets bcmc
     *
     * @return \Adyen\Model\Management\BcmcInfo|null
     */
    public function getBcmc()
    {
        return $this->container['bcmc'];
    }

    /**
     * Sets bcmc
     *
     * @param \Adyen\Model\Management\BcmcInfo|null $bcmc bcmc
     *
     * @return self
     */
    public function setBcmc($bcmc)
    {
        if (is_null($bcmc)) {
            throw new \InvalidArgumentException('non-nullable bcmc cannot be null');
        }
        $this->container['bcmc'] = $bcmc;

        return $this;
    }

    /**
     * Gets businessLineId
     *
     * @return string|null
     */
    public function getBusinessLineId()
    {
        return $this->container['businessLineId'];
    }

    /**
     * Sets businessLineId
     *
     * @param string|null $businessLineId The unique identifier of the business line.
     *
     * @return self
     */
    public function setBusinessLineId($businessLineId)
    {
        if (is_null($businessLineId)) {
            throw new \InvalidArgumentException('non-nullable businessLineId cannot be null');
        }
        $this->container['businessLineId'] = $businessLineId;

        return $this;
    }

    /**
     * Gets cartesBancaires
     *
     * @return \Adyen\Model\Management\CartesBancairesInfo|null
     */
    public function getCartesBancaires()
    {
        return $this->container['cartesBancaires'];
    }

    /**
     * Sets cartesBancaires
     *
     * @param \Adyen\Model\Management\CartesBancairesInfo|null $cartesBancaires cartesBancaires
     *
     * @return self
     */
    public function setCartesBancaires($cartesBancaires)
    {
        if (is_null($cartesBancaires)) {
            throw new \InvalidArgumentException('non-nullable cartesBancaires cannot be null');
        }
        $this->container['cartesBancaires'] = $cartesBancaires;

        return $this;
    }

    /**
     * Gets clearpay
     *
     * @return \Adyen\Model\Management\ClearpayInfo|null
     */
    public function getClearpay()
    {
        return $this->container['clearpay'];
    }

    /**
     * Sets clearpay
     *
     * @param \Adyen\Model\Management\ClearpayInfo|null $clearpay clearpay
     *
     * @return self
     */
    public function setClearpay($clearpay)
    {
        if (is_null($clearpay)) {
            throw new \InvalidArgumentException('non-nullable clearpay cannot be null');
        }
        $this->container['clearpay'] = $clearpay;

        return $this;
    }

    /**
     * Gets countries
     *
     * @return string[]|null
     */
    public function getCountries()
    {
        return $this->container['countries'];
    }

    /**
     * Sets countries
     *
     * @param string[]|null $countries The list of countries where a payment method is available. By default, all countries supported by the payment method.
     *
     * @return self
     */
    public function setCountries($countries)
    {
        if (is_null($countries)) {
            throw new \InvalidArgumentException('non-nullable countries cannot be null');
        }
        $this->container['countries'] = $countries;

        return $this;
    }

    /**
     * Gets currencies
     *
     * @return string[]|null
     */
    public function getCurrencies()
    {
        return $this->container['currencies'];
    }

    /**
     * Sets currencies
     *
     * @param string[]|null $currencies The list of currencies that a payment method supports. By default, all currencies supported by the payment method.
     *
     * @return self
     */
    public function setCurrencies($currencies)
    {
        if (is_null($currencies)) {
            throw new \InvalidArgumentException('non-nullable currencies cannot be null');
        }
        $this->container['currencies'] = $currencies;

        return $this;
    }

    /**
     * Gets customRoutingFlags
     *
     * @return string[]|null
     */
    public function getCustomRoutingFlags()
    {
        return $this->container['customRoutingFlags'];
    }

    /**
     * Sets customRoutingFlags
     *
     * @param string[]|null $customRoutingFlags The list of custom routing flags to route payment to the intended acquirer.
     *
     * @return self
     */
    public function setCustomRoutingFlags($customRoutingFlags)
    {
        if (is_null($customRoutingFlags)) {
            throw new \InvalidArgumentException('non-nullable customRoutingFlags cannot be null');
        }
        $this->container['customRoutingFlags'] = $customRoutingFlags;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled Indicates whether the payment method is enabled (**true**) or disabled (**false**).
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        if (is_null($enabled)) {
            throw new \InvalidArgumentException('non-nullable enabled cannot be null');
        }
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets giroPay
     *
     * @return \Adyen\Model\Management\GiroPayInfo|null
     */
    public function getGiroPay()
    {
        return $this->container['giroPay'];
    }

    /**
     * Sets giroPay
     *
     * @param \Adyen\Model\Management\GiroPayInfo|null $giroPay giroPay
     *
     * @return self
     */
    public function setGiroPay($giroPay)
    {
        if (is_null($giroPay)) {
            throw new \InvalidArgumentException('non-nullable giroPay cannot be null');
        }
        $this->container['giroPay'] = $giroPay;

        return $this;
    }

    /**
     * Gets googlePay
     *
     * @return \Adyen\Model\Management\GooglePayInfo|null
     */
    public function getGooglePay()
    {
        return $this->container['googlePay'];
    }

    /**
     * Sets googlePay
     *
     * @param \Adyen\Model\Management\GooglePayInfo|null $googlePay googlePay
     *
     * @return self
     */
    public function setGooglePay($googlePay)
    {
        if (is_null($googlePay)) {
            throw new \InvalidArgumentException('non-nullable googlePay cannot be null');
        }
        $this->container['googlePay'] = $googlePay;

        return $this;
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
     * @param string $id The identifier of the resource.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets klarna
     *
     * @return \Adyen\Model\Management\KlarnaInfo|null
     */
    public function getKlarna()
    {
        return $this->container['klarna'];
    }

    /**
     * Sets klarna
     *
     * @param \Adyen\Model\Management\KlarnaInfo|null $klarna klarna
     *
     * @return self
     */
    public function setKlarna($klarna)
    {
        if (is_null($klarna)) {
            throw new \InvalidArgumentException('non-nullable klarna cannot be null');
        }
        $this->container['klarna'] = $klarna;

        return $this;
    }

    /**
     * Gets mealVoucherFR
     *
     * @return \Adyen\Model\Management\MealVoucherFRInfo|null
     */
    public function getMealVoucherFR()
    {
        return $this->container['mealVoucherFR'];
    }

    /**
     * Sets mealVoucherFR
     *
     * @param \Adyen\Model\Management\MealVoucherFRInfo|null $mealVoucherFR mealVoucherFR
     *
     * @return self
     */
    public function setMealVoucherFR($mealVoucherFR)
    {
        if (is_null($mealVoucherFR)) {
            throw new \InvalidArgumentException('non-nullable mealVoucherFR cannot be null');
        }
        $this->container['mealVoucherFR'] = $mealVoucherFR;

        return $this;
    }

    /**
     * Gets paypal
     *
     * @return \Adyen\Model\Management\PayPalInfo|null
     */
    public function getPaypal()
    {
        return $this->container['paypal'];
    }

    /**
     * Sets paypal
     *
     * @param \Adyen\Model\Management\PayPalInfo|null $paypal paypal
     *
     * @return self
     */
    public function setPaypal($paypal)
    {
        if (is_null($paypal)) {
            throw new \InvalidArgumentException('non-nullable paypal cannot be null');
        }
        $this->container['paypal'] = $paypal;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference Your reference for the payment method. Supported characters a-z, A-Z, 0-9.
     *
     * @return self
     */
    public function setReference($reference)
    {
        if (is_null($reference)) {
            throw new \InvalidArgumentException('non-nullable reference cannot be null');
        }
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets shopperInteraction
     *
     * @return string|null
     */
    public function getShopperInteraction()
    {
        return $this->container['shopperInteraction'];
    }

    /**
     * Sets shopperInteraction
     *
     * @param string|null $shopperInteraction The sales channel.
     *
     * @return self
     */
    public function setShopperInteraction($shopperInteraction)
    {
        if (is_null($shopperInteraction)) {
            throw new \InvalidArgumentException('non-nullable shopperInteraction cannot be null');
        }
        $this->container['shopperInteraction'] = $shopperInteraction;

        return $this;
    }

    /**
     * Gets sofort
     *
     * @return \Adyen\Model\Management\SofortInfo|null
     */
    public function getSofort()
    {
        return $this->container['sofort'];
    }

    /**
     * Sets sofort
     *
     * @param \Adyen\Model\Management\SofortInfo|null $sofort sofort
     *
     * @return self
     */
    public function setSofort($sofort)
    {
        if (is_null($sofort)) {
            throw new \InvalidArgumentException('non-nullable sofort cannot be null');
        }
        $this->container['sofort'] = $sofort;

        return $this;
    }

    /**
     * Gets storeId
     *
     * @return string|null
     */
    public function getStoreId()
    {
        return $this->container['storeId'];
    }

    /**
     * Sets storeId
     *
     * @param string|null $storeId The ID of the [store](https://docs.adyen.com/api-explorer/#/ManagementService/latest/post/stores__resParam_id), if any.
     *
     * @return self
     */
    public function setStoreId($storeId)
    {
        if (is_null($storeId)) {
            throw new \InvalidArgumentException('non-nullable storeId cannot be null');
        }
        $this->container['storeId'] = $storeId;

        return $this;
    }

    /**
     * Gets swish
     *
     * @return \Adyen\Model\Management\SwishInfo|null
     */
    public function getSwish()
    {
        return $this->container['swish'];
    }

    /**
     * Sets swish
     *
     * @param \Adyen\Model\Management\SwishInfo|null $swish swish
     *
     * @return self
     */
    public function setSwish($swish)
    {
        if (is_null($swish)) {
            throw new \InvalidArgumentException('non-nullable swish cannot be null');
        }
        $this->container['swish'] = $swish;

        return $this;
    }

    /**
     * Gets twint
     *
     * @return \Adyen\Model\Management\TwintInfo|null
     */
    public function getTwint()
    {
        return $this->container['twint'];
    }

    /**
     * Sets twint
     *
     * @param \Adyen\Model\Management\TwintInfo|null $twint twint
     *
     * @return self
     */
    public function setTwint($twint)
    {
        if (is_null($twint)) {
            throw new \InvalidArgumentException('non-nullable twint cannot be null');
        }
        $this->container['twint'] = $twint;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Payment method [variant](https://docs.adyen.com/development-resources/paymentmethodvariant#management-api).
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets verificationStatus
     *
     * @return string|null
     */
    public function getVerificationStatus()
    {
        return $this->container['verificationStatus'];
    }

    /**
     * Sets verificationStatus
     *
     * @param string|null $verificationStatus Payment method status. Possible values: * **valid** * **pending** * **invalid** * **rejected**
     *
     * @return self
     */
    public function setVerificationStatus($verificationStatus)
    {
        if (is_null($verificationStatus)) {
            throw new \InvalidArgumentException('non-nullable verificationStatus cannot be null');
        }
        $allowedValues = $this->getVerificationStatusAllowableValues();
        if (!in_array($verificationStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'verificationStatus', must be one of '%s'",
                    $verificationStatus,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['verificationStatus'] = $verificationStatus;

        return $this;
    }

    /**
     * Gets vipps
     *
     * @return \Adyen\Model\Management\VippsInfo|null
     */
    public function getVipps()
    {
        return $this->container['vipps'];
    }

    /**
     * Sets vipps
     *
     * @param \Adyen\Model\Management\VippsInfo|null $vipps vipps
     *
     * @return self
     */
    public function setVipps($vipps)
    {
        if (is_null($vipps)) {
            throw new \InvalidArgumentException('non-nullable vipps cannot be null');
        }
        $this->container['vipps'] = $vipps;

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