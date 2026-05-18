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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->surchargeMode)) {
            $object->surchargeMode = $this->surchargeMode;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): SurchargeForPaymentLink
    {
        parent::fromObject($object);
        if (property_exists($object, 'surchargeMode')) {
            $this->surchargeMode = $object->surchargeMode;
        }
        return $this;
    }
}
