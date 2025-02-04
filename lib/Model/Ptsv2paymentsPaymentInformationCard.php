<?php
/**
 * Ptsv2paymentsPaymentInformationCard
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
 * Ptsv2paymentsPaymentInformationCard Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsPaymentInformationCard implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_paymentInformation_card';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'number' => 'string',
        'expirationMonth' => 'string',
        'expirationYear' => 'string',
        'type' => 'string',
        'useAs' => 'string',
        'sourceAccountType' => 'string',
        'securityCode' => 'string',
        'securityCodeIndicator' => 'string',
        'accountEncoderId' => 'string',
        'issueNumber' => 'string',
        'startMonth' => 'string',
        'startYear' => 'string',
        'productName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'number' => null,
        'expirationMonth' => null,
        'expirationYear' => null,
        'type' => null,
        'useAs' => null,
        'sourceAccountType' => null,
        'securityCode' => null,
        'securityCodeIndicator' => null,
        'accountEncoderId' => null,
        'issueNumber' => null,
        'startMonth' => null,
        'startYear' => null,
        'productName' => null
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
        'number' => 'number',
        'expirationMonth' => 'expirationMonth',
        'expirationYear' => 'expirationYear',
        'type' => 'type',
        'useAs' => 'useAs',
        'sourceAccountType' => 'sourceAccountType',
        'securityCode' => 'securityCode',
        'securityCodeIndicator' => 'securityCodeIndicator',
        'accountEncoderId' => 'accountEncoderId',
        'issueNumber' => 'issueNumber',
        'startMonth' => 'startMonth',
        'startYear' => 'startYear',
        'productName' => 'productName'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'number' => 'setNumber',
        'expirationMonth' => 'setExpirationMonth',
        'expirationYear' => 'setExpirationYear',
        'type' => 'setType',
        'useAs' => 'setUseAs',
        'sourceAccountType' => 'setSourceAccountType',
        'securityCode' => 'setSecurityCode',
        'securityCodeIndicator' => 'setSecurityCodeIndicator',
        'accountEncoderId' => 'setAccountEncoderId',
        'issueNumber' => 'setIssueNumber',
        'startMonth' => 'setStartMonth',
        'startYear' => 'setStartYear',
        'productName' => 'setProductName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'number' => 'getNumber',
        'expirationMonth' => 'getExpirationMonth',
        'expirationYear' => 'getExpirationYear',
        'type' => 'getType',
        'useAs' => 'getUseAs',
        'sourceAccountType' => 'getSourceAccountType',
        'securityCode' => 'getSecurityCode',
        'securityCodeIndicator' => 'getSecurityCodeIndicator',
        'accountEncoderId' => 'getAccountEncoderId',
        'issueNumber' => 'getIssueNumber',
        'startMonth' => 'getStartMonth',
        'startYear' => 'getStartYear',
        'productName' => 'getProductName'
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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['expirationMonth'] = isset($data['expirationMonth']) ? $data['expirationMonth'] : null;
        $this->container['expirationYear'] = isset($data['expirationYear']) ? $data['expirationYear'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['useAs'] = isset($data['useAs']) ? $data['useAs'] : null;
        $this->container['sourceAccountType'] = isset($data['sourceAccountType']) ? $data['sourceAccountType'] : null;
        $this->container['securityCode'] = isset($data['securityCode']) ? $data['securityCode'] : null;
        $this->container['securityCodeIndicator'] = isset($data['securityCodeIndicator']) ? $data['securityCodeIndicator'] : null;
        $this->container['accountEncoderId'] = isset($data['accountEncoderId']) ? $data['accountEncoderId'] : null;
        $this->container['issueNumber'] = isset($data['issueNumber']) ? $data['issueNumber'] : null;
        $this->container['startMonth'] = isset($data['startMonth']) ? $data['startMonth'] : null;
        $this->container['startYear'] = isset($data['startYear']) ? $data['startYear'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['number']) && (strlen($this->container['number']) > 20)) {
            $invalid_properties[] = "invalid value for 'number', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['expirationMonth']) && (strlen($this->container['expirationMonth']) > 2)) {
            $invalid_properties[] = "invalid value for 'expirationMonth', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['expirationYear']) && (strlen($this->container['expirationYear']) > 4)) {
            $invalid_properties[] = "invalid value for 'expirationYear', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['useAs']) && (strlen($this->container['useAs']) > 20)) {
            $invalid_properties[] = "invalid value for 'useAs', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['sourceAccountType']) && (strlen($this->container['sourceAccountType']) > 20)) {
            $invalid_properties[] = "invalid value for 'sourceAccountType', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['securityCode']) && (strlen($this->container['securityCode']) > 4)) {
            $invalid_properties[] = "invalid value for 'securityCode', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['securityCodeIndicator']) && (strlen($this->container['securityCodeIndicator']) > 1)) {
            $invalid_properties[] = "invalid value for 'securityCodeIndicator', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['accountEncoderId']) && (strlen($this->container['accountEncoderId']) > 3)) {
            $invalid_properties[] = "invalid value for 'accountEncoderId', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['issueNumber']) && (strlen($this->container['issueNumber']) > 5)) {
            $invalid_properties[] = "invalid value for 'issueNumber', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['startMonth']) && (strlen($this->container['startMonth']) > 2)) {
            $invalid_properties[] = "invalid value for 'startMonth', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['startYear']) && (strlen($this->container['startYear']) > 4)) {
            $invalid_properties[] = "invalid value for 'startYear', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['productName']) && (strlen($this->container['productName']) > 15)) {
            $invalid_properties[] = "invalid value for 'productName', the character length must be smaller than or equal to 15.";
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

        if (strlen($this->container['number']) > 20) {
            return false;
        }
        if (strlen($this->container['expirationMonth']) > 2) {
            return false;
        }
        if (strlen($this->container['expirationYear']) > 4) {
            return false;
        }
        if (strlen($this->container['useAs']) > 20) {
            return false;
        }
        if (strlen($this->container['sourceAccountType']) > 20) {
            return false;
        }
        if (strlen($this->container['securityCode']) > 4) {
            return false;
        }
        if (strlen($this->container['securityCodeIndicator']) > 1) {
            return false;
        }
        if (strlen($this->container['accountEncoderId']) > 3) {
            return false;
        }
        if (strlen($this->container['issueNumber']) > 5) {
            return false;
        }
        if (strlen($this->container['startMonth']) > 2) {
            return false;
        }
        if (strlen($this->container['startYear']) > 4) {
            return false;
        }
        if (strlen($this->container['productName']) > 15) {
            return false;
        }
        return true;
    }


    /**
     * Gets number
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     * @param string $number The customer’s payment card number, also knows as the Primary Account Nunmber (PAN). You can also use this field for encoded account numbers.  For processor-specific information, see the `customer_cc_number` field description in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setNumber($number)
    {
        if (!is_null($number) && (strlen($number) > 20)) {
            throw new \InvalidArgumentException('invalid length for $number when calling Ptsv2paymentsPaymentInformationCard., must be smaller than or equal to 20.');
        }

        $this->container['number'] = $number;

        return $this;
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
     * @param string $expirationMonth Two-digit month in which the payment card expires.  Format: `MM`.  Valid values: `01` through `12`.  #### Barclays and Streamline For Maestro (UK Domestic) and Maestro (International) cards on Barclays and Streamline, this must be a valid value (`01` through `12`) but is not required to be a valid expiration date. In other words, an expiration date that is in the past does not cause CyberSource to reject your request. However, an invalid expiration date might cause the issuer to reject your request.  #### Encoded Account Numbers For encoded account numbers (_type_=039), if there is no expiration date on the card, use `12`.  **Important** It is your responsibility to determine whether a field is required for the transaction you are requesting.  For processor-specific information, see the `customer_cc_expmo` field description in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setExpirationMonth($expirationMonth)
    {
        if (!is_null($expirationMonth) && (strlen($expirationMonth) > 2)) {
            throw new \InvalidArgumentException('invalid length for $expirationMonth when calling Ptsv2paymentsPaymentInformationCard., must be smaller than or equal to 2.');
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
     * @param string $expirationYear Four-digit year in which the credit card expires.  Format: `YYYY`.  #### Barclays and Streamline For Maestro (UK Domestic) and Maestro (International) cards on Barclays and Streamline, this must be a valid value (`1900` through `3000`) but is not required to be a valid expiration date. In other words, an expiration date that is in the past does not cause CyberSource to reject your request. However, an invalid expiration date might cause the issuer to reject your request.  #### Encoded Account Numbers For encoded account numbers (**_type_**`=039`), if there is no expiration date on the card, use `2021`.  #### FDC Nashville Global and FDMS South You can send in 2 digits or 4 digits. If you send in 2 digits, they must be the last 2 digits of the year.  **Important** It is your responsibility to determine whether a field is required for the transaction you are requesting.  For processor-specific information, see the `customer_cc_expyr` field description in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setExpirationYear($expirationYear)
    {
        if (!is_null($expirationYear) && (strlen($expirationYear) > 4)) {
            throw new \InvalidArgumentException('invalid length for $expirationYear when calling Ptsv2paymentsPaymentInformationCard., must be smaller than or equal to 4.');
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
     * @param string $type Three-digit value that indicates the card type.  Type of card to authorize. - 001 Visa - 002 Mastercard - 003 Amex - 004 Discover - 005: Diners Club - 007: JCB - 024: Maestro (UK Domestic) - 039 Encoded account number - 042: Maestro (International)  For the complete list of possible values, see `card_type` field description in the [Credit Card Services Using the SCMP API Guide.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * @param string $useAs Flag that specifies the type of account associated with the card. The cardholder provides this information during the payment process.  #### Cielo and Comercio Latino  Possible values:   - CREDIT: Credit card  - DEBIT: Debit card  This field is required for:  - Debit transactions on Cielo and Comercio Latino.  - Transactions with Brazilian-issued cards on CyberSource through VisaNet.  **Note** The value for this field corresponds to the following data in the TC 33 capture file5: - Record: CP07 TCR0 - Position: 51 - Field: Combination Card Transaction Identifier  This field is supported only for Mastercard transactions in Brazil on CyberSource through VisaNet.
     * @return $this
     */
    public function setUseAs($useAs)
    {
        if (!is_null($useAs) && (strlen($useAs) > 20)) {
            throw new \InvalidArgumentException('invalid length for $useAs when calling Ptsv2paymentsPaymentInformationCard., must be smaller than or equal to 20.');
        }

        $this->container['useAs'] = $useAs;

        return $this;
    }

    /**
     * Gets sourceAccountType
     * @return string
     */
    public function getSourceAccountType()
    {
        return $this->container['sourceAccountType'];
    }

    /**
     * Sets sourceAccountType
     * @param string $sourceAccountType Flag that specifies the type of account associated with the card. The cardholder provides this information during the payment process.  This field is required in the following cases:   - Debit transactions on Cielo and Comercio Latino.   - Transactions with Brazilian-issued cards on CyberSource through VisaNet.   - Applicable only for CyberSource through VisaNet (CtV).      **Note** Combo cards in Brazil contain credit and debit functionality in a single card. Visa systems use a credit bank identification number (BIN) for this type of card. Using the BIN to determine whether a card is debit or credit can cause transactions with these cards to be processed incorrectly. CyberSource strongly recommends that you include this field for combo card transactions.  Possible values include the following.   - `CHECKING`: Checking account  - `CREDIT`: Credit card account  - `SAVING`: Saving account  - `LINE_OF_CREDIT`: Line of credit or credit portion of combo card  - `PREPAID`: Prepaid card account or prepaid portion of combo card  - `UNIVERSAL`: Universal account
     * @return $this
     */
    public function setSourceAccountType($sourceAccountType)
    {
        if (!is_null($sourceAccountType) && (strlen($sourceAccountType) > 20)) {
            throw new \InvalidArgumentException('invalid length for $sourceAccountType when calling Ptsv2paymentsPaymentInformationCard., must be smaller than or equal to 20.');
        }

        $this->container['sourceAccountType'] = $sourceAccountType;

        return $this;
    }

    /**
     * Gets securityCode
     * @return string
     */
    public function getSecurityCode()
    {
        return $this->container['securityCode'];
    }

    /**
     * Sets securityCode
     * @param string $securityCode Card Verification Number.  #### Ingenico ePayments Do not include this field when **commerceIndicator**`=recurring`. **Note** Ingenico ePayments was previously called _Global Collect_.
     * @return $this
     */
    public function setSecurityCode($securityCode)
    {
        if (!is_null($securityCode) && (strlen($securityCode) > 4)) {
            throw new \InvalidArgumentException('invalid length for $securityCode when calling Ptsv2paymentsPaymentInformationCard., must be smaller than or equal to 4.');
        }

        $this->container['securityCode'] = $securityCode;

        return $this;
    }

    /**
     * Gets securityCodeIndicator
     * @return string
     */
    public function getSecurityCodeIndicator()
    {
        return $this->container['securityCodeIndicator'];
    }

    /**
     * Sets securityCodeIndicator
     * @param string $securityCodeIndicator Flag that indicates whether a CVN code was sent. Possible values:   - 0 (default): CVN service not requested. CyberSource uses this default value when you do not include      _securityCode_ field in the request.  - 1 (default): CVN service requested and supported. CyberSource uses this default value when you include      _securityCode_ field in the request.  - 2: CVN on credit card is illegible.  - 9: CVN was not imprinted on credit card.
     * @return $this
     */
    public function setSecurityCodeIndicator($securityCodeIndicator)
    {
        if (!is_null($securityCodeIndicator) && (strlen($securityCodeIndicator) > 1)) {
            throw new \InvalidArgumentException('invalid length for $securityCodeIndicator when calling Ptsv2paymentsPaymentInformationCard., must be smaller than or equal to 1.');
        }

        $this->container['securityCodeIndicator'] = $securityCodeIndicator;

        return $this;
    }

    /**
     * Gets accountEncoderId
     * @return string
     */
    public function getAccountEncoderId()
    {
        return $this->container['accountEncoderId'];
    }

    /**
     * Sets accountEncoderId
     * @param string $accountEncoderId Identifier for the issuing bank that provided the customer’s encoded account number. Contact your processor for the bank’s ID.
     * @return $this
     */
    public function setAccountEncoderId($accountEncoderId)
    {
        if (!is_null($accountEncoderId) && (strlen($accountEncoderId) > 3)) {
            throw new \InvalidArgumentException('invalid length for $accountEncoderId when calling Ptsv2paymentsPaymentInformationCard., must be smaller than or equal to 3.');
        }

        $this->container['accountEncoderId'] = $accountEncoderId;

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
     * @param string $issueNumber Number of times a Maestro (UK Domestic) card has been issued to the account holder. The card might or might not have an issue number. The number can consist of one or two digits, and the first digit might be a zero. When you include this value in your request, include exactly what is printed on the card. A value of 2 is different than a value of 02. Do not include the field, even with a blank value, if the card is not a Maestro (UK Domestic) card.  **Note** The issue number is not required for Maestro (UK Domestic) transactions.
     * @return $this
     */
    public function setIssueNumber($issueNumber)
    {
        if (!is_null($issueNumber) && (strlen($issueNumber) > 5)) {
            throw new \InvalidArgumentException('invalid length for $issueNumber when calling Ptsv2paymentsPaymentInformationCard., must be smaller than or equal to 5.');
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
     * @param string $startMonth Month of the start of the Maestro (UK Domestic) card validity period. Do not include the field, even with a blank value, if the card is not a Maestro (UK Domestic) card. `Format: MM`. Possible values: 01 through 12.  **Note** The start date is not required for Maestro (UK Domestic) transactions.
     * @return $this
     */
    public function setStartMonth($startMonth)
    {
        if (!is_null($startMonth) && (strlen($startMonth) > 2)) {
            throw new \InvalidArgumentException('invalid length for $startMonth when calling Ptsv2paymentsPaymentInformationCard., must be smaller than or equal to 2.');
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
     * @param string $startYear Year of the start of the Maestro (UK Domestic) card validity period. Do not include the field, even with a blank value, if the card is not a Maestro (UK Domestic) card. `Format: YYYY`.  **Note** The start date is not required for Maestro (UK Domestic) transactions.
     * @return $this
     */
    public function setStartYear($startYear)
    {
        if (!is_null($startYear) && (strlen($startYear) > 4)) {
            throw new \InvalidArgumentException('invalid length for $startYear when calling Ptsv2paymentsPaymentInformationCard., must be smaller than or equal to 4.');
        }

        $this->container['startYear'] = $startYear;

        return $this;
    }

    /**
     * Gets productName
     * @return string
     */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
     * Sets productName
     * @param string $productName Name of the card product.  Possible value: - BNDES  This field is supported only for BNDES transactions on CyberSource through VisaNet. For details, see `card_product_name` field description in the [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm).  The value for this field corresponds to the following data in the TC 33 capture file5: - Record: CP07 TCR4 - Position: 115-120 - Field: Brazil Country Data
     * @return $this
     */
    public function setProductName($productName)
    {
        if (!is_null($productName) && (strlen($productName) > 15)) {
            throw new \InvalidArgumentException('invalid length for $productName when calling Ptsv2paymentsPaymentInformationCard., must be smaller than or equal to 15.');
        }

        $this->container['productName'] = $productName;

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


