<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProductFieldFormElement extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var ValueMappingElement[]|null
     * @deprecated This field is not used by any payment product
     */
    public ?array $valueMapping = null;

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $value
     */
    public function setType(?string $value): void
    {
        $this->type = $value;
    }

    /**
     * @return ValueMappingElement[]|null
     * @deprecated This field is not used by any payment product
     */
    public function getValueMapping(): ?array
    {
        return $this->valueMapping;
    }

    /**
     * @param ValueMappingElement[]|null $value
     * @deprecated This field is not used by any payment product
     */
    public function setValueMapping(?array $value): void
    {
        $this->valueMapping = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->type)) {
            $object->type = $this->type;
        }
        if (!is_null($this->valueMapping)) {
            $object->valueMapping = [];
            foreach ($this->valueMapping as $element) {
                if (!is_null($element)) {
                    $object->valueMapping[] = $element->toObject();
                }
            }
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentProductFieldFormElement
    {
        parent::fromObject($object);
        if (property_exists($object, 'type')) {
            $this->type = $object->type;
        }
        if (property_exists($object, 'valueMapping')) {
            if (!is_array($object->valueMapping) && !is_object($object->valueMapping)) {
                throw new UnexpectedValueException('value \'' . print_r($object->valueMapping, true) . '\' is not an array or object');
            }
            $this->valueMapping = [];
            foreach ($object->valueMapping as $element) {
                $value = new ValueMappingElement();
                $this->valueMapping[] = $value->fromObject($element);
            }
        }
        return $this;
    }
}
