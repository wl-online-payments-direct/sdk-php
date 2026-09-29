<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct130SpecificThreeDSecure extends DataObject
{
    /**
     * @var bool|null
    */
    public ?bool $acquirerExemption = null;

    /**
     * @var string|null
    */
    public ?string $merchantScore = null;

    /**
     * @var int|null
    */
    public ?int $numberOfItems = null;

    /**
     * @var string|null
    */
    public ?string $usecase = null;

    /**
     * @return bool|null
    */
    public function getAcquirerExemption(): ?bool
    {
        return $this->acquirerExemption;
    }

    /**
     * @param bool|null $value
    */
    public function setAcquirerExemption(?bool $value): void
    {
        $this->acquirerExemption = $value;
    }

    /**
     * @param bool|null $value
     * @return PaymentProduct130SpecificThreeDSecure
    */
    public function withAcquirerExemption(?bool $value): PaymentProduct130SpecificThreeDSecure
    {
        $this->acquirerExemption = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getMerchantScore(): ?string
    {
        return $this->merchantScore;
    }

    /**
     * @param string|null $value
    */
    public function setMerchantScore(?string $value): void
    {
        $this->merchantScore = $value;
    }

    /**
     * @param string|null $value
     * @return PaymentProduct130SpecificThreeDSecure
    */
    public function withMerchantScore(?string $value): PaymentProduct130SpecificThreeDSecure
    {
        $this->merchantScore = $value;
        return $this;
    }

    /**
     * @return int|null
    */
    public function getNumberOfItems(): ?int
    {
        return $this->numberOfItems;
    }

    /**
     * @param int|null $value
    */
    public function setNumberOfItems(?int $value): void
    {
        $this->numberOfItems = $value;
    }

    /**
     * @param int|null $value
     * @return PaymentProduct130SpecificThreeDSecure
    */
    public function withNumberOfItems(?int $value): PaymentProduct130SpecificThreeDSecure
    {
        $this->numberOfItems = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getUsecase(): ?string
    {
        return $this->usecase;
    }

    /**
     * @param string|null $value
    */
    public function setUsecase(?string $value): void
    {
        $this->usecase = $value;
    }

    /**
     * @param string|null $value
     * @return PaymentProduct130SpecificThreeDSecure
    */
    public function withUsecase(?string $value): PaymentProduct130SpecificThreeDSecure
    {
        $this->usecase = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->acquirerExemption)) {
            $object->acquirerExemption = $this->acquirerExemption;
        }
        if (!is_null($this->merchantScore)) {
            $object->merchantScore = $this->merchantScore;
        }
        if (!is_null($this->numberOfItems)) {
            $object->numberOfItems = $this->numberOfItems;
        }
        if (!is_null($this->usecase)) {
            $object->usecase = $this->usecase;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentProduct130SpecificThreeDSecure
    {
        parent::fromObject($object);
        if (property_exists($object, 'acquirerExemption')) {
            $this->acquirerExemption = $object->acquirerExemption;
        }
        if (property_exists($object, 'merchantScore')) {
            $this->merchantScore = $object->merchantScore;
        }
        if (property_exists($object, 'numberOfItems')) {
            $this->numberOfItems = $object->numberOfItems;
        }
        if (property_exists($object, 'usecase')) {
            $this->usecase = $object->usecase;
        }
        return $this;
    }
}
