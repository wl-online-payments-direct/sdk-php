<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class FraudResults extends DataObject
{
    /**
     * @var string
     */
    public $fraudServiceResult = null;

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
        if (property_exists($object, 'fraudServiceResult')) {
            $this->fraudServiceResult = $object->fraudServiceResult;
        }
        return $this;
    }
}
