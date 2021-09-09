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
class LodgingData extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $checkInDate;

    // Methods
    /**
     * @return string
     */
    public function getCheckInDate()
    {
        return $this->checkInDate;
    }
    /**
     * @var string
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
        if ($this->checkInDate !== null) {
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
