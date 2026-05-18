<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CurrencyConversion extends DataObject
{
    /**
     * @var bool|null
     */
    public ?bool $acceptedByUser = null;

    /**
     * @var DccProposal|null
     */
    public ?DccProposal $proposal = null;

    /**
     * @return bool|null
     */
    public function getAcceptedByUser(): ?bool
    {
        return $this->acceptedByUser;
    }

    /**
     * @param bool|null $value
     */
    public function setAcceptedByUser(?bool $value): void
    {
        $this->acceptedByUser = $value;
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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->acceptedByUser)) {
            $object->acceptedByUser = $this->acceptedByUser;
        }
        if (!is_null($this->proposal)) {
            $object->proposal = $this->proposal->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CurrencyConversion
    {
        parent::fromObject($object);
        if (property_exists($object, 'acceptedByUser')) {
            $this->acceptedByUser = $object->acceptedByUser;
        }
        if (property_exists($object, 'proposal')) {
            if (!is_object($object->proposal)) {
                throw new UnexpectedValueException('value \'' . print_r($object->proposal, true) . '\' is not an object');
            }
            $value = new DccProposal();
            $this->proposal = $value->fromObject($object->proposal);
        }
        return $this;
    }
}
