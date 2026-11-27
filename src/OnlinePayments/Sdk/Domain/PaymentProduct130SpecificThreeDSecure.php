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
     * @return $this
     */
    public function withAcquirerExemption(?bool $value): static
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
     * @return $this
     */
    public function withMerchantScore(?string $value): static
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
     * @return $this
     */
    public function withNumberOfItems(?int $value): static
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
     * @return $this
     */
    public function withUsecase(?string $value): static
    {
        $this->usecase = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->acquirerExemption !== null) {
            $object->acquirerExemption = $this->acquirerExemption;
        }
        if ($this->merchantScore !== null) {
            $object->merchantScore = $this->merchantScore;
        }
        if ($this->numberOfItems !== null) {
            $object->numberOfItems = $this->numberOfItems;
        }
        if ($this->usecase !== null) {
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
    #[\Override]
    public function fromObject(object $object): static
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
