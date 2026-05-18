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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->mandateReference)) {
            $object->mandateReference = $this->mandateReference;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentProduct771SpecificOutput
    {
        parent::fromObject($object);
        if (property_exists($object, 'mandateReference')) {
            $this->mandateReference = $object->mandateReference;
        }
        return $this;
    }
}
