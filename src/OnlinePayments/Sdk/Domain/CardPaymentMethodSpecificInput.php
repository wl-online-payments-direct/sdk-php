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
     * @var bool|null
     */
    public ?bool $allowDynamicLinking = null;

    /**
     * @var string|null
     */
    public ?string $authorizationMode = null;

    /**
     * @var Card|null
     */
    public ?Card $card = null;

    /**
     * @var string|null
     */
    public ?string $cardOnFileRecurringExpiration = null;

    /**
     * @var string|null
     */
    public ?string $cardOnFileRecurringFrequency = null;

    /**
     * @var string|null
     */
    public ?string $cobrandSelectionIndicator = null;

    /**
     * @var CurrencyConversionInput|null
     */
    public ?CurrencyConversionInput $currencyConversion = null;

    /**
     * @var string|null
     */
    public ?string $initialSchemeTransactionId = null;

    /**
     * @var bool|null
     */
    public ?bool $isRecurring = null;

    /**
     * @var MultiplePaymentInformation|null
     */
    public ?MultiplePaymentInformation $multiplePaymentInformation = null;

    /**
     * @var NetworkTokenData|null
     */
    public ?NetworkTokenData $networkTokenData = null;

    /**
     * @var PaymentProduct130SpecificInput|null
     */
    public ?PaymentProduct130SpecificInput $paymentProduct130SpecificInput = null;

    /**
     * @var PaymentProduct3012SpecificInput|null
     */
    public ?PaymentProduct3012SpecificInput $paymentProduct3012SpecificInput = null;

    /**
     * @var PaymentProduct3013SpecificInput|null
     */
    public ?PaymentProduct3013SpecificInput $paymentProduct3013SpecificInput = null;

    /**
     * @var PaymentProduct3208SpecificInput|null
     */
    public ?PaymentProduct3208SpecificInput $paymentProduct3208SpecificInput = null;

    /**
     * @var PaymentProduct3209SpecificInput|null
     */
    public ?PaymentProduct3209SpecificInput $paymentProduct3209SpecificInput = null;

    /**
     * @var int|null
     */
    public ?int $paymentProductId = null;

    /**
     * @var CardRecurrenceDetails|null
     */
    public ?CardRecurrenceDetails $recurring = null;

    /**
     * @var string|null
     */
    public ?string $returnUrl = null;

    /**
     * @var string|null
     */
    public ?string $schemeReferenceData = null;

    /**
     * @var bool|null
     * @deprecated Use threeDSecure.skipAuthentication instead.  * true = 3D Secure authentication will be skipped for this transaction. This setting should be used when isRecurring is set to true and recurringPaymentSequenceIndicator is set to recurring.  * false = 3D Secure authentication will not be skipped for this transaction.    Note: This is only possible if your account in our system is setup for 3D Secure authentication and if your configuration in our system allows you to override it per transaction.
     */
    public ?bool $skipAuthentication = null;

    /**
     * @var ThreeDSecure|null
     */
    public ?ThreeDSecure $threeDSecure = null;

    /**
     * @var string|null
     */
    public ?string $token = null;

    /**
     * @var bool|null
     */
    public ?bool $tokenize = null;

    /**
     * @var string|null
     */
    public ?string $transactionChannel = null;

    /**
     * @var string|null
     */
    public ?string $unscheduledCardOnFileRequestor = null;

    /**
     * @var string|null
     */
    public ?string $unscheduledCardOnFileSequenceIndicator = null;

    /**
     * @return bool|null
     */
    public function getAllowDynamicLinking(): ?bool
    {
        return $this->allowDynamicLinking;
    }

    /**
     * @param bool|null $value
     */
    public function setAllowDynamicLinking(?bool $value): void
    {
        $this->allowDynamicLinking = $value;
    }

    /**
     * @return string|null
     */
    public function getAuthorizationMode(): ?string
    {
        return $this->authorizationMode;
    }

    /**
     * @param string|null $value
     */
    public function setAuthorizationMode(?string $value): void
    {
        $this->authorizationMode = $value;
    }

    /**
     * @return Card|null
     */
    public function getCard(): ?Card
    {
        return $this->card;
    }

    /**
     * @param Card|null $value
     */
    public function setCard(?Card $value): void
    {
        $this->card = $value;
    }

    /**
     * @return string|null
     */
    public function getCardOnFileRecurringExpiration(): ?string
    {
        return $this->cardOnFileRecurringExpiration;
    }

    /**
     * @param string|null $value
     */
    public function setCardOnFileRecurringExpiration(?string $value): void
    {
        $this->cardOnFileRecurringExpiration = $value;
    }

    /**
     * @return string|null
     */
    public function getCardOnFileRecurringFrequency(): ?string
    {
        return $this->cardOnFileRecurringFrequency;
    }

    /**
     * @param string|null $value
     */
    public function setCardOnFileRecurringFrequency(?string $value): void
    {
        $this->cardOnFileRecurringFrequency = $value;
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
     * @return CurrencyConversionInput|null
     */
    public function getCurrencyConversion(): ?CurrencyConversionInput
    {
        return $this->currencyConversion;
    }

    /**
     * @param CurrencyConversionInput|null $value
     */
    public function setCurrencyConversion(?CurrencyConversionInput $value): void
    {
        $this->currencyConversion = $value;
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
     * @return bool|null
     */
    public function getIsRecurring(): ?bool
    {
        return $this->isRecurring;
    }

    /**
     * @param bool|null $value
     */
    public function setIsRecurring(?bool $value): void
    {
        $this->isRecurring = $value;
    }

    /**
     * @return MultiplePaymentInformation|null
     */
    public function getMultiplePaymentInformation(): ?MultiplePaymentInformation
    {
        return $this->multiplePaymentInformation;
    }

    /**
     * @param MultiplePaymentInformation|null $value
     */
    public function setMultiplePaymentInformation(?MultiplePaymentInformation $value): void
    {
        $this->multiplePaymentInformation = $value;
    }

    /**
     * @return NetworkTokenData|null
     */
    public function getNetworkTokenData(): ?NetworkTokenData
    {
        return $this->networkTokenData;
    }

    /**
     * @param NetworkTokenData|null $value
     */
    public function setNetworkTokenData(?NetworkTokenData $value): void
    {
        $this->networkTokenData = $value;
    }

    /**
     * @return PaymentProduct130SpecificInput|null
     */
    public function getPaymentProduct130SpecificInput(): ?PaymentProduct130SpecificInput
    {
        return $this->paymentProduct130SpecificInput;
    }

    /**
     * @param PaymentProduct130SpecificInput|null $value
     */
    public function setPaymentProduct130SpecificInput(?PaymentProduct130SpecificInput $value): void
    {
        $this->paymentProduct130SpecificInput = $value;
    }

    /**
     * @return PaymentProduct3012SpecificInput|null
     */
    public function getPaymentProduct3012SpecificInput(): ?PaymentProduct3012SpecificInput
    {
        return $this->paymentProduct3012SpecificInput;
    }

    /**
     * @param PaymentProduct3012SpecificInput|null $value
     */
    public function setPaymentProduct3012SpecificInput(?PaymentProduct3012SpecificInput $value): void
    {
        $this->paymentProduct3012SpecificInput = $value;
    }

    /**
     * @return PaymentProduct3013SpecificInput|null
     */
    public function getPaymentProduct3013SpecificInput(): ?PaymentProduct3013SpecificInput
    {
        return $this->paymentProduct3013SpecificInput;
    }

    /**
     * @param PaymentProduct3013SpecificInput|null $value
     */
    public function setPaymentProduct3013SpecificInput(?PaymentProduct3013SpecificInput $value): void
    {
        $this->paymentProduct3013SpecificInput = $value;
    }

    /**
     * @return PaymentProduct3208SpecificInput|null
     */
    public function getPaymentProduct3208SpecificInput(): ?PaymentProduct3208SpecificInput
    {
        return $this->paymentProduct3208SpecificInput;
    }

    /**
     * @param PaymentProduct3208SpecificInput|null $value
     */
    public function setPaymentProduct3208SpecificInput(?PaymentProduct3208SpecificInput $value): void
    {
        $this->paymentProduct3208SpecificInput = $value;
    }

    /**
     * @return PaymentProduct3209SpecificInput|null
     */
    public function getPaymentProduct3209SpecificInput(): ?PaymentProduct3209SpecificInput
    {
        return $this->paymentProduct3209SpecificInput;
    }

    /**
     * @param PaymentProduct3209SpecificInput|null $value
     */
    public function setPaymentProduct3209SpecificInput(?PaymentProduct3209SpecificInput $value): void
    {
        $this->paymentProduct3209SpecificInput = $value;
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
     * @return CardRecurrenceDetails|null
     */
    public function getRecurring(): ?CardRecurrenceDetails
    {
        return $this->recurring;
    }

    /**
     * @param CardRecurrenceDetails|null $value
     */
    public function setRecurring(?CardRecurrenceDetails $value): void
    {
        $this->recurring = $value;
    }

    /**
     * @return string|null
     */
    public function getReturnUrl(): ?string
    {
        return $this->returnUrl;
    }

    /**
     * @param string|null $value
     */
    public function setReturnUrl(?string $value): void
    {
        $this->returnUrl = $value;
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
     * @return bool|null
     * @deprecated Use threeDSecure.skipAuthentication instead.  * true = 3D Secure authentication will be skipped for this transaction. This setting should be used when isRecurring is set to true and recurringPaymentSequenceIndicator is set to recurring.  * false = 3D Secure authentication will not be skipped for this transaction.    Note: This is only possible if your account in our system is setup for 3D Secure authentication and if your configuration in our system allows you to override it per transaction.
     */
    public function getSkipAuthentication(): ?bool
    {
        return $this->skipAuthentication;
    }

    /**
     * @param bool|null $value
     * @deprecated Use threeDSecure.skipAuthentication instead.  * true = 3D Secure authentication will be skipped for this transaction. This setting should be used when isRecurring is set to true and recurringPaymentSequenceIndicator is set to recurring.  * false = 3D Secure authentication will not be skipped for this transaction.    Note: This is only possible if your account in our system is setup for 3D Secure authentication and if your configuration in our system allows you to override it per transaction.
     */
    public function setSkipAuthentication(?bool $value): void
    {
        $this->skipAuthentication = $value;
    }

    /**
     * @return ThreeDSecure|null
     */
    public function getThreeDSecure(): ?ThreeDSecure
    {
        return $this->threeDSecure;
    }

    /**
     * @param ThreeDSecure|null $value
     */
    public function setThreeDSecure(?ThreeDSecure $value): void
    {
        $this->threeDSecure = $value;
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
     * @return bool|null
     */
    public function getTokenize(): ?bool
    {
        return $this->tokenize;
    }

    /**
     * @param bool|null $value
     */
    public function setTokenize(?bool $value): void
    {
        $this->tokenize = $value;
    }

    /**
     * @return string|null
     */
    public function getTransactionChannel(): ?string
    {
        return $this->transactionChannel;
    }

    /**
     * @param string|null $value
     */
    public function setTransactionChannel(?string $value): void
    {
        $this->transactionChannel = $value;
    }

    /**
     * @return string|null
     */
    public function getUnscheduledCardOnFileRequestor(): ?string
    {
        return $this->unscheduledCardOnFileRequestor;
    }

    /**
     * @param string|null $value
     */
    public function setUnscheduledCardOnFileRequestor(?string $value): void
    {
        $this->unscheduledCardOnFileRequestor = $value;
    }

    /**
     * @return string|null
     */
    public function getUnscheduledCardOnFileSequenceIndicator(): ?string
    {
        return $this->unscheduledCardOnFileSequenceIndicator;
    }

    /**
     * @param string|null $value
     */
    public function setUnscheduledCardOnFileSequenceIndicator(?string $value): void
    {
        $this->unscheduledCardOnFileSequenceIndicator = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
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
        if (!is_null($this->networkTokenData)) {
            $object->networkTokenData = $this->networkTokenData->toObject();
        }
        if (!is_null($this->paymentProduct130SpecificInput)) {
            $object->paymentProduct130SpecificInput = $this->paymentProduct130SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct3012SpecificInput)) {
            $object->paymentProduct3012SpecificInput = $this->paymentProduct3012SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct3013SpecificInput)) {
            $object->paymentProduct3013SpecificInput = $this->paymentProduct3013SpecificInput->toObject();
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
    public function fromObject(object $object): CardPaymentMethodSpecificInput
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
        if (property_exists($object, 'networkTokenData')) {
            if (!is_object($object->networkTokenData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->networkTokenData, true) . '\' is not an object');
            }
            $value = new NetworkTokenData();
            $this->networkTokenData = $value->fromObject($object->networkTokenData);
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
        if (property_exists($object, 'paymentProduct3013SpecificInput')) {
            if (!is_object($object->paymentProduct3013SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct3013SpecificInput, true) . '\' is not an object');
            }
            $value = new PaymentProduct3013SpecificInput();
            $this->paymentProduct3013SpecificInput = $value->fromObject($object->paymentProduct3013SpecificInput);
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
