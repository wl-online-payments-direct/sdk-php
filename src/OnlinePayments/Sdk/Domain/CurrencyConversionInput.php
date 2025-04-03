<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CurrencyConversionInput extends DataObject
{
    /**
     * @var bool
     */
    public $acceptedByUser = null;

    /**
     * @var string
     */
    public $dccSessionId = null;

    /**
     * @return bool
     */
    public function getAcceptedByUser()
    {
        return $this->acceptedByUser;
    }

    /**
     * @param bool
     */
    public function setAcceptedByUser($value)
    {
        $this->acceptedByUser = $value;
    }

    /**
     * @return string
     */
    public function getDccSessionId()
    {
        return $this->dccSessionId;
    }

    /**
     * @param string
     */
    public function setDccSessionId($value)
    {
        $this->dccSessionId = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->acceptedByUser)) {
            $object->acceptedByUser = $this->acceptedByUser;
        }
        if (!is_null($this->dccSessionId)) {
            $object->dccSessionId = $this->dccSessionId;
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
        if (property_exists($object, 'acceptedByUser')) {
            $this->acceptedByUser = $object->acceptedByUser;
        }
        if (property_exists($object, 'dccSessionId')) {
            $this->dccSessionId = $object->dccSessionId;
        }
        return $this;
    }
}
