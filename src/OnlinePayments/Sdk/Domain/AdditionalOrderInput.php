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
     * @var AirlineData|null
     */
    public ?AirlineData $airlineData = null;

    /**
     * @var LoanRecipient|null
     */
    public ?LoanRecipient $loanRecipient = null;

    /**
     * @var LodgingData|null
     */
    public ?LodgingData $lodgingData = null;

    /**
     * @var OrderTypeInformation|null
     */
    public ?OrderTypeInformation $typeInformation = null;

    /**
     * @return AirlineData|null
     */
    public function getAirlineData(): ?AirlineData
    {
        return $this->airlineData;
    }

    /**
     * @param AirlineData|null $value
     */
    public function setAirlineData(?AirlineData $value): void
    {
        $this->airlineData = $value;
    }

    /**
     * @return LoanRecipient|null
     */
    public function getLoanRecipient(): ?LoanRecipient
    {
        return $this->loanRecipient;
    }

    /**
     * @param LoanRecipient|null $value
     */
    public function setLoanRecipient(?LoanRecipient $value): void
    {
        $this->loanRecipient = $value;
    }

    /**
     * @return LodgingData|null
     */
    public function getLodgingData(): ?LodgingData
    {
        return $this->lodgingData;
    }

    /**
     * @param LodgingData|null $value
     */
    public function setLodgingData(?LodgingData $value): void
    {
        $this->lodgingData = $value;
    }

    /**
     * @return OrderTypeInformation|null
     */
    public function getTypeInformation(): ?OrderTypeInformation
    {
        return $this->typeInformation;
    }

    /**
     * @param OrderTypeInformation|null $value
     */
    public function setTypeInformation(?OrderTypeInformation $value): void
    {
        $this->typeInformation = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
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
    public function fromObject(object $object): AdditionalOrderInput
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
