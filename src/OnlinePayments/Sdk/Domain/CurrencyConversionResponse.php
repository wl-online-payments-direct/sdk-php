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
     * @var string|null
     */
    public ?string $dccSessionId = null;

    /**
     * @var DccProposal|null
     */
    public ?DccProposal $proposal = null;

    /**
     * @var CurrencyConversionResult|null
     */
    public ?CurrencyConversionResult $result = null;

    /**
     * @return string|null
     */
    public function getDccSessionId(): ?string
    {
        return $this->dccSessionId;
    }

    /**
     * @param string|null $value
     */
    public function setDccSessionId(?string $value): void
    {
        $this->dccSessionId = $value;
    }

    /**
     * @return DccProposal|null
     */
    public function getProposal(): ?DccProposal
    {
        return $this->proposal;
    }

    /**
     * @param DccProposal|null $value
     */
    public function setProposal(?DccProposal $value): void
    {
        $this->proposal = $value;
    }

    /**
     * @return CurrencyConversionResult|null
     */
    public function getResult(): ?CurrencyConversionResult
    {
        return $this->result;
    }

    /**
     * @param CurrencyConversionResult|null $value
     */
    public function setResult(?CurrencyConversionResult $value): void
    {
        $this->result = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
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
    public function fromObject(object $object): CurrencyConversionResponse
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
