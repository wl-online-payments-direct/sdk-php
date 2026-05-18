<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct5704AutoCapture extends DataObject
{
    /**
     * @var int|null
     */
    public ?int $delayInMinutes = null;

    /**
     * @return int|null
     */
    public function getDelayInMinutes(): ?int
    {
        return $this->delayInMinutes;
    }

    /**
     * @param int|null $value
     */
    public function setDelayInMinutes(?int $value): void
    {
        $this->delayInMinutes = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->delayInMinutes)) {
            $object->delayInMinutes = $this->delayInMinutes;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentProduct5704AutoCapture
    {
        parent::fromObject($object);
        if (property_exists($object, 'delayInMinutes')) {
            $this->delayInMinutes = $object->delayInMinutes;
        }
        return $this;
    }
}
