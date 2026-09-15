<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class UpdateAuthorizationAdditionalDataRequest extends DataObject
{
    /**
     * @var CarRentalData|null
     */
    public ?CarRentalData $carRentalData = null;

    /**
     * @return CarRentalData|null
     */
    public function getCarRentalData(): ?CarRentalData
    {
        return $this->carRentalData;
    }

    /**
     * @param CarRentalData|null $value
     */
    public function setCarRentalData(?CarRentalData $value): void
    {
        $this->carRentalData = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->carRentalData)) {
            $object->carRentalData = $this->carRentalData->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): UpdateAuthorizationAdditionalDataRequest
    {
        parent::fromObject($object);
        if (property_exists($object, 'carRentalData')) {
            if (!is_object($object->carRentalData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->carRentalData, true) . '\' is not an object');
            }
            $value = new CarRentalData();
            $this->carRentalData = $value->fromObject($object->carRentalData);
        }
        return $this;
    }
}
