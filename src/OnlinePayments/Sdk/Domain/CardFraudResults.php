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
class CardFraudResults extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $avsResult;

    /**
     * @var string
     */
    private $cvvResult;

    /**
     * @var string
     */
    private $fraudServiceResult;

    // Methods
    /**
     * @return string
     */
    public function getAvsResult()
    {
        return $this->avsResult;
    }
    /**
     * @var string
     */
    public function setAvsResult($value)
    {
        $this->avsResult = $value;
    }

    /**
     * @return string
     */
    public function getCvvResult()
    {
        return $this->cvvResult;
    }
    /**
     * @var string
     */
    public function setCvvResult($value)
    {
        $this->cvvResult = $value;
    }

    /**
     * @return string
     */
    public function getFraudServiceResult()
    {
        return $this->fraudServiceResult;
    }
    /**
     * @var string
     */
    public function setFraudServiceResult($value)
    {
        $this->fraudServiceResult = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->avsResult !== null) {
            $object->avsResult = $this->avsResult;
        }
        if ($this->cvvResult !== null) {
            $object->cvvResult = $this->cvvResult;
        }
        if ($this->fraudServiceResult !== null) {
            $object->fraudServiceResult = $this->fraudServiceResult;
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
        if (property_exists($object, 'avsResult')) {
            $this->avsResult = $object->avsResult;
        }
        if (property_exists($object, 'cvvResult')) {
            $this->cvvResult = $object->cvvResult;
        }
        if (property_exists($object, 'fraudServiceResult')) {
            $this->fraudServiceResult = $object->fraudServiceResult;
        }
        return $this;
    }
}
