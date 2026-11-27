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
     * @param bool|null $value
     * @return $this
     */
    public function withAcceptedByUser(?bool $value): static
    {
        $this->acceptedByUser = $value;
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
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->acceptedByUser !== null) {
            $object->acceptedByUser = $this->acceptedByUser;
        }
        if ($this->proposal !== null) {
            $object->proposal = $this->proposal->toObject();
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
