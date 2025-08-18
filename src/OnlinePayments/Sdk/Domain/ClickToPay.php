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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->IsClickToPayPayment)) {
            $object->IsClickToPayPayment = $this->IsClickToPayPayment;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): ClickToPay
    {
        parent::fromObject($object);
        if (property_exists($object, 'IsClickToPayPayment')) {
            $this->IsClickToPayPayment = $object->IsClickToPayPayment;
        }
        return $this;
    }
}
