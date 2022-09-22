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
class ShippingMethod extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $details;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $speed;

    /**
     * @var string
     */
    private $type;

    // Methods
    /**
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }
    /**
     * @var string
     */
    public function setDetails($value)
    {
        $this->details = $value;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @var string
     */
    public function setName($value)
    {
        $this->name = $value;
    }

    /**
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }
    /**
     * @var int
     */
    public function setSpeed($value)
    {
        $this->speed = $value;
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
        if ($this->details !== null) {
            $object->details = $this->details;
        }
        if ($this->name !== null) {
            $object->name = $this->name;
        }
        if ($this->speed !== null) {
            $object->speed = $this->speed;
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
        if (property_exists($object, 'details')) {
            $this->details = $object->details;
        }
        if (property_exists($object, 'name')) {
            $this->name = $object->name;
        }
        if (property_exists($object, 'speed')) {
            $this->speed = $object->speed;
        }
        if (property_exists($object, 'type')) {
            $this->type = $object->type;
        }
        return $this;
    }
}
