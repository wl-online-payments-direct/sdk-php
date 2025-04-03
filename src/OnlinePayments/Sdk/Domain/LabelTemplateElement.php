<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class LabelTemplateElement extends DataObject
{
    /**
     * @var string
     */
    public $attributeKey = null;

    /**
     * @var string
     */
    public $mask = null;

    /**
     * @return string
     */
    public function getAttributeKey()
    {
        return $this->attributeKey;
    }

    /**
     * @param string
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
     * @param string
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
        if (!is_null($this->attributeKey)) {
            $object->attributeKey = $this->attributeKey;
        }
        if (!is_null($this->mask)) {
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
