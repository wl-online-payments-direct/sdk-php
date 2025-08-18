<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ValueMappingElement extends DataObject
{
    /**
     * @var PaymentProductFieldDisplayElement[]|null
     */
    public ?array $displayElements = null;

    /**
     * @var string|null
     */
    public ?string $value = null;

    /**
     * @return PaymentProductFieldDisplayElement[]|null
     */
    public function getDisplayElements(): ?array
    {
        return $this->displayElements;
    }

    /**
     * @param PaymentProductFieldDisplayElement[]|null $value
     */
    public function setDisplayElements(?array $value): void
    {
        $this->displayElements = $value;
    }

    /**
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @param string|null $value
     */
    public function setValue(?string $value): void
    {
        $this->value = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->displayElements)) {
            $object->displayElements = [];
            foreach ($this->displayElements as $element) {
                if (!is_null($element)) {
                    $object->displayElements[] = $element->toObject();
                }
            }
        }
        if (!is_null($this->value)) {
            $object->value = $this->value;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): ValueMappingElement
    {
        parent::fromObject($object);
        if (property_exists($object, 'displayElements')) {
            if (!is_array($object->displayElements) && !is_object($object->displayElements)) {
                throw new UnexpectedValueException('value \'' . print_r($object->displayElements, true) . '\' is not an array or object');
            }
            $this->displayElements = [];
            foreach ($object->displayElements as $element) {
                $value = new PaymentProductFieldDisplayElement();
                $this->displayElements[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'value')) {
            $this->value = $object->value;
        }
        return $this;
    }
}
