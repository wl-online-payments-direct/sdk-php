<?php
/*
 * This class was auto-generated from the API references found at
 * https://support.direct.ingenico.com/documentation/api/reference
 */
namespace Ingenico\Direct\Sdk\Domain;

use Ingenico\Direct\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package Ingenico\Direct\Sdk\Domain
 */
class LabelTemplateElement extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $attributeKey;

    /**
     * @var string
     */
    private $mask;

    // Methods
    /**
     * @return string
     */
    public function getAttributeKey()
    {
        return $this->attributeKey;
    }
    /**
     * @var string
     */
    public function setAttributeKey($value)
    {
        $this->attributeKey = $value;
    }

    /**
     * @return string
     */
    public function getMask()
    {
        return $this->mask;
    }
    /**
     * @var string
     */
    public function setMask($value)
    {
        $this->mask = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->attributeKey !== null) {
            $object->attributeKey = $this->attributeKey;
        }
        if ($this->mask !== null) {
            $object->mask = $this->mask;
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
        if (property_exists($object, 'attributeKey')) {
            $this->attributeKey = $object->attributeKey;
        }
        if (property_exists($object, 'mask')) {
            $this->mask = $object->mask;
        }
        return $this;
    }
}
