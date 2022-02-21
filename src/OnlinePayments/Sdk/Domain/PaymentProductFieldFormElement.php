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
class PaymentProductFieldFormElement extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $type;

    /**
     * @var ValueMappingElement[]
     */
    private $valueMapping;

    // Methods
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @var string
     */
    public function setType($value)
    {
        $this->type = $value;
    }

    /**
     * @return ValueMappingElement[]
     */
    public function getValueMapping()
    {
        return $this->valueMapping;
    }
    /**
     * @var ValueMappingElement[]
     */
    public function setValueMapping($value)
    {
        $this->valueMapping = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->type !== null) {
            $object->type = $this->type;
        }
        if ($this->valueMapping !== null) {
            $object->valueMapping = [];
            foreach ($this->valueMapping as $element) {
                if ($element !== null) {
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
    public function fromObject($object)
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
