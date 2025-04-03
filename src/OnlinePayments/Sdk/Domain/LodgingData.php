<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class LodgingData extends DataObject
{
    /**
     * @var string
     */
    public $checkInDate = null;

    /**
     * @return string
     */
    public function getCheckInDate()
    {
        return $this->checkInDate;
    }

    /**
     * @param string
     */
    public function setCheckInDate($value)
    {
        $this->checkInDate = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->checkInDate)) {
            $object->checkInDate = $this->checkInDate;
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
        if (property_exists($object, 'checkInDate')) {
            $this->checkInDate = $object->checkInDate;
        }
        return $this;
    }
}
