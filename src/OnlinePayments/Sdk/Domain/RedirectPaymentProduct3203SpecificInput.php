<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RedirectPaymentProduct3203SpecificInput extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $checkoutType = null;

    /**
     * @return string|null
     */
    public function getCheckoutType(): ?string
    {
        return $this->checkoutType;
    }

    /**
     * @param string|null $value
     */
    public function setCheckoutType(?string $value): void
    {
        $this->checkoutType = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->checkoutType)) {
            $object->checkoutType = $this->checkoutType;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): RedirectPaymentProduct3203SpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'checkoutType')) {
            $this->checkoutType = $object->checkoutType;
        }
        return $this;
    }
}
