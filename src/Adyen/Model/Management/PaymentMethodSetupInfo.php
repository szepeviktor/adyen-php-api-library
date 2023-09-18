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
 * PaymentMethodSetupInfo Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentMethodSetupInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentMethodSetupInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'afterpayTouch' => '\Adyen\Model\Management\AfterpayTouchInfo',
        'applePay' => '\Adyen\Model\Management\ApplePayInfo',
        'bcmc' => '\Adyen\Model\Management\BcmcInfo',
        'businessLineId' => 'string',
        'cartesBancaires' => '\Adyen\Model\Management\CartesBancairesInfo',
        'clearpay' => '\Adyen\Model\Management\ClearpayInfo',
        'countries' => 'string[]',
        'currencies' => 'string[]',
        'customRoutingFlags' => 'string[]',
        'giroPay' => '\Adyen\Model\Management\GiroPayInfo',
        'googlePay' => '\Adyen\Model\Management\GooglePayInfo',
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
        'applePay' => null,
        'bcmc' => null,
        'businessLineId' => null,
        'cartesBancaires' => null,
        'clearpay' => null,
        'countries' => null,
        'currencies' => null,
        'customRoutingFlags' => null,
        'giroPay' => null,
        'googlePay' => null,
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
        'vipps' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'afterpayTouch' => false,
        'applePay' => false,
        'bcmc' => false,
        'businessLineId' => false,
        'cartesBancaires' => false,
        'clearpay' => false,
        'countries' => false,
        'currencies' => false,
        'customRoutingFlags' => false,
        'giroPay' => false,
        'googlePay' => false,
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
        'applePay' => 'applePay',
        'bcmc' => 'bcmc',
        'businessLineId' => 'businessLineId',
        'cartesBancaires' => 'cartesBancaires',
        'clearpay' => 'clearpay',
        'countries' => 'countries',
        'currencies' => 'currencies',
        'customRoutingFlags' => 'customRoutingFlags',
        'giroPay' => 'giroPay',
        'googlePay' => 'googlePay',
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
        'vipps' => 'vipps'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'afterpayTouch' => 'setAfterpayTouch',
        'applePay' => 'setApplePay',
        'bcmc' => 'setBcmc',
        'businessLineId' => 'setBusinessLineId',
        'cartesBancaires' => 'setCartesBancaires',
        'clearpay' => 'setClearpay',
        'countries' => 'setCountries',
        'currencies' => 'setCurrencies',
        'customRoutingFlags' => 'setCustomRoutingFlags',
        'giroPay' => 'setGiroPay',
        'googlePay' => 'setGooglePay',
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
        'vipps' => 'setVipps'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'afterpayTouch' => 'getAfterpayTouch',
        'applePay' => 'getApplePay',
        'bcmc' => 'getBcmc',
        'businessLineId' => 'getBusinessLineId',
        'cartesBancaires' => 'getCartesBancaires',
        'clearpay' => 'getClearpay',
        'countries' => 'getCountries',
        'currencies' => 'getCurrencies',
        'customRoutingFlags' => 'getCustomRoutingFlags',
        'giroPay' => 'getGiroPay',
        'googlePay' => 'getGooglePay',
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

    public const SHOPPER_INTERACTION_E_COMMERCE = 'eCommerce';
    public const SHOPPER_INTERACTION_POS = 'pos';
    public const SHOPPER_INTERACTION_MOTO = 'moto';
    public const SHOPPER_INTERACTION_CONT_AUTH = 'contAuth';
    public const TYPE_AFTERPAYTOUCH = 'afterpaytouch';
    public const TYPE_ALIPAY = 'alipay';
    public const TYPE_ALIPAY_HK = 'alipay_hk';
    public const TYPE_AMEX = 'amex';
    public const TYPE_APPLEPAY = 'applepay';
    public const TYPE_BCMC = 'bcmc';
    public const TYPE_BLIK = 'blik';
    public const TYPE_CARTEBANCAIRE = 'cartebancaire';
    public const TYPE_CLEARPAY = 'clearpay';
    public const TYPE_CUP = 'cup';
    public const TYPE_DINERS = 'diners';
    public const TYPE_DIRECT_EBANKING = 'directEbanking';
    public const TYPE_DIRECTDEBIT_GB = 'directdebit_GB';
    public const TYPE_DISCOVER = 'discover';
    public const TYPE_EBANKING_FI = 'ebanking_FI';
    public const TYPE_EFTPOS_AUSTRALIA = 'eftpos_australia';
    public const TYPE_ELO = 'elo';
    public const TYPE_ELOCREDIT = 'elocredit';
    public const TYPE_ELODEBIT = 'elodebit';
    public const TYPE_GIROCARD = 'girocard';
    public const TYPE_GOOGLEPAY = 'googlepay';
    public const TYPE_HIPER = 'hiper';
    public const TYPE_HIPERCARD = 'hipercard';
    public const TYPE_IDEAL = 'ideal';
    public const TYPE_INTERAC_CARD = 'interac_card';
    public const TYPE_JCB = 'jcb';
    public const TYPE_KLARNA = 'klarna';
    public const TYPE_KLARNA_ACCOUNT = 'klarna_account';
    public const TYPE_KLARNA_PAYNOW = 'klarna_paynow';
    public const TYPE_MAESTRO = 'maestro';
    public const TYPE_MBWAY = 'mbway';
    public const TYPE_MC = 'mc';
    public const TYPE_MCDEBIT = 'mcdebit';
    public const TYPE_MEAL_VOUCHER_FR = 'mealVoucher_FR';
    public const TYPE_MOBILEPAY = 'mobilepay';
    public const TYPE_MULTIBANCO = 'multibanco';
    public const TYPE_ONLINE_BANKING_PL = 'onlineBanking_PL';
    public const TYPE_PAYBYBANK = 'paybybank';
    public const TYPE_PAYPAL = 'paypal';
    public const TYPE_PAYSHOP = 'payshop';
    public const TYPE_SWISH = 'swish';
    public const TYPE_TRUSTLY = 'trustly';
    public const TYPE_TWINT = 'twint';
    public const TYPE_TWINT_POS = 'twint_pos';
    public const TYPE_VIPPS = 'vipps';
    public const TYPE_VISA = 'visa';
    public const TYPE_VISADEBIT = 'visadebit';
    public const TYPE_VPAY = 'vpay';
    public const TYPE_WECHATPAY = 'wechatpay';
    public const TYPE_WECHATPAY_POS = 'wechatpay_pos';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShopperInteractionAllowableValues()
    {
        return [
            self::SHOPPER_INTERACTION_E_COMMERCE,
            self::SHOPPER_INTERACTION_POS,
            self::SHOPPER_INTERACTION_MOTO,
            self::SHOPPER_INTERACTION_CONT_AUTH,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_AFTERPAYTOUCH,
            self::TYPE_ALIPAY,
            self::TYPE_ALIPAY_HK,
            self::TYPE_AMEX,
            self::TYPE_APPLEPAY,
            self::TYPE_BCMC,
            self::TYPE_BLIK,
            self::TYPE_CARTEBANCAIRE,
            self::TYPE_CLEARPAY,
            self::TYPE_CUP,
            self::TYPE_DINERS,
            self::TYPE_DIRECT_EBANKING,
            self::TYPE_DIRECTDEBIT_GB,
            self::TYPE_DISCOVER,
            self::TYPE_EBANKING_FI,
            self::TYPE_EFTPOS_AUSTRALIA,
            self::TYPE_ELO,
            self::TYPE_ELOCREDIT,
            self::TYPE_ELODEBIT,
            self::TYPE_GIROCARD,
            self::TYPE_GOOGLEPAY,
            self::TYPE_HIPER,
            self::TYPE_HIPERCARD,
            self::TYPE_IDEAL,
            self::TYPE_INTERAC_CARD,
            self::TYPE_JCB,
            self::TYPE_KLARNA,
            self::TYPE_KLARNA_ACCOUNT,
            self::TYPE_KLARNA_PAYNOW,
            self::TYPE_MAESTRO,
            self::TYPE_MBWAY,
            self::TYPE_MC,
            self::TYPE_MCDEBIT,
            self::TYPE_MEAL_VOUCHER_FR,
            self::TYPE_MOBILEPAY,
            self::TYPE_MULTIBANCO,
            self::TYPE_ONLINE_BANKING_PL,
            self::TYPE_PAYBYBANK,
            self::TYPE_PAYPAL,
            self::TYPE_PAYSHOP,
            self::TYPE_SWISH,
            self::TYPE_TRUSTLY,
            self::TYPE_TWINT,
            self::TYPE_TWINT_POS,
            self::TYPE_VIPPS,
            self::TYPE_VISA,
            self::TYPE_VISADEBIT,
            self::TYPE_VPAY,
            self::TYPE_WECHATPAY,
            self::TYPE_WECHATPAY_POS,
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
        $this->setIfExists('applePay', $data ?? [], null);
        $this->setIfExists('bcmc', $data ?? [], null);
        $this->setIfExists('businessLineId', $data ?? [], null);
        $this->setIfExists('cartesBancaires', $data ?? [], null);
        $this->setIfExists('clearpay', $data ?? [], null);
        $this->setIfExists('countries', $data ?? [], null);
        $this->setIfExists('currencies', $data ?? [], null);
        $this->setIfExists('customRoutingFlags', $data ?? [], null);
        $this->setIfExists('giroPay', $data ?? [], null);
        $this->setIfExists('googlePay', $data ?? [], null);
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

        $allowedValues = $this->getShopperInteractionAllowableValues();
        if (!is_null($this->container['shopperInteraction']) && !in_array($this->container['shopperInteraction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'shopperInteraction', must be one of '%s'",
                $this->container['shopperInteraction'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * @param string|null $shopperInteraction The sales channel. Required if the merchant account does not have a sales channel. When you provide this field, it overrides the default sales channel set on the merchant account.  Possible values: **eCommerce**, **pos**, **contAuth**, and **moto**.
     *
     * @return self
     */
    public function setShopperInteraction($shopperInteraction)
    {
        if (is_null($shopperInteraction)) {
            throw new \InvalidArgumentException('non-nullable shopperInteraction cannot be null');
        }
        $allowedValues = $this->getShopperInteractionAllowableValues();
        if (!in_array($shopperInteraction, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'shopperInteraction', must be one of '%s'",
                    $shopperInteraction,
                    implode("', '", $allowedValues)
                )
            );
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
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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