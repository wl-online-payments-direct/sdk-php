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
class MobilePaymentData extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $dpan;

    /**
     * @var string
     */
    private $expiryDate;

    // Methods
    /**
     * @return string
     */
    public function getDpan()
    {
        return $this->dpan;
    }
    /**
     * @var string
     */
    public function setDpan($value)
    {
        $this->dpan = $value;
    }

    /**
     * @return string
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }
    /**
     * @var string
     */
    public function setExpiryDate($value)
    {
        $this->expiryDate = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->dpan !== null) {
            $object->dpan = $this->dpan;
        }
        if ($this->expiryDate !== null) {
            $object->expiryDate = $this->expiryDate;
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
        if (property_exists($object, 'dpan')) {
            $this->dpan = $object->dpan;
        }
        if (property_exists($object, 'expiryDate')) {
            $this->expiryDate = $object->expiryDate;
        }
        return $this;
    }
}
