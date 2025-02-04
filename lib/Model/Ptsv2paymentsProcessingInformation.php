<?php
/**
 * Ptsv2paymentsProcessingInformation
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
 * Ptsv2paymentsProcessingInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsProcessingInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_processingInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'capture' => 'bool',
        'processorId' => 'string',
        'businessApplicationId' => 'string',
        'commerceIndicator' => 'string',
        'paymentSolution' => 'string',
        'reconciliationId' => 'string',
        'linkId' => 'string',
        'purchaseLevel' => 'string',
        'reportGroup' => 'string',
        'visaCheckoutId' => 'string',
        'industryDataType' => 'string',
        'authorizationOptions' => '\CyberSource\Model\Ptsv2paymentsProcessingInformationAuthorizationOptions',
        'captureOptions' => '\CyberSource\Model\Ptsv2paymentsProcessingInformationCaptureOptions',
        'recurringOptions' => '\CyberSource\Model\Ptsv2paymentsProcessingInformationRecurringOptions',
        'bankTransferOptions' => '\CyberSource\Model\Ptsv2paymentsProcessingInformationBankTransferOptions',
        'purchaseOptions' => '\CyberSource\Model\Ptsv2paymentsProcessingInformationPurchaseOptions',
        'electronicBenefitsTransfer' => '\CyberSource\Model\Ptsv2paymentsProcessingInformationElectronicBenefitsTransfer'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'capture' => null,
        'processorId' => null,
        'businessApplicationId' => null,
        'commerceIndicator' => null,
        'paymentSolution' => null,
        'reconciliationId' => null,
        'linkId' => null,
        'purchaseLevel' => null,
        'reportGroup' => null,
        'visaCheckoutId' => null,
        'industryDataType' => null,
        'authorizationOptions' => null,
        'captureOptions' => null,
        'recurringOptions' => null,
        'bankTransferOptions' => null,
        'purchaseOptions' => null,
        'electronicBenefitsTransfer' => null
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
        'capture' => 'capture',
        'processorId' => 'processorId',
        'businessApplicationId' => 'businessApplicationId',
        'commerceIndicator' => 'commerceIndicator',
        'paymentSolution' => 'paymentSolution',
        'reconciliationId' => 'reconciliationId',
        'linkId' => 'linkId',
        'purchaseLevel' => 'purchaseLevel',
        'reportGroup' => 'reportGroup',
        'visaCheckoutId' => 'visaCheckoutId',
        'industryDataType' => 'industryDataType',
        'authorizationOptions' => 'authorizationOptions',
        'captureOptions' => 'captureOptions',
        'recurringOptions' => 'recurringOptions',
        'bankTransferOptions' => 'bankTransferOptions',
        'purchaseOptions' => 'purchaseOptions',
        'electronicBenefitsTransfer' => 'electronicBenefitsTransfer'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'capture' => 'setCapture',
        'processorId' => 'setProcessorId',
        'businessApplicationId' => 'setBusinessApplicationId',
        'commerceIndicator' => 'setCommerceIndicator',
        'paymentSolution' => 'setPaymentSolution',
        'reconciliationId' => 'setReconciliationId',
        'linkId' => 'setLinkId',
        'purchaseLevel' => 'setPurchaseLevel',
        'reportGroup' => 'setReportGroup',
        'visaCheckoutId' => 'setVisaCheckoutId',
        'industryDataType' => 'setIndustryDataType',
        'authorizationOptions' => 'setAuthorizationOptions',
        'captureOptions' => 'setCaptureOptions',
        'recurringOptions' => 'setRecurringOptions',
        'bankTransferOptions' => 'setBankTransferOptions',
        'purchaseOptions' => 'setPurchaseOptions',
        'electronicBenefitsTransfer' => 'setElectronicBenefitsTransfer'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'capture' => 'getCapture',
        'processorId' => 'getProcessorId',
        'businessApplicationId' => 'getBusinessApplicationId',
        'commerceIndicator' => 'getCommerceIndicator',
        'paymentSolution' => 'getPaymentSolution',
        'reconciliationId' => 'getReconciliationId',
        'linkId' => 'getLinkId',
        'purchaseLevel' => 'getPurchaseLevel',
        'reportGroup' => 'getReportGroup',
        'visaCheckoutId' => 'getVisaCheckoutId',
        'industryDataType' => 'getIndustryDataType',
        'authorizationOptions' => 'getAuthorizationOptions',
        'captureOptions' => 'getCaptureOptions',
        'recurringOptions' => 'getRecurringOptions',
        'bankTransferOptions' => 'getBankTransferOptions',
        'purchaseOptions' => 'getPurchaseOptions',
        'electronicBenefitsTransfer' => 'getElectronicBenefitsTransfer'
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
        $this->container['capture'] = isset($data['capture']) ? $data['capture'] : false;
        $this->container['processorId'] = isset($data['processorId']) ? $data['processorId'] : null;
        $this->container['businessApplicationId'] = isset($data['businessApplicationId']) ? $data['businessApplicationId'] : null;
        $this->container['commerceIndicator'] = isset($data['commerceIndicator']) ? $data['commerceIndicator'] : null;
        $this->container['paymentSolution'] = isset($data['paymentSolution']) ? $data['paymentSolution'] : null;
        $this->container['reconciliationId'] = isset($data['reconciliationId']) ? $data['reconciliationId'] : null;
        $this->container['linkId'] = isset($data['linkId']) ? $data['linkId'] : null;
        $this->container['purchaseLevel'] = isset($data['purchaseLevel']) ? $data['purchaseLevel'] : null;
        $this->container['reportGroup'] = isset($data['reportGroup']) ? $data['reportGroup'] : null;
        $this->container['visaCheckoutId'] = isset($data['visaCheckoutId']) ? $data['visaCheckoutId'] : null;
        $this->container['industryDataType'] = isset($data['industryDataType']) ? $data['industryDataType'] : null;
        $this->container['authorizationOptions'] = isset($data['authorizationOptions']) ? $data['authorizationOptions'] : null;
        $this->container['captureOptions'] = isset($data['captureOptions']) ? $data['captureOptions'] : null;
        $this->container['recurringOptions'] = isset($data['recurringOptions']) ? $data['recurringOptions'] : null;
        $this->container['bankTransferOptions'] = isset($data['bankTransferOptions']) ? $data['bankTransferOptions'] : null;
        $this->container['purchaseOptions'] = isset($data['purchaseOptions']) ? $data['purchaseOptions'] : null;
        $this->container['electronicBenefitsTransfer'] = isset($data['electronicBenefitsTransfer']) ? $data['electronicBenefitsTransfer'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['processorId']) && (strlen($this->container['processorId']) > 3)) {
            $invalid_properties[] = "invalid value for 'processorId', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['commerceIndicator']) && (strlen($this->container['commerceIndicator']) > 20)) {
            $invalid_properties[] = "invalid value for 'commerceIndicator', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['paymentSolution']) && (strlen($this->container['paymentSolution']) > 12)) {
            $invalid_properties[] = "invalid value for 'paymentSolution', the character length must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['reconciliationId']) && (strlen($this->container['reconciliationId']) > 60)) {
            $invalid_properties[] = "invalid value for 'reconciliationId', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['linkId']) && (strlen($this->container['linkId']) > 26)) {
            $invalid_properties[] = "invalid value for 'linkId', the character length must be smaller than or equal to 26.";
        }

        if (!is_null($this->container['purchaseLevel']) && (strlen($this->container['purchaseLevel']) > 1)) {
            $invalid_properties[] = "invalid value for 'purchaseLevel', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['reportGroup']) && (strlen($this->container['reportGroup']) > 25)) {
            $invalid_properties[] = "invalid value for 'reportGroup', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['visaCheckoutId']) && (strlen($this->container['visaCheckoutId']) > 48)) {
            $invalid_properties[] = "invalid value for 'visaCheckoutId', the character length must be smaller than or equal to 48.";
        }

        if (!is_null($this->container['industryDataType']) && (strlen($this->container['industryDataType']) > 10)) {
            $invalid_properties[] = "invalid value for 'industryDataType', the character length must be smaller than or equal to 10.";
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

        if (strlen($this->container['processorId']) > 3) {
            return false;
        }
        if (strlen($this->container['commerceIndicator']) > 20) {
            return false;
        }
        if (strlen($this->container['paymentSolution']) > 12) {
            return false;
        }
        if (strlen($this->container['reconciliationId']) > 60) {
            return false;
        }
        if (strlen($this->container['linkId']) > 26) {
            return false;
        }
        if (strlen($this->container['purchaseLevel']) > 1) {
            return false;
        }
        if (strlen($this->container['reportGroup']) > 25) {
            return false;
        }
        if (strlen($this->container['visaCheckoutId']) > 48) {
            return false;
        }
        if (strlen($this->container['industryDataType']) > 10) {
            return false;
        }
        return true;
    }


    /**
     * Gets capture
     * @return bool
     */
    public function getCapture()
    {
        return $this->container['capture'];
    }

    /**
     * Sets capture
     * @param bool $capture Flag that specifies whether to also include capture service in the submitted request or not.  Possible values: - **true** - **false** (default).
     * @return $this
     */
    public function setCapture($capture)
    {
        $this->container['capture'] = $capture;

        return $this;
    }

    /**
     * Gets processorId
     * @return string
     */
    public function getProcessorId()
    {
        return $this->container['processorId'];
    }

    /**
     * Sets processorId
     * @param string $processorId Value that identifies the processor/acquirer to use for the transaction. This value is supported only for **CyberSource through VisaNet**.  Contact CyberSource Customer Support to get the value for this field.
     * @return $this
     */
    public function setProcessorId($processorId)
    {
        if (!is_null($processorId) && (strlen($processorId) > 3)) {
            throw new \InvalidArgumentException('invalid length for $processorId when calling Ptsv2paymentsProcessingInformation., must be smaller than or equal to 3.');
        }

        $this->container['processorId'] = $processorId;

        return $this;
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
     * @param string $businessApplicationId Payouts transaction type. Required for OCT transactions. This field is a pass-through, which means that CyberSource does not verify the value or modify it in any way before sending it to the processor. **Note** When the request includes this field, this value overrides the information in your CyberSource account.  For valid values, see the `invoiceHeader_businessApplicationID` field description in [Payouts Using the Simple Order API.](http://apps.cybersource.com/library/documentation/dev_guides/payouts_SO/Payouts_SO_API.pdf)
     * @return $this
     */
    public function setBusinessApplicationId($businessApplicationId)
    {
        $this->container['businessApplicationId'] = $businessApplicationId;

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
     * @param string $commerceIndicator Type of transaction. Some payment card companies use this information when determining discount rates. When you omit this field for **Ingenico ePayments**, the processor uses the default transaction type they have on file for you instead of the default value listed here.
     * @return $this
     */
    public function setCommerceIndicator($commerceIndicator)
    {
        if (!is_null($commerceIndicator) && (strlen($commerceIndicator) > 20)) {
            throw new \InvalidArgumentException('invalid length for $commerceIndicator when calling Ptsv2paymentsProcessingInformation., must be smaller than or equal to 20.');
        }

        $this->container['commerceIndicator'] = $commerceIndicator;

        return $this;
    }

    /**
     * Gets paymentSolution
     * @return string
     */
    public function getPaymentSolution()
    {
        return $this->container['paymentSolution'];
    }

    /**
     * Sets paymentSolution
     * @param string $paymentSolution Type of digital payment solution for the transaction. Possible Values:   - `visacheckout`: Visa Checkout. This value is required for Visa Checkout transactions. For details, see `payment_solution` field description in [Visa Checkout Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/VCO_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm)  - `001`: Apple Pay.  - `004`: Cybersource In-App Solution.  - `005`: Masterpass. This value is required for Masterpass transactions on OmniPay Direct. For details, see \"Masterpass\" in the [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm)  - `006`: Android Pay.  - `007`: Chase Pay.  - `008`: Samsung Pay.  - `012`: Google Pay.
     * @return $this
     */
    public function setPaymentSolution($paymentSolution)
    {
        if (!is_null($paymentSolution) && (strlen($paymentSolution) > 12)) {
            throw new \InvalidArgumentException('invalid length for $paymentSolution when calling Ptsv2paymentsProcessingInformation., must be smaller than or equal to 12.');
        }

        $this->container['paymentSolution'] = $paymentSolution;

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
            throw new \InvalidArgumentException('invalid length for $reconciliationId when calling Ptsv2paymentsProcessingInformation., must be smaller than or equal to 60.');
        }

        $this->container['reconciliationId'] = $reconciliationId;

        return $this;
    }

    /**
     * Gets linkId
     * @return string
     */
    public function getLinkId()
    {
        return $this->container['linkId'];
    }

    /**
     * Sets linkId
     * @param string $linkId Value that links the current authorization request to the original authorization request. Set this value to the ID that was returned in the reply message from the original authorization request.  This value is used for:  - Partial authorizations - Split shipments  For details, see `link_to_request` field description in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm)
     * @return $this
     */
    public function setLinkId($linkId)
    {
        if (!is_null($linkId) && (strlen($linkId) > 26)) {
            throw new \InvalidArgumentException('invalid length for $linkId when calling Ptsv2paymentsProcessingInformation., must be smaller than or equal to 26.');
        }

        $this->container['linkId'] = $linkId;

        return $this;
    }

    /**
     * Gets purchaseLevel
     * @return string
     */
    public function getPurchaseLevel()
    {
        return $this->container['purchaseLevel'];
    }

    /**
     * Sets purchaseLevel
     * @param string $purchaseLevel Set this field to 3 to indicate that the request includes Level III data.
     * @return $this
     */
    public function setPurchaseLevel($purchaseLevel)
    {
        if (!is_null($purchaseLevel) && (strlen($purchaseLevel) > 1)) {
            throw new \InvalidArgumentException('invalid length for $purchaseLevel when calling Ptsv2paymentsProcessingInformation., must be smaller than or equal to 1.');
        }

        $this->container['purchaseLevel'] = $purchaseLevel;

        return $this;
    }

    /**
     * Gets reportGroup
     * @return string
     */
    public function getReportGroup()
    {
        return $this->container['reportGroup'];
    }

    /**
     * Sets reportGroup
     * @param string $reportGroup Attribute that lets you define custom grouping for your processor reports. This field is supported only for **Worldpay VAP**.  For details, see `report_group` field description in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm)
     * @return $this
     */
    public function setReportGroup($reportGroup)
    {
        if (!is_null($reportGroup) && (strlen($reportGroup) > 25)) {
            throw new \InvalidArgumentException('invalid length for $reportGroup when calling Ptsv2paymentsProcessingInformation., must be smaller than or equal to 25.');
        }

        $this->container['reportGroup'] = $reportGroup;

        return $this;
    }

    /**
     * Gets visaCheckoutId
     * @return string
     */
    public function getVisaCheckoutId()
    {
        return $this->container['visaCheckoutId'];
    }

    /**
     * Sets visaCheckoutId
     * @param string $visaCheckoutId Identifier for the **Visa Checkout** order. Visa Checkout provides a unique order ID for every transaction in the Visa Checkout **callID** field.  For details, see the `vc_order_id` field description in [Visa Checkout Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/VCO_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm)
     * @return $this
     */
    public function setVisaCheckoutId($visaCheckoutId)
    {
        if (!is_null($visaCheckoutId) && (strlen($visaCheckoutId) > 48)) {
            throw new \InvalidArgumentException('invalid length for $visaCheckoutId when calling Ptsv2paymentsProcessingInformation., must be smaller than or equal to 48.');
        }

        $this->container['visaCheckoutId'] = $visaCheckoutId;

        return $this;
    }

    /**
     * Gets industryDataType
     * @return string
     */
    public function getIndustryDataType()
    {
        return $this->container['industryDataType'];
    }

    /**
     * Sets industryDataType
     * @param string $industryDataType Flag that indicates that the transaction includes airline data or restaurant data.  This field must be set to `airline` in order for airline data to be sent to the processor.  For example, if this field is not set to airline or is not included in the request, CyberSource does not send airline data to the processor.  You must set this field to `restaurant` in order for restaurant data to be sent to the processor.  When this field is not set to restaurant or is not included in the request, CyberSource does not send restaurant data to the processor.  Possible Values:  - **airline** - **restaurant**
     * @return $this
     */
    public function setIndustryDataType($industryDataType)
    {
        if (!is_null($industryDataType) && (strlen($industryDataType) > 10)) {
            throw new \InvalidArgumentException('invalid length for $industryDataType when calling Ptsv2paymentsProcessingInformation., must be smaller than or equal to 10.');
        }

        $this->container['industryDataType'] = $industryDataType;

        return $this;
    }

    /**
     * Gets authorizationOptions
     * @return \CyberSource\Model\Ptsv2paymentsProcessingInformationAuthorizationOptions
     */
    public function getAuthorizationOptions()
    {
        return $this->container['authorizationOptions'];
    }

    /**
     * Sets authorizationOptions
     * @param \CyberSource\Model\Ptsv2paymentsProcessingInformationAuthorizationOptions $authorizationOptions
     * @return $this
     */
    public function setAuthorizationOptions($authorizationOptions)
    {
        $this->container['authorizationOptions'] = $authorizationOptions;

        return $this;
    }

    /**
     * Gets captureOptions
     * @return \CyberSource\Model\Ptsv2paymentsProcessingInformationCaptureOptions
     */
    public function getCaptureOptions()
    {
        return $this->container['captureOptions'];
    }

    /**
     * Sets captureOptions
     * @param \CyberSource\Model\Ptsv2paymentsProcessingInformationCaptureOptions $captureOptions
     * @return $this
     */
    public function setCaptureOptions($captureOptions)
    {
        $this->container['captureOptions'] = $captureOptions;

        return $this;
    }

    /**
     * Gets recurringOptions
     * @return \CyberSource\Model\Ptsv2paymentsProcessingInformationRecurringOptions
     */
    public function getRecurringOptions()
    {
        return $this->container['recurringOptions'];
    }

    /**
     * Sets recurringOptions
     * @param \CyberSource\Model\Ptsv2paymentsProcessingInformationRecurringOptions $recurringOptions
     * @return $this
     */
    public function setRecurringOptions($recurringOptions)
    {
        $this->container['recurringOptions'] = $recurringOptions;

        return $this;
    }

    /**
     * Gets bankTransferOptions
     * @return \CyberSource\Model\Ptsv2paymentsProcessingInformationBankTransferOptions
     */
    public function getBankTransferOptions()
    {
        return $this->container['bankTransferOptions'];
    }

    /**
     * Sets bankTransferOptions
     * @param \CyberSource\Model\Ptsv2paymentsProcessingInformationBankTransferOptions $bankTransferOptions
     * @return $this
     */
    public function setBankTransferOptions($bankTransferOptions)
    {
        $this->container['bankTransferOptions'] = $bankTransferOptions;

        return $this;
    }

    /**
     * Gets purchaseOptions
     * @return \CyberSource\Model\Ptsv2paymentsProcessingInformationPurchaseOptions
     */
    public function getPurchaseOptions()
    {
        return $this->container['purchaseOptions'];
    }

    /**
     * Sets purchaseOptions
     * @param \CyberSource\Model\Ptsv2paymentsProcessingInformationPurchaseOptions $purchaseOptions
     * @return $this
     */
    public function setPurchaseOptions($purchaseOptions)
    {
        $this->container['purchaseOptions'] = $purchaseOptions;

        return $this;
    }

    /**
     * Gets electronicBenefitsTransfer
     * @return \CyberSource\Model\Ptsv2paymentsProcessingInformationElectronicBenefitsTransfer
     */
    public function getElectronicBenefitsTransfer()
    {
        return $this->container['electronicBenefitsTransfer'];
    }

    /**
     * Sets electronicBenefitsTransfer
     * @param \CyberSource\Model\Ptsv2paymentsProcessingInformationElectronicBenefitsTransfer $electronicBenefitsTransfer
     * @return $this
     */
    public function setElectronicBenefitsTransfer($electronicBenefitsTransfer)
    {
        $this->container['electronicBenefitsTransfer'] = $electronicBenefitsTransfer;

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


