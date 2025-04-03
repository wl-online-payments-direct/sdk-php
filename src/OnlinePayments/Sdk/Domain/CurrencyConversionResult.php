<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CurrencyConversionResult extends DataObject
{
    /**
     * @var string
     */
    public $result = null;

    /**
     * @var string
     */
    public $resultReason = null;

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param string
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
     * @param string
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
        if (!is_null($this->result)) {
            $object->result = $this->result;
        }
        if (!is_null($this->resultReason)) {
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
