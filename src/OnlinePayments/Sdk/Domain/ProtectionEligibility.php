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
class ProtectionEligibility extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $eligibility;

    /**
     * @var string
     */
    private $type;

    // Methods
    /**
     * @return string
     */
    public function getEligibility()
    {
        return $this->eligibility;
    }
    /**
     * @var string
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
     * @var string
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
        if ($this->eligibility !== null) {
            $object->eligibility = $this->eligibility;
        }
        if ($this->type !== null) {
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
