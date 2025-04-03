<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentLinkEvent extends DataObject
{
    /**
     * @var string
     */
    public $dateTime = null;

    /**
     * @var string
     */
    public $details = null;

    /**
     * @var string
     */
    public $type = null;

    /**
     * @return string
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * @param string
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
     * @param string
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
        if (!is_null($this->dateTime)) {
            $object->dateTime = $this->dateTime;
        }
        if (!is_null($this->details)) {
            $object->details = $this->details;
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
