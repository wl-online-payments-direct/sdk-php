<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class AdditionalOrderInput extends DataObject
{
    /**
     * @var AirlineData
     */
    public $airlineData = null;

    /**
     * @var LoanRecipient
     */
    public $loanRecipient = null;

    /**
     * @var LodgingData
     */
    public $lodgingData = null;

    /**
     * @var OrderTypeInformation
     */
    public $typeInformation = null;

    /**
     * @return AirlineData
     */
    public function getAirlineData()
    {
        return $this->airlineData;
    }

    /**
     * @param AirlineData
     */
    public function setAirlineData($value)
    {
        $this->airlineData = $value;
    }

    /**
     * @return LoanRecipient
     */
    public function getLoanRecipient()
    {
        return $this->loanRecipient;
    }

    /**
     * @param LoanRecipient
     */
    public function setLoanRecipient($value)
    {
        $this->loanRecipient = $value;
    }

    /**
     * @return LodgingData
     */
    public function getLodgingData()
    {
        return $this->lodgingData;
    }

    /**
     * @param LodgingData
     */
    public function setLodgingData($value)
    {
        $this->lodgingData = $value;
    }

    /**
     * @return OrderTypeInformation
     */
    public function getTypeInformation()
    {
        return $this->typeInformation;
    }

    /**
     * @param OrderTypeInformation
     */
    public function setTypeInformation($value)
    {
        $this->typeInformation = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->airlineData)) {
            $object->airlineData = $this->airlineData->toObject();
        }
        if (!is_null($this->loanRecipient)) {
            $object->loanRecipient = $this->loanRecipient->toObject();
        }
        if (!is_null($this->lodgingData)) {
            $object->lodgingData = $this->lodgingData->toObject();
        }
        if (!is_null($this->typeInformation)) {
            $object->typeInformation = $this->typeInformation->toObject();
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
        if (property_exists($object, 'airlineData')) {
            if (!is_object($object->airlineData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->airlineData, true) . '\' is not an object');
            }
            $value = new AirlineData();
            $this->airlineData = $value->fromObject($object->airlineData);
        }
        if (property_exists($object, 'loanRecipient')) {
            if (!is_object($object->loanRecipient)) {
                throw new UnexpectedValueException('value \'' . print_r($object->loanRecipient, true) . '\' is not an object');
            }
            $value = new LoanRecipient();
            $this->loanRecipient = $value->fromObject($object->loanRecipient);
        }
        if (property_exists($object, 'lodgingData')) {
            if (!is_object($object->lodgingData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->lodgingData, true) . '\' is not an object');
            }
            $value = new LodgingData();
            $this->lodgingData = $value->fromObject($object->lodgingData);
        }
        if (property_exists($object, 'typeInformation')) {
            if (!is_object($object->typeInformation)) {
                throw new UnexpectedValueException('value \'' . print_r($object->typeInformation, true) . '\' is not an object');
            }
            $value = new OrderTypeInformation();
            $this->typeInformation = $value->fromObject($object->typeInformation);
        }
        return $this;
    }
}
