<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class SubsequentPaymentProduct5001SpecificInput extends DataObject
{
    /**
     * @var string
     */
    public $subsequentType = null;

    /**
     * @return string
     */
    public function getSubsequentType()
    {
        return $this->subsequentType;
    }

    /**
     * @param string
     */
    public function setSubsequentType($value)
    {
        $this->subsequentType = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->subsequentType)) {
            $object->subsequentType = $this->subsequentType;
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
        if (property_exists($object, 'subsequentType')) {
            $this->subsequentType = $object->subsequentType;
        }
        return $this;
    }
}
