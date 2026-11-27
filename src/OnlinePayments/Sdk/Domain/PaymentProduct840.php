<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct840 extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $orderId = null;

    /**
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    /**
     * @param string|null $value
     */
    public function setOrderId(?string $value): void
    {
        $this->orderId = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withOrderId(?string $value): static
    {
        $this->orderId = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->orderId !== null) {
            $object->orderId = $this->orderId;
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
        if (property_exists($object, 'orderId')) {
            $this->orderId = $object->orderId;
        }
        return $this;
    }
}
