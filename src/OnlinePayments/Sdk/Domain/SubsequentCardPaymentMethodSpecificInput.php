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
     * @var int|null
     */
    public ?int $paymentNumber = null;

    /**
     * @var string|null
     * @deprecated Deprecated
     */
    public ?string $schemeReferenceData = null;

    /**
     * @var string|null
     */
    public ?string $subsequentType = null;

    /**
     * @var string|null
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
     * @return string|null
     * @deprecated Deprecated
     */
    public function getSchemeReferenceData(): ?string
    {
        return $this->schemeReferenceData;
    }

    /**
     * @param string|null $value
     * @deprecated Deprecated
     */
    public function setSchemeReferenceData(?string $value): void
    {
        $this->schemeReferenceData = $value;
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
     * @return string|null
     * @deprecated ID of the token to use to create the payment.
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * @param string|null $value
     * @deprecated ID of the token to use to create the payment.
     */
    public function setToken(?string $value): void
    {
        $this->token = $value;
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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->authorizationMode)) {
            $object->authorizationMode = $this->authorizationMode;
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
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): SubsequentCardPaymentMethodSpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'authorizationMode')) {
            $this->authorizationMode = $object->authorizationMode;
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
