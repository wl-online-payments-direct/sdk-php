<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ProtectionEligibility extends DataObject
{
    /**
     * @var string
     */
    public $eligibility = null;

    /**
     * @var string
     */
    public $type = null;

    /**
     * @return string
     */
    public function getEligibility()
    {
        return $this->eligibility;
    }

    /**
     * @param string
     */
    public function setEligibility($value)
    {
        $this->eligibility = $value;
    }

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
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->eligibility)) {
            $object->eligibility = $this->eligibility;
        }
        if (!is_null($this->type)) {
            $object->type = $this->type;
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
        if (property_exists($object, 'eligibility')) {
            $this->eligibility = $object->eligibility;
        }
        if (property_exists($object, 'type')) {
            $this->type = $object->type;
        }
        return $this;
    }
}
