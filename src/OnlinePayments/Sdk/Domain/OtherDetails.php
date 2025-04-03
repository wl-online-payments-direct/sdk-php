<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class OtherDetails extends DataObject
{
    /**
     * @var string
     */
    public $metaData = null;

    /**
     * @var string
     */
    public $travelData = null;

    /**
     * @return string
     */
    public function getMetaData()
    {
        return $this->metaData;
    }

    /**
     * @param string
     */
    public function setMetaData($value)
    {
        $this->metaData = $value;
    }

    /**
     * @return string
     */
    public function getTravelData()
    {
        return $this->travelData;
    }

    /**
     * @param string
     */
    public function setTravelData($value)
    {
        $this->travelData = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->metaData)) {
            $object->metaData = $this->metaData;
        }
        if (!is_null($this->travelData)) {
            $object->travelData = $this->travelData;
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
        if (property_exists($object, 'metaData')) {
            $this->metaData = $object->metaData;
        }
        if (property_exists($object, 'travelData')) {
            $this->travelData = $object->travelData;
        }
        return $this;
    }
}
