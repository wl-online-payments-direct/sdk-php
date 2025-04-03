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
     * @var PaymentProductFieldDisplayElement[]
     */
    public $displayElements = null;

    /**
     * @var string
     */
    public $value = null;

    /**
     * @return PaymentProductFieldDisplayElement[]
     */
    public function getDisplayElements()
    {
        return $this->displayElements;
    }

    /**
     * @param PaymentProductFieldDisplayElement[]
     */
    public function setDisplayElements($value)
    {
        $this->displayElements = $value;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return object
     */
    public function toObject()
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
    public function fromObject($object)
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
