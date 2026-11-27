<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class OrderTypeInformation extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $purchaseType = null;

    /**
     * @var string|null
     */
    public ?string $transactionType = null;

    /**
     * @return string|null
     */
    public function getPurchaseType(): ?string
    {
        return $this->purchaseType;
    }

    /**
     * @param string|null $value
     */
    public function setPurchaseType(?string $value): void
    {
        $this->purchaseType = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withPurchaseType(?string $value): static
    {
        $this->purchaseType = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTransactionType(): ?string
    {
        return $this->transactionType;
    }

    /**
     * @param string|null $value
     */
    public function setTransactionType(?string $value): void
    {
        $this->transactionType = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withTransactionType(?string $value): static
    {
        $this->transactionType = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->purchaseType !== null) {
            $object->purchaseType = $this->purchaseType;
        }
        if ($this->transactionType !== null) {
            $object->transactionType = $this->transactionType;
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
        if (property_exists($object, 'purchaseType')) {
            $this->purchaseType = $object->purchaseType;
        }
        if (property_exists($object, 'transactionType')) {
            $this->transactionType = $object->transactionType;
        }
        return $this;
    }
}
