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
     * @param string|null $value
     * @return $this
     */
    public function withDccSessionId(?string $value): static
    {
        $this->dccSessionId = $value;
        return $this;
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
     * @param DccProposal|null $value
     * @return $this
     */
    public function withProposal(?DccProposal $value): static
    {
        $this->proposal = $value;
        return $this;
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
     * @param CurrencyConversionResult|null $value
     * @return $this
     */
    public function withResult(?CurrencyConversionResult $value): static
    {
        $this->result = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
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
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    #[\Override]
    public function fromObject(object $object): static
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
