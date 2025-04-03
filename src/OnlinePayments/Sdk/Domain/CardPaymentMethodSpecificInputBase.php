<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CardPaymentMethodSpecificInputBase extends DataObject
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
     * @var CurrencyConversionSpecificInput
     */
    public $currencyConversionSpecificInput = null;

    /**
     * @var string
     */
    public $initialSchemeTransactionId = null;

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
     * @var PaymentProduct5100SpecificInput
     */
    public $paymentProduct5100SpecificInput = null;

    /**
     * @var int
     */
    public $paymentProductId = null;

    /**
     * @var CardRecurrenceDetails
     */
    public $recurring = null;

    /**
     * @var ThreeDSecureBase
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
     * @return CurrencyConversionSpecificInput
     */
    public function getCurrencyConversionSpecificInput()
    {
        return $this->currencyConversionSpecificInput;
    }

    /**
     * @param CurrencyConversionSpecificInput
     */
    public function setCurrencyConversionSpecificInput($value)
    {
        $this->currencyConversionSpecificInput = $value;
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
     * @return PaymentProduct5100SpecificInput
     */
    public function getPaymentProduct5100SpecificInput()
    {
        return $this->paymentProduct5100SpecificInput;
    }

    /**
     * @param PaymentProduct5100SpecificInput
     */
    public function setPaymentProduct5100SpecificInput($value)
    {
        $this->paymentProduct5100SpecificInput = $value;
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
     * @return ThreeDSecureBase
     */
    public function getThreeDSecure()
    {
        return $this->threeDSecure;
    }

    /**
     * @param ThreeDSecureBase
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
        if (!is_null($this->currencyConversionSpecificInput)) {
            $object->currencyConversionSpecificInput = $this->currencyConversionSpecificInput->toObject();
        }
        if (!is_null($this->initialSchemeTransactionId)) {
            $object->initialSchemeTransactionId = $this->initialSchemeTransactionId;
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
        if (!is_null($this->paymentProduct5100SpecificInput)) {
            $object->paymentProduct5100SpecificInput = $this->paymentProduct5100SpecificInput->toObject();
        }
        if (!is_null($this->paymentProductId)) {
            $object->paymentProductId = $this->paymentProductId;
        }
        if (!is_null($this->recurring)) {
            $object->recurring = $this->recurring->toObject();
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
        if (property_exists($object, 'currencyConversionSpecificInput')) {
            if (!is_object($object->currencyConversionSpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->currencyConversionSpecificInput, true) . '\' is not an object');
            }
            $value = new CurrencyConversionSpecificInput();
            $this->currencyConversionSpecificInput = $value->fromObject($object->currencyConversionSpecificInput);
        }
        if (property_exists($object, 'initialSchemeTransactionId')) {
            $this->initialSchemeTransactionId = $object->initialSchemeTransactionId;
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
        if (property_exists($object, 'paymentProduct5100SpecificInput')) {
            if (!is_object($object->paymentProduct5100SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct5100SpecificInput, true) . '\' is not an object');
            }
            $value = new PaymentProduct5100SpecificInput();
            $this->paymentProduct5100SpecificInput = $value->fromObject($object->paymentProduct5100SpecificInput);
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
        if (property_exists($object, 'threeDSecure')) {
            if (!is_object($object->threeDSecure)) {
                throw new UnexpectedValueException('value \'' . print_r($object->threeDSecure, true) . '\' is not an object');
            }
            $value = new ThreeDSecureBase();
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
