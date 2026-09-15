<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CarRentalData extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $agreementNumber = null;

    /**
     * @var bool|null
     */
    public ?bool $cardholderNotified = null;

    /**
     * @var int|null
     */
    public ?int $chargesAmount = null;

    /**
     * @var string|null
     */
    public ?string $chargesCategory = null;

    /**
     * @var int|null
     */
    public ?int $distanceMeasure = null;

    /**
     * @var string|null
     */
    public ?string $distanceUnit = null;

    /**
     * @var string|null
     */
    public ?string $driverIdentificationNumber = null;

    /**
     * @var string|null
     */
    public ?string $driverTaxNumber = null;

    /**
     * @var CarRentalPickupReturnData|null
     */
    public ?CarRentalPickupReturnData $pickup = null;

    /**
     * @var int|null
     */
    public ?int $rentalRateAmount = null;

    /**
     * @var string|null
     */
    public ?string $rentalRateType = null;

    /**
     * @var string|null
     */
    public ?string $renterName = null;

    /**
     * @var CarRentalPickupReturnData|null
     */
    public ?CarRentalPickupReturnData $return = null;

    /**
     * @var bool|null
     */
    public ?bool $taxExemptIndicator = null;

    /**
     * @var string|null
     */
    public ?string $tollFreeNumber = null;

    /**
     * @var CarRentalVehicleData|null
     */
    public ?CarRentalVehicleData $vehicle = null;

    /**
     * @return string|null
     */
    public function getAgreementNumber(): ?string
    {
        return $this->agreementNumber;
    }

    /**
     * @param string|null $value
     */
    public function setAgreementNumber(?string $value): void
    {
        $this->agreementNumber = $value;
    }

    /**
     * @return bool|null
     */
    public function getCardholderNotified(): ?bool
    {
        return $this->cardholderNotified;
    }

    /**
     * @param bool|null $value
     */
    public function setCardholderNotified(?bool $value): void
    {
        $this->cardholderNotified = $value;
    }

    /**
     * @return int|null
     */
    public function getChargesAmount(): ?int
    {
        return $this->chargesAmount;
    }

    /**
     * @param int|null $value
     */
    public function setChargesAmount(?int $value): void
    {
        $this->chargesAmount = $value;
    }

    /**
     * @return string|null
     */
    public function getChargesCategory(): ?string
    {
        return $this->chargesCategory;
    }

    /**
     * @param string|null $value
     */
    public function setChargesCategory(?string $value): void
    {
        $this->chargesCategory = $value;
    }

    /**
     * @return int|null
     */
    public function getDistanceMeasure(): ?int
    {
        return $this->distanceMeasure;
    }

    /**
     * @param int|null $value
     */
    public function setDistanceMeasure(?int $value): void
    {
        $this->distanceMeasure = $value;
    }

    /**
     * @return string|null
     */
    public function getDistanceUnit(): ?string
    {
        return $this->distanceUnit;
    }

    /**
     * @param string|null $value
     */
    public function setDistanceUnit(?string $value): void
    {
        $this->distanceUnit = $value;
    }

    /**
     * @return string|null
     */
    public function getDriverIdentificationNumber(): ?string
    {
        return $this->driverIdentificationNumber;
    }

    /**
     * @param string|null $value
     */
    public function setDriverIdentificationNumber(?string $value): void
    {
        $this->driverIdentificationNumber = $value;
    }

    /**
     * @return string|null
     */
    public function getDriverTaxNumber(): ?string
    {
        return $this->driverTaxNumber;
    }

    /**
     * @param string|null $value
     */
    public function setDriverTaxNumber(?string $value): void
    {
        $this->driverTaxNumber = $value;
    }

    /**
     * @return CarRentalPickupReturnData|null
     */
    public function getPickup(): ?CarRentalPickupReturnData
    {
        return $this->pickup;
    }

    /**
     * @param CarRentalPickupReturnData|null $value
     */
    public function setPickup(?CarRentalPickupReturnData $value): void
    {
        $this->pickup = $value;
    }

    /**
     * @return int|null
     */
    public function getRentalRateAmount(): ?int
    {
        return $this->rentalRateAmount;
    }

    /**
     * @param int|null $value
     */
    public function setRentalRateAmount(?int $value): void
    {
        $this->rentalRateAmount = $value;
    }

    /**
     * @return string|null
     */
    public function getRentalRateType(): ?string
    {
        return $this->rentalRateType;
    }

    /**
     * @param string|null $value
     */
    public function setRentalRateType(?string $value): void
    {
        $this->rentalRateType = $value;
    }

    /**
     * @return string|null
     */
    public function getRenterName(): ?string
    {
        return $this->renterName;
    }

    /**
     * @param string|null $value
     */
    public function setRenterName(?string $value): void
    {
        $this->renterName = $value;
    }

    /**
     * @return CarRentalPickupReturnData|null
     */
    public function getReturn(): ?CarRentalPickupReturnData
    {
        return $this->return;
    }

    /**
     * @param CarRentalPickupReturnData|null $value
     */
    public function setReturn(?CarRentalPickupReturnData $value): void
    {
        $this->return = $value;
    }

    /**
     * @return bool|null
     */
    public function getTaxExemptIndicator(): ?bool
    {
        return $this->taxExemptIndicator;
    }

    /**
     * @param bool|null $value
     */
    public function setTaxExemptIndicator(?bool $value): void
    {
        $this->taxExemptIndicator = $value;
    }

    /**
     * @return string|null
     */
    public function getTollFreeNumber(): ?string
    {
        return $this->tollFreeNumber;
    }

    /**
     * @param string|null $value
     */
    public function setTollFreeNumber(?string $value): void
    {
        $this->tollFreeNumber = $value;
    }

    /**
     * @return CarRentalVehicleData|null
     */
    public function getVehicle(): ?CarRentalVehicleData
    {
        return $this->vehicle;
    }

    /**
     * @param CarRentalVehicleData|null $value
     */
    public function setVehicle(?CarRentalVehicleData $value): void
    {
        $this->vehicle = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->agreementNumber)) {
            $object->agreementNumber = $this->agreementNumber;
        }
        if (!is_null($this->cardholderNotified)) {
            $object->cardholderNotified = $this->cardholderNotified;
        }
        if (!is_null($this->chargesAmount)) {
            $object->chargesAmount = $this->chargesAmount;
        }
        if (!is_null($this->chargesCategory)) {
            $object->chargesCategory = $this->chargesCategory;
        }
        if (!is_null($this->distanceMeasure)) {
            $object->distanceMeasure = $this->distanceMeasure;
        }
        if (!is_null($this->distanceUnit)) {
            $object->distanceUnit = $this->distanceUnit;
        }
        if (!is_null($this->driverIdentificationNumber)) {
            $object->driverIdentificationNumber = $this->driverIdentificationNumber;
        }
        if (!is_null($this->driverTaxNumber)) {
            $object->driverTaxNumber = $this->driverTaxNumber;
        }
        if (!is_null($this->pickup)) {
            $object->pickup = $this->pickup->toObject();
        }
        if (!is_null($this->rentalRateAmount)) {
            $object->rentalRateAmount = $this->rentalRateAmount;
        }
        if (!is_null($this->rentalRateType)) {
            $object->rentalRateType = $this->rentalRateType;
        }
        if (!is_null($this->renterName)) {
            $object->renterName = $this->renterName;
        }
        if (!is_null($this->return)) {
            $object->return = $this->return->toObject();
        }
        if (!is_null($this->taxExemptIndicator)) {
            $object->taxExemptIndicator = $this->taxExemptIndicator;
        }
        if (!is_null($this->tollFreeNumber)) {
            $object->tollFreeNumber = $this->tollFreeNumber;
        }
        if (!is_null($this->vehicle)) {
            $object->vehicle = $this->vehicle->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CarRentalData
    {
        parent::fromObject($object);
        if (property_exists($object, 'agreementNumber')) {
            $this->agreementNumber = $object->agreementNumber;
        }
        if (property_exists($object, 'cardholderNotified')) {
            $this->cardholderNotified = $object->cardholderNotified;
        }
        if (property_exists($object, 'chargesAmount')) {
            $this->chargesAmount = $object->chargesAmount;
        }
        if (property_exists($object, 'chargesCategory')) {
            $this->chargesCategory = $object->chargesCategory;
        }
        if (property_exists($object, 'distanceMeasure')) {
            $this->distanceMeasure = $object->distanceMeasure;
        }
        if (property_exists($object, 'distanceUnit')) {
            $this->distanceUnit = $object->distanceUnit;
        }
        if (property_exists($object, 'driverIdentificationNumber')) {
            $this->driverIdentificationNumber = $object->driverIdentificationNumber;
        }
        if (property_exists($object, 'driverTaxNumber')) {
            $this->driverTaxNumber = $object->driverTaxNumber;
        }
        if (property_exists($object, 'pickup')) {
            if (!is_object($object->pickup)) {
                throw new UnexpectedValueException('value \'' . print_r($object->pickup, true) . '\' is not an object');
            }
            $value = new CarRentalPickupReturnData();
            $this->pickup = $value->fromObject($object->pickup);
        }
        if (property_exists($object, 'rentalRateAmount')) {
            $this->rentalRateAmount = $object->rentalRateAmount;
        }
        if (property_exists($object, 'rentalRateType')) {
            $this->rentalRateType = $object->rentalRateType;
        }
        if (property_exists($object, 'renterName')) {
            $this->renterName = $object->renterName;
        }
        if (property_exists($object, 'return')) {
            if (!is_object($object->return)) {
                throw new UnexpectedValueException('value \'' . print_r($object->return, true) . '\' is not an object');
            }
            $value = new CarRentalPickupReturnData();
            $this->return = $value->fromObject($object->return);
        }
        if (property_exists($object, 'taxExemptIndicator')) {
            $this->taxExemptIndicator = $object->taxExemptIndicator;
        }
        if (property_exists($object, 'tollFreeNumber')) {
            $this->tollFreeNumber = $object->tollFreeNumber;
        }
        if (property_exists($object, 'vehicle')) {
            if (!is_object($object->vehicle)) {
                throw new UnexpectedValueException('value \'' . print_r($object->vehicle, true) . '\' is not an object');
            }
            $value = new CarRentalVehicleData();
            $this->vehicle = $value->fromObject($object->vehicle);
        }
        return $this;
    }
}
