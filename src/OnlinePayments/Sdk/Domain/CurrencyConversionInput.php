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
class CurrencyConversionInput extends DataObject
{
    // Properties
    /**
     * @var bool
     */
    private $acceptedByUser;

    /**
     * @var string
     */
    private $dccSessionId;

    // Methods
    /**
     * @return bool
     */
    public function getAcceptedByUser()
    {
        return $this->acceptedByUser;
    }
    /**
     * @var bool
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
     * @var string
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
        if ($this->acceptedByUser !== null) {
            $object->acceptedByUser = $this->acceptedByUser;
        }
        if ($this->dccSessionId !== null) {
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
