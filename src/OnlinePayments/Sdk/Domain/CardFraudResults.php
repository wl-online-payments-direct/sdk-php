<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CardFraudResults extends DataObject
{
    /**
     * @var string
     */
    public $avsResult = null;

    /**
     * @var string
     */
    public $cvvResult = null;

    /**
     * @var string
     */
    public $fraudServiceResult = null;

    /**
     * @return string
     */
    public function getAvsResult()
    {
        return $this->avsResult;
    }

    /**
     * @param string
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
     * @param string
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
     * @param string
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
        if (!is_null($this->avsResult)) {
            $object->avsResult = $this->avsResult;
        }
        if (!is_null($this->cvvResult)) {
            $object->cvvResult = $this->cvvResult;
        }
        if (!is_null($this->fraudServiceResult)) {
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
