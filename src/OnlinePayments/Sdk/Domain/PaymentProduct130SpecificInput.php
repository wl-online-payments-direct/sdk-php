<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct130SpecificInput extends DataObject
{
    /**
     * @var PaymentProduct130SpecificThreeDSecure|null
     */
    public ?PaymentProduct130SpecificThreeDSecure $threeDSecure = null;

    /**
     * @return PaymentProduct130SpecificThreeDSecure|null
     */
    public function getThreeDSecure(): ?PaymentProduct130SpecificThreeDSecure
    {
        return $this->threeDSecure;
    }

    /**
     * @param PaymentProduct130SpecificThreeDSecure|null $value
     */
    public function setThreeDSecure(?PaymentProduct130SpecificThreeDSecure $value): void
    {
        $this->threeDSecure = $value;
    }

    /**
     * @param PaymentProduct130SpecificThreeDSecure|null $value
     * @return $this
     */
    public function withThreeDSecure(?PaymentProduct130SpecificThreeDSecure $value): static
    {
        $this->threeDSecure = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->threeDSecure !== null) {
            $object->threeDSecure = $this->threeDSecure->toObject();
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
        if (property_exists($object, 'threeDSecure')) {
            if (!is_object($object->threeDSecure)) {
                throw new UnexpectedValueException('value \'' . print_r($object->threeDSecure, true) . '\' is not an object');
            }
            $value = new PaymentProduct130SpecificThreeDSecure();
            $this->threeDSecure = $value->fromObject($object->threeDSecure);
        }
        return $this;
    }
}
