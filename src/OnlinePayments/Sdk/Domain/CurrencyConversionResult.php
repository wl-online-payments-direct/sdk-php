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
class CurrencyConversionResult extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $result;

    /**
     * @var string
     */
    private $resultReason;

    // Methods
    /**
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }
    /**
     * @var string
     */
    public function setResult($value)
    {
        $this->result = $value;
    }

    /**
     * @return string
     */
    public function getResultReason()
    {
        return $this->resultReason;
    }
    /**
     * @var string
     */
    public function setResultReason($value)
    {
        $this->resultReason = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->result !== null) {
            $object->result = $this->result;
        }
        if ($this->resultReason !== null) {
            $object->resultReason = $this->resultReason;
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
        if (property_exists($object, 'result')) {
            $this->result = $object->result;
        }
        if (property_exists($object, 'resultReason')) {
            $this->resultReason = $object->resultReason;
        }
        return $this;
    }
}
