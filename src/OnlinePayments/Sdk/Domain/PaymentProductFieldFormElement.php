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
     * @var string
     */
    public $type = null;

    /**
     * @var ValueMappingElement[]
     * @deprecated This field is not used by any payment product
     */
    public $valueMapping = null;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string
     */
    public function setType($value)
    {
        $this->type = $value;
    }

    /**
     * @return ValueMappingElement[]
     * @deprecated This field is not used by any payment product
     */
    public function getValueMapping()
    {
        return $this->valueMapping;
    }

    /**
     * @param ValueMappingElement[]
     * @deprecated This field is not used by any payment product
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
