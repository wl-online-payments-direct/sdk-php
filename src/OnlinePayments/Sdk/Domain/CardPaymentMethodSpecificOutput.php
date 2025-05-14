<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CardPaymentMethodSpecificOutput extends DataObject
{
    /**
     * @var AcquirerInformation
     */
    public $acquirerInformation = null;

    /**
     * @var int
     */
    public $authenticatedAmount = null;

    /**
     * @var string
     */
    public $authorisationCode = null;

    /**
     * @var CardEssentials
     */
    public $card = null;

    /**
     * @var CurrencyConversion
     */
    public $currencyConversion = null;

    /**
     * @var ExternalTokenLinked
     */
    public $externalTokenLinked = null;

    /**
     * @var CardFraudResults
     */
    public $fraudResults = null;

    /**
     * @var string
     */
    public $initialSchemeTransactionId = null;

    /**
     * @var string
     */
    public $paymentAccountReference = null;

    /**
     * @var string
     */
    public $paymentOption = null;

    /**
     * @var PaymentProduct3208SpecificOutput
     */
    public $paymentProduct3208SpecificOutput = null;

    /**
     * @var PaymentProduct3209SpecificOutput
     */
    public $paymentProduct3209SpecificOutput = null;

    /**
     * @var int
     */
    public $paymentProductId = null;

    /**
     * @var ReattemptInstructions
     */
    public $reattemptInstructions = null;

    /**
     * @var string
     */
    public $schemeReferenceData = null;

    /**
     * @var ThreeDSecureResults
     */
    public $threeDSecureResults = null;

    /**
     * @var string
     */
    public $token = null;

    /**
     * @return AcquirerInformation
     */
    public function getAcquirerInformation()
    {
        return $this->acquirerInformation;
    }

    /**
     * @param AcquirerInformation
     */
    public function setAcquirerInformation($value)
    {
        $this->acquirerInformation = $value;
    }

    /**
     * @return int
     */
    public function getAuthenticatedAmount()
    {
        return $this->authenticatedAmount;
    }

    /**
     * @param int
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
     * @param string
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
     * @param CardEssentials
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
     * @param CurrencyConversion
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
     * @param ExternalTokenLinked
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
     * @param CardFraudResults
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
     * @param string
     */
    public function setInitialSchemeTransactionId($value)
    {
        $this->initialSchemeTransactionId = $value;
    }

    /**
     * @return string
     */
    public function getPaymentAccountReference()
    {
        return $this->paymentAccountReference;
    }

    /**
     * @param string
     */
    public function setPaymentAccountReference($value)
    {
        $this->paymentAccountReference = $value;
    }

    /**
     * @return string
     */
    public function getPaymentOption()
    {
        return $this->paymentOption;
    }

    /**
     * @param string
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
     * @param PaymentProduct3208SpecificOutput
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
     * @param PaymentProduct3209SpecificOutput
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
     * @param int
     */
    public function setPaymentProductId($value)
    {
        $this->paymentProductId = $value;
    }

    /**
     * @return ReattemptInstructions
     */
    public function getReattemptInstructions()
    {
        return $this->reattemptInstructions;
    }

    /**
     * @param ReattemptInstructions
     */
    public function setReattemptInstructions($value)
    {
        $this->reattemptInstructions = $value;
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
     * @return ThreeDSecureResults
     */
    public function getThreeDSecureResults()
    {
        return $this->threeDSecureResults;
    }

    /**
     * @param ThreeDSecureResults
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
     * @param string
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
        if (!is_null($this->acquirerInformation)) {
            $object->acquirerInformation = $this->acquirerInformation->toObject();
        }
        if (!is_null($this->authenticatedAmount)) {
            $object->authenticatedAmount = $this->authenticatedAmount;
        }
        if (!is_null($this->authorisationCode)) {
            $object->authorisationCode = $this->authorisationCode;
        }
        if (!is_null($this->card)) {
            $object->card = $this->card->toObject();
        }
        if (!is_null($this->currencyConversion)) {
            $object->currencyConversion = $this->currencyConversion->toObject();
        }
        if (!is_null($this->externalTokenLinked)) {
            $object->externalTokenLinked = $this->externalTokenLinked->toObject();
        }
        if (!is_null($this->fraudResults)) {
            $object->fraudResults = $this->fraudResults->toObject();
        }
        if (!is_null($this->initialSchemeTransactionId)) {
            $object->initialSchemeTransactionId = $this->initialSchemeTransactionId;
        }
        if (!is_null($this->paymentAccountReference)) {
            $object->paymentAccountReference = $this->paymentAccountReference;
        }
        if (!is_null($this->paymentOption)) {
            $object->paymentOption = $this->paymentOption;
        }
        if (!is_null($this->paymentProduct3208SpecificOutput)) {
            $object->paymentProduct3208SpecificOutput = $this->paymentProduct3208SpecificOutput->toObject();
        }
        if (!is_null($this->paymentProduct3209SpecificOutput)) {
            $object->paymentProduct3209SpecificOutput = $this->paymentProduct3209SpecificOutput->toObject();
        }
        if (!is_null($this->paymentProductId)) {
            $object->paymentProductId = $this->paymentProductId;
        }
        if (!is_null($this->reattemptInstructions)) {
            $object->reattemptInstructions = $this->reattemptInstructions->toObject();
        }
        if (!is_null($this->schemeReferenceData)) {
            $object->schemeReferenceData = $this->schemeReferenceData;
        }
        if (!is_null($this->threeDSecureResults)) {
            $object->threeDSecureResults = $this->threeDSecureResults->toObject();
        }
        if (!is_null($this->token)) {
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
        if (property_exists($object, 'acquirerInformation')) {
            if (!is_object($object->acquirerInformation)) {
                throw new UnexpectedValueException('value \'' . print_r($object->acquirerInformation, true) . '\' is not an object');
            }
            $value = new AcquirerInformation();
            $this->acquirerInformation = $value->fromObject($object->acquirerInformation);
        }
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
        if (property_exists($object, 'paymentAccountReference')) {
            $this->paymentAccountReference = $object->paymentAccountReference;
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
        if (property_exists($object, 'reattemptInstructions')) {
            if (!is_object($object->reattemptInstructions)) {
                throw new UnexpectedValueException('value \'' . print_r($object->reattemptInstructions, true) . '\' is not an object');
            }
            $value = new ReattemptInstructions();
            $this->reattemptInstructions = $value->fromObject($object->reattemptInstructions);
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
