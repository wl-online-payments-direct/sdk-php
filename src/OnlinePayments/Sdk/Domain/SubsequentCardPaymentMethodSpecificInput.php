<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class SubsequentCardPaymentMethodSpecificInput extends DataObject
{
    /**
     * @var string|null
    */
    public ?string $authorizationMode = null;

    /**
     * @var AutoCapture|null
    */
    public ?AutoCapture $autoCapture = null;

    /**
     * @var MarketPlace|null
    */
    public ?MarketPlace $marketPlace = null;

    /**
     * @var int|null
    */
    public ?int $paymentNumber = null;

    /**
     * @var string|null
     *
     * @deprecated Deprecated
    */
    public ?string $schemeReferenceData = null;

    /**
     * @var string|null
    */
    public ?string $subsequentType = null;

    /**
     * @var string|null
     *
     * @deprecated ID of the token to use to create the payment.
    */
    public ?string $token = null;

    /**
     * @var string|null
    */
    public ?string $transactionChannel = null;

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
     * @param string|null $value
     * @return SubsequentCardPaymentMethodSpecificInput
    */
    public function withAuthorizationMode(?string $value): SubsequentCardPaymentMethodSpecificInput
    {
        $this->authorizationMode = $value;
        return $this;
    }

    /**
     * @return AutoCapture|null
    */
    public function getAutoCapture(): ?AutoCapture
    {
        return $this->autoCapture;
    }

    /**
     * @param AutoCapture|null $value
    */
    public function setAutoCapture(?AutoCapture $value): void
    {
        $this->autoCapture = $value;
    }

    /**
     * @param AutoCapture|null $value
     * @return SubsequentCardPaymentMethodSpecificInput
    */
    public function withAutoCapture(?AutoCapture $value): SubsequentCardPaymentMethodSpecificInput
    {
        $this->autoCapture = $value;
        return $this;
    }

    /**
     * @return MarketPlace|null
    */
    public function getMarketPlace(): ?MarketPlace
    {
        return $this->marketPlace;
    }

    /**
     * @param MarketPlace|null $value
    */
    public function setMarketPlace(?MarketPlace $value): void
    {
        $this->marketPlace = $value;
    }

    /**
     * @param MarketPlace|null $value
     * @return SubsequentCardPaymentMethodSpecificInput
    */
    public function withMarketPlace(?MarketPlace $value): SubsequentCardPaymentMethodSpecificInput
    {
        $this->marketPlace = $value;
        return $this;
    }

    /**
     * @return int|null
    */
    public function getPaymentNumber(): ?int
    {
        return $this->paymentNumber;
    }

    /**
     * @param int|null $value
    */
    public function setPaymentNumber(?int $value): void
    {
        $this->paymentNumber = $value;
    }

    /**
     * @param int|null $value
     * @return SubsequentCardPaymentMethodSpecificInput
    */
    public function withPaymentNumber(?int $value): SubsequentCardPaymentMethodSpecificInput
    {
        $this->paymentNumber = $value;
        return $this;
    }

    /**
     * @return string|null
     *
     * @deprecated Deprecated
    */
    public function getSchemeReferenceData(): ?string
    {
        return $this->schemeReferenceData;
    }

    /**
     * @param string|null $value
     *
     * @deprecated Deprecated
    */
    public function setSchemeReferenceData(?string $value): void
    {
        $this->schemeReferenceData = $value;
    }

    /**
     * @param string|null $value
     * @return SubsequentCardPaymentMethodSpecificInput
     *
     * @deprecated Deprecated
    */
    public function withSchemeReferenceData(?string $value): SubsequentCardPaymentMethodSpecificInput
    {
        $this->schemeReferenceData = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getSubsequentType(): ?string
    {
        return $this->subsequentType;
    }

    /**
     * @param string|null $value
    */
    public function setSubsequentType(?string $value): void
    {
        $this->subsequentType = $value;
    }

    /**
     * @param string|null $value
     * @return SubsequentCardPaymentMethodSpecificInput
    */
    public function withSubsequentType(?string $value): SubsequentCardPaymentMethodSpecificInput
    {
        $this->subsequentType = $value;
        return $this;
    }

    /**
     * @return string|null
     *
     * @deprecated ID of the token to use to create the payment.
    */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * @param string|null $value
     *
     * @deprecated ID of the token to use to create the payment.
    */
    public function setToken(?string $value): void
    {
        $this->token = $value;
    }

    /**
     * @param string|null $value
     * @return SubsequentCardPaymentMethodSpecificInput
     *
     * @deprecated ID of the token to use to create the payment.
    */
    public function withToken(?string $value): SubsequentCardPaymentMethodSpecificInput
    {
        $this->token = $value;
        return $this;
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
     * @param string|null $value
     * @return SubsequentCardPaymentMethodSpecificInput
    */
    public function withTransactionChannel(?string $value): SubsequentCardPaymentMethodSpecificInput
    {
        $this->transactionChannel = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->authorizationMode)) {
            $object->authorizationMode = $this->authorizationMode;
        }
        if (!is_null($this->autoCapture)) {
            $object->autoCapture = $this->autoCapture->toObject();
        }
        if (!is_null($this->marketPlace)) {
            $object->marketPlace = $this->marketPlace->toObject();
        }
        if (!is_null($this->paymentNumber)) {
            $object->paymentNumber = $this->paymentNumber;
        }
        if (!is_null($this->schemeReferenceData)) {
            $object->schemeReferenceData = $this->schemeReferenceData;
        }
        if (!is_null($this->subsequentType)) {
            $object->subsequentType = $this->subsequentType;
        }
        if (!is_null($this->token)) {
            $object->token = $this->token;
        }
        if (!is_null($this->transactionChannel)) {
            $object->transactionChannel = $this->transactionChannel;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): SubsequentCardPaymentMethodSpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'authorizationMode')) {
            $this->authorizationMode = $object->authorizationMode;
        }
        if (property_exists($object, 'autoCapture')) {
            if (!is_object($object->autoCapture)) {
                throw new UnexpectedValueException('value \'' . print_r($object->autoCapture, true) . '\' is not an object');
            }
            $value = new AutoCapture();
            $this->autoCapture = $value->fromObject($object->autoCapture);
        }
        if (property_exists($object, 'marketPlace')) {
            if (!is_object($object->marketPlace)) {
                throw new UnexpectedValueException('value \'' . print_r($object->marketPlace, true) . '\' is not an object');
            }
            $value = new MarketPlace();
            $this->marketPlace = $value->fromObject($object->marketPlace);
        }
        if (property_exists($object, 'paymentNumber')) {
            $this->paymentNumber = $object->paymentNumber;
        }
        if (property_exists($object, 'schemeReferenceData')) {
            $this->schemeReferenceData = $object->schemeReferenceData;
        }
        if (property_exists($object, 'subsequentType')) {
            $this->subsequentType = $object->subsequentType;
        }
        if (property_exists($object, 'token')) {
            $this->token = $object->token;
        }
        if (property_exists($object, 'transactionChannel')) {
            $this->transactionChannel = $object->transactionChannel;
        }
        return $this;
    }
}
