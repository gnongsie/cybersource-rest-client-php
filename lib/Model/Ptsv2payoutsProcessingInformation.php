<?php
/**
 * Ptsv2payoutsProcessingInformation
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
 * Ptsv2payoutsProcessingInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2payoutsProcessingInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payouts_processingInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'businessApplicationId' => 'string',
        'networkRoutingOrder' => 'string',
        'commerceIndicator' => 'string',
        'reconciliationId' => 'string',
        'payoutsOptions' => '\CyberSource\Model\Ptsv2payoutsProcessingInformationPayoutsOptions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'businessApplicationId' => null,
        'networkRoutingOrder' => null,
        'commerceIndicator' => null,
        'reconciliationId' => null,
        'payoutsOptions' => null
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
        'businessApplicationId' => 'businessApplicationId',
        'networkRoutingOrder' => 'networkRoutingOrder',
        'commerceIndicator' => 'commerceIndicator',
        'reconciliationId' => 'reconciliationId',
        'payoutsOptions' => 'payoutsOptions'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'businessApplicationId' => 'setBusinessApplicationId',
        'networkRoutingOrder' => 'setNetworkRoutingOrder',
        'commerceIndicator' => 'setCommerceIndicator',
        'reconciliationId' => 'setReconciliationId',
        'payoutsOptions' => 'setPayoutsOptions'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'businessApplicationId' => 'getBusinessApplicationId',
        'networkRoutingOrder' => 'getNetworkRoutingOrder',
        'commerceIndicator' => 'getCommerceIndicator',
        'reconciliationId' => 'getReconciliationId',
        'payoutsOptions' => 'getPayoutsOptions'
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
        $this->container['businessApplicationId'] = isset($data['businessApplicationId']) ? $data['businessApplicationId'] : null;
        $this->container['networkRoutingOrder'] = isset($data['networkRoutingOrder']) ? $data['networkRoutingOrder'] : null;
        $this->container['commerceIndicator'] = isset($data['commerceIndicator']) ? $data['commerceIndicator'] : null;
        $this->container['reconciliationId'] = isset($data['reconciliationId']) ? $data['reconciliationId'] : null;
        $this->container['payoutsOptions'] = isset($data['payoutsOptions']) ? $data['payoutsOptions'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['businessApplicationId']) && (strlen($this->container['businessApplicationId']) > 2)) {
            $invalid_properties[] = "invalid value for 'businessApplicationId', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['networkRoutingOrder']) && (strlen($this->container['networkRoutingOrder']) > 30)) {
            $invalid_properties[] = "invalid value for 'networkRoutingOrder', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['commerceIndicator']) && (strlen($this->container['commerceIndicator']) > 13)) {
            $invalid_properties[] = "invalid value for 'commerceIndicator', the character length must be smaller than or equal to 13.";
        }

        if (!is_null($this->container['reconciliationId']) && (strlen($this->container['reconciliationId']) > 60)) {
            $invalid_properties[] = "invalid value for 'reconciliationId', the character length must be smaller than or equal to 60.";
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

        if (strlen($this->container['businessApplicationId']) > 2) {
            return false;
        }
        if (strlen($this->container['networkRoutingOrder']) > 30) {
            return false;
        }
        if (strlen($this->container['commerceIndicator']) > 13) {
            return false;
        }
        if (strlen($this->container['reconciliationId']) > 60) {
            return false;
        }
        return true;
    }


    /**
     * Gets businessApplicationId
     * @return string
     */
    public function getBusinessApplicationId()
    {
        return $this->container['businessApplicationId'];
    }

    /**
     * Sets businessApplicationId
     * @param string $businessApplicationId Payouts transaction type.  Applicable Processors: FDC Compass, Paymentech, CtV  Possible values:  **Credit Card Bill Payment**   - **CP**: credit card bill payment  **Funds Disbursement**   - **FD**: funds disbursement  - **GD**: government disbursement  - **MD**: merchant disbursement  **Money Transfer**   - **AA**: account to account. Sender and receiver are same person.  - **PP**: person to person. Sender and receiver are different.  **Prepaid Load**   - **TU**: top up
     * @return $this
     */
    public function setBusinessApplicationId($businessApplicationId)
    {
        if (!is_null($businessApplicationId) && (strlen($businessApplicationId) > 2)) {
            throw new \InvalidArgumentException('invalid length for $businessApplicationId when calling Ptsv2payoutsProcessingInformation., must be smaller than or equal to 2.');
        }

        $this->container['businessApplicationId'] = $businessApplicationId;

        return $this;
    }

    /**
     * Gets networkRoutingOrder
     * @return string
     */
    public function getNetworkRoutingOrder()
    {
        return $this->container['networkRoutingOrder'];
    }

    /**
     * Sets networkRoutingOrder
     * @param string $networkRoutingOrder This field is optionally used by Push Payments Gateway participants (merchants and acquirers) to get the attributes for specified networks only. The networks specified in this field must be a subset of the information provided during program enrollment. Refer to Sharing Group Code/Network Routing Order. Note: Supported only in US for domestic transactions involving Push Payments Gateway Service.  VisaNet checks to determine if there are issuer routing preferences for any of the networks specified by the network routing order. If an issuer preference exists for one of the specified debit networks, VisaNet makes a routing selection based on the issuer’s preference.  If an issuer preference exists for more than one of the specified debit networks, or if no issuer preference exists, VisaNet makes a selection based on the acquirer’s routing priorities.   See https://developer.visa.com/request_response_codes#network_id_and_sharing_group_code , under section 'Network ID and Sharing Group Code' on the left panel for available values
     * @return $this
     */
    public function setNetworkRoutingOrder($networkRoutingOrder)
    {
        if (!is_null($networkRoutingOrder) && (strlen($networkRoutingOrder) > 30)) {
            throw new \InvalidArgumentException('invalid length for $networkRoutingOrder when calling Ptsv2payoutsProcessingInformation., must be smaller than or equal to 30.');
        }

        $this->container['networkRoutingOrder'] = $networkRoutingOrder;

        return $this;
    }

    /**
     * Gets commerceIndicator
     * @return string
     */
    public function getCommerceIndicator()
    {
        return $this->container['commerceIndicator'];
    }

    /**
     * Sets commerceIndicator
     * @param string $commerceIndicator Type of transaction.  Some payment card companies use this information when determining discount rates. When you omit this field for Ingenico ePayments, the processor uses the default transaction type they have on file for you instead of the default value listed here.  For details, see the `e_commerce_indicator` field description in the [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm)  Possible value for Payouts: - internet  #### Ingenico ePayments Ingenico ePayments was previously called _Global Collect_.  #### Payer Authentication Transactions For the possible values and requirements, see \"Payer Authentication\" in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm)  #### Other Types of Transactions For details, see \"Commerce Indicators\" in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm)
     * @return $this
     */
    public function setCommerceIndicator($commerceIndicator)
    {
        if (!is_null($commerceIndicator) && (strlen($commerceIndicator) > 13)) {
            throw new \InvalidArgumentException('invalid length for $commerceIndicator when calling Ptsv2payoutsProcessingInformation., must be smaller than or equal to 13.');
        }

        $this->container['commerceIndicator'] = $commerceIndicator;

        return $this;
    }

    /**
     * Gets reconciliationId
     * @return string
     */
    public function getReconciliationId()
    {
        return $this->container['reconciliationId'];
    }

    /**
     * Sets reconciliationId
     * @param string $reconciliationId Please check with Cybersource customer support to see if your merchant account is configured correctly so you can include this field in your request. * For Payouts: max length for FDCCompass is String (22).
     * @return $this
     */
    public function setReconciliationId($reconciliationId)
    {
        if (!is_null($reconciliationId) && (strlen($reconciliationId) > 60)) {
            throw new \InvalidArgumentException('invalid length for $reconciliationId when calling Ptsv2payoutsProcessingInformation., must be smaller than or equal to 60.');
        }

        $this->container['reconciliationId'] = $reconciliationId;

        return $this;
    }

    /**
     * Gets payoutsOptions
     * @return \CyberSource\Model\Ptsv2payoutsProcessingInformationPayoutsOptions
     */
    public function getPayoutsOptions()
    {
        return $this->container['payoutsOptions'];
    }

    /**
     * Sets payoutsOptions
     * @param \CyberSource\Model\Ptsv2payoutsProcessingInformationPayoutsOptions $payoutsOptions
     * @return $this
     */
    public function setPayoutsOptions($payoutsOptions)
    {
        $this->container['payoutsOptions'] = $payoutsOptions;

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


