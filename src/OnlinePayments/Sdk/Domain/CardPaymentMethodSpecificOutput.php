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
class CardPaymentMethodSpecificOutput extends DataObject
{
    // Properties
    /**
     * @var int
     */
    private $authenticatedAmount;

    /**
     * @var string
     */
    private $authorisationCode;

    /**
     * @var CardEssentials
     */
    private $card;

    /**
     * @var CurrencyConversion
     */
    private $currencyConversion;

    /**
     * @var ExternalTokenLinked
     */
    private $externalTokenLinked;

    /**
     * @var CardFraudResults
     */
    private $fraudResults;

    /**
     * @var string
     */
    private $initialSchemeTransactionId;

    /**
     * @var string
     */
    private $paymentOption;

    /**
     * @var PaymentProduct3208SpecificOutput
     */
    private $paymentProduct3208SpecificOutput;

    /**
     * @var PaymentProduct3209SpecificOutput
     */
    private $paymentProduct3209SpecificOutput;

    /**
     * @var int
     */
    private $paymentProductId;

    /**
     * @var string
     */
    private $schemeReferenceData;

    /**
     * @var ThreeDSecureResults
     */
    private $threeDSecureResults;

    /**
     * @var string
     */
    private $token;

    // Methods
    /**
     * @return int
     */
    public function getAuthenticatedAmount()
    {
        return $this->authenticatedAmount;
    }
    /**
     * @var int
     */
    public function setAuthenticatedAmount($value)
    {
        $this->authenticatedAmount = $value;
    }

    /**
     * @return string
     */
    public function getAuthorisationCode()
    {
        return $this->authorisationCode;
    }
    /**
     * @var string
     */
    public function setAuthorisationCode($value)
    {
        $this->authorisationCode = $value;
    }

    /**
     * @return CardEssentials
     */
    public function getCard()
    {
        return $this->card;
    }
    /**
     * @var CardEssentials
     */
    public function setCard($value)
    {
        $this->card = $value;
    }

    /**
     * @return CurrencyConversion
     */
    public function getCurrencyConversion()
    {
        return $this->currencyConversion;
    }
    /**
     * @var CurrencyConversion
     */
    public function setCurrencyConversion($value)
    {
        $this->currencyConversion = $value;
    }

    /**
     * @return ExternalTokenLinked
     */
    public function getExternalTokenLinked()
    {
        return $this->externalTokenLinked;
    }
    /**
     * @var ExternalTokenLinked
     */
    public function setExternalTokenLinked($value)
    {
        $this->externalTokenLinked = $value;
    }

