<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CalculateSurchargeResponse extends DataObject
{
    /**
     * @var Surcharge[]|null
     */
    public ?array $surcharges = null;

    /**
     * @return Surcharge[]|null
     */
    public function getSurcharges(): ?array
    {
        return $this->surcharges;
    }

    /**
     * @param Surcharge[]|null $value
     */
    public function setSurcharges(?array $value): void
    {
        $this->surcharges = $value;
    }

    /**
     * @param Surcharge[]|null $value
     * @return $this
     */
    public function withSurcharges(?array $value): static
    {
        $this->surcharges = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->surcharges !== null) {
            $object->surcharges = [];
            foreach ($this->surcharges as $element) {
                if ($element !== null) {
                    $object->surcharges[] = $element->toObject();
                }
            }
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
        if (property_exists($object, 'surcharges')) {
            if (!is_array($object->surcharges) && !is_object($object->surcharges)) {
                throw new UnexpectedValueException('value \'' . print_r($object->surcharges, true) . '\' is not an array or object');
            }
            $this->surcharges = [];
            foreach ($object->surcharges as $element) {
                $value = new Surcharge();
                $this->surcharges[] = $value->fromObject($element);
            }
        }
        return $this;
    }
}
