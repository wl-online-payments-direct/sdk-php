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
     * @var AcquirerInformation|null
     */
    public ?AcquirerInformation $acquirerInformation = null;

    /**
     * @var int|null
     */
    public ?int $authenticatedAmount = null;

    /**
     * @var string|null
     */
    public ?string $authorisationCode = null;

    /**
     * @var CardEssentials|null
     */
    public ?CardEssentials $card = null;

    /**
     * @var ClickToPay|null
     */
    public ?ClickToPay $clickToPay = null;

    /**
     * @var CurrencyConversion|null
     */
    public ?CurrencyConversion $currencyConversion = null;

    /**
     * @var ExternalTokenLinked|null
     */
    public ?ExternalTokenLinked $externalTokenLinked = null;

    /**
     * @var CardFraudResults|null
     */
    public ?CardFraudResults $fraudResults = null;

    /**
     * @var string|null
     */
    public ?string $initialSchemeTransactionId = null;

    /**
     * @var string|null
     */
    public ?string $paymentAccountReference = null;

    /**
     * @var string|null
     */
    public ?string $paymentOption = null;

    /**
     * @var PaymentProduct3208SpecificOutput|null
     */
    public ?PaymentProduct3208SpecificOutput $paymentProduct3208SpecificOutput = null;

    /**
     * @var PaymentProduct3209SpecificOutput|null
     */
    public ?PaymentProduct3209SpecificOutput $paymentProduct3209SpecificOutput = null;

    /**
     * @var int|null
     */
    public ?int $paymentProductId = null;

    /**
     * @var ReattemptInstructions|null
     */
    public ?ReattemptInstructions $reattemptInstructions = null;

    /**
     * @var string|null
     */
    public ?string $schemeReferenceData = null;

    /**
     * @var ThreeDSecureResults|null
     */
    public ?ThreeDSecureResults $threeDSecureResults = null;

    /**
     * @var string|null
     */
    public ?string $token = null;

    /**
     * @return AcquirerInformation|null
     */
    public function getAcquirerInformation(): ?AcquirerInformation
    {
        return $this->acquirerInformation;
    }

    /**
     * @param AcquirerInformation|null $value
     */
    public function setAcquirerInformation(?AcquirerInformation $value): void
    {
        $this->acquirerInformation = $value;
    }

    /**
     * @return int|null
     */
    public function getAuthenticatedAmount(): ?int
    {
        return $this->authenticatedAmount;
    }

    /**
     * @param int|null $value
     */
    public function setAuthenticatedAmount(?int $value): void
    {
        $this->authenticatedAmount = $value;
    }

    /**
     * @return string|null
     */
    public function getAuthorisationCode(): ?string
    {
        return $this->authorisationCode;
    }

    /**
     * @param string|null $value
     */
    public function setAuthorisationCode(?string $value): void
    {
        $this->authorisationCode = $value;
    }

    /**
     * @return CardEssentials|null
     */
    public function getCard(): ?CardEssentials
    {
        return $this->card;
    }

    /**
     * @param CardEssentials|null $value
     */
    public function setCard(?CardEssentials $value): void
    {
        $this->card = $value;
    }

    /**
     * @return ClickToPay|null
     */
    public function getClickToPay(): ?ClickToPay
    {
        return $this->clickToPay;
    }

    /**
     * @param ClickToPay|null $value
     */
    public function setClickToPay(?ClickToPay $value): void
    {
        $this->clickToPay = $value;
    }

    /**
     * @return CurrencyConversion|null
     */
    public function getCurrencyConversion(): ?CurrencyConversion
    {
        return $this->currencyConversion;
    }

    /**
     * @param CurrencyConversion|null $value
     */
    public function setCurrencyConversion(?CurrencyConversion $value): void
    {
        $this->currencyConversion = $value;
    }

    /**
     * @return ExternalTokenLinked|null
     */
    public function getExternalTokenLinked(): ?ExternalTokenLinked
    {
        return $this->externalTokenLinked;
    }

    /**
     * @param ExternalTokenLinked|null $value
     */
    public function setExternalTokenLinked(?ExternalTokenLinked $value): void
    {
        $this->externalTokenLinked = $value;
    }

    /**
     * @return CardFraudResults|null
     */
    public function getFraudResults(): ?CardFraudResults
    {
        return $this->fraudResults;
    }

    /**
     * @param CardFraudResults|null $value
     */
    public function setFraudResults(?CardFraudResults $value): void
    {
        $this->fraudResults = $value;
    }

    /**
     * @return string|null
     */
    public function getInitialSchemeTransactionId(): ?string
    {
        return $this->initialSchemeTransactionId;
    }

    /**
     * @param string|null $value
     */
    public function setInitialSchemeTransactionId(?string $value): void
    {
        $this->initialSchemeTransactionId = $value;
    }

    /**
     * @return string|null
     */
    public function getPaymentAccountReference(): ?string
    {
        return $this->paymentAccountReference;
    }

    /**
     * @param string|null $value
     */
    public function setPaymentAccountReference(?string $value): void
    {
        $this->paymentAccountReference = $value;
    }

    /**
     * @return string|null
     */
    public function getPaymentOption(): ?string
    {
        return $this->paymentOption;
    }

    /**
     * @param string|null $value
     */
    public function setPaymentOption(?string $value): void
    {
        $this->paymentOption = $value;
    }

    /**
     * @return PaymentProduct3208SpecificOutput|null
     */
    public function getPaymentProduct3208SpecificOutput(): ?PaymentProduct3208SpecificOutput
    {
        return $this->paymentProduct3208SpecificOutput;
    }

    /**
     * @param PaymentProduct3208SpecificOutput|null $value
     */
    public function setPaymentProduct3208SpecificOutput(?PaymentProduct3208SpecificOutput $value): void
    {
        $this->paymentProduct3208SpecificOutput = $value;
    }

    /**
     * @return PaymentProduct3209SpecificOutput|null
     */
    public function getPaymentProduct3209SpecificOutput(): ?PaymentProduct3209SpecificOutput
    {
        return $this->paymentProduct3209SpecificOutput;
    }

    /**
     * @param PaymentProduct3209SpecificOutput|null $value
     */
    public function setPaymentProduct3209SpecificOutput(?PaymentProduct3209SpecificOutput $value): void
    {
        $this->paymentProduct3209SpecificOutput = $value;
    }

    /**
     * @return int|null
     */
    public function getPaymentProductId(): ?int
    {
        return $this->paymentProductId;
    }

    /**
     * @param int|null $value
     */
    public function setPaymentProductId(?int $value): void
    {
        $this->paymentProductId = $value;
    }

    /**
     * @return ReattemptInstructions|null
     */
    public function getReattemptInstructions(): ?ReattemptInstructions
    {
        return $this->reattemptInstructions;
    }

    /**
     * @param ReattemptInstructions|null $value
     */
    public function setReattemptInstructions(?ReattemptInstructions $value): void
    {
        $this->reattemptInstructions = $value;
    }

    /**
     * @return string|null
     */
    public function getSchemeReferenceData(): ?string
    {
        return $this->schemeReferenceData;
    }

    /**
     * @param string|null $value
     */
    public function setSchemeReferenceData(?string $value): void
    {
        $this->schemeReferenceData = $value;
    }

    /**
     * @return ThreeDSecureResults|null
     */
    public function getThreeDSecureResults(): ?ThreeDSecureResults
    {
        return $this->threeDSecureResults;
    }

    /**
     * @param ThreeDSecureResults|null $value
     */
    public function setThreeDSecureResults(?ThreeDSecureResults $value): void
    {
        $this->threeDSecureResults = $value;
    }

    /**
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * @param string|null $value
     */
    public function setToken(?string $value): void
    {
        $this->token = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
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
        if (!is_null($this->clickToPay)) {
            $object->clickToPay = $this->clickToPay->toObject();
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
    public function fromObject(object $object): CardPaymentMethodSpecificOutput
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
        if (property_exists($object, 'clickToPay')) {
            if (!is_object($object->clickToPay)) {
                throw new UnexpectedValueException('value \'' . print_r($object->clickToPay, true) . '\' is not an object');
            }
            $value = new ClickToPay();
            $this->clickToPay = $value->fromObject($object->clickToPay);
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
