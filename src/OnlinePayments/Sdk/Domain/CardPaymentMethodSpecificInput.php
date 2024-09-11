<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Domain;

use OnlinePayments\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CardPaymentMethodSpecificInput extends DataObject
{
    // Properties
    /**
     * @var bool
     */
    private $allowDynamicLinking;

    /**
     * @var string
     */
    private $authorizationMode;

    /**
     * @var Card
     */
    private $card;

    /**
     * @var string
     */
    private $cardOnFileRecurringExpiration;

    /**
     * @var string
     */
    private $cardOnFileRecurringFrequency;

    /**
     * @var CurrencyConversionInput
     */
    private $currencyConversion;

    /**
     * @var string
     */
    private $initialSchemeTransactionId;

    /**
     * @var bool
     */
    private $isRecurring;

    /**
     * @var MultiplePaymentInformation
     */
    private $multiplePaymentInformation;

    /**
     * @var PaymentProduct130SpecificInput
     */
    private $paymentProduct130SpecificInput;

    /**
     * @var PaymentProduct3208SpecificInput
     */
    private $paymentProduct3208SpecificInput;

    /**
     * @var PaymentProduct3209SpecificInput
     */
    private $paymentProduct3209SpecificInput;

    /**
     * @var int
     */
    private $paymentProductId;

    /**
     * @var CardRecurrenceDetails
     */
    private $recurring;

    /**
     * @var string
     */
    private $returnUrl;

    /**
     * @var string
     */
    private $schemeReferenceData;

    /**
     * @var bool
     */
    private $skipAuthentication;

    /**
     * @var ThreeDSecure
     */
    private $threeDSecure;

    /**
     * @var string
     */
    private $token;

    /**
     * @var bool
     */
    private $tokenize;

    /**
     * @var string
     */
    private $transactionChannel;

    /**
     * @var string
     */
    private $unscheduledCardOnFileRequestor;

    /**
     * @var string
     */
    private $unscheduledCardOnFileSequenceIndicator;

    // Methods
    /**
     * @return bool
     */
    public function getAllowDynamicLinking()
    {
        return $this->allowDynamicLinking;
    }
    /**
     * @var bool
     */
    public function setAllowDynamicLinking($value)
    {
        $this->allowDynamicLinking = $value;
    }

    /**
     * @return string
     */
    public function getAuthorizationMode()
    {
        return $this->authorizationMode;
    }
    /**
     * @var string
     */
    public function setAuthorizationMode($value)
    {
        $this->authorizationMode = $value;
    }

    /**
     * @return Card
     */
    public function getCard()
    {
        return $this->card;
    }
    /**
     * @var Card
     */
    public function setCard($value)
    {
        $this->card = $value;
    }

    /**
     * @return string
     */
    public function getCardOnFileRecurringExpiration()
    {
        return $this->cardOnFileRecurringExpiration;
    }
    /**
     * @var string
     */
    public function setCardOnFileRecurringExpiration($value)
    {
        $this->cardOnFileRecurringExpiration = $value;
    }

    /**
     * @return string
     */
    public function getCardOnFileRecurringFrequency()
    {
        return $this->cardOnFileRecurringFrequency;
    }
    /**
     * @var string
     */
    public function setCardOnFileRecurringFrequency($value)
    {
        $this->cardOnFileRecurringFrequency = $value;
    }

    /**
     * @return CurrencyConversionInput
     */
    public function getCurrencyConversion()
    {
        return $this->currencyConversion;
    }
    /**
     * @var CurrencyConversionInput
     */
    public function setCurrencyConversion($value)
    {
        $this->currencyConversion = $value;
    }

    /**
     * @return string
     */
    public function getInitialSchemeTransactionId()
    {
        return $this->initialSchemeTransactionId;
    }
    /**
     * @var string
     */
    public function setInitialSchemeTransactionId($value)
    {
        $this->initialSchemeTransactionId = $value;
    }

    /**
     * @return bool
     */
    public function getIsRecurring()
    {
        return $this->isRecurring;
    }
    /**
     * @var bool
     */
    public function setIsRecurring($value)
    {
        $this->isRecurring = $value;
    }

    /**
     * @return MultiplePaymentInformation
     */
    public function getMultiplePaymentInformation()
    {
        return $this->multiplePaymentInformation;
    }
    /**
     * @var MultiplePaymentInformation
     */
    public function setMultiplePaymentInformation($value)
    {
        $this->multiplePaymentInformation = $value;
    }

    /**
     * @return PaymentProduct130SpecificInput
     */
    public function getPaymentProduct130SpecificInput()
    {
        return $this->paymentProduct130SpecificInput;
    }
    /**
     * @var PaymentProduct130SpecificInput
     */
    public function setPaymentProduct130SpecificInput($value)
    {
        $this->paymentProduct130SpecificInput = $value;
    }

    /**
     * @return PaymentProduct3208SpecificInput
     */
    public function getPaymentProduct3208SpecificInput()
    {
        return $this->paymentProduct3208SpecificInput;
    }
    /**
     * @var PaymentProduct3208SpecificInput
     */
    public function setPaymentProduct3208SpecificInput($value)
    {
        $this->paymentProduct3208SpecificInput = $value;
    }

    /**
     * @return PaymentProduct3209SpecificInput
     */
    public function getPaymentProduct3209SpecificInput()
    {
        return $this->paymentProduct3209SpecificInput;
    }
    /**
     * @var PaymentProduct3209SpecificInput
     */
    public function setPaymentProduct3209SpecificInput($value)
    {
        $this->paymentProduct3209SpecificInput = $value;
    }

    /**
     * @return int
     */
    public function getPaymentProductId()
    {
        return $this->paymentProductId;
    }
    /**
     * @var int
     */
    public function setPaymentProductId($value)
    {
        $this->paymentProductId = $value;
    }

    /**
     * @return CardRecurrenceDetails
     */
    public function getRecurring()
    {
        return $this->recurring;
    }
    /**
     * @var CardRecurrenceDetails
     */
    public function setRecurring($value)
    {
        $this->recurring = $value;
    }

    /**
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }
    /**
     * @var string
     */
    public function setReturnUrl($value)
    {
        $this->returnUrl = $value;
    }

    /**
     * @return string
     */
    public function getSchemeReferenceData()
    {
        return $this->schemeReferenceData;
    }
    /**
     * @var string
     */
    public function setSchemeReferenceData($value)
    {
        $this->schemeReferenceData = $value;
    }

    /**
     * @return bool
     */
    public function getSkipAuthentication()
    {
        return $this->skipAuthentication;
    }
    /**
     * @var bool
     */
    public function setSkipAuthentication($value)
    {
        $this->skipAuthentication = $value;
    }

    /**
     * @return ThreeDSecure
     */
    public function getThreeDSecure()
    {
        return $this->threeDSecure;
    }
    /**
     * @var ThreeDSecure
     */
    public function setThreeDSecure($value)
    {
        $this->threeDSecure = $value;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
    /**
     * @var string
     */
    public function setToken($value)
    {
        $this->token = $value;
    }

    /**
     * @return bool
     */
    public function getTokenize()
    {
        return $this->tokenize;
    }
    /**
     * @var bool
     */
    public function setTokenize($value)
    {
        $this->tokenize = $value;
    }

    /**
     * @return string
     */
    public function getTransactionChannel()
    {
        return $this->transactionChannel;
    }
    /**
     * @var string
     */
    public function setTransactionChannel($value)
    {
        $this->transactionChannel = $value;
    }

    /**
     * @return string
     */
    public function getUnscheduledCardOnFileRequestor()
    {
        return $this->unscheduledCardOnFileRequestor;
    }
    /**
     * @var string
     */
    public function setUnscheduledCardOnFileRequestor($value)
    {
        $this->unscheduledCardOnFileRequestor = $value;
    }

    /**
     * @return string
     */
    public function getUnscheduledCardOnFileSequenceIndicator()
    {
        return $this->unscheduledCardOnFileSequenceIndicator;
    }
    /**
     * @var string
     */
    public function setUnscheduledCardOnFileSequenceIndicator($value)
    {
        $this->unscheduledCardOnFileSequenceIndicator = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->allowDynamicLinking !== null) {
            $object->allowDynamicLinking = $this->allowDynamicLinking;
        }
        if ($this->authorizationMode !== null) {
            $object->authorizationMode = $this->authorizationMode;
        }
        if ($this->card !== null) {
            $object->card = $this->card->toObject();
        }
        if ($this->cardOnFileRecurringExpiration !== null) {
            $object->cardOnFileRecurringExpiration = $this->cardOnFileRecurringExpiration;
        }
        if ($this->cardOnFileRecurringFrequency !== null) {
            $object->cardOnFileRecurringFrequency = $this->cardOnFileRecurringFrequency;
        }
        if ($this->currencyConversion !== null) {
            $object->currencyConversion = $this->currencyConversion->toObject();
        }
        if ($this->initialSchemeTransactionId !== null) {
            $object->initialSchemeTransactionId = $this->initialSchemeTransactionId;
        }
        if ($this->isRecurring !== null) {
            $object->isRecurring = $this->isRecurring;
        }
        if ($this->multiplePaymentInformation !== null) {
            $object->multiplePaymentInformation = $this->multiplePaymentInformation->toObject();
        }
        if ($this->paymentProduct130SpecificInput !== null) {
            $object->paymentProduct130SpecificInput = $this->paymentProduct130SpecificInput->toObject();
        }
        if ($this->paymentProduct3208SpecificInput !== null) {
            $object->paymentProduct3208SpecificInput = $this->paymentProduct3208SpecificInput->toObject();
        }
        if ($this->paymentProduct3209SpecificInput !== null) {
            $object->paymentProduct3209SpecificInput = $this->paymentProduct3209SpecificInput->toObject();
        }
        if ($this->paymentProductId !== null) {
            $object->paymentProductId = $this->paymentProductId;
        }
        if ($this->recurring !== null) {
            $object->recurring = $this->recurring->toObject();
        }
        if ($this->returnUrl !== null) {
            $object->returnUrl = $this->returnUrl;
        }
        if ($this->schemeReferenceData !== null) {
            $object->schemeReferenceData = $this->schemeReferenceData;
        }
        if ($this->skipAuthentication !== null) {
            $object->skipAuthentication = $this->skipAuthentication;
        }
        if ($this->threeDSecure !== null) {
            $object->threeDSecure = $this->threeDSecure->toObject();
        }
        if ($this->token !== null) {
            $object->token = $this->token;
        }
        if ($this->tokenize !== null) {
            $object->tokenize = $this->tokenize;
        }
        if ($this->transactionChannel !== null) {
            $object->transactionChannel = $this->transactionChannel;
        }
        if ($this->unscheduledCardOnFileRequestor !== null) {
            $object->unscheduledCardOnFileRequestor = $this->unscheduledCardOnFileRequestor;
        }
        if ($this->unscheduledCardOnFileSequenceIndicator !== null) {
            $object->unscheduledCardOnFileSequenceIndicator = $this->unscheduledCardOnFileSequenceIndicator;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
    {
        parent::fromObject($object);
        if (property_exists($object, 'allowDynamicLinking')) {
            $this->allowDynamicLinking = $object->allowDynamicLinking;
        }
        if (property_exists($object, 'authorizationMode')) {
            $this->authorizationMode = $object->authorizationMode;
        }
        if (property_exists($object, 'card')) {
            if (!is_object($object->card)) {
                throw new UnexpectedValueException('value \'' . print_r($object->card, true) . '\' is not an object');
            }
            $value = new Card();
            $this->card = $value->fromObject($object->card);
        }
        if (property_exists($object, 'cardOnFileRecurringExpiration')) {
            $this->cardOnFileRecurringExpiration = $object->cardOnFileRecurringExpiration;
        }
        if (property_exists($object, 'cardOnFileRecurringFrequency')) {
            $this->cardOnFileRecurringFrequency = $object->cardOnFileRecurringFrequency;
        }
        if (property_exists($object, 'currencyConversion')) {
            if (!is_object($object->currencyConversion)) {
                throw new UnexpectedValueException('value \'' . print_r($object->currencyConversion, true) . '\' is not an object');
            }
            $value = new CurrencyConversionInput();
            $this->currencyConversion = $value->fromObject($object->currencyConversion);
        }
        if (property_exists($object, 'initialSchemeTransactionId')) {
            $this->initialSchemeTransactionId = $object->initialSchemeTransactionId;
        }
        if (property_exists($object, 'isRecurring')) {
            $this->isRecurring = $object->isRecurring;
        }
        if (property_exists($object, 'multiplePaymentInformation')) {
            if (!is_object($object->multiplePaymentInformation)) {
                throw new UnexpectedValueException('value \'' . print_r($object->multiplePaymentInformation, true) . '\' is not an object');
            }
            $value = new MultiplePaymentInformation();
            $this->multiplePaymentInformation = $value->fromObject($object->multiplePaymentInformation);
        }
        if (property_exists($object, 'paymentProduct130SpecificInput')) {
            if (!is_object($object->paymentProduct130SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct130SpecificInput, true) . '\' is not an object');
            }
            $value = new PaymentProduct130SpecificInput();
            $this->paymentProduct130SpecificInput = $value->fromObject($object->paymentProduct130SpecificInput);
        }
        if (property_exists($object, 'paymentProduct3208SpecificInput')) {
            if (!is_object($object->paymentProduct3208SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct3208SpecificInput, true) . '\' is not an object');
            }
            $value = new PaymentProduct3208SpecificInput();
            $this->paymentProduct3208SpecificInput = $value->fromObject($object->paymentProduct3208SpecificInput);
        }
        if (property_exists($object, 'paymentProduct3209SpecificInput')) {
            if (!is_object($object->paymentProduct3209SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct3209SpecificInput, true) . '\' is not an object');
            }
            $value = new PaymentProduct3209SpecificInput();
            $this->paymentProduct3209SpecificInput = $value->fromObject($object->paymentProduct3209SpecificInput);
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        if (property_exists($object, 'recurring')) {
            if (!is_object($object->recurring)) {
                throw new UnexpectedValueException('value \'' . print_r($object->recurring, true) . '\' is not an object');
            }
            $value = new CardRecurrenceDetails();
            $this->recurring = $value->fromObject($object->recurring);
        }
        if (property_exists($object, 'returnUrl')) {
            $this->returnUrl = $object->returnUrl;
        }
        if (property_exists($object, 'schemeReferenceData')) {
            $this->schemeReferenceData = $object->schemeReferenceData;
        }
        if (property_exists($object, 'skipAuthentication')) {
            $this->skipAuthentication = $object->skipAuthentication;
        }
        if (property_exists($object, 'threeDSecure')) {
            if (!is_object($object->threeDSecure)) {
                throw new UnexpectedValueException('value \'' . print_r($object->threeDSecure, true) . '\' is not an object');
            }
            $value = new ThreeDSecure();
            $this->threeDSecure = $value->fromObject($object->threeDSecure);
        }
        if (property_exists($object, 'token')) {
            $this->token = $object->token;
        }
        if (property_exists($object, 'tokenize')) {
            $this->tokenize = $object->tokenize;
        }
        if (property_exists($object, 'transactionChannel')) {
            $this->transactionChannel = $object->transactionChannel;
        }
        if (property_exists($object, 'unscheduledCardOnFileRequestor')) {
            $this->unscheduledCardOnFileRequestor = $object->unscheduledCardOnFileRequestor;
        }
        if (property_exists($object, 'unscheduledCardOnFileSequenceIndicator')) {
            $this->unscheduledCardOnFileSequenceIndicator = $object->unscheduledCardOnFileSequenceIndicator;
        }
        return $this;
    }
}
