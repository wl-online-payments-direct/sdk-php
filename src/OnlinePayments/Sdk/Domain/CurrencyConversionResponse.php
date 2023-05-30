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
class CurrencyConversionResponse extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $dccSessionId;

    /**
     * @var DccProposal
     */
    private $proposal;

    /**
     * @var CurrencyConversionResult
     */
    private $result;

    // Methods
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
     * @return DccProposal
     */
    public function getProposal()
    {
        return $this->proposal;
    }
    /**
     * @var DccProposal
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
     * @var CurrencyConversionResult
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
        if ($this->dccSessionId !== null) {
            $object->dccSessionId = $this->dccSessionId;
        }
        if ($this->proposal !== null) {
            $object->proposal = $this->proposal->toObject();
        }
        if ($this->result !== null) {
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
