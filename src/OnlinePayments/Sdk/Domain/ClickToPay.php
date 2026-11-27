<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ClickToPay extends DataObject
{
    /**
     * @var bool|null
     */
    public ?bool $IsClickToPayPayment = null;

    /**
     * @return bool|null
     */
    public function getIsClickToPayPayment(): ?bool
    {
        return $this->IsClickToPayPayment;
    }

    /**
     * @param bool|null $value
     */
    public function setIsClickToPayPayment(?bool $value): void
    {
        $this->IsClickToPayPayment = $value;
    }

    /**
     * @param bool|null $value
     * @return $this
     */
    public function withIsClickToPayPayment(?bool $value): static
    {
        $this->IsClickToPayPayment = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->IsClickToPayPayment !== null) {
            $object->IsClickToPayPayment = $this->IsClickToPayPayment;
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
        if (property_exists($object, 'IsClickToPayPayment')) {
            $this->IsClickToPayPayment = $object->IsClickToPayPayment;
        }
        return $this;
    }
}