    /**
     * @return CardFraudResults
     */
    public function getFraudResults()
    {
        return $this->fraudResults;
    }
    /**
     * @var CardFraudResults
     */
    public function setFraudResults($value)
    {
        $this->fraudResults = $value;
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
     * @return string
     */
    public function getPaymentOption()
    {
        return $this->paymentOption;
    }
    /**
     * @var string
     */
    public function setPaymentOption($value)
    {
        $this->paymentOption = $value;
    }

    /**
     * @return PaymentProduct3208SpecificOutput
     */
    public function getPaymentProduct3208SpecificOutput()
    {
        return $this->paymentProduct3208SpecificOutput;
    }
    /**
     * @var PaymentProduct3208SpecificOutput
     */
    public function setPaymentProduct3208SpecificOutput($value)
    {
        $this->paymentProduct3208SpecificOutput = $value;
    }

    /**
     * @return PaymentProduct3209SpecificOutput
     */
    public function getPaymentProduct3209SpecificOutput()
    {
        return $this->paymentProduct3209SpecificOutput;
    }
    /**
     * @var PaymentProduct3209SpecificOutput
     */
    public function setPaymentProduct3209SpecificOutput($value)
    {
        $this->paymentProduct3209SpecificOutput = $value;
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
     * @return ThreeDSecureResults
     */
    public function getThreeDSecureResults()
    {
        return $this->threeDSecureResults;
    }
    /**
     * @var ThreeDSecureResults
     */
    public function setThreeDSecureResults($value)
    {
        $this->threeDSecureResults = $value;
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
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->authenticatedAmount !== null) {
            $object->authenticatedAmount = $this->authenticatedAmount;
        }
        if ($this->authorisationCode !== null) {
            $object->authorisationCode = $this->authorisationCode;
        }
        if ($this->card !== null) {
            $object->card = $this->card->toObject();
        }
        if ($this->currencyConversion !== null) {
            $object->currencyConversion = $this->currencyConversion->toObject();
        }
        if ($this->externalTokenLinked !== null) {
            $object->externalTokenLinked = $this->externalTokenLinked->toObject();
        }
        if ($this->fraudResults !== null) {
            $object->fraudResults = $this->fraudResults->toObject();
        }
        if ($this->initialSchemeTransactionId !== null) {
            $object->initialSchemeTransactionId = $this->initialSchemeTransactionId;
        }
        if ($this->paymentOption !== null) {
            $object->paymentOption = $this->paymentOption;
        }
        if ($this->paymentProduct3208SpecificOutput !== null) {
            $object->paymentProduct3208SpecificOutput = $this->paymentProduct3208SpecificOutput->toObject();
        }
        if ($this->paymentProduct3209SpecificOutput !== null) {
            $object->paymentProduct3209SpecificOutput = $this->paymentProduct3209SpecificOutput->toObject();
        }
        if ($this->paymentProductId !== null) {
            $object->paymentProductId = $this->paymentProductId;
        }
        if ($this->schemeReferenceData !== null) {
            $object->schemeReferenceData = $this->schemeReferenceData;
        }
        if ($this->threeDSecureResults !== null) {
            $object->threeDSecureResults = $this->threeDSecureResults->toObject();
        }
        if ($this->token !== null) {
            $object->token = $this->token;
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
        if (property_exists($object, 'authenticatedAmount')) {
            $this->authenticatedAmount = $object->authenticatedAmount;
        }
        if (property_exists($object, 'authorisationCode')) {
            $this->authorisationCode = $object->authorisationCode;
        }
        if (property_exists($object, 'card')) {
            if (!is_object($object->card)) {
                throw new UnexpectedValueException('value \'' . print_r($object->card, true) . '\' is not an object');
            }
            $value = new CardEssentials();
            $this->card = $value->fromObject($object->card);
        }
        if (property_exists($object, 'currencyConversion')) {
            if (!is_object($object->currencyConversion)) {
                throw new UnexpectedValueException('value \'' . print_r($object->currencyConversion, true) . '\' is not an object');
            }
            $value = new CurrencyConversion();
            $this->currencyConversion = $value->fromObject($object->currencyConversion);
        }
        if (property_exists($object, 'externalTokenLinked')) {
            if (!is_object($object->externalTokenLinked)) {
                throw new UnexpectedValueException('value \'' . print_r($object->externalTokenLinked, true) . '\' is not an object');
            }
            $value = new ExternalTokenLinked();
            $this->externalTokenLinked = $value->fromObject($object->externalTokenLinked);
        }
        if (property_exists($object, 'fraudResults')) {
            if (!is_object($object->fraudResults)) {
                throw new UnexpectedValueException('value \'' . print_r($object->fraudResults, true) . '\' is not an object');
            }
            $value = new CardFraudResults();
            $this->fraudResults = $value->fromObject($object->fraudResults);
        }
        if (property_exists($object, 'initialSchemeTransactionId')) {
            $this->initialSchemeTransactionId = $object->initialSchemeTransactionId;
        }
        if (property_exists($object, 'paymentOption')) {
            $this->paymentOption = $object->paymentOption;
        }
        if (property_exists($object, 'paymentProduct3208SpecificOutput')) {
            if (!is_object($object->paymentProduct3208SpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct3208SpecificOutput, true) . '\' is not an object');
            }
            $value = new PaymentProduct3208SpecificOutput();
            $this->paymentProduct3208SpecificOutput = $value->fromObject($object->paymentProduct3208SpecificOutput);
        }
        if (property_exists($object, 'paymentProduct3209SpecificOutput')) {
            if (!is_object($object->paymentProduct3209SpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct3209SpecificOutput, true) . '\' is not an object');
            }
            $value = new PaymentProduct3209SpecificOutput();
            $this->paymentProduct3209SpecificOutput = $value->fromObject($object->paymentProduct3209SpecificOutput);
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        if (property_exists($object, 'schemeReferenceData')) {
            $this->schemeReferenceData = $object->schemeReferenceData;
        }
        if (property_exists($object, 'threeDSecureResults')) {
            if (!is_object($object->threeDSecureResults)) {
                throw new UnexpectedValueException('value \'' . print_r($object->threeDSecureResults, true) . '\' is not an object');
            }
            $value = new ThreeDSecureResults();
            $this->threeDSecureResults = $value->fromObject($object->threeDSecureResults);
        }
        if (property_exists($object, 'token')) {
            $this->token = $object->token;
        }
        return $this;
    }
}
