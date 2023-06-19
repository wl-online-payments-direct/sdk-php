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
class PaymentLinkEvent extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $dateTime;

    /**
     * @var string
     */
    private $details;

    /**
     * @var string
     */
    private $type;

    // Methods
    /**
     * @return string
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }
    /**
     * @var string
     */
    public function setDateTime($value)
    {
        $this->dateTime = $value;
    }

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
        if ($this->dateTime !== null) {
            $object->dateTime = $this->dateTime;
        }
        if ($this->details !== null) {
            $object->details = $this->details;
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
        if (property_exists($object, 'dateTime')) {
            $this->dateTime = $object->dateTime;
        }
        if (property_exists($object, 'details')) {
            $this->details = $object->details;
        }
        if (property_exists($object, 'type')) {
            $this->type = $object->type;
        }
        return $this;
    }
}
