<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class AutoCapture extends DataObject
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
     * @param int|null $value
     * @return $this
     */
    public function withDelayInMinutes(?int $value): static
    {
        $this->delayInMinutes = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->delayInMinutes !== null) {
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
    #[\Override]
    public function fromObject(object $object): static
    {
        parent::fromObject($object);
        if (property_exists($object, 'delayInMinutes')) {
            $this->delayInMinutes = $object->delayInMinutes;
        }
        return $this;
    }
}
