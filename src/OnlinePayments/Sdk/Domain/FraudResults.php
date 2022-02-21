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
class FraudResults extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $fraudServiceResult;

    // Methods
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
        if (property_exists($object, 'fraudServiceResult')) {
            $this->fraudServiceResult = $object->fraudServiceResult;
        }
        return $this;
    }
}
