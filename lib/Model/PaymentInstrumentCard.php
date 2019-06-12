<?php
/**
 * PaymentInstrumentCard
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * PaymentInstrumentCard Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentInstrumentCard implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentInstrumentCard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'expirationMonth' => 'string',
        'expirationYear' => 'string',
        'type' => 'string',
        'issueNumber' => 'string',
        'startMonth' => 'string',
        'startYear' => 'string',
        'useAs' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'expirationMonth' => 'MM',
        'expirationYear' => 'YYYY',
        'type' => null,
        'issueNumber' => null,
        'startMonth' => 'MM',
        'startYear' => 'YYYY',
        'useAs' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'expirationMonth' => 'expirationMonth',
        'expirationYear' => 'expirationYear',
        'type' => 'type',
        'issueNumber' => 'issueNumber',
        'startMonth' => 'startMonth',
        'startYear' => 'startYear',
        'useAs' => 'useAs'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'expirationMonth' => 'setExpirationMonth',
        'expirationYear' => 'setExpirationYear',
        'type' => 'setType',
        'issueNumber' => 'setIssueNumber',
        'startMonth' => 'setStartMonth',
        'startYear' => 'setStartYear',
        'useAs' => 'setUseAs'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'expirationMonth' => 'getExpirationMonth',
        'expirationYear' => 'getExpirationYear',
        'type' => 'getType',
        'issueNumber' => 'getIssueNumber',
        'startMonth' => 'getStartMonth',
        'startYear' => 'getStartYear',
        'useAs' => 'getUseAs'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const TYPE_VISA = 'visa';
    const TYPE_MASTERCARD = 'mastercard';
    const TYPE_AMERICAN_EXPRESS = 'american express';
    const TYPE_DISCOVER = 'discover';
    const TYPE_DINERS_CLUB = 'diners club';
    const TYPE_CARTE_BLANCHE = 'carte blanche';
    const TYPE_JCB = 'jcb';
    const TYPE_OPTIMA = 'optima';
    const TYPE_TWINPAY_CREDIT = 'twinpay credit';
    const TYPE_TWINPAY_DEBIT = 'twinpay debit';
    const TYPE_WALMART = 'walmart';
    const TYPE_ENROUTE = 'enroute';
    const TYPE_LOWES_CONSUMER = 'lowes consumer';
    const TYPE_HOME_DEPOT_CONSUMER = 'home depot consumer';
    const TYPE_MBNA = 'mbna';
    const TYPE_DICKS_SPORTSWEAR = 'dicks sportswear';
    const TYPE_CASUAL_CORNER = 'casual corner';
    const TYPE_SEARS = 'sears';
    const TYPE_JAL = 'jal';
    const TYPE_DISNEY = 'disney';
    const TYPE_MAESTRO_UK_DOMESTIC = 'maestro uk domestic';
    const TYPE_SAMS_CLUB_CONSUMER = 'sams club consumer';
    const TYPE_SAMS_CLUB_BUSINESS = 'sams club business';
    const TYPE_NICOS = 'nicos';
    const TYPE_BILL_ME_LATER = 'bill me later';
    const TYPE_BEBE = 'bebe';
    const TYPE_RESTORATION_HARDWARE = 'restoration hardware';
    const TYPE_DELTA_ONLINE = 'delta online';
    const TYPE_SOLO = 'solo';
    const TYPE_VISA_ELECTRON = 'visa electron';
    const TYPE_DANKORT = 'dankort';
    const TYPE_LASER = 'laser';
    const TYPE_CARTE_BLEUE = 'carte bleue';
    const TYPE_CARTA_SI = 'carta si';
    const TYPE_PINLESS_DEBIT = 'pinless debit';
    const TYPE_ENCODED_ACCOUNT = 'encoded account';
    const TYPE_UATP = 'uatp';
    const TYPE_HOUSEHOLD = 'household';
    const TYPE_MAESTRO_INTERNATIONAL = 'maestro international';
    const TYPE_GE_MONEY_UK = 'ge money uk';
    const TYPE_KOREAN_CARDS = 'korean cards';
    const TYPE_STYLE = 'style';
    const TYPE_JCREW = 'jcrew';
    const TYPE_PAYEASE_CHINA_PROCESSING_EWALLET = 'payease china processing ewallet';
    const TYPE_PAYEASE_CHINA_PROCESSING_BANK_TRANSFER = 'payease china processing bank transfer';
    const TYPE_MEIJER_PRIVATE_LABEL = 'meijer private label';
    const TYPE_HIPERCARD = 'hipercard';
    const TYPE_AURA = 'aura';
    const TYPE_REDECARD = 'redecard';
    const TYPE_ORICO = 'orico';
    const TYPE_ELO = 'elo';
    const TYPE_CAPITAL_ONE_PRIVATE_LABEL = 'capital one private label';
    const TYPE_SYNCHRONY_PRIVATE_LABEL = 'synchrony private label';
    const TYPE_CHINA_UNION_PAY = 'china union pay';
    const TYPE_COSTCO_PRIVATE_LABEL = 'costco private label';
    const TYPE_MADA = 'mada';
    const TYPE_FALABELLA_PRIVATE_LABEL = 'falabella private label';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_VISA,
            self::TYPE_MASTERCARD,
            self::TYPE_AMERICAN_EXPRESS,
            self::TYPE_DISCOVER,
            self::TYPE_DINERS_CLUB,
            self::TYPE_CARTE_BLANCHE,
            self::TYPE_JCB,
            self::TYPE_OPTIMA,
            self::TYPE_TWINPAY_CREDIT,
            self::TYPE_TWINPAY_DEBIT,
            self::TYPE_WALMART,
            self::TYPE_ENROUTE,
            self::TYPE_LOWES_CONSUMER,
            self::TYPE_HOME_DEPOT_CONSUMER,
            self::TYPE_MBNA,
            self::TYPE_DICKS_SPORTSWEAR,
            self::TYPE_CASUAL_CORNER,
            self::TYPE_SEARS,
            self::TYPE_JAL,
            self::TYPE_DISNEY,
            self::TYPE_MAESTRO_UK_DOMESTIC,
            self::TYPE_SAMS_CLUB_CONSUMER,
            self::TYPE_SAMS_CLUB_BUSINESS,
            self::TYPE_NICOS,
            self::TYPE_BILL_ME_LATER,
            self::TYPE_BEBE,
            self::TYPE_RESTORATION_HARDWARE,
            self::TYPE_DELTA_ONLINE,
            self::TYPE_SOLO,
            self::TYPE_VISA_ELECTRON,
            self::TYPE_DANKORT,
            self::TYPE_LASER,
            self::TYPE_CARTE_BLEUE,
            self::TYPE_CARTA_SI,
            self::TYPE_PINLESS_DEBIT,
            self::TYPE_ENCODED_ACCOUNT,
            self::TYPE_UATP,
            self::TYPE_HOUSEHOLD,
            self::TYPE_MAESTRO_INTERNATIONAL,
            self::TYPE_GE_MONEY_UK,
            self::TYPE_KOREAN_CARDS,
            self::TYPE_STYLE,
            self::TYPE_JCREW,
            self::TYPE_PAYEASE_CHINA_PROCESSING_EWALLET,
            self::TYPE_PAYEASE_CHINA_PROCESSING_BANK_TRANSFER,
            self::TYPE_MEIJER_PRIVATE_LABEL,
            self::TYPE_HIPERCARD,
            self::TYPE_AURA,
            self::TYPE_REDECARD,
            self::TYPE_ORICO,
            self::TYPE_ELO,
            self::TYPE_CAPITAL_ONE_PRIVATE_LABEL,
            self::TYPE_SYNCHRONY_PRIVATE_LABEL,
            self::TYPE_CHINA_UNION_PAY,
            self::TYPE_COSTCO_PRIVATE_LABEL,
            self::TYPE_MADA,
            self::TYPE_FALABELLA_PRIVATE_LABEL,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['expirationMonth'] = isset($data['expirationMonth']) ? $data['expirationMonth'] : null;
        $this->container['expirationYear'] = isset($data['expirationYear']) ? $data['expirationYear'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['issueNumber'] = isset($data['issueNumber']) ? $data['issueNumber'] : null;
        $this->container['startMonth'] = isset($data['startMonth']) ? $data['startMonth'] : null;
        $this->container['startYear'] = isset($data['startYear']) ? $data['startYear'] : null;
        $this->container['useAs'] = isset($data['useAs']) ? $data['useAs'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['expirationMonth']) && (strlen($this->container['expirationMonth']) > 2)) {
            $invalid_properties[] = "invalid value for 'expirationMonth', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['expirationMonth']) && (strlen($this->container['expirationMonth']) < 2)) {
            $invalid_properties[] = "invalid value for 'expirationMonth', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['expirationYear']) && (strlen($this->container['expirationYear']) > 4)) {
            $invalid_properties[] = "invalid value for 'expirationYear', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['expirationYear']) && (strlen($this->container['expirationYear']) < 4)) {
            $invalid_properties[] = "invalid value for 'expirationYear', the character length must be bigger than or equal to 4.";
        }

        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if (!is_null($this->container['issueNumber']) && (strlen($this->container['issueNumber']) > 2)) {
            $invalid_properties[] = "invalid value for 'issueNumber', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['issueNumber']) && (strlen($this->container['issueNumber']) < 1)) {
            $invalid_properties[] = "invalid value for 'issueNumber', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['startMonth']) && (strlen($this->container['startMonth']) > 2)) {
            $invalid_properties[] = "invalid value for 'startMonth', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['startMonth']) && (strlen($this->container['startMonth']) < 2)) {
            $invalid_properties[] = "invalid value for 'startMonth', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['startYear']) && (strlen($this->container['startYear']) > 4)) {
            $invalid_properties[] = "invalid value for 'startYear', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['startYear']) && (strlen($this->container['startYear']) < 4)) {
            $invalid_properties[] = "invalid value for 'startYear', the character length must be bigger than or equal to 4.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if (strlen($this->container['expirationMonth']) > 2) {
            return false;
        }
        if (strlen($this->container['expirationMonth']) < 2) {
            return false;
        }
        if (strlen($this->container['expirationYear']) > 4) {
            return false;
        }
        if (strlen($this->container['expirationYear']) < 4) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        if (strlen($this->container['issueNumber']) > 2) {
            return false;
        }
        if (strlen($this->container['issueNumber']) < 1) {
            return false;
        }
        if (strlen($this->container['startMonth']) > 2) {
            return false;
        }
        if (strlen($this->container['startMonth']) < 2) {
            return false;
        }
        if (strlen($this->container['startYear']) > 4) {
            return false;
        }
        if (strlen($this->container['startYear']) < 4) {
            return false;
        }
        return true;
    }


    /**
     * Gets expirationMonth
     * @return string
     */
    public function getExpirationMonth()
    {
        return $this->container['expirationMonth'];
    }

    /**
     * Sets expirationMonth
     * @param string $expirationMonth Two-digit month in which the credit card expires. Format: `MM` Possible values: `01` through `12`  This field is optional if your CyberSource account is configured for relaxed requirements for address data and expiration date. For more information about relaxed requirements, see the TMS REST API Developer Guide.  Important: It is your responsibility to determine whether a field is required for the transaction you are requesting.
     * @return $this
     */
    public function setExpirationMonth($expirationMonth)
    {
        if (!is_null($expirationMonth) && (strlen($expirationMonth) > 2)) {
            throw new \InvalidArgumentException('invalid length for $expirationMonth when calling PaymentInstrumentCard., must be smaller than or equal to 2.');
        }
        if (!is_null($expirationMonth) && (strlen($expirationMonth) < 2)) {
            throw new \InvalidArgumentException('invalid length for $expirationMonth when calling PaymentInstrumentCard., must be bigger than or equal to 2.');
        }

        $this->container['expirationMonth'] = $expirationMonth;

        return $this;
    }

    /**
     * Gets expirationYear
     * @return string
     */
    public function getExpirationYear()
    {
        return $this->container['expirationYear'];
    }

    /**
     * Sets expirationYear
     * @param string $expirationYear Four-digit year in which the credit card expires. Format: `YYYY`. Possible values: `1900` through `2099`.  **FDC Nashville Global and FDMS South** You can send in 2 digits or 4 digits. When you send in 2 digits, they must be the last 2 digits of the year.  This field is optional if your CyberSource account is configured for relaxed requirements for address data and expiration date. See Relaxed Requirements for Address Data and Expiration Date page.  Important: It is your responsibility to determine whether a field is required for the transaction you are requesting.'
     * @return $this
     */
    public function setExpirationYear($expirationYear)
    {
        if (!is_null($expirationYear) && (strlen($expirationYear) > 4)) {
            throw new \InvalidArgumentException('invalid length for $expirationYear when calling PaymentInstrumentCard., must be smaller than or equal to 4.');
        }
        if (!is_null($expirationYear) && (strlen($expirationYear) < 4)) {
            throw new \InvalidArgumentException('invalid length for $expirationYear when calling PaymentInstrumentCard., must be bigger than or equal to 4.');
        }

        $this->container['expirationYear'] = $expirationYear;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Type of credit card. Possible values:   * Visa (001)   * Mastercard (002) - Eurocard—European regional brand of Mastercard   * American Express (003)   * Discover (004)   * Diners Club (005)   * Carte Blanche (006)   * JCB (007)   * Optima (008)   * Twinpay Credit (011)   * Twinpay Debit (012)   * Walmart (013)   * EnRoute (014)   * Lowes consumer (015)   * Home Depot consumer (016)   * MBNA (017)   * Dicks Sportswear (018)   * Casual Corner (019)   * Sears (020)   * JAL (021)   * Disney (023)   * Maestro (024) - UK Domestic   * Sams Club consumer (025)   * Sams Club business (026)   * Nicos (027)   * Bill me later (028)   * Bebe (029)   * Restoration Hardware (030)   * Delta (031) — use this value only for Ingenico ePayments. For other processors, use 001 for all Visa card types.   * Solo (032)   * Visa Electron (033)   * Dankort (034)   * Laser (035)   * Carte Bleue (036) — formerly Cartes Bancaires   * Cartes Bancaires (036)   * Carta Si (037)   * pinless debit (038)   * encoded account (039)   * UATP (040)   * Household (041)   * Maestro (042) - International   * GE Money UK (043)   * Korean cards (044)   * Style (045)   * JCrew (046)   * PayEase China processing eWallet (047)   * PayEase China processing bank transfer (048)   * Meijer Private Label (049)   * Hipercard (050) — supported only by the Comercio Latino processor.   * Aura (051) — supported only by the Comercio Latino processor.   * Redecard (052)   * ORICO (053)   * Elo (054) — supported only by the Comercio Latino processor.   * Capital One Private Label (055)   * Synchrony Private Label (056)   * Costco Private Label (057)   * mada (060)   * China Union Pay (062)   * Falabella private label (063)
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets issueNumber
     * @return string
     */
    public function getIssueNumber()
    {
        return $this->container['issueNumber'];
    }

    /**
     * Sets issueNumber
     * @param string $issueNumber Number of times a Maestro (UK Domestic) card has been issued to the account holder.
     * @return $this
     */
    public function setIssueNumber($issueNumber)
    {
        if (!is_null($issueNumber) && (strlen($issueNumber) > 2)) {
            throw new \InvalidArgumentException('invalid length for $issueNumber when calling PaymentInstrumentCard., must be smaller than or equal to 2.');
        }
        if (!is_null($issueNumber) && (strlen($issueNumber) < 1)) {
            throw new \InvalidArgumentException('invalid length for $issueNumber when calling PaymentInstrumentCard., must be bigger than or equal to 1.');
        }

        $this->container['issueNumber'] = $issueNumber;

        return $this;
    }

    /**
     * Gets startMonth
     * @return string
     */
    public function getStartMonth()
    {
        return $this->container['startMonth'];
    }

    /**
     * Sets startMonth
     * @param string $startMonth Month of the start of the Maestro (UK Domestic) card validity period.  Format: `MM`. Possible values: `01` through `12`.
     * @return $this
     */
    public function setStartMonth($startMonth)
    {
        if (!is_null($startMonth) && (strlen($startMonth) > 2)) {
            throw new \InvalidArgumentException('invalid length for $startMonth when calling PaymentInstrumentCard., must be smaller than or equal to 2.');
        }
        if (!is_null($startMonth) && (strlen($startMonth) < 2)) {
            throw new \InvalidArgumentException('invalid length for $startMonth when calling PaymentInstrumentCard., must be bigger than or equal to 2.');
        }

        $this->container['startMonth'] = $startMonth;

        return $this;
    }

    /**
     * Gets startYear
     * @return string
     */
    public function getStartYear()
    {
        return $this->container['startYear'];
    }

    /**
     * Sets startYear
     * @param string $startYear Year of the start of the Maestro (UK Domestic) card validity period.  Format: `YYYY`. Possible values: `1900` through `2099`.
     * @return $this
     */
    public function setStartYear($startYear)
    {
        if (!is_null($startYear) && (strlen($startYear) > 4)) {
            throw new \InvalidArgumentException('invalid length for $startYear when calling PaymentInstrumentCard., must be smaller than or equal to 4.');
        }
        if (!is_null($startYear) && (strlen($startYear) < 4)) {
            throw new \InvalidArgumentException('invalid length for $startYear when calling PaymentInstrumentCard., must be bigger than or equal to 4.');
        }

        $this->container['startYear'] = $startYear;

        return $this;
    }

    /**
     * Gets useAs
     * @return string
     */
    public function getUseAs()
    {
        return $this->container['useAs'];
    }

    /**
     * Sets useAs
     * @param string $useAs Card Use As Field. Supported value of `pinless debit` only. Only for use with Pinless Debit tokens.
     * @return $this
     */
    public function setUseAs($useAs)
    {
        $this->container['useAs'] = $useAs;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


