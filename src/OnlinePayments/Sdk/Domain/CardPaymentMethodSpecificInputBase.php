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
     * @var bool|null
     */
    public ?bool $allowDynamicLinking = null;

    /**
     * @var string|null
     */
    public ?string $authorizationMode = null;

    /**
     * @var CurrencyConversionSpecificInput|null
     */
    public ?CurrencyConversionSpecificInput $currencyConversionSpecificInput = null;

    /**
     * @var string|null
     */
    public ?string $initialSchemeTransactionId = null;

    /**
     * @var MultiplePaymentInformation|null
     */
    public ?MultiplePaymentInformation $multiplePaymentInformation = null;

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
     * @var PaymentProduct5100SpecificInput|null
     */
    public ?PaymentProduct5100SpecificInput $paymentProduct5100SpecificInput = null;

    /**
     * @var int|null
     */
    public ?int $paymentProductId = null;

    /**
     * @var CardRecurrenceDetails|null
     */
    public ?CardRecurrenceDetails $recurring = null;

    /**
     * @var ThreeDSecureBase|null
     */
    public ?ThreeDSecureBase $threeDSecure = null;

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
     * @return CurrencyConversionSpecificInput|null
     */
    public function getCurrencyConversionSpecificInput(): ?CurrencyConversionSpecificInput
    {
        return $this->currencyConversionSpecificInput;
    }

    /**
     * @param CurrencyConversionSpecificInput|null $value
     */
    public function setCurrencyConversionSpecificInput(?CurrencyConversionSpecificInput $value): void
    {
        $this->currencyConversionSpecificInput = $value;
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
     * @return PaymentProduct5100SpecificInput|null
     */
    public function getPaymentProduct5100SpecificInput(): ?PaymentProduct5100SpecificInput
    {
        return $this->paymentProduct5100SpecificInput;
    }

    /**
     * @param PaymentProduct5100SpecificInput|null $value
     */
    public function setPaymentProduct5100SpecificInput(?PaymentProduct5100SpecificInput $value): void
    {
        $this->paymentProduct5100SpecificInput = $value;
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
     * @return ThreeDSecureBase|null
     */
    public function getThreeDSecure(): ?ThreeDSecureBase
    {
        return $this->threeDSecure;
    }

    /**
     * @param ThreeDSecureBase|null $value
     */
    public function setThreeDSecure(?ThreeDSecureBase $value): void
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
        if (!is_null($this->paymentProduct3013SpecificInput)) {
            $object->paymentProduct3013SpecificInput = $this->paymentProduct3013SpecificInput->toObject();
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
    public function fromObject(object $object): CardPaymentMethodSpecificInputBase
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
