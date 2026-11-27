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
     * @var Acceptance|null
     */
    public ?Acceptance $acceptance = null;

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
     * @var string|null
     */
    public ?string $cobrandSelectionIndicator = null;

    /**
     * @var CrmToken|null
     */
    public ?CrmToken $crmToken = null;

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
     * @var NetworkTokenEssentials|null
     */
    public ?NetworkTokenEssentials $networkTokenData = null;

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
     * @var string|null
     */
    public ?string $schemeTransactionId = null;

    /**
     * @var ThreeDSecureResults|null
     */
    public ?ThreeDSecureResults $threeDSecureResults = null;

    /**
     * @var string|null
     */
    public ?string $token = null;

    /**
     * @return Acceptance|null
     */
    public function getAcceptance(): ?Acceptance
    {
        return $this->acceptance;
    }

    /**
     * @param Acceptance|null $value
     */
    public function setAcceptance(?Acceptance $value): void
    {
        $this->acceptance = $value;
    }

    /**
     * @param Acceptance|null $value
     * @return $this
     */
    public function withAcceptance(?Acceptance $value): static
    {
        $this->acceptance = $value;
        return $this;
    }

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
     * @param AcquirerInformation|null $value
     * @return $this
     */
    public function withAcquirerInformation(?AcquirerInformation $value): static
    {
        $this->acquirerInformation = $value;
        return $this;
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
     * @param int|null $value
     * @return $this
     */
    public function withAuthenticatedAmount(?int $value): static
    {
        $this->authenticatedAmount = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withAuthorisationCode(?string $value): static
    {
        $this->authorisationCode = $value;
        return $this;
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
     * @param CardEssentials|null $value
     * @return $this
     */
    public function withCard(?CardEssentials $value): static
    {
        $this->card = $value;
        return $this;
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
     * @param ClickToPay|null $value
     * @return $this
     */
    public function withClickToPay(?ClickToPay $value): static
    {
        $this->clickToPay = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCobrandSelectionIndicator(): ?string
    {
        return $this->cobrandSelectionIndicator;
    }

    /**
     * @param string|null $value
     */
    public function setCobrandSelectionIndicator(?string $value): void
    {
        $this->cobrandSelectionIndicator = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withCobrandSelectionIndicator(?string $value): static
    {
        $this->cobrandSelectionIndicator = $value;
        return $this;
    }

    /**
     * @return CrmToken|null
     */
    public function getCrmToken(): ?CrmToken
    {
        return $this->crmToken;
    }

    /**
     * @param CrmToken|null $value
     */
    public function setCrmToken(?CrmToken $value): void
    {
        $this->crmToken = $value;
    }

    /**
     * @param CrmToken|null $value
     * @return $this
     */
    public function withCrmToken(?CrmToken $value): static
    {
        $this->crmToken = $value;
        return $this;
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
     * @param CurrencyConversion|null $value
     * @return $this
     */
    public function withCurrencyConversion(?CurrencyConversion $value): static
    {
        $this->currencyConversion = $value;
        return $this;
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
     * @param ExternalTokenLinked|null $value
     * @return $this
     */
    public function withExternalTokenLinked(?ExternalTokenLinked $value): static
    {
        $this->externalTokenLinked = $value;
        return $this;
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
     * @param CardFraudResults|null $value
     * @return $this
     */
    public function withFraudResults(?CardFraudResults $value): static
    {
        $this->fraudResults = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withInitialSchemeTransactionId(?string $value): static
    {
        $this->initialSchemeTransactionId = $value;
        return $this;
    }

    /**
     * @return NetworkTokenEssentials|null
     */
    public function getNetworkTokenData(): ?NetworkTokenEssentials
    {
        return $this->networkTokenData;
    }

    /**
     * @param NetworkTokenEssentials|null $value
     */
    public function setNetworkTokenData(?NetworkTokenEssentials $value): void
    {
        $this->networkTokenData = $value;
    }

    /**
     * @param NetworkTokenEssentials|null $value
     * @return $this
     */
    public function withNetworkTokenData(?NetworkTokenEssentials $value): static
    {
        $this->networkTokenData = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withPaymentAccountReference(?string $value): static
    {
        $this->paymentAccountReference = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withPaymentOption(?string $value): static
    {
        $this->paymentOption = $value;
        return $this;
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
     * @param PaymentProduct3208SpecificOutput|null $value
     * @return $this
     */
    public function withPaymentProduct3208SpecificOutput(?PaymentProduct3208SpecificOutput $value): static
    {
        $this->paymentProduct3208SpecificOutput = $value;
        return $this;
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
     * @param PaymentProduct3209SpecificOutput|null $value
     * @return $this
     */
    public function withPaymentProduct3209SpecificOutput(?PaymentProduct3209SpecificOutput $value): static
    {
        $this->paymentProduct3209SpecificOutput = $value;
        return $this;
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
     * @param int|null $value
     * @return $this
     */
    public function withPaymentProductId(?int $value): static
    {
        $this->paymentProductId = $value;
        return $this;
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
     * @param ReattemptInstructions|null $value
     * @return $this
     */
    public function withReattemptInstructions(?ReattemptInstructions $value): static
    {
        $this->reattemptInstructions = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withSchemeReferenceData(?string $value): static
    {
        $this->schemeReferenceData = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSchemeTransactionId(): ?string
    {
        return $this->schemeTransactionId;
    }

    /**
     * @param string|null $value
     */
    public function setSchemeTransactionId(?string $value): void
    {
        $this->schemeTransactionId = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withSchemeTransactionId(?string $value): static
    {
        $this->schemeTransactionId = $value;
        return $this;
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
     * @param ThreeDSecureResults|null $value
     * @return $this
     */
    public function withThreeDSecureResults(?ThreeDSecureResults $value): static
    {
        $this->threeDSecureResults = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withToken(?string $value): static
    {
        $this->token = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->acceptance !== null) {
            $object->acceptance = $this->acceptance->toObject();
        }
        if ($this->acquirerInformation !== null) {
            $object->acquirerInformation = $this->acquirerInformation->toObject();
        }
        if ($this->authenticatedAmount !== null) {
            $object->authenticatedAmount = $this->authenticatedAmount;
        }
        if ($this->authorisationCode !== null) {
            $object->authorisationCode = $this->authorisationCode;
        }
        if ($this->card !== null) {
            $object->card = $this->card->toObject();
        }
        if ($this->clickToPay !== null) {
            $object->clickToPay = $this->clickToPay->toObject();
        }
        if ($this->cobrandSelectionIndicator !== null) {
            $object->cobrandSelectionIndicator = $this->cobrandSelectionIndicator;
        }
        if ($this->crmToken !== null) {
            $object->crmToken = $this->crmToken->toObject();
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
        if ($this->networkTokenData !== null) {
            $object->networkTokenData = $this->networkTokenData->toObject();
        }
        if ($this->paymentAccountReference !== null) {
            $object->paymentAccountReference = $this->paymentAccountReference;
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
        if ($this->reattemptInstructions !== null) {
            $object->reattemptInstructions = $this->reattemptInstructions->toObject();
        }
        if ($this->schemeReferenceData !== null) {
            $object->schemeReferenceData = $this->schemeReferenceData;
        }
        if ($this->schemeTransactionId !== null) {
            $object->schemeTransactionId = $this->schemeTransactionId;
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
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    #[\Override]
    public function fromObject(object $object): static
    {
        parent::fromObject($object);
        if (property_exists($object, 'acceptance')) {
            if (!is_object($object->acceptance)) {
                throw new UnexpectedValueException('value \'' . print_r($object->acceptance, true) . '\' is not an object');
            }
            $value = new Acceptance();
            $this->acceptance = $value->fromObject($object->acceptance);
        }
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
        if (property_exists($object, 'cobrandSelectionIndicator')) {
            $this->cobrandSelectionIndicator = $object->cobrandSelectionIndicator;
        }
        if (property_exists($object, 'crmToken')) {
            if (!is_object($object->crmToken)) {
                throw new UnexpectedValueException('value \'' . print_r($object->crmToken, true) . '\' is not an object');
            }
            $value = new CrmToken();
            $this->crmToken = $value->fromObject($object->crmToken);
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
        if (property_exists($object, 'networkTokenData')) {
            if (!is_object($object->networkTokenData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->networkTokenData, true) . '\' is not an object');
            }
            $value = new NetworkTokenEssentials();
            $this->networkTokenData = $value->fromObject($object->networkTokenData);
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
        if (property_exists($object, 'schemeTransactionId')) {
            $this->schemeTransactionId = $object->schemeTransactionId;
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
