<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Domain;

use OnlinePayments\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ValueMappingElement extends DataObject
{
    // Properties
    /**
     * @var PaymentProductFieldDisplayElement[]
     */
    private $displayElements;

    /**
     * @var string
     */
    private $value;

    // Methods
    /**
     * @return PaymentProductFieldDisplayElement[]
     */
    public function getDisplayElements()
    {
        return $this->displayElements;
    }
    /**
     * @var PaymentProductFieldDisplayElement[]
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
     * @var string
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
        if ($this->displayElements !== null) {
            $object->displayElements = [];
            foreach ($this->displayElements as $element) {
                if ($element !== null) {
                    $object->displayElements[] = $element->toObject();
                }
            }
        }
        if ($this->value !== null) {
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
