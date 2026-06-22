<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RedirectPaymentProduct900SpecificInput extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $captureTrigger = null;

    /**
     * @return string|null
     */
    public function getCaptureTrigger(): ?string
    {
        return $this->captureTrigger;
    }

    /**
     * @param string|null $value
     */
    public function setCaptureTrigger(?string $value): void
    {
        $this->captureTrigger = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->captureTrigger)) {
            $object->captureTrigger = $this->captureTrigger;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): RedirectPaymentProduct900SpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'captureTrigger')) {
            $this->captureTrigger = $object->captureTrigger;
        }
        return $this;
    }
}
