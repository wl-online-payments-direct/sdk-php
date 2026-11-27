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
     * @return $this
     */
    public function withAuthorizationMode(?string $value): static
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
     * @return $this
     */
    public function withAutoCapture(?AutoCapture $value): static
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
     * @return $this
     */
    public function withMarketPlace(?MarketPlace $value): static
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
     * @return $this
     */
    public function withPaymentNumber(?int $value): static
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
     * @return $this
     *
     * @deprecated Deprecated
     */
    public function withSchemeReferenceData(?string $value): static
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
     * @return $this
     */
    public function withSubsequentType(?string $value): static
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
     * @return $this
     *
     * @deprecated ID of the token to use to create the payment.
     */
    public function withToken(?string $value): static
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
     * @return $this
     */
    public function withTransactionChannel(?string $value): static
    {
        $this->transactionChannel = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->authorizationMode !== null) {
            $object->authorizationMode = $this->authorizationMode;
        }
        if ($this->autoCapture !== null) {
            $object->autoCapture = $this->autoCapture->toObject();
        }
        if ($this->marketPlace !== null) {
            $object->marketPlace = $this->marketPlace->toObject();
        }
        if ($this->paymentNumber !== null) {
            $object->paymentNumber = $this->paymentNumber;
        }
        if ($this->schemeReferenceData !== null) {
            $object->schemeReferenceData = $this->schemeReferenceData;
        }
        if ($this->subsequentType !== null) {
            $object->subsequentType = $this->subsequentType;
        }
        if ($this->token !== null) {
            $object->token = $this->token;
        }
        if ($this->transactionChannel !== null) {
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
    #[\Override]
    public function fromObject(object $object): static
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
