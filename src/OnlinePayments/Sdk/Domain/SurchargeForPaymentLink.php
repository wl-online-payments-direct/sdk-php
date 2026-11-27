<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class SurchargeForPaymentLink extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $surchargeMode = null;

    /**
     * @return string|null
     */
    public function getSurchargeMode(): ?string
    {
        return $this->surchargeMode;
    }

    /**
     * @param string|null $value
     */
    public function setSurchargeMode(?string $value): void
    {
        $this->surchargeMode = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withSurchargeMode(?string $value): static
    {
        $this->surchargeMode = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->surchargeMode !== null) {
            $object->surchargeMode = $this->surchargeMode;
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
        if (property_exists($object, 'surchargeMode')) {
            $this->surchargeMode = $object->surchargeMode;
        }
        return $this;
    }
}
