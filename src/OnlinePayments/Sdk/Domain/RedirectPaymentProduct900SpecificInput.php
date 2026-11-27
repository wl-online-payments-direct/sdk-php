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
     * @param string|null $value
     * @return $this
     */
    public function withCaptureTrigger(?string $value): static
    {
        $this->captureTrigger = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->captureTrigger !== null) {
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
    #[\Override]
    public function fromObject(object $object): static
    {
        parent::fromObject($object);
        if (property_exists($object, 'captureTrigger')) {
            $this->captureTrigger = $object->captureTrigger;
        }
        return $this;
    }
}
