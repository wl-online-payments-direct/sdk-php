<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CardPaymentMethodSpecificInput extends DataObject
{
    /**
     * @var bool
     */
    public $allowDynamicLinking = null;

    /**
     * @var string
     */
    public $authorizationMode = null;

    /**
     * @var Card
     */
    public $card = null;

    /**
     * @var string
     */
    public $cardOnFileRecurringExpiration = null;

    /**
     * @var string
     */
    public $cardOnFileRecurringFrequency = null;

    /**
     * @var string
     */
    public $cobrandSelectionIndicator = null;

    /**
     * @var CurrencyConversionInput
     */
    public $currencyConversion = null;

    /**
     * @var string
     */
    public $initialSchemeTransactionId = null;

    /**
     * @var bool
     */
    public $isRecurring = null;

    /**
     * @var MultiplePaymentInformation
     */
    public $multiplePaymentInformation = null;

    /**
     * @var PaymentProduct130SpecificInput
     */
    public $paymentProduct130SpecificInput = null;

    /**
     * @var PaymentProduct3012SpecificInput
     */
    public $paymentProduct3012SpecificInput = null;

    /**
     * @var PaymentProduct3208SpecificInput
     */
    public $paymentProduct3208SpecificInput = null;

    /**
     * @var PaymentProduct3209SpecificInput
     */
    public $paymentProduct3209SpecificInput = null;

    /**
     * @var int
     */
    public $paymentProductId = null;

    /**
     * @var CardRecurrenceDetails
     */
    public $recurring = null;

    /**
     * @var string
     */
    public $returnUrl = null;

    /**
     * @var string
     */
    public $schemeReferenceData = null;

    /**
     * @var bool
     * @deprecated Use threeDSecure.skipAuthentication instead.  * true = 3D Secure authentication will be skipped for this transaction. This setting should be used when isRecurring is set to true and recurringPaymentSequenceIndicator is set to recurring.  * false = 3D Secure authentication will not be skipped for this transaction.    Note: This is only possible if your account in our system is setup for 3D Secure authentication and if your configuration in our system allows you to override it per transaction.
     */
    public $skipAuthentication = null;

    /**
     * @var ThreeDSecure
     */
    public $threeDSecure = null;

    /**
     * @var string
     */
    public $token = null;

    /**
     * @var bool
     */
    public $tokenize = null;

    /**
     * @var string
     */
    public $transactionChannel = null;

    /**
     * @var string
     */
    public $unscheduledCardOnFileRequestor = null;

    /**
     * @var string
     */
    public $unscheduledCardOnFileSequenceIndicator = null;

    /**
     * @return bool
     */
    public function getAllowDynamicLinking()
    {
        return $this->allowDynamicLinking;
    }

    /**
     * @param bool
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
     * @param string
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
     * @param Card
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
     * @param string
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
     * @param string
     */
    public function setCardOnFileRecurringFrequency($value)
    {
        $this->cardOnFileRecurringFrequency = $value;
    }

    /**
     * @return string
     */
    public function getCobrandSelectionIndicator()
    {
        return $this->cobrandSelectionIndicator;
    }

    /**
     * @param string
     */
    public function setCobrandSelectionIndicator($value)
    {
        $this->cobrandSelectionIndicator = $value;
    }

    /**
     * @return CurrencyConversionInput
     */
    public function getCurrencyConversion()
    {
        return $this->currencyConversion;
    }

    /**
     * @param CurrencyConversionInput
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
     * @param string
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
     * @param bool
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
     * @param MultiplePaymentInformation
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
     * @param PaymentProduct130SpecificInput
     */
    public function setPaymentProduct130SpecificInput($value)
    {
        $this->paymentProduct130SpecificInput = $value;
    }

    /**
     * @return PaymentProduct3012SpecificInput
     */
    public function getPaymentProduct3012SpecificInput()
    {
        return $this->paymentProduct3012SpecificInput;
    }

    /**
     * @param PaymentProduct3012SpecificInput
     */
    public function setPaymentProduct3012SpecificInput($value)
    {
        $this->paymentProduct3012SpecificInput = $value;
    }

    /**
     * @return PaymentProduct3208SpecificInput
     */
    public function getPaymentProduct3208SpecificInput()
    {
        return $this->paymentProduct3208SpecificInput;
    }

    /**
     * @param PaymentProduct3208SpecificInput
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
     * @param PaymentProduct3209SpecificInput
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
     * @param int
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
     * @param CardRecurrenceDetails
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
     * @param string
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
     * @param string
     */
    public function setSchemeReferenceData($value)
    {
        $this->schemeReferenceData = $value;
    }

    /**
     * @return bool
     * @deprecated Use threeDSecure.skipAuthentication instead.  * true = 3D Secure authentication will be skipped for this transaction. This setting should be used when isRecurring is set to true and recurringPaymentSequenceIndicator is set to recurring.  * false = 3D Secure authentication will not be skipped for this transaction.    Note: This is only possible if your account in our system is setup for 3D Secure authentication and if your configuration in our system allows you to override it per transaction.
     */
    public function getSkipAuthentication()
    {
        return $this->skipAuthentication;
    }

    /**
     * @param bool
     * @deprecated Use threeDSecure.skipAuthentication instead.  * true = 3D Secure authentication will be skipped for this transaction. This setting should be used when isRecurring is set to true and recurringPaymentSequenceIndicator is set to recurring.  * false = 3D Secure authentication will not be skipped for this transaction.    Note: This is only possible if your account in our system is setup for 3D Secure authentication and if your configuration in our system allows you to override it per transaction.
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
     * @param ThreeDSecure
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
     * @param string
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
     * @param bool
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
     * @param string
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
     * @param string
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
     * @param string
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
        if (!is_null($this->allowDynamicLinking)) {
            $object->allowDynamicLinking = $this->allowDynamicLinking;
        }
        if (!is_null($this->authorizationMode)) {
            $object->authorizationMode = $this->authorizationMode;
        }
        if (!is_null($this->card)) {
            $object->card = $this->card->toObject();
        }
        if (!is_null($this->cardOnFileRecurringExpiration)) {
            $object->cardOnFileRecurringExpiration = $this->cardOnFileRecurringExpiration;
        }
        if (!is_null($this->cardOnFileRecurringFrequency)) {
            $object->cardOnFileRecurringFrequency = $this->cardOnFileRecurringFrequency;
        }
        if (!is_null($this->cobrandSelectionIndicator)) {
            $object->cobrandSelectionIndicator = $this->cobrandSelectionIndicator;
        }
        if (!is_null($this->currencyConversion)) {
            $object->currencyConversion = $this->currencyConversion->toObject();
        }
        if (!is_null($this->initialSchemeTransactionId)) {
            $object->initialSchemeTransactionId = $this->initialSchemeTransactionId;
        }
        if (!is_null($this->isRecurring)) {
            $object->isRecurring = $this->isRecurring;
        }
        if (!is_null($this->multiplePaymentInformation)) {
            $object->multiplePaymentInformation = $this->multiplePaymentInformation->toObject();
        }
        if (!is_null($this->paymentProduct130SpecificInput)) {
            $object->paymentProduct130SpecificInput = $this->paymentProduct130SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct3012SpecificInput)) {
            $object->paymentProduct3012SpecificInput = $this->paymentProduct3012SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct3208SpecificInput)) {
            $object->paymentProduct3208SpecificInput = $this->paymentProduct3208SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct3209SpecificInput)) {
            $object->paymentProduct3209SpecificInput = $this->paymentProduct3209SpecificInput->toObject();
        }
        if (!is_null($this->paymentProductId)) {
            $object->paymentProductId = $this->paymentProductId;
        }
        if (!is_null($this->recurring)) {
            $object->recurring = $this->recurring->toObject();
        }
        if (!is_null($this->returnUrl)) {
            $object->returnUrl = $this->returnUrl;
        }
        if (!is_null($this->schemeReferenceData)) {
            $object->schemeReferenceData = $this->schemeReferenceData;
        }
        if (!is_null($this->skipAuthentication)) {
            $object->skipAuthentication = $this->skipAuthentication;
        }
        if (!is_null($this->threeDSecure)) {
            $object->threeDSecure = $this->threeDSecure->toObject();
        }
        if (!is_null($this->token)) {
            $object->token = $this->token;
        }
        if (!is_null($this->tokenize)) {
            $object->tokenize = $this->tokenize;
        }
        if (!is_null($this->transactionChannel)) {
            $object->transactionChannel = $this->transactionChannel;
        }
        if (!is_null($this->unscheduledCardOnFileRequestor)) {
            $object->unscheduledCardOnFileRequestor = $this->unscheduledCardOnFileRequestor;
        }
        if (!is_null($this->unscheduledCardOnFileSequenceIndicator)) {
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
        if (property_exists($object, 'cobrandSelectionIndicator')) {
            $this->cobrandSelectionIndicator = $object->cobrandSelectionIndicator;
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
        if (property_exists($object, 'paymentProduct3012SpecificInput')) {
            if (!is_object($object->paymentProduct3012SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct3012SpecificInput, true) . '\' is not an object');
            }
            $value = new PaymentProduct3012SpecificInput();
            $this->paymentProduct3012SpecificInput = $value->fromObject($object->paymentProduct3012SpecificInput);
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
