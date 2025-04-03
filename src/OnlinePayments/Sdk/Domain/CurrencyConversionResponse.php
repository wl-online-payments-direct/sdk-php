<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CurrencyConversionResponse extends DataObject
{
    /**
     * @var string
     */
    public $dccSessionId = null;

    /**
     * @var DccProposal
     */
    public $proposal = null;

    /**
     * @var CurrencyConversionResult
     */
    public $result = null;

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
     * @return DccProposal
     */
    public function getProposal()
    {
        return $this->proposal;
    }

    /**
     * @param DccProposal
     */
    public function setProposal($value)
    {
        $this->proposal = $value;
    }

    /**
     * @return CurrencyConversionResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param CurrencyConversionResult
     */
    public function setResult($value)
    {
        $this->result = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->dccSessionId)) {
            $object->dccSessionId = $this->dccSessionId;
        }
        if (!is_null($this->proposal)) {
            $object->proposal = $this->proposal->toObject();
        }
        if (!is_null($this->result)) {
            $object->result = $this->result->toObject();
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
        if (property_exists($object, 'dccSessionId')) {
            $this->dccSessionId = $object->dccSessionId;
        }
        if (property_exists($object, 'proposal')) {
            if (!is_object($object->proposal)) {
                throw new UnexpectedValueException('value \'' . print_r($object->proposal, true) . '\' is not an object');
            }
            $value = new DccProposal();
            $this->proposal = $value->fromObject($object->proposal);
        }
        if (property_exists($object, 'result')) {
            if (!is_object($object->result)) {
                throw new UnexpectedValueException('value \'' . print_r($object->result, true) . '\' is not an object');
            }
            $value = new CurrencyConversionResult();
            $this->result = $value->fromObject($object->result);
        }
        return $this;
    }
}
