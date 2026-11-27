<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct771SpecificOutput extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $mandateReference = null;

    /**
     * @return string|null
     */
    public function getMandateReference(): ?string
    {
        return $this->mandateReference;
    }

    /**
     * @param string|null $value
     */
    public function setMandateReference(?string $value): void
    {
        $this->mandateReference = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withMandateReference(?string $value): static
    {
        $this->mandateReference = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->mandateReference !== null) {
            $object->mandateReference = $this->mandateReference;
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
        if (property_exists($object, 'mandateReference')) {
            $this->mandateReference = $object->mandateReference;
        }
        return $this;
    }
}
