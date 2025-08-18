<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct3012SpecificInput extends DataObject
{
    /**
     * @var bool|null
     */
    public ?bool $forceAuthentication = null;

    /**
     * @var bool|null
     */
    public ?bool $isDeferredPayment = null;

    /**
     * @var bool|null
     */
    public ?bool $isWipTransaction = null;

    /**
     * @var string|null
     */
    public ?string $wipMerchantAuthenticationMethod = null;

    /**
     * @return bool|null
     */
    public function getForceAuthentication(): ?bool
    {
        return $this->forceAuthentication;
    }

    /**
     * @param bool|null $value
     */
    public function setForceAuthentication(?bool $value): void
    {
        $this->forceAuthentication = $value;
    }

    /**
     * @return bool|null
     */
    public function getIsDeferredPayment(): ?bool
    {
        return $this->isDeferredPayment;
    }

    /**
     * @param bool|null $value
     */
    public function setIsDeferredPayment(?bool $value): void
    {
        $this->isDeferredPayment = $value;
    }

    /**
     * @return bool|null
     */
    public function getIsWipTransaction(): ?bool
    {
        return $this->isWipTransaction;
    }

    /**
     * @param bool|null $value
     */
    public function setIsWipTransaction(?bool $value): void
    {
        $this->isWipTransaction = $value;
    }

    /**
     * @return string|null
     */
    public function getWipMerchantAuthenticationMethod(): ?string
    {
        return $this->wipMerchantAuthenticationMethod;
    }

    /**
     * @param string|null $value
     */
    public function setWipMerchantAuthenticationMethod(?string $value): void
    {
        $this->wipMerchantAuthenticationMethod = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->forceAuthentication)) {
            $object->forceAuthentication = $this->forceAuthentication;
        }
        if (!is_null($this->isDeferredPayment)) {
            $object->isDeferredPayment = $this->isDeferredPayment;
        }
        if (!is_null($this->isWipTransaction)) {
            $object->isWipTransaction = $this->isWipTransaction;
        }
        if (!is_null($this->wipMerchantAuthenticationMethod)) {
            $object->wipMerchantAuthenticationMethod = $this->wipMerchantAuthenticationMethod;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentProduct3012SpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'forceAuthentication')) {
            $this->forceAuthentication = $object->forceAuthentication;
        }
        if (property_exists($object, 'isDeferredPayment')) {
            $this->isDeferredPayment = $object->isDeferredPayment;
        }
        if (property_exists($object, 'isWipTransaction')) {
            $this->isWipTransaction = $object->isWipTransaction;
        }
        if (property_exists($object, 'wipMerchantAuthenticationMethod')) {
            $this->wipMerchantAuthenticationMethod = $object->wipMerchantAuthenticationMethod;
        }
        return $this;
    }
}
