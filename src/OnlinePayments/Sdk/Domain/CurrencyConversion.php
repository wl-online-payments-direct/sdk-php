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
     * @var bool
     */
    public $acceptedByUser = null;

    /**
     * @var DccProposal
     */
    public $proposal = null;

    /**
     * @return bool
     */
    public function getAcceptedByUser()
    {
        return $this->acceptedByUser;
    }

    /**
     * @param bool
     */
    public function setAcceptedByUser($value)
    {
        $this->acceptedByUser = $value;
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
     * @return object
     */
    public function toObject()
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
    public function fromObject($object)
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
